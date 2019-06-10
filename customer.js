console.log("Connected");
document.addEventListener("DOMContentLoaded",function(){
    var tempitems = getCookie("product");
    if (tempitems == ""){
        //alert("Please Add an Item to the Cart!");
        return;
    }
    

    var items = JSON.parse(tempitems);
    if (Object.keys(items).length === 0){
       //alert("Please Add an Item to the Cart!");
       return;
    }
    var total= 0.00;
    for (var nameitem in items){
        var count = 0;
        if (items.hasOwnProperty(nameitem)){
            var price = items[nameitem][0];
            var imagetag = items[nameitem][1];
            
            total+=parseInt(price);
            let doc = document.getElementById("cart");
            let newrow = doc.insertRow(-1)
            newrow.insertCell(count).innerHTML = nameitem;
            count+=1;
            newrow.insertCell(count).innerHTML =price;
            count+=1;
            newrow.insertCell(count).innerHTML = "<img src='"+imagetag + "' height = '180' width = '180'>";
            console.log(nameitem);
            console.log(price);
            console.log(imagetag);
        }
    }
    document.getElementById("total").innerHTML = "<b>Sub - Total: </b>" + total;
    var tax = parseInt(total)*.08875;
    tax = parseFloat(tax.toFixed(2));
    document.getElementById("tax").innerHTML = "<b>Sales Tax of 8.875%: </b>" + tax;
    var grandtotal = total + tax; 
    document.getElementById("summary").innerHTML = "<b>Grand Total = </b>" + grandtotal;
    
});

function valid(e){
    var first = document.forms["myForm"]["firstname"].value;
    var last = document.forms["myForm"]["lastname"].value;
    var email = document.forms["myForm"]["youremail"].value;
    
    if((first == "") || (last == "") || (email == "")){
        alert("Please Fill Out All Feeds");
        e.preventDefault();
    }
    
    else{
        document.cookie = "name=" +first +" " +last;
        document.cookie = "email=" + email;
    }
    
}

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
