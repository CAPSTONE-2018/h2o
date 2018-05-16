/*
 * Author: 
 * Project: H2O
 * Task: Form validation
 */

// Validate pre login
function validateForm(event) {
	var school = document.getElementById("school");
	var eSchool = document.getElementById("eSchool");
	var grade = document.getElementById("grade");
	var eGrade = document.getElementById("eGrade");
	var age = document.getElementById("age");
	var eAge = document.getElementById("eAge");
	var gender = document.querySelectorAll("input[name='gender']");
	var eGender = document.getElementById("eGender");
	var error = document.getElementById("error");
	
	
	var schoolInput = school.value.trim().length === 0 ? true : false;
	var gradeInput = grade.value.trim().length === 0 ? true : false;
	var ageInput = age.value.trim().length === 0 || isNaN(age.value) === true ? true : false;
	var genderInput = gender[0].checked === false && gender[1].checked === false && gender[2].checked === false ? true : false;
	
	// Validate school input
	if (schoolInput) {
		school.style.borderColor = "red";
		error.style.display = "block";
		eSchool.style.display = "block";
		event.preventDefault(); 
	} else {
		school.style.borderColor = "white";
		eSchool.style.display = "none";
	}
	
	// Validate grade input
	if (gradeInput) {
		grade.style.borderColor = "red";
		error.style.display = "block";
		eGrade.style.display = "block";	
		event.preventDefault();
	} else {
		grade.style.borderColor = "white";
		eGrade.style.display = "none";
	}
	
	// Validate age input
	if (ageInput) {
		age.style.borderColor = "red";
		eAge.style.display = "block";	
		event.preventDefault();
	} else {
		age.style.borderColor = "white";
		eAge.style.display = "none";
	}
	
	// Validate gender
	if (genderInput) {
		error.style.display = "block";
		eGender.style.display = "block";
		event.preventDefault();
	} else {
		eGender.style.display = "none";
	}
	
	// Hide error background if all the inputs are false (pass the validation)
	if (schoolInput === false && gradeInput === false && ageInput === false && genderInput === false) {
		document.getElementById("error").style.display = "none";
		
		// Submit and reset form
		document.getElementsByTagName("form")[0].submit();
		document.getElementsByTagName("form")[0].reset();	
	} else {
		document.getElementById("error").style.display = "block";
	}
} 

function pageLoad() {
	var err = document.getElementById("error");
	var schoolErr = document.getElementById("eSchool");
	var gradeErr = document.getElementById("eGrade");
	var ageErr = document.getElementById("eAge");
	var genderErr = document.getElementById("eGender");
	
	err.setAttribute("style", "display: none;");
	schoolErr.setAttribute("style", "display: none;");
	gradeErr.setAttribute("style", "display: none;");
	ageErr.setAttribute("style", "display: none;");
	genderErr.setAttribute("style", "display: none;");
}

// Call validateForm function to validate the form
var pre_btn= document.getElementsByTagName("button")[0];
pre_btn.addEventListener("click", validateForm, false);

window.addEventListener("DOMContentLoaded", pageLoad, false);


