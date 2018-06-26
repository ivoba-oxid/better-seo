[{assign var="oConf" value=$oViewConf->getConfig()}]
[{if $oConf->getConfigParam('ivoba_better_seo_ContentEnableSeoTitle') }]
<tr>
  <td class="edittext">
    [{ oxmultilang ident="IVOBA_BETTER_SEO_TITLE" }]&nbsp;
  </td>
  <td class="edittext">
    <input type="text" class="editinput" size="32" maxlength="[{$edit->oxcontents__ivoba_seotitle->fldmax_length}]" name="editval[oxcontents__ivoba_seotitle]" value="[{$edit->oxcontents__ivoba_seotitle->value}]">
    [{ oxinputhelp ident="IVOBA_BETTER_SEO_TITLE_HELP" }]
  </td>
</tr>
[{/if}]
[{$smarty.block.parent}]
