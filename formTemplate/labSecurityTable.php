<?php
// 處理公告欄資料

        function drawLabSecurityTable()
        {
                $css = "";
		$js_par = "";
                $js_body = "";    
		$html = "";
                $result = "";    
      
		
		$css = "<style>"
		     . "</style>";
		

		/* 
		 * 1) give targetFomPHP new value.
		 * 2) write javascript get input data.  use json format.
		 * 3) call responseSubmitData() send data.
		 */
		$js_par = "a";
		$js_body = "targetFormPHP = \"formTemplate/labSecurityTableFunction.php\";"  // set submit php
			 . "if (a == 1) {"  // add new row at table
			 . 	"var jsonStr = '{';"

			 .	"var arr_a = [$('#gia1').val(), $('#gia2').val(), $('#gia3').val(), $('#gia4').val()];"
			 .	"jsonStr += '\"ga_data\":' + JSON.stringify(arr_a) + ',';"

			 .	"var arr_b = ["
			 .		"$('input:radio[name=\"gib-a\"]:checked').val(),"
			 .		"$('#gib-a').val(),"
			 .		"$('input:radio[name=\"gib-b\"]:checked').val(),"
			 .		"$('#gib-b').val(),"
                         .              "$('input:radio[name=\"gib-c\"]:checked').val(),"
                         .              "$('#gib-c').val(),"
                         .              "$('input:radio[name=\"gib-d\"]:checked').val(),"
                         .              "$('#gib-d').val(),"
                         .              "$('input:radio[name=\"gib-e\"]:checked').val(),"
                         .              "$('#gib-e').val(),"
                         .              "$('input:radio[name=\"gib-f\"]:checked').val(),"
                         .              "$('#gib-f').val(),"
                         .              "$('input:radio[name=\"gib-g\"]:checked').val(),"
                         .              "$('#gib-g').val(),"
                         .              "$('input:radio[name=\"gib-h\"]:checked').val(),"
                         .              "$('#gib-h').val(),"
                         .              "$('input:radio[name=\"gib-i\"]:checked').val(),"
                         .              "$('#gib-i').val()"
			 .	"];"
			 .	"jsonStr += '\"gb_data\":' + JSON.stringify(arr_b) + ',';"

			 .	"jsonStr += '\"gb_number\":\"18\",';"
			 .	"jsonStr += '\"gb_unit\":\"2\",';"
			 .	"jsonStr += '\"status\":\"1\"';"
			 . 	"jsonStr += '}';"
			 . 	"responseSubmitData(jsonStr);"
			 . "} else {"
			 . 	""  // exception
			 . "}";

		$time = date('Y-m-d');
		$html  = "<div class=\"gen-title\">實驗場所基本資料調查目錄</div>"
			. "<hr class=\"gen-hr\">"
			. "<div class=\"gen-box gen-subtitle\">填表時間</div>"
			. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia1\" value=\"$time\" type=\"text\" disabled>"
			. "<div class=\"gen-box gen-subtitle\">填表人簽名</div>"
			. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia2\" type=\"text\">"
			. "<div class=\"gen-box gen-subtitle\">聯絡電話</div>"
			. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia3\" type=\"text\">"
			. "<div class=\"gen-box gen-subtitle\">實驗場所負責人簽名</div>"
			. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia4\" type=\"text\">"

			. "<br><br>"
			. "<table class=\"gen-table gen-table-b\" id=\"gt-b\">"
			. 	"<tr>"
			.		"<td>項次</td>"
			.		"<td>項目</td>"
			.		"<td width='70'>填報繳交</td>"
			.		"<td width='200'>數量</td>"
			.       "</tr>"
			.	"<tr>"
			.		"<td>1</td>"
			.		"<td>基本資料表</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-a' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-a' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-a' value='0' min='0' type='number'></td>"
			.	"</tr>"
                        .       "<tr>"
                        .               "<td>2</td>"
                        .               "<td>場所管理資料調查表</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-b' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-b' type='radio'>否</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-b' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>3</td>"
                        .               "<td>場所平面配置圖</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c' type='radio'>否</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-c' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>4</td>"
                        .               "<td>場所人員名冊</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-d' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-d' type='radio'>否</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-d' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>5</td>"
                        .               "<td>機械、設備資料表</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-e' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-e' type='radio'>否<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-e' type='radio'>不適用</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-e' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>6</td>"
                        .               "<td>高壓氣體鋼瓶清單</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-f' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-f' type='radio'>否<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-f' type='radio'>不適用</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-f' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>7</td>"
                        .               "<td>毒性化學物質、危險物、有害物物質清單</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-g' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-g' type='radio'>否<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-g' type='radio'>不適用</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-g' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>8</td>"
                        .               "<td>局部排氣裝置及無菌操作台資料表</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-h' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-h' type='radio'>否<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-h' type='radio'>不適用</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-h' value='0' min='0' type='number'></td>"
                        .       "</tr>"
                        .       "<tr>"
                        .               "<td>9</td>"
                        .               "<td>輻射物質、設備資料表</td>"
                        .               "<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-i' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-i' type='radio'>否<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-i' type='radio'>不適用</td>"
                        .               "<td><input class='gen-box gen-textbox' id='gib-i' value='0' min='0' type='number'></td>"
                        .       "</tr>"
			. "</table>"

			. "<br>"
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">送出</button></div>"
			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
