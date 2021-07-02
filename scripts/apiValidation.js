    var form = document.getElementsByClassName("form")[0];
    var fName = document.getElementById("firstName");
    var mName = document.getElementById("middleName");
    var lName = document.getElementById("lastName");
    var email = document.getElementById("email");  
    var userName = document.getElementById("username");
    var password = document.getElementById("password");
    var phone0 = document.getElementById("phone");
    var phone = document.getElementById("phone2");
    var cv = document.getElementById("cv");
    var error = document.getElementById("error");


    fName.addEventListener("input",properName(this))
    
    function properName(name){
        if(typeof name == 'number'){
            error.textContent = "Please enter a valid name";
        }
    }