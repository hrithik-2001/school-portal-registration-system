<?php include("top.php");?>

<h1>&nbsp&nbspMy Courses</h1>

<div id="courseContainer">
         <!-- the course boxes will be added dynamically here-->
    </div>

    
    <script>
    const courseContainer = document.getElementById('courseContainer');
    const userCourseList = [];

    function addCourseToBox(student, course) {
    const courseBox = document.createElement('div');
    courseBox.className = 'courseBox';

    const courseInfo = document.createElement('div');
    courseInfo.className = 'courseInfo';
    courseInfo.innerHTML = `
        <strong>Course ID:</strong> ${course.getCourseId()}<br>
        <strong>Course Name:</strong> ${course.getCourseName()}<br>
        <strong>Class Size:</strong> ${course.getClassSize()}<br>
        <strong>Teacher:</strong> ${course.getTeacher()}<br><br>
    `;

    const removeButton = document.createElement('button');
    removeButton.className = 'removeButton';
    removeButton.innerHTML = '-';
    removeButton.addEventListener('click', () => {
        USER_STUDENT.unenroll(course.getCourseId());
        showPopup(`The selected course "${course.getCourseName()}" was successfully removed.`);
        updateDisplayedCourses(USER_STUDENT);

        
    });

    courseBox.appendChild(courseInfo);
    courseBox.appendChild(removeButton);
    courseContainer.appendChild(courseBox);
}

    function showPopup(message) {
        alert(message);
    }

    function updateDisplayedCourses(student) {

        courseContainer.innerHTML = '';
        

        student.getClassList().forEach(course => {
            addCourseToBox(USER_STUDENT, course);
        });



        
    console.log('Class List:');
    console.log(USER_STUDENT.classList);

    USER_STUDENT.classList.forEach(course => {
    console.log(`Course ID: ${course.courseId}, Course Name: ${course.courseName}`);
});

    
}

updateDisplayedCourses(USER_STUDENT);
</script>




<?php include("bottom.php");?>