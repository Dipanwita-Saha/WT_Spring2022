
function check()
{
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
     var desig=document.getElementById("desig").value;
     var email=document.getElementById("email").value;
     var pass=document.getElementById("pass").value;

     
    if(fname.length<3 || lname.length<3 || age<10 || desig.length<3 || !res ||pass.length<3)
    {
        alert("Enter Valid Data for all Field!!");
    }
}
