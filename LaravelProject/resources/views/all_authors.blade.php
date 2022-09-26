<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Books</title>
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <ul>
            <li><button><a href="/createbook"><h3>Добавить книгу</h3></a></button></li>
            <li><button><a href="/createauthor"><h3>Добавить автора</h3></a></button></li>
          </ul>
          <table border="2">
            <tr>
             <th>Автор</th>
             <th>Количество написанных книг</th>
             <th>Дополнительно</th>
            </tr>
            @foreach ($authors as $a)
            <tr>
              <td><h4><a href="/bookauthors/{{$a->id}}">{{$a->first_name}} {{$a->last_name}}</a></h4></td>
              <td><h4>{{count($a->books)}}</h4></td>
              <td>
                <ul><li><button><a href="/editauthor/{{$a->id}}">Редактировать</a></button></li>
              <li>
                <form action="/bookauthors/{{$a->id}}" method="POST">@csrf @method('DELETE')
                  <input type="submit" value="Удалить">
                </form>
              </li>
              </td>
            </ul>
          </tr>
          @endforeach
        </div>
      </div>  
    </div> 
  </table>
</table>
</body>
</html>