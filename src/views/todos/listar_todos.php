<?php
    echo "<h1>Listar Todos</h1>";
    //require 'config/mysqliection_db.php';

    $mysqli = new mysqli('mysql_db', 'root', 'root', 'todos');

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $result = $mysqli->query("SELECT * FROM todos");

    echo "<table class='table'>";
    echo "<thead>";
    echo " <tr>";
    echo " <th>ID</th>";
    echo " <th>Name</th>";
    echo " <th>Status</th>";
    echo " <th></th>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {    
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "<td><a href='updateform.php?id=" . $row['id'] . "'>Edit</a></td>";
        echo "</tr>";
    }
    echo "</thead>";
    echo "<tbody>";
?>