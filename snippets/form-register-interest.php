
                    <div class="register-interest-models">
                        <div class="input-box">
                            <span class="input-prefix">@</span>
                            <input id="input-instagram_username" name="instagram_username"
                                class="form-control input-instagram_username" placeholder="Instagram Username"></input>
                        </div>
                        <div class="submit-button-box">
                            <button id="message-submit submit-register-interest" class="submit button submit-register-interest">Register Interest</button>
                        </div>
                    </div>
                    <!-- <p id="status">Hello you.... ;)</p> -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('body').on('click', '#submit-register-interest', function () {

            if ($("#input-instagram_username").val().length < 1) {
                $("#input-instagram_username").addClass("input-bad");
            } else {

                document.getElementById("message-submit").disabled = true;
                $('#message-submit').text('⌛ Wait a moment...');
                $("#input-message").removeClass("input-bad");

                if ($('.input-name').val() === '') {
                    cvf_form_validate($('.input-name'));

                } else if ($('.input-model').val() === '') {
                    cvf_form_validate($('.model_name'));

                } else if ($('.input-email').val() === '') {
                    cvf_form_validate($('.input-email'));

                } else if ($('.input-message').val() === '') {
                    cvf_form_validate($('.input-instagram_username'));

                } else {
                    var data = {
                        'action': 'cvf_send_message',
                        'name': $('.input-name').val(),
                        'email': $('.input-email').val(),
                        'model': $('.input-model').val(),
                        'message': $('.input-instagram_username').val()
                    };
                    var ajaxurl = 'https://www.flames.agency/wp-admin/admin-ajax.php ';
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
                            $('.input-instagram_username').val('');

                        }
                    });
                }
            }
        });
    });
</script>


<script>
    var input = document.querySelector('.input-instagram_username');
    input.focus();
    input.select();
</script>
