<?php
/*
 * process bulletin submit data
 *
 * return format:
 *	{"status":"OK or error", "par", }
 */

	/* get parameters */
	$jsonStr = $_POST['json'];
	$jsonObj = json_decode($jsonStr);
	//echo $jsonObj->a1;
	$status = "error";
	$par = "";
	$return_string = "";


	/* check status */
	// title unit user content



	/* save data into DB */

	include '../connectDB.php';
	$connect = connect_to_DB();
	$write_to_DB = false;

	if ($connect != null) {
		//echo "DB OK";
		$status = "ok";

		if (insert_bulletin_data($connect, $jsonObj->a1, $jsonObj->a2, $jsonObj->a3, $jsonObj->a4) == true) {
			$par = "{" . "\"status\":\"1\", \"p1\":\"已成功張貼公告\"}";
		} else {
			$status = "error";
			$par = "{" . "\"status\":\"0\"" . ",". "\"p1\":資料輸入錯誤" . "}";
		}
	} else {
		//echo "can not connect to DB";
		$status = "error";
		$par = "{" . "\"status\":\"error\"" . ",". "\"p1\":0" . "}";  // coding to here1!!..................
	}
	mysqli_close($connect);


	/* make return string, use json format */

	$return_string = $par;

	echo $return_string;
?>

<?php
	function insert_bulletin_data($connect, $a1, $a2, $a3, $a4)
	{
		$status = false;

		$a1 = mysqli_real_escape_string($connect, $a1);  // title
		$a2 = mysqli_real_escape_string($connect, $a2);  // unit
		$a3 = mysqli_real_escape_string($connect, $a3);  // autor
		$a4 = mysqli_real_escape_string($connect, $a4);  // content

		// sql command
		$sql = "INSERT INTO `bulletin`(`time`,`unit`, `author`, `title`, `content`, `hidden`)"
		     .                "VALUES ( now(), '$a2', '$a3'   , '$a1'  , '$a4'    , '1')";

/*
INSERT INTO `bulletin`(`time`, `unit`, `author`, `title`, `content`, `hidden`)
               VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
*/

		if (mysqli_query($connect, $sql) == true) {
			$status = true;
		}

		return $status;
	}
?>
