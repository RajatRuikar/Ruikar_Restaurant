let Name, Gender, Age, ContactNo;
let flavour = [];
Name = document.getElementById("Name");
Gender = document.querySelector('input[name="Gender"]:checked').value;
Age = document.querySelector('input[name="Age"]:checked').value;
ContactNo = document.getElementById("ContactNo");
let checkbox = document.querySelectorAll('input[name="flavour"]:checked');

for (var i = 0; i < checkbox.length; i++) {
    flavour.push(checkbox[i].value);
}
function fun() {

    // IMP contact no. validation DON'T remove
    let val = validationcall(ContactNo.value);
    if (val) {
        return;
    }

    // Value Checker on console
    // console.log(Name.value + Gender + Age + ContactNo.value + flavour.toString());
    // sendValueToPhp(Name.value,Gender,Age,ContactNo.value,flavour.toString()); 
    flavour = [];
}
// send data JS to PHP
// function sendValueToPhp(Name,Gender,Age,ContactNo,flavour){
//     var data = {
//         NAME: Name,
//         GENDER: Gender,
//         AGE: Age,
//         CONTACTNO: ContactNo,
//         FLAVOUR: flavour
//     };
//     document.cookie = "cname="+data;
//     $.post("connect.php", data);
// }

// IMP contact no. validation DON'T remove
function verfiy() {
    let val = validationcall(document.getElementById("ContactNo").value);
    if (val) {
        return;
    }
}
// contact no. validation
function validationcall(value) {
    var validation = /^[6789]{1}[0-9]{9}$/;
    if (validation.test(value) == false) {
        document.getElementById("error").style.display = "block";
        return true;
    }
    else {
        document.getElementById("error").style.display = "none";
        return false;
    }
}

function user(){

}
