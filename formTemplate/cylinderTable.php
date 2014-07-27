<?php
// 處理公告欄資料

        function drawCylinderTable()
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
		$js_body = "targetFormPHP = \"formTemplate/cylinderTableFunction.php\";"  // set submit php
			 . "if (a == '1') {"  // add new row at table
			 .	"var content = \"<tr><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td></tr>\";"  // create html
			 . 	"$(\"#gt-b tr:last-child\").after(content);"
			 . "} else if (a == '2') {"  // submit data
			 //. 	"alert('2');"
			 . 	"var jsonStr = '{';"

			 // 	get part1 input value
			 .	"var arr_a_size = 4;"
			 .	"var arr_a = [4];"
			 .	"var arr_a_result;"
			 .	"arr_a[0] = $('#gia1').val();"
			 .	"arr_a[1] = $('#gia2').val();"
                         .      "arr_a[2] = $('#gia3').val();"
                         .      "arr_a[3] = $('#gia4').val();"
			 .	"arr_a_result = JSON.stringify(arr_a);"
			 .	"jsonStr += '\"ga_data\":' + arr_a_result + ',';"
			 .	"jsonStr += '\"ga_number\":\"4\",';"

			 //  	get part2 input value
			 .	"var tInput = $('#gt-b').find('.gen-input-b');"
			 .	"var arr_b_size = tInput.length;"
			 .	"var arr_b = [arr_b_size];"
			 .	"var arr_b_result;"
			 .	"var count = 0;"
			 . 	"tInput.each(function(){"  // use $(this).val() get input value and add it into json string
			 .		"arr_b[count] = $(this).val();"
			 .		"count++;"
			 . 	"});"
			 .	"var arr_b_result = JSON.stringify(arr_b);"
			 .	"jsonStr += '\"gb_data\":' + arr_b_result + ',';"  // javascript to json array, don't add " at [].

			 //  	count data number
			 .	"jsonStr += '\"gb_unit\":\"11\",';"  // ***
			 . 	"jsonStr += '\"gb_number\":\"' + tInput.length + '\",';"  // element number

			 .	"jsonStr += '\"status\":\"1\"';"  // function trigger(ID), 1: submit, 2: update, 3: list all, 4: delete
			 . 	"jsonStr += '}';"
			 //. 	"alert(jsonStr);"
			 . 	"responseSubmitData(jsonStr);"
			 . "} else {"
			 . 	""  // exception
			 . "}";

		 $time = date('Y-m-d');
		 $html  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所基本資料表<br>局部排氣裝置及無菌操作台資料表</div>"
               		. "<hr class=\"gen-hr\">"
			. "<div class=\"gen-box gen-subtitle\">填表時間</div>"
                        . "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia1\" value=\"$time\" type=\"text\" disabled>"
                        . "<div class=\"gen-box gen-subtitle\">場所負責人簽名</div>"
                        . "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia2\" type=\"text\">"
                        . "<div class=\"gen-box gen-subtitle\">填表人</div>"
                        . "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia3\" type=\"text\">"
                        . "<div class=\"gen-box gen-subtitle\">分機</div>"
                        . "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia4\" type=\"text\">"
			. "<br><br>"

			. "<table class=\"gen-table gen-table-b\" id=\"gt-b\">"
			. 	"<tr><td>序號</td><td>氣體名稱</td><td>容量(L)</td><td>數量(瓶)</td><td>瓶身顏色</td><td>使用年限(塑膠環顏色)</td><td>有無固定</td><td>危害警告標示</td><td>自動檢查表</td><td>SOP</td><td>備註</td></tr>"
			//. 	"<div></div>"
			. "</table>"

			// button
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">新增一列</button></div>"
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(2)\">送出</button></div>"

                        . "<br><br>"
			.	"<div>"
			.		"附註：<br>"
			.		"<blockquote>本表資料係供陳報教育部及檢查單位相關用途之用,務請詳實填寫。</blockquote>"
			. 	"</div>"

			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
