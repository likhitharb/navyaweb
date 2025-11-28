function validateForm() {
    let phone = document.querySelector('input[name="phone"]').value;

    if (phone.length !== 10) {
        alert("Phone number must be 10 digits!");
        return false;
    }

    return true;
}
