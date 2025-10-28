<?php
    $blog = selectContent($conn,'panel_blog',['visibility'=>'show']);
    echo json_encode($blog);
?>

