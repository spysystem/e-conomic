<?php

namespace Economic;

class ConnectAsAdministratorWithCustomerNumber
{

    /**
     * @var int $adminAgreementNo
     */
    protected $adminAgreementNo = null;

    /**
     * @var string $adminUserId
     */
    protected $adminUserId = null;

    /**
     * @var string $adminUserPassword
     */
    protected $adminUserPassword = null;

    /**
     * @var string $customerNumber
     */
    protected $customerNumber = null;

    /**
     * @param int $adminAgreementNo
     * @param string $adminUserId
     * @param string $adminUserPassword
     * @param string $customerNumber
     */
    public function __construct($adminAgreementNo, $adminUserId, $adminUserPassword, $customerNumber)
    {
      $this->adminAgreementNo = $adminAgreementNo;
      $this->adminUserId = $adminUserId;
      $this->adminUserPassword = $adminUserPassword;
      $this->customerNumber = $customerNumber;
    }

    /**
     * @return int
     */
    public function getAdminAgreementNo()
    {
      return $this->adminAgreementNo;
    }

    /**
     * @param int $adminAgreementNo
     * @return \Economic\ConnectAsAdministratorWithCustomerNumber
     */
    public function setAdminAgreementNo($adminAgreementNo)
    {
      $this->adminAgreementNo = $adminAgreementNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdminUserId()
    {
      return $this->adminUserId;
    }

    /**
     * @param string $adminUserId
     * @return \Economic\ConnectAsAdministratorWithCustomerNumber
     */
    public function setAdminUserId($adminUserId)
    {
      $this->adminUserId = $adminUserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdminUserPassword()
    {
      return $this->adminUserPassword;
    }

    /**
     * @param string $adminUserPassword
     * @return \Economic\ConnectAsAdministratorWithCustomerNumber
     */
    public function setAdminUserPassword($adminUserPassword)
    {
      $this->adminUserPassword = $adminUserPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->customerNumber;
    }

    /**
     * @param string $customerNumber
     * @return \Economic\ConnectAsAdministratorWithCustomerNumber
     */
    public function setCustomerNumber($customerNumber)
    {
      $this->customerNumber = $customerNumber;
      return $this;
    }

}
