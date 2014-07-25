<?php
// 基本資料表
//<input type="text" name="user-id" class="user-input" id="user-id" size="40" onchange="checkInput(2)">
        function drawBasicDataTable()
        {
                $str  = "";
                $str2 = "";
                
//  加入javascript


                $str  = "<div class=\"gen-title\">國立臺灣海洋大學安全衛生適用場所</div>";
                $str .= "<div class=\"gen-title\">基本資料表</div>";
                $str .= "<br>";
                $str .= "<br>";
                $str .= "<table class=\"gen-table\">";
                $str .= "<tr>";
                $str .=         "<td colspan=\"3\">";
                $str .=                 "<div>系所/中心<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "<tr>";
                $str .=         "<td colspan=\"3\">";
                $str .=                 "<div>場所名稱<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "<tr>";
                $str .=         "<td colspan=\"3\">";
                $str .=                 "<div>位置(館/樓/室)<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "<tr>";
                $str .=         "<td>";
                $str .=                 "<div>場所負責人<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>緊急聯絡電話<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>分機<input type=\"text\" size=\"10\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "<tr>";
                $str .=         "<td>";
                $str .=                 "<div>填表人/實驗室管理人<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>緊急聯絡電話及e-mail<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>分機<input type=\"text\" size=\"10\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "<tr>";
                $str .=         "<td>";
                $str .=                 "<div>化學品管理系統管理人<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>E-mail<input type=\"text\"></div>";
                $str .=         "</td>";
                $str .=         "<td>";
                $str .=                 "<div>分機<input type=\"text\" size=\"10\"></div>";
                $str .=         "</td>";
                $str .= "</tr>";
                $str .= "</table>";


                $str .= "<br>";
                $str .= "<br>";


                $str2  = "<div class=\"gen-title\">場所類別</div>";
                $str2 .= "<br>";
                $str2 .= "<br>";
                $str2 .= "<table class=\"gen-table\">";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"4\">";
                $str2 .=                "<div>本校分類(可複選)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"checkbox\" name=\"\" id=\"\">化學性(為 毒化物 非毒化物 先驅化學品 運作場所)</div>";
                $str2 .=        "</td>";
                $str2 .=        "<td rowspan=\"5\">";
                $str2 .=                "<div>";
                $str2 .=                        "兼具多種性質時，主要實驗性質為<br>";
                $str2 .=                        "<input type=\"checkbox\" name=\"\" id=\"\">化學性<br>";
                $str2 .=                        "<input type=\"checkbox\" name=\"\" id=\"\">物理性<br>";
                $str2 .=                        "<input type=\"checkbox\" name=\"\" id=\"\">生物性<br>";
                $str2 .=                        "<input type=\"checkbox\" name=\"\" id=\"\">輻射性<br>";
                $str2 .=                        "<input type=\"checkbox\" name=\"\" id=\"\">其他，請說明";
                $str2 .=                "</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"checkbox\" name=\"\" id=\"\">物理性(具有<input type=\"checkbox\" name=\"\" id=\"\">危險性<input type=\"checkbox\" name=\"\" id=\"\">非危險性<input type=\"checkbox\" name=\"\" id=\"\">機械設備)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"checkbox\" name=\"\" id=\"\">生物性(生物性防護層級<input type=\"checkbox\" name=\"\" id=\"\">BSL-1<input type=\"checkbox\" name=\"\" id=\"\">BSL-2<input type=\"checkbox\" name=\"\" id=\"\">BLS-3<input type=\"checkbox\" name=\"\" id=\"\">BL-4;<br>物理性防護層級<input type=\"checkbox\" name=\"\" id=\"\">P1<input type=\"checkbox\" name=\"\" id=\"\">P2<input type=\"checkbox\" name=\"\" id=\"\">P3<input type=\"checkbox\" name=\"\" id=\"\">P4;<br><input type=\"checkbox\" name=\"\" id=\"\">未申請安全鑑定)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"checkbox\" name=\"\" id=\"\">輻射性(密封 非密封 可發生游離輻射設備)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"checkbox\" name=\"\" id=\"\">其他(電腦室 其它，請說明)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"4\">";
                $str2 .=                "<div>教育部分類(勾選一項)</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td rowspan=\"7\">";
                $str2 .=                "<div>";
                $str2 .=                        "<input type=\"radio\" name=\"\" id=\"\">實(試)驗室<br>";
                $str2 .=                        "<input type=\"radio\" name=\"\" id=\"\">實習教室<br>";
                $str2 .=                        "<input type=\"radio\" name=\"\" id=\"\">實習供場";
                $str2 .=                "</div>";
                $str2 .=        "</td>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">化學</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">生物</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">醫學</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">農學</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">光電</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">機械</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "<tr>";
                $str2 .=        "<td colspan=\"3\">";
                $str2 .=                "<div><input type=\"radio\" name=\"\" id=\"\">土木</div>";
                $str2 .=        "</td>";
                $str2 .= "</tr>";
                $str2 .= "</table>";


                return $str . $str2;
        }
?>
