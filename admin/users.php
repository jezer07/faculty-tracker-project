        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
              <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
                <?php
                        $rUsers=@mysql_query("select * from users");
                                        
                                $i=1;
                                echo "<table class='table' border='1'>";
                                echo "<tr>";
                                echo "<td>User ID </td>";
                                echo "<td>Username </td>";
                                echo "<td>User Type</td>";
								echo "<td>Action</td>";
                                echo "</tr>";
                                        
                                while($row=mysql_fetch_array($rUsers))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[3]</td>";
								echo "<td><form action='editusers.php' method='post'><input type='hidden' name='userid' value='$row[0]'><button type='submit'><i class='icon-edit'></i></button></form><a class='btn' href='#'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</table>";

        ?>
               
               
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>