<!--
	所有公告
	// 格式：json  // maybe next version
-->

<!DOCTYPS html>
<html>
<head>
	<meta charset="utf-8">
	<title>歷史公告</title>

	<script src="js/jquery-1.11.1"></script>
	<link rel="stylesheet" type="text/css" href="">

	<script>

	</script>

	<style>

	</style>
</head>
<body>
	<div id="out-wrapper">
		<div id="wrapper">
			<header id="masthead">
				<h2>歷史公告</h2>
			</header>

			<div id="main-content">
				bulletin is here.
				<div id="print-bulletin-area"></div>
			</div>
		</div>
	</div>
</body>


<?php

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
        $temp_string .= "<tr>";
        $temp_string .= "<td>主題</td><td>作者</td><td>發佈單位</td><td>時間</td>";
        $temp_string .= "</tr>";


        /* connect to DB */
        include 'connectDB.php';
        $connect = connect_to_DB();

        if ($connect != null) {
                $query_result = mysqli_query($connect, "SELECT * FROM bulletin WHERE DATE(time) = DATE(NOW())");
                                                
                while ($row = mysqli_fetch_array($query_result)) {
                        $id = $row['id'];
                        $time = $row['time'];
                        $unit = $row['unit'];
                        $author = $row['author'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $hidden = $row['hidden'];                     
                
                        if ($hidden == 0) {  // do not show this one
                                continue;
                        } else {
                                $temp_string .= "<tr>";
                                $temp_string .= "<td id=\"gen-td-id\">" . $title . "</td>";
                                $temp_string .= "<td id=\"gen-td-author\">" . $author . "</td>";
                                $temp_string .= "<td id=\"gen-td-unit\">" . $unit . "</td>";
                                $temp_string .= "<td id=\"gen-td-time\">" . $time . "</td>";
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
