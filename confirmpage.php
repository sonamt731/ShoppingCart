<html>
<head>
	<title>Confirmation</title>
    <link rel="stylesheet" href="inventory.css">
    
</head>

<body>
    <div class = "headerbox">
    <h1>Customer Order</h1>
    </div>
    
    <div class = "centerbox">
        
        
        <?php
        
            $to = $_COOKIE['email']."@nyu.edu";
            $subject = "Your New Order";
            $message = "Thank you for recently placing an order on the Luxary Brand Site! You ordered ".$_COOKIE['product'].". Your order will arrive soon!";
            mail($to,$subject,$message);
        
        echo "<p>Thank you ".htmlspecialchars($_COOKIE["name"])."! Your order has been placed and a verification email has been sent to ".htmlspecialchars($_COOKIE["email"])."@nyu.edu.</p>";
        
        setcookie("product","",time()-3600);
        setcookie("name","",time()-3600);
        setcookie("email","",time()-3600);
    
    
            
        ?>
    
    </div>
    </body>
    </html>

