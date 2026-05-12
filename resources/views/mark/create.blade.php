<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('mark.store', $student)}}" method="POST">
        @csrf
        <label >Student Name</label>
        <input type="text" value={{$student->user->name}}>
        <label >Subject</label>
        <select name="subject_id" >
            <option value="">Select Subject</option>
            @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
            @endforeach
        </select>
        <label >Score</label>
        <input type="text" name="score" placeholder="Enter Score">
        <button type="submit">Add mark</button>
    </form>
</body>
</html>