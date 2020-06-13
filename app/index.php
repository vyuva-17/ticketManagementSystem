<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ticket Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preload"  href="assets/frameworkLibrary/bootstrap-4.5.0-dist/css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'" as='style' >
  <link rel="stylesheet" href="assets/frameworkLibrary/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link rel="preload" href="assets/images/favicon.ico"  onload="this.onload=null;this.rel='icon'" type="image/gif" sizes="16x16" as='image'>
  <noscript><link rel="icon" href="assets/images/favicon.ico" type="image/gif" sizes="16x16"></noscript>
  <link rel="preload" href="assets/images/pwslab-gear-white.png" as='image'>
  <link rel="preload" href="components/loginComponent/login.css" onload="this.onload=null;this.rel='stylesheet'" as='style' >
  <link rel="stylesheet" href="components/loginComponent/login.css">
  <script rel="preload" src="assets/frameworkLibrary/jquery-3.5.1.min.js" as='js'></script>
  <script rel="prefetch" src="assets/frameworkLibrary/jquery-3.5.1.min.js" as='js'></script>

  </head>

  <body>
  <style>
:root {
    --blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}

*,::after,::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}

article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

@media screen and (min-width:1000px) {

.nav-container,
.continer {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  margin: 0 auto !important;
  width: 1300px !important;
}

.h3 {
  font-size: larger;
  min-width: 68% !important;

}

}

@media screen and (min-width:768px) and (max-width:999px) {
.nav-container {
  display: contents;
}

.h3 {
  font-size: larger;
  min-width: 58%;

}

}

@media screen and (max-width:767px) {
.nav-container {
  display: contents;
}

.h3 {
  font-size: larger;
}

.navbar-nav {
  text-align: center;
}
}

@media screen and (max-width:270px) {
.h3 {
  font-size: x-small !important;
}
}

.nav {
background-color: #512dab !important;
color: #ffffff;
}

.navbar-dark .navbar-nav .nav-link {
color: #fff;
}

  /* width */
  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #808080
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #808080;
  }
.footer{
    background-color:#512dab !important;
    color:#ffffff;
    position: fixed;
    left: 0;
    bottom: 0px;
    width: 100%;
    text-align: center;
}
.container{
    display: flex;
align-items: center;
justify-content: center;
margin-top:5%!important;
margin-bottom:5%!important;
}
</style>
      <?php
      include_once('components/headerComponent/header.html');
      if($_SERVER['QUERY_STRING']== 'addTicket'){
        include_once('components/addTicketComponent/addTicket.html');
      } else if($_SERVER['QUERY_STRING']== 'listTicket'){
        include_once('components/listTicketComponent/listTicket.html');
      }else{
        include_once('components/loginComponent/login.html');
      }
      include_once('components/footerComponent/footer.html');
      ?>
  </body>
  <script rel='preload' src="assets/frameworkLibrary/bootstrap-4.5.0-dist/js/bootstrap.min.js" async as='js'></script>
  <script rel="preload" src="assets/js/index.js" defer as='js'></script>

</html>