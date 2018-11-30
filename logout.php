 <?php
// session destroy and logout return to home page
session_start();
session_destroy();
echo '<a href="index.php" >Home</a>';
header("Location: index.php");
?>
<br/>
<br/>