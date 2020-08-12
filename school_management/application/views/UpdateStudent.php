  <?php 
  foreach ($value as $data) {
   $fn=$data->firstname;
   $ln=$data->lastname;
   $father=$data->father;
   $mother=$data->mother;
   $gender=$data->gender;
   $email=$data->email;
   $dept=$data->department;
   $add=$data->address;
   $year=$data->year;
   $dob=$data->dob;
   $ps=$data->parentsalary;
   $user=$data->username;
   $pass=$data->password;
   $cat=$data->category;
   $ten=$data->tenth;
   $twelve=$data->twelveth;
   $pn=$data->phone;
   }
    ?>
  


<!DOCTYPE html>
<html>
<head>
    <title></title>
        <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://codeignitor/crudproject/application/views/css/compile.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/kybarg/mdl-selectfield/mdl-menu-implementation/mdl-selectfield.min.css">
<link rel="stylesheet" type="text/css" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="http://propeller.in/components/select2/css/select2-bootstrap.css">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/typography/css/typography.css">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/textfield/css/textfield.css">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/select2/css/pmd-select2.css">

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
    #box
    {
        margin-top: 50px;
        width: 100%;
        height: 90%;
        margin-bottom: 50px;
    }
    body 
    {
    background: whitesmoke;
    font-family: 'Open Sans', sans-serif;

    }

</style>

</head>
<body>
  <?php  include('adminNav.php'); ?>
    <div class="container">
        <section class="form-elegant">
<div class="row">
  
    <div class="col-sm-1"></div>
    <div class="col-xl-10">
        <!-- Material form register -->
<div id="box" class="card align-center" >

     <div class="text-center">
            <h1 class="dark-grey-text mb-5"><strong>Add Student</strong></h1>
        </div>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form  class="text-center" style="color: #757575;" onsubmit="return validate()" method="post"  action="addStudent">

    

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="FirstName" class="form-control" onkeyup="clear_FirstNameerr()" name="FirstName" value="<?php echo $fn ;?>" required>
                        <label for="FirstName">First name</label>
                        <span id="err_FirstName"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="LastName" class="form-control" onkeyup="clear_LastNameerr()" name="LastName" value="<?php echo $ln; ?> " required>
                        <label for="LastName">Last name</label>
                        <span id="err_LastName"></span>
                    </div>
                </div>
            </div>

                 <div class="form-row">
                <div class="col">
                    <!-- Father name -->
                    <div class="md-form">
                        <input type="text" id="FatherName" class="form-control" onkeyup="clear_FatherNameerr()" name="FatherName" value="<?php echo $father; ?>" required>
                        <label for="FatherName">Father name</label>
                        <span id="err_FatherName"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- mother name -->
                    <div class="md-form">
                        <input type="text" id="MotherName" class="form-control" onkeyup="clear_MotherNameerr()" name="MotherName" value="<?php echo $mother; ?>" required>
                        <label for="MotherName">Mother name</label>
                        <span id="err_MotherName"></span>
                    </div>
                </div>
            </div>

              <!-- ParentSalary -->
            <div class="md-form">
                        <input type="text" id="ParentSalary" class="form-control" onkeyup="clear_ParentSalaryerr()" name="ParentSalary" value="<?php echo $ps; ?>" required >
                        <label for="ParentSalary">Parent Salary</label>
                        <span id="err_ParentSalary" ></span>
           </div>


                 <div class="form-row">
                <div class="col">
                    <!-- Username-->
                    <div class="md-form">
                        <input type="text" id="UserName" class="form-control" onkeyup="clear_UserNameerr()" name="UserName" value="<?php echo $user; ?>" required>
                        <label for="UserName">Username</label>
                        <span id="err_UserName"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- password  -->
                    <div class="md-form">
                        <input type="password" id="Password" class="form-control" onkeyup="clear_Passworderr()" name="Password" value="<?php echo $pass; ?>" required>
                        <label for="Password">Password</label>
                        <span id="err_Password"></span>
                    </div>
                </div>
            </div>


            


            
            <!-- gender -->
             <div align="center">


                    <div class="form-check form-check-inline">
          <?php 
