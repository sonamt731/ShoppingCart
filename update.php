<html>
<head>
<title>Update Inventory</title>
<link rel="stylesheet" href="inventory.css">
</head>
<body>
    <div class = "headerbox">
    <b>Luxary Brands</b>
    </div>
    <br>
    <br>
<div class = "centerbox">
    <h3>Edit the quantity or price of the items</h3>
    <a href = "inventory.php">Back to Inventory</a>
    
</div>  
    
<?php  
    
    if (isset($_POST['submit'])){
        $myfile = fopen("items.txt","w");
                fwrite($myfile, "Gucci Ace Sneakers"."\n");
                fwrite($myfile, "gucci.jpg"."\n");
                fwrite($myfile, $_POST["guccishoequantity"]."\n");
                fwrite($myfile, $_POST["guccishoeprice"]."\n");

                fwrite($myfile, "Moschino Fleece Hoodie"."\n");
                fwrite($myfile, "moschino.jpg"."\n");
                fwrite($myfile, $_POST["moschinoquantity"]."\n");
                fwrite($myfile, $_POST["moschinoprice"]."\n");

                fwrite($myfile, "Burberry Classic Cashmere Scarf"."\n");
                fwrite($myfile, "burberry.jpg"."\n");
                fwrite($myfile, $_POST["burberryquantity"]."\n");
                fwrite($myfile, $_POST["burberryprice"]."\n");

                fwrite($myfile, "Louis Vuitton Neverfull MM Bag"."\n");
                fwrite($myfile, "louis.jpg"."\n");
                fwrite($myfile, $_POST["louisquantity"]."\n");
                fwrite($myfile, $_POST["louisprice"]."\n");


                fwrite($myfile, "GG Marmont Matelassé Mini Bag"."\n");
                fwrite($myfile, "guccibag.jpg"."\n");
                fwrite($myfile, $_POST["GGquantity"]."\n");
                fwrite($myfile, $_POST["GGprice"]."\n");

                fwrite($myfile, "Prada Round Polarized Sunglasses"."\n");
                fwrite($myfile, "prada.jpg"."\n");
                fwrite($myfile, $_POST["pradaquantity"]."\n");
                fwrite($myfile, $_POST["pradaprice"]."\n");

                fwrite($myfile, "Balenciaga Logo Printed T-Shirt"."\n");
                fwrite($myfile, "balenciaga.jpg"."\n");
                fwrite($myfile, $_POST["balenciagaquantity"]."\n");
                fwrite($myfile, $_POST["balenciagaprice"]."\n");


                fwrite($myfile, "Alexander McQueen Oversized Sneaker"."\n");
                fwrite($myfile, "alexander.jpg"."\n");
                fwrite($myfile, $_POST["alexanderquantity"]."\n");
                fwrite($myfile, $_POST["alexanderprice"]."\n");
    
        fclose($myfile);
        header("Location: inventory.php");
        exit;
    }
    
    
        $myfile = fopen("items.txt","r");
        $count = 0;
        $objnum = 0;
        $inventory = array(0,0,0,0,0,0,0,0);
        $price = array(0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00);
        while(!feof($myfile)) {
            $string = fgets($myfile);
            $string = trim($string);
            if ($count == 0){
                $count = 1;            
            }
            else if($count == 1){
                $count = 2;
            }
            else if ($count == 2){
                $count = 3;
                $inventory[$objnum]+=$string;   
            }
            else if($count == 3){
                $count = 0;
                $price[$objnum]+=$string;
                $objnum+=1;
                
            }
            else{
                
            }
        }
    
?>
<form name = "myForm" id = "personal" action = "update.php" method="post" >
    <div class = "left"> 
    <img src = 'pics/gucci.jpg' alt = 'Gucci Ace Sneakers' height = '200' width = '210'>
    <h2>Gucci Ace Sneakers</h2>
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'guccishoequantity' value =".$inventory[0].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'guccishoeprice' value =".$price[0].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "right">
    <img src = 'pics/moschino.jpg' alt = 'Moschino Fleece Hoodie' height = '210' width = '200'>
    <h2>Moschino Fleece Hoodie</h2>
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'moschinoquantity' value =".$inventory[1].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'moschinoprice' value =".$price[1].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "left"> 
    <img src = 'pics/burberry.jpg' alt = 'Burberry Scarf' height = '200' width = '210'>
    <h2>Burberry Classic Cashmere Scarf</h2>  
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'burberryquantity' value =".$inventory[2].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'burberryprice' value =".$price[2].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "right">
    <img src = 'pics/louis.jpg' alt = 'Louis Vuitton Bag' height = '200' width = '210'>
    <h2>Louis Vuitton Neverfull MM Bag</h2>  
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'louisquantity' value =".$inventory[3].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'louisprice' value =".$price[3].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "left">
    <img src = 'pics/guccibag.jpg' alt = 'GG Marmont Matelassé Mini Bag' height = '200' width = '210'>
    <h2>GG Marmont Matelassé Mini Bag</h2> 
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'GGquantity' value =".$inventory[4].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'GGprice' value =".$price[4].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "right">
    <img src = 'pics/prada.jpg' alt = 'Prada Round Polarized Sunglasses' height = '190' width = '240'>
    <h2>Prada Round Polarized Sunglasses</h2>  
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'pradaquantity' value =".$inventory[5].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'pradaprice' value =".$price[5].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "left">
    <img src = 'pics/balenciaga.jpg' alt = 'Balenciaga Shirt' height = '200' width = '210'>
    <h2>Balenciaga Logo Printed T-Shirt</h2>  
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'balenciagaquantity' value =".$inventory[6].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'balenciagaprice' value =".$price[6].">";
    echo "</h4>";
    ?>
    </div>
    
    <div class = "right">
    <img src = 'pics/alexander.jpg' alt = 'Alexander McQueen Oversized Sneaker' height = '190' width = '200'>
    <h2>Alexander McQueen Oversized Sneaker</h2>  
    <?php
    echo "<h4>Quantity:";
    echo "<input type = 'text' name = 'alexanderquantity' value =".$inventory[7].">";
    echo "   Price:";
    echo "<input type = 'text' name = 'alexanderprice' value =".$price[7].">";
    echo "</h4>";
    ?>
    </div>
    
    <br>
    <br>
    <br>
    
<input name= "submit" type= "submit" value="Submit">
    <input type=reset value=Cancel>

    </form>  
    
</body>
</html>