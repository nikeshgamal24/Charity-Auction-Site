// //create array and pass the destination date through the array
// var arrayOfDate = ["May 25,2021 02:27:30", "May 28,2021 10:00:30",
//     "June 1,2021 05:40:30", "June 3,2021 01:27:30", "May 25,2021 02:27:30"
//     , "May 28,2021 10:00:30", "June 1,2021 05:40:30", "June 3,2021 01:27:30"];


// function timer(ddate) {
    //Here, the getTime() returns the number of milliseconds from the Jan 1 1970 initially
    var dest = new Date("May 28,2021 10:00:30").getTime();


    /* we need to refresh the page in order to get the new time so  for that we use setInterval() function 
        that will call the function untill the window is closed*/
    function countDown() {
        var current = new Date().getTime();
        var diff = dest - current;
        // console.log(diff);
        //to get the days
        if (diff > 0) {
            var days = Math.floor(diff / (60 * 60 * 24 * 1000));
            // console.log(days);

            var hours = Math.floor((diff % (1000 * 60 * 24 * 60)) / (1000 * 60 * 60));
            // console.log(hours);

            var mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            // console.log(mins);

            var seconds = Math.floor((diff % (1000 * 60)) / (1000));
            // console.log(seconds);
            if (days == 0) {
                document.getElementById("countdown1").innerHTML = hours + "h : " + mins + "m : " + seconds + "s ";
            } else {
                document.getElementById("countdown1").innerHTML = days + "days, " + hours + "h : " + mins + "m : " + seconds + "s ";
            }
        }
        else {
            document.getElementById("countdown1").innerHTML = "Auction Ended";
        }
    }

    setInterval(countDown, 1000);

// }

//function triger DOM code for each items