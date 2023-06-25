<?php
// Array with names
$a[] = "nike";
$a[] = "Nike";
$a[] = "Adidas";
$a[] = "adidas";
$a[] = "Puma";
$a[] = "sprax";
$a[] = "sportz";
$a[] = "football";
$a[] = "football(nike)";
$a[] = "football(puma)";
$a[] = "football(Adidas)";
$a[] = "tshirt(Adidas)";
$a[] = "tshirt(nike)";
$a[] = "tshirt(puma)";
$a[] = "tshirt(mi)";
$a[] = "shoes";
$a[] = "shoes(nike)";
$a[] = "shoes(puma)";
$a[] = "shoes(adidas)";
$a[] = "shoes(sprax)";
$a[] = "shoes(mi)";
$a[] = "shoes(sportz)";
$a[] = "shoes(paragon)";
$a[] = "shoes(kwechuqua)";
$a[] = "tshirt";
$a[] = "jerrsy";
$a[] = "football(large)";
$a[] = "tshirt(L)";
$a[] = "tshirt(S)";
$a[] = "tshirt(M)";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
$arr= explode(",",$hint);


// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" :"<a href='#' id='link' >".$hint."</a>";
if($hint==="")
echo "no suggestion";
else{
  foreach($arr as $i )
  {if($i=="football")
    echo "<a href='#adidasf' id='link' >".$i."</a>".", ";
    elseif($i=="tshirt")
    {echo "<a href='#mitshirt' id='link' >".$i."</a>".", ";}
    elseif($i=="shoes")
    echo "<a href='#nikes' id='link' >".$i."</a>".", ";
    else
    echo "<a href='#' id='link' >".$i."</a>".", ";
  }
}
?>