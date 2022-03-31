<!--レビュー-->
<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">課題3</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">num</th>
        <th class="text-center">name</th>
        <th class="text-center">age</th>
      </tr>
      @foreach($users as $book)
      <tr>
        <td>{{ $book->num }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->age }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>