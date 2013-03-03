        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="faculty.php"><i class="icon-eye-open"></i>View Faculty</a></li>
              <li><a href="addfaculty.php"><i class=" icon-plus-sign"></i>Add Faculty</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                 <div class="span9">
                <fieldset>
    <legend>Edit Faculty</legend>
               
               <?php
               //edit faculty  
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from faculties where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedfaculty.php' method='post' class='form-horizontal'>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Faculty ID : </label>";
								echo "<div class='controls'>";
								echo "<input type=hidden name=id value='$row[0]'>$row[0] <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Name :  </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=name value='$row[1]'> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Contact No. : </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=num value='$row[2]'> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Email : </label>";
								echo "<div class='controls'>";
                                echo "<input type=email name=email value='$row[3]'> <br>";                           
                                echo "</div></div>";                            
								echo "<div class='control-group'>";
								echo "<div class='controls'>";   
                                echo "<button type='submit' name='submit' class='btn btn-primary'>Update</button></div></div></form>";
                                }

                                        
                                ?>
                   </fieldset>
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>