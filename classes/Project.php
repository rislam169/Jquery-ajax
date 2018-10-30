<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/Database.php';

class Project
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkUsername($username)
    {
        $query = "SELECT * FROM tbl_user WHERE username = '$username'";
        $getuser = $this->db->select($query);

        if ($username == "") {
            echo "<span class='error'>Please Enter Username</span>";
            exit();
        } elseif ($getuser) {
            echo "<span class='error'><strong>$username</strong> not availabe!</span>";
            exit();
        } else {
            echo "<span class='success'><strong>$username</strong> availabe!</span>";
            exit();
        }
    }

    public function checkSkill($skill)
    {
        $query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
        $getskill = $this->db->select($query);
        $result = "";
        $result .= "<div class='skill'><ul>";
        if ($getskill) {
            while ($value = $getskill->fetch_assoc()) {
                $result .= "<li>" . $value['skill'] . "</li>";
            }
        } else {
            $result .= "<li>No result found</li>";
        }
        $result .= "</ul></div>";
        echo $result;
    }

    public function insertData($body)
    {
        $query = "INSERT INTO tbl_refresh(content) values('$body')";
        $insertdata = $this->db->insert($query);
    }

    public function getData()
    {
        $query = "SELECT * FROM tbl_refresh ORDER BY id DESC";
        $getdata = $this->db->select($query);
        $result = "";
        $result .= "<div class='autoshow'><ul>";
        if ($getdata) {
            while ($value = $getdata->fetch_assoc()) {
                $result .= "<li>" . $value['content'] . "</li>";
            }
        } else {
            $result .= "<li>No result found</li>";
        }
        $result .= "</ul></div>";
        echo $result;
    }

    public function liveSearch($data)
    {
        $query = "SELECT * from tbl_livesearch WHERE username LIKE '%$data%'";
        $getdata = $this->db->select($query);
        $result = "";
        $result .= "<table class='tblone'><tr>
                        <th>Name</th>
                        <th>user Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>";
        if ($getdata) {
            while ($value = $getdata->fetch_assoc()) {
                $result .= "<tr>
                                <td>" . $value['name'] . "</td>
                                <td>" . $value['username'] . "</td>
                                <td>" . $value['email'] . "</td>
                                <td>" . $value['address'] . "</td>
                            </tr>";
            }
            $result .= "</table>";
            echo $result;
        } else {
            echo "Data Not Found";
        }
    }

}
