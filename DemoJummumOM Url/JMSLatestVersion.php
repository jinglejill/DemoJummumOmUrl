<?php
    $result = array();
    $result[] = array("version" => "1.3.3");
    $lookup = array("resultCount" => 1, "results" => $result);
    
    echo json_encode($lookup);
?>

