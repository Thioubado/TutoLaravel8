<h1>Login page</h1>

<form action="login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user name"><br>
    <input type="password" name="password" placeholder="Enter user name"><br>
    <button type="submit">Log in</button>
</form>