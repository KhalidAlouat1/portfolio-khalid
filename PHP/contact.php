<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Portfolio</title>
</head>
<!-- Code voor navbar -->

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mb-5 shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Khalid Alouat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../HTML/home.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../HTML/overmij.html">Over mij</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../HTML/hobbies.html">Hobbies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../HTML/Projecten.html">Projecten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../PHP/contact.php">Contact </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Buttons voor dark/light mode met de code "onclick" om de function swapStyle aan te roepen-->
  <button class="DM-btn2" onclick="swapStyle('../CSS/light.css')"><i class="fas fa-sun"></i></button>
  <button class="DM-btn" onclick="swapStyle('../CSS/dark.css')"><i class="far fa-moon"></i></button>
  <!-- Code voor card(Bootstrap) -->
  <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Contact</h1>
        <p class="lead"></p>
        <div style="height: 40px"></div>

        <hr>
        <div class="container">
          <div class="contactInfo">
            <div class="box">
              <div class="text">
                <h3>Adres</h3>
                <p>ROC Mondriaan,<br>Tinwerf 10, 2544 ED<br>Den Haag</p>
              </div>
            </div>
            <div class="box">
              <div class="text">
                <h3>Telefoon</h3>
                <p>+31 6 12345678</p>
              </div>
            </div>
            <div class="box">
              <div class="text">
                <h3>Social Media</h3>
                <div class="row">
                <div class="col-md-6">
                    <?php
                    try {
                        $db = new PDO("mysql:host=localhost;dbname=portfolio","root", "");
                        $query = $db->prepare ("SELECT * FROM contactgegevens");
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        echo "<table>";
                        foreach ($result as &$data) {
                            echo "<td>" . $data ["account"] . " ";
                            echo "<td>" . $data ["volgers"] . "<br>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } catch(PDOException $e) {
                        die("Error!: " . $e->getMessage());
                    }
                ?>
                </div>

              </div>
            </div>
          </div>
          <div class="contactForm">
            <form class="form_1" action="contactform.php" method="post">
              <h2>Stuur een mail</h2>
              <div class="form_2" class="inputBox">
                <input type="text" name="name">
                <span>Naam</span>
              </div><br>
              <div class="inputBox">
                <input type="text" name="mail">
                <span>E-mail</span>
              </div><br>
              <div class="inputBox">
                <input type="text" name="subject">
                <span>Onderwerp</span>
              </div><br>
              <div class="inputBox">
                <textarea class="Text1" name="message"></textarea>
                <span>Jouw bericht</span>
              </div>
              <button class="btn1" type="submit" name="submit">Verstuur bericht</button>
            </form>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
  <!-- Links/scripts -->
  <script src="../JS/Main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link id="mystylesheet" rel="stylesheet" href="../CSS/light.css">
  <link rel="stylesheet" href="../CSS/style.css">

</body>

</html>

