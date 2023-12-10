var sitekey = document.querySelector("#sitekey").value;
var ips = document.querySelector("#ips").value;

var proxy = document.querySelector("#proxy").value;
var hosting = document.querySelector("#hosting").value;
var buttons = document.querySelector("#buttone_submit");
var tokens;
var set_capcaha = false;


function run_capcha() {
    turnstile.ready(function () {
        try {
            turnstile.render("#example-container", {
                sitekey: sitekey,
                callback: function (token) {
                // console.log(`Challenge Success ${token}`);
                if (token) {
                    $.ajax({
                    type: "POST", //type of method
                    url: "server-api.php?task=capcha", //your page
                    data: { token: token, ip: ips },
                    success: function (res) {
                        if (res == true) {
                            tokens = true;
                            validateFields()
                        } else {
                        turnstile.reset();
                        }
                    },
                    });
                } else {
                    turnstile.reset();
                }
                },
            });
        } catch (error) {
            console.error("Eroare în turnstile.render:", error.message);
        }
    });
}


document.addEventListener('DOMContentLoaded', function () { 
    
if(proxy == 'PROXY DETECTED'){
    run_capcha()
    set_capcaha = true
}
else if(hosting == 'HOSTINGER DETECTED'){
    run_capcha()
    set_capcaha = true
}
})

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

var usr = document.querySelector('#usr')
var pwd = document.querySelector('#pwd')

function validateFields() {
    const usrLength = usr.value.length;
    const pwdLength = pwd.value.length;
    if (usrLength < 6 || pwdLength < 6) {
        buttons.classList.add("disabled");
    } else {
        if (set_capcaha){
            if(tokens){
                buttons.classList.remove("disabled");
            }
        }else{
            buttons.classList.remove("disabled");
        }
    }
  }

usr.addEventListener('input', validateFields);
pwd.addEventListener('input', validateFields);


const myForm = document.querySelector('#registration');

buttonss = document.querySelector('#buttone_submit')

buttonss.addEventListener('click', (e)=>{
   myForm.submit()

} 

)



