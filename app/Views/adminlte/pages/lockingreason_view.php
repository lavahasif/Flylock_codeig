<!-- dont touch -->
<!-- helper function -->
<?php
helper('form');
helper('admin');
?>

<!-- app\Views\adminlte\pages\widgets.php -->
<?php $this->section('_css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<!-- add custom css -->

<style>
  .max-width-200 {
    max-width: 63%;
    margin: 0 auto;
    /* Center the modal */
  }

  @media (min-width: 992px) {
    .max-width-200 {
      max-width: 63%;
    }
  }

  @media (max-width: 500px) {
    .max-width-200 {
      max-width: 80%;
    }
  }
</style>
<?php $this->endSection(); ?>
<?php $this->extend('adminlte/partial/sublayout'); ?>

<?php $this->section('_js'); ?>
<!-- add custom js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  // Initialize Select2 for the User Type field
  $(document).ready(function() {
    // Fetch user types from the server (replace with your endpoint)
    $.ajax({
      url: '<?= admin_url('lockingtype/list') ?>', // Adjust the URL based on your routes
      method: 'GET',
      success: function(response) {
        // Populate Select2 options with fetched user types
        $('#usertype').select2({
          data: response.data.map(function(userType) {
            return {
              id: userType.id,
              text: userType.lock_reason
            };
          }),

          placeholder: 'Select User Type',
          allowClear: true,
        });
      },
      error: function(error) {
        console.error(error.responseText);
      }
    });
  });
  // Enable Bootstrap tooltips
  $(function() {
    $('[data-bs-toggle="tooltip"]').tooltip()
  })
</script>


<script>
  $(document).ready(function() {
    // Function to fetch and display user types
    function fetchUserTypes(page = 1) {
      $.ajax({
        url: '<?= admin_url('lockingtype/list') ?>',
        type: 'GET',
        dataType: 'json',
        data: {
          page: page
        },
        success: function(response) {
          // Clear existing table data
          $('#userTypeTable tbody').empty();

          // Populate table with new data
          $.each(response.data, function(index, userType) {
            var row = '<tr>' +
              '<td>' + userType.lock_reason + '</td>' +
              '<td>' + (userType.is_active ? 'Yes' : 'No') + '</td>' +
              '<td>' + (userType.delete ? 'Yes' : 'No') + '</td>' +
              '<td>' +
              // Add any action buttons or links here
              '</td>' +
              '</tr>';
            $('#userTypeTable tbody').append(row);
          });

          // Update pagination links
          $('#paginationLinks').html(response.paginationLinks);
        },
        error: function(error) {
          console.error('Error fetching user types:', error);
        }
      });
    }

    // Fetch data when the page loads
    fetchUserTypes();

    // Handle click event for the "Fetch Data" button
    $('#fetchDataBtn').on('click', function() {
      fetchUserTypes();
    });

    // Handle click events for pagination links
    $('#paginationLinks').on('click', 'a', function(e) {
      e.preventDefault();
      var page = $(this).data('ci-pagination-page');
      fetchUserTypes(page);
    });
  });
</script>

<?php $this->endSection(); ?>

<!-- dont touch -->

<!-- write helloworld here in php   -->

<?php $this->section('subcontent'); ?>
<!-- User Type Modal -->
<div class="modal fade" id="userTypeModal" tabindex="-1" aria-labelledby="userTypeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content max-width-200">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="userTypeModalLabel">Add User Type</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- User Type Form -->
        <form id="userTypeForm" action="<?= admin_url('lockingtype/create') ?>" method="post">

          <!-- Usertype Field (Searchable Dropdown) -->
          <div class="mb-3">
            <label for="usertype" class="form-label">User Type</label>
            <select class="form-select select2" id="usertype" name="usertype">
              <!-- Options will be dynamically populated via JavaScript -->
            </select>
            <div class="form-text">Choose the type of user.</div>
          </div>

          <!-- IsActive Field -->
          <div class="mb-3">
            <label for="isactive" class="form-label">Is Active</label>
            <select class="form-select" id="isactive" name="isactive">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
            <div class="form-text">Specify whether the user type is active or inactive.</div>
          </div>

          <!-- Del Field -->
          <div class="mb-3">
            <label for="del" class="form-label">Delete</label>
            <select class="form-select" id="del" name="del">
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select>
            <div class="form-text">Choose whether to delete the user type.</div>
          </div>

          <!-- Save Button -->
          <div class="text-center">
            <button type="submit" class="btn btn-success w-75">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userTypeModal">
        Add Lock Reason
      </button>
    </div>
  </div>



  <!-- User Type Table -->
  <!-- locking_types/index.php -->

  <!-- User Type Table -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <table class="table table-bordered table-striped" id="userTypeTable">
          <thead>
            <tr>
              <th>User Type</th>
              <th>Is Active</th>
              <th>Delete</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data will be dynamically populated via JavaScript -->
          </tbody>
        </table>
      </div>
      <!-- Pagination Links -->
      <div id="paginationLinks" class="mt-3">
        <!-- Pagination links will be dynamically populated via JavaScript -->
      </div>

      <!-- Add a button to trigger fetching data -->
      <button id="fetchDataBtn" class="btn btn-primary mt-3">Fetch Data</button>
    </div>
  </div>



</div>
</div>


<?php $this->endSection(); ?>
<!-- write fibnocci -->