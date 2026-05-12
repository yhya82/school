<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('students.index')}}">student</a>
    <form action="{{route('mark.update',$mark)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Subject</label>
        <select name="subject_id">
           @foreach($subjects as $subject)
           <option value="{{$subject->id}}" {{'subject_id' == $subject->id ? 'selected':''}}>{{$subject->subject_name}}</option>
           @endforeach
        </select>
        <label >Score</label>
        <input type="text" name="score" value={{$mark->score}}>
        <button type="submit">update mark</button>
    </form>
</body>
</html>