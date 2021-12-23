<!DOCTYPE html>
<html lang="en-gb" dir="ltr">


<!--   19 Nov 2019 03:38:47 GMT -->
<!--  --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- / -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sprin | Courses and Events HTML Template</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('website/css/main.css') }}" />
  <script src="{{ asset('website/js/uikit.js') }}"></script>
</head>

<body class="uk-background-body">

<header id="header">
    <div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
      <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
        <div class="uk-container">
          <!-- navigation -->
          @include('layout.navigation')
          <!-- navigation ends here -->
        </div>  
      </nav>
    </div>
    <div class="uk-container uk-container-large">
        <div class="uk-position-relative uk-visible-toggle uk-light uk-box-shadow-small uk-overflow-hidden uk-border-rounded"
         tabindex="-1" data-uk-slider="autoplay: true">
            <ul class="uk-slider-items uk-child-width-1-1">
                <li>
                    <img src="{{ asset('website/img/2.jpg') }}" alt="Slide">
                    <div class="uk-position-cover uk-ove
                    rlay-light uk-flex uk-flex-middle uk-padding-slide">
                        <div class="uk-width-3-4@m">
                            <h2 class="uk-heading-medium uk-letter-spacing-medium">Start a New Career Begin Today</h2>
                            <p>
                                <a class="hvr-forward" href="course.html" data-uk-icon="icon: arrow-right">UX Design with Josh Alkin</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('website/img/1.jpg') }}" alt="Slide">

                    @yield('carousel')
                    
</header>



@yield('contents')

<!-- footer -->
@include('layout.footer')
<!-- footer ends here -->

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index-2.html">Blogs</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li class="uk-active"><a href="index-2.html">Home</a></li>
      <li ><a href="events.html">Events</a></li>
      <li ><a href="course.html">Course</a></li>
      <li ><a href="event.html">Event</a></li>
      <li ><a href="search.html">Search</a></li>
      <li ><a href="sign-in.html">Sign In</a></li>
      <li ><a href="sign-up.html">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="sign-up.html">Sign Up</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>


<!--   19 Nov 2019 03:39:33 GMT -->
</html>