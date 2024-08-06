<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar
        {
            background-color: blue;
            color:white;
            text-transform: capitalize;
            display: flex;
            flex-direction: row;   
        }
        .Container
        {
            gap: 30px;
        }
    </style>
</head>
<body>
    <?php include("navbar_Hp.php");?>
    <?php include("Modules/Carosul.php");?>
    <?php include("Components/foooter.php");?>
</body>
</html>