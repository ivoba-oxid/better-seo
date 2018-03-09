<?php
/* Please retain this copyright header in all versions of the software
 *
 * Copyright (C) 2017 Ivo Bathke
 *
 * It is published under the MIT Open Source License.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

$sMetadataVersion = '2';
$aModule          = [
    'id'          => 'ivoba_better_seo',
    'title'       => '<strong>Ivo Bathke</strong>:  <i>Better Seo</i>',
    'description' => '',
    'thumbnail'   => 'ivoba-oxid.png',
    'version'     => '1.0',
    'author'      => 'Ivo Bathke',
    'email'       => 'ivo.bathke@gmail.com',
    'url'         => 'https://oxid.ivo-bathke.name#better-seo',
    'extend'      => [
      \OxidEsales\Eshop\Core\ViewConfig::class => \IvobaOxid\JsonLd\Core\ViewConfig::class
    ],
    'blocks'      => [
        ['template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'/Application/views/admin/blocks/admin_article_main_form.tpl'],
        ['template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'/Application/views/admin/blocks/admin_category_main_form.tpl'],
        ['template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'/Application/views/admin/blocks/admin_content_main_form.tpl'],
        ['template' => 'vendor_main.tpl', 'block'=>'admin_vendor_main_form', 'file'=>'/Application/views/admin/blocks/admin_vendor_main_form.tpl'],
        ['template' => 'manufacturer_main.tpl', 'block'=>'admin_manufacturer_main_form', 'file'=>'/Application/views/admin/blocks/admin_manufacturer_main_form.tpl'],
    ],
    'settings'    => [
        [
            'group' => 'ivoba_better_seo_article',
            'name'  => 'ivoba_better_seo_EnableSeoTitle', //this will show SeoFields in Admin and if filled will use as title
            'type'  => 'bool',
            'value' => true,
        ],
        [
            'group' => 'ivoba_better_seo_article',
            'name'  => 'ivoba_better_seo_EnableMetaDescription',
            'type'  => 'bool',
            'value' => true,
        ],
        [
            'group' => 'ivoba_better_seo_article',
            'name'  => 'ivoba_better_seo_TitleStructure',
            'type'  => 'str',
            'value' => '%Prefix %ArtikelName %ArtikelVariante %in %Category %TitleSuffix %PageSuffix',
        ],
        [
            'group' => 'ivoba_better_seo_article',
            'name'  => 'ivoba_better_seo_MetaDescriptionStructure',
            'type'  => 'str',
            'value' => '%ArtikelName %ArtikelVariante %in %Category %LongDesc', //article1 - variante in category - longdesc
        ]
    ],
    'events'      => [
        'onActivate'   => 'OxpsPaymorrowModule::onActivate',
    ],
];
