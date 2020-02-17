<?php
if (isset($_GET['id']) and $_GET['id'] > 0) {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Forma3</title>
    </head>

    <body>
        <header>
            <div class="navbar">
                <div class="logo">
                    <a href="#"><img src="images/forma3logo.png" alt=""></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#formation">Formations</a></li>
                        <li><a href="#apropos">A propos</a></li>
                        <li><a href="logout.php"><button>logout</button></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="fond">
            <div class="fond-text">
                <h1>Bienvenue sur la plateforme</h1>
                <h2>Forma3</h2>
            </div>

        </div>

        <div class="about" id="apropos">
            <h1>A propos</h1>
            <div class="container">
                <div class="cercle">

                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus asperiores fuga repudiandae nisi
                        eligendi quia magni
                        aspernatur vitae. Excepturi consequatur voluptatibus impedit reprehenderit totam minus harum at
                        laudantium, ullam
                        debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus asperiores fuga repudiandae
                        nisi eligendi quia
                        magni aspernatur vitae. Excepturi consequatur voluptatibus impedit reprehenderit totam minus
                    </p>
                </div>
            </div>
        </div>

        <div class="formation" id="formation">
            <h2>Formation</h2>
            <div class="card">
                <h2 style="padding-top: 20px;">Developpement web</h2>
                <div class="card-image1">

                </div>
                <div class="card-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem consequatur debitis voluptas
                    ofeiciis aut quod
                    laborum quam autem itaque, eaque odit magni maiores architecto veritatis est molestiae ratione.
                    Perferendis, voluptas.
                </div>
            </div>
            <div class="card">
                <h2 style="padding-top: 20px;">Developpement web</h2>
                <div class="card-image1">

                </div>
                <div class="card-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem consequatur debitis voluptas
                    ofaiciis aut quod
                    laborum quam autem itaque, eaque odit magni maiores architecto veritatis est molestiae ratione.
                    Perferendis, voluptas.
                </div>
            </div>
            <div class="card">
                <h2 style="padding-top: 20px;">Developpement web</h2>
                <div class="card-image1">

                </div>
                <div class="card-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem consequatur debitis voluptas
                    ofeiciis aut quod
                    laborum quam autem itaque, eaque odit magni maiores architecto veritatis est molestiae ratione.
                    Perferendis, voluptas.
                </div>
            </div>

        </div>
        <footer>
            <p>&copy; copyright 2019 NaN3.20</p>
        </footer>
    </body>

    </html>
<?php } ?>