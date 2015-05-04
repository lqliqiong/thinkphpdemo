<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>西城文保</title>
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/static/node_modules/bootstrap/dist/css/bootstrap.css">
	<style type="text/css">
	  html ,body {
          height: 100%;
		}
		.head{
			height:135px;
			background-color: pink;
		}

		.tool{

		}	
		.tool .left{

		} 
		.tool .right{

		}
		.main{
			height:500px;

		} 
		.main .left{
			height:100%;
			background-color: green;
		}
		.layercontrol{
			//图层管理面板样式
		}
		.main .right{
			height:100%;
			background-color: black;
		}
		.bottom {			 
			position: fixed;
			bottom:0; left: 49%;
			text-align:center;
			background-color: black;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row head">
			<div class="col-md-10 " >

				<ul class="nav nav-pills nav-justified" >
					<li role="presentation" class="active"><a href="#">西城区文物</a></li>
					<li role="presentation"> <a href="#">修缮工程</a></li>
					<li role="presentation"><a href="#">古代建筑与重要建筑</a></li>
					<li role="presentation"><a href="#">法律法规</a></li>
					<li role="presentation"><a href="#">西城区概况</a></li>
					<li role="presentation"><a href="#">历史地图</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" placeholder="输入搜索内容">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">搜索</button>
					</span>
				</div><!-- /input-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						你好，<?php echo session('loginUserName');?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">修改密码</a></li>
						<li><a href="#">修改昵称</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo U('Home/Login/logout');?>">退出</a>
						</ul>
					</div>

				</div>
			</div>
			<div class="row tool">
				<div class="col-md-3 left">
					<div class="input-group input-group-sm">
						<input type="text" class="form-control" placeholder="输入搜索内容">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">搜索</button>
						</span>
					</div><!-- /input-group --></div>
					<div class="col-md-9 right">
						<button class="btn btn-default" type="button">工具1</button>
						<button class="btn btn-default" type="button">工具2</button>
						<button class="btn btn-default" type="button">工具3</button>
						<button class="btn btn-default" type="button">工具4</button>
						<button class="btn btn-default" type="button">工具5</button>
						<button class="btn btn-default" type="button">工具6</button>
						<button class="btn btn-default" type="button">工具7</button>
					</div>
				</div>
				<div class="row main">
					<div class="col-md-3 left">
					    <div >图层控制面板控制按钮</div>
						<div class="layercontrol"> 图层控制面板</div>
						<div>菜单容器</div>
						<div>结果列表</div>
					</div>
					<div class="col-md-9" > 
					    <div>三维地图容器控制按钮</div>
						<div>三维地图容器</div>
						<div>详细信息容器</div>
					</div>

				</div>
				<div class="row bottom">
					<div class="col-md-12">
						版权信息
					</div>

				</div>

			</div> 

		</body>
		<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/static/node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/static/node_modules/bootstrap/dist/js/bootstrap.js"></script>

		</html>