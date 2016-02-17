<?php
    include "config.php";

    if(@$_POST['addProduct'])
    {
        echo "It's in here";
        $table1 = $_SESSION['table1'];
        $table2 = $_SESSION['table2'];
        $table3 = $_SESSION['table3'];
        $table4 = $_SESSION['table4'];
        $table5 = $_SESSION['table5'];
        $table6 = $_SESSION['table6'];
        $table7 = $_SESSION['table7'];
        $table8 = $_SESSION['table8'];
        $table9 = $_SESSION['table9'];

        echo $table9;

        mysql_query("INSERT INTO `newproject`.`Orders` (`Table1`, `Table2`, `Table3`, `Table4`, `Table5`, `Table6`, `Table7`, `Table8`, `Table9`) VALUES ('".$table1."', '$table2, '$table3', '$table4', '$table5', '$table6', '$table7', '$table8', '$table9')");
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart Cart</title>
    <script src="script.js"></script>
</head>
<body style="background-color: bisque">
<div style="width: 100%; height: 50px; background-color: brown">
    <p style="font-size: 45px; color: yellow;">Tables</p>

    <div style="width:25%; height: 40px; background-color: azure; float: right; position: relative; top: -90px;"  onclick="window.location.replace('index.php');">
        <p style="font-size: large">Shop</p>
    </div>
</div>

<!--Displays the customer's orders in a table-->
<table border="2px">
    <tr>
        <td>Object Purchased</td><td>Amount</td>
    </tr>
    <tr>
        <td>Table 1</td>
        <td><?php include "config.php"; echo $_SESSION["table1"];?></td>

    </tr>
    <tr>
        <td>Table 2</td>
        <td><?php include "config.php"; echo $_SESSION["table2"];?></td>
    </tr>
    <tr>
        <td>Table 3</td>
        <td><?php include "config.php"; echo $_SESSION["table3"];?></td>
    </tr>
    <tr>
        <td>Table 4</td>
        <td><?php include "config.php"; echo $_SESSION["table4"];?></td>
    </tr>
    <tr>
        <td>Table 5</td>
        <td><?php include "config.php"; echo $_SESSION["table5"];?></td>
    </tr>
    <tr>
        <td>Table 6</td>
        <td><?php include "config.php"; echo $_SESSION["table6"];?></td>
    </tr>
    <tr>
        <td>Table 7</td>
        <td><?php include "config.php"; echo $_SESSION["table7"];?></td>
    </tr>
    <tr>
        <td>Table 8</td>
        <td><?php include "config.php"; echo $_SESSION["table8"];?></td>
    </tr>
    <tr>
        <td>Table 9</td>
        <td><?php include "config.php"; echo $_SESSION["table9"];?></td>
    </tr>
    <tr>
        <td>Total cost</td>
        <td><?php
            include "config.php";
            $cost = ($_SESSION["table1"]*100) +
                ($_SESSION["table2"]*80) +
                ($_SESSION["table3"]*100) +
                ($_SESSION["table4"]*90) +
                ($_SESSION["table5"]*95) +
                ($_SESSION["table6"]*90) +
                ($_SESSION["table7"]*90) +
                ($_SESSION["table8"]) +
                ($_SESSION["table9"]);
            ?></td>
    </tr>
</table>

<script>
</script>

<div class="FormContainer HorizontalFormContainer">
    <form name="addProduct" method="post">
        <dl>
            <dt><span class="Required">*</span> Credit Card Type:</dt>
            <dd>
                <select name="creditcard_cctype" id="creditcard_cctype" style="width:175px" onchange="updateCreditCardType()" class="small">
                    <option value="">-- Please Choose --</option>
                    <option id="CCType_AMEX" class=" requiresCVV2" value="AMEX">American Express</option>
                    <option id="CCType_DINERS" class="" value="DINERS">Diners Club</option>
                    <option id="CCType_DISCOVER" class=" requiresCVV2" value="DISCOVER">Discover</option>
                    <option id="CCType_JCB" class=" requiresCVV2" value="JCB">JCB</option>
                    <option id="CCType_MC" class=" requiresCVV2" value="MC">Mastercard</option>
                    <option id="CCType_VISA" class=" requiresCVV2" value="VISA">Visa</option>
                </select>
            </dd>

            <dt><span class="Required">*</span> Cardholder's Name:</dt>
            <dd><input type="text" class="Textbox" name="creditcard_name" id="creditcard_name" size="30"></dd>

            <dt><span class="Required">*</span> Credit Card Number:</dt>
            <dd>
                <input maxlength="16" type="text" class="Textbox" name="creditcard_ccno" id="creditcard_ccno" value="" size="30">

                <small class="LittleNotePassword">Numbers only, no spaces or dashes.</small>
            </dd>

            <dt class="CreditCardIssueNo" style="display: none;"><span class="Required">&nbsp;</span> Card Issue No:</dt>
            <dd class="CreditCardIssueNo" style="display: none;">
                <input class="Textbox" name="creditcard_issueno" id="creditcard_issueno" value="" size="4">

                <small class="LittleNotePassword">The issue number found on the front of your card under 'ISS' or 'ISSUE'Only required for cards that contain it.</small>
            </dd>

            <dt class="CreditCardIssueDate" style="display: none;"><span class="Required">&nbsp;</span> Card Issue Date:</dt>
            <dd class="CreditCardIssueDate" style="display: none;">
                <select name="creditcard_issuedatem" id="creditcard_issuedatem" class="small">
                    <option value=""></option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
                <select name="creditcard_issuedatey" id="creditcard_issuedatey" class="small">
                    <option value=""></option>
                    <option value="15">2015</option>
                    <option value="14">2014</option>
                    <option value="13">2013</option>
                    <option value="12">2012</option>
                    <option value="11">2011</option>
                </select>

                <small class="LittleNotePassword">The issue date found on the front of your card. Only required for cards that contain it.</small>
            </dd>

            <dt><span class="Required">*</span> Expiration Date:</dt>
            <dd>
                <select name="creditcard_ccexpm" id="creditcard_ccexpm" class="small">
                    <option value=""></option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
                <select name="creditcard_ccexpy" id="creditcard_ccexpy" class="small">
                    <option value=""></option>
                    <option value="15">2015</option>
                    <option value="16">2016</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                    <option value="24">2024</option>
                    <option value="25">2025</option>
                    <option value="26">2026</option>
                    <option value="27">2027</option>
                    <option value="28">2028</option>
                    <option value="29">2029</option>
                    <option value="30">2030</option>
                    <option value="31">2031</option>
                    <option value="32">2032</option>
                    <option value="33">2033</option>
                    <option value="34">2034</option>
                    <option value="35">2035</option>
                </select>
            </dd>

            <dt class="CVV2Input" style=""><span class="Required">*</span> CVV2:</dt>
            <dd class="CVV2Input" id="CardCodeInput" style="" type="number">
                <input type="text" class="Textbox" name="creditcard_cccvd" id="creditcard_cccvd" value="" size="4" maxlength="4">
            </dd>


        </dl>

        <button type="submit" name="addProduct" value="1">Insert</button>
    </form>
</div>
</body>
</html>