<!DOCTYPE html>
<html>

<body>

<form action=””/>

<input type=”text” name=”id” />

<input type=”submit” />

</form>

</br>

</body>

</html>

<?php
#test
$servername = “localhost”;

$username = “root”;

$password = “toor”;

$dbname = “infosec”;

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

die(“Connection failed: ” . mysqli_connect_error());

}

$id = $_GET[‘id’];
//Vuln?
//what?
$sql = “SELECT * FROM products where ID=”.$id;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) {

echo “ID: ” . $row[“ID”]. ” – Name: ” . $row[“name”]. ” – Price: ” . $row[“price”]. “<br>”;

}

} else {

echo “0 results”;

}

mysqli_close($conn);

?>
