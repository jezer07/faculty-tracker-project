        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addloads.php"><i class=" icon-plus-sign"></i>Add Loads</a></li>
              <li class="active"><a href="loads.php"><i class="icon-eye-open"></i>View Loads</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
       
               <div class="span9">
                <fieldset>
        <legend>Loads</h2></legend>
                      <form class="form-horizontal">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
    <input type="text" id="inputEmail" placeholder="Email">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" placeholder="Password">
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
   
    <button type="submit" class="btn">Sign in</button>
    </div>
    </div>
    
    </form>
    </fieldset>
            	</div>
        <!-- /container -->
     <?php include("footer.php");?>