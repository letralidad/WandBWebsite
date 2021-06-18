<?php
    require "dbcon.php";
    session_start();

        $filename = "Sales.xls";

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename='.$fileName);
?>

<table class="table-content">
    <thead>
        <tr>
            <th>Order Number</th>
            <th>Date of Order</th>
            <th>Total Price</th>
            <th>User Ordered</th>
            <th>Order Status</th>
        </tr>
    </thead>

<?php 
    if ($result->num_rows > 0){
        
        while($row=$result->fetch_assoc()): ?>
        <tbody>
            <tr>
                <td><?php echo $row['ordernum']; ?></td>
                <td><?php echo $row['orderdate']; ?></td>
                <td><?php echo $row['totalprice']; ?></td>
                <td><?php echo $row['userordered']; ?></td>
                <td><?php echo $row['orderstatus']; ?></td>
            </tr>
        </tbody>
<?php
        endwhile; 
    }
    ?>

</table>