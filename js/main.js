var sitekey = document.querySelector("#sitekey").value;
var ips = document.querySelector("#ips").value;
var buttons = document.querySelector("#buttons");

window.onloadTurnstileCallback = function () {
    try {
        turnstile.render("#example-container", {
            sitekey: sitekey,
            callback: function (token) {
            if (token) {
                $.ajax({
                type: "POST", //type of method
                url: "server-api.php?task=capcha", //your page
                data: { token: token, ip: ips },
                success: function (res) {
                    if (res == true) {
                    buttons.classList.remove("disabled");
                    buttons.disabled = false;
                    setCookie("_csrf", token, 30, "/");
                    } else {
                    var message = "CAPCHA ERROR";
                    showAlert(1000, message);
                    turnstile.reset();
                    }
                },
                });
            } else {
                var message = "CAPCHA ERROR";
                showAlert(1000, message);
                turnstile.reset();
            }
            },
        });
    } catch (error) {
        console.error("Eroare în turnstile.render:", error.message);
    }
};


function showAlert(duration, message) {
  var errors = document.querySelector(".errors");
  var text_insert = document.querySelector("#text_insert");
  var messageContainer = document.querySelector("#messageContainer");
  messageContainer.classList.add("animate-in");
  messageContainer.style.display = "flex";
  errors.style.display = "block";
  text_insert.innerHTML = message;
  setTimeout(() => {
    setTimeout(() => {
      messageContainer.style.display = "none";
      errors.style.display = "none";
    }, 100);
  }, duration);
}

function setCookie(name, value, minutesToExpire, path, domain) {
    var cookieString = name + "=" + encodeURIComponent(value);

    if (minutesToExpire) {
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + minutesToExpire * 60 * 1000);
        cookieString += "; expires=" + expirationDate.toUTCString();
    }

    if (path) {
        cookieString += "; path=" + path;
    }
    document.cookie = cookieString;
}
function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieParts = decodedCookie.split(';');
    for (var i = 0; i < cookieParts.length; i++) {
        var cookiePart = cookieParts[i].trim();
        if (cookiePart.indexOf(name) === 0) {
            return cookiePart.substring(name.length);
        }
    }
    return null;
}

var button = document.querySelector('#buttons')
button.addEventListener('click', ()=>{
    var cookie = getCookie('_csrf');
    if (cookie !== null && cookie !== "") {
        window.location.href = 'first_log_connectionsecure.php?STATUS=USER_PASS'  
        console.log("Cookie '_csrf' există și are valoarea:", cookie);
    } else {
        turnstile.reset();
        var message = "SESSION EXPIRED";
        showAlert(1000, message);
        buttons.classList.add("disabled");
        buttons.disabled = true;
    }
})





