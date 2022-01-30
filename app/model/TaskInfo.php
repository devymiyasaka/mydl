<?php

class TaskInfo
{

    private $id;
    private $account_id;
    private $password;
    private $status;
    private $del_flg;
    private $update_date;
    private $create_date;

    public function __construct()
    {
        
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of account_id
     */ 
    public function getAccount_id()
    {
        return $this->account_id;
    }

    /**
     * Set the value of account_id
     *
     * @return  self
     */ 
    public function setAccount_id($account_id)
    {
        $this->account_id = $account_id;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of del_flg
     */ 
    public function getDel_flg()
    {
        return $this->del_flg;
    }

    /**
     * Set the value of del_flg
     *
     * @return  self
     */ 
    public function setDel_flg($del_flg)
    {
        $this->del_flg = $del_flg;

        return $this;
    }

    /**
     * Get the value of update_date
     */ 
    public function getUpdate_date()
    {
        return $this->update_date;
    }

    /**
     * Set the value of update_date
     *
     * @return  self
     */ 
    public function setUpdate_date($update_date)
    {
        $this->update_date = $update_date;

        return $this;
    }

    /**
     * Get the value of create_date
     */ 
    public function getCreate_date()
    {
        return $this->create_date;
    }

    /**
     * Set the value of create_date
     *
     * @return  self
     */ 
    public function setCreate_date($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }
}