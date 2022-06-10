<!DOCTYPE html>
<html>
<head>
<title>User login</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>User Login </h1>
<a href="/registration" class="btn btn-primary">Registration</a>
<div class='container'>
    <form method="POST" action="/login">
        @csrf
    <div class='mb-3'>
    <label><b>User</b></label>
    <input type="text" id="user" name="user" class="form-control">
    </div>
    <div class='mb-3'>
    <label><b>Password:</b></label>
    <input type="text" id="password" name="password" class="form-control">
    </div>
    <input type="submit" name="insert" value="insert" class="btn btn-primary">
    </form>
</div>


</body>
</html>
