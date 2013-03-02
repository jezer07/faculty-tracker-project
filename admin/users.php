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
        
                <div class="span4">
               <table class="table">
               <tr><td>Username</td><td>Type</td><td>Action</td></tr>
               <tr><td>Admin</td><td>Administrator</td><td><a class="btn" href="#"><i class="icon-edit"></i></a><a class="btn" href="#"><i class="icon-remove"></i></a></td></tr>
               
               </table>
               
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>