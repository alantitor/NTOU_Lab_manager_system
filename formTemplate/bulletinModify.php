<?php
// 修改公告內容

	function drawBulletinModify()
	{
		$css = "";
		$js_par = "";
		$js_body = "";
		$html = "";
		$result = "";


		// css
		$css 	= "<style>"
			. ""
			. "</style>";

		// javascript
		$js_par = "a, b";  // function parameters
		$js_body= "targetFormPHP = \"formTemplate/bulletinModifyFunction.php\";"
			. "alert(a+'_'+b);"
			. "var jsonStr = '{\"type\":\"' + a + '\",\"p1\":\"' + b + '\"}';"
			. "responseSubmitData(jsonStr);";
		
		$bulletin_data = getData();

		// html
		$html	= "<div class=\"gen-title\">公告管理</div>"
			. "<hr class=\"gen-hr\">"
			. "<div class=\"gen-wrapper\">"
			. 	"<table class=\"gen-table\">"
			.		"<tr><td width=\"150\">日期</td><td width=\"400\">標題</td><td width=\"150\">發佈者</td><td width=\"50\">修改</td><td width=\"50\">刪除</td></tr>"
			.		$bulletin_data
			. 	"</table>"
			. "</div>";


		$result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);

		return $result;
	}
?>

<?php
	function getData()
	{
		$result = "";

		include 'connectDB.php';
		$connect = connect_to_DB();

		if ($connect != null) {
			$sql = "SELECT * FROM bulletin ORDER BY time DESC";
			
			$query_result = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($query_result)) {
				$id = $row['id'];
				$time = $row['time'];
				//$unit = $row['unit'];
				$author = $row['author'];
				$title = $row['title'];
				
			$result .= "<tr><td width='150'>$time</td><td width='400'>$title</td><td width='150'>$author</td><td width='50'><button onclick=\"getInputData(1,$id)\">修改</button></td><td width='50'><button onclick=\"getInputData(2,$id)\">刪除</button></td></tr>";
			}
		} else {
			$result = "<div>Can not connect to DB.  ERROR!</div>";
		}

		mysql_close($connect);
		return $result;
	}
?>
