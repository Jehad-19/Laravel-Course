<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for=""> product name</label>
    <input type="text" name="name"><br>

    <label for=""> product price</label>
    <input type="text" name="price"><br>

    <button type="submit"> add product

    </button>

</form>