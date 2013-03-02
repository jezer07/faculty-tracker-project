        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsections.php"><i class=" icon-plus-sign"></i>Add Sections</a></li>
              <li class="active"><a href="sections.php"><i class="icon-eye-open"></i>View Sections</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span4">
              <?php
                        $rSections=@mysql_query("select * from sections");
                                        
                                $i=1;
                                echo "<table class='table' border='1'>";
                                echo "<tr>";
                                echo "<td>Subjects </td>";
                               	echo "<td>Action</td>";
                                echo "</tr>";
                                        
                                while($row=mysql_fetch_array($rSections))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td><form action='editusers.php' method='post'><input type='hidden' name='userid' value='$row[0]'><button type='submit'><i class='icon-edit'></i></button></form><a class='btn' href='#'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</table>";

        ?>
               
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>