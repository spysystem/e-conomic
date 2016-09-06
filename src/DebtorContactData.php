<?php

namespace Economic;

class DebtorContactData
{

    /**
     * @var DebtorContactHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $TelephoneNumber
     */
    protected $TelephoneNumber = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var boolean $IsToReceiveEmailCopyOfOrder
     */
    protected $IsToReceiveEmailCopyOfOrder = null;

    /**
     * @var boolean $IsToReceiveEmailCopyOfInvoice
     */
    protected $IsToReceiveEmailCopyOfInvoice = null;

    /**
     * @param int $Number
     * @param boolean $IsToReceiveEmailCopyOfOrder
     * @param boolean $IsToReceiveEmailCopyOfInvoice
     */
    public function __construct($Number, $IsToReceiveEmailCopyOfOrder, $IsToReceiveEmailCopyOfInvoice)
    {
      $this->Number = $Number;
      $this->IsToReceiveEmailCopyOfOrder = $IsToReceiveEmailCopyOfOrder;
      $this->IsToReceiveEmailCopyOfInvoice = $IsToReceiveEmailCopyOfInvoice;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DebtorContactHandle $Handle
     * @return \Economic\DebtorContactData
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
     * @return \Economic\DebtorContactData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->DebtorHandle;
    }

    /**
     * @param DebtorHandle $DebtorHandle
     * @return \Economic\DebtorContactData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
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
     * @return \Economic\DebtorContactData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Economic\DebtorContactData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber()
    {
      return $this->TelephoneNumber;
    }

    /**
     * @param string $TelephoneNumber
     * @return \Economic\DebtorContactData
     */
    public function setTelephoneNumber($TelephoneNumber)
    {
      $this->TelephoneNumber = $TelephoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Economic\DebtorContactData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \Economic\DebtorContactData
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \Economic\DebtorContactData
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsToReceiveEmailCopyOfOrder()
    {
      return $this->IsToReceiveEmailCopyOfOrder;
    }

    /**
     * @param boolean $IsToReceiveEmailCopyOfOrder
     * @return \Economic\DebtorContactData
     */
    public function setIsToReceiveEmailCopyOfOrder($IsToReceiveEmailCopyOfOrder)
    {
      $this->IsToReceiveEmailCopyOfOrder = $IsToReceiveEmailCopyOfOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsToReceiveEmailCopyOfInvoice()
    {
      return $this->IsToReceiveEmailCopyOfInvoice;
    }

    /**
     * @param boolean $IsToReceiveEmailCopyOfInvoice
     * @return \Economic\DebtorContactData
     */
    public function setIsToReceiveEmailCopyOfInvoice($IsToReceiveEmailCopyOfInvoice)
    {
      $this->IsToReceiveEmailCopyOfInvoice = $IsToReceiveEmailCopyOfInvoice;
      return $this;
    }

}
