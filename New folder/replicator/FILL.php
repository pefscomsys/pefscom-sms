<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Build CRUD DataGrid with jQuery EasyUI - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="js/easyui.css">
	<link rel="stylesheet" type="text/css" href="js/icon.css">
	<link rel="stylesheet" type="text/css" href="js/demo.css">
	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="js/jquery.edatagrid.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_users.php',
				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php'
			});
		});
	</script>
</head>
<body>
	<h2>CRUD DataGrid</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>Double click the row to begin editing.</div>
	</div>
	
	<table id="dg" title="NISHANG SYSTEMS SHEET" style="width:80%;height:750px; font-size:16px"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="fname" width="40" editor="{type:'validatebox',options:{required:true}}">Names</th>
				<th field="matricule" width="30" editor="{type:'validatebox',options:{required:true}}">Matricule</th>
				<th field="db1" width="30" editor="text">Accademic Year</th>
                <th field="sex" width="50" editor="text">Sex</th>
                <th field="c110" width="30" editor="text">Categoty</th>
                
                <th field="c111" width="30" editor="text">Extra</th>
                <th field="photo" width="30" editor="text">Photo</th>
                <th field="levels" width="20" editor="text">Levels</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
    <ul>
    <li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a></li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a></li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a></li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a></li>
        		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Serach Records</a></li>
</li>
</ul>
	</div>
	
</body>
</html>