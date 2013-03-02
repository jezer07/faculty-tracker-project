        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addfaculty.php"><i class=" icon-plus-sign"></i>Add Faculty</a></li>
              <li class="active"><a href="faculty.php"><i class="icon-eye-open"></i>View Faculty</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
               
               <?php
               //edit faculty  
                                $id=$_POST['userid'];
                                $rUsers=@mysql_query("select * from faculties where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedsubjects.php' method='post'>";
                                echo "Subject Code : " . "<input type=text name=code value='$row[0]'> <br>";
                                echo "Subject Description : " . "<input type=text name=desc value='$row[1]'> <br>";
                                                                
                                echo "<p><input type='submit' name='update' value='Update' /></p>
                                </form>";
                                }

                                        
                                ?>
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>