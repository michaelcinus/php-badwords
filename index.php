<?php 

    $badwords = $_GET["badwords"];

?>

<h1>

    <?php 
    
    $text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, distinctio minus vero ad a eum magni. Harum quae inventore est, ullam, vitae dolores maxime soluta deleniti aut ex obcaecati labore.';

    $sText = str_replace ($badwords , "***", $text);
    echo $sText;
    
    ?>



</h1>