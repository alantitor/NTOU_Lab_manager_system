<?php
// 處理公告欄資料

        function drawBulletin()
        {
                $css = "";
		$js_par = "";
                $js_body = "";    
		$html = "";
                $result = "";    
      
		
		$css =  "<style>"
		     .	".gen-textbox {"
		     .	"width: 700px;"
		     .  "height: 30px;"
		     .  "font-size: 16px;"
		     . 	"}"
		     .	".gen-textarea {"
		     .	"height: 500px;"
		     .	"width: 700px;"
		     .	"}"
		     . "</style>";
		

		/* 
		 * 1) give targetFomPHP new value.
		 * 2) write javascript get input data.  use json format.
		 * 3) call responseSubmitData() send data.
		 */
		$js_par = "";
		$js_body = "targetFormPHP = \"formTemplate/bulletinSubmit.php\";"  // set submit php
			 . "var jsonStr = '{';"
			 . "var par = \"\";"
			 . "var data = \"\";"
			 . "for (i = 1; i <= 4; i++) {"
			 . "	par = 'input' + i;"
			 . "	data = document.getElementById(par).value;"
			 //. "	alert(data);"
			 . "	jsonStr += '\"a' + i + '\":\"' + data + '\",';"
			 . "}"
			 . "jsonStr += '\"number\":4';"
			 . "jsonStr += '}';"
			 //. "alert(jsonStr);"
			 . "responseSubmitData(jsonStr);";


		 $html  = "<div class=\"gen-title\">公告欄處理</div>"
               		. "<hr class=\"gen-hr\">"
			. "<div class=\"gen-wrapper\">"
			. 	"<div class=\"gen-box gen-subtitle\">公告標題</div>"
			.	"<input class=\"gen-box gen-textbox\" id=\"input1\" type=\"text\">"
                	.	"<div class=\"gen-box gen-subtitle\">發文單位</div>"
                	.	"<input class=\"gen-box  gen-textbox\" id=\"input2\" type=\"text\">"
                	.	"<div class=\"gen-box gen-subtitle\">發文者</div>"
                	.	"<input class=\"gen-box gen-textbox\" id=\"input3\" type=\"text\">"
                	.	"<div class=\"gen-box gen-subtitle\">公告內容</div>"
			.	"<textarea class=\"gen-box gen-textarea\" id=\"input4\"></textarea>"
			.	"<div class=\"gen-box\"><button class=\"gen-button\" type=\"button\" onclick=\"getInputData()\">送出</button></div>"
			. "</div>";
              

                $result = array("css"=>$css, "js_par"=>$js_par, "js_body"=>$js_body, "html"=>$html);
		$result = json_encode($result);
                        
                return $result;
        }
?>
