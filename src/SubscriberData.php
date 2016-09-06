<?php

namespace Economic;

class SubscriberData
{

    /**
     * @var SubscriberHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $SubscriberId
     */
    protected $SubscriberId = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var SubscriptionHandle $SubscriptionHandle
     */
    protected $SubscriptionHandle = null;

    /**
     * @var ProjectHandle $ProjectHandle
     */
    protected $ProjectHandle = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $RegisteredDate
     */
    protected $RegisteredDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var \DateTime $DiscountExpiryDate
     */
    protected $DiscountExpiryDate = null;

    /**
     * @var string $ExtraTextForInvoice
     */
    protected $ExtraTextForInvoice = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var float $SpecialPrice
     */
    protected $SpecialPrice = null;

    /**
     * @var float $QuantityFactor
     */
    protected $QuantityFactor = null;

    /**
     * @var float $PriceIndex
     */
    protected $PriceIndex = null;

    /**
     * @var float $DiscountAsPercent
     */
    protected $DiscountAsPercent = null;

    /**
     * @param int $SubscriberId
     * @param \DateTime $StartDate
     * @param \DateTime $RegisteredDate
     * @param \DateTime $EndDate
     */
    public function __construct($SubscriberId, \DateTime $StartDate, \DateTime $RegisteredDate, \DateTime $EndDate)
    {
      $this->SubscriberId = $SubscriberId;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->RegisteredDate = $RegisteredDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return SubscriberHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param SubscriberHandle $Handle
     * @return \Economic\SubscriberData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubscriberId()
    {
      return $this->SubscriberId;
    }

    /**
     * @param int $SubscriberId
     * @return \Economic\SubscriberData
     */
    public function setSubscriberId($SubscriberId)
    {
      $this->SubscriberId = $SubscriberId;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->DebtorHandle;
    }

    /**
     * @param DebtorHandle $DebtorHandle
     * @return \Economic\SubscriberData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
      return $this;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriptionHandle()
    {
      return $this->SubscriptionHandle;
    }

    /**
     * @param SubscriptionHandle $SubscriptionHandle
     * @return \Economic\SubscriberData
     */
    public function setSubscriptionHandle($SubscriptionHandle)
    {
      $this->SubscriptionHandle = $SubscriptionHandle;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->ProjectHandle;
    }

    /**
     * @param ProjectHandle $ProjectHandle
     * @return \Economic\SubscriberData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Economic\SubscriberData
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegisteredDate()
    {
      if ($this->RegisteredDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegisteredDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegisteredDate
     * @return \Economic\SubscriberData
     */
    public function setRegisteredDate(\DateTime $RegisteredDate)
    {
      $this->RegisteredDate = $RegisteredDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Economic\SubscriberData
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
      if ($this->ExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpiryDate
     * @return \Economic\SubscriberData
     */
    public function setExpiryDate(\DateTime $ExpiryDate = null)
    {
      if ($ExpiryDate == null) {
       $this->ExpiryDate = null;
      } else {
        $this->ExpiryDate = $ExpiryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDiscountExpiryDate()
    {
      if ($this->DiscountExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DiscountExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DiscountExpiryDate
     * @return \Economic\SubscriberData
     */
    public function setDiscountExpiryDate(\DateTime $DiscountExpiryDate = null)
    {
      if ($DiscountExpiryDate == null) {
       $this->DiscountExpiryDate = null;
      } else {
        $this->DiscountExpiryDate = $DiscountExpiryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraTextForInvoice()
    {
      return $this->ExtraTextForInvoice;
    }

    /**
     * @param string $ExtraTextForInvoice
     * @return \Economic\SubscriberData
     */
    public function setExtraTextForInvoice($ExtraTextForInvoice)
    {
      $this->ExtraTextForInvoice = $ExtraTextForInvoice;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \Economic\SubscriberData
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpecialPrice()
    {
      return $this->SpecialPrice;
    }

    /**
     * @param float $SpecialPrice
     * @return \Economic\SubscriberData
     */
    public function setSpecialPrice($SpecialPrice)
    {
      $this->SpecialPrice = $SpecialPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFactor()
    {
      return $this->QuantityFactor;
    }

    /**
     * @param float $QuantityFactor
     * @return \Economic\SubscriberData
     */
    public function setQuantityFactor($QuantityFactor)
    {
      $this->QuantityFactor = $QuantityFactor;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceIndex()
    {
      return $this->PriceIndex;
    }

    /**
     * @param float $PriceIndex
     * @return \Economic\SubscriberData
     */
    public function setPriceIndex($PriceIndex)
    {
      $this->PriceIndex = $PriceIndex;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAsPercent()
    {
      return $this->DiscountAsPercent;
    }

    /**
     * @param float $DiscountAsPercent
     * @return \Economic\SubscriberData
     */
    public function setDiscountAsPercent($DiscountAsPercent)
    {
      $this->DiscountAsPercent = $DiscountAsPercent;
      return $this;
    }

}
