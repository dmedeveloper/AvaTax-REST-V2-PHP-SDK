<?php
namespace Avalara;
use GuzzleHttp\Client;

/*****************************************************************************
 *                                                                           *
 *      This file is automatically generated by the AvaTax SDK process.      *
 *                  Edits to this file will be overwritten.                  *
 *                                                                           *
 *****************************************************************************/
 
/*****************************************************************************
 *                              Enumerated constants                         *
 *****************************************************************************/

 /**
 * Lists of acceptable values for the enumerated data type TransactionAddressType
 */
class TransactionAddressType
{
    const C_SHIPFROM = "ShipFrom";
    const C_SHIPTO = "ShipTo";
    const C_POINTOFORDERACCEPTANCE = "PointOfOrderAcceptance";
    const C_POINTOFORDERORIGIN = "PointOfOrderOrigin";
    const C_SINGLELOCATION = "SingleLocation";
}


/**
 * 
 */
class TssAccountMigrationId
{    const C_BOTHWITHOUTROLLBACKREADFROMSQL = 0;
    const C_BOTHWITHROLLBACKREADFROMTSS = 1;
    const C_SQLONLY = 2;
    const C_TSSONLY = 3;
    const C_READONLY = 4;

}

/**
 * 
 */
class TextCase
{    const C_UPPER = 0;
    const C_MIXED = 1;

}

/**
 * 
 */
class DocumentType
{    const C_SALESORDER = 0;
    const C_SALESINVOICE = 1;
    const C_PURCHASEORDER = 2;
    const C_PURCHASEINVOICE = 3;
    const C_RETURNORDER = 4;
    const C_RETURNINVOICE = 5;
    const C_INVENTORYTRANSFERORDER = 6;
    const C_INVENTORYTRANSFERINVOICE = 7;
    const C_REVERSECHARGEORDER = 8;
    const C_REVERSECHARGEINVOICE = 9;
    const C_CUSTOMSINVOICE = 10;
    const C_CUSTOMSORDER = 11;
    const C_ANY = -1;

}

/**
 * 
 */
class CertificatePreviewType
{    const C_PDF = 1;
    const C_JPEG = 2;

}

/**
 * 
 */
class FilingFrequencyId
{    const C_MONTHLY = 1;
    const C_QUARTERLY = 2;
    const C_SEMIANNUALLY = 3;
    const C_ANNUALLY = 4;
    const C_BIMONTHLY = 5;
    const C_OCCASIONAL = 6;
    const C_INVERSEQUARTERLY = 7;
    const C_WEEKLY = 8;

}

/**
 * 
 */
class FilingStatusId
{    const C_PENDINGAPPROVAL = 0;
    const C_DIRTY = 1;
    const C_APPROVEDTOFILE = 2;
    const C_PENDINGFILING = 3;
    const C_PENDINGFILINGONBEHALF = 4;
    const C_FILED = 5;
    const C_FILEDONBEHALF = 6;
    const C_RETURNACCEPTED = 7;
    const C_RETURNACCEPTEDONBEHALF = 8;
    const C_PAYMENTREMITTED = 9;
    const C_VOIDED = 10;
    const C_PENDINGRETURN = 11;
    const C_PENDINGRETURNONBEHALF = 12;
    const C_DONOTFILE = 13;
    const C_RETURNREJECTED = 14;
    const C_RETURNREJECTEDONBEHALF = 15;
    const C_APPROVEDTOFILEONBEHALF = 16;

}

/**
 * 
 */
class PointOfSaleFileType
{    const C_JSON = 0;
    const C_CSV = 1;
    const C_XML = 2;

}

/**
 * 
 */
class PointOfSalePartnerId
{    const C_DMA = 1;
    const C_AX7 = 2;

}

/**
 * 
 */
class SecurityRoleId
{    const C_NOACCESS = 0;
    const C_SITEADMIN = 1;
    const C_ACCOUNTOPERATOR = 2;
    const C_ACCOUNTADMIN = 3;
    const C_ACCOUNTUSER = 4;
    const C_SYSTEMADMIN = 5;
    const C_REGISTRAR = 6;
    const C_CSPTESTER = 7;
    const C_CSPADMIN = 8;
    const C_SYSTEMOPERATOR = 9;
    const C_TECHNICALSUPPORTUSER = 10;
    const C_TECHNICALSUPPORTADMIN = 11;
    const C_TREASURYUSER = 12;
    const C_TREASURYADMIN = 13;
    const C_COMPLIANCEUSER = 14;
    const C_COMPLIANCEADMIN = 15;
    const C_PROSTORESOPERATOR = 16;
    const C_COMPANYUSER = 17;
    const C_COMPANYADMIN = 18;
    const C_COMPLIANCETEMPUSER = 19;
    const C_COMPLIANCEROOTUSER = 20;
    const C_COMPLIANCEOPERATOR = 21;
    const C_SSTADMIN = 22;
    const C_FIRMUSER = 23;
    const C_FIRMADMIN = 24;

}

/**
 * 
 */
class PasswordStatusId
{    const C_USERCANNOTCHANGE = 0;
    const C_USERCANCHANGE = 1;
    const C_USERMUSTCHANGE = 2;

}

/**
 * 
 */
class AccountStatusId
{    const C_INACTIVE = 0;
    const C_ACTIVE = 1;
    const C_TEST = 2;
    const C_NEW = 3;

}

/**
 * 
 */
class AccountTypeId
{    const C_REGULAR = 1;
    const C_FIRM = 2;
    const C_FIRMCLIENT = 3;

}

/**
 * 
 */
