<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_destroy();
echo "<script> location.href='index.php';</script>"
?>

</body>
</html> 