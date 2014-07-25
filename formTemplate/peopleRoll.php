<?php
// 處理公告欄資料

        function drawPeopleRoll()
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
		$js_body = "targetFormPHP = \"formTemplate/\";"  // set submit php
			 . "if (a == '1') {"  // add new row at table
			 .	"var content = \"<tr><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td><td><input class='gen-box gen-textbox gen-input1' type='text'></td></tr>\";"  // create html
			 . 	"$(\"#gt1 tr:last-child\").after(content);"
			 . "} else if (a == '2') {"  // submit data
			 //. 	"alert('2');"
			 . 	"var jsonStr = '{';"
			 . 	"var par = \"\";"
			 . 	"var data = \"\";"
			 //  get part1 input value
			 . 	"for (i = 1; i <= 4; i++) {"
			 . 	"	par = 'ga' + i;"
			 . 	"	data = document.getElementById(par).value;"
			 // . 	"	alert(data);"
			 . 	"	jsonStr += '\"ga' + i + '\":\"' + data + '\",';"
			 . 	"}"
			 //  get table input value
			 .	"var tInput = $('.gen-table1').find('.gen-input1');"
			 //.	"alert(tInput.length);"
			 . 	"tInput.each(function(){"
			 //.		"alert($(this).val());  // use $(this).val() get input value and add it into json string
			 //  add elements into json string
			 .		""
			 . 	"});"

			 //  data number
			 . 	"jsonStr += '\"ga-number\":4';"  // element number
			 . 	"jsonStr += '\"gb-number\":\"' + tInput.length + '\"';"  // element number
			 . 	"jsonStr += '}';"
			 . 	"alert(jsonStr);"
			 . 	"responseSubmitData(jsonStr);"
			 . "} else {"
			 . 	""  // exception
			 . "}";


		 $html  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所基本資料表場所人員名冊</div>"
               		. "<hr class=\"gen-hr\">"
			. "<div class=\"gen-box gen-subtitle\">填表時間</div>"
                        . "<input class=\"gen-box gen-textbox\" id=\"ga1\" type=\"text\">"
                        . "<div class=\"gen-box gen-subtitle\">場所負責人簽名</div>"
                        . "<input class=\"gen-box gen-textbox\" id=\"ga2\" type=\"text\">"
                        . "<div class=\"gen-box gen-subtitle\">填表人</div>"
                        . "<input class=\"gen-box gen-textbox\" id=\"ga3\" type=\"text\">"
                        . "<div class=\"gen-box gen-subtitle\">分機</div>"
                        . "<input class=\"gen-box gen-textbox\" id=\"ga4\" type=\"text\">"
			. "<br><br>"
			. "<table class=\"gen-table gen-table1\" id=\"gt1\">"
			. 	"<tr><td>序號</td><td>姓名</td><td>職稱</td><td>出生年月日</td><td>性別</td><td>到職年月</td><td>預定在場所時間(幾點~幾點)</td><td>教職員證號/學號</td><td>(備註)領有研究計劃津貼</td><td>(備註)領有教育部助學金</td></tr>"
			. 	"<div></div>"
			. "</table>"

			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">新增一列</button></div>"
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(2)\">送出</button></div>"

			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
