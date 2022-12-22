<?php
/* Smarty version 4.2.1, created on 2022-12-22 22:02:16
  from 'C:\laragon\www\TP4\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a4d3e8d6ab21_65489257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886fbc57305212f6bce0fb0a6c69422b86ba1184' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\login.tpl',
      1 => 1671744969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4d3e8d6ab21_65489257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177780900963a4d3e8d69d87_61178405', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71973087863a4d3e8d6a627_06965915', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_177780900963a4d3e8d69d87_61178405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_177780900963a4d3e8d69d87_61178405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_71973087863a4d3e8d6a627_06965915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_71973087863a4d3e8d6a627_06965915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<p>
Contenu du Template login.tpl
</p>
<form action="" method="post">
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" placeholder="Test" required><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="test@gmail.com" required><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" placeholder="motdepasse" required><br><br>
            <label for="ville">Ville</label><br>
            <input type="text" id="ville" name="ville" placeholder="Amiens" required><br><br>
            <label for="pays">Pays</label><br>
            <input type="text" id="pays" name="pays" placeholder="France" required><br><br>
            <button type="submit" name="submit">Se connecter</button>
        </form>
</div>
<?php
}
}
/* {/block 'body'} */
}
