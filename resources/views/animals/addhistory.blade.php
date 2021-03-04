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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}


.input-field {
  width: 100%;
  padding: 3px;
  outline: none;
}

.input-field:focus {
  border: 2px solid grey;
}

/* Set a style for the submit button */
.btn {
  background-color: grey;
  color: white;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
  width: 50%;
}

.btn:hover {
  opacity: 1;
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
      <div class="w3-card w3-white">
        <div class="w3-container">
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>Add animal history</p>
        <hr>
        <!--- add animal form start--->
           
            <form action="" method ="post" style="max-width:500px;margin:auto">
            @csrf
             
             @error('title')
                  <span class="w3-text-red">
                      {{ $message }}
                  </span>
             @enderror
            <div class="input-container @error('title') w3-border w3-border-red @enderror">
                <input class="input-field" type="text" placeholder="Title" name="title">
            </div>
             
              @error('date')
                  <span class="w3-text-red">
                      {{ $message }}
                  </span>
             @enderror
             <div class="input-container @error('date') w3-border w3-border-red @enderror">
                <input class="input-field" type="date" placeholder="Date" name="date">
            </div>





            <button  type="submit" class="btn">Add</button>
            </form>
            <br>


        <!--- add animal form end--->
        </div>
      </div>
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


</body>
</html> 
