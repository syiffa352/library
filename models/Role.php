<?php

require_once "Model.php";

class Role extends Model
{
    private $id, $role_name;

    public function getRole()
    {
        $role = "SELECT * FROM role";
        $connect = $this->connect();
        $query = $connect->query($role);

        $data = $query->fetchAll();
        return $data;

    }
}
?>
