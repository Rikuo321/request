<?php

mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE status = 'aktif' ORDER BY id DESC LIMIT 8 OFFSET last_id")or die(mysql_error());

 ?>
