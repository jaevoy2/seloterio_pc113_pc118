<!-- add menu permission -->
<div class="modal fade" id="addPermisssionMenu" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add menu permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="addMenuPermission_error"></small>
                    <div class="">
                        <div class="form-group my-3">
                            <div class="d-flex justify-content-center">
                                <small class="text-danger mb-3" style="font-size: 12px" id="error"></small>
                            </div>
                            <div class="input-group mb-4"error>
                                <select class="custom-select col-12 p-1" name="menu_id" id="menuOption" style="border: 1px solid #d0d0d0; border-radius:5px">
                                    <option value="" selected disabled>Select menu</option>
                                    {{-- options --}}
                                </select>
                            </div>
                            <div class="multiselect mb-3" style="width: 100%">
                                <div class="selectBox" onclick="openPermissions()">
                                    <select class="" name=""  style="border: 1px solid #d0d0d0; border-radius: 5px">
                                        <option value="">Select Permission</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>
                                <div id="menuPermissionCheckboxes" class="checkboxes">
                                    <!-- checkbox -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveAddedPermisisons" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- remove menu permission -->
<div class="modal fade" id="deleteAccessPermission" tabindex="-1" aria-labelledby="">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <input type="text" id="removeMenuId" hidden>
                <input type="text" id="removePermissionId" hidden>
                Are you sure you want to remove <strong id="access_permission"></strong> permission?
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="delete_permission" class="btn btn-danger btn-sm">Delete</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>