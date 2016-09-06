<?php

namespace Economic;

class ExtendedVatZone_GetNumberResponse
{

    /**
     * @var string $ExtendedVatZone_GetNumberResult
     */
    protected $ExtendedVatZone_GetNumberResult = null;

    /**
     * @param string $ExtendedVatZone_GetNumberResult
     */
    public function __construct($ExtendedVatZone_GetNumberResult)
    {
      $this->ExtendedVatZone_GetNumberResult = $ExtendedVatZone_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getExtendedVatZone_GetNumberResult()
    {
      return $this->ExtendedVatZone_GetNumberResult;
    }

    /**
     * @param string $ExtendedVatZone_GetNumberResult
     * @return \Economic\ExtendedVatZone_GetNumberResponse
     */
    public function setExtendedVatZone_GetNumberResult($ExtendedVatZone_GetNumberResult)
    {
      $this->ExtendedVatZone_GetNumberResult = $ExtendedVatZone_GetNumberResult;
      return $this;
    }

}
