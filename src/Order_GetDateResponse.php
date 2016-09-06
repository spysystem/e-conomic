<?php

namespace Economic;

class Order_GetDateResponse
{

    /**
     * @var \DateTime $Order_GetDateResult
     */
    protected $Order_GetDateResult = null;

    /**
     * @param \DateTime $Order_GetDateResult
     */
    public function __construct(\DateTime $Order_GetDateResult)
    {
      $this->Order_GetDateResult = $Order_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getOrder_GetDateResult()
    {
      if ($this->Order_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Order_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Order_GetDateResult
     * @return \Economic\Order_GetDateResponse
     */
    public function setOrder_GetDateResult(\DateTime $Order_GetDateResult)
    {
      $this->Order_GetDateResult = $Order_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
