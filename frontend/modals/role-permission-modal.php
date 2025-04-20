<!-- add role modal -->
<div class="modal fade" id="addRole" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="">
                        <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="roleError"></small>
                        <div class="form-group my-3">
                            <small class="text-secondary mx-1" style="font-size: 12px">Role name</small>
                            <input type="text" id="role_name" style="font-size: 15px" class="form-control underline_fucos" name="name">
                        </div>
                        <div class="mt-3">
                            <h6>Permissions</h6>
                            <div class="d-flex flex-wrap gap-3 mt-2 p-2" style="background-color: #ebeced; border-radius: 5px; font-size: 13px" id="permissionContainer"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveRole" class="btn btn-warning d-flex align-items-center gap-2">
                        Save
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

<!-- edit role modal -->
<div class="modal fade" id="editRoleModal" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="">
                    <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="editRoleError"></small>
                        <div class="form-group my-3">
                            <input type="text" name="editRoleId" id="editRoleId" hidden>
                            <small class="text-secondary mx-1" style="font-size: 12px">Role name</small>
                            <input type="text" id="editRoleName" class="form-control underline_fucos" name="roleName">
                        </div>
                        <div class="mt-3">
                            <h6>Permissions</h6>
                            <div class="d-flex flex-wrap gap-3 mt-2 p-2" style="background-color: #ebeced; border-radius: 5px; font-size: 13px" id="editPermissionContainer"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveEditRole" class="btn btn-warning d-flex align-items-center gap-2">
                        Save
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

<!-- delete role modal -->
<div class="modal fade" id="deleteRole" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="deleteRoleError"></small>
                Are you sure you want to delete <strong class="roleName"></strong> role?
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <form action="" method="post" id="deleteUserForm" method="POST">
                    <input type="text" name="roleDeleteId" id="roleDeleteId" hidden>
                    <button type="submit" id="confirmDelete" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>






