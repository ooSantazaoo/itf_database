<html>
<head>
<title>ITF Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://database-santa.azurewebsites.net/form.html">Form</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="https://database-santa.azurewebsites.net/show.php">Show <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'santanakano.mysql.database.azure.com', 'ooSantazaoo@santanakano', 'santa+123', 'itf_lab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><?php echo $Result['link'];?></td>
    <td>
      <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-success" >EDIT</a>
      <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-danger"onclick="return confirm('Confirm data deletion?')">DELETE</a>
    </td>
  </tr>
<?php
}
?>
</table>
</body>
</html>
