       
       
   
 var dom=document.getElementById("data");
 var input=parseInt(dom.value);
  /*****************Code for the factorial*******************/

  function factorial(){
      var fact=1;
     for(var i=1;i<=input;i++)
      {   
          fact=fact*i;
      }
     document.getElementById("result").value=fact;
     }
    
     document.getElementById("Btn").onclick=factorial;