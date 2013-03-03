        <?php include("header.php");
		 error_reporting(E_ERROR | E_PARSE);?>
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
    <legend>Subjects</legend>
               <?php
			   $success=$_GET['success'];
			   if ($success==1)
			   {
				    echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				   }
                        $rSubjects=@mysql_query("select * from subjects");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<th>Subject Code </t>";
                                echo "<th>Subject Description </th>";
                         		echo "<th>Action</th>";
                                echo "</tr></thead><tbody>";
                                        
                                while($row=mysql_fetch_array($rSubjects))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                               	echo "<td><a class='btn' href='editsubjects.php?id=$row[0]'><i class='icon-edit'></i></button></a><a class='btn' href='deletesubjects.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</tbody></table>";

        ?>
               </fieldset>
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>