<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>Insert Data {{session('user')}}</h1>
<a href="/logout" class="btn btn-primary">Logout</a>
<div class='container'>
    <form method="POST" action="/store">
        @csrf
    <div class='mb-3'>
    <label><b>Post Title:</b></label>
    <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class='mb-3'>
    <label><b>Post author:</b></label>
    <input type="text" id="author" name="author" class="form-control">
    </div>
    <input type="submit" name="insert" value="insert" class="btn btn-primary">
    </form>
</div>


</body>
</html>
