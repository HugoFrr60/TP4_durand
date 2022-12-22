<?php
/* Smarty version 4.2.1, created on 2022-12-17 11:08:25
  from 'C:\laragon\www\TP4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639da32949d365_96059787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bda975ce403ed9a760f9e5b0d9a2f81a5001efc' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\index.tpl',
      1 => 1668770630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639da32949d365_96059787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223747138639da32949bfe2_04904778', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918947231639da32949cec7_56172915', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_223747138639da32949bfe2_04904778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_223747138639da32949bfe2_04904778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_918947231639da32949cec7_56172915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_918947231639da32949cec7_56172915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
</div>
<?php
}
}
/* {/block 'body'} */
}
