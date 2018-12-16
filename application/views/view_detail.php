<!DOCTYPE HTML>
<html>
<head>
<title>Detail Artikel</title>
<style type=”text/css”>
#kotak
{
width: 40%;
height: 25%;
background-color:lightgreen;
float: left;
}
.isi
{
color: black;
}
</style>
</head>
<body>
<div id=”kotak”>
<?php foreach ($artikel as $row):?>
<h1><?php echo $row->judul;?></h1>
<p><?php echo $row->isi;?></p>
<?php endforeach;?>
</div>
</body>
</html>