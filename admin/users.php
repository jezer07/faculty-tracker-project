        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <fieldset>
    <legend>Users</legend>
    
                <?php
                        $rUsers=@mysql_query("select * from users");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<th>User ID </th>";
                                echo "<th>Username </th>";
                                echo "<th>User Type</th>";
								echo "<th>Action</th>";
                                echo "</tr></thead><tbody>";
                                        
                                while($row=mysql_fetch_array($rUsers))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[3]</td>";
								echo "<td><a class='btn' href='editusers.php?id=$row[0]'><i class='icon-edit'></i></button></a><a class='btn' href='deleteusers.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</tbody></table>";

        ?>
               
               </fieldset>
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>