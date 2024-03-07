<?php
namespace App\Client\Models;
use App\Shared\BaseModel;
class Product extends BaseModel{
    protected $table="product";
        public function getList(){
            $sql="SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        // public function getCustomerName(){
        //     $sql="SELECT name FROM $this->table";
        //     $this->setQuery($sql);
        //     return $this->loadAllRows();
        // }
        public function getOne($id){
            $sql="select * from $this->table where id=$id";
            $this->setQuery($sql);
            return parent::loadRow();
        }

        public function create($name,$email,$phone,$image){
            $sql="insert into $this->table (name ,email,phone,image) value ('$name','$email','$phone','$image');";
            $this->setQuery($sql);
            parent::execute();
        }

        public function updateCustomer($id_user,$name,$email,$phone,$image){
            $sql="UPDATE $this->table SET name = '$name', email = '$email', phone = '$phone',image='$image' WHERE id = '$id_user'";
            $this->setQuery($sql);
            parent::execute();
        }

        public function deleteCustomer($id){
            $sql="DELETE FROM $this->table WHERE id = $id";
            $this->setQuery($sql);
            parent::execute();
        }
}