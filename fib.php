<html>  <!-- I took help of php and html to solve your question. Hope you like it -->
<head>
<title>Fibonacci Prime Check</title>
</head>
<?php
if(isset($_POST['check']))
{
$num=$_POST['num'];
$count=0;
for($i=1;$i<$num;$i++)
{
if($num%$i==0) 
$count=++$count;
}
$f=array(0,1,1);
for($i=0;$f[2]<=$num;$i++)
{
if($f[2]!=$num)
{
$f[2]=$f[1]+$f[0];
$f[0]=$f[1];
$f[1]=$f[2];
}
else
{
$f[2]=++$f[2];
$fib=1;
}
}
if($count==1 && $fib==1 && $num!=1 && $num!=0) /* I have not included 0 and 1 as prime because acc to wikipedia, 1 is not a prime */
echo $num." is both a prime and fibonacci number";
else if ($count>=1 && $fib=="")
echo $num." is neither prime nor fibonacci number";
else if ($count>=1 && $fib=="1")
echo $num." is not prime but a fibonacci number";
else if ($count=1 && $fib=="" && $num!=0)
echo $num." is a prime but not a fibonacci number";
else
echo $num." is not prime but a fibonacci number";
}
?>
<form name=fib method="post">
Enter the number you want to check : <input type=text name="num">
<input type=submit name="check" value="check">
</form>
</html>