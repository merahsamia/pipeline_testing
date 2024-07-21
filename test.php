<?php 

if(strpos(file_get_contents('index.php'), 'Created 123') !== false) {
    echo "Test Passed";
} else {
    echo "Test Failed";
    exit(1);
}


?>
