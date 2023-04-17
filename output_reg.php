<?

include("../base.php");
$query="SELECT * FROM register";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0066FF;
}
-->
</style>

<a href="index.php" class="style1">BACK</a>
<?
echo "<b><center>Database Output</center></b><br><br>";
echo "TOTAL NUMBER OF REGISTERED ACCOUNTS IS =";
print ($num);
echo "<br>__________________________________________";
$i=0;
while ($i < $num) {

$ID=mysql_result($result,$i,"id");
$accounttype=mysql_result($result,$i,"account_type");
$dob1=mysql_result($result,$i,"dob1");
$dob2=mysql_result($result,$i,"dob2");
$dob3=mysql_result($result,$i,"dob3");
$title=mysql_result($result,$i,"title");
$first_name=mysql_result($result,$i,"first_name");
$last_name=mysql_result($result,$i,"last_name");
$middle_name=mysql_result($result,$i,"middle_name");
$zip=mysql_result($result,$i,"zip");
$address=mysql_result($result,$i,"address");
$country=mysql_result($result,$i,"country");
$state=mysql_result($result,$i,"state");
$home_tel=mysql_result($result,$i,"home_tel");
$home_tel1=mysql_result($result,$i,"home_tel1");
$home_tel2=mysql_result($result,$i,"home_tel2");
$work_tel=mysql_result($result,$i,"work_tel");
$work_tel1=mysql_result($result,$i,"work_tel1");
$work_tel2=mysql_result($result,$i,"work_tel2");
$work_tel3=mysql_result($result,$i,"work_tel3");
$mob_tel=mysql_result($result,$i,"mob_tel");
$mob_tel1=mysql_result($result,$i,"mob_tel1");
$email=mysql_result($result,$i,"email");
$current_password=mysql_result($result,$i,"current_password");
$current_memo=mysql_result($result,$i,"current_memo");

echo"<br>ID Number: $ID<br>Account Type: $accounttype</b><br>Nationality: $country<br>State: $state<br>First Name: $first_name<br>Last Name: $last_name<br>Middle Name: $middle_name<br>Date of Birth: $dob1 $dob2 $dob3<br>Email: $email<br>Password: $current_password<br>PIN: $current_memo<br>Home Tel: $home_tel-$home_tel1-$home_tel2<br>Work Tel: $work_tel-$work_tel1-$work_tel2-$work_tel3<br>Mobile Tel: $mob_tel-$mob_tel1<br>Address: $resi_address $resi_address1<hr><br>";

$i++;
}

?>
