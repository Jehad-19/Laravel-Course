<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Products List</h2>

  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center">No products found.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>