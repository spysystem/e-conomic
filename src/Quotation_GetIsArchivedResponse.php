<?php

namespace Economic;

class Quotation_GetIsArchivedResponse
{

    /**
     * @var boolean $Quotation_GetIsArchivedResult
     */
    protected $Quotation_GetIsArchivedResult = null;

    /**
     * @param boolean $Quotation_GetIsArchivedResult
     */
    public function __construct($Quotation_GetIsArchivedResult)
    {
      $this->Quotation_GetIsArchivedResult = $Quotation_GetIsArchivedResult;
    }

    /**
     * @return boolean
     */
    public function getQuotation_GetIsArchivedResult()
    {
      return $this->Quotation_GetIsArchivedResult;
    }

    /**
     * @param boolean $Quotation_GetIsArchivedResult
     * @return \Economic\Quotation_GetIsArchivedResponse
     */
    public function setQuotation_GetIsArchivedResult($Quotation_GetIsArchivedResult)
    {
      $this->Quotation_GetIsArchivedResult = $Quotation_GetIsArchivedResult;
      return $this;
    }

}
