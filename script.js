//sticky header
window.onscroll = function() {myFunction()};

var nav = document.getElementById("myNav");

var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

//particle background
var delay = -150;
var space = 0;
		function particle(){
			for (let i = 0; i < 120; i++) {
			var particle = document.createElement("DIV");
  			particle.classList.add('particle');
      		document.body.insertBefore(particle, nav.nextSibling);
			delay+=.5;
			particle.style.animationDelay = delay +"s";
      		space+=30;
      		particle.style.marginTop = space +"px";
		  }
	  }
	
//form validation
function validate(){
	var nme = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("message").value;
	if(nme == "" || email == "" || message == ""){
		if(nme == ""){                                 
			document.getElementById("nameerror").style.visibility = "visible";  
		}
		if(email == ""){                              
			document.getElementById("emailerror").style.visibility = "visible";  
		}
		if(message == ""){                              
			document.getElementById("messageerror").style.visibility = "visible";  
		}
		if(nme != ""){                                 
			document.getElementById("nameerror").style.visibility = "hidden";  
		}
		if(email != ""){                                 
			document.getElementById("emailerror").style.visibility = "hidden";  
		}
		if(message != ""){                              
			document.getElementById("messageerror").style.visibility = "hidden";  
		}
		return false;
	}
	else{
		return true;
	}
}            