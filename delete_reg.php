<?

include("../base.php");

$ID=$_POST['ID3'];

$query="DELETE FROM register WHERE id='$ID'";
mysql_query($query);
mysql_close();
?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0033FF;
}
-->
</style>

<span class="style1"><a href="index.php">BACK</a></span><p>
<?
echo "Registered Account Record Deleted";

?>
