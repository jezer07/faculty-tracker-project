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
    <legend>Faculty</legend>
               <?php
                        $rFaculty=@mysql_query("select * from faculties");
                                        
                                $i=1;
                                echo "<table class='table' border='1'>";
                                echo "<tr>";
                                echo "<td>Faculty ID </td>";
                                echo "<td>Name </td>";
                                echo "<td>Contact No</td>";
								echo "<td>Email</td>";
								echo "<td>Action</td>";
                                echo "</tr>";
                                        
                                while($row=mysql_fetch_array($rFaculty))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
								echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
								echo "<td><a class='btn' href='editfaculty.php?id=$row[0]'><i class='icon-edit'></i></button></a><a class='btn' href='deletefaculty.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
								echo "</tr>";
                                $i++;
                        }
                                        echo "</table>";

        ?>
          </fieldset>         
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>