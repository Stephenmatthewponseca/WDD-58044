  //problem 1

<html> <head> <title> Laboratory Activity</title> </head>
<body bgcolor=black> <font color=white>
<?php
echo "<b>Long Quiz</b><br>";
print "Today’s date and time is <br>";
date_default_timezone_set('Asia/Singapore');
echo date('M d Y, h:i:sa');
print "<br><br>";
print "Hello, I am ";
$name = "Stephen Matthew Ponseca";
$un = strtoupper($name);
print "$un.<br>";
print "<br><br>";
$salary_rate = 600;
$salary = $salary_rate * 15;
$tax = 0.30 * $salary;


/*CALCULATIONS */
$net_pay = $salary - $tax;

echo "Net Pay = $net_pay <br>";


?>
</body>
<html>
  
  //problem 2
  
  <html> <head> <title> Laboratory Activity</title> </head>
<body bgcolor=black> <font color=white>
<font face="Courier New" >
<?php
echo "<b>Long Quiz</b><br>";
print "Today’s date and time is <br>";
date_default_timezone_set('Asia/Singapore');
echo date('M d Y, h:i:sa');
print "<br><br>";
print "Hello, I am ";
$name = "Stephen Matthew Ponseca";
$un = strtoupper($name);
print "$un.<br>";
print "<br><br>";


$sum = 0;
for($x=1; $x<=50; $x++){
$sum += $x;
}
echo "The sum of the numbers 1 to 50 is $sum";

?>
</body>
<html>
