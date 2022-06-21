<?php require('header.php'); ?>
<section id="TABLE">
    <?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql); ?>
    <div class="Contain">
        <div>
            <div style="font-family: 'Gabriela', serif;   font-size: 40px;
            text-align: center;
            margin: 20px;">
                Bank's Customers
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <form method="post" action="Details.php">
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email Id']; ?></td>
                        <td><?php echo $row['Balance']; ?></td>
                        <td>
                            <a href="details.php?user=<?php echo $row['Name']; ?>&message=no" name='user'>View</a>
                        </td>
                    </form>
                </tr>
                <?php
                } ?>
            </table>
        </div>
    </div>
</section>
</body>

</html>