class ErrorCodeId
{    const C_SERVERCONFIGURATION = 1;
    const C_ACCOUNTINVALIDEXCEPTION = 2;
    const C_COMPANYINVALIDEXCEPTION = 3;
    const C_ENTITYNOTFOUNDERROR = 4;
    const C_VALUEREQUIREDERROR = 5;
    const C_RANGEERROR = 6;
    const C_RANGECOMPAREERROR = 7;
    const C_RANGESETERROR = 8;
    const C_TAXPAYERNUMBERREQUIRED = 9;
    const C_ENTITYLIMITEXCEEDED = 10;
    const C_COMMONPASSWORD = 11;
    const C_WEAKPASSWORD = 12;
    const C_STRINGLENGTHERROR = 13;
    const C_MAXSTRINGLENGTHERROR = 14;
    const C_EMAILVALIDATIONERROR = 15;
    const C_EMAILMISSINGERROR = 16;
    const C_INVALIDQUERYFIELD = 17;
    const C_INVALIDQUERYVALUE = 18;
    const C_SYNTAXERROR = 19;
    const C_TOOMANYPARAMETERSERROR = 20;
    const C_UNTERMINATEDVALUEERROR = 21;
    const C_DELETEUSERSELFERROR = 22;
    const C_OLDPASSWORDINVALID = 23;
    const C_CANNOTCHANGEPASSWORD = 24;
    const C_READONLY = 25;
    const C_DATEFORMATERROR = 26;
    const C_NODEFAULTCOMPANY = 27;
    const C_ACCOUNTTYPENOTSUPPORTED = 28;
    const C_AUTHENTICATIONEXCEPTION = 30;
    const C_AUTHORIZATIONEXCEPTION = 31;
    const C_VALIDATIONEXCEPTION = 32;
    const C_INACTIVEUSERERROR = 33;
    const C_AUTHENTICATIONINCOMPLETE = 34;
    const C_BASICAUTHINCORRECT = 35;
    const C_IDENTITYSERVERERROR = 36;
    const C_BEARERTOKENINVALID = 37;
    const C_MODELREQUIREDEXCEPTION = 38;
    const C_ACCOUNTEXPIREDEXCEPTION = 39;
    const C_BEARERTOKENNOTSUPPORTED = 41;
    const C_INVALIDSECURITYROLE = 42;
    const C_INVALIDREGISTRARACTION = 43;
    const C_REMOTESERVERERROR = 44;
    const C_NOFILTERCRITERIAEXCEPTION = 45;
    const C_OPENCLAUSEEXCEPTION = 46;
    const C_JSONFORMATERROR = 47;
    const C_INVALIDDECIMALVALUE = 48;
    const C_PERMISSIONREQUIRED = 49;
    const C_UNHANDLEDEXCEPTION = 50;
    const C_INACTIVEACCOUNT = 51;
    const C_LINKAGENOTALLOWED = 52;
    const C_LINKAGESTATUSUPDATENOTSUPPORTED = 53;
    const C_REPORTINGCOMPANYMUSTHAVECONTACTSERROR = 60;
    const C_COMPANYPROFILENOTSET = 61;
    const C_CANNOTASSIGNUSERTOCOMPANY = 62;
    const C_MUSTASSIGNUSERTOCOMPANY = 63;
    const C_INVALIDTAXTYPEMAPPING = 64;
    const C_MODELSTATEINVALID = 70;
    const C_DATERANGEERROR = 80;
    const C_INVALIDDATERANGEERROR = 81;
    const C_RULEMUSTHAVETAXCODE = 82;
    const C_RULETYPERESTRICTED = 83;
    const C_ALLJURISRULELIMITS = 84;
    const C_INVALIDCOMPANYLOCATIONSETTING = 85;
    const C_INVALIDADJUSTMENTTYPE = 99;
    const C_DELETEINFORMATION = 100;
    const C_DISABLEAUTHENTICATIONFORSAMLBASEDACCOUNTS = 101;
    const C_DISABLERESETPASSWORDFORSAMLBASEDACCOUNTS = 102;
    const C_OUTOFRANGE = 118;
    const C_UNSPECIFIEDTIMEZONE = 119;
    const C_CANNOTCREATEDELETEDOBJECTS = 120;
    const C_CANNOTMODIFYDELETEDOBJECTS = 121;
    const C_RETURNNAMENOTFOUND = 122;
    const C_INVALIDADDRESSTYPEANDCATEGORY = 123;
    const C_DEFAULTCOMPANYLOCATION = 124;
    const C_INVALIDCOUNTRY = 125;
    const C_INVALIDCOUNTRYREGION = 126;
    const C_BRAZILVALIDATIONERROR = 127;
    const C_BRAZILEXEMPTVALIDATIONERROR = 128;
    const C_BRAZILPISCOFINSERROR = 129;
    const C_JURISDICTIONNOTFOUNDERROR = 130;
    const C_MEDICALEXCISEERROR = 131;
    const C_RATEDEPENDSTAXABILITYERROR = 132;
    const C_INVALIDRATETYPECODE = 134;
    const C_RATETYPENOTSUPPORTED = 135;
    const C_CANNOTUPDATENESTEDOBJECTS = 136;
    const C_UPCCODEINVALIDCHARS = 137;
    const C_UPCCODEINVALIDLENGTH = 138;
    const C_INCORRECTPATHERROR = 139;
    const C_INVALIDJURISDICTIONTYPE = 140;
    const C_MUSTCONFIRMRESETLICENSEKEY = 141;
    const C_DUPLICATECOMPANYCODE = 142;
    const C_TINFORMATERROR = 143;
    const C_DUPLICATENEXUSERROR = 144;
    const C_UNKNOWNNEXUSERROR = 145;
    const C_PARENTNEXUSNOTFOUND = 146;
    const C_INVALIDTAXCODETYPE = 147;
    const C_CANNOTACTIVATECOMPANY = 148;
    const C_DUPLICATEENTITYPROPERTY = 149;
    const C_REPORTINGENTITYERROR = 150;
    const C_INVALIDRETURNOPERATIONERROR = 151;
    const C_CANNOTDELETECOMPANY = 152;
    const C_COUNTRYOVERRIDESNOTAVAILABLE = 153;
    const C_JURISDICTIONOVERRIDEMISMATCH = 154;
    const C_DUPLICATESYSTEMTAXCODE = 155;
    const C_SSTOVERRIDESNOTAVAILABLE = 156;
    const C_NEXUSDATEMISMATCH = 157;
    const C_NEXUSPARENTDATEMISMATCH = 159;
    const C_BEARERTOKENPARSEUSERIDERROR = 160;
    const C_RETRIEVEUSERERROR = 161;
    const C_INVALIDCONFIGURATIONSETTING = 162;
    const C_INVALIDCONFIGURATIONVALUE = 163;
    const C_INVALIDENUMVALUE = 164;
    const C_TAXCODEASSOCIATEDTAXRULE = 165;
    const C_CANNOTSWITCHACCOUNTID = 166;
    const C_REQUESTINCOMPLETE = 167;
    const C_ACCOUNTNOTNEW = 168;
    const C_PASSWORDLENGTHINVALID = 169;
    const C_INVALIDPAGEKEY = 170;
    const C_INVALIDECMSOVERRIDECODE = 171;
    const C_ACCOUNTDOESNOTEXIST = 172;
    const C_INVALIDTAXTYPE = 173;
    const C_INCORRECTFIELDVALUE = 174;
    const C_LEADINGORTRAILINGEXCEPTION = 175;
    const C_NOTENOUGHADDRESSESINFO = 176;
    const C_REPORTNOTINITIATED = 177;
    const C_FAILEDTOBUILDREPORT = 178;
    const C_REPORTNOTFINISHED = 179;
    const C_FAILEDTODOWNLOADREPORT = 181;
    const C_MALFORMEDFILTEREXCEPTION = 182;
    const C_EXPECTEDCONJUNCTIONERROR = 183;
    const C_CRITERIANOTSUPPORTEDERROR = 184;
    const C_COMPANYACCOUNTANDPARENTACCOUNTMISMATCH = 185;
    const C_INVALIDFILECONTENTTYPE = 186;
    const C_REQUESTTOOLARGE = 187;
    const C_ECMSDISABLED = 188;
    const C_UNKNOWNCONJUNCTIONERROR = 189;
    const C_NOLINESDISCOUNTED = 190;
    const C_FAILEDTODELETE = 191;
    const C_CIRCULARCOMPANYHIERARCHIES = 192;
    const C_DUPLICATEENTRY = 193;
    const C_DUPLICATEFIELDNAMEINORDERBY = 194;
    const C_CANNOTADJUSTDOCUMENTTYPE = 195;
    const C_USERNOACCESS = 196;
    const C_INVALIDENTRY = 197;
    const C_TRANSACTIONALREADYCANCELLED = 198;
    const C_QUERYPARAMETEROUTOFRANGE = 199;
    const C_BATCHSALESAUDITMUSTBEZIPPEDERROR = 200;
    const C_BATCHZIPMUSTCONTAINONEFILEERROR = 201;
    const C_BATCHINVALIDFILETYPEERROR = 202;
    const C_BATCHCANNOTSAVEBATCHFILE = 203;
    const C_BATCHCANNOTGETBATCHFILE = 204;
    const C_BATCHCANNOTDELETEBATCHFILE = 205;
    const C_BATCHMUSTCONTAINONEFILE = 206;
    const C_MISSINGBATCHFILECONTENT = 207;
    const C_BATCHCANNOTBEDELETEDWHILEPROCESSING = 208;
    const C_INTERNALSERVERERROR = 209;
    const C_POINTOFSALEFILESIZE = 250;
    const C_POINTOFSALESETUP = 251;
    const C_INVALIDINPUTDATE = 252;
    const C_GETTAXERROR = 300;
    const C_ADDRESSCONFLICTEXCEPTION = 301;
    const C_DOCUMENTCODECONFLICT = 303;
    const C_MISSINGADDRESS = 304;
    const C_INVALIDPARAMETERVALUE = 306;
    const C_FETCHLIMIT = 308;
    const C_INVALIDADDRESS = 309;
    const C_ADDRESSLOCATIONNOTFOUND = 310;
    const C_MISSINGLINE = 311;
    const C_INVALIDADDRESSTEXTCASE = 312;
    const C_DOCUMENTNOTCOMMITTED = 313;
    const C_INVALIDDOCUMENTTYPESTOFETCH = 315;
    const C_TIMEOUTREQUESTED = 316;
    const C_INVALIDPOSTALCODE = 317;
    const C_INVALIDSUBSCRIPTIONDESCRIPTION = 318;
    const C_INVALIDSUBSCRIPTIONTYPEID = 319;
    const C_CANNOTCHANGEFILINGSTATUS = 401;
    const C_FEINFORMATERROR = 402;
    const C_SERVERUNREACHABLE = 500;
    const C_SUBSCRIPTIONREQUIRED = 600;
    const C_ACCOUNTEXISTS = 601;
    const C_INVITATIONONLY = 602;
    const C_FREETRIALNOTAVAILABLE = 606;
    const C_ACCOUNTEXISTSDIFFERENTEMAIL = 607;
    const C_AVALARAIDENTITYAPIERROR = 608;
    const C_INVALIDIPADDRESS = 609;
    const C_OFFERCODEALREADYAPPLIED = 610;
    const C_ACCOUNTALREADYEXISTS = 611;
    const C_LICENSEKEYNAMEALREADYEXISTSFORACCOUNT = 612;
    const C_USERALREADYEXIST = 613;
    const C_USERNOTFOUND = 614;
    const C_REFUNDTYPEANDPERCENTAGEMISMATCH = 701;
    const C_INVALIDDOCUMENTTYPEFORREFUND = 702;
    const C_REFUNDTYPEANDLINEMISMATCH = 703;
    const C_REFUNDLINESREQUIRED = 704;
    const C_INVALIDREFUNDTYPE = 705;
    const C_REFUNDPERCENTAGEFORTAXONLY = 706;
    const C_LINENOOUTOFRANGE = 707;
    const C_REFUNDPERCENTAGEOUTOFRANGE = 708;
    const C_REFUNDPERCENTAGEMISSING = 709;
    const C_MUSTUSECREATETRANSACTION = 800;
    const C_MUSTACCEPTTERMSANDCONDITIONS = 801;
    const C_FILINGCALENDARCANNOTBEDELETED = 900;
    const C_INVALIDEFFECTIVEDATE = 901;
    const C_NONOUTLETFORM = 902;
    const C_OVERLAPPINGFILINGCALENDAR = 903;
    const C_FILINGCALENDARCANNOTBEEDITED = 904;
    const C_CANNOTMODIFYLOCKEDTRANSACTION = 1100;
    const C_LINEALREADYEXISTS = 1101;
    const C_LINEDOESNOTEXIST = 1102;
    const C_LINESNOTSPECIFIED = 1103;
    const C_LINEDETAILSDOESNOTEXIST = 1104;
    const C_CANNOTCREATETRANSACTIONWITHDELETEDDATASOURCE = 1105;
    const C_SHIPTOREGIONREQUIREDWITHDATASOURCE = 1106;
    const C_INVALIDBUSINESSTYPE = 1200;
    const C_CANNOTMODIFYEXEMPTCERT = 1201;
    const C_CERTIFICATESERROR = 1203;
    const C_MISSINGREQUIREDFIELDS = 1204;
    const C_CERTIFICATESNOTSETUP = 1205;
    const C_CONFLICTINGEXPOSUREZONE = 1208;
    const C_MISSINGFIELDTOCREATEEXPOSUREZONE = 1209;
    const C_MISSINGEXEMPTREASON = 1210;
    const C_INVALIDEXEMPTREASON = 1211;
    const C_INVALIDEXEMPTIONOPERATION = 1212;
    const C_CONFLICTINGFIELDS = 1213;
    const C_INVALIDPDFORIMAGEFILE = 1214;
    const C_INVALIDCOVERLETTERTITLE = 1215;
    const C_ACCOUNTNOTPROVISIONED = 1216;
    const C_INVALIDREQUESTCONTENTTYPE = 1217;
    const C_EXEMPTIONPAGINATIONLIMITS = 1218;
    const C_EXEMPTIONSORTLIMITS = 1219;
    const C_CUSTOMERCANTBEBOTHSHIPTOANDBILLTO = 1220;
    const C_BILLTOCUSTOMEREXPECTED = 1221;
    const C_SHIPTOCUSTOMEREXPECTED = 1222;
    const C_ECMSSSTCERTSREQUIRED = 1223;
    const C_TRANSACTIONNOTCANCELLED = 1300;
    const C_TOOMANYTRANSACTIONS = 1301;
    const C_ONLYTAXDATEOVERRIDEISALLOWED = 1302;
    const C_TRANSACTIONALREADYEXISTS = 1303;
    const C_DATEMISMATCH = 1305;
    const C_INVALIDDOCUMENTSTATUSFORVERIFY = 1306;
    const C_TOTALAMOUNTMISMATCH = 1307;
    const C_TOTALTAXMISMATCH = 1308;
    const C_INVALIDDOCUMENTTYPE = 1310;
    const C_MULTIDOCUMENTPARTIALLYLOCKED = 1312;
    const C_TRANSACTIONISCOMMITTED = 1313;
    const C_INVALIDDOCUMENTSTATUS = 1314;
    const C_COMMSCONFIGCLIENTIDMISSING = 1400;
    const C_COMMSCONFIGCLIENTIDBADVALUE = 1401;
    const C_ACCOUNTINNEWSTATUSEXCEPTION = 1404;
    const C_WORKSHEETEXCEPTION = 1405;
    const C_INVALIDACCOUNTOVERRIDE = 1406;
    const C_ACCOUNTOVERRIDENOTAUTHORIZED = 1407;
    const C_FIELDNOTQUERYABLEERROR = 1408;
    const C_USERNAMEREQUIRED = 1409;
    const C_INVALIDAUDITMESSAGE = 1410;
    const C_FIELDNOTORDERABLEERROR = 1411;
    const C_CANNOTDELETEPARENTBEFORECHILDNEXUS = 1500;
    const C_NEXUSCHILDDATEMISMATCH = 1501;
    const C_REMOTEVALIDATIONERROR = 1502;
    const C_CANNOTMODIFYSSTNEXUS = 1503;
    const C_INVALIDLOCALNEXUSTYPEID = 1504;
    const C_ADVANCEDRULEREQUESTRULEERROR = 1602;
    const C_ADVANCEDRULERESPONSERULEERROR = 1603;
    const C_ADVANCEDRULEERROR = 1605;
    const C_TAXRULEREQUIRESNEXUS = 1701;
    const C_UPCCODENOTUNIQUE = 1702;
    const C_TAXCODEASSOCIATEDWITHITEMCODENOTFOUND = 1704;
    const C_DUPLICATESYSTEMFORITEM = 1705;
    const C_CANNOTDISMISSGLOBALNOTIFICATION = 1706;
    const C_CANNOTUPDATEACCOUNTTYPEID = 1713;
    const C_TAXPAYERNUMBERISREQUIRED = 1714;
    const C_REQUESTLIMITEXCEEDED = 1715;
    const C_CONCURRENTREQUESTLIMITEXCEEDED = 1716;
    const C_INVALIDDOCUMENTTYPEFORINSPECT = 1717;
    const C_SERVICENOTREADY = 1718;
    const C_UPDATELOCATIONREMITTANCEMISMATCHTYPEANDCATEGORY = 1719;
    const C_UPDATELOCATIONREMITTANCECHECKEXISTINGEFFECTIVEDATEERROR = 1720;
    const C_UPDATELOCATIONREMITTANCECHECKEXISTINGENDDATEERROR = 1721;
    const C_ERRORCOUNTLIMITEXCEEDEDERROR = 1722;
    const C_RATELIMITEXCEEDEDERROR = 1723;
    const C_TAXCODEANDTAXCODEIDMISSING = 1724;
    const C_NEXUSALREADYEXISTS = 1725;
    const C_INVALIDADDRESSTYPEANDMARKETPLACEOUSIDEUSAFLAG = 1726;
    const C_INVALIDSETTINGSET = 1727;
    const C_INVALIDSETTINGNAME = 1728;
    const C_INVALIDSETTINGVALUE = 1729;
    const C_TOOMANYUSERDEFINEDFIELDS = 1730;
    const C_DUPLICATEUSERDEFINEDFIELDSFOUND = 1731;
    const C_INVALIDNAMEFORUSERDEFINEDFIELD = 1732;
    const C_UNSUPPORTEDFILEFORMAT = 1800;
    const C_UNSUPPORTEDOUTPUTFILETYPE = 1801;
    const C_TAXPROFILENOTPROVIDED = 1900;
    const C_INVALIDTAXPROFILE = 1901;
    const C_COMPANYTAXPROFILEENTRYREQUIRED = 1902;
    const C_ERRORREADINGTAXPROFILEENTRY = 1903;
    const C_TRACEDATANOTAVAILABLE = 2000;
    const C_INVALIDPARAMETERUNITMEASUREMENTTYPE = 2100;
    const C_PARAMETERUNITREQUIRED = 2101;
    const C_INVALIDPARAMETERVALUEDATATYPE = 2102;
    const C_INVALIDPARAMETERATTRIBUTETYPE = 2103;
    const C_SUBSCRIPTIONREQUIREDFORPARAMETER = 2104;
    const C_INVALIDACCOUNTTYPE = 2105;
    const C_INVALIDFIRMSUBSCRIPTIONS = 2106;
    const C_GENERICTAXCODEFORITEM = 2200;
    const C_CANNOTCERTIFYCOMPANY = 2201;
    const C_NOVOIDEDDOCUMENTS = 2202;
    const C_INADEQUATECOMMITTEDDOCUMENTS = 2203;
    const C_DOCUMENTCODEISGUID = 2204;
    const C_CUSTOMERVENDORCODEISGUID = 2205;
    const C_INADEQUATEDOCUMENTLINECOUNT = 2206;
    const C_SAMEDOCUMENTDESCRIPTION = 2207;
    const C_NOEXEMPTIONNOORCUSTOMERUSAGETYPE = 2208;
    const C_INADEQUATEUNIQUEADDRESSES = 2209;
    const C_ITEMCODESAREALLSAME = 2210;
    const C_TAXCODESAREALLSAME = 2211;
    const C_LOCATIONCODENOTUSED = 2212;
    const C_REPEATEDLINESINDOCUMENT = 2213;
    const C_TAXDATEOVERRIDEANDNEGATIVELINEAMOUNT = 2214;
    const C_ALLUSDCURRENCYCODES = 2215;
    const C_NOVATBUYERID = 2216;
    const C_ALLUSCOUNTRYCODES = 2217;
    const C_NODOCUMENTSTOTEST = 2218;
    const C_NOSHIPPINGCHARGE = 2219;
    const C_FAILEDTOUPDATECOMPANYLOCATION = 2314;
    const C_COMPANYLOCATIONDATERANGEOVERLAP = 2315;
    const C_FIELDLENGTHERROR = 2400;
    const C_INPUTCONTAINSBLACKLISTEDCHARACTERS = 2401;
    const C_CANNOTCREATENESTEDOBJECTS = 2402;
    const C_USERSUBJECTIDNOTUPDATED = 2500;
    const C_BATCHTRANSACTIONTYPEERROR = 2501;
    const C_BATCHTRANSACTIONLINELIMITEXCEEDED = 2502;
    const C_BATCHCOMPANYIDANDCOMPANYCODEMISMATCH = 2503;
    const C_BATCHCANNOTBECANCELLEDSTATUSERROR = 2504;
    const C_BATCHCANNOTBECANCELLEDFORMATERROR = 2505;
    const C_INVALIDPARAMETERDATATYPE = 2600;
    const C_TAGDOESNOTEXIST = 2620;
    const C_OBJECTDELETED = 2660;
    const C_ASSOCIATEDOBJECTSDELETED = 2661;
    const C_CANNOTDOWNLOADREPORT = 2700;

}

