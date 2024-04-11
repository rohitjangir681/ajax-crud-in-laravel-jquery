<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employee</title>
  
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Employee</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-employee">
                    Add Employee
                </button>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-department">
                    Add Department
                </button>
                <hr>
            </div>
        </div>
    </div>

    <!-- Add employe Modal start -->
    <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-employee-title">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="form-submit">
                    @csrf
                    <div class="modal-body submit-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <div class="text-danger" id="name-error"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Email">
                            <div class="text-danger" id="email-error"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Phone">
                            <div class="text-danger" id="phone-error"></div>
                        </div>
                        <div class="form-group">
                            <label for="select-department">Select Department</label>
                            <select class="form-control" name="department[]" id="select-department" multiple></select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Add employe Modal end -->


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="data-message">

                </div>

                <div class="get-table-data-heading">
                    <h2></h2>
                <table class="table getalldata">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Edit</th>
                            <th>Show</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>


            </div>
        </div>
    </div>

    <!-- Edit employe Modal start -->
    <div class="modal fade" id="edit-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-employee-title">Edit Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="edit-form-submit">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group">
                            <label for="edit-name">Name:</label>
                            <input type="text" class="form-control" id="edit-name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email:</label>
                            <input type="text" class="form-control" id="edit-email" name="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="edit-phone">Phone:</label>
                            <input type="tel" class="form-control" id="edit-phone" name="phone"
                                placeholder="Phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Edit employe Modal end -->



    <!-- Show employe Modal start -->
<div class="modal fade" id="show-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="show-employee-title">Employee Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th>Name:</th>
                        <td id="show-name"></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td id="show-email"></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td id="show-phone"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Show employe Modal end -->


<!-- Add department Modal start -->
<div class="modal fade" id="add-department" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add-department-title">Add Department</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form id="department-form-submit">
            @csrf
            <div class="modal-body submit-form">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Department name">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>
</div>
<!-- Add department Modal end -->




    <script>
        $(document).ready(function() {

// ----------------- Get all data in table list ----------------------------
            function getEmployeeData() {
                $.get("{{ route('employee.getallemployee') }}", function(data) {
                    $('table.getalldata tbody').empty();
                    $('.get-table-data-heading h2').text("Employee List");
                    $.each(data, function(key, value) {
                        // console.log(value.departments);
                        var department = '';
                        $.each(value.departments, function(dkey, dvalue){
                            // console.log(dvalue.name);
                            department += dvalue.name + ', ';
                        });
                        // console.log(department);
                        department = department.slice(0, -2);
                        $('table.getalldata tbody').append(`
                        <tr data-id="${value.id}">
                            <td>${value.name}</td>    
                            <td>${value.email}</td>    
                            <td>${value.phone}</td>
                            <td>${department}</td>
                            <td><button type="button" class="edit-employee btn btn-primary" data-id="${value.id}">Edit</button></td>    
                            <td><button type="button" class="show-employee btn btn-success" data-id="${value.id}">Show</button></td>    
                            <td><button type="button" class="delete-employee btn btn-danger" data-id="${value.id}">Delete</button></td>    
                        </tr>
                    `);
                    });
                });
            }
            getEmployeeData();
// --------------------------------------------------------------------------


// ----------- display every message like add, edit, delete etc. ----------------------
            function displayMessage(message, type = 'success') {
                $('.data-message').html(`<div class="alert alert-${type}">${message}</div>`);
            }
// ----------------------------------------------------------------


// -------------- add new data -----------------------------
            $("#form-submit").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                // console.log(formData);
                $.ajax({
                    url: "{{ route('employee.store') }}",
                    type: "POST",
                    data: formData,
                    success: function(data) {

                        // console.log(data);
                        // $(".data-message").text(data.employee);
                        displayMessage(data.employee);
                        $("#form-submit").find("input[type='text']").val('');
                        $("#form-submit").find("input[type='tel']").val('');
                        $('#add-employee').modal('hide');
                        getEmployeeData();


                    },
                    error: function(xhr) {
                        if (xhr.status === 422) { // Validation errors
                            // Display validation errors below each input field
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $("#" + key + "-error").text(value[
                                0]); // Displaying the first validation error only
                            });
                        } else {
                            // Handle other errors (e.g., server error)
                            alert('Error: ' + xhr.statusText);
                        }
                    }
                });
            });
// -------------------------------------------------------------


// ------------- edit data -----------------------------------
            $(document).on('click', '.edit-employee', function() {
                var empId = $(this).data('id');
                $.get("{{ url('employee/edit') }}/" + empId, function(data) {
                    $('#edit-id').val(data.id);
                    $('#edit-name').val(data.name);
                    $('#edit-email').val(data.email);
                    $('#edit-phone').val(data.phone);
                    $('#edit-employee').modal('show');
                });
            });

// ---------------- and update the data -------------------------------- 
            $("#edit-form-submit").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                var empId = $("#edit-id").val();
                $.ajax({
                    url: "{{ url('employee/update') }}/" + empId,
                    type: 'PUT',
                    data: formData,
                    success: function(data) {
                        // consol.log(data);
                        // $('.data-message').text(data.employee);
                        displayMessage(data.employee);
                        $('#edit-employee').modal('hide');
                        getEmployeeData();
                    },
                    error: function(error) {
                        alert(error);
                    }
                });
            });
//--------------------------------------------------------------------------- 



// ----------- delete the data -----------------------------------------------
            $(document).on('click', '.delete-employee', function() {
                var empId = $(this).data('id');
                // console.log(empId);
                $.ajax({
                    url: "{{ url('employee/delete') }}/" + empId,
                    type: 'DELETE',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        // console.log(data);
                        // $('.data-message').text(data.message);
                        displayMessage(data.message);
                        getEmployeeData();
                    },
                    error: function(error) {
                        alert(error);
                    }
                });
            });
// -----------------------------------------------------------------------------


// -------------------- show employee details ---------------------------------------
            $(document).on('click', '.show-employee', function(){
                var empId = $(this).data('id');
                // alert(empId);
                $.ajax({
                    url: "{{ url('employee/show') }}/"+empId,
                    type:'GET',
                    success:function(data){
                        // console.log(data);
                        $("#show-name").text(data.name);
                        $("#show-email").text(data.email);
                        $("#show-phone").text(data.phone);
                        $("#show-employee").modal('show');
                    },
                    error:function(error){
                        alert(error);
                    }
                });
            });
// -------------------------------------------------------------------------



// ----------------------- add new department ---------------------------------
            $("#department-form-submit").submit(function(e){
                e.preventDefault();
                var formData = $(this).serializeArray();
                // console.log(formData);

                $.ajax({
                    url: "{{ route('department.store') }}",
                    type: 'POST',
                    data: formData,
                    success:function(data) {
                        // console.log(data);
                        displayMessage(data.department);
                        $("#department-form-submit").find("input[type='text']").val('');
                    },
                    error:function(error){
                        alert(error);
                    }
                });

            });

// ----------------------------------------------------------------------------

// ----------- fetch department -----------------------------------------------
            function fetchDepartments() {
                $.get("{{ route('department.index') }}", function(data){
                    $('#select-department').empty();
                    $.each(data, function(key, value){
                        $('#select-department').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }))
                    });
                });
            }
            fetchDepartments();
// ----------------------------------------------------------------------------






        }); // document.ready close here
    </script>



</body>

</html>
