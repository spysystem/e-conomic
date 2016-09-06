<?php

namespace Economic;

class CreditorGroup_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @param int $number
     * @param string $name
     * @param AccountHandle $accountHandle
     */
    public function __construct($number, $name, $accountHandle)
    {
      $this->number = $number;
      $this->name = $name;
      $this->accountHandle = $accountHandle;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\CreditorGroup_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\CreditorGroup_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\CreditorGroup_Create
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

}
