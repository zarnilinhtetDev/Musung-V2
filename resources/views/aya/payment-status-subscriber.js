// paymentAttemptId, payment {id, amount, currency}, statusCode, statusMessage, returnUrl

function initPaymentStatusListener(channel, subKey, messageHandler) {
    var credentials = {
        subscribeKey: subKey,
    };
    console.debug("PubNub: instantiate with credentials", credentials);
    var pubNub = new PubNub(credentials);

    console.debug("PubNub: adding listener");
    pubNub.addListener({
        message: function (package) {
            console.log("PubNub: message received: ", package);
            if (messageHandler) {
                messageHandler(package.message);
            }
        },
    });

    console.debug("PubNub: subscribing to channel: ", channel);
    pubNub.subscribe({
        channels: [channel],
    });
}

function processPaymentStatusMessage(message) {
    console.debug("Message: paymentAttemptId :", message.paymentAttemptId);
    console.debug("Message: status :", message.status);
    console.debug("Message: returnUrl :", message.returnUrl);

    if (message.status == "SUCCESS") {
        let pendingDiv = document.getElementById("status-pending");
        pendingDiv.remove();

        let successDiv = document.getElementById("status-success");
        successDiv.classList.remove("d-none");

        setTimeout(function () {
            //window.location.replace(message.returnUrl);
            window.location.href = message.returnUrl;
        }, 1000 * 6); // 6 seconds delay
    }
    if (message.status == "CANCELLED") {
        let pendingDiv = document.getElementById("status-pending");
        pendingDiv.remove();

        let successDiv = document.getElementById("status-cancelled");
        successDiv.classList.remove("d-none");

        setTimeout(function () {
            //window.location.replace(message.returnUrl);
            window.location.href = message.returnUrl;
        }, 1000 * 6); // 6 seconds delay
    }
}

let appElem = document.getElementById("app");
if (appElem != null) {
    if (
        appElem.hasAttribute("data-channel") &&
        appElem.hasAttribute("data-sub-key")
    ) {
        let channel = appElem.getAttribute("data-channel");
        let subKey = appElem.getAttribute("data-sub-key");
        initPaymentStatusListener(channel, subKey, processPaymentStatusMessage);
    } else {
        console.error(
            "Element[id=\"app\"] is missing any of 'data-channel' or 'data-sub-key'."
        );
    }
} else {
    console.error('Element[id="app"] does not exist.');
}
