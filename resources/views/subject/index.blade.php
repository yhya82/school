<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('subjects.create',)}}">create subjects</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Teacher</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>ACtion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->teacher->user->name}}</td>
                <td>{{$subject->subject_name}}</td>
                <td>{{$subject->code}}</td>
                <td>
                    <a href="{{route('subjects.edit',$subject)}}">edit</a>
                    <form action="{{route('subjects.destroy',$subject)}}" method="POST" style="display:inline">
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