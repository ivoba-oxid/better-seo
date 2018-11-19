# Better Seo titles

This module will enable better SEO titles and Meta descriptions for your OXID eshop.  
By default it will add the category to the default title to avoid double or too short titles.  

You can define the structure of the default title in the backend.  
By default its: ```%Prefix %ArticleName %in %Category %TitleSuffix %PageSuffix```

Also for the default Meta description, default is here: ```%ArticleName %in %Category - %MetaDescription```

In addition you can add a custom title in the article, category, manufacturer or CMS page.  
When this custom SEO title field is enabled and filled it will be used instead od the default title.


## Installation
- via composer:

    composer require ivoba-oxid/better-seo

- create migration in your shop

    vendor/bin/oe-eshop-db_migrate migrations:generate PR

- copy up & down methods to the new migration
- run migrations

    vendor/bin/oe-eshop-db_migrate migrations:migrate

- regenerate views
- clear cache

## Credits
Inspired by:
- https://github.com/OXIDprojects/seoplus
- https://github.com/Alpha-Sys/asy_seotitle
