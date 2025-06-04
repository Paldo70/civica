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

<body>
  <?php

  session_start();
  if(!isset($_SESSION['userRole']) || !isset($_SESSION['userID']) || $_SESSION['userRole'] != 'azienda'){
    header("Location: login.php");
  }
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
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Hire Freelancer <br>
                      Here
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by
                      the readable content of a page
                    </p>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Hire Freelancer <br>
                      Here
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by
                      the readable content of a page
                    </p>
                    </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Hire Freelancer <br>
                      Here
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by
                      the readable content of a page
                    </p>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- experience section -->
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
      </div>
      <div class="detail-box">
        <h2>
         Select The Function You Want To Unlock
        </h2>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">             
              <form class="form">
                <div class="flex-column">
                  <h2>Add Here To Upload A Request</h2><br>
                  <label>Description </label></div>
                  <div class="inputForm">
                    <input placeholder="Enter The Description " class="input" type="text" name="description" required>
                  </div>
                
                <div class="flex-column">
                  <label>Date Of Start </label></div>
                  <div class="inputForm">
                    <input placeholder="Enter The Starting Date" class="input" type="Date" name="dateBeginning" required>
                  </div>
                  <div class="flex-column">
                  <label>Date Of End </label></div>
                  <div class="inputForm">
                    <input placeholder="Enter The Ending Date" class="input" type="Date" name="dateEnd" required>
                  </div>
                  <div class="flex-column">
                  <label>Available Position </label></div>
                  <div class="inputForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
                    <input placeholder="Enter The Available Position" class="input" type="number" step="1" min="0" name="posti" required>
                  </div>
                  <input type="submit" value="Inserisci">
                  <?php
                  
                  if($_POST){

                    $descrizione = trim($_POST['description']);
                    $dataInizio = trim($_POST['dateBeginning']);
                    $dataFine = trim($_POST['dateEnd']);
                    $posti = trim($_POST['posti']);
                  }

                  $stmt=$db->prepare("INSERT INTO offertedilavoro(descrizione, inizio, fine, postiDisponibili, id_azienda) VALUES (?,?,?,?,?)");
                    $stmt->bind_param("sddis", $descrizione, $dataInizio, $dataFine, $posti, $email);
                    if ($stmt->execute()) {
                      echo "inserimento riuscito";
                    } else {
                        echo "Errore durante la registrazione candidato: " . $stmt->error;
                    }

                    $stmt->close();
                  
                  ?>
              </form>
          </div>
        </div>
        <div>

      </div class="col-md-7">
                    <?php 
                    
                    $email=trim($_SESSION['userID']);

                    $stmt=$db->prepare("SELECT o.descrizione, c.nome, c.telefono, c.email, r.data_richiesta
                        FROM offerteDiLavoro o, richieste r, candidati c 
                        WHERE (o.email=?) AND (r.id_offerta=o.ID_offerta) AND (r.email=c.email)");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    echo "<table>
                      <tr>
                        <th>Offerta</th>
                        <th>Nome Candidato</th>
                        <th>Telefono Candidato</th>
                        <th>Email Candidato</th>
                        <th>Data Richiesta</th>
                      </tr>";

                    foreach($row as $riga){
                      echo "<tr>";
                      echo "<td>".$riga['o.descrizione']."</td>";
                      echo "<td>".$riga['c.nome']."</td>";
                      echo "<td>".$riga['c.telefono']."</td>";
                      echo "<td>".$riga['c.email']."</td>";
                      echo "<td>".$riga['r.data_richiesta']."</td>";
                      echo "</tr>";
                    }


                    echo "</table>"
                    
                    ?>
      </div>
    </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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