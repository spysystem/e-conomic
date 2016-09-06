<?php

namespace Economic;

class TemplateCollection_GetDataResponse
{

    /**
     * @var TemplateCollectionData $TemplateCollection_GetDataResult
     */
    protected $TemplateCollection_GetDataResult = null;

    /**
     * @param TemplateCollectionData $TemplateCollection_GetDataResult
     */
    public function __construct($TemplateCollection_GetDataResult)
    {
      $this->TemplateCollection_GetDataResult = $TemplateCollection_GetDataResult;
    }

    /**
     * @return TemplateCollectionData
     */
    public function getTemplateCollection_GetDataResult()
    {
      return $this->TemplateCollection_GetDataResult;
    }

    /**
     * @param TemplateCollectionData $TemplateCollection_GetDataResult
     * @return \Economic\TemplateCollection_GetDataResponse
     */
    public function setTemplateCollection_GetDataResult($TemplateCollection_GetDataResult)
    {
      $this->TemplateCollection_GetDataResult = $TemplateCollection_GetDataResult;
      return $this;
    }

}
