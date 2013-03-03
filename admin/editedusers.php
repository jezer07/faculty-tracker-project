        <?php include("header.php");?>

                <?php
                                   
										$id = $_POST['id'];
										$name = $_POST['name'];
										$new = $_POST['new'];
										$type = $_POST['type'];
                                       
                                        
                                        $query = "Select * FROM users";
                                        $results = @mysql_query($query);
                                        $row = mysql_fetch_array($results);
                                        if ($row)
                                        {
                                        $query = "Update users set username='$name', password=SHA('$new'), type='$type' WHERE id='$id'";
                                        mysql_query($query);
                                        header("Location:users.php?success=1");
                                        }
                ?>

        <!-- /container -->
     <?php include("footer.php");?>