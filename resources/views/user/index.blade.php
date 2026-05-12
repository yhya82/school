<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.create',)}}">create users</a>
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            <th>Stud/Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="{{route('users.edit',$user)}}">Edit</a>
                    <form action="{{route('users.destroy',$user)}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('teachers.create',$user)}}">Add teacher</a>
                    <a href="{{route('students.create',$user)}}">Add student</a>
                </td>
             </tr>
            @endforeach
           
        </tbody>
    </table>
</body>
</html>