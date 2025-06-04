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
  if(!isset($_SESSION['userRole']) || !isset($_SESSION['userID']) || $_SESSION['userRole'] != 'aziendaRegistrazione'){
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
       
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">             
              <form class="form">
                <div class="flex-column">
                  <h2>Add Info</h2><br>
                  <div class="flex-column">
                  <label>Telephone </label></div>
                  <div class="inputForm">
                    <img src="images/person.svg" alt="20px" width="20px" height="20px"><input placeholder="Enter your Telephone Number" class="input" type="text" name="telefono" required>
                  </div>
                  <label>Address </label></div>
                  <div class="inputForm">
                    <img src="images/person.svg" alt="20px" width="20px" height="20px"><input placeholder="Enter your Address" class="input" type="text" name="indirizzo" required>
                  </div>
                <div class="flex-column">
                <div class="flex-column">
                  <label>Number Of Workers </label></div>
                  <div class="inputForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
                    <input placeholder="Enter your Worker Specific Number" class="input" type="number" step="1" name="numeroDipendenti" required>
                  </div>
                <?php
                  $sql = "SELECT ID_ambito, ambito from ambiti";
                  $result = $db->query($sql);

                  echo '<select name="ambiti" id="ambiti" name="ambito" required>';
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo '<option value="' . htmlspecialchars($row["ID_ambito"]) . '">' . htmlspecialchars($row["ambito"]) . '</option>';
                      }
                  } else {
                      echo '<option value="">Nessun ambito trovato</option>';
                  }
                  echo '</select>';
                ?>
                <button class="button-submit">Add</button>
                </form>
                <?php
                
                  if($_POST){
                    $telefono = $_POST['telefono'];
                    $indirizzo = $_POST['indirizzo'];
                    $dipendenti = $_POST['numeroDipendenti'];

                    $stmt=$db->prepare("INSERT INTO aziende(telefono, indirizzo, n_dipendenti) VALUES (?,?,?) WHERE (.$email.=email)");
                    $stmt->bind_param("ssi", $telefono, $indirizzo, $dipendenti);
                    if ($stmt->execute()) {
                      unset($_SESSION['userRole']);
                      header("Location: login.php");
                    } else {
                        echo "Errore durante la registrazione candidato: " . $stmt->error;
                    }

                    $stmt->close();
                  }

                ?>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-5">
          <div class="img-box">
            <img src="images/experience-img.jpg" alt="">
          </div>
        </div>
  </section>

  <!-- end experience section -->
 

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

</html>