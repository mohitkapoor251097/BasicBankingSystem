<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <title>Transaction History</title>
   <?php
  include 'allcss.php';
?>
<style type="text/css">
       thead
        {
            background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
          color: white;
        }
</style>  
</head>
<body>
<?php
  include 'navbar.php';
?>
<div class="container">
        <h2 class="text-center pt-4 text-info">Transaction History</h2>
        <br>
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'sql/config.php';
             $sql ="select * from transaction";
             $query =mysqli_query($conn, $sql);
             while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
        <?php
            }
         ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>