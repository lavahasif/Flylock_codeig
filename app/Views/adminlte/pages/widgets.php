<!-- dont touch -->
<!-- helper function -->
<?php
helper('form'); ?>

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
      url: 'user-types/get-user-types', // Adjust the URL based on your routes
      method: 'GET',
      success: function(response) {
        // Populate Select2 options with fetched user types
        $('#usertype').select2({
          data: response.data,
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



<?php $this->endSection(); ?>


<!-- dont touch -->
<?php $this->section('subcontent'); ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userTypeModal">
        Add User Type
      </button>
    </div>
  </div>
</div>

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
        <form id="userTypeForm">
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



<?php $this->endSection(); ?>