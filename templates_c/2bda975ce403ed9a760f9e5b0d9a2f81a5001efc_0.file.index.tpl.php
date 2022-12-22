<?php
/* Smarty version 4.2.1, created on 2022-12-22 21:15:51
  from 'C:\laragon\www\TP4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a4c9070caf86_35647314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bda975ce403ed9a760f9e5b0d9a2f81a5001efc' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\index.tpl',
      1 => 1671720334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4c9070caf86_35647314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68334413863a4c9070c6bb0_25818715', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92853782263a4c9070ca429_02887509', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_68334413863a4c9070c6bb0_25818715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_68334413863a4c9070c6bb0_25818715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_92853782263a4c9070ca429_02887509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_92853782263a4c9070ca429_02887509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
<?php echo '<?php'; ?>
 if (isset($username)): <?php echo '?>'; ?>

    <p>Bienvenue, <?php echo '<?php'; ?>
 echo $username; <?php echo '?>'; ?>
</p>
    <a href="/profil">Profil</a>
    <a href="/logout">Déconnexion</a>

<!-- Afficher le lien vers /login et /register si l'utilisateur n'est pas connecté -->
<?php echo '<?php'; ?>
 elseif (isset($show_login_link) && $show_login_link): <?php echo '?>'; ?>

    <a href="/login">Connexion</a>
    <a href="/register">Inscription</a>
<?php echo '<?php'; ?>
 endif; <?php echo '?>'; ?>

</div>
<?php
}
}
/* {/block 'body'} */
}
