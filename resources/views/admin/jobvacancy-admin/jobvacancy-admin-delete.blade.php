<!-- Modal -->
<div class="modal fade" id="delete{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="usersDelete"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usersDelete">Delete Data Song List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h3>Apakah Anda yakin untuk Menghapus ?</h3>

            </div>
            <div class="modal-footer">
                <a href="{{ url('/jobvacancy-admin/delete/' . $users->id) }}" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
