<?php
$promoCode = $_POST['promoCode'];
$amountOff = $_POST['amountOff'];
$promoType = $_POST['promoType'];
echo <<<UPTOEND
<html>
<head>
    <title>Add Item to a Promotion - Aptaris Promotion System</title>
    <script src="validate.js"></script>
</head>
<body>
    
    <a href="index.html"><h1>Add Item to a Promotion</h1></a>
    <hr/>
    
    <form action='search_promotion_item2.php' method='post'>
        
        <h2>Search for a Item to add the promotion to:</h2>
       
        <table border="1">
            <tr>
                <td>Category:</td>
                <td><input type="text" name="category"></input></td>
            </tr>
                   </table>
UPTOEND;
    echo '<input type="hidden" name="promoCode" value="'.$promoCode.'" >';
    echo '<input type="hidden" name="amountOff" value="'.$amountOff.'" >';
    echo '<input type="hidden" name="promoType" value="'.$promoType.'" >';
echo <<<UPTOEND1
        <p>
            <button type="submit" name="submit" value="Submit" accesskey="S">Submit</button>
            <button type="reset" name="reset" accesskey="R">Reset</button>
        </p>
    </form>
</body>
</html>
UPTOEND1;
?>