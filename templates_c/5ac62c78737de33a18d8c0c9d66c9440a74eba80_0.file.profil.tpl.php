<?php
/* Smarty version 4.2.1, created on 2022-12-22 11:02:57
  from 'C:\laragon\www\TP4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a43961554ec8_50857379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ac62c78737de33a18d8c0c9d66c9440a74eba80' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\profil.tpl',
      1 => 1671453004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a43961554ec8_50857379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179657713563a439615542a5_39985710', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87598065863a43961554a98_54176957', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_179657713563a439615542a5_39985710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_179657713563a439615542a5_39985710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_87598065863a43961554a98_54176957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_87598065863a43961554a98_54176957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
