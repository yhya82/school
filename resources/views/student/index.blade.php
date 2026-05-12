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
                <th>Name</th>
                <th>Class</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Add Marks</th>
                <th>Report card</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
                <a href="{{route('users.index',)}}">create students</a>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->user->name}}</td>
                    <td>{{$student->class->class_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->date_of_birth}}</td>
                    <td><a href="{{route('mark.create',$student)}}"> add mark</a></td>
                    <td><a href="{{route('students.show',$student)}}">view report card</a></td>
                    <td>
                        <a href="{{route('students.edit',$student)}}">edit</a>
                        <form action="{{route('students.delete',$student)}}" method="POST" style="display:inline">
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>

                </tr>
            </tbody>
        @endforeach
    </table>
</body>
</html>