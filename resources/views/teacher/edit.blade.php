<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('teachers.index',)}}">teachers</a>
     <form action="{{route('teachers.update',$teacher,$user)}}" method="POST">
        @csrf
        @method('PUT')
        
        <label>gender</label>
        <select name="gender">
            <option value="male" {{$teacher->gender == 'male' ? 'selected' : ''}}>Male</option>
            <option value="female" {{$teacher->gender == 'female'? 'selected': ''}}>Female</option>
        </select>
        <label>qualification</label>
        <input type="text" name="qualification" value={{$teacher->qualification}} >
        <label >Date of birth</label>
        <input type="date" name="date_of_birth" value={{$teacher->date_of_birth}}>
        <button type="submit">update teacher</button>
    </form>
</body>
</html>