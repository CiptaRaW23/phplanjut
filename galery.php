<!DOCTYPE html>
<html>
<head>
    <title>Galeri Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            margin: 10px;
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h1>Galeri Gambar</h1>
<div class="gallery">
    <?php 
    $filelist = glob('gambar/*');
    foreach ($filelist as $filename) {
        if (is_file($filename)) {
            // Get the file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            // List of allowed image extensions
            $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array(strtolower($ext), $allowed_ext)) {
                echo '<img src="' . $filename . '" alt="' . basename($filename) . '">';
            }
        }
    }
    ?>
</div>

</body>
</html>
