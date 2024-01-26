<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

require("./backend/navigation.php");

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: index.php");
    exit();
}

$projectId = $_GET["id"];
var_dump($projectId);

require_once "database.php";

$sql = "SELECT * FROM Projects WHERE id = '$projectId'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <?php
        $pageTitle = $data["titel"];
        displayNav($pageTitle);
    ?>

    <div class="container">
        <a href="newTask.php" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i><span>Add a task</span></a>
        <h3 class="headlineTask">Task list 0 of 0 to do</h3>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZXeVXVjFotS3LOnq8gR/XAMJUbQIn1J7W4P5P5zPMJ0rfo5KXqzK8Sqqdz/OIVbZ" crossorigin="anonymous"></script>
</body>
</html>