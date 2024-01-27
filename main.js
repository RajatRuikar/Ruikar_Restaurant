let Name, Gender, Age, ContactNo;
let flavour;
Name = document.getElementById("Name");
ContactNo = document.getElementById("ContactNo");
var selectedValues = [];
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

var form = document.getElementById("myForm");
form.addEventListener("submit", function (event) {
    event.preventDefault();
});

function getSelectedRadioValue(groupName) {
    var radioButtons = document.getElementsByName(groupName);

    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            return radioButtons[i].value;
        }
    }
}

let checkbox = document.getElementsByName("Flavour");

function user() {

    for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
            selectedValues.push(checkbox[i].value);
        }

    }
    checkbox = [];
    flavour = selectedValues.join(", ");
    Gender = getSelectedRadioValue("Gender");
    Age = getSelectedRadioValue("Age");
    console.log(Name.value + "  " + Gender + "  " + Age + "  " + ContactNo.value + "  " + flavour.toString());

    window.location ="thanks.html"
}
