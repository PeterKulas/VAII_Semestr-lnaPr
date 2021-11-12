<?php
    require "classes/user.classes.php";
    $userStorage = new UserStorage();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/adminPanel.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidebar">
                <h4>Admin panel</h4>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li class="list-item"><a href="index.php">Domov</a></li>
                    <li class="list-item"><a href=" #">Používatelia</a></li>
                    <li class="list-item"><a href=" #">Databáza kníh</a></li>
                </ul><br>
            </div>

            <div class="col-sm-10 maincontent">
                <h2>Používatelia</h2>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Meno</th>
                            <th scope="col">Priezvisko</th>
                            <th scope="col">Email</th>
                            <th scope="col">Heslo</th>
                            <th scope="col">Dátum registrácie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($userStorage->getAllUsers() as $user) { ?>
                        <tr>
                            <th scope="row"><?php echo $user["id"] ?></th>
                            <td><?php echo  $user['firstname'] ?></td>
                            <td><?php echo  $user['lastname']  ?></td>
                            <td><?php echo  $user['email']  ?></td>
                            <td>
                                <?php $tempPass = substr($user['password'],0,10)." ..."; 
                                echo  $tempPass  ?>
                            </td>
                            <td><?php echo  $user['registrationDate']  ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/adminPanel.js"></script>
</body>

</html>