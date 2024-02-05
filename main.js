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
    // console.log(Name.value + "  " + Gender + "  " + Age + "  " + ContactNo.value + "  " + flavour.toString());
    if (Name.value == "" || Gender == undefined || Age == undefined || ContactNo == "") {
        alert('Please fill all the fields');
    }
    else {
        const data = {
            Name: Name.value,
            Gender: Gender,
            Age: Age,
            ContactNo: ContactNo.value,
            Flavour: flavour.toString()
        }

        console.log(Name.value + "  " + Gender + "  " + Age + "  " + ContactNo.value + "  " + flavour.toString());

        fetch('http://localhost:3000/api/hello', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .then(responseData => {
                // Display the response data in the console or on the page
                console.log(responseData);
                // You can also display it on the page, for example:
                // document.body.innerHTML = JSON.stringify(responseData);
            })
            .catch(error => console.error('Error:', error));
    }
    // window.location = "thanks.html"
}

// let Option = {
//     method: 'POST',
//     body: JSON.stringify({
//       title: 'Rajat',
//       body: 'Ruikar',
//       userId: 1,
//     }),
//     headers: {
//       'Content-type': 'application/json; charset=UTF-8',
//     },
//   }
//       fetch('https://jsonplaceholder.typicode.com/posts', Option)
//         .then((response) => response.json())
//         .then((json) => console.log(json));