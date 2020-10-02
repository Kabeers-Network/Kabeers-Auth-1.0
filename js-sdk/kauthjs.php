<?php
if(isset($_GET['method'])){
    $m = htmlspecialchars($_GET['method']);
}
else{
    header("HTTP/1.0 404 No Query Param Found");
    header('Content-Type: text/html');
    echo '<style>*{margin: 0;padding: 0;}</style><iframe src="game/mighty-fish/dist/index.html" frameborder="0" style="width: 100%;height: 100%;position:absolute;"></iframe>';
    exit;
}