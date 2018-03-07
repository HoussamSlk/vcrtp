<?php 
class dbmodel extends CI_Model
{
    public function insert($par, $image)// here we will enter each parameter into the db
    {
        $query = "INSERT INTO companies (name, email, password, address, type, contact, trusted, about, image,  admins_id) values (?,?,?,?,?,?,?,?,?,?)";
        $values = [$par['name'], $par['email'], $par['password'], $par['address'], $par['type'], $par['contact'], $par['trusted'], $par['about'], $image, 2]; //we need to the md5 is for hashing the password
 
        $this->db->query($query, $values);
 
 }
///////////////////////////////////////////////login for companies//////////////////////////////////////////////////////
    public function loginMethod($email, $password) // here we will enter each parameter into the db
    {
        $myquery = "SELECT * FROM companies WHERE email=? AND password = ? ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

//////////////////////////////////////////////////login for admins///////////////////////////////////////////////////
    public function loginMethodadmin($email, $password) // here we will compare email and password with the db
    {
        $myquery = "SELECT * FROM admins WHERE email=? AND password = ? ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function checker($var) // here we will check if the email has been registered before or not.
    {
        $myquery = "SELECT * FROM companies WHERE email=? ";
        $values = array($var);
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function insert_admin($par)// here we will enter each parameter into the db
    {
        $query = "INSERT INTO admins (name, email, password, level) values (?,?,?,?)";
        $values = [$par['name'], $par['email'], $par['password'], $par['level']]; //we need to the md5 is for hashing the password

        $this->db->query($query, $values);


    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getposts()
{
   $query = "SELECT * FROM `posts` where status='Approved' ORDER BY highlighted DESC";
   $listings= $this->db->query($query)->result_array();
   return $listings;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Husam : query to get all post of specific company and return the values to company page after specific company logs in 
public function getpostsofone()
{
    $query = "SELECT * FROM `posts` where companies_id=?";
    $listings=$this->db->query($query,$this->session->userdata('id'))->result_array();
    return $listings;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////Husam: this query runs on edit profile page to show the current profile information of the company
public function currentinfo()
{
    $query = "SELECT * FROM `companies` where id=?";
    $listings=$this->db->query($query,$this->session->userdata('id'))->result_array();
    return $listings;
}
//////////////////////////////////////////////////////////////////////////////////
//Husam : this query is to edit profile of the a company 
public function editprofile($par)
{
    $id = $this->session->userdata('id');
    $query="UPDATE companies SET email=? , address=? , contact=? ,about= ? WHERE id=?";
    $values=[$par['email'], $par['address'], $par['contact'], $par['about'] , $id ];
    $this->db->query($query, $values);

}
////////////////////////////////////////////////////////////////////////////////
///Husam: Adding post for one company 
public function insertpost($addingpost,$image)
{
    $id = $this->session->userdata('id');
    $admin= 1;
    $query= "INSERT INTO posts (title,image,description,language,startdate
    ,enddate,status,link,vacanciesnum,filledposition,companies_id,admins_id) values(?,?,?,?,?,?,?,?,?,?,?,?)";
    $values = [$addingpost['title'],$image,$addingpost['description'],$addingpost['language'],$addingpost['startdate'],$addingpost['enddate'],'Pending',$addingpost['link'],$addingpost['vacanciesnum'],$addingpost['filledposition'],$id,1];
    $this->db->query($query,$values);
}


///////////////////////////////////////////////////////////////////////////
// Husam : query to get  Pending posts and show them on the admin page
public function getpendingposts()
{
    $query= "SELECT * from posts where status=?";
    $values='pending';
   $listings= $this->db->query($query,$values)->result_array();
   return $listings;
}


//////////////////////////////////////////////////////////////////////
// Husam get all companies and partners for cp 
public function getcompanies()
{
    return $this->db->query("SELECT * FROM companies")->result_array();
}
///////////////////////////////////////////////////////////////
/////Husam get all posts for cp admin 
public function getallposts()
{
    return $this->db->query("SELECT * FROM posts")->result_array();
}
//////////////////////////////////////////////////////////////////////
// Husam: Query to approve  pending posts
public function aproveapost($id)
{
    $query="UPDATE posts SET status='Approved' where id=?";
    $this->db->query($query, $id);
}
///////////////////////////////////////////////////////////////////
//REJECTING PENDING POST
public function delpost($id)
{
    $query="DELETE FROM posts where id=?";
    $this->db->query($query, $id);
}
//////////////////////////////////////////////////////////////////
// Deleting a company 
public function delcomp($id)
{
    $query="SELECT * FROM posts WHERE companies_id =? ";
    $res=$this->db->query($query, $id);
    
    if($res !== NULL){
    $query1="DELETE FROM posts WHERE companies_id =?";
    $this->db->query($query1, $id);}

    $query2="DELETE FROM companies where id=?";
    $this->db->query($query2, $id);
}

public function getOnepost($id)
    {
        $myquery = "SELECT * FROM posts WHERE id=? ";
        $values = array("$id");
        return $this->db->query($myquery, $values)->row_array();
    }


 public function edit($arg)
    {
        $myquery = "UPDATE posts SET title= ?, description=?, language=?  WHERE id= ?";
        $values = array($arg['title'], $arg['description'], $arg['language'], $arg['id']);
        $this->db->query($myquery, $values);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function postchecker($title) // here we will check if the POST has been add before or not.
    {
        $myquery = "SELECT * FROM posts WHERE title=? ";
        $values = array($title);
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

////////////////////////////////////////filteration //////////////////////////////////////////////////////
public function filtering($tag)
{
   $query="SELECT * FROM posts WHERE status='Approved' AND tag=? ";
   $value = array($tag);
   $listings = $this->db->query($query, $value)->result_array();
   return $listings;
}

}



