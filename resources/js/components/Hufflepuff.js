/*var capnumr = 0;
function incrementr(){
    capnumr++;
    document.getElementById('displayr').innerHTML = capnumr;
}

function decrementr() {
    if (capnumr > 0) {
        capnumr--;
        document.getElementById('displayr').innerHTML = capnumr;
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

                    if (data.property === "counterH" && data.state !== undefined) {
                        setCounterH(data.state, true);
                    }
                }
            });

        }).catch(function(error) {
        console.log('Error : ', error);
    });
}

initCounterH();

function initCounterH() {
    // We use localstorage but easily could use IndexDB!

    var validStoredCounter = localStorage.getItem("counterH") !== undefined &&
        localStorage.getItem("counterH") !== null &&
        localStorage.getItem("counterH") !== "NaN"


    if (validStoredCounter) {
        var count = parseInt(localStorage.getItem("counterH"));
        setCounterH(count, false);
    } else {
        setCounterH(0, false);
    }

    document.getElementById("incrementH").addEventListener("click", incrementH);
    document.getElementById("decrementH").addEventListener("click", decrementH);

}

function decrementH(event) {
    var count = getCountH() - 1;
    if(count >= 0) {
        setCounterH(count, false)
    }
}

function incrementH(event) {
    var count = getCountH() + 1;
    setCounterH(count, false)
}


function getCountH() {
    var count = parseInt(document.getElementById("counterH").innerHTML);
    if (!isNaN(count)) {
        return count;

    } else {

        return 0;
    }
}

function setCounterH(count, fromOtherTab) {
    document.getElementById("counterH").innerHTML = parseInt(count);

    if (!fromOtherTab) {
        localStorage.setItem("counterH", count);
        stateToServiceWorker({property: "counterH", state: count});
    }
}

function stateToServiceWorker(data){

    if (navigator.serviceWorker && navigator.serviceWorker.controller) {
        navigator.serviceWorker.controller
            .postMessage(data);
    }

}
