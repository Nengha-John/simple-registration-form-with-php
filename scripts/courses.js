var instructor = document.getElementById("instructor");
            var courseName = document.getElementById("courseName");
            var courseDescpt = document.getElementById("courseDescprt");
            var department = document.getElementById("Department");

            function checkLength(element){
                 if(element.value.length > 30){
                 alert("This fields allows max. 30 characters");
                return false;
               }}
            function checkEmpty(elemt,text){
                if(elemt.value.length == 0){
                    alert("Please fill out "+text+" field");
                }
            }
                function validator(){
                    checkLength(instructor);
                    checkLength(courseName);
                    checkEmpty(instructor,"Instructor");
                    checkEmpty(courseName,"Course Name");
                    checkEmpty(courseDescpt,"Course Description");
                    checkEmpty(department,"Department");
                };
      
                