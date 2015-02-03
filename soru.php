<a href='soru.php?islem=1'>Yukarı</a><br />
<a href='soru.php?islem=0'>Aşağı</a><br />
<table border="1" width="120px" height="120px">

<?php

session_start();
if(!isset($_SESSION['kullanicilar'])){
	$_SESSION['kullanicilar']=["0","0","1","0","0"];
}
else{

if($_GET['islem']==1){
	for($i=0;$i<5;$i++){
		if($_SESSION['kullanicilar'][$i]=="1"){
			$_SESSION['kullanicilar'][$i]="0";
			if($i==4)$i=-1;
			$_SESSION['kullanicilar'][($i+1)]="1";
		}
	}
}else{
	for($i=0;$i<5;$i++){
		if($_SESSION['kullanicilar'][$i]=="1"){
			$_SESSION['kullanicilar'][$i]="0";
			if($i==0)$i=5;
			$_SESSION['kullanicilar'][($i-1)]="1";
		}
	}

}
}
	
	
	for($i=0;$i<5;$i++){
	
	echo "<tr>";
	echo "<td>";
	if($_SESSION['kullanicilar'][$i]=="1"){
			echo "A";
		}
	
			echo "  </tr>";
			echo "</td>";

}



?>
</table>
