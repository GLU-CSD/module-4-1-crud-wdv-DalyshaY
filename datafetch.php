<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productenlijst</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="margin: 50px;">
    <h1>Productenlijst</h1>
    <br>
    <table class="shop">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categorie_id</th>
                <th>Prijs</th>
                <th>Type</th>
                <th>Beschikbaarheid</th>
                <th>Rating</th>
                <th>Naam</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nagelshop";

            $connection = new mysqli($servername, $username, $password, $database);
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM nagelshop";
            $result = $connection->query($sql);

            if (!$result) {
                die("invalid query: " . $connecton->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["Id"] . "</td>
                <td>" . $row["Categorie_id"] . "1</td>
                <td>" . $row["Prijs"] . "25.00</td>
                <td>" . $row["Type"] . "Met design</td>
                <td>" . $row["Beschikbaarheid"] . "21-05-2024</td>
                <td>" . $row["Rating"] . "7.5</td>
                <td>" . $row["Naam<"] . "Acryl met design</td>
                <td>
                    <a href='update'>Update</a>
                    <a href='delete'>Delete</a>
                </td>
            </tr>";
            }


            ?>
        </tbody>
    </table>
</body>

</html>