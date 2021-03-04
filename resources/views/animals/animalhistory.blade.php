<!DOCTYPE html> 
<html> 

<head> 
	<title> 
        show hostory list
    </title> 

    <style>
    body{
        background-color:	rgb(242, 242, 242);
    }
    .card{
        background-color: 	rgb(255, 255, 255);
        margin-bottom: 5px;
    }
    .content{
        padding: 5px;
    }
    .p3 {
        font-family: "Lucida Console", "Courier New", monospace;
        font-size: 12px;
        
    }
    .cowtitle{
      font-family: "Lucida Console", "Courier New", monospace;
      font-size: 12px;
      padding:5px;
      background-color: #d6d6c2;
      text-align: center;
    }
    a:link {
      text-decoration: none;
    }
    </style>

</head> 
<body> 
<div>
    <div class="content">
        <p><span class="p3 cowtitle" >COW NAME</span>&nbsp;<span class="p3 cowtitle">AGE:4</span></p>
    </div>
</div>

<div class="card">
    <div class="content">
        <p><span class="p3" style="color:#4d4dff">title of history</span><br><span class="p3">Date:2/23/2021</span></p>
    </div>
</div>
<div class="card">
    <div class="content">
        <p><span class="p3" style="color:#4d4dff">title of history</span><br><span class="p3">Date:2/23/2021</span></p>
    </div>
</div>
<div class="card">
    <div class="content">
        <p><span class="p3" style="color:#4d4dff">title of history</span><br><span class="p3">Date:2/23/2021</span></p>
    </div>
</div>


<div>
    <div class="content">
        <a href ="{{ redirect()->back()->getTargetUrl() }}"><span class="p3 cowtitle" >GO BACK</span></a>
        <a href ="{{route('addhistory')}}"><span class="p3 cowtitle" >NEW HISTORY</span></a>
    </div>
</div>


<script> 
  
</script> 
</body> 

</html> 
