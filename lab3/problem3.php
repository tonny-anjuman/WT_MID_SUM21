<html>
	<body>
		<?php
        $length= 5;
        $width= 5;
        $perimeter= 2*($length+$width);
        $area= $length*$width;
        echo "Perameter: ". $perimeter."<br>";
        echo "Area: ".$area."<br>";;
        if ($length == $width){
            echo "the shape is a square.";
        }
        
			
		?>
	</body>
</html>