function sum(){
    price1 = document.getElementById("input1").value * 0.99;
    price2 = document.getElementById("input2").value * 2.99;
    
    total = price1 + price2;
    document.getElementById("output3").innerText = total.toFixed(2);
}

function signIn(){
    inputs = document.getElementsByTagName("input");
    
    if(inputs[0].value == "kenny@ms.ca"){
        window.location.href = "communityBoard.php?user=farmer";
    } else if(inputs[0].value == "billy@ms.ca"){
        window.location.href = "communityBoard.php?user=customer";
    } else {
        document.getElementById("loginFailed").style.display = "block";
    }
}