/**
 * 
 */
class SeverityLevel
{    const C_SUCCESS = 0;
    const C_WARNING = 1;
    const C_ERROR = 2;
    const C_EXCEPTION = 3;

}

/**
 * 
 */
class JurisdictionType
{    const C_COUNTRY = 0;
    const C_STATE = 1;
    const C_COUNTY = 2;
    const C_CITY = 3;
    const C_SPECIAL = 4;

}

/**
 * 
 */
class ResolutionQuality
{    const C_NOTCODED = 0;
    const C_EXTERNAL = 1;
    const C_COUNTRYCENTROID = 2;
    const C_REGIONCENTROID = 3;
    const C_PARTIALCENTROID = 4;
    const C_POSTALCENTROIDGOOD = 5;
    const C_POSTALCENTROIDBETTER = 6;
    const C_POSTALCENTROIDBEST = 7;
    const C_INTERSECTION = 8;
    const C_INTERPOLATED = 9;
    const C_ROOFTOP = 10;
    const C_CONSTANT = 11;

}

/**
 * 
 */
class AddressTypeId
{    const C_LOCATION = 1;
    const C_SALESPERSON = 2;
    const C_MARKETPLACE = 3;

}

/**
 * 
 */
class AddressCategoryId
{    const C_STOREFRONT = 1;
    const C_MAINOFFICE = 2;
    const C_WAREHOUSE = 3;
    const C_SALESPERSON = 4;
    const C_OTHER = 5;
    const C_SELLERREMITSTAX = 6;
    const C_MARKETPLACEREMITSTAX = 7;
    const C_NONPHYSICAL = 8;

}

