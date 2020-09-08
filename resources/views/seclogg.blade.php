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
         <link href="style.css" rel="stylesheet" type="text/css">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
        <script src="scrript.js"></script>
    </head>
    <body class= "alert-info "
          >
        
         <div class="container-fluid  alert-info ">
             <div class="row">
                 <div class="col-lg-12 col-md-3   alert-info"  >
                     
                     <p style="height: 200px" >
                   <marquee direction="right" behavior="alternate" scrollamount="20">	
                      <h1 class="font-italic">welcome</h1> 
                     </marquee> 
                      </p> 
                 </div> 
             
             
             
             
             </div>
             <div class="row">
		<div class="col-lg-4 col-md-3 alert  alert-info  ">
                    
			<div class="navbar-brand font-weight-bold">company 
                        </div>
                </div>
            <div class="col-lg-4 col-md-3 alert  alert-info  "> 
                
                
      <form action="logg2" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
           
  <div class="form-group">
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
          
<button type="submit" class="btn btn-primary btn btn-outline-secondary text-dark" >
  <span class="spinner-grow spinner-grow-sm"></span>
  Loading..
</button>
      </form>
            </div>
                 <div class="col-lg-4 col-md-3 alert  alert-info">
                     
                   
                 </div> 
                 
                 
                 
             </div>
              
             
              </div>
         
        
        
        
        
        
        
        
    </body>
</html>
