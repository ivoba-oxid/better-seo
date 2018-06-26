<?php

namespace IvobaOxid\BetterSeo\Application\Controller;

use OxidEsales\EshopCommunity\Application\Controller\ContentController as BaseContentController;
use OxidEsales\EshopCommunity\Core\Registry;

class ContentController extends BaseContentController
{
    use SeoTitleFromDbTrait;

    public function getPageTitle()
    {
        if ($oContent = $this->getContent()) {
            $config = Registry::getConfig();
            if ($config->getConfigParam('ivoba_better_seo_ContentEnableSeoTitle')) {
                $sSeoTitle = $oContent->oxcontents__ivoba_seotitle->value;
                if (empty($sSeoTitle)) {
                    // check field with sql because lazy loading is maybe activated
                    $sSeoTitle = $this->_getSeoTitleFromDb($oContent->oxcontents__oxid->value, 'oxcontents');
                }
                if (!empty($sSeoTitle)) {
                    return $sSeoTitle;
                }
            }
        }

        return parent::getPageTitle();
    }
}