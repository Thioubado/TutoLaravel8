<h1>Http Request page</h1>
<form action="urlHttpRequest" method="POST">
    {{method_field('PUT')}}
    @csrf
    <input type="text" name="text" placeholder="Tape you name here"><br><br>
    <input type="password" name="password" placeholder="Tape you password here"><br><br>
    <button type="Submit">Enter</button>
</form>