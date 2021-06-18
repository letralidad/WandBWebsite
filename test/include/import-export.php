<?php
    include "dbcon.php";
    session_start();

    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    //Import the data into the history table
    if(isset($_POST['import'])){

        $allowedExt = ['xls', 'csv', 'xlsx'];
        $filename = $_FILES['profile']['name'];
        $checking = explode(".",$filename);
        $fileExt = end($checking);

        if(in_array($fileExt, $allowedExt)){
            $tmpname = $_FILES['profile']['tmp_name'];
        
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($tmpname);
            $data = $spreadsheet->getActiveSheet()->toArray();
            $counter = 0;
            foreach($data as $row){
                $orderNumber = $row[0];
                $dateOfOrder = $row[1];
                $totalPrice = $row[2];
                $userOrdered = $row[3];
                $orderStatus = $row[4];

                if($counter > 0){
                    $importQuery = "INSERT INTO history(ordernum, orderdate, totalprice, userordered, orderstatus) 
                        VALUES('$orderNumber', '$dateOfOrder', '$totalPrice', '$userOrdered', '$orderStatus');";
                    $result = mysqli_query($dbOrdersconn, $importQuery);

                    if($result) {
                        header("Location: ../history_order.php?status=success");
                    } else {
                        header("Location: ../history_order.php?error=database");
                    }
                }
                else{
                    $counter++;
                }
            }
        }else{
            header("Location: ../history_order.php?error=file-type");
        }

        exit();

    //Export the data from the history table
    } else if(isset($_POST['export'])){
        $filename = "Sales-".date('m-d-Y').".xls";

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename='.$filename);
        $result = $dbOrdersconn->query("SELECT * from history") or die($dbOrdersconn->error);
        ?>

            <table class="table-content" style="border: 1px solid black; text-align:center;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black; text-align:center;">Order Number</th>
                        <th style="border: 1px solid black; text-align:center;">Date of Order</th>
                        <th style="border: 1px solid black; text-align:center;">Total Price</th>
                        <th style="border: 1px solid black; text-align:center;">User Ordered</th>
                        <th style="border: 1px solid black; text-align:center;">Order Status</th>
                    </tr>
                </thead>

            <?php 
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc()): ?>
                        <tr>
                            <td style="border: 1px solid black; text-align:center;"><?php echo $row['ordernum']; ?></td>
                            <td style="border: 1px solid black; text-align:center;"><?php echo $row['orderdate']; ?></td>
                            <td style="border: 1px solid black; text-align:center;"><?php echo $row['totalprice']; ?></td>
                            <td style="border: 1px solid black; text-align:center;"><?php echo $row['userordered']; ?></td>
                            <td style="border: 1px solid black; text-align:center;"><?php echo $row['orderstatus']; ?></td>
                        </tr>
            <?php
                    endwhile; 
                }else{?>
                        <tr>
                            <td colspan=5 style="font-size:20px; height: 90px;">
                                <i>
                                    No completed order yet?!
                                <i>
                            </td>
                        </tr>
                <?php
                }
                
                ?>

            </table>

        <?php
        exit();
    } else {
        header("Location: ../history_order.php?error=click");
        exit();
    }
?>