if ($gender=='male') {
  ?>

           
  <input type="radio" class="form-check-input" id="Male" name="Gender" onclick="clear_Gendererr()" value="male" <?php echo 'checked'; ?>>
  <label class="form-check-label" for="Male">Male</label>
</div>


<!-- Material inline 2 -->
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="Female" name="Gender" onclick="clear_Gendererr()" value="female" >
  <label class="form-check-label" for="Female">Female</label>
</div><br>
<span id="err_Gender"></span>
</div>
<?php } 
else
{
  ?>
    <input type="radio" class="form-check-input" id="Male" name="Gender" onclick="clear_Gendererr()" value="male" >
  <label class="form-check-label" for="Male">Male</label>
</div>


<!-- Material inline 2 -->
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="Female" name="Gender" onclick="clear_Gendererr()" value="female" <?php echo "checked"; ?> >
  <label class="form-check-label" for="Female">Female</label>
</div><br>
<span id="err_Gender"></span>
</div>
<?php } ?>
<br>

  <div class="form-row">
                <div class="col">
                    <!-- category-->
                    <div class="form-group ">
                                            <label>Category</label>
                                            <select class="form-control" name="Category" onselect="clear_Categoryerr" required> 
                                              <option value="OBC" >OBC</option>
                                         
                                                <option value="GENERAL" >GENERAL</option>
                                              
                                               <option value="ST" >ST</option>
                                              
                                              <option value="SC" >SC</option>
                                            
                                                
                                            </select>
                                            <span id="err_Category"></span>
                                        </div>
                </div>
                <div class="col">
                    <!-- DOB -->
                    <div class="md-form">
                        <input type="Date" id="DOB" class="form-control" onkeyup="clear_DOBerr()" name="DOB" value="<?php echo $dob; ?> " required>
                        <label for="DOB"></label>
                        <span id="err_DOB"></span>
                    </div>
                </div>
            </div>

 

   <div class="form-row">
                <div class="col">
                    <!-- email-->
                    <div class="md-form">
                        <input type="text" id="Email" class="form-control" onkeyup="clear_Emailerr()" name="Email" required value="<?php echo $email; ?>">
                        <label for="Email">Email</label>
                        <span id="err_Email"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- phone -->
                    <div class="md-form">
                        <input type="text" id="Phone" class="form-control" onkeyup="clear_phoneerr()" name="Phone" required value="<?php echo $pass; ?>">
                        <label for="Phone">Phone</label>
                        <span id="err_Phone"></span>
                    </div>
                </div>
            </div>


<div class="form-row">
                <div class="col">
                    <!-- Branch-->
                    <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="Department" onselect="clear_Departmenterr()">
                                              <option value="IT" >IT</option>
                                              
                                                 <option value="CS">CS</option>
                                              
                                                <option value="MECH">MECH</option>
                                              
                                                <option value="CIVIL">CIVIL</option>
                                              
                                               <option value="EC">EC</option> php
                                              
                                               
                                                
                                            </select>
                                            <span id="err_Department"></span>
                                        </div>
                </div>
                <div class="col">
                    <!-- Year -->
                  <div class="form-group">
                                            <label>Year</label>
                                            <select class="form-control" name="Year" onselect="clear_Yearerr" required>
                                          
                                           <option value="1" >1</option>
                                          <option value="2" >2</option>
                                         <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        
                                                
                                               
                                                
                                               
                                            </select>
                                            <span id="err_Year"></span>
                                        </div>
                </div>
            </div>

 <div class="form-row">
                <div class="col">
                    <!-- Father name -->
                    <div class="md-form">
                        <input type="text" id="10thboard" class="form-control" onkeyup="clear_10thboarderr()" name="Tenthboard" required value="<?php echo $ten ;?>">
                        <label for="10thboard">10th board</label>
                        <span id="err_10thboard"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- mother name -->
                    <div class="md-form">
                        <input type="text" id="12thboard" class="form-control" onkeyup="clear_12thboarderr()" name="Twelvethboard" required value="<?php echo $twelve; ?>">
                        <label for="12thboard">12th board</label>
                        <span id="err_12thboard"></span>
                    </div>
                </div>
            </div>

 <!-- address -->
                    <div class="md-form">
                        <input type="text" id="Address" class="form-control" onkeyup="clear_Addresserr()" name="Address" required value="<?php echo $add; ?>">
                        <label for="Address">address</label>
                        <span id="err_Address" ></span>
                    </div>

                    
           
            <!-- Sign up button -->
            <div class="text-center mb-3">
            <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a white-text" name="submit_btn"><strong><b>Add</b></strong></button>
        </div>

           
          
          
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->


    </div>
    <div class="col-sm-1"></div>

</div>
</section>
</div>



<script type="text/javascript" src="http://codeignitor/crudproject/application/views/js/compile.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
<script type="text/javascript" src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/kybarg/mdl-selectfield/mdl-menu-implementation/mdl-selectfield.min.js"></script>
<script type="text/javascript" src="dropdown_firebasejs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- Jquery js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Propeller textfield js -->
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

<!-- Select2 js-->
<script type="text/javascript" src="http://propeller.in/components/select2/js/select2.full.js"></script>



<!-- Propeller Select2 -->
<script type="text/javascript" src="http://propeller.in/components/select2/js/pmd-select2.js"></script>





