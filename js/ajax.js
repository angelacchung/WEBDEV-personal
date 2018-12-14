var myRequest = new XMLHttpRequest;
var submitButton = document.getElementById("submit");

submitButton.addEventListener('click', submitForm,false);
function submitForm(e){
	myRequest.onreadystatechange = function(){

		if(myRequest.readyState === 4){
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(responseObj.success);
		}
	}
var password = document.getElementById("password");
console.log(password);
  var email = document.getElementById("email");
  // var i = document.getElementById("ind");
  // var c = document.getElementById("car");
  // var t = document.getElementById("tech");
  // var r = document.getElementById("role");
  // var w = document.getElementById("writer");
  // var con = document.getElementById("cont");
  // var ad = document.getElementById("admin");
	myRequest.open("POST", "register-process.php", true); //true means it is asynchronous // Send urls through the url
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	myRequest.send("password=" + password.value +
                  "&email=" + email.value );
erase();
thanks();
console.log(password.value);
              }

function erase(){
  var eraseit = document.getElementById("form");
  eraseit.style.display="none";
  }
  function thanks(){
    document.getElementById("thankyou").innerHTML = "Login";

  }
