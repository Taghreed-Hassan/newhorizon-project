<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
        <link href="bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #99ccff">
        <div class="container-fluid">
            
            <nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top text-white">
                
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
         </nav>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="row">  
            
            
        <form action="go" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            product name<input type="text" name="proname"><br>
            price<input type="text" name="price"><br>
            cat<input type="text" name="catname"><br>
            <!-- description<input type="text" name="description"><br>
             !-->
             <div class="form-group">
  <label for="comment">discription:</label>
  <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            </div>
             
            
            avaliable<input type="radio" value="yes" name="av">yes 
            
            <input type="radio" value="no" name="av">no
            
            <br>
            <input type="file" name="pic">
            <br>
            <input type="submit">
            
            
        </form>
             
                
                
                
                
                
                
                
                
            
            </div>
            
            
            
            

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
        </div>  
        
    </body>
</html>
