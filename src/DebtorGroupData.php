<?php

namespace Economic;

class DebtorGroupData
{

    /**
     * @var DebtorGroupHandle $Handle
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
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var TemplateCollectionHandle $LayoutHandle
     */
    protected $LayoutHandle = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DebtorGroupHandle $Handle
     * @return \Economic\DebtorGroupData
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
     * @return \Economic\DebtorGroupData
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
     * @return \Economic\DebtorGroupData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Economic\DebtorGroupData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getLayoutHandle()
    {
      return $this->LayoutHandle;
    }

    /**
     * @param TemplateCollectionHandle $LayoutHandle
     * @return \Economic\DebtorGroupData
     */
    public function setLayoutHandle($LayoutHandle)
    {
      $this->LayoutHandle = $LayoutHandle;
      return $this;
    }

}
