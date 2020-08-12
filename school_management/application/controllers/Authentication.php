<?php 


class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
  
 
    }
	function checkAdminSession()
{
  if(!(isset($_SESSION["admin_session"]) && isset($_SESSION["adminpass_session"] ) )) 
  {
    echo "<script>alert('Please enter valid username/password')</script>";
   header('Location:LoginForm');
  }
}
  function checkStudentSession()
{
  if(!(isset($_SESSION["student_session"]) && isset($_SESSION["studentpass_session"] ) )) 
  {
     echo "<script>alert('Please enter valid username/password')</script>";
   header('Location:LoginForm');
  }
}
  function checkTeacherSession()
{
  if(!(isset($_SESSION["teacher_session"]) && isset($_SESSION["teacherpass_session"] ) )) 
  {
   echo "<script>alert('Please enter valid username/password')</script>";
   header('Location:LoginForm');
  }
}




	 function loginForm()
	{

		$this->load->view('LoginForm');
	}

   function addingStudent()
  {
   $this->checkAdminSession();
    $this->load->view('AddingStudent');
  }
 function addingTeacher()
  {
    $this->checkAdminSession();
    $this->load->view('AddingTeacher');
  }



//add entries+
 function addStudent()
  {
    $this->load->model('Usermodel');
    $FirstName=$this->input->post('FirstName');
    $LastName=$this->input->post('LastName');
    $FatherName=$this->input->post('FatherName');
    $MotherName=$this->input->post('MotherName');
    $ParentSalary=$this->input->post('ParentSalary');
    $UserName=$this->input->post('UserName');
    $Password=$this->input->post('Password');
    $Gender=$this->input->post('Gender');
    $Category=$this->input->post('Category');
    $DOB=$this->input->post('DOB');
    $Email=$this->input->post('Email');
    $Phone=$this->input->post('Phone');
    $Department=$this->input->post('Department');
    $Year=$this->input->post('Year');
    $Tenthboard=$this->input->post('Tenthboard');
    $Twelvethboard=$this->input->post('Twelvethboard');
    $Address=$this->input->post('Address');
    $data = array('firstname' =>$FirstName ,'lastname' =>$LastName,'father' =>$FatherName,'mother' =>$MotherName,'parentsalary' =>$ParentSalary,'username'=>$UserName,'password'=>$Password,'gender'=>$Gender,'Category' =>$Category,'dob' =>$DOB,'email' =>$Email,'phone' =>$Phone,'department' =>$Department,'year' =>$Year,'tenth' =>$Tenthboard,'twelveth' =>$Twelvethboard,'address'=>$Address);
   
    $this->load->model('Usermodel');
    $result=$this->Usermodel->insertStudent($data);
    
    if ($result) {
       ?>
              <script type="text/javascript">
                alert("Student added successfully");
                
              </script>
              <?php
              $this->checkAdminSession();
              $this->load->view('AdminHome');
    }
    else{
      alert("please enter correct information");
      $this->load->view('AdminHome');
    }
  }  



 function addTeacher()
  {
    $this->load->model('Usermodel');
    $FirstName=$this->input->post('FirstName');
    $LastName=$this->input->post('LastName');
    $Salary=$this->input->post('Salary');
    $UserName=$this->input->post('UserName');
    $Password=$this->input->post('Password');
    $Gender=$this->input->post('Gender');
    $qualification=$this->input->post('Qualification');
    $Email=$this->input->post('Email');
    $Phone=$this->input->post('Phone');
    $Department=$this->input->post('Department');
    $Address=$this->input->post('Address');
    $year=$this->input->post('year');
    $data = array('username'=>$UserName,'password'=>$Password,'t_firstname' =>$FirstName ,'t_lastname' =>$LastName,'t_email' =>$Email,'t_gender'=>$Gender,'t_qualification' =>$qualification,'t_phone' =>$Phone,'t_dept' =>$Department,'t_address'=>$Address,'t_salary' =>$Salary);
   
    $this->load->model('Usermodel');

    foreach ($year as  $val) {
     $arr = array('username'=>$this->input->post('UserName') , 'year'=>$val);
     $this->Usermodel->insertYear($arr);
    }
    $result=$this->Usermodel->insertTeacher($data);
    if ($result) 
    {
       ?>
              <script type="text/javascript">
                alert("Teacher added successfully");
              
              </script>
 <?php
              
              $this->adminHome();
    }
  }
//home
 function studentHome()
	{
    $this->checkStudentSession();
	$this->load->view('StudentHome');
	}
 function teacherHome()
	{
    $this->checkTeacherSession();
		$this->load->view('TeacherHome');
	}
	 function adminHome()
	{ 
    $this->checkAdminSession();
		$this->load->view('AdminHome');

	}

