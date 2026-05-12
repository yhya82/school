<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Teacher</th>
                <th>Class Name</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
                <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->teacher->user->name}}</td>
                <td>{{$class->class_name}}</td>
                <td>{{$class->level}}</td>
                <td>
                    <a href="{{route('classes.edit',$class)}}">edit</a>
                    <form action="{{route('classes.destroy',$class)}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>