/**
 * 
 */
class JurisTypeId
{    const C_STA = 1;
    const C_CTY = 2;
    const C_CIT = 3;
    const C_STJ = 4;
    const C_CNT = 5;

}

/**
 * 
 */
class NexusTypeId
{    const C_NONE = 0;
    const C_SALESORSELLERSUSETAX = 1;
    const C_SALESTAX = 2;
    const C_SSTVOLUNTEER = 3;
    const C_SSTNONVOLUNTEER = 4;

}

/**
 * 
 */
class Sourcing
{    const C_MIXED = 42;
    const C_DESTINATION = 68;
    const C_ORIGIN = 79;

}

/**
 * 
 */
class LocalNexusTypeId
{    const C_SELECTED = 0;
    const C_STATEADMINISTERED = 1;
    const C_ALL = 2;

}

/**
 * 
 */
class MatchingTaxType
{    const C_E = 5;
    const C_LODGING = 6;
    const C_BOTTLE = 7;
    const C_RENTTOOWN = 8;
    const C_ALL = 65;
    const C_BOTHSALESANDUSETAX = 66;
    const C_CONSUMERUSETAX = 67;
    const C_CONSUMERSUSEANDSELLERSUSETAX = 68;
    const C_CONSUMERUSEANDSALESTAX = 69;
    const C_FEE = 70;
    const C_VATINPUTTAX = 73;
    const C_LIGHTBULBS = 76;
    const C_MEALS = 77;
    const C_VATNONRECOVERABLEINPUTTAX = 78;
    const C_VATOUTPUTTAX = 79;
    const C_PIF = 80;
    const C_RENTAL = 82;
    const C_SALESTAX = 83;
    const C_USETAX = 85;
    const C_EWASTE = 87;
    const C_BATTERIES = 90;

}

