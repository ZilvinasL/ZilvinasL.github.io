<?php
    require __DIR__ . '/app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack WEB Developer Resume</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,400&display=swap"
        rel="stylesheet">
    <script>
        src = "https://kit.fontawesome.com/6c0c080e32.js"
    </script>
    <script src="https://kit.fontawesome.com/b9fc7e2d74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../app/css/style.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
</head>

<body>
<?php
            include('/app/views/header.php');
            include('/app/views/content.php');
            include('/app/views/footer.php');
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="/app/js/script.js"></script>

</body>

</html>
