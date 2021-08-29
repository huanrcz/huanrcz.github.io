<!DOCTYPE html>
<html lang="zh-cn" >

<head>
<meta charset="UTF-8">
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
<title>正在跳转网页…</title>
<style>
body {
  background-color: #2F3242;
}
footer {
  left: 450px;
  height: 50px;
  position: absolute;
  bottom: 15px;
}
svg {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -250px;
  margin-left: -400px;
}
.message-box {
  height: 200px;
  width: 380px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -140px;
  margin-left: 80px;
  color: #FFF;
  font-family: Roboto;
  font-weight: 300;
}
.message-box h1 {
  font-size: 60px;
  line-height: 46px;
  margin-bottom: 40px;
}
.buttons-con .action-link-wrap {
  margin-top: 45px;
}
.buttons-con .action-link-wrap a {
  background: #68c950;
  padding: 8px 30px;
  border-radius: 4px;
  color: #FFF;
  font-weight: bold;
  font-size: 18px;
  transition: all 0.3s linear;
  cursor: pointer;
  text-decoration: none;
  margin-right: 10px
}
.buttons-con .action-link-wrap a:hover {
  background: #5A5C6C;
  color: #fff;
}

#Polygon-1 , #Polygon-2 , #Polygon-3 , #Polygon-4 , #Polygon-4, #Polygon-5 {
  -webkit-animation: float 1s infinite ease-in-out alternate;
          animation: float 1s infinite ease-in-out alternate;
}
#Polygon-2 {
  -webkit-animation-delay: .2s;
          animation-delay: .2s; 
}
#Polygon-3 {
  -webkit-animation-delay: .4s;
          animation-delay: .4s; 
}
#Polygon-4 {
  -webkit-animation-delay: .6s;
          animation-delay: .6s; 
}
#Polygon-5 {
  -webkit-animation-delay: .8s;
          animation-delay: .8s; 
}

@-webkit-keyframes float {
	100% {
    -webkit-transform: translateY(20px);
            transform: translateY(20px);
  }
}

@keyframes float {
	100% {
    -webkit-transform: translateY(20px);
            transform: translateY(20px);
  }
}
@media (max-width: 450px) {
  svg {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -250px;
    margin-left: -190px;
  }
  .message-box {
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -190px;
    text-align: center;
  }
}
</style>
</head>

<body>
    <svg width="380px" height="500px" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup"></path>
    </g>
    </svg>
    <div class="message-box">
    <p id="label1"></p>
    <p id="label2"></p>
    <div class="buttons-con">
        <div class="action-link-wrap">
            <a class="link-button" id="redirect">立即跳转</a>
        </div>
    </div>
    </div>
	<?php
		$IP = "<script>document.writeln(returnCitySN['cip']);</script>";
		$data = file_get_contents("https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query=".$IP."&resource_id=6006&ie=utf-8&oe=utf-8");
		$array = json_decode($data,true);
		$query['location'] = $array['data']['0']['location'];
	?>
	<script>
		document.getElementById('label1').innerHTML = '<font size=6>焕然创作 Huanrcz.</font>';
		document.getElementById('label2').innerHTML = '<font size=5>正在跳转到焕然创作官网，请稍后…</font>';
		function bundle(site){
			window.location.href = site;
		}
		var text = '<?php echo $query['location'] ?>';
		alert(text);
        var bundler = text.slice(0,3);
        if (bundler == "浙江省"){
			window.setTimeout("bundle(\"http://42.192.117.62:2010\")",3000);
			document.getElementById("redirect").href = "http://42.192.117.62:2010";
        }
		else{
			window.setTimeout("bundle(\"https://www.baidu.com\")",3000);
			document.getElementById("redirect").href = "https://www.baidu.com";
		}
    </script>
</body>
<footer>
	<h4 id="foot"><h4>
	<script>document.getElementById("foot").innerHTML = '<font color=white><center>Copyright © 2021 Huanrcz. All rights reserved.</center></font>';</script>
</footer>
</html>