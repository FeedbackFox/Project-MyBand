var pageNumber = 1;

(function loadPage(){

  var sendString = pageNumber;
      var xmlhttp = new XMLHttpRequest(); // initialize xmlhttprequest object
      xmlhttp.onreadystatechange = function() { // once request return the value 1 because it started, do the following
          if (this.readyState == 4 && this.status == 200) {   // if everything is working correctly and the request is finished
              document.getElementById("homepagecontent").innerHTML = this.responseText;
              rainbow();
            }
          };
  xmlhttp.open("GET", "../private/homepage.php?page=" + sendString, true);  //specifies type of request
  xmlhttp.send(); // sends

})();

function setPageNumber(x) {
  pageNumber = pageNumber + x;
}

function changefwd() {

    setPageNumber(1)
    loadPage();
}






// Rainbow script
function rainbow() {
  var counter = 0;
  var rainbowClass = document.getElementsByClassName('rainbow');
  var lengtharray = []; //Remembers the length of the content with class=rainbow so for loop doesnt change color of undefined
  var rainbowarray = []; //Becomes the final array containing all the <span>'d text
  var finalarray = []; //Becomes the final array referencing the spanned text and changing the color
  var a = 0;

  for(var i = 0; i < rainbowClass.length; i++)
  {
    var tempvar = rainbowClass[i].innerText.split("");
    lengtharray[i] = tempvar.length;
    rainbowarray.push(rainbowClass[i].innerText.split(""));
    console.log(rainbowarray[i]);
  }

  for(var i = 0; i < rainbowarray.length; i++)
  {
    rainbowClass[i].innerHTML = rainbowarray[i].map(function(char) {
      return '<span>' + char + '</span>';
    }).join('');
    finalarray[i] = rainbowClass[i].children;
    console.log(finalarray[i]);
  }

  for(var i = 0; i < rainbowClass.length; i++)
  {
    rainbowcolors(i, finalarray[i].length)
  }

  function rainbowcolors(a,b)
  {
    setInterval(function colorchange() {
      for (var i = 0; i < b; i++)
      {
        finalarray[a][i].style.color = 'hsl(' + (counter + Math.floor(i * -3)) + ', 100%, 70%';
      }
      counter++;
    }, 7);
  }



}