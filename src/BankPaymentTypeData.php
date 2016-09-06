<?php

namespace Economic;

class BankPaymentTypeData
{

    /**
     * @var BankPaymentTypeHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param BankPaymentTypeHandle $Handle
     * @return \Economic\BankPaymentTypeData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\BankPaymentTypeData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\BankPaymentTypeData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
