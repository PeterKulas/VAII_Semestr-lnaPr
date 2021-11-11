<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar_footer.css">
    <title>BookRent</title>
</head>

<body>
    <div class="container-fluid g-0 min-vh-100 ">
        <?php include("components/navbar.html"); ?>

        <div class="row g-0">
            <div class="col-sm-12 nadpis g-0">
                <h1>Vitajte na stránke BookRentu</h1>
                <label>“Svet je ako kniha a tí, ktorí necestujú, sú len na jednej strane.“
                    ― Augustine of Hippo</label>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-sm-2 sluzby g-0">
                <span>Ponúkame vám:</span>
                <ul class="index-zoznamSluzieb">
                    <li>Výpožička kníh</li>
                    <li>Výmena kníh</li>
                    <li>Vyhľadávanie kníh</li>
                    <li>Čitateľský kútik</li>
                    <li>Tlačenie dokumentov</li>
                    <li>Vytváranie researchu</li>
                    <li>Viazanie prác</li>
                </ul>
            </div>

            <div class="col-sm-5 g-0 justify-content-center">
                <div class="row boxes">
                    <div class="row">
                        <div class="box col-sm-5 g-0">
                            <h2>Nadpis</h2>
                            London is the capital city of England. It is the most populous city in the United Kingdom,
                            with
                            a
                            metropolitan area of over 13 million inhabitants.
                        </div>
                        <div class="box col-sm-5 g-0">
                            <h2>Nadpis</h2>
                            Standing on the River Thames, London has been a major settlement for two millennia, its
                            history
                            going
                            back to its founding by the Romans, who named it Londinium.
                        </div>
                    </div>
                    <div class="row">
                        <div class="box col-sm-5 g-0">
                            <h2>Nadpis</h2>
                            Standing on the River Thames, London has been a major settlement for two millennia, its
                            history
                            going
                            back to its founding by the Romans, wh1o named it Londinium.
                        </div>
                        <div class="box col-sm-5 g-0">
                            <h2>Nadpis</h2>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quas laboriosam nam animi
                            culpa
                            placeat
                            voluptates harum, magni quisquam, deserunt commodi, sint corrupti cum unde at quo.
                            Laboriosam,
                            animi
                            consequatur!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 image g-0 justify-content-center">
                <img class="image g-0" src="../images/book.png" alt="book">
            </div>
        </div>
        <?php include("components/footer.html"); ?>
    </div>
    <?php include("components/modalLogin.html"); ?>
</body>

</html>