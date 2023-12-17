<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
use Tegimus\IziToast\Toast;
require '../vendor/tegimus/php-izitoast/src/Toast.php';

$toast = Toast::make();
// $toast = new Toast();

$title = 'Success';
$message = 'Message Sent. You will hear from me soon!';
$type = Toast::TYPE_SUCCESS;
$options = ['progressBar' => true];

// $toast = new Toast($message);
//or
$toast = Toast::make($message, $title, $type, $options);
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Oct 06 2023 11:22:21 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="651f3137795690899c27088a" data-wf-site="651f3137795690899c27088f">
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta content="Looking for your next pond builder? Reach out!" name="description">
  <meta content="Contact Us" property="og:title">
  <meta content="Looking for your next pond builder? Reach out!" property="og:description">
  <meta content="Contact Us" property="twitter:title">
  <meta content="Looking for your next pond builder? Reach out!" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/fflwaterfeatures-4b192e32-e42e069e68a3f.webflow.css" rel="stylesheet" type="text/css">
  <script type="../text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="../css/iziToast.min.css">
  <style>
html.lenis {
  height: auto;
}
body 
{ 
  overflow-x: hidden; 
  overflow-y: auto; 
} 
body::-webkit-scrollbar 
{
  display: none; 
}
.lenis.lenis-smooth {
  scroll-behavior: auto;
}
.lenis.lenis-smooth [data-lenis-prevent] {
  overscroll-behavior: contain;
}
.lenis.lenis-stopped {
  overflow: hidden;
}
</style>
  <link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
</head>
<body class="body-2">
  <div class="w-embed">
    <style>
.form-input::placeholder, .form-select::placeholder{
	color: #a7b3cb;
}
.w-input::placeholder {
  color: #a7b3cb;
}
body 
{ 
  overflow-x: hidden; 
  overflow-y: auto; 
} 
body::-webkit-scrollbar 
{
  display: none; 
}
/*Custom Checkbox*/
label.w-checkbox.tags {
    background-color: #141414;
    border-radius: 8px;
    overflow: hidden;
    float: left;
    padding: 15px 40px;
    margin-right: 15px;
    margin-bottom: 15px;
}
.w-form-label {
    display: inline-block;
    cursor: pointer;
    font-weight: 500;
    margin-bottom: 0px;
    color: #a7b3cb!important;
    margin-left: 4px;
    font-size: 18px!important;
}
.tags-button {
    width: 20px;
    height: 20px;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}
