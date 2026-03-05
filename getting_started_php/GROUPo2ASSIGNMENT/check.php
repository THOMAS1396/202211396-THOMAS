<?php

$display_errors = ini_get('display_errors');

echo "display_errors = " . $display_errors . "\n";

if ($display_errors == 1) {
    echo "It is all good...";
} else {
    echo "Display errors is OFF.";
}

?>
