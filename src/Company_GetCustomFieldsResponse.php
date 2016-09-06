<?php

namespace Economic;

class Company_GetCustomFieldsResponse
{

    /**
     * @var ArrayOfCustomField $Company_GetCustomFieldsResult
     */
    protected $Company_GetCustomFieldsResult = null;

    /**
     * @param ArrayOfCustomField $Company_GetCustomFieldsResult
     */
    public function __construct($Company_GetCustomFieldsResult)
    {
      $this->Company_GetCustomFieldsResult = $Company_GetCustomFieldsResult;
    }

    /**
     * @return ArrayOfCustomField
     */
    public function getCompany_GetCustomFieldsResult()
    {
      return $this->Company_GetCustomFieldsResult;
    }

    /**
     * @param ArrayOfCustomField $Company_GetCustomFieldsResult
     * @return \Economic\Company_GetCustomFieldsResponse
     */
    public function setCompany_GetCustomFieldsResult($Company_GetCustomFieldsResult)
    {
      $this->Company_GetCustomFieldsResult = $Company_GetCustomFieldsResult;
      return $this;
    }

}
