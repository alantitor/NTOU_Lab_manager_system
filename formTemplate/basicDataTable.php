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
			. "<div class=\"gen-box gen-subtitle\">填表時間</div>"
			. "<input class='gen-box gen-textbox gen-input1' type='text' value='$time' disabled>"
                        . "<div class=\"gen-box gen-subtitle\">系所/中心</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">場所名稱</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">位置(館/樓/室)</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">場所負責人</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">緊急聯絡電話</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">分機</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">填表人/實驗室管理人</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">緊急聯絡電話及E-mail</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">分機</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">化學品管理系統負責人</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">E-mail</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"
                        . "<div class=\"gen-box gen-subtitle\">分機</div>"
                        . "<input class='gen-box gen-textbox gen-input1' type='text'>"

			. "<br><br>"
			. "<div class=\"gen-box gen-subtitle\">場所類別</div>"
			. "<div class=\"gen-box gen-subtitle\">本校分類(可複選)</div>"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">化學性(為"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">毒化物"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">非毒化物"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">先驅化學品 運作場所)"
			. "<br>"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">物理性(具有"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">危險性"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">非危險性 機械設備)"
			. "<br>"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">生物性(<br>生物性防護層級"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">BSL-1"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">BSL-2"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">BLS-3"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">BLS-4;<br>物理性防護層級"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">P1"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">P2"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">P3"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">P4;"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">未申請安全鑑定)"
			. "<br>"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">輻射性("
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">密封"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">非密封"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">可發生游離輻射設備)"
			. "<br>"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">其他("
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">電腦教室"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">其他, 請說明<input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\">)"
			. "<br>"
			. "兼具多種性質時,主要實驗性質為"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">化學性"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">物理性"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">生物性"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">輻射性"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" type=\"checkbox\">其他,請說明<input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\">"

			. "<br>"
			. "教育部分類(勾選一項)<br>"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s1\" type=\"radio\">實(試)驗室"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s1\" type=\"radio\">實習教室"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s1\" type=\"radio\">實習工場"
			. "<br>"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">化學"
			. "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">生物"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">醫學"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">農學"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">光電"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">機械"
                        . "<input class=\"gen-box gen-checkbox\" id=\"input\" value=\"\" name=\"s2\" type=\"radio\">土木"

			
			. "<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData(1)\">送出</button></div>"
			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
