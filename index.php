<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1, minimum-scale=0.6, user-scalable=0">
<meta name="description" content="Wear your earphone">
<title>鸥鹭 · 时光邮局 | 信封开封动画</title>
<!--link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /-->
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="box">
	    <div class="bottom">
	        
	    </div>
	    <div class="open">
	        <img class="open_png" src="images/open.png">
	    </div>
	    <div class="top2">
	        
	    </div>
	    <div class="top">
	        <img class="img-top-open" src="images/open.png">
	    </div>
	    <div class="diceng">
	        <div class="zt">
	            <div style="width:100%; background:#fff;padding-top: 10px;">
				    <div style="width:200px;height:100px;background:url(images/logo.png) center no-repeat; margin:auto;background-size: contain;">
				    </div>
			    </div>
			    <div class="content">
			        <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
					这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试
				</p>
				<p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
					这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件
				</p>
				<p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
				这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试这是鸥鹭时光邮局测试邮件这是鸥鹭时光邮局测试
				</p>
				
			    </div>
	        </div>
	    </div>
	    <div class="shangceng">
	        <img class="email-yp" src="images/olsgyj_email.png">
	        <a class="foryou">For&nbsp;&nbsp;You</a>
	    </div>
	</div>
	<div id="num" style="display:none;">0</div>
	<script>
	    window.onload = function(){
	        load()
	    }
	    function load(){
	        var box = document.querySelector(".box");
	        var num = document.getElementById("num").innerHTML;
	        if(num == "0"){
	            document.getElementById("num").innerHTML = "1";
	            box.style.transform = "rotateY(180deg)";
	            var open = document.querySelector(".open");
	            var open_png = document.querySelector(".open_png");
	            var diceng = document.querySelector(".diceng");
	            var zt = document.querySelector(".zt");
	            var top = document.querySelector(".top");
	            var top2 = document.querySelector(".top2");
	            var bottom = document.querySelector(".bottom");
	            setTimeout(() => {
     			    open.style.zIndex = "110";
    			    open_png.style.transform = "rotate(-6deg)";
    			    setTimeout(() => {
    			        open.style.display = "none";
    			    },1000);
    			    diceng.style.transform = "rotateY(180deg)";
    			    diceng.style.zIndex = "101";
    			    top.style.zIndex = "107";
    			    top2.style.zIndex = "106";
    			    bottom.style.zIndex = "105";
    			    zt.style.zIndex = "104";
    			
     			    setTimeout(() => {
    			        diceng.style.zIndex = "103";
     			        top2.style.transition = "all 2s ease";
     			        top2.style.transform = "rotateX(90deg)";
     			        top2.style.zIndex = "103";
     			        setTimeout(() => {
     			            top.style.transition = "all 1.99s ease";
     			            top.style.transform = "rotateX(90deg)";
     			            top.style.zIndex = "101";
     			            top2.style.transform = "rotateX(180deg)";
     			            top2.style.boxShadow = "inset 0 0 0px 0px rgba(255, 255, 255, 0.6), 0 2px 3px -2px rgba(0, 0, 0, 0.6)";
     			            top.style.transform = "rotateX(180deg)";
     			            top.style.boxShadow = "none";
     			        },100);
     			    },900);
     			    setTimeout(() => {
     			        zt.style.height = "800px";
     			        box.style.marginBottom = "-400px";
    			    },1220);
			    },900);
	        }
	    }
	</script>
</body>
</html>