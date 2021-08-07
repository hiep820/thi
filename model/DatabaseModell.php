<?php
class DatabaseModell
{
    public function open()
    {
        $con = mysqli_connect("localhost", "root", "", "baithi");
        return $con;
    }
    public function close($con)
    {
        mysqli_close($con);
    }
}
?>