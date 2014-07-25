<?php
// 使用者帳號申請處理
//<input type="text" name="user-id" class="user-input" id="user-id" size="40" onchange="checkInput(2)">
        function drawBasicDataTable()
        {
                $str  = "";
                $result_string = "";
                
                $user_name = "";
                $user_identity = "";
                $user_id = "";
                $user_email = "";
                $user_password = "";
                $user_apply_time = "";
                $admin_accept = "";    

                $str  = "<div class=\"gen-title\">使用者帳號申請處理</div>";
                $str .= "<br><br>";

   
                include 'connectDB.php';
                $connect = connect_to_DB();

                if($connect != null) {        
                        $str .= "<table border=\"1\">";
                        $str .= "<tr><td>姓名</td><td>身份</td><td>身份號碼</td><td>電子信箱</td><td>密碼</td><td>申請時間</td><td>已經審查通過</td></tr>";

                        $result = mysqli_query($connect, "SELECT * FROM user_register");
                        while ($row = mysqli_fetch_array($result)) {
                                $str .= "<tr>";
                                $str .= "<td>" . $row['user_name'] . "</td>";
                                $str .= "<td>" . $row['user_identity'] . "</td>";
                                $str .= "<td>" . $row['user_id'] . "</td>";
                                $str .= "<td>" . $row['user_email'] . "</td>";
                                $str .= "<td>" . $row['user_password'] . "</td>";
                                $str .= "<td>" . $row['user_apply_time'] . "</td>";
                                $str .= "<td>" . $row['admin_accept'] . "</td>";
                                $str .= "</tr>";
                        }

                        $str .= "</table>";
                } else {
                        $str .= "<div>系統錯誤，請稍後使用</div>";
                }


                //mysqli_close($connect);
                $result_string .= $str;
                return $result_string;
        }
?>
