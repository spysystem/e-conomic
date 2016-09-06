<?php

namespace Economic;

class SumIntervalData
{

    /**
     * @var SumIntervalHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var int $FromAccount
     */
    protected $FromAccount = null;

    /**
     * @var int $ToAccount
     */
    protected $ToAccount = null;

    /**
     * @param int $Id
     * @param int $Number
     * @param int $FromAccount
     * @param int $ToAccount
     */
    public function __construct($Id, $Number, $FromAccount, $ToAccount)
    {
      $this->Id = $Id;
      $this->Number = $Number;
      $this->FromAccount = $FromAccount;
      $this->ToAccount = $ToAccount;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param SumIntervalHandle $Handle
     * @return \Economic\SumIntervalData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\SumIntervalData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\SumIntervalData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->AccountHandle;
    }

    /**
     * @param AccountHandle $AccountHandle
     * @return \Economic\SumIntervalData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromAccount()
    {
      return $this->FromAccount;
    }

    /**
     * @param int $FromAccount
     * @return \Economic\SumIntervalData
     */
    public function setFromAccount($FromAccount)
    {
      $this->FromAccount = $FromAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getToAccount()
    {
      return $this->ToAccount;
    }

    /**
     * @param int $ToAccount
     * @return \Economic\SumIntervalData
     */
    public function setToAccount($ToAccount)
    {
      $this->ToAccount = $ToAccount;
      return $this;
    }

}
