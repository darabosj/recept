<html>
<head>
<title></title>
<style>
#content {
	background-color : #dfdfdf;
	padding : 40px;
}

input , text, select{
	color: blue;
}

.new_input {
	padding-top : 40px;
	
}


ul.menu {
	font-size : 18;
	overflow : hidden;
	list-style-type : none ;
	
	background-color: #cfcfcf ;
	margin-left : 0px;
	padding-top : 0px;
	margin-top: 0px;
	
}

ul.menu li {
	float: left;
	
}
ul.menu li a:hover {
	background-color: white;
}

ul.menu li a {
	display: inline-block;
	color: #77aa77;
	text-align : center;
	padding : 14px 16px;
}



#list {
	border : solid;
	
}
#list,  tr {
	height: 50px;
	
}
th {
	width: 50px;
	padding-left: 20px;
	padding-right: 20px;
}

tr:hover {
	background-color: #bbbbdf;
}

#content {
	
	background-color : #efefef;
	margin : 20px;

}



</style>

</head>

<body>

<div >
<ul class="menu">
<li><?php echo anchor('karbantart/', 'karbantart', 'title="karbantart"');?></li>
<li><a href="#">receptek</a></li>
</ul>
</div>

<div id="content">
