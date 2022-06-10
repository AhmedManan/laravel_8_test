<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
</head>
<body>

<h1>All Data, {{session('user')}}</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <td>Action</td>
  </tr>
  @foreach($posts as $data)
  <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->post_title}}</td>
    <td>{{$data->post_author}}</td>
    <td><a href="/delete/{{$data->id}}" class="btn btn-danger">Delete</a></td>
    <td><a href="/update/{{$data->id}}" class="btn btn-primary">Update</a></td>
  </tr>
  @endforeach
</table>

</body>
</html>