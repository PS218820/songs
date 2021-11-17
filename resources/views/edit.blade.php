<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
  <form action="{{ route('songs.destroy', [$song->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
  </form>

  <form action="{{ route('songs.update',[$song->id])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $song->title }}" placeholder="Name">
        <textarea name="singer" placeholder="Detail">{{ $song->singer }}</textarea>
        <button type="submit">Submit</button>
  </form>
</body>
</html>
