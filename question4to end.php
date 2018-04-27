4:
What will be the output of the following code ?
define(“x”,“5”);
$x = x + 10;
echo x;
?>
A) Error B) 5 C) 10 D) 15

b 5

5:
Which of these statements is true?
A) PHP interfaces to the MySQL database,and you should transfer any data in Oracle or Sybase to
MySQL if you want to use PHP on the data.
B) PHP interfaces to a number of relational databases such as MySQL, Oracle and Sybase. A
wrapper layer is provided so that code written for one database can easily be transferred to another if
you later switch your database engine.
C) PHP interfaces to a number of relational databases such as MySQL, Oracle and Sybase but the
interface differs in each case.
D) There’s little code in PHP to help you interface to databases, but there’s no reason why you can’t
write such code if you want to.

c) PHP interfaces to a number of relational databases such as MySQL, Oracle and Sybase but the interface differs in each case.

6:
Assume that your php file ‘index.php’ is in location c:/apache/htdocs/phptutor/index.php. If you used
$_SERVER[‘PHP_SELF’] function in your page, then what is the return value of this function?
A) phptutor/index.php
B) /phptutor/index.php
C) c:/apache/htdocs/phptutor/index.php
D) index.php

B) /phptutor/index.php

7:
Are there regular expressions in PHP?
A) Yes regular expressions use Perl- like conventions
B) Yes PHP supports two different types of regular expressions: POSIX extended and Perl Compatible
Regular Expressions (PCRE).
C) Yes regular expressions use the POSIX standard
D) No PHP uses “glob” style matching only

B) Yes PHP supports two different types of regular expressions: POSIX extended and Perl Compatible
Regular Expressions (PCRE).

8:
Father of PHP? Extra credit if you can tell me who the other guys are.
A) Larry Wall
B) Rasmus Lerdorf
C) James Gosling
D) Guido Van Rossum

B) Rasmus Lerdorf

9:
Which of the following will not combine strings $s1 and $s2 into a single string?
A) $s1 + $s2
B) “{$s1}{$s2}”
C) $s1.$s2
D) implode(‘ ’, array($s1,$s2))

A) $s1 + $s2

10:
The output of the following script would be? $somevar=15;
function addit () {
GLOBAL $somevar;
$somevar++;
echo “somevar is $somevar”; }
addit ();
A) somevar is 15
B) somevar is 16
C) somevar is 1
D) somevar is $ somevar

A somevar is 15

11:
Identify the variable scope that is not supported by PHP ?
A) Local variables
B) Function parameters
C) Hidden variables
D) Global variables

c hidden variables

12:
Which function includes the specified file even if the statement evaluates to false.
A) include ()
B) require ()
C) both of above D) None of above

b require()

13:
What will be the output of the code below?
<?php
$arr = array(5 => 1, 12 => 2);
$arr[] = 56;
$arr[“x”] = 42; unset($arr);
echo var_dump($arr); ?>
A) 42 B) 56 C) Null D) x=42

c Null

Ques 14:
What will be the output of the code below?
<?php
echo $_SERVER[‘REMOTE_ADDR’];
?>
A) shows the IP address of the webserver
B) shows the IP address of the local system
C) shows the IP address of the visitor
D) None of the above

C) shows the IP address of the visitor

15:
PHP code is embedded directly into XHTML document?
A) False B) True

b true

Ques 14:
mysql_connect( ) does not take following parameter.
A) database name B) database host C) user ID
D) password

A the databasen name

16:
Variable scope on which a variable does not loose its value when the function exists and uses that
value if the function is called again is: ?
A) Local
B) function parameter C) static
D) None of above

A local

17:
Which of the following is used to check if a function has already been defined?
A) bool function_exists(functionname)
B) bool func_exist(functioname)
C) bool f_exists(functionname)

A

18:
Can a one line comment begin with pound sing(#)
in php?
A) True
B) False
C) None of above
C) None of above

b false, but we van use the # to coment the last part of the php line 

19:
Is it possible to submit a form without a submit button?
A) Yes B) No C) I have no idea… This is a tough one.

yes is possible


20:
All variables in PHP start with which symbol?
A) & B) $ C) @ D) $$

B they all start with the dollar sing