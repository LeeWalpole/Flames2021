<style>
  .display-none {
    display: none;
  }
</style>




<!-- The Modal -->
<div id="modal-message-request" class="nav_modal">

  <!-- Modal content -->
  <div class="modal-menu-content">

    <aside class="message-request" data-theme="light">
      <!-- <header>
                <h5>Send Message</h5>
            </header> -->
      <?php // echo do_shortcode('[wpforms id="807"]'); ?>

      <?php // echo do_shortcode('[contact-form-7 id="808" title="Untitled"]'); ?>

      <?php // include("xxx-form.php"); ?>


      <div id="contact_form" class="bg-white">

        <style>
          :root {
            --textarea-height: 100px;
          }

          @media (min-width:768px) {
            :root {
              --textarea-height: 150px;
            }
          }

          .form-buttons {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-right: var(--padding-small);
          }

          #status {
            height: var(--button-height);
            line-height: var(--button-height);
            font-size: var(--xsmall);
            color: var(--color-1b);
          }

          #contact_form textarea {
            height: var(--textarea-height);
            transition: ease-in-out all 0.33s;
          }

          #status {
            transition: ease-in-out all 0.33s;
            margin-left: var(--padding-small);
          }

          #contact_form textarea.input-bad {
            border: 2px solid red !important;
          }


          #contact_form textarea.input-good {
            border: 2px solid green !important;
          }

          #status.fade_in_status {
            opacity: 1;
          }
        </style>

        <!-- 
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control input-name" placeholder="Enter Your Name" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control input-email" placeholder="Enter Your Email" />
    </div> -->

        <textarea id="input-message" name="message" class="form-control input-message" rows="4"
          placeholder="Enter Your Message"></textarea>

        <input type="hidden" name="email" class="form-control input-email" value="noemail@test.com"
          placeholder="Your Email" />

        <input type="hidden" name="model_name" class="input-model" value="<?php echo esc_attr(get_the_title()); ?>" />

        <div class="form-buttons">
          <button id="message-submit" class="submit button">Message <?php echo esc_attr(get_the_title()); ?></button>

          <p id="status"></p>

        </div>

      </div>




      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




      <script type="text/javascript">
        jQuery(document).ready(function ($) {


          // $('#input-message').on('keyup', function () {
          //   if ('#input-message'.value.length < 1 ) {
          //     $('#message-submit').attr('disabled','disabled');
          //   } else {
          //     $('#message-submit').attr('disabled','disabled');
          //   }
          // });

          $('body').on('click', '.submit', function () {

            if ($("#input-message").val().length < 1) {
              $("#input-message").addClass("input-bad");
            } else {

              document.getElementById("message-submit").disabled = true;
              $('#message-submit').text('⌛ One moment...');
              $("#input-message").removeClass("input-bad");

              if ($('.input-name').val() === '') {
                cvf_form_validate($('.input-name'));

              } else if ($('.input-model').val() === '') {
                cvf_form_validate($('.model_name'));

              } else if ($('.input-email').val() === '') {
                cvf_form_validate($('.input-email'));

              } else if ($('.input-message').val() === '') {
                cvf_form_validate($('.input-message'));

              } else {
                var data = {
                  'action': 'cvf_send_message',
                  'name': $('.input-name').val(),
                  'email': $('.input-email').val(),
                  'model': $('.input-model').val(),
                  'message': $('.input-message').val()
                };
                var ajaxurl = '<?php echo admin_url('admin-ajax.php '); ?>';
                $.post(ajaxurl, data, function (response) {
                  // $("#status").addClass("bg-offwhite");
                  // $('#status').text('Please wait...');
                  if (response === 'success') {
                    // alert('Message Sent Successfully!');
                    $("#status").addClass("modal-menu-close");
                    $('#status').text('Return to profile.');
                    // $('#status').append( "all done" );
                    // $('#status').text('Message sent.');
                    $('#message-submit').text('Message sent 🙂');
                    $('.input-name').val('');
                    $('.input-model').val('');
                    $('.input-email').val('');
                    $('.input-message').val('');

                  }
                });
              }
            }
          });
        });
      </script>



    </aside>

    <?php /*
God bless WP Form's smart tags. Now all we have to do is dynamically set the fom fields to "hidden" and hide using CSS
http://localhost:10008/wp-admin/admin.php?page=wpforms-builder&view=fields&form_id=1081

*/?>

    <!-- <script>
            document.getElementById('wpforms-807-field_1').type = 'hidden';
            document.getElementById('wpforms-807-field_5').type = 'hidden';
            document.getElementById('wpforms-807-field_4').type = 'hidden';
        </script> -->

    <?php 
$whatsapp_number = "447554222642";
$model_name = get_the_title();
// $seller_id = get_the_author_meta('ID');
// $buyer_id = get_current_user_id();
// $buyer_nickname = get_the_author_meta("nickname", $buyer_id) ?: ""; // what we'll be using for display name
// $buyer_username = get_the_author_meta("user_nicename", $buyer_id); // what we'll be using for display name
$automessage = "I am interested in ".$model_name.""; ?>

    <ul class="nav-options bg-whatsapp">
      <li class="bg-whatsapp">
        <a href="https://wa.me/<?php echo $whatsapp_number; ?>?text=<?php echo urlencode($automessage); ?>"
          target="_blank">
          <p>WhatsApp Request</p>
          <i class="fab fa-whatsapp"></i>
        </a>
      </li>
    </ul>


    <ul class="nav-options">
      <li>
        <a href="#!" class="modal-menu-close">
          <p>Cancel</p>
          <i class="fas fa-times"></i>
        </a>
      </li>
    </ul>

  </div>

</div>