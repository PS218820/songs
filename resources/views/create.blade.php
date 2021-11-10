<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
   <form action="{{ route('songs.store')  }}" method="POST">
     @csrf
     <p>Titel</p>
     <input type="text" name="title" class="form-control" placeholder="titel">
     <p>Singer</p>
     <input type="text" name="singer" class="form-control" placeholder="singer">
     <button type="submit">Submit</button>
   </form>
</body>
</html>
