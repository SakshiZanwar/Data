<!DOCTYPE html>
<html>
	<head>
		<title>right-aligned dropdown content property</title>
		<style>
			#drop {
				background-color: teal;
				color: white;
				padding: 10px;
				font-size: 16px;
				width: 200px;
				height: 60px;
				border-radius: 5px;
				font-size: 20px;
			}
			#drop-down {
				position: relative;
				display: inline-block;
			}
			#dropdown-menu {
				display: none;
				position: absolute;
				background-color: #666;
				width: 160px;
				margin-left:-45px;
				border-radius: 5px;
				z-index: 1;
			}
			#dropdown-menu a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}
			.gfg {
				font-size:40px;
				font-weight:bold;
				color:#009900;
				Text-align:center;
			}
			p {
				font-size:20px;
				font-weight:bold;
				text-align:center;
			}
			#dropdown-menu a:hover {background-color: #ddd;}
			#drop-down:hover #dropdown-menu {display: block;}
		</style>
	</head>
	<body>
		<p>Right-aligned Dropdown content property</p>
		<div id="drop-down" style=" float: right; margin-right: 70px;">
			<button id="drop">DropDown</button>
			<div id="dropdown-menu">
				<a href="">Item 1</a>
				<a href="">Item 2</a>
				<a href="">Item 3</a>
				<a href="">Item 4</a>
			</div>
		</div>
	</body>
</html>					