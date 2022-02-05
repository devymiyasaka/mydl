<?php

class Tasks
{

    private $id;
    private $userId;
    private $name;
    private $description;
    private $isComplete;
    private $endDate;
    private $completeDate;
    private $delFlg;
    private $updateDate;
    private $createDate;

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
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of isComplete
     */ 
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Set the value of isComplete
     *
     * @return  self
     */ 
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of completeDate
     */ 
    public function getCompleteDate()
    {
        return $this->completeDate;
    }

    /**
     * Set the value of completeDate
     *
     * @return  self
     */ 
    public function setCompleteDate($completeDate)
    {
        $this->completeDate = $completeDate;

        return $this;
    }

    /**
     * Get the value of delFlg
     */ 
    public function getDelFlg()
    {
        return $this->delFlg;
    }

    /**
     * Set the value of delFlg
     *
     * @return  self
     */ 
    public function setDelFlg($delFlg)
    {
        $this->delFlg = $delFlg;

        return $this;
    }

    /**
     * Get the value of updateDate
     */ 
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set the value of updateDate
     *
     * @return  self
     */ 
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get the value of createDate
     */ 
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set the value of createDate
     *
     * @return  self
     */ 
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     *バリデーションチェック
     *
     * @return void
     */
    public function validate(){
        $errorMessage = [];
        if(!$this->name){
            $errorMessage[] = "タスク名は必須です。";
        }

        if(!$this->endDate){
            $errorMessage[] = "終了日は必須です。";
        }
        return $errorMessage;
    }

    public function save(){
        
    }
}