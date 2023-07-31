<?php

$fp = fopen('f2.txt', 'w');
fwrite($fp, "Hello\n");
fwrite($fp, "World\n");
fclose($fp);
