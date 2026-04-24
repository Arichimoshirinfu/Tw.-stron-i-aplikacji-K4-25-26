<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of /Tw.-stron-i-aplikacji-K4-25-26</title>
    <link rel="stylesheet" href="../Tw.-stron-i-aplikacji-K4-25-26/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wdth,wght@87.5,200..900&display=swap" rel="stylesheet">    
</head>
<body>


<?php 
$dir_path = getcwd();
$curr_dir_name = basename($dir_path);
$test = dirname($dir_path, 1);
echo $test
?>

<header>

<h1>Zawartość folderu <?= $dir_path ?></h1>

</header>

<main>
<div>
        <?php
        $curr_folder = ".";
        $files = scandir($curr_folder);
        foreach($files as $file) {
            if($file != "." && $file != '.git') {
                if($file == '..'){
                    echo "<br><hr><a href=/$curr_dir_name/" . $file . ">Wróć</a><hr><br>";
                }
                else{
                    echo "<hr><a href=/$curr_dir_name/" . $file . ">$file</a><hr>";
                    ;
                        if(strpos($file, '.') == false){
                            $file_infile = scandir("$curr_folder/$file");
                                foreach($file_infile as $file_infile_name)
                                    if($file_infile_name == '.' || $file_infile_name == '..'){}
                                        else
                                    echo "<a href=\"$file/$file_infile_name\">$file_infile_name</a><br>";
                        }
                }
            }
        }
        ?>

</div>
</main>

<footer>



</footer>

</body>
</html>