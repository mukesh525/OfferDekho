<?php
include './DbCon/connection.php';
$sql = "SELECT * FROM  `category`";
$newRow = recordSetToJson(mysqli_query($conn, $sql));

function recordSetToJson($mysqlresult) {
    $rows1 = array();
    $i = 0;
    while ($row = mysqli_fetch_row($mysqlresult)) {
        $rows1[$i] = $row[1];
       
        $i++;
    };
    return $rows1;
    //json_encode($newRow);
}
?>

<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="index.php">Offer Dekho</a></h1>					
				</div>
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="showhide" style="overflow: hidden; display: none;">
                                        <span class="title">MENU</span><span class="icon1"></span>
                                        <span class="icon2"></span></li><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Type</h4>
									<ul>
                                                                            
                                                                            <?php 
                                                                          foreach($newRow as $key => $value) {?>
                                                                            <li><a href="product.php?category=<?php print $value ?>"><?php print $value;?></a></li>
                                                                              <?php }?>
									</ul>
                                                                        
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.php">Levis</a></li>
										<li><a href="product.php">Reebook</a></li>
										<li><a href="product.php">Havells</a></li>
										<li><a href="product.php">Puma</a></li>
										<li><a href="product.php">Lee</a></li>
										<li><a href="product.php">Nike</a></li>
										
									</ul>	
								</div>
							</div>
						</div>
					</li>	
					<li class="grid"><a href="typo.php">Typo</a></li>
					<li class="grid"><a href="contact.php">Contact</a></li>					
				</ul>				
			 </div>
			
		
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>