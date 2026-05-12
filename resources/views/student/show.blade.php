<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('students.index')}}">students</a><br>
    <h4>Name: {{$student->user->name}}</h4> 
    <h4>Class: {{$student->class->class_name}}</h4>
    <table>
        <thead>
            <tr>
                <th>Subject</th>
                <th>Score</th>
                <th>grade</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student->marks as $mark)
                <tr>
                    <td>{{$mark->subject->subject_name}}</td>
                    <td>{{$mark->score}}</td>
                    <td>{{$mark->grade}}</td>
                    
                    <td><a href="{{route('mark.edit',$mark)}}">edit</a>
                        <form action="{{route('mark.delete',$mark)}}" method="POST" style="display:inline">
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