<?php

namespace Economic;

class ScannedDocumentData
{

    /**
     * @var ScannedDocumentHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var DocumentStatus $Status
     */
    protected $Status = null;

    /**
     * @var DocumentArchiveCategoryHandle $CategoryHandle
     */
    protected $CategoryHandle = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var int $PageCount
     */
    protected $PageCount = null;

    /**
     * @var int $VoucherNumber
     */
    protected $VoucherNumber = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @param int $Number
     * @param DocumentStatus $Status
     */
    public function __construct($Number, $Status)
    {
      $this->Number = $Number;
      $this->Status = $Status;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ScannedDocumentHandle $Handle
     * @return \Economic\ScannedDocumentData
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
     * @return \Economic\ScannedDocumentData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return DocumentStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param DocumentStatus $Status
     * @return \Economic\ScannedDocumentData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getCategoryHandle()
    {
      return $this->CategoryHandle;
    }

    /**
     * @param DocumentArchiveCategoryHandle $CategoryHandle
     * @return \Economic\ScannedDocumentData
     */
    public function setCategoryHandle($CategoryHandle)
    {
      $this->CategoryHandle = $CategoryHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Economic\ScannedDocumentData
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
      return $this->PageCount;
    }

    /**
     * @param int $PageCount
     * @return \Economic\ScannedDocumentData
     */
    public function setPageCount($PageCount)
    {
      $this->PageCount = $PageCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getVoucherNumber()
    {
      return $this->VoucherNumber;
    }

    /**
     * @param int $VoucherNumber
     * @return \Economic\ScannedDocumentData
     */
    public function setVoucherNumber($VoucherNumber)
    {
      $this->VoucherNumber = $VoucherNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Economic\ScannedDocumentData
     */
    public function setFromDate(\DateTime $FromDate = null)
    {
      if ($FromDate == null) {
       $this->FromDate = null;
      } else {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Economic\ScannedDocumentData
     */
    public function setToDate(\DateTime $ToDate = null)
    {
      if ($ToDate == null) {
       $this->ToDate = null;
      } else {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
