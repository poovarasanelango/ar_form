<?php

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "account";

$uname = $_POST['userName'];
$email = $_POST['email'];
$upassword = $_POST['newPassword'];

//$emal = $_POST['emal'];



// if (extension_loaded('pdo')) {
//   echo 'PDO is installed';
// } else {
//   echo 'PDO is not installed';
// }

// if (extension_loaded('pdo_mysql')) {
//     echo 'PDO_MYSQL is installed';
// } else {
//     echo 'PDO_MYSQL is not installed';
// }


try{

  // $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn= new PDO("mysql:host=localhost;dbname=account", "root","root");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO info (uname, email, upassword)
  VALUES ('$uname', '$email', '$upassword')";
  // use exec() because no results are returned
  $conn->exec($sql);

  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>