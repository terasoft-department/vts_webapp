<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewInstallation extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'new_installations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerName',
        'DeviceNumber',
        'CarRegNumber',
        'customerPhone',
        'simCardNumber',
        'user_id',
        'picha_ya_gari_kwa_mbele',        // Optional image fields based on view requirements
        'picha_ya_device_anayoifunga',
        'picha_ya_hiyo_karatasi_ya_simCardNumber',
    ];

    /**
     * Get the user associated with the installation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
