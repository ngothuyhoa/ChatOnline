<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	<style type="text/css">
		.list-group {
			overflow-y:scroll;
			height: 300px; 
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class="offset-1 col-11 offset-sm-1 col-sm-6 offset-md-3 col-md-6">
				<li class="list-group-item active">Chat Room</li>
				<ul class="list-group" v-chat-scroll>
				  	<message
				  	v-for="value,index in chat.messages"
				  	:key=value.index
				  	:color=chat.color[index]
				  	:user=chat.user[index]
				  	>
				  		@{{ value }}
				  	</message>
				</ul>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				<input type="text" class="form-control" placeholder="Type your message here..." v-model="message" @keyup.enter="send" name="">	
			</div>
		</div>
	</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>