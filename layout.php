<!--Page d'acceuil -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/css/bootstrap.min.css' integrity='sha512-fjZwDJx4Wj5hoFYRWNETDlD7zty6PA+dUfdRYxe463OBATFHyx7jYs2mUK9BZ2WfHQAoOvKl6oYPCZHd1+t7Qw==' crossorigin='anonymous' />
    <link rel="stylesheet" href="public/style.css">
    <title>App Museum</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-expand">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Museum Car</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Si non connecté -->
                        <?php if (!$_SESSION) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=signin">Signin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=museum">Museum</a>
                            </li>
                            <li>
                            <figure class="circle2"></figure>
                            </li>
                            <?php endif; ?>
                        
                            <!-- Si connecté -->
                            <?php if ($_SESSION) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=logout">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=cars">Add Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=museum">Museum</a>
                            </li>
                            <li>
                            <figure class="circle1"></figure>
                            </li>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class='container'>
        <?php if (isset($template)) : ?>
            <?php include 'templates/' . $template . '.php' ?>
        <?php endif; ?>
    </main>

    <footer>
    </footer>

    <script type="text/javascript" src="public/js/app.js"></script>
</body>

</html>
