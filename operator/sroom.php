        
		
		<?php include("header.php");?>
        
            
             
                <div class="span9">
          		
                <?php $rooms = mysql_query("SELECT * FROM rooms");
				
				?>
                
                <h3>Search by room</h3><form class="form-search comboform">
					<select class='combosubmit' name="room">
                    <option>- select room - </option>
                 	<?php 
					while($row = mysql_fetch_assoc($rooms)){
						echo "<option value= $row[id]> $row[id]</option>";
						
						}	
					
					?>   
                    
                    
                    </select>
    			
    			</form>
                <hr/>
           
            
           
          <?php 
		  if(isset($_GET['room'])){
			  $qFaculties="SELECT distinct faculties.id,name FROM schedules JOIN faculties on faculties.id=schedules.facultyid where room ='$_GET[room]'";
			  
			  $eFaculties = mysql_query($qFaculties) or die(mysql_error());
			  
			  if(mysql_num_rows($eFaculties)){
				  while($row=mysql_fetch_assoc($eFaculties)){
					  
					echo "
							<a href='#$row[id]' role='button' data-toggle='modal'>$row[name]</a><br>
 
<!-- Modal -->
<div id='$row[id]' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
<h3 id='myModalLabel'>Schedule or $row[name] on $_GET[room]</h3>
</div>
<div class='modal-body'>";

$qDaySched = "SELECT subjectid,sectionid,day,concat(DATE_FORMAT(start,'%k:%i'),'-',DATE_FORMAT(end,'%k:%i')) as time,room FROM faculties JOIN schedules on faculties.id=schedules.facultyid where faculties.id='$row[id]' AND room='$_GET[room]'";
	$eDaySched = mysql_query($qDaySched);
	
echo "
<table class='table table-striped'>
	<thead>
	<tr>
		<th>#</th>
		<th>Subject</th>
		<th>Section</th>
		<th>Day</th>
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
		<td>$row2[day]</td>
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
					  
					  
					  }
				  }
				  else{
				  echo "
				  <div class='alert alert-error'>Invalid Room or there are no faculty using $_GET[room] room</div>";
				  }
			  
			  
			  }
		  
		  
		  ?>
           
          			
                    
                    
                    
                    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	  <script>
            $(document).ready(function(){
				$("#sroom").attr("class","active");
			
				});
             
             </script>