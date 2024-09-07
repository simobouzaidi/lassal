


<?php
// submit.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lassal";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <table>
        <thead>

        </thead>
        <tbody>
<?php
$query=mysqli_query($conn,"SELECT* FROM 'client'");
while($row=mysqli_fetch_column($query)) {
 
?>
<tr>
<td><?php  echo $row['id_cleint']; ?></td>
  <td> <?php echo $row['nom_cl'] ;?></td>
  <td> <?php echo $row['prenom_cl'] ;?></td>
  <td> <?php echo $row['prix'] ;?></td>
  <td> <?php echo $row['date_inscp'] ;?></td>
    
</tr>
<?php   }?>
        </tbody>
    </table>
</body>
</html>

