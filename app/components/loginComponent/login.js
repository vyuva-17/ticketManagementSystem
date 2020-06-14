                               /****************Introduction**************/
$(document).ready(function () {
    /*sub call for post the data using fetch api*/
    $('#signInForm').submit(function(e) {
      console.log('e',e);
      e.preventDefault();
      if(validation()== true){
      postData()

      }
    })
  })
  /* Form Validation */
  function validation() {
    if (emailvalidation() == true) {
      if (passwordVlidation() == true) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
  /*Email Validation*/
  function emailvalidation() {
    if ($('#email').val() == '') {
      $('.hdEmailId').attr('style', 'display:block')
      setTimeout(function () { 
        $('#email').attr('style', 'border-color: red!important;color: red!important');
        $('.hdEmailId').attr('style', 'display:none'); 
      }, 3000);
      $('#email').focus();
      return false;
    } else {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if (!emailReg.test($('#email').val())) {
        $('.hdEmailId').attr('style', 'display:block')
        setTimeout(function () { $('.hdEmailId').attr('style', 'display:none') }, 3000);
        $('#email').focus();
        return false;
      } else {
        return true;
      }
    }

  }
  /* Password Validation*/
  function passwordVlidation() {
    if ($('#password').val() == '') {
      $('.hdPassword').attr('style', 'display:block')
      setTimeout(function () { 
        $('#password').attr('style', 'border-color: red!important;color: red!important');
        $('.hdPassword').attr('style', 'display:none'); 
      }, 3000);
      $('#password').focus();
      return false;
    } else {
      return true;
    }
  }
  /* fetch to post the form data using ajax call to avoid page loading while passing and calling the data from server*/
  function postData(){
    const formData  = new FormData(document.getElementById('signInForm'));
    fetch('phpDataHandling/formResponse.php?function=post', {
      method: 'POST',
      body: formData
    })
    .then(fetchResponse=>{
      if(!fetchResponse.ok){
        console.error('Check Respone');
      }
      return fetchResponse;
      console.log("formData",formData);
    })
    .then(validResponse=>{
      return validResponse.json();
    })
    .then(loginResponse=>{
      console.log('Response',loginResponse);
      localStorage.setItem('userDetails',JSON.stringify(loginResponse))
      location.replace("http://localhost/ticketManagementSystem/app/index.php?addTicket");
    })
  }

                                              /****End Off****/