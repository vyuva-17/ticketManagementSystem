/*External JS whiche need to be executed for landing page*/
/****   Introduction  *****/
/* inside $documet .ready function script will execute on load of the js due to js defer other wise it will load on window document load */
$(document).ready(function () {
  /******Session Management******/
  /*Code is mentioned below will take responsile for session management for whole project it will check wether the localsoreage of logged in user is exist or not if it existes then it will redirect to add ticket page  else it will redirect to logout page for sign in again*/
  var location = window.location.href;
  console.log('log', location.split('?')['1']);
  console.log(localStorage.getItem('userDetails'));
  if(localStorage.getItem('userDetails') &&  typeof(location.split('?')['1']) == 'undefined'){
    window.location.href ="http://localhost/ticketManagementSystem/app/index.php?addTicket";
  } else if(location.split('?')['1'] != 'logout' && !localStorage.getItem('userDetails')){
    window.location.href ="http://localhost/ticketManagementSystem/app/index.php?logout";
  }
    /********* Dynamic Data Binding **********/ 
    /*code below will handle dynamic css for rendering content on basis of varoius constraints*/
  if (location.split('?')['1'] == '' || location.split('?')['1'] == 'logout' || typeof(location.split('?')['1']) == 'undefined') {
    $(".menu").attr('style', 'display :none!important');
    $(".footer").attr('style', 'position:fixed!important');
    if(window.innerWidth >768){
      $('.nav-container').attr('style', 'justify-content: unset!important')
    } else{
      $('.navbar').attr('style', 'justify-content: unset!important')

    }
    $('.buttomIcon').attr('style', 'display :none!important')
  } 
}); 
/****** Local Storage clearing *****/
/*It will clear the localStorage*/
function localSessionDestory(){
  localStorage.removeItem('userDetails');
}
/* End OF*/