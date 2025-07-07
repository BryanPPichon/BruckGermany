function validateRecaptcha() {
        var response = grecaptcha.getResponse();
        if (response.length === 0) {
          var message='<p style="color:#FFF">Favor de marcar la casilla de verificación para continuar</p>';
          //alert("not validated");
          $('#contact_message').empty()
          $(message).appendTo('#contact_message');
          return false;
        } else {
          //alert("validated");
          return true;
        }
      }