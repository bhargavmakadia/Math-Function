<?php
if (isset ($_POST['Min']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $no3 = $_POST['txt3'];
    $no4 = $_POST['txt4'];
    $no5 = $_POST['txt5'];
    $no6 = $_POST['txt6'];
    $no7 = $_POST['txt7'];
    $no8 = $_POST['txt8'];
    $no9 = $_POST['txt9'];
    $no10 = $_POST['txt10'];
    echo min($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
}
if (isset ($_POST['Max']))
{
    $no1 = $_POST['txt1'];
    $no2 = $_POST['txt2'];
    $no3 = $_POST['txt3'];
    $no4 = $_POST['txt4'];
    $no5 = $_POST['txt5'];
    $no6 = $_POST['txt6'];
    $no7 = $_POST['txt7'];
    $no8 = $_POST['txt8'];
    $no9 = $_POST['txt9'];
    $no10 = $_POST['txt10'];
    echo max($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
}
?>
<html>
    <form method="post">
        no1:<input type="text" name="txt1"/><br/>
        no2:<input type="text" name="txt2"/><br/>
        no3:<input type="text" name="txt3"/><br/>
        no4:<input type="text" name="txt4"/><br/>
        no5:<input type="text" name="txt5"/><br/>
        no6:<input type="text" name="txt6"/><br/>
        no7:<input type="text" name="txt7"/><br/>
        no8:<input type="text" name="txt8"/><br/>
        no9:<input type="text" name="txt9"/><br/>
        no10:<input type="text" name="txt10"/><br/>
        <input type="submit" value="Min" name="Min"/>
        <input type="submit" value="Max" name="Max"/>
</form>
</html>