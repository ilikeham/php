<style>
 b {
	color:red;  
	font-weight:normal;
	background-color:#000000;
 }

 #hellobox {
width:500px;
height:300px;
border:1px solid #ff0000;
padding:10px;
margin:10px;
position:absolute;
top:20px;
right:20px;
}
.nicename{
font-weight:bold;
font-size:20px;
text-decoration:underline;
cursor:pointer;
}
</style>
 <div id="hellobox"> hello world</div>

<?php

 for($i=0; $i<1000; $i++) {
echo $i . "<b>~Hello</b>,<span class='nicename'> Hyerim OH :-) <br >";
}
?>
