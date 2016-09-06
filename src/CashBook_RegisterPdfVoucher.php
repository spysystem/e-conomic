<?php

namespace Economic;

class CashBook_RegisterPdfVoucher
{

    /**
     * @var base64Binary $data
     */
    protected $data = null;

    /**
     * @var int $voucherNumber
     */
    protected $voucherNumber = null;

    /**
     * @var \DateTime $entryDate
     */
    protected $entryDate = null;

    /**
     * @param base64Binary $data
     * @param int $voucherNumber
     * @param \DateTime $entryDate
     */
    public function __construct($data, $voucherNumber, \DateTime $entryDate)
    {
      $this->data = $data;
      $this->voucherNumber = $voucherNumber;
      $this->entryDate = $entryDate->format(\DateTime::ATOM);
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param base64Binary $data
     * @return \Economic\CashBook_RegisterPdfVoucher
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

    /**
     * @return int
     */
    public function getVoucherNumber()
    {
      return $this->voucherNumber;
    }

    /**
     * @param int $voucherNumber
     * @return \Economic\CashBook_RegisterPdfVoucher
     */
    public function setVoucherNumber($voucherNumber)
    {
      $this->voucherNumber = $voucherNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEntryDate()
    {
      if ($this->entryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->entryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $entryDate
     * @return \Economic\CashBook_RegisterPdfVoucher
     */
    public function setEntryDate(\DateTime $entryDate)
    {
      $this->entryDate = $entryDate->format(\DateTime::ATOM);
      return $this;
    }

}
