<?php
	$jsonStr = $_POST['json'];
	$jsonObj = json_decode($jsonStr);
	$status = "error";
	$par = "";
	$return_string = "";


	if ($jsonObj->type == 1) {
		$re = modifyData($jsonObj->p1);
		$re = json_decode($re);

		$par = "{\"status\":\"2\", \"css\":\"$re->css\", \"js_par\":\"$re->js_par\", \"js_body\":\"$re->js_body\", \"html\":\"$re->html\"}";
	} else if ($jsonObj->type == 2) {
		if (deleteData($jsonObj->p1) == true) {
			$par = "{\"status\":\"0\", \"p1\":\"已成功刪除留言\"}";
		} else {
			$par = "{\"status\":\"0\", \"p1\":\"系統錯誤\"}";
		}
	} else {
		$par = "{\"status\":\"0\", \"p1\":\"系統錯誤\"}";
	}

	$return_string = $par;
	echo $return_string;
?>

<?php
	function deleteData($p1)
	{
		$status = false;
		include '../connectDB.php';
		$connect = connect_to_DB();

		if ($connect != null) {
			$sql = "DELETE FROM `bulletin` WHERE `id` = '$p1'";
			if (mysqli_query($connect, $sql) == true) {
				$status = true;
			}
		} else {
			$status = false;
		}

		mysqli_close($connect);
		return $status;
	}

	// return json object
	function modifyData($data_id)
	{
		/* connect DB */

		include '../connectDB.php';
		$connect = connect_to_DB();

		$sql = "SELECT `id`, `time`, `unit`, `author`, `title`, `content`
			FROM `bulletin`
			WHERE 'id' = $data_id";

		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);

		/* design layout */

		$css =  "<style>"
                     .  ".gen-textbox {"
                     .  "width: 700px;"
                     .  "height: 30px;"
                     .  "font-size: 16px;"
                     .  "}"
                     .  ".gen-textarea {"
                     .  "height: 500px;"
                     .  "width: 700px;"
                     .  "}"
                     . "</style>";


		$js_par = "";
                $js_body = "targetFormPHP = \"formTemplate/bulletinSubmit.php\";"  // set submit php
                         . "var jsonStr = '{';"
                         . "var par = \"\";"
                         . "var data = \"\";"
                         . "for (i = 1; i <= 4; i++) {"
                         . "    par = 'input' + i;"
                         . "    data = document.getElementById(par).value;"
                         . "    jsonStr += '\"a' + i + '\":\"' + data + '\",';"
                         . "}"
                         . "jsonStr += '\"number\":4';"
                         . "jsonStr += '}';"
                         . "responseSubmitData(jsonStr);";


                 $html  = "<div class=\"gen-title\">公告欄處理</div>"
                        . "<hr class=\"gen-hr\">"
                        . "<div class=\"gen-wrapper\">"
                        .       "<div class=\"gen-box gen-subtitle\">公告標題</div>"
                        .       "<input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\" value=\"$row['id']\">"
                        .       "<div class=\"gen-box gen-subtitle\">發文單位</div>"
                        .       "<input class=\"gen-box  gen-textbox\" id=\"input2\" type=\"text\" value=\"$row['unit']\">"
                        .       "<div class=\"gen-box gen-subtitle\">發文者</div>"
                        .       "<input class=\"gen-box gen-textbox\" id=\"input3\" type=\"text\" value=\"$row['author']\">"
                        .       "<div class=\"gen-box gen-subtitle\">公告內容</div>"
                        .       "<textarea class=\"gen-box gen-textarea\" id=\"input4\" value=\"$row['content']\"></textarea>"
                        .       "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData()\">送出</button></div>"
                        . "</div>";



		return $str;
	}
?>
