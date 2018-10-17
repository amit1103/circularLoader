<!DOCTYPE html>
<html>
<head>
<title>DEMO - Circular Progress With CSS and jQuery</title>
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type='text/css'>
.cprogress { 
display: inline-block; 
position: relative; 
width: .2em; 
height: .2em; 
text-align: -webkit-match-parent;
font-size: 163px; 
cursor: default;   

} 
.cprogress:before { 
content: ''; 
display: block; 
position: absolute; 
width: 1em; 
height: 1em; 
-moz-border-radius: .5em; 
-webkit-border-radius: .5em; 
border-radius: .5em; 
opacity: .5; 
z-index: 0;
background: #df6c4f;  
} 

.cprogress:after { 
content: ''; 
display: block; 
position: absolute; 
top: .1em; 
left: .1em; 
width: .8em; 
height: .8em; 
-moz-border-radius: .5em; 
-webkit-border-radius: .5em; 
border-radius: .5em; 
z-index: 1; 
} 

.cprogress>#slice.gt50 { 
clip: rect(auto,auto,auto,auto); 
} 

.cprogress>#slice { 
position: absolute; 
width: 1em; 
height: 1em; 
clip: rect(0px,1em,1em,0.5em); 
} 
.cprogress>#slice>.pie { 
position: absolute; 
border: .1em solid #df6c4f; 
width: .8em; 
height: .8em; 
clip: rect(0em,0.5em,1em,0em); 
border-radius: .5em; 
} 


.cprogress>#slice>.pie.fill { 
-moz-transform: rotate(180deg)!important; 
-webkit-transform: rotate(180deg)!important; 
-o-transform: rotate(180deg)!important; 
transform: rotate(180deg)!important; 
} 

.percent {
font-size: 51px;
position: absolute;
text-align: center;
padding: 1em 0.5em 1em 0.5em;
width: 2.35em;
top: 0em;
left: 0em;
background: rgb(245, 245, 245);
border-radius: 8.35em;
font-weight: normal;
width:115px;
}

</style>
<script type='text/javascript'>

var p=10;
function timeout_trigger() {

$('#showProgress').html('<div class="percent"></div><div id="slice"'+(p > 50?' class="gt50"':'')+'><div class="pie"></div>'+(p > 50?'<div class="pie fill"></div>':'')+'</div>');

var deg = 360/100*p;

$('#showProgress #slice .pie').css({
'-moz-transform':'rotate('+deg+'deg)',
'-webkit-transform':'rotate('+deg+'deg)',
'-o-transform':'rotate('+deg+'deg)',
'transform':'rotate('+deg+'deg)'
});

var amit = 125;
$('#showProgress .percent').text(amit);

if(p!=100) {
setTimeout('timeout_trigger()', 50);
}

p++;
}
$(function(){
timeout_trigger();
});
</script>
</head>
<body>


<div class="cprogress" id="showProgress"></div>



</body>
</html>