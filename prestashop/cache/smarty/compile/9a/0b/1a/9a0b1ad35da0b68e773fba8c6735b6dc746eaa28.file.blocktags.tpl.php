<?php /* Smarty version Smarty-3.1.19, created on 2016-09-22 21:41:54
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.7\prestashop\themes\default-bootstrap\modules\blocktags\blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3202857e434023d4608-76952404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0b1ad35da0b68e773fba8c6735b6dc746eaa28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.7\\prestashop\\themes\\default-bootstrap\\modules\\blocktags\\blocktags.tpl',
      1 => 1473167114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3202857e434023d4608-76952404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e43402578e74_39559686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e43402578e74_39559686')) {function content_57e43402578e74_39559686($_smarty_tpl) {?>

<!-- Block tags module -->
<div id="tags_block_left" class="block tags_block">
	<p class="title_block">
		<?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>

	</p>
	<div class="block_content">
		<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
				<a 
				class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } else { ?>item<?php }?>"
				href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp18=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp18), ENT_QUOTES, 'UTF-8', true);?>
" 
				title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" 
				>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				</a>
			<?php } ?>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

		<?php }?>
	</div>
</div>
<!-- /Block tags module -->
<?php }} ?>
