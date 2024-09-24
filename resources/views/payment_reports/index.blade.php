<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Reports</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="assets1/css/demo.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            padding: 10px;
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 1500px; /* Container size */
            margin: 12px auto; /* Center the container */
        } */

        h1 {
            color: #406daf;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-group {
            display: flex;
            justify-content: flex-start; /* Align buttons to the left */
            margin-bottom: 20px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 8px 12px; /* Reduced padding */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 10px;
            font-size: 1rem; /* Adjusted font size */
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            font-size: 0.9rem; /* Adjusted table font size */
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f8f9fa; /* Light gray background for header */
        }

        .btn-sm {
            font-size: 0.8rem; /* Smaller font for action buttons */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Payment Reports</h1>

        <div class="btn-group">
            <a href="{{ route('payment_reports.create') }}" class="btn btn-primary">Create New Report</a>
        </div>

        <table id="paymentReports" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Cust. Name</th>
                    <th>Inv. ID</th>
                    <th>Due</th>
                    <th>Prep. By</th>
                    <th>Plate No.</th>
                    <th>TIN No.</th>
                    <th>Desc.</th>
                    <th>No. Cars</th>
                    <th>Per.</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Pay. Type</th>
                    <th>Unit</th>
                    <th>G. Value</th>
                    <th>VAT</th>
                    <th>Total</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($paymentReports as $report)
                <tr>
                    <td colspan="9">
                        <strong>Customer Name:</strong> {{ $report->customer_name }} <br>
                        <strong>Invoice ID:</strong> {{ $report->invoice_id }} <br>
                        <strong>Due Date:</strong> {{ $report->due_date }} <br>
                        <strong>Prepared By:</strong> {{ $report->prepared_by }} <br>
                        <strong>Plate Number:</strong> {{ $report->plate_number }} <br>
                        <strong>TIN Number:</strong> {{ $report->tin_number }} <br>
                    </td>
                    <td colspan="7">
                        <strong>Descriptions:</strong> {{ $report->descriptions }} <br>
                        <strong>Num Cars:</strong> {{ $report->num_cars }} <br>
                        <strong>Periods:</strong> {{ $report->periods }} <br>
                        <strong>From:</strong> {{ $report->from }} <br>
                        <strong>To:</strong> {{ $report->to }} <br>
                        <strong>Payment Type:</strong> {{ $report->payment_type }} <br>
                        <strong>Unit Price:</strong> {{ number_format($report->unit_price, 2) }} <br>
                        <strong>Gross Value:</strong> {{ number_format($report->gross_value, 2) }} <br>
                        <strong>VAT Value:</strong> {{ number_format($report->vat_value, 2) }} <br>
                        <strong>Total Value:</strong> {{ number_format($report->total_value, 2) }} <br>
                        <a href="{{ route('payment_reports.edit', $report->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- External JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#paymentReports').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                responsive: true
            });
        });
    </script>
</body>

</html>
