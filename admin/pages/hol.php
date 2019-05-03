<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>
<form method="POST">
Year:<input type="number" name="year" value="<?php echo date("Y"); ?>">
        <br>
Month:<select name="month">
        <option value="<?php echo date("m"); ?>"><?php echo date("M"); ?>
        <option value="01">January
        <option value="02">February
        <option value="03">March
        <option value="04">April
        <option value="05">May
        <option value="06">June
        <option value="07">July
        <option value="08">August
        <option value="09">September
        <option value="10">October
        <option value="11">November
        <option value="12">December
    </select>
    <br>
    <input type="Number" name='num'>
    <br>
    <input type="Submit" name="save">
</form>
<?php
if(isset($_POST['save'])){
    $mnth=$_POST['month'];
    $yr=$_POST['year'];
    $num=$_POST['num'];
    mysqli_query($conn,"Insert into holnum(month,year,num) Values($mnth,$yr,$num)");

}
?>

<?php 
    }
?>