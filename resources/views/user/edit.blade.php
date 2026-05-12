<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.index',)}}">users</a>
    <form action="{{route('users.update', $user)}}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value={{$user->name}}>
        <label>Email</label>
        <input type="email" name="email" value={{$user->email}}>
        <label>Phone</label>
        <input type="text" name="phone" value={{$user->phone}}>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">update user</button>
    </form>
</body>
</html>