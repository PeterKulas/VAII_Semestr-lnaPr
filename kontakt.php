<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kontakt.css">
    <link rel="stylesheet" href="../css/navbar_footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Kontakt</title>
</head>

<body>
    <div class="container-fluid g-0 ">
    <?php include("components/navbar.html"); ?>

        <div class="row mt-5 g-0">
            <div class="main-container">
                <div class="contact-info">
                    <h4>Kontaktuj nás</h4>
                    <ul>
                        <li><i class="fa fa-location-arrow"></i>
                            <span>Oščadnica 188, 02301</span>
                        </li>
                        <li><i class="fa fa-envelope"></i>
                            <span>kontakt@gmail.com</span>
                        </li>
                        <li><i class="fa fa-phone-square"></i>
                            <span>(+421) 944 889 445</span>
                            <p>Podpora: 8:00-18:00</p>
                        </li>
                    </ul>

                    <div class="ci-footer">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-github-square"></i>
                    </div>
                </div>
                <div class="contact-form">
                    <span>Napíš nám mail</span>
                    <form name="form">
                        <input type="text" id="fname" name="fname" placeholder="Meno"><br>
                        <input type="text" id="fmail" name="fmail" placeholder="E-mail"><br>
                        <textarea rows="6" cols="30" name="fTextArea" placeholder='Správa...'></textarea>
                    </form>
                    <button type="submit" class="contact-btn">Odoslať</button>
                </div>
            </div>
        </div>

        <?php include("components/footer.html"); ?>
    </div>
    <?php include("components/modalRegister.html"); ?>
    <?php include("components/modalLogin.html"); ?>

</body>

</html>