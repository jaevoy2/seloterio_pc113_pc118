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
                    <div class="d-flex gap-5 forms_con">
                        <div class="col-6 form_con1">
                            <div class="form-group mb-3">
                                <input type="text" placeholder="First Name" id="firstname" class="form-control underline_fucos" name="firstname" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Middle Name" id="middlename" class="form-control underline_fucos" name="middlename" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Last Name" id="lastname" class="form-control underline_fucos" name="lastname" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Age" id="age" class="form-control underline_fucos" name="age" required>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select col-12 p-2 underline_fucos" name="gender" id="gender">
                                    <option value="" class="text-secondary" selected disabled>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Contact #" id="contact" class="form-control underline_fucos" name="contact" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Address" id="address" class="form-control underline_fucos" name="address" required>
                            </div>
                        </div>
                        <div class="col-5 form_con2">
                            <div class="input-group mb-3">
                                <select class="custom-select col-12 p-2 underline_fucos" name="role_id" id="userRole">
                                    <option value="" class="text-secondary" selected disabled>Select role</option>
                                    <!-- option -->
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="Email" id="email" class="form-control underline_fucos" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control underline_fucos" name="password" required>
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
                    <button type="submit" id="register" class="btn btn-warning d-flex align-items-center gap-2">
                        Register
                        <div class="spinner-border spinner-border-sm" id="registerSpinner" style="display: none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
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
                    <div class="d-flex gap-5 forms_con">
                        <input type="text" name="editUserId" id="editUserId" hidden>
                        <div class="col-6 form_con1">
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Firstname</small>
                                <input type="text" placeholder="First Name" id="editFname" class="form-control underline_fucos" name="firstname" required>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Middlename</small>
                                <input type="text" placeholder="Middle Name" id="editMname" class="form-control underline_fucos" name="middlename" required>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Lastname</small>
                                <input type="text" placeholder="Last Name" id="editLname" class="form-control underline_fucos" name="lastname" required>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Age</small>
                                <input type="text" placeholder="Age" id="editAge" class="form-control underline_fucos" name="age" required>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select col-12 p-2 underline_fucos" name="gender" id="editGender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Contact #</small>
                                <input type="text" placeholder="Contact #" id="editContact" class="form-control underline_fucos" name="contact" required>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Address</small>
                                <input type="text" placeholder="Address" id="editAddress" class="form-control underline_fucos" name="address" required>
                            </div>
                        </div>
                        <div class="col-5 form_con2">
                            <div class="input-group mb-3">
                                <div class="">
                                <label class="text-secondary" for="editProfile" style="font-size: 12px">Profile image</label>
                                </div>
                                <input type="file" class="dropify"  data-height="100" name="picture" id="editProfile"/>
                                <div class="align-items-center gap-1 justify-content-end text-danger mt-2" id="removeExistingProfile" style="font-size: 13px; cursor: pointer; width: 100%" data-bs-toggle="modal" data-bs-target="#removeProfileModal">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    Remove Existing Image
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12px">Email</small>
                                <input type="email" placeholder="Email" id="editEmail" class="form-control underline_fucos" name="email" >
                            </div>
                            <div class="input-group mb-3" id="">
                                <small class="text-secondary" style="font-size: 12px">Role</small>
                                <select class="custom-select col-12 p-2 underline_fucos" name="role_id" id="editRole">
                                    <!-- {{-- edit role option --}} -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning d-flex align-items-center gap-2" id="updateBtn">
                        Update
                        <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
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
                    <input type="text" id="confirmDeleteUser" hidden>
                    <button type="submit" id="delete_user" class="btn btn-danger btn-sm d-flex gap-2 align-items-center">
                        Delete
                        <div class="spinner-border spinner-border-sm" id="deleteUserSpinner" style="display: none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- remove profile modal -->
<div class="modal fade" id="removeProfileModal" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"  style="font-size: 13px">
            <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="profile_error"></small>
                Are you sure you want to delete this image?
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <form action="" method="post" method="POST">
                    <input type="text" id="userProfileId" hidden>
                    <button type="submit" id="confirmRemoveProfile" class="btn btn-danger btn-sm d-flex align-items-center gap-2">
                        Delete
                        <div class="spinner-border spinner-border-sm" id="deleteProfileSpinner" style="display: none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

