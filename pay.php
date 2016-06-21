<?php
session_start();
if (isset($_SESSION['id'])) {
    require("config.php");
    $uid = $_SESSION['id'];
    $bus = $_GET['bus'];
    $seat = $_GET['seat'];
    $c = $_GET['c'];
    $bust = $bus . 'bus';

    $query = mysql_query("select fare from bus where id='$bus'");
    if ($query > 0) {
        $r = mysql_fetch_array($query);
        $fare = $r['fare'];


        $tf = $fare * $seat;
    }

    ?>
    <head>
        <h3 style="color:#F00";>Welcome to Payment Gateway</h3>

        <script>
            function b() {
                var card = document.f.card.value;
                var length = card.length;
                var theurl = document.f.card.value;
                var numericExpression = /^[0-9]+$/;
                if (numericExpression.test(theurl)) {

                    if (length == 16) {
                        return true;
                    }
                    else {
                        alert("Card number should be of 16 Digits");
                        f.card.focus();
                        return false;
                    }

                    return true;
                }
                else {
                    alert("Card number should be Numeric");
                    f.card.focus();
                    return false;
                }
            }

            function isNumeric() {
                var theurl = document.f.acc.value;
                var numericExpression = /^[0-9]+$/;
                if (numericExpression.test(theurl) && theurl != '') {
                    return true;
                }
                else {
                    alert(" Account Number should be only digits");
                    document.getElementById('acc').focus();
                    return false;
                }
            }

            function d() {
                var crdn = document.f.crdname.value;
                if (crdn == '') {
                    alert("Card holder's Name can not be blank, Please fill it");
                    ddocument.getElementyId('crdname').focus();
                    return false;
                }
                else {
                    return true;
                }
            }

            function e() {
                var con = confirm("Are You Sure? Do You Want To Continue");
                if (con == true) {
                    <?php
                    //header("Location:booked.php?id=$uid&bus=$bus&seat=$seat");
                    ?>
                    window.location = "booked.php?id=<?php echo $uid;?>&bus=<?php echo $bus?>&seat=<?php echo $seat;?>&c=<?php echo $c;?>";
                }
                else {
                }
            }

            function g() {
                window.location = "Home.php?id=<?php echo $uid; ?>";
            }
            function formValidation() {
                isNumeric()
                b()
                d()
                e()
            }
        </script>
    </head>
    <body style="background-color: #5F87B1;">
    <br>
    <br>
    <form name="f" method="post" onsubmit="return formValidation()">
    <div style="padding-left:18%">
<pre>Account Number			:<input type="text" name="acc" id="acc" value="" onBlur="isNumeric()"><br>

Card Number			:<input type="text" name="card" value="" onBlur="b()">
<br>
Card Holder's Name		:<input type="text" name="crdname" id="crdname" value="" onBlur="d()">
</pre>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span
            style="background-color:#0F0"><?php echo "Amount to be deducted from your account is $" . $tf; ?></span><br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" name="ok" value="Confirm" onClick="formValidation()">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Home.php?id=<?php echo $uid; ?>">
        <input type="button" name="can" value="Cancel" onClick="g()"> </a>
    </div>
    </form><?php
} else {
    header("Location:index.php");
}
?>
</body>