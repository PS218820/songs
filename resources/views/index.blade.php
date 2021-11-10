<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
  <h1>Songs</h1>
  <ul>
    @foreach($songs as $song)
      <li><a href="songs/{{ $song->id }}">{{ $song->title }}</a></li>
    @endforeach
  </ul>
</body>
</html>
