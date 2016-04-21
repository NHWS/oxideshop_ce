<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 * @version   OXID eShop CE
 */

namespace OxidEsales\Eshop\Core;

/**
 * @inheritdoc
 */
class ClassMap extends \OxidEsales\Eshop\Core\Edition\ClassMap
{
    /**
     * @inheritdoc
     */
    public function getOverridableMap()
    {
        return array(
            'oxdbmetadatahandler' => '\OxidEsales\Eshop\Core\DbMetaDataHandler',
            'oxApplicationServer' => '\OxidEsales\Eshop\Core\ApplicationServer',
            'oxCcValidator' => '\OxidEsales\Eshop\Core\CreditCardValidator',

            'oxcompanyvatinchecker' =>'\OxidEsales\Eshop\Core\CompanyVatInChecker',
            'oxcompanyvatincountrychecker' =>'\OxidEsales\Eshop\Core\CompanyVatInCountryChecker',
            'oxcompanyvatinvalidator' =>'\OxidEsales\Eshop\Core\CompanyVatInValidator',
            'oxconfig' =>'\OxidEsales\Eshop\Core\Config',
            'oxcounter' =>'\OxidEsales\Eshop\Core\Counter',
            'oxcurl' =>'\OxidEsales\Eshop\Core\Curl',
            'oxdebugdb' =>'\OxidEsales\Eshop\Core\DebugDatabase',
            'oxdebuginfo' =>'\OxidEsales\Eshop\Core\Debuginfo',
            'oxdecryptor' =>'\OxidEsales\Eshop\Core\Decryptor',
            'oxdisplayerror' =>'\OxidEsales\Eshop\Core\DisplayError',
            'oxemail' =>'\OxidEsales\Eshop\Core\Email',
            'oxencryptor' =>'\OxidEsales\Eshop\Core\Encryptor',
            'oxfb' =>'\OxidEsales\Eshop\Core\Facebook',
            'oxfilecache' =>'\OxidEsales\Eshop\Core\FileCache',
            'oxhasher' =>'\OxidEsales\Eshop\Core\Hasher',
            'oxheader' =>'\OxidEsales\Eshop\Core\Header',
            'oxinputvalidator' =>'\OxidEsales\Eshop\Core\InputValidator',
            'oxlang' =>'\OxidEsales\Eshop\Core\Language',
            'oxmodule' =>'\OxidEsales\Eshop\Core\Module',
            'oxmodulecache' =>'\OxidEsales\Eshop\Core\ModuleCache',
            'oxmodulechainsgenerator' =>'\OxidEsales\Eshop\Core\ModuleChainsGenerator',


            ###'oxconfk' =>'\OxidEsales\Eshop\Core\ConfigurationKey',
            ###'oxfunctions' =>'\OxidEsales\Eshop\Core\Functions',
            ###'oxid' =>'\OxidEsales\Eshop\Core\Oxid',
            #'oxmodulefilesvalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxmoduleinstaller' =>'\OxidEsales\Eshop\Core\',
            #'oxmodulelist' =>'\OxidEsales\Eshop\Core\',
            #'oxmodulemetadataagainstshopvalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxmodulemetadatavalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxmodulevalidatorfactory' =>'\OxidEsales\Eshop\Core\',
            #'oxmodulevariableslocator' =>'\OxidEsales\Eshop\Core\',
            #'oxnojsvalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinecaller' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinelicensecheck' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinelicensecheckcaller' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinelicensecheckrequest' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinelicensecheckresponse' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinemodulesnotifierrequest' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinemoduleversionnotifier' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinemoduleversionnotifiercaller' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinerequest' =>'\OxidEsales\Eshop\Core\',
            #'oxonlineserveremailbuilder' =>'\OxidEsales\Eshop\Core\',
            #'oxonlinevatidcheck' =>'\OxidEsales\Eshop\Core\',
            #'oxopensslfunctionalitychecker' =>'\OxidEsales\Eshop\Core\',
            #'oxoutput' =>'\OxidEsales\Eshop\Core\',
            #'oxpasswordhasher' =>'\OxidEsales\Eshop\Core\',
            #'oxpasswordsaltgenerator' =>'\OxidEsales\Eshop\Core\',
            #'oxpdf' =>'\OxidEsales\Eshop\Core\',
            #'oxpicturehandler' =>'\OxidEsales\Eshop\Core\',
            #'oxprice' =>'\OxidEsales\Eshop\Core\',
            #'oxpricelist' =>'\OxidEsales\Eshop\Core\',
            #'oxseodecoder' =>'\OxidEsales\Eshop\Core\',
            #'oxsepabicvalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxsepaibanvalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxsepavalidator' =>'\OxidEsales\Eshop\Core\',
            #'oxserverchecker' =>'\OxidEsales\Eshop\Core\',
            #'oxserverprocessor' =>'\OxidEsales\Eshop\Core\',
            #'oxserversmanager' =>'\OxidEsales\Eshop\Core\',
            #'oxsession' =>'\OxidEsales\Eshop\Core\',
            #'oxsha512hasher' =>'\OxidEsales\Eshop\Core\',
            #'oxsimplexml' =>'\OxidEsales\Eshop\Core\',
            #'oxstr' =>'\OxidEsales\Eshop\Core\',
            #'oxstrmb' =>'\OxidEsales\Eshop\Core\',
            #'oxstrregular' =>'\OxidEsales\Eshop\Core\',
            #'oxsubshopspecificfilecache' =>'\OxidEsales\Eshop\Core\',
            #'oxsysrequirements' =>'\OxidEsales\Eshop\Core\',
            #'oxsystemeventhandler' =>'\OxidEsales\Eshop\Core\',
            #'oxtableviewnamegenerator' =>'\OxidEsales\Eshop\Core\',
            #'oxtheme' =>'\OxidEsales\Eshop\Core\',
            #'oxuniversallyuniqueidgenerator' =>'\OxidEsales\Eshop\Core\',
            #'oxusercounter' =>'\OxidEsales\Eshop\Core\',
            #'oxutils' =>'\OxidEsales\Eshop\Core\',
            #'oxutilscount' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsdate' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsfile' =>'\OxidEsales\Eshop\Core\',
            #'oxutilspic' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsserver' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsstring' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsurl' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsview' =>'\OxidEsales\Eshop\Core\',
            #'oxutilsxml' =>'\OxidEsales\Eshop\Core\',
            #'oxviewconfig' =>'\OxidEsales\Eshop\Core\',
            #'oxwidgetcontrol' =>'\OxidEsales\Eshop\Core\',


        );
    }

