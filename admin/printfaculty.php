<?php
include '../mysql_connect.php';
$name = $_GET['name'];

$qFaculty = "SELECT faculties.id,name,sectionid,subjectid,room,day,DATE_FORMAT(start,'%k:%i') as start,DATE_FORMAT(end,'%k:%i')as end FROM faculties JOIN schedules ON faculties.id = schedules.facultyid WHERE faculties.name = '$name' order by start,end asc";

$eFaculty= mysql_query($qFaculty);

if(mysql_num_rows($eFaculty)<1){
header("Location:sname.php?name=$_GET[name]&error=1");
exit();
	}

	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>

<script src="../js/jspdf.js"></script> 
<script src="../js/vendor/jquery-1.9.1.min.js"></script> 



</head>
<body>

<?php

?>
<script>
	var doc = new jsPDF();
//doc.setTextColor(0,150,0);
doc.setFont("courier");
doc.setFontSize(50)
doc.text(75, 30, 'POTATO');
doc.setFontSize(30)
doc.text(35, 50, 'Faculty Tracking System');
doc.setFontSize(20)
doc.text(65, 60, 'Faculty Load Reports');
doc.rect(20, 10, 175, 60);
doc.setFontSize(15)
doc.text(20, 85, 'Faculty Name:<?php echo $_GET['name']; ?>');
doc.text(150,85,'ID: <?php echo mysql_result($eFaculty,0,0);?>');
doc.rect(20, 90, 174, 11);
//doc.line(20, 130, 20, 140); // vertical line
//doc.line(20, 130, 50, 130); // horizontal line
doc.line(53, 90, 53,101 ); // vertical line
//doc.line(50, 130, 90, 130);//h
doc.line(88, 90, 88, 101);//v
//doc.line(90, 130, 130, 130);//h
doc.line(123, 90, 123, 101);//v
//doc.line(130, 130,170, 130);//h
doc.line(160, 90, 160, 101);//v
//doc.line(170, 130,195, 130);//h
//doc.line(195, 140, 195, 130);//v
//doc.line(20,140,195,140);
doc.setFontSize(16)
doc.text(25,97,'Subject');
doc.text(58,97,'Section');
doc.text(100,97,'Room');
doc.text(136,97,'Day');
doc.text(170,97,'Time');
doc.setFontSize(13)

<?php
$y=110;
while($row = mysql_fetch_assoc($eFaculty)){
echo "


		doc.text(22,$y,'$row[subjectid]');
		doc.text(61,$y,'$row[sectionid]');	
		doc.text(99,$y,'$row[room]');
		doc.text(131,$y,'$row[day]');
		doc.text(164,$y,'$row[start]-$row[end]')
		
		";
		$y+=7;
}//while
		

?>
doc.rect(20, 103, 175, 185);
	// Output as Data URI
	doc.output('datauri');

	





</script>

</body>
</html>