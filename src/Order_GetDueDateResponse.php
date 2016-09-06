<?php

namespace Economic;

class Order_GetDueDateResponse
{

    /**
     * @var \DateTime $Order_GetDueDateResult
     */
    protected $Order_GetDueDateResult = null;

    /**
     * @param \DateTime $Order_GetDueDateResult
     */
    public function __construct(\DateTime $Order_GetDueDateResult)
    {
      $this->Order_GetDueDateResult = $Order_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getOrder_GetDueDateResult()
    {
      if ($this->Order_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Order_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Order_GetDueDateResult
     * @return \Economic\Order_GetDueDateResponse
     */
    public function setOrder_GetDueDateResult(\DateTime $Order_GetDueDateResult)
    {
      $this->Order_GetDueDateResult = $Order_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
