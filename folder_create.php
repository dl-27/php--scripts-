<?php
if (mkdir('files/newdir', 0755)) echo 'The "newdir" was created';
else 'Unable to create "newdir"';
?>