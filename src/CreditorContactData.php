<?php

namespace Economic;

class CreditorContactData
{

    /**
     * @var CreditorContactHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var CreditorHandle $CreditorHandle
     */
    protected $CreditorHandle = null;

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
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CreditorContactHandle $Handle
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->CreditorHandle;
    }

    /**
     * @param CreditorHandle $CreditorHandle
     * @return \Economic\CreditorContactData
     */
    public function setCreditorHandle($CreditorHandle)
    {
      $this->CreditorHandle = $CreditorHandle;
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
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
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
     * @return \Economic\CreditorContactData
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

}
