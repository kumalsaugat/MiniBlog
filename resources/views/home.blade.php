<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple MiniBlog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 bg-dark" >
  <h2>MiniBlog Post</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Body</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->user->name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->title}}</td>
          </tr>

        @endforeach


    </tbody>
  </table>
</div>

</body>
</html>
