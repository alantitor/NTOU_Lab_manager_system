<?php
        function get_menu_list($level) {
                $display_str = "";
                $str = "";

                if ($level == "0") {  //  passenger

                } else if ($level == "1") {  // for student

                } else if ($level == "2") {  // no this one

                } else if ($level == "3") {  // for teacher

                } else if ($level == "4") {  // no this one

                } else if ($level == "5") {  // for administer
                        $str =  "<ul>"
                             .  "<li>資料搜尋"
                             .          "<ul>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(1, 1)\">基本資料表</li>"
		             . 		"<li class=\"use-cursor\" onclick=\"trig(1, 2)\">人員名冊</li>"
		   	     . 		"<li class=\"use-cursor\" onclick=\"trig(1, 3)\">危害物及毒化物資料表</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(1, 4)\">局部排氣裝置資料表</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(1, 6)\">機械及設備資料表</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(1, 7)\">輻射性資料表</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(1, 8)\">鋼瓶資料表</li>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(1, 5)\">管理資料調查表</li>"
			     //.		"<li class=\"use-cursor\" onclick=\"trig(1, 9)\">實驗場所勞安資料調查表目錄</li>"
                             .          "</ul>"
                             .  "</li>"
                             .  "<li>資料修改"
                             .          "<ul>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(2, 1)\">基本資料表</li>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(2, 2)\">人員名冊</li>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(2, 3)\">危害物及毒化物資料表</li>"
			     . 		"<li class=\"use-cursor\" onclick=\"trig(2, 4)\">局部排器裝置資料表</li>"
			     .          "<li class=\"use-cursor\" onclick=\"trig(2, 5)\">管理資料調查表</li>"
			     .          "<li class=\"use-cursor\" onclick=\"trig(2, 6)\">機械及設備資料表</li>"
			     .          "<li class=\"use-cursor\" onclick=\"trig(2, 7)\">輻射性資料表</li>"
			     .          "<li class=\"use-cursor\" onclick=\"trig(2, 8)\">鋼瓶資料表</li>"
			     .          "<li class=\"use-cursor\" onclick=\"trig(2, 9)\">實驗場所勞安資料調查表目錄</li>"
                             .          "</ul>"
                             .  "</li>"
                             .  "<li>其他"
                             .          "<ul>"
                             .          "<li class=\"use-cursor\" onclick=\"trig(3, 1)\">張貼公告</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(3, 2)\">公告管理</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(3, 3)\">修改個人資料</li>"
			     .		"<li class=\"use-cursor\" onclick=\"trig(3, 4)\">帳號管理</li>"
                             .          "</ul>"
                             .  "</li>"
                             .  "</ul>";
     




                                  
                        $display_str = $str;
                } else {
                        // error
                }

                return $display_str;
        }
?>
