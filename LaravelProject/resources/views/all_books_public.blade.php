<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Books</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-10">
          <table border="2">
            <tr>
             <th>Название книги</th>
             <th>Описание</th>
             <th>Жанр</th>
             <th>Автор</th>
             <th>Страна</th>
            </tr>
              @foreach ($books as $b)
              <tr>
                <td><h4><a href="/books/{{$b->id}}">{{$b->title}}</a></h4></td>
                <td><h5>{{$b->description}}</h5></td>
                <td><h4>{{$b->genre}}</h4></td>
                <td><h4><a href="/bookauthors/{{$b->bookAuthor->id}}"> {{$b->bookAuthor->first_name}} {{$b->bookAuthor->last_name}}</a></h4><br></td>
                <td><h4>{{$b->bookAuthor->country}}</h4></td>
            </tr>
    @endforeach
  </div>
</div>  
</div> 
</table>
</body>
</html>
