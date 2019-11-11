var formProjectName =document.getElementById("projectName");
var createProject = document.getElementById("createProject");
var projectNameCancelbutton = document.getElementById("projectNameCancelButton");
var body =document.getElementById("main-content");
var body =document.getElementById("main-content");

var changeProjectdetails =document.getElementById("changeProjectdetails");
var changeProjectdetailsForm =document.getElementById("ChangeProDetailsForm");
var ChangeProDetailsFormCancel =document.getElementById("ChangeProDetailsFormCancel");

createProject.onclick = function(){
	formProjectName.style.display ="block";
	body.style.opacity =0.5;
}

projectNameCancelbutton.onclick = function() {
    formProjectName.style.display = "none";
  body.style.opacity =1;
}


changeProjectdetails.onclick = function(){
  changeProjectdetails.style.display ="none";
	changeProjectdetailsForm.style.display ="block";
	body.style.opacity =0.5;
}
ChangeProDetailsFormCancel.onclick = function(){
	changeProjectdetailsForm.style.display ="none";
	body.style.opacity =0.5;
}

// ChangeProDetailsFormCancel.onclick = function(){
// 	formProjectName.style.display ="block";
// 	body.style.opacity =0.5;
// }
// ChangeProDetailsFormCancel

// When the user clicks anywhere outside of the modal, close it



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == formpopupsignup || event.target == formpopuplogin) {
    formpopupsignup.style.display = "none";
    formpopuplogin.style.display = "none";
    body.style.opacity =1;
  }
}