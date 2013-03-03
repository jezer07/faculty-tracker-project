        <?php include("header.php");?>
               
               <?php
                                   
                                        $id = $_POST['id'];
                                        $name = $_POST['name'];
										$num = $_POST['num'];
                                        $email = $_POST['email'];
                                        
                                        $query = "Select * FROM faculties";
                                        $result = @mysql_query($query);
                                        $row = mysql_fetch_array($result);
                                        if ($row)
                                        {
                                        $query = "Update faculties set id='$id', name='$name', contactno='$num', email='$email' WHERE id='$id'";
                                        mysql_query($query);
                                        
										header("Location:faculty.php?success=1");
                                        }
                ?>
               
                   
            


        <!-- /container -->
     <?php include("footer.php");?>