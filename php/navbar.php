<?php if (isset($_SESSION['username'])) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><i class='bx bxs-bowl-hot'>Bite Station</i></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                      <a class="nav-link" href="index.php">Home</a>
                      <a class="nav-link" href="aboutus.php">About Us</a>
                      <a class="nav-link" href="contact.php">Contact</a>
                      <a class="nav-link" href="diets.php">Recipes</a>
                      <a class="nav-link btn btn-dark" href="../login_register/logout.php">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
     </nav>

<?php } else{ ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><i class='bx bxs-bowl-hot'>Bite Station</i></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                      <a class="nav-link" href="index.php">Home</a>
                      <a class="nav-link" href="aboutus.php">About Us</a>
                      <a class="nav-link" href="contact.php">Contact</a>
                      <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Login/Register
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="../login_register/login.php">Login</a></li>
                          <li><a class="dropdown-item" href="../login_register/register.php">Register</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
    </nav>
<?php } ?>
