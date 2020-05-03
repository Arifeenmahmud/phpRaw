 <html>
 <head>
 <title>My Website</title>
<style>
body{
     background : orange;
}
p {

     background: gray;
     padding: 2em;
     text-align: center;

}


</style>

 </head>
 <body>
     <h1>My Website H1 Title ! </h1>
<!--<?php echo 'Hello World!'; ?> -->

     <?php
     $name = "Roman. ";
     echo "My name is  $name";   
     echo "<p> hello" .$name . "</p>"?>
     
     <p> <?php echo 'Hello $name This is the only Text'; ?> </p>
     <?php echo "Hello $name This is the only Text"; ?>

<p><?php  echo "Hello " . $name; ?></P>

    <p><?php echo "hello $name" ?></P> 

 <?php
$me = "my name is ";
$name = "Roman.";

// echo "<P> "  .$me ';' .$name "</p>"

echo $me . '' .$name;

 echo "$me, $name";
?>




 </body> 
   
 </html