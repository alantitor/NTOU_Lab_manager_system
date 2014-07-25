<?php
/*
 * use trig(p1, p2)
 */        
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];

        // 用session data檢查權限


        $str = "";

        if ($p1 == 0 && $p2 == 0) {  // print mainpage
			
		
	} else if ($p1 == 0 && $p2 == 1) {  // logout


	} else if ($p1 == 1 && $p2 == 1) {
                include "formTemplate/basicDataTable.php";
                $str = drawBasicDataTable();
	} else if ($p1 == 1 && $p2 == 2) {
		include "formTemplate/peopleRoll.php";
		$str = drawPeopleRoll();
        } else if ($p1 == 2 && $p2 == 1) {
                include "formTemplate/userRequireAccount.php";
                $str = drawBasicDataTable();
        } else if ($p1 == 3 && $p2 == 1) {
                include "formTemplate/bulletin.php";
                $str = drawBulletin();
        } else if ($p1 == 3 && $p2 == 2) {
		include "formTemplate/bulletinModify.php";
		$str = drawBulletinModify();
	} else {
                //
        }


        echo $str;
?>
