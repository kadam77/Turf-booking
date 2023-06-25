<?php

use PhpMyAdmin\Scripts;

include "admin.php";
$srno = $_GET["id"];
mysqli_query($conn,"DELETE FROM booking where srno=$srno");

echo "done";
?>
//to autorefresh we will add javascript
<script type="text/javascript">
    window.location="table.php";
   </script> 