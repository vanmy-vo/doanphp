<?php
  $username = "root";
  $password = "";
  $host = "localhost";
  $database = "webtintuc";

    $conn = mysqli_connect($host,$username,$password, $database) or die("Unable to connect");

    $id = $_POST["id"];
    $sql = "DELETE FROM contact WHERE id = '{$id}'";

    $result = mysqli_query($conn, $sql) or die ("Error in Selecting ". mysqli_error($conn));

    
	if (isset($_POST["action"])){
		if ($_POST["action"] == "delete"){
			delete();
		}
	}

    function delete(){
		global $conn;
        global $result;

        if ($result){
            echo 1;
        }
        else{
            echo 0;
        }

	}
?>  