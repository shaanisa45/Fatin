<?php
require('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Paparan</title>
</head>
<body>
	<hr>
	<table align="center">
		<p align="center">Akaun Pendaftaran</p>
		<td align="center" bgcolor="lightgrey">ID</td>
		<td align="center" bgcolor="lightgrey">FIRSTNAME</td>
		<td align="center" bgcolor="lightgrey">LASTNAME</td>
		<td align="center" bgcolor="lightgrey">EMAIL</td>
		<td align="center" bgcolor="lightgrey">PHONENUMBER</td>
		<td align="center" bgcolor="lightgrey">PASSWORD</td>

		<?php
		$result =mysqli_query($link,"SELECT * FROM users ");
		while ($array=mysqli_fetch_array($result)) {
              $id=$array['id'];
              echo "ctr";
              echo "<td><center>".$array['id']."</center></td>";
              echo "<td><center>".$array['firstname']."</center></td>";
              echo "<td><center>".$array['lastname']."</center></td>";
              echo "<td><center>".$array['email']."</center></td>";
              echo "<td><center>".$array['phonenumber']."</center></td>";
              echo "<td><center>".$array['password']."</center></td>";

              echo "<td><center>","<a href=\"edit.php?id=id\">EDIT</a>","</center>";
              echo "<td><center>","<a href=\"delete.php?id=$\">DELETE</a>","</center>";
              echo "</tr>";

		}
		?>

</table>

</body>
</html>