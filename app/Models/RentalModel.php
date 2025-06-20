<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalModel extends Model
{
    protected $table = 'registered_events'; // Your database table name
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'fullname',
        'event_name',
        'event_location',
        'event_date',
    ];

    protected $useTimestamps = false; // Set true if your table has created_at, updated_at
}
