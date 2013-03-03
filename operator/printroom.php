<?php include '../mysql_connect.php';
								
$qFaculty = "SELECT name,sectionid,subjectid,day,DATE_FORMAT(start,'%k:%i') as start,DATE_FORMAT(end,'%k:%i')as end FROM faculties JOIN schedules ON faculties.id = schedules.facultyid WHERE room = '$_GET[room]' order by name asc,end desc";
$eFaculty = mysql_query($qFaculty) or die(mysql_error());


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title></title>

<script src="../js/jspdf.js"></script> 
<script src="../js/vendor/jquery-1.9.1.min.js"></script> 

</head>
<body>

<script>
var doc = new jsPDF();
//doc.setTextColor(0,150,0);
doc.setFont("courier");
doc.setFontSize(50)
doc.text(71, 30, 'POTATO');
doc.setFontSize(30)
doc.text(35, 50, 'Faculty Tracking System');
doc.setFontSize(20)
doc.text(75, 60, 'Day Time Reports');
doc.rect(20, 10, 175, 60);
doc.setFontSize(15)
//doc.text(20, 85, 'Faculty Name: Mean Taduyo');
//doc.text(150,85,'ID: 12345678');
doc.rect(20, 90, 174, 11);
//doc.line(20, 130, 20, 140); // vertical line
//doc.line(20, 130, 50, 130); // horizontal line
doc.line(75, 90, 75,101 ); // vertical line
//doc.line(50, 130, 90, 130);//h
doc.line(105, 90, 105, 101);//v
//doc.line(90, 130, 130, 130);//h
doc.line(135, 90, 135, 101);//v
//doc.line(130, 130,170, 130);//h
doc.line(167, 90, 167, 101);//v
//doc.line(170, 130,195, 130);//h
//doc.line(195, 140, 195, 130);//v
//doc.line(20,140,195,140);
doc.text(20,85,'Room:<?php echo $_GET['room']?>');
doc.setFontSize(13)
doc.text(30,97,'Faculty Name');
doc.text(79,97,'Subject');
doc.text(110,97,'Section');
doc.text(146,97,'Day');
doc.text(174,97,'Time');
doc.setFontSize(10);



<?php 
$y=110;
while($row=mysql_fetch_assoc($eFaculty)){
echo "
		doc.text(22,$y,'$row[name]');
		doc.text(84,$y,'$row[subjectid]');
		doc.text(115,$y,'$row[sectionid]');
		doc.text(145,$y,'$row[day]')
		doc.text(171,$y,'$row[start]-$row[end]')
	
			";
			$y+=7;
}
	?>
		doc.rect(20, 103, 175, 185);
doc.output('datauri');

</script>

</body>
</html>