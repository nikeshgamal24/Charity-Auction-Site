/*on the seach input box in html portion there we use onkeyup event in order to search 
for the required ouptut on every letter we type in the search box*/

function SearchBox(){
    /*filter---->get the content that we input for the search */
    var filter = document.getElementById("searchBox").value.toUpperCase();

    var box = document.getElementById("grid");
    var divArray = box.getElementsByClassName("gridBox");

    for (var i = 0; i < divArray.length; i++) {
        var divin = divArray[i].getElementsByClassName("gridForm");
        var divs = divin[0].getElementsByTagName("div");
        var content = divs[1].getElementsByTagName("p")[0];

        
        if (content) {
            var htmlC = content.innerHTML;

            if (htmlC.toUpperCase().includes(filter)) {
            
                divArray[i].style.display = "block";
                box.style.alignItems="unset";   
                box.style.justifyContent="unset";   
                box.style.height="auto";
                divArray[i].style.margin = "0px 6px 11px 5px";
            }
            else {
                divArray[i].style.display = "none";
            }
        }
    }

}

document.getElementById("searchBox").addEventListener("keypress",function(e){
    var filter = document.getElementById("searchBox").value.toUpperCase();

    var box = document.getElementById("grid");
    var divArray = box.getElementsByClassName("gridBox");

   if(e.key==="Enter"){
  
    for (var i = 0; i < divArray.length; i++) {
        var divin = divArray[i].getElementsByClassName("gridForm");
        var divs = divin[0].getElementsByTagName("div");
        var content = divs[1].getElementsByTagName("p")[0];

        
        if (content) {
            var htmlC = content.innerHTML;

            if (htmlC.toUpperCase().includes(filter)) {
            
                divArray[i].style.display = "block";
                box.style.alignItems="unset";   
                box.style.justifyContent="unset";   
                box.style.height="auto";
                divArray[i].style.margin = "0px 6px 11px 5px";
            }
            else {
                divArray[i].style.display = "none";
            }
        }
    }
   }
});