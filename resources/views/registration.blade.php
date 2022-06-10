<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>New User?</h1>
<a href="/" class="btn btn-primary">login</a>
@if(session('user'))
    <h3>{{session('user')}} has been added </h3>
    @endif
<div class='container'>
    <form method="POST" action="/registration">
        @csrf
    <div class='mb-3'>
    <label><b>User</b></label>
    <input type="text" id="user" name="user" class="form-control">
    </div>
    <div class='mb-3'>
    <label><b>Email:</b></label>
    <input type="text" id="email" name="email" class="form-control">
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
