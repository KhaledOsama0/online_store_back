<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_store";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// استقبال البيانات من الفورم
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

// تشفير الباسورد (مهم جدًا)
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

// تجهيز الاستعلام
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_pass')";

// تنفيذ الاستعلام
if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center;color:green;'>Registration successful!</h2>";
  echo "<p style='text-align:center;'><a href='index.html'>Go to Home</a></p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// قفل الاتصال
$conn->close();
?>
