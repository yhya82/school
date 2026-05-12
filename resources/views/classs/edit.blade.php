<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('classes.update',$class)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Class Name</label>
        <input type="text" name="class_name" value="{{$class->class_name}}">
        <label>Level</label>
        <input type="text" name="level" value="{{$class->level}}">
        <button type="submit">update class</button>
    </form>
</body>
</html>