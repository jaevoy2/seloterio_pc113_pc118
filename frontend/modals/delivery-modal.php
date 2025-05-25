<div class="modal fade" id="assignDelivery" tabindex="-1" aria-labelledby="">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Rider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="assign_error"></small>
                <small class="d-flex justify-content-center mb-2 text-secondary" style="font-size: 12px" id="no_vailable"></small>
                <input type="text" name="" id="orderId" hidden>
                <div class="input-group mb-4"error>
                    <select class="custom-select col-12 p-2 underline_fucos" name="menu_id" id="riderOption">
                        <!-- {{-- options --}} -->
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="assignToRider" class="btn btn-warning btn-sm d-flex align-items-center gap-2">
                    Assign
                    <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- reassign -->
<div class="modal fade" id="reassignDelivery" tabindex="-1" aria-labelledby="">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reassign Rider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="assign_error"></small>
                <small class="d-flex justify-content-center mb-2 text-secondary" style="font-size: 12px" id="no_reassign"></small>
                <input type="text" name="" id="reassignOrderId" hidden>
                <input type="text" name="" id="reassignRiderId" hidden>
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="reassign_error"></small>
                <div class="input-group mb-4"error>
                    <select class="custom-select col-12 p-2 underline_fucos" name="menu_id" id="riderOptionAgain">
                        <!-- {{-- options --}} -->
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="reassignToRider" class="btn btn-warning btn-sm d-flex gap-2 align-items-center">
                    Reassign
                    <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- rider update order status -->
<div class="modal fade" id="updateOrderStatus" tabindex="-1" aria-labelledby="">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 13px">
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="assign_error"></small>
                <input type="text" name="" id="updateOrderId" hidden>
                <input type="text" name="" id="updateRiderId" hidden>
                <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="reassign_error"></small>
                <div class="input-group mb-4"error>
                    <select class="custom-select col-12 p-2 underline_fucos" name="menu_id" id="riderUpdates">
                        <option value="" selected disabled>Update Status</option>
                        <option value="in_transit" id="order-status">In Transit</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row-reverse p-3 gap-3">
                <button type="submit" id="saveOrderUpdate" class="btn btn-warning btn-sm d-flex gap-2 align-items-center">
                    Update
                    <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>