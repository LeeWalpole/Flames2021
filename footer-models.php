<script>
    // adapterd from http://git.io/blingjs
    var $ = document.querySelectorAll.bind(document);

    Node.prototype.on = window.on = function (name, fn) {
      this.addEventListener(name, fn);
      return this;
    };

    NodeList.prototype.__proto__ = Array.prototype;

    NodeList.prototype.on = NodeList.prototype.addEventListener = function (name, fn) {
      this.forEach(function (el) {
        el.on(name, fn);
      });
      return this;
    };

    // end of bling.js ----

    // a temp value to cache *what* we're about to show
    var target = null;

    // collect all the tabs
    var tabs = $('.profile-tab-link').on('click', function () {
      target = $(this.hash)[0];
      target.id = '';
      if (location.hash === this.hash) {
        setTimeout(update);
      }
    }).map(function (el) {
      el.tabindex = 0;
      return el;
    });

    // get an array of the panel ids (from the anchor hash)
    var targets = tabs.map(function (el) {
      return el.hash;
    });

    // use those ids to get a jQuery collection of panels
    var panels = $(targets.join(',')).map(function (el) {
      // keep a copy of what the original el.id was
      el.dataset.old = el.id;
      return el;
    });

    function update() {
      if (target) {
        target.id = target.dataset.old;
        target = null;
      }

      var hash = window.location.hash;
      if (targets.indexOf(hash) !== -1) {
        return show(hash);
      }

      if (!hash) {
        show();
      }
    }

    function show(id) {
      // if no value was given, let's take the first panel
      if (!id) {
        id = targets[0];
      }
      // remove the selected class from the tabs,
      // and add it back to the one the user selected
      tabs.forEach(function (el) {
        var match = el.hash === id;
        el.classList[match ? 'add' : 'remove']('selected');
        el.setAttribute('aria-selected', match);
      });

      // now hide all the panels, then filter to
      // the one we're interested in, and show it
      panels.forEach(function (el) {
        var match = '#' + el.id === id;
        el.style.display = match ? '' : 'none';
        el.setAttribute('aria-hidden', !match);
      });
    }

    window.addEventListener('hashchange', update);

    // initialise
    if (targets.indexOf(window.location.hash) !== -1) {
      update();
    } else {
      show();
    }
  </script>


