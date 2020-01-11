<?php
	//Laptop 
        $db_conx = mysqli_connect("localhost", "root", "","fxmane");
        if (mysqli_connect_errno()){
		echo mysqli_connect_error();
                echo "DB connect1";
		exit();
	}
        /*$db_conx1 = mysqli_connect("localhost", "root", "","bitloan_bkp");
        if (mysqli_connect_errno()){
		echo mysqli_connect_error();
                echo "DB connect2";
		exit();
	}*/
?>