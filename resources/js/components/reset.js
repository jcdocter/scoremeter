document.getElementById("reset").addEventListener("click", reset);

function reset() {
    var r =confirm("are you sure you want to reset the scores");

    if(r == true) {
        document.getElementById('counterG').innerHTML = 0;
        document.getElementById('counterS').innerHTML = 0;
        document.getElementById('counterH').innerHTML = 0;
        document.getElementById('counterR').innerHTML = 0;

    }
}





