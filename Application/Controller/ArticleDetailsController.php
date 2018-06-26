<?php

namespace IvobaOxid\BetterSeo\Application\Controller;

use OxidEsales\EshopCommunity\Application\Controller\ArticleDetailsController as BaseArticleDetailsController;
use OxidEsales\EshopCommunity\Core\Registry;

class ArticleDetailsController extends BaseArticleDetailsController
{

    protected $catTitle = false;

    public function getPageTitle()
    {
        $config = Registry::getConfig();
        if ($oProduct = $this->getProduct()) {
            $catTitle = $this->GetCatTitle();
            if ($config->getConfigParam('ivoba_better_seo_ArticleEnableSeoTitle') &&
                $catTitle !== '') {
                $sSeoTitle = $oProduct->oxarticles__ivoba_seotitle->value;
                if (!empty($sSeoTitle)) {
                    return $sSeoTitle;
                }
            }

            $betterTitle = $config->getConfigParam('ivoba_better_seo_BetterTitleStructure');
            $language    = Registry::getLang();
            $betterTitle = str_replace(
                ['%Prefix', '%ArticleName', '%in', '%Category', '%TitleSuffix', '%PageSuffix'],
                [
                    $this->getTitlePrefix(),
                    $this->getTitle(),
                    $language->translateString('IVOBA_BETTER_SEO_IN'),
                    $catTitle,
                    $this->getTitleSuffix(),
                    $this->getTitlePageSuffix(),
                ],
                $betterTitle
            );

            return $betterTitle;

        }

        return parent::getPageTitle();
    }

    protected function GetCatTitle()
    {
        if ($this->catTitle === false) {
            $catTitle = '';
            $catTree  = $this->getCatTreePath();
            if ($catTree) {
                foreach ($catTree as $cat) {
                    $catTitle = $cat->oxcategories__oxtitle->value;
                }
            }
            $this->catTitle = $catTitle;
        }

        return $this->catTitle;
    }

    public function getMetaDescription()
    {
        $parentMetaDesc = parent::getMetaDescription();
        $catTitle = $this->GetCatTitle();
        $config         = Registry::getConfig();
        if ($config->getConfigParam('ivoba_better_seo_EnableBetterMetaDescription') &&
            $catTitle !== '') {
            $betterMetaDesc = $config->getConfigParam('ivoba_better_seo_BetterMetaDescriptionStructure');
            $language       = Registry::getLang();
            $betterMetaDesc = str_replace(
                ['%ArticleName', '%in', '%Category', '%MetaDescription'],
                [
                    $this->getTitle(),
                    $language->translateString('IVOBA_BETTER_SEO_IN'),
                    $catTitle,
                    $parentMetaDesc,
                ],
                $betterMetaDesc
            );

            return $betterMetaDesc;
        }

        return $parentMetaDesc;
    }
}