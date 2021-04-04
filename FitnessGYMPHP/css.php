@import url('https://fonts.googleapis.com/css?family=Oswald:300,400,600,700&display=swap');

body {
	margin:0;
	padding:0;
}

*{
	box-sizing: border-box;
	margin:0;
	padding:0;
	font-family: 'Oswald', sans-serif;
}
header {
	position: absolute;
	left: 0px;
	top: 0pc
	width: 100%;
	z-index: 10;
	padding:20px 15px;
}
header .container{
	display: flex;
	justify-content: space-between;
	align-items: center;
}

header.logo a{
	font-siza: 30px;
	text-decoration: none;
	color:#ffffff
	font-weight: 700;     
	  background-color: #c11325;
      width: 280px;
      top: 0;
      right: 0;
      height: 100%;
      z-index: 99;
      padding:100px 0px 15px
      -webkit-transform: translateX(100%);
      transform: translateX(100%);
      -webkit-transition: transform .5s ease;  
	  transition: transform .5s ease;
}
header .nav.open{

	-webkit-transform: translateX(0);
	transform: translateX(0);
}

header .nav ul{
	list-style: none;
	margin: 0;
	padding:0px;
}
header .nav ul li{
	display: block;
}       
header .nav ul li a {
 text-decoration: none;
 font-size: 30px;
 font-weight: 400;
 color:#ffffff;
 display: block;
 position: relative; 
 padding: 10px 30px;
}
header .nav ul li a::before{
	content: '';
	position: absolute;
	left:0px;
	top:0px;
	height: 100%
	width:0px;
	background-color: #000000
	opacity:.2;
	-webkit-transition: width 5s ease;  
	transition: width 5s ease;
	z-index: : -1;
}
header.nav ul li a:hover::before{
	width: 100%;
}
header.ham-burger{
	display: inline-block;
	position: relative;
	z-index: 100;
}
header .ham-burger span{
	height: 3px;
	margin-bottom:8px;
	display: flex;
	background-color:#ffffff;
	width: 30px; 
	-webkit-transition: transform .5s ease;  
	transition: transform .5s ease;
}
header .ham-burger span:nth-child(1){
	transform-origin: : left top;
}
header .ham-burger span:nth-child(2){
	transform-origin: : left bottom;
	}
	header .ham-burger.active span:nth-child(1){
	transform: rotate(45deg) translateY(6px)
}
header .ham-burger.active span:nth-child(2){
transform: rotate(-45deg)  translateY(-6px)
	}


.container{
	max-width: 1170px;
	margin: auto; 
}

.home{
	height: 100vh;
	background-image: url('../images/home.jpg');
	background-size: cover;
	padding: 15px;
	-webkit-display: flex;
	display: flex;
}
	

.home.container{
	display:flex;
}

.home h1{
	color:#ffffff;
	font-size: 60px;
	font-weight: 700;
}

.home h2{
	color:#ffffff;
	font-size: 50px;
	font-weight: 700;
}


