        <?php include("header.php");
		 error_reporting(E_ERROR | E_PARSE);?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="sections.php"><i class="icon-eye-open"></i>View Sections</a></li>
              <li><a href="addsections.php"><i class=" icon-plus-sign"></i>Add Sections</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span8">
                <fieldset>
    <legend>Sections</legend>
              <?php
			  $success=$_GET['success'];
			   if ($success==1)
			   {
				    echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				   }
                        $rSections=@mysql_query("select * from sections");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<th width='99'>Section Code</th>";
                               	echo "<th width='99'>Action</th>";
                                echo "</tr></thead><tbody>";
                                        
                                while($row=mysql_fetch_array($rSections))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                               echo "<td><a class='btn' href='editsections.php?id=$row[0]' title='Edit'><i class='icon-edit'></i></button></a><a class='btn' href='deletesections.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
							   echo "</tr>";
                                $i++;
                        }
                                        echo "</tbody></table>";

        ?>
               
                   </fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>