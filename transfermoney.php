<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transfer Money</title>
	<?php  
	include 'allcss.php';
	?>
	<style type="text/css">
		thead
		{
			background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec,  #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
          color: white;
		}
		tbody tr:hover
		{
			background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
          color: white;
		}
		button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
</style>
</head>
<body>
	<?php
    include 'sql/config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<?php  
	include 'navbar.php';
	?>
	<div class="container">
        <h2 class="text-center pt-4 text-info">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table  table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-info">Transaction</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
                       </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
<?php
include 'footer.php';
?>
</body>
</html>