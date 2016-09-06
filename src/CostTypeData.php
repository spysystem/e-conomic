<?php

namespace Economic;

class CostTypeData
{

    /**
     * @var CostTypeHandle $Handle
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

    /**
     * @var CostTypeGroupHandle $CostTypeGroupHandle
     */
    protected $CostTypeGroupHandle = null;

    /**
     * @var VatAccountHandle $VatAccountHandle
     */
    protected $VatAccountHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostTypeHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CostTypeHandle $Handle
     * @return \Economic\CostTypeData
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
     * @return \Economic\CostTypeData
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
     * @return \Economic\CostTypeData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getCostTypeGroupHandle()
    {
      return $this->CostTypeGroupHandle;
    }

    /**
     * @param CostTypeGroupHandle $CostTypeGroupHandle
     * @return \Economic\CostTypeData
     */
    public function setCostTypeGroupHandle($CostTypeGroupHandle)
    {
      $this->CostTypeGroupHandle = $CostTypeGroupHandle;
      return $this;
    }

    /**
     * @return VatAccountHandle
     */
    public function getVatAccountHandle()
    {
      return $this->VatAccountHandle;
    }

    /**
     * @param VatAccountHandle $VatAccountHandle
     * @return \Economic\CostTypeData
     */
    public function setVatAccountHandle($VatAccountHandle)
    {
      $this->VatAccountHandle = $VatAccountHandle;
      return $this;
    }

}
