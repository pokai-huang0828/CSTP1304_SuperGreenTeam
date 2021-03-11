function clickedCommentButton(el){
    status = el.parentNode.parentNode.nextElementSibling.style.display;
    el.parentNode.parentNode.nextElementSibling.style.display 
    = (status == "block") ? "none": "block"; 
}

function toggleLikes(el){
    likeIconChildClass = el.childNodes[1].className;
    currentLikes = parseInt(el.childNodes[2].innerText);
    if(likeIconChildClass == "bi bi-heart"){
        el.childNodes[1].className = "bi bi-heart-fill" ;
        el.childNodes[2].innerText = currentLikes + 1;
    }else{
        el.childNodes[1].className = "bi bi-heart" ;
        el.childNodes[2].innerText = currentLikes - 1;
    }
}

function toggleFollower(){
    elClass = document.getElementById("addPerson").className;
    followerNumber = parseInt(document.getElementById("followerNumber").innerText);
    console.log(document.getElementById("followerNumber"));
    if(elClass == "bi bi-person-plus-fill"){
        document.getElementById("addPerson").className = "bi bi-person-plus";
        document.getElementById("followerNumber").innerText = followerNumber + 1;
    }else{
        document.getElementById("addPerson").className = "bi bi-person-plus-fill" ;
        document.getElementById("followerNumber").innerText = followerNumber - 1;
    }
}

function checkoutClick(){
    inputs = document.getElementsByTagName("input");
    for(element of inputs){
        if(element.type == "number"){
            console.log(element);
            element.value = 0;
        }
    }
}

function readMore(el){
    p_className = el.parentNode.childNodes[5].className;
    
    if(p_className.includes("truncate")){
        el.parentNode.childNodes[5].className = "postContent";
    }else {
        el.parentNode.childNodes[5].className = "text-truncate postContent";
    }
}