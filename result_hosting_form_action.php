<html>
<head>
 <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:500&subset=devanagari,latin" rel="stylesheet" type="text/css"/>
     <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
    <style type="text/css">
	body{
	font-family: "Francois One";
		}
	</style>
	</head> 
	<body>
<?php
	$sn=$_GET['sn'];
	$stn=$_GET['stn'];
	$fn=$_GET['fn'];
	$dob=$_GET['dob'];
	$gender=$_GET['gen'];
	$hindi=$_GET['hin'];
	$english=$_GET['eng'];
	$maths=$_GET['math'];
	$physics=$_GET['phy'];
	$chemistry=$_GET['chem'];
	$total=$hindi+$english+$maths+$physics+$chemistry;
	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$count=0;
	$s="a";
	$gen='';
	$min=35;
	$max=100;
	$hin='Hindi';
	$eng='English';
	$math='Maths';
	$phy='Physics';
	$chem='Chemistry';

	if($gender=="Male"){
		$gen="S/o";
	}else if($gender=="Female"){
		$gen="D/o";
	}
	if($hindi<35){
		$remark1="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$hin;
	}else if($hindi>79){
		$remark1="<font color='green'>D</font>";
	}else{
		$remark1='-';
	}
	
	if($english<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$eng;
	}else if($english>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($maths<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$math;
	}else if($maths>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($physics<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$phy;
	}else if($physics>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}
	
	if($chemistry<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$chem;
	}else if($chemistry>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}

	$s=str_replace('a and', '', $s);
	if($count>2){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}else if($count<=2){
		$s="Compartment in ".' '.$s;
	}
?>

<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				<td>
					<img src='images/logo.png' width=120 height=120>
				</td>
				<td>
					<b><font size='5'>CENTRAL BOARD OF HIGHER EDUCATION /CLONE</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='4' color='grey'><b><?php  echo "$sn"; ?></b></font>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
		 <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
		 <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
			<table width=100%>
				<tr><td><font size='4'><?php echo "$stn"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$gen";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" Mr.$fn";?></font></td></tr>
				<tr><td><font size='4'><?php echo "$dob"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"$gender";?></font></td></tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th><th><i>Remark</i></th></tr>
				<tr><td>101</td><td>Hindi</td><td>35</td><td>100</td><td><?php echo "$hindi"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>102</td><td>English</td><td>35</td><td>100</td><td><?php echo "$english"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>103</td><td>Maths</td><td>35</td><td>100</td><td><?php echo "$maths"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>104</td><td>Physics</td><td>35</td><td>100</td><td><?php echo "$physics"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>105</td><td>Chemistry</td><td>35</td><td>100</td><td><?php echo "$chemistry"; ?></td><td><?php echo "$remark5"; ?></td></tr>
				<tr><td></td><td></td><td><b>Total</b></td><td><b>500</b></td><td><b><?php echo "$total"; ?><b></td><td></td></tr>
			</table>
		</td>
		</tr>
 <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>
<script language="javascript" type="text/javascript">   
document.write("<div style='display:none;'>");   
</script><div>   
<h1><a href="http://resulthosting.in" title="Result Hosting" name="Result Hosting">Result Hosting</a></h1>
<h2><a href="https://resulthosting.in" title="Result Hosting" name="Result Hosting">Result Hosting</a></h2>  </div>
<script language="javascript" type="text/javascript">   
document.write("</div>");   
</script>
</body> 
 <!------Written By Sudhanshu Pandey sudhanshu.pandey159@gmail.com----->
</html>