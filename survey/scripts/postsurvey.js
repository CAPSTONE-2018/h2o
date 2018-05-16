/*
 * Post survey validation
 * Project: H2O
 */

// Validate Post login
function postValidation(event) {
	var userID = document.getElementById("userID");
	
	if (userID.value.trim().length === 0 || userID.value.length < 4 || isNaN(userID.value)) {
		userID.style.borderColor = "red";
		event.preventDefault();
	} else {
		userID.style.borderColor = "white";
		
		// Submit and reset form
		document.getElementsByTagName("form")[1].submit(); // Submit
		document.getElementsByTagName("form")[1].reset(); // Reset
	}
	
}

var post_btn = document.getElementsByTagName("button")[1];
post_btn.addEventListener("click", postValidation, false);

