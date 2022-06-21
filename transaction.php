<?php require('header.php'); ?>
<div class="Contain">
    <div>
        <div style="font-family: 'Gabriela', serif;   font-size: 40px;
        text-align: center;
        margin: 20px;">
            Transaction History
        </div>
        <table>
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Reciever</th>
                    <th>Amount</th>
                    <th>Date & Time</th>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM `transfer`";
            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['s_name']; ?></td>
                <td><?php echo $row['r_name']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['date_time']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>

</html>