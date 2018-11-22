var myVar;

function myFunction() {
    myVar = setTimeout(function(){ capnum }, 10000);
}

function myStopFunction() {
    clearTimeout(myVar);
}