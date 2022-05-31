<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=praktikum03','root','');
$stmt = $pdo->query("SELECT name, email, password FROM user");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    echo "<tr><td>";
    echo($row['name']);
    echo "</td><td>";
    echo($row['email']);
    echo "</td><td>";
    echo($row['password']);
    echo ("</td><tr>\n");
}
echo "</table>\n";?>