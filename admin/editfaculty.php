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
                                echo "<form action='editedfaculty.php' method='post'>";
								echo "Faculty ID : " . "<input type=hidden name=id value='$row[0]'>$row[0] <br>";
                                echo "Name : " . "<input type=text name=name value='$row[1]'> <br>";
                                echo "Contact No. : " . "<input type=text name=num value='$row[2]'> <br>";
                                echo "Email : " . "<input type=text name=email value='$row[3]'> <br>";
                                                                
                                echo "<p><input type='submit' name='update' value='Update' /></p>
                                </form>";
                                }

                                        
                                ?>
                   </fieldset>
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>