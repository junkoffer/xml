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
    <!-- The thing above the navigation bar -->
    <div class="jumbotron">
        <h1 class="text-center">Company slogan or someting neat like a picture :) </h1>
    </div>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
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
                    <button class="btn dropdown-custom dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ärenden</button>
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
    <br>




    <!-- Webpage content -->

    <div class="container-fluid">
        <div class="container">
            <div class="table-responsive">


                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="h3">#</th>
                            <th scope="col" class="h3">Ämne</th>
                            <th scope="col" class="h3">Skapat</th>
                            <th scope="col" class="h3">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-danger">
                            <th scope="row">1</th>
                            <td>Vattnet funkar inte</td>
                            <td>2019-01-22</td>
                            <td>Ej löst</td>
                            <td>
                                <div>
                                    <form action="show-errand.php" method="POST">
                                        <input type="hidden" name="goto-errand" id="">
                                        <button type="submit" class="btn btn-primary float-left">Visa</button>
                                    </form>
                                    <button class="btn btn-danger float-right">Löst</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">2</th>
                            <td>Kallt i lägenhet</td>
                            <td>2018-12-24</td>
                            <td>Löst</td>
                            <td>
                                <div>
                                    <form action="show-errand.php" method="POST">
                                        <input type="hidden" name="goto-errand" id="">
                                        <button type="submit" class="btn btn-primary float-left">Visa</button>
                                    </form>
                                    <button class="btn btn-danger float-right" disabled>Löst</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">3</th>
                            <td>Ytterdörr trasig #FYLLA</td>
                            <td>2019-01-01</td>
                            <td>Löst</td>
                            <td>
                                <div>
                                    <form action="show-errand.php" method="POST">
                                        <input type="hidden" name="goto-errand" id="">
                                        <button type="submit" class="btn btn-primary float-left">Visa</button>
                                    </form>
                                    <button class="btn btn-danger float-right" disabled>Löst</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">4</th>
                            <td>Störande granne</td>
                            <td>2018-12-24</td>
                            <td>Nytt meddelande</td>
                            <td>
                                <div>
                                    <form action="show-errand.php" method="POST">
                                        <input type="hidden" name="goto-errand" id="">
                                        <button type="submit" class="btn btn-primary float-left">Visa</button>
                                    </form>
                                    <button class="btn btn-danger float-right">Löst</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>




    </div>
    <br><br>












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