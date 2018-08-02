# Better Seo titles

This module will enable better SEO titles and Meta descriptions for your OXID eshop.  
By default it will add the category to the default title to avoid double or too short titles.  

You can define the structure of the title in the backend.  

In addition you can add a custom title in the article, category, manufacturer or CMS page.  
When this custom SEO title field is enabled and filled it will be used instead od the default title.
%Prefix %ArticleName %in %Category %TitleSuffix %PageSuffix

## Installation
- via composer:

    composer require ivoba-oxid/better-seo

- post install script run migration?
- run migration
- regenerate views

## Todo
- add admin fields / blocks
- migration
- $oProduct->oxarticles__oxtitle->value . ' in ' . $this->GetCatTitle() . ' - ' . $sMeta;
  sprintf and language

## Credits
Inspired by:
- https://github.com/OXIDprojects/seoplus
- https://github.com/Alpha-Sys/asy_seotitle
