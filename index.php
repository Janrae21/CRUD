<?php 
include 'Connect.php';

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
        <?php 

        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        ?>
        <a href="Add Music.php" class="btn btn-primary mb-4">Add Music</a>
        <table class="table table-hover text-center ">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Music</th>
                    <th scope="col">Writter</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                
                $sql = "SELECT * FROM `music`";
                $result=mysqli_query($conn, $sql);
                if($result){
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['music'] ?></td>
                    <td><?php echo $row['composer'] ?></td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i
                                class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php
               

                }
                }
                ?>
            </tbody>
        </table>
    </div>




    <!--Boostrap-->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--Boostrap-->
</body>

</html>