    /**
     * @inheritdoc
     */
    public function getNotOverridableMap()
    {
        return array(
            'oxbase' => '\OxidEsales\Eshop\Core\Base',
            'oxadmindetails' => '\OxidEsales\Eshop\Application\Controller\Admin\AdminDetails',
            'oxsysrequirements' => '\OxidEsales\Eshop\Core\SystemRequirements',
            'oxadminview' => '\OxidEsales\Eshop\Application\Controller\Admin\AdminView',
            'oxadminlist' => '\OxidEsales\Eshop\Application\Controller\Admin\AdminList',
            'order_list' => '\OxidEsales\Eshop\Application\Controller\Admin\OrderList',
            'user_list' => '\OxidEsales\Eshop\Application\Controller\Admin\UserList',
            'oxadmindetails' => '\OxidEsales\Eshop\Application\Controller\Admin\AdminDetails',
            'ajaxlistcomponent' => '\OxidEsales\Eshop\Application\Controller\Admin\ListComponentAjax',
            'article_list' => '\OxidEsales\Eshop\Application\Controller\Admin\ArticleList',
            'oxshopidcalculator' => '\OxidEsales\Eshop\Core\ShopIdCalculator',
            'details' => '\OxidEsales\Eshop\Application\Controller\ArticleDetailsController',
            'oxubase' => '\OxidEsales\Eshop\Application\Controller\BaseController',
            'alist' => '\OxidEsales\Eshop\Application\Controller\ArticleListController',
            'user' => '\OxidEsales\Eshop\Application\Controller\UserController',
            'guestbook' => '\OxidEsales\Eshop\Application\Controller\GuestbookController',
            'account' => '\OxidEsales\Eshop\Application\Controller\AccountController',
            'basket' => '\OxidEsales\Eshop\Application\Controller\BasketController',
            'compare' => '\OxidEsales\Eshop\Application\Controller\CompareController',
            'order' => '\OxidEsales\Eshop\Application\Controller\OrderController',
            'payment' => '\OxidEsales\Eshop\Application\Controller\PaymentController',
            'recommlist' => '\OxidEsales\Eshop\Application\Controller\RecommListController',
            'rss' => '\OxidEsales\Eshop\Application\Controller\RssController',
            'search' => '\OxidEsales\Eshop\Application\Controller\SearchController',
            'start' => '\OxidEsales\Eshop\Application\Controller\StartController',
            'thankyou' => '\OxidEsales\Eshop\Application\Controller\ThankYouController',
            'wishlist' => '\OxidEsales\Eshop\Application\Controller\WishListController',
            'wrapping' => '\OxidEsales\Eshop\Application\Controller\WrappingController',
            'oxshopcontrol' => '\OxidEsales\Eshop\Core\ShopControl',
            'oxview' => '\OxidEsales\Eshop\Core\View',
            'oxi18n' => '\OxidEsales\Eshop\Core\I18n',
            'oxsupercfg' => '\OxidEsales\Eshop\Core\SuperConfig',
            'oxutilsobject' => '\OxidEsales\Eshop\Core\UtilsObject',
            'oxdb' => '\OxidEsales\Eshop\Core\Database',
            'oxlegacydb' => '\OxidEsales\Eshop\Core\LegacyDatabase',
            'oxconnectionexception' => '\OxidEsales\Eshop\Core\Exception\ConnectionException',
            'oxdynimggenerator' => '\OxidEsales\Eshop\Core\DynamicImageGenerator',
            'oxexceptiontodisplay' => '\OxidEsales\Eshop\Core\Exception\ExceptionToDisplay',
            'oxfield' => '\OxidEsales\Eshop\Core\Field',
            'oxlist' => '\OxidEsales\Eshop\Core\StandardList',
            'oxseoencoder' => '\OxidEsales\Eshop\Core\SeoEncoder',
            'oxstdclass' => '\OxidEsales\Eshop\Core\StandardClass',
            'oxsystemcomponentexception' => '\OxidEsales\Eshop\Core\Exception\SystemComponentException',
            'oxconfigfile' => '\OxidEsales\Eshop\Core\ConfigFile',
            'oxregistry' => '\OxidEsales\Eshop\Core\Registry',
            'oxstart' => '\OxidEsales\Eshop\Application\Controller\OxidStartController',
            'dyn_interface' => '\OxidEsales\Eshop\Application\Controller\Admin\DynamicInterface',
            'dyn_screen' => '\OxidEsales\Eshop\Application\Controller\Admin\DynamicScreen',
            'dynexportbase' => '\OxidEsales\Eshop\Application\Controller\Admin\DynamicExportBase',
            'genimport_main' => '\OxidEsales\Eshop\Application\Controller\Admin\GenericImportMainController',
            'object_seo' => '\OxidEsales\Eshop\Application\Controller\Admin\ObjectSeoController',
            'shop_config' => '\OxidEsales\Eshop\Application\Controller\Admin\ShopConfigController',

            'oxvoucherexception' => '\OxidEsales\Eshop\Core\Exception\VoucherException',
            'oxuserexception' => '\OxidEsales\Eshop\Core\Exception\UserException',
            'oxshopexception' => '\OxidEsales\Eshop\Core\Exception\ShopException',
            'oxoutofstockexception' => '\OxidEsales\Eshop\Core\Exception\OutOfStockException',
            'oxobjectexception' => '\OxidEsales\Eshop\Core\Exception\ObjectException',
            'oxnoarticleexception' => '\OxidEsales\Eshop\Core\Exception\NoArticleException',
            'oxinputexception' => '\OxidEsales\Eshop\Core\Exception\InputException',
            'oxfileexception' => '\OxidEsales\Eshop\Core\Exception\FileException',
            'oxexceptionhandler' => '\OxidEsales\Eshop\Core\Exception\ExceptionHandler',
            'oxexception' => '\OxidEsales\Eshop\Core\Exception\StandardException',
            'oxcookieexception' => '\OxidEsales\Eshop\Core\Exception\CookieException',
            'oxarticleinputexception' => '\OxidEsales\Eshop\Core\Exception\ArticleInputException',
            'oxarticleexception' => '\OxidEsales\Eshop\Core\Exception\ArticleException',
            'oxadodbexception' => '\OxidEsales\Eshop\Core\Exception\AdodbException',
            'oxlanguageexception' => '\OxidEsales\Eshop\Core\Exception\LanguageException',

        );
    }
}
