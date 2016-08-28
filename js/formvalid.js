function validateForm() {
    var x = document.forms["register"]["passreg"].value;
    var y = document.forms["register"]["passconreg"].value;
    var z = document.forms["register"]["userreg"].value;
    if (x !== y) {
        alert("Passwords to not do the matching");
        return false;
    }
}