<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background:grey">
     <div id="container">
        <div class="row">
        <div class="col-lg-2"></div>
           <div class="col-lg-8">
             <div class="panel panel-default" style="padding:20px;margin-top:8px">
                 <div class="panel-body">
                   <div class="page-header">
                      <h3>Registration</h3>
                   </div>
                 </div>
              <form>
                    <div class="row">
                       <div class="col-lg-6">  
                         <div class="form-group">
                          <label for="exampleInputEmail1">First Name</label>
                           <div class="input-group">
                             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name">
                           </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1">Last Name</label>
                           <div class="input-group">
                             <span class="input-group-addon"><span class="glyphicon glyphicon-heart-empty"></span></span>
                             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name">
                           </div>
                       </div>
                     </div>
                    </div>  
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email id</label>
                          <div class="input-group">
                            <span class="input-group-addon">@</span></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                          <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                      </div>
                    <div class="form-group">
                          <label for="exampleInputFile"><span class="glyphicon glyphicon-paperclip"></span> Image</label>
                          <input type="file" id="exampleInputFile">
                    </div>
                    <div class="checkbox">
                            <label>
                              <input type="checkbox">Accept our <a href="#">terms and condtions.</a>
                            </label>
                    </div>
                     <button type="button" class="btn btn-primary">Register</button>
                     <button type="submit" class="btn btn-success">Back to Login</button>
                     
                  </form>
                   <hr>
               <p>Already Have a account? <a href="#">Sign here</a>
               </p>
             </div>
           </div>
           <div class="col-lg-2">
           </div>
        </div>
     </div> 
   



    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>