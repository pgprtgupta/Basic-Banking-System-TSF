<?php require('header.php'); ?>

<div style="font-family: 'Gabriela', serif;   font-size: 40px;
    text-align: center;
    margin: 20px;">
    <h3>Customer Details</h3>
</div>
<div class="Contain">
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
            </thead>

            <?php
            session_start();
            $_SESSION['user'] = $_GET['user'];
            $_SESSION['sender'] = $_SESSION['user'];

            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];

                $sql = "SELECT * FROM users WHERE Name='$user'";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email Id']; ?></td>
                <td><?php echo $row['Balance']; ?></td>

            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>
<div style="font-family: 'Gabriela', serif;   font-size: 40px;
    text-align: center;
    margin: 20px;">
    <h3>Transfer Money</h3>
</div>
<div class="card container">
    <?php
    if ($_GET['message'] == 'success') {
        echo "<h3><p style='color:green;' class='messagehide'>Transaction Was Completed Successfully</p></h3>";
    }
    if ($_GET['message'] == 'transactionDenied') {
        echo "<h3><p style='color:red;' class='messagehide'>Transaction Failed (Amount Should Be Less Than Balance)</p></h3>";
    }
    ?>
    <form action="transfer.php" method="POST">

        <b> From :</b> <span style="font-size:1.2em;"><input id="myinput" name="sender" class="textbox" disabled
                type="text" value='<?php echo "$user"; ?>'></input></span>
        <br><br>

        <b>To :</b>
        <select name="reciever" id="dropdown" class="textbox" required>
            <option>Select Recipient</option>
            <?php
            $db = mysqli_connect("localhost", "root", "", "sparkpg");
            $res = mysqli_query($db, "SELECT * FROM users WHERE name!='$user'");
            while ($row = mysqli_fetch_array($res)) {
                echo ("<option> " . "  " . $row['Name'] . "</option>");
            }
            ?>
        </select>
        <br><br>

        <b>Amount : &#8377;</b>
        <input name="amount" type="number" min="100" class="textbox" required>
        <br><br>
        <a href="transfer.php"><button id="transfer" name="transfer">TRANSFER</button></a>
    </form>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
$(function() {
    setTimeout(function() {
        $('.messagehide').fadeOut('slow');
    }, 3000);
});
</script>
</body>

</html>