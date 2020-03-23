<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign up</h2>
  <form action="register_action" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error )

        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

        @if(session('response'))
        <div class="alert alert-success">
          {{session('success')}}
          @endif

     <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" name="cpassword" class="form-control" id="pwd" placeholder="confirm password" name="pwd">
    </div>


 <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" name="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
