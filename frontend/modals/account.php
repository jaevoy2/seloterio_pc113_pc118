<div class="modal fade" id="editProfile" tabindex="-1" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="editProfile_error"></small>
                    <div class="d-flex gap-5">
                        <input type="text" name="id" hidden>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <small class="text-socondary" style="font-size: 12px">Firstname</small>
                                <input type="text" placeholder="First Name" id="profileFname" class="form-control" name="firstname" >
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12">Middlename</small>
                                <input type="text" placeholder="Middle Name" class="form-control" id="profileMname" name="middlename" >
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-socondary" style="font-size: 12px">Lastname</small>
                                <input type="text" placeholder="Last Name" id="profileLname" class="form-control" name="lastname" >
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12">Age</small>
                                <input type="text" placeholder="Age" id="profileAge" class="form-control" name="age" >
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-warning text-dark rounded-0" for="gender">Options</label>
                                </div>
                                <select class="custom-select col-9" id="profileGender" name="gender" style="border: 1px solid #ebebeb">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group mb-3">
                                <small class="text-secondary" style="font-size: 12">Contact #</small>
                                <input type="text" placeholder="Contact #" id="profileContact" class="form-control" name="contact" required>
                            </div>
                            <div class="form-group mb-3">
                                <small class="text-socondary" style="font-size: 12px">Address</small>
                                <input type="text" placeholder="Address" id="profileAddress" class="form-control" name="address" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="">
                                <label class="text-secondary" for="profile" style="font-size: 12px">Update profile image</label>
                                </div>
                                <input type="file" class="dropify"  data-height="100" name="picture" id="profilePicture"/>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveUserProfile" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- upload file modal -->
<div class="modal fade" id="uploadFileModal" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Drag and drop file</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"  style="font-size: 13px">
                <div class="input-group mb-3" style="width: 100%">
                    <form action="" style="width: 100%" method="post" enctype="multipart/form-data" id="deleteUserForm" method="POST">
                        <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="fileError"></small>
                        <input type="file" class="dropify" data-height="100" name="file" id="uploadFile"  accept=".pdf,.doc,.docx"/>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="save_upload" class="btn btn-warning btn-sm">Upload</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- remove file -->
<div class="modal fade" id="deleteFileModal" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Remove File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"  style="font-size: 13px">
                <div class="input-group mb-3" style="width: 100%">
                    <form action="" style="width: 100%" method="post" id="" method="POST">
                        Are you sure you want to delete this file?
                    </form>
                </div>
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="delete_upload" class="btn btn-danger btn-sm">Delete</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

