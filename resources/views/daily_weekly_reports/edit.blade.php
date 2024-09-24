<!-- resources/views/daily_weekly_reports/edit.blade.php -->


<div class="container">
    <h1>Edit Report</h1>
    <form action="{{ route('daily_weekly_reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Repeat the form fields here with $report->field values -->
    </form>
</div>

