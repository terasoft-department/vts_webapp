<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Customer</h1>
        <form action="{{ route('customers.update', $customer->customer_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" class="form-control" name="customer_name" value="{{ $customer->customer_name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="{{ $customer->address }}" required>
            </div>
            <div class="form-group">
                <label for="customer_phone">Phone</label>
                <input type="text" class="form-control" name="customer_phone" value="{{ $customer->customer_phone }}" required>
            </div>
            <div class="form-group">
                <label for="tin_number">TIN Number</label>
                <input type="text" class="form-control" name="tin_number" value="{{ $customer->tin_number }}">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" name="start_date" value="{{ $customer->start_date->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
