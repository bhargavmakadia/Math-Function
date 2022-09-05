<?php
if (isset ($_POST['+']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $c = $no1 + $no2;
    echo "Addition is $c";
}
if (isset ($_POST['-']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $c = $no1 -$no2;
    echo "Subtraction is $c";
}
if (isset ($_POST['*']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $c = $no1 * $no2;
    echo "Multiplication is $c";
}
if (isset ($_POST['/']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $c = $no1 / $no2;
    echo "Division is $c";
}
?>
<html>
    <body>
    <form method="post">
        no1:<input type="text" name="txt1"/><br/>
        no2:<input type="text" name="txt2"/><br/>
        <input type="submit" value="+" name="+"/>
        <input type="submit" value="-" name="-"/>
        <input type="submit" value="*" name="*"/>
        <input type="submit" value="/" name="/"/>
</form>
</body>
</html>