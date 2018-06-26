<?php

namespace IvobaOxid\BetterSeo\Application\Controller;

use OxidEsales\Eshop\Core\DatabaseProvider;

trait SeoTitleFromDbTrait
{
    protected function _getSeoTitleFromDb($oxid, $view, $field = 'ivoba_seotitle')
    {
        $db      = DatabaseProvider::getDb();
        $sView   = getViewName($view);
        $sSelect = "Select $field from $sView where oxid = '$oxid'";
        $sResult = $db->getOne($sSelect);

        return $sResult;
    }
}