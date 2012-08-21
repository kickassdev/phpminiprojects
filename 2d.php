<html> <!-- Without using arrays and using single loop. I have called the input matrix for the sake of UI-->
 <head><title>Difference in Diagonal Sum of Arrays</title></head>
 <body>
	<?php if(isset($_GET['sub1']) or isset($_POST['sub2']))
	{	$syze=$_GET['size'];
		$for=$syze*$syze;
		$l=$syze;
		if(isset($_POST['sub2'])=="")		
		echo "Enter the Matrix elements:<br><br><form method='post'>";
		else
		echo "Your Matrix is:<br><br>";
		$key=1;$sp=1;	
		for($j=1;$j<=$for;$j++){
			if(isset($_POST['sub2'])=="")
			echo "<input type='text' name='$key' value='".$_POST['$key']."'>  ";
			else
			echo $_POST["$key"]."&nbsp;&nbsp;&nbsp;";
			$m=$key%$syze;
			$key+=1;
			if($m==0)
			{
			echo "<br><br>";
			$r1+=$_POST["$l"];
			$r2+=$_POST["$sp"];
			$l+=($syze-1);
			$sp+=($syze+1);
			}
					
		}	$r=$r2-$r1;
		if(isset($_POST['sub2'])=="")		
		echo "<input type='submit' name='sub2' value='submit matrix'></form>";
		else
	        echo "<br> and the difference between sum of diagonals is ".$r."<br><a href='javascript:history.go(-2)'>Use Again</a>";
	}
	if($_GET['sub1']=="")		
	echo "<form method='get'> Enter the size of the matrix: <input type='text' name='size' value='".$_POST['size']."'>
	<input type='submit' name='sub1' value='submit'></form>";
 	?></body></html>