/*var capnumh = 0;
function incrementh(){
    capnumh++;
    document.getElementById('displayh').innerHTML = capnumh;
}

function decrementh() {
    if (capnumh > 0) {
        capnumh--;
        document.getElementById('displayh').innerHTML = capnumh;
    }
}
*/

if ('serviceWorker' in navigator) {
    //tabSyncReady = new Promise();
    navigator.serviceWorker.register('service-worker.js')
        .then(function() {
            return navigator.serviceWorker.ready;
        })

        .then(function(reg) {
            console.log('Service Worker is ready', reg);

            navigator.serviceWorker.addEventListener('message', function(event){
                var data;

                if (event.data) {
                    data = event.data;

                    if (data.property === "counterS" && data.state !== undefined) {
                        setCounterS(data.state, true);
                    }
                }
            });

        }).catch(function(error) {
        console.log('Error : ', error);
    });
}

initCounterS();


function initCounterS() {
    // We use localstorage but easily could use IndexDB!

    var validStoredCounter = localStorage.getItem("counterS") !== undefined &&
        localStorage.getItem("counterS") !== null &&
        localStorage.getItem("counterS") !== "NaN"


    if (validStoredCounter) {
        var count = parseInt(localStorage.getItem("counterS"));
        setCounterS(count, false);
    } else {
        setCounterS(0, false);
    }

    document.getElementById("incrementS").addEventListener("click", incrementS);
    document.getElementById("decrementS").addEventListener("click", decrementS);

}


function decrementS(event) {
    var count = getCountS() - 1;
    if(count >= 0) {
        setCounterS(count, false)
    }
}

function incrementS(event) {
    var count = getCountS() + 1;
    setCounterS(count, false)
}



function getCountS() {
    var count = parseInt(document.getElementById("counterS").innerHTML);
    if (!isNaN(count)) {
        return count;

    } else {

        return 0;
    }
}


function setCounterS(count, fromOtherTab) {
    document.getElementById("counterS").innerHTML = parseInt(count);

    if (!fromOtherTab) {
        localStorage.setItem("counterS", count);
        stateToServiceWorker({property: "counterS", state: count});
    }
}

function stateToServiceWorker(data){

    if (navigator.serviceWorker && navigator.serviceWorker.controller) {
        navigator.serviceWorker.controller
            .postMessage(data);
    }

}
