<?php

namespace Economic;

class TemplateCollection_GetNameResponse
{

    /**
     * @var string $TemplateCollection_GetNameResult
     */
    protected $TemplateCollection_GetNameResult = null;

    /**
     * @param string $TemplateCollection_GetNameResult
     */
    public function __construct($TemplateCollection_GetNameResult)
    {
      $this->TemplateCollection_GetNameResult = $TemplateCollection_GetNameResult;
    }

    /**
     * @return string
     */
    public function getTemplateCollection_GetNameResult()
    {
      return $this->TemplateCollection_GetNameResult;
    }

    /**
     * @param string $TemplateCollection_GetNameResult
     * @return \Economic\TemplateCollection_GetNameResponse
     */
    public function setTemplateCollection_GetNameResult($TemplateCollection_GetNameResult)
    {
      $this->TemplateCollection_GetNameResult = $TemplateCollection_GetNameResult;
      return $this;
    }

}
