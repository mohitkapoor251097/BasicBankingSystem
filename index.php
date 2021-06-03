<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
	<meta charset="utf-8">
	  <?php
        include 'allcss.php'; 
        ?>  
    <title>Basic Banking System</title>
</head>
<body>
<?php
include 'navbar.php';
?>
<header class="jumbotron back-image img-fluid" style="background-image: url(img/bank.jpg);width:100%;background-size: 100% 100%;">
        <div class="text-center" style="">
            <h3 class="display-3 text-center text-white"><i class="" aria-hidden="true"></i> <span id="ani" style="color:white "></span> </h3>
             <p class="text-center text-white">
                	Banking is an industry that handles cash, credit, and other financial transactions. Banks provide a safe place to store extra cash and credit. They offer savings accounts, certificates of deposit, and checking accounts. Banks use these deposits to make loans. These loans include home mortgages, business loans, and car loans.
                    Banking is one of the key drivers of the U.S. economy. It provides the liquidity needed for families and businesses to invest in the future. Bank loans and credit mean families don't have to save up before going to college or buying a house. Companies use loans to start hiring immediately to build for future demand and expansion.
                </p>
        </div>
</header>
<!--Banking Section -->
<div class="jumbotron div-color" id="team">
      <div class="container">
        <h2 class="text-center text-white mb-5">BANKING </h2>
                     <div class="row">
                              <div data-tilt class="col-lg-4 col-sm-6">
                                    <div data-tilt  class="card part1 c text-center mb-2 shadow-lg">
                                        <div   class="card-body">
                                        <img src="img/user.jpg" class="img-fluid"/>
                                         <a href="createuser.php"><button type="button" class="btn div-color text-white"style="border-radius: 10px;">Create a User</button></a>
                                        </div>
                                    </div></div>
                                <div data-tilt class="col-lg-4 col-sm-6">
                                    <div  class="card  c part2 text-center shadow-lg mb-2">
                                        <div class="card-body">
                                        <img src="img/transfer.jpg" class="img-fluid"/>
                                         <a href="transfermoney.php"><button type="button" class="btn div-color text-white" style="border-radius: 10px;">Make a Transaction</button></a>
                                        </div>
                                    </div>
                                  </div>
                                <div data-tilt class="col-lg-4 col-sm-6">
                                    <div  class="card c part3 text-center shadow-lg mb-2">
                                        <div class="card-body">
                                        <img src="img/history.jpg" class="img-fluid"/>     
                                         <a href="transactionhistory.php"><button type="button" class="btn div-color text-white" style="border-radius: 10px;">Transaction History</button></a>
                                        </div>
                                    </div>
                                  </div>
                           </div>           
       </div>
     </div><!--Banking section-->
   <?php
   include 'footer.php';
   ?>
<script src="jquery/tilt.jquery.min.js"></script>   
<script src="jquery/jquery.ripples-min.js"></script>  
<script src="jquery/typed.min.js"></script> 
<script>
          jQuery(document).ready(function()
          {
             $('header').ripples({
              dropRadius: 20,
              perturbance: 0.03,
  
            }); 
          });
</script>    
<script>
              let animate=new Typed('#ani',{
                  strings:['WELCOME',"SPARKS BANK"],
                  typeSpeed:100,
                  backSpeed:100,
                  loop:true,
                  })
              </script>
</body>
</html>