class Course {
    constructor(courseId, courseName, classSize, teacher) {
        this.courseId = courseId;
        this.courseName = courseName;
        this.classSize = classSize;
        this.teacher = teacher;
    }

    getCourseId() {
        return this.courseId;
    }

    getCourseName() {
        return this.courseName;
    }

    getClassSize() {
        return this.classSize;
    }

    getTeacher() {
        return this.teacher;
    }

    setCourseId(courseId) {
        this.courseId = courseId;
    }

    setCourseName(courseName) {
        this.courseName = courseName;
    }

    setClassSize(classSize) {
        this.classSize = classSize;
    }

    setTeacher(teacher) {
        this.teacher = teacher;
    }
}

class Student {
    constructor(name, major) {
        this.name = name;
        this.major = major;
        this.classList = [];
    }

    getName() {
        return this.name;
    }

    getMajor() {
        return this.major;
    }

    getClassList() {
        return this.classList;
    }

    setName(name) {
        this.name = name;
    }

    setMajor(major) {
        this.major = major;
    }

    addCourse(course) {
        this.classList.push(course);
    }

    removeCourse(course) {
        this.classList = this.classList.filter(enrolledCourse => enrolledCourse.getCourseId() !== course.getCourseId());
    }

    enroll(courseId) {
        
        const course = courses.find(course => course.getCourseId() === courseId);
    
        if (course) {
            
            if (this.classList.some(enrolledCourse => enrolledCourse.getCourseId() === courseId)) { // if student is already enrolled in course
                console.log(`${this.getName()} is already enrolled in ${course.getCourseName()}.`);
            } else {
            
                course.setClassSize(course.getClassSize() + 1);
                this.addCourse(course);
    
            }
        } else {
            console.log(`Course with ID ${courseId} not found.`);
        }
    }

    unenroll(courseId) {
        
        const course = courses.find(course => course.getCourseId() === courseId); // find cousre
        
        if (course) {
            
            if (this.classList.some(enrolledCourse => enrolledCourse.getCourseId() === courseId)) { // if student is already enrolled in course
                course.setClassSize(course.getClassSize() - 1); // subtract 1
                this.removeCourse(course);
            } else {
                console.log(`Course with ID ${courseId} not found.`);
                

            }
        } else {
            console.log(`Course with ID ${courseId} not found.`);
        }
    }

    
}

let courses = [
    new Course(112336, 'MATH101', 0, 'Mr. Smith'),
    new Course(123456, 'HIST110', 0, 'Ms. Moreno'),
    new Course(223456, 'PHYS201', 0, 'Dr. Johnson'),
    new Course(334567, 'CMPT360', 0, 'Ms. Sharma'),
    new Course(445678, 'BIOL110', 0, 'Mr. Davis'),
    new Course(458237, 'ENGL110', 0, 'Mrs. Taylor'),
    new Course(543963, 'RELS201', 0, 'Mr. Singh'),
    new Course(556789, 'HIST201', 0, 'Mr. Rizzo'),
    new Course(893782, 'MATH101', 0, 'Mrs. Smith'),
    
    
];

var fullname = "<?php echo $_SESSION['fullname']; ?>";
var major = "<?php echo $_SESSION['major']; ?>";


let USER_STUDENT = new Student(fullname, major);
USER_STUDENT.enroll(123456);
USER_STUDENT.enroll(112336);
USER_STUDENT.unenroll(112336); 
USER_STUDENT.enroll(556789);
USER_STUDENT.enroll(445678);
USER_STUDENT.enroll(543963);



let student1 = new Student('John Doe', 'Computer Science');
student1.enroll(123456);
student1.enroll(112336);
student1.enroll(112336); // testing for duplicate
student1.enroll(334567);

let student2 = new Student('Jane Doe', 'Engineering');
student2.enroll(123456);
student2.enroll(112336);

let student3 = new Student('John Doe', 'Liberal Arts');
student3.enroll(123456);
student3.enroll(123456);

let student4 = new Student('John Doe', 'Liberal Arts');
student4.enroll(123456);
student4.enroll(123456);

let student5 = new Student('Alice Johnson', 'Psychology');
student5.enroll(334567);
student5.enroll(123456);

let student6 = new Student('Bob Williams', 'Mathematics');
student6.enroll(334567);
student6.enroll(123456);

let student7 = new Student('Eva Davis', 'History');
student7.enroll(334567);
student7.enroll(123456);

let student8 = new Student('Chris Wilson', 'Chemistry');
student8.enroll(334567);
student8.enroll(123456);

let student9 = new Student('Olivia Brown', 'Sociology');
student9.enroll(123456);
student9.enroll(123456);

let student10 = new Student('Daniel Miller', 'Physics');
student10.enroll(123456);

let student11 = new Student('Sophia Smith', 'English Literature');
student11.enroll(123456);

let student12 = new Student('Michael Taylor', 'Political Science');
student12.enroll(123456);

let student13 = new Student('Emma Anderson', 'Geology');
student13.enroll(123456);

let student14 = new Student('Ryan Martinez', 'Economics');
student14.enroll(123456);


module.exports = { Course, Student, courses };
