<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Approve Job Card</title>
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
    </style>
</head>
<body>
            <!-- Home Button -->
            <a href="\jobcards" class="btn btn-primary">
                <i class="fas fa-home"></i> Back
            </a>

    <div class="container">
        <h1 class="mb-4">Approve Job Card</h1>
        <form action="{{ route('jobcards.update', $jobcard->jobcard_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="customername">Customer Name:</label>
                    <input type="text" id="customername" name="customername" class="form-control" value="{{ $jobcard->customername }}" readonly>
                </div>
                <div class="col-md-6 form-group">
                    <label for="contact_person">Contact Person:</label>
                    <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ $jobcard->contact_person }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="mobile_number">Mobile Number:</label>
                    <input type="text" id="mobile_number" name="mobile_number" class="form-control" value="{{ $jobcard->mobile_number }}" readonly>
                </div>
                <div class="col-md-6 form-group">
                    <label for="physical_location">Physical Location:</label>
                    <input type="text" id="physical_location" name="physical_location" class="form-control" value="{{ $jobcard->physical_location }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="problem_reported">Problem Reported:</label>
                <textarea id="problem_reported" name="problem_reported" class="form-control" readonly>{{ $jobcard->problem_reported }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="natureOf_ProblemAt_site">Nature of Problem at Site:</label>
                    <input type="text" id="natureOf_ProblemAt_site" name="natureOf_ProblemAt_site" class="form-control" value="{{ $jobcard->natureOf_ProblemAt_site }}" readonly>
                </div>
                <div class="col-md-6 form-group">
                    <label for="service_type">Service Type:</label>
                    <input type="text" id="service_type" name="service_type" class="form-control" value="{{ $jobcard->service_type }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="work_done">Work Done:</label>
                <textarea id="work_done" name="work_done" class="form-control" readonly>{{ $jobcard->work_done }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="vehicle_regno">Vehicle Registration Number:</label>
                    <input type="text" id="vehicle_regno" name="vehicle_regno" class="form-control" value="{{ $jobcard->vehicle_regno }}" readonly>
                </div>
                <div class="col-md-6 form-group">
                    <label for="client_comment">Client Comment:</label>
                    <textarea id="client_comment" name="client_comment" class="form-control" readonly>{{ $jobcard->client_comment }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="approved" {{ old('status', $jobcard->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="not approved" {{ old('status', $jobcard->status) == 'not approved' ? 'selected' : '' }}>Not Approved</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>
