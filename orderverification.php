<html>
<head>
<title>Verification</title>
<link rel="stylesheet" href="inventory.css">
    <script type = "text/javascript" src = "customer.js"></script>
<style>
    table{
        border: 1px solid brown;
        padding: 20px;
    }
    #total, #tax, #summary {
        color: darkred;
    }
    
</style>
</head>
<body>
    <div class = "headerbox">
    <b>Luxary Brands Order Confirmation</b>
    </div>
    <br>
    <br>
    
<div class = 'centerbox'>
    <h3> Here is your total - Please Hit Confirm</h3>
    <table id = "cart"></table>
    <p id = "total"></p>
    <p id = "tax"></p>
    <p id = "summary"></p>
</div>
    <form action = "confirmpage.php">
    <input type='submit' value = 'Confirm' >
    </form>
    
    
    
</body>
</html>
