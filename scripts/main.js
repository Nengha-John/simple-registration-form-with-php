var form = document.getElementById("form")[0];
var fName = document.getElementById("firstName");
var mName = document.getElementById("middleName");
var lName = document.getElementById("lastName");
var userName = document.getElementById("username");
var password = document.getElementById("password");
var file = document.getElementById("cv");
var phone0 = document.getElementById("phone");
var phone = document.getElementById("phone2");
var email = document.getElementById('email');
var fb = document.getElementById('fb-username');
var tw = document.getElementById('tw-username');
var ig = document.getElementById('ig-username');
var regex =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]/;
var submit = document.getElementById("register");

var dataa = [fName,mName,lName,userName,password,file,phone0,phone,email,fb,tw,ig]

function validate(){
    // e.preventDefault();
    
  
function checkName(input,nthElem){
    if(!isNaN(input.value)){
        alert(nthElem + " can not be a number")
        input.focus();
        return false
    }
  }

  function checkPass(input){
      if(!input.value.match(regex)){
         console.log("The password must contain alphanumerics and special characters.");
         input.focus()
         return false;
      }
  }


function checkNum(input,nthElem){
    if(isNaN(input.value)){
        alert("Please enter a valid number: "+ nthElem)
        input.focus();
        return false
    }
}


function checkVal(elem){
    if(!elem.checkValidity()){
        alert("Please fill out the "+ elem.name+ " correctly")
    }
}
try{ 
for(var i = 0;i <= dataa.length;i++){
    checkVal(dataa[i]);
}}catch{console.error();}

checkName(fName,"First Name");
checkName(mName,"Middle Name");
checkName(lName,"Last Name");
checkName(userName,"Username")
checkPass(password);
checkNum(phone0,"first phone number");
checkNum(phone,"second phone number");

// function checkPass(e){
//     if(!password.value.match(regex)){
//        alert("The password must contain alphanumerics and special characters.");
//        password.focus()
//        e.preventDefault();
//        return false;
//     }
// }

password.addEventListener('onkeyup',checkPass());



// var data = {'firstName':fName,'middleName': mName,'lastName':lName}
// //,userName,password,file,phone0,phone,email,fb,tw,ig[];
// var data_json = JSON.stringify(data);
// //alert(data_json)

// function jsonParse() {
//     try {
//         var json = JSON.parse(text);
//     } 
//     catch(e) {
//         return false;
//     }
//     return json;
// }


// var xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
//     if (xhr.readyState === 4 && xhr.status === 200) {
//         var json = jsonParse(this.responseText);

//         if (!json || json.status !== true) {
//             console.log(json.error || 'Something Bad Happened');
//             return;
//         }    

//         alert('Everything is Fine!');

//     }
// }
// xhr.open("POST","register.php",true);
// xhr.send(data_json);
}


