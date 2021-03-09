function sum(){
    price1 = document.getElementById("input1").value * 0.99;
    price2 = document.getElementById("input2").value * 2.99;
    
    total = price1 + price2;
    document.getElementById("output3").innerText = total.toFixed(2);
}
