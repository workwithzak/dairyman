<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


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
        
        .label {
        color: white;
        padding: 8px;
        float: left;
        }

        .success {
            background-color: #4CAF50;
            width:30%;
            } /* Green */
          
        span { 
            display: block; 
            overflow: hidden; 
            padding: 5px 4px 5px 6px;
             
        } 
          
</style>
<body class="w3-theme-l5">



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:30px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m5">
      <!-- Profile -->
      <div class="w3-card w3-white">
        <div class="w3-container">
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme" style="padding-top:10px"></i>Milk entry</p>
         <a href="{{route('dashboard')}}"  type="submit" class="btn">home</a>
        <hr>
        <!--- add animal form start--->
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <!------------>
            <form action="{{route('milkentry')}}" method ="post" style="max-width:500px;margin:auto">
            @csrf
           
             <div class="row">
                <div class="col-sm-4">
                @error('shift')
                      <span class="w3-text-red">
                          {{ $message }}
                      </span>
                @enderror
                    <div class="input-group">
                        <div class="input-group-addon">Shift</div>

                        <select class="form-control" id="shift" name="shift">
                        <option disabled selected value>select an option</option>
                        <option value="morning">Morning</option>
                        <option value="evening">Evening</option>
                        </select>
                    </div>
                </div>
               </div>
               <hr>
              

           @foreach ($data as $animal)
               @error('animalid')
                      <span class="w3-text-red">
                          {{ $message }}
                      </span>
                @enderror
            <input type="hidden" id="animalid" name="animalid[]" value="{{$animal->id}}">
               <div class="row">
                <div class="col-sm-4">
                    <div class="input-group">
                        <div class="input-group-addon">{{$animal->name}}</div>
                        <input type="number" class="form-control" id="leter" name="leter[]" placeholder="quantity" min="1" max="8" required>
                    </div>
                </div>
               </div>
                <br>
             
            @endforeach
             <br>
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
