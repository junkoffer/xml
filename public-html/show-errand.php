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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem</a>
                </li>
                <div class="dropdown">
                    <button class="btn dropdown-custom dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ärenden</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="new-errand.php">Nytt ärende</a>
                        <a class="dropdown-item" href="my-errands.php">Mina ärenden<span class="sr-only">(Current)</span></a>
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


    <div class="container bg-light">
        <div>
            <h3>Ärende titel här</h3>
        </div>
        <div class="border">
            <p>
                Represetant från staten: <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsum illo illum exercitationem nesciunt,
                cupiditate reprehenderit est tenetur deserunt praesentium a. Corporis, accusantium quaerat laboriosam
                ea molestiae qui maiores cumque!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate quis ducimus dolorum doloremque
                unde omnis inventore vel id facilis, explicabo autem. Sit dolores aliquid maiores iste facilis animi
                possimus consequatur! <br>MVH robot</p>
                <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#reply-errand">Svara</button>
        </div>
<br>
        <div class="border">
                <p>
                    Du skrev: <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsum illo illum exercitationem nesciunt,
                    cupiditate reprehenderit est tenetur deserunt praesentium a. Corporis, accusantium quaerat laboriosam
                    ea molestiae qui maiores cumque!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate quis ducimus dolorum doloremque
                    unde omnis inventore vel id facilis, explicabo autem. Sit dolores aliquid maiores iste facilis animi
                    possimus consequatur! <br>MVH robot</p>
            </div>

    </div>




    <br><br>


    <div class="modal fade" id="reply-errand" tabindex="-1" role="dialog" aria-labelledby="Modal-Titel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center" id="Modal-Titel">Svara på ärende</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="errand-reply.php" method="POST">
                            <div class="form-group">
                                <label for="reply-messagse">Svar</label>
                                <textarea name="reply-message" id="reply-message" cols="40" rows="10" placeholder="Svarstext" class="form-control"></textarea>
                            </div>
                            <div>
                                <br>
                                <input type="submit" name="usr-add" value="Lägg till" class="btn btn-success">
                            </div>
                        </form>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-modal-exit" data-dismiss="modal">Stäng</button>
                    </div>
                </div>
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