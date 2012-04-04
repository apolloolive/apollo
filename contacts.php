

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>联邦国际 - 联系我们</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/Mate_400.font.js" type="text/javascript"></script>
		<script src="js/FF-cash.js" type="text/javascript"></script>
		<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
			<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
		<![endif]-->
		
		
		
		
<script language="JavaScript">
// add form validation check
function checkform()
{
if(document.getElementById('name').value=="") 
{
alert("对不起！ 您没有输入姓名！");
document.getElementById('name').focus();
return false;
}
if(document.getElementById('contact').value=="")
{
alert("对不起！ 您没有输入联系方式");
document.getElementById('contact').focus();
return false;
}
if(document.getElementById('messageContent').value=="")
{
alert("对不起！ 您没有输入详细说明");
document.getElementById('messageContent').focus();
return false;
}
 var theForm=document.getElementById("contact-form");
 theForm.action = "sendMail.php";
 theForm.submit();

return true;
}
</script>


	</head>
	<body id="page5">
		<div class="extra">
			<div class="main">
<!--==============================header=================================-->
				<header>
					<div class="wrapper p4">

						<strong class="title-1">联邦国际</strong><strong class="title-2">学术咨询顾问公社</strong>
								
						Commonwealth Community of Academic Mutual Assistance
						<ul class="list-services">
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
						</ul>
				  </div>
					<nav>
						<ul class="menu">
							<li ><a href="index.html">首页</a></li>
							<li><a href="details.html">详细说明</a></li>
							<li><a href="recuit.html">人才招聘</a></li>
							<li><a href="support.html">问题与解答</a></li>
							<li class="last active"><a href="contacts.php">联系我们</a></li>
						</ul>
					</nav>
				</header>
<!--==============================content================================-->
				<section id="content"><div class="ic"><div class="inner_copy"></div></div>
					<div class="container_12">
						<div class="wrapper p4">
							<article class="grid_4">
								<div class="box">
									<div class="padding">
										<h3 class="p1">联系方式</h3>
										<dl>
											<dt><span>Reception：</span>077 7486 3932</dt>
											<dd><span>Office: </span>077 7486 3929</dd>
											<dd><span>QQ: </span>134 578 5556</dd>
											<dd><span>新浪微博 : </span>weibo.com/ccama</dd>
											<dt>&nbsp;</dt>
											<dd> lianbangccama@gmail.com</dd>
										</dl>
									</div>
								</div>
							</article>
							<article class="grid_8">
								<div class="box">
									<div class="padding">
										<h3 class="p1">联系我们 - 24 小时 为您提供解答</h3>
										<p class="p1">&nbsp;</p>
										<p>欢迎向我们咨询任何您认为重要的问题. </p>
										<p>我们专业的团队会给您 最针对 最精确的全面的回答 ！</p>
									</div>
								</div>
							</article>
						</div>
						<div class="wrapper">
							<article class="grid_12">
								<div class="indent-left2">
									<h3 class="p1">在线联系表格</h3>
									
								
									
									<form id="contact-form" name="contact-form" method="post" >
										<fieldset>
											  <label><span class="text-form">名字:</span><input name="name" id="name" type="text" /></label>
											  <label><span class="text-form">联系方式：</span><input name="contact"  id="contact" type="text"  /></label>
											  <div class="wrapper">
												<div class="text-form">具体事宜：</div>
												<div class="extra-wrap">
													<textarea name= "messageContent" id="messageContent"></textarea>
													<div class="clear"></div>
													<div class="buttons">
														<a class="button" href="#" onClick="document.getElementById('contact-form').reset()">重填表格</a>
														<a class="button"  onClick="checkform()" >发送</a>
														 
													</div>
												</div>
											  </div>
										</fieldset>
									</form>
								</div>
							</article>
						</div>
					</div>
					<div class="block"></div>
				</section>
			</div>
		</div>
<!--==============================footer=================================-->
		
	</body>
</html>