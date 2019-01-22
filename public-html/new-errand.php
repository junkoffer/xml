<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../includes/main.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">

  <title>Page Titel</title>
</head>

<body>

  <div class="jumbotron">
    <h1 class="text-center">Company slogan or someting neat like a picture :) </h1>
  </div>

  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Company name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Hem</a>
        </li>
        <div class="dropdown">
          <button class="btn dropdown-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Ärenden</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="new-errand.php">Nytt ärende</a>
            <a class="dropdown-item" href="my-errands.php">Mina ärenden</a>
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="help.php">Hjälp</a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br>

  <!-- Webpage content -->

  <div class="container-fluid">
    <div class="container">
      <form action="">
        <div class="form-group">
          <label for="errandtype" class="h2">Ärende typ</label>
          <select name="errandtype" id="errandtype" class="form-control form-control-lg">
            <option value="error-report" selected>Felanmälan</option>
            <option value="Other">Andra saker</option>
          </select>
        </div>
<br><br>
        <div class="form-group">
            <label for="address" class="h3">Adress</label>
            <input type="text" name="address" class="form-control" placeholder="Adress">
          </div>

        <div class="form-group">
          <label for="firstname" class="h3">Förnamn</label>
          <input type="text" name="firstname" class="form-control" placeholder="Förnamn">
        </div>

        <div class="form-group">
          <label for="lastname" class="h3">Efternamn</label>
          <input type="text" name="lastname" class="form-control" placeholder="Efternamn">
        </div>

        <div class="form-group">
          <label for="email" class="h3">E-post</label>
          <input type="email" name="email" class="form-control" placeholder="E-post">
        </div>

        <div class="form-group">
          <label for="phonenumber" class="h3">Telefon</label>
          <input type="text" name="phonenumber" class="form-control" placeholder="Telefonnummer">
        </div>

        <button type="submit" class="btn btn-success">Skicka ärende</button>

      </form>
    </div>


  </div>










  <footer class="container-fluid text-center footer">Site Made By Femskägg och en gubbe</footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
</body>

</html>