
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>

<script src="../js/jspdf.js"></script> 
<script src="../js/vendor/jquery-1.9.1.min.js"></script> 



</head>
<body>
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
doc.text(20, 85, 'Faculty Name: Mean Taduyo');
doc.text(150,85,'ID: 12345678');
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
doc.text(22,97,'#');
doc.text(58,97,'Section');
doc.text(100,97,'Room');
doc.text(136,97,'Day');
doc.text(170,97,'Time');
doc.setFontSize(13)
doc.text(22,110,'1.');
doc.text(22,117,'2.');
doc.text(22,124,'3.');
doc.text(61,110,'304I');
doc.text(99,110,'H411');
doc.text(131,110,'Monday');
doc.text(164,110,'7:30-8:30')
doc.rect(20, 103, 175, 185);

	// Output as Data URI
	doc.output('datauri');

	





</script>

</body>
</html>