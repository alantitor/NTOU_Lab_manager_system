<?php
// 處理公告欄資料

        function drawBasicDataTable()
        {
                $css = "";
		$js_par = "";
                $js_body = "";    
		$html = "";
                $result = "";    
      
		
		$css = "<style>"
		     . ".gt-b tr td {vertical-align: top;}"
		     . "</style>";
		

		/* 
		 * 1) give targetFomPHP new value.
		 * 2) write javascript get input data.  use json format.
		 * 3) call responseSubmitData() send data.
		 */
		$js_par = "a";
		$js_body = "targetFormPHP = \"formTemplate/basicDataTableFunction.php\";"  // set submit php
			 . "var jsonStr = '{';"

			 // part 1 data
			 . "var arr_a = [13];"
			 . "var count = 0;"
			 . "tInput = $('.gen-input1');"
			 //. "alert(tInput.length);"
			 . "tInput.each(function(){"
			 .	"arr_a[count] = $(this).val();"
			 .	"count++;"
			 . "});"
			 . "jsonStr += '\"ga_data\":' + JSON.stringify(arr_a) + ',';"
			 . "jsonStr += '\"ga_number\":\"' + tInput.length + '\",';"
			 // part 2 data
			 . "var arr_b = [];"


			 . "jsonStr += '\"status\":\"1\"';"
			 . "jsonStr += '}';"
			 //. "alert(jsonStr);"
			 . "responseSubmitData(jsonStr);";

		 $time = date('Y-m-d');
		 $html  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所基本資料表</div>"
               		. "<hr class=\"gen-hr\">"

			. "<table class='gen-table gen-table-a' id='gt-a'>"
			. "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">填表時間</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text' value='$time' disabled></td>"
			. "</tr>"
                        . "<tr>"
			.	"<td><label class=\"gen-box gen-subtitle\">單位</label></td>"
			.	"<td><label class=\"gen-box gen-subtitle\">學院</label><input class='gen-box gen-textbox gen-input1' type='text'><label class=\"gen-box gen-subtitle\">系所</label><input class='gen-box gen-textbox gen-input1' type='text'><label class=\"gen-box gen-subtitle\">中心</label><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
			. "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">場所名稱</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
			. "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">位置</label></td>"
			.	"<td><label class=\"gen-box gen-subtitle\">館</label><input class='gen-box gen-textbox gen-input1' type='text'><label class=\"gen-box gen-subtitle\">館</label><input class='gen-box gen-textbox gen-input1' type='text'><label class=\"gen-box gen-subtitle\">室</label><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">場所負責人</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">緊急聯絡電話</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
                        . 	"<td><label class=\"gen-box gen-subtitle\">e-mail</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
                        . "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">分機</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">填表人/實驗室管理人</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">緊急聯絡電話</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
	                . "<tr>"
                        . 	"<td><label class=\"gen-box gen-subtitle\">e-mail</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
                        . "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">分機</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">化學品管理系統負責人</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
                        .       "<td><label class=\"gen-box gen-subtitle\">緊急聯絡電話</label></td>"
                        .       "<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
                        . "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">e-mail</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
                        . "<tr>"
			. 	"<td><label class=\"gen-box gen-subtitle\">分機</label></td>"
			.	"<td><input class='gen-box gen-textbox gen-input1' type='text'></td>"
			. "</tr>"
			. "</table>"

			. "<br><br>"


			// part b
			. "<div class=\"gen-box gen-subtitle\">場所類別</div>"
			. "<br>"

			. "<table class='gen-table geb-table-b' id='gt-b'>"
			. "<tr>"
			. 	"<td width='100' rowspan='6'><div class=\"gen-box gen-subtitle\">本校分類<br>(可複選)</div></td>"
			.	"<td>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>化學性</label>"
			.	"</td>"
			.	"<td>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>毒化物</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>非毒化物</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>先驅化學品</label>"
			.		"<div>運作場所</div>"
			. 	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>物理性</label>"
			.	"</td>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>危險性</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>非危險性</label>"
			.		"<div>機械設備</div>"
			. 	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>生物性</label>"
			.	"</td>"
			.	"<td>"
			.		"<label>生物性防護層級</label><br>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>BSL-1</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>BSL-2</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>BLS-3</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>BLS-4</label>"
			.		"<div>物理性防護層級</div>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>P1</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>P2</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>P3</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>P4</label>"
			.		"<br>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>未申請安全鑑定</label>"
			. 	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>輻射性</label>"
			.	"</td>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>密封</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>非密封</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>可發生游離輻射設備</label>"
			.	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>其他</label>"
			.	"</td>"
			.	"<td>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>電腦教室</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\"><label>其它, 請說明</label><input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\">)"
			.	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td colspan='2'>"
			. 		"<div>兼具多種性質時,主要實驗性質為</div>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"1\" name='bs' type=\"radio\"><label>化學性</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"2\" name='bs' type=\"radio\"><label>物理性</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"3\" name='bs' type=\"radio\"><label>生物性</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"4\" name='bs' type=\"radio\"><label>輻射性</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"5\" name='bs' type=\"radio\"><label>其他,請說明</label><input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\">"
			.	"</td>"
			. "</tr>"
			. "<tr>"
			. 	"<td rowspan='2'>教育部分類<br>(勾選一項)</td>"
			.	"<td colspan='2'>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"1\" name=\"c1\" type=\"radio\"><label>實(試)驗室</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"2\" name=\"c1\" type=\"radio\"><label>實習教室</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"3\" name=\"c1\" type=\"radio\"><label>實習工場</label>"
			. 	"</td>"
			. "</tr>"
			. "<tr>"
			.	"<td colspan='2'>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"1\" name=\"c2\" type=\"radio\"><label>化學</label>"
			. 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"2\" name=\"c2\" type=\"radio\"><label>生物</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"3\" name=\"c2\" type=\"radio\"><label>醫學</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"4\" name=\"c2\" type=\"radio\"><label>農學</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"5\" name=\"c2\" type=\"radio\"><label>光電</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"6\" name=\"c2\" type=\"radio\"><label>機械</label>"
                        . 		"<input class=\"gen-box gen-checkbox\" id=\"\" value=\"7\" name=\"c2\" type=\"radio\"><label>土木</label>"
			.	"</td>"
			. "</tr>"
			. "</table>"
			
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">送出</button></div>"
			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
