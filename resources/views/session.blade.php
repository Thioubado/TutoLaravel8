<h1>Session page</h1>

<form action="urlAuth" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Tape your name here"><br><br>
    <input type="password" name="password" placeholder="Tape your password here"><br><br>
    <button type="Submit">Login</button>
</form>