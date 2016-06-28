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

            function isCVVValid() {
                if(isNaN(document.getElementsByName("cvv")[0].value) || document.getElementsByName("cvv")[0].value.length != 3){
                    alert('Please fill valid CVV 3 digits');
                    return false;
                }
                return true;
            }
            function exp() {
                if(document.getElementsByName("expiry_month")[0].value == "" || document.getElementsByName("expiry_year")[0].value == ""){
                    alert('Please enter Expiry');
                    return false;
                }
                return true;
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
                if (b() && d() && exp() && isCVVValid()){
                    e()
                } else {
                    return false;
                }
                
                
                
                
                
                
            }
        </script>
    </head>
    <body style="background-color: #d8f9f6;">
    <br>
    <br>
    <form name="f" method="post" onsubmit="return formValidation()">
    <div style="padding-left:18%">
<pre>
Card Number			:<input type="number" name="card" value="" onBlur="b()">
<br>
Card Holder's Name		:<input type="text" name="crdname" id="crdname" value="" onBlur="d()">
<br>
Expiry			        :<select name="expiry_month"><option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>       <select name="expiry_year"><option></option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option></select><br>
<br>
CVV                             :<input type="number" name="cvv" id="cvv" value="" onBlur="isCVVValid()"><br>
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