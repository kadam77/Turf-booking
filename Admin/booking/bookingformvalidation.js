function Totamt(str) {
    if (str.length == 0) {
      document.getElementById("totamt").value = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // document.getElementById("txtHint").innerHTML ="<a href='#' id='link' >"+this.responseText+"</a>";
          document.getElementById("totamt").value =this.responseText;
        }
      };
      xmlhttp.open("GET", "bookingform2.php?q=" + str, true);
      xmlhttp.send();
    }
  }
  //////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////TIME//////////////////////////////////////////////////////////
  function validTime(str) {
    if (str.length == 0) {
      document.getElementById("st").value = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // document.getElementById("txtHint").innerHTML ="<a href='#' id='link' >"+this.responseText+"</a>";
          document.getElementById("st").value =this.responseText;
        }
      };
      xmlhttp.open("GET", "bookingform3.php?q=" + str, true);
      xmlhttp.send();
    }
  }
  //////////////////////////////////VALIDATION////////////////////////////////////////////

  function validateForm(){
    
    var name = document.getElementById("name").value.trim();
 
    var mobno =document.getElementById("mobno").value.trim();
    
    var st = document.getElementById("st").value();
    var dob = document.getElementById("dob").value();    

    
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
//////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////*/
if(valid==2)
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
////////////////////////////////////////////////////////////////////////////////////////////
function tdate(){
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
//var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date;
return date;
// The dateTime variable contains result as:

// 2018-8-3
}