/**
 * 
 */
class RateType
{    const C_REDUCEDA = 65;
    const C_REDUCEDB = 66;
    const C_FOOD = 70;
    const C_GENERAL = 71;
    const C_INCREASEDSTANDARD = 73;
    const C_LINENRENTAL = 76;
    const C_MEDICAL = 77;
    const C_CONSTRUCTION = 78;
    const C_PARKING = 80;
    const C_SUPERREDUCED = 81;
    const C_REDUCEDR = 82;
    const C_STANDARD = 83;
    const C_LEASING = 84;
    const C_LEASINGLOW = 85;
    const C_SERVICES = 88;
    const C_ZERO = 90;

}

/**
 * 
 */
class TaxRuleTypeId
{    const C_RATERULE = 0;
    const C_RATEOVERRIDERULE = 1;
    const C_BASERULE = 2;
    const C_EXEMPTENTITYRULE = 3;
    const C_PRODUCTTAXABILITYRULE = 4;
    const C_NEXUSRULE = 5;
    const C_RATECAPRULE = 6;
    const C_TAXOVERRIDERULE = 7;
    const C_FEERULE = 8;
    const C_OTHERRULE = 100;

}

/**
 * 
 */
class ExemptCertTypeId
{    const C_BLANKET = 0;
    const C_SINGLEUSE = 1;

}

