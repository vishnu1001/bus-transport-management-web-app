


// const name = document.form.name.value.trim();
// const reg = document.form.reg.value.trim();
// const course = document.form.course.value.trim();
// const sem = document.form.sem.value.trim();
// const pass = document.form.pass.value.trim();

// const door_no = document.form.door_no.value;
// const street_name = document.form.street_name.value;
// const landmark = document.form.landmark.value;
// const pincode = document.form.pincode.value.trim();

function validate()
{
    var email = document.getElementById('mail');
    var name = document.getElementById('name');
    var reg = document.getElementById('reg');
    var sem = document.getElementById('sem');
    var pass = document.getElementById('pass');
    var door_no = document.getElementById('door_no');
    var street_name = document.getElementById('street_name');
    var landmark = document.getElementById('landmark');
    var pincode = document.getElementById('pincode');

    if(email.value == "")
    {
        document.getElementById("error").innerHTML = "Email field is empty";
        return false;
    }
    var mailid = document.form.mail.value;
    atpos = mailid.indexOf("@");
    dotpos = mailid.lastIndexOf(".");
    if(atpos < 1 || (dotpos - atpos < 6) || mailid.lastIndexOf("g") != atpos+1)
    {
        document.getElementById("error").innerHTML = "Unknown Email ID";
        return false;
    }
    if(name.value == "")
    {
        document.getElementById("error").innerHTML = "Name field is empty";
        return false;
    }
    if(reg.value == "")
    {
        document.getElementById("error").innerHTML = "Roll No field is empty";
        return false;
    }
    if(sem.value == "")
    {
        document.getElementById("error").innerHTML = "Semester field is empty";
        return false;
    }
    if(pass.value == "")
    {
        document.getElementById("error").innerHTML = "Password field is empty";
        return false;
    }

    if(door_no.value == "")
    {
        document.getElementById("error").innerHTML = "Door No field is empty";
        return false;
    }
    if(street_name.value == "")
    {
        document.getElementById("error").innerHTML = "Street Name field is empty";
        return false;
    }
    if(landmark.value == "")
    {
        document.getElementById("error").innerHTML = "Landmark field is empty";
        return false;
    }
    if(pincode.value == "")
    {
        documet.getElementById("error").innerHTML = "Pincode field is empty";
        return false;
    }
    
}
