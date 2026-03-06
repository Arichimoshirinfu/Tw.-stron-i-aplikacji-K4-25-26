<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="#">Odnośnik + parametry</a>
    <pre>
    <?php 
    $_GET = [
        "page" => "14",
        "table" => "events_taxonomies",
        "v" => "NTyBGd6RV20"
    ];
    print_r($_GET)
    ?>
    </pre>

</body>
</html>