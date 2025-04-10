    <!-- Add user -->
    <div class="modal fade" id="addUser" tabindex="-1" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <small class="d-flex justify-content-center text-danger mb-2" style="font-size: 12px" id="addUser_error"></small>
                        <div class="d-flex gap-5">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="First Name" id="firstname" class="form-control" name="firstname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Middle Name" id="middlename" class="form-control" name="middlename" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Last Name" id="lastname" class="form-control" name="lastname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Age" id="age" class="form-control" name="age" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg-warning text-dark rounded-0" for="gender">Options</label>
                                    </div>
                                    <select class="custom-select col-9" name="gender" id="gender" style="border: 1px solid #ebebeb">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Contact #" id="contact" class="form-control" name="contact" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control" name="address" required>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg-warning text-dark rounded-0" for="userCreate">Option</label>
                                    </div>
                                    <select class="custom-select col-9" name="role_id" id="userRole" style="border: 1px solid #ebebeb">
                                        <option value="" selected disabled>Select role</option>
                                        <!-- option -->
                                    </select>
                                </div>
                                <div class="multiselect mb-3">
                                    <small class="mb-3 d-flex gap-1" style="font-size: 11px;"><span class="fw-bold">Note: </span>Selecting the Rider role will disable permission option and will have access to delivery functions only.</small>
                                    <div class="selectBox" onclick="toggleCheckboxes()">
                                        <select class="text-secondary" name=""  style="border: 1px solid #d0d0d0; border-radius: 5px"  id="">
                                            <option value="">Select Permission</option>
                                        </select>
                                        <div class="overSelect"></div>
                                    </div>
                                    <div id="checkboxes" class="checkboxes">
                                        <!-- checkbox -->
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email" id="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="">
                                    <label class="text-secondary" for="profile" style="font-size: 12px">Profile image</label>
                                    </div>
                                    <input type="file" class="dropify"  data-height="100" name="picture" id="profile"/>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end p-3 gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="register" class="btn btn-warning">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit user -->
    <div class="modal fade" id="editUser" tabindex="-1" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="editUser_error"></small>
                        <div class="d-flex gap-5">
                            <input type="text" name="id" hidden>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Firstname</small>
                                    <input type="text" placeholder="First Name" id="editFname" class="form-control" name="firstname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Middlename</small>
                                    <input type="text" placeholder="Middle Name" id="editMname" class="form-control" name="middlename" required>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-socondary" style="font-size: 12px">Lastname</small>
                                    <input type="text" placeholder="Last Name" id="editLname" class="form-control" name="lastname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Age</small>
                                    <input type="text" placeholder="Age" id="editAge" class="form-control" name="age" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg-warning text-dark rounded-0" for="gender">Options</label>
                                    </div>
                                    <select class="custom-select col-9" name="gender" id="editGender" style="border: 1px solid #ebebeb">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Contact #</small>
                                    <input type="text" placeholder="Contact #" id="editContact" class="form-control" name="contact" required>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Address</small>
                                    <input type="text" placeholder="Address" id="editAddress" class="form-control" name="address" required>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <div class="">
                                    <label class="text-secondary" for="editProfile" style="font-size: 12px">Update profile image</label>
                                    </div>
                                    <input type="file" class="dropify"  data-height="100" name="picture" id="editProfile"/>
                                </div>
                                <div class="form-group mb-3">
                                    <small class="text-secondary" style="font-size: 12px">Email</small>
                                    <input type="email" placeholder="Email" id="editEmail" class="form-control" name="email" required>
                                </div>
                                <div class="input-group mb-3" id="">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg-warning text-dark rounded-0" for="editRole">Roles</label>
                                    </div>
                                    <select class="custom-select col-9" name="role_id" id="editRole" style="border: 1px solid #ebebeb">
                                        <!-- {{-- edit role option --}} -->
                                    </select>
                                </div>
                                <div class="multiselect mb-5">
                                    <small class="mb-3 d-flex gap-1" style="font-size: 11px;"><span class="fw-bold">Note: </span>Selecting the Rider role will disable permission option and will have access to delivery functions only.</small>
                                    <div class="selectBox" onclick="editCheckboxes()">
                                        <select class="text-secondary" name=""  style="border: 1px solid #d0d0d0; border-radius: 5px">
                                            <option value="">Select Permission</option>
                                        </select>
                                        <div class="overSelect"></div>
                                    </div>
                                    <div id="editCheckboxes" class="checkboxes">
                                        <!-- checkboxes -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end p-3 gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning" id="updateBtn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- Delete modal -->
    <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"  style="font-size: 13px">
                    Are you sure you want to delete <strong id="user-delete"></strong>
                </div>
                <div class="d-flex flex-row-reverse p-3 gap-3">
                    <form action="" method="post" id="deleteUserForm" method="POST">
                        <button type="submit" id="delete_user" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


