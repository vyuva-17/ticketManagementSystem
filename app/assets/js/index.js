$(document).ready(function () {
    var location = window.location.href;
    console.log('log', location.split('?')['1']);
    console.log(localStorage.getItem('userDetails'));
    if(localStorage.getItem('userDetails') && location.split('?')['1'] != 'addTicket'){
      window.location.href ="http://localhost/ticketManagementSystem/app/index.php?addTicket";
    } else if(location.split('?')['1'] != 'logout' && !localStorage.getItem('userDetails')){
      window.location.href ="http://localhost/ticketManagementSystem/app/index.php?logout";
    }
 
    if (location.split('?')['1'] == '' || location.split('?')['1'] == 'logout' || typeof(location.split('?')['1']) == 'undefined') {
      $(".menu").attr('style', 'display :none!important');
      if(window.innerWidth >768){
        $('.nav-container').attr('style', 'justify-content: unset!important')
      } else{
        $('.navbar').attr('style', 'justify-content: unset!important')

      }
      $('.buttomIcon').attr('style', 'display :none!important')
    } else {
      $(".menu").attr('style', 'display :block!important');

    }
  }); 
  function localSessionDestory(){
      localStorage.removeItem('userDetails');
    }