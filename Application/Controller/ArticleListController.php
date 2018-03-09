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

namespace IvobaOxid\BetterSeo\Application\Controller;

class ArticleListController extends ArticleListController {

  public function getSeoTitle()
    {
        if ($oCategory = $this->getActCategory()) {
            $sSeoTitle = $oCategory->oxcategories__ivoba_seotitle->value;
            // if (empty($sSeoTitle)) {
            //     $sSeoTitle = $this->_getSeoTitleFromDb($oCategory->oxcategories__oxid->value);
            // }

            return $sSeoTitle;
        }
    }

//    public function getTitle()
//    {
//        if ($oCategory = $this->getActCategory()) {
//            $sSeoTitle = $oCategory->oxcategories__ivoba_seotitle->value;
//            if (empty($sSeoTitle)) {
//                $sSeoTitle = $this->_getSeoTitleFromDb($oCategory->oxcategories__oxid->value);
//            }
//            if (!empty($sSeoTitle)) {
//                return $sSeoTitle;
//            } else {
//                return parent::getTitle();
//            }
//        }
//    }

    protected function _getSeoTitleFromDb($sOxid, $sField = 'ivoba_seotitle')
    {
        $oDb     = oxDb::getDb();
        $sView   = getViewName('oxcategories');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);

        return $sResult;
    }
}
