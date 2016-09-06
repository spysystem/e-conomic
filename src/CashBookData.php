<?php

namespace Economic;

class CashBookData
{

    /**
     * @var CashBookHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return CashBookHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CashBookHandle $Handle
     * @return \Economic\CashBookData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
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
     * @return \Economic\CashBookData
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
     * @return \Economic\CashBookData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
