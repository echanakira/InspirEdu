
//console.dir(document);
var courseContainer = document.querySelector(".course-container");
var courseList = courseContainer.getElementsByClassName("course-box");
addCourse();

function addCourse(){
  for(i = 0; i < 3; i++){
    courseContainer.appendChild(courseList[i].cloneNode(true));
  }
}
