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
                            <input type="text" id="role_name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveRole" class="btn btn-warning">Save</button>
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
                            <small class="text-secondary mx-1" style="font-size: 12px">Role name</small>
                            <input type="text" id="editRoleName" class="form-control" name="roleName">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveEditRole" class="btn btn-warning">Save</button>
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
                    <input type="text" name="id" id="roleDelete" hidden>
                    <button type="submit" id="confirmDelete" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- permissions -->

<!-- add permission -->
<div class="modal fade" id="addPermission" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="perm_error"></small>
                    <div class="">
                        <div class="form-group my-3">
                            <small class="text-secondary mx-1" style="font-size: 12px">Permission name</small>
                            <input type="text" id="perm_name" class="form-control" name="perm_name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="savePermission" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit permission -->
<div class="modal fade" id="editPermission" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="editPerm_error"></small>
                    <div class="">
                        <div class="form-group my-3">
                            <input type="text" name="id" id="permissionId" hidden>
                            <small class="text-secondary mx-1" style="font-size: 12px">Permission name</small>
                            <input type="text" id="permission_name" class="form-control" name="permission_name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3 gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveEditPermission" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- delete permission -->
<div class="modal fade" id="deletePermission" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="deletePerm_error"></small>
                Are you sure you want to delete <strong class="permissionName"></strong> permission?
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <form action="" method="post" id="deleteUserForm" method="POST">
                    <input type="text" name="id" id="permissionDelete" hidden>
                    <button type="submit" id="delete_permission" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
