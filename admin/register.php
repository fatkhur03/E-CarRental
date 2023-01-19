<!doctype html>
<html lang="en">

<head>
  <!-- Title  -->
  <title>E-CarRental - Login</title>
  <meta name="description"
    content="Bootstrap 5 landing page template with flat design and fast loading. Create great website with Onekit landing page template.">

  <!--Plugins Styles-->
  <link rel="stylesheet" href="https://onekit.madethemes.com/src/plugins/aos/dist/aos.css">
  <link rel="stylesheet" href="https://onekit.madethemes.com/src/plugins/lightgallery.js/dist/css/lightgallery.min.css">
  <link rel="stylesheet" href="https://onekit.madethemes.com/src/plugins/flickity/dist/flickity.min.css">

  <!--Styles-->
  <link rel="stylesheet" href="https://onekit.madethemes.com/src/css/theme.css">

  <!-- Css Optimize -->
  <!-- <link rel="stylesheet" href="dist/css/bundle.min.css"> -->

  <!-- PWA Optimize -->
  <link rel="manifest" href="https://onekit.madethemes.com/src/js/pwa/manifest.json">
  <!-- <link rel="canonical" href="https://onekit.madethemes.com"> -->
  <meta name="theme-color" content="#5b2be0">
  <link rel="apple-touch-icon" href="src/img-min/logo/apple-icon.png">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="src/img-min/logo/favicon.png">
</head>

<body id="top" class="body-nav-fixed">
 
  <!-- =========={ MAIN }==========  -->
  <main id="content">
    <!-- =========={ HERO }==========  -->
    <div id="hero" class="section py-6 py-md-7 jarallax overflow-hidden">
      <!-- background parallax -->
      <img class="jarallax-img" src="https://onekit.madethemes.com/src/img-min/bg/bg-planet.jpg">
      <!-- background overlay -->
      <div class="overlay bg-primary opacity-90 z-index-n1"></div>

      <!-- rocket moving up animation -->
      <div class="particle">
        <div class="particle-move-up d-none d-lg-block particle-move-up-1 text-light z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="2rem" height="2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up particle-move-up-2 text-light z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1rem" height="1rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up d-none d-sm-block particle-move-up-3 text-light z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1.2rem" height="1.2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up d-none d-xl-block particle-move-up-4 text-light z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1rem" height="1rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up d-none d-sm-block particle-move-up-5 text-light z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1.2rem" height="1.2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up border-success text-light particle-move-up-6 z-index-n1 opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="2rem" height="2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up particle-move-up-7 z-index-n1 text-light opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1.2rem" height="1.2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up particle-move-up-8 z-index-n1 text-light opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="1.2rem" height="1.2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
        <div class="particle-move-up particle-move-up-9 z-index-n1 text-light opacity-60">
          <svg xmlns="http://www.w3.org/2000/svg" class="rotate-315" width="2rem" height="2rem" fill="currentColor"
            viewBox="0 0 512 512">
            <path
              d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path class="text-warning" fill="currentColor"
              d="M109.64,352a45.06,45.06,0,0,0-26.35,12.84C65.67,382.52,64,448,64,448s65.52-1.67,83.15-19.31A44.73,44.73,0,0,0,160,402.32"
              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            </svg>
        </div>
      </div>
    </div><!-- End hero -->

    <div id="login-area" class="section pb-5 pb-md-6 border-top bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <!-- login form -->
            <div class="col-md-8 col-lg-7 px-5" data-aos="fade-up">
              <div class="position-relative mt-n7">
                <div class="p-5 rounded-3 bg-white shadow-sm">
                  <form method="post" action="proses_register.php" class="needs-validation" novalidate>
                    <h1 class="h3 mb-4 text-center">Register - Admin </h1>
                    <hr class="divider my-4 mx-auto bg-warning border-warning">
                    <div class="mb-4">
                      <input name="username" class="form-control" placeholder="Username" value="" aria-label="full name" type="text" required="">
                      <div class="invalid-feedback">
                        Please insert username.
                      </div>
                    </div>
                    
                    <div class="mb-4">
                      <input name="password" class="form-control" placeholder="Password" aria-label="password" type="password" value="" required="">
                      <div class="invalid-feedback">
                        Please insert password.
                      </div>
                    </div>
                    
                    <div class="mb-4">
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="remember" required>
                        <label class="form-check-label" for="remember">
                          Remember me
                        </label>
                      </div>
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Register<svg xmlns="http://www.w3.org/2000/svg" class="ms-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"><path d="M192,176V136a40,40,0,0,1,40-40H392a40,40,0,0,1,40,40V376a40,40,0,0,1-40,40H240c-22.09,0-48-17.91-48-40V336" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="288 336 368 256 288 176" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="80" y1="256" x2="352" y2="256" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg></button>
                      </div>
                    </div>
                  </form>
                  <div class="mt-3">
                    
                    <p class="text-left">Already have an account? <a href="index.php">Login</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Contact Form -->
  </main><!-- end main -->


  <!-- =========={ JAVASCRIPT }==========  -->
  <!-- Popper and Bootstrap js -->
  <script src="https://onekit.madethemes.com/src/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin js -->
  <script src="https://onekit.madethemes.com/src/plugins/jarallax/dist/jarallax.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/jarallax/dist/jarallax-video.min.js"></script>

  <script src="https://onekit.madethemes.com/src/plugins/lightgallery.js/dist/js/lightgallery.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/lightgallery.js/demo/js/lg-thumbnail.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/lightgallery.js/demo/js/lg-video.js"></script>

  <script src="https://onekit.madethemes.com/src/plugins/aos/dist/aos.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/waypoints/lib/noframework.waypoints.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/counterup2/dist/index.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/flickity/dist/flickity.pkgd.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/typed.js/lib/typed.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/isotope-layout/dist/isotope.pkgd.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/vanilla-lazyload/dist/lazyload.min.js"></script>
  <script src="https://onekit.madethemes.com/src/plugins/hc-sticky/dist/hc-sticky.js"></script>

  <!-- Theme js -->
  <script src="https://onekit.madethemes.com/src/js/theme.js"></script>

  <!-- JS Optimize -->
  <!-- <script src="dist/js/bundle.min.js"></script> -->
</body>

</html>