<h1>Http goes here</h1>

<h3>User list</h3>
<table border= '1'>
    <tr>
        <td>id</td>
        <td>email</td>
        <td>first_name</td>
        <td>last_name</td>
        <td>avatar</td>
    </tr>
    
    @foreach ($collection as $item)
    <tr>
        <td>{{$item ['id']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td><img src={{$item['avatar']}} /></td>
    </tr>
    @endforeach
</table>
