<!DOCTYPS html>
<htm>
<head>
	<meta charset="utf-8">
	<title>實驗室相關資料申請</title>

	<script src="js/jquery-1.11.1"></script>
	<link rel="stylesheet" type="text/css" href="theme.css">

	<script>
		/* setting */
		function setting()
		{
		}

                function responseData()
		{		
                        //document.getElementById("print-area").innerHTML = "";

			//var dataObj = checkData();
			//if(dataObj == "") {
			//	return ;
			//}
			
			//alert(dataObj);

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
                                        //checkReturnMessage(xmlhttp.responseText);
    					//document.getElementById("print-area").innerText = xmlhttp.responseText;
                                        alert(xmlhttp.responseText);
                                        alert();
    				}

  			}
				xmlhttp.open("POST", "login.php", true);
				xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlhttp.send("hello");
		}

                function checkData()
                {
                        alert("ok");
                }
	</script>

	<style>
		body {
			margin: 0;
			border: none;
			padding: 0;
			width: 100%;
			min-width: 700px;
			color: #343434;
			background: #f1f1f1;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			font-size: 18px;
			line-height: 1.54;
			word-wrap:break-word;
		}

		.wrapper {
			width: 100%;
			min-width: 700px;
		}

		header {
			height: 70px;
		}

		article {
			position: absolute;
			top: 70px;
			bottom: 90px;
			background: #fff;

				
		}  

		footer {
			position: absolute;
			bottom: 0px;
			height: 90px;
			color: #fff;
			background: #03a9f4;
			font-size: 14px;
		}

		#title {
			padding: 10px;
			text-align: center;
			font-size: 24px;
		}

		#art-container {

		}
	
		#art-container .box {
			display: block;
		}

		#box-input-form {
			margin:  30px auto;
			width: 250px;
		}

		#box-info {
			margin:  0 auto;
			width: 70%;
			min-width: 400px;
		}

	</style>
</head>
<body>
	<!-- title block -->
	<header class="wrapper">
		<div id="title">海洋大學實驗室相關文件申請</div>
	</header>

	<!-- content block -->
	<article class="wrapper">
		<div id="art-container">
			<section class="box">
				<div id="box-input-form">
					<div>使用者名稱</div>
					<div><input type="text" name="username"></div>
					<div>密碼</div>
					<div><input type="text" name="userpassword"></div>
					<div><button type="button" onclick="responseData()">登入</button></div>
					<div>沒有帳號？<a href="register.html">申請</a>一組帳號</div>
				</div>
			</section>

			<section class="box">
				<div id="box-info">
					<div>info</div>
				</div>
			</section>
			
		</div>
	</article>

	<!-- licence block -->
	<footer class="wrapper">
		<div>licence</div>
		<div>國立臺灣海洋大學___組</div>
		<div>author</div>
	</footer>
</body>
</html>
