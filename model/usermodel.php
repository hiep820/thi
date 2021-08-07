<?php
require_once 'model/DatabaseModell.php';
class UserModel extends DatabaseModell
{   
    public $iduser;
    public $imageuser;
    public $nameuser;
    public $genderuser;
    public $phoneuser;
    public $emailuser;
    public function getAll()
    { 
        $con = $this->open();
        $sql = "SELECT * FROM `useer`";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $classArray=[];
        foreach ($result as $each){
            $user = new UserModel();
            $user-> iduser = $each['id'];
            $user-> imageuser = $each['image'];
            $user->nameuser= $each['name'];
            $user-> genderuser = $each['gender'];
            $user-> phoneuser = $each['phone'];
            $user-> emailuser = $each['email'];
            array_push($classArray, $user);
        }
        return $classArray;
    }
    
}
?>