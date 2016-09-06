<?php

namespace Economic;

class DocumentArchiveCategory_GetNumberResponse
{

    /**
     * @var int $DocumentArchiveCategory_GetNumberResult
     */
    protected $DocumentArchiveCategory_GetNumberResult = null;

    /**
     * @param int $DocumentArchiveCategory_GetNumberResult
     */
    public function __construct($DocumentArchiveCategory_GetNumberResult)
    {
      $this->DocumentArchiveCategory_GetNumberResult = $DocumentArchiveCategory_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDocumentArchiveCategory_GetNumberResult()
    {
      return $this->DocumentArchiveCategory_GetNumberResult;
    }

    /**
     * @param int $DocumentArchiveCategory_GetNumberResult
     * @return \Economic\DocumentArchiveCategory_GetNumberResponse
     */
    public function setDocumentArchiveCategory_GetNumberResult($DocumentArchiveCategory_GetNumberResult)
    {
      $this->DocumentArchiveCategory_GetNumberResult = $DocumentArchiveCategory_GetNumberResult;
      return $this;
    }

}
