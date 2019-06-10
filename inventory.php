<html>
<head>
<script   src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
<title>Inventory</title>
<link rel="stylesheet" href="inventory.css">
    <script type = "text/javascript" src = "button.js"></script>
        
</head>
<body>
    <div class = "headerbox">
    <b>Luxary Brands</b>
    </div>
    <br>
    <br>
    
    <?php  
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
    
    <div class = "centerbox">
        <p>Welcome to the Luxary Brand Site! All your favorite brands and the most stylish choices! </p>
        <a href = "update.php" style = "font-size: 1.1em">Edit the Inventory List</a>
    </div>
    
    <div class = "left">
        <?php
            if ($inventory[0]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '210' width = '200'>";
            }
            else{
                echo "<img src = 'pics/gucci.jpg' alt = 'Gucci Ace Sneakers' height = '200' width = '210'>";
            }
        
        
        echo "<h1>Gucci Ace Sneakers</h1>";
        echo "<p>Stock on Hand: ".$inventory[0];
        echo "<p>Price: ".$price[0];
        echo "<br>";
        
        if ($inventory[0]!=0){
        ?>
        <button class = "order" data-product = "Gucci Ace Sneakers" data-price = "620.00" data-pic = "pics/gucci.jpg" >Add to Cart</button>
        <?php
        }
        
        ?>
    </div>
    
    <div class = "right">
        <?php
            if ($inventory[1]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '210' width = '200'>";
            }
            else{
                echo "<img src = 'pics/moschino.jpg' alt = 'Moschino Fleece Hoodie' height = '210' width = '200'>";
            }
        
        
        echo "<h1>Moschino Fleece Hoodie</h1>";
        echo "<p>Stock on Hand: ".$inventory[1];
        echo "<p>Price: ".$price[1];
        echo "<br>";
        
        if ($inventory[1]!=0){
        ?>
        
        <button class = "order" data-product = "Moschino Fleece Hoodie" data-price = "950.00" data-pic = "pics/moschino.jpg">Add to Cart</button>
        
        <?php
        }
        ?>
    </div>
    
     <div class = "left">
        <?php
            if ($inventory[2]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '210' width = '200'>";
            }
            else{
                echo "<img src = 'pics/burberry.jpg' alt = 'Burberry Scarf' height = '200' width = '210'>";
            }
        
        
        echo "<h1>Burberry Scarf</h1>";
        echo "<p>Stock on Hand: ".$inventory[2];
        echo "<p>Price: ".$price[2];
        echo "<br>";
         
        if ($inventory[2]!=0){
        ?>
         
        <button class = "order" data-product = "Burberry Scarf" data-price = "430.00" data-pic = "pics/burberry.jpg">Add to Cart</button>
         <?php
          }
         ?>
    </div>
    
     <div class = "right">
        <?php
            if ($inventory[3]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '210' width = '200'>";
            }
            else{
                echo "<img src = 'pics/louis.jpg' alt = 'Louis Vuitton Bag' height = '200' width = '210'>";
            }
        
        
        echo "<h1>Louis Vuitton Classic MM Bag</h1>";
        echo "<p>Stock on Hand: ".$inventory[3];
        echo "<p>Price: ".$price[3];
        echo "<br>";
         
        if ($inventory[3]!=0){
        ?>
         <button class = "order" data-product = "Louis Vuitton Classic Bag" data-price = "1320.00" data-pic = "pics/louis.jpg">Add to Cart</button>
         <?php
        }
         ?>
    </div>
    
    <div class = "left">
        <?php
            if ($inventory[4]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '210' width = '200'>";
            }
            else{
                echo "<img src = 'pics/guccibag.jpg' alt = 'GG Marmont Matelassé Mini Bag' height = '200' width = '210'>";
            }
        
        
        echo "<h1>GG Marmont Matelassé Mini Bag</h1>";
        echo "<p>Stock on Hand: ".$inventory[4];
        echo "<p>Price: ".$price[4];
        echo "<br>";
        
        if ($inventory[4]!=0){
        ?>
        <button class = "order" data-product = "Gucci Marmount Mini Bag" data-price = "980.00" data-pic = "pics/guccibag.jpg">Add to Cart</button>
        <?php
        }
        ?>
    </div>
    
    <div class = "right">
        <?php
            if ($inventory[5]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '190' width = '300'>";
            }
            else{
                echo "<img src = 'pics/prada.jpg' alt = 'Prada Round Polarized Sunglasses' height = '190' width = '230'>";
            }
        
        
        echo "<h1>Prada Round Polarized Sunglasses</h1>";
        echo "<p>Stock on Hand: ".$inventory[5];
        echo "<p>Price: ".$price[5];
        echo "<br>";
        
        if ($inventory[5]!=0){
        ?>
        
        <button class = "order" data-product = "Prada Round Sunglasses" data-price = "440.00" data-pic = "pics/prada.jpg">Add to Cart</button>
        <?php
        }
        ?>
    </div>
    
    <div class = "left">
        <?php
            if ($inventory[6]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '190' width = '300'>";
            }
            else{
                echo "<img src = 'pics/balenciaga.jpg' alt = 'Balenciaga Shirt' height = '200' width = '210'>";
            }
        
        
        echo "<h1>Balenciaga Logo Printed T-Shirt</h1>";
        echo "<p>Stock on Hand: ".$inventory[6];
        echo "<p>Price: ".$price[6];
        echo "<br>";
        
        if ($inventory[6]!=0){
        ?>
        
        <button class = "order" data-product = "Balenciaga Logo Printed T-Shirt" data-price = "495.00" data-pic = "pics/balenciaga.jpg">Add to Cart</button>
        <?php
        }
        ?>

    </div>
    
    <div class = "right">
        <?php
            if ($inventory[7]==0){
                echo "<img src = 'outofstock.php' alt = 'Sold Out' height = '190' width = '300'>";
            }
            else{
                echo "<img src = 'pics/alexander.jpg' alt = 'Alexander McQueen Oversized Sneaker' height = '190' width = '200'>";
            }
        
        
        echo "<h1>Alexander McQueen Oversized Sneaker</h1>";
        echo "<p>Stock on Hand: ".$inventory[7];
        echo "<p>Price: ".$price[7];
        echo "<br>";
        
        if ($inventory[7]!=0){
        ?>
        <button class = "order" data-product = "Alexander McQueen Oversized Sneaker" data-price = "490.00" data-pic = "pics/alexander.jpg">Add to Cart</button>
        
        <?php
        }
        ?>

    </div>
    <form onsubmit = "foo(event)" action = "orderverification.php">
    <input type = "submit" value = "Sumbit">

   <br>
   </form>  
    
</body>
</html>