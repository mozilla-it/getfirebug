<?php

class PerchUsers extends PerchFactory
{
    protected $singular_classname = 'PerchUser';
    protected $table    = 'users';
    protected $pk       = 'userID';
    protected $default_sort_column = 'userRole DESC, userUsername';
    
    
    public function get_current_user()
    {
        $AuthenticatedUser   = new PerchAuthenticatedUser(array());
        $AuthenticatedUser->recover();
        
        return $AuthenticatedUser;
    }
    
    public function create($data, $send_welcome_email=true)
    {
        $clear_pwd  = $data['userPassword'];
        $data['userPassword'] = md5($data['userPassword']);
        $data['userCreated'] = date('Y-m-d H:i:s');
        $data['userEnabled'] = '1';
        
        $NewUser = parent::create($data);
        
        if (is_object($NewUser) && $send_welcome_email) {
            $NewUser->squirrel('clear_pwd', $clear_pwd);
            $NewUser->send_welcome_email();
        }
        
        return $NewUser;
    }
    
    public function username_available($username, $exclude_userID=false)
    {
        $sql = 'SELECT COUNT(*)
                FROM ' . $this->table . '
                WHERE userUsername='.$this->db->pdb($username);
                
        if ($exclude_userID) {
            $sql .= ' AND userID!='.$this->db->pdb((int) $exclude_userID);
        }
                
        $count  = (int) $this->db->get_value($sql);
        
        if ($count == 0) return true;
        
        return false;
    }

    public function email_available($email, $exclude_userID=false)
    {
        $sql = 'SELECT COUNT(*)
                FROM ' . $this->table . '
                WHERE userEmail='.$this->db->pdb($email);
        
        if ($exclude_userID) {
            $sql .= ' AND userID!='.$this->db->pdb((int) $exclude_userID);
        }
        
        $count  = (int) $this->db->get_value($sql);
        
        if ($count == 0) return true;
        
        return false;
    }
    
    
}

?>
