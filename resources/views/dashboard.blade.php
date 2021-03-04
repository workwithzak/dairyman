<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
<body class="w3-theme-l5">



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:40px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m5">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Welcome {{$user->name}}</h4>
         <!-- <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         --><hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> {{$user->dairyName}}</p>
         <p><i class="fa fa-list-ol fa-fw w3-margin-right w3-text-theme"></i><span class="w3-badge w3-grey">{{$cowno}} </span> Cows</p>
         <p><i class="fa fa-list-ol fa-fw w3-margin-right w3-text-theme"></i><span class="w3-badge w3-grey">{{$bufno}} </span> Buffelo</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')"class="w3-button w3-block w3-theme-l1 w3-left-align">
          <i class="fa fa-sort-numeric-asc fa-fw w3-margin-right"></i> My animals</button>
          <div id="Demo1" class="w3-hide w3-container">
          
          <div class="w3-white" style="margin:10px 0px 10px 0px">
          <a href="{{route('addanimal')}}" class="w3-button w3-theme-l1">
          <i class="fa fa-plus fa-fw w3-margin-right"></i> Add animals
          </a>
          </div>
          
          <div class="w3-white" style="margin:10px 0px 10px 0px">
          <a href="{{route('showallanimals')}}" class="w3-button w3-theme-l1">
          <i class="fa fa-eye fa-fw w3-margin-right"></i> Show animals
          </a>
          </div>


          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align">
          <i class="fa fa-table fa-fw w3-margin-right"></i> Data Entry</button>
          <div id="Demo2" class="w3-hide w3-container">
            
          <!------------------------------------->
             
          <div class="w3-white" style="margin:10px 0px 10px 0px">
          <a href="{{route('milkentry')}}" class="w3-button w3-theme-l1">
          <i class="fa fa-plus fa-fw w3-margin-right"></i> Milk entry
          </a>
          </div>
          
          <div class="w3-white" style="margin:10px 0px 10px 0px">
          <a href="#" class="w3-button w3-theme-l1">
          <i class="fa fa-plus fa-fw w3-margin-right"></i> Cost entry
          </a>
          </div>

          <!------------------------------------->

          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align">
          <i class="fa fa-line-chart fa-fw w3-margin-right"></i> Generate reports</button>
          <div id="Demo3" class="w3-hide w3-container">
            <p>weekly report</p>
            <p>monthly report</p>
            <p>yearly report</p>
            <p>Generate report from one date to another</p>
          </div>
        </div>      
      </div>
      <br>
    <!-- End Left Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
