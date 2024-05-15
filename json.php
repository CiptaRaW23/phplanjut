<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dalam JSON</title>
</head>
<body>
    <?php
        // Membuat array dengan index nama dan umur
        $data = array(
            array("nama" => "John", "umur" => 25),
            array("nama" => "Doe", "umur" => 30),
            array("nama" => "Jane", "umur" => 28),
            array("nama" => "Alice", "umur" => 35),
            array("nama" => "Bob", "umur" => 40),
            array("nama" => "Eve", "umur" => 27),
            array("nama" => "Charlie", "umur" => 32),
            array("nama" => "David", "umur" => 29),
            array("nama" => "Frank", "umur" => 37),
            array("nama" => "Grace", "umur" => 31),
            array("nama" => "Hannah", "umur" => 26),
            array("nama" => "Ivan", "umur" => 33),
            array("nama" => "Kevin", "umur" => 38),
            array("nama" => "Linda", "umur" => 36),
            array("nama" => "Michael", "umur" => 39)
        );

        // Konversi array menjadi JSON
        $json_data = json_encode($data, JSON_PRETTY_PRINT);

        // Tampilkan data JSON
        echo "<pre>" . $json_data . "</pre>";
    ?>
</body>
</html>
