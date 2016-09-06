<?php

namespace Economic;

class Invoice_GetDateResponse
{

    /**
     * @var \DateTime $Invoice_GetDateResult
     */
    protected $Invoice_GetDateResult = null;

    /**
     * @param \DateTime $Invoice_GetDateResult
     */
    public function __construct(\DateTime $Invoice_GetDateResult)
    {
      $this->Invoice_GetDateResult = $Invoice_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getInvoice_GetDateResult()
    {
      if ($this->Invoice_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Invoice_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Invoice_GetDateResult
     * @return \Economic\Invoice_GetDateResponse
     */
    public function setInvoice_GetDateResult(\DateTime $Invoice_GetDateResult)
    {
      $this->Invoice_GetDateResult = $Invoice_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
