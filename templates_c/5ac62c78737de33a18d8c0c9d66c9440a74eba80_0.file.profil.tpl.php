<?php
/* Smarty version 4.2.1, created on 2022-12-22 22:02:30
  from 'C:\laragon\www\TP4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a4d3f69bd5f3_59406242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ac62c78737de33a18d8c0c9d66c9440a74eba80' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\profil.tpl',
      1 => 1671720359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4d3f69bd5f3_59406242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161071527763a4d3f69bc7c2_05225253', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104838805363a4d3f69bd0f3_73002819', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_161071527763a4d3f69bc7c2_05225253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_161071527763a4d3f69bc7c2_05225253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_104838805363a4d3f69bd0f3_73002819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_104838805363a4d3f69bd0f3_73002819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
<!-- Afficher les données de l'utilisateur -->
<p>Nom : <?php echo '<?php'; ?>
 echo $user_data['name']; <?php echo '?>'; ?>
</p>
<p>Adresse email : <?php echo '<?php'; ?>
 echo $user_data['email']; <?php echo '?>'; ?>
</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
