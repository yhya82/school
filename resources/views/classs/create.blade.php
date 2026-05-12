<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('classes.store')}}" method="POST">
        @csrf
        <label>Teacher</label>
        <select name="teacher_id" >
            <option value="">Select Teacher</option>
            @foreach ($teachers as $teacher)
            <option value="{{$teacher->id}}">
                {{$teacher->user->name}}</option>
                
            @endforeach
        </select>
        <label>Class Name</label>
        <input type="text" name="class_name" placeholder="Enter class name">
        <label>Level</label>
        <input type="text" name="level" placeholder="Enter level">
        <button type="submit">add class</button>
    </form>
</body>
</html>