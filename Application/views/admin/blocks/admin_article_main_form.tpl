[{assign var="oConf" value=$oViewConf->getConfig()}]
[{if $oConf->getConfigParam('ivoba_better_seo_ArticleEnableSeoTitle') }]
<tr>
  <td class="edittext">
    [{ oxmultilang ident="IVOBA_BETTER_SEO_TITLE" }]
  </td>
  <td class="edittext">
    <input type="text" class="editinput" size="32" maxlength="255" name="editval[oxarticles__ivoba_seotitle]" value="[{$edit->oxarticles__ivoba_seotitle->value}]">
    [{ oxinputhelp ident="IVOBA_BETTER_SEO_TITLE_HELP" }]
  </td>
</tr>
[{/if}]
[{$smarty.block.parent}]
