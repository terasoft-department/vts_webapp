<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function index()
{
    $customers = Customer::all();

    // Pass the $customers data to the view
    return view('invoice_payments.index', compact('customers'));
}
public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    // Set the primary key
    protected $table = 'customers'; // Specify the table name if it's different
    protected $primaryKey = 'customer_id'; // Specify the primary key if it's different

    public function checkLists()
    {
        return $this->hasMany(CheckList::class, 'customer_id'); // Define the inverse relationship
    }

    // Allow mass assignment on the following attributes
    protected $fillable = [
        'customername',
        'address',
        'customer_phone',
        'tin_number',
        'email',
        'start_date',
    ];

    // Specify the table name if it's different from the plural of the model name
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'customer_id');
    }
    public function invoices()
    {
        return $this->hasMany(InvoicePayment::class, 'customer_id');
    }
    public function dailyWeeklyReports()
    {
        return $this->hasMany(DailyWeeklyReport::class);
    }
    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'customer_id');
    }

    public function invoicePayments()
    {
        return $this->hasMany(InvoicePayment::class, 'customer_id');
    }

}
