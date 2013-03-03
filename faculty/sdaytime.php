        
		
		<?php include("../faculty/header.php");?>
        
    	          <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Search By</li>
              <li id="sname"><a href="../faculty/sname.php"><i class="icon-user"></i>Faculty name</a></li>
              <li id="sdaytime" class="active"><a href="../faculty/sdaytime.php"><i class="icon-time"></i>Day time</a></li>
              <li id="sroom"><a href="../faculty/sroom.php"><i class="icon-home"></i>Room</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

             
                <div class="span9">           
                <h3>Search by Day Time</h3><form class="form-search comboform">
   				<select name="day" class="combosubmit">
                		<option id="" value="" >- select day -</option>
                        <option id="m" value="M" >Monday</option>
                        <option id="t" value="T">Tuesday</option>
                        <option id="w" value="W">Wednesday</option>
                        <option id="th"value="TH">Thursday</option>
                        <option id="f" value="F">Friday</option></select>
                   
   	
   
    </form>
     
                <hr/>
                               
                
                
                <?php
                if(isset($_GET['day'])){
					$qDay = "SELECT DISTINCT faculties.id,name FROM schedules JOIN faculties ON faculties.id = schedules.facultyid where day='$_GET[day]'";
					$eDay = mysql_query($qDay);
						
						
						switch ($_GET['day']){
								case 'M':{
								$day = "Monday";
								break;
								
								}
								case 'T':{
								$day = "Tuesday";
								break;
								
								}
								case 'W':{
								$day = "Wednesday";
								break;
								
								}
								case 'TH':{
								$day = "Thursday";
								break;
								
								}
								case 'F':{
								$day = "Friday";
								break;
								}
								default:{
								$day = "Invalid day";
								break;	
									}
								
								}
							
							
						
					if(mysql_num_rows($eDay)){
						
						echo "<h5>List of Faculty that has schedule on <u>$day</u></h5>";	
						while($row=mysql_fetch_assoc($eDay)){
							
							
							echo "
							<a href='#$row[id]' role='button' data-toggle='modal'>$row[name]</a><br>
 
<!-- Modal -->
<div id='$row[id]' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
<h3 id='myModalLabel'>$day schedule of $row[name]</h3>
</div>
<div class='modal-body'>";

	$qDaySched = "SELECT subjectid,sectionid,concat(DATE_FORMAT(start,'%k:%i'),'-',DATE_FORMAT(end,'%k:%i')) as time,room FROM faculties JOIN schedules on faculties.id=schedules.facultyid where faculties.id='$row[id]' AND day='$_GET[day]'";
	$eDaySched = mysql_query($qDaySched);
	
echo "
<table class='table table-striped'>
	<thead>
	<tr>
		<th>#</th>
		<th>Subject</th>
		<th>Section</th>
		<th>Room</th>
		<th>Time</th>
	</tr>
	</thead>
	<tbody>
";
$ctr=1;
while($row2 = mysql_fetch_assoc($eDaySched)){

echo "<tr>
		<td>$ctr</td>
		<td>$row2[subjectid]</td>
		<td>$row2[sectionid]</td>
		<td>$row2[room]</td>
		<td>$row2[time]</td>

	</tr>";
$ctr++;
}


echo "
</tbody>
</table>
</div>
<div class='modal-footer'>
<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>

</div>
</div>



";
							
							}//while
							
						
						}//if
					else{
						echo " <div class='alert alert-error'>
							Invalid day value or there are no faculty assigned to this day.
							</div>";
						}
					
					}
				
				?>
  
            	</div>

        <!-- /container -->
     <?php include("../faculty/footer.php");?>
	  <script>
            $(document).ready(function(){
				$("#sdaytime").attr("class","active");
			
				});
             
             </script>