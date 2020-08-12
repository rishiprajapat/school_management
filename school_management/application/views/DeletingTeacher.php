
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
  
        
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="localhost/school_management/application/views/css/compie.cs">

    <style type="text/css">

   

    .form-elegant .font-small {
  font-size: 0.8rem; }

.form-elegant .z-depth-1a {
  -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
  box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
  -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
  box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }


  #box{
    margin-top: 50px;
    
    width: 500px;
    
  }
    </style>
</head>
<body>
    <div class="container">
<section class="form-elegant">
 


<div class="row"> 
<div class="col-sm-3" ></div>


<div class="col-lg-6">
    

<section class="form-elegant">

<!--Form without header-->
<div class="card align-center" id="box">

    <div class="card-body mx-4" >

        <!--Header-->
        <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong>Remove Teacher</strong></h3>
        </div>
            
             <form  method="POST" onsubmit="return validate()" action="deleteTeacher">
        <!--Body-->
        <div class="md-form">
            <input type="text" id="Form-email1" class="form-control" onkeyup="clear_emailerr()" name="Username">
            <label for="Form-email1">Enter Teacher's Username</label>
            <span id="email_err"></span>
        </div>

        

        <div class="text-center mb-3">
            <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a white-text" name="submit_btn"><strong><b>Remove</b></strong></button>
        </div>
        
        </form>

    </div>

  

</div>
<!--/Form without header-->

</section>


</div>


<div class="col-sm-3"></div>


 </div>
</section>
</div>



<script type="text/javascript" src="http://localhost/school_management/application/views/js/compile.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
<script type="text/javascript" src="dropdown_firebasejs.js"></script>
<script type="text/javascript">

  function clear_emailerr() 
  {
    document.getElementById("email_err").innerHTML="";
  }
  
  
function validate() 
{
  email=document.getElementById('Form-email1').value;
  
      flag=0;
  if(email.length==0)
  { 
          document.getElementById("email_err").innerHTML="*please enter email";
          document.getElementById("email_err").style.color="red";
          flag=1;
  }
 
  

  if (flag==0) 
  {
    return true;
  }
  else
  {
    return false;
  }

}


</script>
  






</body>
</html>