<?php 
session_start(); 
if (!$_SESSION['unamename']) { 
    echo "<br><br><font face=verdana size=2 color=red><center>You're not logged in!</center>"; 
    include("login.html"); 
    exit(); 
} 
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html lang="en">

<head>
<title>Administrator's Control Panel</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="CODE_LANGUAGE" content="C#">
<meta name="vs_defaultClientScript" content="JavaScript">
<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
<script type="text/javascript" SRC="../../../includes/scripts/script.js" type="text/javascript"></script>
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" type="text/css" media="aural" href="../includes/css/DPC_auralstyle.css">
<link rel="stylesheet" type="text/css" media="print" href="../includes/css/DPC_printstyle.css">
<link rel="stylesheet" type="text/css" media="screen" href="../includes/css/FA_style.css">
<script type="text/javascript" type="text/javascript" SRC="../js/common.js"></script>
<noscript></noscript>
</head>
<body topmargin="0"leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" ms_positioning="FlowLayout">

<table border="0" cellpadding="0" cellspacing="0" class="wrapperTable" width="100%">
	<tr>
		<td height="138" colspan="2" valign="top" class="headerCell">
		<div class="ddalink">
			<a accesskey="m" title="Skip to menu" class="ddalink" href="#menu">Skip 
			to menu </a>
			<a accesskey="c" title="Skip to content" class="ddalink" href="#content">
			Skip to content </a>
			<a id="AccessLink" accesskey="o" title="Turn on Accessibility Features " class="ddalink" href="#">
			Turn on Accessibility Features</a> </div>
		

<a name="top"></a>
<table class="header" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td valign="bottom">
		<img border="0" src="../fa_logo.gif" width="267" height="46"></td>
		<!--td width="100%" valign="top"><a href="#content" accesskey="s"></a>
		<img border="0" src="/microsites/online_/images/spacer.gif" alt=" " width="1" height="60"></td-->
		<td valign="top">
		<img border="0" SRC="../images/header/header_right_edge.gif" align="right" alt="Online Banking" hspace="0" width="560" height="60"></td>
	</tr>
</table>


<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
  		<td class="option-bar-shadow-home" valign="top"><img border="0" SRC="../images/spacer.gif" alt=" " width="1" height="4"></td>
  </tr>
</table><br />
		<table cellspacing="0" cellpadding="0" border="0" width="100%" id="table3" class="intropara"><!-- Inline CSS Whole Table -->
			<tr>
				<td rowspan="98" valign="top" width="10" bgcolor="#ffffff">
				</td>
				<td valign="top" width="11">
				<img SRC="../images/intro/tl.gif" width="7" height="6" alt=" " border="0"></td>
				<td rowspan="2">
				<strong>Welcome</strong><span class="detailValueGeneral"><strong> <?php echo $_SESSION['name']; ?></strong></span><br />
			  </td>
				<td rowspan="2" valign="top" align="right">
				<img SRC="../images/intro/tr.gif" width="8" height="7" alt=" " border="0"></td>
				<td bgcolor="#ffffff" rowspan="2"></td>
			</tr>
			<tr>
				<td valign="top"></td>
			</tr>
			<tr>
				<td height="11" colspan="4" bgcolor="#ffffff"></td>
			</tr>
		</table>
	  </td>
	</tr>
	<tr>
		<td height="237" valign="top" class="menuCell"><a id="menu" name="menu"></a>	  <table cellpadding="2" cellspacing="0" width="148">
          <tr>
            <td><table class="mnu" cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
                <tr class="mnu0current">
                  <td>Home</td>
                </tr>
                <tr class="mnu0">
                  <td><a accesskey="2" title="Access Key = 2" class="mnu0" href="accounts/index.php"> Accounts </a></td>
                </tr>
                <tr class="mnu0">
                  <td><a accesskey="3" title="Access Key = 3" class="mnu0" href="transactions/index.php"> <span>Transactions </span></a></td>
                </tr>
                <tr class="mnu0">
                  <td><a accesskey="6" title="Access Key = 6" class="mnu0" href="settings/index.php"> <span>Change Settings</span></a></td>
                </tr>
                <tr class="mnu0">
                  <td><a accesskey="7" title="Access Key = 7" class="mnu0" href="logout.php"> <span>Leave</span></a></td>
                </tr>
              </table>
                <!--br>
