<?php
    $command = escapeshellcmd('python 1.py');
    $output = shell_exec($command);
    echo $output;
?>