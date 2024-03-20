<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Background Image and Text</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <style>
  .header {
  background-image: url('https://s3-alpha-sig.figma.com/img/ced3/5cb3/8191e19559fbb1fc7a986d16124b43d3?Expires=1711929600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MHCVKb5ZxVYD2adzvdcwMY85ZruzQU8VGTnnIwoQMWHkixQloTjz5EofyRzJdcxr0rcyWvKXVGXB6fwIIPf33kY3HjZdX6n-Y4VxiJhTtJio1xR3R1NrLotvZb4EkbQ1P-F0anJOO70STWRPjytNsUfNE1Fi69CCrR-qmDJv2G52wrj3qkWMooxfOINhT-kvZGW6YZJN0lkUje0VKGa1aKOlyd8Zeht-3W3l3hdoFOoehOWyGp7mgZMhALR6Ey4WJWNGdNVpEeehfV-djjIEDBpN--we8-04eETRPE41k10w02SS8rALcLG0OjrL2S3~ZmR9kuo0VQL3KOHKLDLEeQ__'); /* Replace with the actual image URL */
  background-size: cover;
  background-position: center;
  padding: 20px; /* Adjust the padding as needed */
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh; /* Set the minimum height to 100% of the viewport height */
  color: white;
  /* Decrease opacity */
  background-color: rgba(0, 0, 0, 0.7); /* 0.7 is the opacity value, adjust as needed */
}


.header::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* background-color: rgba(0, 0, 0, 0.2); Adjust opacity as needed */
}
    .logo {
      max-width: 100px; /* Adjust the max-width of the logo */
    }
     .nav-link {
    color: white !important;
  }



    .header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      
      height: 100vh; /* Ensure the header takes the full viewport height */
    }

    .header h1,
    .header p {
      margin: 0;
    }

    .navbar-brand h2 {
      margin-bottom: 0; /* Remove margin from the bottom of the h2 inside the navbar brand */
    }

    .header-content {
      flex-grow: 1; /* Allow the content to grow and occupy the available space */
      display: flex;
      flex-direction: column;
      justify-content: center; /* Vertically center the content */
      align-items: center; /* Horizontally center the content */
    }

