/*
function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "Ankush.text",true);
    xhttp.send();
  }

  function loadDoc(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("demo").innerHTML= xhttp.responseText;
    }
    xhttp.open("POST", "ankush.text")
    xhttp.send();
  }*/

  function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "ankush.text");
    xhttp.send();
  }

  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("show").innerHTML = myObj.name; }
  xmlhttp.open("GET", "ankush");
  xmlhttp.send(); 