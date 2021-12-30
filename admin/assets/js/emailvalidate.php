<script>
function checkEmailValidation(email,btn,type,errormsg) {
      var email = $('#'+email).val();
      if (email != '') {

        $.ajax({
          url: "<?php echo base_url(); ?>Jobseeker/check_email_avalibility",
          method: "POST",
          data: {
            email: email,
            role:type,
          },
          success: function(data) {

            if (data == 0) {
              $('#'+btn).prop('disabled', true);
              $('#'+errormsg).html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>');

            } else {

              $('#'+errormsg).html('');
              $('#'+btn).removeAttr("disabled");
            }
          }

        });
      }
    }

    </script>