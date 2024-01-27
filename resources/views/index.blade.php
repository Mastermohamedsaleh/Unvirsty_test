<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- font -->
    <script
      src="https://kit.fontawesome.com/c1ef89d5e0.js"
      crossorigin="anonymous"
      defer
    ></script>

    <!-- bootstrap 5 links (CDN) -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="Styles/style.css" />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      defer
    ></script>
    <script src="Script/script.js" defer></script>
  </head>
  <body>




    <div class="wrapper">




      <aside id="sidebar" class="js-sidebar"><!-- side bar content-->
        
      <div class="h-100">


            <div class="sidebar-logo">
                <a href="#">M.Saleh</a>
            </div>

            

            <ul class="sidebar-nav">

                <li class="sidebar-header">
                    Admin elements
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link"><i class="fa-solid fa-list"></i> Dashboard</a>
                </li>


                <li class="sidebar-item">
                    <a href="{{route('colleges.index')}}" class="sidebar-link"><i class="fa-solid fa-list"></i>Colleges</a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-file-lines pe-2"></i> Components</a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Button</a>
                            <a href="#" class="sidebar-link">Card</a>
                        </li>
                    </ul>
                </li>
                
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-sliders pe-2"></i> Posts</a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">Post 1</a>
                          <a href="#" class="sidebar-link">Post 2</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-regular fa-user pe-2"></i> Auth</a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="form.html" class="sidebar-link">Log in</a>
                        <a href="#" class="sidebar-link">Register</a>
                        <a href="#" class="sidebar-link">Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
              Multi level menu
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-share-nodes pe-2"></i> Multi dropdown</a>
              <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" >
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" area-expanded="false" data-bs-target="#level-1">level 1</a>
                    <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">level 1.1</a>
                          <a href="#" class="sidebar-link">level 1.2</a>
                      </li>
                  </ul>
            </ul>
            </li>
            </ul>
        </div>    
    </aside>


      <div class="main">


        <nav class="navbar navbar-expand px3 border-bottom">


          <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-icon pe-md-0">
                  <img src="assets/images/profile.png" class="avatar img-fluid rounded" alt="">
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Setting</a>
                    <a href="#" class="dropdown-item">Log out</a>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          
        </nav>

        <!-- main -->

        <main class="content px-3 py-2">
          <div class="content-fluid">
            <div class="mb-3">
            <h4>Admin Dashboard</h4>
          </div>
          <div class="row">
            <div class="col-12 cold-md-6 d-flex">
              <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                  <div class="row g-0 w-100">
                    <div class="col-6">
                      <div class="p-3 m-1">
                        <h4>Welcome Back, Admin.</h4>
                        <p class="mb-0">Admin Dashboard.</p>
                      </div>
                    </div>
                    <div class="col-6 align-self-end text-end">
                      <img src="assets/images/customer-support.jpg" class="img-fluid illustration-img admin-dashboard-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
              <div class="card flex-fill border-0">
                <div class="card-body py-4">
                  <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                      <h4 class="mb-2">
                        $79.99
                      </h4>
                      <p class="mb-2">Total Earnings</p>
                      <div class="mb-0">
                        <span class="badge text-success me-2">+9.0%</span>
                        <span class="text-muted">Since Last Month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Table Element -->
          <div class="card border-0">
            <div class="card-header">
              <h5 class="card-title">
                Basic table
              </h5>
              <h6 class="card-subtitle text-muted">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nemo assumenda reprehenderit officia magni, autem libero quam placeat accusamus, iste earum ex. Porro ducimus labore saepe voluptates soluta itaque excepturi.
              </h6>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          
        </main>
    
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-0 text-start">
                <div class="mb-0">
                  <a href="#" class="text-muted"><strong>M.Saleh</strong></a>
                </div>
              </div>
              <div class="cold-6 text-end">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">About</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Terms</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Booking</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>

    </div>













<!-- button -->



























  </body>
</html>
