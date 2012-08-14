<html>

<head>
<title>Adding Alternate Digits</title>
</head>

<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
$a=array();
$i=0;
do
{
$mod=$num%10;
if($mod!=0)
$a[$i]=$mod;
$i+=1;
$num=$num/10;
}while($mod!=0);
$count=count($a);
for($i=0;$i<$count;$i++)
{
$odd+=$a[2*$i];
$eve+=$a[2*$i+1];
}
echo "The Output is ".$odd." & ".$eve;
}
?>
<form name="input" method="post">
Enter Number <input type="text" name="num"><input type=submit name="submit" value="submit">
</form>
</html>