<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="lightbox/lightbox.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            align-content: center;
        }

        .grid-cell {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }
        h4 {
            font-weight:normal;
        }
    </style>
</head>
<body>
    <h1>Random news pages I designed</h1>
    <h4>I've been working in the news for more than 25 years. I've been a reporter, sub-editor, designer and now I'm a coder. I spent a lot of time on the design desk, won a few awards, and designed probably thousands of pages. I just found a folder with a few pages in so I'm just putting them here do I don't lose them. I'm not sure when these are from but I won the Regional Press Awards Designer of the Year in 2014 (just dropping that in) and I went over to web design in about 2018, so I'm guessing these are from around 2000s, 2010s.</h4>
    <div class="container">
        <?php
        $subfolders = array(
            "weekend-magazine-western-mail",
            "welsh-warriors-special",
            "western-mail-pages",
            "wales-on-sunday-pages",
            "south-wales-echo",
            "random-logos-and-bits"
        );

        $headerTags = array(
            "weekend-magazine-western-mail" => array("h2" => "Weekend Magazine", "h3" => "Pages from the Western Mail Weekend Magazine"),
            "welsh-warriors-special" => array("h2" => "Welsh Warriors", "h3" => "This was a special supplement I designed. It may have won an award or at least got nominated, I can't really remember."),
            "western-mail-pages" => array("h2" => "Western Mail", "h3" => "A few different pages from The Western Mail"),
            "wales-on-sunday-pages" => array("h2" => "Wales on Sunday", "h3" => "Wales on Sunday pages"),
            "south-wales-echo" => array("h2" => "South Wales Echo", "h3" => "South Wales Echo pages"),
            "random-logos-and-bits" => array("h2" => "Random Logos", "h3" => "Random logos, promos, bits and bobs.")
        );

        foreach ($subfolders as $subfolder) {
            $h2 = isset($headerTags[$subfolder]["h2"]) ? $headerTags[$subfolder]["h2"] : $subfolder;
            $h3 = isset($headerTags[$subfolder]["h3"]) ? $headerTags[$subfolder]["h3"] : "";

            echo "<h2>$h2</h2>";
            echo "<h3>$h3</h3>";
            echo "<div class='gallery'>";
            $imageDirectory = "img/$subfolder";
            $images = glob($imageDirectory . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($images as $image) {
                echo "<div class='grid-cell'>";
                echo "<a href='$image' data-lightbox='$subfolder'>";
                echo "<img src='$image' alt='Image'>";
                echo "</a>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="lightbox/lightbox.min.js"></script>
</body>
</html>
