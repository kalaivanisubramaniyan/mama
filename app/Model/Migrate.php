<?php

class Migrate extends AppModel {
    public $useDbConfig = 'default2';
    public $useTable = false;

    public function getUser(){
        $result = $this->query("SELECT * FROM users u join user_meta um on u.id=um.user_id join user_callflags uc on u.id=uc.user_id where u.project_id=2 and u.deleted=0 and u.id=97");
        return $result;
    }
    public function changeDeleted($userid){
        $this->query("UPDATE users SET deleted=1 WHERE id=$userid");
        return true;
    }
     public function getManagers(){
        $result=$this->query("Select id,fname,lname from managers");
        return $result;
    }
}
?>
