<?php 
session_start(); 

$uname = $_POST['uname']; 
$code = $_POST['code']; 
include("../base.php"); 

// checkin if the uname exists 
$sql_uname_check = "SELECT * FROM admin WHERE name='$uname'"; 
$result_name_check = mysql_query($sql_uname_check); 
$peepsfound = mysql_num_rows($result_name_check); 
// if uname not found, note that and end 
if ($peepsfound < 1) { 
    $error = "User $uname not found."; 
// if uname does exist, continue with processing 
} else { 
    // checking if codewords match 
    $sql_code_get = "SELECT * FROM admin WHERE code='$code'"; 
    $uname_info = mysql_fetch_array(mysql_query($sql_code_get)); 
    $encryptcode = $uname_info['code']; 
    // if doesn't match, note that and end 
    if ($encryptcode != $code) { 
        $error = "Invalid password.  Try again."; 
    // if do match, let in and pass on info to session variables 
    } else { 
        
        $_SESSION['unamename'] = $uname_info['name']; 
        $_SESSION['encryptcode'] = $uname_info['code'];
		$_SESSION['id'] = $uname_info['id']; 
        $_SESSION['name'] = $uname_info['name']; 
    } 
} 


if (!$_SESSION['unamename']) { 
    if ($error) { 
        echo "<font face=verdana color=red size=2><b><center>".$error."</center></b></font>"; 
        include("login.html");
        
     } else { 
        include("login.html"); 
    } 
} else { 
    echo "<html><head><title>Welcome Back</title></head><body><br><br><br><font face=verdana size=2 ><b><center>Log In successful.<br><br>  
<a href=index.php>Click here</a> to continue.</body></html>"; 
} 
?>