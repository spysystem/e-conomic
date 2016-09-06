<?php

namespace Economic;

class CostTypeGroupData
{

    /**
     * @var CostTypeGroupHandle $Handle
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
     * @var AccountHandle $AccountOngoingHandle
     */
    protected $AccountOngoingHandle = null;

    /**
     * @var AccountHandle $AccountClosedHandle
     */
    protected $AccountClosedHandle = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CostTypeGroupHandle $Handle
     * @return \Economic\CostTypeGroupData
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
     * @return \Economic\CostTypeGroupData
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
     * @return \Economic\CostTypeGroupData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountOngoingHandle()
    {
      return $this->AccountOngoingHandle;
    }

    /**
     * @param AccountHandle $AccountOngoingHandle
     * @return \Economic\CostTypeGroupData
     */
    public function setAccountOngoingHandle($AccountOngoingHandle)
    {
      $this->AccountOngoingHandle = $AccountOngoingHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountClosedHandle()
    {
      return $this->AccountClosedHandle;
    }

    /**
     * @param AccountHandle $AccountClosedHandle
     * @return \Economic\CostTypeGroupData
     */
    public function setAccountClosedHandle($AccountClosedHandle)
    {
      $this->AccountClosedHandle = $AccountClosedHandle;
      return $this;
    }

}
