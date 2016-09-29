<?php
// start php
     echo 'hello world';
    // print text php
     $myvar = 'Some text i wanna store in a variable';
    // store text in a avriable
     echo '<br>';
    // line break in html
     echo '$myvar';
     echo '<br>';
     echo "$myvar";
     // quotes make u put what is in the variable

     echo '<br>';

     //example of array
     $myarray = array();
     $myarray[] = 'some value 1';
     $myarray[] = 'some value 2';
     $myarray[] = 'some value 3';

     print_r($myarray);
     // print_r is used to see inside the array etc

    echo '<br>';

     $myAssoc = array('value1' => $myarray, 'value2' => $myarray);
    // example of an asscoiated array and nested array
     print_r($myAssoc);

    print_r($myAssoc['value1']);
    // print value key




  //making a class
   class myclass
   {
   }    
  //this is how u instantiate an object
  $obj = new myclass;
  print_r($obj);

?>
