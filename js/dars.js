var btnx = document.querySelector('#btnx')

var code = document.querySelector('#code')


code.addEventListener("input", (event) => {
   var inputValue = event.target.value;
   var isValid = /^\d{6}$/.test(inputValue);
   if (isValid) {
    btnx.classList.remove("disabled");
    btnx.disabled = false;
} else {
    // $("#errmsg").html("OTP must bee required 6 <br> Please try again.").stop().show();
    btnx.classList.add("disabled");
    btnx.disabled = true;
    
}
  });

// onclick="this.classList.toggle('button--loading') && setTimeout(function() { valid(); }, 200)"