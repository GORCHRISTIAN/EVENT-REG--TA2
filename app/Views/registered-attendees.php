<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .btnn {
        background-color: rgb(201, 17, 0);
        color: white;
        font-weight: 600;
        box-shadow: none;
        border: none;
    }

    .btnn:hover {
        background-color: rgb(201, 17, 0);
        color: white;
        font-weight: 600;
        box-shadow: none;
    }
</style>

<body>
    <div class="container mt-5">
        <h2>Your Pending Events</h2>
        <button class="btnn btn" data-toggle="modal" data-target="#createModal">Add New Data</button>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Event</th>
                    <th>Event Location</th>
                    <th>Event Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="events_table">
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $event): ?>
                        <tr id="event_<?= $event['id'] ?>">
                            <td><?= htmlspecialchars($event['fullname'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($event['event_name'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($event['event_location'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($event['event_date'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td>
                                <button class="btn btn-warning edit-btn" data-id="<?= $event['id'] ?>" data-name="<?= htmlspecialchars($event['event_name'], ENT_QUOTES, 'UTF-8') ?>" data-location="<?= htmlspecialchars($event['event_location'], ENT_QUOTES, 'UTF-8') ?>" data-date="<?= $event['event_date'] ?>" data-fullname="<?= htmlspecialchars($event['fullname'], ENT_QUOTES, 'UTF-8') ?>" data-toggle="modal" data-target="#editModal">Edit</button>
                                <button class="btn btn-danger delete-btn" data-id="<?= $event['id'] ?>">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No events found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Create Event Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Add New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createEventForm">
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" class="form-control" name="event_name" id="event_name" required>
                        </div>
                        <div class="form-group">
                            <label for="event_location">Event Location</label>
                            <input type="text" class="form-control" name="event_location" id="event_location" required>
                        </div>
                        <div class="form-group">
                            <label for="event_date">Event Date</label>
                            <input type="date" class="form-control" name="event_date" id="event_date" required>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add New Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Event Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEventForm">
                        <input type="hidden" id="edit_event_id" name="id">
                        <div class="form-group">
                            <label for="edit_event_name">Event Name</label>
                            <input type="text" class="form-control" name="event_name" id="edit_event_name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_event_location">Event Location</label>
                            <input type="text" class="form-control" name="event_location" id="edit_event_location" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_event_date">Event Date</label>
                            <input type="date" class="form-control" name="event_date" id="edit_event_date" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_fullname">Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="edit_fullname" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Event Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this event?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Create Event AJAX
        $('#createEventForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/fetch/store',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        alert('Event added successfully!');
                        location.reload(); // Reload the page to see the new event
                    }
                }
            });
        });

        // Edit Event AJAX
        $('.edit-btn').click(function() {
            var id = $(this).data('id');
            $('#edit_event_id').val(id);
            $('#edit_event_name').val($(this).data('name'));
            $('#edit_event_location').val($(this).data('location'));
            $('#edit_event_date').val($(this).data('date'));
            $('#edit_fullname').val($(this).data('fullname'));
        });

        $('#editEventForm').submit(function(e) {
            e.preventDefault();
            var id = $('#edit_event_id').val();
            $.ajax({
                url: '/fetch/update/' + id,
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        alert('Event updated successfully!');
                        location.reload(); // Reload the page to see the updated event
                    }
                }
            });
        });

        // Delete Event
        var deleteId;
        $('.delete-btn').click(function() {
            deleteId = $(this).data('id');
            $('#deleteModal').modal('show');
        });

        $('#confirmDeleteBtn').click(function() {
            $.ajax({
                url: '/fetch/delete/' + deleteId,
                method: 'GET',
                success: function(response) {
                    if (response.status == 'success') {
                        alert('Event deleted successfully!');
                        $('#event_' + deleteId).remove(); // Remove the event row from the table
                    }
                    $('#deleteModal').modal('hide');
                }
            });
        });
    </script>
</body>

</html>