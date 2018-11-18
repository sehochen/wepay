<?php
namespace Admin\Repository;

class UserRepository extends Repository{

    public function show(){
        $this->view->display();
    }    

}