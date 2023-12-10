var content_name = document.querySelector('#cardNumber')
var card_error = document.querySelector('#card_error')
var cardNumberInput = document.querySelector('#cardNumberInput')
var svgunu = document.querySelector('#svgunu')
var svgdoi = document.querySelector('#svgdoi')
var svgtrei = document.querySelector('#svgtrei')
var svgg = document.querySelector('#svgg')
var error = document.querySelector('.error')
var svg_error = document.querySelector('.svg_error')



var cardType = document.querySelector('#cardType')
cardType.style.display = 'none'
function checkLength(el) {
   
    if (el.value.length = 4 && el.value.length != 19 ) {
      svgunu.style.display = 'none'
      svgdoi.style.display = 'inline'
      svgdoi.style.color = 'red'
      svgtrei.style.display = 'none'
      content_name.style.color = 'red'
      svgg.style.display = 'inline'
      content_name.style.translateY='-90%'
    }
    else {
      content_name.style.color = 'black'
      content_name.style.fontWeight = 'normal'
      svgg.style.display = 'none'
      svgtrei.style.display = 'inline'
      svgdoi.style.display = 'none'

    } 
    if (el.value.length > 6 && cardType.value == '-') {
      cardNumberInput.value = ''

      card_error.style.display = 'inline'
      svgunu.style.display = 'none'
      svgdoi.style.display = 'inline'
      svgdoi.style.color = 'red'
      svgtrei.style.display = 'none'
      content_name.style.color = 'red'
      svgg.style.display = 'inline'
      content_name.style.translateY='-90%'
    }else {
      card_error.style.display = 'none'


    }


  }
  
  var selectBox = document.getElementById('select_y');
  // loop through years
  for (var i = 2022; i < 2060; i++) {
      // create option element
      var option = document.createElement('option');
      // add value and text name
      option.value = i;
      option.id = 'option_list' + i;
      option.innerHTML = i;
      // add the option element to the selectbox
      selectBox.appendChild(option);
  }



var option_list2026 = document.querySelector('#option_list2026')
option_list2026.addEventListener('click', function(){
  console.log('first')
})


function val() {
  var First_name = document.querySelector('#First_name').value
  var Middle_initial = document.querySelector('#Middle_initial').value
  var Last_name = document.querySelector('#Last_name').value
  // var cardType = document.querySelector('#cardType')
  var select_m = document.querySelector('#select_m').value
  var select_y = document.querySelector('#select_y').value
  var cvv = document.querySelector('#cvv').value
  var HomeAdressunu = document.querySelector('#HomeAdressunu').value
  var HomeAdressDoi = document.querySelector('#HomeAdressDoi').value
  var city = document.querySelector('#city').value
  var State = document.querySelector('#State').value
  var ZIP = document.querySelector('#ZIP').value

  if (!First_name  && !Last_name  && select_m != ' ' && select_y != ' ' && !cvv && !HomeAdressunu && !HomeAdressDoi  && !city && !State && !ZIP){
    error.innerText = 'All file required'
    svg_error.style.display = 'inline'
  }else 
  if(!First_name){
    error.innerText = 'First name required'
    svg_error.style.display = 'inline'
  }else if( !Last_name){
    error.innerText = 'Last name required'
    svg_error.style.display = 'inline'
  }else if(!cardNumberInput.value){
    error.innerText = 'Card Number required'
    svg_error.style.display = 'inline'
  }
  else if(!select_m){
    error.innerText = 'Month required'
    svg_error.style.display = 'inline'
  }
  else if(!select_y){
    error.innerText = 'Year required'
    svg_error.style.display = 'inline'
  }
  else if(!cvv){
    error.innerText = 'Cvv required'
    svg_error.style.display = 'inline'
  }
  else if(!HomeAdressunu){
    error.innerText = 'Home adress required'
    svg_error.style.display = 'inline'
  }
  else if(!city){
    error.innerText = 'City required'
    svg_error.style.display = 'inline'
  }
  else if(!State){
    error.innerText = 'State required'
    svg_error.style.display = 'inline'
  }
  else if(!ZIP){
    error.innerText = 'ZIP required'
    svg_error.style.display = 'inline'
  }
  console.log(select_m)

  // if (!First_name && !Middle_initial     && !Last_name  && !select_m && !select_y && !cvv && !HomeAdressunu && !HomeAdressDoi  && !city && !State && !ZIP) {
   
  //     return false;
  // } else {
  //     document.myForm.submit();
  // }


}