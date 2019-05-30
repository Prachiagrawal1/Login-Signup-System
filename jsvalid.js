document.getElementById("defaultOpen").click();
function Switch(evt, page) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("signup-form");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(page).style.display = "block";
  evt.currentTarget.className += " active";

}

// function CheckPassword(password) 
// { 
// var passw=  "(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W) .{8,}";
// if(password.value.match(passw)) 
// { 
// alert('Success!!!')
// return true;
// }
// else
// { 
// alert('Wrong!!!')
// return false;
// }
// }