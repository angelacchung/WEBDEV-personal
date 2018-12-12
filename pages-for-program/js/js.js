var myRequest = new XMLHttpRequest;
var sectionContainer = document.getElementById("divId");
var down = document.getElementById("descend");
// console.log(showSayingsBtn);
down.addEventListener("change", de, false);
function de(e){
      var myRequest = new XMLHttpRequest;
    	myRequest.onreadystatechange = function(){
	    if(myRequest.readyState === 4){
			var yi = JSON.parse(myRequest.responseText);
// console.log(yi)
    for(var i=0; i<yi.length; i++){
      console.log(yi[i]);

      var newPTag = document.createElement("p");

      var textNode = document.createTextNode(yi[i].rating);

      newPTag.appendChild(textNode);

      sectionContainer.appendChild(newPTag);
}
}
}

myRequest.open("POST", "process-order.php?order=desc", true); // myRequest.open("GET", "process.php", true); //true means it is asynchronous // Send urls through the url
myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
myRequest.send("order="+down.value);
};
