<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
    <title><?= $DATA['title'] ?></title>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <main>
        <!-- hola -->

        <?php




        // $users = ($DATA['userDao'])->select();
        // foreach ($users as $user) {
        //     echo $user->user_nombre . "<br>";
        //     echo $user->user_user . "<br>";
        //     echo $user->user_pass . "<br>";
        //     echo $user->user_foto . "<br>";
        //     echo $user->user_last . "<br>";
        //     echo $user->user_created . "<br>";
        // }
        ?>
    </main>
</body>
<foot>
    <?php include('./src/templates/panel.component/foot.php') ?>
</foot>

</html>