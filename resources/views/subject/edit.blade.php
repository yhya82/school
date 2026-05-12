<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('subjects.index',)}}"> subjects</a>
     <form action="{{route('subjects.update',$subject)}}" method="POST">
        @csrf
        @method('PUT')
    
        <label >Subject Name</label>
        <input type="text" name="subject_name" value="{{$subject->subject_name}}">
        <label >Subject Code</label>
        <input type="text" name="code" value="{{$subject->code}}">
        <button type="submit">update subject</button>
    </form>
</body>
</html>