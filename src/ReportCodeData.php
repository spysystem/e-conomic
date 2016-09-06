<?php

namespace Economic;

class ReportCodeData
{

    /**
     * @var ReportCodeHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id1
     */
    protected $Id1 = null;

    /**
     * @var int $Id2
     */
    protected $Id2 = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $FullCode
     */
    protected $FullCode = null;

    /**
     * @var ReportCodeHandle $ParentCodeHandle
     */
    protected $ParentCodeHandle = null;

    /**
     * @param int $Id1
     * @param int $Id2
     */
    public function __construct($Id1, $Id2)
    {
      $this->Id1 = $Id1;
      $this->Id2 = $Id2;
    }

    /**
     * @return ReportCodeHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ReportCodeHandle $Handle
     * @return \Economic\ReportCodeData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId1()
    {
      return $this->Id1;
    }

    /**
     * @param int $Id1
     * @return \Economic\ReportCodeData
     */
    public function setId1($Id1)
    {
      $this->Id1 = $Id1;
      return $this;
    }

    /**
     * @return int
     */
    public function getId2()
    {
      return $this->Id2;
    }

    /**
     * @param int $Id2
     * @return \Economic\ReportCodeData
     */
    public function setId2($Id2)
    {
      $this->Id2 = $Id2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Economic\ReportCodeData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullCode()
    {
      return $this->FullCode;
    }

    /**
     * @param string $FullCode
     * @return \Economic\ReportCodeData
     */
    public function setFullCode($FullCode)
    {
      $this->FullCode = $FullCode;
      return $this;
    }

    /**
     * @return ReportCodeHandle
     */
    public function getParentCodeHandle()
    {
      return $this->ParentCodeHandle;
    }

    /**
     * @param ReportCodeHandle $ParentCodeHandle
     * @return \Economic\ReportCodeData
     */
    public function setParentCodeHandle($ParentCodeHandle)
    {
      $this->ParentCodeHandle = $ParentCodeHandle;
      return $this;
    }

}