//session manage
function setStudentSession($data)
	{

		    $this->session->set_userdata('student_session',$data['username']);
            $this->session->set_userdata('studentpass_session',$data['password']);
	}
  function setAdminSession($data)
	{

		    $this->session->set_userdata('admin_session',$data['username']);
            $this->session->set_userdata('adminpass_session',$data['password']);
	}
   function setTeacherSession($data)
	{

		    $this->session->set_userdata('teacher_session',$data['username']);
            $this->session->set_userdata('teacherpass_session',$data['password']);
	}
  
//logout
	 function studentLogout()
	{
		 $this->session->unset_userdata('student_session');
            $this->session->unset_userdata('password_session');
            $this->loginForm();	
	}
      function adminLogout()
	{
		 $this->session->unset_userdata('admin_session');
            $this->session->unset_userdata('password_session');
            $this->loginForm();	
	}
	 function teacherLogout()
	{
		 $this->session->unset_userdata('teacher_session');
            $this->session->unset_userdata('password_session');
            $this->loginForm();	
	}




//login


	 function login()
	{
	
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $data = array('username' => $username,'password'=>$password);
           $this->load->model('Usermodel');
           $result=$this->Usermodel->studentValidation($data); 
           if($result)
           {
           	$this->setStudentSession($data);
            $this->studentHome();	
           }
           else {
             $res=$this->Usermodel->teacherValidation($data);
             if ($res) {
              $this->setTeacherSession($data);
              $this->teacherHome();  
              } 
              else
              {
                $r=$this->Usermodel->adminValidation($data);
                if ($r) {
                  $this->setAdminSession($data);
                  $username=$this->session->userdata('teacher_session');
    $password=$this->session->userdata('teacherpass_session');
    
           $this->AdminHome();
                }
                   else 
           {
              ?>
              <script type="text/javascript">
                alert("invalid User or password")
              </script>
              <?php
              $this->load->view('loginForm');
           }
               }
           	 	
           }
         
            
		
	}


//subjects
 function showSubjects()

      {
         $username=$this->session->userdata('student_session');
    $password=$this->session->userdata('studentpass_session');
       $this->load->model('Usermodel');
       $data['value']=$this->Usermodel->fetchYearDept($username,$password);
    
foreach ($data['value'] as $key => $val) {
$dept= $val->department;
$yr= $val->year;
}

      $res['value']=$this->Usermodel->fetchSubjects($yr,$dept);
        if ($res) {
          $this->load->view('ShowSubjects',$res);
     }
      }

 function studentDetails()
{
  $this->load->model('usermodel');
  $data['value']=$this->usermodel->fetchStudents();
  if ($data) {
    $this->load->view('StudentDetails',$data);
  }
}

 function teacherDetails()
{

  $this->load->model('usermodel');
  $data['value']=$this->usermodel->fetchTeacher();
 
}



 function showclass()

      {
         $username=$this->session->userdata('student_session');
    $password=$this->session->userdata('studentpass_session');
       $this->load->model('Usermodel');
       $data['value']=$this->Usermodel->fetchYear($username,$password);
   
        if ($data) {
          $this->load->view('ShowClass',$data);
     }
      }


public function showUpdatingStudent()
{
  $this->load->view('UpdatingStudent');
}

public function showDeletingStudent()
{
  $this->load->view('DeletingStudent');
}

public function showUpdatingTeacher()
{
  $this->load->view('UpdatingTeacher');
}

public function showDeletingTeacher()
{
  $this->load->view('DeletingTeacher');
}

public function deleteStudent()
{
      $username=$this->input->post('Username');
      $this->load->model('usermodel');
      $result=$this->usermodel->deleteStudent($username);
     echo "<script>alert('Student delete successfully');</script>";
        $this->adminHome();
      
    }

public function deleteTeacher()
{
      $username=$this->input->post('Username');
      $this->load->model('usermodel');
      $result=$this->usermodel->deleteTeacher($username);
      if(!$result){
         echo "<script>alert('Please enter valid information');</script>";
      }
    else{
         echo "<script>alert('Teacher delete successfully');</script>";
        $this->adminHome();
     
    }

      
    }

    public function updateStudent()
    {
      $username=$this->input->post('Username');
      $this->load->model('usermodel');
      $data['value']=$this->usermodel->updateStudent($username);
      if (!(is_null($data['value']))) 
      {
       $this->load->view('UpdateStudent',$data);
      }
      else
      {
        echo "<script>alert('please insert valid username');</script>";
      $this->showUpdatingStudent();
       
      }
    }

public function updateTeacher()
    {
      $username=$this->input->post('Username');
      $this->load->model('usermodel');
      $data['value']=$this->usermodel->updateTeacher($username);
      if (!(is_null($data['value']))) 
      {
       $this->load->view('UpdateTeacher',$data);
      }
      else
      {
        echo "<script>alert('please insert valid username');</script>";
      $this->showUpdatingTeacher();
       
      }
    }




}


?>

