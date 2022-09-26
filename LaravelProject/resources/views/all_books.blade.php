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
          <ul>
            <li><button><a href="/createbook"><h3>Добавить книгу</h3></a></button></li>
            <li><button><a href="/createauthor"><h3>Добавить автора</h3></a></button></li>
          </ul>
          <table border="2">
            <tr>
             <th>Название книги</th>
             <th>Описание</th>
             <th>Жанр</th>
             <th>Автор</th>
             <th>Страна</th>
             <th>Дополнительно</th>
            </tr>
              @foreach ($books as $b)
              <tr>
                <td><h4><a href="/books/{{$b->id}}">{{$b->title}}</a></h4></td>
                <td><h5>{{$b->description}}</h5></td>
                <td><h4>{{$b->genre}}</h4></td>
                <td><h4><a href="/bookauthors/{{$b->bookAuthor->id}}"> {{$b->bookAuthor->first_name}} {{$b->bookAuthor->last_name}}</a></h4><br></td>
                <td><h4>{{$b->bookAuthor->country}}</h4></td>
                <td>
                  <ul>
                    <li>
                      <button><a href="/editbook/{{$b->id}}">Редактировать</a></button></li>
                    <li>
                      <form action="/books/{{$b->id}}" method="POST">@csrf @method('DELETE')
                        <input type="submit" value="Удалить" >
                      </form>
                    </li>
                  </ul>
                </td>
            </tr>
    @endforeach
  </div>
</div>  
</div> 
</table>
</body>
</html>
