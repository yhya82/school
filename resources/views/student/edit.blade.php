<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('students.index')}}">students</a>
    <form action="{{route('students.update',$student)}}" method="POST">
        @csrf
        @method('PUT')
          <label >Last Name</label>
        <input type="text" name="last_name" value="{{$student->last_name}}">
        <label >Gender</label>
            <select name="gender">
                <option value="">Select gender</option>
                <option value="male" {{$student->gender == 'male'? "selected":''}}>Male</option>
                <option value="female" {{$student->gender == 'female'? 'selected': ''}}>Female</option>
            </select>
        <label>Date of birth</label>
        <input type="date" name="date_of_birth" value={{$student->date_of_birth}} >
        <button type="submit">update student</button>
    </form>
</body>
</html>