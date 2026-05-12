<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.index',)}}">create teachers</a>
    <table>
        <thead>
            <tr>
               <th>ID</th>
               <th>Name</th> 
                <th>Email</th>
                <th>phone</th>
               <th>gender</th>
               <th>qualification</th>
               <th>Date of birth</th>
               <th>Action</th>
            </tr>
            <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->user->name}}</td>
                    <td>{{$teacher->user->email}}</td>
                    <td>{{$teacher->user->phone}}</td>
                    <td>{{$teacher->gender}}</td>
                    <td>{{$teacher->qualification}}</td>
                    <td>{{$teacher->date_of_birth}}</td>
                    <td>
                        <a href="{{route('teachers.edit',$teacher)}}">edit</a>
                        <form action="{{route('teachers.delete',$teacher)}}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>