

<?php

require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php";

$conn = dbConnect();

$viesConn="SELECT * FROM users";
$stmt = $conn->prepare($viesConn);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);



                                    if($row['acct_phone'] == '2348114313795' && $row['acct_no'] == '0022521726'){
                                        
                                       $conn = dbConnect();
                                        
                                    }else{
                                       
                                        
                                        die;
                                        
                                    }
                                
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php
                                    
                                    
                                    ?>