<script type="text/javascript">
    function clear_FirstNameerr()
   {
     document.getElementById('err_FirstName').innerHTML="";
  }
  function clear_LastNameerr()
   {
     document.getElementById('err_LastName').innerHTML="";
  }
      function clear_FatherNameerr()
   {
     document.getElementById('err_FatherName').innerHTML="";
  }
  function clear_MotherNameerr()
   {
     document.getElementById('err_MotherName').innerHTML="";
  }
  function clear_ParentSalaryerr()
  {
     document.getElementById('err_ParentSalary').innerHTML="";
  }
  function clear_UserNameerr()
   {
     document.getElementById('err_UserName').innerHTML="";
  }
  function clear_Emailerr()
   {
     document.getElementById('err_Email').innerHTML="";
  }
  function clear_Passworderr() 
  {
    document.getElementById('err_Password').innerHTML="";
   } 
   function clear_Gendererr() 
   {
     document.getElementById('err_Gender').innerHTML="";
   }
   function clear_Addresserr
    {
    document.getElementById('err_Address').innerHTML='';
  }
  function clear_10thboarderr()
   {
    document.getElementById('err_Address').innerHTML='';
  }
  function clear_12thboarderr 
  {
    document.getElementById('err_Address').innerHTML='';
  }
  function clear_Departmenterr 
  {
    document.getElementById('err_Address').innerHTML='';
  }
  function clear_Yearerr 
  {
    document.getElementById('err_Address').innerHTML='';
  }




  function validate()
{
    
    fn=document.getElementById('FirstName').value;
    ln=document.getElementById('LastName').value;
   unm=document.getElementById('UserName').value;
   pwd=document.getElementById('Password').value;
   male=document.getElementById('Male');
   female=document.getElementById('Female');
   email=document.getElementById('Email');
   phone=document.getElementById('Phone');
   category=document.getElementById('Category');
   dob=document.getElementById('DOB').value;
   tenthboard=document.getElementById('10thboard');
   twelethboard=document.getElementById('12thboard');
   address=document.getElementById('Address').value;
    dept=document.getElementById('Department').value;
   year=document.getElementById('Year').value;
document.write(fn+' '+ln);

   var flag=0;

    if(fn.length==0)
   {
    document.getElementById('err_FirstName').innerHTML='*Please enter Firstname';
    document.getElementById('err_FirstName').style.color="red";
    flag=1;
   }
   else
   {
    document.getElementById('err_FirstName').innerHTML="";
   }
   if(ln.length==0)
   {
    document.getElementById('err_LastName').innerHTML='*Please enter lasttname';
    document.getElementById('err_LastName').style.color="red";
    flag=1;
   }
   else
   {
    document.getElementById('err_LastName').innerHTML="";
   }
   if(unm.length==0)
   {
    document.getElementById('err_Email').innerHTML='*Please enter email';
    document.getElementById('err_Email').style.color="red";
    flag=1;
   }
   else
   {
    document.getElementById('err_Email').innerHTML="";
   }
    if(pwd.length==0)
   {
    document.getElementById('err_password').innerHTML="*Please enter a password";
    document.getElementById('err_password').style.color="red";
    flag=1;
   }
   else if(!(pwd.length>=4 && pwd.length<=8))
   {
    document.getElementById('err_Password').innerHTML="*password must between 4 and 8 character";
    document.getElementById('err_Password').style.color="red";
   flag=1;
  }
  else
  {
    document.getElementById('err_Password').innerHTML="";
  }
  if(!male.checked && !female.checked)
  {
      document.getElementById('err_Gender').innerHTML="*Please select gender";
      document.getElementById('err_Gender').style.color="red";
      flag=1;
  }
  else
  {
     document.getElementById('err_Gender').innerHTML="";
  }
  if(address.length==0)
  {
     document.getElementById('err_Address').innerHTML="*Please select any city";
      document.getElementById('err_Address').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_Address').innerHTML='';

   }
 
  if(father.length==0)
  {
     document.getElementById('err_FatherName').innerHTML="*Please select any city";
      document.getElementById('err_FatherName').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_FatherName').innerHTML='';

   }
 if(mother.length==0)
  {
     document.getElementById('err_MotherName').innerHTML="*Please select any city";
      document.getElementById('err_MotherName').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_MotherName').innerHTML='';

   }
   if(email.length==0)
  {
     document.getElementById('err_Email').innerHTML="*Please select any city";
      document.getElementById('err_Email').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_Email').innerHTML='';

   }
      if(category.length==0)
  {
     document.getElementById('err_Category').innerHTML="*Please select any city";
      document.getElementById('err_Category').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_Category').innerHTML='';

   }
    if(dob.length==0)
  {
     document.getElementById('err_DOB').innerHTML="*Please select any city";
      document.getElementById('err_DOB').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_DOB').innerHTML='';

   }
      if(dept.length==0)
  {
     document.getElementById('err_Department').innerHTML="*Please select any city";
      document.getElementById('err_Department').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_Department').innerHTML='';

   }
   if(year.length==0)
  {
     document.getElementById('err_Year').innerHTML="*Please select any city";
      document.getElementById('err_Year').style.color="red";
      flag=1;
  }
   else{
   document.getElementById('err_Year').innerHTML='';

   }

  if(flag==0)
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

