<style>
    .display-none {
        display: none;
    }
</style>


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
        $('#message-submit').text('??? One moment...');
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
              $('#message-submit').text('Message sent ????');
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