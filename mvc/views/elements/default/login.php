<?php $style= DIR_ELEMENTS .DS."style.php";
require ($style); 
?> 
<div class="container">
                      <h1  class="text-center py-3">Login </h1>
                    
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div class="">
                        <form action="" method="post">
						
				            <label for="email"><b>
							email
							</b></label> <br>
                            <input type="text" name="email" placeholder="email" class="form-control mb-3"><br>
						   <label for="psw"><b>Password</b></label> <br>
                           <input type="password" name="password" placeholder=" password" class="form-control mb-3"><br>
                        <button class="btn btn-success mt-3" name="Login">Login</button>
						
                        </form>
                    
                </div>
            
		</div>

				