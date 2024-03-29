<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Academy</title>
    <link rel="stylesheet" href="Styles/bootstrap.min.css" />
    <link rel="stylesheet" href="Styles/style.css" />
    <script src="script/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
    >
      <div class="container-fluid">
        <a class="navbar-brand ms-4" href="#"
          ><img
            src="Assets/images/logo.png"
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active text-success"
                aria-current="page"
                href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Fields</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Contact us</a
              >
            </li>
            <li class="nav-item">
              <button type="button" class="btn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-search"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                  ></path>
                </svg>
              </button>
            </li>
          </ul>

          <button class="btn btn-outline-success mx-5 px-5" type="submit">
            Sign in
          </button>
        </div>
      </div>
    </nav>
    <!-- carousel -->
    <div
      id="carouselExampleAutoPlaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="Assets/images/1.jpg" class="d-block w-100 c-img" alt="1" />
        </div>
        <div class="carousel-item c-item">
          <img src="Assets/images/2.jpg" class="d-block w-100 c-img" alt="1" />
        </div>
      </div>
    </div>

    <div class="what-we-offer d-flex flex-column align-items-center">
      <div class="container border border-0 shadow rounded-top-3 my-3 w-75">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/3.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/4.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/5.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/6.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="heading h1 fw-bold txt-color my-4">What We Offer</div>
      <div class="container w-75">
        <div class="row">
          <div class="col-lg-6 p-0">
            <div class="card border border-0">
              <img src="Assets/images/7.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6 p-0">
            <div class="card border border-0 bg-danger"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-0">
            <div class="card border border-0">
              <img src="Assets/images/7.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6 p-0">
            <div class="card border border-0 bg-danger"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-0">
            <div class="card border border-0">
              <img src="Assets/images/7.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6 p-0">
            <div class="card border border-0 bg-danger"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-university my-5 py-3">
      <div class="container z-2">
        <div class="row m-3 p-5">
          <div class="col-5">
            <section class="d-flex flex-row justify-content-between">
              <div class="card w-75 bg-black">
                <div class="heading h1">About Our University</div>
                <img src="Assets/images/logo2.png" alt="" />
              </div>
            </section>
          </div>
          <div class="col-7">
            <section>
              <div class="card w-50 bg-primary">
                <div class="heading h1 text-white">
                  Smart Academy: Empowering Minds, Shaping Futures
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="row m-5 p-5">
          <div class="col-3">
            <div
              class="card w-100 m-3 p-2 text-center d-flex justify-content-around align-items-center"
            >
              <div class="span h1">22</div>
              <div class="span h2">Certified Professors</div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <h3 class="text-center">Our Field</h3>







<!-- card -->







                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>















<!-- end card -->




  </body>
</html>
