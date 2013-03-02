        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              <li class="active"><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
               <div class="span5">
               <?php
                        $rSubjects=@mysql_query("select * from subjects");
                                        
                                $i=1;
                                echo "<table class='table' border='1'>";
                                echo "<tr>";
                                echo "<td>Subject Code </td>";
                                echo "<td>Subject Description </td>";
                         		echo "<td>Action</td>";
                                echo "</tr>";
                                        
                                while($row=mysql_fetch_array($rSubjects))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                               	echo "<td><form action='editsubjects.php' method='post'><input type='hidden' name='userid' value='$row[0]'><button type='submit'><i class='icon-edit'></i></button></form><form action='deletesubjects.php' method='post'><input type='hidden' name='userid' value='$row[0]'><button type='submit'><i class='icon-remove'></i></button></form></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</table>";

        ?>
               
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>