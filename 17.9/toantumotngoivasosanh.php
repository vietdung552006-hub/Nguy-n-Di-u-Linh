<?php
//Toán tử 1 ngôi : ++ 
 echo $x++ . "<br>"; //x=2
 echo $x . "<br>"; //x=3
//Toán tử 1 ngôi :--
 echo $x-- . "<br>"; //x=1
 echo $x . "<br>"; //x=1
 
 
//Toán tử so sánh :==,===,!=,!==,<>,>,>==,<,<=,<==
 $x=8;
 var_dump($x);
 echo "<br>";
 $y="8";
 var_dump($y);
 echo "<br>";
 $c = ($x==$y);
 echo $c;
 echo"<br>";
 var_dump ($c);
               //Toán tử so sánh:===
 $x=8;
 var_dump($x);
 echo "<br>";
 $y="8";
 var_dump($y);
 echo "<br>";
 $c = ($x===$y);
 echo $c;
 echo"<br>";
 var_dump ($c);
              //Toán tử so sánh :!==
 $x=8;
 var_dump($x);
 echo "<br>";
 $y="8";
 var_dump($y);
 echo "<br>";
 $c = ($x!==$y);
 echo $c;
 echo"<br>";
 var_dump ($c);
              //Toán tử so sánh :<>
 $x=8;
 var_dump($x);
 echo "<br>";
 $y="8";
 var_dump($y);
 echo "<br>";
 $c = ($x<>$y);
 echo $c;
 echo"<br>";
 var_dump ($c);
 ?>