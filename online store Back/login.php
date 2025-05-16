<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_store";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// استلام البيانات
$email = $_POST['email'];
$password = $_POST['password'];

// استعلام التحقق من المستخدم
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    echo "<h2 style='text-align:center;color:green;'>Login successful!</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Go to Home</a></p>";
  } else {
    echo "<h3 style='text-align:center;color:red;'>Wrong password.</h3>";
  }
} else {
  echo "<h3 style='text-align:center;color:red;'>User not found.</h3>";
}

$conn->close();
?>