</style>
  </div>
  <div data-animation="over-right" data-collapse="all" data-duration="900" data-easing="ease-in-quart" data-easing2="ease-out-quart" role="banner" class="nav w-nav">
    <div class="menu-button w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
    <nav role="navigation" class="nav-menu-2 w-nav-menu">
      <div class="navind-wrapper">
        <h4 class="ffl-h4">NAVIGATION</h4>
      </div>
      <a href="../index.html" class="navlink w-nav-link">HOME</a>
      <a href="../about-us.html" class="navlink w-nav-link">ABOUT</a>
      <a href="../projects.html" class="navlink w-nav-link">PROJECTS</a>
      <a href="../gallery.html" class="navlink w-nav-link">GALLERY</a>
      <a href="#" aria-current="page" class="navlink w-nav-link w--current">Contact</a>
    </nav>
    <div class="w-layout-grid grid">
      <a href="../index.html" class="brand w-nav-brand"><img src="images/Logo_White_FFL_1Logo_White_FFL.webp" loading="lazy" width="150" sizes="150px" alt="" srcset="images/Logo_White_FFL_1-p-500.png 500w, images/Logo_White_FFL_1Logo_White_FFL.webp 970w" class="brand-logo"></a>
      <link rel="prefetch" href="/">
    </div>
  </div>
  <section class="hero">
    <div data-poster-url="https://uploads-ssl.webflow.com/64368368b8606731b3fa7292/6436a56ceda9198dc56b5111_anto-ff-video-poster-00001.jpg" data-video-urls="videos/anto-ff-video-transcode.mp4,videos/anto-ff-video-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="ff-video _50vh w-background-video w-background-video-atom"><video id="df807d47-c91d-a9a5-a6aa-0bd2731907d1-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/64368368b8606731b3fa7292/6436a56ceda9198dc56b5111_anto-ff-video-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
        <source src="../videos/anto-ff-video-transcode.mp4" data-wf-ignore="true">
        <source src="../videos/anto-ff-video-transcode.webm" data-wf-ignore="true">
      </video>
      <div class="inner-wrapper">
        <h1 class="ff-h1 _w-50"><span class="letter">Contact</span></h1>
      </div>
    </div>
  </section>
  <div class="contact">
    <div class="_1200-container w-container">
      <div class="service-headline mx-none">
        <h1 class="ff-h3 has-color-blue">LOOKING FOR YOUR NEXT <span class="blue-letter">POND BUILDER?</span> REACH OUT.</h1>
      </div>
      <div class="form-block w-form">
        <form id="email-form" name="email-form" action="email.php" data-name="Email Form" method="POST" class="form" data-wf-page-id="651f3137795690899c27088a" data-wf-element-id="3f18cb62-4741-2fd1-86a8-79d8cdbe0d84">
          <div class="form-flex">
            <div class="field-wrap">
              <input type="text" class="text-field-left-icon w-input" autocomplete="off" maxlength="256" name="start_date" data-name="Date 2" placeholder="Start Date" data-toggle="datepicker" id="Date-2"><img alt="" loading="lazy" src="../images/Date.svg" class="field-icon">
            </div>
            <input type="text" class="form-input w-input" maxlength="256" name="Hear-2" data-name="Hear 2" placeholder="How did you hear about us? " id="Hear-2">
          </div>
          <div class="form-flex">
            <input type="text" class="form-input w-input" maxlength="256" name="Budget" data-name="Budget" placeholder="Do you have a budget in mind? " id="Budget">
            <input type="text" class="form-input w-input" maxlength="256" name="Feature" data-name="Feature" placeholder="What type of water feature are you looking for? " id="Feature">
          </div>
          <div class="form-flex">
            <select id="field" name="ffl_feature" data-name="Field" class="form-select w-select">
              <option value="">Are you interested in a specific FFL water feature?</option>
              <option value="First">Aquarium</option>
              <option value="Second">Traditional (Fountain)</option>
              <option value="Third">Fountain Scape (Fountain)</option>
              <option value="Four">Stream</option>
              <option value="Another option">Another option</option>
            </select>
            <input type="text" class="form-input w-input" maxlength="256" name="Name" data-name="Name" placeholder="Name" id="Name-5">
          </div>
          <div class="form-flex">
            <input type="text" class="form-input w-input" maxlength="256" name="Address" data-name="Address" placeholder="Address" id="Address">
            <input type="text" class="form-input w-input" maxlength="256" name="City" data-name="City" placeholder="City" id="City">
          </div>
          <div class="form-flex">
            <input type="tel" class="form-input w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone Number" id="Phone">
            <input type="email" class="form-input w-input" maxlength="256" name="email" data-name="Email 2" placeholder="Email" id="email-2">
          </div>
          <div class="form-info">
            <h3 class="ff-h3 has-color-blue text-center">CONSULTANT INFORMATION</h3>
            <p class="ff-paragrapgh has-color-blue text-center">As part of our company policy, we have a commitment fee of Ghc800 for every 50 Km travelled outside Accra, which must be paid before our design consultant will come to your home and together with their expertise and your input, design a custom water feature that works best for you and your landscape. The commitment fee will be credited to your final bill within the next three months after payment if project commences</p>
          </div>
          <div class="form-flex">
            <div class="field-wrap"><input type="text" class="text-field-left-icon w-input" autocomplete="off" maxlength="256" name="consultation_date" data-name="Date" placeholder="Consultation Date/Date" data-toggle="datepicker" id="Date"><img alt="" loading="lazy" src="../images/Date.svg" class="field-icon"></div><input type="text" class="form-input w-input" maxlength="256" name="consultation_time" data-name="Time" placeholder="Preferred Time" id="Time">
          </div>
          <div class="form-flex"><label class="tags w-radio"><input type="radio" id="Cash" name="cash" value="Cash" data-name="Fee" class="w-form-formradioinput tags-button w-radio-input"><span class="tags-label w-form-label" for="Cash">Cash</span></label><label class="tags w-radio"><input type="radio" id="Cash" name="online" value="Online" data-name="Fee" class="w-form-formradioinput tags-button w-radio-input"><span class="tags-label w-form-label" for="Cash">Online</span></label></div>
          <p class="ff-paragrapgh has-color-blue text-center mx-6">Please call FFL Water Features<strong> </strong>on <strong>0542618595 </strong>if you wish to make payment.
          </p>
          <input type="submit" name="submit" value="submit" data-wait="Please wait..." class="submit-button w-button">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <section class="footer">
    <footer class="footer3_component">
      <div class="padding-global">
        <div class="container-large">
          <div class="padding-vertical padding-xxlarge">
            <div class="padding-bottom padding-xxlarge">
              <div class="w-layout-grid footer3_top-wrapper">
                <div class="footer3_left-wrapper">
                  <div class="margin-bottom margin-medium">
                    <div class="footer3_details-wrapper">
                      <div class="text-size-small"><span class="text-weight-semibold">Address: <br></span><strong class="bold-text">FFL Water Features, 14 Niatinezia Street, Dansoman <br>Digital Address: GA-542-5786</strong><br>‍<br><span class="text-weight-semibold">Contact:<br></span>
                        <a href="#" class="link"><strong class="bold-text-2">0240480899</strong><br></a>
                        <a href="#" class="link-2">‍<strong class="bold-text-3">askme@fflwaterfeatures.com</strong></a>
                      </div>
                    </div>
                  </div>
                  <div class="w-layout-grid footer3_social-list">
                    <a href="#" class="footer3_social-link w-inline-block">
                      <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16.5 6H13.5C12.9477 6 12.5 6.44772 12.5 7V10H16.5C16.6137 9.99748 16.7216 10.0504 16.7892 10.1419C16.8568 10.2334 16.8758 10.352 16.84 10.46L16.1 12.66C16.0318 12.8619 15.8431 12.9984 15.63 13H12.5V20.5C12.5 20.7761 12.2761 21 12 21H9.5C9.22386 21 9 20.7761 9 20.5V13H7.5C7.22386 13 7 12.7761 7 12.5V10.5C7 10.2239 7.22386 10 7.5 10H9V7C9 4.79086 10.7909 3 13 3H16.5C16.7761 3 17 3.22386 17 3.5V5.5C17 5.77614 16.7761 6 16.5 6Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer3_social-link w-inline-block">
                      <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3ZM19.25 16C19.2445 17.7926 17.7926 19.2445 16 19.25H8C6.20735 19.2445 4.75549 17.7926 4.75 16V8C4.75549 6.20735 6.20735 4.75549 8 4.75H16C17.7926 4.75549 19.2445 6.20735 19.25 8V16ZM16.75 8.25C17.3023 8.25 17.75 7.80228 17.75 7.25C17.75 6.69772 17.3023 6.25 16.75 6.25C16.1977 6.25 15.75 6.69772 15.75 7.25C15.75 7.80228 16.1977 8.25 16.75 8.25ZM12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5027 10.8057 16.0294 9.65957 15.1849 8.81508C14.3404 7.97059 13.1943 7.49734 12 7.5ZM9.25 12C9.25 13.5188 10.4812 14.75 12 14.75C13.5188 14.75 14.75 13.5188 14.75 12C14.75 10.4812 13.5188 9.25 12 9.25C10.4812 9.25 9.25 10.4812 9.25 12Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer3_social-link w-inline-block">
                      <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M20.9728 6.7174C20.5084 7.33692 19.947 7.87733 19.3103 8.31776C19.3103 8.47959 19.3103 8.64142 19.3103 8.81225C19.3154 11.7511 18.1415 14.5691 16.0518 16.6345C13.962 18.6999 11.1312 19.8399 8.19405 19.7989C6.49599 19.8046 4.81967 19.4169 3.29642 18.6661C3.21428 18.6302 3.16131 18.549 3.16162 18.4593V18.3604C3.16162 18.2313 3.26623 18.1267 3.39527 18.1267C5.06442 18.0716 6.67402 17.4929 7.99634 16.4724C6.48553 16.4419 5.12619 15.5469 4.5006 14.1707C4.46901 14.0956 4.47884 14.0093 4.52657 13.9432C4.57429 13.8771 4.653 13.8407 4.73425 13.8471C5.19342 13.8932 5.65718 13.8505 6.1002 13.7212C4.43239 13.375 3.17921 11.9904 2.99986 10.2957C2.99349 10.2144 3.02992 10.1357 3.096 10.0879C3.16207 10.0402 3.24824 10.0303 3.32338 10.062C3.77094 10.2595 4.25409 10.3635 4.74324 10.3676C3.28184 9.40846 2.65061 7.58405 3.20655 5.92622C3.26394 5.76513 3.40181 5.64612 3.5695 5.61294C3.73718 5.57975 3.90996 5.63728 4.02432 5.76439C5.99639 7.86325 8.70604 9.11396 11.5819 9.25279C11.5083 8.95885 11.4721 8.65676 11.4741 8.35372C11.501 6.76472 12.4842 5.34921 13.9634 4.76987C15.4425 4.19054 17.1249 4.56203 18.223 5.71044C18.9714 5.56785 19.695 5.31645 20.3707 4.96421C20.4202 4.93331 20.483 4.93331 20.5325 4.96421C20.5634 5.01373 20.5634 5.07652 20.5325 5.12604C20.2052 5.87552 19.6523 6.50412 18.9509 6.92419C19.5651 6.85296 20.1685 6.70807 20.7482 6.49264C20.797 6.45942 20.8611 6.45942 20.9099 6.49264C20.9508 6.51134 20.9814 6.54711 20.9935 6.59042C21.0056 6.63373 20.998 6.68018 20.9728 6.7174Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer3_social-link w-inline-block">
                      <div class="social-icon w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer3_social-link w-inline-block">
                      <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5399 4.33992L19.9999 4.48992C21.7284 4.68529 23.0264 6.16064 22.9999 7.89992V16.0999C23.0264 17.8392 21.7284 19.3146 19.9999 19.5099L18.5999 19.6599C14.2315 20.1099 9.82835 20.1099 5.45991 19.6599L3.99991 19.5099C2.27143 19.3146 0.973464 17.8392 0.999909 16.0999V7.89992C0.973464 6.16064 2.27143 4.68529 3.99991 4.48992L5.39991 4.33992C9.76835 3.88995 14.1715 3.88995 18.5399 4.33992ZM11.1099 15.2199L14.9999 12.6199H15.0599C15.2695 12.4833 15.3959 12.2501 15.3959 11.9999C15.3959 11.7497 15.2695 11.5165 15.0599 11.3799L11.1699 8.77992C10.9402 8.62469 10.6437 8.60879 10.3987 8.73859C10.1538 8.86839 10.0004 9.12271 9.99991 9.39992V14.5999C10.0128 14.858 10.1576 15.0913 10.3832 15.2173C10.6088 15.3433 10.8834 15.3443 11.1099 15.2199Z" fill="currentColor"></path>
                        </svg></div>
                    </a>
                  </div>
                </div>
                <div class="w-layout-grid footer3_menu-wrapper">
                  <div class="footer3_link-list">
                    <a href="../index.html" class="footer3_link">Home</a>
                    <a href="../about-us.html" class="footer3_link">About</a>
                    <a href="../gallery.html" class="footer3_link">Gallery</a>
                    <a href="../projects.html" class="footer3_link">Projects</a>
                    <a href="#" aria-current="page" class="footer3_link w--current">Contact Us</a>
                  </div>
                  <div id="w-node-_60cb43eb-40cb-6094-9b73-e0b36f58d25c-8eb99779" class="footer-cert">
                    <div class="cert-text">Certified by<br>Aquascape <br></div><img src="../images/caclogo_1caclogo.webp" loading="lazy" width="70" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="line-divider"></div>
            <div class="padding-top padding-medium">
              <div class="footer3_bottom-wrapper">
                <div class="footer3_credit-text">© 2023 FFL Water Features. All rights reserved.</div>
                <div class="w-layout-grid footer3_legal-list">
                  <a href="#" class="footer3_legal-link">Privacy Policy</a>
                  <a href="#" class="footer3_legal-link">Terms of Service</a>
                  <a href="#" class="footer3_legal-link">Cookies Settings</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=651f3137795690899c27088f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>
  <script>
    $(document).ready(function () {
        $('[data-toggle="datepicker"]').datepicker({
            format: 'mm-dd-yyyy'
        });
        // Available date placeholders:
        // Year: yyyy
        // Month: mm
        // Day: dd
        if (window.innerWidth < 768) {
            $('[data-toggle="datepicker"]').attr('readonly', 'readonly')
        }
    });
