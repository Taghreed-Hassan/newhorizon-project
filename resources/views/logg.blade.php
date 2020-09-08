<!DOCTYPE html>

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
    <body style="background-color:#cccccc">
        
       <div class="container-fluid">
           
          
               
          <!--bootstrab......-------------------------.......!--> 
           <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand " href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
           
       <!--bootstrab......-------------------------.......!-->       
              
                
           
           
	
	<div class="row">
            
          
               
                
		<div class="col-lg-6 col-md-3 alert  alert-info  ">
	
	
            
			<div class="navbar-brand font-weight-bold">company name </div>
				
		
			
                </div>
            
             
            
            
             <div class="col-lg-6 col-md-3 alert   alert-info ">     
            
 <button class="navbar-toggler" data-toggle="collapse" data-target="#ff">
     sign in               </button>
	<div class="collapse navbar-collapse" id="ff">
            
  <!--fooooooooooooooormmmmmmmmmmmmmmmmaaaaaaaaaaaa!-->
  <form action="goinsert" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            
     <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control" 
           placeholder="enter your name" name="name">
     </div>
            
  <div class="form-group ">
    <label >Email address</label>
    <input type="email" class="form-control" 
           aria-describedby="emailHelp" 
           placeholder="Enter email" name="email">
     </div>
            
   <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" 
           placeholder="Password" name="pass">
     </div>
 
     <input type="radio" value="active" name="avl">active
     <input type="radio" value="inactive" name="avl">inactive        
            
            
  <button type="submit" class="btn btn-primary">Submit</button>

          
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
        
    
              <!--fooooooooooooooormmmmmmmmmmmmmmmmaaaaaaaaaaaa!-->
        </div>
           </div>
       
	
               
          
            </div>
         
      
       
       
        



 <div class="row" style="height: 250px">

       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/16.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>
	 <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/20.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>




   <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/14.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>  
           
           </div>
           
           
           
           

<div class="row" style="height: 250px">

       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/12.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>
   <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/13.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>




   <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/3g.jpg" alt="ff"  class="align-self-center mr-3" style="width: 300px;height: 300px">   
          </div>
        </div>  
           
           </div>
           
           
           

	</div>
           
           
           
           
	
	
    </body>
</html>
