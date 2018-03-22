//Global Variables
var courseContainer = document.querySelector(".course-container");
var courseList = courseContainer.getElementsByClassName("course-box");

//Instance Methods
$(document).ready(function(){
  $(".button-collapse").sideNav();
});

userTextField = document.getElementById('pass');
Materialize.updateTextField(userTextField);
function main(){
  addCourse();
}

function addCourse(){
    courseContainer.appendChild(courseList[1].cloneNode(true));
}
