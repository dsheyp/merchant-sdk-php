<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>PayPal SDK - GetAuthDetails</title>
</head>
<?php $token = isset($_GET['token'])?  $_GET['token'] : 'HA-WJH3DBT463KH4';
?>
<body>
    <div id="wrapper">
    <div id="header">
        <h3>GetAuthDetails</h3>
        <div id="apidetails"></div>
    </div>
    <form id="form1" action ="GetAuthDetails.php" >
        <div id="request_form">
            <div class="param_name">Token</div>
            <div class="param_value">
                <input type="text" name="token" id="token" value =<?php echo $token ;?> />
            </div>           
            <div class="submit">
                <input id="Submit1" type="submit" name="submit" value="submit"  />
            </div>
        </div>
    </form>
    </div>
    <div id="relatedcalls">
  
         
    </div>
</body>
</html>
