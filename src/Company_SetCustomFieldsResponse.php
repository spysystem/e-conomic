<?php

namespace Economic;

class Company_SetCustomFieldsResponse
{

    /**
     * @var ArrayOfCustomField $Company_SetCustomFieldsResult
     */
    protected $Company_SetCustomFieldsResult = null;

    /**
     * @param ArrayOfCustomField $Company_SetCustomFieldsResult
     */
    public function __construct($Company_SetCustomFieldsResult)
    {
      $this->Company_SetCustomFieldsResult = $Company_SetCustomFieldsResult;
    }

    /**
     * @return ArrayOfCustomField
     */
    public function getCompany_SetCustomFieldsResult()
    {
      return $this->Company_SetCustomFieldsResult;
    }

    /**
     * @param ArrayOfCustomField $Company_SetCustomFieldsResult
     * @return \Economic\Company_SetCustomFieldsResponse
     */
    public function setCompany_SetCustomFieldsResult($Company_SetCustomFieldsResult)
    {
      $this->Company_SetCustomFieldsResult = $Company_SetCustomFieldsResult;
      return $this;
    }

}
