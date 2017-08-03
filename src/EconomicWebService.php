<?php

namespace Economic;

/**
 * Class EconomicWebService
 *
 * @package Economic
 */
class EconomicWebService extends \SoapClient
{
	const	WSDLUrl	= 'https://api.e-conomic.com/secure/api1/EconomicWebService.asmx?WSDL';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'TermOfPayment_SetDistributionInPercent' => 'Economic\\TermOfPayment_SetDistributionInPercent',
      'TermOfPaymentHandle' => 'Economic\\TermOfPaymentHandle',
      'TermOfPayment_SetDistributionInPercentResponse' => 'Economic\\TermOfPayment_SetDistributionInPercentResponse',
      'TermOfPayment_GetDistributionInPercent2' => 'Economic\\TermOfPayment_GetDistributionInPercent2',
      'TermOfPayment_GetDistributionInPercent2Response' => 'Economic\\TermOfPayment_GetDistributionInPercent2Response',
      'TimeEntry_ApproveEntries' => 'Economic\\TimeEntry_ApproveEntries',
      'ArrayOfTimeEntryHandle' => 'Economic\\ArrayOfTimeEntryHandle',
      'TimeEntryHandle' => 'Economic\\TimeEntryHandle',
      'TimeEntry_ApproveEntriesResponse' => 'Economic\\TimeEntry_ApproveEntriesResponse',
      'TimeEntry_CreateFromData' => 'Economic\\TimeEntry_CreateFromData',
      'TimeEntryData' => 'Economic\\TimeEntryData',
      'ProjectHandle' => 'Economic\\ProjectHandle',
      'ActivityHandle' => 'Economic\\ActivityHandle',
      'EmployeeHandle' => 'Economic\\EmployeeHandle',
      'TimeEntry_CreateFromDataResponse' => 'Economic\\TimeEntry_CreateFromDataResponse',
      'TimeEntry_CreateFromDataArray' => 'Economic\\TimeEntry_CreateFromDataArray',
      'ArrayOfTimeEntryData' => 'Economic\\ArrayOfTimeEntryData',
      'TimeEntry_CreateFromDataArrayResponse' => 'Economic\\TimeEntry_CreateFromDataArrayResponse',
      'TimeEntry_UpdateFromDataArray' => 'Economic\\TimeEntry_UpdateFromDataArray',
      'TimeEntry_UpdateFromDataArrayResponse' => 'Economic\\TimeEntry_UpdateFromDataArrayResponse',
      'TimeEntry_UpdateFromData' => 'Economic\\TimeEntry_UpdateFromData',
      'TimeEntry_UpdateFromDataResponse' => 'Economic\\TimeEntry_UpdateFromDataResponse',
      'TimeEntry_GetData' => 'Economic\\TimeEntry_GetData',
      'TimeEntry_GetDataResponse' => 'Economic\\TimeEntry_GetDataResponse',
      'TimeEntry_GetDataArray' => 'Economic\\TimeEntry_GetDataArray',
      'TimeEntry_GetDataArrayResponse' => 'Economic\\TimeEntry_GetDataArrayResponse',
      'TimeEntry_Create' => 'Economic\\TimeEntry_Create',
      'TimeEntry_CreateResponse' => 'Economic\\TimeEntry_CreateResponse',
      'TimeEntry_CreateOnCurrentUser' => 'Economic\\TimeEntry_CreateOnCurrentUser',
      'TimeEntry_CreateOnCurrentUserResponse' => 'Economic\\TimeEntry_CreateOnCurrentUserResponse',
      'TimeEntry_GetAll' => 'Economic\\TimeEntry_GetAll',
      'TimeEntry_GetAllResponse' => 'Economic\\TimeEntry_GetAllResponse',
      'TimeEntry_GetAllUpdated' => 'Economic\\TimeEntry_GetAllUpdated',
      'TimeEntry_GetAllUpdatedResponse' => 'Economic\\TimeEntry_GetAllUpdatedResponse',
      'TimeEntry_FindApprovedByDate' => 'Economic\\TimeEntry_FindApprovedByDate',
      'TimeEntry_FindApprovedByDateResponse' => 'Economic\\TimeEntry_FindApprovedByDateResponse',
      'TimeEntry_Delete' => 'Economic\\TimeEntry_Delete',
      'TimeEntry_DeleteResponse' => 'Economic\\TimeEntry_DeleteResponse',
      'TimeEntry_GetId' => 'Economic\\TimeEntry_GetId',
      'TimeEntry_GetIdResponse' => 'Economic\\TimeEntry_GetIdResponse',
      'TimeEntry_GetProject' => 'Economic\\TimeEntry_GetProject',
      'TimeEntry_GetProjectResponse' => 'Economic\\TimeEntry_GetProjectResponse',
      'TimeEntry_GetActivity' => 'Economic\\TimeEntry_GetActivity',
      'TimeEntry_GetActivityResponse' => 'Economic\\TimeEntry_GetActivityResponse',
      'TimeEntry_GetEmployee' => 'Economic\\TimeEntry_GetEmployee',
      'TimeEntry_GetEmployeeResponse' => 'Economic\\TimeEntry_GetEmployeeResponse',
      'TimeEntry_GetDate' => 'Economic\\TimeEntry_GetDate',
      'TimeEntry_GetDateResponse' => 'Economic\\TimeEntry_GetDateResponse',
      'TimeEntry_GetText' => 'Economic\\TimeEntry_GetText',
      'TimeEntry_GetTextResponse' => 'Economic\\TimeEntry_GetTextResponse',
      'TimeEntry_SetText' => 'Economic\\TimeEntry_SetText',
      'TimeEntry_SetTextResponse' => 'Economic\\TimeEntry_SetTextResponse',
      'TimeEntry_GetNumberOfHours' => 'Economic\\TimeEntry_GetNumberOfHours',
      'TimeEntry_GetNumberOfHoursResponse' => 'Economic\\TimeEntry_GetNumberOfHoursResponse',
      'TimeEntry_GetSalesPrice' => 'Economic\\TimeEntry_GetSalesPrice',
      'TimeEntry_GetSalesPriceResponse' => 'Economic\\TimeEntry_GetSalesPriceResponse',
      'TimeEntry_GetCostPrice' => 'Economic\\TimeEntry_GetCostPrice',
      'TimeEntry_GetCostPriceResponse' => 'Economic\\TimeEntry_GetCostPriceResponse',
      'TimeEntry_GetApproved' => 'Economic\\TimeEntry_GetApproved',
      'TimeEntry_GetApprovedResponse' => 'Economic\\TimeEntry_GetApprovedResponse',
      'Unit_CreateFromData' => 'Economic\\Unit_CreateFromData',
      'UnitData' => 'Economic\\UnitData',
      'UnitHandle' => 'Economic\\UnitHandle',
      'Unit_CreateFromDataResponse' => 'Economic\\Unit_CreateFromDataResponse',
      'Unit_CreateFromDataArray' => 'Economic\\Unit_CreateFromDataArray',
      'ArrayOfUnitData' => 'Economic\\ArrayOfUnitData',
      'Unit_CreateFromDataArrayResponse' => 'Economic\\Unit_CreateFromDataArrayResponse',
      'ArrayOfUnitHandle' => 'Economic\\ArrayOfUnitHandle',
      'Unit_UpdateFromDataArray' => 'Economic\\Unit_UpdateFromDataArray',
      'Unit_UpdateFromDataArrayResponse' => 'Economic\\Unit_UpdateFromDataArrayResponse',
      'Unit_UpdateFromData' => 'Economic\\Unit_UpdateFromData',
      'Unit_UpdateFromDataResponse' => 'Economic\\Unit_UpdateFromDataResponse',
      'Unit_GetData' => 'Economic\\Unit_GetData',
      'Unit_GetDataResponse' => 'Economic\\Unit_GetDataResponse',
      'Unit_GetDataArray' => 'Economic\\Unit_GetDataArray',
      'Unit_GetDataArrayResponse' => 'Economic\\Unit_GetDataArrayResponse',
      'Unit_Create' => 'Economic\\Unit_Create',
      'Unit_CreateResponse' => 'Economic\\Unit_CreateResponse',
      'Unit_GetAll' => 'Economic\\Unit_GetAll',
      'Unit_GetAllResponse' => 'Economic\\Unit_GetAllResponse',
      'Unit_FindByName' => 'Economic\\Unit_FindByName',
      'Unit_FindByNameResponse' => 'Economic\\Unit_FindByNameResponse',
      'Unit_FindByNumber' => 'Economic\\Unit_FindByNumber',
      'Unit_FindByNumberResponse' => 'Economic\\Unit_FindByNumberResponse',
      'Unit_FindByNumberList' => 'Economic\\Unit_FindByNumberList',
      'ArrayOfInt' => 'Economic\\ArrayOfInt',
      'Unit_FindByNumberListResponse' => 'Economic\\Unit_FindByNumberListResponse',
      'Unit_Delete' => 'Economic\\Unit_Delete',
      'Unit_DeleteResponse' => 'Economic\\Unit_DeleteResponse',
      'Unit_GetNumber' => 'Economic\\Unit_GetNumber',
      'Unit_GetNumberResponse' => 'Economic\\Unit_GetNumberResponse',
      'Unit_GetName' => 'Economic\\Unit_GetName',
      'Unit_GetNameResponse' => 'Economic\\Unit_GetNameResponse',
      'Unit_SetName' => 'Economic\\Unit_SetName',
      'Unit_SetNameResponse' => 'Economic\\Unit_SetNameResponse',
      'VatAccount_UpdateFromDataArray' => 'Economic\\VatAccount_UpdateFromDataArray',
      'ArrayOfVatAccountData' => 'Economic\\ArrayOfVatAccountData',
      'VatAccountData' => 'Economic\\VatAccountData',
      'VatAccountHandle' => 'Economic\\VatAccountHandle',
      'AccountHandle' => 'Economic\\AccountHandle',
      'VatAccount_UpdateFromDataArrayResponse' => 'Economic\\VatAccount_UpdateFromDataArrayResponse',
      'ArrayOfVatAccountHandle' => 'Economic\\ArrayOfVatAccountHandle',
      'VatAccount_UpdateFromData' => 'Economic\\VatAccount_UpdateFromData',
      'VatAccount_UpdateFromDataResponse' => 'Economic\\VatAccount_UpdateFromDataResponse',
      'VatAccount_GetData' => 'Economic\\VatAccount_GetData',
      'VatAccount_GetDataResponse' => 'Economic\\VatAccount_GetDataResponse',
      'VatAccount_GetDataArray' => 'Economic\\VatAccount_GetDataArray',
      'VatAccount_GetDataArrayResponse' => 'Economic\\VatAccount_GetDataArrayResponse',
      'VatAccount_GetAll' => 'Economic\\VatAccount_GetAll',
      'VatAccount_GetAllResponse' => 'Economic\\VatAccount_GetAllResponse',
      'VatAccount_FindByVatCode' => 'Economic\\VatAccount_FindByVatCode',
      'VatAccount_FindByVatCodeResponse' => 'Economic\\VatAccount_FindByVatCodeResponse',
      'VatAccount_GetVatCode' => 'Economic\\VatAccount_GetVatCode',
      'VatAccount_GetVatCodeResponse' => 'Economic\\VatAccount_GetVatCodeResponse',
      'VatAccount_GetName' => 'Economic\\VatAccount_GetName',
      'VatAccount_GetNameResponse' => 'Economic\\VatAccount_GetNameResponse',
      'VatAccount_GetType' => 'Economic\\VatAccount_GetType',
      'VatAccount_GetTypeResponse' => 'Economic\\VatAccount_GetTypeResponse',
      'VatAccount_GetRateAsPercent' => 'Economic\\VatAccount_GetRateAsPercent',
      'VatAccount_GetRateAsPercentResponse' => 'Economic\\VatAccount_GetRateAsPercentResponse',
      'VatAccount_GetAccount' => 'Economic\\VatAccount_GetAccount',
      'VatAccount_GetAccountResponse' => 'Economic\\VatAccount_GetAccountResponse',
      'VatAccount_GetContraAccount' => 'Economic\\VatAccount_GetContraAccount',
      'VatAccount_GetContraAccountResponse' => 'Economic\\VatAccount_GetContraAccountResponse',
      'ExtendedVatZone_FindByNumber' => 'Economic\\ExtendedVatZone_FindByNumber',
      'ExtendedVatZone_FindByNumberResponse' => 'Economic\\ExtendedVatZone_FindByNumberResponse',
      'ExtendedVatZoneHandle' => 'Economic\\ExtendedVatZoneHandle',
      'ExtendedVatZone_GetAll' => 'Economic\\ExtendedVatZone_GetAll',
      'ExtendedVatZone_GetAllResponse' => 'Economic\\ExtendedVatZone_GetAllResponse',
      'ArrayOfExtendedVatZoneHandle' => 'Economic\\ArrayOfExtendedVatZoneHandle',
      'ExtendedVatZone_GetData' => 'Economic\\ExtendedVatZone_GetData',
      'ExtendedVatZone_GetDataResponse' => 'Economic\\ExtendedVatZone_GetDataResponse',
      'ExtendedVatZoneData' => 'Economic\\ExtendedVatZoneData',
      'ExtendedVatZone_GetDataArray' => 'Economic\\ExtendedVatZone_GetDataArray',
      'ExtendedVatZone_GetDataArrayResponse' => 'Economic\\ExtendedVatZone_GetDataArrayResponse',
      'ArrayOfExtendedVatZoneData' => 'Economic\\ArrayOfExtendedVatZoneData',
      'ExtendedVatZone_GetName' => 'Economic\\ExtendedVatZone_GetName',
      'ExtendedVatZone_GetNameResponse' => 'Economic\\ExtendedVatZone_GetNameResponse',
      'ExtendedVatZone_GetNumber' => 'Economic\\ExtendedVatZone_GetNumber',
      'ExtendedVatZone_GetNumberResponse' => 'Economic\\ExtendedVatZone_GetNumberResponse',
      'Debtor_GetExtendedVatZone' => 'Economic\\Debtor_GetExtendedVatZone',
      'DebtorHandle' => 'Economic\\DebtorHandle',
      'Debtor_GetExtendedVatZoneResponse' => 'Economic\\Debtor_GetExtendedVatZoneResponse',
      'Debtor_SetExtendedVatZone' => 'Economic\\Debtor_SetExtendedVatZone',
      'Debtor_SetExtendedVatZoneResponse' => 'Economic\\Debtor_SetExtendedVatZoneResponse',
      'HasInternationalLedger' => 'Economic\\HasInternationalLedger',
      'HasInternationalLedgerResponse' => 'Economic\\HasInternationalLedgerResponse',
      'Verify_XEconomicAppIdentifier' => 'Economic\\Verify_XEconomicAppIdentifier',
      'Verify_XEconomicAppIdentifierResponse' => 'Economic\\Verify_XEconomicAppIdentifierResponse',
      'Subscription_SetSubscriptionInterval' => 'Economic\\Subscription_SetSubscriptionInterval',
      'SubscriptionHandle' => 'Economic\\SubscriptionHandle',
      'Subscription_SetSubscriptionIntervalResponse' => 'Economic\\Subscription_SetSubscriptionIntervalResponse',
      'Subscription_GetSubscriptionInterval' => 'Economic\\Subscription_GetSubscriptionInterval',
      'Subscription_GetSubscriptionIntervalResponse' => 'Economic\\Subscription_GetSubscriptionIntervalResponse',
      'Subscription_GetCalendarYearBasis' => 'Economic\\Subscription_GetCalendarYearBasis',
      'Subscription_GetCalendarYearBasisResponse' => 'Economic\\Subscription_GetCalendarYearBasisResponse',
      'Subscription_SetCalendarYearBasis' => 'Economic\\Subscription_SetCalendarYearBasis',
      'Subscription_SetCalendarYearBasisResponse' => 'Economic\\Subscription_SetCalendarYearBasisResponse',
      'Subscription_SetCollection' => 'Economic\\Subscription_SetCollection',
      'Subscription_SetCollectionResponse' => 'Economic\\Subscription_SetCollectionResponse',
      'Subscription_GetCollection' => 'Economic\\Subscription_GetCollection',
      'Subscription_GetCollectionResponse' => 'Economic\\Subscription_GetCollectionResponse',
      'Subscription_GetAddPeriod' => 'Economic\\Subscription_GetAddPeriod',
      'Subscription_GetAddPeriodResponse' => 'Economic\\Subscription_GetAddPeriodResponse',
      'Subscription_SetAddPeriod' => 'Economic\\Subscription_SetAddPeriod',
      'Subscription_SetAddPeriodResponse' => 'Economic\\Subscription_SetAddPeriodResponse',
      'Subscription_SetAllowMoreThanOneForEachDebtor' => 'Economic\\Subscription_SetAllowMoreThanOneForEachDebtor',
      'Subscription_SetAllowMoreThanOneForEachDebtorResponse' => 'Economic\\Subscription_SetAllowMoreThanOneForEachDebtorResponse',
      'Subscription_GetAllowMoreThanOneForEachDebtor' => 'Economic\\Subscription_GetAllowMoreThanOneForEachDebtor',
      'Subscription_GetAllowMoreThanOneForEachDebtorResponse' => 'Economic\\Subscription_GetAllowMoreThanOneForEachDebtorResponse',
      'Subscription_Create' => 'Economic\\Subscription_Create',
      'Subscription_CreateResponse' => 'Economic\\Subscription_CreateResponse',
      'Subscription_FindByNumber' => 'Economic\\Subscription_FindByNumber',
      'Subscription_FindByNumberResponse' => 'Economic\\Subscription_FindByNumberResponse',
      'Subscription_FindByName' => 'Economic\\Subscription_FindByName',
      'Subscription_FindByNameResponse' => 'Economic\\Subscription_FindByNameResponse',
      'ArrayOfSubscriptionHandle' => 'Economic\\ArrayOfSubscriptionHandle',
      'Subscription_GetSubscriptionLines' => 'Economic\\Subscription_GetSubscriptionLines',
      'Subscription_GetSubscriptionLinesResponse' => 'Economic\\Subscription_GetSubscriptionLinesResponse',
      'ArrayOfSubscriptionLineHandle' => 'Economic\\ArrayOfSubscriptionLineHandle',
      'SubscriptionLineHandle' => 'Economic\\SubscriptionLineHandle',
      'Subscription_GetNextAvailableNumber' => 'Economic\\Subscription_GetNextAvailableNumber',
      'Subscription_GetNextAvailableNumberResponse' => 'Economic\\Subscription_GetNextAvailableNumberResponse',
      'Subscription_Delete' => 'Economic\\Subscription_Delete',
      'Subscription_DeleteResponse' => 'Economic\\Subscription_DeleteResponse',
      'Subscription_GetSubscribers' => 'Economic\\Subscription_GetSubscribers',
      'Subscription_GetSubscribersResponse' => 'Economic\\Subscription_GetSubscribersResponse',
      'ArrayOfSubscriberHandle' => 'Economic\\ArrayOfSubscriberHandle',
      'SubscriberHandle' => 'Economic\\SubscriberHandle',
      'Subscription_GetAll' => 'Economic\\Subscription_GetAll',
      'Subscription_GetAllResponse' => 'Economic\\Subscription_GetAllResponse',
      'SubscriptionLine_CreateFromData' => 'Economic\\SubscriptionLine_CreateFromData',
      'SubscriptionLineData' => 'Economic\\SubscriptionLineData',
      'ProductHandle' => 'Economic\\ProductHandle',
      'DepartmentHandle' => 'Economic\\DepartmentHandle',
      'SubscriptionLine_CreateFromDataResponse' => 'Economic\\SubscriptionLine_CreateFromDataResponse',
      'SubscriptionLine_CreateFromDataArray' => 'Economic\\SubscriptionLine_CreateFromDataArray',
      'ArrayOfSubscriptionLineData' => 'Economic\\ArrayOfSubscriptionLineData',
      'SubscriptionLine_CreateFromDataArrayResponse' => 'Economic\\SubscriptionLine_CreateFromDataArrayResponse',
      'SubscriptionLine_UpdateFromDataArray' => 'Economic\\SubscriptionLine_UpdateFromDataArray',
      'SubscriptionLine_UpdateFromDataArrayResponse' => 'Economic\\SubscriptionLine_UpdateFromDataArrayResponse',
      'SubscriptionLine_UpdateFromData' => 'Economic\\SubscriptionLine_UpdateFromData',
      'SubscriptionLine_UpdateFromDataResponse' => 'Economic\\SubscriptionLine_UpdateFromDataResponse',
      'SubscriptionLine_GetData' => 'Economic\\SubscriptionLine_GetData',
      'SubscriptionLine_GetDataResponse' => 'Economic\\SubscriptionLine_GetDataResponse',
      'SubscriptionLine_GetDataArray' => 'Economic\\SubscriptionLine_GetDataArray',
      'SubscriptionLine_GetDataArrayResponse' => 'Economic\\SubscriptionLine_GetDataArrayResponse',
      'SubscriptionLine_GetNumber' => 'Economic\\SubscriptionLine_GetNumber',
      'SubscriptionLine_GetNumberResponse' => 'Economic\\SubscriptionLine_GetNumberResponse',
      'SubscriptionLine_GetSubscription' => 'Economic\\SubscriptionLine_GetSubscription',
      'SubscriptionLine_GetSubscriptionResponse' => 'Economic\\SubscriptionLine_GetSubscriptionResponse',
      'SubscriptionLine_GetProduct' => 'Economic\\SubscriptionLine_GetProduct',
      'SubscriptionLine_GetProductResponse' => 'Economic\\SubscriptionLine_GetProductResponse',
      'SubscriptionLine_SetProduct' => 'Economic\\SubscriptionLine_SetProduct',
      'SubscriptionLine_SetProductResponse' => 'Economic\\SubscriptionLine_SetProductResponse',
      'SubscriptionLine_GetQuantity' => 'Economic\\SubscriptionLine_GetQuantity',
      'SubscriptionLine_GetQuantityResponse' => 'Economic\\SubscriptionLine_GetQuantityResponse',
      'SubscriptionLine_SetQuantity' => 'Economic\\SubscriptionLine_SetQuantity',
      'SubscriptionLine_SetQuantityResponse' => 'Economic\\SubscriptionLine_SetQuantityResponse',
      'SubscriptionLine_SetDepartment' => 'Economic\\SubscriptionLine_SetDepartment',
      'SubscriptionLine_SetDepartmentResponse' => 'Economic\\SubscriptionLine_SetDepartmentResponse',
      'SubscriptionLine_GetDepartment' => 'Economic\\SubscriptionLine_GetDepartment',
      'SubscriptionLine_GetDepartmentResponse' => 'Economic\\SubscriptionLine_GetDepartmentResponse',
      'SubscriptionLine_SetProductName' => 'Economic\\SubscriptionLine_SetProductName',
      'SubscriptionLine_SetProductNameResponse' => 'Economic\\SubscriptionLine_SetProductNameResponse',
      'SubscriptionLine_GetProductName' => 'Economic\\SubscriptionLine_GetProductName',
      'SubscriptionLine_GetProductNameResponse' => 'Economic\\SubscriptionLine_GetProductNameResponse',
      'SubscriptionLine_GetSpecialPrice' => 'Economic\\SubscriptionLine_GetSpecialPrice',
      'SubscriptionLine_GetSpecialPriceResponse' => 'Economic\\SubscriptionLine_GetSpecialPriceResponse',
      'SubscriptionLine_SetSpecialPrice' => 'Economic\\SubscriptionLine_SetSpecialPrice',
      'SubscriptionLine_SetSpecialPriceResponse' => 'Economic\\SubscriptionLine_SetSpecialPriceResponse',
      'SubscriptionLine_Create' => 'Economic\\SubscriptionLine_Create',
      'SubscriptionLine_CreateResponse' => 'Economic\\SubscriptionLine_CreateResponse',
      'SubscriptionLine_FindByProduct' => 'Economic\\SubscriptionLine_FindByProduct',
      'SubscriptionLine_FindByProductResponse' => 'Economic\\SubscriptionLine_FindByProductResponse',
      'SubscriptionLine_FindByProductList' => 'Economic\\SubscriptionLine_FindByProductList',
      'ArrayOfProductHandle' => 'Economic\\ArrayOfProductHandle',
      'SubscriptionLine_FindByProductListResponse' => 'Economic\\SubscriptionLine_FindByProductListResponse',
      'SubscriptionLine_FindBySubscription' => 'Economic\\SubscriptionLine_FindBySubscription',
      'SubscriptionLine_FindBySubscriptionResponse' => 'Economic\\SubscriptionLine_FindBySubscriptionResponse',
      'SubscriptionLine_FindBySubscriptonList' => 'Economic\\SubscriptionLine_FindBySubscriptonList',
      'SubscriptionLine_FindBySubscriptonListResponse' => 'Economic\\SubscriptionLine_FindBySubscriptonListResponse',
      'SubscriptionLine_GetAll' => 'Economic\\SubscriptionLine_GetAll',
      'SubscriptionLine_GetAllResponse' => 'Economic\\SubscriptionLine_GetAllResponse',
      'SubscriptionLine_Delete' => 'Economic\\SubscriptionLine_Delete',
      'SubscriptionLine_DeleteResponse' => 'Economic\\SubscriptionLine_DeleteResponse',
      'SumInterval_CreateFromData' => 'Economic\\SumInterval_CreateFromData',
      'SumIntervalData' => 'Economic\\SumIntervalData',
      'SumIntervalHandle' => 'Economic\\SumIntervalHandle',
      'SumInterval_CreateFromDataResponse' => 'Economic\\SumInterval_CreateFromDataResponse',
      'SumInterval_CreateFromDataArray' => 'Economic\\SumInterval_CreateFromDataArray',
      'ArrayOfSumIntervalData' => 'Economic\\ArrayOfSumIntervalData',
      'SumInterval_CreateFromDataArrayResponse' => 'Economic\\SumInterval_CreateFromDataArrayResponse',
      'ArrayOfSumIntervalHandle' => 'Economic\\ArrayOfSumIntervalHandle',
      'SumInterval_UpdateFromDataArray' => 'Economic\\SumInterval_UpdateFromDataArray',
      'SumInterval_UpdateFromDataArrayResponse' => 'Economic\\SumInterval_UpdateFromDataArrayResponse',
      'SumInterval_UpdateFromData' => 'Economic\\SumInterval_UpdateFromData',
      'SumInterval_UpdateFromDataResponse' => 'Economic\\SumInterval_UpdateFromDataResponse',
      'SumInterval_GetData' => 'Economic\\SumInterval_GetData',
      'SumInterval_GetDataResponse' => 'Economic\\SumInterval_GetDataResponse',
      'SumInterval_GetDataArray' => 'Economic\\SumInterval_GetDataArray',
      'SumInterval_GetDataArrayResponse' => 'Economic\\SumInterval_GetDataArrayResponse',
      'SumInterval_Create' => 'Economic\\SumInterval_Create',
      'SumInterval_CreateResponse' => 'Economic\\SumInterval_CreateResponse',
      'SumInterval_Delete' => 'Economic\\SumInterval_Delete',
      'SumInterval_DeleteResponse' => 'Economic\\SumInterval_DeleteResponse',
      'SumInterval_GetAccount' => 'Economic\\SumInterval_GetAccount',
      'SumInterval_GetAccountResponse' => 'Economic\\SumInterval_GetAccountResponse',
      'SumInterval_GetFromAccount' => 'Economic\\SumInterval_GetFromAccount',
      'SumInterval_GetFromAccountResponse' => 'Economic\\SumInterval_GetFromAccountResponse',
      'SumInterval_SetFromAccount' => 'Economic\\SumInterval_SetFromAccount',
      'SumInterval_SetFromAccountResponse' => 'Economic\\SumInterval_SetFromAccountResponse',
      'SumInterval_GetToAccount' => 'Economic\\SumInterval_GetToAccount',
      'SumInterval_GetToAccountResponse' => 'Economic\\SumInterval_GetToAccountResponse',
      'SumInterval_SetToAccount' => 'Economic\\SumInterval_SetToAccount',
      'SumInterval_SetToAccountResponse' => 'Economic\\SumInterval_SetToAccountResponse',
      'TemplateCollection_GetData' => 'Economic\\TemplateCollection_GetData',
      'TemplateCollectionHandle' => 'Economic\\TemplateCollectionHandle',
      'TemplateCollection_GetDataResponse' => 'Economic\\TemplateCollection_GetDataResponse',
      'TemplateCollectionData' => 'Economic\\TemplateCollectionData',
      'TemplateCollection_GetDataArray' => 'Economic\\TemplateCollection_GetDataArray',
      'ArrayOfTemplateCollectionHandle' => 'Economic\\ArrayOfTemplateCollectionHandle',
      'TemplateCollection_GetDataArrayResponse' => 'Economic\\TemplateCollection_GetDataArrayResponse',
      'ArrayOfTemplateCollectionData' => 'Economic\\ArrayOfTemplateCollectionData',
      'TemplateCollection_GetAll' => 'Economic\\TemplateCollection_GetAll',
      'TemplateCollection_GetAllResponse' => 'Economic\\TemplateCollection_GetAllResponse',
      'TemplateCollection_FindByName' => 'Economic\\TemplateCollection_FindByName',
      'TemplateCollection_FindByNameResponse' => 'Economic\\TemplateCollection_FindByNameResponse',
      'TemplateCollection_GetName' => 'Economic\\TemplateCollection_GetName',
      'TemplateCollection_GetNameResponse' => 'Economic\\TemplateCollection_GetNameResponse',
      'TemplateCollection_SetName' => 'Economic\\TemplateCollection_SetName',
      'TemplateCollection_SetNameResponse' => 'Economic\\TemplateCollection_SetNameResponse',
      'TermOfPayment_CreateFromData' => 'Economic\\TermOfPayment_CreateFromData',
      'TermOfPaymentData' => 'Economic\\TermOfPaymentData',
      'TermOfPayment_CreateFromDataResponse' => 'Economic\\TermOfPayment_CreateFromDataResponse',
      'TermOfPayment_CreateFromDataArray' => 'Economic\\TermOfPayment_CreateFromDataArray',
      'ArrayOfTermOfPaymentData' => 'Economic\\ArrayOfTermOfPaymentData',
      'TermOfPayment_CreateFromDataArrayResponse' => 'Economic\\TermOfPayment_CreateFromDataArrayResponse',
      'ArrayOfTermOfPaymentHandle' => 'Economic\\ArrayOfTermOfPaymentHandle',
      'TermOfPayment_UpdateFromDataArray' => 'Economic\\TermOfPayment_UpdateFromDataArray',
      'TermOfPayment_UpdateFromDataArrayResponse' => 'Economic\\TermOfPayment_UpdateFromDataArrayResponse',
      'TermOfPayment_UpdateFromData' => 'Economic\\TermOfPayment_UpdateFromData',
      'TermOfPayment_UpdateFromDataResponse' => 'Economic\\TermOfPayment_UpdateFromDataResponse',
      'TermOfPayment_GetData' => 'Economic\\TermOfPayment_GetData',
      'TermOfPayment_GetDataResponse' => 'Economic\\TermOfPayment_GetDataResponse',
      'TermOfPayment_GetDataArray' => 'Economic\\TermOfPayment_GetDataArray',
      'TermOfPayment_GetDataArrayResponse' => 'Economic\\TermOfPayment_GetDataArrayResponse',
      'TermOfPayment_Create' => 'Economic\\TermOfPayment_Create',
      'TermOfPayment_CreateResponse' => 'Economic\\TermOfPayment_CreateResponse',
      'TermOfPayment_GetAll' => 'Economic\\TermOfPayment_GetAll',
      'TermOfPayment_GetAllResponse' => 'Economic\\TermOfPayment_GetAllResponse',
      'TermOfPayment_FindByName' => 'Economic\\TermOfPayment_FindByName',
      'TermOfPayment_FindByNameResponse' => 'Economic\\TermOfPayment_FindByNameResponse',
      'TermOfPayment_Delete' => 'Economic\\TermOfPayment_Delete',
      'TermOfPayment_DeleteResponse' => 'Economic\\TermOfPayment_DeleteResponse',
      'TermOfPayment_GetName' => 'Economic\\TermOfPayment_GetName',
      'TermOfPayment_GetNameResponse' => 'Economic\\TermOfPayment_GetNameResponse',
      'TermOfPayment_SetName' => 'Economic\\TermOfPayment_SetName',
      'TermOfPayment_SetNameResponse' => 'Economic\\TermOfPayment_SetNameResponse',
      'TermOfPayment_GetType' => 'Economic\\TermOfPayment_GetType',
      'TermOfPayment_GetTypeResponse' => 'Economic\\TermOfPayment_GetTypeResponse',
      'TermOfPayment_GetDays' => 'Economic\\TermOfPayment_GetDays',
      'TermOfPayment_GetDaysResponse' => 'Economic\\TermOfPayment_GetDaysResponse',
      'TermOfPayment_GetDescription' => 'Economic\\TermOfPayment_GetDescription',
      'TermOfPayment_GetDescriptionResponse' => 'Economic\\TermOfPayment_GetDescriptionResponse',
      'TermOfPayment_SetDescription' => 'Economic\\TermOfPayment_SetDescription',
      'TermOfPayment_SetDescriptionResponse' => 'Economic\\TermOfPayment_SetDescriptionResponse',
      'TermOfPayment_GetContraAccount' => 'Economic\\TermOfPayment_GetContraAccount',
      'TermOfPayment_GetContraAccountResponse' => 'Economic\\TermOfPayment_GetContraAccountResponse',
      'TermOfPayment_SetContraAccount' => 'Economic\\TermOfPayment_SetContraAccount',
      'TermOfPayment_SetContraAccountResponse' => 'Economic\\TermOfPayment_SetContraAccountResponse',
      'TermOfPayment_GetContraAccount2' => 'Economic\\TermOfPayment_GetContraAccount2',
      'TermOfPayment_GetContraAccount2Response' => 'Economic\\TermOfPayment_GetContraAccount2Response',
      'TermOfPayment_SetContraAccount2' => 'Economic\\TermOfPayment_SetContraAccount2',
      'TermOfPayment_SetContraAccount2Response' => 'Economic\\TermOfPayment_SetContraAccount2Response',
      'TermOfPayment_GetDebtor' => 'Economic\\TermOfPayment_GetDebtor',
      'TermOfPayment_GetDebtorResponse' => 'Economic\\TermOfPayment_GetDebtorResponse',
      'TermOfPayment_SetDebtor' => 'Economic\\TermOfPayment_SetDebtor',
      'TermOfPayment_SetDebtorResponse' => 'Economic\\TermOfPayment_SetDebtorResponse',
      'TermOfPayment_GetDistributionInPercent' => 'Economic\\TermOfPayment_GetDistributionInPercent',
      'TermOfPayment_GetDistributionInPercentResponse' => 'Economic\\TermOfPayment_GetDistributionInPercentResponse',
      'QuotationLine_SetDistributionKey' => 'Economic\\QuotationLine_SetDistributionKey',
      'QuotationLineHandle' => 'Economic\\QuotationLineHandle',
      'DistributionKeyHandle' => 'Economic\\DistributionKeyHandle',
      'QuotationLine_SetDistributionKeyResponse' => 'Economic\\QuotationLine_SetDistributionKeyResponse',
      'QuotationLine_Create' => 'Economic\\QuotationLine_Create',
      'QuotationHandle' => 'Economic\\QuotationHandle',
      'QuotationLine_CreateResponse' => 'Economic\\QuotationLine_CreateResponse',
      'QuotationLine_GetAll' => 'Economic\\QuotationLine_GetAll',
      'QuotationLine_GetAllResponse' => 'Economic\\QuotationLine_GetAllResponse',
      'ArrayOfQuotationLineHandle' => 'Economic\\ArrayOfQuotationLineHandle',
      'QuotationLine_FindByProduct' => 'Economic\\QuotationLine_FindByProduct',
      'QuotationLine_FindByProductResponse' => 'Economic\\QuotationLine_FindByProductResponse',
      'QuotationLine_FindByProductList' => 'Economic\\QuotationLine_FindByProductList',
      'QuotationLine_FindByProductListResponse' => 'Economic\\QuotationLine_FindByProductListResponse',
      'QuotationLine_Delete' => 'Economic\\QuotationLine_Delete',
      'QuotationLine_DeleteResponse' => 'Economic\\QuotationLine_DeleteResponse',
      'ReportCode_GetData' => 'Economic\\ReportCode_GetData',
      'ReportCodeHandle' => 'Economic\\ReportCodeHandle',
      'ReportCode_GetDataResponse' => 'Economic\\ReportCode_GetDataResponse',
      'ReportCodeData' => 'Economic\\ReportCodeData',
      'ReportCode_GetDataArray' => 'Economic\\ReportCode_GetDataArray',
      'ArrayOfReportCodeHandle' => 'Economic\\ArrayOfReportCodeHandle',
      'ReportCode_GetDataArrayResponse' => 'Economic\\ReportCode_GetDataArrayResponse',
      'ArrayOfReportCodeData' => 'Economic\\ArrayOfReportCodeData',
      'ReportCode_GetAccounts' => 'Economic\\ReportCode_GetAccounts',
      'ReportCode_GetAccountsResponse' => 'Economic\\ReportCode_GetAccountsResponse',
      'ArrayOfAccountHandle' => 'Economic\\ArrayOfAccountHandle',
      'ReportCode_GetCode' => 'Economic\\ReportCode_GetCode',
      'ReportCode_GetCodeResponse' => 'Economic\\ReportCode_GetCodeResponse',
      'ReportCode_GetFullCode' => 'Economic\\ReportCode_GetFullCode',
      'ReportCode_GetFullCodeResponse' => 'Economic\\ReportCode_GetFullCodeResponse',
      'ReportCode_GetParentCode' => 'Economic\\ReportCode_GetParentCode',
      'ReportCode_GetParentCodeResponse' => 'Economic\\ReportCode_GetParentCodeResponse',
      'ReportCodeSet_GetData' => 'Economic\\ReportCodeSet_GetData',
      'ReportCodeSetHandle' => 'Economic\\ReportCodeSetHandle',
      'ReportCodeSet_GetDataResponse' => 'Economic\\ReportCodeSet_GetDataResponse',
      'ReportCodeSetData' => 'Economic\\ReportCodeSetData',
      'ReportCodeSet_GetDataArray' => 'Economic\\ReportCodeSet_GetDataArray',
      'ArrayOfReportCodeSetHandle' => 'Economic\\ArrayOfReportCodeSetHandle',
      'ReportCodeSet_GetDataArrayResponse' => 'Economic\\ReportCodeSet_GetDataArrayResponse',
      'ArrayOfReportCodeSetData' => 'Economic\\ArrayOfReportCodeSetData',
      'ReportCodeSet_GetAll' => 'Economic\\ReportCodeSet_GetAll',
      'ReportCodeSet_GetAllResponse' => 'Economic\\ReportCodeSet_GetAllResponse',
      'ReportCodeSet_FindByName' => 'Economic\\ReportCodeSet_FindByName',
      'ReportCodeSet_FindByNameResponse' => 'Economic\\ReportCodeSet_FindByNameResponse',
      'ReportCodeSet_GetCodes' => 'Economic\\ReportCodeSet_GetCodes',
      'ReportCodeSet_GetCodesResponse' => 'Economic\\ReportCodeSet_GetCodesResponse',
      'ReportCodeSet_GetName' => 'Economic\\ReportCodeSet_GetName',
      'ReportCodeSet_GetNameResponse' => 'Economic\\ReportCodeSet_GetNameResponse',
      'ReportCodeSet_GetCodeSet' => 'Economic\\ReportCodeSet_GetCodeSet',
      'ReportCodeSet_GetCodeSetResponse' => 'Economic\\ReportCodeSet_GetCodeSetResponse',
      'ScannedDocument_GetData' => 'Economic\\ScannedDocument_GetData',
      'ScannedDocumentHandle' => 'Economic\\ScannedDocumentHandle',
      'ScannedDocument_GetDataResponse' => 'Economic\\ScannedDocument_GetDataResponse',
      'ScannedDocumentData' => 'Economic\\ScannedDocumentData',
      'DocumentArchiveCategoryHandle' => 'Economic\\DocumentArchiveCategoryHandle',
      'ScannedDocument_GetDataArray' => 'Economic\\ScannedDocument_GetDataArray',
      'ArrayOfScannedDocumentHandle' => 'Economic\\ArrayOfScannedDocumentHandle',
      'ScannedDocument_GetDataArrayResponse' => 'Economic\\ScannedDocument_GetDataArrayResponse',
      'ArrayOfScannedDocumentData' => 'Economic\\ArrayOfScannedDocumentData',
      'ScannedDocument_GetAll' => 'Economic\\ScannedDocument_GetAll',
      'ScannedDocument_GetAllResponse' => 'Economic\\ScannedDocument_GetAllResponse',
      'ScannedDocument_FindByVoucherNumber' => 'Economic\\ScannedDocument_FindByVoucherNumber',
      'ScannedDocument_FindByVoucherNumberResponse' => 'Economic\\ScannedDocument_FindByVoucherNumberResponse',
      'ScannedDocument_FindByVoucherNumberInterval' => 'Economic\\ScannedDocument_FindByVoucherNumberInterval',
      'ScannedDocument_FindByVoucherNumberIntervalResponse' => 'Economic\\ScannedDocument_FindByVoucherNumberIntervalResponse',
      'ScannedDocument_GetPdf' => 'Economic\\ScannedDocument_GetPdf',
      'ScannedDocument_GetPdfResponse' => 'Economic\\ScannedDocument_GetPdfResponse',
      'ScannedDocument_GetNumber' => 'Economic\\ScannedDocument_GetNumber',
      'ScannedDocument_GetNumberResponse' => 'Economic\\ScannedDocument_GetNumberResponse',
      'ScannedDocument_GetStatus' => 'Economic\\ScannedDocument_GetStatus',
      'ScannedDocument_GetStatusResponse' => 'Economic\\ScannedDocument_GetStatusResponse',
      'ScannedDocument_GetCategory' => 'Economic\\ScannedDocument_GetCategory',
      'ScannedDocument_GetCategoryResponse' => 'Economic\\ScannedDocument_GetCategoryResponse',
      'ScannedDocument_GetNote' => 'Economic\\ScannedDocument_GetNote',
      'ScannedDocument_GetNoteResponse' => 'Economic\\ScannedDocument_GetNoteResponse',
      'ScannedDocument_GetPageCount' => 'Economic\\ScannedDocument_GetPageCount',
      'ScannedDocument_GetPageCountResponse' => 'Economic\\ScannedDocument_GetPageCountResponse',
      'ScannedDocument_GetVoucherNumber' => 'Economic\\ScannedDocument_GetVoucherNumber',
      'ScannedDocument_GetVoucherNumberResponse' => 'Economic\\ScannedDocument_GetVoucherNumberResponse',
      'ScannedDocument_GetFromDate' => 'Economic\\ScannedDocument_GetFromDate',
      'ScannedDocument_GetFromDateResponse' => 'Economic\\ScannedDocument_GetFromDateResponse',
      'ScannedDocument_GetToDate' => 'Economic\\ScannedDocument_GetToDate',
      'ScannedDocument_GetToDateResponse' => 'Economic\\ScannedDocument_GetToDateResponse',
      'Subscriber_CreateFromData' => 'Economic\\Subscriber_CreateFromData',
      'SubscriberData' => 'Economic\\SubscriberData',
      'Subscriber_CreateFromDataResponse' => 'Economic\\Subscriber_CreateFromDataResponse',
      'Subscriber_CreateFromDataArray' => 'Economic\\Subscriber_CreateFromDataArray',
      'ArrayOfSubscriberData' => 'Economic\\ArrayOfSubscriberData',
      'Subscriber_CreateFromDataArrayResponse' => 'Economic\\Subscriber_CreateFromDataArrayResponse',
      'Subscriber_UpdateFromDataArray' => 'Economic\\Subscriber_UpdateFromDataArray',
      'Subscriber_UpdateFromDataArrayResponse' => 'Economic\\Subscriber_UpdateFromDataArrayResponse',
      'Subscriber_UpdateFromData' => 'Economic\\Subscriber_UpdateFromData',
      'Subscriber_UpdateFromDataResponse' => 'Economic\\Subscriber_UpdateFromDataResponse',
      'Subscriber_GetData' => 'Economic\\Subscriber_GetData',
      'Subscriber_GetDataResponse' => 'Economic\\Subscriber_GetDataResponse',
      'Subscriber_GetDataArray' => 'Economic\\Subscriber_GetDataArray',
      'Subscriber_GetDataArrayResponse' => 'Economic\\Subscriber_GetDataArrayResponse',
      'Subscriber_Create' => 'Economic\\Subscriber_Create',
      'Subscriber_CreateResponse' => 'Economic\\Subscriber_CreateResponse',
      'Subscriber_GetAll' => 'Economic\\Subscriber_GetAll',
      'Subscriber_GetAllResponse' => 'Economic\\Subscriber_GetAllResponse',
      'Subscriber_FindBySubscription' => 'Economic\\Subscriber_FindBySubscription',
      'Subscriber_FindBySubscriptionResponse' => 'Economic\\Subscriber_FindBySubscriptionResponse',
      'Subscriber_FindBySubscriptonList' => 'Economic\\Subscriber_FindBySubscriptonList',
      'Subscriber_FindBySubscriptonListResponse' => 'Economic\\Subscriber_FindBySubscriptonListResponse',
      'Subscriber_Delete' => 'Economic\\Subscriber_Delete',
      'Subscriber_DeleteResponse' => 'Economic\\Subscriber_DeleteResponse',
      'Subscriber_GetDebtor' => 'Economic\\Subscriber_GetDebtor',
      'Subscriber_GetDebtorResponse' => 'Economic\\Subscriber_GetDebtorResponse',
      'Subscriber_SetDebtor' => 'Economic\\Subscriber_SetDebtor',
      'Subscriber_SetDebtorResponse' => 'Economic\\Subscriber_SetDebtorResponse',
      'Subscriber_GetSubscription' => 'Economic\\Subscriber_GetSubscription',
      'Subscriber_GetSubscriptionResponse' => 'Economic\\Subscriber_GetSubscriptionResponse',
      'Subscriber_SetSubscription' => 'Economic\\Subscriber_SetSubscription',
      'Subscriber_SetSubscriptionResponse' => 'Economic\\Subscriber_SetSubscriptionResponse',
      'Subscriber_GetProject' => 'Economic\\Subscriber_GetProject',
      'Subscriber_GetProjectResponse' => 'Economic\\Subscriber_GetProjectResponse',
      'Subscriber_SetProject' => 'Economic\\Subscriber_SetProject',
      'Subscriber_SetProjectResponse' => 'Economic\\Subscriber_SetProjectResponse',
      'Subscriber_GetStartDate' => 'Economic\\Subscriber_GetStartDate',
      'Subscriber_GetStartDateResponse' => 'Economic\\Subscriber_GetStartDateResponse',
      'Subscriber_SetStartDate' => 'Economic\\Subscriber_SetStartDate',
      'Subscriber_SetStartDateResponse' => 'Economic\\Subscriber_SetStartDateResponse',
      'Subscriber_GetRegisteredDate' => 'Economic\\Subscriber_GetRegisteredDate',
      'Subscriber_GetRegisteredDateResponse' => 'Economic\\Subscriber_GetRegisteredDateResponse',
      'Subscriber_SetRegisteredDate' => 'Economic\\Subscriber_SetRegisteredDate',
      'Subscriber_SetRegisteredDateResponse' => 'Economic\\Subscriber_SetRegisteredDateResponse',
      'Subscriber_GetEndDate' => 'Economic\\Subscriber_GetEndDate',
      'Subscriber_GetEndDateResponse' => 'Economic\\Subscriber_GetEndDateResponse',
      'Subscriber_SetEndDate' => 'Economic\\Subscriber_SetEndDate',
      'Subscriber_SetEndDateResponse' => 'Economic\\Subscriber_SetEndDateResponse',
      'Subscriber_GetExpiryDate' => 'Economic\\Subscriber_GetExpiryDate',
      'Subscriber_GetExpiryDateResponse' => 'Economic\\Subscriber_GetExpiryDateResponse',
      'Subscriber_SetExpiryDate' => 'Economic\\Subscriber_SetExpiryDate',
      'Subscriber_SetExpiryDateResponse' => 'Economic\\Subscriber_SetExpiryDateResponse',
      'Subscriber_GetDiscountExpiryDate' => 'Economic\\Subscriber_GetDiscountExpiryDate',
      'Subscriber_GetDiscountExpiryDateResponse' => 'Economic\\Subscriber_GetDiscountExpiryDateResponse',
      'Subscriber_SetDiscountExpiryDate' => 'Economic\\Subscriber_SetDiscountExpiryDate',
      'Subscriber_SetDiscountExpiryDateResponse' => 'Economic\\Subscriber_SetDiscountExpiryDateResponse',
      'Subscriber_GetExtraTextForInvoice' => 'Economic\\Subscriber_GetExtraTextForInvoice',
      'Subscriber_GetExtraTextForInvoiceResponse' => 'Economic\\Subscriber_GetExtraTextForInvoiceResponse',
      'Subscriber_SetExtraTextForInvoice' => 'Economic\\Subscriber_SetExtraTextForInvoice',
      'Subscriber_SetExtraTextForInvoiceResponse' => 'Economic\\Subscriber_SetExtraTextForInvoiceResponse',
      'Subscriber_GetComments' => 'Economic\\Subscriber_GetComments',
      'Subscriber_GetCommentsResponse' => 'Economic\\Subscriber_GetCommentsResponse',
      'Subscriber_SetComments' => 'Economic\\Subscriber_SetComments',
      'Subscriber_SetCommentsResponse' => 'Economic\\Subscriber_SetCommentsResponse',
      'Subscriber_SetSpecialPrice' => 'Economic\\Subscriber_SetSpecialPrice',
      'Subscriber_SetSpecialPriceResponse' => 'Economic\\Subscriber_SetSpecialPriceResponse',
      'Subscriber_GetSpecialPrice' => 'Economic\\Subscriber_GetSpecialPrice',
      'Subscriber_GetSpecialPriceResponse' => 'Economic\\Subscriber_GetSpecialPriceResponse',
      'Subscriber_SetQuantityFactor' => 'Economic\\Subscriber_SetQuantityFactor',
      'Subscriber_SetQuantityFactorResponse' => 'Economic\\Subscriber_SetQuantityFactorResponse',
      'Subscriber_GetQuantityFactor' => 'Economic\\Subscriber_GetQuantityFactor',
      'Subscriber_GetQuantityFactorResponse' => 'Economic\\Subscriber_GetQuantityFactorResponse',
      'Subscriber_SetPriceIndex' => 'Economic\\Subscriber_SetPriceIndex',
      'Subscriber_SetPriceIndexResponse' => 'Economic\\Subscriber_SetPriceIndexResponse',
      'Subscriber_GetPriceIndex' => 'Economic\\Subscriber_GetPriceIndex',
      'Subscriber_GetPriceIndexResponse' => 'Economic\\Subscriber_GetPriceIndexResponse',
      'Subscriber_SetDiscountAsPercent' => 'Economic\\Subscriber_SetDiscountAsPercent',
      'Subscriber_SetDiscountAsPercentResponse' => 'Economic\\Subscriber_SetDiscountAsPercentResponse',
      'Subscriber_GetDiscountAsPercent' => 'Economic\\Subscriber_GetDiscountAsPercent',
      'Subscriber_GetDiscountAsPercentResponse' => 'Economic\\Subscriber_GetDiscountAsPercentResponse',
      'Subscription_CreateFromData' => 'Economic\\Subscription_CreateFromData',
      'SubscriptionData' => 'Economic\\SubscriptionData',
      'Subscription_CreateFromDataResponse' => 'Economic\\Subscription_CreateFromDataResponse',
      'Subscription_CreateFromDataArray' => 'Economic\\Subscription_CreateFromDataArray',
      'ArrayOfSubscriptionData' => 'Economic\\ArrayOfSubscriptionData',
      'Subscription_CreateFromDataArrayResponse' => 'Economic\\Subscription_CreateFromDataArrayResponse',
      'Subscription_UpdateFromDataArray' => 'Economic\\Subscription_UpdateFromDataArray',
      'Subscription_UpdateFromDataArrayResponse' => 'Economic\\Subscription_UpdateFromDataArrayResponse',
      'Subscription_UpdateFromData' => 'Economic\\Subscription_UpdateFromData',
      'Subscription_UpdateFromDataResponse' => 'Economic\\Subscription_UpdateFromDataResponse',
      'Subscription_GetData' => 'Economic\\Subscription_GetData',
      'Subscription_GetDataResponse' => 'Economic\\Subscription_GetDataResponse',
      'Subscription_GetDataArray' => 'Economic\\Subscription_GetDataArray',
      'Subscription_GetDataArrayResponse' => 'Economic\\Subscription_GetDataArrayResponse',
      'Subscription_GetNumber' => 'Economic\\Subscription_GetNumber',
      'Subscription_GetNumberResponse' => 'Economic\\Subscription_GetNumberResponse',
      'Subscription_GetName' => 'Economic\\Subscription_GetName',
      'Subscription_GetNameResponse' => 'Economic\\Subscription_GetNameResponse',
      'Subscription_SetName' => 'Economic\\Subscription_SetName',
      'Subscription_SetNameResponse' => 'Economic\\Subscription_SetNameResponse',
      'Subscription_GetDescription' => 'Economic\\Subscription_GetDescription',
      'Subscription_GetDescriptionResponse' => 'Economic\\Subscription_GetDescriptionResponse',
      'Subscription_SetDescription' => 'Economic\\Subscription_SetDescription',
      'Subscription_SetDescriptionResponse' => 'Economic\\Subscription_SetDescriptionResponse',
      'Subscription_GetIncludeName' => 'Economic\\Subscription_GetIncludeName',
      'Subscription_GetIncludeNameResponse' => 'Economic\\Subscription_GetIncludeNameResponse',
      'Subscription_SetIncludeName' => 'Economic\\Subscription_SetIncludeName',
      'Subscription_SetIncludeNameResponse' => 'Economic\\Subscription_SetIncludeNameResponse',
      'Quotation_SetYourReference' => 'Economic\\Quotation_SetYourReference',
      'DebtorContactHandle' => 'Economic\\DebtorContactHandle',
      'Quotation_SetYourReferenceResponse' => 'Economic\\Quotation_SetYourReferenceResponse',
      'Quotation_GetOurReference' => 'Economic\\Quotation_GetOurReference',
      'Quotation_GetOurReferenceResponse' => 'Economic\\Quotation_GetOurReferenceResponse',
      'Quotation_SetOurReference' => 'Economic\\Quotation_SetOurReference',
      'Quotation_SetOurReferenceResponse' => 'Economic\\Quotation_SetOurReferenceResponse',
      'Quotation_GetOurReference2' => 'Economic\\Quotation_GetOurReference2',
      'Quotation_GetOurReference2Response' => 'Economic\\Quotation_GetOurReference2Response',
      'Quotation_SetOurReference2' => 'Economic\\Quotation_SetOurReference2',
      'Quotation_SetOurReference2Response' => 'Economic\\Quotation_SetOurReference2Response',
      'Quotation_GetDate' => 'Economic\\Quotation_GetDate',
      'Quotation_GetDateResponse' => 'Economic\\Quotation_GetDateResponse',
      'Quotation_SetDate' => 'Economic\\Quotation_SetDate',
      'Quotation_SetDateResponse' => 'Economic\\Quotation_SetDateResponse',
      'Quotation_GetTermOfPayment' => 'Economic\\Quotation_GetTermOfPayment',
      'Quotation_GetTermOfPaymentResponse' => 'Economic\\Quotation_GetTermOfPaymentResponse',
      'Quotation_SetTermOfPayment' => 'Economic\\Quotation_SetTermOfPayment',
      'Quotation_SetTermOfPaymentResponse' => 'Economic\\Quotation_SetTermOfPaymentResponse',
      'Quotation_GetDueDate' => 'Economic\\Quotation_GetDueDate',
      'Quotation_GetDueDateResponse' => 'Economic\\Quotation_GetDueDateResponse',
      'Quotation_SetDueDate' => 'Economic\\Quotation_SetDueDate',
      'Quotation_SetDueDateResponse' => 'Economic\\Quotation_SetDueDateResponse',
      'Quotation_GetCurrency' => 'Economic\\Quotation_GetCurrency',
      'Quotation_GetCurrencyResponse' => 'Economic\\Quotation_GetCurrencyResponse',
      'CurrencyHandle' => 'Economic\\CurrencyHandle',
      'Quotation_SetCurrency' => 'Economic\\Quotation_SetCurrency',
      'Quotation_SetCurrencyResponse' => 'Economic\\Quotation_SetCurrencyResponse',
      'Quotation_GetExchangeRate' => 'Economic\\Quotation_GetExchangeRate',
      'Quotation_GetExchangeRateResponse' => 'Economic\\Quotation_GetExchangeRateResponse',
      'Quotation_SetExchangeRate' => 'Economic\\Quotation_SetExchangeRate',
      'Quotation_SetExchangeRateResponse' => 'Economic\\Quotation_SetExchangeRateResponse',
      'Quotation_GetIsVatIncluded' => 'Economic\\Quotation_GetIsVatIncluded',
      'Quotation_GetIsVatIncludedResponse' => 'Economic\\Quotation_GetIsVatIncludedResponse',
      'Quotation_SetIsVatIncluded' => 'Economic\\Quotation_SetIsVatIncluded',
      'Quotation_SetIsVatIncludedResponse' => 'Economic\\Quotation_SetIsVatIncludedResponse',
      'Quotation_GetVatZone' => 'Economic\\Quotation_GetVatZone',
      'Quotation_GetVatZoneResponse' => 'Economic\\Quotation_GetVatZoneResponse',
      'Quotation_SetVatZone' => 'Economic\\Quotation_SetVatZone',
      'Quotation_SetVatZoneResponse' => 'Economic\\Quotation_SetVatZoneResponse',
      'Quotation_GetLayout' => 'Economic\\Quotation_GetLayout',
      'Quotation_GetLayoutResponse' => 'Economic\\Quotation_GetLayoutResponse',
      'Quotation_SetLayout' => 'Economic\\Quotation_SetLayout',
      'Quotation_SetLayoutResponse' => 'Economic\\Quotation_SetLayoutResponse',
      'Quotation_GetDeliveryLocation' => 'Economic\\Quotation_GetDeliveryLocation',
      'Quotation_GetDeliveryLocationResponse' => 'Economic\\Quotation_GetDeliveryLocationResponse',
      'DeliveryLocationHandle' => 'Economic\\DeliveryLocationHandle',
      'Quotation_SetDeliveryLocation' => 'Economic\\Quotation_SetDeliveryLocation',
      'Quotation_SetDeliveryLocationResponse' => 'Economic\\Quotation_SetDeliveryLocationResponse',
      'Quotation_GetDeliveryAddress' => 'Economic\\Quotation_GetDeliveryAddress',
      'Quotation_GetDeliveryAddressResponse' => 'Economic\\Quotation_GetDeliveryAddressResponse',
      'Quotation_SetDeliveryAddress' => 'Economic\\Quotation_SetDeliveryAddress',
      'Quotation_SetDeliveryAddressResponse' => 'Economic\\Quotation_SetDeliveryAddressResponse',
      'Quotation_GetDeliveryPostalCode' => 'Economic\\Quotation_GetDeliveryPostalCode',
      'Quotation_GetDeliveryPostalCodeResponse' => 'Economic\\Quotation_GetDeliveryPostalCodeResponse',
      'Quotation_SetDeliveryPostalCode' => 'Economic\\Quotation_SetDeliveryPostalCode',
      'Quotation_SetDeliveryPostalCodeResponse' => 'Economic\\Quotation_SetDeliveryPostalCodeResponse',
      'Quotation_GetDeliveryCity' => 'Economic\\Quotation_GetDeliveryCity',
      'Quotation_GetDeliveryCityResponse' => 'Economic\\Quotation_GetDeliveryCityResponse',
      'Quotation_SetDeliveryCity' => 'Economic\\Quotation_SetDeliveryCity',
      'Quotation_SetDeliveryCityResponse' => 'Economic\\Quotation_SetDeliveryCityResponse',
      'Quotation_GetDeliveryCountry' => 'Economic\\Quotation_GetDeliveryCountry',
      'Quotation_GetDeliveryCountryResponse' => 'Economic\\Quotation_GetDeliveryCountryResponse',
      'Quotation_SetDeliveryCountry' => 'Economic\\Quotation_SetDeliveryCountry',
      'Quotation_SetDeliveryCountryResponse' => 'Economic\\Quotation_SetDeliveryCountryResponse',
      'Quotation_GetTermsOfDelivery' => 'Economic\\Quotation_GetTermsOfDelivery',
      'Quotation_GetTermsOfDeliveryResponse' => 'Economic\\Quotation_GetTermsOfDeliveryResponse',
      'Quotation_SetTermsOfDelivery' => 'Economic\\Quotation_SetTermsOfDelivery',
      'Quotation_SetTermsOfDeliveryResponse' => 'Economic\\Quotation_SetTermsOfDeliveryResponse',
      'Quotation_GetDeliveryDate' => 'Economic\\Quotation_GetDeliveryDate',
      'Quotation_GetDeliveryDateResponse' => 'Economic\\Quotation_GetDeliveryDateResponse',
      'Quotation_SetDeliveryDate' => 'Economic\\Quotation_SetDeliveryDate',
      'Quotation_SetDeliveryDateResponse' => 'Economic\\Quotation_SetDeliveryDateResponse',
      'Quotation_GetHeading' => 'Economic\\Quotation_GetHeading',
      'Quotation_GetHeadingResponse' => 'Economic\\Quotation_GetHeadingResponse',
      'Quotation_SetHeading' => 'Economic\\Quotation_SetHeading',
      'Quotation_SetHeadingResponse' => 'Economic\\Quotation_SetHeadingResponse',
      'Quotation_GetTextLine1' => 'Economic\\Quotation_GetTextLine1',
      'Quotation_GetTextLine1Response' => 'Economic\\Quotation_GetTextLine1Response',
      'Quotation_SetTextLine1' => 'Economic\\Quotation_SetTextLine1',
      'Quotation_SetTextLine1Response' => 'Economic\\Quotation_SetTextLine1Response',
      'Quotation_GetTextLine2' => 'Economic\\Quotation_GetTextLine2',
      'Quotation_GetTextLine2Response' => 'Economic\\Quotation_GetTextLine2Response',
      'Quotation_SetTextLine2' => 'Economic\\Quotation_SetTextLine2',
      'Quotation_SetTextLine2Response' => 'Economic\\Quotation_SetTextLine2Response',
      'Quotation_GetOtherReference' => 'Economic\\Quotation_GetOtherReference',
      'Quotation_GetOtherReferenceResponse' => 'Economic\\Quotation_GetOtherReferenceResponse',
      'Quotation_SetOtherReference' => 'Economic\\Quotation_SetOtherReference',
      'Quotation_SetOtherReferenceResponse' => 'Economic\\Quotation_SetOtherReferenceResponse',
      'Quotation_GetIsArchived' => 'Economic\\Quotation_GetIsArchived',
      'Quotation_GetIsArchivedResponse' => 'Economic\\Quotation_GetIsArchivedResponse',
      'Quotation_GetIsSent' => 'Economic\\Quotation_GetIsSent',
      'Quotation_GetIsSentResponse' => 'Economic\\Quotation_GetIsSentResponse',
      'Quotation_GetNetAmount' => 'Economic\\Quotation_GetNetAmount',
      'Quotation_GetNetAmountResponse' => 'Economic\\Quotation_GetNetAmountResponse',
      'Quotation_GetVatAmount' => 'Economic\\Quotation_GetVatAmount',
      'Quotation_GetVatAmountResponse' => 'Economic\\Quotation_GetVatAmountResponse',
      'Quotation_GetGrossAmount' => 'Economic\\Quotation_GetGrossAmount',
      'Quotation_GetGrossAmountResponse' => 'Economic\\Quotation_GetGrossAmountResponse',
      'Quotation_GetMargin' => 'Economic\\Quotation_GetMargin',
      'Quotation_GetMarginResponse' => 'Economic\\Quotation_GetMarginResponse',
      'Quotation_GetMarginAsPercent' => 'Economic\\Quotation_GetMarginAsPercent',
      'Quotation_GetMarginAsPercentResponse' => 'Economic\\Quotation_GetMarginAsPercentResponse',
      'Quotation_GetRoundingAmount' => 'Economic\\Quotation_GetRoundingAmount',
      'Quotation_GetRoundingAmountResponse' => 'Economic\\Quotation_GetRoundingAmountResponse',
      'Quotation_GetDebtorCounty' => 'Economic\\Quotation_GetDebtorCounty',
      'Quotation_GetDebtorCountyResponse' => 'Economic\\Quotation_GetDebtorCountyResponse',
      'Quotation_SetDebtorCounty' => 'Economic\\Quotation_SetDebtorCounty',
      'Quotation_SetDebtorCountyResponse' => 'Economic\\Quotation_SetDebtorCountyResponse',
      'Quotation_GetDeliveryCounty' => 'Economic\\Quotation_GetDeliveryCounty',
      'Quotation_GetDeliveryCountyResponse' => 'Economic\\Quotation_GetDeliveryCountyResponse',
      'Quotation_SetDeliveryCounty' => 'Economic\\Quotation_SetDeliveryCounty',
      'Quotation_SetDeliveryCountyResponse' => 'Economic\\Quotation_SetDeliveryCountyResponse',
      'QuotationLine_CreateFromData' => 'Economic\\QuotationLine_CreateFromData',
      'QuotationLineData' => 'Economic\\QuotationLineData',
      'InventoryLocationHandle' => 'Economic\\InventoryLocationHandle',
      'QuotationLine_CreateFromDataResponse' => 'Economic\\QuotationLine_CreateFromDataResponse',
      'QuotationLine_CreateFromDataArray' => 'Economic\\QuotationLine_CreateFromDataArray',
      'ArrayOfQuotationLineData' => 'Economic\\ArrayOfQuotationLineData',
      'QuotationLine_CreateFromDataArrayResponse' => 'Economic\\QuotationLine_CreateFromDataArrayResponse',
      'QuotationLine_UpdateFromDataArray' => 'Economic\\QuotationLine_UpdateFromDataArray',
      'QuotationLine_UpdateFromDataArrayResponse' => 'Economic\\QuotationLine_UpdateFromDataArrayResponse',
      'QuotationLine_UpdateFromData' => 'Economic\\QuotationLine_UpdateFromData',
      'QuotationLine_UpdateFromDataResponse' => 'Economic\\QuotationLine_UpdateFromDataResponse',
      'QuotationLine_GetData' => 'Economic\\QuotationLine_GetData',
      'QuotationLine_GetDataResponse' => 'Economic\\QuotationLine_GetDataResponse',
      'QuotationLine_GetDataArray' => 'Economic\\QuotationLine_GetDataArray',
      'QuotationLine_GetDataArrayResponse' => 'Economic\\QuotationLine_GetDataArrayResponse',
      'QuotationLine_GetNumber' => 'Economic\\QuotationLine_GetNumber',
      'QuotationLine_GetNumberResponse' => 'Economic\\QuotationLine_GetNumberResponse',
      'QuotationLine_GetQuotation' => 'Economic\\QuotationLine_GetQuotation',
      'QuotationLine_GetQuotationResponse' => 'Economic\\QuotationLine_GetQuotationResponse',
      'QuotationLine_SetDescription' => 'Economic\\QuotationLine_SetDescription',
      'QuotationLine_SetDescriptionResponse' => 'Economic\\QuotationLine_SetDescriptionResponse',
      'QuotationLine_GetDescription' => 'Economic\\QuotationLine_GetDescription',
      'QuotationLine_GetDescriptionResponse' => 'Economic\\QuotationLine_GetDescriptionResponse',
      'QuotationLine_GetDeliveryDate' => 'Economic\\QuotationLine_GetDeliveryDate',
      'QuotationLine_GetDeliveryDateResponse' => 'Economic\\QuotationLine_GetDeliveryDateResponse',
      'QuotationLine_SetDeliveryDate' => 'Economic\\QuotationLine_SetDeliveryDate',
      'QuotationLine_SetDeliveryDateResponse' => 'Economic\\QuotationLine_SetDeliveryDateResponse',
      'QuotationLine_GetUnit' => 'Economic\\QuotationLine_GetUnit',
      'QuotationLine_GetUnitResponse' => 'Economic\\QuotationLine_GetUnitResponse',
      'QuotationLine_SetUnit' => 'Economic\\QuotationLine_SetUnit',
      'QuotationLine_SetUnitResponse' => 'Economic\\QuotationLine_SetUnitResponse',
      'QuotationLine_GetProduct' => 'Economic\\QuotationLine_GetProduct',
      'QuotationLine_GetProductResponse' => 'Economic\\QuotationLine_GetProductResponse',
      'QuotationLine_SetProduct' => 'Economic\\QuotationLine_SetProduct',
      'QuotationLine_SetProductResponse' => 'Economic\\QuotationLine_SetProductResponse',
      'QuotationLine_SetQuantity' => 'Economic\\QuotationLine_SetQuantity',
      'QuotationLine_SetQuantityResponse' => 'Economic\\QuotationLine_SetQuantityResponse',
      'QuotationLine_GetQuantity' => 'Economic\\QuotationLine_GetQuantity',
      'QuotationLine_GetQuantityResponse' => 'Economic\\QuotationLine_GetQuantityResponse',
      'QuotationLine_SetUnitNetPrice' => 'Economic\\QuotationLine_SetUnitNetPrice',
      'QuotationLine_SetUnitNetPriceResponse' => 'Economic\\QuotationLine_SetUnitNetPriceResponse',
      'QuotationLine_SetUnitCostPrice' => 'Economic\\QuotationLine_SetUnitCostPrice',
      'QuotationLine_SetUnitCostPriceResponse' => 'Economic\\QuotationLine_SetUnitCostPriceResponse',
      'QuotationLine_GetUnitNetPrice' => 'Economic\\QuotationLine_GetUnitNetPrice',
      'QuotationLine_GetUnitNetPriceResponse' => 'Economic\\QuotationLine_GetUnitNetPriceResponse',
      'QuotationLine_GetDiscountAsPercent' => 'Economic\\QuotationLine_GetDiscountAsPercent',
      'QuotationLine_GetDiscountAsPercentResponse' => 'Economic\\QuotationLine_GetDiscountAsPercentResponse',
      'QuotationLine_SetDiscountAsPercent' => 'Economic\\QuotationLine_SetDiscountAsPercent',
      'QuotationLine_SetDiscountAsPercentResponse' => 'Economic\\QuotationLine_SetDiscountAsPercentResponse',
      'QuotationLine_GetUnitCostPrice' => 'Economic\\QuotationLine_GetUnitCostPrice',
      'QuotationLine_GetUnitCostPriceResponse' => 'Economic\\QuotationLine_GetUnitCostPriceResponse',
      'QuotationLine_GetTotalNetAmount' => 'Economic\\QuotationLine_GetTotalNetAmount',
      'QuotationLine_GetTotalNetAmountResponse' => 'Economic\\QuotationLine_GetTotalNetAmountResponse',
      'QuotationLine_GetTotalMargin' => 'Economic\\QuotationLine_GetTotalMargin',
      'QuotationLine_GetTotalMarginResponse' => 'Economic\\QuotationLine_GetTotalMarginResponse',
      'QuotationLine_GetMarginAsPercent' => 'Economic\\QuotationLine_GetMarginAsPercent',
      'QuotationLine_GetMarginAsPercentResponse' => 'Economic\\QuotationLine_GetMarginAsPercentResponse',
      'QuotationLine_GetDepartment' => 'Economic\\QuotationLine_GetDepartment',
      'QuotationLine_GetDepartmentResponse' => 'Economic\\QuotationLine_GetDepartmentResponse',
      'QuotationLine_SetDepartment' => 'Economic\\QuotationLine_SetDepartment',
      'QuotationLine_SetDepartmentResponse' => 'Economic\\QuotationLine_SetDepartmentResponse',
      'QuotationLine_GetDistributionKey' => 'Economic\\QuotationLine_GetDistributionKey',
      'QuotationLine_GetDistributionKeyResponse' => 'Economic\\QuotationLine_GetDistributionKeyResponse',
      'Project_CreateFromDataArray' => 'Economic\\Project_CreateFromDataArray',
      'ArrayOfProjectData' => 'Economic\\ArrayOfProjectData',
      'ProjectData' => 'Economic\\ProjectData',
      'ProjectGroupHandle' => 'Economic\\ProjectGroupHandle',
      'Project_CreateFromDataArrayResponse' => 'Economic\\Project_CreateFromDataArrayResponse',
      'ArrayOfProjectHandle' => 'Economic\\ArrayOfProjectHandle',
      'Project_UpdateFromDataArray' => 'Economic\\Project_UpdateFromDataArray',
      'Project_UpdateFromDataArrayResponse' => 'Economic\\Project_UpdateFromDataArrayResponse',
      'Project_UpdateFromData' => 'Economic\\Project_UpdateFromData',
      'Project_UpdateFromDataResponse' => 'Economic\\Project_UpdateFromDataResponse',
      'Project_GetData' => 'Economic\\Project_GetData',
      'Project_GetDataResponse' => 'Economic\\Project_GetDataResponse',
      'Project_GetDataArray' => 'Economic\\Project_GetDataArray',
      'Project_GetDataArrayResponse' => 'Economic\\Project_GetDataArrayResponse',
      'Project_GetNumber' => 'Economic\\Project_GetNumber',
      'Project_GetNumberResponse' => 'Economic\\Project_GetNumberResponse',
      'Project_GetName' => 'Economic\\Project_GetName',
      'Project_GetNameResponse' => 'Economic\\Project_GetNameResponse',
      'Project_SetName' => 'Economic\\Project_SetName',
      'Project_SetNameResponse' => 'Economic\\Project_SetNameResponse',
      'Project_GetProjectGroup' => 'Economic\\Project_GetProjectGroup',
      'Project_GetProjectGroupResponse' => 'Economic\\Project_GetProjectGroupResponse',
      'Project_SetProjectGroup' => 'Economic\\Project_SetProjectGroup',
      'Project_SetProjectGroupResponse' => 'Economic\\Project_SetProjectGroupResponse',
      'Project_GetIsMainProject' => 'Economic\\Project_GetIsMainProject',
      'Project_GetIsMainProjectResponse' => 'Economic\\Project_GetIsMainProjectResponse',
      'Project_GetMainProject' => 'Economic\\Project_GetMainProject',
      'Project_GetMainProjectResponse' => 'Economic\\Project_GetMainProjectResponse',
      'Project_GetDebtor' => 'Economic\\Project_GetDebtor',
      'Project_GetDebtorResponse' => 'Economic\\Project_GetDebtorResponse',
      'Project_SetDebtor' => 'Economic\\Project_SetDebtor',
      'Project_SetDebtorResponse' => 'Economic\\Project_SetDebtorResponse',
      'Project_GetResponsible' => 'Economic\\Project_GetResponsible',
      'Project_GetResponsibleResponse' => 'Economic\\Project_GetResponsibleResponse',
      'Project_SetResponsible' => 'Economic\\Project_SetResponsible',
      'Project_SetResponsibleResponse' => 'Economic\\Project_SetResponsibleResponse',
      'Project_GetDescription' => 'Economic\\Project_GetDescription',
      'Project_GetDescriptionResponse' => 'Economic\\Project_GetDescriptionResponse',
      'Project_SetDescription' => 'Economic\\Project_SetDescription',
      'Project_SetDescriptionResponse' => 'Economic\\Project_SetDescriptionResponse',
      'Project_GetIsAccessible' => 'Economic\\Project_GetIsAccessible',
      'Project_GetIsAccessibleResponse' => 'Economic\\Project_GetIsAccessibleResponse',
      'Project_SetIsAccessible' => 'Economic\\Project_SetIsAccessible',
      'Project_SetIsAccessibleResponse' => 'Economic\\Project_SetIsAccessibleResponse',
      'Project_GetMileage' => 'Economic\\Project_GetMileage',
      'Project_GetMileageResponse' => 'Economic\\Project_GetMileageResponse',
      'Project_SetMileage' => 'Economic\\Project_SetMileage',
      'Project_SetMileageResponse' => 'Economic\\Project_SetMileageResponse',
      'Project_GetIsClosed' => 'Economic\\Project_GetIsClosed',
      'Project_GetIsClosedResponse' => 'Economic\\Project_GetIsClosedResponse',
      'Project_Create' => 'Economic\\Project_Create',
      'Project_CreateResponse' => 'Economic\\Project_CreateResponse',
      'Project_GetAll' => 'Economic\\Project_GetAll',
      'Project_GetAllResponse' => 'Economic\\Project_GetAllResponse',
      'Project_GetAllUpdated' => 'Economic\\Project_GetAllUpdated',
      'Project_GetAllUpdatedResponse' => 'Economic\\Project_GetAllUpdatedResponse',
      'Project_FindByNumber' => 'Economic\\Project_FindByNumber',
      'Project_FindByNumberResponse' => 'Economic\\Project_FindByNumberResponse',
      'Project_FindByNumberList' => 'Economic\\Project_FindByNumberList',
      'Project_FindByNumberListResponse' => 'Economic\\Project_FindByNumberListResponse',
      'Project_FindByName' => 'Economic\\Project_FindByName',
      'Project_FindByNameResponse' => 'Economic\\Project_FindByNameResponse',
      'Project_GetOpenSubProjects' => 'Economic\\Project_GetOpenSubProjects',
      'Project_GetOpenSubProjectsResponse' => 'Economic\\Project_GetOpenSubProjectsResponse',
      'Project_GetActivities' => 'Economic\\Project_GetActivities',
      'Project_GetActivitiesResponse' => 'Economic\\Project_GetActivitiesResponse',
      'ArrayOfActivityHandle' => 'Economic\\ArrayOfActivityHandle',
      'Project_GetTimeEntries' => 'Economic\\Project_GetTimeEntries',
      'Project_GetTimeEntriesResponse' => 'Economic\\Project_GetTimeEntriesResponse',
      'Project_GetTimeEntriesByDate' => 'Economic\\Project_GetTimeEntriesByDate',
      'Project_GetTimeEntriesByDateResponse' => 'Economic\\Project_GetTimeEntriesByDateResponse',
      'Project_GetMileageEntriesByDate' => 'Economic\\Project_GetMileageEntriesByDate',
      'Project_GetMileageEntriesByDateResponse' => 'Economic\\Project_GetMileageEntriesByDateResponse',
      'ArrayOfMileageEntryHandle' => 'Economic\\ArrayOfMileageEntryHandle',
      'MileageEntryHandle' => 'Economic\\MileageEntryHandle',
      'Project_GetEntries' => 'Economic\\Project_GetEntries',
      'Project_GetEntriesResponse' => 'Economic\\Project_GetEntriesResponse',
      'ArrayOfEntryHandle' => 'Economic\\ArrayOfEntryHandle',
      'EntryHandle' => 'Economic\\EntryHandle',
      'Project_GetEntriesByDate' => 'Economic\\Project_GetEntriesByDate',
      'Project_GetEntriesByDateResponse' => 'Economic\\Project_GetEntriesByDateResponse',
      'ProjectGroup_GetData' => 'Economic\\ProjectGroup_GetData',
      'ProjectGroup_GetDataResponse' => 'Economic\\ProjectGroup_GetDataResponse',
      'ProjectGroupData' => 'Economic\\ProjectGroupData',
      'ProjectGroup_GetDataArray' => 'Economic\\ProjectGroup_GetDataArray',
      'ArrayOfProjectGroupHandle' => 'Economic\\ArrayOfProjectGroupHandle',
      'ProjectGroup_GetDataArrayResponse' => 'Economic\\ProjectGroup_GetDataArrayResponse',
      'ArrayOfProjectGroupData' => 'Economic\\ArrayOfProjectGroupData',
      'ProjectGroup_GetNumber' => 'Economic\\ProjectGroup_GetNumber',
      'ProjectGroup_GetNumberResponse' => 'Economic\\ProjectGroup_GetNumberResponse',
      'ProjectGroup_GetName' => 'Economic\\ProjectGroup_GetName',
      'ProjectGroup_GetNameResponse' => 'Economic\\ProjectGroup_GetNameResponse',
      'ProjectGroup_GetAll' => 'Economic\\ProjectGroup_GetAll',
      'ProjectGroup_GetAllResponse' => 'Economic\\ProjectGroup_GetAllResponse',
      'ProjectGroup_FindByNumber' => 'Economic\\ProjectGroup_FindByNumber',
      'ProjectGroup_FindByNumberResponse' => 'Economic\\ProjectGroup_FindByNumberResponse',
      'ProjectGroup_FindByNumberList' => 'Economic\\ProjectGroup_FindByNumberList',
      'ProjectGroup_FindByNumberListResponse' => 'Economic\\ProjectGroup_FindByNumberListResponse',
      'ProjectGroup_FindByName' => 'Economic\\ProjectGroup_FindByName',
      'ProjectGroup_FindByNameResponse' => 'Economic\\ProjectGroup_FindByNameResponse',
      'ProjectGroup_GetProjects' => 'Economic\\ProjectGroup_GetProjects',
      'ProjectGroup_GetProjectsResponse' => 'Economic\\ProjectGroup_GetProjectsResponse',
      'Quotation_CreateFromData' => 'Economic\\Quotation_CreateFromData',
      'QuotationData' => 'Economic\\QuotationData',
      'Quotation_CreateFromDataResponse' => 'Economic\\Quotation_CreateFromDataResponse',
      'Quotation_CreateFromDataArray' => 'Economic\\Quotation_CreateFromDataArray',
      'ArrayOfQuotationData' => 'Economic\\ArrayOfQuotationData',
      'Quotation_CreateFromDataArrayResponse' => 'Economic\\Quotation_CreateFromDataArrayResponse',
      'ArrayOfQuotationHandle' => 'Economic\\ArrayOfQuotationHandle',
      'Quotation_UpdateFromDataArray' => 'Economic\\Quotation_UpdateFromDataArray',
      'Quotation_UpdateFromDataArrayResponse' => 'Economic\\Quotation_UpdateFromDataArrayResponse',
      'Quotation_UpdateFromData' => 'Economic\\Quotation_UpdateFromData',
      'Quotation_UpdateFromDataResponse' => 'Economic\\Quotation_UpdateFromDataResponse',
      'Quotation_GetData' => 'Economic\\Quotation_GetData',
      'Quotation_GetDataResponse' => 'Economic\\Quotation_GetDataResponse',
      'Quotation_GetDataArray' => 'Economic\\Quotation_GetDataArray',
      'Quotation_GetDataArrayResponse' => 'Economic\\Quotation_GetDataArrayResponse',
      'Quotation_Create' => 'Economic\\Quotation_Create',
      'Quotation_CreateResponse' => 'Economic\\Quotation_CreateResponse',
      'Quotation_GetPdf' => 'Economic\\Quotation_GetPdf',
      'Quotation_GetPdfResponse' => 'Economic\\Quotation_GetPdfResponse',
      'Quotation_GetAll' => 'Economic\\Quotation_GetAll',
      'Quotation_GetAllResponse' => 'Economic\\Quotation_GetAllResponse',
      'Quotation_GetAllCurrent' => 'Economic\\Quotation_GetAllCurrent',
      'Quotation_GetAllCurrentResponse' => 'Economic\\Quotation_GetAllCurrentResponse',
      'Quotation_FindByOtherReference' => 'Economic\\Quotation_FindByOtherReference',
      'Quotation_FindByOtherReferenceResponse' => 'Economic\\Quotation_FindByOtherReferenceResponse',
      'Quotation_FindByNumber' => 'Economic\\Quotation_FindByNumber',
      'Quotation_FindByNumberResponse' => 'Economic\\Quotation_FindByNumberResponse',
      'Quotation_FindByNumberInterval' => 'Economic\\Quotation_FindByNumberInterval',
      'Quotation_FindByNumberIntervalResponse' => 'Economic\\Quotation_FindByNumberIntervalResponse',
      'Quotation_FindByDateInterval' => 'Economic\\Quotation_FindByDateInterval',
      'Quotation_FindByDateIntervalResponse' => 'Economic\\Quotation_FindByDateIntervalResponse',
      'Quotation_GetAllUpdated' => 'Economic\\Quotation_GetAllUpdated',
      'Quotation_GetAllUpdatedResponse' => 'Economic\\Quotation_GetAllUpdatedResponse',
      'Quotation_GetLines' => 'Economic\\Quotation_GetLines',
      'Quotation_GetLinesResponse' => 'Economic\\Quotation_GetLinesResponse',
      'Quotation_RegisterAsSent' => 'Economic\\Quotation_RegisterAsSent',
      'Quotation_RegisterAsSentResponse' => 'Economic\\Quotation_RegisterAsSentResponse',
      'Quotation_CancelSentStatus' => 'Economic\\Quotation_CancelSentStatus',
      'Quotation_CancelSentStatusResponse' => 'Economic\\Quotation_CancelSentStatusResponse',
      'Quotation_UpgradeToOrder' => 'Economic\\Quotation_UpgradeToOrder',
      'Quotation_UpgradeToOrderResponse' => 'Economic\\Quotation_UpgradeToOrderResponse',
      'OrderHandle' => 'Economic\\OrderHandle',
      'Quotation_Delete' => 'Economic\\Quotation_Delete',
      'Quotation_DeleteResponse' => 'Economic\\Quotation_DeleteResponse',
      'Quotation_GetDebtor' => 'Economic\\Quotation_GetDebtor',
      'Quotation_GetDebtorResponse' => 'Economic\\Quotation_GetDebtorResponse',
      'Quotation_SetDebtor' => 'Economic\\Quotation_SetDebtor',
      'Quotation_SetDebtorResponse' => 'Economic\\Quotation_SetDebtorResponse',
      'Quotation_GetNumber' => 'Economic\\Quotation_GetNumber',
      'Quotation_GetNumberResponse' => 'Economic\\Quotation_GetNumberResponse',
      'Quotation_GetDebtorName' => 'Economic\\Quotation_GetDebtorName',
      'Quotation_GetDebtorNameResponse' => 'Economic\\Quotation_GetDebtorNameResponse',
      'Quotation_SetDebtorName' => 'Economic\\Quotation_SetDebtorName',
      'Quotation_SetDebtorNameResponse' => 'Economic\\Quotation_SetDebtorNameResponse',
      'Quotation_GetDebtorAddress' => 'Economic\\Quotation_GetDebtorAddress',
      'Quotation_GetDebtorAddressResponse' => 'Economic\\Quotation_GetDebtorAddressResponse',
      'Quotation_SetDebtorAddress' => 'Economic\\Quotation_SetDebtorAddress',
      'Quotation_SetDebtorAddressResponse' => 'Economic\\Quotation_SetDebtorAddressResponse',
      'Quotation_GetDebtorPostalCode' => 'Economic\\Quotation_GetDebtorPostalCode',
      'Quotation_GetDebtorPostalCodeResponse' => 'Economic\\Quotation_GetDebtorPostalCodeResponse',
      'Quotation_SetDebtorPostalCode' => 'Economic\\Quotation_SetDebtorPostalCode',
      'Quotation_SetDebtorPostalCodeResponse' => 'Economic\\Quotation_SetDebtorPostalCodeResponse',
      'Quotation_GetDebtorCity' => 'Economic\\Quotation_GetDebtorCity',
      'Quotation_GetDebtorCityResponse' => 'Economic\\Quotation_GetDebtorCityResponse',
      'Quotation_SetDebtorCity' => 'Economic\\Quotation_SetDebtorCity',
      'Quotation_SetDebtorCityResponse' => 'Economic\\Quotation_SetDebtorCityResponse',
      'Quotation_GetDebtorCountry' => 'Economic\\Quotation_GetDebtorCountry',
      'Quotation_GetDebtorCountryResponse' => 'Economic\\Quotation_GetDebtorCountryResponse',
      'Quotation_SetDebtorCountry' => 'Economic\\Quotation_SetDebtorCountry',
      'Quotation_SetDebtorCountryResponse' => 'Economic\\Quotation_SetDebtorCountryResponse',
      'Quotation_GetDebtorEan' => 'Economic\\Quotation_GetDebtorEan',
      'Quotation_GetDebtorEanResponse' => 'Economic\\Quotation_GetDebtorEanResponse',
      'Quotation_SetDebtorEan' => 'Economic\\Quotation_SetDebtorEan',
      'Quotation_SetDebtorEanResponse' => 'Economic\\Quotation_SetDebtorEanResponse',
      'Quotation_GetPublicEntryNumber' => 'Economic\\Quotation_GetPublicEntryNumber',
      'Quotation_GetPublicEntryNumberResponse' => 'Economic\\Quotation_GetPublicEntryNumberResponse',
      'Quotation_SetPublicEntryNumber' => 'Economic\\Quotation_SetPublicEntryNumber',
      'Quotation_SetPublicEntryNumberResponse' => 'Economic\\Quotation_SetPublicEntryNumberResponse',
      'Quotation_GetAttention' => 'Economic\\Quotation_GetAttention',
      'Quotation_GetAttentionResponse' => 'Economic\\Quotation_GetAttentionResponse',
      'Quotation_SetAttention' => 'Economic\\Quotation_SetAttention',
      'Quotation_SetAttentionResponse' => 'Economic\\Quotation_SetAttentionResponse',
      'Quotation_GetYourReference' => 'Economic\\Quotation_GetYourReference',
      'Quotation_GetYourReferenceResponse' => 'Economic\\Quotation_GetYourReferenceResponse',
      'PriceGroup_GetPrice' => 'Economic\\PriceGroup_GetPrice',
      'PriceGroupHandle' => 'Economic\\PriceGroupHandle',
      'PriceGroup_GetPriceResponse' => 'Economic\\PriceGroup_GetPriceResponse',
      'Product_CreateFromData' => 'Economic\\Product_CreateFromData',
      'ProductData' => 'Economic\\ProductData',
      'ProductGroupHandle' => 'Economic\\ProductGroupHandle',
      'Product_CreateFromDataResponse' => 'Economic\\Product_CreateFromDataResponse',
      'Product_CreateFromDataArray' => 'Economic\\Product_CreateFromDataArray',
      'ArrayOfProductData' => 'Economic\\ArrayOfProductData',
      'Product_CreateFromDataArrayResponse' => 'Economic\\Product_CreateFromDataArrayResponse',
      'Product_UpdateFromDataArray' => 'Economic\\Product_UpdateFromDataArray',
      'Product_UpdateFromDataArrayResponse' => 'Economic\\Product_UpdateFromDataArrayResponse',
      'Product_UpdateFromData' => 'Economic\\Product_UpdateFromData',
      'Product_UpdateFromDataResponse' => 'Economic\\Product_UpdateFromDataResponse',
      'Product_GetData' => 'Economic\\Product_GetData',
      'Product_GetDataResponse' => 'Economic\\Product_GetDataResponse',
      'Product_GetDataArray' => 'Economic\\Product_GetDataArray',
      'Product_GetDataArrayResponse' => 'Economic\\Product_GetDataArrayResponse',
      'Product_GetNumber' => 'Economic\\Product_GetNumber',
      'Product_GetNumberResponse' => 'Economic\\Product_GetNumberResponse',
      'Product_GetProductGroup' => 'Economic\\Product_GetProductGroup',
      'Product_GetProductGroupResponse' => 'Economic\\Product_GetProductGroupResponse',
      'Product_SetProductGroup' => 'Economic\\Product_SetProductGroup',
      'Product_SetProductGroupResponse' => 'Economic\\Product_SetProductGroupResponse',
      'Product_GetName' => 'Economic\\Product_GetName',
      'Product_GetNameResponse' => 'Economic\\Product_GetNameResponse',
      'Product_SetName' => 'Economic\\Product_SetName',
      'Product_SetNameResponse' => 'Economic\\Product_SetNameResponse',
      'Product_GetDescription' => 'Economic\\Product_GetDescription',
      'Product_GetDescriptionResponse' => 'Economic\\Product_GetDescriptionResponse',
      'Product_SetDescription' => 'Economic\\Product_SetDescription',
      'Product_SetDescriptionResponse' => 'Economic\\Product_SetDescriptionResponse',
      'Product_SetBarCode' => 'Economic\\Product_SetBarCode',
      'Product_SetBarCodeResponse' => 'Economic\\Product_SetBarCodeResponse',
      'Product_GetBarCode' => 'Economic\\Product_GetBarCode',
      'Product_GetBarCodeResponse' => 'Economic\\Product_GetBarCodeResponse',
      'Product_SetSalesPrice' => 'Economic\\Product_SetSalesPrice',
      'Product_SetSalesPriceResponse' => 'Economic\\Product_SetSalesPriceResponse',
      'Product_GetSalesPrice' => 'Economic\\Product_GetSalesPrice',
      'Product_GetSalesPriceResponse' => 'Economic\\Product_GetSalesPriceResponse',
      'Product_GetCostPrice' => 'Economic\\Product_GetCostPrice',
      'Product_GetCostPriceResponse' => 'Economic\\Product_GetCostPriceResponse',
      'Product_SetCostPrice' => 'Economic\\Product_SetCostPrice',
      'Product_SetCostPriceResponse' => 'Economic\\Product_SetCostPriceResponse',
      'Product_GetRecommendedPrice' => 'Economic\\Product_GetRecommendedPrice',
      'Product_GetRecommendedPriceResponse' => 'Economic\\Product_GetRecommendedPriceResponse',
      'Product_SetRecommendedPrice' => 'Economic\\Product_SetRecommendedPrice',
      'Product_SetRecommendedPriceResponse' => 'Economic\\Product_SetRecommendedPriceResponse',
      'Product_GetUnit' => 'Economic\\Product_GetUnit',
      'Product_GetUnitResponse' => 'Economic\\Product_GetUnitResponse',
      'Product_SetUnit' => 'Economic\\Product_SetUnit',
      'Product_SetUnitResponse' => 'Economic\\Product_SetUnitResponse',
      'Product_SetIsAccessible' => 'Economic\\Product_SetIsAccessible',
      'Product_SetIsAccessibleResponse' => 'Economic\\Product_SetIsAccessibleResponse',
      'Product_GetIsAccessible' => 'Economic\\Product_GetIsAccessible',
      'Product_GetIsAccessibleResponse' => 'Economic\\Product_GetIsAccessibleResponse',
      'Product_SetVolume' => 'Economic\\Product_SetVolume',
      'Product_SetVolumeResponse' => 'Economic\\Product_SetVolumeResponse',
      'Product_GetVolume' => 'Economic\\Product_GetVolume',
      'Product_GetVolumeResponse' => 'Economic\\Product_GetVolumeResponse',
      'Product_GetDepartment' => 'Economic\\Product_GetDepartment',
      'Product_GetDepartmentResponse' => 'Economic\\Product_GetDepartmentResponse',
      'Product_SetDepartment' => 'Economic\\Product_SetDepartment',
      'Product_SetDepartmentResponse' => 'Economic\\Product_SetDepartmentResponse',
      'Product_GetDistributionKey' => 'Economic\\Product_GetDistributionKey',
      'Product_GetDistributionKeyResponse' => 'Economic\\Product_GetDistributionKeyResponse',
      'Product_SetDistributionKey' => 'Economic\\Product_SetDistributionKey',
      'Product_SetDistributionKeyResponse' => 'Economic\\Product_SetDistributionKeyResponse',
      'Product_GetInStock' => 'Economic\\Product_GetInStock',
      'Product_GetInStockResponse' => 'Economic\\Product_GetInStockResponse',
      'Product_GetOnOrder' => 'Economic\\Product_GetOnOrder',
      'Product_GetOnOrderResponse' => 'Economic\\Product_GetOnOrderResponse',
      'Product_GetOrdered' => 'Economic\\Product_GetOrdered',
      'Product_GetOrderedResponse' => 'Economic\\Product_GetOrderedResponse',
      'Product_GetAvailable' => 'Economic\\Product_GetAvailable',
      'Product_GetAvailableResponse' => 'Economic\\Product_GetAvailableResponse',
      'Product_GetInventoryLocationStatus' => 'Economic\\Product_GetInventoryLocationStatus',
      'Product_GetInventoryLocationStatusResponse' => 'Economic\\Product_GetInventoryLocationStatusResponse',
      'ArrayOfProductInventoryLocationStatusData' => 'Economic\\ArrayOfProductInventoryLocationStatusData',
      'ProductInventoryLocationStatusData' => 'Economic\\ProductInventoryLocationStatusData',
      'Product_Create' => 'Economic\\Product_Create',
      'Product_CreateResponse' => 'Economic\\Product_CreateResponse',
      'Product_GetAll' => 'Economic\\Product_GetAll',
      'Product_GetAllResponse' => 'Economic\\Product_GetAllResponse',
      'Product_GetAllAccessible' => 'Economic\\Product_GetAllAccessible',
      'Product_GetAllAccessibleResponse' => 'Economic\\Product_GetAllAccessibleResponse',
      'Product_GetAllUpdated' => 'Economic\\Product_GetAllUpdated',
      'Product_GetAllUpdatedResponse' => 'Economic\\Product_GetAllUpdatedResponse',
      'Product_FindByNumber' => 'Economic\\Product_FindByNumber',
      'Product_FindByNumberResponse' => 'Economic\\Product_FindByNumberResponse',
      'Product_FindByNumberList' => 'Economic\\Product_FindByNumberList',
      'ArrayOfString' => 'Economic\\ArrayOfString',
      'Product_FindByNumberListResponse' => 'Economic\\Product_FindByNumberListResponse',
      'Product_FindByName' => 'Economic\\Product_FindByName',
      'Product_FindByNameResponse' => 'Economic\\Product_FindByNameResponse',
      'Product_FindByBarCode' => 'Economic\\Product_FindByBarCode',
      'Product_FindByBarCodeResponse' => 'Economic\\Product_FindByBarCodeResponse',
      'Product_Delete' => 'Economic\\Product_Delete',
      'Product_DeleteResponse' => 'Economic\\Product_DeleteResponse',
      'ProductGroup_CreateFromData' => 'Economic\\ProductGroup_CreateFromData',
      'ProductGroupData' => 'Economic\\ProductGroupData',
      'ProductGroup_CreateFromDataResponse' => 'Economic\\ProductGroup_CreateFromDataResponse',
      'ProductGroup_CreateFromDataArray' => 'Economic\\ProductGroup_CreateFromDataArray',
      'ArrayOfProductGroupData' => 'Economic\\ArrayOfProductGroupData',
      'ProductGroup_CreateFromDataArrayResponse' => 'Economic\\ProductGroup_CreateFromDataArrayResponse',
      'ArrayOfProductGroupHandle' => 'Economic\\ArrayOfProductGroupHandle',
      'ProductGroup_UpdateFromDataArray' => 'Economic\\ProductGroup_UpdateFromDataArray',
      'ProductGroup_UpdateFromDataArrayResponse' => 'Economic\\ProductGroup_UpdateFromDataArrayResponse',
      'ProductGroup_UpdateFromData' => 'Economic\\ProductGroup_UpdateFromData',
      'ProductGroup_UpdateFromDataResponse' => 'Economic\\ProductGroup_UpdateFromDataResponse',
      'ProductGroup_GetData' => 'Economic\\ProductGroup_GetData',
      'ProductGroup_GetDataResponse' => 'Economic\\ProductGroup_GetDataResponse',
      'ProductGroup_GetDataArray' => 'Economic\\ProductGroup_GetDataArray',
      'ProductGroup_GetDataArrayResponse' => 'Economic\\ProductGroup_GetDataArrayResponse',
      'ProductGroup_GetNumber' => 'Economic\\ProductGroup_GetNumber',
      'ProductGroup_GetNumberResponse' => 'Economic\\ProductGroup_GetNumberResponse',
      'ProductGroup_GetName' => 'Economic\\ProductGroup_GetName',
      'ProductGroup_GetNameResponse' => 'Economic\\ProductGroup_GetNameResponse',
      'ProductGroup_SetName' => 'Economic\\ProductGroup_SetName',
      'ProductGroup_SetNameResponse' => 'Economic\\ProductGroup_SetNameResponse',
      'ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent' => 'Economic\\ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent',
      'ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResponse' => 'Economic\\ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResponse',
      'ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent' => 'Economic\\ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent',
      'ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrentResponse' => 'Economic\\ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrentResponse',
      'ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent' => 'Economic\\ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent',
      'ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResponse' => 'Economic\\ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResponse',
      'ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent' => 'Economic\\ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent',
      'ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrentResponse' => 'Economic\\ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrentResponse',
      'ProductGroup_SetAccrual' => 'Economic\\ProductGroup_SetAccrual',
      'ProductGroup_SetAccrualResponse' => 'Economic\\ProductGroup_SetAccrualResponse',
      'ProductGroup_GetAccrual' => 'Economic\\ProductGroup_GetAccrual',
      'ProductGroup_GetAccrualResponse' => 'Economic\\ProductGroup_GetAccrualResponse',
      'ProductGroup_Create' => 'Economic\\ProductGroup_Create',
      'ProductGroup_CreateResponse' => 'Economic\\ProductGroup_CreateResponse',
      'ProductGroup_GetAll' => 'Economic\\ProductGroup_GetAll',
      'ProductGroup_GetAllResponse' => 'Economic\\ProductGroup_GetAllResponse',
      'ProductGroup_FindByNumber' => 'Economic\\ProductGroup_FindByNumber',
      'ProductGroup_FindByNumberResponse' => 'Economic\\ProductGroup_FindByNumberResponse',
      'ProductGroup_FindByNumberList' => 'Economic\\ProductGroup_FindByNumberList',
      'ProductGroup_FindByNumberListResponse' => 'Economic\\ProductGroup_FindByNumberListResponse',
      'ProductGroup_FindByName' => 'Economic\\ProductGroup_FindByName',
      'ProductGroup_FindByNameResponse' => 'Economic\\ProductGroup_FindByNameResponse',
      'ProductGroup_GetProducts' => 'Economic\\ProductGroup_GetProducts',
      'ProductGroup_GetProductsResponse' => 'Economic\\ProductGroup_GetProductsResponse',
      'ProductGroup_Delete' => 'Economic\\ProductGroup_Delete',
      'ProductGroup_DeleteResponse' => 'Economic\\ProductGroup_DeleteResponse',
      'ProductPrice_CreateFromData' => 'Economic\\ProductPrice_CreateFromData',
      'ProductPriceData' => 'Economic\\ProductPriceData',
      'ProductPriceHandle' => 'Economic\\ProductPriceHandle',
      'ProductPrice_CreateFromDataResponse' => 'Economic\\ProductPrice_CreateFromDataResponse',
      'ProductPrice_CreateFromDataArray' => 'Economic\\ProductPrice_CreateFromDataArray',
      'ArrayOfProductPriceData' => 'Economic\\ArrayOfProductPriceData',
      'ProductPrice_CreateFromDataArrayResponse' => 'Economic\\ProductPrice_CreateFromDataArrayResponse',
      'ArrayOfProductPriceHandle' => 'Economic\\ArrayOfProductPriceHandle',
      'ProductPrice_UpdateFromDataArray' => 'Economic\\ProductPrice_UpdateFromDataArray',
      'ProductPrice_UpdateFromDataArrayResponse' => 'Economic\\ProductPrice_UpdateFromDataArrayResponse',
      'ProductPrice_UpdateFromData' => 'Economic\\ProductPrice_UpdateFromData',
      'ProductPrice_UpdateFromDataResponse' => 'Economic\\ProductPrice_UpdateFromDataResponse',
      'ProductPrice_GetData' => 'Economic\\ProductPrice_GetData',
      'ProductPrice_GetDataResponse' => 'Economic\\ProductPrice_GetDataResponse',
      'ProductPrice_GetDataArray' => 'Economic\\ProductPrice_GetDataArray',
      'ProductPrice_GetDataArrayResponse' => 'Economic\\ProductPrice_GetDataArrayResponse',
      'ProductPrice_Create' => 'Economic\\ProductPrice_Create',
      'ProductPrice_CreateResponse' => 'Economic\\ProductPrice_CreateResponse',
      'ProductPrice_FindByProductAndCurrency' => 'Economic\\ProductPrice_FindByProductAndCurrency',
      'ProductPrice_FindByProductAndCurrencyResponse' => 'Economic\\ProductPrice_FindByProductAndCurrencyResponse',
      'ProductPrice_FindByProductListAndCurrency' => 'Economic\\ProductPrice_FindByProductListAndCurrency',
      'ProductPrice_FindByProductListAndCurrencyResponse' => 'Economic\\ProductPrice_FindByProductListAndCurrencyResponse',
      'ProductPrice_FindByProductList' => 'Economic\\ProductPrice_FindByProductList',
      'ProductPrice_FindByProductListResponse' => 'Economic\\ProductPrice_FindByProductListResponse',
      'ProductPrice_FindByCurrency' => 'Economic\\ProductPrice_FindByCurrency',
      'ProductPrice_FindByCurrencyResponse' => 'Economic\\ProductPrice_FindByCurrencyResponse',
      'ProductPrice_Delete' => 'Economic\\ProductPrice_Delete',
      'ProductPrice_DeleteResponse' => 'Economic\\ProductPrice_DeleteResponse',
      'ProductPrice_GetProduct' => 'Economic\\ProductPrice_GetProduct',
      'ProductPrice_GetProductResponse' => 'Economic\\ProductPrice_GetProductResponse',
      'ProductPrice_GetCurrency' => 'Economic\\ProductPrice_GetCurrency',
      'ProductPrice_GetCurrencyResponse' => 'Economic\\ProductPrice_GetCurrencyResponse',
      'ProductPrice_GetPrice' => 'Economic\\ProductPrice_GetPrice',
      'ProductPrice_GetPriceResponse' => 'Economic\\ProductPrice_GetPriceResponse',
      'ProductPrice_SetPrice' => 'Economic\\ProductPrice_SetPrice',
      'ProductPrice_SetPriceResponse' => 'Economic\\ProductPrice_SetPriceResponse',
      'Project_CreateFromData' => 'Economic\\Project_CreateFromData',
      'Project_CreateFromDataResponse' => 'Economic\\Project_CreateFromDataResponse',
      'Order_GetDeliveryLocation' => 'Economic\\Order_GetDeliveryLocation',
      'Order_GetDeliveryLocationResponse' => 'Economic\\Order_GetDeliveryLocationResponse',
      'Order_SetDeliveryLocation' => 'Economic\\Order_SetDeliveryLocation',
      'Order_SetDeliveryLocationResponse' => 'Economic\\Order_SetDeliveryLocationResponse',
      'Order_GetDeliveryAddress' => 'Economic\\Order_GetDeliveryAddress',
      'Order_GetDeliveryAddressResponse' => 'Economic\\Order_GetDeliveryAddressResponse',
      'Order_SetDeliveryAddress' => 'Economic\\Order_SetDeliveryAddress',
      'Order_SetDeliveryAddressResponse' => 'Economic\\Order_SetDeliveryAddressResponse',
      'Order_GetDeliveryPostalCode' => 'Economic\\Order_GetDeliveryPostalCode',
      'Order_GetDeliveryPostalCodeResponse' => 'Economic\\Order_GetDeliveryPostalCodeResponse',
      'Order_SetDeliveryPostalCode' => 'Economic\\Order_SetDeliveryPostalCode',
      'Order_SetDeliveryPostalCodeResponse' => 'Economic\\Order_SetDeliveryPostalCodeResponse',
      'Order_GetDeliveryCity' => 'Economic\\Order_GetDeliveryCity',
      'Order_GetDeliveryCityResponse' => 'Economic\\Order_GetDeliveryCityResponse',
      'Order_SetDeliveryCity' => 'Economic\\Order_SetDeliveryCity',
      'Order_SetDeliveryCityResponse' => 'Economic\\Order_SetDeliveryCityResponse',
      'Order_GetDeliveryCountry' => 'Economic\\Order_GetDeliveryCountry',
      'Order_GetDeliveryCountryResponse' => 'Economic\\Order_GetDeliveryCountryResponse',
      'Order_SetDeliveryCountry' => 'Economic\\Order_SetDeliveryCountry',
      'Order_SetDeliveryCountryResponse' => 'Economic\\Order_SetDeliveryCountryResponse',
      'Order_GetTermsOfDelivery' => 'Economic\\Order_GetTermsOfDelivery',
      'Order_GetTermsOfDeliveryResponse' => 'Economic\\Order_GetTermsOfDeliveryResponse',
      'Order_SetTermsOfDelivery' => 'Economic\\Order_SetTermsOfDelivery',
      'Order_SetTermsOfDeliveryResponse' => 'Economic\\Order_SetTermsOfDeliveryResponse',
      'Order_GetDeliveryDate' => 'Economic\\Order_GetDeliveryDate',
      'Order_GetDeliveryDateResponse' => 'Economic\\Order_GetDeliveryDateResponse',
      'Order_SetDeliveryDate' => 'Economic\\Order_SetDeliveryDate',
      'Order_SetDeliveryDateResponse' => 'Economic\\Order_SetDeliveryDateResponse',
      'Order_GetHeading' => 'Economic\\Order_GetHeading',
      'Order_GetHeadingResponse' => 'Economic\\Order_GetHeadingResponse',
      'Order_SetHeading' => 'Economic\\Order_SetHeading',
      'Order_SetHeadingResponse' => 'Economic\\Order_SetHeadingResponse',
      'Order_GetTextLine1' => 'Economic\\Order_GetTextLine1',
      'Order_GetTextLine1Response' => 'Economic\\Order_GetTextLine1Response',
      'Order_SetTextLine1' => 'Economic\\Order_SetTextLine1',
      'Order_SetTextLine1Response' => 'Economic\\Order_SetTextLine1Response',
      'Order_GetTextLine2' => 'Economic\\Order_GetTextLine2',
      'Order_GetTextLine2Response' => 'Economic\\Order_GetTextLine2Response',
      'Order_SetTextLine2' => 'Economic\\Order_SetTextLine2',
      'Order_SetTextLine2Response' => 'Economic\\Order_SetTextLine2Response',
      'Order_GetOtherReference' => 'Economic\\Order_GetOtherReference',
      'Order_GetOtherReferenceResponse' => 'Economic\\Order_GetOtherReferenceResponse',
      'Order_SetOtherReference' => 'Economic\\Order_SetOtherReference',
      'Order_SetOtherReferenceResponse' => 'Economic\\Order_SetOtherReferenceResponse',
      'Order_GetIsArchived' => 'Economic\\Order_GetIsArchived',
      'Order_GetIsArchivedResponse' => 'Economic\\Order_GetIsArchivedResponse',
      'Order_GetIsSent' => 'Economic\\Order_GetIsSent',
      'Order_GetIsSentResponse' => 'Economic\\Order_GetIsSentResponse',
      'Order_GetNetAmount' => 'Economic\\Order_GetNetAmount',
      'Order_GetNetAmountResponse' => 'Economic\\Order_GetNetAmountResponse',
      'Order_GetVatAmount' => 'Economic\\Order_GetVatAmount',
      'Order_GetVatAmountResponse' => 'Economic\\Order_GetVatAmountResponse',
      'Order_GetGrossAmount' => 'Economic\\Order_GetGrossAmount',
      'Order_GetGrossAmountResponse' => 'Economic\\Order_GetGrossAmountResponse',
      'Order_GetMargin' => 'Economic\\Order_GetMargin',
      'Order_GetMarginResponse' => 'Economic\\Order_GetMarginResponse',
      'Order_GetMarginAsPercent' => 'Economic\\Order_GetMarginAsPercent',
      'Order_GetMarginAsPercentResponse' => 'Economic\\Order_GetMarginAsPercentResponse',
      'Order_GetRoundingAmount' => 'Economic\\Order_GetRoundingAmount',
      'Order_GetRoundingAmountResponse' => 'Economic\\Order_GetRoundingAmountResponse',
      'Order_GetDebtorCounty' => 'Economic\\Order_GetDebtorCounty',
      'Order_GetDebtorCountyResponse' => 'Economic\\Order_GetDebtorCountyResponse',
      'Order_SetDebtorCounty' => 'Economic\\Order_SetDebtorCounty',
      'Order_SetDebtorCountyResponse' => 'Economic\\Order_SetDebtorCountyResponse',
      'Order_GetDeliveryCounty' => 'Economic\\Order_GetDeliveryCounty',
      'Order_GetDeliveryCountyResponse' => 'Economic\\Order_GetDeliveryCountyResponse',
      'Order_SetDeliveryCounty' => 'Economic\\Order_SetDeliveryCounty',
      'Order_SetDeliveryCountyResponse' => 'Economic\\Order_SetDeliveryCountyResponse',
      'OrderLine_CreateFromData' => 'Economic\\OrderLine_CreateFromData',
      'OrderLineData' => 'Economic\\OrderLineData',
      'OrderLineHandle' => 'Economic\\OrderLineHandle',
      'OrderLine_CreateFromDataResponse' => 'Economic\\OrderLine_CreateFromDataResponse',
      'OrderLine_CreateFromDataArray' => 'Economic\\OrderLine_CreateFromDataArray',
      'ArrayOfOrderLineData' => 'Economic\\ArrayOfOrderLineData',
      'OrderLine_CreateFromDataArrayResponse' => 'Economic\\OrderLine_CreateFromDataArrayResponse',
      'ArrayOfOrderLineHandle' => 'Economic\\ArrayOfOrderLineHandle',
      'OrderLine_UpdateFromDataArray' => 'Economic\\OrderLine_UpdateFromDataArray',
      'OrderLine_UpdateFromDataArrayResponse' => 'Economic\\OrderLine_UpdateFromDataArrayResponse',
      'OrderLine_UpdateFromData' => 'Economic\\OrderLine_UpdateFromData',
      'OrderLine_UpdateFromDataResponse' => 'Economic\\OrderLine_UpdateFromDataResponse',
      'OrderLine_GetData' => 'Economic\\OrderLine_GetData',
      'OrderLine_GetDataResponse' => 'Economic\\OrderLine_GetDataResponse',
      'OrderLine_GetDataArray' => 'Economic\\OrderLine_GetDataArray',
      'OrderLine_GetDataArrayResponse' => 'Economic\\OrderLine_GetDataArrayResponse',
      'OrderLine_GetNumber' => 'Economic\\OrderLine_GetNumber',
      'OrderLine_GetNumberResponse' => 'Economic\\OrderLine_GetNumberResponse',
      'OrderLine_GetOrder' => 'Economic\\OrderLine_GetOrder',
      'OrderLine_GetOrderResponse' => 'Economic\\OrderLine_GetOrderResponse',
      'OrderLine_GetDescription' => 'Economic\\OrderLine_GetDescription',
      'OrderLine_GetDescriptionResponse' => 'Economic\\OrderLine_GetDescriptionResponse',
      'OrderLine_SetDescription' => 'Economic\\OrderLine_SetDescription',
      'OrderLine_SetDescriptionResponse' => 'Economic\\OrderLine_SetDescriptionResponse',
      'OrderLine_GetDeliveryDate' => 'Economic\\OrderLine_GetDeliveryDate',
      'OrderLine_GetDeliveryDateResponse' => 'Economic\\OrderLine_GetDeliveryDateResponse',
      'OrderLine_SetDeliveryDate' => 'Economic\\OrderLine_SetDeliveryDate',
      'OrderLine_SetDeliveryDateResponse' => 'Economic\\OrderLine_SetDeliveryDateResponse',
      'OrderLine_GetUnit' => 'Economic\\OrderLine_GetUnit',
      'OrderLine_GetUnitResponse' => 'Economic\\OrderLine_GetUnitResponse',
      'OrderLine_SetUnit' => 'Economic\\OrderLine_SetUnit',
      'OrderLine_SetUnitResponse' => 'Economic\\OrderLine_SetUnitResponse',
      'OrderLine_SetProduct' => 'Economic\\OrderLine_SetProduct',
      'OrderLine_SetProductResponse' => 'Economic\\OrderLine_SetProductResponse',
      'OrderLine_GetProduct' => 'Economic\\OrderLine_GetProduct',
      'OrderLine_GetProductResponse' => 'Economic\\OrderLine_GetProductResponse',
      'OrderLine_GetQuantity' => 'Economic\\OrderLine_GetQuantity',
      'OrderLine_GetQuantityResponse' => 'Economic\\OrderLine_GetQuantityResponse',
      'OrderLine_SetQuantity' => 'Economic\\OrderLine_SetQuantity',
      'OrderLine_SetQuantityResponse' => 'Economic\\OrderLine_SetQuantityResponse',
      'OrderLine_GetUnitNetPrice' => 'Economic\\OrderLine_GetUnitNetPrice',
      'OrderLine_GetUnitNetPriceResponse' => 'Economic\\OrderLine_GetUnitNetPriceResponse',
      'OrderLine_SetUnitNetPrice' => 'Economic\\OrderLine_SetUnitNetPrice',
      'OrderLine_SetUnitNetPriceResponse' => 'Economic\\OrderLine_SetUnitNetPriceResponse',
      'OrderLine_SetUnitCostPrice' => 'Economic\\OrderLine_SetUnitCostPrice',
      'OrderLine_SetUnitCostPriceResponse' => 'Economic\\OrderLine_SetUnitCostPriceResponse',
      'OrderLine_GetDiscountAsPercent' => 'Economic\\OrderLine_GetDiscountAsPercent',
      'OrderLine_GetDiscountAsPercentResponse' => 'Economic\\OrderLine_GetDiscountAsPercentResponse',
      'OrderLine_SetDiscountAsPercent' => 'Economic\\OrderLine_SetDiscountAsPercent',
      'OrderLine_SetDiscountAsPercentResponse' => 'Economic\\OrderLine_SetDiscountAsPercentResponse',
      'OrderLine_GetUnitCostPrice' => 'Economic\\OrderLine_GetUnitCostPrice',
      'OrderLine_GetUnitCostPriceResponse' => 'Economic\\OrderLine_GetUnitCostPriceResponse',
      'OrderLine_GetTotalNetAmount' => 'Economic\\OrderLine_GetTotalNetAmount',
      'OrderLine_GetTotalNetAmountResponse' => 'Economic\\OrderLine_GetTotalNetAmountResponse',
      'OrderLine_GetTotalMargin' => 'Economic\\OrderLine_GetTotalMargin',
      'OrderLine_GetTotalMarginResponse' => 'Economic\\OrderLine_GetTotalMarginResponse',
      'OrderLine_GetMarginAsPercent' => 'Economic\\OrderLine_GetMarginAsPercent',
      'OrderLine_GetMarginAsPercentResponse' => 'Economic\\OrderLine_GetMarginAsPercentResponse',
      'OrderLine_GetDepartment' => 'Economic\\OrderLine_GetDepartment',
      'OrderLine_GetDepartmentResponse' => 'Economic\\OrderLine_GetDepartmentResponse',
      'OrderLine_SetDepartment' => 'Economic\\OrderLine_SetDepartment',
      'OrderLine_SetDepartmentResponse' => 'Economic\\OrderLine_SetDepartmentResponse',
      'OrderLine_SetDistributionKey' => 'Economic\\OrderLine_SetDistributionKey',
      'OrderLine_SetDistributionKeyResponse' => 'Economic\\OrderLine_SetDistributionKeyResponse',
      'OrderLine_GetDistributionKey' => 'Economic\\OrderLine_GetDistributionKey',
      'OrderLine_GetDistributionKeyResponse' => 'Economic\\OrderLine_GetDistributionKeyResponse',
      'OrderLine_Create' => 'Economic\\OrderLine_Create',
      'OrderLine_CreateResponse' => 'Economic\\OrderLine_CreateResponse',
      'OrderLine_GetAll' => 'Economic\\OrderLine_GetAll',
      'OrderLine_GetAllResponse' => 'Economic\\OrderLine_GetAllResponse',
      'OrderLine_FindByProduct' => 'Economic\\OrderLine_FindByProduct',
      'OrderLine_FindByProductResponse' => 'Economic\\OrderLine_FindByProductResponse',
      'OrderLine_FindByProductList' => 'Economic\\OrderLine_FindByProductList',
      'OrderLine_FindByProductListResponse' => 'Economic\\OrderLine_FindByProductListResponse',
      'OrderLine_Delete' => 'Economic\\OrderLine_Delete',
      'OrderLine_DeleteResponse' => 'Economic\\OrderLine_DeleteResponse',
      'PriceGroup_CreateFromData' => 'Economic\\PriceGroup_CreateFromData',
      'PriceGroupData' => 'Economic\\PriceGroupData',
      'PriceGroup_CreateFromDataResponse' => 'Economic\\PriceGroup_CreateFromDataResponse',
      'PriceGroup_CreateFromDataArray' => 'Economic\\PriceGroup_CreateFromDataArray',
      'ArrayOfPriceGroupData' => 'Economic\\ArrayOfPriceGroupData',
      'PriceGroup_CreateFromDataArrayResponse' => 'Economic\\PriceGroup_CreateFromDataArrayResponse',
      'ArrayOfPriceGroupHandle' => 'Economic\\ArrayOfPriceGroupHandle',
      'PriceGroup_UpdateFromDataArray' => 'Economic\\PriceGroup_UpdateFromDataArray',
      'PriceGroup_UpdateFromDataArrayResponse' => 'Economic\\PriceGroup_UpdateFromDataArrayResponse',
      'PriceGroup_UpdateFromData' => 'Economic\\PriceGroup_UpdateFromData',
      'PriceGroup_UpdateFromDataResponse' => 'Economic\\PriceGroup_UpdateFromDataResponse',
      'PriceGroup_GetData' => 'Economic\\PriceGroup_GetData',
      'PriceGroup_GetDataResponse' => 'Economic\\PriceGroup_GetDataResponse',
      'PriceGroup_GetDataArray' => 'Economic\\PriceGroup_GetDataArray',
      'PriceGroup_GetDataArrayResponse' => 'Economic\\PriceGroup_GetDataArrayResponse',
      'PriceGroup_Create' => 'Economic\\PriceGroup_Create',
      'PriceGroup_CreateResponse' => 'Economic\\PriceGroup_CreateResponse',
      'PriceGroup_GetNumber' => 'Economic\\PriceGroup_GetNumber',
      'PriceGroup_GetNumberResponse' => 'Economic\\PriceGroup_GetNumberResponse',
      'PriceGroup_GetName' => 'Economic\\PriceGroup_GetName',
      'PriceGroup_GetNameResponse' => 'Economic\\PriceGroup_GetNameResponse',
      'PriceGroup_SetName' => 'Economic\\PriceGroup_SetName',
      'PriceGroup_SetNameResponse' => 'Economic\\PriceGroup_SetNameResponse',
      'PriceGroup_GetAll' => 'Economic\\PriceGroup_GetAll',
      'PriceGroup_GetAllResponse' => 'Economic\\PriceGroup_GetAllResponse',
      'PriceGroup_FindByNumber' => 'Economic\\PriceGroup_FindByNumber',
      'PriceGroup_FindByNumberResponse' => 'Economic\\PriceGroup_FindByNumberResponse',
      'PriceGroup_FindByNumberList' => 'Economic\\PriceGroup_FindByNumberList',
      'PriceGroup_FindByNumberListResponse' => 'Economic\\PriceGroup_FindByNumberListResponse',
      'PriceGroup_FindByName' => 'Economic\\PriceGroup_FindByName',
      'PriceGroup_FindByNameResponse' => 'Economic\\PriceGroup_FindByNameResponse',
      'PriceGroup_Delete' => 'Economic\\PriceGroup_Delete',
      'PriceGroup_DeleteResponse' => 'Economic\\PriceGroup_DeleteResponse',
      'MileageEntry_Create' => 'Economic\\MileageEntry_Create',
      'MileageEntry_CreateResponse' => 'Economic\\MileageEntry_CreateResponse',
      'MileageEntry_GetAll' => 'Economic\\MileageEntry_GetAll',
      'MileageEntry_GetAllResponse' => 'Economic\\MileageEntry_GetAllResponse',
      'MileageEntry_Delete' => 'Economic\\MileageEntry_Delete',
      'MileageEntry_DeleteResponse' => 'Economic\\MileageEntry_DeleteResponse',
      'MileageEntry_GetId' => 'Economic\\MileageEntry_GetId',
      'MileageEntry_GetIdResponse' => 'Economic\\MileageEntry_GetIdResponse',
      'MileageEntry_GetProject' => 'Economic\\MileageEntry_GetProject',
      'MileageEntry_GetProjectResponse' => 'Economic\\MileageEntry_GetProjectResponse',
      'MileageEntry_SetProject' => 'Economic\\MileageEntry_SetProject',
      'MileageEntry_SetProjectResponse' => 'Economic\\MileageEntry_SetProjectResponse',
      'MileageEntry_GetEmployee' => 'Economic\\MileageEntry_GetEmployee',
      'MileageEntry_GetEmployeeResponse' => 'Economic\\MileageEntry_GetEmployeeResponse',
      'MileageEntry_SetEmployee' => 'Economic\\MileageEntry_SetEmployee',
      'MileageEntry_SetEmployeeResponse' => 'Economic\\MileageEntry_SetEmployeeResponse',
      'MileageEntry_GetDate' => 'Economic\\MileageEntry_GetDate',
      'MileageEntry_GetDateResponse' => 'Economic\\MileageEntry_GetDateResponse',
      'MileageEntry_GetSalesPrice' => 'Economic\\MileageEntry_GetSalesPrice',
      'MileageEntry_GetSalesPriceResponse' => 'Economic\\MileageEntry_GetSalesPriceResponse',
      'MileageEntry_GetCostPrice' => 'Economic\\MileageEntry_GetCostPrice',
      'MileageEntry_GetCostPriceResponse' => 'Economic\\MileageEntry_GetCostPriceResponse',
      'MileageEntry_GetCostRate' => 'Economic\\MileageEntry_GetCostRate',
      'MileageEntry_GetCostRateResponse' => 'Economic\\MileageEntry_GetCostRateResponse',
      'MileageEntry_GetSalesRate' => 'Economic\\MileageEntry_GetSalesRate',
      'MileageEntry_GetSalesRateResponse' => 'Economic\\MileageEntry_GetSalesRateResponse',
      'MileageEntry_SetDate' => 'Economic\\MileageEntry_SetDate',
      'MileageEntry_SetDateResponse' => 'Economic\\MileageEntry_SetDateResponse',
      'MileageEntry_GetStartLocation' => 'Economic\\MileageEntry_GetStartLocation',
      'MileageEntry_GetStartLocationResponse' => 'Economic\\MileageEntry_GetStartLocationResponse',
      'MileageEntry_SetStartLocation' => 'Economic\\MileageEntry_SetStartLocation',
      'MileageEntry_SetStartLocationResponse' => 'Economic\\MileageEntry_SetStartLocationResponse',
      'MileageEntry_GetEndLocation' => 'Economic\\MileageEntry_GetEndLocation',
      'MileageEntry_GetEndLocationResponse' => 'Economic\\MileageEntry_GetEndLocationResponse',
      'MileageEntry_SetEndLocation' => 'Economic\\MileageEntry_SetEndLocation',
      'MileageEntry_SetEndLocationResponse' => 'Economic\\MileageEntry_SetEndLocationResponse',
      'MileageEntry_GetDistance' => 'Economic\\MileageEntry_GetDistance',
      'MileageEntry_GetDistanceResponse' => 'Economic\\MileageEntry_GetDistanceResponse',
      'MileageEntry_SetDistance' => 'Economic\\MileageEntry_SetDistance',
      'MileageEntry_SetDistanceResponse' => 'Economic\\MileageEntry_SetDistanceResponse',
      'MileageEntry_GetApproved' => 'Economic\\MileageEntry_GetApproved',
      'MileageEntry_GetApprovedResponse' => 'Economic\\MileageEntry_GetApprovedResponse',
      'MileageEntry_ApproveEntries' => 'Economic\\MileageEntry_ApproveEntries',
      'MileageEntry_ApproveEntriesResponse' => 'Economic\\MileageEntry_ApproveEntriesResponse',
      'Order_CreateFromData' => 'Economic\\Order_CreateFromData',
      'OrderData' => 'Economic\\OrderData',
      'Order_CreateFromDataResponse' => 'Economic\\Order_CreateFromDataResponse',
      'Order_CreateFromDataArray' => 'Economic\\Order_CreateFromDataArray',
      'ArrayOfOrderData' => 'Economic\\ArrayOfOrderData',
      'Order_CreateFromDataArrayResponse' => 'Economic\\Order_CreateFromDataArrayResponse',
      'ArrayOfOrderHandle' => 'Economic\\ArrayOfOrderHandle',
      'Order_UpdateFromDataArray' => 'Economic\\Order_UpdateFromDataArray',
      'Order_UpdateFromDataArrayResponse' => 'Economic\\Order_UpdateFromDataArrayResponse',
      'Order_UpdateFromData' => 'Economic\\Order_UpdateFromData',
      'Order_UpdateFromDataResponse' => 'Economic\\Order_UpdateFromDataResponse',
      'Order_GetData' => 'Economic\\Order_GetData',
      'Order_GetDataResponse' => 'Economic\\Order_GetDataResponse',
      'Order_GetDataArray' => 'Economic\\Order_GetDataArray',
      'Order_GetDataArrayResponse' => 'Economic\\Order_GetDataArrayResponse',
      'Order_Create' => 'Economic\\Order_Create',
      'Order_CreateResponse' => 'Economic\\Order_CreateResponse',
      'Order_GetPdf' => 'Economic\\Order_GetPdf',
      'Order_GetPdfResponse' => 'Economic\\Order_GetPdfResponse',
      'Order_GetAll' => 'Economic\\Order_GetAll',
      'Order_GetAllResponse' => 'Economic\\Order_GetAllResponse',
      'Order_GetAllCurrent' => 'Economic\\Order_GetAllCurrent',
      'Order_GetAllCurrentResponse' => 'Economic\\Order_GetAllCurrentResponse',
      'Order_FindByOtherReference' => 'Economic\\Order_FindByOtherReference',
      'Order_FindByOtherReferenceResponse' => 'Economic\\Order_FindByOtherReferenceResponse',
      'Order_FindByNumber' => 'Economic\\Order_FindByNumber',
      'Order_FindByNumberResponse' => 'Economic\\Order_FindByNumberResponse',
      'Order_FindByNumberInterval' => 'Economic\\Order_FindByNumberInterval',
      'Order_FindByNumberIntervalResponse' => 'Economic\\Order_FindByNumberIntervalResponse',
      'Order_FindByDateInterval' => 'Economic\\Order_FindByDateInterval',
      'Order_FindByDateIntervalResponse' => 'Economic\\Order_FindByDateIntervalResponse',
      'Order_GetAllUpdated' => 'Economic\\Order_GetAllUpdated',
      'Order_GetAllUpdatedResponse' => 'Economic\\Order_GetAllUpdatedResponse',
      'Order_GetLines' => 'Economic\\Order_GetLines',
      'Order_GetLinesResponse' => 'Economic\\Order_GetLinesResponse',
      'Order_RegisterAsSent' => 'Economic\\Order_RegisterAsSent',
      'Order_RegisterAsSentResponse' => 'Economic\\Order_RegisterAsSentResponse',
      'Order_CancelSentStatus' => 'Economic\\Order_CancelSentStatus',
      'Order_CancelSentStatusResponse' => 'Economic\\Order_CancelSentStatusResponse',
      'Order_UpgradeToInvoice' => 'Economic\\Order_UpgradeToInvoice',
      'Order_UpgradeToInvoiceResponse' => 'Economic\\Order_UpgradeToInvoiceResponse',
      'CurrentInvoiceHandle' => 'Economic\\CurrentInvoiceHandle',
      'Order_Delete' => 'Economic\\Order_Delete',
      'Order_DeleteResponse' => 'Economic\\Order_DeleteResponse',
      'Order_GetDebtor' => 'Economic\\Order_GetDebtor',
      'Order_GetDebtorResponse' => 'Economic\\Order_GetDebtorResponse',
      'Order_SetDebtor' => 'Economic\\Order_SetDebtor',
      'Order_SetDebtorResponse' => 'Economic\\Order_SetDebtorResponse',
      'Order_GetNumber' => 'Economic\\Order_GetNumber',
      'Order_GetNumberResponse' => 'Economic\\Order_GetNumberResponse',
      'Order_GetDebtorName' => 'Economic\\Order_GetDebtorName',
      'Order_GetDebtorNameResponse' => 'Economic\\Order_GetDebtorNameResponse',
      'Order_SetDebtorName' => 'Economic\\Order_SetDebtorName',
      'Order_SetDebtorNameResponse' => 'Economic\\Order_SetDebtorNameResponse',
      'Order_GetDebtorAddress' => 'Economic\\Order_GetDebtorAddress',
      'Order_GetDebtorAddressResponse' => 'Economic\\Order_GetDebtorAddressResponse',
      'Order_SetDebtorAddress' => 'Economic\\Order_SetDebtorAddress',
      'Order_SetDebtorAddressResponse' => 'Economic\\Order_SetDebtorAddressResponse',
      'Order_GetDebtorPostalCode' => 'Economic\\Order_GetDebtorPostalCode',
      'Order_GetDebtorPostalCodeResponse' => 'Economic\\Order_GetDebtorPostalCodeResponse',
      'Order_SetDebtorPostalCode' => 'Economic\\Order_SetDebtorPostalCode',
      'Order_SetDebtorPostalCodeResponse' => 'Economic\\Order_SetDebtorPostalCodeResponse',
      'Order_GetDebtorCity' => 'Economic\\Order_GetDebtorCity',
      'Order_GetDebtorCityResponse' => 'Economic\\Order_GetDebtorCityResponse',
      'Order_SetDebtorCity' => 'Economic\\Order_SetDebtorCity',
      'Order_SetDebtorCityResponse' => 'Economic\\Order_SetDebtorCityResponse',
      'Order_GetDebtorCountry' => 'Economic\\Order_GetDebtorCountry',
      'Order_GetDebtorCountryResponse' => 'Economic\\Order_GetDebtorCountryResponse',
      'Order_SetDebtorCountry' => 'Economic\\Order_SetDebtorCountry',
      'Order_SetDebtorCountryResponse' => 'Economic\\Order_SetDebtorCountryResponse',
      'Order_GetDebtorEan' => 'Economic\\Order_GetDebtorEan',
      'Order_GetDebtorEanResponse' => 'Economic\\Order_GetDebtorEanResponse',
      'Order_SetDebtorEan' => 'Economic\\Order_SetDebtorEan',
      'Order_SetDebtorEanResponse' => 'Economic\\Order_SetDebtorEanResponse',
      'Order_GetProject' => 'Economic\\Order_GetProject',
      'Order_GetProjectResponse' => 'Economic\\Order_GetProjectResponse',
      'Order_SetProject' => 'Economic\\Order_SetProject',
      'Order_SetProjectResponse' => 'Economic\\Order_SetProjectResponse',
      'Order_GetPublicEntryNumber' => 'Economic\\Order_GetPublicEntryNumber',
      'Order_GetPublicEntryNumberResponse' => 'Economic\\Order_GetPublicEntryNumberResponse',
      'Order_SetPublicEntryNumber' => 'Economic\\Order_SetPublicEntryNumber',
      'Order_SetPublicEntryNumberResponse' => 'Economic\\Order_SetPublicEntryNumberResponse',
      'Order_GetAttention' => 'Economic\\Order_GetAttention',
      'Order_GetAttentionResponse' => 'Economic\\Order_GetAttentionResponse',
      'Order_SetAttention' => 'Economic\\Order_SetAttention',
      'Order_SetAttentionResponse' => 'Economic\\Order_SetAttentionResponse',
      'Order_GetYourReference' => 'Economic\\Order_GetYourReference',
      'Order_GetYourReferenceResponse' => 'Economic\\Order_GetYourReferenceResponse',
      'Order_SetYourReference' => 'Economic\\Order_SetYourReference',
      'Order_SetYourReferenceResponse' => 'Economic\\Order_SetYourReferenceResponse',
      'Order_GetOurReference' => 'Economic\\Order_GetOurReference',
      'Order_GetOurReferenceResponse' => 'Economic\\Order_GetOurReferenceResponse',
      'Order_SetOurReference' => 'Economic\\Order_SetOurReference',
      'Order_SetOurReferenceResponse' => 'Economic\\Order_SetOurReferenceResponse',
      'Order_GetOurReference2' => 'Economic\\Order_GetOurReference2',
      'Order_GetOurReference2Response' => 'Economic\\Order_GetOurReference2Response',
      'Order_SetOurReference2' => 'Economic\\Order_SetOurReference2',
      'Order_SetOurReference2Response' => 'Economic\\Order_SetOurReference2Response',
      'Order_GetDate' => 'Economic\\Order_GetDate',
      'Order_GetDateResponse' => 'Economic\\Order_GetDateResponse',
      'Order_SetDate' => 'Economic\\Order_SetDate',
      'Order_SetDateResponse' => 'Economic\\Order_SetDateResponse',
      'Order_GetTermOfPayment' => 'Economic\\Order_GetTermOfPayment',
      'Order_GetTermOfPaymentResponse' => 'Economic\\Order_GetTermOfPaymentResponse',
      'Order_SetTermOfPayment' => 'Economic\\Order_SetTermOfPayment',
      'Order_SetTermOfPaymentResponse' => 'Economic\\Order_SetTermOfPaymentResponse',
      'Order_GetDueDate' => 'Economic\\Order_GetDueDate',
      'Order_GetDueDateResponse' => 'Economic\\Order_GetDueDateResponse',
      'Order_SetDueDate' => 'Economic\\Order_SetDueDate',
      'Order_SetDueDateResponse' => 'Economic\\Order_SetDueDateResponse',
      'Order_GetCurrency' => 'Economic\\Order_GetCurrency',
      'Order_GetCurrencyResponse' => 'Economic\\Order_GetCurrencyResponse',
      'Order_SetCurrency' => 'Economic\\Order_SetCurrency',
      'Order_SetCurrencyResponse' => 'Economic\\Order_SetCurrencyResponse',
      'Order_GetExchangeRate' => 'Economic\\Order_GetExchangeRate',
      'Order_GetExchangeRateResponse' => 'Economic\\Order_GetExchangeRateResponse',
      'Order_SetExchangeRate' => 'Economic\\Order_SetExchangeRate',
      'Order_SetExchangeRateResponse' => 'Economic\\Order_SetExchangeRateResponse',
      'Order_GetIsVatIncluded' => 'Economic\\Order_GetIsVatIncluded',
      'Order_GetIsVatIncludedResponse' => 'Economic\\Order_GetIsVatIncludedResponse',
      'Order_SetIsVatIncluded' => 'Economic\\Order_SetIsVatIncluded',
      'Order_SetIsVatIncludedResponse' => 'Economic\\Order_SetIsVatIncludedResponse',
      'Order_GetVatZone' => 'Economic\\Order_GetVatZone',
      'Order_GetVatZoneResponse' => 'Economic\\Order_GetVatZoneResponse',
      'Order_SetVatZone' => 'Economic\\Order_SetVatZone',
      'Order_SetVatZoneResponse' => 'Economic\\Order_SetVatZoneResponse',
      'Order_GetLayout' => 'Economic\\Order_GetLayout',
      'Order_GetLayoutResponse' => 'Economic\\Order_GetLayoutResponse',
      'Order_SetLayout' => 'Economic\\Order_SetLayout',
      'Order_SetLayoutResponse' => 'Economic\\Order_SetLayoutResponse',
      'Invoice_GetAttention' => 'Economic\\Invoice_GetAttention',
      'InvoiceHandle' => 'Economic\\InvoiceHandle',
      'Invoice_GetAttentionResponse' => 'Economic\\Invoice_GetAttentionResponse',
      'Invoice_GetYourReference' => 'Economic\\Invoice_GetYourReference',
      'Invoice_GetYourReferenceResponse' => 'Economic\\Invoice_GetYourReferenceResponse',
      'Invoice_GetOurReference' => 'Economic\\Invoice_GetOurReference',
      'Invoice_GetOurReferenceResponse' => 'Economic\\Invoice_GetOurReferenceResponse',
      'Invoice_GetOurReference2' => 'Economic\\Invoice_GetOurReference2',
      'Invoice_GetOurReference2Response' => 'Economic\\Invoice_GetOurReference2Response',
      'Invoice_GetTermOfPayment' => 'Economic\\Invoice_GetTermOfPayment',
      'Invoice_GetTermOfPaymentResponse' => 'Economic\\Invoice_GetTermOfPaymentResponse',
      'Invoice_GetCurrency' => 'Economic\\Invoice_GetCurrency',
      'Invoice_GetCurrencyResponse' => 'Economic\\Invoice_GetCurrencyResponse',
      'Invoice_GetIsVatIncluded' => 'Economic\\Invoice_GetIsVatIncluded',
      'Invoice_GetIsVatIncludedResponse' => 'Economic\\Invoice_GetIsVatIncludedResponse',
      'Invoice_GetLayout' => 'Economic\\Invoice_GetLayout',
      'Invoice_GetLayoutResponse' => 'Economic\\Invoice_GetLayoutResponse',
      'Invoice_GetDeliveryLocation' => 'Economic\\Invoice_GetDeliveryLocation',
      'Invoice_GetDeliveryLocationResponse' => 'Economic\\Invoice_GetDeliveryLocationResponse',
      'Invoice_GetDeliveryAddress' => 'Economic\\Invoice_GetDeliveryAddress',
      'Invoice_GetDeliveryAddressResponse' => 'Economic\\Invoice_GetDeliveryAddressResponse',
      'Invoice_GetDeliveryPostalCode' => 'Economic\\Invoice_GetDeliveryPostalCode',
      'Invoice_GetDeliveryPostalCodeResponse' => 'Economic\\Invoice_GetDeliveryPostalCodeResponse',
      'Invoice_GetDeliveryCity' => 'Economic\\Invoice_GetDeliveryCity',
      'Invoice_GetDeliveryCityResponse' => 'Economic\\Invoice_GetDeliveryCityResponse',
      'Invoice_GetDeliveryCountry' => 'Economic\\Invoice_GetDeliveryCountry',
      'Invoice_GetDeliveryCountryResponse' => 'Economic\\Invoice_GetDeliveryCountryResponse',
      'Invoice_GetTermsOfDelivery' => 'Economic\\Invoice_GetTermsOfDelivery',
      'Invoice_GetTermsOfDeliveryResponse' => 'Economic\\Invoice_GetTermsOfDeliveryResponse',
      'Invoice_GetDeliveryDate' => 'Economic\\Invoice_GetDeliveryDate',
      'Invoice_GetDeliveryDateResponse' => 'Economic\\Invoice_GetDeliveryDateResponse',
      'Invoice_GetDate' => 'Economic\\Invoice_GetDate',
      'Invoice_GetDateResponse' => 'Economic\\Invoice_GetDateResponse',
      'Invoice_GetDueDate' => 'Economic\\Invoice_GetDueDate',
      'Invoice_GetDueDateResponse' => 'Economic\\Invoice_GetDueDateResponse',
      'Invoice_GetHeading' => 'Economic\\Invoice_GetHeading',
      'Invoice_GetHeadingResponse' => 'Economic\\Invoice_GetHeadingResponse',
      'Invoice_GetTextLine1' => 'Economic\\Invoice_GetTextLine1',
      'Invoice_GetTextLine1Response' => 'Economic\\Invoice_GetTextLine1Response',
      'Invoice_GetTextLine2' => 'Economic\\Invoice_GetTextLine2',
      'Invoice_GetTextLine2Response' => 'Economic\\Invoice_GetTextLine2Response',
      'Invoice_GetOtherReference' => 'Economic\\Invoice_GetOtherReference',
      'Invoice_GetOtherReferenceResponse' => 'Economic\\Invoice_GetOtherReferenceResponse',
      'Invoice_GetOrderNumber' => 'Economic\\Invoice_GetOrderNumber',
      'Invoice_GetOrderNumberResponse' => 'Economic\\Invoice_GetOrderNumberResponse',
      'Invoice_GetNetAmount' => 'Economic\\Invoice_GetNetAmount',
      'Invoice_GetNetAmountResponse' => 'Economic\\Invoice_GetNetAmountResponse',
      'Invoice_GetVatAmount' => 'Economic\\Invoice_GetVatAmount',
      'Invoice_GetVatAmountResponse' => 'Economic\\Invoice_GetVatAmountResponse',
      'Invoice_GetGrossAmount' => 'Economic\\Invoice_GetGrossAmount',
      'Invoice_GetGrossAmountResponse' => 'Economic\\Invoice_GetGrossAmountResponse',
      'Invoice_GetRemainder' => 'Economic\\Invoice_GetRemainder',
      'Invoice_GetRemainderResponse' => 'Economic\\Invoice_GetRemainderResponse',
      'Invoice_GetRemainderDefaultCurrency' => 'Economic\\Invoice_GetRemainderDefaultCurrency',
      'Invoice_GetRemainderDefaultCurrencyResponse' => 'Economic\\Invoice_GetRemainderDefaultCurrencyResponse',
      'Invoice_GetRoundingAmount' => 'Economic\\Invoice_GetRoundingAmount',
      'Invoice_GetRoundingAmountResponse' => 'Economic\\Invoice_GetRoundingAmountResponse',
      'Invoice_GetDebtorCounty' => 'Economic\\Invoice_GetDebtorCounty',
      'Invoice_GetDebtorCountyResponse' => 'Economic\\Invoice_GetDebtorCountyResponse',
      'Invoice_GetDeliveryCounty' => 'Economic\\Invoice_GetDeliveryCounty',
      'Invoice_GetDeliveryCountyResponse' => 'Economic\\Invoice_GetDeliveryCountyResponse',
      'Invoice_GetNetAmountDefaultCurrency' => 'Economic\\Invoice_GetNetAmountDefaultCurrency',
      'Invoice_GetNetAmountDefaultCurrencyResponse' => 'Economic\\Invoice_GetNetAmountDefaultCurrencyResponse',
      'Invoice_GetDeductionAmount' => 'Economic\\Invoice_GetDeductionAmount',
      'Invoice_GetDeductionAmountResponse' => 'Economic\\Invoice_GetDeductionAmountResponse',
      'Invoice_GetAll' => 'Economic\\Invoice_GetAll',
      'Invoice_GetAllResponse' => 'Economic\\Invoice_GetAllResponse',
      'ArrayOfInvoiceHandle' => 'Economic\\ArrayOfInvoiceHandle',
      'Invoice_FindByNumber' => 'Economic\\Invoice_FindByNumber',
      'Invoice_FindByNumberResponse' => 'Economic\\Invoice_FindByNumberResponse',
      'Invoice_FindByNumberList' => 'Economic\\Invoice_FindByNumberList',
      'Invoice_FindByNumberListResponse' => 'Economic\\Invoice_FindByNumberListResponse',
      'Invoice_FindByNumberInterval' => 'Economic\\Invoice_FindByNumberInterval',
      'Invoice_FindByNumberIntervalResponse' => 'Economic\\Invoice_FindByNumberIntervalResponse',
      'Invoice_FindByDateInterval' => 'Economic\\Invoice_FindByDateInterval',
      'Invoice_FindByDateIntervalResponse' => 'Economic\\Invoice_FindByDateIntervalResponse',
      'Invoice_FindByOurReference' => 'Economic\\Invoice_FindByOurReference',
      'Invoice_FindByOurReferenceResponse' => 'Economic\\Invoice_FindByOurReferenceResponse',
      'Invoice_FindByOtherReference' => 'Economic\\Invoice_FindByOtherReference',
      'Invoice_FindByOtherReferenceResponse' => 'Economic\\Invoice_FindByOtherReferenceResponse',
      'Invoice_FindByOrderNumber' => 'Economic\\Invoice_FindByOrderNumber',
      'Invoice_FindByOrderNumberResponse' => 'Economic\\Invoice_FindByOrderNumberResponse',
      'Invoice_GetLines' => 'Economic\\Invoice_GetLines',
      'Invoice_GetLinesResponse' => 'Economic\\Invoice_GetLinesResponse',
      'ArrayOfInvoiceLineHandle' => 'Economic\\ArrayOfInvoiceLineHandle',
      'InvoiceLineHandle' => 'Economic\\InvoiceLineHandle',
      'Invoice_GetPdf' => 'Economic\\Invoice_GetPdf',
      'Invoice_GetPdfResponse' => 'Economic\\Invoice_GetPdfResponse',
      'Invoice_GetOioXml' => 'Economic\\Invoice_GetOioXml',
      'Invoice_GetOioXmlResponse' => 'Economic\\Invoice_GetOioXmlResponse',
      'InvoiceLine_GetData' => 'Economic\\InvoiceLine_GetData',
      'InvoiceLine_GetDataResponse' => 'Economic\\InvoiceLine_GetDataResponse',
      'InvoiceLineData' => 'Economic\\InvoiceLineData',
      'InvoiceLine_GetDataArray' => 'Economic\\InvoiceLine_GetDataArray',
      'InvoiceLine_GetDataArrayResponse' => 'Economic\\InvoiceLine_GetDataArrayResponse',
      'ArrayOfInvoiceLineData' => 'Economic\\ArrayOfInvoiceLineData',
      'InvoiceLine_GetNumber' => 'Economic\\InvoiceLine_GetNumber',
      'InvoiceLine_GetNumberResponse' => 'Economic\\InvoiceLine_GetNumberResponse',
      'InvoiceLine_GetInvoice' => 'Economic\\InvoiceLine_GetInvoice',
      'InvoiceLine_GetInvoiceResponse' => 'Economic\\InvoiceLine_GetInvoiceResponse',
      'InvoiceLine_GetDescription' => 'Economic\\InvoiceLine_GetDescription',
      'InvoiceLine_GetDescriptionResponse' => 'Economic\\InvoiceLine_GetDescriptionResponse',
      'InvoiceLine_GetDeliveryDate' => 'Economic\\InvoiceLine_GetDeliveryDate',
      'InvoiceLine_GetDeliveryDateResponse' => 'Economic\\InvoiceLine_GetDeliveryDateResponse',
      'InvoiceLine_GetUnit' => 'Economic\\InvoiceLine_GetUnit',
      'InvoiceLine_GetUnitResponse' => 'Economic\\InvoiceLine_GetUnitResponse',
      'InvoiceLine_GetProduct' => 'Economic\\InvoiceLine_GetProduct',
      'InvoiceLine_GetProductResponse' => 'Economic\\InvoiceLine_GetProductResponse',
      'InvoiceLine_GetQuantity' => 'Economic\\InvoiceLine_GetQuantity',
      'InvoiceLine_GetQuantityResponse' => 'Economic\\InvoiceLine_GetQuantityResponse',
      'InvoiceLine_GetUnitNetPrice' => 'Economic\\InvoiceLine_GetUnitNetPrice',
      'InvoiceLine_GetUnitNetPriceResponse' => 'Economic\\InvoiceLine_GetUnitNetPriceResponse',
      'InvoiceLine_GetDiscountAsPercent' => 'Economic\\InvoiceLine_GetDiscountAsPercent',
      'InvoiceLine_GetDiscountAsPercentResponse' => 'Economic\\InvoiceLine_GetDiscountAsPercentResponse',
      'InvoiceLine_GetUnitCostPrice' => 'Economic\\InvoiceLine_GetUnitCostPrice',
      'InvoiceLine_GetUnitCostPriceResponse' => 'Economic\\InvoiceLine_GetUnitCostPriceResponse',
      'InvoiceLine_GetVatRate' => 'Economic\\InvoiceLine_GetVatRate',
      'InvoiceLine_GetVatRateResponse' => 'Economic\\InvoiceLine_GetVatRateResponse',
      'InvoiceLine_GetVatAmount' => 'Economic\\InvoiceLine_GetVatAmount',
      'InvoiceLine_GetVatAmountResponse' => 'Economic\\InvoiceLine_GetVatAmountResponse',
      'InvoiceLine_GetTotalNetAmount' => 'Economic\\InvoiceLine_GetTotalNetAmount',
      'InvoiceLine_GetTotalNetAmountResponse' => 'Economic\\InvoiceLine_GetTotalNetAmountResponse',
      'InvoiceLine_GetDepartment' => 'Economic\\InvoiceLine_GetDepartment',
      'InvoiceLine_GetDepartmentResponse' => 'Economic\\InvoiceLine_GetDepartmentResponse',
      'InvoiceLine_GetDistributionKey' => 'Economic\\InvoiceLine_GetDistributionKey',
      'InvoiceLine_GetDistributionKeyResponse' => 'Economic\\InvoiceLine_GetDistributionKeyResponse',
      'InvoiceLine_FindByProduct' => 'Economic\\InvoiceLine_FindByProduct',
      'InvoiceLine_FindByProductResponse' => 'Economic\\InvoiceLine_FindByProductResponse',
      'InvoiceLine_FindByProductList' => 'Economic\\InvoiceLine_FindByProductList',
      'InvoiceLine_FindByProductListResponse' => 'Economic\\InvoiceLine_FindByProductListResponse',
      'InvoiceLine_FindByInvoiceNumberInterval' => 'Economic\\InvoiceLine_FindByInvoiceNumberInterval',
      'InvoiceLine_FindByInvoiceNumberIntervalResponse' => 'Economic\\InvoiceLine_FindByInvoiceNumberIntervalResponse',
      'InventoryLocation_GetData' => 'Economic\\InventoryLocation_GetData',
      'InventoryLocation_GetDataResponse' => 'Economic\\InventoryLocation_GetDataResponse',
      'InventoryLocationData' => 'Economic\\InventoryLocationData',
      'InventoryLocation_GetDataArray' => 'Economic\\InventoryLocation_GetDataArray',
      'ArrayOfInventoryLocationHandle' => 'Economic\\ArrayOfInventoryLocationHandle',
      'InventoryLocation_GetDataArrayResponse' => 'Economic\\InventoryLocation_GetDataArrayResponse',
      'ArrayOfInventoryLocationData' => 'Economic\\ArrayOfInventoryLocationData',
      'InventoryLocation_GetAll' => 'Economic\\InventoryLocation_GetAll',
      'InventoryLocation_GetAllResponse' => 'Economic\\InventoryLocation_GetAllResponse',
      'InventoryLocation_FindByName' => 'Economic\\InventoryLocation_FindByName',
      'InventoryLocation_FindByNameResponse' => 'Economic\\InventoryLocation_FindByNameResponse',
      'InventoryLocation_FindByNumber' => 'Economic\\InventoryLocation_FindByNumber',
      'InventoryLocation_FindByNumberResponse' => 'Economic\\InventoryLocation_FindByNumberResponse',
      'InventoryLocation_FindByNumberList' => 'Economic\\InventoryLocation_FindByNumberList',
      'InventoryLocation_FindByNumberListResponse' => 'Economic\\InventoryLocation_FindByNumberListResponse',
      'InventoryLocation_GetNumber' => 'Economic\\InventoryLocation_GetNumber',
      'InventoryLocation_GetNumberResponse' => 'Economic\\InventoryLocation_GetNumberResponse',
      'InventoryLocation_GetName' => 'Economic\\InventoryLocation_GetName',
      'InventoryLocation_GetNameResponse' => 'Economic\\InventoryLocation_GetNameResponse',
      'KeyFigureCode_GetData' => 'Economic\\KeyFigureCode_GetData',
      'KeyFigureCodeHandle' => 'Economic\\KeyFigureCodeHandle',
      'KeyFigureCode_GetDataResponse' => 'Economic\\KeyFigureCode_GetDataResponse',
      'KeyFigureCodeData' => 'Economic\\KeyFigureCodeData',
      'KeyFigureCode_GetDataArray' => 'Economic\\KeyFigureCode_GetDataArray',
      'ArrayOfKeyFigureCodeHandle' => 'Economic\\ArrayOfKeyFigureCodeHandle',
      'KeyFigureCode_GetDataArrayResponse' => 'Economic\\KeyFigureCode_GetDataArrayResponse',
      'ArrayOfKeyFigureCodeData' => 'Economic\\ArrayOfKeyFigureCodeData',
      'KeyFigureCode_GetAll' => 'Economic\\KeyFigureCode_GetAll',
      'KeyFigureCode_GetAllResponse' => 'Economic\\KeyFigureCode_GetAllResponse',
      'KeyFigureCode_FindByName' => 'Economic\\KeyFigureCode_FindByName',
      'KeyFigureCode_FindByNameResponse' => 'Economic\\KeyFigureCode_FindByNameResponse',
      'KeyFigureCode_FindByNumber' => 'Economic\\KeyFigureCode_FindByNumber',
      'KeyFigureCode_FindByNumberResponse' => 'Economic\\KeyFigureCode_FindByNumberResponse',
      'KeyFigureCode_GetAccounts' => 'Economic\\KeyFigureCode_GetAccounts',
      'KeyFigureCode_GetAccountsResponse' => 'Economic\\KeyFigureCode_GetAccountsResponse',
      'KeyFigureCode_GetNumber' => 'Economic\\KeyFigureCode_GetNumber',
      'KeyFigureCode_GetNumberResponse' => 'Economic\\KeyFigureCode_GetNumberResponse',
      'KeyFigureCode_GetName' => 'Economic\\KeyFigureCode_GetName',
      'KeyFigureCode_GetNameResponse' => 'Economic\\KeyFigureCode_GetNameResponse',
      'MileageEntry_CreateFromData' => 'Economic\\MileageEntry_CreateFromData',
      'MileageEntryData' => 'Economic\\MileageEntryData',
      'MileageEntry_CreateFromDataResponse' => 'Economic\\MileageEntry_CreateFromDataResponse',
      'MileageEntry_CreateFromDataArray' => 'Economic\\MileageEntry_CreateFromDataArray',
      'ArrayOfMileageEntryData' => 'Economic\\ArrayOfMileageEntryData',
      'MileageEntry_CreateFromDataArrayResponse' => 'Economic\\MileageEntry_CreateFromDataArrayResponse',
      'MileageEntry_UpdateFromDataArray' => 'Economic\\MileageEntry_UpdateFromDataArray',
      'MileageEntry_UpdateFromDataArrayResponse' => 'Economic\\MileageEntry_UpdateFromDataArrayResponse',
      'MileageEntry_UpdateFromData' => 'Economic\\MileageEntry_UpdateFromData',
      'MileageEntry_UpdateFromDataResponse' => 'Economic\\MileageEntry_UpdateFromDataResponse',
      'MileageEntry_GetData' => 'Economic\\MileageEntry_GetData',
      'MileageEntry_GetDataResponse' => 'Economic\\MileageEntry_GetDataResponse',
      'MileageEntry_GetDataArray' => 'Economic\\MileageEntry_GetDataArray',
      'MileageEntry_GetDataArrayResponse' => 'Economic\\MileageEntry_GetDataArrayResponse',
      'Employee_GetDataArray' => 'Economic\\Employee_GetDataArray',
      'ArrayOfEmployeeHandle' => 'Economic\\ArrayOfEmployeeHandle',
      'Employee_GetDataArrayResponse' => 'Economic\\Employee_GetDataArrayResponse',
      'ArrayOfEmployeeData' => 'Economic\\ArrayOfEmployeeData',
      'EmployeeData' => 'Economic\\EmployeeData',
      'EmployeeGroupHandle' => 'Economic\\EmployeeGroupHandle',
      'Employee_GetType' => 'Economic\\Employee_GetType',
      'Employee_GetTypeResponse' => 'Economic\\Employee_GetTypeResponse',
      'Employee_GetNumber' => 'Economic\\Employee_GetNumber',
      'Employee_GetNumberResponse' => 'Economic\\Employee_GetNumberResponse',
      'Employee_GetGroup' => 'Economic\\Employee_GetGroup',
      'Employee_GetGroupResponse' => 'Economic\\Employee_GetGroupResponse',
      'Employee_SetGroup' => 'Economic\\Employee_SetGroup',
      'Employee_SetGroupResponse' => 'Economic\\Employee_SetGroupResponse',
      'Employee_GetName' => 'Economic\\Employee_GetName',
      'Employee_GetNameResponse' => 'Economic\\Employee_GetNameResponse',
      'Employee_SetName' => 'Economic\\Employee_SetName',
      'Employee_SetNameResponse' => 'Economic\\Employee_SetNameResponse',
      'Employee_Create' => 'Economic\\Employee_Create',
      'Employee_CreateResponse' => 'Economic\\Employee_CreateResponse',
      'Employee_GetAll' => 'Economic\\Employee_GetAll',
      'Employee_GetAllResponse' => 'Economic\\Employee_GetAllResponse',
      'Employee_FindByNumber' => 'Economic\\Employee_FindByNumber',
      'Employee_FindByNumberResponse' => 'Economic\\Employee_FindByNumberResponse',
      'Employee_FindByNumberList' => 'Economic\\Employee_FindByNumberList',
      'Employee_FindByNumberListResponse' => 'Economic\\Employee_FindByNumberListResponse',
      'Employee_FindByName' => 'Economic\\Employee_FindByName',
      'Employee_FindByNameResponse' => 'Economic\\Employee_FindByNameResponse',
      'Employee_Delete' => 'Economic\\Employee_Delete',
      'Employee_DeleteResponse' => 'Economic\\Employee_DeleteResponse',
      'Employee_GetTimeEntries' => 'Economic\\Employee_GetTimeEntries',
      'Employee_GetTimeEntriesResponse' => 'Economic\\Employee_GetTimeEntriesResponse',
      'Employee_GetTimeEntriesOnCurrentUser' => 'Economic\\Employee_GetTimeEntriesOnCurrentUser',
      'Employee_GetTimeEntriesOnCurrentUserResponse' => 'Economic\\Employee_GetTimeEntriesOnCurrentUserResponse',
      'Employee_GetProjectsOnCurrentUser' => 'Economic\\Employee_GetProjectsOnCurrentUser',
      'Employee_GetProjectsOnCurrentUserResponse' => 'Economic\\Employee_GetProjectsOnCurrentUserResponse',
      'Employee_GetActivitiesOnCurrentUserForProject' => 'Economic\\Employee_GetActivitiesOnCurrentUserForProject',
      'Employee_GetActivitiesOnCurrentUserForProjectResponse' => 'Economic\\Employee_GetActivitiesOnCurrentUserForProjectResponse',
      'ArrayOfActivityData' => 'Economic\\ArrayOfActivityData',
      'ActivityData' => 'Economic\\ActivityData',
      'Employee_GetTimeEntriesByDate' => 'Economic\\Employee_GetTimeEntriesByDate',
      'Employee_GetTimeEntriesByDateResponse' => 'Economic\\Employee_GetTimeEntriesByDateResponse',
      'Employee_GetTimeEntriesOnCurrentUserByDate' => 'Economic\\Employee_GetTimeEntriesOnCurrentUserByDate',
      'Employee_GetTimeEntriesOnCurrentUserByDateResponse' => 'Economic\\Employee_GetTimeEntriesOnCurrentUserByDateResponse',
      'Employee_GetMileageEntriesByDate' => 'Economic\\Employee_GetMileageEntriesByDate',
      'Employee_GetMileageEntriesByDateResponse' => 'Economic\\Employee_GetMileageEntriesByDateResponse',
      'Employee_GetSalesPrice' => 'Economic\\Employee_GetSalesPrice',
      'Employee_GetSalesPriceResponse' => 'Economic\\Employee_GetSalesPriceResponse',
      'Employee_GetCostPrice' => 'Economic\\Employee_GetCostPrice',
      'Employee_GetCostPriceResponse' => 'Economic\\Employee_GetCostPriceResponse',
      'Employee_GetSalesPriceByDate' => 'Economic\\Employee_GetSalesPriceByDate',
      'Employee_GetSalesPriceByDateResponse' => 'Economic\\Employee_GetSalesPriceByDateResponse',
      'Employee_GetCostPriceByDate' => 'Economic\\Employee_GetCostPriceByDate',
      'Employee_GetCostPriceByDateResponse' => 'Economic\\Employee_GetCostPriceByDateResponse',
      'Employee_SetCostPriceBefore' => 'Economic\\Employee_SetCostPriceBefore',
      'Employee_SetCostPriceBeforeResponse' => 'Economic\\Employee_SetCostPriceBeforeResponse',
      'Employee_SetCostPriceAfter' => 'Economic\\Employee_SetCostPriceAfter',
      'Employee_SetCostPriceAfterResponse' => 'Economic\\Employee_SetCostPriceAfterResponse',
      'Employee_SetSalesPriceBefore' => 'Economic\\Employee_SetSalesPriceBefore',
      'Employee_SetSalesPriceBeforeResponse' => 'Economic\\Employee_SetSalesPriceBeforeResponse',
      'Employee_SetSalesPriceAfter' => 'Economic\\Employee_SetSalesPriceAfter',
      'Employee_SetSalesPriceAfterResponse' => 'Economic\\Employee_SetSalesPriceAfterResponse',
      'Employee_GetCostPriceBefore' => 'Economic\\Employee_GetCostPriceBefore',
      'Employee_GetCostPriceBeforeResponse' => 'Economic\\Employee_GetCostPriceBeforeResponse',
      'Employee_GetCostPriceAfter' => 'Economic\\Employee_GetCostPriceAfter',
      'Employee_GetCostPriceAfterResponse' => 'Economic\\Employee_GetCostPriceAfterResponse',
      'Employee_GetSalesPriceBefore' => 'Economic\\Employee_GetSalesPriceBefore',
      'Employee_GetSalesPriceBeforeResponse' => 'Economic\\Employee_GetSalesPriceBeforeResponse',
      'Employee_GetSalesPriceAfter' => 'Economic\\Employee_GetSalesPriceAfter',
      'Employee_GetSalesPriceAfterResponse' => 'Economic\\Employee_GetSalesPriceAfterResponse',
      'Employee_SetCutoffDate' => 'Economic\\Employee_SetCutoffDate',
      'Employee_SetCutoffDateResponse' => 'Economic\\Employee_SetCutoffDateResponse',
      'Employee_GetCutoffDate' => 'Economic\\Employee_GetCutoffDate',
      'Employee_GetCutoffDateResponse' => 'Economic\\Employee_GetCutoffDateResponse',
      'EmployeeGroup_CreateFromData' => 'Economic\\EmployeeGroup_CreateFromData',
      'EmployeeGroupData' => 'Economic\\EmployeeGroupData',
      'EmployeeGroup_CreateFromDataResponse' => 'Economic\\EmployeeGroup_CreateFromDataResponse',
      'EmployeeGroup_CreateFromDataArray' => 'Economic\\EmployeeGroup_CreateFromDataArray',
      'ArrayOfEmployeeGroupData' => 'Economic\\ArrayOfEmployeeGroupData',
      'EmployeeGroup_CreateFromDataArrayResponse' => 'Economic\\EmployeeGroup_CreateFromDataArrayResponse',
      'ArrayOfEmployeeGroupHandle' => 'Economic\\ArrayOfEmployeeGroupHandle',
      'EmployeeGroup_UpdateFromDataArray' => 'Economic\\EmployeeGroup_UpdateFromDataArray',
      'EmployeeGroup_UpdateFromDataArrayResponse' => 'Economic\\EmployeeGroup_UpdateFromDataArrayResponse',
      'EmployeeGroup_UpdateFromData' => 'Economic\\EmployeeGroup_UpdateFromData',
      'EmployeeGroup_UpdateFromDataResponse' => 'Economic\\EmployeeGroup_UpdateFromDataResponse',
      'EmployeeGroup_GetData' => 'Economic\\EmployeeGroup_GetData',
      'EmployeeGroup_GetDataResponse' => 'Economic\\EmployeeGroup_GetDataResponse',
      'EmployeeGroup_GetDataArray' => 'Economic\\EmployeeGroup_GetDataArray',
      'EmployeeGroup_GetDataArrayResponse' => 'Economic\\EmployeeGroup_GetDataArrayResponse',
      'EmployeeGroup_GetNumber' => 'Economic\\EmployeeGroup_GetNumber',
      'EmployeeGroup_GetNumberResponse' => 'Economic\\EmployeeGroup_GetNumberResponse',
      'EmployeeGroup_GetName' => 'Economic\\EmployeeGroup_GetName',
      'EmployeeGroup_GetNameResponse' => 'Economic\\EmployeeGroup_GetNameResponse',
      'EmployeeGroup_SetName' => 'Economic\\EmployeeGroup_SetName',
      'EmployeeGroup_SetNameResponse' => 'Economic\\EmployeeGroup_SetNameResponse',
      'EmployeeGroup_Create' => 'Economic\\EmployeeGroup_Create',
      'EmployeeGroup_CreateResponse' => 'Economic\\EmployeeGroup_CreateResponse',
      'EmployeeGroup_GetAll' => 'Economic\\EmployeeGroup_GetAll',
      'EmployeeGroup_GetAllResponse' => 'Economic\\EmployeeGroup_GetAllResponse',
      'EmployeeGroup_FindByNumber' => 'Economic\\EmployeeGroup_FindByNumber',
      'EmployeeGroup_FindByNumberResponse' => 'Economic\\EmployeeGroup_FindByNumberResponse',
      'EmployeeGroup_FindByNumberList' => 'Economic\\EmployeeGroup_FindByNumberList',
      'EmployeeGroup_FindByNumberListResponse' => 'Economic\\EmployeeGroup_FindByNumberListResponse',
      'EmployeeGroup_FindByName' => 'Economic\\EmployeeGroup_FindByName',
      'EmployeeGroup_FindByNameResponse' => 'Economic\\EmployeeGroup_FindByNameResponse',
      'EmployeeGroup_GetEmployees' => 'Economic\\EmployeeGroup_GetEmployees',
      'EmployeeGroup_GetEmployeesResponse' => 'Economic\\EmployeeGroup_GetEmployeesResponse',
      'EmployeeGroup_Delete' => 'Economic\\EmployeeGroup_Delete',
      'EmployeeGroup_DeleteResponse' => 'Economic\\EmployeeGroup_DeleteResponse',
      'Entry_GetData' => 'Economic\\Entry_GetData',
      'Entry_GetDataResponse' => 'Economic\\Entry_GetDataResponse',
      'EntryData' => 'Economic\\EntryData',
      'Entry_GetDataArray' => 'Economic\\Entry_GetDataArray',
      'Entry_GetDataArrayResponse' => 'Economic\\Entry_GetDataArrayResponse',
      'ArrayOfEntryData' => 'Economic\\ArrayOfEntryData',
      'Entry_GetLastUsedSerialNumber' => 'Economic\\Entry_GetLastUsedSerialNumber',
      'Entry_GetLastUsedSerialNumberResponse' => 'Economic\\Entry_GetLastUsedSerialNumberResponse',
      'Entry_FindBySerialNumberInterval' => 'Economic\\Entry_FindBySerialNumberInterval',
      'Entry_FindBySerialNumberIntervalResponse' => 'Economic\\Entry_FindBySerialNumberIntervalResponse',
      'Entry_FindByDateInterval' => 'Economic\\Entry_FindByDateInterval',
      'Entry_FindByDateIntervalResponse' => 'Economic\\Entry_FindByDateIntervalResponse',
      'Entry_GetSerialNumber' => 'Economic\\Entry_GetSerialNumber',
      'Entry_GetSerialNumberResponse' => 'Economic\\Entry_GetSerialNumberResponse',
      'Entry_GetAccount' => 'Economic\\Entry_GetAccount',
      'Entry_GetAccountResponse' => 'Economic\\Entry_GetAccountResponse',
      'Entry_GetAmount' => 'Economic\\Entry_GetAmount',
      'Entry_GetAmountResponse' => 'Economic\\Entry_GetAmountResponse',
      'Entry_GetAmountDefaultCurrency' => 'Economic\\Entry_GetAmountDefaultCurrency',
      'Entry_GetAmountDefaultCurrencyResponse' => 'Economic\\Entry_GetAmountDefaultCurrencyResponse',
      'Entry_GetUnit1' => 'Economic\\Entry_GetUnit1',
      'Entry_GetUnit1Response' => 'Economic\\Entry_GetUnit1Response',
      'Entry_GetUnit2' => 'Economic\\Entry_GetUnit2',
      'Entry_GetUnit2Response' => 'Economic\\Entry_GetUnit2Response',
      'Entry_GetQuantity1' => 'Economic\\Entry_GetQuantity1',
      'Entry_GetQuantity1Response' => 'Economic\\Entry_GetQuantity1Response',
      'Entry_GetQuantity2' => 'Economic\\Entry_GetQuantity2',
      'Entry_GetQuantity2Response' => 'Economic\\Entry_GetQuantity2Response',
      'Entry_GetCurrency' => 'Economic\\Entry_GetCurrency',
      'Entry_GetCurrencyResponse' => 'Economic\\Entry_GetCurrencyResponse',
      'Entry_GetDate' => 'Economic\\Entry_GetDate',
      'Entry_GetDateResponse' => 'Economic\\Entry_GetDateResponse',
      'Entry_GetText' => 'Economic\\Entry_GetText',
      'Entry_GetTextResponse' => 'Economic\\Entry_GetTextResponse',
      'Entry_GetType' => 'Economic\\Entry_GetType',
      'Entry_GetTypeResponse' => 'Economic\\Entry_GetTypeResponse',
      'Entry_GetDepartment' => 'Economic\\Entry_GetDepartment',
      'Entry_GetDepartmentResponse' => 'Economic\\Entry_GetDepartmentResponse',
      'Entry_GetDistributionKey' => 'Economic\\Entry_GetDistributionKey',
      'Entry_GetDistributionKeyResponse' => 'Economic\\Entry_GetDistributionKeyResponse',
      'Entry_GetVatAccount' => 'Economic\\Entry_GetVatAccount',
      'Entry_GetVatAccountResponse' => 'Economic\\Entry_GetVatAccountResponse',
      'Entry_GetVoucherNumber' => 'Economic\\Entry_GetVoucherNumber',
      'Entry_GetVoucherNumberResponse' => 'Economic\\Entry_GetVoucherNumberResponse',
      'Entry_GetProject' => 'Economic\\Entry_GetProject',
      'Entry_GetProjectResponse' => 'Economic\\Entry_GetProjectResponse',
      'Entry_GetDocument' => 'Economic\\Entry_GetDocument',
      'Entry_GetDocumentResponse' => 'Economic\\Entry_GetDocumentResponse',
      'Invoice_GetData' => 'Economic\\Invoice_GetData',
      'Invoice_GetDataResponse' => 'Economic\\Invoice_GetDataResponse',
      'InvoiceData' => 'Economic\\InvoiceData',
      'Invoice_GetDataArray' => 'Economic\\Invoice_GetDataArray',
      'Invoice_GetDataArrayResponse' => 'Economic\\Invoice_GetDataArrayResponse',
      'ArrayOfInvoiceData' => 'Economic\\ArrayOfInvoiceData',
      'Invoice_GetNumber' => 'Economic\\Invoice_GetNumber',
      'Invoice_GetNumberResponse' => 'Economic\\Invoice_GetNumberResponse',
      'Invoice_GetDebtor' => 'Economic\\Invoice_GetDebtor',
      'Invoice_GetDebtorResponse' => 'Economic\\Invoice_GetDebtorResponse',
      'Invoice_GetProject' => 'Economic\\Invoice_GetProject',
      'Invoice_GetProjectResponse' => 'Economic\\Invoice_GetProjectResponse',
      'Invoice_GetDebtorName' => 'Economic\\Invoice_GetDebtorName',
      'Invoice_GetDebtorNameResponse' => 'Economic\\Invoice_GetDebtorNameResponse',
      'Invoice_GetDebtorAddress' => 'Economic\\Invoice_GetDebtorAddress',
      'Invoice_GetDebtorAddressResponse' => 'Economic\\Invoice_GetDebtorAddressResponse',
      'Invoice_GetDebtorPostalCode' => 'Economic\\Invoice_GetDebtorPostalCode',
      'Invoice_GetDebtorPostalCodeResponse' => 'Economic\\Invoice_GetDebtorPostalCodeResponse',
      'Invoice_GetDebtorCity' => 'Economic\\Invoice_GetDebtorCity',
      'Invoice_GetDebtorCityResponse' => 'Economic\\Invoice_GetDebtorCityResponse',
      'Invoice_GetDebtorCountry' => 'Economic\\Invoice_GetDebtorCountry',
      'Invoice_GetDebtorCountryResponse' => 'Economic\\Invoice_GetDebtorCountryResponse',
      'Invoice_GetDebtorEan' => 'Economic\\Invoice_GetDebtorEan',
      'Invoice_GetDebtorEanResponse' => 'Economic\\Invoice_GetDebtorEanResponse',
      'Invoice_GetPublicEntryNumber' => 'Economic\\Invoice_GetPublicEntryNumber',
      'Invoice_GetPublicEntryNumberResponse' => 'Economic\\Invoice_GetPublicEntryNumberResponse',
      'DebtorGroup_FindByNumber' => 'Economic\\DebtorGroup_FindByNumber',
      'DebtorGroup_FindByNumberResponse' => 'Economic\\DebtorGroup_FindByNumberResponse',
      'DebtorGroupHandle' => 'Economic\\DebtorGroupHandle',
      'DebtorGroup_FindByNumberList' => 'Economic\\DebtorGroup_FindByNumberList',
      'DebtorGroup_FindByNumberListResponse' => 'Economic\\DebtorGroup_FindByNumberListResponse',
      'ArrayOfDebtorGroupHandle' => 'Economic\\ArrayOfDebtorGroupHandle',
      'DebtorGroup_FindByName' => 'Economic\\DebtorGroup_FindByName',
      'DebtorGroup_FindByNameResponse' => 'Economic\\DebtorGroup_FindByNameResponse',
      'DebtorGroup_GetDebtors' => 'Economic\\DebtorGroup_GetDebtors',
      'DebtorGroup_GetDebtorsResponse' => 'Economic\\DebtorGroup_GetDebtorsResponse',
      'ArrayOfDebtorHandle' => 'Economic\\ArrayOfDebtorHandle',
      'DeliveryLocation_CreateFromData' => 'Economic\\DeliveryLocation_CreateFromData',
      'DeliveryLocationData' => 'Economic\\DeliveryLocationData',
      'DeliveryLocation_CreateFromDataResponse' => 'Economic\\DeliveryLocation_CreateFromDataResponse',
      'DeliveryLocation_CreateFromDataArray' => 'Economic\\DeliveryLocation_CreateFromDataArray',
      'ArrayOfDeliveryLocationData' => 'Economic\\ArrayOfDeliveryLocationData',
      'DeliveryLocation_CreateFromDataArrayResponse' => 'Economic\\DeliveryLocation_CreateFromDataArrayResponse',
      'ArrayOfDeliveryLocationHandle' => 'Economic\\ArrayOfDeliveryLocationHandle',
      'DeliveryLocation_UpdateFromDataArray' => 'Economic\\DeliveryLocation_UpdateFromDataArray',
      'DeliveryLocation_UpdateFromDataArrayResponse' => 'Economic\\DeliveryLocation_UpdateFromDataArrayResponse',
      'DeliveryLocation_UpdateFromData' => 'Economic\\DeliveryLocation_UpdateFromData',
      'DeliveryLocation_UpdateFromDataResponse' => 'Economic\\DeliveryLocation_UpdateFromDataResponse',
      'DeliveryLocation_GetData' => 'Economic\\DeliveryLocation_GetData',
      'DeliveryLocation_GetDataResponse' => 'Economic\\DeliveryLocation_GetDataResponse',
      'DeliveryLocation_GetDataArray' => 'Economic\\DeliveryLocation_GetDataArray',
      'DeliveryLocation_GetDataArrayResponse' => 'Economic\\DeliveryLocation_GetDataArrayResponse',
      'DeliveryLocation_GetDebtor' => 'Economic\\DeliveryLocation_GetDebtor',
      'DeliveryLocation_GetDebtorResponse' => 'Economic\\DeliveryLocation_GetDebtorResponse',
      'DeliveryLocation_GetNumber' => 'Economic\\DeliveryLocation_GetNumber',
      'DeliveryLocation_GetNumberResponse' => 'Economic\\DeliveryLocation_GetNumberResponse',
      'DeliveryLocation_GetAddress' => 'Economic\\DeliveryLocation_GetAddress',
      'DeliveryLocation_GetAddressResponse' => 'Economic\\DeliveryLocation_GetAddressResponse',
      'DeliveryLocation_SetAddress' => 'Economic\\DeliveryLocation_SetAddress',
      'DeliveryLocation_SetAddressResponse' => 'Economic\\DeliveryLocation_SetAddressResponse',
      'DeliveryLocation_GetPostalCode' => 'Economic\\DeliveryLocation_GetPostalCode',
      'DeliveryLocation_GetPostalCodeResponse' => 'Economic\\DeliveryLocation_GetPostalCodeResponse',
      'DeliveryLocation_SetPostalCode' => 'Economic\\DeliveryLocation_SetPostalCode',
      'DeliveryLocation_SetPostalCodeResponse' => 'Economic\\DeliveryLocation_SetPostalCodeResponse',
      'DeliveryLocation_GetCity' => 'Economic\\DeliveryLocation_GetCity',
      'DeliveryLocation_GetCityResponse' => 'Economic\\DeliveryLocation_GetCityResponse',
      'DeliveryLocation_SetCity' => 'Economic\\DeliveryLocation_SetCity',
      'DeliveryLocation_SetCityResponse' => 'Economic\\DeliveryLocation_SetCityResponse',
      'DeliveryLocation_SetCountry' => 'Economic\\DeliveryLocation_SetCountry',
      'DeliveryLocation_SetCountryResponse' => 'Economic\\DeliveryLocation_SetCountryResponse',
      'DeliveryLocation_GetCountry' => 'Economic\\DeliveryLocation_GetCountry',
      'DeliveryLocation_GetCountryResponse' => 'Economic\\DeliveryLocation_GetCountryResponse',
      'DeliveryLocation_SetTermsOfDelivery' => 'Economic\\DeliveryLocation_SetTermsOfDelivery',
      'DeliveryLocation_SetTermsOfDeliveryResponse' => 'Economic\\DeliveryLocation_SetTermsOfDeliveryResponse',
      'DeliveryLocation_GetTermsOfDelivery' => 'Economic\\DeliveryLocation_GetTermsOfDelivery',
      'DeliveryLocation_GetTermsOfDeliveryResponse' => 'Economic\\DeliveryLocation_GetTermsOfDeliveryResponse',
      'DeliveryLocation_GetIsAccessible' => 'Economic\\DeliveryLocation_GetIsAccessible',
      'DeliveryLocation_GetIsAccessibleResponse' => 'Economic\\DeliveryLocation_GetIsAccessibleResponse',
      'DeliveryLocation_SetIsAccessible' => 'Economic\\DeliveryLocation_SetIsAccessible',
      'DeliveryLocation_SetIsAccessibleResponse' => 'Economic\\DeliveryLocation_SetIsAccessibleResponse',
      'DeliveryLocation_GetExternalId' => 'Economic\\DeliveryLocation_GetExternalId',
      'DeliveryLocation_GetExternalIdResponse' => 'Economic\\DeliveryLocation_GetExternalIdResponse',
      'DeliveryLocation_SetExternalId' => 'Economic\\DeliveryLocation_SetExternalId',
      'DeliveryLocation_SetExternalIdResponse' => 'Economic\\DeliveryLocation_SetExternalIdResponse',
      'DeliveryLocation_GetCounty' => 'Economic\\DeliveryLocation_GetCounty',
      'DeliveryLocation_GetCountyResponse' => 'Economic\\DeliveryLocation_GetCountyResponse',
      'DeliveryLocation_SetCounty' => 'Economic\\DeliveryLocation_SetCounty',
      'DeliveryLocation_SetCountyResponse' => 'Economic\\DeliveryLocation_SetCountyResponse',
      'DeliveryLocation_Create' => 'Economic\\DeliveryLocation_Create',
      'DeliveryLocation_CreateResponse' => 'Economic\\DeliveryLocation_CreateResponse',
      'DeliveryLocation_GetAll' => 'Economic\\DeliveryLocation_GetAll',
      'DeliveryLocation_GetAllResponse' => 'Economic\\DeliveryLocation_GetAllResponse',
      'DeliveryLocation_FindByExternalId' => 'Economic\\DeliveryLocation_FindByExternalId',
      'DeliveryLocation_FindByExternalIdResponse' => 'Economic\\DeliveryLocation_FindByExternalIdResponse',
      'DeliveryLocation_Delete' => 'Economic\\DeliveryLocation_Delete',
      'DeliveryLocation_DeleteResponse' => 'Economic\\DeliveryLocation_DeleteResponse',
      'Department_CreateFromData' => 'Economic\\Department_CreateFromData',
      'DepartmentData' => 'Economic\\DepartmentData',
      'Department_CreateFromDataResponse' => 'Economic\\Department_CreateFromDataResponse',
      'Department_CreateFromDataArray' => 'Economic\\Department_CreateFromDataArray',
      'ArrayOfDepartmentData' => 'Economic\\ArrayOfDepartmentData',
      'Department_CreateFromDataArrayResponse' => 'Economic\\Department_CreateFromDataArrayResponse',
      'ArrayOfDepartmentHandle' => 'Economic\\ArrayOfDepartmentHandle',
      'Department_UpdateFromDataArray' => 'Economic\\Department_UpdateFromDataArray',
      'Department_UpdateFromDataArrayResponse' => 'Economic\\Department_UpdateFromDataArrayResponse',
      'Department_UpdateFromData' => 'Economic\\Department_UpdateFromData',
      'Department_UpdateFromDataResponse' => 'Economic\\Department_UpdateFromDataResponse',
      'Department_GetData' => 'Economic\\Department_GetData',
      'Department_GetDataResponse' => 'Economic\\Department_GetDataResponse',
      'Department_GetDataArray' => 'Economic\\Department_GetDataArray',
      'Department_GetDataArrayResponse' => 'Economic\\Department_GetDataArrayResponse',
      'Department_Create' => 'Economic\\Department_Create',
      'Department_CreateResponse' => 'Economic\\Department_CreateResponse',
      'Department_GetAll' => 'Economic\\Department_GetAll',
      'Department_GetAllResponse' => 'Economic\\Department_GetAllResponse',
      'Department_FindByNumber' => 'Economic\\Department_FindByNumber',
      'Department_FindByNumberResponse' => 'Economic\\Department_FindByNumberResponse',
      'Department_FindByNumberList' => 'Economic\\Department_FindByNumberList',
      'Department_FindByNumberListResponse' => 'Economic\\Department_FindByNumberListResponse',
      'Department_FindByName' => 'Economic\\Department_FindByName',
      'Department_FindByNameResponse' => 'Economic\\Department_FindByNameResponse',
      'Department_GetAllUpdated' => 'Economic\\Department_GetAllUpdated',
      'Department_GetAllUpdatedResponse' => 'Economic\\Department_GetAllUpdatedResponse',
      'Department_Delete' => 'Economic\\Department_Delete',
      'Department_DeleteResponse' => 'Economic\\Department_DeleteResponse',
      'Department_GetNumber' => 'Economic\\Department_GetNumber',
      'Department_GetNumberResponse' => 'Economic\\Department_GetNumberResponse',
      'Department_GetName' => 'Economic\\Department_GetName',
      'Department_GetNameResponse' => 'Economic\\Department_GetNameResponse',
      'Department_GetIsAccessible' => 'Economic\\Department_GetIsAccessible',
      'Department_GetIsAccessibleResponse' => 'Economic\\Department_GetIsAccessibleResponse',
      'Department_SetName' => 'Economic\\Department_SetName',
      'Department_SetNameResponse' => 'Economic\\Department_SetNameResponse',
      'Department_SetIsAccessible' => 'Economic\\Department_SetIsAccessible',
      'Department_SetIsAccessibleResponse' => 'Economic\\Department_SetIsAccessibleResponse',
      'DistributionKey_UpdateFromDataArray' => 'Economic\\DistributionKey_UpdateFromDataArray',
      'ArrayOfDistributionKeyData' => 'Economic\\ArrayOfDistributionKeyData',
      'DistributionKeyData' => 'Economic\\DistributionKeyData',
      'DistributionKey_UpdateFromDataArrayResponse' => 'Economic\\DistributionKey_UpdateFromDataArrayResponse',
      'ArrayOfDistributionKeyHandle' => 'Economic\\ArrayOfDistributionKeyHandle',
      'DistributionKey_UpdateFromData' => 'Economic\\DistributionKey_UpdateFromData',
      'DistributionKey_UpdateFromDataResponse' => 'Economic\\DistributionKey_UpdateFromDataResponse',
      'DistributionKey_GetData' => 'Economic\\DistributionKey_GetData',
      'DistributionKey_GetDataResponse' => 'Economic\\DistributionKey_GetDataResponse',
      'DistributionKey_GetDataArray' => 'Economic\\DistributionKey_GetDataArray',
      'DistributionKey_GetDataArrayResponse' => 'Economic\\DistributionKey_GetDataArrayResponse',
      'DistributionKey_GetAll' => 'Economic\\DistributionKey_GetAll',
      'DistributionKey_GetAllResponse' => 'Economic\\DistributionKey_GetAllResponse',
      'DistributionKey_FindByNumber' => 'Economic\\DistributionKey_FindByNumber',
      'DistributionKey_FindByNumberResponse' => 'Economic\\DistributionKey_FindByNumberResponse',
      'DistributionKey_FindByNumberList' => 'Economic\\DistributionKey_FindByNumberList',
      'DistributionKey_FindByNumberListResponse' => 'Economic\\DistributionKey_FindByNumberListResponse',
      'DistributionKey_FindByName' => 'Economic\\DistributionKey_FindByName',
      'DistributionKey_FindByNameResponse' => 'Economic\\DistributionKey_FindByNameResponse',
      'DistributionKey_GetDepartments' => 'Economic\\DistributionKey_GetDepartments',
      'DistributionKey_GetDepartmentsResponse' => 'Economic\\DistributionKey_GetDepartmentsResponse',
      'DistributionKey_GetPercentages' => 'Economic\\DistributionKey_GetPercentages',
      'DistributionKey_GetPercentagesResponse' => 'Economic\\DistributionKey_GetPercentagesResponse',
      'ArrayOfDecimal' => 'Economic\\ArrayOfDecimal',
      'DistributionKey_GetNumber' => 'Economic\\DistributionKey_GetNumber',
      'DistributionKey_GetNumberResponse' => 'Economic\\DistributionKey_GetNumberResponse',
      'DistributionKey_GetName' => 'Economic\\DistributionKey_GetName',
      'DistributionKey_GetNameResponse' => 'Economic\\DistributionKey_GetNameResponse',
      'DistributionKey_SetName' => 'Economic\\DistributionKey_SetName',
      'DistributionKey_SetNameResponse' => 'Economic\\DistributionKey_SetNameResponse',
      'DistributionKey_GetIsAccessible' => 'Economic\\DistributionKey_GetIsAccessible',
      'DistributionKey_GetIsAccessibleResponse' => 'Economic\\DistributionKey_GetIsAccessibleResponse',
      'DistributionKey_SetIsAccessible' => 'Economic\\DistributionKey_SetIsAccessible',
      'DistributionKey_SetIsAccessibleResponse' => 'Economic\\DistributionKey_SetIsAccessibleResponse',
      'DocumentArchiveCategory_CreateFromData' => 'Economic\\DocumentArchiveCategory_CreateFromData',
      'DocumentArchiveCategoryData' => 'Economic\\DocumentArchiveCategoryData',
      'DocumentArchiveCategory_CreateFromDataResponse' => 'Economic\\DocumentArchiveCategory_CreateFromDataResponse',
      'DocumentArchiveCategory_CreateFromDataArray' => 'Economic\\DocumentArchiveCategory_CreateFromDataArray',
      'ArrayOfDocumentArchiveCategoryData' => 'Economic\\ArrayOfDocumentArchiveCategoryData',
      'DocumentArchiveCategory_CreateFromDataArrayResponse' => 'Economic\\DocumentArchiveCategory_CreateFromDataArrayResponse',
      'ArrayOfDocumentArchiveCategoryHandle' => 'Economic\\ArrayOfDocumentArchiveCategoryHandle',
      'DocumentArchiveCategory_UpdateFromDataArray' => 'Economic\\DocumentArchiveCategory_UpdateFromDataArray',
      'DocumentArchiveCategory_UpdateFromDataArrayResponse' => 'Economic\\DocumentArchiveCategory_UpdateFromDataArrayResponse',
      'DocumentArchiveCategory_UpdateFromData' => 'Economic\\DocumentArchiveCategory_UpdateFromData',
      'DocumentArchiveCategory_UpdateFromDataResponse' => 'Economic\\DocumentArchiveCategory_UpdateFromDataResponse',
      'DocumentArchiveCategory_GetData' => 'Economic\\DocumentArchiveCategory_GetData',
      'DocumentArchiveCategory_GetDataResponse' => 'Economic\\DocumentArchiveCategory_GetDataResponse',
      'DocumentArchiveCategory_GetDataArray' => 'Economic\\DocumentArchiveCategory_GetDataArray',
      'DocumentArchiveCategory_GetDataArrayResponse' => 'Economic\\DocumentArchiveCategory_GetDataArrayResponse',
      'DocumentArchiveCategory_Create' => 'Economic\\DocumentArchiveCategory_Create',
      'DocumentArchiveCategory_CreateResponse' => 'Economic\\DocumentArchiveCategory_CreateResponse',
      'DocumentArchiveCategory_GetAll' => 'Economic\\DocumentArchiveCategory_GetAll',
      'DocumentArchiveCategory_GetAllResponse' => 'Economic\\DocumentArchiveCategory_GetAllResponse',
      'DocumentArchiveCategory_FindByNumber' => 'Economic\\DocumentArchiveCategory_FindByNumber',
      'DocumentArchiveCategory_FindByNumberResponse' => 'Economic\\DocumentArchiveCategory_FindByNumberResponse',
      'DocumentArchiveCategory_FindByName' => 'Economic\\DocumentArchiveCategory_FindByName',
      'DocumentArchiveCategory_FindByNameResponse' => 'Economic\\DocumentArchiveCategory_FindByNameResponse',
      'DocumentArchiveCategory_GetDocuments' => 'Economic\\DocumentArchiveCategory_GetDocuments',
      'DocumentArchiveCategory_GetDocumentsResponse' => 'Economic\\DocumentArchiveCategory_GetDocumentsResponse',
      'DocumentArchiveCategory_Delete' => 'Economic\\DocumentArchiveCategory_Delete',
      'DocumentArchiveCategory_DeleteResponse' => 'Economic\\DocumentArchiveCategory_DeleteResponse',
      'DocumentArchiveCategory_GetNumber' => 'Economic\\DocumentArchiveCategory_GetNumber',
      'DocumentArchiveCategory_GetNumberResponse' => 'Economic\\DocumentArchiveCategory_GetNumberResponse',
      'DocumentArchiveCategory_GetName' => 'Economic\\DocumentArchiveCategory_GetName',
      'DocumentArchiveCategory_GetNameResponse' => 'Economic\\DocumentArchiveCategory_GetNameResponse',
      'DocumentArchiveCategory_SetName' => 'Economic\\DocumentArchiveCategory_SetName',
      'DocumentArchiveCategory_SetNameResponse' => 'Economic\\DocumentArchiveCategory_SetNameResponse',
      'Employee_CreateFromData' => 'Economic\\Employee_CreateFromData',
      'Employee_CreateFromDataResponse' => 'Economic\\Employee_CreateFromDataResponse',
      'Employee_CreateFromDataArray' => 'Economic\\Employee_CreateFromDataArray',
      'Employee_CreateFromDataArrayResponse' => 'Economic\\Employee_CreateFromDataArrayResponse',
      'Employee_UpdateFromDataArray' => 'Economic\\Employee_UpdateFromDataArray',
      'Employee_UpdateFromDataArrayResponse' => 'Economic\\Employee_UpdateFromDataArrayResponse',
      'Employee_UpdateFromData' => 'Economic\\Employee_UpdateFromData',
      'Employee_UpdateFromDataResponse' => 'Economic\\Employee_UpdateFromDataResponse',
      'Employee_GetData' => 'Economic\\Employee_GetData',
      'Employee_GetDataResponse' => 'Economic\\Employee_GetDataResponse',
      'Debtor_GetBalance' => 'Economic\\Debtor_GetBalance',
      'Debtor_GetBalanceResponse' => 'Economic\\Debtor_GetBalanceResponse',
      'Debtor_GetNextAvailableNumber' => 'Economic\\Debtor_GetNextAvailableNumber',
      'Debtor_GetNextAvailableNumberResponse' => 'Economic\\Debtor_GetNextAvailableNumberResponse',
      'Debtor_Create' => 'Economic\\Debtor_Create',
      'Debtor_CreateResponse' => 'Economic\\Debtor_CreateResponse',
      'Debtor_GetAll' => 'Economic\\Debtor_GetAll',
      'Debtor_GetAllResponse' => 'Economic\\Debtor_GetAllResponse',
      'Debtor_GetAllUpdated' => 'Economic\\Debtor_GetAllUpdated',
      'Debtor_GetAllUpdatedResponse' => 'Economic\\Debtor_GetAllUpdatedResponse',
      'Debtor_FindByNumber' => 'Economic\\Debtor_FindByNumber',
      'Debtor_FindByNumberResponse' => 'Economic\\Debtor_FindByNumberResponse',
      'Debtor_FindByNumberList' => 'Economic\\Debtor_FindByNumberList',
      'Debtor_FindByNumberListResponse' => 'Economic\\Debtor_FindByNumberListResponse',
      'Debtor_FindByName' => 'Economic\\Debtor_FindByName',
      'Debtor_FindByNameResponse' => 'Economic\\Debtor_FindByNameResponse',
      'Debtor_FindByPartialName' => 'Economic\\Debtor_FindByPartialName',
      'Debtor_FindByPartialNameResponse' => 'Economic\\Debtor_FindByPartialNameResponse',
      'Debtor_FindByEmail' => 'Economic\\Debtor_FindByEmail',
      'Debtor_FindByEmailResponse' => 'Economic\\Debtor_FindByEmailResponse',
      'Debtor_FindByEan' => 'Economic\\Debtor_FindByEan',
      'Debtor_FindByEanResponse' => 'Economic\\Debtor_FindByEanResponse',
      'Debtor_FindByCINumber' => 'Economic\\Debtor_FindByCINumber',
      'Debtor_FindByCINumberResponse' => 'Economic\\Debtor_FindByCINumberResponse',
      'Debtor_FindByTelephoneAndFaxNumber' => 'Economic\\Debtor_FindByTelephoneAndFaxNumber',
      'Debtor_FindByTelephoneAndFaxNumberResponse' => 'Economic\\Debtor_FindByTelephoneAndFaxNumberResponse',
      'Debtor_GetDeliveryLocations' => 'Economic\\Debtor_GetDeliveryLocations',
      'Debtor_GetDeliveryLocationsResponse' => 'Economic\\Debtor_GetDeliveryLocationsResponse',
      'Debtor_GetDebtorContacts' => 'Economic\\Debtor_GetDebtorContacts',
      'Debtor_GetDebtorContactsResponse' => 'Economic\\Debtor_GetDebtorContactsResponse',
      'ArrayOfDebtorContactHandle' => 'Economic\\ArrayOfDebtorContactHandle',
      'Debtor_GetInvoices' => 'Economic\\Debtor_GetInvoices',
      'Debtor_GetInvoicesResponse' => 'Economic\\Debtor_GetInvoicesResponse',
      'Debtor_GetOrders' => 'Economic\\Debtor_GetOrders',
      'Debtor_GetOrdersResponse' => 'Economic\\Debtor_GetOrdersResponse',
      'Debtor_GetCurrentInvoices' => 'Economic\\Debtor_GetCurrentInvoices',
      'Debtor_GetCurrentInvoicesResponse' => 'Economic\\Debtor_GetCurrentInvoicesResponse',
      'ArrayOfCurrentInvoiceHandle' => 'Economic\\ArrayOfCurrentInvoiceHandle',
      'Debtor_GetQuotations' => 'Economic\\Debtor_GetQuotations',
      'Debtor_GetQuotationsResponse' => 'Economic\\Debtor_GetQuotationsResponse',
      'Debtor_GetEntries' => 'Economic\\Debtor_GetEntries',
      'Debtor_GetEntriesResponse' => 'Economic\\Debtor_GetEntriesResponse',
      'ArrayOfDebtorEntryHandle' => 'Economic\\ArrayOfDebtorEntryHandle',
      'DebtorEntryHandle' => 'Economic\\DebtorEntryHandle',
      'Debtor_GetOpenEntries' => 'Economic\\Debtor_GetOpenEntries',
      'Debtor_GetOpenEntriesResponse' => 'Economic\\Debtor_GetOpenEntriesResponse',
      'Debtor_GetSubscribers' => 'Economic\\Debtor_GetSubscribers',
      'Debtor_GetSubscribersResponse' => 'Economic\\Debtor_GetSubscribersResponse',
      'Debtor_Delete' => 'Economic\\Debtor_Delete',
      'Debtor_DeleteResponse' => 'Economic\\Debtor_DeleteResponse',
      'DebtorContact_CreateFromData' => 'Economic\\DebtorContact_CreateFromData',
      'DebtorContactData' => 'Economic\\DebtorContactData',
      'DebtorContact_CreateFromDataResponse' => 'Economic\\DebtorContact_CreateFromDataResponse',
      'DebtorContact_CreateFromDataArray' => 'Economic\\DebtorContact_CreateFromDataArray',
      'ArrayOfDebtorContactData' => 'Economic\\ArrayOfDebtorContactData',
      'DebtorContact_CreateFromDataArrayResponse' => 'Economic\\DebtorContact_CreateFromDataArrayResponse',
      'DebtorContact_UpdateFromDataArray' => 'Economic\\DebtorContact_UpdateFromDataArray',
      'DebtorContact_UpdateFromDataArrayResponse' => 'Economic\\DebtorContact_UpdateFromDataArrayResponse',
      'DebtorContact_UpdateFromData' => 'Economic\\DebtorContact_UpdateFromData',
      'DebtorContact_UpdateFromDataResponse' => 'Economic\\DebtorContact_UpdateFromDataResponse',
      'DebtorContact_GetData' => 'Economic\\DebtorContact_GetData',
      'DebtorContact_GetDataResponse' => 'Economic\\DebtorContact_GetDataResponse',
      'DebtorContact_GetDataArray' => 'Economic\\DebtorContact_GetDataArray',
      'DebtorContact_GetDataArrayResponse' => 'Economic\\DebtorContact_GetDataArrayResponse',
      'DebtorContact_GetDebtor' => 'Economic\\DebtorContact_GetDebtor',
      'DebtorContact_GetDebtorResponse' => 'Economic\\DebtorContact_GetDebtorResponse',
      'DebtorContact_SetName' => 'Economic\\DebtorContact_SetName',
      'DebtorContact_SetNameResponse' => 'Economic\\DebtorContact_SetNameResponse',
      'DebtorContact_GetName' => 'Economic\\DebtorContact_GetName',
      'DebtorContact_GetNameResponse' => 'Economic\\DebtorContact_GetNameResponse',
      'DebtorContact_GetNumber' => 'Economic\\DebtorContact_GetNumber',
      'DebtorContact_GetNumberResponse' => 'Economic\\DebtorContact_GetNumberResponse',
      'DebtorContact_GetTelephoneNumber' => 'Economic\\DebtorContact_GetTelephoneNumber',
      'DebtorContact_GetTelephoneNumberResponse' => 'Economic\\DebtorContact_GetTelephoneNumberResponse',
      'DebtorContact_SetTelephoneNumber' => 'Economic\\DebtorContact_SetTelephoneNumber',
      'DebtorContact_SetTelephoneNumberResponse' => 'Economic\\DebtorContact_SetTelephoneNumberResponse',
      'DebtorContact_GetEmail' => 'Economic\\DebtorContact_GetEmail',
      'DebtorContact_GetEmailResponse' => 'Economic\\DebtorContact_GetEmailResponse',
      'DebtorContact_SetEmail' => 'Economic\\DebtorContact_SetEmail',
      'DebtorContact_SetEmailResponse' => 'Economic\\DebtorContact_SetEmailResponse',
      'DebtorContact_SetComments' => 'Economic\\DebtorContact_SetComments',
      'DebtorContact_SetCommentsResponse' => 'Economic\\DebtorContact_SetCommentsResponse',
      'DebtorContact_GetComments' => 'Economic\\DebtorContact_GetComments',
      'DebtorContact_GetCommentsResponse' => 'Economic\\DebtorContact_GetCommentsResponse',
      'DebtorContact_GetExternalId' => 'Economic\\DebtorContact_GetExternalId',
      'DebtorContact_GetExternalIdResponse' => 'Economic\\DebtorContact_GetExternalIdResponse',
      'DebtorContact_SetExternalId' => 'Economic\\DebtorContact_SetExternalId',
      'DebtorContact_SetExternalIdResponse' => 'Economic\\DebtorContact_SetExternalIdResponse',
      'DebtorContact_SetIsToReceiveEmailCopyOfOrder' => 'Economic\\DebtorContact_SetIsToReceiveEmailCopyOfOrder',
      'DebtorContact_SetIsToReceiveEmailCopyOfOrderResponse' => 'Economic\\DebtorContact_SetIsToReceiveEmailCopyOfOrderResponse',
      'DebtorContact_GetIsToReceiveEmailCopyOfOrder' => 'Economic\\DebtorContact_GetIsToReceiveEmailCopyOfOrder',
      'DebtorContact_GetIsToReceiveEmailCopyOfOrderResponse' => 'Economic\\DebtorContact_GetIsToReceiveEmailCopyOfOrderResponse',
      'DebtorContact_GetIsToReceiveEmailCopyOfInvoice' => 'Economic\\DebtorContact_GetIsToReceiveEmailCopyOfInvoice',
      'DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResponse' => 'Economic\\DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResponse',
      'DebtorContact_SetIsToReceiveEmailCopyOfInvoice' => 'Economic\\DebtorContact_SetIsToReceiveEmailCopyOfInvoice',
      'DebtorContact_SetIsToReceiveEmailCopyOfInvoiceResponse' => 'Economic\\DebtorContact_SetIsToReceiveEmailCopyOfInvoiceResponse',
      'DebtorContact_Create' => 'Economic\\DebtorContact_Create',
      'DebtorContact_CreateResponse' => 'Economic\\DebtorContact_CreateResponse',
      'DebtorContact_GetAll' => 'Economic\\DebtorContact_GetAll',
      'DebtorContact_GetAllResponse' => 'Economic\\DebtorContact_GetAllResponse',
      'DebtorContact_FindByName' => 'Economic\\DebtorContact_FindByName',
      'DebtorContact_FindByNameResponse' => 'Economic\\DebtorContact_FindByNameResponse',
      'DebtorContact_FindByExternalId' => 'Economic\\DebtorContact_FindByExternalId',
      'DebtorContact_FindByExternalIdResponse' => 'Economic\\DebtorContact_FindByExternalIdResponse',
      'DebtorContact_Delete' => 'Economic\\DebtorContact_Delete',
      'DebtorContact_DeleteResponse' => 'Economic\\DebtorContact_DeleteResponse',
      'DebtorEntry_GetData' => 'Economic\\DebtorEntry_GetData',
      'DebtorEntry_GetDataResponse' => 'Economic\\DebtorEntry_GetDataResponse',
      'DebtorEntryData' => 'Economic\\DebtorEntryData',
      'DebtorEntry_GetDataArray' => 'Economic\\DebtorEntry_GetDataArray',
      'DebtorEntry_GetDataArrayResponse' => 'Economic\\DebtorEntry_GetDataArrayResponse',
      'ArrayOfDebtorEntryData' => 'Economic\\ArrayOfDebtorEntryData',
      'DebtorEntry_GetSerialNumber' => 'Economic\\DebtorEntry_GetSerialNumber',
      'DebtorEntry_GetSerialNumberResponse' => 'Economic\\DebtorEntry_GetSerialNumberResponse',
      'DebtorEntry_GetType' => 'Economic\\DebtorEntry_GetType',
      'DebtorEntry_GetTypeResponse' => 'Economic\\DebtorEntry_GetTypeResponse',
      'DebtorEntry_GetDate' => 'Economic\\DebtorEntry_GetDate',
      'DebtorEntry_GetDateResponse' => 'Economic\\DebtorEntry_GetDateResponse',
      'DebtorEntry_GetDebtor' => 'Economic\\DebtorEntry_GetDebtor',
      'DebtorEntry_GetDebtorResponse' => 'Economic\\DebtorEntry_GetDebtorResponse',
      'DebtorEntry_GetAccount' => 'Economic\\DebtorEntry_GetAccount',
      'DebtorEntry_GetAccountResponse' => 'Economic\\DebtorEntry_GetAccountResponse',
      'DebtorEntry_GetVoucherNumber' => 'Economic\\DebtorEntry_GetVoucherNumber',
      'DebtorEntry_GetVoucherNumberResponse' => 'Economic\\DebtorEntry_GetVoucherNumberResponse',
      'DebtorEntry_GetText' => 'Economic\\DebtorEntry_GetText',
      'DebtorEntry_GetTextResponse' => 'Economic\\DebtorEntry_GetTextResponse',
      'DebtorEntry_GetAmountDefaultCurrency' => 'Economic\\DebtorEntry_GetAmountDefaultCurrency',
      'DebtorEntry_GetAmountDefaultCurrencyResponse' => 'Economic\\DebtorEntry_GetAmountDefaultCurrencyResponse',
      'DebtorEntry_GetAllOpenEntries' => 'Economic\\DebtorEntry_GetAllOpenEntries',
      'DebtorEntry_GetAllOpenEntriesResponse' => 'Economic\\DebtorEntry_GetAllOpenEntriesResponse',
      'DebtorEntry_GetCurrency' => 'Economic\\DebtorEntry_GetCurrency',
      'DebtorEntry_GetCurrencyResponse' => 'Economic\\DebtorEntry_GetCurrencyResponse',
      'DebtorEntry_GetAmount' => 'Economic\\DebtorEntry_GetAmount',
      'DebtorEntry_GetAmountResponse' => 'Economic\\DebtorEntry_GetAmountResponse',
      'DebtorEntry_GetInvoiceNumber' => 'Economic\\DebtorEntry_GetInvoiceNumber',
      'DebtorEntry_GetInvoiceNumberResponse' => 'Economic\\DebtorEntry_GetInvoiceNumberResponse',
      'DebtorEntry_GetDueDate' => 'Economic\\DebtorEntry_GetDueDate',
      'DebtorEntry_GetDueDateResponse' => 'Economic\\DebtorEntry_GetDueDateResponse',
      'DebtorEntry_GetRemainder' => 'Economic\\DebtorEntry_GetRemainder',
      'DebtorEntry_GetRemainderResponse' => 'Economic\\DebtorEntry_GetRemainderResponse',
      'DebtorEntry_GetRemainderDefaultCurrency' => 'Economic\\DebtorEntry_GetRemainderDefaultCurrency',
      'DebtorEntry_GetRemainderDefaultCurrencyResponse' => 'Economic\\DebtorEntry_GetRemainderDefaultCurrencyResponse',
      'DebtorEntry_FindBySerialNumber' => 'Economic\\DebtorEntry_FindBySerialNumber',
      'DebtorEntry_FindBySerialNumberResponse' => 'Economic\\DebtorEntry_FindBySerialNumberResponse',
      'DebtorEntry_FindByInvoiceNumber' => 'Economic\\DebtorEntry_FindByInvoiceNumber',
      'DebtorEntry_FindByInvoiceNumberResponse' => 'Economic\\DebtorEntry_FindByInvoiceNumberResponse',
      'DebtorEntry_MatchEntries' => 'Economic\\DebtorEntry_MatchEntries',
      'DebtorEntry_MatchEntriesResponse' => 'Economic\\DebtorEntry_MatchEntriesResponse',
      'DebtorGroup_CreateFromData' => 'Economic\\DebtorGroup_CreateFromData',
      'DebtorGroupData' => 'Economic\\DebtorGroupData',
      'DebtorGroup_CreateFromDataResponse' => 'Economic\\DebtorGroup_CreateFromDataResponse',
      'DebtorGroup_CreateFromDataArray' => 'Economic\\DebtorGroup_CreateFromDataArray',
      'ArrayOfDebtorGroupData' => 'Economic\\ArrayOfDebtorGroupData',
      'DebtorGroup_CreateFromDataArrayResponse' => 'Economic\\DebtorGroup_CreateFromDataArrayResponse',
      'DebtorGroup_UpdateFromDataArray' => 'Economic\\DebtorGroup_UpdateFromDataArray',
      'DebtorGroup_UpdateFromDataArrayResponse' => 'Economic\\DebtorGroup_UpdateFromDataArrayResponse',
      'DebtorGroup_UpdateFromData' => 'Economic\\DebtorGroup_UpdateFromData',
      'DebtorGroup_UpdateFromDataResponse' => 'Economic\\DebtorGroup_UpdateFromDataResponse',
      'DebtorGroup_GetData' => 'Economic\\DebtorGroup_GetData',
      'DebtorGroup_GetDataResponse' => 'Economic\\DebtorGroup_GetDataResponse',
      'DebtorGroup_GetDataArray' => 'Economic\\DebtorGroup_GetDataArray',
      'DebtorGroup_GetDataArrayResponse' => 'Economic\\DebtorGroup_GetDataArrayResponse',
      'DebtorGroup_GetNumber' => 'Economic\\DebtorGroup_GetNumber',
      'DebtorGroup_GetNumberResponse' => 'Economic\\DebtorGroup_GetNumberResponse',
      'DebtorGroup_GetName' => 'Economic\\DebtorGroup_GetName',
      'DebtorGroup_GetNameResponse' => 'Economic\\DebtorGroup_GetNameResponse',
      'DebtorGroup_SetName' => 'Economic\\DebtorGroup_SetName',
      'DebtorGroup_SetNameResponse' => 'Economic\\DebtorGroup_SetNameResponse',
      'DebtorGroup_SetLayout' => 'Economic\\DebtorGroup_SetLayout',
      'DebtorGroup_SetLayoutResponse' => 'Economic\\DebtorGroup_SetLayoutResponse',
      'DebtorGroup_GetLayout' => 'Economic\\DebtorGroup_GetLayout',
      'DebtorGroup_GetLayoutResponse' => 'Economic\\DebtorGroup_GetLayoutResponse',
      'DebtorGroup_GetAccount' => 'Economic\\DebtorGroup_GetAccount',
      'DebtorGroup_GetAccountResponse' => 'Economic\\DebtorGroup_GetAccountResponse',
      'DebtorGroup_SetAccount' => 'Economic\\DebtorGroup_SetAccount',
      'DebtorGroup_SetAccountResponse' => 'Economic\\DebtorGroup_SetAccountResponse',
      'DebtorGroup_Create' => 'Economic\\DebtorGroup_Create',
      'DebtorGroup_CreateResponse' => 'Economic\\DebtorGroup_CreateResponse',
      'DebtorGroup_GetAll' => 'Economic\\DebtorGroup_GetAll',
      'DebtorGroup_GetAllResponse' => 'Economic\\DebtorGroup_GetAllResponse',
      'CurrentInvoiceLine_FindByProduct' => 'Economic\\CurrentInvoiceLine_FindByProduct',
      'CurrentInvoiceLine_FindByProductResponse' => 'Economic\\CurrentInvoiceLine_FindByProductResponse',
      'ArrayOfCurrentInvoiceLineHandle' => 'Economic\\ArrayOfCurrentInvoiceLineHandle',
      'CurrentInvoiceLineHandle' => 'Economic\\CurrentInvoiceLineHandle',
      'CurrentInvoiceLine_FindByProductList' => 'Economic\\CurrentInvoiceLine_FindByProductList',
      'CurrentInvoiceLine_FindByProductListResponse' => 'Economic\\CurrentInvoiceLine_FindByProductListResponse',
      'CurrentInvoiceLine_Delete' => 'Economic\\CurrentInvoiceLine_Delete',
      'CurrentInvoiceLine_DeleteResponse' => 'Economic\\CurrentInvoiceLine_DeleteResponse',
      'CurrentSupplierInvoice_CreateFromData' => 'Economic\\CurrentSupplierInvoice_CreateFromData',
      'CurrentSupplierInvoiceData' => 'Economic\\CurrentSupplierInvoiceData',
      'CurrentSupplierInvoiceHandle' => 'Economic\\CurrentSupplierInvoiceHandle',
      'CreditorHandle' => 'Economic\\CreditorHandle',
      'CurrentSupplierInvoice_CreateFromDataResponse' => 'Economic\\CurrentSupplierInvoice_CreateFromDataResponse',
      'CurrentSupplierInvoice_CreateFromDataArray' => 'Economic\\CurrentSupplierInvoice_CreateFromDataArray',
      'ArrayOfCurrentSupplierInvoiceData' => 'Economic\\ArrayOfCurrentSupplierInvoiceData',
      'CurrentSupplierInvoice_CreateFromDataArrayResponse' => 'Economic\\CurrentSupplierInvoice_CreateFromDataArrayResponse',
      'ArrayOfCurrentSupplierInvoiceHandle' => 'Economic\\ArrayOfCurrentSupplierInvoiceHandle',
      'CurrentSupplierInvoice_UpdateFromDataArray' => 'Economic\\CurrentSupplierInvoice_UpdateFromDataArray',
      'CurrentSupplierInvoice_UpdateFromDataArrayResponse' => 'Economic\\CurrentSupplierInvoice_UpdateFromDataArrayResponse',
      'CurrentSupplierInvoice_UpdateFromData' => 'Economic\\CurrentSupplierInvoice_UpdateFromData',
      'CurrentSupplierInvoice_UpdateFromDataResponse' => 'Economic\\CurrentSupplierInvoice_UpdateFromDataResponse',
      'CurrentSupplierInvoice_GetData' => 'Economic\\CurrentSupplierInvoice_GetData',
      'CurrentSupplierInvoice_GetDataResponse' => 'Economic\\CurrentSupplierInvoice_GetDataResponse',
      'CurrentSupplierInvoice_GetDataArray' => 'Economic\\CurrentSupplierInvoice_GetDataArray',
      'CurrentSupplierInvoice_GetDataArrayResponse' => 'Economic\\CurrentSupplierInvoice_GetDataArrayResponse',
      'CurrentSupplierInvoice_Create' => 'Economic\\CurrentSupplierInvoice_Create',
      'CurrentSupplierInvoice_CreateResponse' => 'Economic\\CurrentSupplierInvoice_CreateResponse',
      'CurrentSupplierInvoice_GetAll' => 'Economic\\CurrentSupplierInvoice_GetAll',
      'CurrentSupplierInvoice_GetAllResponse' => 'Economic\\CurrentSupplierInvoice_GetAllResponse',
      'CurrentSupplierInvoice_GetLines' => 'Economic\\CurrentSupplierInvoice_GetLines',
      'CurrentSupplierInvoice_GetLinesResponse' => 'Economic\\CurrentSupplierInvoice_GetLinesResponse',
      'ArrayOfCurrentSupplierInvoiceLineHandle' => 'Economic\\ArrayOfCurrentSupplierInvoiceLineHandle',
      'CurrentSupplierInvoiceLineHandle' => 'Economic\\CurrentSupplierInvoiceLineHandle',
      'CurrentSupplierInvoice_TotalAmount' => 'Economic\\CurrentSupplierInvoice_TotalAmount',
      'CurrentSupplierInvoice_TotalAmountResponse' => 'Economic\\CurrentSupplierInvoice_TotalAmountResponse',
      'CurrentSupplierInvoice_GetId' => 'Economic\\CurrentSupplierInvoice_GetId',
      'CurrentSupplierInvoice_GetIdResponse' => 'Economic\\CurrentSupplierInvoice_GetIdResponse',
      'CurrentSupplierInvoice_GetCreditor' => 'Economic\\CurrentSupplierInvoice_GetCreditor',
      'CurrentSupplierInvoice_GetCreditorResponse' => 'Economic\\CurrentSupplierInvoice_GetCreditorResponse',
      'CurrentSupplierInvoice_SetCreditor' => 'Economic\\CurrentSupplierInvoice_SetCreditor',
      'CurrentSupplierInvoice_SetCreditorResponse' => 'Economic\\CurrentSupplierInvoice_SetCreditorResponse',
      'CurrentSupplierInvoiceLine_CreateFromData' => 'Economic\\CurrentSupplierInvoiceLine_CreateFromData',
      'CurrentSupplierInvoiceLineData' => 'Economic\\CurrentSupplierInvoiceLineData',
      'CurrentSupplierInvoiceLine_CreateFromDataResponse' => 'Economic\\CurrentSupplierInvoiceLine_CreateFromDataResponse',
      'CurrentSupplierInvoiceLine_CreateFromDataArray' => 'Economic\\CurrentSupplierInvoiceLine_CreateFromDataArray',
      'ArrayOfCurrentSupplierInvoiceLineData' => 'Economic\\ArrayOfCurrentSupplierInvoiceLineData',
      'CurrentSupplierInvoiceLine_CreateFromDataArrayResponse' => 'Economic\\CurrentSupplierInvoiceLine_CreateFromDataArrayResponse',
      'CurrentSupplierInvoiceLine_UpdateFromDataArray' => 'Economic\\CurrentSupplierInvoiceLine_UpdateFromDataArray',
      'CurrentSupplierInvoiceLine_UpdateFromDataArrayResponse' => 'Economic\\CurrentSupplierInvoiceLine_UpdateFromDataArrayResponse',
      'CurrentSupplierInvoiceLine_UpdateFromData' => 'Economic\\CurrentSupplierInvoiceLine_UpdateFromData',
      'CurrentSupplierInvoiceLine_UpdateFromDataResponse' => 'Economic\\CurrentSupplierInvoiceLine_UpdateFromDataResponse',
      'CurrentSupplierInvoiceLine_GetData' => 'Economic\\CurrentSupplierInvoiceLine_GetData',
      'CurrentSupplierInvoiceLine_GetDataResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetDataResponse',
      'CurrentSupplierInvoiceLine_GetDataArray' => 'Economic\\CurrentSupplierInvoiceLine_GetDataArray',
      'CurrentSupplierInvoiceLine_GetDataArrayResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetDataArrayResponse',
      'CurrentSupplierInvoiceLine_GetInvoice' => 'Economic\\CurrentSupplierInvoiceLine_GetInvoice',
      'CurrentSupplierInvoiceLine_GetInvoiceResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetInvoiceResponse',
      'CurrentSupplierInvoiceLine_SetProduct' => 'Economic\\CurrentSupplierInvoiceLine_SetProduct',
      'CurrentSupplierInvoiceLine_SetProductResponse' => 'Economic\\CurrentSupplierInvoiceLine_SetProductResponse',
      'CurrentSupplierInvoiceLine_GetProduct' => 'Economic\\CurrentSupplierInvoiceLine_GetProduct',
      'CurrentSupplierInvoiceLine_GetProductResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetProductResponse',
      'CurrentSupplierInvoiceLine_SetQuantity' => 'Economic\\CurrentSupplierInvoiceLine_SetQuantity',
      'CurrentSupplierInvoiceLine_SetQuantityResponse' => 'Economic\\CurrentSupplierInvoiceLine_SetQuantityResponse',
      'CurrentSupplierInvoiceLine_GetQuantity' => 'Economic\\CurrentSupplierInvoiceLine_GetQuantity',
      'CurrentSupplierInvoiceLine_GetQuantityResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetQuantityResponse',
      'CurrentSupplierInvoiceLine_GetUnitPrice' => 'Economic\\CurrentSupplierInvoiceLine_GetUnitPrice',
      'CurrentSupplierInvoiceLine_GetUnitPriceResponse' => 'Economic\\CurrentSupplierInvoiceLine_GetUnitPriceResponse',
      'CurrentSupplierInvoiceLine_SetUnitPrice' => 'Economic\\CurrentSupplierInvoiceLine_SetUnitPrice',
      'CurrentSupplierInvoiceLine_SetUnitPriceResponse' => 'Economic\\CurrentSupplierInvoiceLine_SetUnitPriceResponse',
      'CurrentSupplierInvoiceLine_Create' => 'Economic\\CurrentSupplierInvoiceLine_Create',
      'CurrentSupplierInvoiceLine_CreateResponse' => 'Economic\\CurrentSupplierInvoiceLine_CreateResponse',
      'Debtor_CreateFromData' => 'Economic\\Debtor_CreateFromData',
      'DebtorData' => 'Economic\\DebtorData',
      'Debtor_CreateFromDataResponse' => 'Economic\\Debtor_CreateFromDataResponse',
      'Debtor_CreateFromDataArray' => 'Economic\\Debtor_CreateFromDataArray',
      'ArrayOfDebtorData' => 'Economic\\ArrayOfDebtorData',
      'Debtor_CreateFromDataArrayResponse' => 'Economic\\Debtor_CreateFromDataArrayResponse',
      'Debtor_UpdateFromDataArray' => 'Economic\\Debtor_UpdateFromDataArray',
      'Debtor_UpdateFromDataArrayResponse' => 'Economic\\Debtor_UpdateFromDataArrayResponse',
      'Debtor_UpdateFromData' => 'Economic\\Debtor_UpdateFromData',
      'Debtor_UpdateFromDataResponse' => 'Economic\\Debtor_UpdateFromDataResponse',
      'Debtor_GetData' => 'Economic\\Debtor_GetData',
      'Debtor_GetDataResponse' => 'Economic\\Debtor_GetDataResponse',
      'Debtor_GetDataArray' => 'Economic\\Debtor_GetDataArray',
      'Debtor_GetDataArrayResponse' => 'Economic\\Debtor_GetDataArrayResponse',
      'Debtor_GetNumber' => 'Economic\\Debtor_GetNumber',
      'Debtor_GetNumberResponse' => 'Economic\\Debtor_GetNumberResponse',
      'Debtor_SetDebtorGroup' => 'Economic\\Debtor_SetDebtorGroup',
      'Debtor_SetDebtorGroupResponse' => 'Economic\\Debtor_SetDebtorGroupResponse',
      'Debtor_GetDebtorGroup' => 'Economic\\Debtor_GetDebtorGroup',
      'Debtor_GetDebtorGroupResponse' => 'Economic\\Debtor_GetDebtorGroupResponse',
      'Debtor_GetName' => 'Economic\\Debtor_GetName',
      'Debtor_GetNameResponse' => 'Economic\\Debtor_GetNameResponse',
      'Debtor_SetName' => 'Economic\\Debtor_SetName',
      'Debtor_SetNameResponse' => 'Economic\\Debtor_SetNameResponse',
      'Debtor_SetVatZone' => 'Economic\\Debtor_SetVatZone',
      'Debtor_SetVatZoneResponse' => 'Economic\\Debtor_SetVatZoneResponse',
      'Debtor_GetVatZone' => 'Economic\\Debtor_GetVatZone',
      'Debtor_GetVatZoneResponse' => 'Economic\\Debtor_GetVatZoneResponse',
      'Debtor_GetCurrency' => 'Economic\\Debtor_GetCurrency',
      'Debtor_GetCurrencyResponse' => 'Economic\\Debtor_GetCurrencyResponse',
      'Debtor_SetCurrency' => 'Economic\\Debtor_SetCurrency',
      'Debtor_SetCurrencyResponse' => 'Economic\\Debtor_SetCurrencyResponse',
      'Debtor_SetPriceGroup' => 'Economic\\Debtor_SetPriceGroup',
      'Debtor_SetPriceGroupResponse' => 'Economic\\Debtor_SetPriceGroupResponse',
      'Debtor_GetPriceGroup' => 'Economic\\Debtor_GetPriceGroup',
      'Debtor_GetPriceGroupResponse' => 'Economic\\Debtor_GetPriceGroupResponse',
      'Debtor_SetIsAccessible' => 'Economic\\Debtor_SetIsAccessible',
      'Debtor_SetIsAccessibleResponse' => 'Economic\\Debtor_SetIsAccessibleResponse',
      'Debtor_GetIsAccessible' => 'Economic\\Debtor_GetIsAccessible',
      'Debtor_GetIsAccessibleResponse' => 'Economic\\Debtor_GetIsAccessibleResponse',
      'Debtor_GetEan' => 'Economic\\Debtor_GetEan',
      'Debtor_GetEanResponse' => 'Economic\\Debtor_GetEanResponse',
      'Debtor_SetEan' => 'Economic\\Debtor_SetEan',
      'Debtor_SetEanResponse' => 'Economic\\Debtor_SetEanResponse',
      'Debtor_GetPublicEntryNumber' => 'Economic\\Debtor_GetPublicEntryNumber',
      'Debtor_GetPublicEntryNumberResponse' => 'Economic\\Debtor_GetPublicEntryNumberResponse',
      'Debtor_SetPublicEntryNumber' => 'Economic\\Debtor_SetPublicEntryNumber',
      'Debtor_SetPublicEntryNumberResponse' => 'Economic\\Debtor_SetPublicEntryNumberResponse',
      'Debtor_GetEmail' => 'Economic\\Debtor_GetEmail',
      'Debtor_GetEmailResponse' => 'Economic\\Debtor_GetEmailResponse',
      'Debtor_SetEmail' => 'Economic\\Debtor_SetEmail',
      'Debtor_SetEmailResponse' => 'Economic\\Debtor_SetEmailResponse',
      'Debtor_SetTelephoneAndFaxNumber' => 'Economic\\Debtor_SetTelephoneAndFaxNumber',
      'Debtor_SetTelephoneAndFaxNumberResponse' => 'Economic\\Debtor_SetTelephoneAndFaxNumberResponse',
      'Debtor_GetTelephoneAndFaxNumber' => 'Economic\\Debtor_GetTelephoneAndFaxNumber',
      'Debtor_GetTelephoneAndFaxNumberResponse' => 'Economic\\Debtor_GetTelephoneAndFaxNumberResponse',
      'Debtor_SetWebsite' => 'Economic\\Debtor_SetWebsite',
      'Debtor_SetWebsiteResponse' => 'Economic\\Debtor_SetWebsiteResponse',
      'Debtor_GetWebsite' => 'Economic\\Debtor_GetWebsite',
      'Debtor_GetWebsiteResponse' => 'Economic\\Debtor_GetWebsiteResponse',
      'Debtor_GetAddress' => 'Economic\\Debtor_GetAddress',
      'Debtor_GetAddressResponse' => 'Economic\\Debtor_GetAddressResponse',
      'Debtor_SetAddress' => 'Economic\\Debtor_SetAddress',
      'Debtor_SetAddressResponse' => 'Economic\\Debtor_SetAddressResponse',
      'Debtor_GetPostalCode' => 'Economic\\Debtor_GetPostalCode',
      'Debtor_GetPostalCodeResponse' => 'Economic\\Debtor_GetPostalCodeResponse',
      'Debtor_SetPostalCode' => 'Economic\\Debtor_SetPostalCode',
      'Debtor_SetPostalCodeResponse' => 'Economic\\Debtor_SetPostalCodeResponse',
      'Debtor_GetCity' => 'Economic\\Debtor_GetCity',
      'Debtor_GetCityResponse' => 'Economic\\Debtor_GetCityResponse',
      'Debtor_SetCity' => 'Economic\\Debtor_SetCity',
      'Debtor_SetCityResponse' => 'Economic\\Debtor_SetCityResponse',
      'Debtor_SetCountry' => 'Economic\\Debtor_SetCountry',
      'Debtor_SetCountryResponse' => 'Economic\\Debtor_SetCountryResponse',
      'Debtor_GetCountry' => 'Economic\\Debtor_GetCountry',
      'Debtor_GetCountryResponse' => 'Economic\\Debtor_GetCountryResponse',
      'Debtor_SetCreditMaximum' => 'Economic\\Debtor_SetCreditMaximum',
      'Debtor_SetCreditMaximumResponse' => 'Economic\\Debtor_SetCreditMaximumResponse',
      'Debtor_GetCreditMaximum' => 'Economic\\Debtor_GetCreditMaximum',
      'Debtor_GetCreditMaximumResponse' => 'Economic\\Debtor_GetCreditMaximumResponse',
      'Debtor_GetVatNumber' => 'Economic\\Debtor_GetVatNumber',
      'Debtor_GetVatNumberResponse' => 'Economic\\Debtor_GetVatNumberResponse',
      'Debtor_SetVatNumber' => 'Economic\\Debtor_SetVatNumber',
      'Debtor_SetVatNumberResponse' => 'Economic\\Debtor_SetVatNumberResponse',
      'Debtor_GetCounty' => 'Economic\\Debtor_GetCounty',
      'Debtor_GetCountyResponse' => 'Economic\\Debtor_GetCountyResponse',
      'Debtor_SetCounty' => 'Economic\\Debtor_SetCounty',
      'Debtor_SetCountyResponse' => 'Economic\\Debtor_SetCountyResponse',
      'Debtor_GetCINumber' => 'Economic\\Debtor_GetCINumber',
      'Debtor_GetCINumberResponse' => 'Economic\\Debtor_GetCINumberResponse',
      'Debtor_SetCINumber' => 'Economic\\Debtor_SetCINumber',
      'Debtor_SetCINumberResponse' => 'Economic\\Debtor_SetCINumberResponse',
      'Debtor_SetTermOfPayment' => 'Economic\\Debtor_SetTermOfPayment',
      'Debtor_SetTermOfPaymentResponse' => 'Economic\\Debtor_SetTermOfPaymentResponse',
      'Debtor_GetTermOfPayment' => 'Economic\\Debtor_GetTermOfPayment',
      'Debtor_GetTermOfPaymentResponse' => 'Economic\\Debtor_GetTermOfPaymentResponse',
      'Debtor_SetLayout' => 'Economic\\Debtor_SetLayout',
      'Debtor_SetLayoutResponse' => 'Economic\\Debtor_SetLayoutResponse',
      'Debtor_GetLayout' => 'Economic\\Debtor_GetLayout',
      'Debtor_GetLayoutResponse' => 'Economic\\Debtor_GetLayoutResponse',
      'Debtor_GetAttention' => 'Economic\\Debtor_GetAttention',
      'Debtor_GetAttentionResponse' => 'Economic\\Debtor_GetAttentionResponse',
      'Debtor_SetAttention' => 'Economic\\Debtor_SetAttention',
      'Debtor_SetAttentionResponse' => 'Economic\\Debtor_SetAttentionResponse',
      'Debtor_SetYourReference' => 'Economic\\Debtor_SetYourReference',
      'Debtor_SetYourReferenceResponse' => 'Economic\\Debtor_SetYourReferenceResponse',
      'Debtor_GetYourReference' => 'Economic\\Debtor_GetYourReference',
      'Debtor_GetYourReferenceResponse' => 'Economic\\Debtor_GetYourReferenceResponse',
      'Debtor_GetOurReference' => 'Economic\\Debtor_GetOurReference',
      'Debtor_GetOurReferenceResponse' => 'Economic\\Debtor_GetOurReferenceResponse',
      'Debtor_SetOurReference' => 'Economic\\Debtor_SetOurReference',
      'Debtor_SetOurReferenceResponse' => 'Economic\\Debtor_SetOurReferenceResponse',
      'CurrentInvoice_GetTermOfPayment' => 'Economic\\CurrentInvoice_GetTermOfPayment',
      'CurrentInvoice_GetTermOfPaymentResponse' => 'Economic\\CurrentInvoice_GetTermOfPaymentResponse',
      'CurrentInvoice_SetTermOfPayment' => 'Economic\\CurrentInvoice_SetTermOfPayment',
      'CurrentInvoice_SetTermOfPaymentResponse' => 'Economic\\CurrentInvoice_SetTermOfPaymentResponse',
      'CurrentInvoice_GetDueDate' => 'Economic\\CurrentInvoice_GetDueDate',
      'CurrentInvoice_GetDueDateResponse' => 'Economic\\CurrentInvoice_GetDueDateResponse',
      'CurrentInvoice_SetDueDate' => 'Economic\\CurrentInvoice_SetDueDate',
      'CurrentInvoice_SetDueDateResponse' => 'Economic\\CurrentInvoice_SetDueDateResponse',
      'CurrentInvoice_GetCurrency' => 'Economic\\CurrentInvoice_GetCurrency',
      'CurrentInvoice_GetCurrencyResponse' => 'Economic\\CurrentInvoice_GetCurrencyResponse',
      'CurrentInvoice_SetCurrency' => 'Economic\\CurrentInvoice_SetCurrency',
      'CurrentInvoice_SetCurrencyResponse' => 'Economic\\CurrentInvoice_SetCurrencyResponse',
      'CurrentInvoice_GetExchangeRate' => 'Economic\\CurrentInvoice_GetExchangeRate',
      'CurrentInvoice_GetExchangeRateResponse' => 'Economic\\CurrentInvoice_GetExchangeRateResponse',
      'CurrentInvoice_SetExchangeRate' => 'Economic\\CurrentInvoice_SetExchangeRate',
      'CurrentInvoice_SetExchangeRateResponse' => 'Economic\\CurrentInvoice_SetExchangeRateResponse',
      'CurrentInvoice_GetIsVatIncluded' => 'Economic\\CurrentInvoice_GetIsVatIncluded',
      'CurrentInvoice_GetIsVatIncludedResponse' => 'Economic\\CurrentInvoice_GetIsVatIncludedResponse',
      'CurrentInvoice_SetIsVatIncluded' => 'Economic\\CurrentInvoice_SetIsVatIncluded',
      'CurrentInvoice_SetIsVatIncludedResponse' => 'Economic\\CurrentInvoice_SetIsVatIncludedResponse',
      'CurrentInvoice_GetVatZone' => 'Economic\\CurrentInvoice_GetVatZone',
      'CurrentInvoice_GetVatZoneResponse' => 'Economic\\CurrentInvoice_GetVatZoneResponse',
      'CurrentInvoice_SetVatZone' => 'Economic\\CurrentInvoice_SetVatZone',
      'CurrentInvoice_SetVatZoneResponse' => 'Economic\\CurrentInvoice_SetVatZoneResponse',
      'CurrentInvoice_GetLayout' => 'Economic\\CurrentInvoice_GetLayout',
      'CurrentInvoice_GetLayoutResponse' => 'Economic\\CurrentInvoice_GetLayoutResponse',
      'CurrentInvoice_SetLayout' => 'Economic\\CurrentInvoice_SetLayout',
      'CurrentInvoice_SetLayoutResponse' => 'Economic\\CurrentInvoice_SetLayoutResponse',
      'CurrentInvoice_GetDeliveryLocation' => 'Economic\\CurrentInvoice_GetDeliveryLocation',
      'CurrentInvoice_GetDeliveryLocationResponse' => 'Economic\\CurrentInvoice_GetDeliveryLocationResponse',
      'CurrentInvoice_SetDeliveryLocation' => 'Economic\\CurrentInvoice_SetDeliveryLocation',
      'CurrentInvoice_SetDeliveryLocationResponse' => 'Economic\\CurrentInvoice_SetDeliveryLocationResponse',
      'CurrentInvoice_GetDeliveryAddress' => 'Economic\\CurrentInvoice_GetDeliveryAddress',
      'CurrentInvoice_GetDeliveryAddressResponse' => 'Economic\\CurrentInvoice_GetDeliveryAddressResponse',
      'CurrentInvoice_SetDeliveryAddress' => 'Economic\\CurrentInvoice_SetDeliveryAddress',
      'CurrentInvoice_SetDeliveryAddressResponse' => 'Economic\\CurrentInvoice_SetDeliveryAddressResponse',
      'CurrentInvoice_GetDeliveryPostalCode' => 'Economic\\CurrentInvoice_GetDeliveryPostalCode',
      'CurrentInvoice_GetDeliveryPostalCodeResponse' => 'Economic\\CurrentInvoice_GetDeliveryPostalCodeResponse',
      'CurrentInvoice_SetDeliveryPostalCode' => 'Economic\\CurrentInvoice_SetDeliveryPostalCode',
      'CurrentInvoice_SetDeliveryPostalCodeResponse' => 'Economic\\CurrentInvoice_SetDeliveryPostalCodeResponse',
      'CurrentInvoice_GetDeliveryCity' => 'Economic\\CurrentInvoice_GetDeliveryCity',
      'CurrentInvoice_GetDeliveryCityResponse' => 'Economic\\CurrentInvoice_GetDeliveryCityResponse',
      'CurrentInvoice_SetDeliveryCity' => 'Economic\\CurrentInvoice_SetDeliveryCity',
      'CurrentInvoice_SetDeliveryCityResponse' => 'Economic\\CurrentInvoice_SetDeliveryCityResponse',
      'CurrentInvoice_GetDeliveryCountry' => 'Economic\\CurrentInvoice_GetDeliveryCountry',
      'CurrentInvoice_GetDeliveryCountryResponse' => 'Economic\\CurrentInvoice_GetDeliveryCountryResponse',
      'CurrentInvoice_SetDeliveryCountry' => 'Economic\\CurrentInvoice_SetDeliveryCountry',
      'CurrentInvoice_SetDeliveryCountryResponse' => 'Economic\\CurrentInvoice_SetDeliveryCountryResponse',
      'CurrentInvoice_GetTermsOfDelivery' => 'Economic\\CurrentInvoice_GetTermsOfDelivery',
      'CurrentInvoice_GetTermsOfDeliveryResponse' => 'Economic\\CurrentInvoice_GetTermsOfDeliveryResponse',
      'CurrentInvoice_SetTermsOfDelivery' => 'Economic\\CurrentInvoice_SetTermsOfDelivery',
      'CurrentInvoice_SetTermsOfDeliveryResponse' => 'Economic\\CurrentInvoice_SetTermsOfDeliveryResponse',
      'CurrentInvoice_GetDeliveryDate' => 'Economic\\CurrentInvoice_GetDeliveryDate',
      'CurrentInvoice_GetDeliveryDateResponse' => 'Economic\\CurrentInvoice_GetDeliveryDateResponse',
      'CurrentInvoice_SetDeliveryDate' => 'Economic\\CurrentInvoice_SetDeliveryDate',
      'CurrentInvoice_SetDeliveryDateResponse' => 'Economic\\CurrentInvoice_SetDeliveryDateResponse',
      'CurrentInvoice_GetHeading' => 'Economic\\CurrentInvoice_GetHeading',
      'CurrentInvoice_GetHeadingResponse' => 'Economic\\CurrentInvoice_GetHeadingResponse',
      'CurrentInvoice_SetHeading' => 'Economic\\CurrentInvoice_SetHeading',
      'CurrentInvoice_SetHeadingResponse' => 'Economic\\CurrentInvoice_SetHeadingResponse',
      'CurrentInvoice_GetTextLine1' => 'Economic\\CurrentInvoice_GetTextLine1',
      'CurrentInvoice_GetTextLine1Response' => 'Economic\\CurrentInvoice_GetTextLine1Response',
      'CurrentInvoice_SetTextLine1' => 'Economic\\CurrentInvoice_SetTextLine1',
      'CurrentInvoice_SetTextLine1Response' => 'Economic\\CurrentInvoice_SetTextLine1Response',
      'CurrentInvoice_GetTextLine2' => 'Economic\\CurrentInvoice_GetTextLine2',
      'CurrentInvoice_GetTextLine2Response' => 'Economic\\CurrentInvoice_GetTextLine2Response',
      'CurrentInvoice_SetTextLine2' => 'Economic\\CurrentInvoice_SetTextLine2',
      'CurrentInvoice_SetTextLine2Response' => 'Economic\\CurrentInvoice_SetTextLine2Response',
      'CurrentInvoice_GetOtherReference' => 'Economic\\CurrentInvoice_GetOtherReference',
      'CurrentInvoice_GetOtherReferenceResponse' => 'Economic\\CurrentInvoice_GetOtherReferenceResponse',
      'CurrentInvoice_SetOtherReference' => 'Economic\\CurrentInvoice_SetOtherReference',
      'CurrentInvoice_SetOtherReferenceResponse' => 'Economic\\CurrentInvoice_SetOtherReferenceResponse',
      'CurrentInvoice_GetNetAmount' => 'Economic\\CurrentInvoice_GetNetAmount',
      'CurrentInvoice_GetNetAmountResponse' => 'Economic\\CurrentInvoice_GetNetAmountResponse',
      'CurrentInvoice_GetVatAmount' => 'Economic\\CurrentInvoice_GetVatAmount',
      'CurrentInvoice_GetVatAmountResponse' => 'Economic\\CurrentInvoice_GetVatAmountResponse',
      'CurrentInvoice_GetGrossAmount' => 'Economic\\CurrentInvoice_GetGrossAmount',
      'CurrentInvoice_GetGrossAmountResponse' => 'Economic\\CurrentInvoice_GetGrossAmountResponse',
      'CurrentInvoice_GetMargin' => 'Economic\\CurrentInvoice_GetMargin',
      'CurrentInvoice_GetMarginResponse' => 'Economic\\CurrentInvoice_GetMarginResponse',
      'CurrentInvoice_GetMarginAsPercent' => 'Economic\\CurrentInvoice_GetMarginAsPercent',
      'CurrentInvoice_GetMarginAsPercentResponse' => 'Economic\\CurrentInvoice_GetMarginAsPercentResponse',
      'CurrentInvoice_GetRoundingAmount' => 'Economic\\CurrentInvoice_GetRoundingAmount',
      'CurrentInvoice_GetRoundingAmountResponse' => 'Economic\\CurrentInvoice_GetRoundingAmountResponse',
      'CurrentInvoice_GetDebtorCounty' => 'Economic\\CurrentInvoice_GetDebtorCounty',
      'CurrentInvoice_GetDebtorCountyResponse' => 'Economic\\CurrentInvoice_GetDebtorCountyResponse',
      'CurrentInvoice_SetDebtorCounty' => 'Economic\\CurrentInvoice_SetDebtorCounty',
      'CurrentInvoice_SetDebtorCountyResponse' => 'Economic\\CurrentInvoice_SetDebtorCountyResponse',
      'CurrentInvoice_GetDeliveryCounty' => 'Economic\\CurrentInvoice_GetDeliveryCounty',
      'CurrentInvoice_GetDeliveryCountyResponse' => 'Economic\\CurrentInvoice_GetDeliveryCountyResponse',
      'CurrentInvoice_SetDeliveryCounty' => 'Economic\\CurrentInvoice_SetDeliveryCounty',
      'CurrentInvoice_SetDeliveryCountyResponse' => 'Economic\\CurrentInvoice_SetDeliveryCountyResponse',
      'CurrentInvoice_GetDeductionAmount' => 'Economic\\CurrentInvoice_GetDeductionAmount',
      'CurrentInvoice_GetDeductionAmountResponse' => 'Economic\\CurrentInvoice_GetDeductionAmountResponse',
      'CurrentInvoiceLine_CreateFromData' => 'Economic\\CurrentInvoiceLine_CreateFromData',
      'CurrentInvoiceLineData' => 'Economic\\CurrentInvoiceLineData',
      'CurrentInvoiceLine_CreateFromDataResponse' => 'Economic\\CurrentInvoiceLine_CreateFromDataResponse',
      'CurrentInvoiceLine_CreateFromDataArray' => 'Economic\\CurrentInvoiceLine_CreateFromDataArray',
      'ArrayOfCurrentInvoiceLineData' => 'Economic\\ArrayOfCurrentInvoiceLineData',
      'CurrentInvoiceLine_CreateFromDataArrayResponse' => 'Economic\\CurrentInvoiceLine_CreateFromDataArrayResponse',
      'CurrentInvoiceLine_UpdateFromDataArray' => 'Economic\\CurrentInvoiceLine_UpdateFromDataArray',
      'CurrentInvoiceLine_UpdateFromDataArrayResponse' => 'Economic\\CurrentInvoiceLine_UpdateFromDataArrayResponse',
      'CurrentInvoiceLine_UpdateFromData' => 'Economic\\CurrentInvoiceLine_UpdateFromData',
      'CurrentInvoiceLine_UpdateFromDataResponse' => 'Economic\\CurrentInvoiceLine_UpdateFromDataResponse',
      'CurrentInvoiceLine_GetData' => 'Economic\\CurrentInvoiceLine_GetData',
      'CurrentInvoiceLine_GetDataResponse' => 'Economic\\CurrentInvoiceLine_GetDataResponse',
      'CurrentInvoiceLine_GetDataArray' => 'Economic\\CurrentInvoiceLine_GetDataArray',
      'CurrentInvoiceLine_GetDataArrayResponse' => 'Economic\\CurrentInvoiceLine_GetDataArrayResponse',
      'CurrentInvoiceLine_GetNumber' => 'Economic\\CurrentInvoiceLine_GetNumber',
      'CurrentInvoiceLine_GetNumberResponse' => 'Economic\\CurrentInvoiceLine_GetNumberResponse',
      'CurrentInvoiceLine_GetInvoice' => 'Economic\\CurrentInvoiceLine_GetInvoice',
      'CurrentInvoiceLine_GetInvoiceResponse' => 'Economic\\CurrentInvoiceLine_GetInvoiceResponse',
      'CurrentInvoiceLine_GetDescription' => 'Economic\\CurrentInvoiceLine_GetDescription',
      'CurrentInvoiceLine_GetDescriptionResponse' => 'Economic\\CurrentInvoiceLine_GetDescriptionResponse',
      'CurrentInvoiceLine_SetDescription' => 'Economic\\CurrentInvoiceLine_SetDescription',
      'CurrentInvoiceLine_SetDescriptionResponse' => 'Economic\\CurrentInvoiceLine_SetDescriptionResponse',
      'CurrentInvoiceLine_GetDeliveryDate' => 'Economic\\CurrentInvoiceLine_GetDeliveryDate',
      'CurrentInvoiceLine_GetDeliveryDateResponse' => 'Economic\\CurrentInvoiceLine_GetDeliveryDateResponse',
      'CurrentInvoiceLine_SetDeliveryDate' => 'Economic\\CurrentInvoiceLine_SetDeliveryDate',
      'CurrentInvoiceLine_SetDeliveryDateResponse' => 'Economic\\CurrentInvoiceLine_SetDeliveryDateResponse',
      'CurrentInvoiceLine_GetUnit' => 'Economic\\CurrentInvoiceLine_GetUnit',
      'CurrentInvoiceLine_GetUnitResponse' => 'Economic\\CurrentInvoiceLine_GetUnitResponse',
      'CurrentInvoiceLine_SetUnit' => 'Economic\\CurrentInvoiceLine_SetUnit',
      'CurrentInvoiceLine_SetUnitResponse' => 'Economic\\CurrentInvoiceLine_SetUnitResponse',
      'CurrentInvoiceLine_SetProduct' => 'Economic\\CurrentInvoiceLine_SetProduct',
      'CurrentInvoiceLine_SetProductResponse' => 'Economic\\CurrentInvoiceLine_SetProductResponse',
      'CurrentInvoiceLine_GetProduct' => 'Economic\\CurrentInvoiceLine_GetProduct',
      'CurrentInvoiceLine_GetProductResponse' => 'Economic\\CurrentInvoiceLine_GetProductResponse',
      'CurrentInvoiceLine_SetQuantity' => 'Economic\\CurrentInvoiceLine_SetQuantity',
      'CurrentInvoiceLine_SetQuantityResponse' => 'Economic\\CurrentInvoiceLine_SetQuantityResponse',
      'CurrentInvoiceLine_GetQuantity' => 'Economic\\CurrentInvoiceLine_GetQuantity',
      'CurrentInvoiceLine_GetQuantityResponse' => 'Economic\\CurrentInvoiceLine_GetQuantityResponse',
      'CurrentInvoiceLine_GetUnitNetPrice' => 'Economic\\CurrentInvoiceLine_GetUnitNetPrice',
      'CurrentInvoiceLine_GetUnitNetPriceResponse' => 'Economic\\CurrentInvoiceLine_GetUnitNetPriceResponse',
      'CurrentInvoiceLine_SetUnitNetPrice' => 'Economic\\CurrentInvoiceLine_SetUnitNetPrice',
      'CurrentInvoiceLine_SetUnitNetPriceResponse' => 'Economic\\CurrentInvoiceLine_SetUnitNetPriceResponse',
      'CurrentInvoiceLine_SetUnitCostPrice' => 'Economic\\CurrentInvoiceLine_SetUnitCostPrice',
      'CurrentInvoiceLine_SetUnitCostPriceResponse' => 'Economic\\CurrentInvoiceLine_SetUnitCostPriceResponse',
      'CurrentInvoiceLine_GetDiscountAsPercent' => 'Economic\\CurrentInvoiceLine_GetDiscountAsPercent',
      'CurrentInvoiceLine_GetDiscountAsPercentResponse' => 'Economic\\CurrentInvoiceLine_GetDiscountAsPercentResponse',
      'CurrentInvoiceLine_SetDiscountAsPercent' => 'Economic\\CurrentInvoiceLine_SetDiscountAsPercent',
      'CurrentInvoiceLine_SetDiscountAsPercentResponse' => 'Economic\\CurrentInvoiceLine_SetDiscountAsPercentResponse',
      'CurrentInvoiceLine_GetUnitCostPrice' => 'Economic\\CurrentInvoiceLine_GetUnitCostPrice',
      'CurrentInvoiceLine_GetUnitCostPriceResponse' => 'Economic\\CurrentInvoiceLine_GetUnitCostPriceResponse',
      'CurrentInvoiceLine_GetTotalNetAmount' => 'Economic\\CurrentInvoiceLine_GetTotalNetAmount',
      'CurrentInvoiceLine_GetTotalNetAmountResponse' => 'Economic\\CurrentInvoiceLine_GetTotalNetAmountResponse',
      'CurrentInvoiceLine_GetTotalMargin' => 'Economic\\CurrentInvoiceLine_GetTotalMargin',
      'CurrentInvoiceLine_GetTotalMarginResponse' => 'Economic\\CurrentInvoiceLine_GetTotalMarginResponse',
      'CurrentInvoiceLine_GetMarginAsPercent' => 'Economic\\CurrentInvoiceLine_GetMarginAsPercent',
      'CurrentInvoiceLine_GetMarginAsPercentResponse' => 'Economic\\CurrentInvoiceLine_GetMarginAsPercentResponse',
      'CurrentInvoiceLine_SetDepartment' => 'Economic\\CurrentInvoiceLine_SetDepartment',
      'CurrentInvoiceLine_SetDepartmentResponse' => 'Economic\\CurrentInvoiceLine_SetDepartmentResponse',
      'CurrentInvoiceLine_GetDepartment' => 'Economic\\CurrentInvoiceLine_GetDepartment',
      'CurrentInvoiceLine_GetDepartmentResponse' => 'Economic\\CurrentInvoiceLine_GetDepartmentResponse',
      'CurrentInvoiceLine_GetDistributionKey' => 'Economic\\CurrentInvoiceLine_GetDistributionKey',
      'CurrentInvoiceLine_GetDistributionKeyResponse' => 'Economic\\CurrentInvoiceLine_GetDistributionKeyResponse',
      'CurrentInvoiceLine_SetDistributionKey' => 'Economic\\CurrentInvoiceLine_SetDistributionKey',
      'CurrentInvoiceLine_SetDistributionKeyResponse' => 'Economic\\CurrentInvoiceLine_SetDistributionKeyResponse',
      'CurrentInvoiceLine_GetInventoryLocation' => 'Economic\\CurrentInvoiceLine_GetInventoryLocation',
      'CurrentInvoiceLine_GetInventoryLocationResponse' => 'Economic\\CurrentInvoiceLine_GetInventoryLocationResponse',
      'CurrentInvoiceLine_SetInventoryLocation' => 'Economic\\CurrentInvoiceLine_SetInventoryLocation',
      'CurrentInvoiceLine_SetInventoryLocationResponse' => 'Economic\\CurrentInvoiceLine_SetInventoryLocationResponse',
      'OrderLine_GetInventoryLocation' => 'Economic\\OrderLine_GetInventoryLocation',
      'OrderLine_GetInventoryLocationResponse' => 'Economic\\OrderLine_GetInventoryLocationResponse',
      'OrderLine_SetInventoryLocation' => 'Economic\\OrderLine_SetInventoryLocation',
      'OrderLine_SetInventoryLocationResponse' => 'Economic\\OrderLine_SetInventoryLocationResponse',
      'QuotationLine_GetInventoryLocation' => 'Economic\\QuotationLine_GetInventoryLocation',
      'QuotationLine_GetInventoryLocationResponse' => 'Economic\\QuotationLine_GetInventoryLocationResponse',
      'QuotationLine_SetInventoryLocation' => 'Economic\\QuotationLine_SetInventoryLocation',
      'QuotationLine_SetInventoryLocationResponse' => 'Economic\\QuotationLine_SetInventoryLocationResponse',
      'CurrentInvoiceLine_Create' => 'Economic\\CurrentInvoiceLine_Create',
      'CurrentInvoiceLine_CreateResponse' => 'Economic\\CurrentInvoiceLine_CreateResponse',
      'CreditorEntry_GetAccount' => 'Economic\\CreditorEntry_GetAccount',
      'CreditorEntryHandle' => 'Economic\\CreditorEntryHandle',
      'CreditorEntry_GetAccountResponse' => 'Economic\\CreditorEntry_GetAccountResponse',
      'CreditorEntry_GetVoucherNumber' => 'Economic\\CreditorEntry_GetVoucherNumber',
      'CreditorEntry_GetVoucherNumberResponse' => 'Economic\\CreditorEntry_GetVoucherNumberResponse',
      'CreditorEntry_GetText' => 'Economic\\CreditorEntry_GetText',
      'CreditorEntry_GetTextResponse' => 'Economic\\CreditorEntry_GetTextResponse',
      'CreditorEntry_GetAmountDefaultCurrency' => 'Economic\\CreditorEntry_GetAmountDefaultCurrency',
      'CreditorEntry_GetAmountDefaultCurrencyResponse' => 'Economic\\CreditorEntry_GetAmountDefaultCurrencyResponse',
      'CreditorEntry_GetCurrency' => 'Economic\\CreditorEntry_GetCurrency',
      'CreditorEntry_GetCurrencyResponse' => 'Economic\\CreditorEntry_GetCurrencyResponse',
      'CreditorEntry_GetAmount' => 'Economic\\CreditorEntry_GetAmount',
      'CreditorEntry_GetAmountResponse' => 'Economic\\CreditorEntry_GetAmountResponse',
      'CreditorEntry_GetInvoiceNumber' => 'Economic\\CreditorEntry_GetInvoiceNumber',
      'CreditorEntry_GetInvoiceNumberResponse' => 'Economic\\CreditorEntry_GetInvoiceNumberResponse',
      'CreditorEntry_GetDueDate' => 'Economic\\CreditorEntry_GetDueDate',
      'CreditorEntry_GetDueDateResponse' => 'Economic\\CreditorEntry_GetDueDateResponse',
      'CreditorEntry_GetRemainder' => 'Economic\\CreditorEntry_GetRemainder',
      'CreditorEntry_GetRemainderResponse' => 'Economic\\CreditorEntry_GetRemainderResponse',
      'CreditorEntry_GetRemainderDefaultCurrency' => 'Economic\\CreditorEntry_GetRemainderDefaultCurrency',
      'CreditorEntry_GetRemainderDefaultCurrencyResponse' => 'Economic\\CreditorEntry_GetRemainderDefaultCurrencyResponse',
      'CreditorEntry_FindBySerialNumber' => 'Economic\\CreditorEntry_FindBySerialNumber',
      'CreditorEntry_FindBySerialNumberResponse' => 'Economic\\CreditorEntry_FindBySerialNumberResponse',
      'ArrayOfCreditorEntryHandle' => 'Economic\\ArrayOfCreditorEntryHandle',
      'CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber' => 'Economic\\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber',
      'CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResponse' => 'Economic\\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResponse',
      'CreditorEntry_FindByInvoiceNumber' => 'Economic\\CreditorEntry_FindByInvoiceNumber',
      'CreditorEntry_FindByInvoiceNumberResponse' => 'Economic\\CreditorEntry_FindByInvoiceNumberResponse',
      'CreditorEntry_MatchEntries' => 'Economic\\CreditorEntry_MatchEntries',
      'CreditorEntry_MatchEntriesResponse' => 'Economic\\CreditorEntry_MatchEntriesResponse',
      'CreditorGroup_CreateFromData' => 'Economic\\CreditorGroup_CreateFromData',
      'CreditorGroupData' => 'Economic\\CreditorGroupData',
      'CreditorGroupHandle' => 'Economic\\CreditorGroupHandle',
      'CreditorGroup_CreateFromDataResponse' => 'Economic\\CreditorGroup_CreateFromDataResponse',
      'CreditorGroup_CreateFromDataArray' => 'Economic\\CreditorGroup_CreateFromDataArray',
      'ArrayOfCreditorGroupData' => 'Economic\\ArrayOfCreditorGroupData',
      'CreditorGroup_CreateFromDataArrayResponse' => 'Economic\\CreditorGroup_CreateFromDataArrayResponse',
      'ArrayOfCreditorGroupHandle' => 'Economic\\ArrayOfCreditorGroupHandle',
      'CreditorGroup_UpdateFromDataArray' => 'Economic\\CreditorGroup_UpdateFromDataArray',
      'CreditorGroup_UpdateFromDataArrayResponse' => 'Economic\\CreditorGroup_UpdateFromDataArrayResponse',
      'CreditorGroup_UpdateFromData' => 'Economic\\CreditorGroup_UpdateFromData',
      'CreditorGroup_UpdateFromDataResponse' => 'Economic\\CreditorGroup_UpdateFromDataResponse',
      'CreditorGroup_GetData' => 'Economic\\CreditorGroup_GetData',
      'CreditorGroup_GetDataResponse' => 'Economic\\CreditorGroup_GetDataResponse',
      'CreditorGroup_GetDataArray' => 'Economic\\CreditorGroup_GetDataArray',
      'CreditorGroup_GetDataArrayResponse' => 'Economic\\CreditorGroup_GetDataArrayResponse',
      'CreditorGroup_Create' => 'Economic\\CreditorGroup_Create',
      'CreditorGroup_CreateResponse' => 'Economic\\CreditorGroup_CreateResponse',
      'CreditorGroup_GetAll' => 'Economic\\CreditorGroup_GetAll',
      'CreditorGroup_GetAllResponse' => 'Economic\\CreditorGroup_GetAllResponse',
      'CreditorGroup_FindByNumber' => 'Economic\\CreditorGroup_FindByNumber',
      'CreditorGroup_FindByNumberResponse' => 'Economic\\CreditorGroup_FindByNumberResponse',
      'CreditorGroup_FindByNumberList' => 'Economic\\CreditorGroup_FindByNumberList',
      'CreditorGroup_FindByNumberListResponse' => 'Economic\\CreditorGroup_FindByNumberListResponse',
      'CreditorGroup_FindByName' => 'Economic\\CreditorGroup_FindByName',
      'CreditorGroup_FindByNameResponse' => 'Economic\\CreditorGroup_FindByNameResponse',
      'CreditorGroup_GetCreditors' => 'Economic\\CreditorGroup_GetCreditors',
      'CreditorGroup_GetCreditorsResponse' => 'Economic\\CreditorGroup_GetCreditorsResponse',
      'ArrayOfCreditorHandle' => 'Economic\\ArrayOfCreditorHandle',
      'CreditorGroup_GetNumber' => 'Economic\\CreditorGroup_GetNumber',
      'CreditorGroup_GetNumberResponse' => 'Economic\\CreditorGroup_GetNumberResponse',
      'CreditorGroup_GetName' => 'Economic\\CreditorGroup_GetName',
      'CreditorGroup_GetNameResponse' => 'Economic\\CreditorGroup_GetNameResponse',
      'CreditorGroup_SetName' => 'Economic\\CreditorGroup_SetName',
      'CreditorGroup_SetNameResponse' => 'Economic\\CreditorGroup_SetNameResponse',
      'CreditorGroup_GetAccount' => 'Economic\\CreditorGroup_GetAccount',
      'CreditorGroup_GetAccountResponse' => 'Economic\\CreditorGroup_GetAccountResponse',
      'CreditorGroup_SetAccount' => 'Economic\\CreditorGroup_SetAccount',
      'CreditorGroup_SetAccountResponse' => 'Economic\\CreditorGroup_SetAccountResponse',
      'Currency_GetData' => 'Economic\\Currency_GetData',
      'Currency_GetDataResponse' => 'Economic\\Currency_GetDataResponse',
      'CurrencyData' => 'Economic\\CurrencyData',
      'Currency_GetDataArray' => 'Economic\\Currency_GetDataArray',
      'ArrayOfCurrencyHandle' => 'Economic\\ArrayOfCurrencyHandle',
      'Currency_GetDataArrayResponse' => 'Economic\\Currency_GetDataArrayResponse',
      'ArrayOfCurrencyData' => 'Economic\\ArrayOfCurrencyData',
      'Currency_GetCode' => 'Economic\\Currency_GetCode',
      'Currency_GetCodeResponse' => 'Economic\\Currency_GetCodeResponse',
      'Currency_GetAll' => 'Economic\\Currency_GetAll',
      'Currency_GetAllResponse' => 'Economic\\Currency_GetAllResponse',
      'Currency_FindByCode' => 'Economic\\Currency_FindByCode',
      'Currency_FindByCodeResponse' => 'Economic\\Currency_FindByCodeResponse',
      'CurrentInvoice_CreateFromData' => 'Economic\\CurrentInvoice_CreateFromData',
      'CurrentInvoiceData' => 'Economic\\CurrentInvoiceData',
      'CurrentInvoice_CreateFromDataResponse' => 'Economic\\CurrentInvoice_CreateFromDataResponse',
      'CurrentInvoice_CreateFromDataArray' => 'Economic\\CurrentInvoice_CreateFromDataArray',
      'ArrayOfCurrentInvoiceData' => 'Economic\\ArrayOfCurrentInvoiceData',
      'CurrentInvoice_CreateFromDataArrayResponse' => 'Economic\\CurrentInvoice_CreateFromDataArrayResponse',
      'CurrentInvoice_UpdateFromDataArray' => 'Economic\\CurrentInvoice_UpdateFromDataArray',
      'CurrentInvoice_UpdateFromDataArrayResponse' => 'Economic\\CurrentInvoice_UpdateFromDataArrayResponse',
      'CurrentInvoice_UpdateFromData' => 'Economic\\CurrentInvoice_UpdateFromData',
      'CurrentInvoice_UpdateFromDataResponse' => 'Economic\\CurrentInvoice_UpdateFromDataResponse',
      'CurrentInvoice_GetData' => 'Economic\\CurrentInvoice_GetData',
      'CurrentInvoice_GetDataResponse' => 'Economic\\CurrentInvoice_GetDataResponse',
      'CurrentInvoice_GetDataArray' => 'Economic\\CurrentInvoice_GetDataArray',
      'CurrentInvoice_GetDataArrayResponse' => 'Economic\\CurrentInvoice_GetDataArrayResponse',
      'CurrentInvoice_Create' => 'Economic\\CurrentInvoice_Create',
      'CurrentInvoice_CreateResponse' => 'Economic\\CurrentInvoice_CreateResponse',
      'CurrentInvoice_GetAll' => 'Economic\\CurrentInvoice_GetAll',
      'CurrentInvoice_GetAllResponse' => 'Economic\\CurrentInvoice_GetAllResponse',
      'CurrentInvoice_FindByOurReference' => 'Economic\\CurrentInvoice_FindByOurReference',
      'CurrentInvoice_FindByOurReferenceResponse' => 'Economic\\CurrentInvoice_FindByOurReferenceResponse',
      'CurrentInvoice_FindByOtherReference' => 'Economic\\CurrentInvoice_FindByOtherReference',
      'CurrentInvoice_FindByOtherReferenceResponse' => 'Economic\\CurrentInvoice_FindByOtherReferenceResponse',
      'CurrentInvoice_FindByDateInterval' => 'Economic\\CurrentInvoice_FindByDateInterval',
      'CurrentInvoice_FindByDateIntervalResponse' => 'Economic\\CurrentInvoice_FindByDateIntervalResponse',
      'CurrentInvoice_GetAllUpdated' => 'Economic\\CurrentInvoice_GetAllUpdated',
      'CurrentInvoice_GetAllUpdatedResponse' => 'Economic\\CurrentInvoice_GetAllUpdatedResponse',
      'CurrentInvoice_GetPdf' => 'Economic\\CurrentInvoice_GetPdf',
      'CurrentInvoice_GetPdfResponse' => 'Economic\\CurrentInvoice_GetPdfResponse',
      'CurrentInvoice_Book' => 'Economic\\CurrentInvoice_Book',
      'CurrentInvoice_BookResponse' => 'Economic\\CurrentInvoice_BookResponse',
      'CurrentInvoice_BookWithNumber' => 'Economic\\CurrentInvoice_BookWithNumber',
      'CurrentInvoice_BookWithNumberResponse' => 'Economic\\CurrentInvoice_BookWithNumberResponse',
      'CurrentInvoice_Delete' => 'Economic\\CurrentInvoice_Delete',
      'CurrentInvoice_DeleteResponse' => 'Economic\\CurrentInvoice_DeleteResponse',
      'CurrentInvoice_GetLines' => 'Economic\\CurrentInvoice_GetLines',
      'CurrentInvoice_GetLinesResponse' => 'Economic\\CurrentInvoice_GetLinesResponse',
      'CurrentInvoiceLine_FindByCurrentInvoiceList' => 'Economic\\CurrentInvoiceLine_FindByCurrentInvoiceList',
      'CurrentInvoiceLine_FindByCurrentInvoiceListResponse' => 'Economic\\CurrentInvoiceLine_FindByCurrentInvoiceListResponse',
      'OrderLine_FindByOrderList' => 'Economic\\OrderLine_FindByOrderList',
      'OrderLine_FindByOrderListResponse' => 'Economic\\OrderLine_FindByOrderListResponse',
      'QuotationLine_FindByQuotationList' => 'Economic\\QuotationLine_FindByQuotationList',
      'QuotationLine_FindByQuotationListResponse' => 'Economic\\QuotationLine_FindByQuotationListResponse',
      'InvoiceLine_FindByInvoiceList' => 'Economic\\InvoiceLine_FindByInvoiceList',
      'InvoiceLine_FindByInvoiceListResponse' => 'Economic\\InvoiceLine_FindByInvoiceListResponse',
      'CurrentInvoice_GetDebtor' => 'Economic\\CurrentInvoice_GetDebtor',
      'CurrentInvoice_GetDebtorResponse' => 'Economic\\CurrentInvoice_GetDebtorResponse',
      'CurrentInvoice_SetDebtor' => 'Economic\\CurrentInvoice_SetDebtor',
      'CurrentInvoice_SetDebtorResponse' => 'Economic\\CurrentInvoice_SetDebtorResponse',
      'CurrentInvoice_GetProject' => 'Economic\\CurrentInvoice_GetProject',
      'CurrentInvoice_GetProjectResponse' => 'Economic\\CurrentInvoice_GetProjectResponse',
      'CurrentInvoice_SetProject' => 'Economic\\CurrentInvoice_SetProject',
      'CurrentInvoice_SetProjectResponse' => 'Economic\\CurrentInvoice_SetProjectResponse',
      'CurrentInvoice_GetDebtorName' => 'Economic\\CurrentInvoice_GetDebtorName',
      'CurrentInvoice_GetDebtorNameResponse' => 'Economic\\CurrentInvoice_GetDebtorNameResponse',
      'CurrentInvoice_SetDebtorName' => 'Economic\\CurrentInvoice_SetDebtorName',
      'CurrentInvoice_SetDebtorNameResponse' => 'Economic\\CurrentInvoice_SetDebtorNameResponse',
      'CurrentInvoice_GetDebtorAddress' => 'Economic\\CurrentInvoice_GetDebtorAddress',
      'CurrentInvoice_GetDebtorAddressResponse' => 'Economic\\CurrentInvoice_GetDebtorAddressResponse',
      'CurrentInvoice_SetDebtorAddress' => 'Economic\\CurrentInvoice_SetDebtorAddress',
      'CurrentInvoice_SetDebtorAddressResponse' => 'Economic\\CurrentInvoice_SetDebtorAddressResponse',
      'CurrentInvoice_GetDebtorPostalCode' => 'Economic\\CurrentInvoice_GetDebtorPostalCode',
      'CurrentInvoice_GetDebtorPostalCodeResponse' => 'Economic\\CurrentInvoice_GetDebtorPostalCodeResponse',
      'CurrentInvoice_SetDebtorPostalCode' => 'Economic\\CurrentInvoice_SetDebtorPostalCode',
      'CurrentInvoice_SetDebtorPostalCodeResponse' => 'Economic\\CurrentInvoice_SetDebtorPostalCodeResponse',
      'CurrentInvoice_GetDebtorCity' => 'Economic\\CurrentInvoice_GetDebtorCity',
      'CurrentInvoice_GetDebtorCityResponse' => 'Economic\\CurrentInvoice_GetDebtorCityResponse',
      'CurrentInvoice_SetDebtorCity' => 'Economic\\CurrentInvoice_SetDebtorCity',
      'CurrentInvoice_SetDebtorCityResponse' => 'Economic\\CurrentInvoice_SetDebtorCityResponse',
      'CurrentInvoice_GetDebtorCountry' => 'Economic\\CurrentInvoice_GetDebtorCountry',
      'CurrentInvoice_GetDebtorCountryResponse' => 'Economic\\CurrentInvoice_GetDebtorCountryResponse',
      'CurrentInvoice_SetDebtorCountry' => 'Economic\\CurrentInvoice_SetDebtorCountry',
      'CurrentInvoice_SetDebtorCountryResponse' => 'Economic\\CurrentInvoice_SetDebtorCountryResponse',
      'CurrentInvoice_GetDebtorEan' => 'Economic\\CurrentInvoice_GetDebtorEan',
      'CurrentInvoice_GetDebtorEanResponse' => 'Economic\\CurrentInvoice_GetDebtorEanResponse',
      'CurrentInvoice_SetDebtorEan' => 'Economic\\CurrentInvoice_SetDebtorEan',
      'CurrentInvoice_SetDebtorEanResponse' => 'Economic\\CurrentInvoice_SetDebtorEanResponse',
      'CurrentInvoice_GetPublicEntryNumber' => 'Economic\\CurrentInvoice_GetPublicEntryNumber',
      'CurrentInvoice_GetPublicEntryNumberResponse' => 'Economic\\CurrentInvoice_GetPublicEntryNumberResponse',
      'CurrentInvoice_SetPublicEntryNumber' => 'Economic\\CurrentInvoice_SetPublicEntryNumber',
      'CurrentInvoice_SetPublicEntryNumberResponse' => 'Economic\\CurrentInvoice_SetPublicEntryNumberResponse',
      'CurrentInvoice_GetAttention' => 'Economic\\CurrentInvoice_GetAttention',
      'CurrentInvoice_GetAttentionResponse' => 'Economic\\CurrentInvoice_GetAttentionResponse',
      'CurrentInvoice_SetAttention' => 'Economic\\CurrentInvoice_SetAttention',
      'CurrentInvoice_SetAttentionResponse' => 'Economic\\CurrentInvoice_SetAttentionResponse',
      'CurrentInvoice_GetYourReference' => 'Economic\\CurrentInvoice_GetYourReference',
      'CurrentInvoice_GetYourReferenceResponse' => 'Economic\\CurrentInvoice_GetYourReferenceResponse',
      'CurrentInvoice_SetYourReference' => 'Economic\\CurrentInvoice_SetYourReference',
      'CurrentInvoice_SetYourReferenceResponse' => 'Economic\\CurrentInvoice_SetYourReferenceResponse',
      'CurrentInvoice_GetOurReference' => 'Economic\\CurrentInvoice_GetOurReference',
      'CurrentInvoice_GetOurReferenceResponse' => 'Economic\\CurrentInvoice_GetOurReferenceResponse',
      'CurrentInvoice_SetOurReference' => 'Economic\\CurrentInvoice_SetOurReference',
      'CurrentInvoice_SetOurReferenceResponse' => 'Economic\\CurrentInvoice_SetOurReferenceResponse',
      'CurrentInvoice_GetOurReference2' => 'Economic\\CurrentInvoice_GetOurReference2',
      'CurrentInvoice_GetOurReference2Response' => 'Economic\\CurrentInvoice_GetOurReference2Response',
      'CurrentInvoice_SetOurReference2' => 'Economic\\CurrentInvoice_SetOurReference2',
      'CurrentInvoice_SetOurReference2Response' => 'Economic\\CurrentInvoice_SetOurReference2Response',
      'CurrentInvoice_GetDate' => 'Economic\\CurrentInvoice_GetDate',
      'CurrentInvoice_GetDateResponse' => 'Economic\\CurrentInvoice_GetDateResponse',
      'CurrentInvoice_SetDate' => 'Economic\\CurrentInvoice_SetDate',
      'CurrentInvoice_SetDateResponse' => 'Economic\\CurrentInvoice_SetDateResponse',
      'Creditor_UpdateFromDataArray' => 'Economic\\Creditor_UpdateFromDataArray',
      'ArrayOfCreditorData' => 'Economic\\ArrayOfCreditorData',
      'CreditorData' => 'Economic\\CreditorData',
      'CreditorContactHandle' => 'Economic\\CreditorContactHandle',
      'BankPaymentTypeHandle' => 'Economic\\BankPaymentTypeHandle',
      'Creditor_UpdateFromDataArrayResponse' => 'Economic\\Creditor_UpdateFromDataArrayResponse',
      'Creditor_UpdateFromData' => 'Economic\\Creditor_UpdateFromData',
      'Creditor_UpdateFromDataResponse' => 'Economic\\Creditor_UpdateFromDataResponse',
      'Creditor_GetData' => 'Economic\\Creditor_GetData',
      'Creditor_GetDataResponse' => 'Economic\\Creditor_GetDataResponse',
      'Creditor_GetDataArray' => 'Economic\\Creditor_GetDataArray',
      'Creditor_GetDataArrayResponse' => 'Economic\\Creditor_GetDataArrayResponse',
      'Creditor_GetNumber' => 'Economic\\Creditor_GetNumber',
      'Creditor_GetNumberResponse' => 'Economic\\Creditor_GetNumberResponse',
      'Creditor_GetCreditorGroup' => 'Economic\\Creditor_GetCreditorGroup',
      'Creditor_GetCreditorGroupResponse' => 'Economic\\Creditor_GetCreditorGroupResponse',
      'Creditor_SetCreditorGroup' => 'Economic\\Creditor_SetCreditorGroup',
      'Creditor_SetCreditorGroupResponse' => 'Economic\\Creditor_SetCreditorGroupResponse',
      'Creditor_GetName' => 'Economic\\Creditor_GetName',
      'Creditor_GetNameResponse' => 'Economic\\Creditor_GetNameResponse',
      'Creditor_SetName' => 'Economic\\Creditor_SetName',
      'Creditor_SetNameResponse' => 'Economic\\Creditor_SetNameResponse',
      'Creditor_SetVatZone' => 'Economic\\Creditor_SetVatZone',
      'Creditor_SetVatZoneResponse' => 'Economic\\Creditor_SetVatZoneResponse',
      'Creditor_GetVatZone' => 'Economic\\Creditor_GetVatZone',
      'Creditor_GetVatZoneResponse' => 'Economic\\Creditor_GetVatZoneResponse',
      'Creditor_SetCurrency' => 'Economic\\Creditor_SetCurrency',
      'Creditor_SetCurrencyResponse' => 'Economic\\Creditor_SetCurrencyResponse',
      'Creditor_GetCurrency' => 'Economic\\Creditor_GetCurrency',
      'Creditor_GetCurrencyResponse' => 'Economic\\Creditor_GetCurrencyResponse',
      'Creditor_GetTermOfPayment' => 'Economic\\Creditor_GetTermOfPayment',
      'Creditor_GetTermOfPaymentResponse' => 'Economic\\Creditor_GetTermOfPaymentResponse',
      'Creditor_SetTermOfPayment' => 'Economic\\Creditor_SetTermOfPayment',
      'Creditor_SetTermOfPaymentResponse' => 'Economic\\Creditor_SetTermOfPaymentResponse',
      'Creditor_GetIsAccessible' => 'Economic\\Creditor_GetIsAccessible',
      'Creditor_GetIsAccessibleResponse' => 'Economic\\Creditor_GetIsAccessibleResponse',
      'Creditor_SetIsAccessible' => 'Economic\\Creditor_SetIsAccessible',
      'Creditor_SetIsAccessibleResponse' => 'Economic\\Creditor_SetIsAccessibleResponse',
      'Creditor_GetCINumber' => 'Economic\\Creditor_GetCINumber',
      'Creditor_GetCINumberResponse' => 'Economic\\Creditor_GetCINumberResponse',
      'Creditor_SetCINumber' => 'Economic\\Creditor_SetCINumber',
      'Creditor_SetCINumberResponse' => 'Economic\\Creditor_SetCINumberResponse',
      'Creditor_SetEmail' => 'Economic\\Creditor_SetEmail',
      'Creditor_SetEmailResponse' => 'Economic\\Creditor_SetEmailResponse',
      'Creditor_GetEmail' => 'Economic\\Creditor_GetEmail',
      'Creditor_GetEmailResponse' => 'Economic\\Creditor_GetEmailResponse',
      'Creditor_SetAddress' => 'Economic\\Creditor_SetAddress',
      'Creditor_SetAddressResponse' => 'Economic\\Creditor_SetAddressResponse',
      'Creditor_GetAddress' => 'Economic\\Creditor_GetAddress',
      'Creditor_GetAddressResponse' => 'Economic\\Creditor_GetAddressResponse',
      'Creditor_GetPostalCode' => 'Economic\\Creditor_GetPostalCode',
      'Creditor_GetPostalCodeResponse' => 'Economic\\Creditor_GetPostalCodeResponse',
      'Creditor_SetPostalCode' => 'Economic\\Creditor_SetPostalCode',
      'Creditor_SetPostalCodeResponse' => 'Economic\\Creditor_SetPostalCodeResponse',
      'Creditor_SetCity' => 'Economic\\Creditor_SetCity',
      'Creditor_SetCityResponse' => 'Economic\\Creditor_SetCityResponse',
      'Creditor_GetCity' => 'Economic\\Creditor_GetCity',
      'Creditor_GetCityResponse' => 'Economic\\Creditor_GetCityResponse',
      'Creditor_GetCountry' => 'Economic\\Creditor_GetCountry',
      'Creditor_GetCountryResponse' => 'Economic\\Creditor_GetCountryResponse',
      'Creditor_SetCountry' => 'Economic\\Creditor_SetCountry',
      'Creditor_SetCountryResponse' => 'Economic\\Creditor_SetCountryResponse',
      'Creditor_SetBankAccount' => 'Economic\\Creditor_SetBankAccount',
      'Creditor_SetBankAccountResponse' => 'Economic\\Creditor_SetBankAccountResponse',
      'Creditor_GetBankAccount' => 'Economic\\Creditor_GetBankAccount',
      'Creditor_GetBankAccountResponse' => 'Economic\\Creditor_GetBankAccountResponse',
      'Creditor_SetAttention' => 'Economic\\Creditor_SetAttention',
      'Creditor_SetAttentionResponse' => 'Economic\\Creditor_SetAttentionResponse',
      'Creditor_GetAttention' => 'Economic\\Creditor_GetAttention',
      'Creditor_GetAttentionResponse' => 'Economic\\Creditor_GetAttentionResponse',
      'Creditor_GetYourReference' => 'Economic\\Creditor_GetYourReference',
      'Creditor_GetYourReferenceResponse' => 'Economic\\Creditor_GetYourReferenceResponse',
      'Creditor_SetYourReference' => 'Economic\\Creditor_SetYourReference',
      'Creditor_SetYourReferenceResponse' => 'Economic\\Creditor_SetYourReferenceResponse',
      'Creditor_SetOurReference' => 'Economic\\Creditor_SetOurReference',
      'Creditor_SetOurReferenceResponse' => 'Economic\\Creditor_SetOurReferenceResponse',
      'Creditor_GetOurReference' => 'Economic\\Creditor_GetOurReference',
      'Creditor_GetOurReferenceResponse' => 'Economic\\Creditor_GetOurReferenceResponse',
      'Creditor_GetDefaultPaymentType' => 'Economic\\Creditor_GetDefaultPaymentType',
      'Creditor_GetDefaultPaymentTypeResponse' => 'Economic\\Creditor_GetDefaultPaymentTypeResponse',
      'Creditor_GetDefaultPaymentCreditorId' => 'Economic\\Creditor_GetDefaultPaymentCreditorId',
      'Creditor_GetDefaultPaymentCreditorIdResponse' => 'Economic\\Creditor_GetDefaultPaymentCreditorIdResponse',
      'Creditor_GetCounty' => 'Economic\\Creditor_GetCounty',
      'Creditor_GetCountyResponse' => 'Economic\\Creditor_GetCountyResponse',
      'Creditor_SetCounty' => 'Economic\\Creditor_SetCounty',
      'Creditor_SetCountyResponse' => 'Economic\\Creditor_SetCountyResponse',
      'Creditor_GetAutoContraAccount' => 'Economic\\Creditor_GetAutoContraAccount',
      'Creditor_GetAutoContraAccountResponse' => 'Economic\\Creditor_GetAutoContraAccountResponse',
      'Creditor_SetAutoContraAccount' => 'Economic\\Creditor_SetAutoContraAccount',
      'Creditor_SetAutoContraAccountResponse' => 'Economic\\Creditor_SetAutoContraAccountResponse',
      'Creditor_Create' => 'Economic\\Creditor_Create',
      'Creditor_CreateResponse' => 'Economic\\Creditor_CreateResponse',
      'Creditor_SetRemittanceInformation' => 'Economic\\Creditor_SetRemittanceInformation',
      'Creditor_SetRemittanceInformationResponse' => 'Economic\\Creditor_SetRemittanceInformationResponse',
      'Creditor_GetAll' => 'Economic\\Creditor_GetAll',
      'Creditor_GetAllResponse' => 'Economic\\Creditor_GetAllResponse',
      'Creditor_GetAllUpdated' => 'Economic\\Creditor_GetAllUpdated',
      'Creditor_GetAllUpdatedResponse' => 'Economic\\Creditor_GetAllUpdatedResponse',
      'Creditor_FindByNumber' => 'Economic\\Creditor_FindByNumber',
      'Creditor_FindByNumberResponse' => 'Economic\\Creditor_FindByNumberResponse',
      'Creditor_FindByNumberList' => 'Economic\\Creditor_FindByNumberList',
      'Creditor_FindByNumberListResponse' => 'Economic\\Creditor_FindByNumberListResponse',
      'Creditor_FindByName' => 'Economic\\Creditor_FindByName',
      'Creditor_FindByNameResponse' => 'Economic\\Creditor_FindByNameResponse',
      'Creditor_GetCreditorContacts' => 'Economic\\Creditor_GetCreditorContacts',
      'Creditor_GetCreditorContactsResponse' => 'Economic\\Creditor_GetCreditorContactsResponse',
      'ArrayOfCreditorContactHandle' => 'Economic\\ArrayOfCreditorContactHandle',
      'Creditor_Delete' => 'Economic\\Creditor_Delete',
      'Creditor_DeleteResponse' => 'Economic\\Creditor_DeleteResponse',
      'Creditor_GetEntries' => 'Economic\\Creditor_GetEntries',
      'Creditor_GetEntriesResponse' => 'Economic\\Creditor_GetEntriesResponse',
      'Creditor_GetEntriesByVoucherNo' => 'Economic\\Creditor_GetEntriesByVoucherNo',
      'Creditor_GetEntriesByVoucherNoResponse' => 'Economic\\Creditor_GetEntriesByVoucherNoResponse',
      'Creditor_GetEntriesByInvoiceNo' => 'Economic\\Creditor_GetEntriesByInvoiceNo',
      'Creditor_GetEntriesByInvoiceNoResponse' => 'Economic\\Creditor_GetEntriesByInvoiceNoResponse',
      'Creditor_GetEntriesByVoucherNoAndInvoiceNo' => 'Economic\\Creditor_GetEntriesByVoucherNoAndInvoiceNo',
      'Creditor_GetEntriesByVoucherNoAndInvoiceNoResponse' => 'Economic\\Creditor_GetEntriesByVoucherNoAndInvoiceNoResponse',
      'Creditor_GetOpenEntries' => 'Economic\\Creditor_GetOpenEntries',
      'Creditor_GetOpenEntriesResponse' => 'Economic\\Creditor_GetOpenEntriesResponse',
      'CreditorContact_CreateFromData' => 'Economic\\CreditorContact_CreateFromData',
      'CreditorContactData' => 'Economic\\CreditorContactData',
      'CreditorContact_CreateFromDataResponse' => 'Economic\\CreditorContact_CreateFromDataResponse',
      'CreditorContact_CreateFromDataArray' => 'Economic\\CreditorContact_CreateFromDataArray',
      'ArrayOfCreditorContactData' => 'Economic\\ArrayOfCreditorContactData',
      'CreditorContact_CreateFromDataArrayResponse' => 'Economic\\CreditorContact_CreateFromDataArrayResponse',
      'CreditorContact_UpdateFromDataArray' => 'Economic\\CreditorContact_UpdateFromDataArray',
      'CreditorContact_UpdateFromDataArrayResponse' => 'Economic\\CreditorContact_UpdateFromDataArrayResponse',
      'CreditorContact_UpdateFromData' => 'Economic\\CreditorContact_UpdateFromData',
      'CreditorContact_UpdateFromDataResponse' => 'Economic\\CreditorContact_UpdateFromDataResponse',
      'CreditorContact_GetData' => 'Economic\\CreditorContact_GetData',
      'CreditorContact_GetDataResponse' => 'Economic\\CreditorContact_GetDataResponse',
      'CreditorContact_GetDataArray' => 'Economic\\CreditorContact_GetDataArray',
      'CreditorContact_GetDataArrayResponse' => 'Economic\\CreditorContact_GetDataArrayResponse',
      'CreditorContact_GetCreditor' => 'Economic\\CreditorContact_GetCreditor',
      'CreditorContact_GetCreditorResponse' => 'Economic\\CreditorContact_GetCreditorResponse',
      'CreditorContact_GetName' => 'Economic\\CreditorContact_GetName',
      'CreditorContact_GetNameResponse' => 'Economic\\CreditorContact_GetNameResponse',
      'CreditorContact_SetName' => 'Economic\\CreditorContact_SetName',
      'CreditorContact_SetNameResponse' => 'Economic\\CreditorContact_SetNameResponse',
      'CreditorContact_GetNumber' => 'Economic\\CreditorContact_GetNumber',
      'CreditorContact_GetNumberResponse' => 'Economic\\CreditorContact_GetNumberResponse',
      'CreditorContact_SetTelephoneNumber' => 'Economic\\CreditorContact_SetTelephoneNumber',
      'CreditorContact_SetTelephoneNumberResponse' => 'Economic\\CreditorContact_SetTelephoneNumberResponse',
      'CreditorContact_GetTelephoneNumber' => 'Economic\\CreditorContact_GetTelephoneNumber',
      'CreditorContact_GetTelephoneNumberResponse' => 'Economic\\CreditorContact_GetTelephoneNumberResponse',
      'CreditorContact_SetEmail' => 'Economic\\CreditorContact_SetEmail',
      'CreditorContact_SetEmailResponse' => 'Economic\\CreditorContact_SetEmailResponse',
      'CreditorContact_GetEmail' => 'Economic\\CreditorContact_GetEmail',
      'CreditorContact_GetEmailResponse' => 'Economic\\CreditorContact_GetEmailResponse',
      'CreditorContact_GetComments' => 'Economic\\CreditorContact_GetComments',
      'CreditorContact_GetCommentsResponse' => 'Economic\\CreditorContact_GetCommentsResponse',
      'CreditorContact_SetComments' => 'Economic\\CreditorContact_SetComments',
      'CreditorContact_SetCommentsResponse' => 'Economic\\CreditorContact_SetCommentsResponse',
      'CreditorContact_GetExternalId' => 'Economic\\CreditorContact_GetExternalId',
      'CreditorContact_GetExternalIdResponse' => 'Economic\\CreditorContact_GetExternalIdResponse',
      'CreditorContact_SetExternalId' => 'Economic\\CreditorContact_SetExternalId',
      'CreditorContact_SetExternalIdResponse' => 'Economic\\CreditorContact_SetExternalIdResponse',
      'CreditorContact_Create' => 'Economic\\CreditorContact_Create',
      'CreditorContact_CreateResponse' => 'Economic\\CreditorContact_CreateResponse',
      'CreditorContact_GetAll' => 'Economic\\CreditorContact_GetAll',
      'CreditorContact_GetAllResponse' => 'Economic\\CreditorContact_GetAllResponse',
      'CreditorContact_FindByName' => 'Economic\\CreditorContact_FindByName',
      'CreditorContact_FindByNameResponse' => 'Economic\\CreditorContact_FindByNameResponse',
      'CreditorContact_Delete' => 'Economic\\CreditorContact_Delete',
      'CreditorContact_DeleteResponse' => 'Economic\\CreditorContact_DeleteResponse',
      'CreditorEntry_GetData' => 'Economic\\CreditorEntry_GetData',
      'CreditorEntry_GetDataResponse' => 'Economic\\CreditorEntry_GetDataResponse',
      'CreditorEntryData' => 'Economic\\CreditorEntryData',
      'CreditorEntry_GetDataArray' => 'Economic\\CreditorEntry_GetDataArray',
      'CreditorEntry_GetDataArrayResponse' => 'Economic\\CreditorEntry_GetDataArrayResponse',
      'ArrayOfCreditorEntryData' => 'Economic\\ArrayOfCreditorEntryData',
      'CreditorEntry_GetSerialNumber' => 'Economic\\CreditorEntry_GetSerialNumber',
      'CreditorEntry_GetSerialNumberResponse' => 'Economic\\CreditorEntry_GetSerialNumberResponse',
      'CreditorEntry_GetType' => 'Economic\\CreditorEntry_GetType',
      'CreditorEntry_GetTypeResponse' => 'Economic\\CreditorEntry_GetTypeResponse',
      'CreditorEntry_GetDate' => 'Economic\\CreditorEntry_GetDate',
      'CreditorEntry_GetDateResponse' => 'Economic\\CreditorEntry_GetDateResponse',
      'CreditorEntry_GetCreditor' => 'Economic\\CreditorEntry_GetCreditor',
      'CreditorEntry_GetCreditorResponse' => 'Economic\\CreditorEntry_GetCreditorResponse',
      'CashBookEntry_GetDueDate' => 'Economic\\CashBookEntry_GetDueDate',
      'CashBookEntryHandle' => 'Economic\\CashBookEntryHandle',
      'CashBookEntry_GetDueDateResponse' => 'Economic\\CashBookEntry_GetDueDateResponse',
      'CashBookEntry_SetDepartment' => 'Economic\\CashBookEntry_SetDepartment',
      'CashBookEntry_SetDepartmentResponse' => 'Economic\\CashBookEntry_SetDepartmentResponse',
      'CashBookEntry_GetDepartment' => 'Economic\\CashBookEntry_GetDepartment',
      'CashBookEntry_GetDepartmentResponse' => 'Economic\\CashBookEntry_GetDepartmentResponse',
      'CashBookEntry_GetDistributionKey' => 'Economic\\CashBookEntry_GetDistributionKey',
      'CashBookEntry_GetDistributionKeyResponse' => 'Economic\\CashBookEntry_GetDistributionKeyResponse',
      'CashBookEntry_SetDistributionKey' => 'Economic\\CashBookEntry_SetDistributionKey',
      'CashBookEntry_SetDistributionKeyResponse' => 'Economic\\CashBookEntry_SetDistributionKeyResponse',
      'CashBookEntry_GetProject' => 'Economic\\CashBookEntry_GetProject',
      'CashBookEntry_GetProjectResponse' => 'Economic\\CashBookEntry_GetProjectResponse',
      'CashBookEntry_GetCostType' => 'Economic\\CashBookEntry_GetCostType',
      'CashBookEntry_GetCostTypeResponse' => 'Economic\\CashBookEntry_GetCostTypeResponse',
      'CostTypeHandle' => 'Economic\\CostTypeHandle',
      'CashBookEntry_GetBankPaymentType' => 'Economic\\CashBookEntry_GetBankPaymentType',
      'CashBookEntry_GetBankPaymentTypeResponse' => 'Economic\\CashBookEntry_GetBankPaymentTypeResponse',
      'CashBookEntry_GetBankPaymentCreditorId' => 'Economic\\CashBookEntry_GetBankPaymentCreditorId',
      'CashBookEntry_GetBankPaymentCreditorIdResponse' => 'Economic\\CashBookEntry_GetBankPaymentCreditorIdResponse',
      'CashBookEntry_GetBankPaymentCreditorInvoiceId' => 'Economic\\CashBookEntry_GetBankPaymentCreditorInvoiceId',
      'CashBookEntry_GetBankPaymentCreditorInvoiceIdResponse' => 'Economic\\CashBookEntry_GetBankPaymentCreditorInvoiceIdResponse',
      'CashBookEntry_GetCapitalise' => 'Economic\\CashBookEntry_GetCapitalise',
      'CashBookEntry_GetCapitaliseResponse' => 'Economic\\CashBookEntry_GetCapitaliseResponse',
      'CashBookEntry_GetStartDate' => 'Economic\\CashBookEntry_GetStartDate',
      'CashBookEntry_GetStartDateResponse' => 'Economic\\CashBookEntry_GetStartDateResponse',
      'CashBookEntry_GetEndDate' => 'Economic\\CashBookEntry_GetEndDate',
      'CashBookEntry_GetEndDateResponse' => 'Economic\\CashBookEntry_GetEndDateResponse',
      'CashBookEntry_SetEmployee' => 'Economic\\CashBookEntry_SetEmployee',
      'CashBookEntry_SetEmployeeResponse' => 'Economic\\CashBookEntry_SetEmployeeResponse',
      'CashBookEntry_GetEmployee' => 'Economic\\CashBookEntry_GetEmployee',
      'CashBookEntry_GetEmployeeResponse' => 'Economic\\CashBookEntry_GetEmployeeResponse',
      'CashBookEntry_Create' => 'Economic\\CashBookEntry_Create',
      'CashBookHandle' => 'Economic\\CashBookHandle',
      'CashBookEntry_CreateResponse' => 'Economic\\CashBookEntry_CreateResponse',
      'CashBookEntry_CreateDebtorPayment' => 'Economic\\CashBookEntry_CreateDebtorPayment',
      'CashBookEntry_CreateDebtorPaymentResponse' => 'Economic\\CashBookEntry_CreateDebtorPaymentResponse',
      'CashBookEntry_CreateManualDebtorInvoice' => 'Economic\\CashBookEntry_CreateManualDebtorInvoice',
      'CashBookEntry_CreateManualDebtorInvoiceResponse' => 'Economic\\CashBookEntry_CreateManualDebtorInvoiceResponse',
      'CashBookEntry_CreateCreditorPayment' => 'Economic\\CashBookEntry_CreateCreditorPayment',
      'CashBookEntry_CreateCreditorPaymentResponse' => 'Economic\\CashBookEntry_CreateCreditorPaymentResponse',
      'CashBookEntry_CreateCreditorInvoice' => 'Economic\\CashBookEntry_CreateCreditorInvoice',
      'CashBookEntry_CreateCreditorInvoiceResponse' => 'Economic\\CashBookEntry_CreateCreditorInvoiceResponse',
      'CashBookEntry_CreateFinanceVoucher' => 'Economic\\CashBookEntry_CreateFinanceVoucher',
      'CashBookEntry_CreateFinanceVoucherResponse' => 'Economic\\CashBookEntry_CreateFinanceVoucherResponse',
      'CashBookEntry_Delete' => 'Economic\\CashBookEntry_Delete',
      'CashBookEntry_DeleteResponse' => 'Economic\\CashBookEntry_DeleteResponse',
      'CashBookEntry_SetProjectAndCostType' => 'Economic\\CashBookEntry_SetProjectAndCostType',
      'CashBookEntry_SetProjectAndCostTypeResponse' => 'Economic\\CashBookEntry_SetProjectAndCostTypeResponse',
      'CashBookEntry_SetRemittanceInformation' => 'Economic\\CashBookEntry_SetRemittanceInformation',
      'CashBookEntry_SetRemittanceInformationResponse' => 'Economic\\CashBookEntry_SetRemittanceInformationResponse',
      'CashBookEntry_SetAccrualInformation' => 'Economic\\CashBookEntry_SetAccrualInformation',
      'CashBookEntry_SetAccrualInformationResponse' => 'Economic\\CashBookEntry_SetAccrualInformationResponse',
      'Company_UpdateFromDataArray' => 'Economic\\Company_UpdateFromDataArray',
      'ArrayOfCompanyData' => 'Economic\\ArrayOfCompanyData',
      'CompanyData' => 'Economic\\CompanyData',
      'CompanyHandle' => 'Economic\\CompanyHandle',
      'Company_UpdateFromDataArrayResponse' => 'Economic\\Company_UpdateFromDataArrayResponse',
      'ArrayOfCompanyHandle' => 'Economic\\ArrayOfCompanyHandle',
      'Company_UpdateFromData' => 'Economic\\Company_UpdateFromData',
      'Company_UpdateFromDataResponse' => 'Economic\\Company_UpdateFromDataResponse',
      'Company_GetData' => 'Economic\\Company_GetData',
      'Company_GetDataResponse' => 'Economic\\Company_GetDataResponse',
      'Company_GetDataArray' => 'Economic\\Company_GetDataArray',
      'Company_GetDataArrayResponse' => 'Economic\\Company_GetDataArrayResponse',
      'Company_Get' => 'Economic\\Company_Get',
      'Company_GetResponse' => 'Economic\\Company_GetResponse',
      'Company_GetNumber' => 'Economic\\Company_GetNumber',
      'Company_GetNumberResponse' => 'Economic\\Company_GetNumberResponse',
      'Company_GetBaseCurrency' => 'Economic\\Company_GetBaseCurrency',
      'Company_GetBaseCurrencyResponse' => 'Economic\\Company_GetBaseCurrencyResponse',
      'Company_GetName' => 'Economic\\Company_GetName',
      'Company_GetNameResponse' => 'Economic\\Company_GetNameResponse',
      'Company_SetName' => 'Economic\\Company_SetName',
      'Company_SetNameResponse' => 'Economic\\Company_SetNameResponse',
      'Company_GetAddress1' => 'Economic\\Company_GetAddress1',
      'Company_GetAddress1Response' => 'Economic\\Company_GetAddress1Response',
      'Company_SetAddress1' => 'Economic\\Company_SetAddress1',
      'Company_SetAddress1Response' => 'Economic\\Company_SetAddress1Response',
      'Company_GetAddress2' => 'Economic\\Company_GetAddress2',
      'Company_GetAddress2Response' => 'Economic\\Company_GetAddress2Response',
      'Company_SetAddress2' => 'Economic\\Company_SetAddress2',
      'Company_SetAddress2Response' => 'Economic\\Company_SetAddress2Response',
      'Company_GetPostalCode' => 'Economic\\Company_GetPostalCode',
      'Company_GetPostalCodeResponse' => 'Economic\\Company_GetPostalCodeResponse',
      'Company_SetPostalCode' => 'Economic\\Company_SetPostalCode',
      'Company_SetPostalCodeResponse' => 'Economic\\Company_SetPostalCodeResponse',
      'Company_GetCity' => 'Economic\\Company_GetCity',
      'Company_GetCityResponse' => 'Economic\\Company_GetCityResponse',
      'Company_SetCity' => 'Economic\\Company_SetCity',
      'Company_SetCityResponse' => 'Economic\\Company_SetCityResponse',
      'Company_GetCounty' => 'Economic\\Company_GetCounty',
      'Company_GetCountyResponse' => 'Economic\\Company_GetCountyResponse',
      'Company_GetCountry' => 'Economic\\Company_GetCountry',
      'Company_GetCountryResponse' => 'Economic\\Company_GetCountryResponse',
      'Company_GetCustomFields' => 'Economic\\Company_GetCustomFields',
      'Company_GetCustomFieldsResponse' => 'Economic\\Company_GetCustomFieldsResponse',
      'ArrayOfCustomField' => 'Economic\\ArrayOfCustomField',
      'CustomField' => 'Economic\\CustomField',
      'Company_SetCustomFields' => 'Economic\\Company_SetCustomFields',
      'Company_SetCustomFieldsResponse' => 'Economic\\Company_SetCustomFieldsResponse',
      'Company_DeleteCustomField' => 'Economic\\Company_DeleteCustomField',
      'Company_DeleteCustomFieldResponse' => 'Economic\\Company_DeleteCustomFieldResponse',
      'Company_SetCountry' => 'Economic\\Company_SetCountry',
      'Company_SetCountryResponse' => 'Economic\\Company_SetCountryResponse',
      'Company_GetTelephoneNumber' => 'Economic\\Company_GetTelephoneNumber',
      'Company_GetTelephoneNumberResponse' => 'Economic\\Company_GetTelephoneNumberResponse',
      'Company_SetTelephoneNumber' => 'Economic\\Company_SetTelephoneNumber',
      'Company_SetTelephoneNumberResponse' => 'Economic\\Company_SetTelephoneNumberResponse',
      'Company_GetFaxNumber' => 'Economic\\Company_GetFaxNumber',
      'Company_GetFaxNumberResponse' => 'Economic\\Company_GetFaxNumberResponse',
      'Company_GetMobileNumber' => 'Economic\\Company_GetMobileNumber',
      'Company_GetMobileNumberResponse' => 'Economic\\Company_GetMobileNumberResponse',
      'Company_GetContact' => 'Economic\\Company_GetContact',
      'Company_GetContactResponse' => 'Economic\\Company_GetContactResponse',
      'Company_GetWebSite' => 'Economic\\Company_GetWebSite',
      'Company_GetWebSiteResponse' => 'Economic\\Company_GetWebSiteResponse',
      'Company_SetWebSite' => 'Economic\\Company_SetWebSite',
      'Company_SetWebSiteResponse' => 'Economic\\Company_SetWebSiteResponse',
      'Company_GetEmail' => 'Economic\\Company_GetEmail',
      'Company_GetEmailResponse' => 'Economic\\Company_GetEmailResponse',
      'Company_SetEmail' => 'Economic\\Company_SetEmail',
      'Company_SetEmailResponse' => 'Economic\\Company_SetEmailResponse',
      'Company_GetCINumber' => 'Economic\\Company_GetCINumber',
      'Company_GetCINumberResponse' => 'Economic\\Company_GetCINumberResponse',
      'Company_SetCINumber' => 'Economic\\Company_SetCINumber',
      'Company_SetCINumberResponse' => 'Economic\\Company_SetCINumberResponse',
      'Company_GetVatNumber' => 'Economic\\Company_GetVatNumber',
      'Company_GetVatNumberResponse' => 'Economic\\Company_GetVatNumberResponse',
      'Company_GetAffiliation' => 'Economic\\Company_GetAffiliation',
      'Company_GetAffiliationResponse' => 'Economic\\Company_GetAffiliationResponse',
      'Company_SetVatNumber' => 'Economic\\Company_SetVatNumber',
      'Company_SetVatNumberResponse' => 'Economic\\Company_SetVatNumberResponse',
      'Company_GetSignUpDate' => 'Economic\\Company_GetSignUpDate',
      'Company_GetSignUpDateResponse' => 'Economic\\Company_GetSignUpDateResponse',
      'CostType_GetData' => 'Economic\\CostType_GetData',
      'CostType_GetDataResponse' => 'Economic\\CostType_GetDataResponse',
      'CostTypeData' => 'Economic\\CostTypeData',
      'CostTypeGroupHandle' => 'Economic\\CostTypeGroupHandle',
      'CostType_GetDataArray' => 'Economic\\CostType_GetDataArray',
      'ArrayOfCostTypeHandle' => 'Economic\\ArrayOfCostTypeHandle',
      'CostType_GetDataArrayResponse' => 'Economic\\CostType_GetDataArrayResponse',
      'ArrayOfCostTypeData' => 'Economic\\ArrayOfCostTypeData',
      'CostType_GetNumber' => 'Economic\\CostType_GetNumber',
      'CostType_GetNumberResponse' => 'Economic\\CostType_GetNumberResponse',
      'CostType_GetName' => 'Economic\\CostType_GetName',
      'CostType_GetNameResponse' => 'Economic\\CostType_GetNameResponse',
      'CostType_GetCostTypeGroup' => 'Economic\\CostType_GetCostTypeGroup',
      'CostType_GetCostTypeGroupResponse' => 'Economic\\CostType_GetCostTypeGroupResponse',
      'CostType_GetVatAccount' => 'Economic\\CostType_GetVatAccount',
      'CostType_GetVatAccountResponse' => 'Economic\\CostType_GetVatAccountResponse',
      'CostType_GetAll' => 'Economic\\CostType_GetAll',
      'CostType_GetAllResponse' => 'Economic\\CostType_GetAllResponse',
      'CostType_FindByNumber' => 'Economic\\CostType_FindByNumber',
      'CostType_FindByNumberResponse' => 'Economic\\CostType_FindByNumberResponse',
      'CostType_FindByNumberList' => 'Economic\\CostType_FindByNumberList',
      'CostType_FindByNumberListResponse' => 'Economic\\CostType_FindByNumberListResponse',
      'CostType_FindByName' => 'Economic\\CostType_FindByName',
      'CostType_FindByNameResponse' => 'Economic\\CostType_FindByNameResponse',
      'CostType_GetAllUpdated' => 'Economic\\CostType_GetAllUpdated',
      'CostType_GetAllUpdatedResponse' => 'Economic\\CostType_GetAllUpdatedResponse',
      'CostTypeGroup_GetData' => 'Economic\\CostTypeGroup_GetData',
      'CostTypeGroup_GetDataResponse' => 'Economic\\CostTypeGroup_GetDataResponse',
      'CostTypeGroupData' => 'Economic\\CostTypeGroupData',
      'CostTypeGroup_GetDataArray' => 'Economic\\CostTypeGroup_GetDataArray',
      'ArrayOfCostTypeGroupHandle' => 'Economic\\ArrayOfCostTypeGroupHandle',
      'CostTypeGroup_GetDataArrayResponse' => 'Economic\\CostTypeGroup_GetDataArrayResponse',
      'ArrayOfCostTypeGroupData' => 'Economic\\ArrayOfCostTypeGroupData',
      'CostTypeGroup_GetNumber' => 'Economic\\CostTypeGroup_GetNumber',
      'CostTypeGroup_GetNumberResponse' => 'Economic\\CostTypeGroup_GetNumberResponse',
      'CostTypeGroup_GetName' => 'Economic\\CostTypeGroup_GetName',
      'CostTypeGroup_GetNameResponse' => 'Economic\\CostTypeGroup_GetNameResponse',
      'CostTypeGroup_GetAccountOngoing' => 'Economic\\CostTypeGroup_GetAccountOngoing',
      'CostTypeGroup_GetAccountOngoingResponse' => 'Economic\\CostTypeGroup_GetAccountOngoingResponse',
      'CostTypeGroup_GetAccountClosed' => 'Economic\\CostTypeGroup_GetAccountClosed',
      'CostTypeGroup_GetAccountClosedResponse' => 'Economic\\CostTypeGroup_GetAccountClosedResponse',
      'CostTypeGroup_GetAll' => 'Economic\\CostTypeGroup_GetAll',
      'CostTypeGroup_GetAllResponse' => 'Economic\\CostTypeGroup_GetAllResponse',
      'CostTypeGroup_FindByNumber' => 'Economic\\CostTypeGroup_FindByNumber',
      'CostTypeGroup_FindByNumberResponse' => 'Economic\\CostTypeGroup_FindByNumberResponse',
      'CostTypeGroup_FindByName' => 'Economic\\CostTypeGroup_FindByName',
      'CostTypeGroup_FindByNameResponse' => 'Economic\\CostTypeGroup_FindByNameResponse',
      'Creditor_CreateFromData' => 'Economic\\Creditor_CreateFromData',
      'Creditor_CreateFromDataResponse' => 'Economic\\Creditor_CreateFromDataResponse',
      'Creditor_CreateFromDataArray' => 'Economic\\Creditor_CreateFromDataArray',
      'Creditor_CreateFromDataArrayResponse' => 'Economic\\Creditor_CreateFromDataArrayResponse',
      'BudgetFigure_UpdateFromDataArray' => 'Economic\\BudgetFigure_UpdateFromDataArray',
      'ArrayOfBudgetFigureData' => 'Economic\\ArrayOfBudgetFigureData',
      'BudgetFigureData' => 'Economic\\BudgetFigureData',
      'BudgetFigureHandle' => 'Economic\\BudgetFigureHandle',
      'BudgetFigure_UpdateFromDataArrayResponse' => 'Economic\\BudgetFigure_UpdateFromDataArrayResponse',
      'ArrayOfBudgetFigureHandle' => 'Economic\\ArrayOfBudgetFigureHandle',
      'BudgetFigure_UpdateFromData' => 'Economic\\BudgetFigure_UpdateFromData',
      'BudgetFigure_UpdateFromDataResponse' => 'Economic\\BudgetFigure_UpdateFromDataResponse',
      'BudgetFigure_GetData' => 'Economic\\BudgetFigure_GetData',
      'BudgetFigure_GetDataResponse' => 'Economic\\BudgetFigure_GetDataResponse',
      'BudgetFigure_GetDataArray' => 'Economic\\BudgetFigure_GetDataArray',
      'BudgetFigure_GetDataArrayResponse' => 'Economic\\BudgetFigure_GetDataArrayResponse',
      'BudgetFigure_SetAccount' => 'Economic\\BudgetFigure_SetAccount',
      'BudgetFigure_SetAccountResponse' => 'Economic\\BudgetFigure_SetAccountResponse',
      'BudgetFigure_GetAccount' => 'Economic\\BudgetFigure_GetAccount',
      'BudgetFigure_GetAccountResponse' => 'Economic\\BudgetFigure_GetAccountResponse',
      'BudgetFigure_SetText' => 'Economic\\BudgetFigure_SetText',
      'BudgetFigure_SetTextResponse' => 'Economic\\BudgetFigure_SetTextResponse',
      'BudgetFigure_GetText' => 'Economic\\BudgetFigure_GetText',
      'BudgetFigure_GetTextResponse' => 'Economic\\BudgetFigure_GetTextResponse',
      'BudgetFigure_GetFromDate' => 'Economic\\BudgetFigure_GetFromDate',
      'BudgetFigure_GetFromDateResponse' => 'Economic\\BudgetFigure_GetFromDateResponse',
      'BudgetFigure_SetFromDate' => 'Economic\\BudgetFigure_SetFromDate',
      'BudgetFigure_SetFromDateResponse' => 'Economic\\BudgetFigure_SetFromDateResponse',
      'BudgetFigure_SetToDate' => 'Economic\\BudgetFigure_SetToDate',
      'BudgetFigure_SetToDateResponse' => 'Economic\\BudgetFigure_SetToDateResponse',
      'BudgetFigure_GetToDate' => 'Economic\\BudgetFigure_GetToDate',
      'BudgetFigure_GetToDateResponse' => 'Economic\\BudgetFigure_GetToDateResponse',
      'BudgetFigure_GetAmountDefaultCurrency' => 'Economic\\BudgetFigure_GetAmountDefaultCurrency',
      'BudgetFigure_GetAmountDefaultCurrencyResponse' => 'Economic\\BudgetFigure_GetAmountDefaultCurrencyResponse',
      'BudgetFigure_GetUnit1' => 'Economic\\BudgetFigure_GetUnit1',
      'BudgetFigure_GetUnit1Response' => 'Economic\\BudgetFigure_GetUnit1Response',
      'BudgetFigure_GetUnit2' => 'Economic\\BudgetFigure_GetUnit2',
      'BudgetFigure_GetUnit2Response' => 'Economic\\BudgetFigure_GetUnit2Response',
      'BudgetFigure_GetQuantity1' => 'Economic\\BudgetFigure_GetQuantity1',
      'BudgetFigure_GetQuantity1Response' => 'Economic\\BudgetFigure_GetQuantity1Response',
      'BudgetFigure_GetQuantity2' => 'Economic\\BudgetFigure_GetQuantity2',
      'BudgetFigure_GetQuantity2Response' => 'Economic\\BudgetFigure_GetQuantity2Response',
      'BudgetFigure_SetAmountDefaultCurrency' => 'Economic\\BudgetFigure_SetAmountDefaultCurrency',
      'BudgetFigure_SetAmountDefaultCurrencyResponse' => 'Economic\\BudgetFigure_SetAmountDefaultCurrencyResponse',
      'BudgetFigure_SetDepartment' => 'Economic\\BudgetFigure_SetDepartment',
      'BudgetFigure_SetDepartmentResponse' => 'Economic\\BudgetFigure_SetDepartmentResponse',
      'BudgetFigure_GetDepartment' => 'Economic\\BudgetFigure_GetDepartment',
      'BudgetFigure_GetDepartmentResponse' => 'Economic\\BudgetFigure_GetDepartmentResponse',
      'BudgetFigure_SetDistributionKey' => 'Economic\\BudgetFigure_SetDistributionKey',
      'BudgetFigure_SetDistributionKeyResponse' => 'Economic\\BudgetFigure_SetDistributionKeyResponse',
      'BudgetFigure_GetDistributionKey' => 'Economic\\BudgetFigure_GetDistributionKey',
      'BudgetFigure_GetDistributionKeyResponse' => 'Economic\\BudgetFigure_GetDistributionKeyResponse',
      'BudgetFigure_Create' => 'Economic\\BudgetFigure_Create',
      'BudgetFigure_CreateResponse' => 'Economic\\BudgetFigure_CreateResponse',
      'BudgetFigure_Delete' => 'Economic\\BudgetFigure_Delete',
      'BudgetFigure_DeleteResponse' => 'Economic\\BudgetFigure_DeleteResponse',
      'BudgetFigure_GetAll' => 'Economic\\BudgetFigure_GetAll',
      'BudgetFigure_GetAllResponse' => 'Economic\\BudgetFigure_GetAllResponse',
      'BudgetFigure_FindByDate' => 'Economic\\BudgetFigure_FindByDate',
      'BudgetFigure_FindByDateResponse' => 'Economic\\BudgetFigure_FindByDateResponse',
      'CashBook_UpdateFromDataArray' => 'Economic\\CashBook_UpdateFromDataArray',
      'ArrayOfCashBookData' => 'Economic\\ArrayOfCashBookData',
      'CashBookData' => 'Economic\\CashBookData',
      'CashBook_UpdateFromDataArrayResponse' => 'Economic\\CashBook_UpdateFromDataArrayResponse',
      'ArrayOfCashBookHandle' => 'Economic\\ArrayOfCashBookHandle',
      'CashBook_UpdateFromData' => 'Economic\\CashBook_UpdateFromData',
      'CashBook_UpdateFromDataResponse' => 'Economic\\CashBook_UpdateFromDataResponse',
      'CashBook_GetData' => 'Economic\\CashBook_GetData',
      'CashBook_GetDataResponse' => 'Economic\\CashBook_GetDataResponse',
      'CashBook_GetDataArray' => 'Economic\\CashBook_GetDataArray',
      'CashBook_GetDataArrayResponse' => 'Economic\\CashBook_GetDataArrayResponse',
      'CashBook_GetAll' => 'Economic\\CashBook_GetAll',
      'CashBook_GetAllResponse' => 'Economic\\CashBook_GetAllResponse',
      'CashBook_FindByNumber' => 'Economic\\CashBook_FindByNumber',
      'CashBook_FindByNumberResponse' => 'Economic\\CashBook_FindByNumberResponse',
      'CashBook_FindByNumberList' => 'Economic\\CashBook_FindByNumberList',
      'CashBook_FindByNumberListResponse' => 'Economic\\CashBook_FindByNumberListResponse',
      'CashBook_FindByName' => 'Economic\\CashBook_FindByName',
      'CashBook_FindByNameResponse' => 'Economic\\CashBook_FindByNameResponse',
      'CashBook_FindByNameList' => 'Economic\\CashBook_FindByNameList',
      'CashBook_FindByNameListResponse' => 'Economic\\CashBook_FindByNameListResponse',
      'CashBook_RegisterPdfVoucher' => 'Economic\\CashBook_RegisterPdfVoucher',
      'CashBook_RegisterPdfVoucherResponse' => 'Economic\\CashBook_RegisterPdfVoucherResponse',
      'CashBook_GetNextVoucherNumber' => 'Economic\\CashBook_GetNextVoucherNumber',
      'CashBook_GetNextVoucherNumberResponse' => 'Economic\\CashBook_GetNextVoucherNumberResponse',
      'CashBook_GetEntries' => 'Economic\\CashBook_GetEntries',
      'CashBook_GetEntriesResponse' => 'Economic\\CashBook_GetEntriesResponse',
      'ArrayOfCashBookEntryHandle' => 'Economic\\ArrayOfCashBookEntryHandle',
      'CashBook_DeleteAllEntries' => 'Economic\\CashBook_DeleteAllEntries',
      'CashBook_DeleteAllEntriesResponse' => 'Economic\\CashBook_DeleteAllEntriesResponse',
      'CashBook_Book' => 'Economic\\CashBook_Book',
      'CashBook_BookResponse' => 'Economic\\CashBook_BookResponse',
      'CashBook_BookWithDate' => 'Economic\\CashBook_BookWithDate',
      'CashBook_BookWithDateResponse' => 'Economic\\CashBook_BookWithDateResponse',
      'CashBook_BookWithDateClosedPeriod' => 'Economic\\CashBook_BookWithDateClosedPeriod',
      'CashBook_BookWithDateClosedPeriodResponse' => 'Economic\\CashBook_BookWithDateClosedPeriodResponse',
      'CashBook_GetNumber' => 'Economic\\CashBook_GetNumber',
      'CashBook_GetNumberResponse' => 'Economic\\CashBook_GetNumberResponse',
      'CashBook_GetName' => 'Economic\\CashBook_GetName',
      'CashBook_GetNameResponse' => 'Economic\\CashBook_GetNameResponse',
      'CashBook_SetName' => 'Economic\\CashBook_SetName',
      'CashBook_SetNameResponse' => 'Economic\\CashBook_SetNameResponse',
      'CashBookEntry_CreateFromData' => 'Economic\\CashBookEntry_CreateFromData',
      'CashBookEntryData' => 'Economic\\CashBookEntryData',
      'CashBookEntry_CreateFromDataResponse' => 'Economic\\CashBookEntry_CreateFromDataResponse',
      'Entry_CopyVoucher' => 'Economic\\Entry_CopyVoucher',
      'Entry_CopyVoucherResponse' => 'Economic\\Entry_CopyVoucherResponse',
      'Entry_ReverseVoucher' => 'Economic\\Entry_ReverseVoucher',
      'Entry_ReverseVoucherResponse' => 'Economic\\Entry_ReverseVoucherResponse',
      'Entry_TurnVoucher' => 'Economic\\Entry_TurnVoucher',
      'Entry_TurnVoucherResponse' => 'Economic\\Entry_TurnVoucherResponse',
      'CashBookEntry_CreateFromDataArray' => 'Economic\\CashBookEntry_CreateFromDataArray',
      'ArrayOfCashBookEntryData' => 'Economic\\ArrayOfCashBookEntryData',
      'CashBookEntry_CreateFromDataArrayResponse' => 'Economic\\CashBookEntry_CreateFromDataArrayResponse',
      'CashBookEntry_UpdateFromDataArray' => 'Economic\\CashBookEntry_UpdateFromDataArray',
      'CashBookEntry_UpdateFromDataArrayResponse' => 'Economic\\CashBookEntry_UpdateFromDataArrayResponse',
      'CashBookEntry_UpdateFromData' => 'Economic\\CashBookEntry_UpdateFromData',
      'CashBookEntry_UpdateFromDataResponse' => 'Economic\\CashBookEntry_UpdateFromDataResponse',
      'CashBookEntry_GetData' => 'Economic\\CashBookEntry_GetData',
      'CashBookEntry_GetDataResponse' => 'Economic\\CashBookEntry_GetDataResponse',
      'CashBookEntry_GetDataArray' => 'Economic\\CashBookEntry_GetDataArray',
      'CashBookEntry_GetDataArrayResponse' => 'Economic\\CashBookEntry_GetDataArrayResponse',
      'CashBookEntry_GetType' => 'Economic\\CashBookEntry_GetType',
      'CashBookEntry_GetTypeResponse' => 'Economic\\CashBookEntry_GetTypeResponse',
      'CashBookEntry_GetCashBook' => 'Economic\\CashBookEntry_GetCashBook',
      'CashBookEntry_GetCashBookResponse' => 'Economic\\CashBookEntry_GetCashBookResponse',
      'CashBookEntry_SetDebtor' => 'Economic\\CashBookEntry_SetDebtor',
      'CashBookEntry_SetDebtorResponse' => 'Economic\\CashBookEntry_SetDebtorResponse',
      'CashBookEntry_GetDebtor' => 'Economic\\CashBookEntry_GetDebtor',
      'CashBookEntry_GetDebtorResponse' => 'Economic\\CashBookEntry_GetDebtorResponse',
      'CashBookEntry_GetCreditor' => 'Economic\\CashBookEntry_GetCreditor',
      'CashBookEntry_GetCreditorResponse' => 'Economic\\CashBookEntry_GetCreditorResponse',
      'CashBookEntry_SetCreditor' => 'Economic\\CashBookEntry_SetCreditor',
      'CashBookEntry_SetCreditorResponse' => 'Economic\\CashBookEntry_SetCreditorResponse',
      'CashBookEntry_SetAccount' => 'Economic\\CashBookEntry_SetAccount',
      'CashBookEntry_SetAccountResponse' => 'Economic\\CashBookEntry_SetAccountResponse',
      'CashBookEntry_GetAccount' => 'Economic\\CashBookEntry_GetAccount',
      'CashBookEntry_GetAccountResponse' => 'Economic\\CashBookEntry_GetAccountResponse',
      'CashBookEntry_GetContraAccount' => 'Economic\\CashBookEntry_GetContraAccount',
      'CashBookEntry_GetContraAccountResponse' => 'Economic\\CashBookEntry_GetContraAccountResponse',
      'CashBookEntry_SetContraAccount' => 'Economic\\CashBookEntry_SetContraAccount',
      'CashBookEntry_SetContraAccountResponse' => 'Economic\\CashBookEntry_SetContraAccountResponse',
      'CashBookEntry_SetDate' => 'Economic\\CashBookEntry_SetDate',
      'CashBookEntry_SetDateResponse' => 'Economic\\CashBookEntry_SetDateResponse',
      'CashBookEntry_GetDate' => 'Economic\\CashBookEntry_GetDate',
      'CashBookEntry_GetDateResponse' => 'Economic\\CashBookEntry_GetDateResponse',
      'CashBookEntry_SetVoucherNumber' => 'Economic\\CashBookEntry_SetVoucherNumber',
      'CashBookEntry_SetVoucherNumberResponse' => 'Economic\\CashBookEntry_SetVoucherNumberResponse',
      'CashBookEntry_GetVoucherNumber' => 'Economic\\CashBookEntry_GetVoucherNumber',
      'CashBookEntry_GetVoucherNumberResponse' => 'Economic\\CashBookEntry_GetVoucherNumberResponse',
      'CashBookEntry_GetText' => 'Economic\\CashBookEntry_GetText',
      'CashBookEntry_GetTextResponse' => 'Economic\\CashBookEntry_GetTextResponse',
      'CashBookEntry_SetText' => 'Economic\\CashBookEntry_SetText',
      'CashBookEntry_SetTextResponse' => 'Economic\\CashBookEntry_SetTextResponse',
      'CashBookEntry_GetAmountDefaultCurrency' => 'Economic\\CashBookEntry_GetAmountDefaultCurrency',
      'CashBookEntry_GetAmountDefaultCurrencyResponse' => 'Economic\\CashBookEntry_GetAmountDefaultCurrencyResponse',
      'CashBookEntry_SetAmountDefaultCurrency' => 'Economic\\CashBookEntry_SetAmountDefaultCurrency',
      'CashBookEntry_SetAmountDefaultCurrencyResponse' => 'Economic\\CashBookEntry_SetAmountDefaultCurrencyResponse',
      'CashBookEntry_GetCurrency' => 'Economic\\CashBookEntry_GetCurrency',
      'CashBookEntry_GetCurrencyResponse' => 'Economic\\CashBookEntry_GetCurrencyResponse',
      'CashBookEntry_SetCurrency' => 'Economic\\CashBookEntry_SetCurrency',
      'CashBookEntry_SetCurrencyResponse' => 'Economic\\CashBookEntry_SetCurrencyResponse',
      'CashBookEntry_SetAmount' => 'Economic\\CashBookEntry_SetAmount',
      'CashBookEntry_SetAmountResponse' => 'Economic\\CashBookEntry_SetAmountResponse',
      'CashBookEntry_GetAmount' => 'Economic\\CashBookEntry_GetAmount',
      'CashBookEntry_GetAmountResponse' => 'Economic\\CashBookEntry_GetAmountResponse',
      'CashBookEntry_SetVatAccount' => 'Economic\\CashBookEntry_SetVatAccount',
      'CashBookEntry_SetVatAccountResponse' => 'Economic\\CashBookEntry_SetVatAccountResponse',
      'CashBookEntry_GetVatAccount' => 'Economic\\CashBookEntry_GetVatAccount',
      'CashBookEntry_GetVatAccountResponse' => 'Economic\\CashBookEntry_GetVatAccountResponse',
      'CashBookEntry_GetContraVatAccount' => 'Economic\\CashBookEntry_GetContraVatAccount',
      'CashBookEntry_GetContraVatAccountResponse' => 'Economic\\CashBookEntry_GetContraVatAccountResponse',
      'CashBookEntry_SetContraVatAccount' => 'Economic\\CashBookEntry_SetContraVatAccount',
      'CashBookEntry_SetContraVatAccountResponse' => 'Economic\\CashBookEntry_SetContraVatAccountResponse',
      'CashBookEntry_SetDebtorInvoiceNumber' => 'Economic\\CashBookEntry_SetDebtorInvoiceNumber',
      'CashBookEntry_SetDebtorInvoiceNumberResponse' => 'Economic\\CashBookEntry_SetDebtorInvoiceNumberResponse',
      'CashBookEntry_GetDebtorInvoiceNumber' => 'Economic\\CashBookEntry_GetDebtorInvoiceNumber',
      'CashBookEntry_GetDebtorInvoiceNumberResponse' => 'Economic\\CashBookEntry_GetDebtorInvoiceNumberResponse',
      'CashBookEntry_GetCreditorInvoiceNumber' => 'Economic\\CashBookEntry_GetCreditorInvoiceNumber',
      'CashBookEntry_GetCreditorInvoiceNumberResponse' => 'Economic\\CashBookEntry_GetCreditorInvoiceNumberResponse',
      'CashBookEntry_SetCreditorInvoiceNumber' => 'Economic\\CashBookEntry_SetCreditorInvoiceNumber',
      'CashBookEntry_SetCreditorInvoiceNumberResponse' => 'Economic\\CashBookEntry_SetCreditorInvoiceNumberResponse',
      'CashBookEntry_SetDueDate' => 'Economic\\CashBookEntry_SetDueDate',
      'CashBookEntry_SetDueDateResponse' => 'Economic\\CashBookEntry_SetDueDateResponse',
      'Account_CreateFromData' => 'Economic\\Account_CreateFromData',
      'AccountData' => 'Economic\\AccountData',
      'Account_CreateFromDataResponse' => 'Economic\\Account_CreateFromDataResponse',
      'Account_CreateFromDataArray' => 'Economic\\Account_CreateFromDataArray',
      'ArrayOfAccountData' => 'Economic\\ArrayOfAccountData',
      'Account_CreateFromDataArrayResponse' => 'Economic\\Account_CreateFromDataArrayResponse',
      'Account_UpdateFromDataArray' => 'Economic\\Account_UpdateFromDataArray',
      'Account_UpdateFromDataArrayResponse' => 'Economic\\Account_UpdateFromDataArrayResponse',
      'Account_UpdateFromData' => 'Economic\\Account_UpdateFromData',
      'Account_UpdateFromDataResponse' => 'Economic\\Account_UpdateFromDataResponse',
      'Account_GetData' => 'Economic\\Account_GetData',
      'Account_GetDataResponse' => 'Economic\\Account_GetDataResponse',
      'Account_GetDataArray' => 'Economic\\Account_GetDataArray',
      'Account_GetDataArrayResponse' => 'Economic\\Account_GetDataArrayResponse',
      'Account_Create' => 'Economic\\Account_Create',
      'Account_CreateResponse' => 'Economic\\Account_CreateResponse',
      'Account_GetAll' => 'Economic\\Account_GetAll',
      'Account_GetAllResponse' => 'Economic\\Account_GetAllResponse',
      'Account_GetAllUpdated' => 'Economic\\Account_GetAllUpdated',
      'Account_GetAllUpdatedResponse' => 'Economic\\Account_GetAllUpdatedResponse',
      'Account_FindByNumber' => 'Economic\\Account_FindByNumber',
      'Account_FindByNumberResponse' => 'Economic\\Account_FindByNumberResponse',
      'Account_FindByNumberList' => 'Economic\\Account_FindByNumberList',
      'Account_FindByNumberListResponse' => 'Economic\\Account_FindByNumberListResponse',
      'Account_FindByName' => 'Economic\\Account_FindByName',
      'Account_FindByNameResponse' => 'Economic\\Account_FindByNameResponse',
      'Account_GetEntryTotalsPerDate' => 'Economic\\Account_GetEntryTotalsPerDate',
      'Account_GetEntryTotalsPerDateResponse' => 'Economic\\Account_GetEntryTotalsPerDateResponse',
      'ArrayOfAccountSumTotal' => 'Economic\\ArrayOfAccountSumTotal',
      'AccountSumTotal' => 'Economic\\AccountSumTotal',
      'Account_GetEntryTotalsPerCalendarMonth' => 'Economic\\Account_GetEntryTotalsPerCalendarMonth',
      'Account_GetEntryTotalsPerCalendarMonthResponse' => 'Economic\\Account_GetEntryTotalsPerCalendarMonthResponse',
      'ArrayOfAccountSumTotalByDateInterval' => 'Economic\\ArrayOfAccountSumTotalByDateInterval',
      'AccountSumTotalByDateInterval' => 'Economic\\AccountSumTotalByDateInterval',
      'Account_GetEntryTotalsPerCalendarYear' => 'Economic\\Account_GetEntryTotalsPerCalendarYear',
      'Account_GetEntryTotalsPerCalendarYearResponse' => 'Economic\\Account_GetEntryTotalsPerCalendarYearResponse',
      'Account_GetEntryTotalsByDate' => 'Economic\\Account_GetEntryTotalsByDate',
      'Account_GetEntryTotalsByDateResponse' => 'Economic\\Account_GetEntryTotalsByDateResponse',
      'Account_Delete' => 'Economic\\Account_Delete',
      'Account_DeleteResponse' => 'Economic\\Account_DeleteResponse',
      'Account_GetBudgetFigures' => 'Economic\\Account_GetBudgetFigures',
      'Account_GetBudgetFiguresResponse' => 'Economic\\Account_GetBudgetFiguresResponse',
      'Account_GetBudgetFiguresByDate' => 'Economic\\Account_GetBudgetFiguresByDate',
      'Account_GetBudgetFiguresByDateResponse' => 'Economic\\Account_GetBudgetFiguresByDateResponse',
      'Account_GetEntriesByDate' => 'Economic\\Account_GetEntriesByDate',
      'Account_GetEntriesByDateResponse' => 'Economic\\Account_GetEntriesByDateResponse',
      'Account_GetEntriesByNumber' => 'Economic\\Account_GetEntriesByNumber',
      'Account_GetEntriesByNumberResponse' => 'Economic\\Account_GetEntriesByNumberResponse',
      'Account_GetSumIntervals' => 'Economic\\Account_GetSumIntervals',
      'Account_GetSumIntervalsResponse' => 'Economic\\Account_GetSumIntervalsResponse',
      'Account_GetNumber' => 'Economic\\Account_GetNumber',
      'Account_GetNumberResponse' => 'Economic\\Account_GetNumberResponse',
      'Account_GetName' => 'Economic\\Account_GetName',
      'Account_GetNameResponse' => 'Economic\\Account_GetNameResponse',
      'Account_SetName' => 'Economic\\Account_SetName',
      'Account_SetNameResponse' => 'Economic\\Account_SetNameResponse',
      'Account_GetType' => 'Economic\\Account_GetType',
      'Account_GetTypeResponse' => 'Economic\\Account_GetTypeResponse',
      'Account_SetType' => 'Economic\\Account_SetType',
      'Account_SetTypeResponse' => 'Economic\\Account_SetTypeResponse',
      'Account_GetDebitCredit' => 'Economic\\Account_GetDebitCredit',
      'Account_GetDebitCreditResponse' => 'Economic\\Account_GetDebitCreditResponse',
      'Account_SetDebitCredit' => 'Economic\\Account_SetDebitCredit',
      'Account_SetDebitCreditResponse' => 'Economic\\Account_SetDebitCreditResponse',
      'Account_GetIsAccessible' => 'Economic\\Account_GetIsAccessible',
      'Account_GetIsAccessibleResponse' => 'Economic\\Account_GetIsAccessibleResponse',
      'Account_SetIsAccessible' => 'Economic\\Account_SetIsAccessible',
      'Account_SetIsAccessibleResponse' => 'Economic\\Account_SetIsAccessibleResponse',
      'Account_GetBlockDirectEntries' => 'Economic\\Account_GetBlockDirectEntries',
      'Account_GetBlockDirectEntriesResponse' => 'Economic\\Account_GetBlockDirectEntriesResponse',
      'Account_SetBlockDirectEntries' => 'Economic\\Account_SetBlockDirectEntries',
      'Account_SetBlockDirectEntriesResponse' => 'Economic\\Account_SetBlockDirectEntriesResponse',
      'Account_GetVatAccount' => 'Economic\\Account_GetVatAccount',
      'Account_GetVatAccountResponse' => 'Economic\\Account_GetVatAccountResponse',
      'Account_SetVatAccount' => 'Economic\\Account_SetVatAccount',
      'Account_SetVatAccountResponse' => 'Economic\\Account_SetVatAccountResponse',
      'Account_GetContraAccount' => 'Economic\\Account_GetContraAccount',
      'Account_GetContraAccountResponse' => 'Economic\\Account_GetContraAccountResponse',
      'Account_SetContraAccount' => 'Economic\\Account_SetContraAccount',
      'Account_SetContraAccountResponse' => 'Economic\\Account_SetContraAccountResponse',
      'Account_GetOpeningAccount' => 'Economic\\Account_GetOpeningAccount',
      'Account_GetOpeningAccountResponse' => 'Economic\\Account_GetOpeningAccountResponse',
      'Account_SetOpeningAccount' => 'Economic\\Account_SetOpeningAccount',
      'Account_SetOpeningAccountResponse' => 'Economic\\Account_SetOpeningAccountResponse',
      'Account_GetTotalFrom' => 'Economic\\Account_GetTotalFrom',
      'Account_GetTotalFromResponse' => 'Economic\\Account_GetTotalFromResponse',
      'Account_SetTotalFrom' => 'Economic\\Account_SetTotalFrom',
      'Account_SetTotalFromResponse' => 'Economic\\Account_SetTotalFromResponse',
      'Account_GetBalance' => 'Economic\\Account_GetBalance',
      'Account_GetBalanceResponse' => 'Economic\\Account_GetBalanceResponse',
      'Account_GetDepartment' => 'Economic\\Account_GetDepartment',
      'Account_GetDepartmentResponse' => 'Economic\\Account_GetDepartmentResponse',
      'Account_SetDepartment' => 'Economic\\Account_SetDepartment',
      'Account_SetDepartmentResponse' => 'Economic\\Account_SetDepartmentResponse',
      'Account_GetDistributionKey' => 'Economic\\Account_GetDistributionKey',
      'Account_GetDistributionKeyResponse' => 'Economic\\Account_GetDistributionKeyResponse',
      'Account_SetDistributionKey' => 'Economic\\Account_SetDistributionKey',
      'Account_SetDistributionKeyResponse' => 'Economic\\Account_SetDistributionKeyResponse',
      'AccountingPeriod_GetData' => 'Economic\\AccountingPeriod_GetData',
      'AccountingPeriodHandle' => 'Economic\\AccountingPeriodHandle',
      'AccountingPeriod_GetDataResponse' => 'Economic\\AccountingPeriod_GetDataResponse',
      'AccountingPeriodData' => 'Economic\\AccountingPeriodData',
      'AccountingYearHandle' => 'Economic\\AccountingYearHandle',
      'AccountingPeriod_GetDataArray' => 'Economic\\AccountingPeriod_GetDataArray',
      'ArrayOfAccountingPeriodHandle' => 'Economic\\ArrayOfAccountingPeriodHandle',
      'AccountingPeriod_GetDataArrayResponse' => 'Economic\\AccountingPeriod_GetDataArrayResponse',
      'ArrayOfAccountingPeriodData' => 'Economic\\ArrayOfAccountingPeriodData',
      'AccountingPeriod_GetAll' => 'Economic\\AccountingPeriod_GetAll',
      'AccountingPeriod_GetAllResponse' => 'Economic\\AccountingPeriod_GetAllResponse',
      'AccountingPeriod_GetAllUpdated' => 'Economic\\AccountingPeriod_GetAllUpdated',
      'AccountingPeriod_GetAllUpdatedResponse' => 'Economic\\AccountingPeriod_GetAllUpdatedResponse',
      'AccountingPeriod_GetPeriod' => 'Economic\\AccountingPeriod_GetPeriod',
      'AccountingPeriod_GetPeriodResponse' => 'Economic\\AccountingPeriod_GetPeriodResponse',
      'AccountingPeriod_GetAccountingYear' => 'Economic\\AccountingPeriod_GetAccountingYear',
      'AccountingPeriod_GetAccountingYearResponse' => 'Economic\\AccountingPeriod_GetAccountingYearResponse',
      'AccountingPeriod_GetFromDate' => 'Economic\\AccountingPeriod_GetFromDate',
      'AccountingPeriod_GetFromDateResponse' => 'Economic\\AccountingPeriod_GetFromDateResponse',
      'AccountingPeriod_GetToDate' => 'Economic\\AccountingPeriod_GetToDate',
      'AccountingPeriod_GetToDateResponse' => 'Economic\\AccountingPeriod_GetToDateResponse',
      'AccountingPeriod_GetStatus' => 'Economic\\AccountingPeriod_GetStatus',
      'AccountingPeriod_GetStatusResponse' => 'Economic\\AccountingPeriod_GetStatusResponse',
      'AccountingYear_CreateFromData' => 'Economic\\AccountingYear_CreateFromData',
      'AccountingYearData' => 'Economic\\AccountingYearData',
      'AccountingYear_CreateFromDataResponse' => 'Economic\\AccountingYear_CreateFromDataResponse',
      'AccountingYear_CreateFromDataArray' => 'Economic\\AccountingYear_CreateFromDataArray',
      'ArrayOfAccountingYearData' => 'Economic\\ArrayOfAccountingYearData',
      'AccountingYear_CreateFromDataArrayResponse' => 'Economic\\AccountingYear_CreateFromDataArrayResponse',
      'ArrayOfAccountingYearHandle' => 'Economic\\ArrayOfAccountingYearHandle',
      'AccountingYear_GetData' => 'Economic\\AccountingYear_GetData',
      'AccountingYear_GetDataResponse' => 'Economic\\AccountingYear_GetDataResponse',
      'AccountingYear_GetDataArray' => 'Economic\\AccountingYear_GetDataArray',
      'AccountingYear_GetDataArrayResponse' => 'Economic\\AccountingYear_GetDataArrayResponse',
      'AccountingYear_GetYear' => 'Economic\\AccountingYear_GetYear',
      'AccountingYear_GetYearResponse' => 'Economic\\AccountingYear_GetYearResponse',
      'AccountingYear_GetFromDate' => 'Economic\\AccountingYear_GetFromDate',
      'AccountingYear_GetFromDateResponse' => 'Economic\\AccountingYear_GetFromDateResponse',
      'AccountingYear_GetToDate' => 'Economic\\AccountingYear_GetToDate',
      'AccountingYear_GetToDateResponse' => 'Economic\\AccountingYear_GetToDateResponse',
      'AccountingYear_GetIsClosed' => 'Economic\\AccountingYear_GetIsClosed',
      'AccountingYear_GetIsClosedResponse' => 'Economic\\AccountingYear_GetIsClosedResponse',
      'AccountingYear_Create' => 'Economic\\AccountingYear_Create',
      'AccountingYear_CreateResponse' => 'Economic\\AccountingYear_CreateResponse',
      'AccountingYear_Delete' => 'Economic\\AccountingYear_Delete',
      'AccountingYear_DeleteResponse' => 'Economic\\AccountingYear_DeleteResponse',
      'AccountingYear_GetAll' => 'Economic\\AccountingYear_GetAll',
      'AccountingYear_GetAllResponse' => 'Economic\\AccountingYear_GetAllResponse',
      'AccountingYear_FindByDate' => 'Economic\\AccountingYear_FindByDate',
      'AccountingYear_FindByDateResponse' => 'Economic\\AccountingYear_FindByDateResponse',
      'AccountingYear_GetPeriods' => 'Economic\\AccountingYear_GetPeriods',
      'AccountingYear_GetPeriodsResponse' => 'Economic\\AccountingYear_GetPeriodsResponse',
      'Activity_GetData' => 'Economic\\Activity_GetData',
      'Activity_GetDataResponse' => 'Economic\\Activity_GetDataResponse',
      'Activity_GetDataArray' => 'Economic\\Activity_GetDataArray',
      'Activity_GetDataArrayResponse' => 'Economic\\Activity_GetDataArrayResponse',
      'Activity_GetAll' => 'Economic\\Activity_GetAll',
      'Activity_GetAllResponse' => 'Economic\\Activity_GetAllResponse',
      'Activity_FindByNumber' => 'Economic\\Activity_FindByNumber',
      'Activity_FindByNumberResponse' => 'Economic\\Activity_FindByNumberResponse',
      'Activity_FindByNumberList' => 'Economic\\Activity_FindByNumberList',
      'Activity_FindByNumberListResponse' => 'Economic\\Activity_FindByNumberListResponse',
      'Activity_GetNumber' => 'Economic\\Activity_GetNumber',
      'Activity_GetNumberResponse' => 'Economic\\Activity_GetNumberResponse',
      'Activity_GetName' => 'Economic\\Activity_GetName',
      'Activity_GetNameResponse' => 'Economic\\Activity_GetNameResponse',
      'BankPaymentType_GetData' => 'Economic\\BankPaymentType_GetData',
      'BankPaymentType_GetDataResponse' => 'Economic\\BankPaymentType_GetDataResponse',
      'BankPaymentTypeData' => 'Economic\\BankPaymentTypeData',
      'BankPaymentType_GetDataArray' => 'Economic\\BankPaymentType_GetDataArray',
      'ArrayOfBankPaymentTypeHandle' => 'Economic\\ArrayOfBankPaymentTypeHandle',
      'BankPaymentType_GetDataArrayResponse' => 'Economic\\BankPaymentType_GetDataArrayResponse',
      'ArrayOfBankPaymentTypeData' => 'Economic\\ArrayOfBankPaymentTypeData',
      'BankPaymentType_GetAll' => 'Economic\\BankPaymentType_GetAll',
      'BankPaymentType_GetAllResponse' => 'Economic\\BankPaymentType_GetAllResponse',
      'BankPaymentType_FindByName' => 'Economic\\BankPaymentType_FindByName',
      'BankPaymentType_FindByNameResponse' => 'Economic\\BankPaymentType_FindByNameResponse',
      'BankPaymentType_FindByNumber' => 'Economic\\BankPaymentType_FindByNumber',
      'BankPaymentType_FindByNumberResponse' => 'Economic\\BankPaymentType_FindByNumberResponse',
      'BankPaymentType_FindByNumberList' => 'Economic\\BankPaymentType_FindByNumberList',
      'BankPaymentType_FindByNumberListResponse' => 'Economic\\BankPaymentType_FindByNumberListResponse',
      'BankPaymentType_GetNumber' => 'Economic\\BankPaymentType_GetNumber',
      'BankPaymentType_GetNumberResponse' => 'Economic\\BankPaymentType_GetNumberResponse',
      'BankPaymentType_GetName' => 'Economic\\BankPaymentType_GetName',
      'BankPaymentType_GetNameResponse' => 'Economic\\BankPaymentType_GetNameResponse',
      'BudgetFigure_CreateFromData' => 'Economic\\BudgetFigure_CreateFromData',
      'BudgetFigure_CreateFromDataResponse' => 'Economic\\BudgetFigure_CreateFromDataResponse',
      'BudgetFigure_CreateFromDataArray' => 'Economic\\BudgetFigure_CreateFromDataArray',
      'BudgetFigure_CreateFromDataArrayResponse' => 'Economic\\BudgetFigure_CreateFromDataArrayResponse',
      'Connect' => 'Economic\\Connect',
      'ConnectResponse' => 'Economic\\ConnectResponse',
      'ConnectAsAdministrator' => 'Economic\\ConnectAsAdministrator',
      'ConnectAsAdministratorResponse' => 'Economic\\ConnectAsAdministratorResponse',
      'ConnectAsAdministratorWithCustomerNumber' => 'Economic\\ConnectAsAdministratorWithCustomerNumber',
      'ConnectAsAdministratorWithCustomerNumberResponse' => 'Economic\\ConnectAsAdministratorWithCustomerNumberResponse',
      'ConnectWithToken' => 'Economic\\ConnectWithToken',
      'ConnectWithTokenResponse' => 'Economic\\ConnectWithTokenResponse',
      'Disconnect' => 'Economic\\Disconnect',
      'DisconnectResponse' => 'Economic\\DisconnectResponse',
      'GetApiInformation' => 'Economic\\GetApiInformation',
      'GetApiInformationResponse' => 'Economic\\GetApiInformationResponse',
    );

	/**
	 * @return EconomicWebService
	 */
	public static function Create()
	{
		return new static([
			'trace'        => true,
			'exceptions'   => true,
			'soap_version' => SOAP_1_2,
			'encoding'     => 'UTF-8'
		]);
	}

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = self::WSDLUrl)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'Economic.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Sets the distribution in percent of the first contra account for a term of payment if the type is TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: A value between 0 and 100.
     *
     * @param TermOfPayment_SetDistributionInPercent $parameters
     * @return TermOfPayment_SetDistributionInPercentResponse
     */
    public function TermOfPayment_SetDistributionInPercent(TermOfPayment_SetDistributionInPercent $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetDistributionInPercent', array($parameters));
    }

    /**
     * Gets the distribution in percent for the second contra account if the type of the term of payment is TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetDistributionInPercent2 $parameters
     * @return TermOfPayment_GetDistributionInPercent2Response
     */
    public function TermOfPayment_GetDistributionInPercent2(TermOfPayment_GetDistributionInPercent2 $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDistributionInPercent2', array($parameters));
    }

    /**
     * Approves the entries passed to the function. No return value.<br />Parameters: entries: The time entries to be approved.
     *
     * @param TimeEntry_ApproveEntries $parameters
     * @return TimeEntry_ApproveEntriesResponse
     */
    public function TimeEntry_ApproveEntries(TimeEntry_ApproveEntries $parameters)
    {
      return $this->__soapCall('TimeEntry_ApproveEntries', array($parameters));
    }

    /**
     * Creates a new time entry from a data object.<br />Parameters: data: The data object that specifies the properties of the new time entry.
     *
     * @param TimeEntry_CreateFromData $parameters
     * @return TimeEntry_CreateFromDataResponse
     */
    public function TimeEntry_CreateFromData(TimeEntry_CreateFromData $parameters)
    {
      return $this->__soapCall('TimeEntry_CreateFromData', array($parameters));
    }

    /**
     * Creates new time entries from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new time entries.
     *
     * @param TimeEntry_CreateFromDataArray $parameters
     * @return TimeEntry_CreateFromDataArrayResponse
     */
    public function TimeEntry_CreateFromDataArray(TimeEntry_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('TimeEntry_CreateFromDataArray', array($parameters));
    }

    /**
     * Update time entries from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param TimeEntry_UpdateFromDataArray $parameters
     * @return TimeEntry_UpdateFromDataArrayResponse
     */
    public function TimeEntry_UpdateFromDataArray(TimeEntry_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('TimeEntry_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a time entry from a data object.<br />Parameters: data: The data object.
     *
     * @param TimeEntry_UpdateFromData $parameters
     * @return TimeEntry_UpdateFromDataResponse
     */
    public function TimeEntry_UpdateFromData(TimeEntry_UpdateFromData $parameters)
    {
      return $this->__soapCall('TimeEntry_UpdateFromData', array($parameters));
    }

    /**
     * Returns a time entry data object for a given time entry.<br />Parameters: entityHandle: A handle for the time entry.
     *
     * @param TimeEntry_GetData $parameters
     * @return TimeEntry_GetDataResponse
     */
    public function TimeEntry_GetData(TimeEntry_GetData $parameters)
    {
      return $this->__soapCall('TimeEntry_GetData', array($parameters));
    }

    /**
     * Returns time entries data objects for a given set of time entry handles.<br />Parameters: entityHandles: An array of the time entries handles.
     *
     * @param TimeEntry_GetDataArray $parameters
     * @return TimeEntry_GetDataArrayResponse
     */
    public function TimeEntry_GetDataArray(TimeEntry_GetDataArray $parameters)
    {
      return $this->__soapCall('TimeEntry_GetDataArray', array($parameters));
    }

    /**
     * Creates a new time entry.<br />Parameters: project: The project of the new time entry. activity: The activity of the new time entry. employee: The employee of the new time entry. date: The date of the new time entry. text: The text of the new time entry. numberOfHours: The number of hours of the new time entry.
     *
     * @param TimeEntry_Create $parameters
     * @return TimeEntry_CreateResponse
     */
    public function TimeEntry_Create(TimeEntry_Create $parameters)
    {
      return $this->__soapCall('TimeEntry_Create', array($parameters));
    }

    /**
     * Creates a new time entry on the authenticated user.<br />Parameters: project: The project of the new time entry. activity: The activity of the new time entry. date: The date of the new time entry. text: The text of the new time entry. numberOfHours: The number of hours of the new time entry.
     *
     * @param TimeEntry_CreateOnCurrentUser $parameters
     * @return TimeEntry_CreateOnCurrentUserResponse
     */
    public function TimeEntry_CreateOnCurrentUser(TimeEntry_CreateOnCurrentUser $parameters)
    {
      return $this->__soapCall('TimeEntry_CreateOnCurrentUser', array($parameters));
    }

    /**
     * Returns handles for all time entries.
     *
     * @param TimeEntry_GetAll $parameters
     * @return TimeEntry_GetAllResponse
     */
    public function TimeEntry_GetAll(TimeEntry_GetAll $parameters)
    {
      return $this->__soapCall('TimeEntry_GetAll', array($parameters));
    }

    /**
     * Return handles for all time entries from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param TimeEntry_GetAllUpdated $parameters
     * @return TimeEntry_GetAllUpdatedResponse
     */
    public function TimeEntry_GetAllUpdated(TimeEntry_GetAllUpdated $parameters)
    {
      return $this->__soapCall('TimeEntry_GetAllUpdated', array($parameters));
    }

    /**
     * Returns an array of handles for the TimeEntry entries with numbers in the given interval.<br />Parameters: fromDate: The beginning of the interval. toDate: the end of the interval.
     *
     * @param TimeEntry_FindApprovedByDate $parameters
     * @return TimeEntry_FindApprovedByDateResponse
     */
    public function TimeEntry_FindApprovedByDate(TimeEntry_FindApprovedByDate $parameters)
    {
      return $this->__soapCall('TimeEntry_FindApprovedByDate', array($parameters));
    }

    /**
     * Deletes a time entry.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_Delete $parameters
     * @return TimeEntry_DeleteResponse
     */
    public function TimeEntry_Delete(TimeEntry_Delete $parameters)
    {
      return $this->__soapCall('TimeEntry_Delete', array($parameters));
    }

    /**
     * @param TimeEntry_GetId $parameters
     * @return TimeEntry_GetIdResponse
     */
    public function TimeEntry_GetId(TimeEntry_GetId $parameters)
    {
      return $this->__soapCall('TimeEntry_GetId', array($parameters));
    }

    /**
     * Gets handle for the project of a time entry. To set, use UpdateFromData or UpdateFromDataArray.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetProject $parameters
     * @return TimeEntry_GetProjectResponse
     */
    public function TimeEntry_GetProject(TimeEntry_GetProject $parameters)
    {
      return $this->__soapCall('TimeEntry_GetProject', array($parameters));
    }

    /**
     * Gets handle for the activity of a time entry. To set, use UpdateFromData or UpdateFromDataArray.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetActivity $parameters
     * @return TimeEntry_GetActivityResponse
     */
    public function TimeEntry_GetActivity(TimeEntry_GetActivity $parameters)
    {
      return $this->__soapCall('TimeEntry_GetActivity', array($parameters));
    }

    /**
     * Gets a handle for the employee of a time entry. To set, use UpdateFromData or UpdateFromDataArray.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetEmployee $parameters
     * @return TimeEntry_GetEmployeeResponse
     */
    public function TimeEntry_GetEmployee(TimeEntry_GetEmployee $parameters)
    {
      return $this->__soapCall('TimeEntry_GetEmployee', array($parameters));
    }

    /**
     * Gets the date of a time entry. To set, use UpdateFromData or UpdateFromDataArray.<br />Parameters: ctimeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetDate $parameters
     * @return TimeEntry_GetDateResponse
     */
    public function TimeEntry_GetDate(TimeEntry_GetDate $parameters)
    {
      return $this->__soapCall('TimeEntry_GetDate', array($parameters));
    }

    /**
     * Gets the text of a time entry.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetText $parameters
     * @return TimeEntry_GetTextResponse
     */
    public function TimeEntry_GetText(TimeEntry_GetText $parameters)
    {
      return $this->__soapCall('TimeEntry_GetText', array($parameters));
    }

    /**
     * Sets the text of a time entry.<br />Parameters: timeEntryHandle: Handle for the time entry. value: new text value.
     *
     * @param TimeEntry_SetText $parameters
     * @return TimeEntry_SetTextResponse
     */
    public function TimeEntry_SetText(TimeEntry_SetText $parameters)
    {
      return $this->__soapCall('TimeEntry_SetText', array($parameters));
    }

    /**
     * Gets the number of hours of a time entry. To set, use UpdateFromData or UpdateFromDataArray.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetNumberOfHours $parameters
     * @return TimeEntry_GetNumberOfHoursResponse
     */
    public function TimeEntry_GetNumberOfHours(TimeEntry_GetNumberOfHours $parameters)
    {
      return $this->__soapCall('TimeEntry_GetNumberOfHours', array($parameters));
    }

    /**
     * Gets the sales price of the time entry.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetSalesPrice $parameters
     * @return TimeEntry_GetSalesPriceResponse
     */
    public function TimeEntry_GetSalesPrice(TimeEntry_GetSalesPrice $parameters)
    {
      return $this->__soapCall('TimeEntry_GetSalesPrice', array($parameters));
    }

    /**
     * Gets the cost price of the time entry.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetCostPrice $parameters
     * @return TimeEntry_GetCostPriceResponse
     */
    public function TimeEntry_GetCostPrice(TimeEntry_GetCostPrice $parameters)
    {
      return $this->__soapCall('TimeEntry_GetCostPrice', array($parameters));
    }

    /**
     * Gets whether the time entry is approved.<br />Parameters: timeEntryHandle: Handle for the time entry.
     *
     * @param TimeEntry_GetApproved $parameters
     * @return TimeEntry_GetApprovedResponse
     */
    public function TimeEntry_GetApproved(TimeEntry_GetApproved $parameters)
    {
      return $this->__soapCall('TimeEntry_GetApproved', array($parameters));
    }

    /**
     * Creates a new unit from a data object.<br />Parameters: data: The data object that specifies the properties of the new unit.
     *
     * @param Unit_CreateFromData $parameters
     * @return Unit_CreateFromDataResponse
     */
    public function Unit_CreateFromData(Unit_CreateFromData $parameters)
    {
      return $this->__soapCall('Unit_CreateFromData', array($parameters));
    }

    /**
     * Creates new units from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new units.
     *
     * @param Unit_CreateFromDataArray $parameters
     * @return Unit_CreateFromDataArrayResponse
     */
    public function Unit_CreateFromDataArray(Unit_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Unit_CreateFromDataArray', array($parameters));
    }

    /**
     * Update units from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Unit_UpdateFromDataArray $parameters
     * @return Unit_UpdateFromDataArrayResponse
     */
    public function Unit_UpdateFromDataArray(Unit_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Unit_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a unit from a data object.<br />Parameters: data: The data object.
     *
     * @param Unit_UpdateFromData $parameters
     * @return Unit_UpdateFromDataResponse
     */
    public function Unit_UpdateFromData(Unit_UpdateFromData $parameters)
    {
      return $this->__soapCall('Unit_UpdateFromData', array($parameters));
    }

    /**
     * Returns an unit data object for a given unit.<br />Parameters: entityHandle: A handle for the unit.
     *
     * @param Unit_GetData $parameters
     * @return Unit_GetDataResponse
     */
    public function Unit_GetData(Unit_GetData $parameters)
    {
      return $this->__soapCall('Unit_GetData', array($parameters));
    }

    /**
     * Returns unit data objects for a given set of unit handles.<br />Parameters: entityHandles: An array of the unit handles.
     *
     * @param Unit_GetDataArray $parameters
     * @return Unit_GetDataArrayResponse
     */
    public function Unit_GetDataArray(Unit_GetDataArray $parameters)
    {
      return $this->__soapCall('Unit_GetDataArray', array($parameters));
    }

    /**
     * Creates a new unit.<br />Parameters: name: The name of the new unit.
     *
     * @param Unit_Create $parameters
     * @return Unit_CreateResponse
     */
    public function Unit_Create(Unit_Create $parameters)
    {
      return $this->__soapCall('Unit_Create', array($parameters));
    }

    /**
     * Returns handles for all units.
     *
     * @param Unit_GetAll $parameters
     * @return Unit_GetAllResponse
     */
    public function Unit_GetAll(Unit_GetAll $parameters)
    {
      return $this->__soapCall('Unit_GetAll', array($parameters));
    }

    /**
     * Returns handles for units with a given name.<br />Parameters: name: The name to search for.
     *
     * @param Unit_FindByName $parameters
     * @return Unit_FindByNameResponse
     */
    public function Unit_FindByName(Unit_FindByName $parameters)
    {
      return $this->__soapCall('Unit_FindByName', array($parameters));
    }

    /**
     * Returns a handle for the unit with a given number.<br />Parameters: number: The number to search for.
     *
     * @param Unit_FindByNumber $parameters
     * @return Unit_FindByNumberResponse
     */
    public function Unit_FindByNumber(Unit_FindByNumber $parameters)
    {
      return $this->__soapCall('Unit_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the untis corresponding to the given unit numbers. If a unit with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Unit_FindByNumberList $parameters
     * @return Unit_FindByNumberListResponse
     */
    public function Unit_FindByNumberList(Unit_FindByNumberList $parameters)
    {
      return $this->__soapCall('Unit_FindByNumberList', array($parameters));
    }

    /**
     * Deletes a unit.<br />Parameters: unitHandle: Handle for the unit.
     *
     * @param Unit_Delete $parameters
     * @return Unit_DeleteResponse
     */
    public function Unit_Delete(Unit_Delete $parameters)
    {
      return $this->__soapCall('Unit_Delete', array($parameters));
    }

    /**
     * Gets the number of a unit.<br />Parameters: unitHandle: Handle for the unit.
     *
     * @param Unit_GetNumber $parameters
     * @return Unit_GetNumberResponse
     */
    public function Unit_GetNumber(Unit_GetNumber $parameters)
    {
      return $this->__soapCall('Unit_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a unit.<br />Parameters: unitHandle: Handle for the unit.
     *
     * @param Unit_GetName $parameters
     * @return Unit_GetNameResponse
     */
    public function Unit_GetName(Unit_GetName $parameters)
    {
      return $this->__soapCall('Unit_GetName', array($parameters));
    }

    /**
     * Sets the name of a unit.<br />Parameters: unitHandle: Handle for the unit. value: The new name of the unit.
     *
     * @param Unit_SetName $parameters
     * @return Unit_SetNameResponse
     */
    public function Unit_SetName(Unit_SetName $parameters)
    {
      return $this->__soapCall('Unit_SetName', array($parameters));
    }

    /**
     * Update VAT accounts from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param VatAccount_UpdateFromDataArray $parameters
     * @return VatAccount_UpdateFromDataArrayResponse
     */
    public function VatAccount_UpdateFromDataArray(VatAccount_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('VatAccount_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a VAT account from a data object.<br />Parameters: data: The data object.
     *
     * @param VatAccount_UpdateFromData $parameters
     * @return VatAccount_UpdateFromDataResponse
     */
    public function VatAccount_UpdateFromData(VatAccount_UpdateFromData $parameters)
    {
      return $this->__soapCall('VatAccount_UpdateFromData', array($parameters));
    }

    /**
     * Returns an VAT account data object for a given VAT account.<br />Parameters: entityHandle: A handle for the VAT account.
     *
     * @param VatAccount_GetData $parameters
     * @return VatAccount_GetDataResponse
     */
    public function VatAccount_GetData(VatAccount_GetData $parameters)
    {
      return $this->__soapCall('VatAccount_GetData', array($parameters));
    }

    /**
     * Returns VAT account data objects for a given set of VAT account handles.<br />Parameters: entityHandles: An array of the VAT account handles.
     *
     * @param VatAccount_GetDataArray $parameters
     * @return VatAccount_GetDataArrayResponse
     */
    public function VatAccount_GetDataArray(VatAccount_GetDataArray $parameters)
    {
      return $this->__soapCall('VatAccount_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all VAT accounts.
     *
     * @param VatAccount_GetAll $parameters
     * @return VatAccount_GetAllResponse
     */
    public function VatAccount_GetAll(VatAccount_GetAll $parameters)
    {
      return $this->__soapCall('VatAccount_GetAll', array($parameters));
    }

    /**
     * Returns handle for the VAT account with a given VAT code.<br />Parameters: vatCode: The VAT code to search for.
     *
     * @param VatAccount_FindByVatCode $parameters
     * @return VatAccount_FindByVatCodeResponse
     */
    public function VatAccount_FindByVatCode(VatAccount_FindByVatCode $parameters)
    {
      return $this->__soapCall('VatAccount_FindByVatCode', array($parameters));
    }

    /**
     * Gets the VAT code of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetVatCode $parameters
     * @return VatAccount_GetVatCodeResponse
     */
    public function VatAccount_GetVatCode(VatAccount_GetVatCode $parameters)
    {
      return $this->__soapCall('VatAccount_GetVatCode', array($parameters));
    }

    /**
     * Gets the name of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetName $parameters
     * @return VatAccount_GetNameResponse
     */
    public function VatAccount_GetName(VatAccount_GetName $parameters)
    {
      return $this->__soapCall('VatAccount_GetName', array($parameters));
    }

    /**
     * Gets the type of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetType $parameters
     * @return VatAccount_GetTypeResponse
     */
    public function VatAccount_GetType(VatAccount_GetType $parameters)
    {
      return $this->__soapCall('VatAccount_GetType', array($parameters));
    }

    /**
     * Gets the rate of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetRateAsPercent $parameters
     * @return VatAccount_GetRateAsPercentResponse
     */
    public function VatAccount_GetRateAsPercent(VatAccount_GetRateAsPercent $parameters)
    {
      return $this->__soapCall('VatAccount_GetRateAsPercent', array($parameters));
    }

    /**
     * Gets the account of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetAccount $parameters
     * @return VatAccount_GetAccountResponse
     */
    public function VatAccount_GetAccount(VatAccount_GetAccount $parameters)
    {
      return $this->__soapCall('VatAccount_GetAccount', array($parameters));
    }

    /**
     * Gets the contra account of a VAT account.<br />Parameters: vatAccountHandle: Handle for the VAT account.
     *
     * @param VatAccount_GetContraAccount $parameters
     * @return VatAccount_GetContraAccountResponse
     */
    public function VatAccount_GetContraAccount(VatAccount_GetContraAccount $parameters)
    {
      return $this->__soapCall('VatAccount_GetContraAccount', array($parameters));
    }

    /**
     * Returns handle for the extended VAT zone with a given number.<br />Parameters: number: The extended VAT zone to search for.
     *
     * @param ExtendedVatZone_FindByNumber $parameters
     * @return ExtendedVatZone_FindByNumberResponse
     */
    public function ExtendedVatZone_FindByNumber(ExtendedVatZone_FindByNumber $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_FindByNumber', array($parameters));
    }

    /**
     * Returns handles for all extended VAT zones with a given number.
     *
     * @param ExtendedVatZone_GetAll $parameters
     * @return ExtendedVatZone_GetAllResponse
     */
    public function ExtendedVatZone_GetAll(ExtendedVatZone_GetAll $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_GetAll', array($parameters));
    }

    /**
     * Returns the extended VAT zone data object for the given handle.<br />Parameters: extendedVatZoneHandle: The extended VAT zone handle.
     *
     * @param ExtendedVatZone_GetData $parameters
     * @return ExtendedVatZone_GetDataResponse
     */
    public function ExtendedVatZone_GetData(ExtendedVatZone_GetData $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_GetData', array($parameters));
    }

    /**
     * Returns extended VAT zone data objects for the given handles.<br />Parameters: extendedVatZoneHandles: The extended VAT zone handles.
     *
     * @param ExtendedVatZone_GetDataArray $parameters
     * @return ExtendedVatZone_GetDataArrayResponse
     */
    public function ExtendedVatZone_GetDataArray(ExtendedVatZone_GetDataArray $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_GetDataArray', array($parameters));
    }

    /**
     * Gets the name of an extended VAT zone.<br />Parameters: extendedVatZoneHandle: Handle for the extended VAT zone.
     *
     * @param ExtendedVatZone_GetName $parameters
     * @return ExtendedVatZone_GetNameResponse
     */
    public function ExtendedVatZone_GetName(ExtendedVatZone_GetName $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_GetName', array($parameters));
    }

    /**
     * Gets the number of an extended VAT zone.<br />Parameters: extendedVatZoneHandle: Handle for the extended VAT zone.
     *
     * @param ExtendedVatZone_GetNumber $parameters
     * @return ExtendedVatZone_GetNumberResponse
     */
    public function ExtendedVatZone_GetNumber(ExtendedVatZone_GetNumber $parameters)
    {
      return $this->__soapCall('ExtendedVatZone_GetNumber', array($parameters));
    }

    /**
     * Gets the extended VAT zone of the given debitor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetExtendedVatZone $parameters
     * @return Debtor_GetExtendedVatZoneResponse
     */
    public function Debtor_GetExtendedVatZone(Debtor_GetExtendedVatZone $parameters)
    {
      return $this->__soapCall('Debtor_GetExtendedVatZone', array($parameters));
    }

    /**
     * Sets extended VAT zone of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: Handle for new extended vat zone of the debtor.
     *
     * @param Debtor_SetExtendedVatZone $parameters
     * @return Debtor_SetExtendedVatZoneResponse
     */
    public function Debtor_SetExtendedVatZone(Debtor_SetExtendedVatZone $parameters)
    {
      return $this->__soapCall('Debtor_SetExtendedVatZone', array($parameters));
    }

    /**
     * Returns true if international ledger is enabled on agreement, and false if it isn't.
     *
     * @param HasInternationalLedger $parameters
     * @return HasInternationalLedgerResponse
     */
    public function HasInternationalLedger(HasInternationalLedger $parameters)
    {
      return $this->__soapCall('HasInternationalLedger', array($parameters));
    }

    /**
     * Method to verify that you have set up the X-EconomicAppIdentifier header correctly. Returns true if set up correctly. If it is not correctly set up an exception will be thrown. This is the same exception we will throw once we start enforcing the rule.
     *
     * @param Verify_XEconomicAppIdentifier $parameters
     * @return Verify_XEconomicAppIdentifierResponse
     */
    public function Verify_XEconomicAppIdentifier(Verify_XEconomicAppIdentifier $parameters)
    {
      return $this->__soapCall('Verify_XEconomicAppIdentifier', array($parameters));
    }

    /**
     * Sets the interval of the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new interval of the subscription.
     *
     * @param Subscription_SetSubscriptionInterval $parameters
     * @return Subscription_SetSubscriptionIntervalResponse
     */
    public function Subscription_SetSubscriptionInterval(Subscription_SetSubscriptionInterval $parameters)
    {
      return $this->__soapCall('Subscription_SetSubscriptionInterval', array($parameters));
    }

    /**
     * Gets the interval of the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetSubscriptionInterval $parameters
     * @return Subscription_GetSubscriptionIntervalResponse
     */
    public function Subscription_GetSubscriptionInterval(Subscription_GetSubscriptionInterval $parameters)
    {
      return $this->__soapCall('Subscription_GetSubscriptionInterval', array($parameters));
    }

    /**
     * Gets whether or not the subscripton should be created based on the calendar year.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetCalendarYearBasis $parameters
     * @return Subscription_GetCalendarYearBasisResponse
     */
    public function Subscription_GetCalendarYearBasis(Subscription_GetCalendarYearBasis $parameters)
    {
      return $this->__soapCall('Subscription_GetCalendarYearBasis', array($parameters));
    }

    /**
     * Sets whether or not the subscripton should be created based on the calendar year.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new calendar year state of the subscription.
     *
     * @param Subscription_SetCalendarYearBasis $parameters
     * @return Subscription_SetCalendarYearBasisResponse
     */
    public function Subscription_SetCalendarYearBasis(Subscription_SetCalendarYearBasis $parameters)
    {
      return $this->__soapCall('Subscription_SetCalendarYearBasis', array($parameters));
    }

    /**
     * Sets whether or not there should be a Full or Proportional collection for the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new collection type of the subscription.
     *
     * @param Subscription_SetCollection $parameters
     * @return Subscription_SetCollectionResponse
     */
    public function Subscription_SetCollection(Subscription_SetCollection $parameters)
    {
      return $this->__soapCall('Subscription_SetCollection', array($parameters));
    }

    /**
     * Gets whether or not there should be a Full or Proportional collection for the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetCollection $parameters
     * @return Subscription_GetCollectionResponse
     */
    public function Subscription_GetCollection(Subscription_GetCollection $parameters)
    {
      return $this->__soapCall('Subscription_GetCollection', array($parameters));
    }

    /**
     * Gets the status whether or not a period should be added after the subscription name.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetAddPeriod $parameters
     * @return Subscription_GetAddPeriodResponse
     */
    public function Subscription_GetAddPeriod(Subscription_GetAddPeriod $parameters)
    {
      return $this->__soapCall('Subscription_GetAddPeriod', array($parameters));
    }

    /**
     * Sets the status whether or not a period should be added after the subscription name.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The status whether or not a period should be added after the subscription name.
     *
     * @param Subscription_SetAddPeriod $parameters
     * @return Subscription_SetAddPeriodResponse
     */
    public function Subscription_SetAddPeriod(Subscription_SetAddPeriod $parameters)
    {
      return $this->__soapCall('Subscription_SetAddPeriod', array($parameters));
    }

    /**
     * Sets or sets whether more than one subscription is allowed for each debtor.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new value of the property.
     *
     * @param Subscription_SetAllowMoreThanOneForEachDebtor $parameters
     * @return Subscription_SetAllowMoreThanOneForEachDebtorResponse
     */
    public function Subscription_SetAllowMoreThanOneForEachDebtor(Subscription_SetAllowMoreThanOneForEachDebtor $parameters)
    {
      return $this->__soapCall('Subscription_SetAllowMoreThanOneForEachDebtor', array($parameters));
    }

    /**
     * Gets or sets whether more than one subscription is allowed for each debtor.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetAllowMoreThanOneForEachDebtor $parameters
     * @return Subscription_GetAllowMoreThanOneForEachDebtorResponse
     */
    public function Subscription_GetAllowMoreThanOneForEachDebtor(Subscription_GetAllowMoreThanOneForEachDebtor $parameters)
    {
      return $this->__soapCall('Subscription_GetAllowMoreThanOneForEachDebtor', array($parameters));
    }

    /**
     * Creates a new subscription.<br />Parameters: subscriptionNumber: subscription number for the subscription. subscriptionName: subscription name for the subscription. description: description for the subscription. includeName: Enables include name for the subscription. subscriptionInterval: subscription interval for the subscription, calendarYearBasis: Enables calendar year for the subscription. collection: Collection for the subscription. addPeriod: enables add period for the subscription. allowMoreThanOneForEachDebtor: enables to allow more than one for each debitor for the subscription.
     *
     * @param Subscription_Create $parameters
     * @return Subscription_CreateResponse
     */
    public function Subscription_Create(Subscription_Create $parameters)
    {
      return $this->__soapCall('Subscription_Create', array($parameters));
    }

    /**
     * Returns handle for subscription with a given number.
     *
     * @param Subscription_FindByNumber $parameters
     * @return Subscription_FindByNumberResponse
     */
    public function Subscription_FindByNumber(Subscription_FindByNumber $parameters)
    {
      return $this->__soapCall('Subscription_FindByNumber', array($parameters));
    }

    /**
     * Returns handles for the subscriptions with the given name.<br />Parameters: name: The name to search for.
     *
     * @param Subscription_FindByName $parameters
     * @return Subscription_FindByNameResponse
     */
    public function Subscription_FindByName(Subscription_FindByName $parameters)
    {
      return $this->__soapCall('Subscription_FindByName', array($parameters));
    }

    /**
     * Returns handles for the lines of the subscription
     *
     * @param Subscription_GetSubscriptionLines $parameters
     * @return Subscription_GetSubscriptionLinesResponse
     */
    public function Subscription_GetSubscriptionLines(Subscription_GetSubscriptionLines $parameters)
    {
      return $this->__soapCall('Subscription_GetSubscriptionLines', array($parameters));
    }

    /**
     * Returns the next available subscription number.
     *
     * @param Subscription_GetNextAvailableNumber $parameters
     * @return Subscription_GetNextAvailableNumberResponse
     */
    public function Subscription_GetNextAvailableNumber(Subscription_GetNextAvailableNumber $parameters)
    {
      return $this->__soapCall('Subscription_GetNextAvailableNumber', array($parameters));
    }

    /**
     * Deletes a subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_Delete $parameters
     * @return Subscription_DeleteResponse
     */
    public function Subscription_Delete(Subscription_Delete $parameters)
    {
      return $this->__soapCall('Subscription_Delete', array($parameters));
    }

    /**
     * Gets handles for the subscribers of the subscription
     *
     * @param Subscription_GetSubscribers $parameters
     * @return Subscription_GetSubscribersResponse
     */
    public function Subscription_GetSubscribers(Subscription_GetSubscribers $parameters)
    {
      return $this->__soapCall('Subscription_GetSubscribers', array($parameters));
    }

    /**
     * Returns handles for all subscriptions.
     *
     * @param Subscription_GetAll $parameters
     * @return Subscription_GetAllResponse
     */
    public function Subscription_GetAll(Subscription_GetAll $parameters)
    {
      return $this->__soapCall('Subscription_GetAll', array($parameters));
    }

    /**
     * Creates a new subscription line from a data object.<br />Parameters: data: The data object that specifies the properties of the new subscription line.
     *
     * @param SubscriptionLine_CreateFromData $parameters
     * @return SubscriptionLine_CreateFromDataResponse
     */
    public function SubscriptionLine_CreateFromData(SubscriptionLine_CreateFromData $parameters)
    {
      return $this->__soapCall('SubscriptionLine_CreateFromData', array($parameters));
    }

    /**
     * Creates new subscription lines from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new subscription lines.
     *
     * @param SubscriptionLine_CreateFromDataArray $parameters
     * @return SubscriptionLine_CreateFromDataArrayResponse
     */
    public function SubscriptionLine_CreateFromDataArray(SubscriptionLine_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('SubscriptionLine_CreateFromDataArray', array($parameters));
    }

    /**
     * Update subscription lines from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param SubscriptionLine_UpdateFromDataArray $parameters
     * @return SubscriptionLine_UpdateFromDataArrayResponse
     */
    public function SubscriptionLine_UpdateFromDataArray(SubscriptionLine_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('SubscriptionLine_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a subscription line from a data object.<br />Parameters: data: The data object.
     *
     * @param SubscriptionLine_UpdateFromData $parameters
     * @return SubscriptionLine_UpdateFromDataResponse
     */
    public function SubscriptionLine_UpdateFromData(SubscriptionLine_UpdateFromData $parameters)
    {
      return $this->__soapCall('SubscriptionLine_UpdateFromData', array($parameters));
    }

    /**
     * Returns a subscription line data object for a given subscription line.<br />Parameters: entityHandle: A handle for the subscription line.
     *
     * @param SubscriptionLine_GetData $parameters
     * @return SubscriptionLine_GetDataResponse
     */
    public function SubscriptionLine_GetData(SubscriptionLine_GetData $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetData', array($parameters));
    }

    /**
     * Returns subscription line data objects for subscription lines.<br />Parameters: entityHandles: The array of subscription line handles.
     *
     * @param SubscriptionLine_GetDataArray $parameters
     * @return SubscriptionLine_GetDataArrayResponse
     */
    public function SubscriptionLine_GetDataArray(SubscriptionLine_GetDataArray $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a subscription line.<br />Parameters: SubscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetNumber $parameters
     * @return SubscriptionLine_GetNumberResponse
     */
    public function SubscriptionLine_GetNumber(SubscriptionLine_GetNumber $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the subscription of a subscription line.<br />Parameters: SubscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetSubscription $parameters
     * @return SubscriptionLine_GetSubscriptionResponse
     */
    public function SubscriptionLine_GetSubscription(SubscriptionLine_GetSubscription $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetSubscription', array($parameters));
    }

    /**
     * Gets a handle for the product of a subscription line.<br />Parameters: SubscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetProduct $parameters
     * @return SubscriptionLine_GetProductResponse
     */
    public function SubscriptionLine_GetProduct(SubscriptionLine_GetProduct $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetProduct', array($parameters));
    }

    /**
     * Sets the product of a subscription line. Setting the product also sets the unit cost price to the cost price of the product. The product must be set before setting the quantity and the unit net price.<br />Parameters: SubscriptionLineHandle: Handle for the subscription line. valueHandle: Handle for the new product of the subscription line.
     *
     * @param SubscriptionLine_SetProduct $parameters
     * @return SubscriptionLine_SetProductResponse
     */
    public function SubscriptionLine_SetProduct(SubscriptionLine_SetProduct $parameters)
    {
      return $this->__soapCall('SubscriptionLine_SetProduct', array($parameters));
    }

    /**
     * Gets the primary quantity of a subscription line.<br />Parameters: subscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetQuantity $parameters
     * @return SubscriptionLine_GetQuantityResponse
     */
    public function SubscriptionLine_GetQuantity(SubscriptionLine_GetQuantity $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetQuantity', array($parameters));
    }

    /**
     * Sets the primary quantity of a subscription line. The product of the subscription line must be set before setting this property.<br />Parameters: subscriptionLineHandle: Handle for the subscription line. value: The new primary quantity of the subscription line.
     *
     * @param SubscriptionLine_SetQuantity $parameters
     * @return SubscriptionLine_SetQuantityResponse
     */
    public function SubscriptionLine_SetQuantity(SubscriptionLine_SetQuantity $parameters)
    {
      return $this->__soapCall('SubscriptionLine_SetQuantity', array($parameters));
    }

    /**
     * Sets the department of a subscription line. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: subscriptionLineHandle: Handle for the subscription line. value: Handle for the new department of the subscription line.
     *
     * @param SubscriptionLine_SetDepartment $parameters
     * @return SubscriptionLine_SetDepartmentResponse
     */
    public function SubscriptionLine_SetDepartment(SubscriptionLine_SetDepartment $parameters)
    {
      return $this->__soapCall('SubscriptionLine_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the department of a subscription line. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: subscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetDepartment $parameters
     * @return SubscriptionLine_GetDepartmentResponse
     */
    public function SubscriptionLine_GetDepartment(SubscriptionLine_GetDepartment $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetDepartment', array($parameters));
    }

    /**
     * Sets the description of a subscription line.<br />Parameters: subscriptionLineHandle: Handle for the subscription line. value: The new description of the subscription line.
     *
     * @param SubscriptionLine_SetProductName $parameters
     * @return SubscriptionLine_SetProductNameResponse
     */
    public function SubscriptionLine_SetProductName(SubscriptionLine_SetProductName $parameters)
    {
      return $this->__soapCall('SubscriptionLine_SetProductName', array($parameters));
    }

    /**
     * Gets the description of a subscription line.<br />Parameters: subscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_GetProductName $parameters
     * @return SubscriptionLine_GetProductNameResponse
     */
    public function SubscriptionLine_GetProductName(SubscriptionLine_GetProductName $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetProductName', array($parameters));
    }

    /**
     * Gets the special price of a product.<br />Parameters: subscriptionLineHandle: Handle for the current subscription line.
     *
     * @param SubscriptionLine_GetSpecialPrice $parameters
     * @return SubscriptionLine_GetSpecialPriceResponse
     */
    public function SubscriptionLine_GetSpecialPrice(SubscriptionLine_GetSpecialPrice $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetSpecialPrice', array($parameters));
    }

    /**
     * Sets the special price of a product.<br />Parameters: subscriptionLineHandle: Handle for the current subscription line.
     *
     * @param SubscriptionLine_SetSpecialPrice $parameters
     * @return SubscriptionLine_SetSpecialPriceResponse
     */
    public function SubscriptionLine_SetSpecialPrice(SubscriptionLine_SetSpecialPrice $parameters)
    {
      return $this->__soapCall('SubscriptionLine_SetSpecialPrice', array($parameters));
    }

    /**
     * Creates a new subscription line.<br />Parameters: subscriptionHandle: Handle for a subscription line.
     *
     * @param SubscriptionLine_Create $parameters
     * @return SubscriptionLine_CreateResponse
     */
    public function SubscriptionLine_Create(SubscriptionLine_Create $parameters)
    {
      return $this->__soapCall('SubscriptionLine_Create', array($parameters));
    }

    /**
     * Returns handles for subscription lines that use a given products.<br />Parameters: product: The product to search for.
     *
     * @param SubscriptionLine_FindByProduct $parameters
     * @return SubscriptionLine_FindByProductResponse
     */
    public function SubscriptionLine_FindByProduct(SubscriptionLine_FindByProduct $parameters)
    {
      return $this->__soapCall('SubscriptionLine_FindByProduct', array($parameters));
    }

    /**
     * Returns handles for subscription lines that use a given set of products.<br />Parameters: products: The products to search for.
     *
     * @param SubscriptionLine_FindByProductList $parameters
     * @return SubscriptionLine_FindByProductListResponse
     */
    public function SubscriptionLine_FindByProductList(SubscriptionLine_FindByProductList $parameters)
    {
      return $this->__soapCall('SubscriptionLine_FindByProductList', array($parameters));
    }

    /**
     * Returns handles for subscription lines that use a given subscriptions.<br />Parameters: subscription: The subscription to search for.
     *
     * @param SubscriptionLine_FindBySubscription $parameters
     * @return SubscriptionLine_FindBySubscriptionResponse
     */
    public function SubscriptionLine_FindBySubscription(SubscriptionLine_FindBySubscription $parameters)
    {
      return $this->__soapCall('SubscriptionLine_FindBySubscription', array($parameters));
    }

    /**
     * Returns handles for subscription lines that use a given set of subscriptions.<br />Parameters: subscriptions: The subscriptions to search for.
     *
     * @param SubscriptionLine_FindBySubscriptonList $parameters
     * @return SubscriptionLine_FindBySubscriptonListResponse
     */
    public function SubscriptionLine_FindBySubscriptonList(SubscriptionLine_FindBySubscriptonList $parameters)
    {
      return $this->__soapCall('SubscriptionLine_FindBySubscriptonList', array($parameters));
    }

    /**
     * Returns handles for all current subsciption lines.
     *
     * @param SubscriptionLine_GetAll $parameters
     * @return SubscriptionLine_GetAllResponse
     */
    public function SubscriptionLine_GetAll(SubscriptionLine_GetAll $parameters)
    {
      return $this->__soapCall('SubscriptionLine_GetAll', array($parameters));
    }

    /**
     * Deletes a subscription line.<br />Parameters: SubscriptionLineHandle: Handle for the subscription line.
     *
     * @param SubscriptionLine_Delete $parameters
     * @return SubscriptionLine_DeleteResponse
     */
    public function SubscriptionLine_Delete(SubscriptionLine_Delete $parameters)
    {
      return $this->__soapCall('SubscriptionLine_Delete', array($parameters));
    }

    /**
     * Creates a new sum interval from a data object.<br />Parameters: data: The data object that specifies the properties of the new sum interval.
     *
     * @param SumInterval_CreateFromData $parameters
     * @return SumInterval_CreateFromDataResponse
     */
    public function SumInterval_CreateFromData(SumInterval_CreateFromData $parameters)
    {
      return $this->__soapCall('SumInterval_CreateFromData', array($parameters));
    }

    /**
     * Creates new sum interval from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new sum interval.
     *
     * @param SumInterval_CreateFromDataArray $parameters
     * @return SumInterval_CreateFromDataArrayResponse
     */
    public function SumInterval_CreateFromDataArray(SumInterval_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('SumInterval_CreateFromDataArray', array($parameters));
    }

    /**
     * Update sum interval entities from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param SumInterval_UpdateFromDataArray $parameters
     * @return SumInterval_UpdateFromDataArrayResponse
     */
    public function SumInterval_UpdateFromDataArray(SumInterval_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('SumInterval_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a sum interval from a data object.<br />Parameters: data: The data object.
     *
     * @param SumInterval_UpdateFromData $parameters
     * @return SumInterval_UpdateFromDataResponse
     */
    public function SumInterval_UpdateFromData(SumInterval_UpdateFromData $parameters)
    {
      return $this->__soapCall('SumInterval_UpdateFromData', array($parameters));
    }

    /**
     * Returns a sum interval data object for a given sum interval.<br />Parameters: entityHandle: A handle for the sum interval.
     *
     * @param SumInterval_GetData $parameters
     * @return SumInterval_GetDataResponse
     */
    public function SumInterval_GetData(SumInterval_GetData $parameters)
    {
      return $this->__soapCall('SumInterval_GetData', array($parameters));
    }

    /**
     * Returns sum interval data objects for a given set of sum interval handles.<br />Parameters: entityHandles: An array of the sum interval handles.
     *
     * @param SumInterval_GetDataArray $parameters
     * @return SumInterval_GetDataArrayResponse
     */
    public function SumInterval_GetDataArray(SumInterval_GetDataArray $parameters)
    {
      return $this->__soapCall('SumInterval_GetDataArray', array($parameters));
    }

    /**
     * Creates a new sum interval.<br />Parameters: account: The account the sum interval is for. fromAccount: The from-account of the sum interval. toAccount: The to-account of the sum interval.
     *
     * @param SumInterval_Create $parameters
     * @return SumInterval_CreateResponse
     */
    public function SumInterval_Create(SumInterval_Create $parameters)
    {
      return $this->__soapCall('SumInterval_Create', array($parameters));
    }

    /**
     * Deletes a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval.
     *
     * @param SumInterval_Delete $parameters
     * @return SumInterval_DeleteResponse
     */
    public function SumInterval_Delete(SumInterval_Delete $parameters)
    {
      return $this->__soapCall('SumInterval_Delete', array($parameters));
    }

    /**
     * Gets a handle for the account of a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval.
     *
     * @param SumInterval_GetAccount $parameters
     * @return SumInterval_GetAccountResponse
     */
    public function SumInterval_GetAccount(SumInterval_GetAccount $parameters)
    {
      return $this->__soapCall('SumInterval_GetAccount', array($parameters));
    }

    /**
     * Gets the from-account of a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval.
     *
     * @param SumInterval_GetFromAccount $parameters
     * @return SumInterval_GetFromAccountResponse
     */
    public function SumInterval_GetFromAccount(SumInterval_GetFromAccount $parameters)
    {
      return $this->__soapCall('SumInterval_GetFromAccount', array($parameters));
    }

    /**
     * Sets the from-account of a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval. value: The new from-account of the sum interval.
     *
     * @param SumInterval_SetFromAccount $parameters
     * @return SumInterval_SetFromAccountResponse
     */
    public function SumInterval_SetFromAccount(SumInterval_SetFromAccount $parameters)
    {
      return $this->__soapCall('SumInterval_SetFromAccount', array($parameters));
    }

    /**
     * Gets the to-account of a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval.
     *
     * @param SumInterval_GetToAccount $parameters
     * @return SumInterval_GetToAccountResponse
     */
    public function SumInterval_GetToAccount(SumInterval_GetToAccount $parameters)
    {
      return $this->__soapCall('SumInterval_GetToAccount', array($parameters));
    }

    /**
     * Sets the to-account of a sum interval.<br />Parameters: sumIntervalHandle: Handle for the sum interval. value: The new to-account of the sum interval.
     *
     * @param SumInterval_SetToAccount $parameters
     * @return SumInterval_SetToAccountResponse
     */
    public function SumInterval_SetToAccount(SumInterval_SetToAccount $parameters)
    {
      return $this->__soapCall('SumInterval_SetToAccount', array($parameters));
    }

    /**
     * Returns an template collection data object for a given template collection.<br />Parameters: entityHandle: A handle for the template collection.
     *
     * @param TemplateCollection_GetData $parameters
     * @return TemplateCollection_GetDataResponse
     */
    public function TemplateCollection_GetData(TemplateCollection_GetData $parameters)
    {
      return $this->__soapCall('TemplateCollection_GetData', array($parameters));
    }

    /**
     * Returns template collection data objects for a given set of template collection handles.<br />Parameters: entityHandles: An array of the template collection handles.
     *
     * @param TemplateCollection_GetDataArray $parameters
     * @return TemplateCollection_GetDataArrayResponse
     */
    public function TemplateCollection_GetDataArray(TemplateCollection_GetDataArray $parameters)
    {
      return $this->__soapCall('TemplateCollection_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all template collections.
     *
     * @param TemplateCollection_GetAll $parameters
     * @return TemplateCollection_GetAllResponse
     */
    public function TemplateCollection_GetAll(TemplateCollection_GetAll $parameters)
    {
      return $this->__soapCall('TemplateCollection_GetAll', array($parameters));
    }

    /**
     * Returns handles for the template collections with the given name.
     *
     * @param TemplateCollection_FindByName $parameters
     * @return TemplateCollection_FindByNameResponse
     */
    public function TemplateCollection_FindByName(TemplateCollection_FindByName $parameters)
    {
      return $this->__soapCall('TemplateCollection_FindByName', array($parameters));
    }

    /**
     * Gets name of the template collection.<br />Parameters: templateCollectionHandle: Handle for the template collection.
     *
     * @param TemplateCollection_GetName $parameters
     * @return TemplateCollection_GetNameResponse
     */
    public function TemplateCollection_GetName(TemplateCollection_GetName $parameters)
    {
      return $this->__soapCall('TemplateCollection_GetName', array($parameters));
    }

    /**
     * Sets name of the template collection.<br />Parameters: templateCollectionHandle: Handle for the template collection. name: New name of the template collection.
     *
     * @param TemplateCollection_SetName $parameters
     * @return TemplateCollection_SetNameResponse
     */
    public function TemplateCollection_SetName(TemplateCollection_SetName $parameters)
    {
      return $this->__soapCall('TemplateCollection_SetName', array($parameters));
    }

    /**
     * Creates a new term of payment from a data object.<br />Parameters: data: The data object that specifies the properties of the new term of payment.
     *
     * @param TermOfPayment_CreateFromData $parameters
     * @return TermOfPayment_CreateFromDataResponse
     */
    public function TermOfPayment_CreateFromData(TermOfPayment_CreateFromData $parameters)
    {
      return $this->__soapCall('TermOfPayment_CreateFromData', array($parameters));
    }

    /**
     * Creates new terms of payment from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new terms of payment.
     *
     * @param TermOfPayment_CreateFromDataArray $parameters
     * @return TermOfPayment_CreateFromDataArrayResponse
     */
    public function TermOfPayment_CreateFromDataArray(TermOfPayment_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('TermOfPayment_CreateFromDataArray', array($parameters));
    }

    /**
     * Update termn of payments from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param TermOfPayment_UpdateFromDataArray $parameters
     * @return TermOfPayment_UpdateFromDataArrayResponse
     */
    public function TermOfPayment_UpdateFromDataArray(TermOfPayment_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('TermOfPayment_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a term of payment from a data object.<br />Parameters: data: The data object.
     *
     * @param TermOfPayment_UpdateFromData $parameters
     * @return TermOfPayment_UpdateFromDataResponse
     */
    public function TermOfPayment_UpdateFromData(TermOfPayment_UpdateFromData $parameters)
    {
      return $this->__soapCall('TermOfPayment_UpdateFromData', array($parameters));
    }

    /**
     * Returns an term of payment data object for a given term of payment.<br />Parameters: entityHandle: A handle for the term of payment.
     *
     * @param TermOfPayment_GetData $parameters
     * @return TermOfPayment_GetDataResponse
     */
    public function TermOfPayment_GetData(TermOfPayment_GetData $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetData', array($parameters));
    }

    /**
     * Returns term of paryment data objects for a given set of term of payment handles.<br />Parameters: entityHandles: An array of the term of payment handles.
     *
     * @param TermOfPayment_GetDataArray $parameters
     * @return TermOfPayment_GetDataArrayResponse
     */
    public function TermOfPayment_GetDataArray(TermOfPayment_GetDataArray $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDataArray', array($parameters));
    }

    /**
     * Creates a new term of payment. If the type is PaidInCash or Factoring then the contra account(s) are set to the first enterable account.<br />Parameters: name: The name of the new term of payment. type: The type of the new term of payment. days: The number of days until payment is due if the type is Net or InvoiceMonth or InvoiceWeekStartingMonday or InvoiceWeekStartingSunday.
     *
     * @param TermOfPayment_Create $parameters
     * @return TermOfPayment_CreateResponse
     */
    public function TermOfPayment_Create(TermOfPayment_Create $parameters)
    {
      return $this->__soapCall('TermOfPayment_Create', array($parameters));
    }

    /**
     * Returns handles for all term of payments.
     *
     * @param TermOfPayment_GetAll $parameters
     * @return TermOfPayment_GetAllResponse
     */
    public function TermOfPayment_GetAll(TermOfPayment_GetAll $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the term of payment with a given name.<br />Parameters: name: The name to search for.
     *
     * @param TermOfPayment_FindByName $parameters
     * @return TermOfPayment_FindByNameResponse
     */
    public function TermOfPayment_FindByName(TermOfPayment_FindByName $parameters)
    {
      return $this->__soapCall('TermOfPayment_FindByName', array($parameters));
    }

    /**
     * Deletes a term of peyment.<br />ParametersL termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_Delete $parameters
     * @return TermOfPayment_DeleteResponse
     */
    public function TermOfPayment_Delete(TermOfPayment_Delete $parameters)
    {
      return $this->__soapCall('TermOfPayment_Delete', array($parameters));
    }

    /**
     * Gets the name of a term of payment.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetName $parameters
     * @return TermOfPayment_GetNameResponse
     */
    public function TermOfPayment_GetName(TermOfPayment_GetName $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetName', array($parameters));
    }

    /**
     * Sets the name of a term of payment.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: The new name of the term of payment.
     *
     * @param TermOfPayment_SetName $parameters
     * @return TermOfPayment_SetNameResponse
     */
    public function TermOfPayment_SetName(TermOfPayment_SetName $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetName', array($parameters));
    }

    /**
     * Gets the type of a term of payment.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetType $parameters
     * @return TermOfPayment_GetTypeResponse
     */
    public function TermOfPayment_GetType(TermOfPayment_GetType $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetType', array($parameters));
    }

    /**
     * Gets the number of days before payment is due for a term of payment if the type is TermOfPaymentType.Net or TermOfPaymentType.InvoiceMonth or TermOfPaymentType.InvoiceWeekStartingMonday or TermOfPaymentType.InvoiceWeekStartingSunday.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetDays $parameters
     * @return TermOfPayment_GetDaysResponse
     */
    public function TermOfPayment_GetDays(TermOfPayment_GetDays $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDays', array($parameters));
    }

    /**
     * Gets the description of a term of payment.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetDescription $parameters
     * @return TermOfPayment_GetDescriptionResponse
     */
    public function TermOfPayment_GetDescription(TermOfPayment_GetDescription $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDescription', array($parameters));
    }

    /**
     * Sets the description of a term of payment.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: The description of the term of payment.
     *
     * @param TermOfPayment_SetDescription $parameters
     * @return TermOfPayment_SetDescriptionResponse
     */
    public function TermOfPayment_SetDescription(TermOfPayment_SetDescription $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetDescription', array($parameters));
    }

    /**
     * Gets the first contra account for a term of payment if the type is TermOfPaymentType.PaidInCash or TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetContraAccount $parameters
     * @return TermOfPayment_GetContraAccountResponse
     */
    public function TermOfPayment_GetContraAccount(TermOfPayment_GetContraAccount $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetContraAccount', array($parameters));
    }

    /**
     * Sets the first contra account for a term of payment if the type is TermOfPaymentType.PaidInCash or TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: The first contra account.
     *
     * @param TermOfPayment_SetContraAccount $parameters
     * @return TermOfPayment_SetContraAccountResponse
     */
    public function TermOfPayment_SetContraAccount(TermOfPayment_SetContraAccount $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetContraAccount', array($parameters));
    }

    /**
     * Gets the second contra account for a term of payment if the type is TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetContraAccount2 $parameters
     * @return TermOfPayment_GetContraAccount2Response
     */
    public function TermOfPayment_GetContraAccount2(TermOfPayment_GetContraAccount2 $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetContraAccount2', array($parameters));
    }

    /**
     * Sets the second contra account for a term of payment if the type is TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: The second contra account.
     *
     * @param TermOfPayment_SetContraAccount2 $parameters
     * @return TermOfPayment_SetContraAccount2Response
     */
    public function TermOfPayment_SetContraAccount2(TermOfPayment_SetContraAccount2 $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetContraAccount2', array($parameters));
    }

    /**
     * Gets the debtor for a term of payment if the type is TermOfPaymentType.Creditcard.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetDebtor $parameters
     * @return TermOfPayment_GetDebtorResponse
     */
    public function TermOfPayment_GetDebtor(TermOfPayment_GetDebtor $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDebtor', array($parameters));
    }

    /**
     * Sets the debtor for a term of payment if the type is TermOfPaymentType.Creditcard.<br />Parameters: termOfPaymentHandle: Handle for the term of payment. value: The debtor.
     *
     * @param TermOfPayment_SetDebtor $parameters
     * @return TermOfPayment_SetDebtorResponse
     */
    public function TermOfPayment_SetDebtor(TermOfPayment_SetDebtor $parameters)
    {
      return $this->__soapCall('TermOfPayment_SetDebtor', array($parameters));
    }

    /**
     * Gets the distribution in percent for the first contra account if the type of the term of payment is TermOfPaymentType.Factoring.<br />Parameters: termOfPaymentHandle: Handle for the term of payment.
     *
     * @param TermOfPayment_GetDistributionInPercent $parameters
     * @return TermOfPayment_GetDistributionInPercentResponse
     */
    public function TermOfPayment_GetDistributionInPercent(TermOfPayment_GetDistributionInPercent $parameters)
    {
      return $this->__soapCall('TermOfPayment_GetDistributionInPercent', array($parameters));
    }

    /**
     * Sets the distribution key of an quotation line. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: Handle for the new distribution key of the quotation line.
     *
     * @param QuotationLine_SetDistributionKey $parameters
     * @return QuotationLine_SetDistributionKeyResponse
     */
    public function QuotationLine_SetDistributionKey(QuotationLine_SetDistributionKey $parameters)
    {
      return $this->__soapCall('QuotationLine_SetDistributionKey', array($parameters));
    }

    /**
     * Creates a new quotation line.<br />Parameters: quotationHandle: Handle for a quotation.
     *
     * @param QuotationLine_Create $parameters
     * @return QuotationLine_CreateResponse
     */
    public function QuotationLine_Create(QuotationLine_Create $parameters)
    {
      return $this->__soapCall('QuotationLine_Create', array($parameters));
    }

    /**
     * Returns handles for all quotation lines.
     *
     * @param QuotationLine_GetAll $parameters
     * @return QuotationLine_GetAllResponse
     */
    public function QuotationLine_GetAll(QuotationLine_GetAll $parameters)
    {
      return $this->__soapCall('QuotationLine_GetAll', array($parameters));
    }

    /**
     * Returns handles for quotation lines that uses a given product.<br />Parameters: product: The product to search for.
     *
     * @param QuotationLine_FindByProduct $parameters
     * @return QuotationLine_FindByProductResponse
     */
    public function QuotationLine_FindByProduct(QuotationLine_FindByProduct $parameters)
    {
      return $this->__soapCall('QuotationLine_FindByProduct', array($parameters));
    }

    /**
     * Returns handles for quotation lines that uses a given set of products.<br />Parameters: products: The products to search for.
     *
     * @param QuotationLine_FindByProductList $parameters
     * @return QuotationLine_FindByProductListResponse
     */
    public function QuotationLine_FindByProductList(QuotationLine_FindByProductList $parameters)
    {
      return $this->__soapCall('QuotationLine_FindByProductList', array($parameters));
    }

    /**
     * Deletes an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_Delete $parameters
     * @return QuotationLine_DeleteResponse
     */
    public function QuotationLine_Delete(QuotationLine_Delete $parameters)
    {
      return $this->__soapCall('QuotationLine_Delete', array($parameters));
    }

    /**
     * Returns a ReportCode data object for a given ReportCode.<br />Parameters: entityHandle: A handle for the ReportCode.
     *
     * @param ReportCode_GetData $parameters
     * @return ReportCode_GetDataResponse
     */
    public function ReportCode_GetData(ReportCode_GetData $parameters)
    {
      return $this->__soapCall('ReportCode_GetData', array($parameters));
    }

    /**
     * Returns ReportCode data objects for a given set of ReportCode handles.<br />Parameters: entityHandles: An array of the ReportCode handles.
     *
     * @param ReportCode_GetDataArray $parameters
     * @return ReportCode_GetDataArrayResponse
     */
    public function ReportCode_GetDataArray(ReportCode_GetDataArray $parameters)
    {
      return $this->__soapCall('ReportCode_GetDataArray', array($parameters));
    }

    /**
     * Gets handles for the accounts of a report code.<br />Parameters: reportCodeHandle: Handle for the report code.
     *
     * @param ReportCode_GetAccounts $parameters
     * @return ReportCode_GetAccountsResponse
     */
    public function ReportCode_GetAccounts(ReportCode_GetAccounts $parameters)
    {
      return $this->__soapCall('ReportCode_GetAccounts', array($parameters));
    }

    /**
     * Gets the code of the ReportCode.<br />
     *
     * @param ReportCode_GetCode $parameters
     * @return ReportCode_GetCodeResponse
     */
    public function ReportCode_GetCode(ReportCode_GetCode $parameters)
    {
      return $this->__soapCall('ReportCode_GetCode', array($parameters));
    }

    /**
     * Gets the fullcode of the ReportCode.<br />
     *
     * @param ReportCode_GetFullCode $parameters
     * @return ReportCode_GetFullCodeResponse
     */
    public function ReportCode_GetFullCode(ReportCode_GetFullCode $parameters)
    {
      return $this->__soapCall('ReportCode_GetFullCode', array($parameters));
    }

    /**
     * Gets a handle for the parentCode of a ReportCode.<br />Parameters: reportCodeHandle: Handle for the report code.
     *
     * @param ReportCode_GetParentCode $parameters
     * @return ReportCode_GetParentCodeResponse
     */
    public function ReportCode_GetParentCode(ReportCode_GetParentCode $parameters)
    {
      return $this->__soapCall('ReportCode_GetParentCode', array($parameters));
    }

    /**
     * Returns a ReportCodeSet data object for a given ReportCodeSet.<br />Parameters: entityHandle: A handle for the ReportCodeSet.
     *
     * @param ReportCodeSet_GetData $parameters
     * @return ReportCodeSet_GetDataResponse
     */
    public function ReportCodeSet_GetData(ReportCodeSet_GetData $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetData', array($parameters));
    }

    /**
     * Returns ReportCodeSet data objects for a given set of ReportCodeSet handles.<br />Parameters: entityHandles: An array of the ReportCodeSet handles.
     *
     * @param ReportCodeSet_GetDataArray $parameters
     * @return ReportCodeSet_GetDataArrayResponse
     */
    public function ReportCodeSet_GetDataArray(ReportCodeSet_GetDataArray $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all ReportCodeSets.
     *
     * @param ReportCodeSet_GetAll $parameters
     * @return ReportCodeSet_GetAllResponse
     */
    public function ReportCodeSet_GetAll(ReportCodeSet_GetAll $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetAll', array($parameters));
    }

    /**
     * Returns handles for the ReportCodeSets with the given name.<br />Parameters: name: The name to search for.
     *
     * @param ReportCodeSet_FindByName $parameters
     * @return ReportCodeSet_FindByNameResponse
     */
    public function ReportCodeSet_FindByName(ReportCodeSet_FindByName $parameters)
    {
      return $this->__soapCall('ReportCodeSet_FindByName', array($parameters));
    }

    /**
     * Gets handles for ReportCodes in a ReportCodeSet.<br />Parameters: reportCodeSetHandle: Handle for the ReportCodeSet.
     *
     * @param ReportCodeSet_GetCodes $parameters
     * @return ReportCodeSet_GetCodesResponse
     */
    public function ReportCodeSet_GetCodes(ReportCodeSet_GetCodes $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetCodes', array($parameters));
    }

    /**
     * Gets the name of the ReportCodeSet.<br />
     *
     * @param ReportCodeSet_GetName $parameters
     * @return ReportCodeSet_GetNameResponse
     */
    public function ReportCodeSet_GetName(ReportCodeSet_GetName $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetName', array($parameters));
    }

    /**
     * Gets the codeSet of the ReportCodeSet.<br />
     *
     * @param ReportCodeSet_GetCodeSet $parameters
     * @return ReportCodeSet_GetCodeSetResponse
     */
    public function ReportCodeSet_GetCodeSet(ReportCodeSet_GetCodeSet $parameters)
    {
      return $this->__soapCall('ReportCodeSet_GetCodeSet', array($parameters));
    }

    /**
     * Returns a ScannedDocument data object for a given ScannedDocument.<br />Parameters: entityHandle: A handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetData $parameters
     * @return ScannedDocument_GetDataResponse
     */
    public function ScannedDocument_GetData(ScannedDocument_GetData $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetData', array($parameters));
    }

    /**
     * Returns ScannedDocument data objects for a given set of ScannedDocument handles.<br />Parameters: entityHandles: An array of the ScannedDocument handles.
     *
     * @param ScannedDocument_GetDataArray $parameters
     * @return ScannedDocument_GetDataArrayResponse
     */
    public function ScannedDocument_GetDataArray(ScannedDocument_GetDataArray $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all ScannedDocuments.
     *
     * @param ScannedDocument_GetAll $parameters
     * @return ScannedDocument_GetAllResponse
     */
    public function ScannedDocument_GetAll(ScannedDocument_GetAll $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the scanned document with a given voucher number.<br />Parameters: voucherNumber: The number to search for.
     *
     * @param ScannedDocument_FindByVoucherNumber $parameters
     * @return ScannedDocument_FindByVoucherNumberResponse
     */
    public function ScannedDocument_FindByVoucherNumber(ScannedDocument_FindByVoucherNumber $parameters)
    {
      return $this->__soapCall('ScannedDocument_FindByVoucherNumber', array($parameters));
    }

    /**
     * Returns an array with handles for scanned documents with voucher numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param ScannedDocument_FindByVoucherNumberInterval $parameters
     * @return ScannedDocument_FindByVoucherNumberIntervalResponse
     */
    public function ScannedDocument_FindByVoucherNumberInterval(ScannedDocument_FindByVoucherNumberInterval $parameters)
    {
      return $this->__soapCall('ScannedDocument_FindByVoucherNumberInterval', array($parameters));
    }

    /**
     * Gets the document as a PDF-file.<br />Parameters: invoiceHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetPdf $parameters
     * @return ScannedDocument_GetPdfResponse
     */
    public function ScannedDocument_GetPdf(ScannedDocument_GetPdf $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetPdf', array($parameters));
    }

    /**
     * Gets the number of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetNumber $parameters
     * @return ScannedDocument_GetNumberResponse
     */
    public function ScannedDocument_GetNumber(ScannedDocument_GetNumber $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetNumber', array($parameters));
    }

    /**
     * Gets the status of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetStatus $parameters
     * @return ScannedDocument_GetStatusResponse
     */
    public function ScannedDocument_GetStatus(ScannedDocument_GetStatus $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetStatus', array($parameters));
    }

    /**
     * Gets the category of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetCategory $parameters
     * @return ScannedDocument_GetCategoryResponse
     */
    public function ScannedDocument_GetCategory(ScannedDocument_GetCategory $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetCategory', array($parameters));
    }

    /**
     * Gets the note of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetNote $parameters
     * @return ScannedDocument_GetNoteResponse
     */
    public function ScannedDocument_GetNote(ScannedDocument_GetNote $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetNote', array($parameters));
    }

    /**
     * Gets the pagecount of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetPageCount $parameters
     * @return ScannedDocument_GetPageCountResponse
     */
    public function ScannedDocument_GetPageCount(ScannedDocument_GetPageCount $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetPageCount', array($parameters));
    }

    /**
     * Gets the vouchernumber of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetVoucherNumber $parameters
     * @return ScannedDocument_GetVoucherNumberResponse
     */
    public function ScannedDocument_GetVoucherNumber(ScannedDocument_GetVoucherNumber $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetVoucherNumber', array($parameters));
    }

    /**
     * Gets the fromdate of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetFromDate $parameters
     * @return ScannedDocument_GetFromDateResponse
     */
    public function ScannedDocument_GetFromDate(ScannedDocument_GetFromDate $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetFromDate', array($parameters));
    }

    /**
     * Gets the todate of a ScannedDocument.<br />Parameters: ScannedDocumentHandle: Handle for the ScannedDocument.
     *
     * @param ScannedDocument_GetToDate $parameters
     * @return ScannedDocument_GetToDateResponse
     */
    public function ScannedDocument_GetToDate(ScannedDocument_GetToDate $parameters)
    {
      return $this->__soapCall('ScannedDocument_GetToDate', array($parameters));
    }

    /**
     * Creates a new subscriber from a data object.<br />Parameters: data: The data object that specifies the properties of the new subscriber.
     *
     * @param Subscriber_CreateFromData $parameters
     * @return Subscriber_CreateFromDataResponse
     */
    public function Subscriber_CreateFromData(Subscriber_CreateFromData $parameters)
    {
      return $this->__soapCall('Subscriber_CreateFromData', array($parameters));
    }

    /**
     * Creates new subscribers from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new subscribers.
     *
     * @param Subscriber_CreateFromDataArray $parameters
     * @return Subscriber_CreateFromDataArrayResponse
     */
    public function Subscriber_CreateFromDataArray(Subscriber_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Subscriber_CreateFromDataArray', array($parameters));
    }

    /**
     * Update subscribers from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Subscriber_UpdateFromDataArray $parameters
     * @return Subscriber_UpdateFromDataArrayResponse
     */
    public function Subscriber_UpdateFromDataArray(Subscriber_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Subscriber_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a subscriber from a data object.<br />Parameters: data: The data object.
     *
     * @param Subscriber_UpdateFromData $parameters
     * @return Subscriber_UpdateFromDataResponse
     */
    public function Subscriber_UpdateFromData(Subscriber_UpdateFromData $parameters)
    {
      return $this->__soapCall('Subscriber_UpdateFromData', array($parameters));
    }

    /**
     * Returns a subscriber data object for a given subscriber.<br />Parameters: entityHandle: A handle for the subscriber.
     *
     * @param Subscriber_GetData $parameters
     * @return Subscriber_GetDataResponse
     */
    public function Subscriber_GetData(Subscriber_GetData $parameters)
    {
      return $this->__soapCall('Subscriber_GetData', array($parameters));
    }

    /**
     * Returns subscriber data objects for a given set of subscriber handles.<br />Parameters: entityHandles: An array of the subscriber handles.
     *
     * @param Subscriber_GetDataArray $parameters
     * @return Subscriber_GetDataArrayResponse
     */
    public function Subscriber_GetDataArray(Subscriber_GetDataArray $parameters)
    {
      return $this->__soapCall('Subscriber_GetDataArray', array($parameters));
    }

    /**
     * Creates a new subscriber.<br />Parameters: debtor: Handle for a debtor. subscription: Handle for a subscription. startDate: start date for subscriber. registeredDate: date registered. endDate: end date for subscriber
     *
     * @param Subscriber_Create $parameters
     * @return Subscriber_CreateResponse
     */
    public function Subscriber_Create(Subscriber_Create $parameters)
    {
      return $this->__soapCall('Subscriber_Create', array($parameters));
    }

    /**
     * Returns handles for all current subscribers.
     *
     * @param Subscriber_GetAll $parameters
     * @return Subscriber_GetAllResponse
     */
    public function Subscriber_GetAll(Subscriber_GetAll $parameters)
    {
      return $this->__soapCall('Subscriber_GetAll', array($parameters));
    }

    /**
     * Returns handles for subscribers that use a given subscriptions.<br />Parameters: subscription: The subscription to search for.
     *
     * @param Subscriber_FindBySubscription $parameters
     * @return Subscriber_FindBySubscriptionResponse
     */
    public function Subscriber_FindBySubscription(Subscriber_FindBySubscription $parameters)
    {
      return $this->__soapCall('Subscriber_FindBySubscription', array($parameters));
    }

    /**
     * Returns handles for subscribers that use a given set of subscriptions.<br />Parameters: subscriptions: The subscriptions to search for.
     *
     * @param Subscriber_FindBySubscriptonList $parameters
     * @return Subscriber_FindBySubscriptonListResponse
     */
    public function Subscriber_FindBySubscriptonList(Subscriber_FindBySubscriptonList $parameters)
    {
      return $this->__soapCall('Subscriber_FindBySubscriptonList', array($parameters));
    }

    /**
     * Deletes a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_Delete $parameters
     * @return Subscriber_DeleteResponse
     */
    public function Subscriber_Delete(Subscriber_Delete $parameters)
    {
      return $this->__soapCall('Subscriber_Delete', array($parameters));
    }

    /**
     * Gets a handle for the debtor of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetDebtor $parameters
     * @return Subscriber_GetDebtorResponse
     */
    public function Subscriber_GetDebtor(Subscriber_GetDebtor $parameters)
    {
      return $this->__soapCall('Subscriber_GetDebtor', array($parameters));
    }

    /**
     * Sets a handle for the debtor of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_SetDebtor $parameters
     * @return Subscriber_SetDebtorResponse
     */
    public function Subscriber_SetDebtor(Subscriber_SetDebtor $parameters)
    {
      return $this->__soapCall('Subscriber_SetDebtor', array($parameters));
    }

    /**
     * Gets a handle for the subscription of the subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetSubscription $parameters
     * @return Subscriber_GetSubscriptionResponse
     */
    public function Subscriber_GetSubscription(Subscriber_GetSubscription $parameters)
    {
      return $this->__soapCall('Subscriber_GetSubscription', array($parameters));
    }

    /**
     * Sets a handle for the subscription of the subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_SetSubscription $parameters
     * @return Subscriber_SetSubscriptionResponse
     */
    public function Subscriber_SetSubscription(Subscriber_SetSubscription $parameters)
    {
      return $this->__soapCall('Subscriber_SetSubscription', array($parameters));
    }

    /**
     * Gets a handle for the product of a subscriber.<br />Parameters: SubscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetProject $parameters
     * @return Subscriber_GetProjectResponse
     */
    public function Subscriber_GetProject(Subscriber_GetProject $parameters)
    {
      return $this->__soapCall('Subscriber_GetProject', array($parameters));
    }

    /**
     * Sets the product of a subscriber.<br />Parameters: SubscriberHandle: Handle for the subscriber. valueHandle: Handle for the new product of the subscriber.
     *
     * @param Subscriber_SetProject $parameters
     * @return Subscriber_SetProjectResponse
     */
    public function Subscriber_SetProject(Subscriber_SetProject $parameters)
    {
      return $this->__soapCall('Subscriber_SetProject', array($parameters));
    }

    /**
     * Gets the start date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetStartDate $parameters
     * @return Subscriber_GetStartDateResponse
     */
    public function Subscriber_GetStartDate(Subscriber_GetStartDate $parameters)
    {
      return $this->__soapCall('Subscriber_GetStartDate', array($parameters));
    }

    /**
     * Set the start date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new start date of the subscriber.
     *
     * @param Subscriber_SetStartDate $parameters
     * @return Subscriber_SetStartDateResponse
     */
    public function Subscriber_SetStartDate(Subscriber_SetStartDate $parameters)
    {
      return $this->__soapCall('Subscriber_SetStartDate', array($parameters));
    }

    /**
     * Gets the registered date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetRegisteredDate $parameters
     * @return Subscriber_GetRegisteredDateResponse
     */
    public function Subscriber_GetRegisteredDate(Subscriber_GetRegisteredDate $parameters)
    {
      return $this->__soapCall('Subscriber_GetRegisteredDate', array($parameters));
    }

    /**
     * Set the registered date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new registered date of the subscriber.
     *
     * @param Subscriber_SetRegisteredDate $parameters
     * @return Subscriber_SetRegisteredDateResponse
     */
    public function Subscriber_SetRegisteredDate(Subscriber_SetRegisteredDate $parameters)
    {
      return $this->__soapCall('Subscriber_SetRegisteredDate', array($parameters));
    }

    /**
     * Gets the end date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetEndDate $parameters
     * @return Subscriber_GetEndDateResponse
     */
    public function Subscriber_GetEndDate(Subscriber_GetEndDate $parameters)
    {
      return $this->__soapCall('Subscriber_GetEndDate', array($parameters));
    }

    /**
     * Set the end date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new end date of the subscriber.
     *
     * @param Subscriber_SetEndDate $parameters
     * @return Subscriber_SetEndDateResponse
     */
    public function Subscriber_SetEndDate(Subscriber_SetEndDate $parameters)
    {
      return $this->__soapCall('Subscriber_SetEndDate', array($parameters));
    }

    /**
     * Gets the expiry date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetExpiryDate $parameters
     * @return Subscriber_GetExpiryDateResponse
     */
    public function Subscriber_GetExpiryDate(Subscriber_GetExpiryDate $parameters)
    {
      return $this->__soapCall('Subscriber_GetExpiryDate', array($parameters));
    }

    /**
     * Set the expiry date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new expiry of the subscriber.
     *
     * @param Subscriber_SetExpiryDate $parameters
     * @return Subscriber_SetExpiryDateResponse
     */
    public function Subscriber_SetExpiryDate(Subscriber_SetExpiryDate $parameters)
    {
      return $this->__soapCall('Subscriber_SetExpiryDate', array($parameters));
    }

    /**
     * Gets the discount expiry date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetDiscountExpiryDate $parameters
     * @return Subscriber_GetDiscountExpiryDateResponse
     */
    public function Subscriber_GetDiscountExpiryDate(Subscriber_GetDiscountExpiryDate $parameters)
    {
      return $this->__soapCall('Subscriber_GetDiscountExpiryDate', array($parameters));
    }

    /**
     * Set the discount expiry date of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The discount expiry date of the subscriber.
     *
     * @param Subscriber_SetDiscountExpiryDate $parameters
     * @return Subscriber_SetDiscountExpiryDateResponse
     */
    public function Subscriber_SetDiscountExpiryDate(Subscriber_SetDiscountExpiryDate $parameters)
    {
      return $this->__soapCall('Subscriber_SetDiscountExpiryDate', array($parameters));
    }

    /**
     * Gets or sets the extra text for the invoice for the subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetExtraTextForInvoice $parameters
     * @return Subscriber_GetExtraTextForInvoiceResponse
     */
    public function Subscriber_GetExtraTextForInvoice(Subscriber_GetExtraTextForInvoice $parameters)
    {
      return $this->__soapCall('Subscriber_GetExtraTextForInvoice', array($parameters));
    }

    /**
     * Sets the extra text for the invoice for the subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The extra text for the invoice for the subscriber.
     *
     * @param Subscriber_SetExtraTextForInvoice $parameters
     * @return Subscriber_SetExtraTextForInvoiceResponse
     */
    public function Subscriber_SetExtraTextForInvoice(Subscriber_SetExtraTextForInvoice $parameters)
    {
      return $this->__soapCall('Subscriber_SetExtraTextForInvoice', array($parameters));
    }

    /**
     * Gets the comments of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_GetComments $parameters
     * @return Subscriber_GetCommentsResponse
     */
    public function Subscriber_GetComments(Subscriber_GetComments $parameters)
    {
      return $this->__soapCall('Subscriber_GetComments', array($parameters));
    }

    /**
     * Sets the comments of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new name for the subscriber.
     *
     * @param Subscriber_SetComments $parameters
     * @return Subscriber_SetCommentsResponse
     */
    public function Subscriber_SetComments(Subscriber_SetComments $parameters)
    {
      return $this->__soapCall('Subscriber_SetComments', array($parameters));
    }

    /**
     * Gets the special price of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_SetSpecialPrice $parameters
     * @return Subscriber_SetSpecialPriceResponse
     */
    public function Subscriber_SetSpecialPrice(Subscriber_SetSpecialPrice $parameters)
    {
      return $this->__soapCall('Subscriber_SetSpecialPrice', array($parameters));
    }

    /**
     * Sets the special price of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The new special price for the subscriber.
     *
     * @param Subscriber_GetSpecialPrice $parameters
     * @return Subscriber_GetSpecialPriceResponse
     */
    public function Subscriber_GetSpecialPrice(Subscriber_GetSpecialPrice $parameters)
    {
      return $this->__soapCall('Subscriber_GetSpecialPrice', array($parameters));
    }

    /**
     * Gets the quantity factor of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_SetQuantityFactor $parameters
     * @return Subscriber_SetQuantityFactorResponse
     */
    public function Subscriber_SetQuantityFactor(Subscriber_SetQuantityFactor $parameters)
    {
      return $this->__soapCall('Subscriber_SetQuantityFactor', array($parameters));
    }

    /**
     * Sets the quantity factor of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The quantity factor for the subscriber.
     *
     * @param Subscriber_GetQuantityFactor $parameters
     * @return Subscriber_GetQuantityFactorResponse
     */
    public function Subscriber_GetQuantityFactor(Subscriber_GetQuantityFactor $parameters)
    {
      return $this->__soapCall('Subscriber_GetQuantityFactor', array($parameters));
    }

    /**
     * Gets the price index of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber.
     *
     * @param Subscriber_SetPriceIndex $parameters
     * @return Subscriber_SetPriceIndexResponse
     */
    public function Subscriber_SetPriceIndex(Subscriber_SetPriceIndex $parameters)
    {
      return $this->__soapCall('Subscriber_SetPriceIndex', array($parameters));
    }

    /**
     * Sets the price index of a subscriber.<br />Parameters: subscriberHandle: Handle for the subscriber. value: The price index for the subscriber.
     *
     * @param Subscriber_GetPriceIndex $parameters
     * @return Subscriber_GetPriceIndexResponse
     */
    public function Subscriber_GetPriceIndex(Subscriber_GetPriceIndex $parameters)
    {
      return $this->__soapCall('Subscriber_GetPriceIndex', array($parameters));
    }

    /**
     * Gets the discount percentage of a subscriber.<br />Parameters: subscriberHandle: Handle for the discount percentage.
     *
     * @param Subscriber_SetDiscountAsPercent $parameters
     * @return Subscriber_SetDiscountAsPercentResponse
     */
    public function Subscriber_SetDiscountAsPercent(Subscriber_SetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('Subscriber_SetDiscountAsPercent', array($parameters));
    }

    /**
     * Sets the discount percentage of a subscriber.<br />Parameters: subscriberHandle: Handle for the discount percentage. value: The new name for the discount percentage.
     *
     * @param Subscriber_GetDiscountAsPercent $parameters
     * @return Subscriber_GetDiscountAsPercentResponse
     */
    public function Subscriber_GetDiscountAsPercent(Subscriber_GetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('Subscriber_GetDiscountAsPercent', array($parameters));
    }

    /**
     * Creates a new subscription from a data object.<br />Parameters: data: The data object that specifies the properties of the new subscription.
     *
     * @param Subscription_CreateFromData $parameters
     * @return Subscription_CreateFromDataResponse
     */
    public function Subscription_CreateFromData(Subscription_CreateFromData $parameters)
    {
      return $this->__soapCall('Subscription_CreateFromData', array($parameters));
    }

    /**
     * Creates new subscriptions from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new subscriptions.
     *
     * @param Subscription_CreateFromDataArray $parameters
     * @return Subscription_CreateFromDataArrayResponse
     */
    public function Subscription_CreateFromDataArray(Subscription_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Subscription_CreateFromDataArray', array($parameters));
    }

    /**
     * Update subscriptions from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Subscription_UpdateFromDataArray $parameters
     * @return Subscription_UpdateFromDataArrayResponse
     */
    public function Subscription_UpdateFromDataArray(Subscription_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Subscription_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a subscription from a data object.<br />Parameters: data: The data object.
     *
     * @param Subscription_UpdateFromData $parameters
     * @return Subscription_UpdateFromDataResponse
     */
    public function Subscription_UpdateFromData(Subscription_UpdateFromData $parameters)
    {
      return $this->__soapCall('Subscription_UpdateFromData', array($parameters));
    }

    /**
     * Returns a subscription data object for a given subscripton.<br />Parameters: entityHandle: A handle for the subscription.
     *
     * @param Subscription_GetData $parameters
     * @return Subscription_GetDataResponse
     */
    public function Subscription_GetData(Subscription_GetData $parameters)
    {
      return $this->__soapCall('Subscription_GetData', array($parameters));
    }

    /**
     * Returns current subscriptions objects for a given set of subscription handles.<br />Parameters: entityHandles: An array of the subscription handles.
     *
     * @param Subscription_GetDataArray $parameters
     * @return Subscription_GetDataArrayResponse
     */
    public function Subscription_GetDataArray(Subscription_GetDataArray $parameters)
    {
      return $this->__soapCall('Subscription_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetNumber $parameters
     * @return Subscription_GetNumberResponse
     */
    public function Subscription_GetNumber(Subscription_GetNumber $parameters)
    {
      return $this->__soapCall('Subscription_GetNumber', array($parameters));
    }

    /**
     * Gets the name of the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetName $parameters
     * @return Subscription_GetNameResponse
     */
    public function Subscription_GetName(Subscription_GetName $parameters)
    {
      return $this->__soapCall('Subscription_GetName', array($parameters));
    }

    /**
     * Set the name of the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new name of the subscription.
     *
     * @param Subscription_SetName $parameters
     * @return Subscription_SetNameResponse
     */
    public function Subscription_SetName(Subscription_SetName $parameters)
    {
      return $this->__soapCall('Subscription_SetName', array($parameters));
    }

    /**
     * Gets the description for the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetDescription $parameters
     * @return Subscription_GetDescriptionResponse
     */
    public function Subscription_GetDescription(Subscription_GetDescription $parameters)
    {
      return $this->__soapCall('Subscription_GetDescription', array($parameters));
    }

    /**
     * Sets the description for the subscription.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new description of the subscription.
     *
     * @param Subscription_SetDescription $parameters
     * @return Subscription_SetDescriptionResponse
     */
    public function Subscription_SetDescription(Subscription_SetDescription $parameters)
    {
      return $this->__soapCall('Subscription_SetDescription', array($parameters));
    }

    /**
     * Gets whether or not the subscription name should be included as the first product line.<br />Parameters: subscriptionHandle: Handle for the subscription.
     *
     * @param Subscription_GetIncludeName $parameters
     * @return Subscription_GetIncludeNameResponse
     */
    public function Subscription_GetIncludeName(Subscription_GetIncludeName $parameters)
    {
      return $this->__soapCall('Subscription_GetIncludeName', array($parameters));
    }

    /**
     * Sets whether or not the subscription name should be included as the first product line.<br />Parameters: subscriptionHandle: Handle for the subscription. value: The new value of the parameter.
     *
     * @param Subscription_SetIncludeName $parameters
     * @return Subscription_SetIncludeNameResponse
     */
    public function Subscription_SetIncludeName(Subscription_SetIncludeName $parameters)
    {
      return $this->__soapCall('Subscription_SetIncludeName', array($parameters));
    }

    /**
     * Sets the attention for the debtor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for the new reference for the debtor.
     *
     * @param Quotation_SetYourReference $parameters
     * @return Quotation_SetYourReferenceResponse
     */
    public function Quotation_SetYourReference(Quotation_SetYourReference $parameters)
    {
      return $this->__soapCall('Quotation_SetYourReference', array($parameters));
    }

    /**
     * Gets a handle for the primary reference of the creditor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetOurReference $parameters
     * @return Quotation_GetOurReferenceResponse
     */
    public function Quotation_GetOurReference(Quotation_GetOurReference $parameters)
    {
      return $this->__soapCall('Quotation_GetOurReference', array($parameters));
    }

    /**
     * Sets the primary reference of the creditor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new primary reference of the creditor of the quotation.
     *
     * @param Quotation_SetOurReference $parameters
     * @return Quotation_SetOurReferenceResponse
     */
    public function Quotation_SetOurReference(Quotation_SetOurReference $parameters)
    {
      return $this->__soapCall('Quotation_SetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the secondary reference of the creditor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetOurReference2 $parameters
     * @return Quotation_GetOurReference2Response
     */
    public function Quotation_GetOurReference2(Quotation_GetOurReference2 $parameters)
    {
      return $this->__soapCall('Quotation_GetOurReference2', array($parameters));
    }

    /**
     * Sets the secondary reference of the creditor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new secondary reference of the creditor of the quotation.
     *
     * @param Quotation_SetOurReference2 $parameters
     * @return Quotation_SetOurReference2Response
     */
    public function Quotation_SetOurReference2(Quotation_SetOurReference2 $parameters)
    {
      return $this->__soapCall('Quotation_SetOurReference2', array($parameters));
    }

    /**
     * Gets the date of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDate $parameters
     * @return Quotation_GetDateResponse
     */
    public function Quotation_GetDate(Quotation_GetDate $parameters)
    {
      return $this->__soapCall('Quotation_GetDate', array($parameters));
    }

    /**
     * Sets the date of an quotation. The due date is calculated accordingly as specified by the term of payment.<br />Parameters: quotationHandle: Handle for the quotation. value: The new date of the quotation.
     *
     * @param Quotation_SetDate $parameters
     * @return Quotation_SetDateResponse
     */
    public function Quotation_SetDate(Quotation_SetDate $parameters)
    {
      return $this->__soapCall('Quotation_SetDate', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetTermOfPayment $parameters
     * @return Quotation_GetTermOfPaymentResponse
     */
    public function Quotation_GetTermOfPayment(Quotation_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('Quotation_GetTermOfPayment', array($parameters));
    }

    /**
     * Sets the term of payment of an quotation. The due date is calculated accordingly.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new term of payment of the quotation.
     *
     * @param Quotation_SetTermOfPayment $parameters
     * @return Quotation_SetTermOfPaymentResponse
     */
    public function Quotation_SetTermOfPayment(Quotation_SetTermOfPayment $parameters)
    {
      return $this->__soapCall('Quotation_SetTermOfPayment', array($parameters));
    }

    /**
     * Gets the due date of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDueDate $parameters
     * @return Quotation_GetDueDateResponse
     */
    public function Quotation_GetDueDate(Quotation_GetDueDate $parameters)
    {
      return $this->__soapCall('Quotation_GetDueDate', array($parameters));
    }

    /**
     * Sets the due date of an quotation. It is only allowed to set the due date to an actual date when the type of TermOfPayment is set to DueDate.<br />Parameters: quotationHandle: Handle for the quotation. value: The new due date of the quotation.
     *
     * @param Quotation_SetDueDate $parameters
     * @return Quotation_SetDueDateResponse
     */
    public function Quotation_SetDueDate(Quotation_SetDueDate $parameters)
    {
      return $this->__soapCall('Quotation_SetDueDate', array($parameters));
    }

    /**
     * Gets a handle for the currency of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetCurrency $parameters
     * @return Quotation_GetCurrencyResponse
     */
    public function Quotation_GetCurrency(Quotation_GetCurrency $parameters)
    {
      return $this->__soapCall('Quotation_GetCurrency', array($parameters));
    }

    /**
     * Sets the currency of an quotation. The value may not be null.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new currency of the quotation.
     *
     * @param Quotation_SetCurrency $parameters
     * @return Quotation_SetCurrencyResponse
     */
    public function Quotation_SetCurrency(Quotation_SetCurrency $parameters)
    {
      return $this->__soapCall('Quotation_SetCurrency', array($parameters));
    }

    /**
     * Gets the exchange rate of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetExchangeRate $parameters
     * @return Quotation_GetExchangeRateResponse
     */
    public function Quotation_GetExchangeRate(Quotation_GetExchangeRate $parameters)
    {
      return $this->__soapCall('Quotation_GetExchangeRate', array($parameters));
    }

    /**
     * Sets the exchange rate of an quotation. The values on the lines are not updated when setting this property.<br />Parameters: quotationHandle: Handle for the quotation. value: The new exchange of the quotation.
     *
     * @param Quotation_SetExchangeRate $parameters
     * @return Quotation_SetExchangeRateResponse
     */
    public function Quotation_SetExchangeRate(Quotation_SetExchangeRate $parameters)
    {
      return $this->__soapCall('Quotation_SetExchangeRate', array($parameters));
    }

    /**
     * Gets whether the quotation has VAT included.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetIsVatIncluded $parameters
     * @return Quotation_GetIsVatIncludedResponse
     */
    public function Quotation_GetIsVatIncluded(Quotation_GetIsVatIncluded $parameters)
    {
      return $this->__soapCall('Quotation_GetIsVatIncluded', array($parameters));
    }

    /**
     * Sets whether the quotation has VAT included.<br />Parameters: quotationHandle: Handle for the quotation. value: The new value indicating whether the quotation should include VAT.
     *
     * @param Quotation_SetIsVatIncluded $parameters
     * @return Quotation_SetIsVatIncludedResponse
     */
    public function Quotation_SetIsVatIncluded(Quotation_SetIsVatIncluded $parameters)
    {
      return $this->__soapCall('Quotation_SetIsVatIncluded', array($parameters));
    }

    /**
     * Gets the current VAT zone of the quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetVatZone $parameters
     * @return Quotation_GetVatZoneResponse
     */
    public function Quotation_GetVatZone(Quotation_GetVatZone $parameters)
    {
      return $this->__soapCall('Quotation_GetVatZone', array($parameters));
    }

    /**
     * Sets the current VAT zone of the quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: The new value handle to an ExtendVatZone.
     *
     * @param Quotation_SetVatZone $parameters
     * @return Quotation_SetVatZoneResponse
     */
    public function Quotation_SetVatZone(Quotation_SetVatZone $parameters)
    {
      return $this->__soapCall('Quotation_SetVatZone', array($parameters));
    }

    /**
     * Gets a handle for the layout of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetLayout $parameters
     * @return Quotation_GetLayoutResponse
     */
    public function Quotation_GetLayout(Quotation_GetLayout $parameters)
    {
      return $this->__soapCall('Quotation_GetLayout', array($parameters));
    }

    /**
     * Sets the layout of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new layout of the quotation.
     *
     * @param Quotation_SetLayout $parameters
     * @return Quotation_SetLayoutResponse
     */
    public function Quotation_SetLayout(Quotation_SetLayout $parameters)
    {
      return $this->__soapCall('Quotation_SetLayout', array($parameters));
    }

    /**
     * Gets a handle for the delivery location of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryLocation $parameters
     * @return Quotation_GetDeliveryLocationResponse
     */
    public function Quotation_GetDeliveryLocation(Quotation_GetDeliveryLocation $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryLocation', array($parameters));
    }

    /**
     * Sets the delivery location of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new delivery location of the quotation.
     *
     * @param Quotation_SetDeliveryLocation $parameters
     * @return Quotation_SetDeliveryLocationResponse
     */
    public function Quotation_SetDeliveryLocation(Quotation_SetDeliveryLocation $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryLocation', array($parameters));
    }

    /**
     * Gets the delivery address of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryAddress $parameters
     * @return Quotation_GetDeliveryAddressResponse
     */
    public function Quotation_GetDeliveryAddress(Quotation_GetDeliveryAddress $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryAddress', array($parameters));
    }

    /**
     * Sets the delivery address of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new delivery address of the quotation.
     *
     * @param Quotation_SetDeliveryAddress $parameters
     * @return Quotation_SetDeliveryAddressResponse
     */
    public function Quotation_SetDeliveryAddress(Quotation_SetDeliveryAddress $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryAddress', array($parameters));
    }

    /**
     * Gets the delivery postal code of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryPostalCode $parameters
     * @return Quotation_GetDeliveryPostalCodeResponse
     */
    public function Quotation_GetDeliveryPostalCode(Quotation_GetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryPostalCode', array($parameters));
    }

    /**
     * Sets the delivery postal code of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new delivery postal code of the quotation.
     *
     * @param Quotation_SetDeliveryPostalCode $parameters
     * @return Quotation_SetDeliveryPostalCodeResponse
     */
    public function Quotation_SetDeliveryPostalCode(Quotation_SetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryPostalCode', array($parameters));
    }

    /**
     * Gets the delivery city of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryCity $parameters
     * @return Quotation_GetDeliveryCityResponse
     */
    public function Quotation_GetDeliveryCity(Quotation_GetDeliveryCity $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryCity', array($parameters));
    }

    /**
     * Sets the delivery city of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new delivery city of the quotation.
     *
     * @param Quotation_SetDeliveryCity $parameters
     * @return Quotation_SetDeliveryCityResponse
     */
    public function Quotation_SetDeliveryCity(Quotation_SetDeliveryCity $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryCity', array($parameters));
    }

    /**
     * Gets the delivery country of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryCountry $parameters
     * @return Quotation_GetDeliveryCountryResponse
     */
    public function Quotation_GetDeliveryCountry(Quotation_GetDeliveryCountry $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryCountry', array($parameters));
    }

    /**
     * Sets the delivery country of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new delivery country of the quotation.
     *
     * @param Quotation_SetDeliveryCountry $parameters
     * @return Quotation_SetDeliveryCountryResponse
     */
    public function Quotation_SetDeliveryCountry(Quotation_SetDeliveryCountry $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryCountry', array($parameters));
    }

    /**
     * Gets the terms of delivery of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetTermsOfDelivery $parameters
     * @return Quotation_GetTermsOfDeliveryResponse
     */
    public function Quotation_GetTermsOfDelivery(Quotation_GetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('Quotation_GetTermsOfDelivery', array($parameters));
    }

    /**
     * Sets the terms of delivery of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new terms of delivery of the quotation.
     *
     * @param Quotation_SetTermsOfDelivery $parameters
     * @return Quotation_SetTermsOfDeliveryResponse
     */
    public function Quotation_SetTermsOfDelivery(Quotation_SetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('Quotation_SetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets the delivery date of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryDate $parameters
     * @return Quotation_GetDeliveryDateResponse
     */
    public function Quotation_GetDeliveryDate(Quotation_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryDate', array($parameters));
    }

    /**
     * Sets the delivery date of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new delivery date of the quotation.
     *
     * @param Quotation_SetDeliveryDate $parameters
     * @return Quotation_SetDeliveryDateResponse
     */
    public function Quotation_SetDeliveryDate(Quotation_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets the heading of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetHeading $parameters
     * @return Quotation_GetHeadingResponse
     */
    public function Quotation_GetHeading(Quotation_GetHeading $parameters)
    {
      return $this->__soapCall('Quotation_GetHeading', array($parameters));
    }

    /**
     * Sets the heading of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new heading of the quotation.
     *
     * @param Quotation_SetHeading $parameters
     * @return Quotation_SetHeadingResponse
     */
    public function Quotation_SetHeading(Quotation_SetHeading $parameters)
    {
      return $this->__soapCall('Quotation_SetHeading', array($parameters));
    }

    /**
     * Gets the primary line of text of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetTextLine1 $parameters
     * @return Quotation_GetTextLine1Response
     */
    public function Quotation_GetTextLine1(Quotation_GetTextLine1 $parameters)
    {
      return $this->__soapCall('Quotation_GetTextLine1', array($parameters));
    }

    /**
     * Sets the primary line of text of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new primary line of text of the quotation.
     *
     * @param Quotation_SetTextLine1 $parameters
     * @return Quotation_SetTextLine1Response
     */
    public function Quotation_SetTextLine1(Quotation_SetTextLine1 $parameters)
    {
      return $this->__soapCall('Quotation_SetTextLine1', array($parameters));
    }

    /**
     * Gets the secondary line of text of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetTextLine2 $parameters
     * @return Quotation_GetTextLine2Response
     */
    public function Quotation_GetTextLine2(Quotation_GetTextLine2 $parameters)
    {
      return $this->__soapCall('Quotation_GetTextLine2', array($parameters));
    }

    /**
     * Sets the secondary line of text of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new secondary line of text of the quotation.
     *
     * @param Quotation_SetTextLine2 $parameters
     * @return Quotation_SetTextLine2Response
     */
    public function Quotation_SetTextLine2(Quotation_SetTextLine2 $parameters)
    {
      return $this->__soapCall('Quotation_SetTextLine2', array($parameters));
    }

    /**
     * Gets the other reference of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetOtherReference $parameters
     * @return Quotation_GetOtherReferenceResponse
     */
    public function Quotation_GetOtherReference(Quotation_GetOtherReference $parameters)
    {
      return $this->__soapCall('Quotation_GetOtherReference', array($parameters));
    }

    /**
     * Sets the other reference of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new other reference of the quotation.
     *
     * @param Quotation_SetOtherReference $parameters
     * @return Quotation_SetOtherReferenceResponse
     */
    public function Quotation_SetOtherReference(Quotation_SetOtherReference $parameters)
    {
      return $this->__soapCall('Quotation_SetOtherReference', array($parameters));
    }

    /**
     * Gets thether an quotation is archived.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetIsArchived $parameters
     * @return Quotation_GetIsArchivedResponse
     */
    public function Quotation_GetIsArchived(Quotation_GetIsArchived $parameters)
    {
      return $this->__soapCall('Quotation_GetIsArchived', array($parameters));
    }

    /**
     * Gets whether an quotation is sent.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetIsSent $parameters
     * @return Quotation_GetIsSentResponse
     */
    public function Quotation_GetIsSent(Quotation_GetIsSent $parameters)
    {
      return $this->__soapCall('Quotation_GetIsSent', array($parameters));
    }

    /**
     * Gets the total amount for all the lines without VAT of an quotation (in the currency of the quotation).<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetNetAmount $parameters
     * @return Quotation_GetNetAmountResponse
     */
    public function Quotation_GetNetAmount(Quotation_GetNetAmount $parameters)
    {
      return $this->__soapCall('Quotation_GetNetAmount', array($parameters));
    }

    /**
     * Gets the total VAT amount for all the lines of an quotation (in the currency of the quotation).<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetVatAmount $parameters
     * @return Quotation_GetVatAmountResponse
     */
    public function Quotation_GetVatAmount(Quotation_GetVatAmount $parameters)
    {
      return $this->__soapCall('Quotation_GetVatAmount', array($parameters));
    }

    /**
     * Gets the total gross amount for all the lines of an quotation (in the currency of the quotation).<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetGrossAmount $parameters
     * @return Quotation_GetGrossAmountResponse
     */
    public function Quotation_GetGrossAmount(Quotation_GetGrossAmount $parameters)
    {
      return $this->__soapCall('Quotation_GetGrossAmount', array($parameters));
    }

    /**
     * Gets the margin of an quotation (in the currency of the quotation).<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetMargin $parameters
     * @return Quotation_GetMarginResponse
     */
    public function Quotation_GetMargin(Quotation_GetMargin $parameters)
    {
      return $this->__soapCall('Quotation_GetMargin', array($parameters));
    }

    /**
     * Gets the margin of an quotation as percent.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetMarginAsPercent $parameters
     * @return Quotation_GetMarginAsPercentResponse
     */
    public function Quotation_GetMarginAsPercent(Quotation_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('Quotation_GetMarginAsPercent', array($parameters));
    }

    /**
     * Gets the rounding amount for all lines of the quotation (in the currency of the quotation).<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetRoundingAmount $parameters
     * @return Quotation_GetRoundingAmountResponse
     */
    public function Quotation_GetRoundingAmount(Quotation_GetRoundingAmount $parameters)
    {
      return $this->__soapCall('Quotation_GetRoundingAmount', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DebtorCounty of an quotation. (UK only)<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorCounty $parameters
     * @return Quotation_GetDebtorCountyResponse
     */
    public function Quotation_GetDebtorCounty(Quotation_GetDebtorCounty $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DebtorCounty of an quotation. (UK only)<br />Parameters: quotationHandle: Handle for the quotation. value: The new DebtorCounty of the quotation.
     *
     * @param Quotation_SetDebtorCounty $parameters
     * @return Quotation_SetDebtorCountyResponse
     */
    public function Quotation_SetDebtorCounty(Quotation_SetDebtorCounty $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DeliveryCounty of an quotation. (UK only)<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDeliveryCounty $parameters
     * @return Quotation_GetDeliveryCountyResponse
     */
    public function Quotation_GetDeliveryCounty(Quotation_GetDeliveryCounty $parameters)
    {
      return $this->__soapCall('Quotation_GetDeliveryCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DeliveryCounty of an quotation. (UK only)<br />Parameters: quotationHandle: Handle for the quotation. value: The new DeliveryCounty of the quotation.
     *
     * @param Quotation_SetDeliveryCounty $parameters
     * @return Quotation_SetDeliveryCountyResponse
     */
    public function Quotation_SetDeliveryCounty(Quotation_SetDeliveryCounty $parameters)
    {
      return $this->__soapCall('Quotation_SetDeliveryCounty', array($parameters));
    }

    /**
     * Creates a new quotation line from a data object.<br />Parameters: data: The data object that specifies the properties of the new quotation line.
     *
     * @param QuotationLine_CreateFromData $parameters
     * @return QuotationLine_CreateFromDataResponse
     */
    public function QuotationLine_CreateFromData(QuotationLine_CreateFromData $parameters)
    {
      return $this->__soapCall('QuotationLine_CreateFromData', array($parameters));
    }

    /**
     * Creates new quotation lines from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new quotation lines.
     *
     * @param QuotationLine_CreateFromDataArray $parameters
     * @return QuotationLine_CreateFromDataArrayResponse
     */
    public function QuotationLine_CreateFromDataArray(QuotationLine_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('QuotationLine_CreateFromDataArray', array($parameters));
    }

    /**
     * Update quotation lines from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param QuotationLine_UpdateFromDataArray $parameters
     * @return QuotationLine_UpdateFromDataArrayResponse
     */
    public function QuotationLine_UpdateFromDataArray(QuotationLine_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('QuotationLine_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an quotation line from a data object.<br />Parameters: data: The data object.
     *
     * @param QuotationLine_UpdateFromData $parameters
     * @return QuotationLine_UpdateFromDataResponse
     */
    public function QuotationLine_UpdateFromData(QuotationLine_UpdateFromData $parameters)
    {
      return $this->__soapCall('QuotationLine_UpdateFromData', array($parameters));
    }

    /**
     * Returns an quotation line data object for a given quotation line.<br />Parameters: entityHandle: A handle for the quotation line.
     *
     * @param QuotationLine_GetData $parameters
     * @return QuotationLine_GetDataResponse
     */
    public function QuotationLine_GetData(QuotationLine_GetData $parameters)
    {
      return $this->__soapCall('QuotationLine_GetData', array($parameters));
    }

    /**
     * Returns quotation line data objects for a given set of quotation line handles.<br />Parameters: entityHandles: An array of the quotation line handles.
     *
     * @param QuotationLine_GetDataArray $parameters
     * @return QuotationLine_GetDataArrayResponse
     */
    public function QuotationLine_GetDataArray(QuotationLine_GetDataArray $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetNumber $parameters
     * @return QuotationLine_GetNumberResponse
     */
    public function QuotationLine_GetNumber(QuotationLine_GetNumber $parameters)
    {
      return $this->__soapCall('QuotationLine_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the quotation of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetQuotation $parameters
     * @return QuotationLine_GetQuotationResponse
     */
    public function QuotationLine_GetQuotation(QuotationLine_GetQuotation $parameters)
    {
      return $this->__soapCall('QuotationLine_GetQuotation', array($parameters));
    }

    /**
     * Sets the description of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: The new description of the quotation line.
     *
     * @param QuotationLine_SetDescription $parameters
     * @return QuotationLine_SetDescriptionResponse
     */
    public function QuotationLine_SetDescription(QuotationLine_SetDescription $parameters)
    {
      return $this->__soapCall('QuotationLine_SetDescription', array($parameters));
    }

    /**
     * Gets the description of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetDescription $parameters
     * @return QuotationLine_GetDescriptionResponse
     */
    public function QuotationLine_GetDescription(QuotationLine_GetDescription $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDescription', array($parameters));
    }

    /**
     * Gets the delivery date of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetDeliveryDate $parameters
     * @return QuotationLine_GetDeliveryDateResponse
     */
    public function QuotationLine_GetDeliveryDate(QuotationLine_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDeliveryDate', array($parameters));
    }

    /**
     * Sets the delivery date of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: The new delivery date of the quotation line.
     *
     * @param QuotationLine_SetDeliveryDate $parameters
     * @return QuotationLine_SetDeliveryDateResponse
     */
    public function QuotationLine_SetDeliveryDate(QuotationLine_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('QuotationLine_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets handle for primary unit of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetUnit $parameters
     * @return QuotationLine_GetUnitResponse
     */
    public function QuotationLine_GetUnit(QuotationLine_GetUnit $parameters)
    {
      return $this->__soapCall('QuotationLine_GetUnit', array($parameters));
    }

    /**
     * Sets primary unit of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line. valueHandle: Handle for new primary unit of the quotation line.
     *
     * @param QuotationLine_SetUnit $parameters
     * @return QuotationLine_SetUnitResponse
     */
    public function QuotationLine_SetUnit(QuotationLine_SetUnit $parameters)
    {
      return $this->__soapCall('QuotationLine_SetUnit', array($parameters));
    }

    /**
     * Gets handle for product of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetProduct $parameters
     * @return QuotationLine_GetProductResponse
     */
    public function QuotationLine_GetProduct(QuotationLine_GetProduct $parameters)
    {
      return $this->__soapCall('QuotationLine_GetProduct', array($parameters));
    }

    /**
     * Sets product of an quotation line. Setting the product also sets the unit cost price to the cost price of the product. The product must be set before setting the quantity and the unit net price.<br />Parameters: quotationLineHandle: Handle for the quotation line. valueHandle: Handle for new product of the quotation line.
     *
     * @param QuotationLine_SetProduct $parameters
     * @return QuotationLine_SetProductResponse
     */
    public function QuotationLine_SetProduct(QuotationLine_SetProduct $parameters)
    {
      return $this->__soapCall('QuotationLine_SetProduct', array($parameters));
    }

    /**
     * Sets primary quantity of an quotation line. The product of the quotation line must be set before setting this property.<br />Parameters: quotationLineHandle: Handle for the quotation line. valueHandle: Handle for primary quantity of the quotation line.
     *
     * @param QuotationLine_SetQuantity $parameters
     * @return QuotationLine_SetQuantityResponse
     */
    public function QuotationLine_SetQuantity(QuotationLine_SetQuantity $parameters)
    {
      return $this->__soapCall('QuotationLine_SetQuantity', array($parameters));
    }

    /**
     * Gets primary quantity of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetQuantity $parameters
     * @return QuotationLine_GetQuantityResponse
     */
    public function QuotationLine_GetQuantity(QuotationLine_GetQuantity $parameters)
    {
      return $this->__soapCall('QuotationLine_GetQuantity', array($parameters));
    }

    /**
     * Sets price per unit without VAT of an quotation line (in the currency of the quotation). The product of the quotation line must be set before setting this property.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: The new price per unit without VAT of the quotation line.
     *
     * @param QuotationLine_SetUnitNetPrice $parameters
     * @return QuotationLine_SetUnitNetPriceResponse
     */
    public function QuotationLine_SetUnitNetPrice(QuotationLine_SetUnitNetPrice $parameters)
    {
      return $this->__soapCall('QuotationLine_SetUnitNetPrice', array($parameters));
    }

    /**
     * Sets cost price per unit on a quotation line. The product of the quotation line must be set before setting this property.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: The new cost price per unit.
     *
     * @param QuotationLine_SetUnitCostPrice $parameters
     * @return QuotationLine_SetUnitCostPriceResponse
     */
    public function QuotationLine_SetUnitCostPrice(QuotationLine_SetUnitCostPrice $parameters)
    {
      return $this->__soapCall('QuotationLine_SetUnitCostPrice', array($parameters));
    }

    /**
     * Gets price per unit without VAT of an quotation line (in the currency of the quotation).<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetUnitNetPrice $parameters
     * @return QuotationLine_GetUnitNetPriceResponse
     */
    public function QuotationLine_GetUnitNetPrice(QuotationLine_GetUnitNetPrice $parameters)
    {
      return $this->__soapCall('QuotationLine_GetUnitNetPrice', array($parameters));
    }

    /**
     * Gets discount of an quotation line as percent.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetDiscountAsPercent $parameters
     * @return QuotationLine_GetDiscountAsPercentResponse
     */
    public function QuotationLine_GetDiscountAsPercent(QuotationLine_GetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDiscountAsPercent', array($parameters));
    }

    /**
     * Sets discount of an quotation line as percent.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: The new discount as percent of the quotation line.
     *
     * @param QuotationLine_SetDiscountAsPercent $parameters
     * @return QuotationLine_SetDiscountAsPercentResponse
     */
    public function QuotationLine_SetDiscountAsPercent(QuotationLine_SetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('QuotationLine_SetDiscountAsPercent', array($parameters));
    }

    /**
     * Gets the cost price per unit witout VAT of an quotation line (in the default currency).<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetUnitCostPrice $parameters
     * @return QuotationLine_GetUnitCostPriceResponse
     */
    public function QuotationLine_GetUnitCostPrice(QuotationLine_GetUnitCostPrice $parameters)
    {
      return $this->__soapCall('QuotationLine_GetUnitCostPrice', array($parameters));
    }

    /**
     * Gets the total amount without VAT of an quotation line (in the currency of the quotation).<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetTotalNetAmount $parameters
     * @return QuotationLine_GetTotalNetAmountResponse
     */
    public function QuotationLine_GetTotalNetAmount(QuotationLine_GetTotalNetAmount $parameters)
    {
      return $this->__soapCall('QuotationLine_GetTotalNetAmount', array($parameters));
    }

    /**
     * Gets the margin of an quotation line (in the currency of the quotation).<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetTotalMargin $parameters
     * @return QuotationLine_GetTotalMarginResponse
     */
    public function QuotationLine_GetTotalMargin(QuotationLine_GetTotalMargin $parameters)
    {
      return $this->__soapCall('QuotationLine_GetTotalMargin', array($parameters));
    }

    /**
     * Gets the margin as percent of an quotation line.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetMarginAsPercent $parameters
     * @return QuotationLine_GetMarginAsPercentResponse
     */
    public function QuotationLine_GetMarginAsPercent(QuotationLine_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('QuotationLine_GetMarginAsPercent', array($parameters));
    }

    /**
     * Gets a handle for the department of an quotation line. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetDepartment $parameters
     * @return QuotationLine_GetDepartmentResponse
     */
    public function QuotationLine_GetDepartment(QuotationLine_GetDepartment $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDepartment', array($parameters));
    }

    /**
     * Sets the department of an quotation line. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: quotationLineHandle: Handle for the quotation line. value: Handle for the new department of the quotation line.
     *
     * @param QuotationLine_SetDepartment $parameters
     * @return QuotationLine_SetDepartmentResponse
     */
    public function QuotationLine_SetDepartment(QuotationLine_SetDepartment $parameters)
    {
      return $this->__soapCall('QuotationLine_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of an quotation line. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetDistributionKey $parameters
     * @return QuotationLine_GetDistributionKeyResponse
     */
    public function QuotationLine_GetDistributionKey(QuotationLine_GetDistributionKey $parameters)
    {
      return $this->__soapCall('QuotationLine_GetDistributionKey', array($parameters));
    }

    /**
     * Creates new projects from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new projects.
     *
     * @param Project_CreateFromDataArray $parameters
     * @return Project_CreateFromDataArrayResponse
     */
    public function Project_CreateFromDataArray(Project_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Project_CreateFromDataArray', array($parameters));
    }

    /**
     * Update projects from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Project_UpdateFromDataArray $parameters
     * @return Project_UpdateFromDataArrayResponse
     */
    public function Project_UpdateFromDataArray(Project_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Project_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a project from a data object.<br />Parameters: data: The data object.
     *
     * @param Project_UpdateFromData $parameters
     * @return Project_UpdateFromDataResponse
     */
    public function Project_UpdateFromData(Project_UpdateFromData $parameters)
    {
      return $this->__soapCall('Project_UpdateFromData', array($parameters));
    }

    /**
     * Returns a project data object for a given project.<br />Parameters: entityHandle: A handle for the project.
     *
     * @param Project_GetData $parameters
     * @return Project_GetDataResponse
     */
    public function Project_GetData(Project_GetData $parameters)
    {
      return $this->__soapCall('Project_GetData', array($parameters));
    }

    /**
     * Returns project data objects for a given set of project handles.<br />Parameters: entityHandles: An array of the project handles.
     *
     * @param Project_GetDataArray $parameters
     * @return Project_GetDataArrayResponse
     */
    public function Project_GetDataArray(Project_GetDataArray $parameters)
    {
      return $this->__soapCall('Project_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetNumber $parameters
     * @return Project_GetNumberResponse
     */
    public function Project_GetNumber(Project_GetNumber $parameters)
    {
      return $this->__soapCall('Project_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetName $parameters
     * @return Project_GetNameResponse
     */
    public function Project_GetName(Project_GetName $parameters)
    {
      return $this->__soapCall('Project_GetName', array($parameters));
    }

    /**
     * Sets the name of a project.<br />Parameters: projectHandle: Handle for the project. value: The new name of the project.
     *
     * @param Project_SetName $parameters
     * @return Project_SetNameResponse
     */
    public function Project_SetName(Project_SetName $parameters)
    {
      return $this->__soapCall('Project_SetName', array($parameters));
    }

    /**
     * Gets handle for project group of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetProjectGroup $parameters
     * @return Project_GetProjectGroupResponse
     */
    public function Project_GetProjectGroup(Project_GetProjectGroup $parameters)
    {
      return $this->__soapCall('Project_GetProjectGroup', array($parameters));
    }

    /**
     * Sets the project group of a project.<br />Parameters: projectHandle: Handle for the project. valueHandle: Handle for new project group of the project.
     *
     * @param Project_SetProjectGroup $parameters
     * @return Project_SetProjectGroupResponse
     */
    public function Project_SetProjectGroup(Project_SetProjectGroup $parameters)
    {
      return $this->__soapCall('Project_SetProjectGroup', array($parameters));
    }

    /**
     * Gets whether a project is a main project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetIsMainProject $parameters
     * @return Project_GetIsMainProjectResponse
     */
    public function Project_GetIsMainProject(Project_GetIsMainProject $parameters)
    {
      return $this->__soapCall('Project_GetIsMainProject', array($parameters));
    }

    /**
     * Gets which main project the project is attached to.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetMainProject $parameters
     * @return Project_GetMainProjectResponse
     */
    public function Project_GetMainProject(Project_GetMainProject $parameters)
    {
      return $this->__soapCall('Project_GetMainProject', array($parameters));
    }

    /**
     * Gets a handle for the debtor of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetDebtor $parameters
     * @return Project_GetDebtorResponse
     */
    public function Project_GetDebtor(Project_GetDebtor $parameters)
    {
      return $this->__soapCall('Project_GetDebtor', array($parameters));
    }

    /**
     * Sets a handle for the debtor of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_SetDebtor $parameters
     * @return Project_SetDebtorResponse
     */
    public function Project_SetDebtor(Project_SetDebtor $parameters)
    {
      return $this->__soapCall('Project_SetDebtor', array($parameters));
    }

    /**
     * Gets the employee responsible for the project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetResponsible $parameters
     * @return Project_GetResponsibleResponse
     */
    public function Project_GetResponsible(Project_GetResponsible $parameters)
    {
      return $this->__soapCall('Project_GetResponsible', array($parameters));
    }

    /**
     * Sets the employee responsible for the project.<br />Parameters: projectHandle: Handle for the project. value: The new employee responsiblelity of the project.
     *
     * @param Project_SetResponsible $parameters
     * @return Project_SetResponsibleResponse
     */
    public function Project_SetResponsible(Project_SetResponsible $parameters)
    {
      return $this->__soapCall('Project_SetResponsible', array($parameters));
    }

    /**
     * Gets the description of a project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetDescription $parameters
     * @return Project_GetDescriptionResponse
     */
    public function Project_GetDescription(Project_GetDescription $parameters)
    {
      return $this->__soapCall('Project_GetDescription', array($parameters));
    }

    /**
     * Sets the description of a project.<br />Parameters: projectHandle: Handle for the project. value: The new description of the project.
     *
     * @param Project_SetDescription $parameters
     * @return Project_SetDescriptionResponse
     */
    public function Project_SetDescription(Project_SetDescription $parameters)
    {
      return $this->__soapCall('Project_SetDescription', array($parameters));
    }

    /**
     * Gets whether a project is accessible.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetIsAccessible $parameters
     * @return Project_GetIsAccessibleResponse
     */
    public function Project_GetIsAccessible(Project_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Project_GetIsAccessible', array($parameters));
    }

    /**
     * Sets whether a project is accessible.<br />Parameters: projectHandle: Handle for the project. value: Value that indicates whether the project should be accessible.
     *
     * @param Project_SetIsAccessible $parameters
     * @return Project_SetIsAccessibleResponse
     */
    public function Project_SetIsAccessible(Project_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Project_SetIsAccessible', array($parameters));
    }

    /**
     * Gets the mileage of the project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetMileage $parameters
     * @return Project_GetMileageResponse
     */
    public function Project_GetMileage(Project_GetMileage $parameters)
    {
      return $this->__soapCall('Project_GetMileage', array($parameters));
    }

    /**
     * Sets the mileage of the project.<br />Parameters: projectHandle: Handle for the project. value: Value that indicates the mileage of the project.
     *
     * @param Project_SetMileage $parameters
     * @return Project_SetMileageResponse
     */
    public function Project_SetMileage(Project_SetMileage $parameters)
    {
      return $this->__soapCall('Project_SetMileage', array($parameters));
    }

    /**
     * Gets whether a project is closed.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetIsClosed $parameters
     * @return Project_GetIsClosedResponse
     */
    public function Project_GetIsClosed(Project_GetIsClosed $parameters)
    {
      return $this->__soapCall('Project_GetIsClosed', array($parameters));
    }

    /**
     * Creates a new project.
     *
     * @param Project_Create $parameters
     * @return Project_CreateResponse
     */
    public function Project_Create(Project_Create $parameters)
    {
      return $this->__soapCall('Project_Create', array($parameters));
    }

    /**
     * Return handles for all projects.
     *
     * @param Project_GetAll $parameters
     * @return Project_GetAllResponse
     */
    public function Project_GetAll(Project_GetAll $parameters)
    {
      return $this->__soapCall('Project_GetAll', array($parameters));
    }

    /**
     * Return handles for all projects from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param Project_GetAllUpdated $parameters
     * @return Project_GetAllUpdatedResponse
     */
    public function Project_GetAllUpdated(Project_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Project_GetAllUpdated', array($parameters));
    }

    /**
     * Returns a handle for the project with the given number.<br />Parameters: number: The number to search for.
     *
     * @param Project_FindByNumber $parameters
     * @return Project_FindByNumberResponse
     */
    public function Project_FindByNumber(Project_FindByNumber $parameters)
    {
      return $this->__soapCall('Project_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the projects corresponding to the given project numbers. If a project with a given number does not exist or if no number is given then the array contains null at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Project_FindByNumberList $parameters
     * @return Project_FindByNumberListResponse
     */
    public function Project_FindByNumberList(Project_FindByNumberList $parameters)
    {
      return $this->__soapCall('Project_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the projects with the given name.<br />Parameters: name: The name to search for.
     *
     * @param Project_FindByName $parameters
     * @return Project_FindByNameResponse
     */
    public function Project_FindByName(Project_FindByName $parameters)
    {
      return $this->__soapCall('Project_FindByName', array($parameters));
    }

    /**
     * Returns handles for the open sub-projects for a given project, or all open sub-projects.<br />Parameters: mainProjectHandle: Handle for main project.
     *
     * @param Project_GetOpenSubProjects $parameters
     * @return Project_GetOpenSubProjectsResponse
     */
    public function Project_GetOpenSubProjects(Project_GetOpenSubProjects $parameters)
    {
      return $this->__soapCall('Project_GetOpenSubProjects', array($parameters));
    }

    /**
     * Gets handles for the activities allowed on the project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetActivities $parameters
     * @return Project_GetActivitiesResponse
     */
    public function Project_GetActivities(Project_GetActivities $parameters)
    {
      return $this->__soapCall('Project_GetActivities', array($parameters));
    }

    /**
     * Gets handles for the time entries of the project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetTimeEntries $parameters
     * @return Project_GetTimeEntriesResponse
     */
    public function Project_GetTimeEntries(Project_GetTimeEntries $parameters)
    {
      return $this->__soapCall('Project_GetTimeEntries', array($parameters));
    }

    /**
     * Gets handles for the time entries of the project within an interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Project_GetTimeEntriesByDate $parameters
     * @return Project_GetTimeEntriesByDateResponse
     */
    public function Project_GetTimeEntriesByDate(Project_GetTimeEntriesByDate $parameters)
    {
      return $this->__soapCall('Project_GetTimeEntriesByDate', array($parameters));
    }

    /**
     * Gets handles for the mileage entries of the project within an interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Project_GetMileageEntriesByDate $parameters
     * @return Project_GetMileageEntriesByDateResponse
     */
    public function Project_GetMileageEntriesByDate(Project_GetMileageEntriesByDate $parameters)
    {
      return $this->__soapCall('Project_GetMileageEntriesByDate', array($parameters));
    }

    /**
     * Gets handles for the entries of the project.<br />Parameters: projectHandle: Handle for the project.
     *
     * @param Project_GetEntries $parameters
     * @return Project_GetEntriesResponse
     */
    public function Project_GetEntries(Project_GetEntries $parameters)
    {
      return $this->__soapCall('Project_GetEntries', array($parameters));
    }

    /**
     * Returns handles for the entries of the project within the given time interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Project_GetEntriesByDate $parameters
     * @return Project_GetEntriesByDateResponse
     */
    public function Project_GetEntriesByDate(Project_GetEntriesByDate $parameters)
    {
      return $this->__soapCall('Project_GetEntriesByDate', array($parameters));
    }

    /**
     * Returns a project group data object for a given project group.<br />Parameters: entityHandle: A handle for the project group.
     *
     * @param ProjectGroup_GetData $parameters
     * @return ProjectGroup_GetDataResponse
     */
    public function ProjectGroup_GetData(ProjectGroup_GetData $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetData', array($parameters));
    }

    /**
     * Returns project group data objects for a given set of project group handles.<br />Parameters: entityHandles: An array of the project group handles.
     *
     * @param ProjectGroup_GetDataArray $parameters
     * @return ProjectGroup_GetDataArrayResponse
     */
    public function ProjectGroup_GetDataArray(ProjectGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetDataArray', array($parameters));
    }

    /**
     * Get the number of a project group.<br />Parameters: projectGroupHandle: Handle for the project group.
     *
     * @param ProjectGroup_GetNumber $parameters
     * @return ProjectGroup_GetNumberResponse
     */
    public function ProjectGroup_GetNumber(ProjectGroup_GetNumber $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetNumber', array($parameters));
    }

    /**
     * Get the name of a project group.<br />Parameters: projectGroupHandle: Handle for the project group.
     *
     * @param ProjectGroup_GetName $parameters
     * @return ProjectGroup_GetNameResponse
     */
    public function ProjectGroup_GetName(ProjectGroup_GetName $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetName', array($parameters));
    }

    /**
     * Returns handles for all project groups.
     *
     * @param ProjectGroup_GetAll $parameters
     * @return ProjectGroup_GetAllResponse
     */
    public function ProjectGroup_GetAll(ProjectGroup_GetAll $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetAll', array($parameters));
    }

    /**
     * Returns handles for the project group with a given number.
     *
     * @param ProjectGroup_FindByNumber $parameters
     * @return ProjectGroup_FindByNumberResponse
     */
    public function ProjectGroup_FindByNumber(ProjectGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('ProjectGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the project groups corresponding to the given project group numbers. If a project group with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param ProjectGroup_FindByNumberList $parameters
     * @return ProjectGroup_FindByNumberListResponse
     */
    public function ProjectGroup_FindByNumberList(ProjectGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('ProjectGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for all project groups with a given name.
     *
     * @param ProjectGroup_FindByName $parameters
     * @return ProjectGroup_FindByNameResponse
     */
    public function ProjectGroup_FindByName(ProjectGroup_FindByName $parameters)
    {
      return $this->__soapCall('ProjectGroup_FindByName', array($parameters));
    }

    /**
     * Gets handles for projects of a project group.<br />Parameters: projectGroupHandle: Handle for the project group.
     *
     * @param ProjectGroup_GetProjects $parameters
     * @return ProjectGroup_GetProjectsResponse
     */
    public function ProjectGroup_GetProjects(ProjectGroup_GetProjects $parameters)
    {
      return $this->__soapCall('ProjectGroup_GetProjects', array($parameters));
    }

    /**
     * Creates a new quotation from a data object.<br />Parameters: data: The data object that specifies the properties of the new quotation.
     *
     * @param Quotation_CreateFromData $parameters
     * @return Quotation_CreateFromDataResponse
     */
    public function Quotation_CreateFromData(Quotation_CreateFromData $parameters)
    {
      return $this->__soapCall('Quotation_CreateFromData', array($parameters));
    }

    /**
     * Creates new quotations from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new quotations.
     *
     * @param Quotation_CreateFromDataArray $parameters
     * @return Quotation_CreateFromDataArrayResponse
     */
    public function Quotation_CreateFromDataArray(Quotation_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Quotation_CreateFromDataArray', array($parameters));
    }

    /**
     * Update quotations from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Quotation_UpdateFromDataArray $parameters
     * @return Quotation_UpdateFromDataArrayResponse
     */
    public function Quotation_UpdateFromDataArray(Quotation_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Quotation_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a quotation from a data object.<br />Parameters: data: The data object.
     *
     * @param Quotation_UpdateFromData $parameters
     * @return Quotation_UpdateFromDataResponse
     */
    public function Quotation_UpdateFromData(Quotation_UpdateFromData $parameters)
    {
      return $this->__soapCall('Quotation_UpdateFromData', array($parameters));
    }

    /**
     * Returns a quotation data object for a given quotation.<br />Parameters: entityHandle: A handle for the quotation.
     *
     * @param Quotation_GetData $parameters
     * @return Quotation_GetDataResponse
     */
    public function Quotation_GetData(Quotation_GetData $parameters)
    {
      return $this->__soapCall('Quotation_GetData', array($parameters));
    }

    /**
     * Returns quotation data objects for a given set of quotation handles.<br />Parameters: entityHandles: An array of the quotation handles.
     *
     * @param Quotation_GetDataArray $parameters
     * @return Quotation_GetDataArrayResponse
     */
    public function Quotation_GetDataArray(Quotation_GetDataArray $parameters)
    {
      return $this->__soapCall('Quotation_GetDataArray', array($parameters));
    }

    /**
     * Creates a new quotation. The debtor properties of the new quotation are set to those of the debtor.<br />Parameters: Handle for the debtr of the new quotation.
     *
     * @param Quotation_Create $parameters
     * @return Quotation_CreateResponse
     */
    public function Quotation_Create(Quotation_Create $parameters)
    {
      return $this->__soapCall('Quotation_Create', array($parameters));
    }

    /**
     * Gets a quotation as a PDF-file.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetPdf $parameters
     * @return Quotation_GetPdfResponse
     */
    public function Quotation_GetPdf(Quotation_GetPdf $parameters)
    {
      return $this->__soapCall('Quotation_GetPdf', array($parameters));
    }

    /**
     * Returns handles for all quotations.
     *
     * @param Quotation_GetAll $parameters
     * @return Quotation_GetAllResponse
     */
    public function Quotation_GetAll(Quotation_GetAll $parameters)
    {
      return $this->__soapCall('Quotation_GetAll', array($parameters));
    }

    /**
     * Returns handles for all quotations.
     *
     * @param Quotation_GetAllCurrent $parameters
     * @return Quotation_GetAllCurrentResponse
     */
    public function Quotation_GetAllCurrent(Quotation_GetAllCurrent $parameters)
    {
      return $this->__soapCall('Quotation_GetAllCurrent', array($parameters));
    }

    /**
     * Returns handles for the quotations with a given other reference.<br />Parameters: otherReference: The other reference to search for.
     *
     * @param Quotation_FindByOtherReference $parameters
     * @return Quotation_FindByOtherReferenceResponse
     */
    public function Quotation_FindByOtherReference(Quotation_FindByOtherReference $parameters)
    {
      return $this->__soapCall('Quotation_FindByOtherReference', array($parameters));
    }

    /**
     * Returns a handle for the quotation with a given number.<br />Parameters: number: The number to search for.
     *
     * @param Quotation_FindByNumber $parameters
     * @return Quotation_FindByNumberResponse
     */
    public function Quotation_FindByNumber(Quotation_FindByNumber $parameters)
    {
      return $this->__soapCall('Quotation_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the quotations with numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param Quotation_FindByNumberInterval $parameters
     * @return Quotation_FindByNumberIntervalResponse
     */
    public function Quotation_FindByNumberInterval(Quotation_FindByNumberInterval $parameters)
    {
      return $this->__soapCall('Quotation_FindByNumberInterval', array($parameters));
    }

    /**
     * Returns handles for quotations in a given interval of days.<br />Parameters: first: First day in interval. last: Last day in interval.
     *
     * @param Quotation_FindByDateInterval $parameters
     * @return Quotation_FindByDateIntervalResponse
     */
    public function Quotation_FindByDateInterval(Quotation_FindByDateInterval $parameters)
    {
      return $this->__soapCall('Quotation_FindByDateInterval', array($parameters));
    }

    /**
     * Return handles for all quotations from date. FromDate is based on CET.
     *
     * @param Quotation_GetAllUpdated $parameters
     * @return Quotation_GetAllUpdatedResponse
     */
    public function Quotation_GetAllUpdated(Quotation_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Quotation_GetAllUpdated', array($parameters));
    }

    /**
     * Gets handles for lines of a quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetLines $parameters
     * @return Quotation_GetLinesResponse
     */
    public function Quotation_GetLines(Quotation_GetLines $parameters)
    {
      return $this->__soapCall('Quotation_GetLines', array($parameters));
    }

    /**
     * Registers a quotation as sent.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_RegisterAsSent $parameters
     * @return Quotation_RegisterAsSentResponse
     */
    public function Quotation_RegisterAsSent(Quotation_RegisterAsSent $parameters)
    {
      return $this->__soapCall('Quotation_RegisterAsSent', array($parameters));
    }

    /**
     * Cancels sent status of a quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_CancelSentStatus $parameters
     * @return Quotation_CancelSentStatusResponse
     */
    public function Quotation_CancelSentStatus(Quotation_CancelSentStatus $parameters)
    {
      return $this->__soapCall('Quotation_CancelSentStatus', array($parameters));
    }

    /**
     * Upgrades a quotation to an order.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_UpgradeToOrder $parameters
     * @return Quotation_UpgradeToOrderResponse
     */
    public function Quotation_UpgradeToOrder(Quotation_UpgradeToOrder $parameters)
    {
      return $this->__soapCall('Quotation_UpgradeToOrder', array($parameters));
    }

    /**
     * Deletes a quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_Delete $parameters
     * @return Quotation_DeleteResponse
     */
    public function Quotation_Delete(Quotation_Delete $parameters)
    {
      return $this->__soapCall('Quotation_Delete', array($parameters));
    }

    /**
     * Gets a handle for the debtor of the quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtor $parameters
     * @return Quotation_GetDebtorResponse
     */
    public function Quotation_GetDebtor(Quotation_GetDebtor $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtor', array($parameters));
    }

    /**
     * Sets a handle for the debtor of the quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for the new debtor of the quotation.
     *
     * @param Quotation_SetDebtor $parameters
     * @return Quotation_SetDebtorResponse
     */
    public function Quotation_SetDebtor(Quotation_SetDebtor $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtor', array($parameters));
    }

    /**
     * Gets the number of a quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetNumber $parameters
     * @return Quotation_GetNumberResponse
     */
    public function Quotation_GetNumber(Quotation_GetNumber $parameters)
    {
      return $this->__soapCall('Quotation_GetNumber', array($parameters));
    }

    /**
     * Gets the debtor number of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorName $parameters
     * @return Quotation_GetDebtorNameResponse
     */
    public function Quotation_GetDebtorName(Quotation_GetDebtorName $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorName', array($parameters));
    }

    /**
     * Sets the debtor number of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor number of the quotation.
     *
     * @param Quotation_SetDebtorName $parameters
     * @return Quotation_SetDebtorNameResponse
     */
    public function Quotation_SetDebtorName(Quotation_SetDebtorName $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorName', array($parameters));
    }

    /**
     * Gets the debtor address of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorAddress $parameters
     * @return Quotation_GetDebtorAddressResponse
     */
    public function Quotation_GetDebtorAddress(Quotation_GetDebtorAddress $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorAddress', array($parameters));
    }

    /**
     * Sets the debtor address of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor address of the quotation.
     *
     * @param Quotation_SetDebtorAddress $parameters
     * @return Quotation_SetDebtorAddressResponse
     */
    public function Quotation_SetDebtorAddress(Quotation_SetDebtorAddress $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorAddress', array($parameters));
    }

    /**
     * Gets the debtor postal code of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorPostalCode $parameters
     * @return Quotation_GetDebtorPostalCodeResponse
     */
    public function Quotation_GetDebtorPostalCode(Quotation_GetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorPostalCode', array($parameters));
    }

    /**
     * Sets the debtor postal code of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor postal code of the quotation.
     *
     * @param Quotation_SetDebtorPostalCode $parameters
     * @return Quotation_SetDebtorPostalCodeResponse
     */
    public function Quotation_SetDebtorPostalCode(Quotation_SetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorPostalCode', array($parameters));
    }

    /**
     * Gets the debtor city of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorCity $parameters
     * @return Quotation_GetDebtorCityResponse
     */
    public function Quotation_GetDebtorCity(Quotation_GetDebtorCity $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorCity', array($parameters));
    }

    /**
     * Sets the debtor city of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor city of the quotation.
     *
     * @param Quotation_SetDebtorCity $parameters
     * @return Quotation_SetDebtorCityResponse
     */
    public function Quotation_SetDebtorCity(Quotation_SetDebtorCity $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorCity', array($parameters));
    }

    /**
     * Gets the debtor country of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorCountry $parameters
     * @return Quotation_GetDebtorCountryResponse
     */
    public function Quotation_GetDebtorCountry(Quotation_GetDebtorCountry $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorCountry', array($parameters));
    }

    /**
     * Sets the debtor country of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor country of the quotation.
     *
     * @param Quotation_SetDebtorCountry $parameters
     * @return Quotation_SetDebtorCountryResponse
     */
    public function Quotation_SetDebtorCountry(Quotation_SetDebtorCountry $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorCountry', array($parameters));
    }

    /**
     * Gets the debtor EAN of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetDebtorEan $parameters
     * @return Quotation_GetDebtorEanResponse
     */
    public function Quotation_GetDebtorEan(Quotation_GetDebtorEan $parameters)
    {
      return $this->__soapCall('Quotation_GetDebtorEan', array($parameters));
    }

    /**
     * Sets the debtor EAN of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new debtor EAN of the quotation.
     *
     * @param Quotation_SetDebtorEan $parameters
     * @return Quotation_SetDebtorEanResponse
     */
    public function Quotation_SetDebtorEan(Quotation_SetDebtorEan $parameters)
    {
      return $this->__soapCall('Quotation_SetDebtorEan', array($parameters));
    }

    /**
     * Gets the public entry numer of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetPublicEntryNumber $parameters
     * @return Quotation_GetPublicEntryNumberResponse
     */
    public function Quotation_GetPublicEntryNumber(Quotation_GetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Quotation_GetPublicEntryNumber', array($parameters));
    }

    /**
     * Sets the public entry number of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. value: The new public entry number of the quotation.
     *
     * @param Quotation_SetPublicEntryNumber $parameters
     * @return Quotation_SetPublicEntryNumberResponse
     */
    public function Quotation_SetPublicEntryNumber(Quotation_SetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Quotation_SetPublicEntryNumber', array($parameters));
    }

    /**
     * Gets a handle for the attention of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetAttention $parameters
     * @return Quotation_GetAttentionResponse
     */
    public function Quotation_GetAttention(Quotation_GetAttention $parameters)
    {
      return $this->__soapCall('Quotation_GetAttention', array($parameters));
    }

    /**
     * Sets the attention of an quotation.<br />Parameters: quotationHandle: Handle for the quotation. valueHandle: Handle for new attention of the quotation.
     *
     * @param Quotation_SetAttention $parameters
     * @return Quotation_SetAttentionResponse
     */
    public function Quotation_SetAttention(Quotation_SetAttention $parameters)
    {
      return $this->__soapCall('Quotation_SetAttention', array($parameters));
    }

    /**
     * Gets a handle for the attention of the debtor of an quotation.<br />Parameters: quotationHandle: Handle for the quotation.
     *
     * @param Quotation_GetYourReference $parameters
     * @return Quotation_GetYourReferenceResponse
     */
    public function Quotation_GetYourReference(Quotation_GetYourReference $parameters)
    {
      return $this->__soapCall('Quotation_GetYourReference', array($parameters));
    }

    /**
     * Returns the price for the product in the PriceGroup.<br />If no special price is found then the sales price is returned instead.<br />Parameters: productHandle: The product to return the price for.
     *
     * @param PriceGroup_GetPrice $parameters
     * @return PriceGroup_GetPriceResponse
     */
    public function PriceGroup_GetPrice(PriceGroup_GetPrice $parameters)
    {
      return $this->__soapCall('PriceGroup_GetPrice', array($parameters));
    }

    /**
     * Creates a new product from a data object.<br />Parameters: data: The data object that specifies the properties of the new product.
     *
     * @param Product_CreateFromData $parameters
     * @return Product_CreateFromDataResponse
     */
    public function Product_CreateFromData(Product_CreateFromData $parameters)
    {
      return $this->__soapCall('Product_CreateFromData', array($parameters));
    }

    /**
     * Creates new products from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new products.
     *
     * @param Product_CreateFromDataArray $parameters
     * @return Product_CreateFromDataArrayResponse
     */
    public function Product_CreateFromDataArray(Product_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Product_CreateFromDataArray', array($parameters));
    }

    /**
     * Update products from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Product_UpdateFromDataArray $parameters
     * @return Product_UpdateFromDataArrayResponse
     */
    public function Product_UpdateFromDataArray(Product_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Product_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a product from a data object.<br />Parameters: data: The data object.
     *
     * @param Product_UpdateFromData $parameters
     * @return Product_UpdateFromDataResponse
     */
    public function Product_UpdateFromData(Product_UpdateFromData $parameters)
    {
      return $this->__soapCall('Product_UpdateFromData', array($parameters));
    }

    /**
     * Returns an product data object for a given product.<br />Parameters: entityHandle: A handle for the product.
     *
     * @param Product_GetData $parameters
     * @return Product_GetDataResponse
     */
    public function Product_GetData(Product_GetData $parameters)
    {
      return $this->__soapCall('Product_GetData', array($parameters));
    }

    /**
     * Returns product data objects for a given set of product handles.<br />Parameters: entityHandles: An array of the product handles.
     *
     * @param Product_GetDataArray $parameters
     * @return Product_GetDataArrayResponse
     */
    public function Product_GetDataArray(Product_GetDataArray $parameters)
    {
      return $this->__soapCall('Product_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetNumber $parameters
     * @return Product_GetNumberResponse
     */
    public function Product_GetNumber(Product_GetNumber $parameters)
    {
      return $this->__soapCall('Product_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the product group of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetProductGroup $parameters
     * @return Product_GetProductGroupResponse
     */
    public function Product_GetProductGroup(Product_GetProductGroup $parameters)
    {
      return $this->__soapCall('Product_GetProductGroup', array($parameters));
    }

    /**
     * Sets the product group of a product.<br />Parameters: productHandle: Handle for the product. valueHandle: Handle for new product group of the product.
     *
     * @param Product_SetProductGroup $parameters
     * @return Product_SetProductGroupResponse
     */
    public function Product_SetProductGroup(Product_SetProductGroup $parameters)
    {
      return $this->__soapCall('Product_SetProductGroup', array($parameters));
    }

    /**
     * Gets the name of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetName $parameters
     * @return Product_GetNameResponse
     */
    public function Product_GetName(Product_GetName $parameters)
    {
      return $this->__soapCall('Product_GetName', array($parameters));
    }

    /**
     * Sets the name of a product.<br />Parameters: productHandle: Handle for the product. value: The new name of the product.
     *
     * @param Product_SetName $parameters
     * @return Product_SetNameResponse
     */
    public function Product_SetName(Product_SetName $parameters)
    {
      return $this->__soapCall('Product_SetName', array($parameters));
    }

    /**
     * Gets the description of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetDescription $parameters
     * @return Product_GetDescriptionResponse
     */
    public function Product_GetDescription(Product_GetDescription $parameters)
    {
      return $this->__soapCall('Product_GetDescription', array($parameters));
    }

    /**
     * Sets the description of a product.<br />Parameters: productHandle: Handle for the product. value: The new description of the product.
     *
     * @param Product_SetDescription $parameters
     * @return Product_SetDescriptionResponse
     */
    public function Product_SetDescription(Product_SetDescription $parameters)
    {
      return $this->__soapCall('Product_SetDescription', array($parameters));
    }

    /**
     * Sets the bar code of a product.<br />Parameters: productHandle: Handle for the product. value: The new bar code of the product.
     *
     * @param Product_SetBarCode $parameters
     * @return Product_SetBarCodeResponse
     */
    public function Product_SetBarCode(Product_SetBarCode $parameters)
    {
      return $this->__soapCall('Product_SetBarCode', array($parameters));
    }

    /**
     * Gets the bar code of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetBarCode $parameters
     * @return Product_GetBarCodeResponse
     */
    public function Product_GetBarCode(Product_GetBarCode $parameters)
    {
      return $this->__soapCall('Product_GetBarCode', array($parameters));
    }

    /**
     * Sets the sales price of a product.<br />Parameters: productHandle: Handle for the product. value: The new sales price of the product.
     *
     * @param Product_SetSalesPrice $parameters
     * @return Product_SetSalesPriceResponse
     */
    public function Product_SetSalesPrice(Product_SetSalesPrice $parameters)
    {
      return $this->__soapCall('Product_SetSalesPrice', array($parameters));
    }

    /**
     * Gets the sales price of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetSalesPrice $parameters
     * @return Product_GetSalesPriceResponse
     */
    public function Product_GetSalesPrice(Product_GetSalesPrice $parameters)
    {
      return $this->__soapCall('Product_GetSalesPrice', array($parameters));
    }

    /**
     * Gets the cost price of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetCostPrice $parameters
     * @return Product_GetCostPriceResponse
     */
    public function Product_GetCostPrice(Product_GetCostPrice $parameters)
    {
      return $this->__soapCall('Product_GetCostPrice', array($parameters));
    }

    /**
     * Sets the cost price of a product.<br />Parameters: productHandle: Handle for the product. value: The new cost price of the product.
     *
     * @param Product_SetCostPrice $parameters
     * @return Product_SetCostPriceResponse
     */
    public function Product_SetCostPrice(Product_SetCostPrice $parameters)
    {
      return $this->__soapCall('Product_SetCostPrice', array($parameters));
    }

    /**
     * Gets the recommended price of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetRecommendedPrice $parameters
     * @return Product_GetRecommendedPriceResponse
     */
    public function Product_GetRecommendedPrice(Product_GetRecommendedPrice $parameters)
    {
      return $this->__soapCall('Product_GetRecommendedPrice', array($parameters));
    }

    /**
     * Sets the recommended price of a product.<br />Parameters: productHandle: Handle for the product. value: The new recommended price of the product.
     *
     * @param Product_SetRecommendedPrice $parameters
     * @return Product_SetRecommendedPriceResponse
     */
    public function Product_SetRecommendedPrice(Product_SetRecommendedPrice $parameters)
    {
      return $this->__soapCall('Product_SetRecommendedPrice', array($parameters));
    }

    /**
     * Gets handle for the primary unit of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetUnit $parameters
     * @return Product_GetUnitResponse
     */
    public function Product_GetUnit(Product_GetUnit $parameters)
    {
      return $this->__soapCall('Product_GetUnit', array($parameters));
    }

    /**
     * Sets primary unit of a product.<br />Parameters: productHandle: Handle for the product. value: Handle for new primary unit of the product.
     *
     * @param Product_SetUnit $parameters
     * @return Product_SetUnitResponse
     */
    public function Product_SetUnit(Product_SetUnit $parameters)
    {
      return $this->__soapCall('Product_SetUnit', array($parameters));
    }

    /**
     * Sets whether a product is accessible.<br />Parameters: productHandle: Handle for the product. value: Value that indicates whether the product should be accessible.
     *
     * @param Product_SetIsAccessible $parameters
     * @return Product_SetIsAccessibleResponse
     */
    public function Product_SetIsAccessible(Product_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Product_SetIsAccessible', array($parameters));
    }

    /**
     * Gets whether a product is accessible.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetIsAccessible $parameters
     * @return Product_GetIsAccessibleResponse
     */
    public function Product_GetIsAccessible(Product_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Product_GetIsAccessible', array($parameters));
    }

    /**
     * Sets the volume of a product.<br />Parameters: productHandle: Handle for the product. value: The new volume value of the product.
     *
     * @param Product_SetVolume $parameters
     * @return Product_SetVolumeResponse
     */
    public function Product_SetVolume(Product_SetVolume $parameters)
    {
      return $this->__soapCall('Product_SetVolume', array($parameters));
    }

    /**
     * Gets the volume of a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetVolume $parameters
     * @return Product_GetVolumeResponse
     */
    public function Product_GetVolume(Product_GetVolume $parameters)
    {
      return $this->__soapCall('Product_GetVolume', array($parameters));
    }

    /**
     * Gets a handle for the department of a product. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetDepartment $parameters
     * @return Product_GetDepartmentResponse
     */
    public function Product_GetDepartment(Product_GetDepartment $parameters)
    {
      return $this->__soapCall('Product_GetDepartment', array($parameters));
    }

    /**
     * Sets the department of a product. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: productHandle: Handle for the product. value: Handle for the new department of the product.
     *
     * @param Product_SetDepartment $parameters
     * @return Product_SetDepartmentResponse
     */
    public function Product_SetDepartment(Product_SetDepartment $parameters)
    {
      return $this->__soapCall('Product_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of a product. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetDistributionKey $parameters
     * @return Product_GetDistributionKeyResponse
     */
    public function Product_GetDistributionKey(Product_GetDistributionKey $parameters)
    {
      return $this->__soapCall('Product_GetDistributionKey', array($parameters));
    }

    /**
     * Sets the distribution key of the product. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: productHandle: Handle for the product. value: Handle for the new distribution key of the product.
     *
     * @param Product_SetDistributionKey $parameters
     * @return Product_SetDistributionKeyResponse
     */
    public function Product_SetDistributionKey(Product_SetDistributionKey $parameters)
    {
      return $this->__soapCall('Product_SetDistributionKey', array($parameters));
    }

    /**
     * Gets the quantity in stock of a product. InStock is only accessible when there is access to the Stock add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetInStock $parameters
     * @return Product_GetInStockResponse
     */
    public function Product_GetInStock(Product_GetInStock $parameters)
    {
      return $this->__soapCall('Product_GetInStock', array($parameters));
    }

    /**
     * Gets the quantity in stock that is already used on orders for a product. OnOrder is only accessible when there is access to the Stock add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetOnOrder $parameters
     * @return Product_GetOnOrderResponse
     */
    public function Product_GetOnOrder(Product_GetOnOrder $parameters)
    {
      return $this->__soapCall('Product_GetOnOrder', array($parameters));
    }

    /**
     * Gets quantity ordered from suppliers for a product. Ordered is only accessible when there is access to the Stock add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetOrdered $parameters
     * @return Product_GetOrderedResponse
     */
    public function Product_GetOrdered(Product_GetOrdered $parameters)
    {
      return $this->__soapCall('Product_GetOrdered', array($parameters));
    }

    /**
     * Gets the quantity in stock that is not yet used on orders for a product. Available is only accessible when there is access to the Stock add-on module.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetAvailable $parameters
     * @return Product_GetAvailableResponse
     */
    public function Product_GetAvailable(Product_GetAvailable $parameters)
    {
      return $this->__soapCall('Product_GetAvailable', array($parameters));
    }

    /**
     * Returns inventory status for a product grouped by inventory location. Products that are not placed on a specific inventory location will be grouped without an InventoryLocationHandle.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_GetInventoryLocationStatus $parameters
     * @return Product_GetInventoryLocationStatusResponse
     */
    public function Product_GetInventoryLocationStatus(Product_GetInventoryLocationStatus $parameters)
    {
      return $this->__soapCall('Product_GetInventoryLocationStatus', array($parameters));
    }

    /**
     * Creates a new product.<br />Parameters: number: The number of the new product. productGroupHandle: The product group of the new product. name: The name of the new product.
     *
     * @param Product_Create $parameters
     * @return Product_CreateResponse
     */
    public function Product_Create(Product_Create $parameters)
    {
      return $this->__soapCall('Product_Create', array($parameters));
    }

    /**
     * Returns handles for all products.
     *
     * @param Product_GetAll $parameters
     * @return Product_GetAllResponse
     */
    public function Product_GetAll(Product_GetAll $parameters)
    {
      return $this->__soapCall('Product_GetAll', array($parameters));
    }

    /**
     * Returns handles for all accessible products.
     *
     * @param Product_GetAllAccessible $parameters
     * @return Product_GetAllAccessibleResponse
     */
    public function Product_GetAllAccessible(Product_GetAllAccessible $parameters)
    {
      return $this->__soapCall('Product_GetAllAccessible', array($parameters));
    }

    /**
     * Return handles for all products from date. fromDate is based on CET. includeCalculatedProperties, when set to True, includes products with only stock status updated.
     *
     * @param Product_GetAllUpdated $parameters
     * @return Product_GetAllUpdatedResponse
     */
    public function Product_GetAllUpdated(Product_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Product_GetAllUpdated', array($parameters));
    }

    /**
     * Returns handle for the product with a given number.<br />Parameters: name: The number to search for.
     *
     * @param Product_FindByNumber $parameters
     * @return Product_FindByNumberResponse
     */
    public function Product_FindByNumber(Product_FindByNumber $parameters)
    {
      return $this->__soapCall('Product_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the products corresponding to the given product numbers. If a product with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Product_FindByNumberList $parameters
     * @return Product_FindByNumberListResponse
     */
    public function Product_FindByNumberList(Product_FindByNumberList $parameters)
    {
      return $this->__soapCall('Product_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the products with a given name.<br />Parameters: name: The name to search for.
     *
     * @param Product_FindByName $parameters
     * @return Product_FindByNameResponse
     */
    public function Product_FindByName(Product_FindByName $parameters)
    {
      return $this->__soapCall('Product_FindByName', array($parameters));
    }

    /**
     * Returns handles for the products with a given bar code.<br />Parameters: barCode: The bar code to search for.
     *
     * @param Product_FindByBarCode $parameters
     * @return Product_FindByBarCodeResponse
     */
    public function Product_FindByBarCode(Product_FindByBarCode $parameters)
    {
      return $this->__soapCall('Product_FindByBarCode', array($parameters));
    }

    /**
     * Deletes a product.<br />Parameters: productHandle: Handle for the product.
     *
     * @param Product_Delete $parameters
     * @return Product_DeleteResponse
     */
    public function Product_Delete(Product_Delete $parameters)
    {
      return $this->__soapCall('Product_Delete', array($parameters));
    }

    /**
     * Creates a new product group from a data object. Please be aware that the InventoryWithdrawal boolean is read-only.<br />Parameters: data: The data object that specifies the properties of the new product group.
     *
     * @param ProductGroup_CreateFromData $parameters
     * @return ProductGroup_CreateFromDataResponse
     */
    public function ProductGroup_CreateFromData(ProductGroup_CreateFromData $parameters)
    {
      return $this->__soapCall('ProductGroup_CreateFromData', array($parameters));
    }

    /**
     * Creates new product groups from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new product groups.
     *
     * @param ProductGroup_CreateFromDataArray $parameters
     * @return ProductGroup_CreateFromDataArrayResponse
     */
    public function ProductGroup_CreateFromDataArray(ProductGroup_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('ProductGroup_CreateFromDataArray', array($parameters));
    }

    /**
     * Update product groups from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param ProductGroup_UpdateFromDataArray $parameters
     * @return ProductGroup_UpdateFromDataArrayResponse
     */
    public function ProductGroup_UpdateFromDataArray(ProductGroup_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('ProductGroup_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a product group from a data object.<br />Parameters: data: The data object.
     *
     * @param ProductGroup_UpdateFromData $parameters
     * @return ProductGroup_UpdateFromDataResponse
     */
    public function ProductGroup_UpdateFromData(ProductGroup_UpdateFromData $parameters)
    {
      return $this->__soapCall('ProductGroup_UpdateFromData', array($parameters));
    }

    /**
     * Returns an product group data object for a given product group.<br />Parameters: entityHandle: A handle for the product group.
     *
     * @param ProductGroup_GetData $parameters
     * @return ProductGroup_GetDataResponse
     */
    public function ProductGroup_GetData(ProductGroup_GetData $parameters)
    {
      return $this->__soapCall('ProductGroup_GetData', array($parameters));
    }

    /**
     * Returns product group data objects for a given set of product group handles.<br />Parameters: entityHandles: An array of the product group handles.
     *
     * @param ProductGroup_GetDataArray $parameters
     * @return ProductGroup_GetDataArrayResponse
     */
    public function ProductGroup_GetDataArray(ProductGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('ProductGroup_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a product group.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetNumber $parameters
     * @return ProductGroup_GetNumberResponse
     */
    public function ProductGroup_GetNumber(ProductGroup_GetNumber $parameters)
    {
      return $this->__soapCall('ProductGroup_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a product group.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetName $parameters
     * @return ProductGroup_GetNameResponse
     */
    public function ProductGroup_GetName(ProductGroup_GetName $parameters)
    {
      return $this->__soapCall('ProductGroup_GetName', array($parameters));
    }

    /**
     * Sets the name of a product group.<br />Parameters: productGroupHandle: Handle for the product group. value: The new name of the product group.
     *
     * @param ProductGroup_SetName $parameters
     * @return ProductGroup_SetNameResponse
     */
    public function ProductGroup_SetName(ProductGroup_SetName $parameters)
    {
      return $this->__soapCall('ProductGroup_SetName', array($parameters));
    }

    /**
     * Gets a handle for the account to use for products of the product group on invoices for VAT liable debtors.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent $parameters
     * @return ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResponse
     */
    public function ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent(ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent $parameters)
    {
      return $this->__soapCall('ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrent', array($parameters));
    }

    /**
     * Sets the the account to use for products of the product group on invoices for VAT liable debtors.<br />Parameters: productGroupHandle: Handle for the product group. valueHandle: Handle for account.
     *
     * @param ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent $parameters
     * @return ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrentResponse
     */
    public function ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent(ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent $parameters)
    {
      return $this->__soapCall('ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent', array($parameters));
    }

    /**
     * Gets a handle for the account to use for products of the product group on invoices for VAT exempt debtors.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent $parameters
     * @return ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResponse
     */
    public function ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent(ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent $parameters)
    {
      return $this->__soapCall('ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrent', array($parameters));
    }

    /**
     * Sets the the account to use for products of the product group on invoices for VAT exempt debtors.<br />Parameters: productGroupHandle: Handle for the product group. valueHandle: Handle for account.
     *
     * @param ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent $parameters
     * @return ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrentResponse
     */
    public function ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent(ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent $parameters)
    {
      return $this->__soapCall('ProductGroup_SetAccountForVatExemptDebtorInvoicesCurrent', array($parameters));
    }

    /**
     * Sets the accrual account of a product group.<br />Parameters: productGroupHandle: Handle for the product group. valueHandle: Handle for new accrual account of the product group.
     *
     * @param ProductGroup_SetAccrual $parameters
     * @return ProductGroup_SetAccrualResponse
     */
    public function ProductGroup_SetAccrual(ProductGroup_SetAccrual $parameters)
    {
      return $this->__soapCall('ProductGroup_SetAccrual', array($parameters));
    }

    /**
     * Gets a handle for the accrual account of a product group.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetAccrual $parameters
     * @return ProductGroup_GetAccrualResponse
     */
    public function ProductGroup_GetAccrual(ProductGroup_GetAccrual $parameters)
    {
      return $this->__soapCall('ProductGroup_GetAccrual', array($parameters));
    }

    /**
     * Creates a new product group.<br />Parameters: number: The number of the new product group. name: The name of the new product group. accountForVatLiableDebtorInvoicesCurrent : The account to use for products on invoices with VAT liable debtors.
     *
     * @param ProductGroup_Create $parameters
     * @return ProductGroup_CreateResponse
     */
    public function ProductGroup_Create(ProductGroup_Create $parameters)
    {
      return $this->__soapCall('ProductGroup_Create', array($parameters));
    }

    /**
     * Returns handles for all product groups.
     *
     * @param ProductGroup_GetAll $parameters
     * @return ProductGroup_GetAllResponse
     */
    public function ProductGroup_GetAll(ProductGroup_GetAll $parameters)
    {
      return $this->__soapCall('ProductGroup_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the product group with a given number.<br />Parameters: number: The number to search for.
     *
     * @param ProductGroup_FindByNumber $parameters
     * @return ProductGroup_FindByNumberResponse
     */
    public function ProductGroup_FindByNumber(ProductGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('ProductGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the product groups corresponding to the given product group numbers. If a product group with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param ProductGroup_FindByNumberList $parameters
     * @return ProductGroup_FindByNumberListResponse
     */
    public function ProductGroup_FindByNumberList(ProductGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('ProductGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the product groups with a given name.<br />Parameter: name: The name to search for.
     *
     * @param ProductGroup_FindByName $parameters
     * @return ProductGroup_FindByNameResponse
     */
    public function ProductGroup_FindByName(ProductGroup_FindByName $parameters)
    {
      return $this->__soapCall('ProductGroup_FindByName', array($parameters));
    }

    /**
     * Gets handles for products of a product group.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_GetProducts $parameters
     * @return ProductGroup_GetProductsResponse
     */
    public function ProductGroup_GetProducts(ProductGroup_GetProducts $parameters)
    {
      return $this->__soapCall('ProductGroup_GetProducts', array($parameters));
    }

    /**
     * Deletes a product group.<br />Parameters: productGroupHandle: Handle for the product group.
     *
     * @param ProductGroup_Delete $parameters
     * @return ProductGroup_DeleteResponse
     */
    public function ProductGroup_Delete(ProductGroup_Delete $parameters)
    {
      return $this->__soapCall('ProductGroup_Delete', array($parameters));
    }

    /**
     * Creates a new product price from a data object.<br />Parameters: data: The data object that specifies the properties of the new product price.
     *
     * @param ProductPrice_CreateFromData $parameters
     * @return ProductPrice_CreateFromDataResponse
     */
    public function ProductPrice_CreateFromData(ProductPrice_CreateFromData $parameters)
    {
      return $this->__soapCall('ProductPrice_CreateFromData', array($parameters));
    }

    /**
     * Creates new product prices from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new product prices.
     *
     * @param ProductPrice_CreateFromDataArray $parameters
     * @return ProductPrice_CreateFromDataArrayResponse
     */
    public function ProductPrice_CreateFromDataArray(ProductPrice_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('ProductPrice_CreateFromDataArray', array($parameters));
    }

    /**
     * Update product price entities from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param ProductPrice_UpdateFromDataArray $parameters
     * @return ProductPrice_UpdateFromDataArrayResponse
     */
    public function ProductPrice_UpdateFromDataArray(ProductPrice_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('ProductPrice_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a product price from a data object.<br />Parameters: data: The data object.
     *
     * @param ProductPrice_UpdateFromData $parameters
     * @return ProductPrice_UpdateFromDataResponse
     */
    public function ProductPrice_UpdateFromData(ProductPrice_UpdateFromData $parameters)
    {
      return $this->__soapCall('ProductPrice_UpdateFromData', array($parameters));
    }

    /**
     * Returns an product price data object for a given product price.<br />Parameters: entityHandle: A handle for the product price.
     *
     * @param ProductPrice_GetData $parameters
     * @return ProductPrice_GetDataResponse
     */
    public function ProductPrice_GetData(ProductPrice_GetData $parameters)
    {
      return $this->__soapCall('ProductPrice_GetData', array($parameters));
    }

    /**
     * Returns product price data objects for a given set of product price handles.<br />Parameters: entityHandles: An array of the product price handles.
     *
     * @param ProductPrice_GetDataArray $parameters
     * @return ProductPrice_GetDataArrayResponse
     */
    public function ProductPrice_GetDataArray(ProductPrice_GetDataArray $parameters)
    {
      return $this->__soapCall('ProductPrice_GetDataArray', array($parameters));
    }

    /**
     * Creates a new product price.<br />Parameters: product: Handle for the product of the new product price. currency: Handle for the currency of the new product price. price: The price of the new product price.
     *
     * @param ProductPrice_Create $parameters
     * @return ProductPrice_CreateResponse
     */
    public function ProductPrice_Create(ProductPrice_Create $parameters)
    {
      return $this->__soapCall('ProductPrice_Create', array($parameters));
    }

    /**
     * Returns a handle for the product price for a given product and currency.<br />Parameters: product: Product to search for. currency: Currency to search for.
     *
     * @param ProductPrice_FindByProductAndCurrency $parameters
     * @return ProductPrice_FindByProductAndCurrencyResponse
     */
    public function ProductPrice_FindByProductAndCurrency(ProductPrice_FindByProductAndCurrency $parameters)
    {
      return $this->__soapCall('ProductPrice_FindByProductAndCurrency', array($parameters));
    }

    /**
     * Returns a list of handles for the product prices matching a given product list and currency.<br />Parameters: productHandles: Products to search for. currencyHandle: Currency to search for.
     *
     * @param ProductPrice_FindByProductListAndCurrency $parameters
     * @return ProductPrice_FindByProductListAndCurrencyResponse
     */
    public function ProductPrice_FindByProductListAndCurrency(ProductPrice_FindByProductListAndCurrency $parameters)
    {
      return $this->__soapCall('ProductPrice_FindByProductListAndCurrency', array($parameters));
    }

    /**
     * Returns a list of handles for the product prices matching a given product list. ProductPrice handles will be returned for each currency that is defined.<br />Parameters: productHandles: Products to search for.
     *
     * @param ProductPrice_FindByProductList $parameters
     * @return ProductPrice_FindByProductListResponse
     */
    public function ProductPrice_FindByProductList(ProductPrice_FindByProductList $parameters)
    {
      return $this->__soapCall('ProductPrice_FindByProductList', array($parameters));
    }

    /**
     * Returns a list of handles for the product prices matching a given currency.<br />Parameters: currencyHandle: Currency to search for.
     *
     * @param ProductPrice_FindByCurrency $parameters
     * @return ProductPrice_FindByCurrencyResponse
     */
    public function ProductPrice_FindByCurrency(ProductPrice_FindByCurrency $parameters)
    {
      return $this->__soapCall('ProductPrice_FindByCurrency', array($parameters));
    }

    /**
     * Deletes a product price.<br />Parameters: productPriceHandle: Handle for the product price.
     *
     * @param ProductPrice_Delete $parameters
     * @return ProductPrice_DeleteResponse
     */
    public function ProductPrice_Delete(ProductPrice_Delete $parameters)
    {
      return $this->__soapCall('ProductPrice_Delete', array($parameters));
    }

    /**
     * Gets a handle for the product of a product price.<br />Parameters: productPriceHandle: Handle for the product price.
     *
     * @param ProductPrice_GetProduct $parameters
     * @return ProductPrice_GetProductResponse
     */
    public function ProductPrice_GetProduct(ProductPrice_GetProduct $parameters)
    {
      return $this->__soapCall('ProductPrice_GetProduct', array($parameters));
    }

    /**
     * Gets a handle for the currency of a product price.<br />Parameters: productPriceHandle: Handle for the product price.
     *
     * @param ProductPrice_GetCurrency $parameters
     * @return ProductPrice_GetCurrencyResponse
     */
    public function ProductPrice_GetCurrency(ProductPrice_GetCurrency $parameters)
    {
      return $this->__soapCall('ProductPrice_GetCurrency', array($parameters));
    }

    /**
     * Gets the price of a product price.<br />Parameters: productPriceHandle: Handle for the product price.
     *
     * @param ProductPrice_GetPrice $parameters
     * @return ProductPrice_GetPriceResponse
     */
    public function ProductPrice_GetPrice(ProductPrice_GetPrice $parameters)
    {
      return $this->__soapCall('ProductPrice_GetPrice', array($parameters));
    }

    /**
     * Sets the price of a product price.<br />Parameters: productPriceHandle: Handle for the product price. value: The new price of the product price.
     *
     * @param ProductPrice_SetPrice $parameters
     * @return ProductPrice_SetPriceResponse
     */
    public function ProductPrice_SetPrice(ProductPrice_SetPrice $parameters)
    {
      return $this->__soapCall('ProductPrice_SetPrice', array($parameters));
    }

    /**
     * Creates a new project from a data object.<br />Parameters: data: The data object that specifies the properties of the new project.
     *
     * @param Project_CreateFromData $parameters
     * @return Project_CreateFromDataResponse
     */
    public function Project_CreateFromData(Project_CreateFromData $parameters)
    {
      return $this->__soapCall('Project_CreateFromData', array($parameters));
    }

    /**
     * Gets a handle for the delivery location of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryLocation $parameters
     * @return Order_GetDeliveryLocationResponse
     */
    public function Order_GetDeliveryLocation(Order_GetDeliveryLocation $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryLocation', array($parameters));
    }

    /**
     * Sets the delivery location of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new delivery location of the order.
     *
     * @param Order_SetDeliveryLocation $parameters
     * @return Order_SetDeliveryLocationResponse
     */
    public function Order_SetDeliveryLocation(Order_SetDeliveryLocation $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryLocation', array($parameters));
    }

    /**
     * Gets the delivery address of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryAddress $parameters
     * @return Order_GetDeliveryAddressResponse
     */
    public function Order_GetDeliveryAddress(Order_GetDeliveryAddress $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryAddress', array($parameters));
    }

    /**
     * Sets the delivery address of an order.<br />Parameters: orderHandle: Handle for the order. value: The new delivery address of the order.
     *
     * @param Order_SetDeliveryAddress $parameters
     * @return Order_SetDeliveryAddressResponse
     */
    public function Order_SetDeliveryAddress(Order_SetDeliveryAddress $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryAddress', array($parameters));
    }

    /**
     * Gets the delivery postal code of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryPostalCode $parameters
     * @return Order_GetDeliveryPostalCodeResponse
     */
    public function Order_GetDeliveryPostalCode(Order_GetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryPostalCode', array($parameters));
    }

    /**
     * Sets the delivery postal code of an order.<br />Parameters: orderHandle: Handle for the order. value: The new delivery postal code of the order.
     *
     * @param Order_SetDeliveryPostalCode $parameters
     * @return Order_SetDeliveryPostalCodeResponse
     */
    public function Order_SetDeliveryPostalCode(Order_SetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryPostalCode', array($parameters));
    }

    /**
     * Gets the delivery city of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryCity $parameters
     * @return Order_GetDeliveryCityResponse
     */
    public function Order_GetDeliveryCity(Order_GetDeliveryCity $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryCity', array($parameters));
    }

    /**
     * Sets the delivery city of an order.<br />Parameters: orderHandle: Handle for the order. value: The new delivery city of the order.
     *
     * @param Order_SetDeliveryCity $parameters
     * @return Order_SetDeliveryCityResponse
     */
    public function Order_SetDeliveryCity(Order_SetDeliveryCity $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryCity', array($parameters));
    }

    /**
     * Gets the delivery country of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryCountry $parameters
     * @return Order_GetDeliveryCountryResponse
     */
    public function Order_GetDeliveryCountry(Order_GetDeliveryCountry $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryCountry', array($parameters));
    }

    /**
     * Sets the delivery country of an order.<br />Parameters: orderHandle: Handle for the order. value: The new delivery country of the order.
     *
     * @param Order_SetDeliveryCountry $parameters
     * @return Order_SetDeliveryCountryResponse
     */
    public function Order_SetDeliveryCountry(Order_SetDeliveryCountry $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryCountry', array($parameters));
    }

    /**
     * Gets the terms of delivery of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetTermsOfDelivery $parameters
     * @return Order_GetTermsOfDeliveryResponse
     */
    public function Order_GetTermsOfDelivery(Order_GetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('Order_GetTermsOfDelivery', array($parameters));
    }

    /**
     * Sets the terms of delivery of an order.<br />Parameters: orderHandle: Handle for the order. value: The new terms of delivery of the order.
     *
     * @param Order_SetTermsOfDelivery $parameters
     * @return Order_SetTermsOfDeliveryResponse
     */
    public function Order_SetTermsOfDelivery(Order_SetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('Order_SetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets the delivery date of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryDate $parameters
     * @return Order_GetDeliveryDateResponse
     */
    public function Order_GetDeliveryDate(Order_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryDate', array($parameters));
    }

    /**
     * Sets the delivery date of an order.<br />Parameters: orderHandle: Handle for the order. value: The new delivery date of the order.
     *
     * @param Order_SetDeliveryDate $parameters
     * @return Order_SetDeliveryDateResponse
     */
    public function Order_SetDeliveryDate(Order_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets the heading of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetHeading $parameters
     * @return Order_GetHeadingResponse
     */
    public function Order_GetHeading(Order_GetHeading $parameters)
    {
      return $this->__soapCall('Order_GetHeading', array($parameters));
    }

    /**
     * Sets the heading of an order.<br />Parameters: orderHandle: Handle for the order. value: The new heading of the order.
     *
     * @param Order_SetHeading $parameters
     * @return Order_SetHeadingResponse
     */
    public function Order_SetHeading(Order_SetHeading $parameters)
    {
      return $this->__soapCall('Order_SetHeading', array($parameters));
    }

    /**
     * Gets the primary line of text of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetTextLine1 $parameters
     * @return Order_GetTextLine1Response
     */
    public function Order_GetTextLine1(Order_GetTextLine1 $parameters)
    {
      return $this->__soapCall('Order_GetTextLine1', array($parameters));
    }

    /**
     * Sets the primary line of text of an order.<br />Parameters: orderHandle: Handle for the order. value: The new primary line of text of the order.
     *
     * @param Order_SetTextLine1 $parameters
     * @return Order_SetTextLine1Response
     */
    public function Order_SetTextLine1(Order_SetTextLine1 $parameters)
    {
      return $this->__soapCall('Order_SetTextLine1', array($parameters));
    }

    /**
     * Gets the secondary line of text of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetTextLine2 $parameters
     * @return Order_GetTextLine2Response
     */
    public function Order_GetTextLine2(Order_GetTextLine2 $parameters)
    {
      return $this->__soapCall('Order_GetTextLine2', array($parameters));
    }

    /**
     * Sets the secondary line of text of an order.<br />Parameters: orderHandle: Handle for the order. value: The new secondary line of text of the order.
     *
     * @param Order_SetTextLine2 $parameters
     * @return Order_SetTextLine2Response
     */
    public function Order_SetTextLine2(Order_SetTextLine2 $parameters)
    {
      return $this->__soapCall('Order_SetTextLine2', array($parameters));
    }

    /**
     * Gets the other reference of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetOtherReference $parameters
     * @return Order_GetOtherReferenceResponse
     */
    public function Order_GetOtherReference(Order_GetOtherReference $parameters)
    {
      return $this->__soapCall('Order_GetOtherReference', array($parameters));
    }

    /**
     * Sets the other reference of an order.<br />Parameters: orderHandle: Handle for the order. value: The new other reference of the order.
     *
     * @param Order_SetOtherReference $parameters
     * @return Order_SetOtherReferenceResponse
     */
    public function Order_SetOtherReference(Order_SetOtherReference $parameters)
    {
      return $this->__soapCall('Order_SetOtherReference', array($parameters));
    }

    /**
     * Gets thether an order is archived.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetIsArchived $parameters
     * @return Order_GetIsArchivedResponse
     */
    public function Order_GetIsArchived(Order_GetIsArchived $parameters)
    {
      return $this->__soapCall('Order_GetIsArchived', array($parameters));
    }

    /**
     * Gets whether an order is sent.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetIsSent $parameters
     * @return Order_GetIsSentResponse
     */
    public function Order_GetIsSent(Order_GetIsSent $parameters)
    {
      return $this->__soapCall('Order_GetIsSent', array($parameters));
    }

    /**
     * Gets the total amount for all the lines without VAT of an order (in the currency of the order).<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetNetAmount $parameters
     * @return Order_GetNetAmountResponse
     */
    public function Order_GetNetAmount(Order_GetNetAmount $parameters)
    {
      return $this->__soapCall('Order_GetNetAmount', array($parameters));
    }

    /**
     * Gets the total VAT amount for all the lines of an order (in the currency of the order).<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetVatAmount $parameters
     * @return Order_GetVatAmountResponse
     */
    public function Order_GetVatAmount(Order_GetVatAmount $parameters)
    {
      return $this->__soapCall('Order_GetVatAmount', array($parameters));
    }

    /**
     * Gets the total gross amount for all the lines of an order (in the currency of the order).<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetGrossAmount $parameters
     * @return Order_GetGrossAmountResponse
     */
    public function Order_GetGrossAmount(Order_GetGrossAmount $parameters)
    {
      return $this->__soapCall('Order_GetGrossAmount', array($parameters));
    }

    /**
     * Gets the margin of an order (in the currency of the order).<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetMargin $parameters
     * @return Order_GetMarginResponse
     */
    public function Order_GetMargin(Order_GetMargin $parameters)
    {
      return $this->__soapCall('Order_GetMargin', array($parameters));
    }

    /**
     * Gets the margin of an order as percent.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetMarginAsPercent $parameters
     * @return Order_GetMarginAsPercentResponse
     */
    public function Order_GetMarginAsPercent(Order_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('Order_GetMarginAsPercent', array($parameters));
    }

    /**
     * Gets the rounding amount for all lines of the order (in the currency of the order).<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetRoundingAmount $parameters
     * @return Order_GetRoundingAmountResponse
     */
    public function Order_GetRoundingAmount(Order_GetRoundingAmount $parameters)
    {
      return $this->__soapCall('Order_GetRoundingAmount', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DebtorCounty of an order. (UK only)<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorCounty $parameters
     * @return Order_GetDebtorCountyResponse
     */
    public function Order_GetDebtorCounty(Order_GetDebtorCounty $parameters)
    {
      return $this->__soapCall('Order_GetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DebtorCounty of an order. (UK only)<br />Parameters: orderHandle: Handle for the order. value: The new DebtorCounty of the order.
     *
     * @param Order_SetDebtorCounty $parameters
     * @return Order_SetDebtorCountyResponse
     */
    public function Order_SetDebtorCounty(Order_SetDebtorCounty $parameters)
    {
      return $this->__soapCall('Order_SetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DeliveryCounty of an order. (UK only)<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDeliveryCounty $parameters
     * @return Order_GetDeliveryCountyResponse
     */
    public function Order_GetDeliveryCounty(Order_GetDeliveryCounty $parameters)
    {
      return $this->__soapCall('Order_GetDeliveryCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DeliveryCounty of an order. (UK only)<br />Parameters: orderHandle: Handle for the order. value: The new DeliveryCounty of the order.
     *
     * @param Order_SetDeliveryCounty $parameters
     * @return Order_SetDeliveryCountyResponse
     */
    public function Order_SetDeliveryCounty(Order_SetDeliveryCounty $parameters)
    {
      return $this->__soapCall('Order_SetDeliveryCounty', array($parameters));
    }

    /**
     * Creates a new order line from a data object.<br />Parameters: data: The data object that specifies the properties of the new order line.
     *
     * @param OrderLine_CreateFromData $parameters
     * @return OrderLine_CreateFromDataResponse
     */
    public function OrderLine_CreateFromData(OrderLine_CreateFromData $parameters)
    {
      return $this->__soapCall('OrderLine_CreateFromData', array($parameters));
    }

    /**
     * Creates new order lines from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new order lines.
     *
     * @param OrderLine_CreateFromDataArray $parameters
     * @return OrderLine_CreateFromDataArrayResponse
     */
    public function OrderLine_CreateFromDataArray(OrderLine_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('OrderLine_CreateFromDataArray', array($parameters));
    }

    /**
     * Update order lines from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param OrderLine_UpdateFromDataArray $parameters
     * @return OrderLine_UpdateFromDataArrayResponse
     */
    public function OrderLine_UpdateFromDataArray(OrderLine_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('OrderLine_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an order line from a data object.<br />Parameters: data: The data object.
     *
     * @param OrderLine_UpdateFromData $parameters
     * @return OrderLine_UpdateFromDataResponse
     */
    public function OrderLine_UpdateFromData(OrderLine_UpdateFromData $parameters)
    {
      return $this->__soapCall('OrderLine_UpdateFromData', array($parameters));
    }

    /**
     * Returns an order line data object for a given order line.<br />Parameters: entityHandle: A handle for the order line.
     *
     * @param OrderLine_GetData $parameters
     * @return OrderLine_GetDataResponse
     */
    public function OrderLine_GetData(OrderLine_GetData $parameters)
    {
      return $this->__soapCall('OrderLine_GetData', array($parameters));
    }

    /**
     * Returns order line data objects for a given set of order line handles.<br />Parameters: entityHandles: An array of the order line handles.
     *
     * @param OrderLine_GetDataArray $parameters
     * @return OrderLine_GetDataArrayResponse
     */
    public function OrderLine_GetDataArray(OrderLine_GetDataArray $parameters)
    {
      return $this->__soapCall('OrderLine_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetNumber $parameters
     * @return OrderLine_GetNumberResponse
     */
    public function OrderLine_GetNumber(OrderLine_GetNumber $parameters)
    {
      return $this->__soapCall('OrderLine_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the order of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetOrder $parameters
     * @return OrderLine_GetOrderResponse
     */
    public function OrderLine_GetOrder(OrderLine_GetOrder $parameters)
    {
      return $this->__soapCall('OrderLine_GetOrder', array($parameters));
    }

    /**
     * Gets the description of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetDescription $parameters
     * @return OrderLine_GetDescriptionResponse
     */
    public function OrderLine_GetDescription(OrderLine_GetDescription $parameters)
    {
      return $this->__soapCall('OrderLine_GetDescription', array($parameters));
    }

    /**
     * Sets the description of an order line.<br />Parameters: orderLineHandle: Handle for the order line. value: The new description of the order line.
     *
     * @param OrderLine_SetDescription $parameters
     * @return OrderLine_SetDescriptionResponse
     */
    public function OrderLine_SetDescription(OrderLine_SetDescription $parameters)
    {
      return $this->__soapCall('OrderLine_SetDescription', array($parameters));
    }

    /**
     * Gets the delivery date of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetDeliveryDate $parameters
     * @return OrderLine_GetDeliveryDateResponse
     */
    public function OrderLine_GetDeliveryDate(OrderLine_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('OrderLine_GetDeliveryDate', array($parameters));
    }

    /**
     * Sets the delivery date of an order line.<br />Parameters: orderLineHandle: Handle for the order line. value: The new delivery date of the order line.
     *
     * @param OrderLine_SetDeliveryDate $parameters
     * @return OrderLine_SetDeliveryDateResponse
     */
    public function OrderLine_SetDeliveryDate(OrderLine_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('OrderLine_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets handle for primary unit of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetUnit $parameters
     * @return OrderLine_GetUnitResponse
     */
    public function OrderLine_GetUnit(OrderLine_GetUnit $parameters)
    {
      return $this->__soapCall('OrderLine_GetUnit', array($parameters));
    }

    /**
     * Sets primary unit of an order line.<br />Parameters: orderLineHandle: Handle for the order line. valueHandle: Handle for new primary unit of the order line.
     *
     * @param OrderLine_SetUnit $parameters
     * @return OrderLine_SetUnitResponse
     */
    public function OrderLine_SetUnit(OrderLine_SetUnit $parameters)
    {
      return $this->__soapCall('OrderLine_SetUnit', array($parameters));
    }

    /**
     * Sets product of an order line. Setting the product also sets the unit cost price to the cost price of the product. The product must be set before setting the quantity and the unit net price.<br />Parameters: orderLineHandle: Handle for the order line. valueHandle: Handle for new product of the order line.
     *
     * @param OrderLine_SetProduct $parameters
     * @return OrderLine_SetProductResponse
     */
    public function OrderLine_SetProduct(OrderLine_SetProduct $parameters)
    {
      return $this->__soapCall('OrderLine_SetProduct', array($parameters));
    }

    /**
     * Gets handle for product of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetProduct $parameters
     * @return OrderLine_GetProductResponse
     */
    public function OrderLine_GetProduct(OrderLine_GetProduct $parameters)
    {
      return $this->__soapCall('OrderLine_GetProduct', array($parameters));
    }

    /**
     * Gets primary quantity of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetQuantity $parameters
     * @return OrderLine_GetQuantityResponse
     */
    public function OrderLine_GetQuantity(OrderLine_GetQuantity $parameters)
    {
      return $this->__soapCall('OrderLine_GetQuantity', array($parameters));
    }

    /**
     * Sets primary quantity of an order line. The product of the order line must be set before setting this property.<br />Parameters: orderLineHandle: Handle for the order line. valueHandle: Handle for primary quantity of the order line.
     *
     * @param OrderLine_SetQuantity $parameters
     * @return OrderLine_SetQuantityResponse
     */
    public function OrderLine_SetQuantity(OrderLine_SetQuantity $parameters)
    {
      return $this->__soapCall('OrderLine_SetQuantity', array($parameters));
    }

    /**
     * Gets price per unit without VAT of an order line (in the currency of the order).<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetUnitNetPrice $parameters
     * @return OrderLine_GetUnitNetPriceResponse
     */
    public function OrderLine_GetUnitNetPrice(OrderLine_GetUnitNetPrice $parameters)
    {
      return $this->__soapCall('OrderLine_GetUnitNetPrice', array($parameters));
    }

    /**
     * Sets price per unit without VAT of an order line (in the currency of the order). The product of the order line must be set before setting this property.<br />Parameters: orderLineHandle: Handle for the order line. value: The new price per unit without VAT of the order line.
     *
     * @param OrderLine_SetUnitNetPrice $parameters
     * @return OrderLine_SetUnitNetPriceResponse
     */
    public function OrderLine_SetUnitNetPrice(OrderLine_SetUnitNetPrice $parameters)
    {
      return $this->__soapCall('OrderLine_SetUnitNetPrice', array($parameters));
    }

    /**
     * Sets cost price per unit on an order line. The product of the order line must be set before setting this property.<br />Parameters: orderLineHandle: Handle for the order line. value: The new cost price per unit.
     *
     * @param OrderLine_SetUnitCostPrice $parameters
     * @return OrderLine_SetUnitCostPriceResponse
     */
    public function OrderLine_SetUnitCostPrice(OrderLine_SetUnitCostPrice $parameters)
    {
      return $this->__soapCall('OrderLine_SetUnitCostPrice', array($parameters));
    }

    /**
     * Gets discount of an order line as percent.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetDiscountAsPercent $parameters
     * @return OrderLine_GetDiscountAsPercentResponse
     */
    public function OrderLine_GetDiscountAsPercent(OrderLine_GetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('OrderLine_GetDiscountAsPercent', array($parameters));
    }

    /**
     * Sets discount of an order line as percent.<br />Parameters: orderLineHandle: Handle for the order line. value: The new discount as percent of the order line.
     *
     * @param OrderLine_SetDiscountAsPercent $parameters
     * @return OrderLine_SetDiscountAsPercentResponse
     */
    public function OrderLine_SetDiscountAsPercent(OrderLine_SetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('OrderLine_SetDiscountAsPercent', array($parameters));
    }

    /**
     * Gets the cost price per unit witout VAT of an order line (in the default currency).<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetUnitCostPrice $parameters
     * @return OrderLine_GetUnitCostPriceResponse
     */
    public function OrderLine_GetUnitCostPrice(OrderLine_GetUnitCostPrice $parameters)
    {
      return $this->__soapCall('OrderLine_GetUnitCostPrice', array($parameters));
    }

    /**
     * Gets the total amount without VAT of an order line (in the currency of the order).<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetTotalNetAmount $parameters
     * @return OrderLine_GetTotalNetAmountResponse
     */
    public function OrderLine_GetTotalNetAmount(OrderLine_GetTotalNetAmount $parameters)
    {
      return $this->__soapCall('OrderLine_GetTotalNetAmount', array($parameters));
    }

    /**
     * Gets the margin of an order line (in the currency of the order).<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetTotalMargin $parameters
     * @return OrderLine_GetTotalMarginResponse
     */
    public function OrderLine_GetTotalMargin(OrderLine_GetTotalMargin $parameters)
    {
      return $this->__soapCall('OrderLine_GetTotalMargin', array($parameters));
    }

    /**
     * Gets the margin as percent of an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetMarginAsPercent $parameters
     * @return OrderLine_GetMarginAsPercentResponse
     */
    public function OrderLine_GetMarginAsPercent(OrderLine_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('OrderLine_GetMarginAsPercent', array($parameters));
    }

    /**
     * Gets a handle for the department of an order line. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetDepartment $parameters
     * @return OrderLine_GetDepartmentResponse
     */
    public function OrderLine_GetDepartment(OrderLine_GetDepartment $parameters)
    {
      return $this->__soapCall('OrderLine_GetDepartment', array($parameters));
    }

    /**
     * Sets the department of an order line. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: orderLineHandle: Handle for the order line. value: Handle for the new department of the order line.
     *
     * @param OrderLine_SetDepartment $parameters
     * @return OrderLine_SetDepartmentResponse
     */
    public function OrderLine_SetDepartment(OrderLine_SetDepartment $parameters)
    {
      return $this->__soapCall('OrderLine_SetDepartment', array($parameters));
    }

    /**
     * Sets the distribution key of an order line. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: orderLineHandle: Handle for the order line. value: Handle for the new distribution key of the order line.
     *
     * @param OrderLine_SetDistributionKey $parameters
     * @return OrderLine_SetDistributionKeyResponse
     */
    public function OrderLine_SetDistributionKey(OrderLine_SetDistributionKey $parameters)
    {
      return $this->__soapCall('OrderLine_SetDistributionKey', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of an order line. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetDistributionKey $parameters
     * @return OrderLine_GetDistributionKeyResponse
     */
    public function OrderLine_GetDistributionKey(OrderLine_GetDistributionKey $parameters)
    {
      return $this->__soapCall('OrderLine_GetDistributionKey', array($parameters));
    }

    /**
     * Creates a new order line.<br />Parameters: orderHandle: Handle for a order.
     *
     * @param OrderLine_Create $parameters
     * @return OrderLine_CreateResponse
     */
    public function OrderLine_Create(OrderLine_Create $parameters)
    {
      return $this->__soapCall('OrderLine_Create', array($parameters));
    }

    /**
     * Returns handles for all order lines.
     *
     * @param OrderLine_GetAll $parameters
     * @return OrderLine_GetAllResponse
     */
    public function OrderLine_GetAll(OrderLine_GetAll $parameters)
    {
      return $this->__soapCall('OrderLine_GetAll', array($parameters));
    }

    /**
     * Returns handles for order lines that uses a given product.<br />Parameters: product: The product to search for.
     *
     * @param OrderLine_FindByProduct $parameters
     * @return OrderLine_FindByProductResponse
     */
    public function OrderLine_FindByProduct(OrderLine_FindByProduct $parameters)
    {
      return $this->__soapCall('OrderLine_FindByProduct', array($parameters));
    }

    /**
     * Returns handles for order lines that uses a given set of products.<br />Parameters: products: The products to search for.
     *
     * @param OrderLine_FindByProductList $parameters
     * @return OrderLine_FindByProductListResponse
     */
    public function OrderLine_FindByProductList(OrderLine_FindByProductList $parameters)
    {
      return $this->__soapCall('OrderLine_FindByProductList', array($parameters));
    }

    /**
     * Deletes an order line.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_Delete $parameters
     * @return OrderLine_DeleteResponse
     */
    public function OrderLine_Delete(OrderLine_Delete $parameters)
    {
      return $this->__soapCall('OrderLine_Delete', array($parameters));
    }

    /**
     * Creates a new PriceGroup from a data object.<br />Parameters: data: The data object that specifies the properties of the new PriceGroup.
     *
     * @param PriceGroup_CreateFromData $parameters
     * @return PriceGroup_CreateFromDataResponse
     */
    public function PriceGroup_CreateFromData(PriceGroup_CreateFromData $parameters)
    {
      return $this->__soapCall('PriceGroup_CreateFromData', array($parameters));
    }

    /**
     * Creates new PriceGroups from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new PriceGroups.
     *
     * @param PriceGroup_CreateFromDataArray $parameters
     * @return PriceGroup_CreateFromDataArrayResponse
     */
    public function PriceGroup_CreateFromDataArray(PriceGroup_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('PriceGroup_CreateFromDataArray', array($parameters));
    }

    /**
     * Update PriceGroups from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param PriceGroup_UpdateFromDataArray $parameters
     * @return PriceGroup_UpdateFromDataArrayResponse
     */
    public function PriceGroup_UpdateFromDataArray(PriceGroup_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('PriceGroup_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a PriceGroup from a data object.<br />Parameters: data: The data object.
     *
     * @param PriceGroup_UpdateFromData $parameters
     * @return PriceGroup_UpdateFromDataResponse
     */
    public function PriceGroup_UpdateFromData(PriceGroup_UpdateFromData $parameters)
    {
      return $this->__soapCall('PriceGroup_UpdateFromData', array($parameters));
    }

    /**
     * Returns an PriceGroup data object for a given PriceGroup.<br />Parameters: entityHandle: A handle for the PriceGroup.
     *
     * @param PriceGroup_GetData $parameters
     * @return PriceGroup_GetDataResponse
     */
    public function PriceGroup_GetData(PriceGroup_GetData $parameters)
    {
      return $this->__soapCall('PriceGroup_GetData', array($parameters));
    }

    /**
     * Returns PriceGroup data objects for a given set of PriceGroup handles.<br />Parameters: entityHandles: An array of the PriceGroup handles.
     *
     * @param PriceGroup_GetDataArray $parameters
     * @return PriceGroup_GetDataArrayResponse
     */
    public function PriceGroup_GetDataArray(PriceGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('PriceGroup_GetDataArray', array($parameters));
    }

    /**
     * Creates a new PriceGroup.<br />Parameters: name: The name of the new PriceGroup.
     *
     * @param PriceGroup_Create $parameters
     * @return PriceGroup_CreateResponse
     */
    public function PriceGroup_Create(PriceGroup_Create $parameters)
    {
      return $this->__soapCall('PriceGroup_Create', array($parameters));
    }

    /**
     * Gets the number of a price group.<br />Parameters: PriceGroupHandle: Handle for the price group.
     *
     * @param PriceGroup_GetNumber $parameters
     * @return PriceGroup_GetNumberResponse
     */
    public function PriceGroup_GetNumber(PriceGroup_GetNumber $parameters)
    {
      return $this->__soapCall('PriceGroup_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a price group.<br />Parameters: priceGroupHandle: Handle for the price group.
     *
     * @param PriceGroup_GetName $parameters
     * @return PriceGroup_GetNameResponse
     */
    public function PriceGroup_GetName(PriceGroup_GetName $parameters)
    {
      return $this->__soapCall('PriceGroup_GetName', array($parameters));
    }

    /**
     * Sets the name of a price group.<br />Parameters: priceGroupHandle: Handle for the price group. value: The new name of the price group.
     *
     * @param PriceGroup_SetName $parameters
     * @return PriceGroup_SetNameResponse
     */
    public function PriceGroup_SetName(PriceGroup_SetName $parameters)
    {
      return $this->__soapCall('PriceGroup_SetName', array($parameters));
    }

    /**
     * Return handles for all price groups.
     *
     * @param PriceGroup_GetAll $parameters
     * @return PriceGroup_GetAllResponse
     */
    public function PriceGroup_GetAll(PriceGroup_GetAll $parameters)
    {
      return $this->__soapCall('PriceGroup_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the price group with the given number.<br />Parameters: number: The number to search for.
     *
     * @param PriceGroup_FindByNumber $parameters
     * @return PriceGroup_FindByNumberResponse
     */
    public function PriceGroup_FindByNumber(PriceGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('PriceGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for price groups corresponding to the given price group numbers. If a price group with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param PriceGroup_FindByNumberList $parameters
     * @return PriceGroup_FindByNumberListResponse
     */
    public function PriceGroup_FindByNumberList(PriceGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('PriceGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the price groups with the given name.<br />Parameters: name: The name to search for.
     *
     * @param PriceGroup_FindByName $parameters
     * @return PriceGroup_FindByNameResponse
     */
    public function PriceGroup_FindByName(PriceGroup_FindByName $parameters)
    {
      return $this->__soapCall('PriceGroup_FindByName', array($parameters));
    }

    /**
     * Deletes a PriceGroup.<br />Parameters: priceGroupHandle: Handle for the PriceGroup.
     *
     * @param PriceGroup_Delete $parameters
     * @return PriceGroup_DeleteResponse
     */
    public function PriceGroup_Delete(PriceGroup_Delete $parameters)
    {
      return $this->__soapCall('PriceGroup_Delete', array($parameters));
    }

    /**
     * Creates a new mileage entry.<br />Parameters: project: The project of the new mileage entry. activity: The activity of the new mileage entry. employee: The employee of the new mileage entry. date: The date of the new mileage entry. text: The text of the new mileage entry. numberOfHours: The number of hours of the new mileage entry.
     *
     * @param MileageEntry_Create $parameters
     * @return MileageEntry_CreateResponse
     */
    public function MileageEntry_Create(MileageEntry_Create $parameters)
    {
      return $this->__soapCall('MileageEntry_Create', array($parameters));
    }

    /**
     * Returns handles for all mileage entries.
     *
     * @param MileageEntry_GetAll $parameters
     * @return MileageEntry_GetAllResponse
     */
    public function MileageEntry_GetAll(MileageEntry_GetAll $parameters)
    {
      return $this->__soapCall('MileageEntry_GetAll', array($parameters));
    }

    /**
     * Deletes a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_Delete $parameters
     * @return MileageEntry_DeleteResponse
     */
    public function MileageEntry_Delete(MileageEntry_Delete $parameters)
    {
      return $this->__soapCall('MileageEntry_Delete', array($parameters));
    }

    /**
     * @param MileageEntry_GetId $parameters
     * @return MileageEntry_GetIdResponse
     */
    public function MileageEntry_GetId(MileageEntry_GetId $parameters)
    {
      return $this->__soapCall('MileageEntry_GetId', array($parameters));
    }

    /**
     * Gets handle for the project of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetProject $parameters
     * @return MileageEntry_GetProjectResponse
     */
    public function MileageEntry_GetProject(MileageEntry_GetProject $parameters)
    {
      return $this->__soapCall('MileageEntry_GetProject', array($parameters));
    }

    /**
     * Sets the project of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new project value.
     *
     * @param MileageEntry_SetProject $parameters
     * @return MileageEntry_SetProjectResponse
     */
    public function MileageEntry_SetProject(MileageEntry_SetProject $parameters)
    {
      return $this->__soapCall('MileageEntry_SetProject', array($parameters));
    }

    /**
     * Gets a handle for the employee of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetEmployee $parameters
     * @return MileageEntry_GetEmployeeResponse
     */
    public function MileageEntry_GetEmployee(MileageEntry_GetEmployee $parameters)
    {
      return $this->__soapCall('MileageEntry_GetEmployee', array($parameters));
    }

    /**
     * Sets the employee of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new employee value.
     *
     * @param MileageEntry_SetEmployee $parameters
     * @return MileageEntry_SetEmployeeResponse
     */
    public function MileageEntry_SetEmployee(MileageEntry_SetEmployee $parameters)
    {
      return $this->__soapCall('MileageEntry_SetEmployee', array($parameters));
    }

    /**
     * Gets the date of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetDate $parameters
     * @return MileageEntry_GetDateResponse
     */
    public function MileageEntry_GetDate(MileageEntry_GetDate $parameters)
    {
      return $this->__soapCall('MileageEntry_GetDate', array($parameters));
    }

    /**
     * Gets the sales price of the mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetSalesPrice $parameters
     * @return MileageEntry_GetSalesPriceResponse
     */
    public function MileageEntry_GetSalesPrice(MileageEntry_GetSalesPrice $parameters)
    {
      return $this->__soapCall('MileageEntry_GetSalesPrice', array($parameters));
    }

    /**
     * Gets the cost price of the mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetCostPrice $parameters
     * @return MileageEntry_GetCostPriceResponse
     */
    public function MileageEntry_GetCostPrice(MileageEntry_GetCostPrice $parameters)
    {
      return $this->__soapCall('MileageEntry_GetCostPrice', array($parameters));
    }

    /**
     * Gets the cost rate used by a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetCostRate $parameters
     * @return MileageEntry_GetCostRateResponse
     */
    public function MileageEntry_GetCostRate(MileageEntry_GetCostRate $parameters)
    {
      return $this->__soapCall('MileageEntry_GetCostRate', array($parameters));
    }

    /**
     * Gets the sales rate used by a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetSalesRate $parameters
     * @return MileageEntry_GetSalesRateResponse
     */
    public function MileageEntry_GetSalesRate(MileageEntry_GetSalesRate $parameters)
    {
      return $this->__soapCall('MileageEntry_GetSalesRate', array($parameters));
    }

    /**
     * Sets the date of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new date value.
     *
     * @param MileageEntry_SetDate $parameters
     * @return MileageEntry_SetDateResponse
     */
    public function MileageEntry_SetDate(MileageEntry_SetDate $parameters)
    {
      return $this->__soapCall('MileageEntry_SetDate', array($parameters));
    }

    /**
     * Gets the start location of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetStartLocation $parameters
     * @return MileageEntry_GetStartLocationResponse
     */
    public function MileageEntry_GetStartLocation(MileageEntry_GetStartLocation $parameters)
    {
      return $this->__soapCall('MileageEntry_GetStartLocation', array($parameters));
    }

    /**
     * Sets the start location of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new start location value.
     *
     * @param MileageEntry_SetStartLocation $parameters
     * @return MileageEntry_SetStartLocationResponse
     */
    public function MileageEntry_SetStartLocation(MileageEntry_SetStartLocation $parameters)
    {
      return $this->__soapCall('MileageEntry_SetStartLocation', array($parameters));
    }

    /**
     * Gets the end location of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetEndLocation $parameters
     * @return MileageEntry_GetEndLocationResponse
     */
    public function MileageEntry_GetEndLocation(MileageEntry_GetEndLocation $parameters)
    {
      return $this->__soapCall('MileageEntry_GetEndLocation', array($parameters));
    }

    /**
     * Sets the end location of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new end location value.
     *
     * @param MileageEntry_SetEndLocation $parameters
     * @return MileageEntry_SetEndLocationResponse
     */
    public function MileageEntry_SetEndLocation(MileageEntry_SetEndLocation $parameters)
    {
      return $this->__soapCall('MileageEntry_SetEndLocation', array($parameters));
    }

    /**
     * Gets the distance of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetDistance $parameters
     * @return MileageEntry_GetDistanceResponse
     */
    public function MileageEntry_GetDistance(MileageEntry_GetDistance $parameters)
    {
      return $this->__soapCall('MileageEntry_GetDistance', array($parameters));
    }

    /**
     * Sets the distance of a mileage entry.<br />Parameters: mileageEntryHandle: Handle for the mileage entry. value: new distance value.
     *
     * @param MileageEntry_SetDistance $parameters
     * @return MileageEntry_SetDistanceResponse
     */
    public function MileageEntry_SetDistance(MileageEntry_SetDistance $parameters)
    {
      return $this->__soapCall('MileageEntry_SetDistance', array($parameters));
    }

    /**
     * Gets whether the mileage entry is approved.<br />Parameters: mileageEntryHandle: Handle for the mileage entry.
     *
     * @param MileageEntry_GetApproved $parameters
     * @return MileageEntry_GetApprovedResponse
     */
    public function MileageEntry_GetApproved(MileageEntry_GetApproved $parameters)
    {
      return $this->__soapCall('MileageEntry_GetApproved', array($parameters));
    }

    /**
     * Approves the given entries.<br />Parameters: mileageEntryHandles: Handles for the mileage entries.
     *
     * @param MileageEntry_ApproveEntries $parameters
     * @return MileageEntry_ApproveEntriesResponse
     */
    public function MileageEntry_ApproveEntries(MileageEntry_ApproveEntries $parameters)
    {
      return $this->__soapCall('MileageEntry_ApproveEntries', array($parameters));
    }

    /**
     * Creates a new order from a data object.<br />Parameters: data: The data object that specifies the properties of the new order.
     *
     * @param Order_CreateFromData $parameters
     * @return Order_CreateFromDataResponse
     */
    public function Order_CreateFromData(Order_CreateFromData $parameters)
    {
      return $this->__soapCall('Order_CreateFromData', array($parameters));
    }

    /**
     * Creates new orders from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new orders.
     *
     * @param Order_CreateFromDataArray $parameters
     * @return Order_CreateFromDataArrayResponse
     */
    public function Order_CreateFromDataArray(Order_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Order_CreateFromDataArray', array($parameters));
    }

    /**
     * Update orders from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Order_UpdateFromDataArray $parameters
     * @return Order_UpdateFromDataArrayResponse
     */
    public function Order_UpdateFromDataArray(Order_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Order_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an order from a data object.<br />Parameters: data: The data object.
     *
     * @param Order_UpdateFromData $parameters
     * @return Order_UpdateFromDataResponse
     */
    public function Order_UpdateFromData(Order_UpdateFromData $parameters)
    {
      return $this->__soapCall('Order_UpdateFromData', array($parameters));
    }

    /**
     * Returns an order data object for a given order.<br />Parameters: entityHandle: A handle for the order.
     *
     * @param Order_GetData $parameters
     * @return Order_GetDataResponse
     */
    public function Order_GetData(Order_GetData $parameters)
    {
      return $this->__soapCall('Order_GetData', array($parameters));
    }

    /**
     * Returns order data objects for a given set of order handles.<br />Parameters: entityHandles: An array of the order handles.
     *
     * @param Order_GetDataArray $parameters
     * @return Order_GetDataArrayResponse
     */
    public function Order_GetDataArray(Order_GetDataArray $parameters)
    {
      return $this->__soapCall('Order_GetDataArray', array($parameters));
    }

    /**
     * Creates a new order. The debtor properties of the new order are set to those of the debtor.<br />Parameters: Handle for the debtr of the new order.
     *
     * @param Order_Create $parameters
     * @return Order_CreateResponse
     */
    public function Order_Create(Order_Create $parameters)
    {
      return $this->__soapCall('Order_Create', array($parameters));
    }

    /**
     * Gets an order as a PDF-file.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetPdf $parameters
     * @return Order_GetPdfResponse
     */
    public function Order_GetPdf(Order_GetPdf $parameters)
    {
      return $this->__soapCall('Order_GetPdf', array($parameters));
    }

    /**
     * Returns handles for all orders.
     *
     * @param Order_GetAll $parameters
     * @return Order_GetAllResponse
     */
    public function Order_GetAll(Order_GetAll $parameters)
    {
      return $this->__soapCall('Order_GetAll', array($parameters));
    }

    /**
     * Returns handles for all current orders.
     *
     * @param Order_GetAllCurrent $parameters
     * @return Order_GetAllCurrentResponse
     */
    public function Order_GetAllCurrent(Order_GetAllCurrent $parameters)
    {
      return $this->__soapCall('Order_GetAllCurrent', array($parameters));
    }

    /**
     * Returns handles for the orders with a given other reference.<br />Parameters: otherReference: The other reference to search for.
     *
     * @param Order_FindByOtherReference $parameters
     * @return Order_FindByOtherReferenceResponse
     */
    public function Order_FindByOtherReference(Order_FindByOtherReference $parameters)
    {
      return $this->__soapCall('Order_FindByOtherReference', array($parameters));
    }

    /**
     * Returns a handle for the order with a given number.<br />Parameters: number: The number to search for.
     *
     * @param Order_FindByNumber $parameters
     * @return Order_FindByNumberResponse
     */
    public function Order_FindByNumber(Order_FindByNumber $parameters)
    {
      return $this->__soapCall('Order_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the orders with numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param Order_FindByNumberInterval $parameters
     * @return Order_FindByNumberIntervalResponse
     */
    public function Order_FindByNumberInterval(Order_FindByNumberInterval $parameters)
    {
      return $this->__soapCall('Order_FindByNumberInterval', array($parameters));
    }

    /**
     * Returns handles for orders in a given interval of days.<br />Parameters: first: First day in interval. last: Last day in interval.
     *
     * @param Order_FindByDateInterval $parameters
     * @return Order_FindByDateIntervalResponse
     */
    public function Order_FindByDateInterval(Order_FindByDateInterval $parameters)
    {
      return $this->__soapCall('Order_FindByDateInterval', array($parameters));
    }

    /**
     * Return handles for all orders from date. FromDate is based on CET.
     *
     * @param Order_GetAllUpdated $parameters
     * @return Order_GetAllUpdatedResponse
     */
    public function Order_GetAllUpdated(Order_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Order_GetAllUpdated', array($parameters));
    }

    /**
     * Gets handles for lines of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetLines $parameters
     * @return Order_GetLinesResponse
     */
    public function Order_GetLines(Order_GetLines $parameters)
    {
      return $this->__soapCall('Order_GetLines', array($parameters));
    }

    /**
     * Registers an order as sent.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_RegisterAsSent $parameters
     * @return Order_RegisterAsSentResponse
     */
    public function Order_RegisterAsSent(Order_RegisterAsSent $parameters)
    {
      return $this->__soapCall('Order_RegisterAsSent', array($parameters));
    }

    /**
     * Cancels sent status of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_CancelSentStatus $parameters
     * @return Order_CancelSentStatusResponse
     */
    public function Order_CancelSentStatus(Order_CancelSentStatus $parameters)
    {
      return $this->__soapCall('Order_CancelSentStatus', array($parameters));
    }

    /**
     * Upgrades an order to a current invoice.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_UpgradeToInvoice $parameters
     * @return Order_UpgradeToInvoiceResponse
     */
    public function Order_UpgradeToInvoice(Order_UpgradeToInvoice $parameters)
    {
      return $this->__soapCall('Order_UpgradeToInvoice', array($parameters));
    }

    /**
     * Deletes an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_Delete $parameters
     * @return Order_DeleteResponse
     */
    public function Order_Delete(Order_Delete $parameters)
    {
      return $this->__soapCall('Order_Delete', array($parameters));
    }

    /**
     * Gets a handle for the debtor of the order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtor $parameters
     * @return Order_GetDebtorResponse
     */
    public function Order_GetDebtor(Order_GetDebtor $parameters)
    {
      return $this->__soapCall('Order_GetDebtor', array($parameters));
    }

    /**
     * Sets a handle for the debtor of the order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for the new debtor of the order.
     *
     * @param Order_SetDebtor $parameters
     * @return Order_SetDebtorResponse
     */
    public function Order_SetDebtor(Order_SetDebtor $parameters)
    {
      return $this->__soapCall('Order_SetDebtor', array($parameters));
    }

    /**
     * Gets the number of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetNumber $parameters
     * @return Order_GetNumberResponse
     */
    public function Order_GetNumber(Order_GetNumber $parameters)
    {
      return $this->__soapCall('Order_GetNumber', array($parameters));
    }

    /**
     * Gets the debtor number of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorName $parameters
     * @return Order_GetDebtorNameResponse
     */
    public function Order_GetDebtorName(Order_GetDebtorName $parameters)
    {
      return $this->__soapCall('Order_GetDebtorName', array($parameters));
    }

    /**
     * Sets the debtor number of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor number of the order.
     *
     * @param Order_SetDebtorName $parameters
     * @return Order_SetDebtorNameResponse
     */
    public function Order_SetDebtorName(Order_SetDebtorName $parameters)
    {
      return $this->__soapCall('Order_SetDebtorName', array($parameters));
    }

    /**
     * Gets the debtor address of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorAddress $parameters
     * @return Order_GetDebtorAddressResponse
     */
    public function Order_GetDebtorAddress(Order_GetDebtorAddress $parameters)
    {
      return $this->__soapCall('Order_GetDebtorAddress', array($parameters));
    }

    /**
     * Sets the debtor address of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor address of the order.
     *
     * @param Order_SetDebtorAddress $parameters
     * @return Order_SetDebtorAddressResponse
     */
    public function Order_SetDebtorAddress(Order_SetDebtorAddress $parameters)
    {
      return $this->__soapCall('Order_SetDebtorAddress', array($parameters));
    }

    /**
     * Gets the debtor postal code of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorPostalCode $parameters
     * @return Order_GetDebtorPostalCodeResponse
     */
    public function Order_GetDebtorPostalCode(Order_GetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('Order_GetDebtorPostalCode', array($parameters));
    }

    /**
     * Sets the debtor postal code of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor postal code of the order.
     *
     * @param Order_SetDebtorPostalCode $parameters
     * @return Order_SetDebtorPostalCodeResponse
     */
    public function Order_SetDebtorPostalCode(Order_SetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('Order_SetDebtorPostalCode', array($parameters));
    }

    /**
     * Gets the debtor city of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorCity $parameters
     * @return Order_GetDebtorCityResponse
     */
    public function Order_GetDebtorCity(Order_GetDebtorCity $parameters)
    {
      return $this->__soapCall('Order_GetDebtorCity', array($parameters));
    }

    /**
     * Sets the debtor city of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor city of the order.
     *
     * @param Order_SetDebtorCity $parameters
     * @return Order_SetDebtorCityResponse
     */
    public function Order_SetDebtorCity(Order_SetDebtorCity $parameters)
    {
      return $this->__soapCall('Order_SetDebtorCity', array($parameters));
    }

    /**
     * Gets the debtor country of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorCountry $parameters
     * @return Order_GetDebtorCountryResponse
     */
    public function Order_GetDebtorCountry(Order_GetDebtorCountry $parameters)
    {
      return $this->__soapCall('Order_GetDebtorCountry', array($parameters));
    }

    /**
     * Sets the debtor country of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor country of the order.
     *
     * @param Order_SetDebtorCountry $parameters
     * @return Order_SetDebtorCountryResponse
     */
    public function Order_SetDebtorCountry(Order_SetDebtorCountry $parameters)
    {
      return $this->__soapCall('Order_SetDebtorCountry', array($parameters));
    }

    /**
     * Gets the debtor EAN of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDebtorEan $parameters
     * @return Order_GetDebtorEanResponse
     */
    public function Order_GetDebtorEan(Order_GetDebtorEan $parameters)
    {
      return $this->__soapCall('Order_GetDebtorEan', array($parameters));
    }

    /**
     * Sets the debtor EAN of an order.<br />Parameters: orderHandle: Handle for the order. value: The new debtor EAN of the order.
     *
     * @param Order_SetDebtorEan $parameters
     * @return Order_SetDebtorEanResponse
     */
    public function Order_SetDebtorEan(Order_SetDebtorEan $parameters)
    {
      return $this->__soapCall('Order_SetDebtorEan', array($parameters));
    }

    /**
     * Gets a handle for the project related to the order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetProject $parameters
     * @return Order_GetProjectResponse
     */
    public function Order_GetProject(Order_GetProject $parameters)
    {
      return $this->__soapCall('Order_GetProject', array($parameters));
    }

    /**
     * Sets a handle for the project related to the order.<br />Parameters: orderHandle: Handle for the order. projectHandle: handle for the project.
     *
     * @param Order_SetProject $parameters
     * @return Order_SetProjectResponse
     */
    public function Order_SetProject(Order_SetProject $parameters)
    {
      return $this->__soapCall('Order_SetProject', array($parameters));
    }

    /**
     * Gets the public entry numer of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetPublicEntryNumber $parameters
     * @return Order_GetPublicEntryNumberResponse
     */
    public function Order_GetPublicEntryNumber(Order_GetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Order_GetPublicEntryNumber', array($parameters));
    }

    /**
     * Sets the public entry number of an order.<br />Parameters: orderHandle: Handle for the order. value: The new public entry number of the order.
     *
     * @param Order_SetPublicEntryNumber $parameters
     * @return Order_SetPublicEntryNumberResponse
     */
    public function Order_SetPublicEntryNumber(Order_SetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Order_SetPublicEntryNumber', array($parameters));
    }

    /**
     * Gets a handle for the attention of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetAttention $parameters
     * @return Order_GetAttentionResponse
     */
    public function Order_GetAttention(Order_GetAttention $parameters)
    {
      return $this->__soapCall('Order_GetAttention', array($parameters));
    }

    /**
     * Sets the attention of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new attention of the order.
     *
     * @param Order_SetAttention $parameters
     * @return Order_SetAttentionResponse
     */
    public function Order_SetAttention(Order_SetAttention $parameters)
    {
      return $this->__soapCall('Order_SetAttention', array($parameters));
    }

    /**
     * Gets a handle for the attention of the debtor of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetYourReference $parameters
     * @return Order_GetYourReferenceResponse
     */
    public function Order_GetYourReference(Order_GetYourReference $parameters)
    {
      return $this->__soapCall('Order_GetYourReference', array($parameters));
    }

    /**
     * Sets the attention for the debtor of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for the new reference for the debtor.
     *
     * @param Order_SetYourReference $parameters
     * @return Order_SetYourReferenceResponse
     */
    public function Order_SetYourReference(Order_SetYourReference $parameters)
    {
      return $this->__soapCall('Order_SetYourReference', array($parameters));
    }

    /**
     * Gets a handle for the primary reference of the creditor of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetOurReference $parameters
     * @return Order_GetOurReferenceResponse
     */
    public function Order_GetOurReference(Order_GetOurReference $parameters)
    {
      return $this->__soapCall('Order_GetOurReference', array($parameters));
    }

    /**
     * Sets the primary reference of the creditor of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new primary reference of the creditor of the order.
     *
     * @param Order_SetOurReference $parameters
     * @return Order_SetOurReferenceResponse
     */
    public function Order_SetOurReference(Order_SetOurReference $parameters)
    {
      return $this->__soapCall('Order_SetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the secondary reference of the creditor of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetOurReference2 $parameters
     * @return Order_GetOurReference2Response
     */
    public function Order_GetOurReference2(Order_GetOurReference2 $parameters)
    {
      return $this->__soapCall('Order_GetOurReference2', array($parameters));
    }

    /**
     * Sets the secondary reference of the creditor of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new secondary reference of the creditor of the order.
     *
     * @param Order_SetOurReference2 $parameters
     * @return Order_SetOurReference2Response
     */
    public function Order_SetOurReference2(Order_SetOurReference2 $parameters)
    {
      return $this->__soapCall('Order_SetOurReference2', array($parameters));
    }

    /**
     * Gets the date of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDate $parameters
     * @return Order_GetDateResponse
     */
    public function Order_GetDate(Order_GetDate $parameters)
    {
      return $this->__soapCall('Order_GetDate', array($parameters));
    }

    /**
     * Sets the date of an order. The due date is calculated accordingly as specified by the term of payment.<br />Parameters: orderHandle: Handle for the order. value: The new date of the order.
     *
     * @param Order_SetDate $parameters
     * @return Order_SetDateResponse
     */
    public function Order_SetDate(Order_SetDate $parameters)
    {
      return $this->__soapCall('Order_SetDate', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetTermOfPayment $parameters
     * @return Order_GetTermOfPaymentResponse
     */
    public function Order_GetTermOfPayment(Order_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('Order_GetTermOfPayment', array($parameters));
    }

    /**
     * Sets the term of payment of an order. The due date is calculated accordingly.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new term of payment of the order.
     *
     * @param Order_SetTermOfPayment $parameters
     * @return Order_SetTermOfPaymentResponse
     */
    public function Order_SetTermOfPayment(Order_SetTermOfPayment $parameters)
    {
      return $this->__soapCall('Order_SetTermOfPayment', array($parameters));
    }

    /**
     * Gets the due date of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetDueDate $parameters
     * @return Order_GetDueDateResponse
     */
    public function Order_GetDueDate(Order_GetDueDate $parameters)
    {
      return $this->__soapCall('Order_GetDueDate', array($parameters));
    }

    /**
     * Sets the due date of an order. It is only allowed to set the due date to an actual date when the type of TermOfPayment is set to DueDate.<br />Parameters: orderHandle: Handle for the order. value: The new due date of the order.
     *
     * @param Order_SetDueDate $parameters
     * @return Order_SetDueDateResponse
     */
    public function Order_SetDueDate(Order_SetDueDate $parameters)
    {
      return $this->__soapCall('Order_SetDueDate', array($parameters));
    }

    /**
     * Gets a handle for the currency of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetCurrency $parameters
     * @return Order_GetCurrencyResponse
     */
    public function Order_GetCurrency(Order_GetCurrency $parameters)
    {
      return $this->__soapCall('Order_GetCurrency', array($parameters));
    }

    /**
     * Sets the currency of an order. The value may not be null.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new currency of the order.
     *
     * @param Order_SetCurrency $parameters
     * @return Order_SetCurrencyResponse
     */
    public function Order_SetCurrency(Order_SetCurrency $parameters)
    {
      return $this->__soapCall('Order_SetCurrency', array($parameters));
    }

    /**
     * Gets the exchange rate of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetExchangeRate $parameters
     * @return Order_GetExchangeRateResponse
     */
    public function Order_GetExchangeRate(Order_GetExchangeRate $parameters)
    {
      return $this->__soapCall('Order_GetExchangeRate', array($parameters));
    }

    /**
     * Sets the exchange rate of an order. The values on the lines are not updated when setting this property.<br />Parameters: orderHandle: Handle for the order. value: The new exchange of the order.
     *
     * @param Order_SetExchangeRate $parameters
     * @return Order_SetExchangeRateResponse
     */
    public function Order_SetExchangeRate(Order_SetExchangeRate $parameters)
    {
      return $this->__soapCall('Order_SetExchangeRate', array($parameters));
    }

    /**
     * Gets whether the order has VAT included.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetIsVatIncluded $parameters
     * @return Order_GetIsVatIncludedResponse
     */
    public function Order_GetIsVatIncluded(Order_GetIsVatIncluded $parameters)
    {
      return $this->__soapCall('Order_GetIsVatIncluded', array($parameters));
    }

    /**
     * Sets whether the order has VAT included.<br />Parameters: orderHandle: Handle for the order. value: The new value indicating whether the order should include VAT.
     *
     * @param Order_SetIsVatIncluded $parameters
     * @return Order_SetIsVatIncludedResponse
     */
    public function Order_SetIsVatIncluded(Order_SetIsVatIncluded $parameters)
    {
      return $this->__soapCall('Order_SetIsVatIncluded', array($parameters));
    }

    /**
     * Gets the current VAT zone of the Order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetVatZone $parameters
     * @return Order_GetVatZoneResponse
     */
    public function Order_GetVatZone(Order_GetVatZone $parameters)
    {
      return $this->__soapCall('Order_GetVatZone', array($parameters));
    }

    /**
     * Sets the VAT zone of the Order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle to the new VAT zone of the Order.
     *
     * @param Order_SetVatZone $parameters
     * @return Order_SetVatZoneResponse
     */
    public function Order_SetVatZone(Order_SetVatZone $parameters)
    {
      return $this->__soapCall('Order_SetVatZone', array($parameters));
    }

    /**
     * Gets a handle for the layout of an order.<br />Parameters: orderHandle: Handle for the order.
     *
     * @param Order_GetLayout $parameters
     * @return Order_GetLayoutResponse
     */
    public function Order_GetLayout(Order_GetLayout $parameters)
    {
      return $this->__soapCall('Order_GetLayout', array($parameters));
    }

    /**
     * Sets the layout of an order.<br />Parameters: orderHandle: Handle for the order. valueHandle: Handle for new layout of the order.
     *
     * @param Order_SetLayout $parameters
     * @return Order_SetLayoutResponse
     */
    public function Order_SetLayout(Order_SetLayout $parameters)
    {
      return $this->__soapCall('Order_SetLayout', array($parameters));
    }

    /**
     * Gets a handle for the attention of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetAttention $parameters
     * @return Invoice_GetAttentionResponse
     */
    public function Invoice_GetAttention(Invoice_GetAttention $parameters)
    {
      return $this->__soapCall('Invoice_GetAttention', array($parameters));
    }

    /**
     * Gets a handle for the reference of the debtor of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetYourReference $parameters
     * @return Invoice_GetYourReferenceResponse
     */
    public function Invoice_GetYourReference(Invoice_GetYourReference $parameters)
    {
      return $this->__soapCall('Invoice_GetYourReference', array($parameters));
    }

    /**
     * Gets a handle for the primary reference of the creditor of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetOurReference $parameters
     * @return Invoice_GetOurReferenceResponse
     */
    public function Invoice_GetOurReference(Invoice_GetOurReference $parameters)
    {
      return $this->__soapCall('Invoice_GetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the secodary reference of the creditor of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetOurReference2 $parameters
     * @return Invoice_GetOurReference2Response
     */
    public function Invoice_GetOurReference2(Invoice_GetOurReference2 $parameters)
    {
      return $this->__soapCall('Invoice_GetOurReference2', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetTermOfPayment $parameters
     * @return Invoice_GetTermOfPaymentResponse
     */
    public function Invoice_GetTermOfPayment(Invoice_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('Invoice_GetTermOfPayment', array($parameters));
    }

    /**
     * Gets a handle for the currency of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetCurrency $parameters
     * @return Invoice_GetCurrencyResponse
     */
    public function Invoice_GetCurrency(Invoice_GetCurrency $parameters)
    {
      return $this->__soapCall('Invoice_GetCurrency', array($parameters));
    }

    /**
     * Gets whether the invoice has VAT included.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetIsVatIncluded $parameters
     * @return Invoice_GetIsVatIncludedResponse
     */
    public function Invoice_GetIsVatIncluded(Invoice_GetIsVatIncluded $parameters)
    {
      return $this->__soapCall('Invoice_GetIsVatIncluded', array($parameters));
    }

    /**
     * Gets a handle for the layout of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetLayout $parameters
     * @return Invoice_GetLayoutResponse
     */
    public function Invoice_GetLayout(Invoice_GetLayout $parameters)
    {
      return $this->__soapCall('Invoice_GetLayout', array($parameters));
    }

    /**
     * Gets a handle for the delivery location of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryLocation $parameters
     * @return Invoice_GetDeliveryLocationResponse
     */
    public function Invoice_GetDeliveryLocation(Invoice_GetDeliveryLocation $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryLocation', array($parameters));
    }

    /**
     * Gets the delivery address of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryAddress $parameters
     * @return Invoice_GetDeliveryAddressResponse
     */
    public function Invoice_GetDeliveryAddress(Invoice_GetDeliveryAddress $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryAddress', array($parameters));
    }

    /**
     * Gets the delivery postal code of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryPostalCode $parameters
     * @return Invoice_GetDeliveryPostalCodeResponse
     */
    public function Invoice_GetDeliveryPostalCode(Invoice_GetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryPostalCode', array($parameters));
    }

    /**
     * Gets the delivery city of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryCity $parameters
     * @return Invoice_GetDeliveryCityResponse
     */
    public function Invoice_GetDeliveryCity(Invoice_GetDeliveryCity $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryCity', array($parameters));
    }

    /**
     * Gets the delivery country of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryCountry $parameters
     * @return Invoice_GetDeliveryCountryResponse
     */
    public function Invoice_GetDeliveryCountry(Invoice_GetDeliveryCountry $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryCountry', array($parameters));
    }

    /**
     * Gets the terms of delivery of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetTermsOfDelivery $parameters
     * @return Invoice_GetTermsOfDeliveryResponse
     */
    public function Invoice_GetTermsOfDelivery(Invoice_GetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('Invoice_GetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets the delivery date of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeliveryDate $parameters
     * @return Invoice_GetDeliveryDateResponse
     */
    public function Invoice_GetDeliveryDate(Invoice_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryDate', array($parameters));
    }

    /**
     * Gets the date of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDate $parameters
     * @return Invoice_GetDateResponse
     */
    public function Invoice_GetDate(Invoice_GetDate $parameters)
    {
      return $this->__soapCall('Invoice_GetDate', array($parameters));
    }

    /**
     * Gets the due date of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDueDate $parameters
     * @return Invoice_GetDueDateResponse
     */
    public function Invoice_GetDueDate(Invoice_GetDueDate $parameters)
    {
      return $this->__soapCall('Invoice_GetDueDate', array($parameters));
    }

    /**
     * Gets the heading of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetHeading $parameters
     * @return Invoice_GetHeadingResponse
     */
    public function Invoice_GetHeading(Invoice_GetHeading $parameters)
    {
      return $this->__soapCall('Invoice_GetHeading', array($parameters));
    }

    /**
     * Gets the primary line of text of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetTextLine1 $parameters
     * @return Invoice_GetTextLine1Response
     */
    public function Invoice_GetTextLine1(Invoice_GetTextLine1 $parameters)
    {
      return $this->__soapCall('Invoice_GetTextLine1', array($parameters));
    }

    /**
     * Gets the secondary line of text of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetTextLine2 $parameters
     * @return Invoice_GetTextLine2Response
     */
    public function Invoice_GetTextLine2(Invoice_GetTextLine2 $parameters)
    {
      return $this->__soapCall('Invoice_GetTextLine2', array($parameters));
    }

    /**
     * Gets the other reference of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetOtherReference $parameters
     * @return Invoice_GetOtherReferenceResponse
     */
    public function Invoice_GetOtherReference(Invoice_GetOtherReference $parameters)
    {
      return $this->__soapCall('Invoice_GetOtherReference', array($parameters));
    }

    /**
     * Gets the order number of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetOrderNumber $parameters
     * @return Invoice_GetOrderNumberResponse
     */
    public function Invoice_GetOrderNumber(Invoice_GetOrderNumber $parameters)
    {
      return $this->__soapCall('Invoice_GetOrderNumber', array($parameters));
    }

    /**
     * Gets the total amount for all lines without VAT of the invoice (in the currency of the invoice).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetNetAmount $parameters
     * @return Invoice_GetNetAmountResponse
     */
    public function Invoice_GetNetAmount(Invoice_GetNetAmount $parameters)
    {
      return $this->__soapCall('Invoice_GetNetAmount', array($parameters));
    }

    /**
     * Gets the total VAT amount for all lines of the invoice (in the currency of the invoice).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetVatAmount $parameters
     * @return Invoice_GetVatAmountResponse
     */
    public function Invoice_GetVatAmount(Invoice_GetVatAmount $parameters)
    {
      return $this->__soapCall('Invoice_GetVatAmount', array($parameters));
    }

    /**
     * Gets the total gross amount for all lines of the invoice (in the currency of the invoice).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetGrossAmount $parameters
     * @return Invoice_GetGrossAmountResponse
     */
    public function Invoice_GetGrossAmount(Invoice_GetGrossAmount $parameters)
    {
      return $this->__soapCall('Invoice_GetGrossAmount', array($parameters));
    }

    /**
     * Gets the remainder of the invoice (in the currency of the invoice).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetRemainder $parameters
     * @return Invoice_GetRemainderResponse
     */
    public function Invoice_GetRemainder(Invoice_GetRemainder $parameters)
    {
      return $this->__soapCall('Invoice_GetRemainder', array($parameters));
    }

    /**
     * Gets the remainder of the invoice (in the default currency).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetRemainderDefaultCurrency $parameters
     * @return Invoice_GetRemainderDefaultCurrencyResponse
     */
    public function Invoice_GetRemainderDefaultCurrency(Invoice_GetRemainderDefaultCurrency $parameters)
    {
      return $this->__soapCall('Invoice_GetRemainderDefaultCurrency', array($parameters));
    }

    /**
     * Gets the rounding amount for all lines of the invoice (in the currency of the invoice).<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetRoundingAmount $parameters
     * @return Invoice_GetRoundingAmountResponse
     */
    public function Invoice_GetRoundingAmount(Invoice_GetRoundingAmount $parameters)
    {
      return $this->__soapCall('Invoice_GetRoundingAmount', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DebtorCounty of an invoice. (UK only)<br />Parameters: InvoiceHandle: Handle for the Invoice.
     *
     * @param Invoice_GetDebtorCounty $parameters
     * @return Invoice_GetDebtorCountyResponse
     */
    public function Invoice_GetDebtorCounty(Invoice_GetDebtorCounty $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DeliveryCounty of an invoice. (UK only)<br />Parameters: InvoiceHandle: Handle for the Invoice.
     *
     * @param Invoice_GetDeliveryCounty $parameters
     * @return Invoice_GetDeliveryCountyResponse
     */
    public function Invoice_GetDeliveryCounty(Invoice_GetDeliveryCounty $parameters)
    {
      return $this->__soapCall('Invoice_GetDeliveryCounty', array($parameters));
    }

    /**
     * @param Invoice_GetNetAmountDefaultCurrency $parameters
     * @return Invoice_GetNetAmountDefaultCurrencyResponse
     */
    public function Invoice_GetNetAmountDefaultCurrency(Invoice_GetNetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('Invoice_GetNetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets the deduction amount of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDeductionAmount $parameters
     * @return Invoice_GetDeductionAmountResponse
     */
    public function Invoice_GetDeductionAmount(Invoice_GetDeductionAmount $parameters)
    {
      return $this->__soapCall('Invoice_GetDeductionAmount', array($parameters));
    }

    /**
     * Returns handles for all invoices.
     *
     * @param Invoice_GetAll $parameters
     * @return Invoice_GetAllResponse
     */
    public function Invoice_GetAll(Invoice_GetAll $parameters)
    {
      return $this->__soapCall('Invoice_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the invoice with the given number.<br />Parameters: number: The number to search for.
     *
     * @param Invoice_FindByNumber $parameters
     * @return Invoice_FindByNumberResponse
     */
    public function Invoice_FindByNumber(Invoice_FindByNumber $parameters)
    {
      return $this->__soapCall('Invoice_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the invoices corresponding to the given invoice numbers. If a invoice with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Invoice_FindByNumberList $parameters
     * @return Invoice_FindByNumberListResponse
     */
    public function Invoice_FindByNumberList(Invoice_FindByNumberList $parameters)
    {
      return $this->__soapCall('Invoice_FindByNumberList', array($parameters));
    }

    /**
     * Returns an array with handles for the invoices with invoice numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param Invoice_FindByNumberInterval $parameters
     * @return Invoice_FindByNumberIntervalResponse
     */
    public function Invoice_FindByNumberInterval(Invoice_FindByNumberInterval $parameters)
    {
      return $this->__soapCall('Invoice_FindByNumberInterval', array($parameters));
    }

    /**
     * Returns handles for invoices in a given interval of days.<br />Parameters: first: First day in interval. last: Last day in interval.
     *
     * @param Invoice_FindByDateInterval $parameters
     * @return Invoice_FindByDateIntervalResponse
     */
    public function Invoice_FindByDateInterval(Invoice_FindByDateInterval $parameters)
    {
      return $this->__soapCall('Invoice_FindByDateInterval', array($parameters));
    }

    /**
     * Returns handles for invoices which have the given employee as OurReference.<br />Parameters: ourReferenceHandle: The employee to search for.
     *
     * @param Invoice_FindByOurReference $parameters
     * @return Invoice_FindByOurReferenceResponse
     */
    public function Invoice_FindByOurReference(Invoice_FindByOurReference $parameters)
    {
      return $this->__soapCall('Invoice_FindByOurReference', array($parameters));
    }

    /**
     * Returns handles for the invoices with a given other reference.<br />Parameters: otherReference: The other reference to search for.
     *
     * @param Invoice_FindByOtherReference $parameters
     * @return Invoice_FindByOtherReferenceResponse
     */
    public function Invoice_FindByOtherReference(Invoice_FindByOtherReference $parameters)
    {
      return $this->__soapCall('Invoice_FindByOtherReference', array($parameters));
    }

    /**
     * Returns handles for the invoices with a given order number.<br />Parameters: orderNumber: The number to search for.
     *
     * @param Invoice_FindByOrderNumber $parameters
     * @return Invoice_FindByOrderNumberResponse
     */
    public function Invoice_FindByOrderNumber(Invoice_FindByOrderNumber $parameters)
    {
      return $this->__soapCall('Invoice_FindByOrderNumber', array($parameters));
    }

    /**
     * Gets handles for the lines of the invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetLines $parameters
     * @return Invoice_GetLinesResponse
     */
    public function Invoice_GetLines(Invoice_GetLines $parameters)
    {
      return $this->__soapCall('Invoice_GetLines', array($parameters));
    }

    /**
     * Gets an invoice as a PDF-file.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetPdf $parameters
     * @return Invoice_GetPdfResponse
     */
    public function Invoice_GetPdf(Invoice_GetPdf $parameters)
    {
      return $this->__soapCall('Invoice_GetPdf', array($parameters));
    }

    /**
     * Gets an OIO XML string representing an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetOioXml $parameters
     * @return Invoice_GetOioXmlResponse
     */
    public function Invoice_GetOioXml(Invoice_GetOioXml $parameters)
    {
      return $this->__soapCall('Invoice_GetOioXml', array($parameters));
    }

    /**
     * Returns an invoice line data object for a given invoice line.<br />Parameters: entityHandle: A handle for the invoice line.
     *
     * @param InvoiceLine_GetData $parameters
     * @return InvoiceLine_GetDataResponse
     */
    public function InvoiceLine_GetData(InvoiceLine_GetData $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetData', array($parameters));
    }

    /**
     * Returns invoice line data objects for a given set of invoice line handles.<br />Parameters: entityHandles: An array of the invoice line handles.
     *
     * @param InvoiceLine_GetDataArray $parameters
     * @return InvoiceLine_GetDataArrayResponse
     */
    public function InvoiceLine_GetDataArray(InvoiceLine_GetDataArray $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetNumber $parameters
     * @return InvoiceLine_GetNumberResponse
     */
    public function InvoiceLine_GetNumber(InvoiceLine_GetNumber $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the invoice of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetInvoice $parameters
     * @return InvoiceLine_GetInvoiceResponse
     */
    public function InvoiceLine_GetInvoice(InvoiceLine_GetInvoice $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetInvoice', array($parameters));
    }

    /**
     * Gets description of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetDescription $parameters
     * @return InvoiceLine_GetDescriptionResponse
     */
    public function InvoiceLine_GetDescription(InvoiceLine_GetDescription $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDescription', array($parameters));
    }

    /**
     * Gets delivery date of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetDeliveryDate $parameters
     * @return InvoiceLine_GetDeliveryDateResponse
     */
    public function InvoiceLine_GetDeliveryDate(InvoiceLine_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDeliveryDate', array($parameters));
    }

    /**
     * Gets a handle for the primary unit of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetUnit $parameters
     * @return InvoiceLine_GetUnitResponse
     */
    public function InvoiceLine_GetUnit(InvoiceLine_GetUnit $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetUnit', array($parameters));
    }

    /**
     * Gets a handle for the product of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetProduct $parameters
     * @return InvoiceLine_GetProductResponse
     */
    public function InvoiceLine_GetProduct(InvoiceLine_GetProduct $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetProduct', array($parameters));
    }

    /**
     * Gets the primary quantity of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetQuantity $parameters
     * @return InvoiceLine_GetQuantityResponse
     */
    public function InvoiceLine_GetQuantity(InvoiceLine_GetQuantity $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetQuantity', array($parameters));
    }

    /**
     * Gets the price per unit without VAT of an invoice line (in the currency of the invoice).<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetUnitNetPrice $parameters
     * @return InvoiceLine_GetUnitNetPriceResponse
     */
    public function InvoiceLine_GetUnitNetPrice(InvoiceLine_GetUnitNetPrice $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetUnitNetPrice', array($parameters));
    }

    /**
     * Gets the discount of an invoice line as percent.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetDiscountAsPercent $parameters
     * @return InvoiceLine_GetDiscountAsPercentResponse
     */
    public function InvoiceLine_GetDiscountAsPercent(InvoiceLine_GetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDiscountAsPercent', array($parameters));
    }

    /**
     * Gets the cost price per unit without VAT of an invoice line (in the default currency).<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetUnitCostPrice $parameters
     * @return InvoiceLine_GetUnitCostPriceResponse
     */
    public function InvoiceLine_GetUnitCostPrice(InvoiceLine_GetUnitCostPrice $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetUnitCostPrice', array($parameters));
    }

    /**
     * Gets the VAT rate of an invoice line.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetVatRate $parameters
     * @return InvoiceLine_GetVatRateResponse
     */
    public function InvoiceLine_GetVatRate(InvoiceLine_GetVatRate $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetVatRate', array($parameters));
    }

    /**
     * Gets the VAT amount of the invoice line (in the currency of the invoice).<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetVatAmount $parameters
     * @return InvoiceLine_GetVatAmountResponse
     */
    public function InvoiceLine_GetVatAmount(InvoiceLine_GetVatAmount $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetVatAmount', array($parameters));
    }

    /**
     * Gets the total amount of an invoice line without VAT (in the currency of the invoice).<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetTotalNetAmount $parameters
     * @return InvoiceLine_GetTotalNetAmountResponse
     */
    public function InvoiceLine_GetTotalNetAmount(InvoiceLine_GetTotalNetAmount $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetTotalNetAmount', array($parameters));
    }

    /**
     * Gets a handle for the department of an invoice line. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetDepartment $parameters
     * @return InvoiceLine_GetDepartmentResponse
     */
    public function InvoiceLine_GetDepartment(InvoiceLine_GetDepartment $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of an invoice line. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: invoiceLineHandle: Handle for the invoice line.
     *
     * @param InvoiceLine_GetDistributionKey $parameters
     * @return InvoiceLine_GetDistributionKeyResponse
     */
    public function InvoiceLine_GetDistributionKey(InvoiceLine_GetDistributionKey $parameters)
    {
      return $this->__soapCall('InvoiceLine_GetDistributionKey', array($parameters));
    }

    /**
     * Returns handles for invoice lines that uses a given product.<br />Parameters: product: The product to search for.
     *
     * @param InvoiceLine_FindByProduct $parameters
     * @return InvoiceLine_FindByProductResponse
     */
    public function InvoiceLine_FindByProduct(InvoiceLine_FindByProduct $parameters)
    {
      return $this->__soapCall('InvoiceLine_FindByProduct', array($parameters));
    }

    /**
     * Returns handles for invoice lines that uses a given set of products.<br />Parameters: products: The products to search for.
     *
     * @param InvoiceLine_FindByProductList $parameters
     * @return InvoiceLine_FindByProductListResponse
     */
    public function InvoiceLine_FindByProductList(InvoiceLine_FindByProductList $parameters)
    {
      return $this->__soapCall('InvoiceLine_FindByProductList', array($parameters));
    }

    /**
     * Returns handles for invoice lines for a given invoice number interval.<br />Parameters: fromInvoiceNumber: The minimum invoice number to search for. toInvoiceNumber: The maximum invoice number to search for.
     *
     * @param InvoiceLine_FindByInvoiceNumberInterval $parameters
     * @return InvoiceLine_FindByInvoiceNumberIntervalResponse
     */
    public function InvoiceLine_FindByInvoiceNumberInterval(InvoiceLine_FindByInvoiceNumberInterval $parameters)
    {
      return $this->__soapCall('InvoiceLine_FindByInvoiceNumberInterval', array($parameters));
    }

    /**
     * Returns a inventory location data object for a given inventory location.<br />Parameters: entityHandle: A handle for the inventory location.
     *
     * @param InventoryLocation_GetData $parameters
     * @return InventoryLocation_GetDataResponse
     */
    public function InventoryLocation_GetData(InventoryLocation_GetData $parameters)
    {
      return $this->__soapCall('InventoryLocation_GetData', array($parameters));
    }

    /**
     * Returns location objects for a given set of location handles.<br />Parameters: entityHandles: An array of the location handles.
     *
     * @param InventoryLocation_GetDataArray $parameters
     * @return InventoryLocation_GetDataArrayResponse
     */
    public function InventoryLocation_GetDataArray(InventoryLocation_GetDataArray $parameters)
    {
      return $this->__soapCall('InventoryLocation_GetDataArray', array($parameters));
    }

    /**
     * Return handles for all locations.
     *
     * @param InventoryLocation_GetAll $parameters
     * @return InventoryLocation_GetAllResponse
     */
    public function InventoryLocation_GetAll(InventoryLocation_GetAll $parameters)
    {
      return $this->__soapCall('InventoryLocation_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the inventory location with the given name.<br />Parameters: name: The name to search for.
     *
     * @param InventoryLocation_FindByName $parameters
     * @return InventoryLocation_FindByNameResponse
     */
    public function InventoryLocation_FindByName(InventoryLocation_FindByName $parameters)
    {
      return $this->__soapCall('InventoryLocation_FindByName', array($parameters));
    }

    /**
     * Returns a handle for the inventory location with the given number.<br />Parameters: number: The number to search for.
     *
     * @param InventoryLocation_FindByNumber $parameters
     * @return InventoryLocation_FindByNumberResponse
     */
    public function InventoryLocation_FindByNumber(InventoryLocation_FindByNumber $parameters)
    {
      return $this->__soapCall('InventoryLocation_FindByNumber', array($parameters));
    }

    /**
     * Returns a handle for the inventory locations that match the numbers in the given array.<br />Parameters: numbers: The numbers to search for.
     *
     * @param InventoryLocation_FindByNumberList $parameters
     * @return InventoryLocation_FindByNumberListResponse
     */
    public function InventoryLocation_FindByNumberList(InventoryLocation_FindByNumberList $parameters)
    {
      return $this->__soapCall('InventoryLocation_FindByNumberList', array($parameters));
    }

    /**
     * Gets the number of an inventory location.<br />Parameters: InventoryLocationHandle: Handle for the inventory location.
     *
     * @param InventoryLocation_GetNumber $parameters
     * @return InventoryLocation_GetNumberResponse
     */
    public function InventoryLocation_GetNumber(InventoryLocation_GetNumber $parameters)
    {
      return $this->__soapCall('InventoryLocation_GetNumber', array($parameters));
    }

    /**
     * Gets the name of an inventory location.<br />Parameters: InventoryLocationHandle: Handle for the inventory location.
     *
     * @param InventoryLocation_GetName $parameters
     * @return InventoryLocation_GetNameResponse
     */
    public function InventoryLocation_GetName(InventoryLocation_GetName $parameters)
    {
      return $this->__soapCall('InventoryLocation_GetName', array($parameters));
    }

    /**
     * Returns a key figure code data object for a given key figure code.<br />Parameters: entityHandle: A handle for the key figure code.
     *
     * @param KeyFigureCode_GetData $parameters
     * @return KeyFigureCode_GetDataResponse
     */
    public function KeyFigureCode_GetData(KeyFigureCode_GetData $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetData', array($parameters));
    }

    /**
     * Returns key figure code objects for a given set of key figure code handles.<br />Parameters: entityHandles: An array of the key figure code handles.
     *
     * @param KeyFigureCode_GetDataArray $parameters
     * @return KeyFigureCode_GetDataArrayResponse
     */
    public function KeyFigureCode_GetDataArray(KeyFigureCode_GetDataArray $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetDataArray', array($parameters));
    }

    /**
     * Return handles for all key figure codes.
     *
     * @param KeyFigureCode_GetAll $parameters
     * @return KeyFigureCode_GetAllResponse
     */
    public function KeyFigureCode_GetAll(KeyFigureCode_GetAll $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the key figure code with the given name.<br />Parameters: name: The name to search for.
     *
     * @param KeyFigureCode_FindByName $parameters
     * @return KeyFigureCode_FindByNameResponse
     */
    public function KeyFigureCode_FindByName(KeyFigureCode_FindByName $parameters)
    {
      return $this->__soapCall('KeyFigureCode_FindByName', array($parameters));
    }

    /**
     * Returns a handle for the key figure code with the given number.<br />Parameters: number: The number to search for.
     *
     * @param KeyFigureCode_FindByNumber $parameters
     * @return KeyFigureCode_FindByNumberResponse
     */
    public function KeyFigureCode_FindByNumber(KeyFigureCode_FindByNumber $parameters)
    {
      return $this->__soapCall('KeyFigureCode_FindByNumber', array($parameters));
    }

    /**
     * Gets handles for all accounts linked to the key figure code.<br />Parameters: keyFigureCodeHandle: Handle for the key figure code.
     *
     * @param KeyFigureCode_GetAccounts $parameters
     * @return KeyFigureCode_GetAccountsResponse
     */
    public function KeyFigureCode_GetAccounts(KeyFigureCode_GetAccounts $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetAccounts', array($parameters));
    }

    /**
     * Gets the number of a key figure code.<br />Parameters: keyFigureCodeHandle: Handle for the key figure code.
     *
     * @param KeyFigureCode_GetNumber $parameters
     * @return KeyFigureCode_GetNumberResponse
     */
    public function KeyFigureCode_GetNumber(KeyFigureCode_GetNumber $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a key figure code.<br />Parameters: keyFigureCodeHandle: Handle for the key figure code.
     *
     * @param KeyFigureCode_GetName $parameters
     * @return KeyFigureCode_GetNameResponse
     */
    public function KeyFigureCode_GetName(KeyFigureCode_GetName $parameters)
    {
      return $this->__soapCall('KeyFigureCode_GetName', array($parameters));
    }

    /**
     * Creates a new mileage entry from a data object.<br />Parameters: data: The data object that specifies the properties of the new mileage entry.
     *
     * @param MileageEntry_CreateFromData $parameters
     * @return MileageEntry_CreateFromDataResponse
     */
    public function MileageEntry_CreateFromData(MileageEntry_CreateFromData $parameters)
    {
      return $this->__soapCall('MileageEntry_CreateFromData', array($parameters));
    }

    /**
     * Creates new mileage entries from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new mileage entries.
     *
     * @param MileageEntry_CreateFromDataArray $parameters
     * @return MileageEntry_CreateFromDataArrayResponse
     */
    public function MileageEntry_CreateFromDataArray(MileageEntry_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('MileageEntry_CreateFromDataArray', array($parameters));
    }

    /**
     * Update mileage entries from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param MileageEntry_UpdateFromDataArray $parameters
     * @return MileageEntry_UpdateFromDataArrayResponse
     */
    public function MileageEntry_UpdateFromDataArray(MileageEntry_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('MileageEntry_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a mileage entry from a data object.<br />Parameters: data: The data object.
     *
     * @param MileageEntry_UpdateFromData $parameters
     * @return MileageEntry_UpdateFromDataResponse
     */
    public function MileageEntry_UpdateFromData(MileageEntry_UpdateFromData $parameters)
    {
      return $this->__soapCall('MileageEntry_UpdateFromData', array($parameters));
    }

    /**
     * Returns a mileage entry data object for a given mileage entry.<br />Parameters: entityHandle: A handle for the mileage entry.
     *
     * @param MileageEntry_GetData $parameters
     * @return MileageEntry_GetDataResponse
     */
    public function MileageEntry_GetData(MileageEntry_GetData $parameters)
    {
      return $this->__soapCall('MileageEntry_GetData', array($parameters));
    }

    /**
     * Returns mileage entries data objects for a given set of mileage entry handles.<br />Parameters: entityHandles: An array of the mileage entries handles.
     *
     * @param MileageEntry_GetDataArray $parameters
     * @return MileageEntry_GetDataArrayResponse
     */
    public function MileageEntry_GetDataArray(MileageEntry_GetDataArray $parameters)
    {
      return $this->__soapCall('MileageEntry_GetDataArray', array($parameters));
    }

    /**
     * Returns employee data objects for a given set of employee handles.<br />Parameters: entityHandles: An array of the employee handles.
     *
     * @param Employee_GetDataArray $parameters
     * @return Employee_GetDataArrayResponse
     */
    public function Employee_GetDataArray(Employee_GetDataArray $parameters)
    {
      return $this->__soapCall('Employee_GetDataArray', array($parameters));
    }

    /**
     * Retrieve the type of an employee as the enum EmployeeType.
     *
     * @param Employee_GetType $parameters
     * @return Employee_GetTypeResponse
     */
    public function Employee_GetType(Employee_GetType $parameters)
    {
      return $this->__soapCall('Employee_GetType', array($parameters));
    }

    /**
     * Gets the number of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetNumber $parameters
     * @return Employee_GetNumberResponse
     */
    public function Employee_GetNumber(Employee_GetNumber $parameters)
    {
      return $this->__soapCall('Employee_GetNumber', array($parameters));
    }

    /**
     * Gets handle for the group of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetGroup $parameters
     * @return Employee_GetGroupResponse
     */
    public function Employee_GetGroup(Employee_GetGroup $parameters)
    {
      return $this->__soapCall('Employee_GetGroup', array($parameters));
    }

    /**
     * Sets handle for the group of an employee.<br />Parameters: employeeHandle: Handle for the employee. valueHandle: Handle for new group of the employee.
     *
     * @param Employee_SetGroup $parameters
     * @return Employee_SetGroupResponse
     */
    public function Employee_SetGroup(Employee_SetGroup $parameters)
    {
      return $this->__soapCall('Employee_SetGroup', array($parameters));
    }

    /**
     * Gets name of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetName $parameters
     * @return Employee_GetNameResponse
     */
    public function Employee_GetName(Employee_GetName $parameters)
    {
      return $this->__soapCall('Employee_GetName', array($parameters));
    }

    /**
     * Sets name of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new name of the employee. The value may not be null.
     *
     * @param Employee_SetName $parameters
     * @return Employee_SetNameResponse
     */
    public function Employee_SetName(Employee_SetName $parameters)
    {
      return $this->__soapCall('Employee_SetName', array($parameters));
    }

    /**
     * Creates an employee.<br />Parameters: number: The number of the new employee. group: Handle for the group of the new employee. name: The name of the new employee.
     *
     * @param Employee_Create $parameters
     * @return Employee_CreateResponse
     */
    public function Employee_Create(Employee_Create $parameters)
    {
      return $this->__soapCall('Employee_Create', array($parameters));
    }

    /**
     * Returns handles for all employees.
     *
     * @param Employee_GetAll $parameters
     * @return Employee_GetAllResponse
     */
    public function Employee_GetAll(Employee_GetAll $parameters)
    {
      return $this->__soapCall('Employee_GetAll', array($parameters));
    }

    /**
     * The returns handle for the employee with a given number.<br >Parameters: The number to search for.
     *
     * @param Employee_FindByNumber $parameters
     * @return Employee_FindByNumberResponse
     */
    public function Employee_FindByNumber(Employee_FindByNumber $parameters)
    {
      return $this->__soapCall('Employee_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the employees corresponding to the given product numbers. If an employee with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Employee_FindByNumberList $parameters
     * @return Employee_FindByNumberListResponse
     */
    public function Employee_FindByNumberList(Employee_FindByNumberList $parameters)
    {
      return $this->__soapCall('Employee_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for employees with a given name.<br />Parameters: name: The name to search for.
     *
     * @param Employee_FindByName $parameters
     * @return Employee_FindByNameResponse
     */
    public function Employee_FindByName(Employee_FindByName $parameters)
    {
      return $this->__soapCall('Employee_FindByName', array($parameters));
    }

    /**
     * Deletes an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_Delete $parameters
     * @return Employee_DeleteResponse
     */
    public function Employee_Delete(Employee_Delete $parameters)
    {
      return $this->__soapCall('Employee_Delete', array($parameters));
    }

    /**
     * Gets handles for the time entries of the employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetTimeEntries $parameters
     * @return Employee_GetTimeEntriesResponse
     */
    public function Employee_GetTimeEntries(Employee_GetTimeEntries $parameters)
    {
      return $this->__soapCall('Employee_GetTimeEntries', array($parameters));
    }

    /**
     * Gets handles for the time entries of the logged in employee.
     *
     * @param Employee_GetTimeEntriesOnCurrentUser $parameters
     * @return Employee_GetTimeEntriesOnCurrentUserResponse
     */
    public function Employee_GetTimeEntriesOnCurrentUser(Employee_GetTimeEntriesOnCurrentUser $parameters)
    {
      return $this->__soapCall('Employee_GetTimeEntriesOnCurrentUser', array($parameters));
    }

    /**
     * Gets handles for the projects the logged in employee can register time on.
     *
     * @param Employee_GetProjectsOnCurrentUser $parameters
     * @return Employee_GetProjectsOnCurrentUserResponse
     */
    public function Employee_GetProjectsOnCurrentUser(Employee_GetProjectsOnCurrentUser $parameters)
    {
      return $this->__soapCall('Employee_GetProjectsOnCurrentUser', array($parameters));
    }

    /**
     * Gets handles for the activities the logged in employee can use to register time on the given project.
     *
     * @param Employee_GetActivitiesOnCurrentUserForProject $parameters
     * @return Employee_GetActivitiesOnCurrentUserForProjectResponse
     */
    public function Employee_GetActivitiesOnCurrentUserForProject(Employee_GetActivitiesOnCurrentUserForProject $parameters)
    {
      return $this->__soapCall('Employee_GetActivitiesOnCurrentUserForProject', array($parameters));
    }

    /**
     * Gets handles for the time entries of the employee within an interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Employee_GetTimeEntriesByDate $parameters
     * @return Employee_GetTimeEntriesByDateResponse
     */
    public function Employee_GetTimeEntriesByDate(Employee_GetTimeEntriesByDate $parameters)
    {
      return $this->__soapCall('Employee_GetTimeEntriesByDate', array($parameters));
    }

    /**
     * Gets handles for the time entries of the logged in employee within an interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Employee_GetTimeEntriesOnCurrentUserByDate $parameters
     * @return Employee_GetTimeEntriesOnCurrentUserByDateResponse
     */
    public function Employee_GetTimeEntriesOnCurrentUserByDate(Employee_GetTimeEntriesOnCurrentUserByDate $parameters)
    {
      return $this->__soapCall('Employee_GetTimeEntriesOnCurrentUserByDate', array($parameters));
    }

    /**
     * Gets handles for the mileage entries of the employee within an interval.<br />Parameters: from: First day in interval. to: Last day in interval.
     *
     * @param Employee_GetMileageEntriesByDate $parameters
     * @return Employee_GetMileageEntriesByDateResponse
     */
    public function Employee_GetMileageEntriesByDate(Employee_GetMileageEntriesByDate $parameters)
    {
      return $this->__soapCall('Employee_GetMileageEntriesByDate', array($parameters));
    }

    /**
     * Get sales price for a given employee on the current date.
     *
     * @param Employee_GetSalesPrice $parameters
     * @return Employee_GetSalesPriceResponse
     */
    public function Employee_GetSalesPrice(Employee_GetSalesPrice $parameters)
    {
      return $this->__soapCall('Employee_GetSalesPrice', array($parameters));
    }

    /**
     * Get costprice for a given employee on the current date.
     *
     * @param Employee_GetCostPrice $parameters
     * @return Employee_GetCostPriceResponse
     */
    public function Employee_GetCostPrice(Employee_GetCostPrice $parameters)
    {
      return $this->__soapCall('Employee_GetCostPrice', array($parameters));
    }

    /**
     * Gets the sales price for the given Employee.<br/>Parameters: employeeHandle: Handle for the employee. date: The sales price from the given date for the employee.
     *
     * @param Employee_GetSalesPriceByDate $parameters
     * @return Employee_GetSalesPriceByDateResponse
     */
    public function Employee_GetSalesPriceByDate(Employee_GetSalesPriceByDate $parameters)
    {
      return $this->__soapCall('Employee_GetSalesPriceByDate', array($parameters));
    }

    /**
     * Gets the cost price for the given Employee.<br/>Parameters: employeeHandle: Handle for the employee. date: The cost price from the given date for the employee.
     *
     * @param Employee_GetCostPriceByDate $parameters
     * @return Employee_GetCostPriceByDateResponse
     */
    public function Employee_GetCostPriceByDate(Employee_GetCostPriceByDate $parameters)
    {
      return $this->__soapCall('Employee_GetCostPriceByDate', array($parameters));
    }

    /**
     * Sets the cost price before of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new cost price before of the employee. The value may be null.
     *
     * @param Employee_SetCostPriceBefore $parameters
     * @return Employee_SetCostPriceBeforeResponse
     */
    public function Employee_SetCostPriceBefore(Employee_SetCostPriceBefore $parameters)
    {
      return $this->__soapCall('Employee_SetCostPriceBefore', array($parameters));
    }

    /**
     * Sets the cost price after of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new cost price after of the employee. The value may be null.
     *
     * @param Employee_SetCostPriceAfter $parameters
     * @return Employee_SetCostPriceAfterResponse
     */
    public function Employee_SetCostPriceAfter(Employee_SetCostPriceAfter $parameters)
    {
      return $this->__soapCall('Employee_SetCostPriceAfter', array($parameters));
    }

    /**
     * Sets the sales price before of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new sales price before of the employee. The value may be null.
     *
     * @param Employee_SetSalesPriceBefore $parameters
     * @return Employee_SetSalesPriceBeforeResponse
     */
    public function Employee_SetSalesPriceBefore(Employee_SetSalesPriceBefore $parameters)
    {
      return $this->__soapCall('Employee_SetSalesPriceBefore', array($parameters));
    }

    /**
     * Sets the sales price after of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new sales price after of the employee. The value may be null.
     *
     * @param Employee_SetSalesPriceAfter $parameters
     * @return Employee_SetSalesPriceAfterResponse
     */
    public function Employee_SetSalesPriceAfter(Employee_SetSalesPriceAfter $parameters)
    {
      return $this->__soapCall('Employee_SetSalesPriceAfter', array($parameters));
    }

    /**
     * Gets the cost price before of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new cost price before of the employee. The value may be null.
     *
     * @param Employee_GetCostPriceBefore $parameters
     * @return Employee_GetCostPriceBeforeResponse
     */
    public function Employee_GetCostPriceBefore(Employee_GetCostPriceBefore $parameters)
    {
      return $this->__soapCall('Employee_GetCostPriceBefore', array($parameters));
    }

    /**
     * Gets the cost price after of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The new cost price after of the employee. The value may be null.
     *
     * @param Employee_GetCostPriceAfter $parameters
     * @return Employee_GetCostPriceAfterResponse
     */
    public function Employee_GetCostPriceAfter(Employee_GetCostPriceAfter $parameters)
    {
      return $this->__soapCall('Employee_GetCostPriceAfter', array($parameters));
    }

    /**
     * Gets the sales price before of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetSalesPriceBefore $parameters
     * @return Employee_GetSalesPriceBeforeResponse
     */
    public function Employee_GetSalesPriceBefore(Employee_GetSalesPriceBefore $parameters)
    {
      return $this->__soapCall('Employee_GetSalesPriceBefore', array($parameters));
    }

    /**
     * Gets the sales price after of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetSalesPriceAfter $parameters
     * @return Employee_GetSalesPriceAfterResponse
     */
    public function Employee_GetSalesPriceAfter(Employee_GetSalesPriceAfter $parameters)
    {
      return $this->__soapCall('Employee_GetSalesPriceAfter', array($parameters));
    }

    /**
     * Sets the cutoff date of an employee.<br />Parameters: employeeHandle: Handle for the employee. value: The cutoff date for the employee. The value may be null.
     *
     * @param Employee_SetCutoffDate $parameters
     * @return Employee_SetCutoffDateResponse
     */
    public function Employee_SetCutoffDate(Employee_SetCutoffDate $parameters)
    {
      return $this->__soapCall('Employee_SetCutoffDate', array($parameters));
    }

    /**
     * Gets the cutoff date of an employee.<br />Parameters: employeeHandle: Handle for the employee.
     *
     * @param Employee_GetCutoffDate $parameters
     * @return Employee_GetCutoffDateResponse
     */
    public function Employee_GetCutoffDate(Employee_GetCutoffDate $parameters)
    {
      return $this->__soapCall('Employee_GetCutoffDate', array($parameters));
    }

    /**
     * Creates a new employee group from a data object.<br />Parameters: data: The data object that specifies the properties of the new employee group.
     *
     * @param EmployeeGroup_CreateFromData $parameters
     * @return EmployeeGroup_CreateFromDataResponse
     */
    public function EmployeeGroup_CreateFromData(EmployeeGroup_CreateFromData $parameters)
    {
      return $this->__soapCall('EmployeeGroup_CreateFromData', array($parameters));
    }

    /**
     * Creates new employee groups from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new employee groups.
     *
     * @param EmployeeGroup_CreateFromDataArray $parameters
     * @return EmployeeGroup_CreateFromDataArrayResponse
     */
    public function EmployeeGroup_CreateFromDataArray(EmployeeGroup_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('EmployeeGroup_CreateFromDataArray', array($parameters));
    }

    /**
     * Update employee groups from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param EmployeeGroup_UpdateFromDataArray $parameters
     * @return EmployeeGroup_UpdateFromDataArrayResponse
     */
    public function EmployeeGroup_UpdateFromDataArray(EmployeeGroup_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('EmployeeGroup_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an employee group from a data object.<br />Parameters: data: The data object.
     *
     * @param EmployeeGroup_UpdateFromData $parameters
     * @return EmployeeGroup_UpdateFromDataResponse
     */
    public function EmployeeGroup_UpdateFromData(EmployeeGroup_UpdateFromData $parameters)
    {
      return $this->__soapCall('EmployeeGroup_UpdateFromData', array($parameters));
    }

    /**
     * Returns a employee group data object for a given debtor.<br />Parameters: entityHandle: A handle for the employee group.
     *
     * @param EmployeeGroup_GetData $parameters
     * @return EmployeeGroup_GetDataResponse
     */
    public function EmployeeGroup_GetData(EmployeeGroup_GetData $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetData', array($parameters));
    }

    /**
     * Returns employee group data objects for a given set of employee group handles.<br />Parameters: entityHandles: An array of the employee group handles.
     *
     * @param EmployeeGroup_GetDataArray $parameters
     * @return EmployeeGroup_GetDataArrayResponse
     */
    public function EmployeeGroup_GetDataArray(EmployeeGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of an employee group.<br />Parameters: employeeGroupHandle: Handle for the employee group.
     *
     * @param EmployeeGroup_GetNumber $parameters
     * @return EmployeeGroup_GetNumberResponse
     */
    public function EmployeeGroup_GetNumber(EmployeeGroup_GetNumber $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetNumber', array($parameters));
    }

    /**
     * Gets the name of an employee group.<br />Parameters: employeeGroupHandle: Handle for the employee group.
     *
     * @param EmployeeGroup_GetName $parameters
     * @return EmployeeGroup_GetNameResponse
     */
    public function EmployeeGroup_GetName(EmployeeGroup_GetName $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetName', array($parameters));
    }

    /**
     * Sets the name of an employee group.<br />Parameters: employeeGroupHandle: Handle for the employee group. value: The new name of the employee group.
     *
     * @param EmployeeGroup_SetName $parameters
     * @return EmployeeGroup_SetNameResponse
     */
    public function EmployeeGroup_SetName(EmployeeGroup_SetName $parameters)
    {
      return $this->__soapCall('EmployeeGroup_SetName', array($parameters));
    }

    /**
     * Creates an emplyee group.<br />Parameters: number: Number of new employee group. name: Name of new employee group.
     *
     * @param EmployeeGroup_Create $parameters
     * @return EmployeeGroup_CreateResponse
     */
    public function EmployeeGroup_Create(EmployeeGroup_Create $parameters)
    {
      return $this->__soapCall('EmployeeGroup_Create', array($parameters));
    }

    /**
     * Returns handles for all employee groups.
     *
     * @param EmployeeGroup_GetAll $parameters
     * @return EmployeeGroup_GetAllResponse
     */
    public function EmployeeGroup_GetAll(EmployeeGroup_GetAll $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetAll', array($parameters));
    }

    /**
     * Returns handle for employee group with a given number.<br />Parameters: number: The number to search for.
     *
     * @param EmployeeGroup_FindByNumber $parameters
     * @return EmployeeGroup_FindByNumberResponse
     */
    public function EmployeeGroup_FindByNumber(EmployeeGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('EmployeeGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the products corresponding to the given product numbers. If a product with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param EmployeeGroup_FindByNumberList $parameters
     * @return EmployeeGroup_FindByNumberListResponse
     */
    public function EmployeeGroup_FindByNumberList(EmployeeGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('EmployeeGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for employee groups with a given name.<br />Parameters: name: The name to search for.
     *
     * @param EmployeeGroup_FindByName $parameters
     * @return EmployeeGroup_FindByNameResponse
     */
    public function EmployeeGroup_FindByName(EmployeeGroup_FindByName $parameters)
    {
      return $this->__soapCall('EmployeeGroup_FindByName', array($parameters));
    }

    /**
     * Gets handles for employees in an employee group.<br />Parameters: employeeGroupHandle: Handle for the employee group.
     *
     * @param EmployeeGroup_GetEmployees $parameters
     * @return EmployeeGroup_GetEmployeesResponse
     */
    public function EmployeeGroup_GetEmployees(EmployeeGroup_GetEmployees $parameters)
    {
      return $this->__soapCall('EmployeeGroup_GetEmployees', array($parameters));
    }

    /**
     * Deletes an employee group.<br />Parameters: Handle for employee group to be deleted.
     *
     * @param EmployeeGroup_Delete $parameters
     * @return EmployeeGroup_DeleteResponse
     */
    public function EmployeeGroup_Delete(EmployeeGroup_Delete $parameters)
    {
      return $this->__soapCall('EmployeeGroup_Delete', array($parameters));
    }

    /**
     * Returns an entry data object for a given entry.<br />Parameters: entityHandle: A handle for the entry.
     *
     * @param Entry_GetData $parameters
     * @return Entry_GetDataResponse
     */
    public function Entry_GetData(Entry_GetData $parameters)
    {
      return $this->__soapCall('Entry_GetData', array($parameters));
    }

    /**
     * Returns entry data objects for a given set of entry handles.<br />Parameters: entityHandles: An array of the entry handles.
     *
     * @param Entry_GetDataArray $parameters
     * @return Entry_GetDataArrayResponse
     */
    public function Entry_GetDataArray(Entry_GetDataArray $parameters)
    {
      return $this->__soapCall('Entry_GetDataArray', array($parameters));
    }

    /**
     * Returns the last used serial number, or 0 if no serial numbers exists.
     *
     * @param Entry_GetLastUsedSerialNumber $parameters
     * @return Entry_GetLastUsedSerialNumberResponse
     */
    public function Entry_GetLastUsedSerialNumber(Entry_GetLastUsedSerialNumber $parameters)
    {
      return $this->__soapCall('Entry_GetLastUsedSerialNumber', array($parameters));
    }

    /**
     * Returns an array of handles for the entries with numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param Entry_FindBySerialNumberInterval $parameters
     * @return Entry_FindBySerialNumberIntervalResponse
     */
    public function Entry_FindBySerialNumberInterval(Entry_FindBySerialNumberInterval $parameters)
    {
      return $this->__soapCall('Entry_FindBySerialNumberInterval', array($parameters));
    }

    /**
     * Returns an array of handles for the entries within the given time interval.<br />Parameters: fromDate: First day in interval. toDate: Last day in interval.
     *
     * @param Entry_FindByDateInterval $parameters
     * @return Entry_FindByDateIntervalResponse
     */
    public function Entry_FindByDateInterval(Entry_FindByDateInterval $parameters)
    {
      return $this->__soapCall('Entry_FindByDateInterval', array($parameters));
    }

    /**
     * Gets the number of an entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetSerialNumber $parameters
     * @return Entry_GetSerialNumberResponse
     */
    public function Entry_GetSerialNumber(Entry_GetSerialNumber $parameters)
    {
      return $this->__soapCall('Entry_GetSerialNumber', array($parameters));
    }

    /**
     * Get handle for account of an entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetAccount $parameters
     * @return Entry_GetAccountResponse
     */
    public function Entry_GetAccount(Entry_GetAccount $parameters)
    {
      return $this->__soapCall('Entry_GetAccount', array($parameters));
    }

    /**
     * Gets the amount of an entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetAmount $parameters
     * @return Entry_GetAmountResponse
     */
    public function Entry_GetAmount(Entry_GetAmount $parameters)
    {
      return $this->__soapCall('Entry_GetAmount', array($parameters));
    }

    /**
     * Gets the amount (in default currency) of an entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetAmountDefaultCurrency $parameters
     * @return Entry_GetAmountDefaultCurrencyResponse
     */
    public function Entry_GetAmountDefaultCurrency(Entry_GetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('Entry_GetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets a handle for the unit1 of an entry. The unit1 is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetUnit1 $parameters
     * @return Entry_GetUnit1Response
     */
    public function Entry_GetUnit1(Entry_GetUnit1 $parameters)
    {
      return $this->__soapCall('Entry_GetUnit1', array($parameters));
    }

    /**
     * Gets a handle for the unit2 of an entry. The unit2 is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetUnit2 $parameters
     * @return Entry_GetUnit2Response
     */
    public function Entry_GetUnit2(Entry_GetUnit2 $parameters)
    {
      return $this->__soapCall('Entry_GetUnit2', array($parameters));
    }

    /**
     * Gets the quantity1 of an entry. The quantity1 is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetQuantity1 $parameters
     * @return Entry_GetQuantity1Response
     */
    public function Entry_GetQuantity1(Entry_GetQuantity1 $parameters)
    {
      return $this->__soapCall('Entry_GetQuantity1', array($parameters));
    }

    /**
     * Gets the quantity2 of an entry. The quantity2 is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetQuantity2 $parameters
     * @return Entry_GetQuantity2Response
     */
    public function Entry_GetQuantity2(Entry_GetQuantity2 $parameters)
    {
      return $this->__soapCall('Entry_GetQuantity2', array($parameters));
    }

    /**
     * Gets the currency of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetCurrency $parameters
     * @return Entry_GetCurrencyResponse
     */
    public function Entry_GetCurrency(Entry_GetCurrency $parameters)
    {
      return $this->__soapCall('Entry_GetCurrency', array($parameters));
    }

    /**
     * Gets the date of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetDate $parameters
     * @return Entry_GetDateResponse
     */
    public function Entry_GetDate(Entry_GetDate $parameters)
    {
      return $this->__soapCall('Entry_GetDate', array($parameters));
    }

    /**
     * Gets the text of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetText $parameters
     * @return Entry_GetTextResponse
     */
    public function Entry_GetText(Entry_GetText $parameters)
    {
      return $this->__soapCall('Entry_GetText', array($parameters));
    }

    /**
     * Gets the entry type of entry.<br />
     *
     * @param Entry_GetType $parameters
     * @return Entry_GetTypeResponse
     */
    public function Entry_GetType(Entry_GetType $parameters)
    {
      return $this->__soapCall('Entry_GetType', array($parameters));
    }

    /**
     * Gets a handle for the department of an entry. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetDepartment $parameters
     * @return Entry_GetDepartmentResponse
     */
    public function Entry_GetDepartment(Entry_GetDepartment $parameters)
    {
      return $this->__soapCall('Entry_GetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of an entry. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetDistributionKey $parameters
     * @return Entry_GetDistributionKeyResponse
     */
    public function Entry_GetDistributionKey(Entry_GetDistributionKey $parameters)
    {
      return $this->__soapCall('Entry_GetDistributionKey', array($parameters));
    }

    /**
     * Gets a handle for the VAT account of an entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetVatAccount $parameters
     * @return Entry_GetVatAccountResponse
     */
    public function Entry_GetVatAccount(Entry_GetVatAccount $parameters)
    {
      return $this->__soapCall('Entry_GetVatAccount', array($parameters));
    }

    /**
     * Gets the voucher number of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetVoucherNumber $parameters
     * @return Entry_GetVoucherNumberResponse
     */
    public function Entry_GetVoucherNumber(Entry_GetVoucherNumber $parameters)
    {
      return $this->__soapCall('Entry_GetVoucherNumber', array($parameters));
    }

    /**
     * Gets handle for the project of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetProject $parameters
     * @return Entry_GetProjectResponse
     */
    public function Entry_GetProject(Entry_GetProject $parameters)
    {
      return $this->__soapCall('Entry_GetProject', array($parameters));
    }

    /**
     * Gets the scanned document of the entry.<br />Parameters: entryHandle: Handle for the entry.
     *
     * @param Entry_GetDocument $parameters
     * @return Entry_GetDocumentResponse
     */
    public function Entry_GetDocument(Entry_GetDocument $parameters)
    {
      return $this->__soapCall('Entry_GetDocument', array($parameters));
    }

    /**
     * Returns an invoice data object for a given invoice.<br />Parameters: entityHandle: A handle for the invoice.
     *
     * @param Invoice_GetData $parameters
     * @return Invoice_GetDataResponse
     */
    public function Invoice_GetData(Invoice_GetData $parameters)
    {
      return $this->__soapCall('Invoice_GetData', array($parameters));
    }

    /**
     * Returns invoice data objects for a given set of invoice handles.<br />Parameters: entityHandles: An array of the invoice handles.
     *
     * @param Invoice_GetDataArray $parameters
     * @return Invoice_GetDataArrayResponse
     */
    public function Invoice_GetDataArray(Invoice_GetDataArray $parameters)
    {
      return $this->__soapCall('Invoice_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetNumber $parameters
     * @return Invoice_GetNumberResponse
     */
    public function Invoice_GetNumber(Invoice_GetNumber $parameters)
    {
      return $this->__soapCall('Invoice_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the debtor for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtor $parameters
     * @return Invoice_GetDebtorResponse
     */
    public function Invoice_GetDebtor(Invoice_GetDebtor $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtor', array($parameters));
    }

    /**
     * Gets a handle for the project for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetProject $parameters
     * @return Invoice_GetProjectResponse
     */
    public function Invoice_GetProject(Invoice_GetProject $parameters)
    {
      return $this->__soapCall('Invoice_GetProject', array($parameters));
    }

    /**
     * Gets the name for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorName $parameters
     * @return Invoice_GetDebtorNameResponse
     */
    public function Invoice_GetDebtorName(Invoice_GetDebtorName $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorName', array($parameters));
    }

    /**
     * Gets the debtor address for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorAddress $parameters
     * @return Invoice_GetDebtorAddressResponse
     */
    public function Invoice_GetDebtorAddress(Invoice_GetDebtorAddress $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorAddress', array($parameters));
    }

    /**
     * Gets the debtor postal code for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorPostalCode $parameters
     * @return Invoice_GetDebtorPostalCodeResponse
     */
    public function Invoice_GetDebtorPostalCode(Invoice_GetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorPostalCode', array($parameters));
    }

    /**
     * Gets the debtor city for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorCity $parameters
     * @return Invoice_GetDebtorCityResponse
     */
    public function Invoice_GetDebtorCity(Invoice_GetDebtorCity $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorCity', array($parameters));
    }

    /**
     * Gets the debtor country for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorCountry $parameters
     * @return Invoice_GetDebtorCountryResponse
     */
    public function Invoice_GetDebtorCountry(Invoice_GetDebtorCountry $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorCountry', array($parameters));
    }

    /**
     * Gets the debtor EAN for an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetDebtorEan $parameters
     * @return Invoice_GetDebtorEanResponse
     */
    public function Invoice_GetDebtorEan(Invoice_GetDebtorEan $parameters)
    {
      return $this->__soapCall('Invoice_GetDebtorEan', array($parameters));
    }

    /**
     * Gets the public entry number an invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param Invoice_GetPublicEntryNumber $parameters
     * @return Invoice_GetPublicEntryNumberResponse
     */
    public function Invoice_GetPublicEntryNumber(Invoice_GetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Invoice_GetPublicEntryNumber', array($parameters));
    }

    /**
     * Returns handles for the debtor group with a given number.
     *
     * @param DebtorGroup_FindByNumber $parameters
     * @return DebtorGroup_FindByNumberResponse
     */
    public function DebtorGroup_FindByNumber(DebtorGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('DebtorGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the debtor groups corresponding to the given debtor group numbers. If a debtor group with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param DebtorGroup_FindByNumberList $parameters
     * @return DebtorGroup_FindByNumberListResponse
     */
    public function DebtorGroup_FindByNumberList(DebtorGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('DebtorGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for all debtor groups with a given name.
     *
     * @param DebtorGroup_FindByName $parameters
     * @return DebtorGroup_FindByNameResponse
     */
    public function DebtorGroup_FindByName(DebtorGroup_FindByName $parameters)
    {
      return $this->__soapCall('DebtorGroup_FindByName', array($parameters));
    }

    /**
     * Gets handles for debtors of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group.
     *
     * @param DebtorGroup_GetDebtors $parameters
     * @return DebtorGroup_GetDebtorsResponse
     */
    public function DebtorGroup_GetDebtors(DebtorGroup_GetDebtors $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetDebtors', array($parameters));
    }

    /**
     * Creates a new delivery location contact from a data object.<br />Parameters: data: The data object that specifies the properties of the new delivery location.
     *
     * @param DeliveryLocation_CreateFromData $parameters
     * @return DeliveryLocation_CreateFromDataResponse
     */
    public function DeliveryLocation_CreateFromData(DeliveryLocation_CreateFromData $parameters)
    {
      return $this->__soapCall('DeliveryLocation_CreateFromData', array($parameters));
    }

    /**
     * Creates new delivery locations from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new delivery locations.
     *
     * @param DeliveryLocation_CreateFromDataArray $parameters
     * @return DeliveryLocation_CreateFromDataArrayResponse
     */
    public function DeliveryLocation_CreateFromDataArray(DeliveryLocation_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('DeliveryLocation_CreateFromDataArray', array($parameters));
    }

    /**
     * Update delivery locations from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param DeliveryLocation_UpdateFromDataArray $parameters
     * @return DeliveryLocation_UpdateFromDataArrayResponse
     */
    public function DeliveryLocation_UpdateFromDataArray(DeliveryLocation_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('DeliveryLocation_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a delivery location from a data object.<br />Parameters: data: The data object.
     *
     * @param DeliveryLocation_UpdateFromData $parameters
     * @return DeliveryLocation_UpdateFromDataResponse
     */
    public function DeliveryLocation_UpdateFromData(DeliveryLocation_UpdateFromData $parameters)
    {
      return $this->__soapCall('DeliveryLocation_UpdateFromData', array($parameters));
    }

    /**
     * Returns a delivery location data object for a given delivery location.<br />Parameters: entityHandle: A handle for the delivery location.
     *
     * @param DeliveryLocation_GetData $parameters
     * @return DeliveryLocation_GetDataResponse
     */
    public function DeliveryLocation_GetData(DeliveryLocation_GetData $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetData', array($parameters));
    }

    /**
     * Returns delivery location data objects for a given set of delivery location handles.<br />Parameters: entityHandles: An array of the delivery location handles.
     *
     * @param DeliveryLocation_GetDataArray $parameters
     * @return DeliveryLocation_GetDataArrayResponse
     */
    public function DeliveryLocation_GetDataArray(DeliveryLocation_GetDataArray $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetDataArray', array($parameters));
    }

    /**
     * Gets a handle for the debtor of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetDebtor $parameters
     * @return DeliveryLocation_GetDebtorResponse
     */
    public function DeliveryLocation_GetDebtor(DeliveryLocation_GetDebtor $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetDebtor', array($parameters));
    }

    /**
     * Gets the number of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetNumber $parameters
     * @return DeliveryLocation_GetNumberResponse
     */
    public function DeliveryLocation_GetNumber(DeliveryLocation_GetNumber $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetNumber', array($parameters));
    }

    /**
     * Gets the address of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetAddress $parameters
     * @return DeliveryLocation_GetAddressResponse
     */
    public function DeliveryLocation_GetAddress(DeliveryLocation_GetAddress $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetAddress', array($parameters));
    }

    /**
     * Sets the address of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new address of the delivery location.
     *
     * @param DeliveryLocation_SetAddress $parameters
     * @return DeliveryLocation_SetAddressResponse
     */
    public function DeliveryLocation_SetAddress(DeliveryLocation_SetAddress $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetAddress', array($parameters));
    }

    /**
     * Gets the postal code of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetPostalCode $parameters
     * @return DeliveryLocation_GetPostalCodeResponse
     */
    public function DeliveryLocation_GetPostalCode(DeliveryLocation_GetPostalCode $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetPostalCode', array($parameters));
    }

    /**
     * Sets the postal code of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new postal code of the delivery location.
     *
     * @param DeliveryLocation_SetPostalCode $parameters
     * @return DeliveryLocation_SetPostalCodeResponse
     */
    public function DeliveryLocation_SetPostalCode(DeliveryLocation_SetPostalCode $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetPostalCode', array($parameters));
    }

    /**
     * Gets the city of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetCity $parameters
     * @return DeliveryLocation_GetCityResponse
     */
    public function DeliveryLocation_GetCity(DeliveryLocation_GetCity $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetCity', array($parameters));
    }

    /**
     * Sets the city of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new city of the delivery location.
     *
     * @param DeliveryLocation_SetCity $parameters
     * @return DeliveryLocation_SetCityResponse
     */
    public function DeliveryLocation_SetCity(DeliveryLocation_SetCity $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetCity', array($parameters));
    }

    /**
     * Sets the country of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new country of the delivery location.
     *
     * @param DeliveryLocation_SetCountry $parameters
     * @return DeliveryLocation_SetCountryResponse
     */
    public function DeliveryLocation_SetCountry(DeliveryLocation_SetCountry $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetCountry', array($parameters));
    }

    /**
     * Gets the country of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetCountry $parameters
     * @return DeliveryLocation_GetCountryResponse
     */
    public function DeliveryLocation_GetCountry(DeliveryLocation_GetCountry $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetCountry', array($parameters));
    }

    /**
     * Sets the terms of delivery of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new terms of delivery of the delivery location.
     *
     * @param DeliveryLocation_SetTermsOfDelivery $parameters
     * @return DeliveryLocation_SetTermsOfDeliveryResponse
     */
    public function DeliveryLocation_SetTermsOfDelivery(DeliveryLocation_SetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets the terms of delivery of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetTermsOfDelivery $parameters
     * @return DeliveryLocation_GetTermsOfDeliveryResponse
     */
    public function DeliveryLocation_GetTermsOfDelivery(DeliveryLocation_GetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets whether a delivery location is accessible.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetIsAccessible $parameters
     * @return DeliveryLocation_GetIsAccessibleResponse
     */
    public function DeliveryLocation_GetIsAccessible(DeliveryLocation_GetIsAccessible $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetIsAccessible', array($parameters));
    }

    /**
     * Sets whether a delivery location is accessible.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: Value that indicates whether the delivery location should be accessible.
     *
     * @param DeliveryLocation_SetIsAccessible $parameters
     * @return DeliveryLocation_SetIsAccessibleResponse
     */
    public function DeliveryLocation_SetIsAccessible(DeliveryLocation_SetIsAccessible $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetIsAccessible', array($parameters));
    }

    /**
     * Gets the external ID of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location.
     *
     * @param DeliveryLocation_GetExternalId $parameters
     * @return DeliveryLocation_GetExternalIdResponse
     */
    public function DeliveryLocation_GetExternalId(DeliveryLocation_GetExternalId $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetExternalId', array($parameters));
    }

    /**
     * Sets the external ID of a delivery location.<br />Parameters: deliveryLocationHandle: Handle for the delivery location. value: The new external ID of the delivery location.
     *
     * @param DeliveryLocation_SetExternalId $parameters
     * @return DeliveryLocation_SetExternalIdResponse
     */
    public function DeliveryLocation_SetExternalId(DeliveryLocation_SetExternalId $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetExternalId', array($parameters));
    }

    /**
     * DEPRECATED! Gets the County of a delivery location. (UK only)<br />Parameters: deliveryLocationHandle: Handle for the deliveryLocation.
     *
     * @param DeliveryLocation_GetCounty $parameters
     * @return DeliveryLocation_GetCountyResponse
     */
    public function DeliveryLocation_GetCounty(DeliveryLocation_GetCounty $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the County of a delivery location. (UK only)<br />Parameters: deliveryLocationHandle: Handle for the deliveryLocation. value: The new County of the deliveryLocation.
     *
     * @param DeliveryLocation_SetCounty $parameters
     * @return DeliveryLocation_SetCountyResponse
     */
    public function DeliveryLocation_SetCounty(DeliveryLocation_SetCounty $parameters)
    {
      return $this->__soapCall('DeliveryLocation_SetCounty', array($parameters));
    }

    /**
     * Creates a new delivery location.
     *
     * @param DeliveryLocation_Create $parameters
     * @return DeliveryLocation_CreateResponse
     */
    public function DeliveryLocation_Create(DeliveryLocation_Create $parameters)
    {
      return $this->__soapCall('DeliveryLocation_Create', array($parameters));
    }

    /**
     * Returns handles for all delivery locations.
     *
     * @param DeliveryLocation_GetAll $parameters
     * @return DeliveryLocation_GetAllResponse
     */
    public function DeliveryLocation_GetAll(DeliveryLocation_GetAll $parameters)
    {
      return $this->__soapCall('DeliveryLocation_GetAll', array($parameters));
    }

    /**
     * Returns handles for all delivery location with a given external ID.<br />Parameters: externalId: The external ID to search for.
     *
     * @param DeliveryLocation_FindByExternalId $parameters
     * @return DeliveryLocation_FindByExternalIdResponse
     */
    public function DeliveryLocation_FindByExternalId(DeliveryLocation_FindByExternalId $parameters)
    {
      return $this->__soapCall('DeliveryLocation_FindByExternalId', array($parameters));
    }

    /**
     * Deletes a delivery location
     *
     * @param DeliveryLocation_Delete $parameters
     * @return DeliveryLocation_DeleteResponse
     */
    public function DeliveryLocation_Delete(DeliveryLocation_Delete $parameters)
    {
      return $this->__soapCall('DeliveryLocation_Delete', array($parameters));
    }

    /**
     * Creates a new department from a data object.<br />Parameters: data: The data object that specifies the properties of the new department.
     *
     * @param Department_CreateFromData $parameters
     * @return Department_CreateFromDataResponse
     */
    public function Department_CreateFromData(Department_CreateFromData $parameters)
    {
      return $this->__soapCall('Department_CreateFromData', array($parameters));
    }

    /**
     * Creates new departments from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new departments.
     *
     * @param Department_CreateFromDataArray $parameters
     * @return Department_CreateFromDataArrayResponse
     */
    public function Department_CreateFromDataArray(Department_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Department_CreateFromDataArray', array($parameters));
    }

    /**
     * Update departments from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Department_UpdateFromDataArray $parameters
     * @return Department_UpdateFromDataArrayResponse
     */
    public function Department_UpdateFromDataArray(Department_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Department_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a department from a data object.<br />Parameters: data: The data object.
     *
     * @param Department_UpdateFromData $parameters
     * @return Department_UpdateFromDataResponse
     */
    public function Department_UpdateFromData(Department_UpdateFromData $parameters)
    {
      return $this->__soapCall('Department_UpdateFromData', array($parameters));
    }

    /**
     * Returns a department data object for a given department.<br />Parameters: entityHandle: A handle for the department.
     *
     * @param Department_GetData $parameters
     * @return Department_GetDataResponse
     */
    public function Department_GetData(Department_GetData $parameters)
    {
      return $this->__soapCall('Department_GetData', array($parameters));
    }

    /**
     * Returns department data objects for a given set of department handles.<br />Parameters: entityHandles: An array of the department handles.
     *
     * @param Department_GetDataArray $parameters
     * @return Department_GetDataArrayResponse
     */
    public function Department_GetDataArray(Department_GetDataArray $parameters)
    {
      return $this->__soapCall('Department_GetDataArray', array($parameters));
    }

    /**
     * Creates a new department.
     *
     * @param Department_Create $parameters
     * @return Department_CreateResponse
     */
    public function Department_Create(Department_Create $parameters)
    {
      return $this->__soapCall('Department_Create', array($parameters));
    }

    /**
     * Returns handles for all departments.
     *
     * @param Department_GetAll $parameters
     * @return Department_GetAllResponse
     */
    public function Department_GetAll(Department_GetAll $parameters)
    {
      return $this->__soapCall('Department_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the department with the given number.<br />Parameters: number: The number to search for.
     *
     * @param Department_FindByNumber $parameters
     * @return Department_FindByNumberResponse
     */
    public function Department_FindByNumber(Department_FindByNumber $parameters)
    {
      return $this->__soapCall('Department_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the departments corresponding to the given numbers. If a department with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Department_FindByNumberList $parameters
     * @return Department_FindByNumberListResponse
     */
    public function Department_FindByNumberList(Department_FindByNumberList $parameters)
    {
      return $this->__soapCall('Department_FindByNumberList', array($parameters));
    }

    /**
     * Returns a handle for the department with a given name.<br />Parameters: name: The name to search for.
     *
     * @param Department_FindByName $parameters
     * @return Department_FindByNameResponse
     */
    public function Department_FindByName(Department_FindByName $parameters)
    {
      return $this->__soapCall('Department_FindByName', array($parameters));
    }

    /**
     * Return handles for all departments from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param Department_GetAllUpdated $parameters
     * @return Department_GetAllUpdatedResponse
     */
    public function Department_GetAllUpdated(Department_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Department_GetAllUpdated', array($parameters));
    }

    /**
     * Deletes a department.<br />Parameters: departmentHandle: Handle for the department.
     *
     * @param Department_Delete $parameters
     * @return Department_DeleteResponse
     */
    public function Department_Delete(Department_Delete $parameters)
    {
      return $this->__soapCall('Department_Delete', array($parameters));
    }

    /**
     * Gets the number of a department.<br />Parameters: departmentHandle: Handle for the department.
     *
     * @param Department_GetNumber $parameters
     * @return Department_GetNumberResponse
     */
    public function Department_GetNumber(Department_GetNumber $parameters)
    {
      return $this->__soapCall('Department_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a department.<br />Parameters: departmentHandle: Handle for the department.
     *
     * @param Department_GetName $parameters
     * @return Department_GetNameResponse
     */
    public function Department_GetName(Department_GetName $parameters)
    {
      return $this->__soapCall('Department_GetName', array($parameters));
    }

    /**
     * Gets the accessibility of a department.<br />Parameters: departmentHandle: Handle for the department.
     *
     * @param Department_GetIsAccessible $parameters
     * @return Department_GetIsAccessibleResponse
     */
    public function Department_GetIsAccessible(Department_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Department_GetIsAccessible', array($parameters));
    }

    /**
     * Sets the name of a department.<br />Parameters: departmentHandle: Handle for the department. value: The new name for the department.
     *
     * @param Department_SetName $parameters
     * @return Department_SetNameResponse
     */
    public function Department_SetName(Department_SetName $parameters)
    {
      return $this->__soapCall('Department_SetName', array($parameters));
    }

    /**
     * Sets the accessibility of a department.<br />Parameters: departmentHandle: Handle for the department. value: True if accessible, false if not.
     *
     * @param Department_SetIsAccessible $parameters
     * @return Department_SetIsAccessibleResponse
     */
    public function Department_SetIsAccessible(Department_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Department_SetIsAccessible', array($parameters));
    }

    /**
     * Update distribution keys from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param DistributionKey_UpdateFromDataArray $parameters
     * @return DistributionKey_UpdateFromDataArrayResponse
     */
    public function DistributionKey_UpdateFromDataArray(DistributionKey_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('DistributionKey_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a distribution key from a data object.<br />Parameters: data: The data object.
     *
     * @param DistributionKey_UpdateFromData $parameters
     * @return DistributionKey_UpdateFromDataResponse
     */
    public function DistributionKey_UpdateFromData(DistributionKey_UpdateFromData $parameters)
    {
      return $this->__soapCall('DistributionKey_UpdateFromData', array($parameters));
    }

    /**
     * Returns a distribution key data object for a given distribution key.<br />Parameters: entityHandle: A handle for the distribution key.
     *
     * @param DistributionKey_GetData $parameters
     * @return DistributionKey_GetDataResponse
     */
    public function DistributionKey_GetData(DistributionKey_GetData $parameters)
    {
      return $this->__soapCall('DistributionKey_GetData', array($parameters));
    }

    /**
     * Returns distribution key data objects for a given set of distribution key handles.<br />Parameters: entityHandles: An array of the distribution key handles.
     *
     * @param DistributionKey_GetDataArray $parameters
     * @return DistributionKey_GetDataArrayResponse
     */
    public function DistributionKey_GetDataArray(DistributionKey_GetDataArray $parameters)
    {
      return $this->__soapCall('DistributionKey_GetDataArray', array($parameters));
    }

    /**
     * Return handles for all distributions keys.
     *
     * @param DistributionKey_GetAll $parameters
     * @return DistributionKey_GetAllResponse
     */
    public function DistributionKey_GetAll(DistributionKey_GetAll $parameters)
    {
      return $this->__soapCall('DistributionKey_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the distribution key with the given number.<br />Parameters: number: The number to search for.
     *
     * @param DistributionKey_FindByNumber $parameters
     * @return DistributionKey_FindByNumberResponse
     */
    public function DistributionKey_FindByNumber(DistributionKey_FindByNumber $parameters)
    {
      return $this->__soapCall('DistributionKey_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the distribution keys corresponding to the given numbers. If a distribution key with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param DistributionKey_FindByNumberList $parameters
     * @return DistributionKey_FindByNumberListResponse
     */
    public function DistributionKey_FindByNumberList(DistributionKey_FindByNumberList $parameters)
    {
      return $this->__soapCall('DistributionKey_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the distribution keys with the given name.<br />Parameters: name: The name to search for.
     *
     * @param DistributionKey_FindByName $parameters
     * @return DistributionKey_FindByNameResponse
     */
    public function DistributionKey_FindByName(DistributionKey_FindByName $parameters)
    {
      return $this->__soapCall('DistributionKey_FindByName', array($parameters));
    }

    /**
     * Gets the departments of a distribution key.<br />Parameters: distributionKeyHandle: Handle for the distribution key.
     *
     * @param DistributionKey_GetDepartments $parameters
     * @return DistributionKey_GetDepartmentsResponse
     */
    public function DistributionKey_GetDepartments(DistributionKey_GetDepartments $parameters)
    {
      return $this->__soapCall('DistributionKey_GetDepartments', array($parameters));
    }

    /**
     * Gets the percentage distributions for the departments of a distribution key.<br />Parameters: distributionKeyHandle: Handle for the distribution key.
     *
     * @param DistributionKey_GetPercentages $parameters
     * @return DistributionKey_GetPercentagesResponse
     */
    public function DistributionKey_GetPercentages(DistributionKey_GetPercentages $parameters)
    {
      return $this->__soapCall('DistributionKey_GetPercentages', array($parameters));
    }

    /**
     * Gets the number of a distribution key.<br />Parameters: distributionKeyHandle: Handle for the distribution key.
     *
     * @param DistributionKey_GetNumber $parameters
     * @return DistributionKey_GetNumberResponse
     */
    public function DistributionKey_GetNumber(DistributionKey_GetNumber $parameters)
    {
      return $this->__soapCall('DistributionKey_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a distribution key.<br />Parameters: distributionKeyHandle: Handle for the distribution key.
     *
     * @param DistributionKey_GetName $parameters
     * @return DistributionKey_GetNameResponse
     */
    public function DistributionKey_GetName(DistributionKey_GetName $parameters)
    {
      return $this->__soapCall('DistributionKey_GetName', array($parameters));
    }

    /**
     * Sets the name of a distribution key.<br />Parameters: distributionKeyHandle: Handle for the distribution key. value: The new name of the distribution key.
     *
     * @param DistributionKey_SetName $parameters
     * @return DistributionKey_SetNameResponse
     */
    public function DistributionKey_SetName(DistributionKey_SetName $parameters)
    {
      return $this->__soapCall('DistributionKey_SetName', array($parameters));
    }

    /**
     * Gets whether a distributionkey is accessible.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param DistributionKey_GetIsAccessible $parameters
     * @return DistributionKey_GetIsAccessibleResponse
     */
    public function DistributionKey_GetIsAccessible(DistributionKey_GetIsAccessible $parameters)
    {
      return $this->__soapCall('DistributionKey_GetIsAccessible', array($parameters));
    }

    /**
     * Sets whether a distributionkey is accessible.<br />Parameters: accountHandle: Handle for the account. value: Value that indicates whether the account should be accessible.
     *
     * @param DistributionKey_SetIsAccessible $parameters
     * @return DistributionKey_SetIsAccessibleResponse
     */
    public function DistributionKey_SetIsAccessible(DistributionKey_SetIsAccessible $parameters)
    {
      return $this->__soapCall('DistributionKey_SetIsAccessible', array($parameters));
    }

    /**
     * @param DocumentArchiveCategory_CreateFromData $parameters
     * @return DocumentArchiveCategory_CreateFromDataResponse
     */
    public function DocumentArchiveCategory_CreateFromData(DocumentArchiveCategory_CreateFromData $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_CreateFromData', array($parameters));
    }

    /**
     * @param DocumentArchiveCategory_CreateFromDataArray $parameters
     * @return DocumentArchiveCategory_CreateFromDataArrayResponse
     */
    public function DocumentArchiveCategory_CreateFromDataArray(DocumentArchiveCategory_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_CreateFromDataArray', array($parameters));
    }

    /**
     * Update DocumentArchiveCategories from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param DocumentArchiveCategory_UpdateFromDataArray $parameters
     * @return DocumentArchiveCategory_UpdateFromDataArrayResponse
     */
    public function DocumentArchiveCategory_UpdateFromDataArray(DocumentArchiveCategory_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a DocumentArchiveCategory from a data object.<br />Parameters: data: The data object.
     *
     * @param DocumentArchiveCategory_UpdateFromData $parameters
     * @return DocumentArchiveCategory_UpdateFromDataResponse
     */
    public function DocumentArchiveCategory_UpdateFromData(DocumentArchiveCategory_UpdateFromData $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_UpdateFromData', array($parameters));
    }

    /**
     * Returns a DocumentArchiveCategory data object for a given DocumentArchiveCategory.<br />Parameters: entityHandle: A handle for the DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_GetData $parameters
     * @return DocumentArchiveCategory_GetDataResponse
     */
    public function DocumentArchiveCategory_GetData(DocumentArchiveCategory_GetData $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetData', array($parameters));
    }

    /**
     * Returns DocumentArchiveCategory data objects for a given set of DocumentArchiveCategory handles.<br />Parameters: entityHandles: An array of the DocumentArchiveCategory handles.
     *
     * @param DocumentArchiveCategory_GetDataArray $parameters
     * @return DocumentArchiveCategory_GetDataArrayResponse
     */
    public function DocumentArchiveCategory_GetDataArray(DocumentArchiveCategory_GetDataArray $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetDataArray', array($parameters));
    }

    /**
     * Creates a new DocumentArchiveCategory.<br />Parameters: number: The number of the new DocumentArchiveCategory. name: The name of the new DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_Create $parameters
     * @return DocumentArchiveCategory_CreateResponse
     */
    public function DocumentArchiveCategory_Create(DocumentArchiveCategory_Create $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_Create', array($parameters));
    }

    /**
     * Returns handles for all DocumentArchiveCategories.
     *
     * @param DocumentArchiveCategory_GetAll $parameters
     * @return DocumentArchiveCategory_GetAllResponse
     */
    public function DocumentArchiveCategory_GetAll(DocumentArchiveCategory_GetAll $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the scanned document with a given number.<br />Parameters: number: The number to search for.
     *
     * @param DocumentArchiveCategory_FindByNumber $parameters
     * @return DocumentArchiveCategory_FindByNumberResponse
     */
    public function DocumentArchiveCategory_FindByNumber(DocumentArchiveCategory_FindByNumber $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_FindByNumber', array($parameters));
    }

    /**
     * Returns handles for the document archive categories with a given name.<br />Parameter: name: The name to search for.
     *
     * @param DocumentArchiveCategory_FindByName $parameters
     * @return DocumentArchiveCategory_FindByNameResponse
     */
    public function DocumentArchiveCategory_FindByName(DocumentArchiveCategory_FindByName $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_FindByName', array($parameters));
    }

    /**
     * Gets all documents in this category.<br />Parameters: invoiceHandle: Handle for the DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_GetDocuments $parameters
     * @return DocumentArchiveCategory_GetDocumentsResponse
     */
    public function DocumentArchiveCategory_GetDocuments(DocumentArchiveCategory_GetDocuments $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetDocuments', array($parameters));
    }

    /**
     * Deletes a category.<br />Parameters: documentArchiveCategoryHandle: Handle for the category.
     *
     * @param DocumentArchiveCategory_Delete $parameters
     * @return DocumentArchiveCategory_DeleteResponse
     */
    public function DocumentArchiveCategory_Delete(DocumentArchiveCategory_Delete $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_Delete', array($parameters));
    }

    /**
     * Gets the number of a DocumentArchiveCategory.<br />Parameters: DocumentArchiveCategoryHandle: Handle for the DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_GetNumber $parameters
     * @return DocumentArchiveCategory_GetNumberResponse
     */
    public function DocumentArchiveCategory_GetNumber(DocumentArchiveCategory_GetNumber $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a DocumentArchiveCategory.<br />Parameters: DocumentArchiveCategoryHandle: Handle for the DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_GetName $parameters
     * @return DocumentArchiveCategory_GetNameResponse
     */
    public function DocumentArchiveCategory_GetName(DocumentArchiveCategory_GetName $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_GetName', array($parameters));
    }

    /**
     * Sets the name of a DocumentArchiveCategory.<br />Parameters: documentArchiveCategoryHandle: Handle for the DocumentArchiveCategory. value: new name of the DocumentArchiveCategory.
     *
     * @param DocumentArchiveCategory_SetName $parameters
     * @return DocumentArchiveCategory_SetNameResponse
     */
    public function DocumentArchiveCategory_SetName(DocumentArchiveCategory_SetName $parameters)
    {
      return $this->__soapCall('DocumentArchiveCategory_SetName', array($parameters));
    }

    /**
     * Creates a new employee from a data object.<br />Parameters: data: The data object that specifies the properties of the new employee.
     *
     * @param Employee_CreateFromData $parameters
     * @return Employee_CreateFromDataResponse
     */
    public function Employee_CreateFromData(Employee_CreateFromData $parameters)
    {
      return $this->__soapCall('Employee_CreateFromData', array($parameters));
    }

    /**
     * Creates new employees from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new employees.
     *
     * @param Employee_CreateFromDataArray $parameters
     * @return Employee_CreateFromDataArrayResponse
     */
    public function Employee_CreateFromDataArray(Employee_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Employee_CreateFromDataArray', array($parameters));
    }

    /**
     * Update employees from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Employee_UpdateFromDataArray $parameters
     * @return Employee_UpdateFromDataArrayResponse
     */
    public function Employee_UpdateFromDataArray(Employee_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Employee_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an employee from a data object.<br />Parameters: data: The data object.
     *
     * @param Employee_UpdateFromData $parameters
     * @return Employee_UpdateFromDataResponse
     */
    public function Employee_UpdateFromData(Employee_UpdateFromData $parameters)
    {
      return $this->__soapCall('Employee_UpdateFromData', array($parameters));
    }

    /**
     * Returns an employee data object for a given employee.<br />Parameters: entityHandle: A handle for the employee.
     *
     * @param Employee_GetData $parameters
     * @return Employee_GetDataResponse
     */
    public function Employee_GetData(Employee_GetData $parameters)
    {
      return $this->__soapCall('Employee_GetData', array($parameters));
    }

    /**
     * Gets the current balance of the debtor.<br />Parameters: debtorHandle: Handle for the Debtor.
     *
     * @param Debtor_GetBalance $parameters
     * @return Debtor_GetBalanceResponse
     */
    public function Debtor_GetBalance(Debtor_GetBalance $parameters)
    {
      return $this->__soapCall('Debtor_GetBalance', array($parameters));
    }

    /**
     * Returns the next available debtor number.
     *
     * @param Debtor_GetNextAvailableNumber $parameters
     * @return Debtor_GetNextAvailableNumberResponse
     */
    public function Debtor_GetNextAvailableNumber(Debtor_GetNextAvailableNumber $parameters)
    {
      return $this->__soapCall('Debtor_GetNextAvailableNumber', array($parameters));
    }

    /**
     * Creates a new debtor.
     *
     * @param Debtor_Create $parameters
     * @return Debtor_CreateResponse
     */
    public function Debtor_Create(Debtor_Create $parameters)
    {
      return $this->__soapCall('Debtor_Create', array($parameters));
    }

    /**
     * Return handles for all debtors
     *
     * @param Debtor_GetAll $parameters
     * @return Debtor_GetAllResponse
     */
    public function Debtor_GetAll(Debtor_GetAll $parameters)
    {
      return $this->__soapCall('Debtor_GetAll', array($parameters));
    }

    /**
     * Return handles for all debtors from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param Debtor_GetAllUpdated $parameters
     * @return Debtor_GetAllUpdatedResponse
     */
    public function Debtor_GetAllUpdated(Debtor_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Debtor_GetAllUpdated', array($parameters));
    }

    /**
     * Returns handle for debtor with a given number.
     *
     * @param Debtor_FindByNumber $parameters
     * @return Debtor_FindByNumberResponse
     */
    public function Debtor_FindByNumber(Debtor_FindByNumber $parameters)
    {
      return $this->__soapCall('Debtor_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the debtors corresponding to the given debtor numbers. If a debtort with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Debtor_FindByNumberList $parameters
     * @return Debtor_FindByNumberListResponse
     */
    public function Debtor_FindByNumberList(Debtor_FindByNumberList $parameters)
    {
      return $this->__soapCall('Debtor_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for debtors with a given name.<br />Parameters: The name to search for.
     *
     * @param Debtor_FindByName $parameters
     * @return Debtor_FindByNameResponse
     */
    public function Debtor_FindByName(Debtor_FindByName $parameters)
    {
      return $this->__soapCall('Debtor_FindByName', array($parameters));
    }

    /**
     * Returns handles for debtors with a given partial name.<br />Parameters: The partial name to search for. Asterisks (*) may be used as wildcards.
     *
     * @param Debtor_FindByPartialName $parameters
     * @return Debtor_FindByPartialNameResponse
     */
    public function Debtor_FindByPartialName(Debtor_FindByPartialName $parameters)
    {
      return $this->__soapCall('Debtor_FindByPartialName', array($parameters));
    }

    /**
     * Returns handle for debtors with a given email.<br />Parameters: The email to search for.
     *
     * @param Debtor_FindByEmail $parameters
     * @return Debtor_FindByEmailResponse
     */
    public function Debtor_FindByEmail(Debtor_FindByEmail $parameters)
    {
      return $this->__soapCall('Debtor_FindByEmail', array($parameters));
    }

    /**
     * Returns handles for debtors with a given EAN.<br />Parameters: The EAN to search for.
     *
     * @param Debtor_FindByEan $parameters
     * @return Debtor_FindByEanResponse
     */
    public function Debtor_FindByEan(Debtor_FindByEan $parameters)
    {
      return $this->__soapCall('Debtor_FindByEan', array($parameters));
    }

    /**
     * Returns handles for debtors with a given Corporate Identification Number.<br />Parameters: The Corporate Identification Number to search for.
     *
     * @param Debtor_FindByCINumber $parameters
     * @return Debtor_FindByCINumberResponse
     */
    public function Debtor_FindByCINumber(Debtor_FindByCINumber $parameters)
    {
      return $this->__soapCall('Debtor_FindByCINumber', array($parameters));
    }

    /**
     * Returns handle for debtors with a given telephone and fax number.<br />Parameters: The telephone and fax number to search for.
     *
     * @param Debtor_FindByTelephoneAndFaxNumber $parameters
     * @return Debtor_FindByTelephoneAndFaxNumberResponse
     */
    public function Debtor_FindByTelephoneAndFaxNumber(Debtor_FindByTelephoneAndFaxNumber $parameters)
    {
      return $this->__soapCall('Debtor_FindByTelephoneAndFaxNumber', array($parameters));
    }

    /**
     * Gets handles for delivery locations of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetDeliveryLocations $parameters
     * @return Debtor_GetDeliveryLocationsResponse
     */
    public function Debtor_GetDeliveryLocations(Debtor_GetDeliveryLocations $parameters)
    {
      return $this->__soapCall('Debtor_GetDeliveryLocations', array($parameters));
    }

    /**
     * Gets handles for debtor contacts of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetDebtorContacts $parameters
     * @return Debtor_GetDebtorContactsResponse
     */
    public function Debtor_GetDebtorContacts(Debtor_GetDebtorContacts $parameters)
    {
      return $this->__soapCall('Debtor_GetDebtorContacts', array($parameters));
    }

    /**
     * Gets handles for the invoices of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetInvoices $parameters
     * @return Debtor_GetInvoicesResponse
     */
    public function Debtor_GetInvoices(Debtor_GetInvoices $parameters)
    {
      return $this->__soapCall('Debtor_GetInvoices', array($parameters));
    }

    /**
     * Gets handles for the orders of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetOrders $parameters
     * @return Debtor_GetOrdersResponse
     */
    public function Debtor_GetOrders(Debtor_GetOrders $parameters)
    {
      return $this->__soapCall('Debtor_GetOrders', array($parameters));
    }

    /**
     * Gets handles for the current invoices of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCurrentInvoices $parameters
     * @return Debtor_GetCurrentInvoicesResponse
     */
    public function Debtor_GetCurrentInvoices(Debtor_GetCurrentInvoices $parameters)
    {
      return $this->__soapCall('Debtor_GetCurrentInvoices', array($parameters));
    }

    /**
     * Gets handles for the quotations of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetQuotations $parameters
     * @return Debtor_GetQuotationsResponse
     */
    public function Debtor_GetQuotations(Debtor_GetQuotations $parameters)
    {
      return $this->__soapCall('Debtor_GetQuotations', array($parameters));
    }

    /**
     * Gets handles for the entries of the debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetEntries $parameters
     * @return Debtor_GetEntriesResponse
     */
    public function Debtor_GetEntries(Debtor_GetEntries $parameters)
    {
      return $this->__soapCall('Debtor_GetEntries', array($parameters));
    }

    /**
     * Gets handles for the open entries of the debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetOpenEntries $parameters
     * @return Debtor_GetOpenEntriesResponse
     */
    public function Debtor_GetOpenEntries(Debtor_GetOpenEntries $parameters)
    {
      return $this->__soapCall('Debtor_GetOpenEntries', array($parameters));
    }

    /**
     * Gets handles for the subscribers of the debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetSubscribers $parameters
     * @return Debtor_GetSubscribersResponse
     */
    public function Debtor_GetSubscribers(Debtor_GetSubscribers $parameters)
    {
      return $this->__soapCall('Debtor_GetSubscribers', array($parameters));
    }

    /**
     * Deletes a debtor.<br />Parameters: debtorHandle: Handle for debtor.
     *
     * @param Debtor_Delete $parameters
     * @return Debtor_DeleteResponse
     */
    public function Debtor_Delete(Debtor_Delete $parameters)
    {
      return $this->__soapCall('Debtor_Delete', array($parameters));
    }

    /**
     * Creates a new debtor contact from a data object.<br />Parameters: data: The data object that specifies the properties of the new debtor contact.
     *
     * @param DebtorContact_CreateFromData $parameters
     * @return DebtorContact_CreateFromDataResponse
     */
    public function DebtorContact_CreateFromData(DebtorContact_CreateFromData $parameters)
    {
      return $this->__soapCall('DebtorContact_CreateFromData', array($parameters));
    }

    /**
     * Creates new debtor contacts from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new debtor contacts.
     *
     * @param DebtorContact_CreateFromDataArray $parameters
     * @return DebtorContact_CreateFromDataArrayResponse
     */
    public function DebtorContact_CreateFromDataArray(DebtorContact_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('DebtorContact_CreateFromDataArray', array($parameters));
    }

    /**
     * Update debtor contacts from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param DebtorContact_UpdateFromDataArray $parameters
     * @return DebtorContact_UpdateFromDataArrayResponse
     */
    public function DebtorContact_UpdateFromDataArray(DebtorContact_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('DebtorContact_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a debtor contact from a data object.<br />Parameters: data: The data object.
     *
     * @param DebtorContact_UpdateFromData $parameters
     * @return DebtorContact_UpdateFromDataResponse
     */
    public function DebtorContact_UpdateFromData(DebtorContact_UpdateFromData $parameters)
    {
      return $this->__soapCall('DebtorContact_UpdateFromData', array($parameters));
    }

    /**
     * Returns a debtor contact data object for a given debtor contact.<br />Parameters: entityHandle: A handle for the debtor contact.
     *
     * @param DebtorContact_GetData $parameters
     * @return DebtorContact_GetDataResponse
     */
    public function DebtorContact_GetData(DebtorContact_GetData $parameters)
    {
      return $this->__soapCall('DebtorContact_GetData', array($parameters));
    }

    /**
     * Returns debtor contact data objects for a given set of debtor contact handles.<br />Parameters: entityHandles: An array of the debtor contact handles.
     *
     * @param DebtorContact_GetDataArray $parameters
     * @return DebtorContact_GetDataArrayResponse
     */
    public function DebtorContact_GetDataArray(DebtorContact_GetDataArray $parameters)
    {
      return $this->__soapCall('DebtorContact_GetDataArray', array($parameters));
    }

    /**
     * Gets a handle for the debtor of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetDebtor $parameters
     * @return DebtorContact_GetDebtorResponse
     */
    public function DebtorContact_GetDebtor(DebtorContact_GetDebtor $parameters)
    {
      return $this->__soapCall('DebtorContact_GetDebtor', array($parameters));
    }

    /**
     * Sets the name of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new name of the debtor contact.
     *
     * @param DebtorContact_SetName $parameters
     * @return DebtorContact_SetNameResponse
     */
    public function DebtorContact_SetName(DebtorContact_SetName $parameters)
    {
      return $this->__soapCall('DebtorContact_SetName', array($parameters));
    }

    /**
     * Gets the name of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetName $parameters
     * @return DebtorContact_GetNameResponse
     */
    public function DebtorContact_GetName(DebtorContact_GetName $parameters)
    {
      return $this->__soapCall('DebtorContact_GetName', array($parameters));
    }

    /**
     * Gets the number of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetNumber $parameters
     * @return DebtorContact_GetNumberResponse
     */
    public function DebtorContact_GetNumber(DebtorContact_GetNumber $parameters)
    {
      return $this->__soapCall('DebtorContact_GetNumber', array($parameters));
    }

    /**
     * Gets the telephone number of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetTelephoneNumber $parameters
     * @return DebtorContact_GetTelephoneNumberResponse
     */
    public function DebtorContact_GetTelephoneNumber(DebtorContact_GetTelephoneNumber $parameters)
    {
      return $this->__soapCall('DebtorContact_GetTelephoneNumber', array($parameters));
    }

    /**
     * Sets the telephone number of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new telephone number of the debtor contact.
     *
     * @param DebtorContact_SetTelephoneNumber $parameters
     * @return DebtorContact_SetTelephoneNumberResponse
     */
    public function DebtorContact_SetTelephoneNumber(DebtorContact_SetTelephoneNumber $parameters)
    {
      return $this->__soapCall('DebtorContact_SetTelephoneNumber', array($parameters));
    }

    /**
     * Gets the email of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetEmail $parameters
     * @return DebtorContact_GetEmailResponse
     */
    public function DebtorContact_GetEmail(DebtorContact_GetEmail $parameters)
    {
      return $this->__soapCall('DebtorContact_GetEmail', array($parameters));
    }

    /**
     * Sets the email of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new email of the debtor contact.
     *
     * @param DebtorContact_SetEmail $parameters
     * @return DebtorContact_SetEmailResponse
     */
    public function DebtorContact_SetEmail(DebtorContact_SetEmail $parameters)
    {
      return $this->__soapCall('DebtorContact_SetEmail', array($parameters));
    }

    /**
     * Sets the comments of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new comments of the debtor contact.
     *
     * @param DebtorContact_SetComments $parameters
     * @return DebtorContact_SetCommentsResponse
     */
    public function DebtorContact_SetComments(DebtorContact_SetComments $parameters)
    {
      return $this->__soapCall('DebtorContact_SetComments', array($parameters));
    }

    /**
     * Gets the comments of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetComments $parameters
     * @return DebtorContact_GetCommentsResponse
     */
    public function DebtorContact_GetComments(DebtorContact_GetComments $parameters)
    {
      return $this->__soapCall('DebtorContact_GetComments', array($parameters));
    }

    /**
     * Gets the external ID of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetExternalId $parameters
     * @return DebtorContact_GetExternalIdResponse
     */
    public function DebtorContact_GetExternalId(DebtorContact_GetExternalId $parameters)
    {
      return $this->__soapCall('DebtorContact_GetExternalId', array($parameters));
    }

    /**
     * Sets the external ID of a debtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new external ID of the debtor contact.
     *
     * @param DebtorContact_SetExternalId $parameters
     * @return DebtorContact_SetExternalIdResponse
     */
    public function DebtorContact_SetExternalId(DebtorContact_SetExternalId $parameters)
    {
      return $this->__soapCall('DebtorContact_SetExternalId', array($parameters));
    }

    /**
     * Sets whether the debtor contact is to receive a copy of orders by email.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new value indicating whether the debtor contact is to receive a copy of orders by email.
     *
     * @param DebtorContact_SetIsToReceiveEmailCopyOfOrder $parameters
     * @return DebtorContact_SetIsToReceiveEmailCopyOfOrderResponse
     */
    public function DebtorContact_SetIsToReceiveEmailCopyOfOrder(DebtorContact_SetIsToReceiveEmailCopyOfOrder $parameters)
    {
      return $this->__soapCall('DebtorContact_SetIsToReceiveEmailCopyOfOrder', array($parameters));
    }

    /**
     * Gets whether the debtor contact is to receive a copy of orders by email.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetIsToReceiveEmailCopyOfOrder $parameters
     * @return DebtorContact_GetIsToReceiveEmailCopyOfOrderResponse
     */
    public function DebtorContact_GetIsToReceiveEmailCopyOfOrder(DebtorContact_GetIsToReceiveEmailCopyOfOrder $parameters)
    {
      return $this->__soapCall('DebtorContact_GetIsToReceiveEmailCopyOfOrder', array($parameters));
    }

    /**
     * Gets whether the debtor contact is to receive a copy of invoices by email.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_GetIsToReceiveEmailCopyOfInvoice $parameters
     * @return DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResponse
     */
    public function DebtorContact_GetIsToReceiveEmailCopyOfInvoice(DebtorContact_GetIsToReceiveEmailCopyOfInvoice $parameters)
    {
      return $this->__soapCall('DebtorContact_GetIsToReceiveEmailCopyOfInvoice', array($parameters));
    }

    /**
     * Sets whether the debtor contact is to receive a copy of invoices by email.<br />Parameters: debtorContactHandle: Handle for the debtor contact. value: The new value indicating whether the debtor contact is to receive a copy of invoices by email.
     *
     * @param DebtorContact_SetIsToReceiveEmailCopyOfInvoice $parameters
     * @return DebtorContact_SetIsToReceiveEmailCopyOfInvoiceResponse
     */
    public function DebtorContact_SetIsToReceiveEmailCopyOfInvoice(DebtorContact_SetIsToReceiveEmailCopyOfInvoice $parameters)
    {
      return $this->__soapCall('DebtorContact_SetIsToReceiveEmailCopyOfInvoice', array($parameters));
    }

    /**
     * Creates a new debtor contact.
     *
     * @param DebtorContact_Create $parameters
     * @return DebtorContact_CreateResponse
     */
    public function DebtorContact_Create(DebtorContact_Create $parameters)
    {
      return $this->__soapCall('DebtorContact_Create', array($parameters));
    }

    /**
     * Returns handles for all debtor contacts.
     *
     * @param DebtorContact_GetAll $parameters
     * @return DebtorContact_GetAllResponse
     */
    public function DebtorContact_GetAll(DebtorContact_GetAll $parameters)
    {
      return $this->__soapCall('DebtorContact_GetAll', array($parameters));
    }

    /**
     * Returns handles for debtor contacts with a given name.
     *
     * @param DebtorContact_FindByName $parameters
     * @return DebtorContact_FindByNameResponse
     */
    public function DebtorContact_FindByName(DebtorContact_FindByName $parameters)
    {
      return $this->__soapCall('DebtorContact_FindByName', array($parameters));
    }

    /**
     * Returns handles for debtor contacts with a external ID.
     *
     * @param DebtorContact_FindByExternalId $parameters
     * @return DebtorContact_FindByExternalIdResponse
     */
    public function DebtorContact_FindByExternalId(DebtorContact_FindByExternalId $parameters)
    {
      return $this->__soapCall('DebtorContact_FindByExternalId', array($parameters));
    }

    /**
     * Deletes adebtor contact.<br />Parameters: debtorContactHandle: Handle for the debtor contact.
     *
     * @param DebtorContact_Delete $parameters
     * @return DebtorContact_DeleteResponse
     */
    public function DebtorContact_Delete(DebtorContact_Delete $parameters)
    {
      return $this->__soapCall('DebtorContact_Delete', array($parameters));
    }

    /**
     * Returns a debtor entry data object for a given debtor entry.<br />Parameters: entityHandle: A handle for the debtor entry.
     *
     * @param DebtorEntry_GetData $parameters
     * @return DebtorEntry_GetDataResponse
     */
    public function DebtorEntry_GetData(DebtorEntry_GetData $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetData', array($parameters));
    }

    /**
     * Returns debtor entry data objects for a given set of debtor entry handles.<br />Parameters: entityHandles: An array of the debtor entry handles.
     *
     * @param DebtorEntry_GetDataArray $parameters
     * @return DebtorEntry_GetDataArrayResponse
     */
    public function DebtorEntry_GetDataArray(DebtorEntry_GetDataArray $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of the debtor entry.<br />Parameters: debtorentryHandle: Handle for the debtor entry.
     *
     * @param DebtorEntry_GetSerialNumber $parameters
     * @return DebtorEntry_GetSerialNumberResponse
     */
    public function DebtorEntry_GetSerialNumber(DebtorEntry_GetSerialNumber $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetSerialNumber', array($parameters));
    }

    /**
     * Gets the entry type of the debtor entry.<br />
     *
     * @param DebtorEntry_GetType $parameters
     * @return DebtorEntry_GetTypeResponse
     */
    public function DebtorEntry_GetType(DebtorEntry_GetType $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetType', array($parameters));
    }

    /**
     * Gets the date of the debtor entry.<br />
     *
     * @param DebtorEntry_GetDate $parameters
     * @return DebtorEntry_GetDateResponse
     */
    public function DebtorEntry_GetDate(DebtorEntry_GetDate $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetDate', array($parameters));
    }

    /**
     * Gets the debtor of the debtor entry.<br />
     *
     * @param DebtorEntry_GetDebtor $parameters
     * @return DebtorEntry_GetDebtorResponse
     */
    public function DebtorEntry_GetDebtor(DebtorEntry_GetDebtor $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetDebtor', array($parameters));
    }

    /**
     * Gets the account of the debtor entry.<br />
     *
     * @param DebtorEntry_GetAccount $parameters
     * @return DebtorEntry_GetAccountResponse
     */
    public function DebtorEntry_GetAccount(DebtorEntry_GetAccount $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetAccount', array($parameters));
    }

    /**
     * Gets the voucher number of the debtor entry.<br />
     *
     * @param DebtorEntry_GetVoucherNumber $parameters
     * @return DebtorEntry_GetVoucherNumberResponse
     */
    public function DebtorEntry_GetVoucherNumber(DebtorEntry_GetVoucherNumber $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetVoucherNumber', array($parameters));
    }

    /**
     * Gets the text of the debtor entry.<br />
     *
     * @param DebtorEntry_GetText $parameters
     * @return DebtorEntry_GetTextResponse
     */
    public function DebtorEntry_GetText(DebtorEntry_GetText $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetText', array($parameters));
    }

    /**
     * Gets the amount of the debtor entry in the default currency.<br />
     *
     * @param DebtorEntry_GetAmountDefaultCurrency $parameters
     * @return DebtorEntry_GetAmountDefaultCurrencyResponse
     */
    public function DebtorEntry_GetAmountDefaultCurrency(DebtorEntry_GetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets all open debtor entries for all debtors.<br />
     *
     * @param DebtorEntry_GetAllOpenEntries $parameters
     * @return DebtorEntry_GetAllOpenEntriesResponse
     */
    public function DebtorEntry_GetAllOpenEntries(DebtorEntry_GetAllOpenEntries $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetAllOpenEntries', array($parameters));
    }

    /**
     * Gets the currency of the debtor entry.<br />
     *
     * @param DebtorEntry_GetCurrency $parameters
     * @return DebtorEntry_GetCurrencyResponse
     */
    public function DebtorEntry_GetCurrency(DebtorEntry_GetCurrency $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetCurrency', array($parameters));
    }

    /**
     * Gets the currency amount of the debtor entry.<br />
     *
     * @param DebtorEntry_GetAmount $parameters
     * @return DebtorEntry_GetAmountResponse
     */
    public function DebtorEntry_GetAmount(DebtorEntry_GetAmount $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetAmount', array($parameters));
    }

    /**
     * Gets the invoice number of the debtor entry.<br />
     *
     * @param DebtorEntry_GetInvoiceNumber $parameters
     * @return DebtorEntry_GetInvoiceNumberResponse
     */
    public function DebtorEntry_GetInvoiceNumber(DebtorEntry_GetInvoiceNumber $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetInvoiceNumber', array($parameters));
    }

    /**
     * Gets the due date of the debtor entry.<br />
     *
     * @param DebtorEntry_GetDueDate $parameters
     * @return DebtorEntry_GetDueDateResponse
     */
    public function DebtorEntry_GetDueDate(DebtorEntry_GetDueDate $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetDueDate', array($parameters));
    }

    /**
     * Gets the currency remainder of the debtor entry.<br />
     *
     * @param DebtorEntry_GetRemainder $parameters
     * @return DebtorEntry_GetRemainderResponse
     */
    public function DebtorEntry_GetRemainder(DebtorEntry_GetRemainder $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetRemainder', array($parameters));
    }

    /**
     * Gets the remainder of the debtor entry in the default currency.<br />
     *
     * @param DebtorEntry_GetRemainderDefaultCurrency $parameters
     * @return DebtorEntry_GetRemainderDefaultCurrencyResponse
     */
    public function DebtorEntry_GetRemainderDefaultCurrency(DebtorEntry_GetRemainderDefaultCurrency $parameters)
    {
      return $this->__soapCall('DebtorEntry_GetRemainderDefaultCurrency', array($parameters));
    }

    /**
     * Returns an array of handles for the debtor entries with numbers in the given interval.<br />Parameters: from: The beginning of the interval. to: the end of the interval.
     *
     * @param DebtorEntry_FindBySerialNumber $parameters
     * @return DebtorEntry_FindBySerialNumberResponse
     */
    public function DebtorEntry_FindBySerialNumber(DebtorEntry_FindBySerialNumber $parameters)
    {
      return $this->__soapCall('DebtorEntry_FindBySerialNumber', array($parameters));
    }

    /**
     * Returns handles for debtor entries for a given invoice number interval.<br />Parameters: from: The minimum invoice number to search for. to: The maximum invoice number to search for.
     *
     * @param DebtorEntry_FindByInvoiceNumber $parameters
     * @return DebtorEntry_FindByInvoiceNumberResponse
     */
    public function DebtorEntry_FindByInvoiceNumber(DebtorEntry_FindByInvoiceNumber $parameters)
    {
      return $this->__soapCall('DebtorEntry_FindByInvoiceNumber', array($parameters));
    }

    /**
     * Matches the entries passed to the function. No return value.<br />Parameters: entries: The debtor entries to be matched.
     *
     * @param DebtorEntry_MatchEntries $parameters
     * @return DebtorEntry_MatchEntriesResponse
     */
    public function DebtorEntry_MatchEntries(DebtorEntry_MatchEntries $parameters)
    {
      return $this->__soapCall('DebtorEntry_MatchEntries', array($parameters));
    }

    /**
     * Creates a new debtor group from a data object.<br />Parameters: data: The data object that specifies the properties of the new debtor group.
     *
     * @param DebtorGroup_CreateFromData $parameters
     * @return DebtorGroup_CreateFromDataResponse
     */
    public function DebtorGroup_CreateFromData(DebtorGroup_CreateFromData $parameters)
    {
      return $this->__soapCall('DebtorGroup_CreateFromData', array($parameters));
    }

    /**
     * Creates new debtor groups from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new debtor groups.
     *
     * @param DebtorGroup_CreateFromDataArray $parameters
     * @return DebtorGroup_CreateFromDataArrayResponse
     */
    public function DebtorGroup_CreateFromDataArray(DebtorGroup_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('DebtorGroup_CreateFromDataArray', array($parameters));
    }

    /**
     * Update debtor groups from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param DebtorGroup_UpdateFromDataArray $parameters
     * @return DebtorGroup_UpdateFromDataArrayResponse
     */
    public function DebtorGroup_UpdateFromDataArray(DebtorGroup_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('DebtorGroup_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a debtor group from a data object.<br />Parameters: data: The data object.
     *
     * @param DebtorGroup_UpdateFromData $parameters
     * @return DebtorGroup_UpdateFromDataResponse
     */
    public function DebtorGroup_UpdateFromData(DebtorGroup_UpdateFromData $parameters)
    {
      return $this->__soapCall('DebtorGroup_UpdateFromData', array($parameters));
    }

    /**
     * Returns a debtor group data object for a given debtor group.<br />Parameters: entityHandle: A handle for the debtor group.
     *
     * @param DebtorGroup_GetData $parameters
     * @return DebtorGroup_GetDataResponse
     */
    public function DebtorGroup_GetData(DebtorGroup_GetData $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetData', array($parameters));
    }

    /**
     * Returns debtor group data objects for a given set of debtor group handles.<br />Parameters: entityHandles: An array of the debtor group handles.
     *
     * @param DebtorGroup_GetDataArray $parameters
     * @return DebtorGroup_GetDataArrayResponse
     */
    public function DebtorGroup_GetDataArray(DebtorGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetDataArray', array($parameters));
    }

    /**
     * Get the number of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group.
     *
     * @param DebtorGroup_GetNumber $parameters
     * @return DebtorGroup_GetNumberResponse
     */
    public function DebtorGroup_GetNumber(DebtorGroup_GetNumber $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetNumber', array($parameters));
    }

    /**
     * Get the name of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group.
     *
     * @param DebtorGroup_GetName $parameters
     * @return DebtorGroup_GetNameResponse
     */
    public function DebtorGroup_GetName(DebtorGroup_GetName $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetName', array($parameters));
    }

    /**
     * Set the name of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group. value: The new name of the debtor group.
     *
     * @param DebtorGroup_SetName $parameters
     * @return DebtorGroup_SetNameResponse
     */
    public function DebtorGroup_SetName(DebtorGroup_SetName $parameters)
    {
      return $this->__soapCall('DebtorGroup_SetName', array($parameters));
    }

    /**
     * Sets the layout of a debtor group. The value may be omitted.<br />Parameters: debtorGroupHandle: Handle for the debtor group. valueHandle: Handle for new layout of a debtor group.
     *
     * @param DebtorGroup_SetLayout $parameters
     * @return DebtorGroup_SetLayoutResponse
     */
    public function DebtorGroup_SetLayout(DebtorGroup_SetLayout $parameters)
    {
      return $this->__soapCall('DebtorGroup_SetLayout', array($parameters));
    }

    /**
     * Gets a handle for the layout of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group.
     *
     * @param DebtorGroup_GetLayout $parameters
     * @return DebtorGroup_GetLayoutResponse
     */
    public function DebtorGroup_GetLayout(DebtorGroup_GetLayout $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetLayout', array($parameters));
    }

    /**
     * Get handle for account of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group.
     *
     * @param DebtorGroup_GetAccount $parameters
     * @return DebtorGroup_GetAccountResponse
     */
    public function DebtorGroup_GetAccount(DebtorGroup_GetAccount $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetAccount', array($parameters));
    }

    /**
     * Set the account of a debtor group.<br />Parameters: debtorGroupHandle: Handle for the debtor group. valueHandle: New handle for new account of the debtor group.
     *
     * @param DebtorGroup_SetAccount $parameters
     * @return DebtorGroup_SetAccountResponse
     */
    public function DebtorGroup_SetAccount(DebtorGroup_SetAccount $parameters)
    {
      return $this->__soapCall('DebtorGroup_SetAccount', array($parameters));
    }

    /**
     * Creates a new debtor group.
     *
     * @param DebtorGroup_Create $parameters
     * @return DebtorGroup_CreateResponse
     */
    public function DebtorGroup_Create(DebtorGroup_Create $parameters)
    {
      return $this->__soapCall('DebtorGroup_Create', array($parameters));
    }

    /**
     * Returns handles for all debtor groups.
     *
     * @param DebtorGroup_GetAll $parameters
     * @return DebtorGroup_GetAllResponse
     */
    public function DebtorGroup_GetAll(DebtorGroup_GetAll $parameters)
    {
      return $this->__soapCall('DebtorGroup_GetAll', array($parameters));
    }

    /**
     * Returns handles for current invoice lines that uses a given products.<br />Parameters: product: The product to search for.
     *
     * @param CurrentInvoiceLine_FindByProduct $parameters
     * @return CurrentInvoiceLine_FindByProductResponse
     */
    public function CurrentInvoiceLine_FindByProduct(CurrentInvoiceLine_FindByProduct $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_FindByProduct', array($parameters));
    }

    /**
     * Returns handles for current invoice lines that uses a given set of products.<br />Parameters: products: The products to search for.
     *
     * @param CurrentInvoiceLine_FindByProductList $parameters
     * @return CurrentInvoiceLine_FindByProductListResponse
     */
    public function CurrentInvoiceLine_FindByProductList(CurrentInvoiceLine_FindByProductList $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_FindByProductList', array($parameters));
    }

    /**
     * Deletes a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_Delete $parameters
     * @return CurrentInvoiceLine_DeleteResponse
     */
    public function CurrentInvoiceLine_Delete(CurrentInvoiceLine_Delete $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_Delete', array($parameters));
    }

    /**
     * Creates a new current supplier invoice from a data object.<br />Parameters: data: The data object that specifies the properties of the new current supplier invoice.
     *
     * @param CurrentSupplierInvoice_CreateFromData $parameters
     * @return CurrentSupplierInvoice_CreateFromDataResponse
     */
    public function CurrentSupplierInvoice_CreateFromData(CurrentSupplierInvoice_CreateFromData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_CreateFromData', array($parameters));
    }

    /**
     * Creates new current supplier invoices from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new current supplier invoices.
     *
     * @param CurrentSupplierInvoice_CreateFromDataArray $parameters
     * @return CurrentSupplierInvoice_CreateFromDataArrayResponse
     */
    public function CurrentSupplierInvoice_CreateFromDataArray(CurrentSupplierInvoice_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_CreateFromDataArray', array($parameters));
    }

    /**
     * Update current supplier invoices from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CurrentSupplierInvoice_UpdateFromDataArray $parameters
     * @return CurrentSupplierInvoice_UpdateFromDataArrayResponse
     */
    public function CurrentSupplierInvoice_UpdateFromDataArray(CurrentSupplierInvoice_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a current supplier invoice from a data object.<br />Parameters: data: The data object.
     *
     * @param CurrentSupplierInvoice_UpdateFromData $parameters
     * @return CurrentSupplierInvoice_UpdateFromDataResponse
     */
    public function CurrentSupplierInvoice_UpdateFromData(CurrentSupplierInvoice_UpdateFromData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_UpdateFromData', array($parameters));
    }

    /**
     * Returns a current supplier invoice data object for a given current supplier invoice.<br />Parameters: entityHandle: A handle for the current supplier invoice.
     *
     * @param CurrentSupplierInvoice_GetData $parameters
     * @return CurrentSupplierInvoice_GetDataResponse
     */
    public function CurrentSupplierInvoice_GetData(CurrentSupplierInvoice_GetData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetData', array($parameters));
    }

    /**
     * Returns current supplier invoice data objects for a given set of current invoice handles.<br />Parameters: entityHandles: An array of the current supplier invoice handles.
     *
     * @param CurrentSupplierInvoice_GetDataArray $parameters
     * @return CurrentSupplierInvoice_GetDataArrayResponse
     */
    public function CurrentSupplierInvoice_GetDataArray(CurrentSupplierInvoice_GetDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetDataArray', array($parameters));
    }

    /**
     * Creates a new current supplier invoice.<br />Parameters: creditor: Handle for a creditor.
     *
     * @param CurrentSupplierInvoice_Create $parameters
     * @return CurrentSupplierInvoice_CreateResponse
     */
    public function CurrentSupplierInvoice_Create(CurrentSupplierInvoice_Create $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_Create', array($parameters));
    }

    /**
     * Returns handles for all current supplier invoices.
     *
     * @param CurrentSupplierInvoice_GetAll $parameters
     * @return CurrentSupplierInvoice_GetAllResponse
     */
    public function CurrentSupplierInvoice_GetAll(CurrentSupplierInvoice_GetAll $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetAll', array($parameters));
    }

    /**
     * Gets handles for the lines of a current supplier invoice.<br />Parameters: currentSupplierInvoiceHandle: Handle for the current supplier invoice.
     *
     * @param CurrentSupplierInvoice_GetLines $parameters
     * @return CurrentSupplierInvoice_GetLinesResponse
     */
    public function CurrentSupplierInvoice_GetLines(CurrentSupplierInvoice_GetLines $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetLines', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoice_TotalAmount $parameters
     * @return CurrentSupplierInvoice_TotalAmountResponse
     */
    public function CurrentSupplierInvoice_TotalAmount(CurrentSupplierInvoice_TotalAmount $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_TotalAmount', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoice_GetId $parameters
     * @return CurrentSupplierInvoice_GetIdResponse
     */
    public function CurrentSupplierInvoice_GetId(CurrentSupplierInvoice_GetId $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetId', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoice_GetCreditor $parameters
     * @return CurrentSupplierInvoice_GetCreditorResponse
     */
    public function CurrentSupplierInvoice_GetCreditor(CurrentSupplierInvoice_GetCreditor $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_GetCreditor', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoice_SetCreditor $parameters
     * @return CurrentSupplierInvoice_SetCreditorResponse
     */
    public function CurrentSupplierInvoice_SetCreditor(CurrentSupplierInvoice_SetCreditor $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoice_SetCreditor', array($parameters));
    }

    /**
     * Creates a new current supplier invoice line from a data object.<br />Parameters: data: The data object that specifies the properties of the new current supplier invoice line.
     *
     * @param CurrentSupplierInvoiceLine_CreateFromData $parameters
     * @return CurrentSupplierInvoiceLine_CreateFromDataResponse
     */
    public function CurrentSupplierInvoiceLine_CreateFromData(CurrentSupplierInvoiceLine_CreateFromData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_CreateFromData', array($parameters));
    }

    /**
     * Creates new current supplier invoice lines from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new current supplier invoice lines.
     *
     * @param CurrentSupplierInvoiceLine_CreateFromDataArray $parameters
     * @return CurrentSupplierInvoiceLine_CreateFromDataArrayResponse
     */
    public function CurrentSupplierInvoiceLine_CreateFromDataArray(CurrentSupplierInvoiceLine_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_CreateFromDataArray', array($parameters));
    }

    /**
     * Update current supplier invoice lines from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CurrentSupplierInvoiceLine_UpdateFromDataArray $parameters
     * @return CurrentSupplierInvoiceLine_UpdateFromDataArrayResponse
     */
    public function CurrentSupplierInvoiceLine_UpdateFromDataArray(CurrentSupplierInvoiceLine_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a current supplier invoice line from a data object.<br />Parameters: data: The data object.
     *
     * @param CurrentSupplierInvoiceLine_UpdateFromData $parameters
     * @return CurrentSupplierInvoiceLine_UpdateFromDataResponse
     */
    public function CurrentSupplierInvoiceLine_UpdateFromData(CurrentSupplierInvoiceLine_UpdateFromData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_UpdateFromData', array($parameters));
    }

    /**
     * Returns a current supplier invoice line data object for a given current supplier invoice line.<br />Parameters: entityHandle: A handle for the current supplier invoice line.
     *
     * @param CurrentSupplierInvoiceLine_GetData $parameters
     * @return CurrentSupplierInvoiceLine_GetDataResponse
     */
    public function CurrentSupplierInvoiceLine_GetData(CurrentSupplierInvoiceLine_GetData $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetData', array($parameters));
    }

    /**
     * Returns current supplier invoice line data objects for current supplier invoice lines.<br />Parameters: entityHandles: The array of current supplier invoice line handles.
     *
     * @param CurrentSupplierInvoiceLine_GetDataArray $parameters
     * @return CurrentSupplierInvoiceLine_GetDataArrayResponse
     */
    public function CurrentSupplierInvoiceLine_GetDataArray(CurrentSupplierInvoiceLine_GetDataArray $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetDataArray', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_GetInvoice $parameters
     * @return CurrentSupplierInvoiceLine_GetInvoiceResponse
     */
    public function CurrentSupplierInvoiceLine_GetInvoice(CurrentSupplierInvoiceLine_GetInvoice $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetInvoice', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_SetProduct $parameters
     * @return CurrentSupplierInvoiceLine_SetProductResponse
     */
    public function CurrentSupplierInvoiceLine_SetProduct(CurrentSupplierInvoiceLine_SetProduct $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_SetProduct', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_GetProduct $parameters
     * @return CurrentSupplierInvoiceLine_GetProductResponse
     */
    public function CurrentSupplierInvoiceLine_GetProduct(CurrentSupplierInvoiceLine_GetProduct $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetProduct', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_SetQuantity $parameters
     * @return CurrentSupplierInvoiceLine_SetQuantityResponse
     */
    public function CurrentSupplierInvoiceLine_SetQuantity(CurrentSupplierInvoiceLine_SetQuantity $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_SetQuantity', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_GetQuantity $parameters
     * @return CurrentSupplierInvoiceLine_GetQuantityResponse
     */
    public function CurrentSupplierInvoiceLine_GetQuantity(CurrentSupplierInvoiceLine_GetQuantity $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetQuantity', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_GetUnitPrice $parameters
     * @return CurrentSupplierInvoiceLine_GetUnitPriceResponse
     */
    public function CurrentSupplierInvoiceLine_GetUnitPrice(CurrentSupplierInvoiceLine_GetUnitPrice $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_GetUnitPrice', array($parameters));
    }

    /**
     * @param CurrentSupplierInvoiceLine_SetUnitPrice $parameters
     * @return CurrentSupplierInvoiceLine_SetUnitPriceResponse
     */
    public function CurrentSupplierInvoiceLine_SetUnitPrice(CurrentSupplierInvoiceLine_SetUnitPrice $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_SetUnitPrice', array($parameters));
    }

    /**
     * Creates a new current invoice line.<br />Parameters: invoiceHandle: Handle for a current supplier invoice. productHandle: Handle for a product
     *
     * @param CurrentSupplierInvoiceLine_Create $parameters
     * @return CurrentSupplierInvoiceLine_CreateResponse
     */
    public function CurrentSupplierInvoiceLine_Create(CurrentSupplierInvoiceLine_Create $parameters)
    {
      return $this->__soapCall('CurrentSupplierInvoiceLine_Create', array($parameters));
    }

    /**
     * Creates a new debtor from a data object.<br />Parameters: data: The data object that specifies the properties of the new debtor.
     *
     * @param Debtor_CreateFromData $parameters
     * @return Debtor_CreateFromDataResponse
     */
    public function Debtor_CreateFromData(Debtor_CreateFromData $parameters)
    {
      return $this->__soapCall('Debtor_CreateFromData', array($parameters));
    }

    /**
     * Creates new debtors from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new debtors.
     *
     * @param Debtor_CreateFromDataArray $parameters
     * @return Debtor_CreateFromDataArrayResponse
     */
    public function Debtor_CreateFromDataArray(Debtor_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Debtor_CreateFromDataArray', array($parameters));
    }

    /**
     * Update debtors from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Debtor_UpdateFromDataArray $parameters
     * @return Debtor_UpdateFromDataArrayResponse
     */
    public function Debtor_UpdateFromDataArray(Debtor_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Debtor_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a debtor from a data object.<br />Parameters: data: The data object.
     *
     * @param Debtor_UpdateFromData $parameters
     * @return Debtor_UpdateFromDataResponse
     */
    public function Debtor_UpdateFromData(Debtor_UpdateFromData $parameters)
    {
      return $this->__soapCall('Debtor_UpdateFromData', array($parameters));
    }

    /**
     * Returns a debtor data object for a given debtor.<br />Parameters: entityHandle: A handle for the debtor.
     *
     * @param Debtor_GetData $parameters
     * @return Debtor_GetDataResponse
     */
    public function Debtor_GetData(Debtor_GetData $parameters)
    {
      return $this->__soapCall('Debtor_GetData', array($parameters));
    }

    /**
     * Returns debtor data objects for a given set of debtor handles.<br />Parameters: entityHandles: An array of the debtor handles.
     *
     * @param Debtor_GetDataArray $parameters
     * @return Debtor_GetDataArrayResponse
     */
    public function Debtor_GetDataArray(Debtor_GetDataArray $parameters)
    {
      return $this->__soapCall('Debtor_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetNumber $parameters
     * @return Debtor_GetNumberResponse
     */
    public function Debtor_GetNumber(Debtor_GetNumber $parameters)
    {
      return $this->__soapCall('Debtor_GetNumber', array($parameters));
    }

    /**
     * Sets the debtor group of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. valueHandle: Handle for new debtor group of the debtor.
     *
     * @param Debtor_SetDebtorGroup $parameters
     * @return Debtor_SetDebtorGroupResponse
     */
    public function Debtor_SetDebtorGroup(Debtor_SetDebtorGroup $parameters)
    {
      return $this->__soapCall('Debtor_SetDebtorGroup', array($parameters));
    }

    /**
     * Gets handle for debtor group of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetDebtorGroup $parameters
     * @return Debtor_GetDebtorGroupResponse
     */
    public function Debtor_GetDebtorGroup(Debtor_GetDebtorGroup $parameters)
    {
      return $this->__soapCall('Debtor_GetDebtorGroup', array($parameters));
    }

    /**
     * Gets the name of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetName $parameters
     * @return Debtor_GetNameResponse
     */
    public function Debtor_GetName(Debtor_GetName $parameters)
    {
      return $this->__soapCall('Debtor_GetName', array($parameters));
    }

    /**
     * Sets the name of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new name of the debtor.
     *
     * @param Debtor_SetName $parameters
     * @return Debtor_SetNameResponse
     */
    public function Debtor_SetName(Debtor_SetName $parameters)
    {
      return $this->__soapCall('Debtor_SetName', array($parameters));
    }

    /**
     * Sets vat zone of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: Handle for new vat zone of the debtor.
     *
     * @param Debtor_SetVatZone $parameters
     * @return Debtor_SetVatZoneResponse
     */
    public function Debtor_SetVatZone(Debtor_SetVatZone $parameters)
    {
      return $this->__soapCall('Debtor_SetVatZone', array($parameters));
    }

    /**
     * Gets handle for vat zone of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetVatZone $parameters
     * @return Debtor_GetVatZoneResponse
     */
    public function Debtor_GetVatZone(Debtor_GetVatZone $parameters)
    {
      return $this->__soapCall('Debtor_GetVatZone', array($parameters));
    }

    /**
     * Gets currency of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCurrency $parameters
     * @return Debtor_GetCurrencyResponse
     */
    public function Debtor_GetCurrency(Debtor_GetCurrency $parameters)
    {
      return $this->__soapCall('Debtor_GetCurrency', array($parameters));
    }

    /**
     * Sets currency of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: Handle for new currency of the debtor.
     *
     * @param Debtor_SetCurrency $parameters
     * @return Debtor_SetCurrencyResponse
     */
    public function Debtor_SetCurrency(Debtor_SetCurrency $parameters)
    {
      return $this->__soapCall('Debtor_SetCurrency', array($parameters));
    }

    /**
     * Sets the price group of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: Handle for the new price group of the debtor.
     *
     * @param Debtor_SetPriceGroup $parameters
     * @return Debtor_SetPriceGroupResponse
     */
    public function Debtor_SetPriceGroup(Debtor_SetPriceGroup $parameters)
    {
      return $this->__soapCall('Debtor_SetPriceGroup', array($parameters));
    }

    /**
     * Gets the price group of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetPriceGroup $parameters
     * @return Debtor_GetPriceGroupResponse
     */
    public function Debtor_GetPriceGroup(Debtor_GetPriceGroup $parameters)
    {
      return $this->__soapCall('Debtor_GetPriceGroup', array($parameters));
    }

    /**
     * Sets whether a debtor is accessible.<br />Parameters: debtorHandle: Handle for the debtor. value: Value that indicates whether the debtor should be accessible.
     *
     * @param Debtor_SetIsAccessible $parameters
     * @return Debtor_SetIsAccessibleResponse
     */
    public function Debtor_SetIsAccessible(Debtor_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Debtor_SetIsAccessible', array($parameters));
    }

    /**
     * Gets whether a debtor is accessible.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetIsAccessible $parameters
     * @return Debtor_GetIsAccessibleResponse
     */
    public function Debtor_GetIsAccessible(Debtor_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Debtor_GetIsAccessible', array($parameters));
    }

    /**
     * Gets EAN of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetEan $parameters
     * @return Debtor_GetEanResponse
     */
    public function Debtor_GetEan(Debtor_GetEan $parameters)
    {
      return $this->__soapCall('Debtor_GetEan', array($parameters));
    }

    /**
     * Sets EAN of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new EAN of the debtor.
     *
     * @param Debtor_SetEan $parameters
     * @return Debtor_SetEanResponse
     */
    public function Debtor_SetEan(Debtor_SetEan $parameters)
    {
      return $this->__soapCall('Debtor_SetEan', array($parameters));
    }

    /**
     * Gets the public entry number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetPublicEntryNumber $parameters
     * @return Debtor_GetPublicEntryNumberResponse
     */
    public function Debtor_GetPublicEntryNumber(Debtor_GetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Debtor_GetPublicEntryNumber', array($parameters));
    }

    /**
     * Sets the public entry number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new public entry number of the debtor.
     *
     * @param Debtor_SetPublicEntryNumber $parameters
     * @return Debtor_SetPublicEntryNumberResponse
     */
    public function Debtor_SetPublicEntryNumber(Debtor_SetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('Debtor_SetPublicEntryNumber', array($parameters));
    }

    /**
     * Get the email of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetEmail $parameters
     * @return Debtor_GetEmailResponse
     */
    public function Debtor_GetEmail(Debtor_GetEmail $parameters)
    {
      return $this->__soapCall('Debtor_GetEmail', array($parameters));
    }

    /**
     * Set the email of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new email of the debtor.
     *
     * @param Debtor_SetEmail $parameters
     * @return Debtor_SetEmailResponse
     */
    public function Debtor_SetEmail(Debtor_SetEmail $parameters)
    {
      return $this->__soapCall('Debtor_SetEmail', array($parameters));
    }

    /**
     * Sets the telephone and fax number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new telephone and fax number of the debtor.
     *
     * @param Debtor_SetTelephoneAndFaxNumber $parameters
     * @return Debtor_SetTelephoneAndFaxNumberResponse
     */
    public function Debtor_SetTelephoneAndFaxNumber(Debtor_SetTelephoneAndFaxNumber $parameters)
    {
      return $this->__soapCall('Debtor_SetTelephoneAndFaxNumber', array($parameters));
    }

    /**
     * Gets the telephone and fax number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetTelephoneAndFaxNumber $parameters
     * @return Debtor_GetTelephoneAndFaxNumberResponse
     */
    public function Debtor_GetTelephoneAndFaxNumber(Debtor_GetTelephoneAndFaxNumber $parameters)
    {
      return $this->__soapCall('Debtor_GetTelephoneAndFaxNumber', array($parameters));
    }

    /**
     * Sets the website of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new website of the debtor.
     *
     * @param Debtor_SetWebsite $parameters
     * @return Debtor_SetWebsiteResponse
     */
    public function Debtor_SetWebsite(Debtor_SetWebsite $parameters)
    {
      return $this->__soapCall('Debtor_SetWebsite', array($parameters));
    }

    /**
     * Gets the website of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetWebsite $parameters
     * @return Debtor_GetWebsiteResponse
     */
    public function Debtor_GetWebsite(Debtor_GetWebsite $parameters)
    {
      return $this->__soapCall('Debtor_GetWebsite', array($parameters));
    }

    /**
     * Gets the address of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetAddress $parameters
     * @return Debtor_GetAddressResponse
     */
    public function Debtor_GetAddress(Debtor_GetAddress $parameters)
    {
      return $this->__soapCall('Debtor_GetAddress', array($parameters));
    }

    /**
     * Sets the address of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new address of the debtor.
     *
     * @param Debtor_SetAddress $parameters
     * @return Debtor_SetAddressResponse
     */
    public function Debtor_SetAddress(Debtor_SetAddress $parameters)
    {
      return $this->__soapCall('Debtor_SetAddress', array($parameters));
    }

    /**
     * Gets the postal code of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetPostalCode $parameters
     * @return Debtor_GetPostalCodeResponse
     */
    public function Debtor_GetPostalCode(Debtor_GetPostalCode $parameters)
    {
      return $this->__soapCall('Debtor_GetPostalCode', array($parameters));
    }

    /**
     * Sets the postal code of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new postal code of the debtor.
     *
     * @param Debtor_SetPostalCode $parameters
     * @return Debtor_SetPostalCodeResponse
     */
    public function Debtor_SetPostalCode(Debtor_SetPostalCode $parameters)
    {
      return $this->__soapCall('Debtor_SetPostalCode', array($parameters));
    }

    /**
     * Gets the city of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCity $parameters
     * @return Debtor_GetCityResponse
     */
    public function Debtor_GetCity(Debtor_GetCity $parameters)
    {
      return $this->__soapCall('Debtor_GetCity', array($parameters));
    }

    /**
     * Sets the city of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new city of the debtor.
     *
     * @param Debtor_SetCity $parameters
     * @return Debtor_SetCityResponse
     */
    public function Debtor_SetCity(Debtor_SetCity $parameters)
    {
      return $this->__soapCall('Debtor_SetCity', array($parameters));
    }

    /**
     * Sets the country of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new country of the debtor.
     *
     * @param Debtor_SetCountry $parameters
     * @return Debtor_SetCountryResponse
     */
    public function Debtor_SetCountry(Debtor_SetCountry $parameters)
    {
      return $this->__soapCall('Debtor_SetCountry', array($parameters));
    }

    /**
     * Gets the country of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCountry $parameters
     * @return Debtor_GetCountryResponse
     */
    public function Debtor_GetCountry(Debtor_GetCountry $parameters)
    {
      return $this->__soapCall('Debtor_GetCountry', array($parameters));
    }

    /**
     * Sets the credit maximum of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new credit maximum of the debtor.
     *
     * @param Debtor_SetCreditMaximum $parameters
     * @return Debtor_SetCreditMaximumResponse
     */
    public function Debtor_SetCreditMaximum(Debtor_SetCreditMaximum $parameters)
    {
      return $this->__soapCall('Debtor_SetCreditMaximum', array($parameters));
    }

    /**
     * Gets the credit maximum of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCreditMaximum $parameters
     * @return Debtor_GetCreditMaximumResponse
     */
    public function Debtor_GetCreditMaximum(Debtor_GetCreditMaximum $parameters)
    {
      return $this->__soapCall('Debtor_GetCreditMaximum', array($parameters));
    }

    /**
     * Gets the VatNumber of a debtor. (SE,UK only)<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetVatNumber $parameters
     * @return Debtor_GetVatNumberResponse
     */
    public function Debtor_GetVatNumber(Debtor_GetVatNumber $parameters)
    {
      return $this->__soapCall('Debtor_GetVatNumber', array($parameters));
    }

    /**
     * Sets the VatNumber of a debtor. (SE,UK only)<br />Parameters: debtorHandle: Handle for the debtor. value: The new VatNumber of the debtor.
     *
     * @param Debtor_SetVatNumber $parameters
     * @return Debtor_SetVatNumberResponse
     */
    public function Debtor_SetVatNumber(Debtor_SetVatNumber $parameters)
    {
      return $this->__soapCall('Debtor_SetVatNumber', array($parameters));
    }

    /**
     * DEPRECATED! Gets the County of a debtor. (UK only)<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCounty $parameters
     * @return Debtor_GetCountyResponse
     */
    public function Debtor_GetCounty(Debtor_GetCounty $parameters)
    {
      return $this->__soapCall('Debtor_GetCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the County of a debtor. (UK only)<br />Parameters: debtorHandle: Handle for the debtor. value: The new County of the debtor.
     *
     * @param Debtor_SetCounty $parameters
     * @return Debtor_SetCountyResponse
     */
    public function Debtor_SetCounty(Debtor_SetCounty $parameters)
    {
      return $this->__soapCall('Debtor_SetCounty', array($parameters));
    }

    /**
     * Gets the Corporate Identification Number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetCINumber $parameters
     * @return Debtor_GetCINumberResponse
     */
    public function Debtor_GetCINumber(Debtor_GetCINumber $parameters)
    {
      return $this->__soapCall('Debtor_GetCINumber', array($parameters));
    }

    /**
     * Sets the Corporate Identification Number of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. value: The new Corporate Identification Number of the debtor.
     *
     * @param Debtor_SetCINumber $parameters
     * @return Debtor_SetCINumberResponse
     */
    public function Debtor_SetCINumber(Debtor_SetCINumber $parameters)
    {
      return $this->__soapCall('Debtor_SetCINumber', array($parameters));
    }

    /**
     * Sets the term of payment of a debtor. The value may not be omitted.<br />Parameters: debtorHandle: Handle for the debtor. value: Handle for new term of payment of a debtor.
     *
     * @param Debtor_SetTermOfPayment $parameters
     * @return Debtor_SetTermOfPaymentResponse
     */
    public function Debtor_SetTermOfPayment(Debtor_SetTermOfPayment $parameters)
    {
      return $this->__soapCall('Debtor_SetTermOfPayment', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetTermOfPayment $parameters
     * @return Debtor_GetTermOfPaymentResponse
     */
    public function Debtor_GetTermOfPayment(Debtor_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('Debtor_GetTermOfPayment', array($parameters));
    }

    /**
     * Sets the layout of a debtor. The value may be omitted.<br />Parameters: debtorHandle: Handle for the debtor. valueHandle: Handle for new layout of a debtor.
     *
     * @param Debtor_SetLayout $parameters
     * @return Debtor_SetLayoutResponse
     */
    public function Debtor_SetLayout(Debtor_SetLayout $parameters)
    {
      return $this->__soapCall('Debtor_SetLayout', array($parameters));
    }

    /**
     * Gets a handle for the layout of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetLayout $parameters
     * @return Debtor_GetLayoutResponse
     */
    public function Debtor_GetLayout(Debtor_GetLayout $parameters)
    {
      return $this->__soapCall('Debtor_GetLayout', array($parameters));
    }

    /**
     * Gets a handle for the attention of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetAttention $parameters
     * @return Debtor_GetAttentionResponse
     */
    public function Debtor_GetAttention(Debtor_GetAttention $parameters)
    {
      return $this->__soapCall('Debtor_GetAttention', array($parameters));
    }

    /**
     * Sets attention of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. valueHandle: Handle for new attention of the debtor.
     *
     * @param Debtor_SetAttention $parameters
     * @return Debtor_SetAttentionResponse
     */
    public function Debtor_SetAttention(Debtor_SetAttention $parameters)
    {
      return $this->__soapCall('Debtor_SetAttention', array($parameters));
    }

    /**
     * Sets 'your reference' of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. valueHandle: Handle for 'your reference' of the debtor.
     *
     * @param Debtor_SetYourReference $parameters
     * @return Debtor_SetYourReferenceResponse
     */
    public function Debtor_SetYourReference(Debtor_SetYourReference $parameters)
    {
      return $this->__soapCall('Debtor_SetYourReference', array($parameters));
    }

    /**
     * Gets a handle for 'your reference' of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetYourReference $parameters
     * @return Debtor_GetYourReferenceResponse
     */
    public function Debtor_GetYourReference(Debtor_GetYourReference $parameters)
    {
      return $this->__soapCall('Debtor_GetYourReference', array($parameters));
    }

    /**
     * Gets a handle for 'our reference' of a debtor.<br />Parameters: debtorHandle: Handle for the debtor.
     *
     * @param Debtor_GetOurReference $parameters
     * @return Debtor_GetOurReferenceResponse
     */
    public function Debtor_GetOurReference(Debtor_GetOurReference $parameters)
    {
      return $this->__soapCall('Debtor_GetOurReference', array($parameters));
    }

    /**
     * Sets 'our reference' of a debtor.<br />Parameters: debtorHandle: Handle for the debtor. valueHandle: Handle for 'our reference' of the debtor.
     *
     * @param Debtor_SetOurReference $parameters
     * @return Debtor_SetOurReferenceResponse
     */
    public function Debtor_SetOurReference(Debtor_SetOurReference $parameters)
    {
      return $this->__soapCall('Debtor_SetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetTermOfPayment $parameters
     * @return CurrentInvoice_GetTermOfPaymentResponse
     */
    public function CurrentInvoice_GetTermOfPayment(CurrentInvoice_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetTermOfPayment', array($parameters));
    }

    /**
     * Set the term of payment of a current invoice. The due date is calculated accordingly.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new term of payment of the current invoice.
     *
     * @param CurrentInvoice_SetTermOfPayment $parameters
     * @return CurrentInvoice_SetTermOfPaymentResponse
     */
    public function CurrentInvoice_SetTermOfPayment(CurrentInvoice_SetTermOfPayment $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetTermOfPayment', array($parameters));
    }

    /**
     * Gets the due date of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDueDate $parameters
     * @return CurrentInvoice_GetDueDateResponse
     */
    public function CurrentInvoice_GetDueDate(CurrentInvoice_GetDueDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDueDate', array($parameters));
    }

    /**
     * Set the due date of a current invoice. It is only allowed to set the due date to an actual date when the type of TermOfPayment is set to DueDate.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new due date of the current invoice.
     *
     * @param CurrentInvoice_SetDueDate $parameters
     * @return CurrentInvoice_SetDueDateResponse
     */
    public function CurrentInvoice_SetDueDate(CurrentInvoice_SetDueDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDueDate', array($parameters));
    }

    /**
     * Gets the currency of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetCurrency $parameters
     * @return CurrentInvoice_GetCurrencyResponse
     */
    public function CurrentInvoice_GetCurrency(CurrentInvoice_GetCurrency $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetCurrency', array($parameters));
    }

    /**
     * Set the currency of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new currency of the current invoice.
     *
     * @param CurrentInvoice_SetCurrency $parameters
     * @return CurrentInvoice_SetCurrencyResponse
     */
    public function CurrentInvoice_SetCurrency(CurrentInvoice_SetCurrency $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetCurrency', array($parameters));
    }

    /**
     * Gets the exchange rate of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetExchangeRate $parameters
     * @return CurrentInvoice_GetExchangeRateResponse
     */
    public function CurrentInvoice_GetExchangeRate(CurrentInvoice_GetExchangeRate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetExchangeRate', array($parameters));
    }

    /**
     * Set the exchange rate of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: New exchange of the current invoice.
     *
     * @param CurrentInvoice_SetExchangeRate $parameters
     * @return CurrentInvoice_SetExchangeRateResponse
     */
    public function CurrentInvoice_SetExchangeRate(CurrentInvoice_SetExchangeRate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetExchangeRate', array($parameters));
    }

    /**
     * Gets whether the current invoice has VAT included.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetIsVatIncluded $parameters
     * @return CurrentInvoice_GetIsVatIncludedResponse
     */
    public function CurrentInvoice_GetIsVatIncluded(CurrentInvoice_GetIsVatIncluded $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetIsVatIncluded', array($parameters));
    }

    /**
     * Set whether the current invoice has VAT included.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new layout of the current invoice. value: value indicating whether the current invoice includes VAT or not.
     *
     * @param CurrentInvoice_SetIsVatIncluded $parameters
     * @return CurrentInvoice_SetIsVatIncludedResponse
     */
    public function CurrentInvoice_SetIsVatIncluded(CurrentInvoice_SetIsVatIncluded $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetIsVatIncluded', array($parameters));
    }

    /**
     * Gets the current VAT zone of the CurrentInvoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetVatZone $parameters
     * @return CurrentInvoice_GetVatZoneResponse
     */
    public function CurrentInvoice_GetVatZone(CurrentInvoice_GetVatZone $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetVatZone', array($parameters));
    }

    /**
     * Set the VAT zone of the CurrentInvoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new VAT zone of the current invoice.
     *
     * @param CurrentInvoice_SetVatZone $parameters
     * @return CurrentInvoice_SetVatZoneResponse
     */
    public function CurrentInvoice_SetVatZone(CurrentInvoice_SetVatZone $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetVatZone', array($parameters));
    }

    /**
     * Gets a handle for the layout of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetLayout $parameters
     * @return CurrentInvoice_GetLayoutResponse
     */
    public function CurrentInvoice_GetLayout(CurrentInvoice_GetLayout $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetLayout', array($parameters));
    }

    /**
     * Set the layout of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new layout of the current invoice.
     *
     * @param CurrentInvoice_SetLayout $parameters
     * @return CurrentInvoice_SetLayoutResponse
     */
    public function CurrentInvoice_SetLayout(CurrentInvoice_SetLayout $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetLayout', array($parameters));
    }

    /**
     * Gets a handle for the delivery location of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryLocation $parameters
     * @return CurrentInvoice_GetDeliveryLocationResponse
     */
    public function CurrentInvoice_GetDeliveryLocation(CurrentInvoice_GetDeliveryLocation $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryLocation', array($parameters));
    }

    /**
     * Set the delivery location of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new delivery location of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryLocation $parameters
     * @return CurrentInvoice_SetDeliveryLocationResponse
     */
    public function CurrentInvoice_SetDeliveryLocation(CurrentInvoice_SetDeliveryLocation $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryLocation', array($parameters));
    }

    /**
     * Gets the delivery address of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryAddress $parameters
     * @return CurrentInvoice_GetDeliveryAddressResponse
     */
    public function CurrentInvoice_GetDeliveryAddress(CurrentInvoice_GetDeliveryAddress $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryAddress', array($parameters));
    }

    /**
     * Set the delivery address of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new delivery address of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryAddress $parameters
     * @return CurrentInvoice_SetDeliveryAddressResponse
     */
    public function CurrentInvoice_SetDeliveryAddress(CurrentInvoice_SetDeliveryAddress $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryAddress', array($parameters));
    }

    /**
     * Gets the delivery postal code of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryPostalCode $parameters
     * @return CurrentInvoice_GetDeliveryPostalCodeResponse
     */
    public function CurrentInvoice_GetDeliveryPostalCode(CurrentInvoice_GetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryPostalCode', array($parameters));
    }

    /**
     * Set the delivery postal code of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new delivery postal code of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryPostalCode $parameters
     * @return CurrentInvoice_SetDeliveryPostalCodeResponse
     */
    public function CurrentInvoice_SetDeliveryPostalCode(CurrentInvoice_SetDeliveryPostalCode $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryPostalCode', array($parameters));
    }

    /**
     * Gets the delivery city of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryCity $parameters
     * @return CurrentInvoice_GetDeliveryCityResponse
     */
    public function CurrentInvoice_GetDeliveryCity(CurrentInvoice_GetDeliveryCity $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryCity', array($parameters));
    }

    /**
     * Set the delivery city of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new delivery city of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryCity $parameters
     * @return CurrentInvoice_SetDeliveryCityResponse
     */
    public function CurrentInvoice_SetDeliveryCity(CurrentInvoice_SetDeliveryCity $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryCity', array($parameters));
    }

    /**
     * Gets the delivery country of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryCountry $parameters
     * @return CurrentInvoice_GetDeliveryCountryResponse
     */
    public function CurrentInvoice_GetDeliveryCountry(CurrentInvoice_GetDeliveryCountry $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryCountry', array($parameters));
    }

    /**
     * Set the delivery country of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new delivery country of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryCountry $parameters
     * @return CurrentInvoice_SetDeliveryCountryResponse
     */
    public function CurrentInvoice_SetDeliveryCountry(CurrentInvoice_SetDeliveryCountry $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryCountry', array($parameters));
    }

    /**
     * Gets the terms of delivery of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetTermsOfDelivery $parameters
     * @return CurrentInvoice_GetTermsOfDeliveryResponse
     */
    public function CurrentInvoice_GetTermsOfDelivery(CurrentInvoice_GetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetTermsOfDelivery', array($parameters));
    }

    /**
     * Sets the terms of delivery of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the currentInvoice. value: The new terms of delivery of the current invoice.
     *
     * @param CurrentInvoice_SetTermsOfDelivery $parameters
     * @return CurrentInvoice_SetTermsOfDeliveryResponse
     */
    public function CurrentInvoice_SetTermsOfDelivery(CurrentInvoice_SetTermsOfDelivery $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetTermsOfDelivery', array($parameters));
    }

    /**
     * Gets the delivery date of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeliveryDate $parameters
     * @return CurrentInvoice_GetDeliveryDateResponse
     */
    public function CurrentInvoice_GetDeliveryDate(CurrentInvoice_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryDate', array($parameters));
    }

    /**
     * Set the delivery date of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new delivery date of the current invoice.
     *
     * @param CurrentInvoice_SetDeliveryDate $parameters
     * @return CurrentInvoice_SetDeliveryDateResponse
     */
    public function CurrentInvoice_SetDeliveryDate(CurrentInvoice_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets the heading of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetHeading $parameters
     * @return CurrentInvoice_GetHeadingResponse
     */
    public function CurrentInvoice_GetHeading(CurrentInvoice_GetHeading $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetHeading', array($parameters));
    }

    /**
     * Set the heading of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new heading of the current invoice.
     *
     * @param CurrentInvoice_SetHeading $parameters
     * @return CurrentInvoice_SetHeadingResponse
     */
    public function CurrentInvoice_SetHeading(CurrentInvoice_SetHeading $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetHeading', array($parameters));
    }

    /**
     * Gets the primary line of text of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetTextLine1 $parameters
     * @return CurrentInvoice_GetTextLine1Response
     */
    public function CurrentInvoice_GetTextLine1(CurrentInvoice_GetTextLine1 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetTextLine1', array($parameters));
    }

    /**
     * Set the primary line of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new primary line of text of the current invoice.
     *
     * @param CurrentInvoice_SetTextLine1 $parameters
     * @return CurrentInvoice_SetTextLine1Response
     */
    public function CurrentInvoice_SetTextLine1(CurrentInvoice_SetTextLine1 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetTextLine1', array($parameters));
    }

    /**
     * Gets the secondary line of text of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetTextLine2 $parameters
     * @return CurrentInvoice_GetTextLine2Response
     */
    public function CurrentInvoice_GetTextLine2(CurrentInvoice_GetTextLine2 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetTextLine2', array($parameters));
    }

    /**
     * Set the secondary line of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new secondary line of text of the current invoice.
     *
     * @param CurrentInvoice_SetTextLine2 $parameters
     * @return CurrentInvoice_SetTextLine2Response
     */
    public function CurrentInvoice_SetTextLine2(CurrentInvoice_SetTextLine2 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetTextLine2', array($parameters));
    }

    /**
     * Gets the other reference of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetOtherReference $parameters
     * @return CurrentInvoice_GetOtherReferenceResponse
     */
    public function CurrentInvoice_GetOtherReference(CurrentInvoice_GetOtherReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetOtherReference', array($parameters));
    }

    /**
     * Set the other reference of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new other reference of the current invoice.
     *
     * @param CurrentInvoice_SetOtherReference $parameters
     * @return CurrentInvoice_SetOtherReferenceResponse
     */
    public function CurrentInvoice_SetOtherReference(CurrentInvoice_SetOtherReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetOtherReference', array($parameters));
    }

    /**
     * Gets the total amount for all the lines without VAT if the current invoice (in the currency of that current invoice).<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetNetAmount $parameters
     * @return CurrentInvoice_GetNetAmountResponse
     */
    public function CurrentInvoice_GetNetAmount(CurrentInvoice_GetNetAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetNetAmount', array($parameters));
    }

    /**
     * Gets the total VAT amount for all the lines of a current invoice (in the currency of that current invoice).<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetVatAmount $parameters
     * @return CurrentInvoice_GetVatAmountResponse
     */
    public function CurrentInvoice_GetVatAmount(CurrentInvoice_GetVatAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetVatAmount', array($parameters));
    }

    /**
     * Gets the total gross amount for all the lines of a current invoice (in the currency of that current invoice).<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetGrossAmount $parameters
     * @return CurrentInvoice_GetGrossAmountResponse
     */
    public function CurrentInvoice_GetGrossAmount(CurrentInvoice_GetGrossAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetGrossAmount', array($parameters));
    }

    /**
     * Gets the margin of a current invoice (in the currency of that current invoice).<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetMargin $parameters
     * @return CurrentInvoice_GetMarginResponse
     */
    public function CurrentInvoice_GetMargin(CurrentInvoice_GetMargin $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetMargin', array($parameters));
    }

    /**
     * Gets the margin of a current invoice as percent.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetMarginAsPercent $parameters
     * @return CurrentInvoice_GetMarginAsPercentResponse
     */
    public function CurrentInvoice_GetMarginAsPercent(CurrentInvoice_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetMarginAsPercent', array($parameters));
    }

    /**
     * Gets the rounding amount for all lines of the current invoice (in the currency of the invoice).<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetRoundingAmount $parameters
     * @return CurrentInvoice_GetRoundingAmountResponse
     */
    public function CurrentInvoice_GetRoundingAmount(CurrentInvoice_GetRoundingAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetRoundingAmount', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DebtorCounty of a current invoice. (UK only)<br />Parameters: currentInvoiceHandle: Handle for the currentInvoice.
     *
     * @param CurrentInvoice_GetDebtorCounty $parameters
     * @return CurrentInvoice_GetDebtorCountyResponse
     */
    public function CurrentInvoice_GetDebtorCounty(CurrentInvoice_GetDebtorCounty $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DebtorCounty of a current invoice. (UK only)<br />Parameters: currentInvoiceHandle: Handle for the currentInvoice. value: The new DebtorCounty of the currentInvoice.
     *
     * @param CurrentInvoice_SetDebtorCounty $parameters
     * @return CurrentInvoice_SetDebtorCountyResponse
     */
    public function CurrentInvoice_SetDebtorCounty(CurrentInvoice_SetDebtorCounty $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorCounty', array($parameters));
    }

    /**
     * DEPRECATED! Gets the DeliveryCounty of a current invoice. (UK only)<br />Parameters: currentInvoiceHandle: Handle for the currentInvoice.
     *
     * @param CurrentInvoice_GetDeliveryCounty $parameters
     * @return CurrentInvoice_GetDeliveryCountyResponse
     */
    public function CurrentInvoice_GetDeliveryCounty(CurrentInvoice_GetDeliveryCounty $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeliveryCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the DeliveryCounty of a current invoice. (UK only)<br />Parameters: currentInvoiceHandle: Handle for the currentInvoice. value: The new DeliveryCounty of the currentInvoice.
     *
     * @param CurrentInvoice_SetDeliveryCounty $parameters
     * @return CurrentInvoice_SetDeliveryCountyResponse
     */
    public function CurrentInvoice_SetDeliveryCounty(CurrentInvoice_SetDeliveryCounty $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDeliveryCounty', array($parameters));
    }

    /**
     * Gets the deduction amount of the current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDeductionAmount $parameters
     * @return CurrentInvoice_GetDeductionAmountResponse
     */
    public function CurrentInvoice_GetDeductionAmount(CurrentInvoice_GetDeductionAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDeductionAmount', array($parameters));
    }

    /**
     * Creates a new current invoice line from a data object.<br />Parameters: data: The data object that specifies the properties of the new current invoice line.
     *
     * @param CurrentInvoiceLine_CreateFromData $parameters
     * @return CurrentInvoiceLine_CreateFromDataResponse
     */
    public function CurrentInvoiceLine_CreateFromData(CurrentInvoiceLine_CreateFromData $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_CreateFromData', array($parameters));
    }

    /**
     * Creates new current invoice lines from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new current invoice lines.
     *
     * @param CurrentInvoiceLine_CreateFromDataArray $parameters
     * @return CurrentInvoiceLine_CreateFromDataArrayResponse
     */
    public function CurrentInvoiceLine_CreateFromDataArray(CurrentInvoiceLine_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_CreateFromDataArray', array($parameters));
    }

    /**
     * Update current invoice lines from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CurrentInvoiceLine_UpdateFromDataArray $parameters
     * @return CurrentInvoiceLine_UpdateFromDataArrayResponse
     */
    public function CurrentInvoiceLine_UpdateFromDataArray(CurrentInvoiceLine_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a current invoice line from a data object.<br />Parameters: data: The data object.
     *
     * @param CurrentInvoiceLine_UpdateFromData $parameters
     * @return CurrentInvoiceLine_UpdateFromDataResponse
     */
    public function CurrentInvoiceLine_UpdateFromData(CurrentInvoiceLine_UpdateFromData $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_UpdateFromData', array($parameters));
    }

    /**
     * Returns a current invoice line data object for a given current invoice line.<br />Parameters: entityHandle: A handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetData $parameters
     * @return CurrentInvoiceLine_GetDataResponse
     */
    public function CurrentInvoiceLine_GetData(CurrentInvoiceLine_GetData $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetData', array($parameters));
    }

    /**
     * Returns current invoice line data objects for current invoice lines.<br />Parameters: entityHandles: The array of current invoice line handles.
     *
     * @param CurrentInvoiceLine_GetDataArray $parameters
     * @return CurrentInvoiceLine_GetDataArrayResponse
     */
    public function CurrentInvoiceLine_GetDataArray(CurrentInvoiceLine_GetDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetNumber $parameters
     * @return CurrentInvoiceLine_GetNumberResponse
     */
    public function CurrentInvoiceLine_GetNumber(CurrentInvoiceLine_GetNumber $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the current invoice of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetInvoice $parameters
     * @return CurrentInvoiceLine_GetInvoiceResponse
     */
    public function CurrentInvoiceLine_GetInvoice(CurrentInvoiceLine_GetInvoice $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetInvoice', array($parameters));
    }

    /**
     * Gets the description of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetDescription $parameters
     * @return CurrentInvoiceLine_GetDescriptionResponse
     */
    public function CurrentInvoiceLine_GetDescription(CurrentInvoiceLine_GetDescription $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDescription', array($parameters));
    }

    /**
     * Sets the description of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new description of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetDescription $parameters
     * @return CurrentInvoiceLine_SetDescriptionResponse
     */
    public function CurrentInvoiceLine_SetDescription(CurrentInvoiceLine_SetDescription $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetDescription', array($parameters));
    }

    /**
     * Gets the delivery date of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetDeliveryDate $parameters
     * @return CurrentInvoiceLine_GetDeliveryDateResponse
     */
    public function CurrentInvoiceLine_GetDeliveryDate(CurrentInvoiceLine_GetDeliveryDate $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDeliveryDate', array($parameters));
    }

    /**
     * Sets the delivery date of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new delivery date of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetDeliveryDate $parameters
     * @return CurrentInvoiceLine_SetDeliveryDateResponse
     */
    public function CurrentInvoiceLine_SetDeliveryDate(CurrentInvoiceLine_SetDeliveryDate $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetDeliveryDate', array($parameters));
    }

    /**
     * Gets a handle for the primary unit of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetUnit $parameters
     * @return CurrentInvoiceLine_GetUnitResponse
     */
    public function CurrentInvoiceLine_GetUnit(CurrentInvoiceLine_GetUnit $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetUnit', array($parameters));
    }

    /**
     * Sets the primary unit of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. valueHandle: Handle for the new primary unit of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetUnit $parameters
     * @return CurrentInvoiceLine_SetUnitResponse
     */
    public function CurrentInvoiceLine_SetUnit(CurrentInvoiceLine_SetUnit $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetUnit', array($parameters));
    }

    /**
     * Sets the product of a current invoice line. Setting the product also sets the unit cost price to the cost price of the product. The product must be set before setting the quantity and the unit net price.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. valueHandle: Handle for the new product of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetProduct $parameters
     * @return CurrentInvoiceLine_SetProductResponse
     */
    public function CurrentInvoiceLine_SetProduct(CurrentInvoiceLine_SetProduct $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetProduct', array($parameters));
    }

    /**
     * Gets a handle for the product of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetProduct $parameters
     * @return CurrentInvoiceLine_GetProductResponse
     */
    public function CurrentInvoiceLine_GetProduct(CurrentInvoiceLine_GetProduct $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetProduct', array($parameters));
    }

    /**
     * Sets the primary quantity of a current invoice line. The product of the current invoice line must be set before setting this property.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new primary quantity of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetQuantity $parameters
     * @return CurrentInvoiceLine_SetQuantityResponse
     */
    public function CurrentInvoiceLine_SetQuantity(CurrentInvoiceLine_SetQuantity $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetQuantity', array($parameters));
    }

    /**
     * Gets the primary quantity of a current invoice line.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetQuantity $parameters
     * @return CurrentInvoiceLine_GetQuantityResponse
     */
    public function CurrentInvoiceLine_GetQuantity(CurrentInvoiceLine_GetQuantity $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetQuantity', array($parameters));
    }

    /**
     * Gets the price per unit without VAT of a current invoice line (in the currency of its current invoice).<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetUnitNetPrice $parameters
     * @return CurrentInvoiceLine_GetUnitNetPriceResponse
     */
    public function CurrentInvoiceLine_GetUnitNetPrice(CurrentInvoiceLine_GetUnitNetPrice $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetUnitNetPrice', array($parameters));
    }

    /**
     * Sets the price per unit without VAT of a current invoice line (in the currency of its current invoice). The product of the current invoice line must be set before setting this property.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new price per unit of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetUnitNetPrice $parameters
     * @return CurrentInvoiceLine_SetUnitNetPriceResponse
     */
    public function CurrentInvoiceLine_SetUnitNetPrice(CurrentInvoiceLine_SetUnitNetPrice $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetUnitNetPrice', array($parameters));
    }

    /**
     * Sets the cost price per unit on a current invoice line if allowed.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new cost price per unit of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetUnitCostPrice $parameters
     * @return CurrentInvoiceLine_SetUnitCostPriceResponse
     */
    public function CurrentInvoiceLine_SetUnitCostPrice(CurrentInvoiceLine_SetUnitCostPrice $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetUnitCostPrice', array($parameters));
    }

    /**
     * Gets the discount of a current invoice line as percent.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetDiscountAsPercent $parameters
     * @return CurrentInvoiceLine_GetDiscountAsPercentResponse
     */
    public function CurrentInvoiceLine_GetDiscountAsPercent(CurrentInvoiceLine_GetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDiscountAsPercent', array($parameters));
    }

    /**
     * Sets the discount of a current invoice line as percent.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: The new discount of the current invoice line as percent.
     *
     * @param CurrentInvoiceLine_SetDiscountAsPercent $parameters
     * @return CurrentInvoiceLine_SetDiscountAsPercentResponse
     */
    public function CurrentInvoiceLine_SetDiscountAsPercent(CurrentInvoiceLine_SetDiscountAsPercent $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetDiscountAsPercent', array($parameters));
    }

    /**
     * Gets the cost price per unit without VAT of a current invoice line (in the default currency).<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetUnitCostPrice $parameters
     * @return CurrentInvoiceLine_GetUnitCostPriceResponse
     */
    public function CurrentInvoiceLine_GetUnitCostPrice(CurrentInvoiceLine_GetUnitCostPrice $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetUnitCostPrice', array($parameters));
    }

    /**
     * Gets the total amount without VAT of a current invoice line (in the currency of its current invoice).<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetTotalNetAmount $parameters
     * @return CurrentInvoiceLine_GetTotalNetAmountResponse
     */
    public function CurrentInvoiceLine_GetTotalNetAmount(CurrentInvoiceLine_GetTotalNetAmount $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetTotalNetAmount', array($parameters));
    }

    /**
     * Gets the margin of a current invoice line (in the currency of its current invoice).<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetTotalMargin $parameters
     * @return CurrentInvoiceLine_GetTotalMarginResponse
     */
    public function CurrentInvoiceLine_GetTotalMargin(CurrentInvoiceLine_GetTotalMargin $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetTotalMargin', array($parameters));
    }

    /**
     * Gets the margin of a current invoice as percent.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetMarginAsPercent $parameters
     * @return CurrentInvoiceLine_GetMarginAsPercentResponse
     */
    public function CurrentInvoiceLine_GetMarginAsPercent(CurrentInvoiceLine_GetMarginAsPercent $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetMarginAsPercent', array($parameters));
    }

    /**
     * Sets the department of a current invoice line. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: Handle for the new department of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetDepartment $parameters
     * @return CurrentInvoiceLine_SetDepartmentResponse
     */
    public function CurrentInvoiceLine_SetDepartment(CurrentInvoiceLine_SetDepartment $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the department of a current invoice line. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetDepartment $parameters
     * @return CurrentInvoiceLine_GetDepartmentResponse
     */
    public function CurrentInvoiceLine_GetDepartment(CurrentInvoiceLine_GetDepartment $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of a current invoice line. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetDistributionKey $parameters
     * @return CurrentInvoiceLine_GetDistributionKeyResponse
     */
    public function CurrentInvoiceLine_GetDistributionKey(CurrentInvoiceLine_GetDistributionKey $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetDistributionKey', array($parameters));
    }

    /**
     * Sets the distribution key of a current invoice line. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: Handle for the new distribution key of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetDistributionKey $parameters
     * @return CurrentInvoiceLine_SetDistributionKeyResponse
     */
    public function CurrentInvoiceLine_SetDistributionKey(CurrentInvoiceLine_SetDistributionKey $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetDistributionKey', array($parameters));
    }

    /**
     * Gets a handle for the inventory location of a current invoice line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line.
     *
     * @param CurrentInvoiceLine_GetInventoryLocation $parameters
     * @return CurrentInvoiceLine_GetInventoryLocationResponse
     */
    public function CurrentInvoiceLine_GetInventoryLocation(CurrentInvoiceLine_GetInventoryLocation $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_GetInventoryLocation', array($parameters));
    }

    /**
     * Sets the inventory location of a current invoice line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: currentInvoiceLineHandle: Handle for the current invoice line. value: Handle for the new inventory location of the current invoice line.
     *
     * @param CurrentInvoiceLine_SetInventoryLocation $parameters
     * @return CurrentInvoiceLine_SetInventoryLocationResponse
     */
    public function CurrentInvoiceLine_SetInventoryLocation(CurrentInvoiceLine_SetInventoryLocation $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_SetInventoryLocation', array($parameters));
    }

    /**
     * Gets a handle for the inventory location of an order line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: orderLineHandle: Handle for the order line.
     *
     * @param OrderLine_GetInventoryLocation $parameters
     * @return OrderLine_GetInventoryLocationResponse
     */
    public function OrderLine_GetInventoryLocation(OrderLine_GetInventoryLocation $parameters)
    {
      return $this->__soapCall('OrderLine_GetInventoryLocation', array($parameters));
    }

    /**
     * Sets the inventory location of a order line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: orderLineHandle: Handle for the order line. value: Handle for the new inventory location of the order line.
     *
     * @param OrderLine_SetInventoryLocation $parameters
     * @return OrderLine_SetInventoryLocationResponse
     */
    public function OrderLine_SetInventoryLocation(OrderLine_SetInventoryLocation $parameters)
    {
      return $this->__soapCall('OrderLine_SetInventoryLocation', array($parameters));
    }

    /**
     * Gets a handle for the inventory location of a quotation line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: quotationLineHandle: Handle for the quotation line.
     *
     * @param QuotationLine_GetInventoryLocation $parameters
     * @return QuotationLine_GetInventoryLocationResponse
     */
    public function QuotationLine_GetInventoryLocation(QuotationLine_GetInventoryLocation $parameters)
    {
      return $this->__soapCall('QuotationLine_GetInventoryLocation', array($parameters));
    }

    /**
     * Sets the inventory location of a quotation line. The inventory location is only accessible when there is access to the Stock add-on module.<br />Parameters: quotationLineHandle: Handle for the current invoice line. value: Handle for the new inventory location of the quotation line.
     *
     * @param QuotationLine_SetInventoryLocation $parameters
     * @return QuotationLine_SetInventoryLocationResponse
     */
    public function QuotationLine_SetInventoryLocation(QuotationLine_SetInventoryLocation $parameters)
    {
      return $this->__soapCall('QuotationLine_SetInventoryLocation', array($parameters));
    }

    /**
     * Creates a new current invoice line.<br />Parameters: invoiceHandle: Handle for a current invoice.
     *
     * @param CurrentInvoiceLine_Create $parameters
     * @return CurrentInvoiceLine_CreateResponse
     */
    public function CurrentInvoiceLine_Create(CurrentInvoiceLine_Create $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_Create', array($parameters));
    }

    /**
     * Gets the account of the creditor entry.<br />
     *
     * @param CreditorEntry_GetAccount $parameters
     * @return CreditorEntry_GetAccountResponse
     */
    public function CreditorEntry_GetAccount(CreditorEntry_GetAccount $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetAccount', array($parameters));
    }

    /**
     * Gets the voucher number of the creditor entry.<br />
     *
     * @param CreditorEntry_GetVoucherNumber $parameters
     * @return CreditorEntry_GetVoucherNumberResponse
     */
    public function CreditorEntry_GetVoucherNumber(CreditorEntry_GetVoucherNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetVoucherNumber', array($parameters));
    }

    /**
     * Gets the text of the creditor entry.<br />
     *
     * @param CreditorEntry_GetText $parameters
     * @return CreditorEntry_GetTextResponse
     */
    public function CreditorEntry_GetText(CreditorEntry_GetText $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetText', array($parameters));
    }

    /**
     * Gets the amount of the creditor entry in the default currency.<br />
     *
     * @param CreditorEntry_GetAmountDefaultCurrency $parameters
     * @return CreditorEntry_GetAmountDefaultCurrencyResponse
     */
    public function CreditorEntry_GetAmountDefaultCurrency(CreditorEntry_GetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets the currency of the creditor entry.<br />
     *
     * @param CreditorEntry_GetCurrency $parameters
     * @return CreditorEntry_GetCurrencyResponse
     */
    public function CreditorEntry_GetCurrency(CreditorEntry_GetCurrency $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetCurrency', array($parameters));
    }

    /**
     * Gets the currency amount of the creditor entry.<br />
     *
     * @param CreditorEntry_GetAmount $parameters
     * @return CreditorEntry_GetAmountResponse
     */
    public function CreditorEntry_GetAmount(CreditorEntry_GetAmount $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetAmount', array($parameters));
    }

    /**
     * Gets the invoice number of the creditor entry.<br />
     *
     * @param CreditorEntry_GetInvoiceNumber $parameters
     * @return CreditorEntry_GetInvoiceNumberResponse
     */
    public function CreditorEntry_GetInvoiceNumber(CreditorEntry_GetInvoiceNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetInvoiceNumber', array($parameters));
    }

    /**
     * Gets the due date of the creditor entry.<br />
     *
     * @param CreditorEntry_GetDueDate $parameters
     * @return CreditorEntry_GetDueDateResponse
     */
    public function CreditorEntry_GetDueDate(CreditorEntry_GetDueDate $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetDueDate', array($parameters));
    }

    /**
     * Gets the currency remainder of the creditor entry.<br />
     *
     * @param CreditorEntry_GetRemainder $parameters
     * @return CreditorEntry_GetRemainderResponse
     */
    public function CreditorEntry_GetRemainder(CreditorEntry_GetRemainder $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetRemainder', array($parameters));
    }

    /**
     * Gets the remainder of the creditor entry in the default currency.<br />
     *
     * @param CreditorEntry_GetRemainderDefaultCurrency $parameters
     * @return CreditorEntry_GetRemainderDefaultCurrencyResponse
     */
    public function CreditorEntry_GetRemainderDefaultCurrency(CreditorEntry_GetRemainderDefaultCurrency $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetRemainderDefaultCurrency', array($parameters));
    }

    /**
     * Returns an array of handles for the creditor entries with numbers in the given interval.<br />Parameters: from: The beginning of the interval. to: the end of the interval.
     *
     * @param CreditorEntry_FindBySerialNumber $parameters
     * @return CreditorEntry_FindBySerialNumberResponse
     */
    public function CreditorEntry_FindBySerialNumber(CreditorEntry_FindBySerialNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_FindBySerialNumber', array($parameters));
    }

    /**
     * Returns an array of handles for the creditor entries with numbers filtered by serial number, entry type, invoice numbers.<br />Parameters: fromSerialNumber: The beginning of the interval. Use null to omit this filter. toSerialNumber: the end of the interval. Use null to omit this filter. entryType: Entry type. invoiceNumbers: Invoice Numbers. Array may also contain null as an entry to search for entries with no invoice number. Use null to omit this filter.
     *
     * @param CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber $parameters
     * @return CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResponse
     */
    public function CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber(CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber', array($parameters));
    }

    /**
     * Returns an array of handles for the creditor entries with the specified invoice number.<br />Parameters: invoiceNumber: The invoice number to search for.
     *
     * @param CreditorEntry_FindByInvoiceNumber $parameters
     * @return CreditorEntry_FindByInvoiceNumberResponse
     */
    public function CreditorEntry_FindByInvoiceNumber(CreditorEntry_FindByInvoiceNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_FindByInvoiceNumber', array($parameters));
    }

    /**
     * Matches the entries passed to the function. No return value.<br />Parameters: entries: The creditor entries to be matched.
     *
     * @param CreditorEntry_MatchEntries $parameters
     * @return CreditorEntry_MatchEntriesResponse
     */
    public function CreditorEntry_MatchEntries(CreditorEntry_MatchEntries $parameters)
    {
      return $this->__soapCall('CreditorEntry_MatchEntries', array($parameters));
    }

    /**
     * Creates a new creditor group from a data object.<br />Parameters: data: The data object that specifies the properties of the new creditor group.
     *
     * @param CreditorGroup_CreateFromData $parameters
     * @return CreditorGroup_CreateFromDataResponse
     */
    public function CreditorGroup_CreateFromData(CreditorGroup_CreateFromData $parameters)
    {
      return $this->__soapCall('CreditorGroup_CreateFromData', array($parameters));
    }

    /**
     * Creates new creditor groups from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new creditor groups.
     *
     * @param CreditorGroup_CreateFromDataArray $parameters
     * @return CreditorGroup_CreateFromDataArrayResponse
     */
    public function CreditorGroup_CreateFromDataArray(CreditorGroup_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CreditorGroup_CreateFromDataArray', array($parameters));
    }

    /**
     * Update creditor groups from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CreditorGroup_UpdateFromDataArray $parameters
     * @return CreditorGroup_UpdateFromDataArrayResponse
     */
    public function CreditorGroup_UpdateFromDataArray(CreditorGroup_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CreditorGroup_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a creditor group from a data object.<br />Parameters: data: The data object.
     *
     * @param CreditorGroup_UpdateFromData $parameters
     * @return CreditorGroup_UpdateFromDataResponse
     */
    public function CreditorGroup_UpdateFromData(CreditorGroup_UpdateFromData $parameters)
    {
      return $this->__soapCall('CreditorGroup_UpdateFromData', array($parameters));
    }

    /**
     * Returns a creditor group data object for a given creditor group.<br />Parameters: entityHandle: A handle for the creditor group.
     *
     * @param CreditorGroup_GetData $parameters
     * @return CreditorGroup_GetDataResponse
     */
    public function CreditorGroup_GetData(CreditorGroup_GetData $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetData', array($parameters));
    }

    /**
     * Returns creditor group data objects for a given set of creditor group handles.<br />Parameters: entityHandles: An array of the creditor group handles.
     *
     * @param CreditorGroup_GetDataArray $parameters
     * @return CreditorGroup_GetDataArrayResponse
     */
    public function CreditorGroup_GetDataArray(CreditorGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetDataArray', array($parameters));
    }

    /**
     * Creates a new creditor group.
     *
     * @param CreditorGroup_Create $parameters
     * @return CreditorGroup_CreateResponse
     */
    public function CreditorGroup_Create(CreditorGroup_Create $parameters)
    {
      return $this->__soapCall('CreditorGroup_Create', array($parameters));
    }

    /**
     * Returns handles for all creditor groups.
     *
     * @param CreditorGroup_GetAll $parameters
     * @return CreditorGroup_GetAllResponse
     */
    public function CreditorGroup_GetAll(CreditorGroup_GetAll $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the creditor group with the given number.
     *
     * @param CreditorGroup_FindByNumber $parameters
     * @return CreditorGroup_FindByNumberResponse
     */
    public function CreditorGroup_FindByNumber(CreditorGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('CreditorGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the creditor groups corresponding to the given creditor group numbers. If a creditor group with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param CreditorGroup_FindByNumberList $parameters
     * @return CreditorGroup_FindByNumberListResponse
     */
    public function CreditorGroup_FindByNumberList(CreditorGroup_FindByNumberList $parameters)
    {
      return $this->__soapCall('CreditorGroup_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for all creditor groups with the given name.
     *
     * @param CreditorGroup_FindByName $parameters
     * @return CreditorGroup_FindByNameResponse
     */
    public function CreditorGroup_FindByName(CreditorGroup_FindByName $parameters)
    {
      return $this->__soapCall('CreditorGroup_FindByName', array($parameters));
    }

    /**
     * Gets handles for creditors of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group.
     *
     * @param CreditorGroup_GetCreditors $parameters
     * @return CreditorGroup_GetCreditorsResponse
     */
    public function CreditorGroup_GetCreditors(CreditorGroup_GetCreditors $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetCreditors', array($parameters));
    }

    /**
     * Gets the number of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group.
     *
     * @param CreditorGroup_GetNumber $parameters
     * @return CreditorGroup_GetNumberResponse
     */
    public function CreditorGroup_GetNumber(CreditorGroup_GetNumber $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group.
     *
     * @param CreditorGroup_GetName $parameters
     * @return CreditorGroup_GetNameResponse
     */
    public function CreditorGroup_GetName(CreditorGroup_GetName $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetName', array($parameters));
    }

    /**
     * Sets the name of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group. value: The new name of the creditor group.
     *
     * @param CreditorGroup_SetName $parameters
     * @return CreditorGroup_SetNameResponse
     */
    public function CreditorGroup_SetName(CreditorGroup_SetName $parameters)
    {
      return $this->__soapCall('CreditorGroup_SetName', array($parameters));
    }

    /**
     * Gets a handle for the account of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group.
     *
     * @param CreditorGroup_GetAccount $parameters
     * @return CreditorGroup_GetAccountResponse
     */
    public function CreditorGroup_GetAccount(CreditorGroup_GetAccount $parameters)
    {
      return $this->__soapCall('CreditorGroup_GetAccount', array($parameters));
    }

    /**
     * Sets the account of a creditor group.<br />Parameters: creditorGroupHandle: Handle for the creditor group. valueHandle: A handle for the new account of the creditor group.
     *
     * @param CreditorGroup_SetAccount $parameters
     * @return CreditorGroup_SetAccountResponse
     */
    public function CreditorGroup_SetAccount(CreditorGroup_SetAccount $parameters)
    {
      return $this->__soapCall('CreditorGroup_SetAccount', array($parameters));
    }

    /**
     * Returns a currency data object for a given currency.<br />Parameters: entityHandle: A handle for the currency.
     *
     * @param Currency_GetData $parameters
     * @return Currency_GetDataResponse
     */
    public function Currency_GetData(Currency_GetData $parameters)
    {
      return $this->__soapCall('Currency_GetData', array($parameters));
    }

    /**
     * Returns currency data objects for a given set of currency handles.<br />Parameters: entityHandles: An array of the currency handles.
     *
     * @param Currency_GetDataArray $parameters
     * @return Currency_GetDataArrayResponse
     */
    public function Currency_GetDataArray(Currency_GetDataArray $parameters)
    {
      return $this->__soapCall('Currency_GetDataArray', array($parameters));
    }

    /**
     * Gets the code of a currency.<br />Parameters: currencyHandle: Handle for the currency.
     *
     * @param Currency_GetCode $parameters
     * @return Currency_GetCodeResponse
     */
    public function Currency_GetCode(Currency_GetCode $parameters)
    {
      return $this->__soapCall('Currency_GetCode', array($parameters));
    }

    /**
     * Return handles for all currencies.
     *
     * @param Currency_GetAll $parameters
     * @return Currency_GetAllResponse
     */
    public function Currency_GetAll(Currency_GetAll $parameters)
    {
      return $this->__soapCall('Currency_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the currency with the given code.<br />Parameters: code: The code to search for.
     *
     * @param Currency_FindByCode $parameters
     * @return Currency_FindByCodeResponse
     */
    public function Currency_FindByCode(Currency_FindByCode $parameters)
    {
      return $this->__soapCall('Currency_FindByCode', array($parameters));
    }

    /**
     * Creates a new current invoice from a data object.<br />Parameters: data: The data object that specifies the properties of the new current invoice.
     *
     * @param CurrentInvoice_CreateFromData $parameters
     * @return CurrentInvoice_CreateFromDataResponse
     */
    public function CurrentInvoice_CreateFromData(CurrentInvoice_CreateFromData $parameters)
    {
      return $this->__soapCall('CurrentInvoice_CreateFromData', array($parameters));
    }

    /**
     * Creates new current invoices from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new current invoices.
     *
     * @param CurrentInvoice_CreateFromDataArray $parameters
     * @return CurrentInvoice_CreateFromDataArrayResponse
     */
    public function CurrentInvoice_CreateFromDataArray(CurrentInvoice_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoice_CreateFromDataArray', array($parameters));
    }

    /**
     * Update current invoices from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CurrentInvoice_UpdateFromDataArray $parameters
     * @return CurrentInvoice_UpdateFromDataArrayResponse
     */
    public function CurrentInvoice_UpdateFromDataArray(CurrentInvoice_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoice_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a current invoice from a data object.<br />Parameters: data: The data object.
     *
     * @param CurrentInvoice_UpdateFromData $parameters
     * @return CurrentInvoice_UpdateFromDataResponse
     */
    public function CurrentInvoice_UpdateFromData(CurrentInvoice_UpdateFromData $parameters)
    {
      return $this->__soapCall('CurrentInvoice_UpdateFromData', array($parameters));
    }

    /**
     * Returns a current invoice data object for a given current invoice.<br />Parameters: entityHandle: A handle for the current invoice.
     *
     * @param CurrentInvoice_GetData $parameters
     * @return CurrentInvoice_GetDataResponse
     */
    public function CurrentInvoice_GetData(CurrentInvoice_GetData $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetData', array($parameters));
    }

    /**
     * Returns current invoice data objects for a given set of current invoice handles.<br />Parameters: entityHandles: An array of the current invoice handles.
     *
     * @param CurrentInvoice_GetDataArray $parameters
     * @return CurrentInvoice_GetDataArrayResponse
     */
    public function CurrentInvoice_GetDataArray(CurrentInvoice_GetDataArray $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDataArray', array($parameters));
    }

    /**
     * Creates a new current invoice.<br />Parameters: debtor: Handle for a debitor.
     *
     * @param CurrentInvoice_Create $parameters
     * @return CurrentInvoice_CreateResponse
     */
    public function CurrentInvoice_Create(CurrentInvoice_Create $parameters)
    {
      return $this->__soapCall('CurrentInvoice_Create', array($parameters));
    }

    /**
     * Returns handles for all current invoices.
     *
     * @param CurrentInvoice_GetAll $parameters
     * @return CurrentInvoice_GetAllResponse
     */
    public function CurrentInvoice_GetAll(CurrentInvoice_GetAll $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetAll', array($parameters));
    }

    /**
     * Returns handles for the current invoices which have the given employee as OurReference.<br />Parameters: ourReferenceHandle: Handle for the employee to search for.
     *
     * @param CurrentInvoice_FindByOurReference $parameters
     * @return CurrentInvoice_FindByOurReferenceResponse
     */
    public function CurrentInvoice_FindByOurReference(CurrentInvoice_FindByOurReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_FindByOurReference', array($parameters));
    }

    /**
     * Returns handles for the current invoices with a given other reference.<br />Parameters: otherReference: The other reference to search for.
     *
     * @param CurrentInvoice_FindByOtherReference $parameters
     * @return CurrentInvoice_FindByOtherReferenceResponse
     */
    public function CurrentInvoice_FindByOtherReference(CurrentInvoice_FindByOtherReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_FindByOtherReference', array($parameters));
    }

    /**
     * Returns handles for current invoices in a given interval of days.<br />Parameters: first: First day in interval. last: Last day in interval.
     *
     * @param CurrentInvoice_FindByDateInterval $parameters
     * @return CurrentInvoice_FindByDateIntervalResponse
     */
    public function CurrentInvoice_FindByDateInterval(CurrentInvoice_FindByDateInterval $parameters)
    {
      return $this->__soapCall('CurrentInvoice_FindByDateInterval', array($parameters));
    }

    /**
     * Return handles for all current invoices from date. FromDate is based on CET.
     *
     * @param CurrentInvoice_GetAllUpdated $parameters
     * @return CurrentInvoice_GetAllUpdatedResponse
     */
    public function CurrentInvoice_GetAllUpdated(CurrentInvoice_GetAllUpdated $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetAllUpdated', array($parameters));
    }

    /**
     * Gets a current invoice as a PDF file.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetPdf $parameters
     * @return CurrentInvoice_GetPdfResponse
     */
    public function CurrentInvoice_GetPdf(CurrentInvoice_GetPdf $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetPdf', array($parameters));
    }

    /**
     * Books a current invoice. An invoice number greater than all other invoice numbers will be assigned to the resulting invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_Book $parameters
     * @return CurrentInvoice_BookResponse
     */
    public function CurrentInvoice_Book(CurrentInvoice_Book $parameters)
    {
      return $this->__soapCall('CurrentInvoice_Book', array($parameters));
    }

    /**
     * Books a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. number: The invoice number of the resulting invoice; must be positive and different from all other invoice numbers.
     *
     * @param CurrentInvoice_BookWithNumber $parameters
     * @return CurrentInvoice_BookWithNumberResponse
     */
    public function CurrentInvoice_BookWithNumber(CurrentInvoice_BookWithNumber $parameters)
    {
      return $this->__soapCall('CurrentInvoice_BookWithNumber', array($parameters));
    }

    /**
     * Deletes a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_Delete $parameters
     * @return CurrentInvoice_DeleteResponse
     */
    public function CurrentInvoice_Delete(CurrentInvoice_Delete $parameters)
    {
      return $this->__soapCall('CurrentInvoice_Delete', array($parameters));
    }

    /**
     * Gets handles for the lines of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetLines $parameters
     * @return CurrentInvoice_GetLinesResponse
     */
    public function CurrentInvoice_GetLines(CurrentInvoice_GetLines $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetLines', array($parameters));
    }

    /**
     * Gets all handles for the lines of the current invoices filtered by a list of current invoices. The returned list is sorted first by the current invoice and then the line numbers both ascending.<br />Parameters: currentInvoiceHandles: Array of handles for current invoices to filter by.
     *
     * @param CurrentInvoiceLine_FindByCurrentInvoiceList $parameters
     * @return CurrentInvoiceLine_FindByCurrentInvoiceListResponse
     */
    public function CurrentInvoiceLine_FindByCurrentInvoiceList(CurrentInvoiceLine_FindByCurrentInvoiceList $parameters)
    {
      return $this->__soapCall('CurrentInvoiceLine_FindByCurrentInvoiceList', array($parameters));
    }

    /**
     * Gets all handles for the lines of the orders filtered by a list of orders. The returned list is sorted first by the order and then the line numbers both ascending.<br />Parameters: orderHandles: Array of handles for orders to filter by.
     *
     * @param OrderLine_FindByOrderList $parameters
     * @return OrderLine_FindByOrderListResponse
     */
    public function OrderLine_FindByOrderList(OrderLine_FindByOrderList $parameters)
    {
      return $this->__soapCall('OrderLine_FindByOrderList', array($parameters));
    }

    /**
     * Gets all handles for the lines of the quotations filtered by a list of quotations. The returned list is sorted first by the quotation and then the line numbers both ascending.<br />Parameters: quotationHandles: Array of handles for quotations to filter by.
     *
     * @param QuotationLine_FindByQuotationList $parameters
     * @return QuotationLine_FindByQuotationListResponse
     */
    public function QuotationLine_FindByQuotationList(QuotationLine_FindByQuotationList $parameters)
    {
      return $this->__soapCall('QuotationLine_FindByQuotationList', array($parameters));
    }

    /**
     * Gets all handles for the lines of the invoices filtered by a list of invoices. The returned list is sorted first by the invoice and then the line numbers both ascending.<br />Parameters: invoiceHandles: Array of handles for invoices to filter by.
     *
     * @param InvoiceLine_FindByInvoiceList $parameters
     * @return InvoiceLine_FindByInvoiceListResponse
     */
    public function InvoiceLine_FindByInvoiceList(InvoiceLine_FindByInvoiceList $parameters)
    {
      return $this->__soapCall('InvoiceLine_FindByInvoiceList', array($parameters));
    }

    /**
     * Gets handle for the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtor $parameters
     * @return CurrentInvoice_GetDebtorResponse
     */
    public function CurrentInvoice_GetDebtor(CurrentInvoice_GetDebtor $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtor', array($parameters));
    }

    /**
     * Set the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new debtor.
     *
     * @param CurrentInvoice_SetDebtor $parameters
     * @return CurrentInvoice_SetDebtorResponse
     */
    public function CurrentInvoice_SetDebtor(CurrentInvoice_SetDebtor $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtor', array($parameters));
    }

    /**
     * Gets the project of a current invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param CurrentInvoice_GetProject $parameters
     * @return CurrentInvoice_GetProjectResponse
     */
    public function CurrentInvoice_GetProject(CurrentInvoice_GetProject $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetProject', array($parameters));
    }

    /**
     * Set the project of a current invoice.<br />Parameters: invoiceHandle: Handle for the invoice.
     *
     * @param CurrentInvoice_SetProject $parameters
     * @return CurrentInvoice_SetProjectResponse
     */
    public function CurrentInvoice_SetProject(CurrentInvoice_SetProject $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetProject', array($parameters));
    }

    /**
     * Gets the name of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorName $parameters
     * @return CurrentInvoice_GetDebtorNameResponse
     */
    public function CurrentInvoice_GetDebtorName(CurrentInvoice_GetDebtorName $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorName', array($parameters));
    }

    /**
     * Set the name of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new name of the debtor of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorName $parameters
     * @return CurrentInvoice_SetDebtorNameResponse
     */
    public function CurrentInvoice_SetDebtorName(CurrentInvoice_SetDebtorName $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorName', array($parameters));
    }

    /**
     * Gets the address of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorAddress $parameters
     * @return CurrentInvoice_GetDebtorAddressResponse
     */
    public function CurrentInvoice_GetDebtorAddress(CurrentInvoice_GetDebtorAddress $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorAddress', array($parameters));
    }

    /**
     * Set the address of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new name of the debtor of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorAddress $parameters
     * @return CurrentInvoice_SetDebtorAddressResponse
     */
    public function CurrentInvoice_SetDebtorAddress(CurrentInvoice_SetDebtorAddress $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorAddress', array($parameters));
    }

    /**
     * Gets the postal code of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorPostalCode $parameters
     * @return CurrentInvoice_GetDebtorPostalCodeResponse
     */
    public function CurrentInvoice_GetDebtorPostalCode(CurrentInvoice_GetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorPostalCode', array($parameters));
    }

    /**
     * Set the postal code of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new postal code of the debtor of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorPostalCode $parameters
     * @return CurrentInvoice_SetDebtorPostalCodeResponse
     */
    public function CurrentInvoice_SetDebtorPostalCode(CurrentInvoice_SetDebtorPostalCode $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorPostalCode', array($parameters));
    }

    /**
     * Gets the city of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorCity $parameters
     * @return CurrentInvoice_GetDebtorCityResponse
     */
    public function CurrentInvoice_GetDebtorCity(CurrentInvoice_GetDebtorCity $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorCity', array($parameters));
    }

    /**
     * Set the city of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new city of the debtor of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorCity $parameters
     * @return CurrentInvoice_SetDebtorCityResponse
     */
    public function CurrentInvoice_SetDebtorCity(CurrentInvoice_SetDebtorCity $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorCity', array($parameters));
    }

    /**
     * Gets the country of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorCountry $parameters
     * @return CurrentInvoice_GetDebtorCountryResponse
     */
    public function CurrentInvoice_GetDebtorCountry(CurrentInvoice_GetDebtorCountry $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorCountry', array($parameters));
    }

    /**
     * Set the country of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new country of the debtor of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorCountry $parameters
     * @return CurrentInvoice_SetDebtorCountryResponse
     */
    public function CurrentInvoice_SetDebtorCountry(CurrentInvoice_SetDebtorCountry $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorCountry', array($parameters));
    }

    /**
     * Gets the European Article Number of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDebtorEan $parameters
     * @return CurrentInvoice_GetDebtorEanResponse
     */
    public function CurrentInvoice_GetDebtorEan(CurrentInvoice_GetDebtorEan $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDebtorEan', array($parameters));
    }

    /**
     * Set the European Article Number of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new EAN of the current invoice.
     *
     * @param CurrentInvoice_SetDebtorEan $parameters
     * @return CurrentInvoice_SetDebtorEanResponse
     */
    public function CurrentInvoice_SetDebtorEan(CurrentInvoice_SetDebtorEan $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDebtorEan', array($parameters));
    }

    /**
     * Gets the public entry number of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetPublicEntryNumber $parameters
     * @return CurrentInvoice_GetPublicEntryNumberResponse
     */
    public function CurrentInvoice_GetPublicEntryNumber(CurrentInvoice_GetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetPublicEntryNumber', array($parameters));
    }

    /**
     * Set the public entry number of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new public entry number of the current invoice.
     *
     * @param CurrentInvoice_SetPublicEntryNumber $parameters
     * @return CurrentInvoice_SetPublicEntryNumberResponse
     */
    public function CurrentInvoice_SetPublicEntryNumber(CurrentInvoice_SetPublicEntryNumber $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetPublicEntryNumber', array($parameters));
    }

    /**
     * Gets a handle for the attention of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetAttention $parameters
     * @return CurrentInvoice_GetAttentionResponse
     */
    public function CurrentInvoice_GetAttention(CurrentInvoice_GetAttention $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetAttention', array($parameters));
    }

    /**
     * Set the attention of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new attention of the current invoice.
     *
     * @param CurrentInvoice_SetAttention $parameters
     * @return CurrentInvoice_SetAttentionResponse
     */
    public function CurrentInvoice_SetAttention(CurrentInvoice_SetAttention $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetAttention', array($parameters));
    }

    /**
     * Gets a handle for the reference of the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetYourReference $parameters
     * @return CurrentInvoice_GetYourReferenceResponse
     */
    public function CurrentInvoice_GetYourReference(CurrentInvoice_GetYourReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetYourReference', array($parameters));
    }

    /**
     * Set the the reference for the debtor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new reference for the debtor.
     *
     * @param CurrentInvoice_SetYourReference $parameters
     * @return CurrentInvoice_SetYourReferenceResponse
     */
    public function CurrentInvoice_SetYourReference(CurrentInvoice_SetYourReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetYourReference', array($parameters));
    }

    /**
     * Gets a handle for the primary reference of the creditor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetOurReference $parameters
     * @return CurrentInvoice_GetOurReferenceResponse
     */
    public function CurrentInvoice_GetOurReference(CurrentInvoice_GetOurReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetOurReference', array($parameters));
    }

    /**
     * Set the the primary reference of the creditor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new primary reference of the creditor of the current invoice.
     *
     * @param CurrentInvoice_SetOurReference $parameters
     * @return CurrentInvoice_SetOurReferenceResponse
     */
    public function CurrentInvoice_SetOurReference(CurrentInvoice_SetOurReference $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the secondary reference of the creditor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetOurReference2 $parameters
     * @return CurrentInvoice_GetOurReference2Response
     */
    public function CurrentInvoice_GetOurReference2(CurrentInvoice_GetOurReference2 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetOurReference2', array($parameters));
    }

    /**
     * Set the the secondary reference of the creditor of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. valueHandle: Handle for the new secondary reference of the creditor of the current invoice.
     *
     * @param CurrentInvoice_SetOurReference2 $parameters
     * @return CurrentInvoice_SetOurReference2Response
     */
    public function CurrentInvoice_SetOurReference2(CurrentInvoice_SetOurReference2 $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetOurReference2', array($parameters));
    }

    /**
     * Gets the date of a current invoice.<br />Parameters: currentInvoiceHandle: Handle for the current invoice.
     *
     * @param CurrentInvoice_GetDate $parameters
     * @return CurrentInvoice_GetDateResponse
     */
    public function CurrentInvoice_GetDate(CurrentInvoice_GetDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_GetDate', array($parameters));
    }

    /**
     * Set the date of a current invoice. The due date is calculated accordingly as specified by the term of payment.<br />Parameters: currentInvoiceHandle: Handle for the current invoice. value: The new date of the current invoice.
     *
     * @param CurrentInvoice_SetDate $parameters
     * @return CurrentInvoice_SetDateResponse
     */
    public function CurrentInvoice_SetDate(CurrentInvoice_SetDate $parameters)
    {
      return $this->__soapCall('CurrentInvoice_SetDate', array($parameters));
    }

    /**
     * Update creditors from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Creditor_UpdateFromDataArray $parameters
     * @return Creditor_UpdateFromDataArrayResponse
     */
    public function Creditor_UpdateFromDataArray(Creditor_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Creditor_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a creditor from a data object.<br />Parameters: data: The data object.
     *
     * @param Creditor_UpdateFromData $parameters
     * @return Creditor_UpdateFromDataResponse
     */
    public function Creditor_UpdateFromData(Creditor_UpdateFromData $parameters)
    {
      return $this->__soapCall('Creditor_UpdateFromData', array($parameters));
    }

    /**
     * Returns a creditor data object for a given creditor.<br />Parameters: entityHandle: A handle for the creditor.
     *
     * @param Creditor_GetData $parameters
     * @return Creditor_GetDataResponse
     */
    public function Creditor_GetData(Creditor_GetData $parameters)
    {
      return $this->__soapCall('Creditor_GetData', array($parameters));
    }

    /**
     * Returns creditor data objects for a given set of creditor handles.<br />Parameters: entityHandles: An array of the creditor handles.
     *
     * @param Creditor_GetDataArray $parameters
     * @return Creditor_GetDataArrayResponse
     */
    public function Creditor_GetDataArray(Creditor_GetDataArray $parameters)
    {
      return $this->__soapCall('Creditor_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetNumber $parameters
     * @return Creditor_GetNumberResponse
     */
    public function Creditor_GetNumber(Creditor_GetNumber $parameters)
    {
      return $this->__soapCall('Creditor_GetNumber', array($parameters));
    }

    /**
     * Gets a handle for the creditor group of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCreditorGroup $parameters
     * @return Creditor_GetCreditorGroupResponse
     */
    public function Creditor_GetCreditorGroup(Creditor_GetCreditorGroup $parameters)
    {
      return $this->__soapCall('Creditor_GetCreditorGroup', array($parameters));
    }

    /**
     * Sets the creditor group of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. valueHandle: Handle for the new creditor group of the creditor.
     *
     * @param Creditor_SetCreditorGroup $parameters
     * @return Creditor_SetCreditorGroupResponse
     */
    public function Creditor_SetCreditorGroup(Creditor_SetCreditorGroup $parameters)
    {
      return $this->__soapCall('Creditor_SetCreditorGroup', array($parameters));
    }

    /**
     * Gets the name of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetName $parameters
     * @return Creditor_GetNameResponse
     */
    public function Creditor_GetName(Creditor_GetName $parameters)
    {
      return $this->__soapCall('Creditor_GetName', array($parameters));
    }

    /**
     * Sets the name of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new name of the creditor.
     *
     * @param Creditor_SetName $parameters
     * @return Creditor_SetNameResponse
     */
    public function Creditor_SetName(Creditor_SetName $parameters)
    {
      return $this->__soapCall('Creditor_SetName', array($parameters));
    }

    /**
     * Sets vat zone of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: Handle for new vat zone of the creditor.
     *
     * @param Creditor_SetVatZone $parameters
     * @return Creditor_SetVatZoneResponse
     */
    public function Creditor_SetVatZone(Creditor_SetVatZone $parameters)
    {
      return $this->__soapCall('Creditor_SetVatZone', array($parameters));
    }

    /**
     * Gets handle for vat zone of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetVatZone $parameters
     * @return Creditor_GetVatZoneResponse
     */
    public function Creditor_GetVatZone(Creditor_GetVatZone $parameters)
    {
      return $this->__soapCall('Creditor_GetVatZone', array($parameters));
    }

    /**
     * Sets currency of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: Handle for the new currency of the creditor.
     *
     * @param Creditor_SetCurrency $parameters
     * @return Creditor_SetCurrencyResponse
     */
    public function Creditor_SetCurrency(Creditor_SetCurrency $parameters)
    {
      return $this->__soapCall('Creditor_SetCurrency', array($parameters));
    }

    /**
     * Gets currency of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCurrency $parameters
     * @return Creditor_GetCurrencyResponse
     */
    public function Creditor_GetCurrency(Creditor_GetCurrency $parameters)
    {
      return $this->__soapCall('Creditor_GetCurrency', array($parameters));
    }

    /**
     * Gets a handle for the term of payment of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetTermOfPayment $parameters
     * @return Creditor_GetTermOfPaymentResponse
     */
    public function Creditor_GetTermOfPayment(Creditor_GetTermOfPayment $parameters)
    {
      return $this->__soapCall('Creditor_GetTermOfPayment', array($parameters));
    }

    /**
     * Sets the term of payment of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: Handle for the new term of payment of a creditor.
     *
     * @param Creditor_SetTermOfPayment $parameters
     * @return Creditor_SetTermOfPaymentResponse
     */
    public function Creditor_SetTermOfPayment(Creditor_SetTermOfPayment $parameters)
    {
      return $this->__soapCall('Creditor_SetTermOfPayment', array($parameters));
    }

    /**
     * Gets whether a creditor is accessible.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetIsAccessible $parameters
     * @return Creditor_GetIsAccessibleResponse
     */
    public function Creditor_GetIsAccessible(Creditor_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Creditor_GetIsAccessible', array($parameters));
    }

    /**
     * Sets whether a creditor is accessible.<br />Parameters: creditorHandle: Handle for the creditor. value: Value that indicates whether the creditor should be accessible.
     *
     * @param Creditor_SetIsAccessible $parameters
     * @return Creditor_SetIsAccessibleResponse
     */
    public function Creditor_SetIsAccessible(Creditor_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Creditor_SetIsAccessible', array($parameters));
    }

    /**
     * Gets the Corporate Identification Number of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCINumber $parameters
     * @return Creditor_GetCINumberResponse
     */
    public function Creditor_GetCINumber(Creditor_GetCINumber $parameters)
    {
      return $this->__soapCall('Creditor_GetCINumber', array($parameters));
    }

    /**
     * Sets the Corporate Identification Number of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new Corporate Identification Number of the creditor.
     *
     * @param Creditor_SetCINumber $parameters
     * @return Creditor_SetCINumberResponse
     */
    public function Creditor_SetCINumber(Creditor_SetCINumber $parameters)
    {
      return $this->__soapCall('Creditor_SetCINumber', array($parameters));
    }

    /**
     * Set the e-mail of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new email of the creditor.
     *
     * @param Creditor_SetEmail $parameters
     * @return Creditor_SetEmailResponse
     */
    public function Creditor_SetEmail(Creditor_SetEmail $parameters)
    {
      return $this->__soapCall('Creditor_SetEmail', array($parameters));
    }

    /**
     * Get the e-mail of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetEmail $parameters
     * @return Creditor_GetEmailResponse
     */
    public function Creditor_GetEmail(Creditor_GetEmail $parameters)
    {
      return $this->__soapCall('Creditor_GetEmail', array($parameters));
    }

    /**
     * Sets the address of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new address of the creditor.
     *
     * @param Creditor_SetAddress $parameters
     * @return Creditor_SetAddressResponse
     */
    public function Creditor_SetAddress(Creditor_SetAddress $parameters)
    {
      return $this->__soapCall('Creditor_SetAddress', array($parameters));
    }

    /**
     * Gets the address of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetAddress $parameters
     * @return Creditor_GetAddressResponse
     */
    public function Creditor_GetAddress(Creditor_GetAddress $parameters)
    {
      return $this->__soapCall('Creditor_GetAddress', array($parameters));
    }

    /**
     * Gets the postal code of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetPostalCode $parameters
     * @return Creditor_GetPostalCodeResponse
     */
    public function Creditor_GetPostalCode(Creditor_GetPostalCode $parameters)
    {
      return $this->__soapCall('Creditor_GetPostalCode', array($parameters));
    }

    /**
     * Sets the postal code of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new postal code of the creditor.
     *
     * @param Creditor_SetPostalCode $parameters
     * @return Creditor_SetPostalCodeResponse
     */
    public function Creditor_SetPostalCode(Creditor_SetPostalCode $parameters)
    {
      return $this->__soapCall('Creditor_SetPostalCode', array($parameters));
    }

    /**
     * Sets the city of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new city of the creditor.
     *
     * @param Creditor_SetCity $parameters
     * @return Creditor_SetCityResponse
     */
    public function Creditor_SetCity(Creditor_SetCity $parameters)
    {
      return $this->__soapCall('Creditor_SetCity', array($parameters));
    }

    /**
     * Gets the city of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCity $parameters
     * @return Creditor_GetCityResponse
     */
    public function Creditor_GetCity(Creditor_GetCity $parameters)
    {
      return $this->__soapCall('Creditor_GetCity', array($parameters));
    }

    /**
     * Gets the country of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCountry $parameters
     * @return Creditor_GetCountryResponse
     */
    public function Creditor_GetCountry(Creditor_GetCountry $parameters)
    {
      return $this->__soapCall('Creditor_GetCountry', array($parameters));
    }

    /**
     * Sets the country of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new country of the creditor.
     *
     * @param Creditor_SetCountry $parameters
     * @return Creditor_SetCountryResponse
     */
    public function Creditor_SetCountry(Creditor_SetCountry $parameters)
    {
      return $this->__soapCall('Creditor_SetCountry', array($parameters));
    }

    /**
     * Sets the bank account of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. value: The new bank account of the creditor.
     *
     * @param Creditor_SetBankAccount $parameters
     * @return Creditor_SetBankAccountResponse
     */
    public function Creditor_SetBankAccount(Creditor_SetBankAccount $parameters)
    {
      return $this->__soapCall('Creditor_SetBankAccount', array($parameters));
    }

    /**
     * Gets the bank account of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetBankAccount $parameters
     * @return Creditor_GetBankAccountResponse
     */
    public function Creditor_GetBankAccount(Creditor_GetBankAccount $parameters)
    {
      return $this->__soapCall('Creditor_GetBankAccount', array($parameters));
    }

    /**
     * Sets the attention of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. valueHandle: Handle for new attention of the creditor.
     *
     * @param Creditor_SetAttention $parameters
     * @return Creditor_SetAttentionResponse
     */
    public function Creditor_SetAttention(Creditor_SetAttention $parameters)
    {
      return $this->__soapCall('Creditor_SetAttention', array($parameters));
    }

    /**
     * Gets a handle for the attention of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetAttention $parameters
     * @return Creditor_GetAttentionResponse
     */
    public function Creditor_GetAttention(Creditor_GetAttention $parameters)
    {
      return $this->__soapCall('Creditor_GetAttention', array($parameters));
    }

    /**
     * Gets a handle for 'your reference' of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetYourReference $parameters
     * @return Creditor_GetYourReferenceResponse
     */
    public function Creditor_GetYourReference(Creditor_GetYourReference $parameters)
    {
      return $this->__soapCall('Creditor_GetYourReference', array($parameters));
    }

    /**
     * Sets 'your reference' of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. valueHandle: Handle for 'your reference' of the creditor.
     *
     * @param Creditor_SetYourReference $parameters
     * @return Creditor_SetYourReferenceResponse
     */
    public function Creditor_SetYourReference(Creditor_SetYourReference $parameters)
    {
      return $this->__soapCall('Creditor_SetYourReference', array($parameters));
    }

    /**
     * Sets 'our reference' of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. valueHandle: Handle for 'our reference' of the creditor.
     *
     * @param Creditor_SetOurReference $parameters
     * @return Creditor_SetOurReferenceResponse
     */
    public function Creditor_SetOurReference(Creditor_SetOurReference $parameters)
    {
      return $this->__soapCall('Creditor_SetOurReference', array($parameters));
    }

    /**
     * Gets a handle for 'our reference' of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetOurReference $parameters
     * @return Creditor_GetOurReferenceResponse
     */
    public function Creditor_GetOurReference(Creditor_GetOurReference $parameters)
    {
      return $this->__soapCall('Creditor_GetOurReference', array($parameters));
    }

    /**
     * Gets a handle for the default payment type of a creditor. To set bank payment type, use CashBookEntry_SetRemittanceInformation.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param Creditor_GetDefaultPaymentType $parameters
     * @return Creditor_GetDefaultPaymentTypeResponse
     */
    public function Creditor_GetDefaultPaymentType(Creditor_GetDefaultPaymentType $parameters)
    {
      return $this->__soapCall('Creditor_GetDefaultPaymentType', array($parameters));
    }

    /**
     * Gets a handle for the payment creditor id of a creditor. To set bank payment creditor id, use Creditor_SetRemittanceInformation.<br />
     *
     * @param Creditor_GetDefaultPaymentCreditorId $parameters
     * @return Creditor_GetDefaultPaymentCreditorIdResponse
     */
    public function Creditor_GetDefaultPaymentCreditorId(Creditor_GetDefaultPaymentCreditorId $parameters)
    {
      return $this->__soapCall('Creditor_GetDefaultPaymentCreditorId', array($parameters));
    }

    /**
     * DEPRECATED! Gets the County of a creditor. (UK only)<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCounty $parameters
     * @return Creditor_GetCountyResponse
     */
    public function Creditor_GetCounty(Creditor_GetCounty $parameters)
    {
      return $this->__soapCall('Creditor_GetCounty', array($parameters));
    }

    /**
     * DEPRECATED! Sets the County of a creditor. (UK only)<br />Parameters: creditorHandle: Handle for the creditor. value: The new County of the creditor.
     *
     * @param Creditor_SetCounty $parameters
     * @return Creditor_SetCountyResponse
     */
    public function Creditor_SetCounty(Creditor_SetCounty $parameters)
    {
      return $this->__soapCall('Creditor_SetCounty', array($parameters));
    }

    /**
     * Gets a handle for the automatic contra account of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetAutoContraAccount $parameters
     * @return Creditor_GetAutoContraAccountResponse
     */
    public function Creditor_GetAutoContraAccount(Creditor_GetAutoContraAccount $parameters)
    {
      return $this->__soapCall('Creditor_GetAutoContraAccount', array($parameters));
    }

    /**
     * Sets the automatic contra account of a creditor.<br />Parameters: creditorHandle: Handle for the creditor. valueHandle: Handle for new automatic contra account of the creditor.
     *
     * @param Creditor_SetAutoContraAccount $parameters
     * @return Creditor_SetAutoContraAccountResponse
     */
    public function Creditor_SetAutoContraAccount(Creditor_SetAutoContraAccount $parameters)
    {
      return $this->__soapCall('Creditor_SetAutoContraAccount', array($parameters));
    }

    /**
     * @param Creditor_Create $parameters
     * @return Creditor_CreateResponse
     */
    public function Creditor_Create(Creditor_Create $parameters)
    {
      return $this->__soapCall('Creditor_Create', array($parameters));
    }

    /**
     * @param Creditor_SetRemittanceInformation $parameters
     * @return Creditor_SetRemittanceInformationResponse
     */
    public function Creditor_SetRemittanceInformation(Creditor_SetRemittanceInformation $parameters)
    {
      return $this->__soapCall('Creditor_SetRemittanceInformation', array($parameters));
    }

    /**
     * Return handles for all creditors
     *
     * @param Creditor_GetAll $parameters
     * @return Creditor_GetAllResponse
     */
    public function Creditor_GetAll(Creditor_GetAll $parameters)
    {
      return $this->__soapCall('Creditor_GetAll', array($parameters));
    }

    /**
     * Return handles for all creditors from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param Creditor_GetAllUpdated $parameters
     * @return Creditor_GetAllUpdatedResponse
     */
    public function Creditor_GetAllUpdated(Creditor_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Creditor_GetAllUpdated', array($parameters));
    }

    /**
     * Returns handle for creditor with a given number.
     *
     * @param Creditor_FindByNumber $parameters
     * @return Creditor_FindByNumberResponse
     */
    public function Creditor_FindByNumber(Creditor_FindByNumber $parameters)
    {
      return $this->__soapCall('Creditor_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the creditors corresponding to the given creditor numbers. If a creditor with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Creditor_FindByNumberList $parameters
     * @return Creditor_FindByNumberListResponse
     */
    public function Creditor_FindByNumberList(Creditor_FindByNumberList $parameters)
    {
      return $this->__soapCall('Creditor_FindByNumberList', array($parameters));
    }

    /**
     * Returns handle for creditors with a given name.<br />Parameters: The name to search for.
     *
     * @param Creditor_FindByName $parameters
     * @return Creditor_FindByNameResponse
     */
    public function Creditor_FindByName(Creditor_FindByName $parameters)
    {
      return $this->__soapCall('Creditor_FindByName', array($parameters));
    }

    /**
     * Gets handles for creditor contacts of a creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetCreditorContacts $parameters
     * @return Creditor_GetCreditorContactsResponse
     */
    public function Creditor_GetCreditorContacts(Creditor_GetCreditorContacts $parameters)
    {
      return $this->__soapCall('Creditor_GetCreditorContacts', array($parameters));
    }

    /**
     * Deletes a creditor.<br />Parameters: creditorHandle: Handle for creditor.
     *
     * @param Creditor_Delete $parameters
     * @return Creditor_DeleteResponse
     */
    public function Creditor_Delete(Creditor_Delete $parameters)
    {
      return $this->__soapCall('Creditor_Delete', array($parameters));
    }

    /**
     * Gets handles for the entries of the creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetEntries $parameters
     * @return Creditor_GetEntriesResponse
     */
    public function Creditor_GetEntries(Creditor_GetEntries $parameters)
    {
      return $this->__soapCall('Creditor_GetEntries', array($parameters));
    }

    /**
     * Gets handles for the entries of the creditor that match the voucherNo.<br />Parameters: creditorHandle: Handle for the creditor. voucherNo: The voucher number you wish to filter by.
     *
     * @param Creditor_GetEntriesByVoucherNo $parameters
     * @return Creditor_GetEntriesByVoucherNoResponse
     */
    public function Creditor_GetEntriesByVoucherNo(Creditor_GetEntriesByVoucherNo $parameters)
    {
      return $this->__soapCall('Creditor_GetEntriesByVoucherNo', array($parameters));
    }

    /**
     * Gets handles for the entries of the creditor that match the invoiceNo.<br />Parameters: creditorHandle: Handle for the creditor. invoiceNo: The invoice number you wish to filter by.
     *
     * @param Creditor_GetEntriesByInvoiceNo $parameters
     * @return Creditor_GetEntriesByInvoiceNoResponse
     */
    public function Creditor_GetEntriesByInvoiceNo(Creditor_GetEntriesByInvoiceNo $parameters)
    {
      return $this->__soapCall('Creditor_GetEntriesByInvoiceNo', array($parameters));
    }

    /**
     * Gets handles for the entries of the creditor that match both the vouher number and invoice number.<br />Parameters: creditorHandle: Handle for the creditor. voucherNo: The voucher number you wish to filter by. invoiceNo: The invoice number you wish to filter by.
     *
     * @param Creditor_GetEntriesByVoucherNoAndInvoiceNo $parameters
     * @return Creditor_GetEntriesByVoucherNoAndInvoiceNoResponse
     */
    public function Creditor_GetEntriesByVoucherNoAndInvoiceNo(Creditor_GetEntriesByVoucherNoAndInvoiceNo $parameters)
    {
      return $this->__soapCall('Creditor_GetEntriesByVoucherNoAndInvoiceNo', array($parameters));
    }

    /**
     * Gets handles for the open entries of the creditor.<br />Parameters: creditorHandle: Handle for the creditor.
     *
     * @param Creditor_GetOpenEntries $parameters
     * @return Creditor_GetOpenEntriesResponse
     */
    public function Creditor_GetOpenEntries(Creditor_GetOpenEntries $parameters)
    {
      return $this->__soapCall('Creditor_GetOpenEntries', array($parameters));
    }

    /**
     * Creates a new creditor contact from a data object.<br />Parameters: data: The data object that specifies the properties of the new creditor contact.
     *
     * @param CreditorContact_CreateFromData $parameters
     * @return CreditorContact_CreateFromDataResponse
     */
    public function CreditorContact_CreateFromData(CreditorContact_CreateFromData $parameters)
    {
      return $this->__soapCall('CreditorContact_CreateFromData', array($parameters));
    }

    /**
     * Creates new creditor contacts from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new creditor contacts.
     *
     * @param CreditorContact_CreateFromDataArray $parameters
     * @return CreditorContact_CreateFromDataArrayResponse
     */
    public function CreditorContact_CreateFromDataArray(CreditorContact_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CreditorContact_CreateFromDataArray', array($parameters));
    }

    /**
     * Update creditor contacts from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CreditorContact_UpdateFromDataArray $parameters
     * @return CreditorContact_UpdateFromDataArrayResponse
     */
    public function CreditorContact_UpdateFromDataArray(CreditorContact_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CreditorContact_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a creditor contact from a data object.<br />Parameters: data: The data object.
     *
     * @param CreditorContact_UpdateFromData $parameters
     * @return CreditorContact_UpdateFromDataResponse
     */
    public function CreditorContact_UpdateFromData(CreditorContact_UpdateFromData $parameters)
    {
      return $this->__soapCall('CreditorContact_UpdateFromData', array($parameters));
    }

    /**
     * Returns a creditor contact data object for a given creditor contact.<br />Parameters: entityHandle: A handle for the creditor contact.
     *
     * @param CreditorContact_GetData $parameters
     * @return CreditorContact_GetDataResponse
     */
    public function CreditorContact_GetData(CreditorContact_GetData $parameters)
    {
      return $this->__soapCall('CreditorContact_GetData', array($parameters));
    }

    /**
     * Returns creditor contact data objects for a given set of creditor contact handles.<br />Parameters: entityHandles: An array of the creditor contact handles.
     *
     * @param CreditorContact_GetDataArray $parameters
     * @return CreditorContact_GetDataArrayResponse
     */
    public function CreditorContact_GetDataArray(CreditorContact_GetDataArray $parameters)
    {
      return $this->__soapCall('CreditorContact_GetDataArray', array($parameters));
    }

    /**
     * Gets a handle for the creditor of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetCreditor $parameters
     * @return CreditorContact_GetCreditorResponse
     */
    public function CreditorContact_GetCreditor(CreditorContact_GetCreditor $parameters)
    {
      return $this->__soapCall('CreditorContact_GetCreditor', array($parameters));
    }

    /**
     * Gets the name of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetName $parameters
     * @return CreditorContact_GetNameResponse
     */
    public function CreditorContact_GetName(CreditorContact_GetName $parameters)
    {
      return $this->__soapCall('CreditorContact_GetName', array($parameters));
    }

    /**
     * Sets the name of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact. value: The new name of the creditor contact.
     *
     * @param CreditorContact_SetName $parameters
     * @return CreditorContact_SetNameResponse
     */
    public function CreditorContact_SetName(CreditorContact_SetName $parameters)
    {
      return $this->__soapCall('CreditorContact_SetName', array($parameters));
    }

    /**
     * Gets the number of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetNumber $parameters
     * @return CreditorContact_GetNumberResponse
     */
    public function CreditorContact_GetNumber(CreditorContact_GetNumber $parameters)
    {
      return $this->__soapCall('CreditorContact_GetNumber', array($parameters));
    }

    /**
     * Sets the telephone number of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact. value: The new telephone number of the creditor contact.
     *
     * @param CreditorContact_SetTelephoneNumber $parameters
     * @return CreditorContact_SetTelephoneNumberResponse
     */
    public function CreditorContact_SetTelephoneNumber(CreditorContact_SetTelephoneNumber $parameters)
    {
      return $this->__soapCall('CreditorContact_SetTelephoneNumber', array($parameters));
    }

    /**
     * Gets the telephone number of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetTelephoneNumber $parameters
     * @return CreditorContact_GetTelephoneNumberResponse
     */
    public function CreditorContact_GetTelephoneNumber(CreditorContact_GetTelephoneNumber $parameters)
    {
      return $this->__soapCall('CreditorContact_GetTelephoneNumber', array($parameters));
    }

    /**
     * Sets the email of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact. value: The new email of the creditor contact.
     *
     * @param CreditorContact_SetEmail $parameters
     * @return CreditorContact_SetEmailResponse
     */
    public function CreditorContact_SetEmail(CreditorContact_SetEmail $parameters)
    {
      return $this->__soapCall('CreditorContact_SetEmail', array($parameters));
    }

    /**
     * Gets the email of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetEmail $parameters
     * @return CreditorContact_GetEmailResponse
     */
    public function CreditorContact_GetEmail(CreditorContact_GetEmail $parameters)
    {
      return $this->__soapCall('CreditorContact_GetEmail', array($parameters));
    }

    /**
     * Gets the comments of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetComments $parameters
     * @return CreditorContact_GetCommentsResponse
     */
    public function CreditorContact_GetComments(CreditorContact_GetComments $parameters)
    {
      return $this->__soapCall('CreditorContact_GetComments', array($parameters));
    }

    /**
     * Sets the comments of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact. value: The new comments of the creditor contact.
     *
     * @param CreditorContact_SetComments $parameters
     * @return CreditorContact_SetCommentsResponse
     */
    public function CreditorContact_SetComments(CreditorContact_SetComments $parameters)
    {
      return $this->__soapCall('CreditorContact_SetComments', array($parameters));
    }

    /**
     * Gets the external ID of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_GetExternalId $parameters
     * @return CreditorContact_GetExternalIdResponse
     */
    public function CreditorContact_GetExternalId(CreditorContact_GetExternalId $parameters)
    {
      return $this->__soapCall('CreditorContact_GetExternalId', array($parameters));
    }

    /**
     * Sets the external ID of a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact. value: The new external ID of the creditor contact.
     *
     * @param CreditorContact_SetExternalId $parameters
     * @return CreditorContact_SetExternalIdResponse
     */
    public function CreditorContact_SetExternalId(CreditorContact_SetExternalId $parameters)
    {
      return $this->__soapCall('CreditorContact_SetExternalId', array($parameters));
    }

    /**
     * Creates a new creditor contact.
     *
     * @param CreditorContact_Create $parameters
     * @return CreditorContact_CreateResponse
     */
    public function CreditorContact_Create(CreditorContact_Create $parameters)
    {
      return $this->__soapCall('CreditorContact_Create', array($parameters));
    }

    /**
     * Returns handles for all creditor contacts.
     *
     * @param CreditorContact_GetAll $parameters
     * @return CreditorContact_GetAllResponse
     */
    public function CreditorContact_GetAll(CreditorContact_GetAll $parameters)
    {
      return $this->__soapCall('CreditorContact_GetAll', array($parameters));
    }

    /**
     * Returns handles for creditor contacts with the given name.
     *
     * @param CreditorContact_FindByName $parameters
     * @return CreditorContact_FindByNameResponse
     */
    public function CreditorContact_FindByName(CreditorContact_FindByName $parameters)
    {
      return $this->__soapCall('CreditorContact_FindByName', array($parameters));
    }

    /**
     * Deletes a creditor contact.<br />Parameters: creditorContactHandle: Handle for the creditor contact.
     *
     * @param CreditorContact_Delete $parameters
     * @return CreditorContact_DeleteResponse
     */
    public function CreditorContact_Delete(CreditorContact_Delete $parameters)
    {
      return $this->__soapCall('CreditorContact_Delete', array($parameters));
    }

    /**
     * Returns a creditor entry data object for a given creditor entry.<br />Parameters: entityHandle: A handle for the creditor entry.
     *
     * @param CreditorEntry_GetData $parameters
     * @return CreditorEntry_GetDataResponse
     */
    public function CreditorEntry_GetData(CreditorEntry_GetData $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetData', array($parameters));
    }

    /**
     * Returns creditor entry data objects for a given set of creditor entry handles.<br />Parameters: entityHandles: An array of the creditor entry handles.
     *
     * @param CreditorEntry_GetDataArray $parameters
     * @return CreditorEntry_GetDataArrayResponse
     */
    public function CreditorEntry_GetDataArray(CreditorEntry_GetDataArray $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of the creditor entry.<br />Parameters: creditorentryHandle: Handle for the creditor entry.
     *
     * @param CreditorEntry_GetSerialNumber $parameters
     * @return CreditorEntry_GetSerialNumberResponse
     */
    public function CreditorEntry_GetSerialNumber(CreditorEntry_GetSerialNumber $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetSerialNumber', array($parameters));
    }

    /**
     * Gets the entry type of the creditor entry.<br />
     *
     * @param CreditorEntry_GetType $parameters
     * @return CreditorEntry_GetTypeResponse
     */
    public function CreditorEntry_GetType(CreditorEntry_GetType $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetType', array($parameters));
    }

    /**
     * Gets the date of the creditor entry.<br />
     *
     * @param CreditorEntry_GetDate $parameters
     * @return CreditorEntry_GetDateResponse
     */
    public function CreditorEntry_GetDate(CreditorEntry_GetDate $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetDate', array($parameters));
    }

    /**
     * Gets the creditor of the creditor entry.<br />
     *
     * @param CreditorEntry_GetCreditor $parameters
     * @return CreditorEntry_GetCreditorResponse
     */
    public function CreditorEntry_GetCreditor(CreditorEntry_GetCreditor $parameters)
    {
      return $this->__soapCall('CreditorEntry_GetCreditor', array($parameters));
    }

    /**
     * Gets the due date of a cash book entry. Due date is only accessible when cash book entry is of type CreditorInvoice.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDueDate $parameters
     * @return CashBookEntry_GetDueDateResponse
     */
    public function CashBookEntry_GetDueDate(CashBookEntry_GetDueDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDueDate', array($parameters));
    }

    /**
     * Sets the department of a cash book entry. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: Handle for the new department of the cash book entry.
     *
     * @param CashBookEntry_SetDepartment $parameters
     * @return CashBookEntry_SetDepartmentResponse
     */
    public function CashBookEntry_SetDepartment(CashBookEntry_SetDepartment $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the department of a cash book entry. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDepartment $parameters
     * @return CashBookEntry_GetDepartmentResponse
     */
    public function CashBookEntry_GetDepartment(CashBookEntry_GetDepartment $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of a cash book entry. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDistributionKey $parameters
     * @return CashBookEntry_GetDistributionKeyResponse
     */
    public function CashBookEntry_GetDistributionKey(CashBookEntry_GetDistributionKey $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDistributionKey', array($parameters));
    }

    /**
     * Sets the distribution key of a cash book entry. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: Handle for the new distribution key of the cash book entry.
     *
     * @param CashBookEntry_SetDistributionKey $parameters
     * @return CashBookEntry_SetDistributionKeyResponse
     */
    public function CashBookEntry_SetDistributionKey(CashBookEntry_SetDistributionKey $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDistributionKey', array($parameters));
    }

    /**
     * Gets a handle for the project of a cash book entry. To set project use CashBookEntry_SetProjectAndCostType. The project is only accessible when there is access to the Project Management add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetProject $parameters
     * @return CashBookEntry_GetProjectResponse
     */
    public function CashBookEntry_GetProject(CashBookEntry_GetProject $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetProject', array($parameters));
    }

    /**
     * Gets a handle for the cost type of a cash book entry. The cost type is only accessible when there is access to the Project Management add-on module. To set cost type use CashBookEntry_SetProjectAndCostType.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCostType $parameters
     * @return CashBookEntry_GetCostTypeResponse
     */
    public function CashBookEntry_GetCostType(CashBookEntry_GetCostType $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCostType', array($parameters));
    }

    /**
     * Gets a handle for the bank payment type of a cash book entry. To set bank payment type use CashBookEntry_SetRemittanceInformation.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetBankPaymentType $parameters
     * @return CashBookEntry_GetBankPaymentTypeResponse
     */
    public function CashBookEntry_GetBankPaymentType(CashBookEntry_GetBankPaymentType $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetBankPaymentType', array($parameters));
    }

    /**
     * Gets a handle for the bank payment creditor id of a cash book entry. To set bank payment creditor id use CashBookEntry_SetRemittanceInformation.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetBankPaymentCreditorId $parameters
     * @return CashBookEntry_GetBankPaymentCreditorIdResponse
     */
    public function CashBookEntry_GetBankPaymentCreditorId(CashBookEntry_GetBankPaymentCreditorId $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetBankPaymentCreditorId', array($parameters));
    }

    /**
     * Gets a handle for the bank payment creditor invoice id of a cash book entry. To set bank payment creditor invoice id use CashBookEntry_SetRemittanceInformation.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetBankPaymentCreditorInvoiceId $parameters
     * @return CashBookEntry_GetBankPaymentCreditorInvoiceIdResponse
     */
    public function CashBookEntry_GetBankPaymentCreditorInvoiceId(CashBookEntry_GetBankPaymentCreditorInvoiceId $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetBankPaymentCreditorInvoiceId', array($parameters));
    }

    /**
     * Gets the capitalise account of a cash book entry. To set the capitalise account use CashBookEntry_SetAccrualInformation. The capitalise account is only accessible when there is access to the Accruals add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCapitalise $parameters
     * @return CashBookEntry_GetCapitaliseResponse
     */
    public function CashBookEntry_GetCapitalise(CashBookEntry_GetCapitalise $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCapitalise', array($parameters));
    }

    /**
     * Gets the start date of the accrual in a cash book entry. To set the start date use CashBookEntry_SetAccrualInformation. The start date is only accessible when there is access to the Accruals add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetStartDate $parameters
     * @return CashBookEntry_GetStartDateResponse
     */
    public function CashBookEntry_GetStartDate(CashBookEntry_GetStartDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetStartDate', array($parameters));
    }

    /**
     * Gets the end date of the accrual in a cash book entry. To set the end date use CashBookEntry_SetAccrualInformation. The end date is only accessible when there is access to the Accruals add-on module.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetEndDate $parameters
     * @return CashBookEntry_GetEndDateResponse
     */
    public function CashBookEntry_GetEndDate(CashBookEntry_GetEndDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetEndDate', array($parameters));
    }

    /**
     * Sets the employeeNo of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new employeeNo.
     *
     * @param CashBookEntry_SetEmployee $parameters
     * @return CashBookEntry_SetEmployeeResponse
     */
    public function CashBookEntry_SetEmployee(CashBookEntry_SetEmployee $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetEmployee', array($parameters));
    }

    /**
     * Gets the employeeNo of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetEmployee $parameters
     * @return CashBookEntry_GetEmployeeResponse
     */
    public function CashBookEntry_GetEmployee(CashBookEntry_GetEmployee $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetEmployee', array($parameters));
    }

    /**
     * Creates a new cash book entry.<br />Parameters: type: The type of the cash book entry. cashBook: The cash book of the cash book entry. debtor: The debtor of the cash book entry. creditor: The creditor of the cash book entry. account: The account of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_Create $parameters
     * @return CashBookEntry_CreateResponse
     */
    public function CashBookEntry_Create(CashBookEntry_Create $parameters)
    {
      return $this->__soapCall('CashBookEntry_Create', array($parameters));
    }

    /**
     * Creates a new cash book entry of type DebtorPayment.<br />Parameters: cashBook: The cash book of the cash book entry. debtor: The debtor of the cash book entry. account: The account of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_CreateDebtorPayment $parameters
     * @return CashBookEntry_CreateDebtorPaymentResponse
     */
    public function CashBookEntry_CreateDebtorPayment(CashBookEntry_CreateDebtorPayment $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateDebtorPayment', array($parameters));
    }

    /**
     * Creates a new cash book entry of type Manual customer invoice.<br />Parameters: cashBook: The cash book of the cash book entry. debtor: The debtor of the cash book entry. account: The account of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_CreateManualDebtorInvoice $parameters
     * @return CashBookEntry_CreateManualDebtorInvoiceResponse
     */
    public function CashBookEntry_CreateManualDebtorInvoice(CashBookEntry_CreateManualDebtorInvoice $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateManualDebtorInvoice', array($parameters));
    }

    /**
     * Creates a new cash book entry of type CreditorPayment.<br />Parameters: type: cashBook: The cash book of the cash book entry. creditor: The creditor of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_CreateCreditorPayment $parameters
     * @return CashBookEntry_CreateCreditorPaymentResponse
     */
    public function CashBookEntry_CreateCreditorPayment(CashBookEntry_CreateCreditorPayment $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateCreditorPayment', array($parameters));
    }

    /**
     * Creates a new cash book entry of type CreditorInvoice.<br />Parameters: cashBook: The cash book of the cash book entry. creditor: The creditor of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_CreateCreditorInvoice $parameters
     * @return CashBookEntry_CreateCreditorInvoiceResponse
     */
    public function CashBookEntry_CreateCreditorInvoice(CashBookEntry_CreateCreditorInvoice $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateCreditorInvoice', array($parameters));
    }

    /**
     * Creates a new cash book entry of type FinanceVoucher.<br />Parameters: cashBook: The cash book of the cash book entry. account: The account of the cash book entry. contraAccount: The contra account of the cash book entry.
     *
     * @param CashBookEntry_CreateFinanceVoucher $parameters
     * @return CashBookEntry_CreateFinanceVoucherResponse
     */
    public function CashBookEntry_CreateFinanceVoucher(CashBookEntry_CreateFinanceVoucher $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateFinanceVoucher', array($parameters));
    }

    /**
     * Deletes a cash book entry.<br />Parameters: accountHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_Delete $parameters
     * @return CashBookEntry_DeleteResponse
     */
    public function CashBookEntry_Delete(CashBookEntry_Delete $parameters)
    {
      return $this->__soapCall('CashBookEntry_Delete', array($parameters));
    }

    /**
     * @param CashBookEntry_SetProjectAndCostType $parameters
     * @return CashBookEntry_SetProjectAndCostTypeResponse
     */
    public function CashBookEntry_SetProjectAndCostType(CashBookEntry_SetProjectAndCostType $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetProjectAndCostType', array($parameters));
    }

    /**
     * @param CashBookEntry_SetRemittanceInformation $parameters
     * @return CashBookEntry_SetRemittanceInformationResponse
     */
    public function CashBookEntry_SetRemittanceInformation(CashBookEntry_SetRemittanceInformation $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetRemittanceInformation', array($parameters));
    }

    /**
     * @param CashBookEntry_SetAccrualInformation $parameters
     * @return CashBookEntry_SetAccrualInformationResponse
     */
    public function CashBookEntry_SetAccrualInformation(CashBookEntry_SetAccrualInformation $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetAccrualInformation', array($parameters));
    }

    /**
     * @param Company_UpdateFromDataArray $parameters
     * @return Company_UpdateFromDataArrayResponse
     */
    public function Company_UpdateFromDataArray(Company_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Company_UpdateFromDataArray', array($parameters));
    }

    /**
     * @param Company_UpdateFromData $parameters
     * @return Company_UpdateFromDataResponse
     */
    public function Company_UpdateFromData(Company_UpdateFromData $parameters)
    {
      return $this->__soapCall('Company_UpdateFromData', array($parameters));
    }

    /**
     * Returns a company data object for a given company.<br />Parameters: entityHandle: A handle for the company.
     *
     * @param Company_GetData $parameters
     * @return Company_GetDataResponse
     */
    public function Company_GetData(Company_GetData $parameters)
    {
      return $this->__soapCall('Company_GetData', array($parameters));
    }

    /**
     * Returns company data objects for a given set of company handles.<br />Parameters: entityHandles: An array of company handles.
     *
     * @param Company_GetDataArray $parameters
     * @return Company_GetDataArrayResponse
     */
    public function Company_GetDataArray(Company_GetDataArray $parameters)
    {
      return $this->__soapCall('Company_GetDataArray', array($parameters));
    }

    /**
     * Returns a handle for the company
     *
     * @param Company_Get $parameters
     * @return Company_GetResponse
     */
    public function Company_Get(Company_Get $parameters)
    {
      return $this->__soapCall('Company_Get', array($parameters));
    }

    /**
     * Gets the agreement number of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetNumber $parameters
     * @return Company_GetNumberResponse
     */
    public function Company_GetNumber(Company_GetNumber $parameters)
    {
      return $this->__soapCall('Company_GetNumber', array($parameters));
    }

    /**
     * Gets the Currency entity of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetBaseCurrency $parameters
     * @return Company_GetBaseCurrencyResponse
     */
    public function Company_GetBaseCurrency(Company_GetBaseCurrency $parameters)
    {
      return $this->__soapCall('Company_GetBaseCurrency', array($parameters));
    }

    /**
     * Gets or sets the Name of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetName $parameters
     * @return Company_GetNameResponse
     */
    public function Company_GetName(Company_GetName $parameters)
    {
      return $this->__soapCall('Company_GetName', array($parameters));
    }

    /**
     * @param Company_SetName $parameters
     * @return Company_SetNameResponse
     */
    public function Company_SetName(Company_SetName $parameters)
    {
      return $this->__soapCall('Company_SetName', array($parameters));
    }

    /**
     * Gets or sets Address1 of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetAddress1 $parameters
     * @return Company_GetAddress1Response
     */
    public function Company_GetAddress1(Company_GetAddress1 $parameters)
    {
      return $this->__soapCall('Company_GetAddress1', array($parameters));
    }

    /**
     * @param Company_SetAddress1 $parameters
     * @return Company_SetAddress1Response
     */
    public function Company_SetAddress1(Company_SetAddress1 $parameters)
    {
      return $this->__soapCall('Company_SetAddress1', array($parameters));
    }

    /**
     * Gets or sets Address2 of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetAddress2 $parameters
     * @return Company_GetAddress2Response
     */
    public function Company_GetAddress2(Company_GetAddress2 $parameters)
    {
      return $this->__soapCall('Company_GetAddress2', array($parameters));
    }

    /**
     * @param Company_SetAddress2 $parameters
     * @return Company_SetAddress2Response
     */
    public function Company_SetAddress2(Company_SetAddress2 $parameters)
    {
      return $this->__soapCall('Company_SetAddress2', array($parameters));
    }

    /**
     * Gets or sets the Postalcode of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetPostalCode $parameters
     * @return Company_GetPostalCodeResponse
     */
    public function Company_GetPostalCode(Company_GetPostalCode $parameters)
    {
      return $this->__soapCall('Company_GetPostalCode', array($parameters));
    }

    /**
     * @param Company_SetPostalCode $parameters
     * @return Company_SetPostalCodeResponse
     */
    public function Company_SetPostalCode(Company_SetPostalCode $parameters)
    {
      return $this->__soapCall('Company_SetPostalCode', array($parameters));
    }

    /**
     * Gets or sets the City of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetCity $parameters
     * @return Company_GetCityResponse
     */
    public function Company_GetCity(Company_GetCity $parameters)
    {
      return $this->__soapCall('Company_GetCity', array($parameters));
    }

    /**
     * @param Company_SetCity $parameters
     * @return Company_SetCityResponse
     */
    public function Company_SetCity(Company_SetCity $parameters)
    {
      return $this->__soapCall('Company_SetCity', array($parameters));
    }

    /**
     * DEPRECATED! Gets the County of the Company. (UK only)<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetCounty $parameters
     * @return Company_GetCountyResponse
     */
    public function Company_GetCounty(Company_GetCounty $parameters)
    {
      return $this->__soapCall('Company_GetCounty', array($parameters));
    }

    /**
     * Gets or sets the Country of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetCountry $parameters
     * @return Company_GetCountryResponse
     */
    public function Company_GetCountry(Company_GetCountry $parameters)
    {
      return $this->__soapCall('Company_GetCountry', array($parameters));
    }

    /**
     * Returns all custom fields for the authorized application and agreement.
     *
     * @param Company_GetCustomFields $parameters
     * @return Company_GetCustomFieldsResponse
     */
    public function Company_GetCustomFields(Company_GetCustomFields $parameters)
    {
      return $this->__soapCall('Company_GetCustomFields', array($parameters));
    }

    /**
     * Adds, updates or deletes a batch of custom fields for the authorized application and agreement. <br/>Adds if the data key does not exist. <br/>Updates if the data key exist.<br/>Deletes if the data value is set to null or empty. <br/> Note: It is only per possibly to have 10 custom fields per combination of application and agreement.<br />Parameters: a custom field with a data key that is not null and not empty.
     *
     * @param Company_SetCustomFields $parameters
     * @return Company_SetCustomFieldsResponse
     */
    public function Company_SetCustomFields(Company_SetCustomFields $parameters)
    {
      return $this->__soapCall('Company_SetCustomFields', array($parameters));
    }

    /**
     * Deletes a custom field based on the provided data key. Note: Will not throw an exception if the provided data key does not exist. <br />Parameters: a dataKey
     *
     * @param Company_DeleteCustomField $parameters
     * @return Company_DeleteCustomFieldResponse
     */
    public function Company_DeleteCustomField(Company_DeleteCustomField $parameters)
    {
      return $this->__soapCall('Company_DeleteCustomField', array($parameters));
    }

    /**
     * @param Company_SetCountry $parameters
     * @return Company_SetCountryResponse
     */
    public function Company_SetCountry(Company_SetCountry $parameters)
    {
      return $this->__soapCall('Company_SetCountry', array($parameters));
    }

    /**
     * Gets or sets the Telephonenumber of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetTelephoneNumber $parameters
     * @return Company_GetTelephoneNumberResponse
     */
    public function Company_GetTelephoneNumber(Company_GetTelephoneNumber $parameters)
    {
      return $this->__soapCall('Company_GetTelephoneNumber', array($parameters));
    }

    /**
     * @param Company_SetTelephoneNumber $parameters
     * @return Company_SetTelephoneNumberResponse
     */
    public function Company_SetTelephoneNumber(Company_SetTelephoneNumber $parameters)
    {
      return $this->__soapCall('Company_SetTelephoneNumber', array($parameters));
    }

    /**
     * Gets the Faxnumber of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetFaxNumber $parameters
     * @return Company_GetFaxNumberResponse
     */
    public function Company_GetFaxNumber(Company_GetFaxNumber $parameters)
    {
      return $this->__soapCall('Company_GetFaxNumber', array($parameters));
    }

    /**
     * Gets the Mobilenumber of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetMobileNumber $parameters
     * @return Company_GetMobileNumberResponse
     */
    public function Company_GetMobileNumber(Company_GetMobileNumber $parameters)
    {
      return $this->__soapCall('Company_GetMobileNumber', array($parameters));
    }

    /**
     * Gets the Contact of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetContact $parameters
     * @return Company_GetContactResponse
     */
    public function Company_GetContact(Company_GetContact $parameters)
    {
      return $this->__soapCall('Company_GetContact', array($parameters));
    }

    /**
     * Gets or sets the Website of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetWebSite $parameters
     * @return Company_GetWebSiteResponse
     */
    public function Company_GetWebSite(Company_GetWebSite $parameters)
    {
      return $this->__soapCall('Company_GetWebSite', array($parameters));
    }

    /**
     * @param Company_SetWebSite $parameters
     * @return Company_SetWebSiteResponse
     */
    public function Company_SetWebSite(Company_SetWebSite $parameters)
    {
      return $this->__soapCall('Company_SetWebSite', array($parameters));
    }

    /**
     * Gets or sets the Email of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetEmail $parameters
     * @return Company_GetEmailResponse
     */
    public function Company_GetEmail(Company_GetEmail $parameters)
    {
      return $this->__soapCall('Company_GetEmail', array($parameters));
    }

    /**
     * @param Company_SetEmail $parameters
     * @return Company_SetEmailResponse
     */
    public function Company_SetEmail(Company_SetEmail $parameters)
    {
      return $this->__soapCall('Company_SetEmail', array($parameters));
    }

    /**
     * Gets or sets the Corporate Identification Number of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetCINumber $parameters
     * @return Company_GetCINumberResponse
     */
    public function Company_GetCINumber(Company_GetCINumber $parameters)
    {
      return $this->__soapCall('Company_GetCINumber', array($parameters));
    }

    /**
     * @param Company_SetCINumber $parameters
     * @return Company_SetCINumberResponse
     */
    public function Company_SetCINumber(Company_SetCINumber $parameters)
    {
      return $this->__soapCall('Company_SetCINumber', array($parameters));
    }

    /**
     * Gets or sets the VAT number of the Company. (SE,UK,DE,PL,FI only)<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetVatNumber $parameters
     * @return Company_GetVatNumberResponse
     */
    public function Company_GetVatNumber(Company_GetVatNumber $parameters)
    {
      return $this->__soapCall('Company_GetVatNumber', array($parameters));
    }

    /**
     * Gets the affiliation of the Company. (Reviso, e-conomic or Developer)
     *
     * @param Company_GetAffiliation $parameters
     * @return Company_GetAffiliationResponse
     */
    public function Company_GetAffiliation(Company_GetAffiliation $parameters)
    {
      return $this->__soapCall('Company_GetAffiliation', array($parameters));
    }

    /**
     * @param Company_SetVatNumber $parameters
     * @return Company_SetVatNumberResponse
     */
    public function Company_SetVatNumber(Company_SetVatNumber $parameters)
    {
      return $this->__soapCall('Company_SetVatNumber', array($parameters));
    }

    /**
     * Gets the Signup Date of the Company.<br />Parameters: companyHandle: Handle for the Company.
     *
     * @param Company_GetSignUpDate $parameters
     * @return Company_GetSignUpDateResponse
     */
    public function Company_GetSignUpDate(Company_GetSignUpDate $parameters)
    {
      return $this->__soapCall('Company_GetSignUpDate', array($parameters));
    }

    /**
     * Returns a cost type data object for a given cost type.<br />Parameters: entityHandle: A handle for the cost type.
     *
     * @param CostType_GetData $parameters
     * @return CostType_GetDataResponse
     */
    public function CostType_GetData(CostType_GetData $parameters)
    {
      return $this->__soapCall('CostType_GetData', array($parameters));
    }

    /**
     * Returns cost type data objects for a given set of cost type handles.<br />Parameters: entityHandles: An array of the cost type handles.
     *
     * @param CostType_GetDataArray $parameters
     * @return CostType_GetDataArrayResponse
     */
    public function CostType_GetDataArray(CostType_GetDataArray $parameters)
    {
      return $this->__soapCall('CostType_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a cost type.<br />Parameters: costTypeHandle: Handle for the cost type.
     *
     * @param CostType_GetNumber $parameters
     * @return CostType_GetNumberResponse
     */
    public function CostType_GetNumber(CostType_GetNumber $parameters)
    {
      return $this->__soapCall('CostType_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a cost type.<br />Parameters: costTypeHandle: Handle for the cost type.
     *
     * @param CostType_GetName $parameters
     * @return CostType_GetNameResponse
     */
    public function CostType_GetName(CostType_GetName $parameters)
    {
      return $this->__soapCall('CostType_GetName', array($parameters));
    }

    /**
     * Gets a handle for the CostTypeGroup of a cost type.<br />Parameters: costTypeHandle: Handle for the cost type.
     *
     * @param CostType_GetCostTypeGroup $parameters
     * @return CostType_GetCostTypeGroupResponse
     */
    public function CostType_GetCostTypeGroup(CostType_GetCostTypeGroup $parameters)
    {
      return $this->__soapCall('CostType_GetCostTypeGroup', array($parameters));
    }

    /**
     * Gets a handle for the VAT account of a cost type.<br />Parameters: costTypeHandle: Handle for the cost type.
     *
     * @param CostType_GetVatAccount $parameters
     * @return CostType_GetVatAccountResponse
     */
    public function CostType_GetVatAccount(CostType_GetVatAccount $parameters)
    {
      return $this->__soapCall('CostType_GetVatAccount', array($parameters));
    }

    /**
     * Return handles for all cost types.
     *
     * @param CostType_GetAll $parameters
     * @return CostType_GetAllResponse
     */
    public function CostType_GetAll(CostType_GetAll $parameters)
    {
      return $this->__soapCall('CostType_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the cost type with the given number.<br />Parameters: number: The number to search for.
     *
     * @param CostType_FindByNumber $parameters
     * @return CostType_FindByNumberResponse
     */
    public function CostType_FindByNumber(CostType_FindByNumber $parameters)
    {
      return $this->__soapCall('CostType_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for cost types corresponding to the given cost type numbers. If a cost type with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param CostType_FindByNumberList $parameters
     * @return CostType_FindByNumberListResponse
     */
    public function CostType_FindByNumberList(CostType_FindByNumberList $parameters)
    {
      return $this->__soapCall('CostType_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the cost types with the given name.<br />Parameters: name: The name to search for.
     *
     * @param CostType_FindByName $parameters
     * @return CostType_FindByNameResponse
     */
    public function CostType_FindByName(CostType_FindByName $parameters)
    {
      return $this->__soapCall('CostType_FindByName', array($parameters));
    }

    /**
     * Return handles for all cost types from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param CostType_GetAllUpdated $parameters
     * @return CostType_GetAllUpdatedResponse
     */
    public function CostType_GetAllUpdated(CostType_GetAllUpdated $parameters)
    {
      return $this->__soapCall('CostType_GetAllUpdated', array($parameters));
    }

    /**
     * Returns an CostTypeGroup data object for a given CostTypeGroup.<br />Parameters: entityHandle: A handle for the CostTypeGroup.
     *
     * @param CostTypeGroup_GetData $parameters
     * @return CostTypeGroup_GetDataResponse
     */
    public function CostTypeGroup_GetData(CostTypeGroup_GetData $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetData', array($parameters));
    }

    /**
     * Returns CostTypeGroup data objects for a given set of CostTypeGroup handles.<br />Parameters: entityHandles: An array of the CostTypeGroup handles.
     *
     * @param CostTypeGroup_GetDataArray $parameters
     * @return CostTypeGroup_GetDataArrayResponse
     */
    public function CostTypeGroup_GetDataArray(CostTypeGroup_GetDataArray $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetDataArray', array($parameters));
    }

    /**
     * Gets the number of a CostTypeGroup.<br />Parameters: costTypeGroupHandle: Handle for the CostTypeGroup.
     *
     * @param CostTypeGroup_GetNumber $parameters
     * @return CostTypeGroup_GetNumberResponse
     */
    public function CostTypeGroup_GetNumber(CostTypeGroup_GetNumber $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a CostTypeGroup.<br />Parameters: costTypeGroupHandle: Handle for the CostTypeGroup.
     *
     * @param CostTypeGroup_GetName $parameters
     * @return CostTypeGroup_GetNameResponse
     */
    public function CostTypeGroup_GetName(CostTypeGroup_GetName $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetName', array($parameters));
    }

    /**
     * Gets a handle for the ongoing account of a CostTypeGroup.<br />Parameters: costTypeGroupHandle: Handle for the CostTypeGroup.
     *
     * @param CostTypeGroup_GetAccountOngoing $parameters
     * @return CostTypeGroup_GetAccountOngoingResponse
     */
    public function CostTypeGroup_GetAccountOngoing(CostTypeGroup_GetAccountOngoing $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetAccountOngoing', array($parameters));
    }

    /**
     * Gets a handle for the closed account of a CostTypeGroup.<br />Parameters: costTypeGroupHandle: Handle for the CostTypeGroup.
     *
     * @param CostTypeGroup_GetAccountClosed $parameters
     * @return CostTypeGroup_GetAccountClosedResponse
     */
    public function CostTypeGroup_GetAccountClosed(CostTypeGroup_GetAccountClosed $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetAccountClosed', array($parameters));
    }

    /**
     * Return handles for all CostTypeGroups.
     *
     * @param CostTypeGroup_GetAll $parameters
     * @return CostTypeGroup_GetAllResponse
     */
    public function CostTypeGroup_GetAll(CostTypeGroup_GetAll $parameters)
    {
      return $this->__soapCall('CostTypeGroup_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the CostTypeGroup with the given number.<br />Parameters: number: The number to search for.
     *
     * @param CostTypeGroup_FindByNumber $parameters
     * @return CostTypeGroup_FindByNumberResponse
     */
    public function CostTypeGroup_FindByNumber(CostTypeGroup_FindByNumber $parameters)
    {
      return $this->__soapCall('CostTypeGroup_FindByNumber', array($parameters));
    }

    /**
     * Returns handles for the CostTypeGroups with the given name.<br />Parameters: name: The name to search for.
     *
     * @param CostTypeGroup_FindByName $parameters
     * @return CostTypeGroup_FindByNameResponse
     */
    public function CostTypeGroup_FindByName(CostTypeGroup_FindByName $parameters)
    {
      return $this->__soapCall('CostTypeGroup_FindByName', array($parameters));
    }

    /**
     * Creates a new creditor from a data object.<br />Parameters: data: The data object that specifies the properties of the new creditor.
     *
     * @param Creditor_CreateFromData $parameters
     * @return Creditor_CreateFromDataResponse
     */
    public function Creditor_CreateFromData(Creditor_CreateFromData $parameters)
    {
      return $this->__soapCall('Creditor_CreateFromData', array($parameters));
    }

    /**
     * Creates new creditor from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new creditors.
     *
     * @param Creditor_CreateFromDataArray $parameters
     * @return Creditor_CreateFromDataArrayResponse
     */
    public function Creditor_CreateFromDataArray(Creditor_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Creditor_CreateFromDataArray', array($parameters));
    }

    /**
     * Update budget figures from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param BudgetFigure_UpdateFromDataArray $parameters
     * @return BudgetFigure_UpdateFromDataArrayResponse
     */
    public function BudgetFigure_UpdateFromDataArray(BudgetFigure_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('BudgetFigure_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a budget figure from a data object.<br />Parameters: data: The data object.
     *
     * @param BudgetFigure_UpdateFromData $parameters
     * @return BudgetFigure_UpdateFromDataResponse
     */
    public function BudgetFigure_UpdateFromData(BudgetFigure_UpdateFromData $parameters)
    {
      return $this->__soapCall('BudgetFigure_UpdateFromData', array($parameters));
    }

    /**
     * Returns a budget figure data object for a given budgetfigure.<br />Parameters: entityHandle: A handle for the budget figure.
     *
     * @param BudgetFigure_GetData $parameters
     * @return BudgetFigure_GetDataResponse
     */
    public function BudgetFigure_GetData(BudgetFigure_GetData $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetData', array($parameters));
    }

    /**
     * Returns budget figure data objects for a given set of budget figure handles.<br />Parameters: entityHandles: An array of budget figure handles.
     *
     * @param BudgetFigure_GetDataArray $parameters
     * @return BudgetFigure_GetDataArrayResponse
     */
    public function BudgetFigure_GetDataArray(BudgetFigure_GetDataArray $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetDataArray', array($parameters));
    }

    /**
     * Set the account of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure. valueHandle: New handle for new account of the budget figure.
     *
     * @param BudgetFigure_SetAccount $parameters
     * @return BudgetFigure_SetAccountResponse
     */
    public function BudgetFigure_SetAccount(BudgetFigure_SetAccount $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetAccount', array($parameters));
    }

    /**
     * Get handle for account of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetAccount $parameters
     * @return BudgetFigure_GetAccountResponse
     */
    public function BudgetFigure_GetAccount(BudgetFigure_GetAccount $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetAccount', array($parameters));
    }

    /**
     * Sets the text of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: The new text of the budget figure.
     *
     * @param BudgetFigure_SetText $parameters
     * @return BudgetFigure_SetTextResponse
     */
    public function BudgetFigure_SetText(BudgetFigure_SetText $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetText', array($parameters));
    }

    /**
     * Gets the text of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetText $parameters
     * @return BudgetFigure_GetTextResponse
     */
    public function BudgetFigure_GetText(BudgetFigure_GetText $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetText', array($parameters));
    }

    /**
     * Gets the fromdate of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetFromDate $parameters
     * @return BudgetFigure_GetFromDateResponse
     */
    public function BudgetFigure_GetFromDate(BudgetFigure_GetFromDate $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetFromDate', array($parameters));
    }

    /**
     * Sets the fromdate of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: The new fromdate of the budget figure.
     *
     * @param BudgetFigure_SetFromDate $parameters
     * @return BudgetFigure_SetFromDateResponse
     */
    public function BudgetFigure_SetFromDate(BudgetFigure_SetFromDate $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetFromDate', array($parameters));
    }

    /**
     * Sets the todate of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: The new todate of the budget figure.
     *
     * @param BudgetFigure_SetToDate $parameters
     * @return BudgetFigure_SetToDateResponse
     */
    public function BudgetFigure_SetToDate(BudgetFigure_SetToDate $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetToDate', array($parameters));
    }

    /**
     * Gets the todate of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetToDate $parameters
     * @return BudgetFigure_GetToDateResponse
     */
    public function BudgetFigure_GetToDate(BudgetFigure_GetToDate $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetToDate', array($parameters));
    }

    /**
     * Gets the amount of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetAmountDefaultCurrency $parameters
     * @return BudgetFigure_GetAmountDefaultCurrencyResponse
     */
    public function BudgetFigure_GetAmountDefaultCurrency(BudgetFigure_GetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets a handle for the unit1 of a budget figure. The unit1 is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetUnit1 $parameters
     * @return BudgetFigure_GetUnit1Response
     */
    public function BudgetFigure_GetUnit1(BudgetFigure_GetUnit1 $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetUnit1', array($parameters));
    }

    /**
     * Gets a handle for the unit2 of a budget figure. The unit2 is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetUnit2 $parameters
     * @return BudgetFigure_GetUnit2Response
     */
    public function BudgetFigure_GetUnit2(BudgetFigure_GetUnit2 $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetUnit2', array($parameters));
    }

    /**
     * Gets the quantity1 of a budget figure. The quantity1 is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetQuantity1 $parameters
     * @return BudgetFigure_GetQuantity1Response
     */
    public function BudgetFigure_GetQuantity1(BudgetFigure_GetQuantity1 $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetQuantity1', array($parameters));
    }

    /**
     * Gets the quantity2 of a budget figure. The quantity2 is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetQuantity2 $parameters
     * @return BudgetFigure_GetQuantity2Response
     */
    public function BudgetFigure_GetQuantity2(BudgetFigure_GetQuantity2 $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetQuantity2', array($parameters));
    }

    /**
     * Sets the amount of a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: The new amount of the budget figure.
     *
     * @param BudgetFigure_SetAmountDefaultCurrency $parameters
     * @return BudgetFigure_SetAmountDefaultCurrencyResponse
     */
    public function BudgetFigure_SetAmountDefaultCurrency(BudgetFigure_SetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Sets the department of a budget figure. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: Handle for the new department of the budget figure.
     *
     * @param BudgetFigure_SetDepartment $parameters
     * @return BudgetFigure_SetDepartmentResponse
     */
    public function BudgetFigure_SetDepartment(BudgetFigure_SetDepartment $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the department of a budget figure. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetDepartment $parameters
     * @return BudgetFigure_GetDepartmentResponse
     */
    public function BudgetFigure_GetDepartment(BudgetFigure_GetDepartment $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetDepartment', array($parameters));
    }

    /**
     * Sets the distribution key of a budget figure. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: budgetfigureHandle: Handle for the budget figure. value: Handle for the new distribution key of the budget figure.
     *
     * @param BudgetFigure_SetDistributionKey $parameters
     * @return BudgetFigure_SetDistributionKeyResponse
     */
    public function BudgetFigure_SetDistributionKey(BudgetFigure_SetDistributionKey $parameters)
    {
      return $this->__soapCall('BudgetFigure_SetDistributionKey', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of a budget figure. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_GetDistributionKey $parameters
     * @return BudgetFigure_GetDistributionKeyResponse
     */
    public function BudgetFigure_GetDistributionKey(BudgetFigure_GetDistributionKey $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetDistributionKey', array($parameters));
    }

    /**
     * Creates a new budget figure.<br />Parameters: account: The account of the budget figure text: The text of the budget figure fromDate: The start date of the budget figure. toDate: The end date of the budget figure. amountDefaultCurrency: The amount in the default currency of the budget figure.
     *
     * @param BudgetFigure_Create $parameters
     * @return BudgetFigure_CreateResponse
     */
    public function BudgetFigure_Create(BudgetFigure_Create $parameters)
    {
      return $this->__soapCall('BudgetFigure_Create', array($parameters));
    }

    /**
     * Deletes a budget figure.<br />Parameters: budgetfigureHandle: Handle for the budget figure.
     *
     * @param BudgetFigure_Delete $parameters
     * @return BudgetFigure_DeleteResponse
     */
    public function BudgetFigure_Delete(BudgetFigure_Delete $parameters)
    {
      return $this->__soapCall('BudgetFigure_Delete', array($parameters));
    }

    /**
     * Return handles for all budget figures.
     *
     * @param BudgetFigure_GetAll $parameters
     * @return BudgetFigure_GetAllResponse
     */
    public function BudgetFigure_GetAll(BudgetFigure_GetAll $parameters)
    {
      return $this->__soapCall('BudgetFigure_GetAll', array($parameters));
    }

    /**
     * Returns an array with handles for the budget figures within a time interval.<br />Parameters: fromDate: First day in the interval. toDate: Last day in the interval.
     *
     * @param BudgetFigure_FindByDate $parameters
     * @return BudgetFigure_FindByDateResponse
     */
    public function BudgetFigure_FindByDate(BudgetFigure_FindByDate $parameters)
    {
      return $this->__soapCall('BudgetFigure_FindByDate', array($parameters));
    }

    /**
     * Update cash books from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CashBook_UpdateFromDataArray $parameters
     * @return CashBook_UpdateFromDataArrayResponse
     */
    public function CashBook_UpdateFromDataArray(CashBook_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CashBook_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a cash book from a data object.<br />Parameters: data: The data object.
     *
     * @param CashBook_UpdateFromData $parameters
     * @return CashBook_UpdateFromDataResponse
     */
    public function CashBook_UpdateFromData(CashBook_UpdateFromData $parameters)
    {
      return $this->__soapCall('CashBook_UpdateFromData', array($parameters));
    }

    /**
     * Returns a cash book data object for a given cash book.<br />Parameters: entityHandle: A handle for the cash book.
     *
     * @param CashBook_GetData $parameters
     * @return CashBook_GetDataResponse
     */
    public function CashBook_GetData(CashBook_GetData $parameters)
    {
      return $this->__soapCall('CashBook_GetData', array($parameters));
    }

    /**
     * Returns cash book data objects for a given set of cash book handles.<br />Parameters: entityHandles: An array of the cash book handles.
     *
     * @param CashBook_GetDataArray $parameters
     * @return CashBook_GetDataArrayResponse
     */
    public function CashBook_GetDataArray(CashBook_GetDataArray $parameters)
    {
      return $this->__soapCall('CashBook_GetDataArray', array($parameters));
    }

    /**
     * Return handles for all cash books.
     *
     * @param CashBook_GetAll $parameters
     * @return CashBook_GetAllResponse
     */
    public function CashBook_GetAll(CashBook_GetAll $parameters)
    {
      return $this->__soapCall('CashBook_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the cash book with the given number.<br />Parameters: number: The number to search for.
     *
     * @param CashBook_FindByNumber $parameters
     * @return CashBook_FindByNumberResponse
     */
    public function CashBook_FindByNumber(CashBook_FindByNumber $parameters)
    {
      return $this->__soapCall('CashBook_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the cash books corresponding to the given numbers. If a cash book with a given number does not exist then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param CashBook_FindByNumberList $parameters
     * @return CashBook_FindByNumberListResponse
     */
    public function CashBook_FindByNumberList(CashBook_FindByNumberList $parameters)
    {
      return $this->__soapCall('CashBook_FindByNumberList', array($parameters));
    }

    /**
     * Returns a handle for the cash book with the given name.<br />Parameters: name: The name to search for.
     *
     * @param CashBook_FindByName $parameters
     * @return CashBook_FindByNameResponse
     */
    public function CashBook_FindByName(CashBook_FindByName $parameters)
    {
      return $this->__soapCall('CashBook_FindByName', array($parameters));
    }

    /**
     * Returns an array with handles for the cash books corresponding to the given names. If a cash book with a given name does not exist or if no name is given then the array contains nothing at that index.<br />Parameters: names: The names to search for.
     *
     * @param CashBook_FindByNameList $parameters
     * @return CashBook_FindByNameListResponse
     */
    public function CashBook_FindByNameList(CashBook_FindByNameList $parameters)
    {
      return $this->__soapCall('CashBook_FindByNameList', array($parameters));
    }

    /**
     * Assigns a PDF document to a voucher number.<br />Parameters: data: PDF document. voucherNumber: Voucher number. entryDate: Entry date.
     *
     * @param CashBook_RegisterPdfVoucher $parameters
     * @return CashBook_RegisterPdfVoucherResponse
     */
    public function CashBook_RegisterPdfVoucher(CashBook_RegisterPdfVoucher $parameters)
    {
      return $this->__soapCall('CashBook_RegisterPdfVoucher', array($parameters));
    }

    /**
     * Get the next available voucher number for the cashbook.
     *
     * @param CashBook_GetNextVoucherNumber $parameters
     * @return CashBook_GetNextVoucherNumberResponse
     */
    public function CashBook_GetNextVoucherNumber(CashBook_GetNextVoucherNumber $parameters)
    {
      return $this->__soapCall('CashBook_GetNextVoucherNumber', array($parameters));
    }

    /**
     * Gets the entries in the cashbook.
     *
     * @param CashBook_GetEntries $parameters
     * @return CashBook_GetEntriesResponse
     */
    public function CashBook_GetEntries(CashBook_GetEntries $parameters)
    {
      return $this->__soapCall('CashBook_GetEntries', array($parameters));
    }

    /**
     * Delete all entries from a cash book. Action that cannot be undone.<br />Parameters: cashBookHandle: Handle for the cash book.
     *
     * @param CashBook_DeleteAllEntries $parameters
     * @return CashBook_DeleteAllEntriesResponse
     */
    public function CashBook_DeleteAllEntries(CashBook_DeleteAllEntries $parameters)
    {
      return $this->__soapCall('CashBook_DeleteAllEntries', array($parameters));
    }

    /**
     * Books all entries in the cashbook.
     *
     * @param CashBook_Book $parameters
     * @return CashBook_BookResponse
     */
    public function CashBook_Book(CashBook_Book $parameters)
    {
      return $this->__soapCall('CashBook_Book', array($parameters));
    }

    /**
     * Books entries in the cashbook between fromDate and toDate.<br />Parameters: fromDate: The fromDate, toDate: The toDate.
     *
     * @param CashBook_BookWithDate $parameters
     * @return CashBook_BookWithDateResponse
     */
    public function CashBook_BookWithDate(CashBook_BookWithDate $parameters)
    {
      return $this->__soapCall('CashBook_BookWithDate', array($parameters));
    }

    /**
     * Books entries in the cashbook between fromDate and toDate. Some or all entries are in a closed period.<br />Parameters: fromDate: The fromDate, toDate: The toDate, accrualDate: The accrualDate, accrualText: The accrualText.
     *
     * @param CashBook_BookWithDateClosedPeriod $parameters
     * @return CashBook_BookWithDateClosedPeriodResponse
     */
    public function CashBook_BookWithDateClosedPeriod(CashBook_BookWithDateClosedPeriod $parameters)
    {
      return $this->__soapCall('CashBook_BookWithDateClosedPeriod', array($parameters));
    }

    /**
     * Gets the number of a cash book.<br />Parameters: cashBookHandle: Handle for the cash book.
     *
     * @param CashBook_GetNumber $parameters
     * @return CashBook_GetNumberResponse
     */
    public function CashBook_GetNumber(CashBook_GetNumber $parameters)
    {
      return $this->__soapCall('CashBook_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a cash book.<br />Parameters: cashBookHandle: Handle for the cash book.
     *
     * @param CashBook_GetName $parameters
     * @return CashBook_GetNameResponse
     */
    public function CashBook_GetName(CashBook_GetName $parameters)
    {
      return $this->__soapCall('CashBook_GetName', array($parameters));
    }

    /**
     * Sets the name of a cash book.<br />Parameters: cashBookHandle: Handle for the cash book. value: The new name.
     *
     * @param CashBook_SetName $parameters
     * @return CashBook_SetNameResponse
     */
    public function CashBook_SetName(CashBook_SetName $parameters)
    {
      return $this->__soapCall('CashBook_SetName', array($parameters));
    }

    /**
     * Creates a new cash book entry from a data object.<br />Parameters: data: The data object that specifies the properties of the new cash book entry.
     *
     * @param CashBookEntry_CreateFromData $parameters
     * @return CashBookEntry_CreateFromDataResponse
     */
    public function CashBookEntry_CreateFromData(CashBookEntry_CreateFromData $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateFromData', array($parameters));
    }

    /**
     * Creates a copy of all the entries that match the same voucher number and date as the selected entry.<br />Parameters: cashBookEntryHandle: Handle for the cashbook entry that is base for the copy. newVoucherNumber: New voucher number if needed. If left out the voucher number from the entry copied is used. newVoucherDate: New voucher date if needed. If left out the date from the entry copied is used. newText: New text if needed. If left out the text from the entry copied is used. newCashBook: The CashBook to create the new entries on.
     *
     * @param Entry_CopyVoucher $parameters
     * @return Entry_CopyVoucherResponse
     */
    public function Entry_CopyVoucher(Entry_CopyVoucher $parameters)
    {
      return $this->__soapCall('Entry_CopyVoucher', array($parameters));
    }

    /**
     * Reverse all the entries that belong to the same voucher and are on the same date as this entry. Reverse creates opposite entries, thus undoing the voucher entries. This is done by multiplying amounts by -1.<br />Parameters: cashBookEntryHandle: Handle for the cashbook entry that is base for the copy. newVoucherNumber: New voucher number if needed. If left out the voucher number from the entry copied is used. newVoucherDate: New voucher date if needed. If left out the date from the entry copied is used. newText: New text if needed. If left out the text from the entry copied is used. newCashBook: The CashBook to create the new entries on.
     *
     * @param Entry_ReverseVoucher $parameters
     * @return Entry_ReverseVoucherResponse
     */
    public function Entry_ReverseVoucher(Entry_ReverseVoucher $parameters)
    {
      return $this->__soapCall('Entry_ReverseVoucher', array($parameters));
    }

    /**
     * Turn all the entries that belong to the same voucher and are on the same date as this entry. Turn creates opposite entries, and then proceeds to create entries that have the opposite sign of the voucher entries. This is done by multiplying amounts by -2.<br />Parameters: cashBookEntryHandle: Handle for the cashbook entry that is base for the copy. newVoucherNumber: New voucher number if needed. If left out the voucher number from the entry copied is used. newVoucherDate: New voucher date if needed. If left out the date from the entry copied is used. newText: New text if needed. If left out the text from the entry copied is used. newCashBook: The CashBook to create the new entries on.
     *
     * @param Entry_TurnVoucher $parameters
     * @return Entry_TurnVoucherResponse
     */
    public function Entry_TurnVoucher(Entry_TurnVoucher $parameters)
    {
      return $this->__soapCall('Entry_TurnVoucher', array($parameters));
    }

    /**
     * Creates new cash book entries from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new cash book entries.
     *
     * @param CashBookEntry_CreateFromDataArray $parameters
     * @return CashBookEntry_CreateFromDataArrayResponse
     */
    public function CashBookEntry_CreateFromDataArray(CashBookEntry_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('CashBookEntry_CreateFromDataArray', array($parameters));
    }

    /**
     * Update cash book entries from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param CashBookEntry_UpdateFromDataArray $parameters
     * @return CashBookEntry_UpdateFromDataArrayResponse
     */
    public function CashBookEntry_UpdateFromDataArray(CashBookEntry_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('CashBookEntry_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates a cash book entry from a data object.<br />Parameters: data: The data object.
     *
     * @param CashBookEntry_UpdateFromData $parameters
     * @return CashBookEntry_UpdateFromDataResponse
     */
    public function CashBookEntry_UpdateFromData(CashBookEntry_UpdateFromData $parameters)
    {
      return $this->__soapCall('CashBookEntry_UpdateFromData', array($parameters));
    }

    /**
     * Returns a cash book entry data object for a given cash book entry.<br />Parameters: entityHandle: A handle for the cash book entry.
     *
     * @param CashBookEntry_GetData $parameters
     * @return CashBookEntry_GetDataResponse
     */
    public function CashBookEntry_GetData(CashBookEntry_GetData $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetData', array($parameters));
    }

    /**
     * Returns cash book entry data objects for a given set of cash book entry handles.<br />Parameters: entityHandles: An array of the cash book entry handles.
     *
     * @param CashBookEntry_GetDataArray $parameters
     * @return CashBookEntry_GetDataArrayResponse
     */
    public function CashBookEntry_GetDataArray(CashBookEntry_GetDataArray $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDataArray', array($parameters));
    }

    /**
     * Gets the type of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetType $parameters
     * @return CashBookEntry_GetTypeResponse
     */
    public function CashBookEntry_GetType(CashBookEntry_GetType $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetType', array($parameters));
    }

    /**
     * Gets the cash book of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCashBook $parameters
     * @return CashBookEntry_GetCashBookResponse
     */
    public function CashBookEntry_GetCashBook(CashBookEntry_GetCashBook $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCashBook', array($parameters));
    }

    /**
     * Sets the debtor of the cash book entry. The debtor is only accessible when the cash book entry is of type DebtorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_SetDebtor $parameters
     * @return CashBookEntry_SetDebtorResponse
     */
    public function CashBookEntry_SetDebtor(CashBookEntry_SetDebtor $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDebtor', array($parameters));
    }

    /**
     * Gets the debtor of a cash book entry. The debtor is only accessible when the cash book entry is of type DebtorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDebtor $parameters
     * @return CashBookEntry_GetDebtorResponse
     */
    public function CashBookEntry_GetDebtor(CashBookEntry_GetDebtor $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDebtor', array($parameters));
    }

    /**
     * Gets the creditor of a cash book entry. The creditor is only accessible when the cash book entry is of type CreditorInvoice or CreditorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCreditor $parameters
     * @return CashBookEntry_GetCreditorResponse
     */
    public function CashBookEntry_GetCreditor(CashBookEntry_GetCreditor $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCreditor', array($parameters));
    }

    /**
     * Sets the creditor of a cash book entry. The creditor is only accessible when the cash book entry is of type CreditorInvoice or CreditorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_SetCreditor $parameters
     * @return CashBookEntry_SetCreditorResponse
     */
    public function CashBookEntry_SetCreditor(CashBookEntry_SetCreditor $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetCreditor', array($parameters));
    }

    /**
     * Sets the account of a cash book entry. The account is only accessible when the cash book entry is of type FinanceVoucher.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_SetAccount $parameters
     * @return CashBookEntry_SetAccountResponse
     */
    public function CashBookEntry_SetAccount(CashBookEntry_SetAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetAccount', array($parameters));
    }

    /**
     * Gets the account of a cash book entry. The account is only accessible when the cash book entry is of type FinanceVoucher.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetAccount $parameters
     * @return CashBookEntry_GetAccountResponse
     */
    public function CashBookEntry_GetAccount(CashBookEntry_GetAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetAccount', array($parameters));
    }

    /**
     * Gets the contra account of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetContraAccount $parameters
     * @return CashBookEntry_GetContraAccountResponse
     */
    public function CashBookEntry_GetContraAccount(CashBookEntry_GetContraAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetContraAccount', array($parameters));
    }

    /**
     * Sets the contra account of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. valueHandle: handle for the new contra couunt.
     *
     * @param CashBookEntry_SetContraAccount $parameters
     * @return CashBookEntry_SetContraAccountResponse
     */
    public function CashBookEntry_SetContraAccount(CashBookEntry_SetContraAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetContraAccount', array($parameters));
    }

    /**
     * Sets the date of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new date value.
     *
     * @param CashBookEntry_SetDate $parameters
     * @return CashBookEntry_SetDateResponse
     */
    public function CashBookEntry_SetDate(CashBookEntry_SetDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDate', array($parameters));
    }

    /**
     * Gets the date of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDate $parameters
     * @return CashBookEntry_GetDateResponse
     */
    public function CashBookEntry_GetDate(CashBookEntry_GetDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDate', array($parameters));
    }

    /**
     * Sets the voucher number of a cash book entry. The voucher number must be at least 1.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new voucher number.
     *
     * @param CashBookEntry_SetVoucherNumber $parameters
     * @return CashBookEntry_SetVoucherNumberResponse
     */
    public function CashBookEntry_SetVoucherNumber(CashBookEntry_SetVoucherNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetVoucherNumber', array($parameters));
    }

    /**
     * Gets the voucher number of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetVoucherNumber $parameters
     * @return CashBookEntry_GetVoucherNumberResponse
     */
    public function CashBookEntry_GetVoucherNumber(CashBookEntry_GetVoucherNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetVoucherNumber', array($parameters));
    }

    /**
     * Gets the text of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetText $parameters
     * @return CashBookEntry_GetTextResponse
     */
    public function CashBookEntry_GetText(CashBookEntry_GetText $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetText', array($parameters));
    }

    /**
     * Sets the text of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new text value.
     *
     * @param CashBookEntry_SetText $parameters
     * @return CashBookEntry_SetTextResponse
     */
    public function CashBookEntry_SetText(CashBookEntry_SetText $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetText', array($parameters));
    }

    /**
     * Gets the amount (in default currency) of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetAmountDefaultCurrency $parameters
     * @return CashBookEntry_GetAmountDefaultCurrencyResponse
     */
    public function CashBookEntry_GetAmountDefaultCurrency(CashBookEntry_GetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Sets the amount (in default currency) of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new amount value.
     *
     * @param CashBookEntry_SetAmountDefaultCurrency $parameters
     * @return CashBookEntry_SetAmountDefaultCurrencyResponse
     */
    public function CashBookEntry_SetAmountDefaultCurrency(CashBookEntry_SetAmountDefaultCurrency $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetAmountDefaultCurrency', array($parameters));
    }

    /**
     * Gets the currency of the cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCurrency $parameters
     * @return CashBookEntry_GetCurrencyResponse
     */
    public function CashBookEntry_GetCurrency(CashBookEntry_GetCurrency $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCurrency', array($parameters));
    }

    /**
     * Sets the currency of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. valueHandle: Handle for the new currency of the cash book entry.
     *
     * @param CashBookEntry_SetCurrency $parameters
     * @return CashBookEntry_SetCurrencyResponse
     */
    public function CashBookEntry_SetCurrency(CashBookEntry_SetCurrency $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetCurrency', array($parameters));
    }

    /**
     * Sets the amount of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new amount of the cash book entry.
     *
     * @param CashBookEntry_SetAmount $parameters
     * @return CashBookEntry_SetAmountResponse
     */
    public function CashBookEntry_SetAmount(CashBookEntry_SetAmount $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetAmount', array($parameters));
    }

    /**
     * Gets the amount of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetAmount $parameters
     * @return CashBookEntry_GetAmountResponse
     */
    public function CashBookEntry_GetAmount(CashBookEntry_GetAmount $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetAmount', array($parameters));
    }

    /**
     * Sets the VAT account of a cash book entry. VAT account is only accessible when cash book entry is of type FinanceVoucher.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. valueHandle: new VAT account of the cash book entry.
     *
     * @param CashBookEntry_SetVatAccount $parameters
     * @return CashBookEntry_SetVatAccountResponse
     */
    public function CashBookEntry_SetVatAccount(CashBookEntry_SetVatAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetVatAccount', array($parameters));
    }

    /**
     * Gets the VAT account of a cash book entry. VAT account is only accessible when cash book entry is of type FinanceVoucher.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetVatAccount $parameters
     * @return CashBookEntry_GetVatAccountResponse
     */
    public function CashBookEntry_GetVatAccount(CashBookEntry_GetVatAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetVatAccount', array($parameters));
    }

    /**
     * Gets the contra VAT account of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetContraVatAccount $parameters
     * @return CashBookEntry_GetContraVatAccountResponse
     */
    public function CashBookEntry_GetContraVatAccount(CashBookEntry_GetContraVatAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetContraVatAccount', array($parameters));
    }

    /**
     * Sets the contra VAT account of a cash book entry.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. valueHandle: new contra VAT account of the cash book entry.
     *
     * @param CashBookEntry_SetContraVatAccount $parameters
     * @return CashBookEntry_SetContraVatAccountResponse
     */
    public function CashBookEntry_SetContraVatAccount(CashBookEntry_SetContraVatAccount $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetContraVatAccount', array($parameters));
    }

    /**
     * Sets the debtor invoice number of a cash book entry. Debtor invoice number is only accessible when cash book entry is of type DebtorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new debtor invoice number.
     *
     * @param CashBookEntry_SetDebtorInvoiceNumber $parameters
     * @return CashBookEntry_SetDebtorInvoiceNumberResponse
     */
    public function CashBookEntry_SetDebtorInvoiceNumber(CashBookEntry_SetDebtorInvoiceNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDebtorInvoiceNumber', array($parameters));
    }

    /**
     * Gets the debtor invoice number of a cash book entry. Debtor invoice number is only accessible when cash book entry is of type DebtorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetDebtorInvoiceNumber $parameters
     * @return CashBookEntry_GetDebtorInvoiceNumberResponse
     */
    public function CashBookEntry_GetDebtorInvoiceNumber(CashBookEntry_GetDebtorInvoiceNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetDebtorInvoiceNumber', array($parameters));
    }

    /**
     * Gets the creditor invoice number of a cash book entry. Creditor invoice number is only accessible when cash book entry is of type CreditorInvoice or CreditorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry.
     *
     * @param CashBookEntry_GetCreditorInvoiceNumber $parameters
     * @return CashBookEntry_GetCreditorInvoiceNumberResponse
     */
    public function CashBookEntry_GetCreditorInvoiceNumber(CashBookEntry_GetCreditorInvoiceNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_GetCreditorInvoiceNumber', array($parameters));
    }

    /**
     * Sets the creditor invoice number of a cash book entry. Creditor invoice number is only accessible when cash book entry is of type CreditorInvoice or CreditorPayment.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new debtor invoice number.
     *
     * @param CashBookEntry_SetCreditorInvoiceNumber $parameters
     * @return CashBookEntry_SetCreditorInvoiceNumberResponse
     */
    public function CashBookEntry_SetCreditorInvoiceNumber(CashBookEntry_SetCreditorInvoiceNumber $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetCreditorInvoiceNumber', array($parameters));
    }

    /**
     * Sets the due date of a cash book entry. Due date is only accessible when cash book entry is of type CreditorInvoice.<br />Parameters: cashBookEntryHandle: Handle for the cash book entry. value: new due date.
     *
     * @param CashBookEntry_SetDueDate $parameters
     * @return CashBookEntry_SetDueDateResponse
     */
    public function CashBookEntry_SetDueDate(CashBookEntry_SetDueDate $parameters)
    {
      return $this->__soapCall('CashBookEntry_SetDueDate', array($parameters));
    }

    /**
     * Creates a new account from a data object.<br />Parameters: data: The data object that specifies the properties of the new account.
     *
     * @param Account_CreateFromData $parameters
     * @return Account_CreateFromDataResponse
     */
    public function Account_CreateFromData(Account_CreateFromData $parameters)
    {
      return $this->__soapCall('Account_CreateFromData', array($parameters));
    }

    /**
     * Creates new accounts from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new accounts.
     *
     * @param Account_CreateFromDataArray $parameters
     * @return Account_CreateFromDataArrayResponse
     */
    public function Account_CreateFromDataArray(Account_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('Account_CreateFromDataArray', array($parameters));
    }

    /**
     * Update accounts from data objects.<br />Parameters: dataArray: The array of data objects.
     *
     * @param Account_UpdateFromDataArray $parameters
     * @return Account_UpdateFromDataArrayResponse
     */
    public function Account_UpdateFromDataArray(Account_UpdateFromDataArray $parameters)
    {
      return $this->__soapCall('Account_UpdateFromDataArray', array($parameters));
    }

    /**
     * Updates an account from a data object.<br />Parameters: data: The data object.
     *
     * @param Account_UpdateFromData $parameters
     * @return Account_UpdateFromDataResponse
     */
    public function Account_UpdateFromData(Account_UpdateFromData $parameters)
    {
      return $this->__soapCall('Account_UpdateFromData', array($parameters));
    }

    /**
     * Returns an account data object for a given account.<br />Parameters: entityHandle: A handle for the account.
     *
     * @param Account_GetData $parameters
     * @return Account_GetDataResponse
     */
    public function Account_GetData(Account_GetData $parameters)
    {
      return $this->__soapCall('Account_GetData', array($parameters));
    }

    /**
     * Returns account data objects for a given set of account handles.<br />Parameters: entityHandles: An array of the account handles.
     *
     * @param Account_GetDataArray $parameters
     * @return Account_GetDataArrayResponse
     */
    public function Account_GetDataArray(Account_GetDataArray $parameters)
    {
      return $this->__soapCall('Account_GetDataArray', array($parameters));
    }

    /**
     * Creates a new account.<br />Parameters: number: The number of the new account. name: The name of the new account. type: The type of the new account.
     *
     * @param Account_Create $parameters
     * @return Account_CreateResponse
     */
    public function Account_Create(Account_Create $parameters)
    {
      return $this->__soapCall('Account_Create', array($parameters));
    }

    /**
     * Return handles for all accounts.
     *
     * @param Account_GetAll $parameters
     * @return Account_GetAllResponse
     */
    public function Account_GetAll(Account_GetAll $parameters)
    {
      return $this->__soapCall('Account_GetAll', array($parameters));
    }

    /**
     * Return handles for all accounts from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param Account_GetAllUpdated $parameters
     * @return Account_GetAllUpdatedResponse
     */
    public function Account_GetAllUpdated(Account_GetAllUpdated $parameters)
    {
      return $this->__soapCall('Account_GetAllUpdated', array($parameters));
    }

    /**
     * Returns a handle for the account with the given number.<br />Parameters: number: The number to search for.
     *
     * @param Account_FindByNumber $parameters
     * @return Account_FindByNumberResponse
     */
    public function Account_FindByNumber(Account_FindByNumber $parameters)
    {
      return $this->__soapCall('Account_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the accounts corresponding to the given account numbers. If an account with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Account_FindByNumberList $parameters
     * @return Account_FindByNumberListResponse
     */
    public function Account_FindByNumberList(Account_FindByNumberList $parameters)
    {
      return $this->__soapCall('Account_FindByNumberList', array($parameters));
    }

    /**
     * Returns handles for the accounts with the given name.<br />Parameters: name: The name to search for.
     *
     * @param Account_FindByName $parameters
     * @return Account_FindByNameResponse
     */
    public function Account_FindByName(Account_FindByName $parameters)
    {
      return $this->__soapCall('Account_FindByName', array($parameters));
    }

    /**
     * Returns entry totals per day for the specified accounts and date interval.<br />Parameters: accounts: The accounts for which to return entry totals. first: Start date of interval. last: End date of interval.
     *
     * @param Account_GetEntryTotalsPerDate $parameters
     * @return Account_GetEntryTotalsPerDateResponse
     */
    public function Account_GetEntryTotalsPerDate(Account_GetEntryTotalsPerDate $parameters)
    {
      return $this->__soapCall('Account_GetEntryTotalsPerDate', array($parameters));
    }

    /**
     * Returns entry totals grouped by calendar month for the specified accounts and date interval.<br />Parameters: accounts: The accounts for which to return entry totals. first: Start date of interval. last: End date of interval.
     *
     * @param Account_GetEntryTotalsPerCalendarMonth $parameters
     * @return Account_GetEntryTotalsPerCalendarMonthResponse
     */
    public function Account_GetEntryTotalsPerCalendarMonth(Account_GetEntryTotalsPerCalendarMonth $parameters)
    {
      return $this->__soapCall('Account_GetEntryTotalsPerCalendarMonth', array($parameters));
    }

    /**
     * Returns entry totals grouped by calendar year for the specified accounts and date interval.<br />Parameters: accounts: The accounts for which to return entry totals. first: Start date of interval. last: End date of interval.
     *
     * @param Account_GetEntryTotalsPerCalendarYear $parameters
     * @return Account_GetEntryTotalsPerCalendarYearResponse
     */
    public function Account_GetEntryTotalsPerCalendarYear(Account_GetEntryTotalsPerCalendarYear $parameters)
    {
      return $this->__soapCall('Account_GetEntryTotalsPerCalendarYear', array($parameters));
    }

    /**
     * Returns entry totals for the specified accounts and date interval.<br />Parameters: accounts: The accounts for which to return entry totals. first: Start date of interval. last: End date of interval.
     *
     * @param Account_GetEntryTotalsByDate $parameters
     * @return Account_GetEntryTotalsByDateResponse
     */
    public function Account_GetEntryTotalsByDate(Account_GetEntryTotalsByDate $parameters)
    {
      return $this->__soapCall('Account_GetEntryTotalsByDate', array($parameters));
    }

    /**
     * Deletes an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_Delete $parameters
     * @return Account_DeleteResponse
     */
    public function Account_Delete(Account_Delete $parameters)
    {
      return $this->__soapCall('Account_Delete', array($parameters));
    }

    /**
     * Returns an array with handles for the budget figures for the given account.
     *
     * @param Account_GetBudgetFigures $parameters
     * @return Account_GetBudgetFiguresResponse
     */
    public function Account_GetBudgetFigures(Account_GetBudgetFigures $parameters)
    {
      return $this->__soapCall('Account_GetBudgetFigures', array($parameters));
    }

    /**
     * Returns an array with handles for the budget figures within the given time interval.<br />Parameters: fromDate: First day in the interval. toDate: Last day in the interval.
     *
     * @param Account_GetBudgetFiguresByDate $parameters
     * @return Account_GetBudgetFiguresByDateResponse
     */
    public function Account_GetBudgetFiguresByDate(Account_GetBudgetFiguresByDate $parameters)
    {
      return $this->__soapCall('Account_GetBudgetFiguresByDate', array($parameters));
    }

    /**
     * Returns a handle for the entries within the given time interval.<br />Parameters: First : First day in interval. Last : Last day in interval.
     *
     * @param Account_GetEntriesByDate $parameters
     * @return Account_GetEntriesByDateResponse
     */
    public function Account_GetEntriesByDate(Account_GetEntriesByDate $parameters)
    {
      return $this->__soapCall('Account_GetEntriesByDate', array($parameters));
    }

    /**
     * Returns an array with handles for the entries with serial numbers in the given interval.<br />Parameters: minNumber: The start of the interval. maxNumber: The end of the interval.
     *
     * @param Account_GetEntriesByNumber $parameters
     * @return Account_GetEntriesByNumberResponse
     */
    public function Account_GetEntriesByNumber(Account_GetEntriesByNumber $parameters)
    {
      return $this->__soapCall('Account_GetEntriesByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the sum interval for the given account.
     *
     * @param Account_GetSumIntervals $parameters
     * @return Account_GetSumIntervalsResponse
     */
    public function Account_GetSumIntervals(Account_GetSumIntervals $parameters)
    {
      return $this->__soapCall('Account_GetSumIntervals', array($parameters));
    }

    /**
     * Gets the number of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetNumber $parameters
     * @return Account_GetNumberResponse
     */
    public function Account_GetNumber(Account_GetNumber $parameters)
    {
      return $this->__soapCall('Account_GetNumber', array($parameters));
    }

    /**
     * Gets the name of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetName $parameters
     * @return Account_GetNameResponse
     */
    public function Account_GetName(Account_GetName $parameters)
    {
      return $this->__soapCall('Account_GetName', array($parameters));
    }

    /**
     * Sets the name of an account.<br />Parameters: accountHandle: Handle for the account. value: The new name of the account.
     *
     * @param Account_SetName $parameters
     * @return Account_SetNameResponse
     */
    public function Account_SetName(Account_SetName $parameters)
    {
      return $this->__soapCall('Account_SetName', array($parameters));
    }

    /**
     * Gets the account type of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetType $parameters
     * @return Account_GetTypeResponse
     */
    public function Account_GetType(Account_GetType $parameters)
    {
      return $this->__soapCall('Account_GetType', array($parameters));
    }

    /**
     * Sets the account type of an account. This also updates the property TotalFrom.<br />Parameters: accountHandle: Handle for the account. valueHandle: New account type of the account.
     *
     * @param Account_SetType $parameters
     * @return Account_SetTypeResponse
     */
    public function Account_SetType(Account_SetType $parameters)
    {
      return $this->__soapCall('Account_SetType', array($parameters));
    }

    /**
     * Gets whether an account is a debit or credit account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetDebitCredit $parameters
     * @return Account_GetDebitCreditResponse
     */
    public function Account_GetDebitCredit(Account_GetDebitCredit $parameters)
    {
      return $this->__soapCall('Account_GetDebitCredit', array($parameters));
    }

    /**
     * Sets whether an account is a debit or credit account.<br />Parameters: accountHandle: Handle for the account. value: Value that indicates whether the account should be a debit or credit account.
     *
     * @param Account_SetDebitCredit $parameters
     * @return Account_SetDebitCreditResponse
     */
    public function Account_SetDebitCredit(Account_SetDebitCredit $parameters)
    {
      return $this->__soapCall('Account_SetDebitCredit', array($parameters));
    }

    /**
     * Gets whether an account is accessible.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetIsAccessible $parameters
     * @return Account_GetIsAccessibleResponse
     */
    public function Account_GetIsAccessible(Account_GetIsAccessible $parameters)
    {
      return $this->__soapCall('Account_GetIsAccessible', array($parameters));
    }

    /**
     * Sets whether an account is accessible.<br />Parameters: accountHandle: Handle for the account. value: Value that indicates whether the account should be accessible.
     *
     * @param Account_SetIsAccessible $parameters
     * @return Account_SetIsAccessibleResponse
     */
    public function Account_SetIsAccessible(Account_SetIsAccessible $parameters)
    {
      return $this->__soapCall('Account_SetIsAccessible', array($parameters));
    }

    /**
     * Gets whether an account is blocked for direct entries.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetBlockDirectEntries $parameters
     * @return Account_GetBlockDirectEntriesResponse
     */
    public function Account_GetBlockDirectEntries(Account_GetBlockDirectEntries $parameters)
    {
      return $this->__soapCall('Account_GetBlockDirectEntries', array($parameters));
    }

    /**
     * Sets whether an account is blocked for direct entries.<br />Parameters: accountHandle: Handle for the account. value: Value that indicates whether the account should be blocked for direct entries.
     *
     * @param Account_SetBlockDirectEntries $parameters
     * @return Account_SetBlockDirectEntriesResponse
     */
    public function Account_SetBlockDirectEntries(Account_SetBlockDirectEntries $parameters)
    {
      return $this->__soapCall('Account_SetBlockDirectEntries', array($parameters));
    }

    /**
     * Gets a handle for the VAT account of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetVatAccount $parameters
     * @return Account_GetVatAccountResponse
     */
    public function Account_GetVatAccount(Account_GetVatAccount $parameters)
    {
      return $this->__soapCall('Account_GetVatAccount', array($parameters));
    }

    /**
     * Sets the VAT account of an account.<br />Parameters: accountHandle: Handle for the account. vatAccountHandle: Handle for the new VAT account of the account.
     *
     * @param Account_SetVatAccount $parameters
     * @return Account_SetVatAccountResponse
     */
    public function Account_SetVatAccount(Account_SetVatAccount $parameters)
    {
      return $this->__soapCall('Account_SetVatAccount', array($parameters));
    }

    /**
     * Gets a handle for the contra account of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetContraAccount $parameters
     * @return Account_GetContraAccountResponse
     */
    public function Account_GetContraAccount(Account_GetContraAccount $parameters)
    {
      return $this->__soapCall('Account_GetContraAccount', array($parameters));
    }

    /**
     * Sets the contra account of an account.<br />Parameters: accountHandle: Handle for the account. valueHandle: Handle for the new contra account of the account.
     *
     * @param Account_SetContraAccount $parameters
     * @return Account_SetContraAccountResponse
     */
    public function Account_SetContraAccount(Account_SetContraAccount $parameters)
    {
      return $this->__soapCall('Account_SetContraAccount', array($parameters));
    }

    /**
     * Gets a handle for the opening account of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetOpeningAccount $parameters
     * @return Account_GetOpeningAccountResponse
     */
    public function Account_GetOpeningAccount(Account_GetOpeningAccount $parameters)
    {
      return $this->__soapCall('Account_GetOpeningAccount', array($parameters));
    }

    /**
     * Sets the opening account of an account.<br />Parameters: accountHandle: Handle for the account. valueHandle: Handle for the new opening account of the account.
     *
     * @param Account_SetOpeningAccount $parameters
     * @return Account_SetOpeningAccountResponse
     */
    public function Account_SetOpeningAccount(Account_SetOpeningAccount $parameters)
    {
      return $this->__soapCall('Account_SetOpeningAccount', array($parameters));
    }

    /**
     * Gets a handle for the first account to sum from if the type of the account is AccountType.TotalFrom.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetTotalFrom $parameters
     * @return Account_GetTotalFromResponse
     */
    public function Account_GetTotalFrom(Account_GetTotalFrom $parameters)
    {
      return $this->__soapCall('Account_GetTotalFrom', array($parameters));
    }

    /**
     * Sets a handle for the first account to sum from if the type of the account is AccountType.TotalFrom. This is only used if the account has account type TotalFrom.<br />Parameters: accountHandle: Handle for the account. valueHandle: Handle for the new 'total from'-account.
     *
     * @param Account_SetTotalFrom $parameters
     * @return Account_SetTotalFromResponse
     */
    public function Account_SetTotalFrom(Account_SetTotalFrom $parameters)
    {
      return $this->__soapCall('Account_SetTotalFrom', array($parameters));
    }

    /**
     * Gets the balance of an account.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetBalance $parameters
     * @return Account_GetBalanceResponse
     */
    public function Account_GetBalance(Account_GetBalance $parameters)
    {
      return $this->__soapCall('Account_GetBalance', array($parameters));
    }

    /**
     * Gets a handle for the department of an account. The department is only accessible when there is access to the Dimension add-on module.<br />Parameters: accountHandle: Handle for the account.
     *
     * @param Account_GetDepartment $parameters
     * @return Account_GetDepartmentResponse
     */
    public function Account_GetDepartment(Account_GetDepartment $parameters)
    {
      return $this->__soapCall('Account_GetDepartment', array($parameters));
    }

    /**
     * Sets the department of an account. The department is only accessible when there is access to the Dimension add-on module. The department cannot be set when the distribution key is set.<br />Parameters: accountHandle: Handle for the account. value: Handle for the new department of the account.
     *
     * @param Account_SetDepartment $parameters
     * @return Account_SetDepartmentResponse
     */
    public function Account_SetDepartment(Account_SetDepartment $parameters)
    {
      return $this->__soapCall('Account_SetDepartment', array($parameters));
    }

    /**
     * Gets a handle for the distribution key of an account. The distribution key is only accessible when there is access to the Dimension add-on module.<br />Parameters: acccountHandle: Handle for the account.
     *
     * @param Account_GetDistributionKey $parameters
     * @return Account_GetDistributionKeyResponse
     */
    public function Account_GetDistributionKey(Account_GetDistributionKey $parameters)
    {
      return $this->__soapCall('Account_GetDistributionKey', array($parameters));
    }

    /**
     * Sets the distribution key of an account. The distribution key is only accessible when there is access to the Dimension add-on module. The distribution key cannot be set when the department is set.<br />Parameters: accountHandle: Handle for the account. value: Handle for the new distribution key of the account.
     *
     * @param Account_SetDistributionKey $parameters
     * @return Account_SetDistributionKeyResponse
     */
    public function Account_SetDistributionKey(Account_SetDistributionKey $parameters)
    {
      return $this->__soapCall('Account_SetDistributionKey', array($parameters));
    }

    /**
     * Returns an AccountingPeriod data object for a given accounting period.<br />Parameters: accountingPeriodHandle: A handle for the accounting period.
     *
     * @param AccountingPeriod_GetData $parameters
     * @return AccountingPeriod_GetDataResponse
     */
    public function AccountingPeriod_GetData(AccountingPeriod_GetData $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetData', array($parameters));
    }

    /**
     * Returns AccountingPeriod data objects for a given set of accounting period handles.<br />Parameters: accountingPeriodHandles: An array of the accounting period handles.
     *
     * @param AccountingPeriod_GetDataArray $parameters
     * @return AccountingPeriod_GetDataArrayResponse
     */
    public function AccountingPeriod_GetDataArray(AccountingPeriod_GetDataArray $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all accounting periods.
     *
     * @param AccountingPeriod_GetAll $parameters
     * @return AccountingPeriod_GetAllResponse
     */
    public function AccountingPeriod_GetAll(AccountingPeriod_GetAll $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetAll', array($parameters));
    }

    /**
     * Return handles for all accounting periods from date. fromDate is based on CET. includeCalculatedProperties is reserved for future usage and should be set to false for now.
     *
     * @param AccountingPeriod_GetAllUpdated $parameters
     * @return AccountingPeriod_GetAllUpdatedResponse
     */
    public function AccountingPeriod_GetAllUpdated(AccountingPeriod_GetAllUpdated $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetAllUpdated', array($parameters));
    }

    /**
     * Gets the period of an accounting period.<br />Parameters: accountingPeriodHandle: Handle for the accounting period.
     *
     * @param AccountingPeriod_GetPeriod $parameters
     * @return AccountingPeriod_GetPeriodResponse
     */
    public function AccountingPeriod_GetPeriod(AccountingPeriod_GetPeriod $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetPeriod', array($parameters));
    }

    /**
     * Gets a handle for the accounting year of an accounting period.<br />Parameters: accountingPeriodHandle: Handle for the accountingPeriod.
     *
     * @param AccountingPeriod_GetAccountingYear $parameters
     * @return AccountingPeriod_GetAccountingYearResponse
     */
    public function AccountingPeriod_GetAccountingYear(AccountingPeriod_GetAccountingYear $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetAccountingYear', array($parameters));
    }

    /**
     * Gets the from-date of the accounting period.<br />Parameters: accountingPeriodHandle: Handle for the accounting period.
     *
     * @param AccountingPeriod_GetFromDate $parameters
     * @return AccountingPeriod_GetFromDateResponse
     */
    public function AccountingPeriod_GetFromDate(AccountingPeriod_GetFromDate $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetFromDate', array($parameters));
    }

    /**
     * Gets the to-date of the accounting period.<br />Parameters: accountingPeriodHandle: Handle for the accounting period.
     *
     * @param AccountingPeriod_GetToDate $parameters
     * @return AccountingPeriod_GetToDateResponse
     */
    public function AccountingPeriod_GetToDate(AccountingPeriod_GetToDate $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetToDate', array($parameters));
    }

    /**
     * Gets the status of the accounting period.<br />
     *
     * @param AccountingPeriod_GetStatus $parameters
     * @return AccountingPeriod_GetStatusResponse
     */
    public function AccountingPeriod_GetStatus(AccountingPeriod_GetStatus $parameters)
    {
      return $this->__soapCall('AccountingPeriod_GetStatus', array($parameters));
    }

    /**
     * Creates a new AccountingYear from a data object.<br />Parameters: data: The data object that specifies the properties of the new AccountingYear.
     *
     * @param AccountingYear_CreateFromData $parameters
     * @return AccountingYear_CreateFromDataResponse
     */
    public function AccountingYear_CreateFromData(AccountingYear_CreateFromData $parameters)
    {
      return $this->__soapCall('AccountingYear_CreateFromData', array($parameters));
    }

    /**
     * Creates new AccountingYear from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new AccountingYear.
     *
     * @param AccountingYear_CreateFromDataArray $parameters
     * @return AccountingYear_CreateFromDataArrayResponse
     */
    public function AccountingYear_CreateFromDataArray(AccountingYear_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('AccountingYear_CreateFromDataArray', array($parameters));
    }

    /**
     * Returns an AccountingYear data object for a given accounting year.<br />Parameters: accountingYearHandle: A handle for the accounting year.
     *
     * @param AccountingYear_GetData $parameters
     * @return AccountingYear_GetDataResponse
     */
    public function AccountingYear_GetData(AccountingYear_GetData $parameters)
    {
      return $this->__soapCall('AccountingYear_GetData', array($parameters));
    }

    /**
     * Returns AccountingYear data objects for a given set of accounting year handles.<br />Parameters: accountingYearHandles: An array of the accounting year handles.
     *
     * @param AccountingYear_GetDataArray $parameters
     * @return AccountingYear_GetDataArrayResponse
     */
    public function AccountingYear_GetDataArray(AccountingYear_GetDataArray $parameters)
    {
      return $this->__soapCall('AccountingYear_GetDataArray', array($parameters));
    }

    /**
     * Gets the year of an accounting year.<br />Parameters: accountingYearHandle: Handle for the accounting year.
     *
     * @param AccountingYear_GetYear $parameters
     * @return AccountingYear_GetYearResponse
     */
    public function AccountingYear_GetYear(AccountingYear_GetYear $parameters)
    {
      return $this->__soapCall('AccountingYear_GetYear', array($parameters));
    }

    /**
     * Gets the from-date of the accounting year.<br />Parameters: accountingYearHandle: Handle for the accounting year.
     *
     * @param AccountingYear_GetFromDate $parameters
     * @return AccountingYear_GetFromDateResponse
     */
    public function AccountingYear_GetFromDate(AccountingYear_GetFromDate $parameters)
    {
      return $this->__soapCall('AccountingYear_GetFromDate', array($parameters));
    }

    /**
     * Gets the to-date of the accounting year.<br />Parameters: accountingYearHandle: Handle for the accounting year.
     *
     * @param AccountingYear_GetToDate $parameters
     * @return AccountingYear_GetToDateResponse
     */
    public function AccountingYear_GetToDate(AccountingYear_GetToDate $parameters)
    {
      return $this->__soapCall('AccountingYear_GetToDate', array($parameters));
    }

    /**
     * Gets the isClosed boolean of the accounting year.<br />
     *
     * @param AccountingYear_GetIsClosed $parameters
     * @return AccountingYear_GetIsClosedResponse
     */
    public function AccountingYear_GetIsClosed(AccountingYear_GetIsClosed $parameters)
    {
      return $this->__soapCall('AccountingYear_GetIsClosed', array($parameters));
    }

    /**
     * Creates a new accounting year.<br />Parameters: fromDate: The from date of the new accounting year. toDate: The to date of the new accounting year.
     *
     * @param AccountingYear_Create $parameters
     * @return AccountingYear_CreateResponse
     */
    public function AccountingYear_Create(AccountingYear_Create $parameters)
    {
      return $this->__soapCall('AccountingYear_Create', array($parameters));
    }

    /**
     * Deletes an accounting year.<br />Parameters: accountingYearHandle: Handle for the accounting year.
     *
     * @param AccountingYear_Delete $parameters
     * @return AccountingYear_DeleteResponse
     */
    public function AccountingYear_Delete(AccountingYear_Delete $parameters)
    {
      return $this->__soapCall('AccountingYear_Delete', array($parameters));
    }

    /**
     * Returns handles for all accounting years.
     *
     * @param AccountingYear_GetAll $parameters
     * @return AccountingYear_GetAllResponse
     */
    public function AccountingYear_GetAll(AccountingYear_GetAll $parameters)
    {
      return $this->__soapCall('AccountingYear_GetAll', array($parameters));
    }

    /**
     * Returns an array of handles for the accounting years within the given time interval.<br />Parameters: fromDate: First day in interval. toDate: Last day in interval.
     *
     * @param AccountingYear_FindByDate $parameters
     * @return AccountingYear_FindByDateResponse
     */
    public function AccountingYear_FindByDate(AccountingYear_FindByDate $parameters)
    {
      return $this->__soapCall('AccountingYear_FindByDate', array($parameters));
    }

    /**
     * Returns handles for all accounting periods.
     *
     * @param AccountingYear_GetPeriods $parameters
     * @return AccountingYear_GetPeriodsResponse
     */
    public function AccountingYear_GetPeriods(AccountingYear_GetPeriods $parameters)
    {
      return $this->__soapCall('AccountingYear_GetPeriods', array($parameters));
    }

    /**
     * Returns an Activity data object for a given Activity.<br />Parameters: entityHandle: A handle for the Activity.
     *
     * @param Activity_GetData $parameters
     * @return Activity_GetDataResponse
     */
    public function Activity_GetData(Activity_GetData $parameters)
    {
      return $this->__soapCall('Activity_GetData', array($parameters));
    }

    /**
     * Returns Activity data objects for a given set of Activity handles.<br />Parameters: entityHandles: An array of the Activity handles.
     *
     * @param Activity_GetDataArray $parameters
     * @return Activity_GetDataArrayResponse
     */
    public function Activity_GetDataArray(Activity_GetDataArray $parameters)
    {
      return $this->__soapCall('Activity_GetDataArray', array($parameters));
    }

    /**
     * Returns handles for all activities.
     *
     * @param Activity_GetAll $parameters
     * @return Activity_GetAllResponse
     */
    public function Activity_GetAll(Activity_GetAll $parameters)
    {
      return $this->__soapCall('Activity_GetAll', array($parameters));
    }

    /**
     * Returns a handle for the activity with the given number.<br />Parameters: number: The number to search for.
     *
     * @param Activity_FindByNumber $parameters
     * @return Activity_FindByNumberResponse
     */
    public function Activity_FindByNumber(Activity_FindByNumber $parameters)
    {
      return $this->__soapCall('Activity_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the activities corresponding to the given numbers. If an activity with a given number does not exist or if no number is given then the array contains null at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param Activity_FindByNumberList $parameters
     * @return Activity_FindByNumberListResponse
     */
    public function Activity_FindByNumberList(Activity_FindByNumberList $parameters)
    {
      return $this->__soapCall('Activity_FindByNumberList', array($parameters));
    }

    /**
     * Gets the number of the activity.<br />Parameters: activityHandle: Handle for the activity.
     *
     * @param Activity_GetNumber $parameters
     * @return Activity_GetNumberResponse
     */
    public function Activity_GetNumber(Activity_GetNumber $parameters)
    {
      return $this->__soapCall('Activity_GetNumber', array($parameters));
    }

    /**
     * Gets the name of the activity.<br />
     *
     * @param Activity_GetName $parameters
     * @return Activity_GetNameResponse
     */
    public function Activity_GetName(Activity_GetName $parameters)
    {
      return $this->__soapCall('Activity_GetName', array($parameters));
    }

    /**
     * Returns a bank payment type data object for a given bank payment type.<br />Parameters: entityHandle: A handle for the bank payment type.
     *
     * @param BankPaymentType_GetData $parameters
     * @return BankPaymentType_GetDataResponse
     */
    public function BankPaymentType_GetData(BankPaymentType_GetData $parameters)
    {
      return $this->__soapCall('BankPaymentType_GetData', array($parameters));
    }

    /**
     * Returns bank payment type data objects for a given set of bank payment type handles.<br />Parameters: entityHandles: An array of the bank payment type handles.
     *
     * @param BankPaymentType_GetDataArray $parameters
     * @return BankPaymentType_GetDataArrayResponse
     */
    public function BankPaymentType_GetDataArray(BankPaymentType_GetDataArray $parameters)
    {
      return $this->__soapCall('BankPaymentType_GetDataArray', array($parameters));
    }

    /**
     * Return handles for all bank payment types.
     *
     * @param BankPaymentType_GetAll $parameters
     * @return BankPaymentType_GetAllResponse
     */
    public function BankPaymentType_GetAll(BankPaymentType_GetAll $parameters)
    {
      return $this->__soapCall('BankPaymentType_GetAll', array($parameters));
    }

    /**
     * Returns handles for the bank payment types with the given name.<br />Parameters: name: The name to search for.
     *
     * @param BankPaymentType_FindByName $parameters
     * @return BankPaymentType_FindByNameResponse
     */
    public function BankPaymentType_FindByName(BankPaymentType_FindByName $parameters)
    {
      return $this->__soapCall('BankPaymentType_FindByName', array($parameters));
    }

    /**
     * Returns a handle for the bank payment type with the given number.<br />Parameters: number: The number to search for.
     *
     * @param BankPaymentType_FindByNumber $parameters
     * @return BankPaymentType_FindByNumberResponse
     */
    public function BankPaymentType_FindByNumber(BankPaymentType_FindByNumber $parameters)
    {
      return $this->__soapCall('BankPaymentType_FindByNumber', array($parameters));
    }

    /**
     * Returns an array with handles for the bank payment types corresponding to the given bank payment type numbers. If a bank payment type with a given number does not exist or if no number is given then the array contains nothing at that index.<br />Parameters: numbers: The numbers to search for.
     *
     * @param BankPaymentType_FindByNumberList $parameters
     * @return BankPaymentType_FindByNumberListResponse
     */
    public function BankPaymentType_FindByNumberList(BankPaymentType_FindByNumberList $parameters)
    {
      return $this->__soapCall('BankPaymentType_FindByNumberList', array($parameters));
    }

    /**
     * Gets the number of a bank payment type.<br />Parameters: bankPaymentTypeHandle: Handle for the bank payment type.
     *
     * @param BankPaymentType_GetNumber $parameters
     * @return BankPaymentType_GetNumberResponse
     */
    public function BankPaymentType_GetNumber(BankPaymentType_GetNumber $parameters)
    {
      return $this->__soapCall('BankPaymentType_GetNumber', array($parameters));
    }

    /**
     * Gets the name of a bank payment type.<br />Parameters: bankPaymentTypeHandle: Handle for the bank payment type.
     *
     * @param BankPaymentType_GetName $parameters
     * @return BankPaymentType_GetNameResponse
     */
    public function BankPaymentType_GetName(BankPaymentType_GetName $parameters)
    {
      return $this->__soapCall('BankPaymentType_GetName', array($parameters));
    }

    /**
     * Creates a new budget figure from a data object.<br />Parameters: data: The data object that specifies the properties of the new budget figure.
     *
     * @param BudgetFigure_CreateFromData $parameters
     * @return BudgetFigure_CreateFromDataResponse
     */
    public function BudgetFigure_CreateFromData(BudgetFigure_CreateFromData $parameters)
    {
      return $this->__soapCall('BudgetFigure_CreateFromData', array($parameters));
    }

    /**
     * Creates new budget figures from data objects.<br />Parameters: dataArray: The array of data objects that specifies the properties of the new budget figures.
     *
     * @param BudgetFigure_CreateFromDataArray $parameters
     * @return BudgetFigure_CreateFromDataArrayResponse
     */
    public function BudgetFigure_CreateFromDataArray(BudgetFigure_CreateFromDataArray $parameters)
    {
      return $this->__soapCall('BudgetFigure_CreateFromDataArray', array($parameters));
    }

    /**
     * Connects to the server.<br />Parameters: agreementNumber: The agreement number for the subscription. userName: The user name of the subscription. password: The password for the user name.<br /><br />Important: <br />We strongly advise to use ConnectWithToken instead. The Connect method will eventually be deprecated. Read more about Token authentication here: https://www.e-conomic.com/developer/connect
     *
     * @param Connect $parameters
     * @return ConnectResponse
     */
    public function Connect(Connect $parameters)
    {
      return $this->__soapCall('Connect', array($parameters));
    }

    /**
     * Connects to the server.<br />Parameters: agreementNumber: The agreement number for the subscription. userName: The user name of the subscription. password: The password for the user name.
     *
     * @param ConnectAsAdministrator $parameters
     * @return ConnectAsAdministratorResponse
     */
    public function ConnectAsAdministrator(ConnectAsAdministrator $parameters)
    {
      return $this->__soapCall('ConnectAsAdministrator', array($parameters));
    }

    /**
     * Connects to the server.<br />Parameters: agreementNumber: The agreement number for the subscription. userName: The user name of the subscription. password: The password for the user name. customerNumber: the internal adminCustomerNumber
     *
     * @param ConnectAsAdministratorWithCustomerNumber $parameters
     * @return ConnectAsAdministratorWithCustomerNumberResponse
     */
    public function ConnectAsAdministratorWithCustomerNumber(ConnectAsAdministratorWithCustomerNumber $parameters)
    {
      return $this->__soapCall('ConnectAsAdministratorWithCustomerNumber', array($parameters));
    }

    /**
     * Connects to the server.<br />Parameters: token: The access token provided.
     *
     * @param ConnectWithToken $parameters
     * @return ConnectWithTokenResponse
     */
    public function ConnectWithToken(ConnectWithToken $parameters)
    {
      return $this->__soapCall('ConnectWithToken', array($parameters));
    }

    /**
     * Disconnects from the server.
     *
     * @param Disconnect $parameters
     * @return DisconnectResponse
     */
    public function Disconnect(Disconnect $parameters)
    {
      return $this->__soapCall('Disconnect', array($parameters));
    }

    /**
     * Gets information about the e-conomic API.
     *
     * @param GetApiInformation $parameters
     * @return GetApiInformationResponse
     */
    public function GetApiInformation(GetApiInformation $parameters)
    {
      return $this->__soapCall('GetApiInformation', array($parameters));
    }

}
