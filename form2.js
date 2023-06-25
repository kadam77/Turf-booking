
function validateForm(){
    
    var name = document.getElementById("name").value.trim();
 
    var mobno =document.getElementById("mobno").value.trim();
    
    var email = document.getElementById("email").value.trim();
    
    var add1 = document.getElementById("add1").value.trim();
    var add2 = document.getElementById("add2").value.trim();
    
    var pincode = document.getElementById("pincode").value.trim();
    

    
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

////////////////////Coupon Code/////////////

var code= document.getElementById("couponcode").value.trim();
var t8;
var fl=0;
var validcode=["match-50","get60off","40o40off","get10off"];
var l7=code.length;
if(l7==8)
{
for(i in validcode)
{
    if(validcode[i]==code)

    {valid++;
         if(code.includes("50")){
        t8="congrats you got 50rs discount";
    }
    else if(code.includes("60")){
        t8="congrats you got 60rs discount";
    }
    else if(code.includes("10")){
        t8="congrats you got 10% discount";
    }
    else if(code.includes("40")){
        t8="congrats you got 40% discount";
    }
        document.getElementById("err_couponcode").style.color='green';
    }
}
}
else{
    t8="*please enter valid coupon code!!!(code is case-sensetive)"
    document.getElementById("err_couponcode").style.color='red';
}

    document.getElementById("err_couponcode").innerHTML=t8;
///////////////////////////////////////////////////////////////////////

//ITEMS
var i1;var i2;var i3;
var q1,q2,q3;
i1 = document.getElementById("i1").value.trim();
i2 = document.getElementById("i2").value.trim();
i3 = document.getElementById("i3").value.trim();
q1 = document.getElementById("q1").value.trim();
q2 = document.getElementById("q2").value.trim();
q3 = document.getElementById("q3").value.trim();

var t9;
if((q1>10 || q2>10) || q3>10)
{
    t9="*too large, Order taken till only 10 quantity";
    document.getElementById("err_item").style.color='red';
}
else if((q1<0 || q2<0) || q3<0){
    t9="*please enter valid quantity!!!";
    document.getElementById("err_item").style.color='red';
}
else if(i1=="" && (i2!="" || i3!="") )
{t9="*please fill item 1 first";
document.getElementById("err_item").style.color='red';

}
else if((i1=="" && i2=="") && i3=="")
{
    t9="*please fill atleast one order";
    document.getElementById("err_item").style.color='red';
 }
else{
    document.getElementById("err_item").style.color='green';
    valid++;
    t9="valid order thank you!!!";
}

document.getElementById("err_item").innerHTML=t9;



/////////////////////////////////////////////////////////////////*/
if(valid==8)
{
alert("confirm your order");
return true;

    
}
else
{
    valid=0;
    return false;
}

}
 