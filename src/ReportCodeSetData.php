<?php

namespace Economic;

class ReportCodeSetData
{

    /**
     * @var ReportCodeSetHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $CodeSet
     */
    protected $CodeSet = null;

    /**
     * @param int $Id
     * @param int $CodeSet
     */
    public function __construct($Id, $CodeSet)
    {
      $this->Id = $Id;
      $this->CodeSet = $CodeSet;
    }

    /**
     * @return ReportCodeSetHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ReportCodeSetHandle $Handle
     * @return \Economic\ReportCodeSetData
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
     * @return \Economic\ReportCodeSetData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \Economic\ReportCodeSetData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeSet()
    {
      return $this->CodeSet;
    }

    /**
     * @param int $CodeSet
     * @return \Economic\ReportCodeSetData
     */
    public function setCodeSet($CodeSet)
    {
      $this->CodeSet = $CodeSet;
      return $this;
    }

}
