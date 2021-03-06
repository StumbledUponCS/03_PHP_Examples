<!DOCTYPE html>
<html>
<body>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} finally {
  echo 'Process complete.';
}
?>

</body>
</html>







<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Exceptions :

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--



The try...catch...finally Statement :



The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.






Syntax :


try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an exception is caught
} finally {
  code that always runs regardless of whether an exception was caught
}





-->
<!-- -->
<!-- -->
<!-- -->
<!-- --> 
<!-- -->
<!--


Example :



Output a string even if an exception was not caught:


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

The Exception Object:


The Exception Object contains information about the error or unexpected behaviour that the function encountered.



Syntax:

new Exception(message, code, previous)



-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Parameter Values :



Parameter                   Description


message                     Optional. A string describing why the exception was
                            thrown


code                        Optional. An integer that can be used used to easily
                            distinguish this exception from others of the same type


previous                    Optional. If this exception was thrown in a catch block
                            of another exception, it is recommended to pass that exception into this parameter


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--


Methods:


When catching an exception, the following table shows some of the methods that can be used to get information about the exception:



Method                  Description


getMessage()            Returns a string describing why the exception was thrown


getPrevious()           If this exception was triggered by another one, this method
                        returns the previous exception. If not, then it returns null


getCode()               Returns the exception code


getFile()               Returns the full path of the file in which the exception was
                        thrown


getLine()               Returns the line number of the line of code which threw the
                        exception




-->
<!-- --> 
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Example :

Output information about an exception that was thrown:

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- --> 
