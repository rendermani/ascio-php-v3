<?php

namespace ascio\v3;

class AscioService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateOrder' => 'ascio\\v3\\CreateOrder',
  'CreateOrderResponse' => 'ascio\\v3\\CreateOrderResponse',
  'ValidateOrder' => 'ascio\\v3\\ValidateOrder',
  'ValidateOrderResponse' => 'ascio\\v3\\ValidateOrderResponse',
  'GetOrder' => 'ascio\\v3\\GetOrder',
  'GetOrderResponse' => 'ascio\\v3\\GetOrderResponse',
  'GetOrders' => 'ascio\\v3\\GetOrders',
  'GetOrdersResponse' => 'ascio\\v3\\GetOrdersResponse',
  'GetDomains' => 'ascio\\v3\\GetDomains',
  'GetDomainsResponse' => 'ascio\\v3\\GetDomainsResponse',
  'GetPremiumDomains' => 'ascio\\v3\\GetPremiumDomains',
  'GetPremiumDomainsResponse' => 'ascio\\v3\\GetPremiumDomainsResponse',
  'GetSslCertificates' => 'ascio\\v3\\GetSslCertificates',
  'GetSslCertificatesResponse' => 'ascio\\v3\\GetSslCertificatesResponse',
  'GetDomain' => 'ascio\\v3\\GetDomain',
  'GetDomainResponse' => 'ascio\\v3\\GetDomainResponse',
  'AvailabilityInfo' => 'ascio\\v3\\AvailabilityInfo',
  'AvailabilityInfoResponse' => 'ascio\\v3\\AvailabilityInfoResponse',
  'GetPrices' => 'ascio\\v3\\GetPrices',
  'GetPricesResponse' => 'ascio\\v3\\GetPricesResponse',
  'GetPriceHistory' => 'ascio\\v3\\GetPriceHistory',
  'GetPriceHistoryResponse' => 'ascio\\v3\\GetPriceHistoryResponse',
  'GetAccountBalance' => 'ascio\\v3\\GetAccountBalance',
  'GetAccountBalanceResponse' => 'ascio\\v3\\GetAccountBalanceResponse',
  'GetAccountTransactions' => 'ascio\\v3\\GetAccountTransactions',
  'GetAccountTransactionsResponse' => 'ascio\\v3\\GetAccountTransactionsResponse',
  'GetSalesLines' => 'ascio\\v3\\GetSalesLines',
  'GetSalesLinesResponse' => 'ascio\\v3\\GetSalesLinesResponse',
  'GetSubUsers' => 'ascio\\v3\\GetSubUsers',
  'GetSubUsersResponse' => 'ascio\\v3\\GetSubUsersResponse',
  'GetSubUser' => 'ascio\\v3\\GetSubUser',
  'GetSubUserResponse' => 'ascio\\v3\\GetSubUserResponse',
  'CreateSubUser' => 'ascio\\v3\\CreateSubUser',
  'CreateSubUserResponse' => 'ascio\\v3\\CreateSubUserResponse',
  'UpdateSubUser' => 'ascio\\v3\\UpdateSubUser',
  'UpdateSubUserResponse' => 'ascio\\v3\\UpdateSubUserResponse',
  'DeleteSubUser' => 'ascio\\v3\\DeleteSubUser',
  'DeleteSubUserResponse' => 'ascio\\v3\\DeleteSubUserResponse',
  'GetInvoice' => 'ascio\\v3\\GetInvoice',
  'GetInvoiceResponse' => 'ascio\\v3\\GetInvoiceResponse',
  'GetCreditNote' => 'ascio\\v3\\GetCreditNote',
  'GetCreditNoteResponse' => 'ascio\\v3\\GetCreditNoteResponse',
  'GetRegistrant' => 'ascio\\v3\\GetRegistrant',
  'GetRegistrantResponse' => 'ascio\\v3\\GetRegistrantResponse',
  'GetContact' => 'ascio\\v3\\GetContact',
  'GetContactResponse' => 'ascio\\v3\\GetContactResponse',
  'CreateContact' => 'ascio\\v3\\CreateContact',
  'CreateContactResponse' => 'ascio\\v3\\CreateContactResponse',
  'CreateRegistrant' => 'ascio\\v3\\CreateRegistrant',
  'CreateRegistrantResponse' => 'ascio\\v3\\CreateRegistrantResponse',
  'CreateNameServer' => 'ascio\\v3\\CreateNameServer',
  'CreateNameServerResponse' => 'ascio\\v3\\CreateNameServerResponse',
  'CreateDnsSecKey' => 'ascio\\v3\\CreateDnsSecKey',
  'CreateDnsSecKeyResponse' => 'ascio\\v3\\CreateDnsSecKeyResponse',
  'GetNameServer' => 'ascio\\v3\\GetNameServer',
  'GetNameServerResponse' => 'ascio\\v3\\GetNameServerResponse',
  'GetDnsSecKey' => 'ascio\\v3\\GetDnsSecKey',
  'GetDnsSecKeyResponse' => 'ascio\\v3\\GetDnsSecKeyResponse',
  'GetRegistrants' => 'ascio\\v3\\GetRegistrants',
  'GetRegistrantsResponse' => 'ascio\\v3\\GetRegistrantsResponse',
  'GetContacts' => 'ascio\\v3\\GetContacts',
  'GetContactsResponse' => 'ascio\\v3\\GetContactsResponse',
  'GetNameServers' => 'ascio\\v3\\GetNameServers',
  'GetNameServersResponse' => 'ascio\\v3\\GetNameServersResponse',
  'GetDnsSecKeys' => 'ascio\\v3\\GetDnsSecKeys',
  'GetDnsSecKeysResponse' => 'ascio\\v3\\GetDnsSecKeysResponse',
  'GetMarks' => 'ascio\\v3\\GetMarks',
  'GetMarksResponse' => 'ascio\\v3\\GetMarksResponse',
  'GetMark' => 'ascio\\v3\\GetMark',
  'GetMarkResponse' => 'ascio\\v3\\GetMarkResponse',
  'GetDefensive' => 'ascio\\v3\\GetDefensive',
  'GetDefensiveResponse' => 'ascio\\v3\\GetDefensiveResponse',
  'GetNameWatch' => 'ascio\\v3\\GetNameWatch',
  'GetNameWatchResponse' => 'ascio\\v3\\GetNameWatchResponse',
  'GetSslCertificate' => 'ascio\\v3\\GetSslCertificate',
  'GetSslCertificateResponse' => 'ascio\\v3\\GetSslCertificateResponse',
  'GetSslApprovers' => 'ascio\\v3\\GetSslApprovers',
  'GetSslApproversResponse' => 'ascio\\v3\\GetSslApproversResponse',
  'GetAutoInstallSsl' => 'ascio\\v3\\GetAutoInstallSsl',
  'GetAutoInstallSslResponse' => 'ascio\\v3\\GetAutoInstallSslResponse',
  'GetMessages' => 'ascio\\v3\\GetMessages',
  'GetMessagesResponse' => 'ascio\\v3\\GetMessagesResponse',
  'GetAttachment' => 'ascio\\v3\\GetAttachment',
  'GetAttachmentResponse' => 'ascio\\v3\\GetAttachmentResponse',
  'PollQueue' => 'ascio\\v3\\PollQueue',
  'PollQueueResponse' => 'ascio\\v3\\PollQueueResponse',
  'AckQueueMessage' => 'ascio\\v3\\AckQueueMessage',
  'AckQueueMessageResponse' => 'ascio\\v3\\AckQueueMessageResponse',
  'GetQueueMessage' => 'ascio\\v3\\GetQueueMessage',
  'GetQueueMessageResponse' => 'ascio\\v3\\GetQueueMessageResponse',
  'UploadDocumentation' => 'ascio\\v3\\UploadDocumentation',
  'UploadDocumentationResponse' => 'ascio\\v3\\UploadDocumentationResponse',
  'UploadMessage' => 'ascio\\v3\\UploadMessage',
  'UploadMessageResponse' => 'ascio\\v3\\UploadMessageResponse',
  'AbstractOrderRequest' => 'ascio\\v3\\AbstractOrderRequest',
  'MarkOrderRequest' => 'ascio\\v3\\MarkOrderRequest',
  'AbstractMark' => 'ascio\\v3\\AbstractMark',
  'Registrant' => 'ascio\\v3\\Registrant',
  'RegistrantInfo' => 'ascio\\v3\\RegistrantInfo',
  'Contact' => 'ascio\\v3\\Contact',
  'ContactInfo' => 'ascio\\v3\\ContactInfo',
  'Extensions' => 'ascio\\v3\\Extensions',
  'KeyValue' => 'ascio\\v3\\KeyValue',
  'AutoInstallSslOrderRequest' => 'ascio\\v3\\AutoInstallSslOrderRequest',
  'AutoInstallSsl' => 'ascio\\v3\\AutoInstallSsl',
  'SslCertificateOrderRequest' => 'ascio\\v3\\SslCertificateOrderRequest',
  'SslCertificate' => 'ascio\\v3\\SslCertificate',
  'TreatyOrStatuteMark' => 'ascio\\v3\\TreatyOrStatuteMark',
  'Trademark' => 'ascio\\v3\\Trademark',
  'CourtValidatedMark' => 'ascio\\v3\\CourtValidatedMark',
  'SecurityHeaderDetails' => 'ascio\\v3\\SecurityHeaderDetails',
  'ArrayOfMarkOrderDocument' => 'ascio\\v3\\ArrayOfMarkOrderDocument',
  'MarkOrderDocument' => 'ascio\\v3\\MarkOrderDocument',
  'Attachment' => 'ascio\\v3\\Attachment',
  'NameWatchOrderRequest' => 'ascio\\v3\\NameWatchOrderRequest',
  'NameWatch' => 'ascio\\v3\\NameWatch',
  'DefensiveOrderRequest' => 'ascio\\v3\\DefensiveOrderRequest',
  'Defensive' => 'ascio\\v3\\Defensive',
  'DomainOrderRequest' => 'ascio\\v3\\DomainOrderRequest',
  'AbstractResponse' => 'ascio\\v3\\AbstractResponse',
  'OrderInfo' => 'ascio\\v3\\OrderInfo',
  'ArrayOfOrderHistory' => 'ascio\\v3\\ArrayOfOrderHistory',
  'OrderHistory' => 'ascio\\v3\\OrderHistory',
  'GetOrderRequest' => 'ascio\\v3\\GetOrderRequest',
  'GetOrdersRequest' => 'ascio\\v3\\GetOrdersRequest',
  'ArrayOfOrderStatusType' => 'ascio\\v3\\ArrayOfOrderStatusType',
  'ArrayOfOrderType' => 'ascio\\v3\\ArrayOfOrderType',
  'ArrayOfObjectType' => 'ascio\\v3\\ArrayOfObjectType',
  'PagingInfo' => 'ascio\\v3\\PagingInfo',
  'ArrayOfOrderInfo' => 'ascio\\v3\\ArrayOfOrderInfo',
  'GetDomainsRequest' => 'ascio\\v3\\GetDomainsRequest',
  'ArrayOfDomainInfo' => 'ascio\\v3\\ArrayOfDomainInfo',
  'GetPremiumDomainsRequest' => 'ascio\\v3\\GetPremiumDomainsRequest',
  'ArrayOfPremiumDomainInfo' => 'ascio\\v3\\ArrayOfPremiumDomainInfo',
  'PremiumDomainInfo' => 'ascio\\v3\\PremiumDomainInfo',
  'GetDomainRequest' => 'ascio\\v3\\GetDomainRequest',
  'DomainInfo' => 'ascio\\v3\\DomainInfo',
  'Domain' => 'ascio\\v3\\Domain',
  'NameServers' => 'ascio\\v3\\NameServers',
  'NameServer' => 'ascio\\v3\\NameServer',
  'DomainTradeMark' => 'ascio\\v3\\DomainTradeMark',
  'DnsSecKeys' => 'ascio\\v3\\DnsSecKeys',
  'DnsSecKey' => 'ascio\\v3\\DnsSecKey',
  'PrivacyProxy' => 'ascio\\v3\\PrivacyProxy',
  'AvailabilityInfoRequest' => 'ascio\\v3\\AvailabilityInfoRequest',
  'ArrayOfPrices' => 'ascio\\v3\\ArrayOfPrices',
  'PriceInfo' => 'ascio\\v3\\PriceInfo',
  'Product' => 'ascio\\v3\\Product',
  'GetPricesRequest' => 'ascio\\v3\\GetPricesRequest',
  'GetPriceHistoryRequest' => 'ascio\\v3\\GetPriceHistoryRequest',
  'GetAccountBalanceRequest' => 'ascio\\v3\\GetAccountBalanceRequest',
  'GetAccountTransactionsRequest' => 'ascio\\v3\\GetAccountTransactionsRequest',
  'ArrayOfAccountTransactions' => 'ascio\\v3\\ArrayOfAccountTransactions',
  'AccountTransaction' => 'ascio\\v3\\AccountTransaction',
  'ArrayOfSalesLineState' => 'ascio\\v3\\ArrayOfSalesLineState',
  'GetSalesLinesRequest' => 'ascio\\v3\\GetSalesLinesRequest',
  'ArrayOfSalesLines' => 'ascio\\v3\\ArrayOfSalesLines',
  'SalesLine' => 'ascio\\v3\\SalesLine',
  'GetSubUsersRequest' => 'ascio\\v3\\GetSubUsersRequest',
  'ArrayOfUsers' => 'ascio\\v3\\ArrayOfUsers',
  'UserInfo' => 'ascio\\v3\\UserInfo',
  'User' => 'ascio\\v3\\User',
  'GetSubUserRequest' => 'ascio\\v3\\GetSubUserRequest',
  'DeleteSubUserRequest' => 'ascio\\v3\\DeleteSubUserRequest',
  'CreateSubUserRequest' => 'ascio\\v3\\CreateSubUserRequest',
  'UpdateSubUserRequest' => 'ascio\\v3\\UpdateSubUserRequest',
  'GetInvoiceRequest' => 'ascio\\v3\\GetInvoiceRequest',
  'ArrayOfSalesLineGroups' => 'ascio\\v3\\ArrayOfSalesLineGroups',
  'SalesLineGroup' => 'ascio\\v3\\SalesLineGroup',
  'GetCreditNoteRequest' => 'ascio\\v3\\GetCreditNoteRequest',
  'GetRegistrantRequest' => 'ascio\\v3\\GetRegistrantRequest',
  'GetContactRequest' => 'ascio\\v3\\GetContactRequest',
  'CreateContactRequest' => 'ascio\\v3\\CreateContactRequest',
  'CreateRegistrantRequest' => 'ascio\\v3\\CreateRegistrantRequest',
  'CreateNameServerRequest' => 'ascio\\v3\\CreateNameServerRequest',
  'CreateDnsSecKeyRequest' => 'ascio\\v3\\CreateDnsSecKeyRequest',
  'GetNameServerRequest' => 'ascio\\v3\\GetNameServerRequest',
  'GetDnsSecKeyRequest' => 'ascio\\v3\\GetDnsSecKeyRequest',
  'GetRegistrantsRequest' => 'ascio\\v3\\GetRegistrantsRequest',
  'ArrayOfRegistrantInfo' => 'ascio\\v3\\ArrayOfRegistrantInfo',
  'GetContactsRequest' => 'ascio\\v3\\GetContactsRequest',
  'ArrayOfContactInfo' => 'ascio\\v3\\ArrayOfContactInfo',
  'GetNameServersRequest' => 'ascio\\v3\\GetNameServersRequest',
  'ArrayOfNameServers' => 'ascio\\v3\\ArrayOfNameServers',
  'GetDnsSecKeysRequest' => 'ascio\\v3\\GetDnsSecKeysRequest',
  'ArrayOfDnsSecKeys' => 'ascio\\v3\\ArrayOfDnsSecKeys',
  'GetSslCertificatesRequest' => 'ascio\\v3\\GetSslCertificatesRequest',
  'ArrayOfSslCertificateInfo' => 'ascio\\v3\\ArrayOfSslCertificateInfo',
  'GetMarksRequest' => 'ascio\\v3\\GetMarksRequest',
  'ArrayOfMarkInfo' => 'ascio\\v3\\ArrayOfMarkInfo',
  'GetMarkRequest' => 'ascio\\v3\\GetMarkRequest',
  'MarkInfo' => 'ascio\\v3\\MarkInfo',
  'GetDefensiveRequest' => 'ascio\\v3\\GetDefensiveRequest',
  'DefensiveInfo' => 'ascio\\v3\\DefensiveInfo',
  'GetNameWatchRequest' => 'ascio\\v3\\GetNameWatchRequest',
  'NameWatchInfo' => 'ascio\\v3\\NameWatchInfo',
  'GetSslCertificateRequest' => 'ascio\\v3\\GetSslCertificateRequest',
  'GetSslApproversRequest' => 'ascio\\v3\\GetSslApproversRequest',
  'SslCertificateInfo' => 'ascio\\v3\\SslCertificateInfo',
  'GetAutoInstallSslRequest' => 'ascio\\v3\\GetAutoInstallSslRequest',
  'AutoInstallSslInfo' => 'ascio\\v3\\AutoInstallSslInfo',
  'GetMessagesRequest' => 'ascio\\v3\\GetMessagesRequest',
  'ArrayOfMessage' => 'ascio\\v3\\ArrayOfMessage',
  'Message' => 'ascio\\v3\\Message',
  'ArrayOfAttachment' => 'ascio\\v3\\ArrayOfAttachment',
  'PollQueueRequest' => 'ascio\\v3\\PollQueueRequest',
  'GetAttachmentRequest' => 'ascio\\v3\\GetAttachmentRequest',
  'QueueMessage' => 'ascio\\v3\\QueueMessage',
  'ArrayOfErrorCode' => 'ascio\\v3\\ArrayOfErrorCode',
  'ErrorCode' => 'ascio\\v3\\ErrorCode',
  'AckQueueMessageRequest' => 'ascio\\v3\\AckQueueMessageRequest',
  'GetQueueMessageRequest' => 'ascio\\v3\\GetQueueMessageRequest',
  'UploadDocumentationRequest' => 'ascio\\v3\\UploadDocumentationRequest',
  'UploadMessageRequest' => 'ascio\\v3\\UploadMessageRequest',
  'ArrayOfstring' => 'ascio\\v3\\ArrayOfstring',
  'ArrayOfint' => 'ascio\\v3\\ArrayOfint',
);

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
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
        $wsdl = 'https://aws.ascio.com/v3/aws.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateOrder $parameters
     * @return CreateOrderResponse
     */
    public function CreateOrder(CreateOrder $parameters)
    {
      return $this->__soapCall('CreateOrder', array($parameters));
    }

    /**
     * @param ValidateOrder $parameters
     * @return ValidateOrderResponse
     */
    public function ValidateOrder(ValidateOrder $parameters)
    {
      return $this->__soapCall('ValidateOrder', array($parameters));
    }

    /**
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

    /**
     * @param GetOrders $parameters
     * @return GetOrdersResponse
     */
    public function GetOrders(GetOrders $parameters)
    {
      return $this->__soapCall('GetOrders', array($parameters));
    }

    /**
     * @param GetDomains $parameters
     * @return GetDomainsResponse
     */
    public function GetDomains(GetDomains $parameters)
    {
      return $this->__soapCall('GetDomains', array($parameters));
    }

    /**
     * @param GetPremiumDomains $parameters
     * @return GetPremiumDomainsResponse
     */
    public function GetPremiumDomains(GetPremiumDomains $parameters)
    {
      return $this->__soapCall('GetPremiumDomains', array($parameters));
    }

    /**
     * @param GetSslCertificates $parameters
     * @return GetSslCertificatesResponse
     */
    public function GetSslCertificates(GetSslCertificates $parameters)
    {
      return $this->__soapCall('GetSslCertificates', array($parameters));
    }

    /**
     * @param AvailabilityInfo $parameters
     * @return AvailabilityInfoResponse
     */
    public function AvailabilityInfo(AvailabilityInfo $parameters)
    {
      return $this->__soapCall('AvailabilityInfo', array($parameters));
    }

    /**
     * @param GetPrices $parameters
     * @return GetPricesResponse
     */
    public function GetPrices(GetPrices $parameters)
    {
      return $this->__soapCall('GetPrices', array($parameters));
    }

    /**
     * @param GetPriceHistory $parameters
     * @return GetPriceHistoryResponse
     */
    public function GetPriceHistory(GetPriceHistory $parameters)
    {
      return $this->__soapCall('GetPriceHistory', array($parameters));
    }

    /**
     * @param GetAccountBalance $parameters
     * @return GetAccountBalanceResponse
     */
    public function GetAccountBalance(GetAccountBalance $parameters)
    {
      return $this->__soapCall('GetAccountBalance', array($parameters));
    }

    /**
     * @param GetAccountTransactions $parameters
     * @return GetAccountTransactionsResponse
     */
    public function GetAccountTransactions(GetAccountTransactions $parameters)
    {
      return $this->__soapCall('GetAccountTransactions', array($parameters));
    }

    /**
     * @param GetSalesLines $parameters
     * @return GetSalesLinesResponse
     */
    public function GetSalesLines(GetSalesLines $parameters)
    {
      return $this->__soapCall('GetSalesLines', array($parameters));
    }

    /**
     * @param GetSubUsers $parameters
     * @return GetSubUsersResponse
     */
    public function GetSubUsers(GetSubUsers $parameters)
    {
      return $this->__soapCall('GetSubUsers', array($parameters));
    }

    /**
     * @param GetSubUser $parameters
     * @return GetSubUserResponse
     */
    public function GetSubUser(GetSubUser $parameters)
    {
      return $this->__soapCall('GetSubUser', array($parameters));
    }

    /**
     * @param CreateSubUser $parameters
     * @return CreateSubUserResponse
     */
    public function CreateSubUser(CreateSubUser $parameters)
    {
      return $this->__soapCall('CreateSubUser', array($parameters));
    }

    /**
     * @param UpdateSubUser $parameters
     * @return UpdateSubUserResponse
     */
    public function UpdateSubUser(UpdateSubUser $parameters)
    {
      return $this->__soapCall('UpdateSubUser', array($parameters));
    }

    /**
     * @param DeleteSubUser $parameters
     * @return DeleteSubUserResponse
     */
    public function DeleteSubUser(DeleteSubUser $parameters)
    {
      return $this->__soapCall('DeleteSubUser', array($parameters));
    }

    /**
     * @param GetInvoice $parameters
     * @return GetInvoiceResponse
     */
    public function GetInvoice(GetInvoice $parameters)
    {
      return $this->__soapCall('GetInvoice', array($parameters));
    }

    /**
     * @param GetCreditNote $parameters
     * @return GetCreditNoteResponse
     */
    public function GetCreditNote(GetCreditNote $parameters)
    {
      return $this->__soapCall('GetCreditNote', array($parameters));
    }

    /**
     * @param GetRegistrant $parameters
     * @return GetRegistrantResponse
     */
    public function GetRegistrant(GetRegistrant $parameters)
    {
      return $this->__soapCall('GetRegistrant', array($parameters));
    }

    /**
     * @param GetContact $parameters
     * @return GetContactResponse
     */
    public function GetContact(GetContact $parameters)
    {
      return $this->__soapCall('GetContact', array($parameters));
    }

    /**
     * @param CreateContact $parameters
     * @return CreateContactResponse
     */
    public function CreateContact(CreateContact $parameters)
    {
      return $this->__soapCall('CreateContact', array($parameters));
    }

    /**
     * @param CreateRegistrant $parameters
     * @return CreateRegistrantResponse
     */
    public function CreateRegistrant(CreateRegistrant $parameters)
    {
      return $this->__soapCall('CreateRegistrant', array($parameters));
    }

    /**
     * @param CreateNameServer $parameters
     * @return CreateNameServerResponse
     */
    public function CreateNameServer(CreateNameServer $parameters)
    {
      return $this->__soapCall('CreateNameServer', array($parameters));
    }

    /**
     * @param CreateDnsSecKey $parameters
     * @return CreateDnsSecKeyResponse
     */
    public function CreateDnsSecKey(CreateDnsSecKey $parameters)
    {
      return $this->__soapCall('CreateDnsSecKey', array($parameters));
    }

    /**
     * @param GetNameServer $parameters
     * @return GetNameServerResponse
     */
    public function GetNameServer(GetNameServer $parameters)
    {
      return $this->__soapCall('GetNameServer', array($parameters));
    }

    /**
     * @param GetDnsSecKey $parameters
     * @return GetDnsSecKeyResponse
     */
    public function GetDnsSecKey(GetDnsSecKey $parameters)
    {
      return $this->__soapCall('GetDnsSecKey', array($parameters));
    }

    /**
     * @param GetRegistrants $parameters
     * @return GetRegistrantsResponse
     */
    public function GetRegistrants(GetRegistrants $parameters)
    {
      return $this->__soapCall('GetRegistrants', array($parameters));
    }

    /**
     * @param GetContacts $parameters
     * @return GetContactsResponse
     */
    public function GetContacts(GetContacts $parameters)
    {
      return $this->__soapCall('GetContacts', array($parameters));
    }

    /**
     * @param GetNameServers $parameters
     * @return GetNameServersResponse
     */
    public function GetNameServers(GetNameServers $parameters)
    {
      return $this->__soapCall('GetNameServers', array($parameters));
    }

    /**
     * @param GetDnsSecKeys $parameters
     * @return GetDnsSecKeysResponse
     */
    public function GetDnsSecKeys(GetDnsSecKeys $parameters)
    {
      return $this->__soapCall('GetDnsSecKeys', array($parameters));
    }

    /**
     * @param GetMarks $parameters
     * @return GetMarksResponse
     */
    public function GetMarks(GetMarks $parameters)
    {
      return $this->__soapCall('GetMarks', array($parameters));
    }

    /**
     * @param GetMark $parameters
     * @return GetMarkResponse
     */
    public function GetMark(GetMark $parameters)
    {
      return $this->__soapCall('GetMark', array($parameters));
    }

    /**
     * @param GetDomain $parameters
     * @return GetDomainResponse
     */
    public function GetDomain(GetDomain $parameters)
    {
      return $this->__soapCall('GetDomain', array($parameters));
    }

    /**
     * @param GetDefensive $parameters
     * @return GetDefensiveResponse
     */
    public function GetDefensive(GetDefensive $parameters)
    {
      return $this->__soapCall('GetDefensive', array($parameters));
    }

    /**
     * @param GetNameWatch $parameters
     * @return GetNameWatchResponse
     */
    public function GetNameWatch(GetNameWatch $parameters)
    {
      return $this->__soapCall('GetNameWatch', array($parameters));
    }

    /**
     * @param GetSslCertificate $parameters
     * @return GetSslCertificateResponse
     */
    public function GetSslCertificate(GetSslCertificate $parameters)
    {
      return $this->__soapCall('GetSslCertificate', array($parameters));
    }

    /**
     * @param GetAutoInstallSsl $parameters
     * @return GetAutoInstallSslResponse
     */
    public function GetAutoInstallSsl(GetAutoInstallSsl $parameters)
    {
      return $this->__soapCall('GetAutoInstallSsl', array($parameters));
    }

    /**
     * @param GetSslApprovers $parameters
     * @return GetSslApproversResponse
     */
    public function GetSslApprovers(GetSslApprovers $parameters)
    {
      return $this->__soapCall('GetSslApprovers', array($parameters));
    }

    /**
     * @param GetMessages $parameters
     * @return GetMessagesResponse
     */
    public function GetMessages(GetMessages $parameters)
    {
      return $this->__soapCall('GetMessages', array($parameters));
    }

    /**
     * @param GetAttachment $parameters
     * @return GetAttachmentResponse
     */
    public function GetAttachment(GetAttachment $parameters)
    {
      return $this->__soapCall('GetAttachment', array($parameters));
    }

    /**
     * @param PollQueue $parameters
     * @return PollQueueResponse
     */
    public function PollQueue(PollQueue $parameters)
    {
      return $this->__soapCall('PollQueue', array($parameters));
    }

    /**
     * @param AckQueueMessage $parameters
     * @return AckQueueMessageResponse
     */
    public function AckQueueMessage(AckQueueMessage $parameters)
    {
      return $this->__soapCall('AckQueueMessage', array($parameters));
    }

    /**
     * @param GetQueueMessage $parameters
     * @return GetQueueMessageResponse
     */
    public function GetQueueMessage(GetQueueMessage $parameters)
    {
      return $this->__soapCall('GetQueueMessage', array($parameters));
    }

    /**
     * @param UploadDocumentation $parameters
     * @return UploadDocumentationResponse
     */
    public function UploadDocumentation(UploadDocumentation $parameters)
    {
      return $this->__soapCall('UploadDocumentation', array($parameters));
    }

    /**
     * @param UploadMessage $parameters
     * @return UploadMessageResponse
     */
    public function UploadMessage(UploadMessage $parameters)
    {
      return $this->__soapCall('UploadMessage', array($parameters));
    }

}
