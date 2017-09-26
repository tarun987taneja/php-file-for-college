<meta charset="ISO-8859-1">
<title>Class Work</title>
</head>
<body>

<h1>Hello World</h1>
<h2><mark>Class - 1</mark></h2>
	
	<?php 
	
	$x = 5; $y = 10; //global
	
		echo "This is php!";
		$ex = "W3Schools PHP";
		echo "<br>";
		echo "Variable example -  " . $ex;
	
		function myTest() {
			global $x, $y;
			$y = $x + $y;
		}
		myTest();// run function
		// output the new value for variable $y
		echo "<br>". "Function will run and show output here: "  .$y;
		echo "<br>";
		
		//Global using Array
		echo "<h3>Global using Array</h3>";
		function myTest1() {
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTest1();
		echo "Array value: " . $z . "<br>";
		
		//Static
		echo "<h3>Static</h3>";
		function staticEx(){
			static $x = 0;
			echo $x;
			$x++;
		}
		staticEx();
		echo "<br>";
		staticEx();
		echo "<br>";
		staticEx();
		
		//Print
		print "<h3>Print Example</h3>" . "With Concat (to concat use .dot)";
		print "<br>";
		
		//Constants
		echo "<h3>Constants</h3>";
		define("GREETING", "Welcome to W3Schools.com!");
		echo GREETING;
		
		//Strings
		echo "<h3>Strings</h3>";
		echo "Output will be length of the string(Brijesh): ".strlen("Brijesh");
		
		//Array
		echo "<h3>Array</h3>";
		$arrayEx = array("C0707229","BRIJESH PRAJAPATI");
		echo "Name: " . $arrayEx[0] . " " . $arrayEx[1];
		
			//Indexed Arrays
			echo "<h4>Loop Through an Indexed Array</h4>";
			$cars = array("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);
			for($x = 0; $x < $arrlength; $x++) {
    		echo $cars[$x];
    		echo "<br>";
			}
		
			//Associative arrays
			echo "<h4>Loop Through an Associative Array</h4>";
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

			foreach($age as $x => $x_value) {
    		echo "Key=" . $x . ", Value=" . $x_value;
   			echo "<br>";
			}
	?>
	
</body>
</html>