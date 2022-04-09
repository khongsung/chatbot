<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
</head>
<body>
    <h1>this page index test</h1>
    <p>test commit</p>
    <span>copyright by khongsung</span>

    <script async src="https://telegram.org/js/telegram-widget.js?18" data-telegram-login="test" data-size="large" data-onauth="onTelegramAuth(user)" data-request-access="write"></script>
    <script type="text/javascript">
    	function onTelegramAuth(user) {
    		alert('Logged in as ' + user.first_name + ' ' + user.last_name + ' (' + user.id + (user.username ? ', @' + user.username : '') + ')');
    	}
    </script>

</body>
</html>