/**
 * 
 */
class ExemptCertStatusId
{    const C_INACTIVE = 0;
    const C_ACTIVE = 1;
    const C_EXPIRED = 2;
    const C_REVOKED = 3;

}

/**
 * 
 */
class ExemptCertReviewStatusId
{    const C_PENDING = 0;
    const C_ACCEPTED = 1;
    const C_REJECTED = 2;

}

/**
 * 
 */
class RoundingLevelId
{    const C_LINE = 0;
    const C_DOCUMENT = 1;

}

/**
 * 
 */
class TaxDependencyLevelId
{    const C_DOCUMENT = 0;
    const C_STATE = 1;
    const C_TAXREGION = 2;
    const C_ADDRESS = 3;

}

/**
 * 
 */
class FormTypeId
{    const C_SALESANDUSE = 0;
    const C_SALES = 1;
    const C_SELLERSUSE = 2;
    const C_LODGING = 3;
    const C_SALESANDLODGING = 4;
    const C_CONSUMERUSE = 5;
    const C_RESORTANDRENTAL = 6;
    const C_TOURISTANDRENTAL = 7;
    const C_PREPAYMENT = 8;
    const C_PREPAYMENTALLOWED = 9;

}

/**
 * 
 */
class FilingOptionTypeId
{    const C_PAPER = 0;
    const C_OPTIONALEFILE = 1;
    const C_MANDATORYEFILE = 2;

}

/**
 * 
 */
