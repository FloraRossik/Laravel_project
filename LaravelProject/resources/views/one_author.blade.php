<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-10">
              <h1>{{$author->first_name}} {{$author->last_name}}</h1>
              <table border="2">
              <tr>
                <th>Книги</th>
                <th>Описание</th>
                <th>Жанр</th>
              </tr>
            @foreach ($author->books as $b)
            <tr>
              <td><h4>{{$b->title}}</h4></td>
              <td><h4>{{$b->description}}</h4></td>
              <td><h4>{{$b->genre}}</h4></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>  
    </div> 
</body>
</html>