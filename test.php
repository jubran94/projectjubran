<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
  <div class="btn-group">
    <button class="btn">Please Select From List</button>
    <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret">></span>
   </button>
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
   <li><a tabindex="-1" href="#">Item I</a></li>
   <li><a tabindex="-1" href="#">Item II</a></li>
   <li><a tabindex="-1" href="#">Item III</a></li>
   <li class="divider"></li>
   <li><a tabindex="-1" href="#">Other</a></li>
 </ul>
</div>
</body>
<script>
$(function(){

  $(".dropdown-menu li a").click(function(){

    $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
  });

});</script>
</html>