/* icon-container */
         .icon-container {
  width: 40px; 
  height: 40px;
  background-color: #1f92b5;
  border-radius: 50%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon {
  font-size: 24px; /* Adjust icon size as needed */
}

/* profile images */
      .custom-img {
      height: 300px;
      object-fit: cover;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>

  </head>
  <body>

    <header class="header">

      <!-- navbar  -->
      <nav class="navbar navbar-expand-lg" style="width: 100%;">
        <div class="container-fluid">

          <a class="navbar-brand">
            <h2>Hum<span style="color: #ea0f8a">safar</span></h2>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else
                      here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!-- navbar  -->

      <div class="header-content" style="margin-left: 50px; ">
        <h1>Dating <span style="color: #19b7ea;">leuk</span> gemaakt... <br>
          zonder de spelletjes.</h1>
        <p>AI 13 jaar wereldwijd singles <br>
          met elkaar verbinden.</p>
      </div>
    </header>

    <!-- Your content here -->

    <section class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h6>Hoe ontmoet je singles op onze datingsite?</h6>
            <p>Find out everything you need to know and more about how our
              website works.</p>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam
              venenatis vestibulum. Etiam porta sem malesuada magna mollis
              euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
              Nullam quis risus eget urna mollis ornare.</p>

            <div class="row">
              <div class="col">
                <h2
                  style="color: #ea0f8a;padding: 0px;margin: 0px; ">55,000</h2>
                <p>Daily Matches</p>
              </div>

              <div class="col">
                <h2
                  style="color: #ea0f8a;padding: 0px;margin: 0px; ">100,000</h2>
                <p>Daily Matches</p>
              </div>

              <div class="col">
                <h2 style="color: #ea0f8a;padding: 0px;margin: 0px; ">435</h2>
                <p>Register Devices</p>
              </div>
            </div>
          </div>

          <div
            class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="img1.jpg" class="img-fluid"
              style="height:300px; width: 300px;">
          </div>
        </div>
      </div>
    </section>

    <section calss="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class>
              <h2>Hoe ontmoet je singles op onze
                datingsite?</h2>
              <p>Find out everything you need to know and more about how
                our
                website works.</p>

              <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                venenatis vestibulum. Etiam porta sem malesuada magna
                mollis
                euismod. Nullam id dolor id nibh ultricies vehicula ut id
                elit.
                Nullam quis risus eget urna mollis ornare.</p>
            </div>

            <button class="btn btn-sm btn-primary">Add profile</button>

          </div>

          <div class="col-md-6 d-none d-md-block">
            <div class="row">
              <div class="col-md-1">
                <div class="icon-container">
                  <span class="icon">01</span>
                </div>
              </div>
              <div class="col">
                <p class="p-0 m-0">Hoe ontmoet je singles op onze
                  datingsite?</p>
                <span>Find out everything you need to know and more about
                  how
                  our
                  website works.</span>
              </div>
            </div>

            <div class="row my-5 ms-4 ">
              <div class="col-md-1">
                <div class="icon-container">
                  <span class="icon">02</span>
                </div>
              </div>
              <div class="col">
                <p class="p-0 m-0">Create your free account </p>
                <span>Nulla vitae elit libero pharetra augue
                  dapibus.</span>
              </div>
            </div>

            <div class="row   my-5">
              <div class="col-md-1">
                <div class="icon-container">
                  <span class="icon">01</span>
                </div>
              </div>
              <div class="col">

                <p class="p-0 m-0">Create your details</p>
                <span>Vivamus sagittis lacus vel augue laoreet.</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- prfiles -->
    <section class="my-5">
      <div class="container">
        <div class="row">
          <!-- <h4>Zij werden onlangs lid!</h4>
          <button class="d-flex btn "> Veiw More</button> -->
          <div class="row align-items-center">
            <h4 class="d-inline col-10">Zij werden onlangs lid!</h4>

            <button type="button"
              class="btn sm-auto btn-outline-primary col-2 text-right">
              View More
            </button>
          </div>

          <div class="container">
            <div class="row my-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="profile1.jpg" class="card-img-top custom-img"
                    alt="profile1.jpg">
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="profile2.jpg" class="card-img-top custom-img"
                    alt="profile2.jpg">
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="profile3.jpg" class="card-img-top custom-img"
                    alt="profile3.jpg">
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="profile4.jpg" class="card-img-top custom-img"
                    alt="profile4.jpg">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="container ">
        <div class="row">
          <h4>Magazine</h4>
          <!-- 1 -->
          <div class="col-md-3 ">
            <div class="card">
              <img src="section1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on
                  the
                  card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="col-md-3">
            <div class="card">
              <img src="section2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on
                  the
                  card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="col-md-3">
            <div class="card">
              <img src="section3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on
                  the
                  card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="col-md-3">
            <div class="card">
              <img src="section4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on
                  the
                  card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footyer">
      <!-- Remove the container if you want to extend the Footer to full width. -->
      <div class=" my-5">

        <!-- Footer -->
        <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331">
          <!-- Section: Social media -->
          <section
            class="d-flex justify-content-between p-4">

            <!-- Right -->
            <div>
              <a href class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href class="text-white me-4">
                <i class="fab fa-twitter"></i>
              </a>
              <a href class="text-white me-4">
                <i class="fab fa-google"></i>
              </a>
              <a href class="text-white me-4">
                <i class="fab fa-instagram"></i>
              </a>
              <a href class="text-white me-4">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href class="text-white me-4">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class>
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="fw-bold"> <span>Hum</span><span
                      style="color: #ea0f8a;">safar</span> </h6>
                  <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p>
                    Here you can use rows and columns to organize your
                    footer
                    content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing
                    elit.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class=" fw-bold">Quick Search</h6>
                  <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p class="p-0 m-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">MDBootstrap</a>
                  </p>
                  <p class="p-0 m-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">MDWordPress</a>
                  </p>
                  <p class="p-0 m-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">BrandFlow</a>
                  </p>
                  <p class="p-0 m-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class=" fw-bold">Useful links</h6>
                  <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p class="m-0 p-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">Your Account</a>
                  </p>
                  <p class="m-0 p-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">Become an Affiliate</a>
                  </p>
                  <p class="m-0 p-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">Shipping Rates</a>
                  </p>
                  <p class="m-0 p-0">
                    <a href="#!" style="text-decoration: none;"
                      class="text-white">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div
                  class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class=" fw-bold">Contact</h6>
                  <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p class="m-0 p-0"><i class="fas fa-home mr-3"></i> New
                    York,
                    NY 10012, US</p>
                  <p class="m-0 p-0"><i class="fas fa-envelope mr-3"></i>
                    info@example.com</p>
                  <p class="m-0 p-0"><i class="fas fa-phone mr-3"></i> +
                    01 234
                    567 88</p>
                  <p class="m-0 p-0"><i class="fas fa-print mr-3"></i> +
                    01 234
                    567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white"
              href="https://mdbootstrap.com/">MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->

      </div>
      <!-- End of .container -->
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
