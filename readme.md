# Better Seo titles

This module will enable better SEO titles and Meta descriptions for your OXID eshop.  
By default it will add the category to the default title to avoid double or too short titles.  

You can define the structure of the title in the backend.  

In addition you can add a custom title in the article, category, manufacturer or CMS page.  
When this custom SEO title field is enabled and filled it will be used instead od the default title.
%Prefix %ArticleName %in %Category %TitleSuffix %PageSuffix


WIP!

## Installation
- composer install
- post install script run migration?
- run migration
- regenerate views

## ArtikelDetail:
- enter/add SeoTitle in backend
- option für add category name to title:
- "Prefix Artikel1 variante in Kategorie1 TitleSuffix PageSuffix"
- Meta description: article1 - variante in category - longdesc

## Liste
- enter/add SeoTitle in backend
- Prefix - Title - - Category - Suffix - PageSuffix
- set delimiter as option

## Manufacturer
- enter/add SeoTitle in backend
- shortDesc - sufix

## Content
- enter/add SeoTitle in backend

## Todo
- add admin fields / blocks
- migration
- $oProduct->oxarticles__oxtitle->value . ' in ' . $this->GetCatTitle() . ' - ' . $sMeta;
  sprintf and language

rename ASY_SEOTITLE db fields and migrate values

## Credits
Inspired by:
- https://github.com/OXIDprojects/seoplus
-
