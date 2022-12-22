<?php
/* Smarty version 4.2.1, created on 2022-12-22 22:15:07
  from 'C:\laragon\www\TP4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a4d6ebd2f5d3_34617733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4f93e71696612657e9bd3fde879cd5bdee5ddb' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\layout.tpl',
      1 => 1671747304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4d6ebd2f5d3_34617733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<?php'; ?>


session_start();

echo $_SESSION['user'];

<?php echo '?>'; ?>


<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1102025663a4d6ebd2d893_27924528', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171309389363a4d6ebd2e741_67049758', 'head');
?>

</head>
<body>
<style>
    
</style>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38596765263a4d6ebd2ed17_43342961', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98414450563a4d6ebd2f1b4_31450876', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_1102025663a4d6ebd2d893_27924528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1102025663a4d6ebd2d893_27924528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_171309389363a4d6ebd2e741_67049758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_171309389363a4d6ebd2e741_67049758',
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
class Block_38596765263a4d6ebd2ed17_43342961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_38596765263a4d6ebd2ed17_43342961',
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
class Block_98414450563a4d6ebd2f1b4_31450876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_98414450563a4d6ebd2f1b4_31450876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
