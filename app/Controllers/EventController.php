<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\RentalModel;

class EventController extends BaseController
{
    public function index()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->findAll();
        return view('event_list', $data);
    }

    public function create()
    {
        return view('create_event');
    }

    public function store()
    {
        $eventModel = new EventModel();
        $image = $this->request->getFile('image');
        $imageName = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $imageName);
        }

        $data = [
            'event_name' => $this->request->getPost('event_name'),
            'description' => $this->request->getPost('description'),
            'event_price' => $this->request->getPost('event_price'),
            'status' => $this->request->getPost('status'),
            'event_date' => $this->request->getPost('event_date'),
            'event_location' => $this->request->getPost('event_location'),
            'image_path' => $imageName,
        ];

        $eventModel->save($data);
        return redirect()->to('/events');
    }

    public function edit($id)
    {
        $eventModel = new EventModel();
        $data['event'] = $eventModel->find($id);
        return view('edit_event', $data);
    }

    public function update($id)
    {
        $eventModel = new EventModel();
        $image = $this->request->getFile('image');
        $imageName = $this->request->getPost('old_image');

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $imageName);
        }

        $data = [
            'event_name' => $this->request->getPost('event_name'),
            'description' => $this->request->getPost('description'),
            'event_price' => $this->request->getPost('event_price'),
            'status' => $this->request->getPost('status'),
            'event_date' => $this->request->getPost('event_date'),
            'event_location' => $this->request->getPost('event_location'),
            'image_path' => $imageName,
        ];

        $eventModel->update($id, $data);
        return redirect()->to('/events');
    }

    public function delete($id)
    {
        $eventModel = new EventModel();
        $event = $eventModel->find($id);

        if (!empty($event['image_path']) && file_exists(ROOTPATH . 'public/uploads/' . $event['image_path'])) {
            unlink(ROOTPATH . 'public/uploads/' . $event['image_path']);
        }

        $eventModel->delete($id);
        return redirect()->to('/events');
    }

    public function rent_events()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->findAll();
        return view('event-register', $data);
    }

    public function rentEvent()
    {
        $rentalModel = new RentalModel();
        $eventModel = new EventModel();

        $eventLocation = $this->request->getPost('event_location');
        $eventDate = $this->request->getPost('event_date');
        $eventName = $this->request->getPost('event_name');
        $fullName = $this->request->getPost('fullname');

        $event = $eventModel->where('event_name', $eventName)->first();

        if (!$event || strtolower($event['status']) !== 'available') {
            return redirect()->back()->with('error', 'Event is not available for rent.');
        }

        $rentalModel->insert([
            'fullname' => $fullName,
            'event_name' => $eventName,
            'event_date' => $eventDate,
            'event_location' => $eventLocation
        ]);

        return redirect()->to('/rent-event')->with('message', 'Event rented successfully!');
    }
}