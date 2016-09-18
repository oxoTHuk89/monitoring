<!DOCTYPE html>
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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <!-- jQuery -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <!-- Custom -->
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom -->
    <!-- Вконтакте -->
    <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
    <!-- Вконтакте -->
</head>
<body>
{if isset($getServers.error)}
	<div class="alert alert-warning">{$getServers.error_message}</div>
{else}
<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>Статус</th>
        <th>Название</th>
        <th>Игра</th>
        <th>Подключиться</th>
        <th>Карта</th>
        <th>Игроки</th>
		{if $ADMIN}
			<th>Удалить</th>
		{/if}
    </tr>
    {foreach $getServers as $Server}
        {if !$Server.Status}
            {$Server.Status = Offline}
            {$color = red}
            {$colspan = 5}
            <tr class="danger" id="">
                <td><span class={$color}>{$Server.Status}</span></td>
                <td colspan= {$colspan}>{$Server.ip}</td>
				{if $ADMIN}
					<td class="center"><input id={$Server.id} type="button" class="btn btn-primary	 serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				{/if}
            </tr>
        {else}
            {$Server.Status = Online}
            {$color = green}
            {$colspan = 0}
            <tr class="success hovered" id="" title="{$Server.description}">
                <td colspan= {$colspan}><span class={$color}>{$Server.Status}</span></td>
                <td><strong>{$Server.HostName}</strong></td>
                <td class="center"><img src="img/{$Server.ModDir}.png"></td>
                <td class="center"><a href=steam://connect/{$Server.ip}:{$Server.GamePort}>{$Server.ip}{if $Server.GamePort != 27015}:{$Server.GamePort}{/if}</a></td>
                <td class="center">{$Server.Map} </td>
                <td class="center">{$Server.Players} из {$Server.MaxPlayers} </td>
				{if $ADMIN}
					<td class="center"><input id={$Server.id} type="button" class="btn btn-primary serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				{/if}
            </tr>
        {/if}
    {/foreach}
</table>
{/if}
{if $ADMIN}
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
					{foreach $getGames as $game}
						<option value="{$game.id}">{$game.fullname}</option>
					{/foreach}
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
{/if}