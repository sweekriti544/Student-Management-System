<link href="{{asset('css/login.css')}}" rel="stylesheet">
<form method="POST" action="{{route('login')}}">
    {{csrf_field()}}

    <h1> <center> Welcome to Student Management System</center></h1>



    <div class="form">
        <form class="register-form">

Email : <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required autofocus><br><br>
   Password : <input id="password" type="password" class="form-control" name="password" required> <br>
    <button type="submit" class="btn btn-primary">
        Login
    </button>
</form>
    </div>

</form>