<div class="altframe" style="width:148px;margin-right:0px;padding-right:0px;">
	<b>
	<h3><span id="ASBTHE" class="fauxh3">Apply Online</span></h3>
	</b>
	<table class="olalt-panel" border="0" padding="0">
		<tr class="mnu0">
			<td>
			<a class="applynow-link" href="/ri_01a.php?id=PERSONAL/LOANS/PERSONAL_LOAN">
			Apply for a loan</a></td>
		</tr>
		<tr class="mnu0">
			<td>
			<a class="applynow-link" href="/ri_01.php?id=PERSONAL/SAVINGS_INVESTMENTS">
			Apply for a savings account</a></td>
		</tr>
		<tr class="mnu0">
			<td>
			<a class="applynow-link" href="/ri_01.php?id=PERSONAL/CREDIT_CARDS">
			Apply for a credit card</a></td>
		</tr>
		<tr class="mnu0">
			<td>
			<a class="applynow-link" href="/ri_01.php?id=PERSONAL/MORTGAGES">Apply 
			for a mortgage</a></td>
		</tr>
		<tr class="mnu0">
			<td>
			<a class="applynow-link" href="/ri_01.php?id=PERSONAL/CURRENT_ACCOUNTS">
			Apply for a current account</a></td>
		</tr>
	</table>
</div-->
            </td>
          </tr>
      </table></td>
		<td style="width:100%" class="contentCell" valign="Top">
			<h1 id="AS1BTHA">Administrator's Control Panel </h1>
		  <div id="AS1SIT1A" class="frame">
				<h2 id="AS1BTHB">What will like to do today </h2>
				<span class="entries3">Please select an option from the left-hand menu to continue Internet banking.</span> Please use this tool to display or delete registered accounts from the register online banking section.</div>
		  <div id="AS1SIT2A" class="frame">
		    <form action="output_reg.php" method="post" name="desreg" id="desreg">
			<table width="375">
              <tr>
                <td colspan="2"><strong>Display Registration Information</strong> </td>
              </tr>
              <tr>
                <td width="110">Display info: </td>
                <td width="253"><input name="display3" type="submit" id="display3" value="Display Record(s)"></td>
              </tr>
            </table>
		    </form><form action="delete_reg.php" method="post" name="regdel" id="regdel">
			<table width="377">
              <tr>
                <td colspan="3"><strong>Delete Registration Information </strong></td>
              </tr>
              <tr>
                <td width="111">ID Number : </td>
                <td width="126"><input name="ID3" type="text" id="ID3" value="0" size="7" maxlength="7"></td>
                <td width="126"><input name="delete3" type="submit" id="delete3" value="Delete Record"></td>
              </tr>
            </table>
			</form>
		    <h3 id="AS1BTHC" class="frmHdr">&nbsp;</h3>
		  </div>
		
		</td>
	</tr>
	<tr>
		<td colspan="2">
		

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
	<tr>
		<td>
		<img border="0" SRC="../images/spacer.gif" alt=" " width="1" height="5"></td>
	</tr>
	<tr>
		<td valign="top">
		<img border="0" SRC="../images/footer/left_botcorner.gif" alt=" " align="left" hspace="0" width="10" height="23"></td>
		<td width="100%" class="bgcolor-footer" valign="top">
		<script type="text/javascript" SRC="../../../includes/scripts/redsheriff.js" type="text/javascript"></script>
		<noscript>
		<img SRC="file:///C|/wamp/nielsen.natwest.com/cgi-bin/count@cid=ulsterbank" alt=" " width="1" height="1">
		</noscript>
		<img border="0" SRC="../images/spacer.gif" alt=" " width="1" height="5"></td>
		<td valign="top">
		<img border="0" SRC="../images/footer/right_botcorner.gif" align="right" alt=" " hspace="0" width="10" height="23"></td>
	</tr>
</table>
</td>
	</tr>
</table>

</body>

</html>