<?php

$a[] = "Alfonso";
$a[] = "Bernadette";
$a[] = "Carlos";
$a[] = "Diana";
$a[] = "Eduardo";
$a[] = "Fernando";
$a[] = "Gloria";
$a[] = "Hector";
$a[] = "Ismael";
$a[] = "Jose";
$a[] = "Kristina";
$a[] = "Lorenzo";
$a[] = "Mariana";
$a[] = "Nicolas";
$a[] = "Oscar";
$a[] = "Paolo";
$a[] = "Queenie";
$a[] = "Rafael";
$a[] = "Sofia";
$a[] = "Teresita";
$a[] = "Ursula";
$a[] = "Vicente";
$a[] = "Wilfredo";
$a[] = "Xander";
$a[] = "Yolanda";
$a[] = "Zandro";
$a[] = "Ana";
$a[] = "Miguel";
$a[] = "Luz";
$a[] = "Francis";
$a[] = "Adam";
$a[] = "Jennifer";
$a[] = "Arjay";
$a[] = "Glen";
$a[] = "Micah";
$a[] = "Ashley";
$a[] = "Brandon";
$a[] = "Chloe";
$a[] = "David";
$a[] = "Ethan";
$a[] = "Fiona";
$a[] = "Grace";
$a[] = "Harold";
$a[] = "Isabella";
$a[] = "Jacob";
$a[] = "Kevin";
$a[] = "Liam";
$a[] = "Madison";
$a[] = "Nathan";
$a[] = "Olivia";
$a[] = "Patrick";
$a[] = "Quinn";
$a[] = "Ryan";
$a[] = "Samantha";
$a[] = "Tyler";
$a[] = "Uriah";
$a[] = "Vanessa";
$a[] = "Wesley";
$a[] = "Xavier";
$a[] = "Yvonne";
$a[] = "Zachary";
$a[] = "Aiden";
$a[] = "Brianna";
$a[] = "Carter";
$a[] = "Dylan";
$a[] = "Ella";
$a[] = "Faith";
$a[] = "George";
$a[] = "Hannah";
$a[] = "Ian";
$a[] = "Jessica";
$a[] = "Kyle";
$a[] = "Laila";
$a[] = "Mason";
$a[] = "Noah";
$a[] = "Owen";
$a[] = "Peyton";
$a[] = "Quincy";
$a[] = "Rebecca";
$a[] = "Sean";
$a[] = "Tristan";
$a[] = "Ulysses";
$a[] = "Vince";
$a[] = "Wyatt";
$a[] = "Zoe";




$q = $_REQUEST["q"];

$hint = "";

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
  
  echo $hint === "" ? "no suggestion" : $hint;


?>