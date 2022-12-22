<?php
/* Smarty version 4.2.1, created on 2022-12-22 22:15:09
  from 'C:\laragon\www\TP4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a4d6ed6f0ef6_27685579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c9f06a4dc90257b7d884ed9d589def21cf566fc' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\register.tpl',
      1 => 1671747134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4d6ed6f0ef6_27685579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134555955363a4d6ed6effd7_88265519', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86399648063a4d6ed6f0788_75695011', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_134555955363a4d6ed6effd7_88265519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134555955363a4d6ed6effd7_88265519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_86399648063a4d6ed6f0788_75695011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_86399648063a4d6ed6f0788_75695011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div id='main'>
<p>Contenu du template register.tpl</p>

<form action="" method="post">
<style>
  form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 500px;
  margin: 0 auto;
}

label {
  margin: 10px 0;
}

input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  background-color: #00BFFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #1E90FF;
}

.error {
  color: red;
}
</style>

  <label for="name">Nom :</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Mot de passe :</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="city">Ville :</label><br>
  <input type="text" id="city" name="city"><br>
  <label for="country">Pays :</label><br>
  <input type="text" id="country" name="country"><br><br>
  <button type="submit">Sign in</button>
</form> 

</div>
<?php
}
}
/* {/block 'body'} */
}