</script>

  <script type="text/javascript" src="../js/iziToast.min.js"></script>
  <?php
if(isset($_GET['status']) && $_GET['status'] == 'sent')
{
?>
  <script>
  <?php $toast->render() ?>
  </script>
<?php
}
?>
  <!--  You can put your custom CSS attributes  -->
  <style>
    /* You can apply your own color! 
    --main-light-color is the light grey, 
    --main-dark-color is the text
    --main-active-color is the highlight
    you can just add like red, or blue or any helx you like! */
    :root {
        --main-light-color: #f3f5fb;
        --main-dark-color: #a7b3cb;
        --main-active-color: #642eff;
    }
    .datepicker-dropdown {
        border-radius: 8px !important;
        border: 0 !important;
        -webkit-box-shadow: 0px 48px 88px rgba(23, 9, 54, 0.08);
        box-shadow: 0px 48px 88px rgba(23, 9, 54, 0.08);
        box-sizing: border-box;
    }
    .datepicker-panel>ul[data-view="week"]>li {
        background-color: var(--main-light-color);
        color: var(--main-dark-color);
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
        height: initial;
        padding-top: 3px;
        margin-bottom: 4px;
    }
    .datepicker-panel>ul[data-view="week"]>li:hover {
        background-color: var(--main-light-color);
        color: var(--main-dark-color);
        border-radius: 0px;
    }
    .datepicker-panel>ul[data-view="week"] li:first-child {
        border-radius: 20px 0 0 20px;
    }
    .datepicker-panel>ul[data-view="week"] li:last-child {
        border-radius: 0 20px 20px 0;
    }
    .datepicker-top-left::before,
    .datepicker-top-left::after {
        display: none;
    }
    .datepicker-panel>ul>li.picked,
    .datepicker-panel>ul>li.highlighted,
    .datepicker-panel>ul>li.picked:hover {
        color: var(--main-active-color);
        background: var(--main-light-color);
        border-radius: 8px;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
    }
    li[data-view="month current"],
    li[data-view="year current"] {
        text-align: left;
        color: var(--main-dark-color);
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        /* line-height: 24px; */
        padding-left: 15px;
        border-radius: 10px;
    }
    .datepicker-panel>ul>li:hover {
        background: var(--main-light-color);
        border-radius: 10px;
    }
    li[data-view="month current"],
    li[data-view="year current"],
    li[data-view="years current"] {
        margin-bottom: 4px !important;
    }
    @media screen and (min-width: 768px) {
        .datepicker-dropdown {
            width: 364px;
            padding: 12px;
        }
        .datepicker-panel>ul>li {
            width: 48px;
            height: 48px;
            padding-top: 10px;
        }
        li[data-view="month next"],
        li[data-view="year next"],
        li[data-view="years next"] {
            position: absolute;
            right: 18px
        }
        li[data-view="month prev"],
        li[data-view="year prev"],
        li[data-view="years prev"] {
            position: absolute;
            right: 66px
        }
        ul[data-view="months"] li,
        ul[data-view="years"] li {
            padding-top: 0px;
            width: 57px !important;
        }
    }
    @media screen and (max-width: 768px) {
        .datepicker-panel {
            transform: scale(0.97);
        }
    }
</style>
</body>
</html>