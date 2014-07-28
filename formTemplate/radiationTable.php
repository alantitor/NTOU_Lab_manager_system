<?php
// 處理公告欄資料

        function drawRadiationTable()
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
		$js_body = "targetFormPHP = \"formTemplate/radiationTableFunction.php\";"  // set submit php
			 . "if (a == 1) {"  // add new row at table
			 .	"var content = \"<tr><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td><td><input class='gen-box gen-textbox gen-input-b' type='text'></td></tr>\";"  // create table
			 . 	"$(\"#gt-b tr:last-child\").after(content);"
			 . "} else if (a == 2) {"
			 .	"var content = \"<tr><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td><td><input class='gen-box gen-textbox gen-input-c' type='text'></td></tr>\";"
			 .	"$('#gt-c tr:last-child').after(content);"
			 . "} else if (a == 3) {"
                         .      "var content = \"<tr><td><input class='gen-box gen-textbox gen-input-d' type='text'></td><td><input class='gen-box gen-textbox gen-input-d' type='text'></td><td><input class='gen-box gen-textbox gen-input-d' type='text'></td><td><input class='gen-box gen-textbox gen-input-d' type='text'></td><td><input class='gen-box gen-textbox gen-input-d' type='text'></td><td><input class='gen-box gen-textbox gen-input-d' type='text'></td></tr>\";"
                         .      "$('#gt-d tr:last-child').after(content);"
			 . "} else if (a == 4) {"  // submit data
			 //. 	"alert('2');"
			 . 	"var jsonStr = '{';"

			 // 	get part1 input value
			 //.	"var arr_a = [$('#gia1').val(), $('#gia2').val(), $('#gia3').val(), $('#gia4').val()];"
			 //.	"jsonStr += '\"ga_data\":' + JSON.stringify(arr_a) + ',';"
			 //.	"jsonStr += '\"ga_number\":\"4\",';"

			 //  	get table b input value
			 .	"var tInput = $('#gt-b').find('.gen-input-b');"
			 .	"var arr_b = [];"
			 .	"var count = 0;"
			 . 	"tInput.each(function(){"  // use $(this).val() get input value and add it into json string
			 .		"arr_b[count] = $(this).val();"
			 .		"count++;"
			 . 	"});"
			 .	"jsonStr += '\"gb_data\":' + JSON.stringify(arr_b) + ',';"  // javascript to json array, don't add " at [].
			 .	"jsonStr += '\"gb_unit\":\"5\",';"
			 .	"jsonStr += '\"gb_number\":\"' + tInput.length + '\",';"

			 //	get table c input value
			 .	"var arr_c = [];"
			 .	"count = 0;"
                         .      "tInput = $('#gt-c').find('.gen-input-c');"
			 .	"tInput.each(function(){"
			 .		"arr_c[count] = $(this).val();"
			 .		"count++;"
			 .	"});"
                         .      "jsonStr += '\"gc_data\":' + JSON.stringify(arr_c) + ',';"  // javascript to json array, don't add " at [].
                         .      "jsonStr += '\"gc_unit\":\"7\",';"
                         .      "jsonStr += '\"gc_number\":\"' + tInput.length + '\",';"

			 //	get table d input value
			 .	"var arr_d = [];"
			 .	"count = 0;"
                         .      "tInput = $('#gt-d').find('.gen-input-d');"
			 .	"tInput.each(function(){"
			 .		"arr_d[count] = $(this).val();"
			 .		"count++;"
			 .	"});"
                         .      "jsonStr += '\"gd_data\":' + JSON.stringify(arr_d) + ',';"  // javascript to json array, don't add " at [].
                         .      "jsonStr += '\"gd_unit\":\"6\",';"
                         .      "jsonStr += '\"gd_number\":\"' + tInput.length + '\",';"

			 //	status
			 .	"jsonStr += '\"status\":\"1\"';"  // function trigger(ID), 1: submit, 2: update, 3: list all, 4: delete
			 . 	"jsonStr += '}';"
			 //. 	"alert(jsonStr);"
			 . 	"responseSubmitData(jsonStr);"
			 . "} else {"
			 . 	""  // exception
			 . "}";

		 $time = date('Y-m-d');
		 $html  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所基本資料表<br>輻射物質、設備資料表</div>"
               		. "<hr class=\"gen-hr\">"

			//. "<div class=\"gen-box gen-subtitle\">填表時間</div>"
                        //. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia1\" value=\"$time\" type=\"text\" disabled>"
                        //. "<div class=\"gen-box gen-subtitle\">場所負責人簽名</div>"
                        //. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia2\" type=\"text\">"
                        //. "<div class=\"gen-box gen-subtitle\">填表人</div>"
                        //. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia3\" type=\"text\">"
                        //. "<div class=\"gen-box gen-subtitle\">分機</div>"
                        //. "<input class=\"gen-box gen-textbox gen-input-a\" id=\"gia4\" type=\"text\">"

			. "<br><br>"

			// table b
			. "<div class=\"gen-box gen-subtitle\">一、操作人員</div>"
			. "<table class=\"gen-table gen-table-b\" id=\"gt-b\">"
			. 	"<tr><td>序號</td><td>操作人員姓名</td><td>操作人員證書號碼</td><td>最近受訓日期</td><td>備註</td></tr>"
			. "</table>"
                        . "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">新增一列</button></div>"

			// table c
                        . "<div class=\"gen-box gen-subtitle\">二、設備資訊</div>"
                        . "<table class=\"gen-table gen-table-c\" id=\"gt-c\">"
                        .       "<tr><td>序號</td><td>設備名稱</td><td>規格</td><td>設備證號</td><td>自動檢查表</td><td>SOP</td><td>備註</td></tr>"
                        . "</table>"
                        . "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(2)\">新增一列</button></div>"

			// table d
                        . "<div class=\"gen-box gen-subtitle\">三、放射物物質資訊</div>"
                        . "<table class=\"gen-table gen-table-d\" id=\"gt-d\">"
                        .       "<tr><td>序號</td><td>放射性物質名稱</td><td>規格(活度)</td><td>自動檢查表</td><td>SOP</td><td>備註</td></tr>"
                        . "</table>"
                        . "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(3)\">新增一列</button></div>"

			// submmit
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(4)\">送出</button></div>"

                        . "<br><br>"
			. "<blockquote>"
			. "附註：<br>本表資料係供陳報教育部、原能會及檢查單位相關用途之用,務請詳實填寫。<br>場所應貼有輻射作業場所標示、場所平面配置圖(標示輻射作業位置)、緊急聯絡人。"
			. "</blockquote>"
			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
