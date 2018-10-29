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

}
