@props(['showSearch' => true])
<div class="d-flex flex-wrap gap-2 align-items-center">
    @if($showSearch)
        <input type="search" class="form-control form-control-sm" placeholder="Search reports…" style="min-width:200px">
    @endif

    <div class="input-group input-group-sm">
        <input type="date" class="form-control">
        <input type="date" class="form-control">
    </div>

    <div class="btn-group">
        <button class="btn btn-sm btn-outline-secondary">Export</button>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"></button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">PDF</a></li>
            <li><a class="dropdown-item" href="#">Excel</a></li>
            <li><a class="dropdown-item" href="#">CSV</a></li>
        </ul>
    </div>

    <a href="{{ route('admin.reports.custom') }}" class="btn btn-sm btn-primary ms-auto">Create Custom Report</a>
</div>