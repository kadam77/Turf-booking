
function validateForm(){
    
    var name = document.getElementById("name").value.trim();
    var bplace = document.getElementById("bplace").value.trim();  
    var mobno =document.getElementById("mobno").value.trim();
    
    var email = document.getElementById("email").value.trim();
    
    var add1 = document.getElementById("add1").value.trim();
    var add2 = document.getElementById("add2").value.trim();
    
    var pincode = document.getElementById("pincode").value.trim();
    
    var state = document.getElementById("state").value.trim();
    
    var panno = document.getElementById("panno").value.trim();
    //checking
    let text;
    let valid=0;
if(name="" || isNaN(name)==false)
{
    text="*Enter valid name";
    document.getElementById("err_name").style.color="red";
    
}
else{
    text="Valid name";
    valid++;
    document.getElementById("err_name").style.color="green";
    
}
document.getElementById("err_name").innerHTML = text;
///////////////////////////////////
if(bplace="" || isNaN(bplace)==false)
{
    text="*Enter valid city name";
    document.getElementById("err_bplace").style.color="red";
}
else{
    text="Valid city name";
    valid++;
    document.getElementById("err_bplace").style.color="green";
}
document.getElementById("err_bplace").innerHTML = text;
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
        t2="*mobile number too short";
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
    t2="Valid mobile no.";
    valid++;
    document.getElementById("err_mobno").style.color="green";
}
document.getElementById("err_mobno").innerHTML=t2;
//////////////Email////////////////
let str="@gmail.com"
let  t3;
if(email.includes(str))
{
    t3="Valid email id";
    valid++;
    document.getElementById("err_email").style.color="green";
}
else{
    t3="*enter valid email id";
    document.getElementById("err_email").style.color="red";
}
document.getElementById("err_email").innerHTML=t3;

/////////address1----------------

let len1=add1.length;
var t4;
if(add1="")
{
t4="*invalid adress";
document.getElementById("err_add1").style.color="red";
}
 else if(len1<10)
{
    document.getElementById("err_add1").style.color="red";
    t4="*address too short atleast 10 character"
}


else{
    t4="Valid address";
    valid++;
    document.getElementById("err_add1").style.color="green";
}

document.getElementById("err_add1").innerHTML=t4;
//-------------address line 2----------------------

let len2=add2.length;
var t4;
if(add2="")
{
t4="*invalid adress";
document.getElementById("err_add2").style.color="red";
}
 else if(len1<3)
{ 
    document.getElementById("err_add2").style.color="red";
    t4="*address too short atleast 3 character"
}


else{
    t4="Valid address";
    valid++;
    document.getElementById("err_add2").style.color="green";
}

document.getElementById("err_add2").innerHTML=t4;
//--------------------state-----------------
var st=["Rajasthan","Maharashtra","Punjab","Odisha"];
var flag2=0;
let t5;
for(var i in st)
{
    if(st[i].toLowerCase()==state.toLowerCase())
   { flag2=1;

}
}
if(flag2==1)
{
    document.getElementById("err_state").style.color='green';
    t5="Valid State."
    valid++;
}
else{
    t5="*please enter valid Indian state";
    document.getElementById("err_state").style.color='red';
}
document.getElementById("err_state").innerHTML=t5;

//------------pincode-------
var len3=pincode.toString().length;

if(len3<6)
{
    t6="*invalid pincode too short!!!";
    document.getElementById("err_pincode").style.color='red';
}
else if(len3>6)
{
    t6="*invalid too long pincode";
    document.getElementById("err_pincode").style.color='red';
}
else{
    t6="Valid pincode";
    valid++;
    document.getElementById("err_pincode").style.color='green';
}
document.getElementById("err_pincode").innerHTML=t6;
//------pan card no.-----------
var len4=panno.length;

var t7;
if(len4<6)
{
    t7="*invalid pan card no. too short!!!";
    document.getElementById("err_panno").style.color='red';
}
else if(len4>6)
{
    t7="*invalid too long pan card no.";
    document.getElementById("err_panno").style.color='red';

}
else{
    t6="Valid pincode";
    document.getElementById("err_panno").style.color='green';
valid++;
}
document.getElementById("err_panno").innerHTML=t7;

if(valid==9)
{alert("confirm Submission");
return true;
    
}
else
{
    valid=0;
    return false;
}
}
 