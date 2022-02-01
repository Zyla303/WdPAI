const form = document.querySelector("form");
const nameInput = form.querySelector('input[name="name"]');
const surnameInput = form.querySelector('input[name="surname"]');
const postalcodeInput = form.querySelector('input[name="postalcode"]');
const townInput = form.querySelector('input[name="town"]');
const streetInput = form.querySelector('input[name="street"]');
const houseInput = form.querySelector('input[name="housenumber"]');
const flatInput = form.querySelector('input[name="flatnumber"]');
const emailInput = form.querySelector('input[name="email"]');
const passwordInput = form.querySelector('input[name="password"]');
const repeatInput = form.querySelector('input[name="repeatpassword"]');

function isEmail(email){
    return /\S+@\S+\.\S+/.test(email);
}
function arePasswordsSame(password, repeatpassword) {
    return password === repeatpassword;
}n n