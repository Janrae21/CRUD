<?php
include "Connect.php";

if (isset($_POST['submit'])) {
    $music = $_POST['music'];
    $writter = $_POST['writter'];



    $sql = "INSERT INTO `music`(`id`, `music`, `composer`) VALUES (NULL,'$music','$writter')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php?msg=New Add Music Successfully'); 
    } else {
        echo "Failed" . mysqli_error($conn);
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Boostrap-->
    <link rel="stylesheet" href="../Src/Add Music.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Dashboard Music Playlist</title>
</head>

<body>

    <nav class="navbar  navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573">
        Music Playlist
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add Music</h3>
            <p class="text-muted">Complete the Form below to add a new Music</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Name of Music: </label>
                    <input type="text" class="form-control" name="music" placeholder="Name of Music">
                </div>

                <div class="col">
                    <label class="form-label">Name of Writter: </label>
                    <input type="text" class="form-control" name="writter" placeholder="Name of Writter">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Add</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>

        </form>
    </div>





    <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--Boostrap-->
</body>

</html>