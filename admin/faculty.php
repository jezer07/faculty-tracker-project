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
    <legend>Faculty</legend>
               <?php
                        $rFaculty=@mysql_query("select * from faculties");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<th>Faculty ID </th>";
                                echo "<th>Name </th>";
                                echo "<th>Contact No</th>";
								echo "<th>Email</th>";
								echo "<th>Action</th>";
                                echo "</tr></thead><tbody>";
                                        
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
                                        echo "</tbody></table>";

        ?>
          </fieldset>         
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>