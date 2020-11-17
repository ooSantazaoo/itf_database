<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'santanakano.mysql.database.azure.com', 'ooSantazaoo@santanakano', 'santa+123', 'itf_lab', 3306);
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
$row = mysqli_fetch_array($res)
?>
<form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php echo "$row[name]"; ?>" <br>
    Comment:<br>
    <input type="text" name = "comment" id="idComment" value="<?php echo "$row[comment]"; ?>" <br>
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php echo "$row[link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form>
