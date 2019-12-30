<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple CodeIgniter App - Todos</title>
  <link rel="stylesheet"
href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($products as $product) {?>
    <tr>
      <th scope="row"><?php echo $product->id?></th>
      <td><?php echo $product->name?></td>
      <td><?php echo $product->code?></td>
    </tr>
  <?php }?>

  </tbody>
</table>

  </div>

</body>
</html>
