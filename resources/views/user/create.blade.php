<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter Name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Enter Phone">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">add user</button>
    </form>
</body>
</html>