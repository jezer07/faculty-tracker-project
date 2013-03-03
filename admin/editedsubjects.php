                <?php include("header.php");?>

                
               <?php
                                   
                                        $code = $_POST['code'];
                                        $desc = $_POST['desc'];
										$id = $_POST['id'];
                                        
                                        $qSubjects = "Select * FROM subjects";
                                        $rSubjects = @mysql_query($qSubjects);
                                        $row = mysql_fetch_array($rSubjects);
                                        if ($row)
                                        {
                                        $query = "Update subjects set id='$code', subjectdesc='$desc' WHERE id='$id'";
                                        mysql_query($query);
                                       header("Location:subjects.php?success=1");
                                        }
                ?>
               

        <!-- /container -->
     <?php include("footer.php");?>