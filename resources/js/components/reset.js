function reset() {
    var r =confirm("are you sure you want to reset the scores");
    /*     capnumg = 0;
         capnumh = 0;
         capnumr = 0;
         capnums = 0;
    */
    if(r == true) {
        document.getElementById('counterG').innerHTML = 0;
        document.getElementById('counterS').innerHTML = 0;
        document.getElementById('counterH').innerHTML = 0;
        document.getElementById('counterR').innerHTML = 0;
    }

}
