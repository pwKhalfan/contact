<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    
    <h2>Contact Page</h2>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter name.." id="">
        <input type="email" name="email" placeholder="enter email.." id="">
        <textarea name="message" placeholder="enter message.." id="" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>