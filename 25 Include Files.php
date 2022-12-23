<!-- PHP Include Files -->
<title>PHP Include Files</title>

<?php
#require will produce a fatal error (E_COMPILE_ERROR) and stop the script
// Use require when the file is required by the application.
require 'PHP Testing/header.php';

#include will only produce a warning (E_WARNING) and the script will continue
// Use include when the file is not required and application should continue when file is not found.
include 'PHP Testing/footer.php';
?>