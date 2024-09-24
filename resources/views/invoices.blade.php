<form id="trackDebtsForm" method="POST" enctype="multipart/form-data" action="{{ route('invoices.store') }}">
    @csrf


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Track Debts Form</title>
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
        .summary {
            margin-top: 30px;
        }
        .summary h4 {
            border-bottom: 2px solid #1382ab;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .logo-preview {
            margin-bottom: 20px;
            text-align: center;
        }
        .logo-preview img {
            max-width: 150px;
            max-height: 150px;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 100px;
            height: auto;
        }
        .header h3 {
            margin: 0;
            color: #406daf;
            font-weight: bold;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .invoice-table th {
            background-color: #f2f2f2;
        }
        .logout-btn {
            display: block;
            text-align: right;
            margin-bottom: 20px;
        }
        .red-text {
            color: red;
        }
        .centered-text {
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
        .justify-text {
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="logout-btn">
        <a href="accounting_officer" class="ml-8 text-#4E77B4C1">
            <i class="fa fa-home"></i> Back
        </a>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="/images/logo.png" alt="Logo" class="logo">
            <div>
                <h3 style="text-align: center;">TERA TECHNOLOGIES AND ENGINEERING LIMITED</h3>
                <p class="red-text justify-text">
                    REGISTERED CONTRACTOR IN ELECTRICAL (CLASS THREE), TELECOMMS, ICT AND SECURITY SYSTEMS (CLASS ONE), HVAC (CLASS TWO), CIVIL (CLASS FOUR)
                </p>
                <p class="justify-text">
                    Office: Mbezi Beach Africana, Plot No. 2283, Block H, Tarangire Street, Bagamoyo Road/Africana Drive, P.O. Box 31257, Dar es Salaam, Tanzania
                    Tel/Fax: +255 22 2701611, Cell: +255 713 899 309, +255 767 598691
                    E-mail: info@teratech.co.tz, Website: www.teratech.co.tz
                </p>
                <p class="centered-text">TAX INVOICE FOR VEHICLE TRACKER INSTALLATION</p>
            </div>
        </div>

        <!-- Form -->
        <form id="trackDebtsForm" method="POST" enctype="multipart/form-data" action="{{ route('invoices.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="customer_name">Customer Name:</label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="invoice_id">Invoice No (TTEL/year/number):</label>
                    <input type="text" id="invoice_id" name="invoice_id" class="form-control" placeholder="TTEL/2023/001" pattern="TTEL\/\d{4}\/\d{3}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="due_date">Invoice Date:</label>
                    <input type="date" id="due_date" name="due_date" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="prepared_by">Prepared By:</label>
                    <input type="text" id="prepared_by" name="prepared_by" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="plate_number">Plate Number (T-XXX-XXX):</label>
                    <input type="text" id="plate_number" name="plate_number" class="form-control" placeholder="T-123-ABC" pattern="T-\d{3}-[A-Z]{3}" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="tin_number">TIN No (XXX-XXX-XXX):</label>
                    <input type="text" id="tin_number" name="tin_number" class="form-control" placeholder="123-456-789" pattern="\d{3}-\d{3}-\d{3}" required>
                </div>
                <div class="col-md-12 form-group">
                    <label for="descriptions">Descriptions:</label>
                    <input type="text" id="descriptions" name="descriptions" class="form-control" placeholder="Installation of OBU/GPRS for 12 months (JAN2023-DEC2023)" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="num_cars">Number of Cars:</label>
                    <input type="number" id="num_cars" name="num_cars" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="periods">Periods (Months):</label>
                    <input type="number" id="periods" name="periods" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="payment_type">Payment Type:</label>
                    <select id="payment_type" name="payment_type" class="form-control" onchange="updateUnitPrice()">
                        <option value="lease">Lease</option>
                        <option value="purchase">Purchase</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="unit_price">Unit Price (TZS):</label>
                    <input type="number" id="unit_price" name="unit_price" class="form-control" value="45000" required readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Calculate and Save</button>
        </form>

        <!-- Summary -->
        <div class="summary" id="summary">
            <h4>Summary</h4>
            <table class="table invoice-table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount (TZS)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gross Value</td>
                        <td id="gross_value"></td>
                    </tr>
                    <tr>
                        <td>VAT (18%)</td>
                        <td id="vat_value"></td>
                    </tr>
                    <tr>
                        <td>Total Amount (Including VAT)</td>
                        <td id="total_value"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('trackDebtsForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const numCars = parseFloat(document.getElementById('num_cars').value);
            const periods = parseFloat(document.getElementById('periods').value);
            const unitPrice = parseFloat(document.getElementById('unit_price').value);

            const grossValue = numCars * periods * unitPrice;
            const vatValue = grossValue * 0.18; // 18%
            const totalValue = grossValue + vatValue;

            document.getElementById('gross_value').textContent = grossValue.toFixed(2);
            document.getElementById('vat_value').textContent = vatValue.toFixed(2);
            document.getElementById('total_value').textContent = totalValue.toFixed(2);
        });

        function updateUnitPrice() {
            const paymentType = document.getElementById('payment_type').value;
            const unitPriceInput = document.getElementById('unit_price');

            if (paymentType === 'lease') {
                unitPriceInput.value = 45000; // Set lease unit price
            } else {
                unitPriceInput.value = 20000; // Set purchase unit price
            }
        }
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
</form>
