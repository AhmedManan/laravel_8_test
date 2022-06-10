<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>Update Data</h1>
<div class='container'>
    <form method="POST" action="/update/{{$posts->id}}">
        @csrf
    <div class='mb-3'>
    <label><b>Post Title:</b></label>
    <input type="text" id="title" name="title" class="form-control" value="{{$posts->post_title}}">
    </div>
    <div class='mb-3'>
    <label><b>Post author:</b></label>
    <input type="text" id="author" name="author" class="form-control" value="{{$posts->post_author}}">
    </div>
    <input type="submit" name="Update" value="Update" class="btn btn-success">
    </form>
</div>


</body>
</html>
