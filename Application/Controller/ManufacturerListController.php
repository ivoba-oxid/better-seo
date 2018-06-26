<?php

namespace IvobaOxid\BetterSeo\Application\Controller;

use OxidEsales\Eshop\Application\Controller\ManufacturerListController as BaseManufacturerListController;
use OxidEsales\EshopCommunity\Core\Registry;

class ManufacturerListController extends BaseManufacturerListController
{
    use SeoTitleFromDbTrait;

    public function getPageTitle()
    {
        $config = Registry::getConfig();
        if ($oManufacturer = $this->getActManufacturer()) {
            if ($config->getConfigParam('ivoba_better_seo_ManufacturerEnableSeoTitle')) {
                $sSeoTitle = $oManufacturer->oxmanufacturers__ivoba_seotitle->value;
                if (empty($sSeoTitle)) {
                    $sSeoTitle = $this->_getSeoTitleFromDb($oManufacturer->oxmanufacturers__oxtitle->value,
                        'oxmanufacturers');
                }
                if (!empty($sSeoTitle)) {
                    return $sSeoTitle;
                }
            }
        }

        return parent::getPageTitle();
    }
}