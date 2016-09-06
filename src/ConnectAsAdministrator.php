<?php

namespace Economic;

class ConnectAsAdministrator
{

    /**
     * @var int $adminAgreementNo
     */
    protected $adminAgreementNo = null;

    /**
     * @var string $adminUserID
     */
    protected $adminUserID = null;

    /**
     * @var string $adminUserPassword
     */
    protected $adminUserPassword = null;

    /**
     * @var int $clientAgreementNo
     */
    protected $clientAgreementNo = null;

    /**
     * @param int $adminAgreementNo
     * @param string $adminUserID
     * @param string $adminUserPassword
     * @param int $clientAgreementNo
     */
    public function __construct($adminAgreementNo, $adminUserID, $adminUserPassword, $clientAgreementNo)
    {
      $this->adminAgreementNo = $adminAgreementNo;
      $this->adminUserID = $adminUserID;
      $this->adminUserPassword = $adminUserPassword;
      $this->clientAgreementNo = $clientAgreementNo;
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
     * @return \Economic\ConnectAsAdministrator
     */
    public function setAdminAgreementNo($adminAgreementNo)
    {
      $this->adminAgreementNo = $adminAgreementNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdminUserID()
    {
      return $this->adminUserID;
    }

    /**
     * @param string $adminUserID
     * @return \Economic\ConnectAsAdministrator
     */
    public function setAdminUserID($adminUserID)
    {
      $this->adminUserID = $adminUserID;
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
     * @return \Economic\ConnectAsAdministrator
     */
    public function setAdminUserPassword($adminUserPassword)
    {
      $this->adminUserPassword = $adminUserPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientAgreementNo()
    {
      return $this->clientAgreementNo;
    }

    /**
     * @param int $clientAgreementNo
     * @return \Economic\ConnectAsAdministrator
     */
    public function setClientAgreementNo($clientAgreementNo)
    {
      $this->clientAgreementNo = $clientAgreementNo;
      return $this;
    }

}
