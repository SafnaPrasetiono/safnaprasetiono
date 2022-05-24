<div>
    <div class="d-block bg-white rounded shadow p-3">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('admin.education.create') }}" class="btn btn-primary">
                <i class="fas fa-plus fa-fw d-block d-md-none mt-1"></i>
                <span class="d-none d-md-block">Tambah</span>
            </a>
            <div class="d-block position-relative">
                <input type="text" class="form-control pe-5" placeholder="Search...">
                <button class="btn position-absolute top-0 end-0">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead class="alert-secondary">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a href="#" class="btn btn-outline-warning">
                                <i class="fas fa-edit fa-sm"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt fa-sm fa-fw"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>