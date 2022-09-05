<?php
if ($_POST)
{
    $rand = $_POST['txt1'];
    echo rand();
}
?>
<html>
<body>
<form method="post">
Random : <input type="text" name="txt1"/>
<input type="submit" value="Click Me"/>
</form>
</body>
</html>