<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Spering</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <?php
    session_start();
    require_once('conn.php');
  ?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              Spering
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="work.php">Work </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.php"> Category </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login.php">
                <span>
                  Login
                </span>
              </a>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/experience-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">             
              <form class="form">
                <div class="flex-column">
                  <h2>Register</h2><br>
                  <div class="flex-column">
                  <label>Name </label></div>
                  <div class="inputForm">
                    <img src="images/person.svg" alt="20px" width="20px" height="20px"><input placeholder="Enter your Name" class="input" type="text">
                  </div>
                  <label>Email </label></div>
                  <div class="inputForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20"><g data-name="Layer 3" id="Layer_3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
                    <input placeholder="Enter your Email" class="input" type="text">
                  </div>
                <div class="flex-column">
                <div class="flex-column">
                  <label>Password </label></div>
                  <div class="inputForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
                    <input placeholder="Enter your Password" class="input" type="password">
                  </div>
                <div class="flex-column">
                  <label>Location </label></div>
                  <div class="inputForm">
                  <img src="images/puntina.jpg" alt="30px" width="30px" height="30px">
                  <?php
                  
                  $sql = "SELECT ID_regione, nome FROM regioni ORDER BY nome";
                  $result = $db->query($sql);

                  echo '<select name="regione" id="regione" required>';
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo '<option value="' . htmlspecialchars($row["ID_regione"]) . '">' . htmlspecialchars($row["nome"]) . '</option>';
                      }
                  } else {
                      echo '<option value="">Nessuna regione trovata</option>';
                  }
                  echo '</select>';
                  
                  ?>                </div>
                <div class="flex-column">
                  <label>Select Your Role </label></div>
                  <div class="inputForm">
                    <select class="input" name="role" >
                      <option disable selected value>--Select An Option--</option>
                      <option value="guest">Guest</option>
                      <option value="industry">Industry</option>
                    </select>
                </div>
                <button class="button-submit">Register</button>
                <p class="p">Already have an account? <span class="span"><a href="Login.php">Log In</a></span></p>
                </form>
                <?php
                  if($_POST){
                    $nome = trim($_POST['nome']);
                    $email = trim($_POST['email']);
                    $password = trim($_POST['password']);
                    $regione = trim($_POST['regione']);
                    $ruolo = trim($_POST['ruolo']);
                    $passwordHash = password_hash($password);

                  if($ruolo == 'guest'){
                    $stmt = $db->prepare("INSERT INTO candidati (email, nome, password, regione_id) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("sssi", $email, $nome, $password, $regione);
                    
                    if ($stmt->execute()) {
                        $_SESSION['userRole'] = 'guestRegistrazione';
                        $_SESSION['userID'] = $email;
                        header("Location: semiutente.php");
                    } else {
                        echo "Errore durante la registrazione candidato: " . $stmt->error;
                    }

                    $stmt->close();
                  }
                  else{
                    if($ruolo == 'industry'){
                      $stmt = $db->prepare("INSERT INTO aziende (email, nome, password, regione_id) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("sssi", $email, $nome, $password, $regione);
                    
                    if ($stmt->execute()) {
                      $_SESSION['userRole'] = 'aziendaRegistrazione';
                      $_SESSION['userID'] = $email;
                      header("Location: semiazienda.php");
                    } else {
                        echo "Errore durante la registrazione candidato: " . $stmt->error;
                    }

                    $stmt->close();
                    }
                  }
                }
                ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end experience section -->
  <!-- info section -->
<section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
              Spering
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
            <a href="#">
              <img src="images/youtube.png" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="login.php">Login </a>
                  </li>
                  <li class="">
                    <a class="" href="work.php">Work </a>
                  </li>
                  <li class="">
                    <a class="" href="category.php">Category </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Offices
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="email" placeholder="Email">
                  <button>
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

</html>