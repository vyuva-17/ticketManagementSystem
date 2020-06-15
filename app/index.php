                                      <!-----Introduction------>                                   
<?php
/* capture session of the project */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
                                      <!--------- Header ------>
<!--headers to capture the critical resources need to load while rendering DOM-->
<head>
  <title>Ticket Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Seo site optimization meta data decription is key so for that I have included description-->
  <meta name="description" content="Ticket Management System Basic Mobile Web App for Mini Project.">
  <!-- styles sheets are preloaded to improve performance optimization to render Dom without dependents if preload is not suported browser like firefox I have included fallback style sheet also.-->
  <link rel="preload" href="assets/frameworkLibrary/bootstrap-4.5.0-dist/css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'" as='style'>
  <link rel="stylesheet" href="assets/frameworkLibrary/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link rel="preload" href="assets/images/favicon.ico" onload="this.onload=null;this.rel='icon'" type="image/gif" sizes="16x16" as='image'>
  <noscript><link rel="icon" href="assets/images/favicon.ico" type="image/gif" sizes="16x16"></noscript>
  <link rel="preload" href="assets/images/pwslab-gear-white.png" as='image'>
  <link rel="preload" href="assets/styles/form.css" onload="this.onload=null;this.rel='stylesheet'" as='style'>
  <link rel="stylesheet" href="assets/styles/form.css">
  <script rel="preload" src="assets/frameworkLibrary/jquery-3.5.1.min.js" as='js'></script>
</head>
<body>
                                   <!---------- Inline Css ---------->   
  <!--Critical styles are inlined to avoid DOM rendering paused to load external style sheet and parse in to cssom-->
  <style>
                                    /********** Bootstrap Css **********/
    /*critical bootstrap css inlined*/
    :root {
      --blue: #007bff;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #dc3545;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --green: #28a745;
      --teal: #20c997;
      --cyan: #17a2b8;
      --white: #fff;
      --gray: #6c757d;
      --gray-dark: #343a40;
      --primary: #007bff;
      --secondary: #6c757d;
      --success: #28a745;
      --info: #17a2b8;
      --warning: #ffc107;
      --danger: #dc3545;
      --light: #f8f9fa;
      --dark: #343a40;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    *,
    ::after,
    ::before {
      box-sizing: border-box
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
      display: block
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff
    }
                                         /************ Responsiveness ************** */     
    /*Responsiveness for large screen to center content when user zoom out the page */
    @media screen and (min-width:1000px) {

      .nav-container,
      .continer {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 auto !important;
        width: 1300px !important;
      }
      .container-list {
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
 /*Responsiveness for medium screen when user zoom in the page */
    @media screen and (min-width:768px) and (max-width:999px) {
      .nav-container {
        display: contents;
      }

      .h3 {
        font-size: larger;
        min-width: 58%;

      }

    }
 /*Responsiveness for small screen when user zoom in the page */
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
 /*Responsiveness for very small screen example jio mobile width is around 280px when user zoom in the page */
    @media screen and (max-width:270px) {
      .h3 {
        font-size: x-small !important;
      }
    }
                                          /*********NavBar Css***********/   
    /*Nav bar inlined css */
    .nav {
      background-color: #512dab !important;
      color: #ffffff;
      position: sticky !important;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: #fff;
    }
                                          /********** Custom Scroll Css *************/
    /*Customised scrollbar inlined css to avoid native scroll for good looking site */
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
                                            /************** Custom Form Css ****************/
    /* customized form inlined css over native bootstrap form style form good looking and improve performance*/
    form {
      border: 1px solid #ccc;
      box-shadow: 0px 0px 10px #ccc;
      background: #fff;
      width: 50%;
      margin: 0 auto;
    }


    .label {
      padding-top: 3px;
      padding-bottom: 3px;
      border-radius: 0 !important;
      border-bottom: 0 !important;
      color: #352e63 !important;

    }

    .btn-default {
      background-color: #512dab;
      color: #fff;
      margin: 0 auto;
    }

    .formCaption {
      text-align: center;
      color: #512dab;
      padding-top: 2%;
    }

    .hdEmailId,
    .hdPassword,
    .hdSubject,
    .hdDescription,
    .hdName,
    .hdEmailId,
    .hdMobileNumber {
      display: none;
      color: red;
      text-align: center
    }

    .form-control {
      color: #555;
      border-top: none !important;
      border-right: none !important;
      border-left: none !important;
      border-bottom: 1px solid #512dab !important;
      border-radius: 0;
      border: 0;
      padding: 0;
      outline: none;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      margin: 0 auto;
      float: none;

    }
                                                /*************Footer Css**************/   
    /*footer inlined css */
    .footer {
      background-color: #512dab !important;
      color: #ffffff;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
      width: 100%;
      text-align: center;
    }

                                              /************* Container Css ***************** */ 
    /*container inlined css for dynamic rendering content*/ 
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 3% !important;
      margin-bottom: 3% !important;
    }
    .container-list {
      align-items: center;
      justify-content: center;
      margin-top: 3% !important;
      margin-bottom: 3% !important;
    }
  </style>
  <?php
                                   /******** Redirection Management ************/
  /* Below section of code is responsible  for whole project page redirecting  to avoid unwanted redirection and to make sure that header,footer componenet is common for all page only content will fetched from the server dynamically even that also prefetch in memory cache to avoid performance lagging while loading page using this technique we can manage page redirection easily like single page application you just want to include dynamic oage and prefetch it for future reference based on analysis*/
   include_once('components/headerComponent/header.html');
  if ($_SERVER['QUERY_STRING'] == 'addTicket') {
    include_once('components/addTicketComponent/addTicket.html');
  } else if ($_SERVER['QUERY_STRING'] == 'listTicket') {
    include_once('components/listTicketComponent/listTicket.html');
  } else {
    include_once('components/loginComponent/login.html');
  }
  include_once('components/footerComponent/footer.html');
  
 ?>
</body>
                                       <!-----------Script Defer-------------->
<!--script tage is placed under body to avoid render blocking while rendering DOM and the js files are deffered to make sure that js is loaded after Dom Rendering to improve performance-->
<script rel='preload' src="assets/frameworkLibrary/bootstrap-4.5.0-dist/js/bootstrap.min.js" async as='js'></script>
<script rel="preload" src="assets/js/index.js" as='js'></script>
                                       <!-------------End Off------------------> 

</html>

