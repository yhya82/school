<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('subjects.index',)}}"> subjects</a>
    <form action="{{route('subjects.store')}}" method="POST">
        @csrf
        <label>Teacher</label>
        <select name="teacher_id">
            <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->user->name}}</option>
                @endforeach
        </select>
        <label >Subject Name</label>
        <input type="text" name="subject_name" placeholder="Enter subect name">
        <label >Subject Code</label>
        <input type="text" name="code" placeholder="Enter subject code">
        <button type="submit">Add subject</button>
    </form>
</body>
</html>