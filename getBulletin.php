<?php
// 取得公告內容並回傳到首頁
// 格式：json  // maybe next version
function printBulletin()
{
        $temp_string = "";
        $reult_string = "";
        $id = "";
        $time = "";
        $unit = "";
        $author = "";
        $title = "";
        $content = "";
        $hidden = "";
        
	
        $temp_string  = "<table id=\"gen-table\">";
        $temp_string .= "<tr id=\"gen-bulletin-tr\">";
        $temp_string .= "<td width='200'>時間</td><td width='150'>發佈單位</td><td width='150'>發佈者</td><td>標題</td>";
        $temp_string .= "</tr>";


        /* connect to DB */
        include 'connectDB.php';
        $connect = connect_to_DB();

        if ($connect != null) {
                //$query_result = mysqli_query($connect, "SELECT * FROM bulletin WHERE DATE(time) = DATE(NOW())");  // order data by time, list 20 data.
		$query_result = mysqli_query($connect, "SELECT * FROM bulletin ORDER BY time DESC LIMIT 20");  // (DESC)descend or (ASC)ascend

                while ($row = mysqli_fetch_array($query_result)) {
                        $time = $row['time'];
                        $unit = $row['unit'];
                        $author = $row['author'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $status = $row['status'];                     
                
                        if ($status == 1) {
                                $temp_string .= "<tr>";
                                $temp_string .= "<td id=\"gen-a1\">" . $time . "</td>";
				$temp_string .= "<td id=\"gen-a2\">" . $unit . "</td>";
				$temp_string .= "<td id=\"gen-a3\">" . $author . "</td>";
				$temp_string .= "<td id=\"gen-a4\">";  // add content in <td>
				$temp_string .= "<p>" . $title . "</p>";
				$temp_string .= "<p>" . $content . "</p>";
				$temp_string .= "</td";
                                $temp_string .= "</tr>";
                        }
                }
                
        } else {
                 $result_string .= "Database Error";
        }

        $temp_string .= "</table>";

        $result_string .=  $temp_string;
        mysqli_close($connect);
        return $result_string; 
}
?>
