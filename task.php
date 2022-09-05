<?php
if (isset ($_POST['Binary']))
{
    $no1 = $_POST['txt1'];
    echo decbin($no1);
}
if (isset ($_POST['Decimal']))
{
    $no2 = $_POST['txt2'];
    echo bindec($no2);
}
if (isset ($_POST['Oct']))
{
    $no3 = $_POST['txt3'];
    echo decoct($no3);
}
?>
<html>
    <form method="post">
        no1:<input type="text" name="txt1"/>
        no2:<input type="text" name="txt2"/>
        no3:<input type="text" name="txt3"/>
        <input type="submit" value="Binary" name="Binary"/>
        <input type="submit" value="Decimal" name="Decimal"/>
        <input type="submit" value="Oct" name="Oct"/>
</form>
</html>