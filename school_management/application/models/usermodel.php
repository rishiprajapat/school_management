<?php 
class Usermodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function insertStudent($data)
	{

		$result=$this->db->insert('student',$data);
	if($result){return true;}
	return false;
	}

	public function insertTeacher($data)
	{

		$result=$this->db->insert('teacher',$data);
	if($result){return true;}
	return false;
	}


	public function studentValidation($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$result=$this->db->get('student');
		if($result->num_rows()>0)
		{
			return $result;
		}
	}

 public function teacherValidation($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$result=$this->db->get('teacher');
		if($result->num_rows()>0)
		{
			return $result;
		}
	}

public function adminValidation($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$result=$this->db->get('admin');
		if($result->num_rows()>0)
		{
			return $result;
		}
	}

public function fetchYearDept($user,$pass)
{
   	$qry="select department,year from student where username='".$user."' and password='".$pass."'";

		 $result=$this->db->query($qry);
	      return $result->result();
}

	public function fetchSubjects($year,$department)
	{
		
		$qry="select sub_code,sub_name from subject where sub_code in (select sub_code from dept_subject_relation where year='".$year."' and dept_id in (select dept_id from department where dept_name='".$department."'))";

		 $result=$this->db->query($qry);
	      return $result->result();
	}
	



		public function fetchStudents()
	{
		$username=$this->session->userdata('student_session');
		$password=$this->session->userdata('studentpass_session');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result=$this->db->get('student');
	      return $result->result();
	}
		public function fetchTeacher()
	{
		$username=$this->session->userdata('teacher_session');
		$password=$this->session->userdata('teacherpass_session');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result=$this->db->get('teacher');
	      return $result->result();
	}

public function insertYear($data)
{
$this->db->insert('teacher_class_relation',$data);
}


public function fetchYear()
{
	$username=$this->session->userdata('teacher_session');
    $this->db->where('username',$username);
    $result=$this->db->get('teacher_class_relation');
	      return $result->result();
}

public function deleteStudent($username)
{
	$qry="delete from student where username='$username'";
	$result=$this->db->query($qry);
	     
}
public function deleteTeacher($username)
{
	$qry="delete from teacher where username='$username'";
	$result=$this->db->query($qry);
	return $result;
	     
}

public function updateStudent($username)
{
	$qry="select * from student where username='$username'";
	$result=$this->db->query($qry);
	if($result->num_rows()>0)
		{
	    $r=$this->deleteStudent($username);
		return $result->result();
		}	
}

public function updateTeacher($username)
{
	$qry="select * from teacher where username='$username'";
	$result=$this->db->query($qry);
	if($result->num_rows()>0)
		{
	    $r=$this->deleteTeacher($username);
		return $result->result();
		}	
}
}



 ?>