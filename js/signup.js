
const email = document.form.email.value.trim();
const name = document.form.name.value.trim();
const reg = document.form.reg.value.trim();
const course = document.form.course.value.trim();
const sem = document.form.sem.value.trim();
const pass = document.form.pass.value.trim();

const door_no = document.form.door_no.value;
const street_name = document.form.street_name.value;
const landmark = document.form.landmark.value;
const pincode = document.form.pincode.value.trim();

form.addEventListner('submit', (e) => {
    e.preventDefault();

    validate();
})

function validate()
{
    if(email === '')
    {
        setError(email, 'Email cannot be blank');
    }
    else
    {
        setSuccess(email);
    }
}


function setError(input, messsage)
{
    const formControl = input.parentElement;

    formControl.className = 'input-field error';
}