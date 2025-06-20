<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FetchController extends Controller
{
    public function index()
    {
        // Get the database connection
        $db = \Config\Database::connect();

        // Create a query builder object for the 'registered_events' table
        $builder = $db->table('registered_events');
        
        // Select the columns you need
        $builder->select('id, event_name, event_location, event_date, fullname');
        
        // Execute the query
        $query = $builder->get();

        // Fetch all rows as an associative array
        $events = $query->getResultArray();

        // Pass data to the view
        return view('registered-attendees', ['events' => $events]);
    }

    public function store()
    {
        $db = \Config\Database::connect();

        $event_name = $this->request->getPost('event_name');
        $event_location = $this->request->getPost('event_location');
        $event_date = $this->request->getPost('event_date');
        $fullname = $this->request->getPost('fullname');

        // Insert the event data into the database
        $builder = $db->table('registered_events');
        $data = [
            'event_name' => $event_name,
            'event_location' => $event_location,
            'event_date' => $event_date,
            'fullname' => $fullname
        ];
        $builder->insert($data);

        return $this->response->setJSON(['status' => 'success']);
    }

    public function update($id)
    {
        $db = \Config\Database::connect();

        $event_name = $this->request->getPost('event_name');
        $event_location = $this->request->getPost('event_location');
        $event_date = $this->request->getPost('event_date');
        $fullname = $this->request->getPost('fullname');

        // Update the event data
        $builder = $db->table('registered_events');
        $data = [
            'event_name' => $event_name,
            'event_location' => $event_location,
            'event_date' => $event_date,
            'fullname' => $fullname
        ];
        $builder->update($data, ['id' => $id]);

        return $this->response->setJSON(['status' => 'success']);
    }

    public function delete($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('registered_events');
        $builder->delete(['id' => $id]);

        return $this->response->setJSON(['status' => 'success']);
    }
}