class DueDateTypeId
{    const C_BYDAY = 0;
    const C_BYLASTDAY = 1;
    const C_BYSECONDLASTDAY = 2;

}

/**
 * 
 */
class RoundingTypeId
{    const C_NONE = 0;
    const C_NEAREST = 1;
    const C_UP = 2;
    const C_DOWN = 3;

}

/**
 * 
 */
class OutletTypeId
{    const C_NONE = 0;
    const C_SCHEDULE = 1;
    const C_DUPLICATE = 2;
    const C_CONSOLIDATED = 3;

}

/**
 * 
 */
class BatchType
{    const C_AVACERTUPDATE = 0;
    const C_AVACERTUPDATEALL = 1;
    const C_BATCHMAINTENANCE = 2;
    const C_COMPANYLOCATIONIMPORT = 3;
    const C_DOCUMENTIMPORT = 4;
    const C_EXEMPTCERTIMPORT = 5;
    const C_ITEMIMPORT = 6;
    const C_SALESAUDITEXPORT = 7;
    const C_SSTPTESTDECKIMPORT = 8;
    const C_TAXRULEIMPORT = 9;
    const C_TRANSACTIONIMPORT = 10;
    const C_UPCBULKIMPORT = 11;
    const C_UPCVALIDATIONIMPORT = 12;
    const C_CUSTOMERSUPPLIERIMPORT = 13;

}

/**
 * 
 */
class BatchStatus
{    const C_WAITING = 0;
    const C_SYSTEMERRORS = 1;
    const C_CANCELLED = 2;
    const C_COMPLETED = 3;
    const C_CREATING = 4;
    const C_DELETED = 5;
    const C_ERRORS = 6;
    const C_PAUSED = 7;
    const C_PROCESSING = 8;
    const C_CANCELLING = 9;

}

/**
 * 
 */
class TaxOverrideType
{    const C_NONE = 0;
    const C_TAXAMOUNT = 1;
    const C_EXEMPTION = 2;
    const C_TAXDATE = 3;
    const C_ACCRUEDTAXAMOUNT = 4;
    const C_DERIVETAXABLE = 5;
    const C_OUTOFHARBOR = 6;
    const C_TAXAMOUNTBYTAXTYPE = 7;

}

/**
 * 
 */
class MarketplaceLiabilityType
{    const C_MARKETPLACE = 1;
    const C_SELLER = 2;

}

/**
 * 
 */
class ServiceMode
{    const C_AUTOMATIC = 0;
    const C_LOCAL = 1;
    const C_REMOTE = 2;

}

/**
 * 
 */
class TaxDebugLevel
{    const C_NORMAL = 0;
    const C_DIAGNOSTIC = 1;

}

/**
 * 
 */
class DeliveryTerms
{    const C_DAP = 1;
    const C_DDP = 2;

}

/**
 * 
 */
class AdjustmentReason
{    const C_NOTADJUSTED = 0;
    const C_SOURCINGISSUE = 1;
    const C_RECONCILEDWITHGENERALLEDGER = 2;
    const C_EXEMPTCERTAPPLIED = 3;
    const C_PRICEADJUSTED = 4;
    const C_PRODUCTRETURNED = 5;
    const C_PRODUCTEXCHANGED = 6;
    const C_BADDEBT = 7;
    const C_OTHER = 8;
    const C_OFFLINE = 9;

}

/**
 * 
 */
class VoidReasonCode
{    const C_UNSPECIFIED = 0;
    const C_POSTFAILED = 1;
    const C_DOCDELETED = 2;
    const C_DOCVOIDED = 3;
    const C_ADJUSTMENTCANCELLED = 4;

}

/**
 * 
 */
class CertificateRequestDeliveryMethod
{    const C_EMAIL = 1;
    const C_FAX = 2;
    const C_DOWNLOAD = 3;

}

/**
 * 
 */
class CertExpressInvitationStatus
{    const C_INPROGRESS = 0;
    const C_READY = 1;

}

/**
 * 
 */
class CertCaptureProvisionStatus
{    const C_PROVISIONED = 0;
    const C_INPROGRESS = 1;
    const C_NOTPROVISIONED = 2;

}

/**
 * 
 */
class CompanyFilingStatus
{    const C_NOTCONFIGUREDFORCOMPLIANCE = 0;
    const C_NOTYETFILING = 1;
    const C_FILINGREQUESTED = 2;
    const C_FIRSTFILING = 3;
    const C_ACTIVE = 4;
    const C_NOREPORTING = 5;
    const C_INACTIVE = 6;

}

/**
 * 
 */
class Visibility
{    const C_REQUIRED = 0;
    const C_RECOMMENDED = 1;
    const C_OPTIONAL = 2;
    const C_CONDITIONAL = 3;

}

/**
 * 
 */
class ScraperType
{    const C_LOGIN = 1;
    const C_CUSTOMERDORDATA = 2;

}

/**
 * 
 */
class BoundaryLevel
{    const C_ADDRESS = 0;
    const C_ZIP9 = 1;
    const C_ZIP5 = 2;

}

/**
 * 
 */
class AvataxDeleteErrorTransactionStatus
{    const C_SUCCESS = 0;
    const C_FAILURE = 1;

}

/**
 * 
 */
class FilingTypeId
{    const C_PAPERRETURN = 0;
    const C_ELECTRONICRETURN = 1;
    const C_SER = 2;
    const C_EFTPAPER = 3;
    const C_PHONEPAPER = 4;
    const C_SIGNATUREREADY = 5;
    const C_EFILECHECK = 6;

}

/**
 * 
 */
class BulkAccountValidationStatus
{    const C_NEW = 0;
    const C_ADDED = 1;
    const C_FAILED = 2;

}

/**
 * 
 */
