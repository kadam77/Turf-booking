function myfun(){
    alert("conncted");
}

function validate()
{
       // alert("ok till here");
    var fname = document.getElementById("fname").value.trim();
    var lname = document.getElementById("lname").value.trim();
 
    var mobno =document.getElementById("mobno").value.trim();
    
    var email = document.getElementById("email").value.trim();
    
    var age = document.getElementById("age").value.trim();
    var loc = document.getElementById("loc").value.trim();
    
    //checking
    let text;
    let valid=0;
if(fname="" || isNaN(fname)==false)
{
    text="*Enter valid name";
    document.getElementById("err_fname").style.color="red";
    
}
else{
    text="";
    valid++;
    document.getElementById("err_fname").style.color="green";
    
}
document.getElementById("err_fname").innerHTML = text;
///////////////////////////////////
if(lname="" || isNaN(lname)==false)
{
    text="*Enter valid name";
    document.getElementById("err_lname").style.color="red";
    
}
else{
   text="";
    valid++;
    document.getElementById("err_lname").style.color="green";
    
}
document.getElementById("err_lname").innerHTML = text;

//////////////MOBILE NO.////////////////////
var ar=[1234567890,0123456789,1111111111,0000000000 ];
var len=mobno.toString().length;
var flag=0;
var t2="";
for(var n in ar)
{
    if(mobno==n)
    flag=1;
}
if((len<10 || len>10 )||((flag==1) ||(isNaN(mobno))))
{
    document.getElementById("err_mobno").style.color='red';
    if(isNaN(mobno))
    {
        t2="letters not Allowed";
    }
    else if(len<10)
    {
        t2="*mobile no.too short";
    }
    else if(len>10)
    {
        t2="*mobile no. too long";
    }
    
    else{
        t2="*enter valid mobile no."
    }
}
else{
   t2="";
    valid++;
    document.getElementById("err_mobno").style.color="green";
}
document.getElementById("err_mobno").innerHTML=t2;
//////////////Email////////////////
let str="@gmail.com"
let  t3;
if(email.includes(str))
{
   t3="";
    valid++;
    document.getElementById("err_email").style.color="green";
}
else{
    t3="*enter valid email id";
    document.getElementById("err_email").style.color="red";
}
document.getElementById("err_email").innerHTML=t3;

/////////address1----------------

let len1=loc.length;
var t4;
if(loc="")
{
t4="*invalid adress";
document.getElementById("err_loc").style.color="red";
}
 else if(len1<3)
{
    document.getElementById("err_loc").style.color="red";
    t4="*address too short atleast 5 character"
}


else{
    t4="";
    valid++;
    document.getElementById("err_loc").style.color="green";
}

document.getElementById("err_loc").innerHTML=t4;
////////////////////////////////////////////////
var len3=age.toString().length;

if(len3<1)
{
    t6="*too young to apply!!!";
    document.getElementById("err_age").style.color='red';
}
else if(len3>4)
{
    t6="*invalid too old to apply";
    document.getElementById("err_age").style.color='red';
}
else{
    t6="";
    valid++;
    document.getElementById("err_age").style.color='green';
}
document.getElementById("err_age").innerHTML=t6;


///////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////*/
if(valid==6)
{
//alert("confirm your Appointment");
return true;

    
}
else
{
    valid=0;
    return false;
}

}