/*var capnums = 0;
function increments(){
    capnums++;
    document.getElementById('displays').innerHTML = capnums;
}

function decrements() {
    if (capnums > 0) {
        capnums--;
        document.getElementById('displays').innerHTML = capnums;
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

                    if (data.property === "counterR" && data.state !== undefined) {
                        setCounterR(data.state, true);
                    }
                }
            });

        }).catch(function(error) {
        console.log('Error : ', error);
    });
}

initCounterR();

function initCounterR() {
    // We use localstorage but easily could use IndexDB!

    var validStoredCounter = localStorage.getItem("counterR") !== undefined &&
        localStorage.getItem("counterR") !== null &&
        localStorage.getItem("counterR") !== "NaN"


    if (validStoredCounter) {
        var count = parseInt(localStorage.getItem("counterR"));
        setCounterR(count, false);
    } else {
        setCounterR(0, false);
    }

    document.getElementById("incrementR").addEventListener("click", incrementR);
    document.getElementById("decrementR").addEventListener("click", decrementR);

}

function decrementR(event) {
    var count = getCountR() - 1;
    if (count >= 0) {
        setCounterR(count, false)
    }
}

function incrementR(event) {
    var count = getCountR() + 1;
    setCounterR(count, false)
}


function getCountR() {
    var count = parseInt(document.getElementById("counterR").innerHTML);
    if (!isNaN(count)) {
        return count;

    } else {

        return 0;
    }
}

function setCounterR(count, fromOtherTab) {
    document.getElementById("counterR").innerHTML = parseInt(count);

    if (!fromOtherTab) {
        localStorage.setItem("counterR", count);
        stateToServiceWorker({property: "counterR", state: count});
    }
}

function stateToServiceWorker(data){

    if (navigator.serviceWorker && navigator.serviceWorker.controller) {
        navigator.serviceWorker.controller
            .postMessage(data);
    }

}
