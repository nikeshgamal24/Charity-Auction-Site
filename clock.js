function showTime()
{
      var date= new Date();
      var M= date.getMonth();
      var D= date.getDate();
      var h=date.getHours();
      var m=date.getMinutes();
      var s=date.getSeconds();
    
       var session="AM";
        
    if(M+1==1){
        M="Jan";
    }

    if(M+1==2){
        M="Feb";
    }

    if(M+1==3){
        M="March";
    }

    if(M+1==4){
        M="Apr";
    }
    if(M+1==5){
        M="May";
    }

    if(M+1==6){
        M="June";
    }
    if(M+1==7){
        M="July";
    }

    if(M+1==8){
        M="Aug";
    }
    
    if(M+1==9){
        M="Sep";
    }
    if(M+1==10){
        M="Oct";
    }

    if(M+1==11){
        M="Nov";
    }
    if(M+1==12){
        M="Dec";
    }


     if(h==0){
         h=12;
     }
    
    if(h>12){
         h=h-12;
         session="PM";
    }  
  
    h=(h<10)? "0" + h:h;
    m=(m<10)? "0" + m:m;
    s=(s<10)? "0" + s:s;

    var time =M + " "+ D + " |  " +  h + ":" + m + ":" + s + " "+ session;
    document.getElementById("digitalClock").innerHTML=time;
    setTimeout(showTime,1000);
}

showTime();