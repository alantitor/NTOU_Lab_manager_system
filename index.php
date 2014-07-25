<!--
        main page of this web project
-->


<!DOCTYPS html>
<htm>
<head>
	<meta charset="utf-8">
	<title>海洋大學實驗室管理系統</title>

	<script src="js/jquery-1.11.1"></script>
	<link rel="stylesheet" type="text/css" href="theme.css">

	<script>
		/* setting */
		function setting()
		{
		        //
		}

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
                                        alert(xmlhttp.responseText);
                                        processBulletin(xmlhttp.responseText);
    				}

  			}
				xmlhttp.open("POST", "getBulletin.php", true);
				xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlhttp.send(dataObj);
		}
		
		function processBulletin(data)
		{
		        var mes = "";
		        
		        alert(data);
		        
		        
		        
		        document.getElementById("bulletin-display").innerHTML = mes;
		}

                function checkData()
                {
                        alert("ok");
                }
	</script>

	<style>
	        body {
	                color: #fff;
	                font-size: 16px;
	                line-height: 20px;
	                font-family: 'Open Sans', sans-serif;
	                background: #fff;
	                margin: 0;
	                padding: 0;
	                border: 0;
	                display: block;
	        }

		a:link {text-decoration: none; color:inherit;}
		a:visited {text-decoration: none; color:inherit;}
		a:hover {text-decoration: none; color:inherit;}
		a:active {text-decoration: none; color:inherit;}
	
	        #outer-wrapper {   
	                /*background: url(/media/image/nightly-bg.png);*/
	                background: #2d3e50;
	        }
	        
	        #wrapper {
	                margin: 0 auto;
	                padding: 50px;
	                width: 900px;
	                position: relative;
	                display: block;
	        }
	
	        #masthead {
	                text-align: center;
	                font-size: 30px;
	                font-weight: 10;
	                line-height: 60px;
	                color: #eabc04;
	        }
	        
	        #main-content {
	                margin: 0 auto;
	                color: #888;
	        }
	
	        #box-input-form{
	                width: 50%;
	                margin: 50px auto;
	                color: #b8e779;
	        }
	        
	        #bulletin {
	                margin: 50px auto;
	        }
	        
	        #bulletin-title {
                        text-align: center;
                        font-size: 20px;
                        color: #b8e779;
	        }
	        
	        #bulletin-display {
	                border-radius: 10px;
	                background: #f1f1f1;
	        }
	        
	        #gen-table {
	                width: 100%;
	                color: #404040;
	                font-size: 20px;
	                padding: 7px 5px 7px 5px;
	                vertical-align: center;
	                
	        }
	        
		#gen-table td {
			border-bottom: 1px solid black;
		}

	        #gen-table tr:nth-child(odd) {
	                background: #f1f1f1;
	        }
	
                #footer {
                        color: #666;
                        background: #fff;
                        display: block;
                }
                
                #footer-content {
                        width: 50%;
                        margin: 0 auto;
                        padding: 20px;
                        display: block;
                        position: relative;
                }
                
                #footer-content > div{
                        float: left;
                        margin: 0 30px;
                }
                
                #sub-footer ul{
                        list-style-type: none;
                }
                
                #logo-image {
                        width: 80px;
                        height: auto;
                }
	</style>
</head>
<body>
        <div id="outer-wrapper">
                <div id="wrapper">
                      <header id="masthead">
                        <h2>海洋大學實驗室管理系統</h2>
                      </header>
                        
                      <div id="main-content">
                        <div id="login-form">
                                <div id="form-content">
                                        <form id="box-input-form" action="login.php" method="post">
                                                <div>使用者學生學號或教職員號碼</div>
                                                <div><input type="text" name="userid"></div>
                                                <div>密碼</div>
                                                <div><input type="password" name="userpassword"></div>
                                                <div><input type="submit" value="登入"></div>
                                                <div>忘記密碼</div>
                                        </form>
                                </div>
                        </div>
                        <div id="bulletin">
                                <div id="bulletin-title">公告</div>
                                <div id="bulletin-display">
                                <?php
                                        include 'getBulletin.php';
                                        $display_data = printBulletin();
                                        echo $display_data;
                                ?>
                                </div>
				<div id="bulletin-title"><a href="getBulletinHistory.php">歷史公告</a></div>
                        </div>
                      </div>  
                </div>
                
                <footer id="footer">
                        <div id="footer-content">
                                <div id="footer-logo">
                                        <a href="http://www.ntou.edu.tw" target="_blank">
                                                <img id="logo-image" alt="ntou" src="/media/image/ntou_logo.png">
                                        </a>
                                </div>
                                <div id="sub-footer">
                                        聯絡我們<br>
                                        總務處環安組<br>
                                        辦公室：location<br>
                                        電話：886-2-24622192 ext.1100
                                </div>
                                <div id="copyright">
                                        版權條款<br>
                                        &#169;2014國立臺灣海洋大學
                                </div>
                        </div>
                </footer>
        </div>
</body>
</html>
