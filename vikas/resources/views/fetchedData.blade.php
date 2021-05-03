<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<a href="create"> Create TodoList</a>
   <table class="table">
   <tr>
   <td>Id</td>
   <td>Name</td>
   <td>CreatedAt</td>
   <td>Action</td>
   </tr>
@foreach($TodoArr as $todo)
<tr>
   <td>{{$todo->id}}</td>
   <td>{{$todo->name}}</td>
   <td>{{$todo->created_at}}</td>
   <td><a href="delete/{{$todo->id}}">Delete</a>| <a href="edit/{{$todo->id}}">Edit</a></td>
   </tr>

@endforeach
   </table>
</body>
</html>