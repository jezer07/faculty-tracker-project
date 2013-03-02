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
               <table class="table">
               <tr><td>Faculty ID</td><td>Name</td><td>Email</td><td>Contact No.</td><td>Action</td></tr>
               <tr><td>Admin</td><td>Administrator</td><td>Name</td><td>Name</td><td><a class="btn" href="#"><i class="icon-edit"></i></a><a class="btn" href="#"><i class="icon-remove"></i></a></td></tr>
               
               </table>
               
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>