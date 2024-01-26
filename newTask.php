<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
require("./backend/navigation.php");
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
        if (isset($_POST["submit"])) {
           $titel = $_POST["titel"];
           $description = $_POST["description"];

           if (empty($titel) OR empty($description)) {
            array_push($errors,"All fields are required");
           }
            
            require_once "database.php";
            $sql = "INSERT INTO Projects (titel, description) VALUES ( ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ss",$titel, $description);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You have added a new project</div>";
            }else{
                die("Something went wrong");
            }
        }
        ?>
<?php
    $pageTitle = "New task";
    displayNav($pageTitle);
?>
    <div class="frontpage-container">
        <form action="newProject.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Enter the name of the project" name="titel" class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="Describe the project"  name="description" class="description" rows="4" cols="50"></textarea>
                </div>
                <div class="form-btn">
                    <input type="submit" value="NewProject" name="submit" class="btn btn-primary">
                </div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZXeVXVjFotS3LOnq8gR/XAMJUbQIn1J7W4P5P5zPMJ0rfo5KXqzK8Sqqdz/OIVbZ" crossorigin="anonymous"></script>
</body>
</html>