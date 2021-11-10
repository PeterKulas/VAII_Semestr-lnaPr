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

    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/navbar_footer.css">

    <title>About</title>

</head>


<body>
    <div class="container-fluid g-0">
        <?php include("components/navbar.html"); ?>
        <div class="row g-0">
            <div class="col-sm-12 g-0">
                <img src="../images/about.png" alt="about us">
            </div>
        </div>

        <div class="row g-0 justify-content-center">
            <div class="col-sm-3 main gy-4 p-4">
                <p>
                    Sme organizácia s názvom BookRent, ktorá sa zaoberá požíčavaním starších ale aj najnovších
                    knižných titulov. Spočiatku sme vznikli ako skupina priateľov, ktorí si vymieňajú knihy. Avšak sme
                    sa
                    rozšírili viac do povedomia ľudí založili túto organizáciu, ktorej člennmi sa môžete stať aj vy.
                    Svoju knihu si tu nájde naozaj každý. Od najmenších čitateľov, čo len začínajú objavovať
                    svet kníh až po skúsených čo už prelúskali nejakú tu ságu.<br>
                </p>
            </div>
            <div class="col-sm-3 main gy-4 p-4">
                <p> Celá idea je založená na tom, že kniha by mala byť dostupná každému a nie každý si chce za knihy
                    platiť. Taktiež sa viaceré staršie tituly už zakúpiť nedajú a práve preto sme tu my. V prípade, že
                    knihu nemáme, urobíme všetko preto aby sme ju pre vás zohnali.</p>
            </div>
            <div class="col-sm-3 main gy-4 p-4">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a, reiciendis earum repudiandae iusto
                    asperiores recusandae possimus fugiat excepturi corrupti praesentium facilis illum molestiae
                    architecto dolorem ab impedit quam suscipit?</p>
            </div>
        </div>

        <?php include("components/footer.html"); ?>
    </div>
    <?php include("components/modalRegister.html");?>
    <?php include("components/modalLogin.html"); ?>

</body>

</html>