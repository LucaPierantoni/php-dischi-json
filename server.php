<?php

// la lista viene letta da un file esterno
    $fileContent = file_get_contents('./dischi.json');
    $discList = json_decode($fileContent);

header('Content-Type: application/json');
echo json_encode($discList);
?>