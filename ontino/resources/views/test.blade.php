<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body style="display: flex">
    <div>
        @foreach($users as $user)
            <h2>User name: {{$user->name}}</h2>
            <h3>User roles:
                @foreach($user->roles as $role) {{$role->name}} @endforeach
            </h3>
        @endforeach
    </div>
    <div style="margin-left: 150px">
        @foreach($roles as $role)
            <h2>User name: {{$role->name}}</h2>
            <h3>User roles:
                @foreach($role->users as $user) {{$user->name}} @endforeach
            </h3>
        @endforeach
    </div>
</body>
</html>
