<?php
        /* get url parameters */
        $name     = $_POST["name"];
        $identity = $_POST["identity"];
        $id       = $_POST["id"];
        $email    = $_POST["email"];
        $password = $_POST["password"];

        /*
        echo $name;
        echo $identity;
        echo $id;
        echo $email;
        echo $password;
        */


        /* check parameters type */
        $para_status = true;
        $para_status = $para_status && isString($name);
        $para_status = $para_status && isString($identity);
        $para_status = $para_status && isString($id);
        $para_status = $para_status && isEmail($email);
        $para_status = $para_status && isString($password);

        $re_data = "{";

        if ($para_status == false) {
                $re_data .= "\"para_status\":\"false\"";
                $re_data .= "}";
                echo $re_data;
                return ;
        } else {
                $re_data .= "\"para_status\":\"true\"";
        }


        /* connect to DB */
        include 'connectDB.php';
        $connect = connect_to_DB();
        $write_to_DB = false;

        if($connect != null) {
                $re_data .= ",";
                $re_data .= "\"DB_status\":\"true\"";

                // check parameter value
                if (is_user_id_repeat($connect, $id)) {
                        $re_data .= ",";
                        $re_data .= "\"error\":\"0\"";  //  user id duplic
                        $re_data .= "}";
                        echo $re_data;
                        return ;
                }

                // write data to DB
                if (user_apply_account($connect, $name, $identity, $id, $email, $password) == false) {
                        $re_data .= ",";
                        $re_data .= "\"error\":\"1\"";  //  write data to DB fail
                        $re_data .+ "}";
                        echo $re_data;
                        return ;
                }
        } else {
                $re_data .= ",";
                $re_data .= "\"DB_status\":\"false\"";
                $re_data .= "}";
                echo $re_data;
        }

        
        $re_data .= "}";
        echo $re_data;

        mysqli_close($connect);
        return ;
?>

<?php
        function isString($par) {
                if(is_string($par) && !empty($par)) {
                        return true;
                } else {
                        return false;
                }
        }

        function isEmail($par) {
                if(filter_var($par, FILTER_VALIDATE_EMAIL)) {
                        return true;
                } else {
                        return false;
                }
        }
?>

<?php
        function user_apply_account($connect, $name, $identity, $id, $email, $password) {
                $t_name = mysqli_real_escape_string($connect, $name);
                $t_identity = mysqli_real_escape_string($connect, $identity);
                $t_id = mysqli_real_escape_string($connect, $id);
                $t_email = mysqli_real_escape_string($connect, $email);
                $t_password = mysqli_real_escape_string($connect, $password);
                $t_time = date("Y-m-d h:i:s");

                $sql = "INSERT INTO user_register (user_name, user_identity, user_id, user_email, user_password, user_apply_time)
                        VALUES ('$t_name', '$t_identity', '$t_id', '$t_email', '$t_password', '$t_time')";

                if (!mysqli_query($connect, $sql)) {
                        //die('Error: ' . mysqli_error($connection));
                        return false;
                }

                return true;
        }

        function is_user_id_repeat($connect, $par) {
                $result = mysqli_query($connect,"SELECT * FROM user_account
                                                 WHERE user_id = '" . $par . "'");
                if ($row = mysqli_fetch_array($result)) {
                        return  true;      
                }

                $result = mysqli_query($connect,"SELECT * FROM user_register
                                                 WHERE user_id = '" . $par . "'");
                if ($row = mysqli_fetch_array($result)) {
                        return  true;      
                }

                return false;
        }
?>
