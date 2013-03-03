        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="viewloads.php"><i class="icon-eye-open"></i> View Loads</a></li>
              <li class="active"><a href="loads.php"><i class="icon-eye-open"></i> Add Loads</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
       
               <div class="span9">
               <?php
               if(isset($_GET['error'])){
				   echo "<div class='alert alert-error'>";
				   
				   switch ($_GET['error']){
					   
					   case '1':{
						   echo "Invalid end time";
						   break;
						   }
					case '2':{
						   echo "The faculty has a class ongoing on that day's time";
						   break;
						   }
					   
					   }//switch
				   echo "</div>";
			 }//if
			   
			   ?>
                <fieldset>
        <legend>Loads</legend>
                      <form action="addloads.php" method="post" class="form-horizontal">
    <div class="control-group">
    <label class="control-label">Faculty</label>
    <div class="controls">
    <select name="faculty" >
    <?php 
	
	$rfaculty=@mysql_query("select * from faculties");
	 $i=1;
            
              while($row=mysql_fetch_array($rfaculty))
              {             
               echo "<option value='$row[0]'>$row[1]</option>";
               $i++;
                 }
	?>
    </select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label">Subject Code</label>
    <div class="controls">
    <select name="subject">
    <?php $rsubjects=@mysql_query("select * from subjects");
	 $i=1;
            
              while($row=mysql_fetch_array($rsubjects))
              {             
               echo "<option value='$row[0]'>$row[0]</option>";
               $i++;
                 }
	?>
    </select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label">Section</label>
    <div class="controls">
    <select name="section">
    <?php $rsections=@mysql_query("select * from sections");
	 $i=1;
            
              while($row=mysql_fetch_array($rsections))
              {             
               echo "<option value='$row[0]'>$row[0]</option>";
               $i++;
                 }
	?>
    </select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label">Room</label>
    <div class="controls">
    <select name="room">
    <?php $rroom=@mysql_query("select * from rooms");
	 $i=1;
            
              while($row=mysql_fetch_array($rroom))
              {             
               echo "<option value='$row[0]'>$row[0]</option>";
               $i++;
                 }
	?>
    </select>
    </div>
    </div>
   
    <div class="control-group">
    <label class="control-label">Day</label>
    <div class="controls">
    <select name="day">
    <option value="M">Monday</option>
    <option value="T">Tuesday</option>
    <option value="W">Wednesday</option>
    <option value="TH">Thursday</option>
    <option value="F">Friday</option>
    </select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label">Start</label>
    <div class="controls">
    <select name="start">
        <option>7:00</option>
    <option>7:30</option>
    <option>8:00</option>
    <option>8:30</option>
    <option>9:00</option>
    <option>9:30</option>
    <option>10:00</option>
    <option>10:30</option>
    <option>11:00</option>
    <option>11:30</option>
    <option>12:00</option>
    <option>12:30</option>
    <option>13:00</option>
    <option>13:30</option>
    <option>14:00</option>
    <option>14:30</option>
    <option>15:00</option>
    <option>15:30</option>
    <option>16:00</option>
    <option>16:30</option>
    <option>17:00</option>
    <option>17:30</option>
    <option>18:00</option>
    <option>18:30</option>
    <option>19:00</option>
    <option>19:30</option>
    <option>20:00</option>
    <option>20:30</option>
    </select>	
    
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label">End</label>
    <div class="controls">
    <select name="end">
    <option>7:30</option>
    <option>8:00</option>
    <option>8:30</option>
    <option>9:00</option>
    <option>9:30</option>
    <option>10:00</option>
    <option>10:30</option>
    <option>11:00</option>
    <option>11:30</option>
    <option>12:00</option>
    <option>12:30</option>
    <option>13:00</option>
    <option>13:30</option>
    <option>14:00</option>
    <option>14:30</option>
    <option>15:00</option>
    <option>15:30</option>
    <option>16:00</option>
    <option>16:30</option>
    <option>17:00</option>
    <option>17:30</option>
    <option>18:00</option>
    <option>18:30</option>
    <option>19:00</option>
    <option>19:30</option>
    <option>20:00</option>
    <option>20:30</option>
    <option>21:00</option>
    </select>	
    </div>
    </div>
    
    <div class="control-group">
    <div class="controls">
   
    <button type="submit" class="btn">Add Load</button>
    </div>
    </div>
    
    </form>
     
    </fieldset>
            	</div>
        <!-- /container -->
     <?php include("footer.php");?>