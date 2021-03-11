function goBack(){
    window.history.back();
}

function eventBtnClick(el){
    text = el.innerText;
    if(text == "Accept"){
        document.getElementById("eventBtn").innerText = "Request has been accepted.";
    }else{
        document.getElementById("eventBtn").innerText = "Request has been declined.";
    }
}