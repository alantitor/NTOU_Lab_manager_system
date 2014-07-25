<?php
        /* check user identity */
        session_start();
        
        include 'connectDB.php';
        $connect = connect_to_DB();
        $server_error = false;
                
        if($connect != null) {
                $user_id = $_SESSION['userid'];
                $user_password = $_SESSION['userpassword'];
                $user_level = 0;
                $user_identity = "";
                $user_name = "";

                $result = mysqli_query($connect, "SELECT * FROM user_account
                                                  WHERE user_id = '" . $user_id . "' AND user_password = '" . $user_password . "'");
                if ($row = mysqli_fetch_array($result)) {
                        $user_level = $row['user_competence'];
                        $user_identity = $row['user_identity'];
                        $user_name = $row['user_name'];
                } else {
                        $server_error = true;
                }
        }

        mysqli_close($connect);
?>


<!DOCTYPS html>
<html>
<head>
	<meta charset="utf-8">
	<title>實驗室表單申請</title>

	<script src="js/jquery-1.11.1.js"></script>
	<link rel="stylesheet" type="texy/css" href="theme.css">

	<script>
		// use parameters decide print which form
                function trig(p1, p2)
                {
                        document.getElementById("print-form-area").innerHTML = "";
			var dataObj = "";

			dataObj = ""
				+ "p1=" + p1 + "&"
				+ "p2=" + p2;

			if(dataObj == "") {
				return ;
			} else {
                                responseData(dataObj);
                        }
                }

		// print form area content
		function responseData(dataObj)
		{			
			var xmlhttp;
			if (window.XMLHttpRequest)
			{ // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
  			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
	
			xmlhttp.onreadystatechange = function()
  			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    				{
                                        extraReturnMessage(xmlhttp.responseText);
    					//document.getElementById("print-area").innerText = xmlhttp.responseText;
                                        //alert(xmlhttp.responseText);
    				}

  			}
				xmlhttp.open("POST", "printForm.php", true);
				xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlhttp.send(dataObj);
		}

		// extra ajax return string of form part
                function extraReturnMessage(mes)
                {	
			//alert(mes);
			var jsonObj = JSON.parse(mes);
			//alert(jsonObj.js_par);
			getInputData = new Function(jsonObj.js_par, jsonObj.js_body);

			document.getElementById("print-form-area").innerHTML = jsonObj.css + jsonObj.html;
                }

		// dynamic create javascript function that handle submit button.  make json object
		var getInputData;
		
		var targetFormPHP;

		// use submit data as ajax parameter.  get return value check status
		function responseSubmitData(dataObj)
		{
			dataObj = "json=" + dataObj;
			alert("submit: " + dataObj);

			var xmlhttp;
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			//alert("rsd check");

			xmlhttp.onreadystatechange = function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					//alert("hello2: " + xmlhttp.responseText);
					extraReturnMessage2(xmlhttp.responseText);
				}
			}
				//xmlhttp.open("POST", "formTemplate/bulletinSubmit.php", true);
				xmlhttp.open("POST", targetFormPHP, true);
				xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlhttp.send(dataObj);
		}

		// extra ajax return string of submit data status
		function extraReturnMessage2(mes)
		{
			//alert("this is return message 2: " + mes);
			var jsonObj = JSON.parse(mes);

			if (jsonObj.status == "1") {  // 1 mean ok
				//alert(jsonObj.p1);
				document.getElementById("print-form-area").innerHTML = "<div id='systemMessage'>" + jsonObj.p1 + "</div>";
			} else if (jsonObj.status == "0") { // 0 mean error
				alert(jsonObj.p1);
			} else if (jsonObj.status == "2") { // 2 mean print form
				alert("json status 2");
				getInputData = new Function(jsonObj.js_par, jsonObj.js_body);
				document.getElementById("print-form-area").innerHTML = jsonObj.css + jsonObj.html;
			} else {  // no definition
				//alert("");
			}
		}

	</script>

	<style>
		body {
			margin: 0;
			border: 0;
			padding: 0;
		}

                #all-area {
                        margin: 0;
			padding: 0;
			border: 0;
                        font-family: 'Open Sans', sans-serif;
			font-size: 16px;
			font-weight: normal;
                        color: #555;
			display: block;
			text-decoration: none;
                }

		.use-cursor {
			cursor: pointer;
		}

		a:link {
			color: none;
		}

                #layout {
                        
                        min-height: 100%; 
			margin: 0px;
                }

		#menu-bar {
			width: 250px;
			max-width: 250px;
			font-size: 16px;
			line-height: 1.5;
			vertical-align: top;
			padding: 10px;
			background: #F1F1F1;
			color: #404040;
		}

		.title {
			color: #8AC007;
		}

		#form-content {
			width: 900px;
			padding: 20px;
			vertical-align: top;
			background: #fff;
		}

		.gen-title {
			margin: 5px 0;
			text-align: center;
			font-size: 22px;
		}

		.gen-subtitle {
			font-size: 16px;
			margin: 5px 0;
		}

		.gen-hr {
			width: 500px;
		}
		
		.gen-wrapper {
			width: 800px;
			margin: 30px auto;
		}

		.gen-box {
			margin: 5px 0;
		}

		.gen-button {
			
		}
		
		.gen-table {
			border: 1px solid black;
			width: 800px;
		}

		.gen-table tr {
			border: 1px solid black;
		}

		.gen-table td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
        <div id="outer-wrapper">
                <table id="layout">
                <tr>
                        <td class="wrapper" id="menu-bar">
                                <div class="title" id="list">分類選單</div>

				<div class="title" id="user-info">
					<?php
						echo "<div>你的名稱是" . $user_name . "<br></div>";
						echo "<div>你的身份是" . $user_identity . "<br></div>";
						echo "<div>你的ID是" . $user_id . "<br></div>";
					?>
				</div>                        	
				
				<div class="title use-cursor">
					<div onclick="trig(0, 0)">首頁</div>
				</div>

				<div id="menu">
                                	<?php
                                        	include 'printMenu.php';
	                                        $display_menu_list = "";
        	                                $display_menu_list = get_menu_list($user_level);
                	                        echo $display_menu_list;
                        	        ?>
				</div>

				<div class="title use-cursor">
					<div onclick="trig(0, 1)">登出</div>
				</div>
                        </td>
                        <td class="wrapper" id="form-content">
                                <div id="print-form-area"></div>
                        </td>

			<script>
				function temp()
				{
					alert("hello");
	

				}
			</script>


                </tr>
                </table>
        </div>
</body>
</html>
