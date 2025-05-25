<!-- webcam -->

<div class="modal fade" id="webcam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body"  style="font-size: 13px">
                <small class="d-flex justify-content-center text-danger mb-2" style="font-size: 12px" id="proof_error"></small>
                <div class="d-flex justify-content-center">
                    <div id="my_cam"></div>
                    <div class="spinner-border spinner-border-sm" id="camSpinner" style="display: none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="d-flex gap-2 p-2 justify-content-end">
                    <button type="button" id="stop_webcam" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm fw-bold px-2 py-1" id="take_picture" style="background-color: #ffbf00">Capture</button>
                    <button class="btn btn btn-secondary btn-sm px-2 py-1" id="retake" style="display: none;">Retake</button>
                    <button class="btn btn-sm fw-bold px-2 py-1 gap-1 align-items-center" id="save_picture" style="display: none; background-color: #ffbf00">
                        Save
                        <div class="spinner-border spinner-border-sm" id="proofSpinner" style="display: none;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


