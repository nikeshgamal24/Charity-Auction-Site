/********************For the register form************/
 function popup(){
  var x=document.getElementById("formContainer");
  var y=document.getElementById("gridcontainer");
  if(x.style.visibility==="hidden"){
    x.style.visibility="visible";
    y.style.visibility="hidden";
  }
  else{
    x.style.visibility="hidden";
    y.style.visibility="visible";
  }
  }
    }

document.getElementById("registerText").addEventListener("click",popup);