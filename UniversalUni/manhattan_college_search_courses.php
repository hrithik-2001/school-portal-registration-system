<?php include("top.php");?>



<h1>&nbsp&nbspCourses</h1>

    <div id="courseContainer">
        <!-- the course boxes will be added dynamically here-->
    </div>

    
    <script>
    const courseContainer = document.getElementById('courseContainer');
    //const userCourseList = [];

    function addCourseToBox(course) {
        const courseBox = document.createElement('div');
        courseBox.className = 'courseBox';

        const courseInfo = document.createElement('div');
        courseInfo.className = 'courseInfo';
        courseInfo.innerHTML = `
            <strong>Course ID:</strong> ${course.courseId}<br>
            <strong>Course Name:</strong> ${course.courseName}<br>
            <strong>Class Size:</strong> ${course.classSize}<br>
            <strong>Teacher:</strong> ${course.teacher}<br><br>
        `;

        const addButton = document.createElement('button');
        addButton.className = 'addButton';
        addButton.innerHTML = '+';
        addButton.addEventListener('click', () => {


            if (USER_STUDENT) {
                USER_STUDENT.enroll(course.courseId);
                showPopup(`The selected course "${course.courseName}" was successfully added to ${USER_STUDENT.getName()}'s class.`);
                //console.log(sessionStorage.getItem('fullname'));
                //console.log(sessionStorage.getItem('major'));
            } else {
                console.error('USER_STUDENT not defined.');
            }
        });

        courseBox.appendChild(courseInfo);
        courseBox.appendChild(addButton);
        courseContainer.appendChild(courseBox);
    }

    /*function addToUserCourseList(course) {
        userCourseList.push(course);
    }*/

    function showPopup(message) {
        alert(message);
    }

    courses.forEach(course => {
        addCourseToBox(course);
    });
</script>


<?php include("bottom.php");?>