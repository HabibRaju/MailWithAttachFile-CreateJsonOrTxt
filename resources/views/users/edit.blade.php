    <h1>Update Form</h1>
    <form action="/update/{{$user['id']}}" method="POST">
        @csrf
        Name : <input type="text" id="name" name="name" value = "{{$user['name']}}"> <br>
        Email : <input type="email" id="email" name="email" value = "{{$user['email']}}"> <br>
        <button type="submit">Update</button>
    </form>
