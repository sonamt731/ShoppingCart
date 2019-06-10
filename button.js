var count = 0;
var product = {};

$(document).ready(function() {
    console.log("Connected");

    $(".order").click(function(){
        var item = $(this).data('product');
        var price = $(this).data('price');
        var picture = $(this).data('pic');
        console.log(item);
        console.log(price);
        console.log(picture);
        
        var text = $(this).text();
        console.log(text);
        if (text == "Add to Cart"){
            $(this).text("Remove From Cart");
            product[item]=[price,picture];
            
            document.cookie = 'product='+JSON.stringify(product); 
            
            //add cookie
        }
        else{
            $(this).text("Add to Cart");
            delete product[item];
            document.cookie = 'product='+JSON.stringify(product); 
     
        }
    

        //would want to store the item and price in a cookie --> read cookie until it is empty
        //and then figure out how to read name/object/price
        //cookie is being set but figure out w
    });
});

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function foo(e){
   var items = getCookie("product");
   if (items == ""){
       e.preventDefault();
       alert("Please Add an Item to the Cart!");
       return;
   }    
   var newitems = JSON.parse(items);
   if (Object.keys(newitems).length === 0){
       e.preventDefault();
       alert("Please Add an Item to the Cart!");
       return;
   }
}