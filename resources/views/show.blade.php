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
        <title></title>
    </head>
    <body style="background-color: #cccccc">
        
        
        
        
        
        <div class="container-fluid"> 
        
        
        <table class="table table-secondary table-hover">
             
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">proname</th>
      <th scope="col">catnmae</th>
      <th scope="col">discrip</th>
       <th scope="col">price</th>
        <th scope="col">avilple</th>
        <th scope="col">pic</th>
        <th scope="col">dlete</th>
        <th scope="col">edite</th>
    </tr>
  </thead>
  
  <tbody>
     @foreach($row as $x) 
    <tr>
        
      
      <td>{{$x->id}}</td>
      <td>{{$x->proname}}</td>
      <td>{{$x->catnmae}}</td>
     <td>{{$x->discrip}}</td> 
                  <td>{{$x->price}}</td>
                   <td>{{$x->av}}</td>
             <td><img src="image/{{$x->pic}}" width="200" height="200"></td>
      <td><a href="{{$x->id}}/delete">dlete</a></td>
      
      <td><a href="{{$x->id}}/edit">edit</a></td>
    </tr>
    
   
  </tbody>
  @endforeach
</table>
        </div>       
    </body>
</html>
