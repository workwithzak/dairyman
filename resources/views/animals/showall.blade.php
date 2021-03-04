<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

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
.p3 {
        font-family: "Lucida Console", "Courier New", monospace;
        font-size: 12px;
        
    }
    .data-table  {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 12px;
}
.main{
  
}
.main{
font-family:"Lucida; Console,Courier New", monospace;
font-size:12px;
margin-top:10px;
}

</style>
<body class="w3-theme-l5">



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m5">
      <!-- Profile -->
      <div class="w3-card w3-white">
        <div class="w3-container">
        
        <!--- show animal list-->
        <div style="overflow-x:auto;" class="main" >
         <table class="table table-bordered data-table">
            <thead>
                <tr>
                
                    <th></th>
                    <th>NAME</th>
                    <th>TYPE</th>
                    <th>COLOR</th>
                    <th>AGE</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
        <!--- end animal list--->
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

<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('showallanimals') }}",
        columns: [
            {data: 'action', name: 'action', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'type', name: 'type'},
            {data: 'color', name: 'color'},
            {data: 'age', name: 'age'},
        ]
    });
    
  });
</script>
</body>
</html> 