<!-- Lightbox Below -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>
<script>
    var lightbox = {

        config: {
            gallery: '.gallery', // class of gallery
            galleryImage: '.image', // class of image within gallery
            lightboxID: '#lightbox', // id of lighbox to be created
            lightboxEnabledClass: 'lightbox-enabled', // class of body when lighbox is enabled
            buttonsExit: true, // include exit div?
            buttonsNavigation: true, // include navigation divs?
            containImgMargin: 0 // margin top and bottom to contain img
        },

        init: function (config) {

            // merge config defaults with init config
            $.extend(lightbox.config, config);

            // on click
            $(lightbox.config.gallery).find('a').on('click', function (event) {
                event.preventDefault();
                lightbox.createLightbox($(this));
            });

        },

        // create lightbox
        createLightbox: function ($element) {

            // add body class
            $('body').addClass(lightbox.config.lightboxEnabledClass);

            // remove lightbox if exists
            if ($(lightbox.config.lightboxID).length) {
                $(lightbox.config.lightboxID).remove();
            }

            // add new lightbox
            $('body').append('<div id="' + lightbox.config.lightboxID.substring(1) +
                '"><div class="slider"></div></div>');

            // add exit div if required
            if (lightbox.config.buttonsExit) {
                $(lightbox.config.lightboxID).append('<div class="exit"></div>');
            }

            // add navigation divs if required
            if (lightbox.config.buttonsNavigation) {
                $(lightbox.config.lightboxID).append(
                    '<div class="prev"></div><div class="next"><i class="fa-solid fa-circle-chevron-right"></i></div>'
                    );
            }

            // now populate lightbox
            lightbox.populateLightbox($element);

        },

        // populate lightbox
        populateLightbox: function ($element) {

            var thisgalleryImage = $element.closest(lightbox.config.galleryImage);
            var thisIndex = thisgalleryImage.index();

            // add slides
            $(lightbox.config.gallery).children(lightbox.config.galleryImage).each(function () {
                $('#lightbox .slider').append(
                    '<div class="slide"><div class="frame"><div class="vertical_align"><img src="' +
                    $(this).find('a').attr('href') + '"></div></div></div>');
            });

            // now initalise flickity
            lightbox.initFlickity(thisIndex);

        },

        // initalise flickity
        initFlickity: function (thisIndex) {

            $(lightbox.config.lightboxID).find('.slider')
                .flickity({ // more options: http://flickity.metafizzy.co
                    cellAlign: 'left',
                    resize: true,
                    wrapAround: true,
                    prevNextButtons: false,
                    pageDots: false,
                    initialIndex: thisIndex
                });

            // make sure image isn't too tall
            lightbox.containImg();

            // on window resize make sure image isn't too tall
            $(window).on('resize', function () {
                lightbox.containImg();
            });

            // buttons
            var $slider = $(lightbox.config.lightboxID).find('.slider').flickity();

            $(lightbox.config.lightboxID).find('.exit').on('click', function () {
                $('body').removeClass('lightbox-enabled');
                setTimeout(function () {
                    $slider.flickity('destroy');
                    $(lightbox.config.lightboxID).remove();
                }, 0);
            });

            $(lightbox.config.lightboxID).find('.prev').on('click', function () {
                $slider.flickity('previous');
            });

            $(lightbox.config.lightboxID).find('.next').on('click', function () {
                $slider.flickity('next');
            });

            // keyboard
            $(document).keyup(function (event) {
                if ($('body').hasClass('lightbox-enabled')) {
                    switch (event.keyCode) {
                        case 27:
                            $(lightbox.config.lightboxID).find('.exit').click();
                            break;
                        case 37:
                            $(lightbox.config.lightboxID).find('.prev').click();
                            break;
                        case 39:
                            $(lightbox.config.lightboxID).find('.next').click();
                            break;
                    }
                }
            });

        },

        // contain lightbox images
        containImg: function () {
            $(lightbox.config.lightboxID).find('img').css('maxHeight', ($(document).height() - lightbox
                .config.containImgMargin));
        }

    };

    // initalise lightbox
    $(document).ready(function () {
        lightbox.init({
            containImgMargin: 100
        });
    });
</script>


<?php /*
<?php if(is_singular( 'models' )) : ?>
<script>
    // Get the button that opens the nav_modal
    var nav_modal_button = document.querySelectorAll(".nav_modal-button");

    // All page nav_modals
    var nav_modals = document.querySelectorAll('.nav_modal');

    // Get the <span> element that closes the nav_modal
    var spans = document.getElementsByClassName("modal-menu-close");

    // When the user clicks the button, open the nav_modal
    for (var i = 0; i < nav_modal_button.length; i++) {
        nav_modal_button[i].onclick = function (e) {
            e.preventDefault();
            nav_modal = document.querySelector(e.target.getAttribute("href"));
            nav_modal.classList.add("slide-up");
        }
    }

    // When the user clicks on <span> (x), close the nav_modal
    for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function () {
            for (var index in nav_modals) {
                //   if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].style.display = "none";    
                if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].classList.remove("slide-up");
            }
        }
    }

    // When the user clicks anywhere outside of the nav_modal, close it
    window.onclick = function (event) {
        if (event.target.classList.contains('nav_modal')) {
            for (var index in nav_modals) {
                //   if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].style.display = "none";  
                if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].classList.remove("slide-up");
            }
        }
    }
</script>

<script>
    let popup_triggers = document.querySelectorAll(".popup-trigger");
    [].forEach.call(popup_triggers, function (popup_trigger) {
        let popup_target = popup_trigger.getAttribute('data-target-id');
        popup_trigger.onclick = function () {
            console.log(popup_target);
            document.getElementById(popup_target).scrollIntoView();
        };
    });
</script>
<?php endif; ?>
*/ ?>