<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['event_name',  'event_location', 'event_date','description', 'image_path', 'status'];
    protected $useTimestamps = true;
}
