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
          <table border="2">
            <tr>
              <th>Описание</th>
              <th>Жанр</th>
            </tr>
          <tr>
            <td><h4>{{$book->description}}</h4></td>
            <td><h4>{{$book->genre}}</h4></td>
          </tr>
        </div>
      </div>  
    </div> 
</body>
</html>