<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Payment Report</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
        }
        .btn {
            background-color: #1382ab;
            color: white;
        }
        .header {
            margin-bottom: 20px;
            text-align: center;
        }
        .header h1 {
            color: #406daf;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="logout-btn">
        <a href="{{ route('payment_reports.index') }}" class="ml-8 text-#4E77B4C1">
            <i class="fa fa-home"></i> Back
        </a>
    </div>

    <div class="container">
        <div class="header">
            <h1>Create Payment Report</h1>
        </div>

        <form action="{{ route('payment_reports.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="customer_name">Customer Name:</label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="invoice_id">Invoice ID:</label>
                    <input type="text" id="invoice_id" name="invoice_id" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" id="due_date" name="due_date" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="prepared_by">Prepared By:</label>
                    <input type="text" id="prepared_by" name="prepared_by" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="plate_number">Plate Number:</label>
                    <input type="text" id="plate_number" name="plate_number" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="tin_number">TIN Number:</label>
                    <input type="text" id="tin_number" name="tin_number" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="descriptions">Descriptions:</label>
                <textarea class="form-control" id="descriptions" name="descriptions"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="num_cars">Number of Cars:</label>
                    <input type="number" id="num_cars" name="num_cars" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="periods">Periods:</label>
                    <input type="number" id="periods" name="periods" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="from">From:</label>
                    <input type="date" id="from" name="from" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="to">To:</label>
                    <input type="date" id="to" name="to" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="payment_type">Payment Type:</label>
                    <select class="form-control" id="payment_type" name="payment_type" required>
                        <option value="lease">Lease</option>
                        <option value="purchase">Purchase</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="unit_price">Unit Price:</label>
                    <input type="number" id="unit_price" name="unit_price" class="form-control" step="0.01" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="gross_value">Gross Value:</label>
                    <input type="number" id="gross_value" name="gross_value" class="form-control" step="0.01" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="vat_value">VAT Value:</label>
                    <input type="number" id="vat_value" name="vat_value" class="form-control" step="0.01" required>
                </div>
            </div>
            <div class="form-group">
                <label for="total_value">Total Value:</label>
                <input type="number" id="total_value" name="total_value" class="form-control" step="0.01" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Create Payment Report</button>
                <a href="{{ route('payment_reports.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
