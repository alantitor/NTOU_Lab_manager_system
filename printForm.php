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
	} else if ($p1 == 1 && $p2 == 3) {
		include "formTemplate/dangerItemTable.php";
		$str = drawDangerItemTable();
	} else if ($p1 == 1 && $p2 == 4) {
		include "formTemplate/localGasTable.php";
		$str = drawLocalGasTable();
	} else if ($p1 == 1 && $p2 == 5) {	
		include "formTemplate/managerDataTable.php";
		$str = drawManagerDataTable();
	} else if ($p1 == 1 && $p2 == 6) {
		include "formTemplate/machineTable.php";
		$str = drawMachineTable();
	} else if ($p1 == 1 && $p2 == 7) {
		include "formTemplate/radiationTable.php";
		$str = drawRadiationTable();
	} else if ($p1 == 1 && $p2 == 8) {
		include "formTemplate/cylinderTable.php";
		$str = drawCylinderTable();
	} else if ($p1 == 1 && $p2 == 9) {
		include "formTemplate/labSecurityTable.php";
		$str = drawLabSecurityTable();
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
