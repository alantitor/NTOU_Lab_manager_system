<?php
// 處理公告欄資料

        function drawManagerDataTable()
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
		$js_body = "targetFormPHP = \"formTemplate/managerDataTableFunction.php\";"  // set submit php
			 . "if (a == '1') {"  // add new row at table
			 //. ""
			 . "} else if (a == '2') {"  // submit data
			 //. 	"alert('2');"
			 //	check data status


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

			 //  	get part2 input value
			 .	"var arr_gib_a = [$('input:radio[name=\"gib-a1\"]:checked').val(), $('input:radio[name=\"gib-a2\"]:checked').val(), $('input:radio[name=\"gib-a3\"]:checked').val(), $('#gib-a4').val(), $('input:radio[name=\"gib-a5\"]:checked').val()];"
			 .	"jsonStr += '\"gib_a\":' + JSON.stringify(arr_gib_a) + ',';"
			 .	"var arr_gib_b = [$('input:radio[name=\"gib-b1\"]:checked').val(), $('input:radio[name=\"gib-b2\"]:checked').val(), $('input:radio[name=\"gib-b3\"]:checked').val(), $('#gib-b4').val(), $('input:radio[name=\"gib-b5\"]:checked').val()];"
			 .	"jsonStr += '\"gib_b\":' + JSON.stringify(arr_gib_b) + ',';"
			 .      "var arr_gib_c = [$('input:radio[name=\"gib-c1\"]:checked').val(), $('input:radio[name=\"gib-c2\"]:checked').val(), $('input:radio[name=\"gib-c3\"]:checked').val(), $('#gib-c4').val(), $('input:radio[name=\"gib-c5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_c\":' + JSON.stringify(arr_gib_c) + ',';"
			 .      "var arr_gib_d = [$('input:radio[name=\"gib-d1\"]:checked').val(), $('input:radio[name=\"gib-d2\"]:checked').val(), $('input:radio[name=\"gib-d3\"]:checked').val(), $('#gib-d4').val(), $('input:radio[name=\"gib-d5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_d\":' + JSON.stringify(arr_gib_d) + ',';"
			 .      "var arr_gib_e = [$('input:radio[name=\"gib-e1\"]:checked').val(), $('input:radio[name=\"gib-e2\"]:checked').val(), $('input:radio[name=\"gib-e3\"]:checked').val(), $('#gib-e4').val(), $('input:radio[name=\"gib-e5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_e\":' + JSON.stringify(arr_gib_e) + ',';"
			 .      "var arr_gib_f = [$('input:radio[name=\"gib-f1\"]:checked').val(), $('input:radio[name=\"gib-f2\"]:checked').val(), $('input:radio[name=\"gib-f3\"]:checked').val(), $('#gib-f4').val(), $('input:radio[name=\"gib-f5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_f\":' + JSON.stringify(arr_gib_f) + ',';"
			 .      "var arr_gib_g = [$('input:radio[name=\"gib-g1\"]:checked').val(), $('input:radio[name=\"gib-g2\"]:checked').val(), $('input:radio[name=\"gib-g3\"]:checked').val(), $('#gib-g4').val(), $('input:radio[name=\"gib-g5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_g\":' + JSON.stringify(arr_gib_g) + ',';"
			 .      "var arr_gib_h = [$('input:radio[name=\"gib-h1\"]:checked').val(), $('input:radio[name=\"gib-h2\"]:checked').val(), $('input:radio[name=\"gib-h3\"]:checked').val(), $('#gib-h4').val(), $('input:radio[name=\"gib-h5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_h\":' + JSON.stringify(arr_gib_h) + ',';"
			 .      "var arr_gib_i = [$('input:radio[name=\"gib-i1\"]:checked').val(), $('input:radio[name=\"gib-i2\"]:checked').val(), $('input:radio[name=\"gib-i3\"]:checked').val(), $('#gib-i4').val(), $('input:radio[name=\"gib-i5\"]:checked').val()];"
			 .      "jsonStr += '\"gib_i\":' + JSON.stringify(arr_gib_i) + ',';"
                         .      "var arr_gib_j = [$('input:radio[name=\"gib-j1\"]:checked').val()];"
                         .      "jsonStr += '\"gib_j\":' + JSON.stringify(arr_gib_j) + ',';"
                         .      "var arr_gib_k = [$('input:radio[name=\"gib-k1\"]:checked').val(), $('input:radio[name=\"gib-k2\"]:checked').val(), $('input:radio[name=\"gib-k3\"]:checked').val(), $('#gib-k4').val(), $('input:radio[name=\"gib-k5\"]:checked').val()];"
                         .      "jsonStr += '\"gib_k\":' + JSON.stringify(arr_gib_k) + ',';"
                         .      "var arr_gib_l = [$('input:radio[name=\"gib-l1\"]:checked').val(), $('input:radio[name=\"gib-l2\"]:checked').val(), $('input:radio[name=\"gib-l3\"]:checked').val(), $('#gib-l4').val(), $('input:radio[name=\"gib-l5\"]:checked').val()];"
                         .      "jsonStr += '\"gib_l\":' + JSON.stringify(arr_gib_l) + ',';"
			 
			 //	submit status
			 .	"jsonStr += '\"status\":\"1\"';"  // function trigger(ID), 1: submit, 2: update, 3: list all, 4: delete
			 . 	"jsonStr += '}';"
			 . 	"responseSubmitData(jsonStr);"
			 . "} else {"
			 . 	""  // exception
			 . "}";

		$time = date('Y-m-d');
		$html  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所<br>管理資料調查表</div>"
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
			. "<div class=\"gen-box gen-subtitle\">實驗場所應備有之基本安全衛生措施</div>"
			. "<table class=\"gen-table gen-table-b\" id=\"gt-b\">"
			. 	"<tr>"
			.		"<td rowspan='2'>項目</td>"
			.		"<td rowspan='2' width='70'>有無設置或張貼</td><td colspan='3'>應設置或張貼位置</td>"
			.		"<td rowspan='2'>數量(單位)</td><td colspan='2'>定期更新及保養</td>"
			.		"<td rowspan='2'>備註</td></tr>"
			.       "<tr>"
			.	"<td>應設位置</td>"
			.		"<td width='100'>目前設置位置</td>"
			.		"<td width='70'>是否正確</td>"
			.		"<td width='50'>週期</td>"
			.		"<td width='70'>有無更新</td>"
			.	"</tr>"
			.       "<tr>"
			.		"<td>實驗場所特殊作業標示</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-a1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-a1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-a1' type='radio'>不適用</td>"
			.		"<td>門外</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-a2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-a2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-a2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-a3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-a3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-a4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-a5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-a5' type='radio'>無</td>"
			.		"<td>輻射、毒化、生物、電射..等作業</td>"
			.	"</tr>"
			.       "<tr>"
			.		"<td>緊急聯絡通報圖</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-c1' type='radio'>不適用</td>"
			.		"<td>門外</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-b2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-b2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-b2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-b3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-b3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-b4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-b5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-b5' type='radio'>無</td>"
			.		"<td>包括緊急聯絡人、電話</td>"
			.	"</tr>"
			.       "<tr>"
			.		"<td>實驗室安全衛生工作守則</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-c1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-c2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-c4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-c5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-c5' type='radio'>無</td>"
			.		"<td>定期確認是否適用</td>"
			.	"</tr>"
			.       "<tr>"
			.		"<td>實驗室平面配置圖</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-d1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-d1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-d1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-d2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-d2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-d2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-d3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-d3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-d4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-d5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-d5' type='radio'>無</td>"
			.		"<td>含危險物品、鋼瓶、儀器設備、安衛設備、逃生路線及配電盤..等</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>緊急應變計畫書</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-e1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-e1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-e1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-e2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-e2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-e2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-e3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-e3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-e4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-e5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-e5' type='radio'>無</td>"
			.		"<td>特殊意外事故處理流程及注意事項</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>危害物質清單</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-f1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-f1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-f1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-f2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-f2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-f2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-f3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-f3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-f4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-f5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-f5' type='radio'>無</td>"
			.		"<td>包含平均數量、最大數量、廠商資料</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>物質安全資料表</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-g1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-g1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-g1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-g2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-g2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-g2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-g3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-g3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-g4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-g5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-g5' type='radio'>無</td>"
			.		"<td>危害物等，並建立MSDS清單</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>急救箱</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-h1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-h1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-h1' type='radio'>不適用</td>"
			.		"<td>門口(門內)附近明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-h2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-h2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-h2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-h3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-h3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-h4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-h5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-h5' type='radio'>無</td>"
			.		"<td>定期確認是否過期</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>滅火器</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-i1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-i1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-i1' type='radio'>不適用</td>"
			.		"<td>門口附近明顯處，不阻礙逃生路線</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-i2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-i2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-i2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-i3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-i3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-i4' value='0' min='0' type='number'></td>"
			.		"<td>每月</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-i5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-i5' type='radio'>無</td>"
			.		"<td>定期檢查是否過期</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>110V，220V電壓標示</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-j1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-j1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-j1' type='radio'>不適用</td>"
			.		"<td>插座上</td>"
			.		"<td>*</td>"
			.		"<td>*</td>"
			.		"<td>*</td>"
			.		"<td>*</td>"
			.		"<td>*</td>"
			.		"<td></td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>安衛器材，清單及使用步驟</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-k1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-k1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-k1' type='radio'>不適用</td>"
			.		"<td>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-k2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-k2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-k2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-k3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-k3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-k4' value='0' min='0' type='number'></td>"
			.		"<td>每月</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-k5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-k5' type='radio'>無</td>"
			.		"<td>包括洩漏處理之器材、定期檢視是否堪用</td>"
			.	"</tr>"
                        .       "<tr>"
			.		"<td>警告標語</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-l1' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-l1' type='radio'>無<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-l1' type='radio'>不適用</td>"
			.		"<td>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-l2' type='radio'>門外<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-l2' type='radio'>門口附近<br><input class='gen-box gen-checkbox' id='' value='3' name='gib-l2' type='radio'>室內明顯處</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-l3' type='radio'>是<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-l3' type='radio'>否</td>"
			.		"<td><input class='gen-box gen-textbox' id='gib-l4' value='0' min='0' type='number'></td>"
			.		"<td>每學期</td>"
			.		"<td><input class='gen-box gen-checkbox' id='' value='1' name='gib-l5' type='radio'>有<br><input class='gen-box gen-checkbox' id='' value='2' name='gib-l5' type='radio'>無</td>"
			.		"<td></td>"
			.	"</tr>"
			. "</table>"

			. "<iv class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(2)\">送出</button></div>"

			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
