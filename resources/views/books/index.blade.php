@include('partials.header')
<x-nav/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>BOOKS</title>

</head>
<body>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Total Pages</th>
      <th scope="col">Rating</th>
      <th scope="col">isbn</th>
      <th scope="col">Publish Date</th>
    </tr>
  </thead>
  @foreach ($books as $book)
  <tbody>  
    <tr>
      <td>{{$book->bookid}}</td>
      <td>{{$book->title}}</td>
      <td>{{$book->totalPages}}</td>
      <td>{{$book->rating}}</td>
      <td>{{$book->isbn}}</td>
      <td>{{$book->publishDate}}</td>
    </tr>
    </tbody>
    @endforeach

</table>

</body>
</html>

@include('partials.footer')
