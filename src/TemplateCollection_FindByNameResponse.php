<?php

namespace Economic;

class TemplateCollection_FindByNameResponse
{

    /**
     * @var ArrayOfTemplateCollectionHandle $TemplateCollection_FindByNameResult
     */
    protected $TemplateCollection_FindByNameResult = null;

    /**
     * @param ArrayOfTemplateCollectionHandle $TemplateCollection_FindByNameResult
     */
    public function __construct($TemplateCollection_FindByNameResult)
    {
      $this->TemplateCollection_FindByNameResult = $TemplateCollection_FindByNameResult;
    }

    /**
     * @return ArrayOfTemplateCollectionHandle
     */
    public function getTemplateCollection_FindByNameResult()
    {
      return $this->TemplateCollection_FindByNameResult;
    }

    /**
     * @param ArrayOfTemplateCollectionHandle $TemplateCollection_FindByNameResult
     * @return \Economic\TemplateCollection_FindByNameResponse
     */
    public function setTemplateCollection_FindByNameResult($TemplateCollection_FindByNameResult)
    {
      $this->TemplateCollection_FindByNameResult = $TemplateCollection_FindByNameResult;
      return $this;
    }

}
