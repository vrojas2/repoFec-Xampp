<?php
    namespace APP\Models;
    use CodeIgniter\Model;

    class UsersModel extends Model
    {
        protected $table="users";
        protected $primaryKey = "id";

        protected $returnType = "array";
        protected $useSoftDeletes = true;
        
        protected $allowedFields = ["name","username",
        "password","role","last_login"];
    }
    
?>