class FilingRequestStatus
{    const C_NEW = 1;
    const C_VALIDATED = 2;
    const C_PENDING = 3;
    const C_ACTIVE = 4;
    const C_PENDINGSTOP = 5;
    const C_INACTIVE = 6;
    const C_CHANGEREQUEST = 7;
    const C_REQUESTAPPROVED = 8;
    const C_REQUESTDENIED = 9;

}

/**
 * 
 */
class AccrualType
{    const C_FILING = 1;
    const C_ACCRUAL = 2;

}

/**
 * 
 */
class AdjustmentPeriodTypeId
{    const C_NONE = 0;
    const C_CURRENTPERIOD = 1;
    const C_NEXTPERIOD = 2;

}

/**
 * 
 */
class PaymentAccountTypeId
{    const C_NONE = 0;
    const C_ACCOUNTSRECEIVABLEACCOUNTSPAYABLE = 1;
    const C_ACCOUNTSRECEIVABLE = 2;
    const C_ACCOUNTSPAYABLE = 3;

}

/**
 * 
 */
class PaymentType
{    const C_CURRENTPERIOD = 0;
    const C_PREPAYMENT = 1;
    const C_PRIORPAYMENT = 2;
    const C_PRIORCSPFEE = 3;

}

/**
 * 
 */
class WorksheetTypeId
{    const C_ORIGINAL = 0;
    const C_AMENDED = 1;
    const C_TEST = 2;

}

/**
 * 
 */
class FirmClientLinkageStatus
{    const C_REQUESTED = 1;
    const C_APPROVED = 2;
    const C_REJECTED = 3;
    const C_REVOKED = 4;

}

/**
 * 
 */
class LiabilityType
{    const C_SELLER = 0;
    const C_BUYERSAGENT = 1;

}

/**
 * 
 */
class DeemedSellerType
{    const C_MARKETPLACE = 1;
    const C_MERCHANT = 2;

}

/**
 * 
 */
class DocumentStatus
{    const C_TEMPORARY = 0;
    const C_SAVED = 1;
    const C_POSTED = 2;
    const C_COMMITTED = 3;
    const C_CANCELLED = 4;
    const C_ADJUSTED = 5;
    const C_QUEUED = 6;
    const C_PENDINGAPPROVAL = 7;
    const C_ANY = -1;

}

/**
 * 
 */
class RefundType
{    const C_FULL = 0;
    const C_PARTIAL = 1;
    const C_TAXONLY = 2;
    const C_PERCENTAGE = 3;

}

/**
 * 
 */
class ApiCallStatus
{    const C_ORIGINALAPICALLAVAILABLE = 0;
    const C_RECONSTRUCTEDAPICALLAVAILABLE = 1;
    const C_ANY = -1;

}

/**
 * 
 */
class CommentType
{    const C_INTERNAL = 1;
    const C_CUSTOMER = 2;
    const C_POAATTACHMENT = 3;
    const C_NOTICEVOUCHER = 4;

}

/**
 * 
 */
class NoticeCustomerType
{    const C_AVATAXRETURNS = 1;
    const C_STANDALONE = 2;
    const C_STRATEGIC = 3;
    const C_SST = 4;
    const C_TRUSTFILE = 5;
    const C_PWC = 6;
    const C_HUDSONGROUP = 7;
    const C_MRA = 8;

}

/**
 * 
 */
class TaxNoticeFilingTypeId
{    const C_ELECTRONICRETURN = 1;
    const C_PAPERRETURN = 2;
    const C_RETURNNOTFILED = 3;
    const C_EFTPAPER = 4;
    const C_SER = 5;
    const C_TRUSTFILEEDI = 6;
    const C_UPLOADFILE = 7;
    const C_PAPERMANUAL = 8;
    const C_CERTCAPTURE = 9;
    const C_SIGNATUREREADY = 10;

}

/**
 * 
 */
class FundingOption
{    const C_PULL = 1;
    const C_WIRE = 2;

}

/**
 * 
 */
class NoticePriorityId
{    const C_IMMEDIATEATTENTIONREQUIRED = 1;
    const C_HIGH = 2;
    const C_NORMAL = 3;
    const C_LOW = 4;

}

/**
 * 
 */
class NotificationSeverityLevel
{    const C_NEUTRAL = 0;
    const C_ADVISORY = 1;
    const C_BLOCKING = 2;
    const C_COMPLETE = -1;

}

/**
 * 
 */
class ReportFormat
{    const C_CSV = 0;

}

/**
 * 
 */
class ReportDateFilter
{    const C_DOCUMENTDATE = 68;
    const C_PAYMENTDATE = 80;
    const C_REPORTINGDATE = 82;
    const C_TAXDATE = 84;

}

/**
 * 
 */
class ReportDocType
{    const C_CONSUMERUSE = 67;
    const C_SALES = 83;

}

/**
 * 
 */
class SendSalesOutputFileFormat
{    const C_STANDARD = 1;
    const C_DMA = 2;
    const C_DMA_NEW = 3;

}

/**
 * 
 */
class SendSalesFileType
{    const C_CSV = 0;
    const C_JSON = 1;

}

/**
 * 
 */
class CompanyAccessLevel
{    const C_NONE = 0;
    const C_SINGLECOMPANY = 1;
    const C_SINGLEACCOUNT = 2;
    const C_ALLCOMPANIES = 3;
    const C_FIRMMANAGEDACCOUNTS = 4;

}

/**
 * 
 */
class AuthenticationTypeId
{    const C_NONE = 0;
    const C_USERNAMEPASSWORD = 1;
    const C_ACCOUNTIDLICENSEKEY = 2;
    const C_OPENIDBEARERTOKEN = 3;

}
?>