<?php
if(isset ($_POST['year']))
{
    $no1 = $_POST['txt1'];

    if ($no1 % 4 == 0){
        echo "leap year";
    }
    else {
        echo "not leap year";
    }
}
?>
<html>
    <body>
    <form method="post">
        no1:<input type="text" name="txt1"/><br/>
        <input type="submit" value="year" name="year"/>
        </form>
</body>
</html>