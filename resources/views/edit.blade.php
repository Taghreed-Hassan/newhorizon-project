<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <form action="update" method="post" enctype="multipart/form-data" >
           {{csrf_field()}}
           product name<input type="text" name="proname" value="{{$pid->proname}}"><br>
           price<input type="text" name="price" value="{{$pid->price}}"><br>
          
           
           <img src="../image/{{$pid->pic}}" width="200" height="200">
           <input type="file" name="file">
            <input type="submit">
            
            
        </form>
        
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
    </body>
</html>
