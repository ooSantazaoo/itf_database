<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'santanakano.mysql.database.azure.com', 'ooSantazaoo@santanakano', 'santa+123', 'itf_lab', 3306);
$name=$_POST['name'];
$comment=$_POST['comment'];
$link=$_POST['link'];
$sql="UPDATE guestbook SET Name='$name',Comment='$comment',Link='$link' WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>