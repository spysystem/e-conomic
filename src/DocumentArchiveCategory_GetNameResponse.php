<?php

namespace Economic;

class DocumentArchiveCategory_GetNameResponse
{

    /**
     * @var string $DocumentArchiveCategory_GetNameResult
     */
    protected $DocumentArchiveCategory_GetNameResult = null;

    /**
     * @param string $DocumentArchiveCategory_GetNameResult
     */
    public function __construct($DocumentArchiveCategory_GetNameResult)
    {
      $this->DocumentArchiveCategory_GetNameResult = $DocumentArchiveCategory_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDocumentArchiveCategory_GetNameResult()
    {
      return $this->DocumentArchiveCategory_GetNameResult;
    }

    /**
     * @param string $DocumentArchiveCategory_GetNameResult
     * @return \Economic\DocumentArchiveCategory_GetNameResponse
     */
    public function setDocumentArchiveCategory_GetNameResult($DocumentArchiveCategory_GetNameResult)
    {
      $this->DocumentArchiveCategory_GetNameResult = $DocumentArchiveCategory_GetNameResult;
      return $this;
    }

}
