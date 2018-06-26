[{assign var="oConf" value=$oViewConf->getConfig()}]
[{if $oConf->getConfigParam('ivoba_better_seo_CategoryEnableSeoTitle') }]
<tr>
  <td class="edittext">
    [{ oxmultilang ident="IVOBA_BETTER_SEO_TITLE" }]&nbsp;
  </td>
  <td class="edittext">
    <input type="text" class="editinput" size="32" maxlength="[{$edit->oxcategories__ivoba_seotitle->fldmax_length}]" name="editval[oxcategories__ivoba_seotitle]" value="[{$edit->oxcategories__ivoba_seotitle->value}]">
    [{ oxinputhelp ident="IVOBA_BETTER_SEO_TITLE_HELP" }]
  </td>
</tr>
[{/if}]
[{$smarty.block.parent}]
