<?php

namespace Economic;

class ExtendedVatZone_GetNameResponse
{

    /**
     * @var string $ExtendedVatZone_GetNameResult
     */
    protected $ExtendedVatZone_GetNameResult = null;

    /**
     * @param string $ExtendedVatZone_GetNameResult
     */
    public function __construct($ExtendedVatZone_GetNameResult)
    {
      $this->ExtendedVatZone_GetNameResult = $ExtendedVatZone_GetNameResult;
    }

    /**
     * @return string
     */
    public function getExtendedVatZone_GetNameResult()
    {
      return $this->ExtendedVatZone_GetNameResult;
    }

    /**
     * @param string $ExtendedVatZone_GetNameResult
     * @return \Economic\ExtendedVatZone_GetNameResponse
     */
    public function setExtendedVatZone_GetNameResult($ExtendedVatZone_GetNameResult)
    {
      $this->ExtendedVatZone_GetNameResult = $ExtendedVatZone_GetNameResult;
      return $this;
    }

}
