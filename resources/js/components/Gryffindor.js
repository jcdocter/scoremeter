/*var capnum = 0;
function increment(){
    capnum++;
    document.getElementById('display').innerHTML = capnum;
}


function decrement() {
    if (capnum > 0) {
        capnum--;
        document.getElementById('display').innerHTML = capnum;
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

                    if (data.property === "counterG" && data.state !== undefined) {
                        setCounterG(data.state, true);
                    }
                }
            });

        }).catch(function(error) {
        console.log('Error : ', error);
    });
}

initCounterG();

function initCounterG() {
    // We use localstorage but easily could use IndexDB!

    var validStoredCounter = localStorage.getItem("counterG") !== undefined &&
        localStorage.getItem("counterG") !== null &&
        localStorage.getItem("counterG") !== "NaN"


    if (validStoredCounter) {
        var count = parseInt(localStorage.getItem("counterG"));
        setCounterG(count, false);
    } else {
        setCounterG(0, false);
    }

    document.getElementById("incrementG").addEventListener("click", incrementG);
    document.getElementById("decrementG").addEventListener("click", decrementG);

}

function decrementG(event) {
        var count = getCountG() - 1;
        if(count >= 0) {
            setCounterG(count, false)
        }
}

function incrementG(event) {
    var count = getCountG() + 1;
    setCounterG(count, false)
}


function getCountG() {
    var count = parseInt(document.getElementById("counterG").innerHTML);
    if (!isNaN(count)) {
        return count;

    } else {

        return 0;
    }
}

function setCounterG(count, fromOtherTab) {
    document.getElementById("counterG").innerHTML = parseInt(count);

    if (!fromOtherTab) {
        localStorage.setItem("counterG", count);
        stateToServiceWorker({property: "counterG", state: count});
    }
}

function stateToServiceWorker(data){

    if (navigator.serviceWorker && navigator.serviceWorker.controller) {
        navigator.serviceWorker.controller
            .postMessage(data);
    }

}