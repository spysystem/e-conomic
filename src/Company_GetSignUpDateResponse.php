<?php

namespace Economic;

class Company_GetSignUpDateResponse
{

    /**
     * @var \DateTime $Company_GetSignUpDateResult
     */
    protected $Company_GetSignUpDateResult = null;

    /**
     * @param \DateTime $Company_GetSignUpDateResult
     */
    public function __construct(\DateTime $Company_GetSignUpDateResult)
    {
      $this->Company_GetSignUpDateResult = $Company_GetSignUpDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCompany_GetSignUpDateResult()
    {
      if ($this->Company_GetSignUpDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Company_GetSignUpDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Company_GetSignUpDateResult
     * @return \Economic\Company_GetSignUpDateResponse
     */
    public function setCompany_GetSignUpDateResult(\DateTime $Company_GetSignUpDateResult)
    {
      $this->Company_GetSignUpDateResult = $Company_GetSignUpDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
