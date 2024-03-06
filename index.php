<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Image Gallery</h1>
        <div class="gallery">
            <?php
            $imageDirectory = "img";
            $images = glob($imageDirectory . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($images as $image) {
                echo "<img src='$image' alt='Image'>";
            }
            ?>
        </div>
    </div>
</body>
</html>
