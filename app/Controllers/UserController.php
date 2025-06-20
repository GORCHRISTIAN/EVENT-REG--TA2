<?php

namespace App\Controllers;

use App\Models\UserModels;
use CodeIgniter\Controller;

class UserController extends BaseController
{
    public function event()
    {
        try {
            // Instantiate the model
            $userModel = new UserModels();
            
            // Get all users
            $data['events'] = $userModel->findAll();
            
            // Load the view and pass the data
            return view('event-register', $data);
        } catch (\Exception $e) {
            // Log or display the error for debugging
            die($e->getMessage());
        }
    }
    
}