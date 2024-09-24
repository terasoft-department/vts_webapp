<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Device Requisition</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            padding: 1rem;
            border-radius: 12px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 20rem;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <h5 class="text-center mb-3">Edit Device Requisition</h5>
        <form action="{{ route('device_requisitions.update', $requisition->requisition_id) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="category">Device Category</label>
                <input type="text" id="category" name="category" class="form-control form-control-sm" value="{{ $requisition->category }}" readonly>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="form-control form-control-sm" value="{{ $requisition->quantity }}" readonly>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control form-control-sm" required>
                    <option value="approved" {{ $requisition->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="not approved" {{ $requisition->status == 'not approved' ? 'selected' : '' }}>Not Approved</option>
                </select>
            </div>

            <button type="button" class="btn btn-secondary btn-block mt-3" onclick="window.history.back();">Back</button>
            <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
