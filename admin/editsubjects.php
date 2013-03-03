        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>
              <li><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <fieldset>
    <legend>Edit Subjects</legend>
             <?php
                 
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from subjects where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedsubjects.php' method='post' class='form-horizontal'>";
								echo "<input type='hidden' name='id' value='$row[0]'/>";
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Subject Code </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=code value='$row[0]'> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Subject Description : </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=desc value='$row[1]'> <br>";
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