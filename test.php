<?php
    $value = "%27 or 1=1";

    $data = mysql_real_escape_string($value);
    echo $data;
?>