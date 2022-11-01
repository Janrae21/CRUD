<?php
 include "Connect.php";
 $id = $_GET['id'];
 $sql = "DELETE FROM `music` WHERE id=$id";
 $result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record is Successfully Deleted");
}
else {
    echo "Field" . mysqli_errno($conn);
}
?>