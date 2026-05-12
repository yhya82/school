<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('students.index')}}">students</a>
    <form action="{{route('students.store',$user)}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" value={{$user->name}}>
        <label >Class</label>
        <select name="class_id" >
            <option value="">Select Class</option>
            @foreach($classes as $class)
                <option value="{{$class->id}}">{{$class->class_name}}</option>
            @endforeach    
        </select>
        <label >Last Name</label>
        <input type="text" name="last_name" placeholder="Enter last name">
        <label >Gender</label>
            <select name="gender">
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        <label>Date of birth</label>
        <input type="date" name="date_of_birth" >
        <button type="submit">add student</button>
    </form>
</body>
</html>