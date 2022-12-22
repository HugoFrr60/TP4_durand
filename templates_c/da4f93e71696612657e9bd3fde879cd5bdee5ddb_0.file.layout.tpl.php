<?php
/* Smarty version 4.2.1, created on 2022-12-19 10:20:05
  from 'C:\laragon\www\TP4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a03ad5a9c188_15788991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4f93e71696612657e9bd3fde879cd5bdee5ddb' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\layout.tpl',
      1 => 1671443704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a03ad5a9c188_15788991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53691416163a03ad5a97e84_14113936', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78800479763a03ad5a99365_62753134', 'head');
?>

</head>
<body>
<style>
    
</style>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132004100563a03ad5a9a740_28741613', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85148781363a03ad5a9b483_92966690', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_53691416163a03ad5a97e84_14113936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_53691416163a03ad5a97e84_14113936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_78800479763a03ad5a99365_62753134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_78800479763a03ad5a99365_62753134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_132004100563a03ad5a9a740_28741613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_132004100563a03ad5a9a740_28741613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>Menu de navigation  défini dans layout.tpl</p>
<a href='./'>index</a>
<a href='register'>inscription</a> 
<a href='login'>connexion</a> 
<a href='profil'>profil</a> 
<a href='https://www.u-picardie.fr'>lien upicardie externe</a> 
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_85148781363a03ad5a9b483_92966690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_85148781363a03ad5a9b483_92966690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
