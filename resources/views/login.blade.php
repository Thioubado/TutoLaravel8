<h1>Login page</h1>
<!-- VERSION DE VALIDATION AVEC MESSAGE D'ERREUR SOUS FORM DE <LI>
    @if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif
-->
<form action="login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user name"><br>
    <input type="password" name="password" placeholder="Enter user name"><br>
    <button type="submit">Log in</button>
</form>