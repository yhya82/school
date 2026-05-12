<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('teachers.index',)}}">teachers</a>
    <form action="{{route('teachers.store',$user)}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" value={{$user->name}} >
        <label>gender</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <label>qualification</label>
        <input type="text" name="qualification" placeholder="Enter qualification" >
        <label >Date of birth</label>
        <input type="date" name="date_of_birth" placeholder="Enter date of birth">
        <button type="submit">Add teacher</button>
    </form>
</body>
</html>