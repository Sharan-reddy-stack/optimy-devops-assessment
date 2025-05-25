<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM test");
echo "<table border='1'>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $val) echo "<td>$val</td>";
    echo "</tr>";
}
$conn->close();
?>

