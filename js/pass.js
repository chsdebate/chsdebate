function passConfirm() {
    var pass = prompt("Confirm your password", "Harry Potter");
    
    if (person != null) {
        document.getElementById("conpass").innerHTML =
        person;
    }
    else {
        alert("Cannot be empty");
    }
}