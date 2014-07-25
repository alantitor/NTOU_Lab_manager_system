<?php
/*
 * identify user information.
 * if you have account, then go to form.php page
 * else go to home page
 */

        /* get post parameters */
        $user_id     = $_POST["userid"];
        $user_password = $_POST["userpassword"];
        //echo $user_name . " " . $user_password;

        
        /* check data content */
        $check_flag = true;
        $check_flag = $check_flag && isString($user_id);
        $check_flag = $check_flag && isString($user_password);
        
        if($check_flag == false) {
                //  parameters not correct
                header('Location: index.php');
                return ;
        }

        include 'connectDB.php';
        $connect = connect_to_DB();

        if($connect != null) {
                if (is_user_id_exist($connect, $user_id, $user_password) == true) {
                        session_start();                        
                        $_SESSION['userid'] = $user_id;
                        $_SESSION['userpassword'] = $user_password;

                        header('Location: form.php');
                } else {
                        header('Location: index.php');
                        return ; 
                }
        } else {
                header('Location: index.php');
                return ; 
        }

        mysqli_close($connect);
?>

<?php
        function isString($par) {
                if(is_string($par) && !empty($par)) {
                        return true;
                } else {
                        return false;
                }
        }
?>

<?php
        function is_user_id_exist($connect, $userid, $userpassword) {
                $result = mysqli_query($connect, "SELECT * FROM user_account
                                                  WHERE user_id = '" . $userid . "' AND user_password = '" . $userpassword . "'");
                if ($row = mysqli_fetch_array($result)) {
                        return  true;      
                }

                return false;
        }
?>
