<?php /* Smarty version 3.1.27, created on 2018-01-29 16:35:51
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2600830315a6f3f57b6fd87_79270846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e353a088af38352b37e15b9f51111056d259b4a' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/login.tpl',
      1 => 1512998157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2600830315a6f3f57b6fd87_79270846',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f3f57d89883_05124119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f3f57d89883_05124119')) {
function content_5a6f3f57d89883_05124119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2600830315a6f3f57b6fd87_79270846';
?>
<link rel="stylesheet" href="assets/css/styleLoginForm.css" type="text/css" />
			<div id="content">
					<div id="loginBox">
	<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?>
					Popraw następujące błędy: <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

	<?php }?>
					<form method="POST" action="login.php">
						<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

						<div>
							<input id="name" name="name" type="text" placeholder="Login...">
							<label for="name">Login</label>
						</div>
						<div>
							<input id="password" name="password" type="password" placeholder="Hasło...">
							<label for="password">Hasło</label>
						</div>
						<div>
							<input id="securityq" name="securityq" type="text" placeholder="Podaj wynik działania">
							<label for="securityq">Ile to 2+2?</label>
						</div>
						<button type="submit" class="confirmationButton" name="register">Login</button>
					</form>
				</div>
			</div>
			<div style="clear:both;"></div>
<?php }
}
?>