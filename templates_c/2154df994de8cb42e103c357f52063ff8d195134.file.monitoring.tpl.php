<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-14 13:17:58
         compiled from "./templates/monitoring.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12751267557d79fa9ca7b93-39805631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2154df994de8cb42e103c357f52063ff8d195134' => 
    array (
      0 => './templates/monitoring.tpl',
      1 => 1473848442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12751267557d79fa9ca7b93-39805631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d79fa9d24ba7_67467400',
  'variables' => 
  array (
    'getServers' => 0,
    'ADMIN' => 0,
    'Server' => 0,
    'color' => 0,
    'colspan' => 0,
    'getGames' => 0,
    'game' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d79fa9d24ba7_67467400')) {function content_57d79fa9d24ba7_67467400($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <title>Game Nation</title>
    <link rel="shortcut icon" href='http://g-nation.ru/favicon.ico'/>
    <link rel="image_src" href='http://g-nation.ru/public/style_images/g_nation/meta_image.png'/>
    <meta property="og:title" content="Game Nation"/>
    <meta property="og:site_name" content="Game Nation"/>
    <meta name="description"
          content="Портал одного из лучших серверов России. Захватывающая и популярная action - игра Сounter-Strike. Вашему вниманию предоставлена информация о сервере, его возможностях, а так же спец.темы для ваших вопросов и пожеланий. Адекватное и понимающее руководство."/>
    <meta property="og:description"
          content="Портал одного из лучших серверов России. Захватывающая и популярная action - игра Сounter-Strike. Вашему вниманию предоставлена информация о сервере, его возможностях, а так же спец.темы для ваших вопросов и пожеланий. Адекватное и понимающее руководство."/>
    <meta name="keywords" content="Counter Strike, cs 16, контра, скачать контру"/>
    <meta property="og:image" content="http://g-nation.ru/public/style_images/g_nation/meta_image.png"/>
    <!-- jQuery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.3/jquery-ui.js"><?php echo '</script'; ?>
>
    <!-- jQuery -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!-- Bootstrap -->
    <!-- Custom -->
    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom -->
    <!-- Вконтакте -->
    <?php echo '<script'; ?>
 src="//vk.com/js/api/openapi.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- Вконтакте -->
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['getServers']->value['error']) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServers']->value['error_message'];?>
</div>
<?php } else { ?>
<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>Статус</th>
        <th>Название</th>
        <th>Игра</th>
        <th>Подключиться</th>
        <th>Карта</th>
        <th>Игроки</th>
		<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
			<th>Удалить</th>
		<?php }?>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['Server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Server']->key => $_smarty_tpl->tpl_vars['Server']->value) {
$_smarty_tpl->tpl_vars['Server']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['Server']->value['Status']) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Offline';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('red', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(5, null, 0);?>
            <tr class="danger" id="">
                <td><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary	 serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?>
            </tr>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Online';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(0, null, 0);?>
            <tr class="success hovered" id="" title="<?php echo $_smarty_tpl->tpl_vars['Server']->value['description'];?>
">
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Server']->value['HostName'];?>
</strong></td>
                <td class="center"><img src="img/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ModDir'];?>
.png"></td>
                <td class="center"><a href=steam://connect/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];
if ($_smarty_tpl->tpl_vars['Server']->value['GamePort']!=27015) {?>:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];
}?></a></td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Map'];?>
 </td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Players'];?>
 из <?php echo $_smarty_tpl->tpl_vars['Server']->value['MaxPlayers'];?>
 </td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?>
            </tr>
        <?php }?>
    <?php } ?>
</table>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
	<form class="create_server form-horizontal  " role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverip">IP адрес или домен: </label>
			<div class="col-sm-10">
				<input type="text" placeholder="123.123.123.1" class="form-control" name="serverip" id="serverip">
			</div>
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverport">Порт: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="serverport" id="serverport" value="27015">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="servergame">Игра: </label>
			<div class="col-sm-10">
				<select id="servergames" name="servergames" class="form-control select">
					<option value="">Выберите игру</option>
					<?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['game']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getGames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['fullname'];?>
</option>
					<?php } ?>
				</select>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverrcon">RCON пароль: </label>
			<div class="col-sm-10">
				<input type="text" placeholder="Type rcon_password to the server console" class="form-control" name="serverrcon" id="serverrcon">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="servercriteria">Порядковый номер: </label>
			<div class="col-sm-10">
				<input type="number" placeholder="Порядок вывода. Только цифры." class="form-control" name="servercriteria" id="servercriteria">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverdesc">Описание: </label>
			<div class="col-sm-10">
				<textarea name="serverdesc" placeholder="Описание сервера." class="form-control" id="serverdesc"> </textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<input type="hidden" name="add_srv" value="1">
			<input type="button" class="add_srv btn btn-success" value="Добавить сервер">
		</div>
	</form>
<?php }?><?php }} ?>
