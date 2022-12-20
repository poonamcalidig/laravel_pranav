<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="product_name">
    </div>
    <br>
    <div>
        <label for="">Price</label>
        <input type="text" name="price">
    </div>
    <br>
    <div>
        <label for="">Status</label>
        <select id="" name="status">
            <option value="">Select Status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
