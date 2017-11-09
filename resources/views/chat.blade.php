<!DOCTYPE html>
<html>
<head>
	<title>Chat VueJS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">﻿
</head>
<body>
	<div class="container" id="app">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Chatroom
						<span class="badge pull-right">
							@{{ usersInRoom.length }}
						</span>
					</div>
				</div>

				<chat-log :messages="messages"></chat-log>
				<chat-composer v-on:messagesent="addMessage"></chat-composer>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
