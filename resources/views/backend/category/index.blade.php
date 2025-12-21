@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Category</strong> Management</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Search & Sort -->
                            <div class="row g-2 mb-3 align-items-center">
                                <div class="col-12 col-md-5">
                                    <form method="GET" action="{{ route('category.index') }}">
                                        <div class="input-group">
                                            <span class="input-group-text">🔍</span>
                                            <input name="q" class="form-control" placeholder="Search categories (name, slug, keywords)" value="{{ request('q') ?? '' }}" aria-label="Search categories">
                                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex">
                                        <label class="me-2 mt-1">Sort</label>
                                        <select class="form-select w-auto">
                                            <option>Name (A - Z)</option>
                                            <option>Product Count (High - Low)</option>
                                            <option>Date Created (Newest)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <div class="me-2">
                                            <select id="bulk-action" class="form-select form-select" aria-label="Bulk actions">
                                                <option value="">Bulk actions</option>
                                                <option value="activate">Activate</option>
                                                <option value="deactivate">Deactivate</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                        </div>
                                        <button id="apply-bulk" class="btn btn-primary" disabled aria-disabled="true">Apply</button>
                                        {{-- <button id="save-order" class="btn btn-outline-secondary ms-2" disabled aria-disabled="true">Save Order</button> --}}
                                        {{-- <small class="text-muted ms-2 d-none d-md-inline">Drag rows to reorder</small> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">
                                    <!-- Category Table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0 align-middle">
                                            <thead>
                                                <tr>
                                                    <th style="width:40px"><input type="checkbox" id="select-all" aria-label="Select all"></th>
                                                    <th style="width:36px" class="text-center" aria-label="Reorder">☰</th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Products</th>
                                                    <th>Date Created</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-id="1" data-href="{{ route('category.edit', 1) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]" value="1" aria-label="Select Dark Chocolate"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder" role="button" title="Drag to reorder"><span class="drag-icon" aria-hidden="true">≡</span><span class="visually-hidden">Drag</span></td>
                                                    <td>Dark Chocolate</td>
                                                    <td>dark-chocolate</td>
                                                    <td>1</td>
                                                    <td>2024-05-10</td>
                                                    <td><span class="badge bg-success" role="status" aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete" data-name="Dark Chocolate">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="2" data-href="{{ route('category.edit', 2) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]" value="2" aria-label="Select Chocolate"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder" role="button" title="Drag to reorder"><span class="drag-icon" aria-hidden="true">≡</span><span class="visually-hidden">Drag</span></td>
                                                    <td>Chocolate</td>
                                                    <td>chocolate</td>
                                                    <td>3</td>
                                                    <td>2024-04-01</td>
                                                    <td><span class="badge bg-success" role="status" aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 2) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete" data-name="Chocolate">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="3" data-href="{{ route('category.edit', 3) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]" value="3" aria-label="Select Vanilla"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder" role="button" title="Drag to reorder"><span class="drag-icon" aria-hidden="true">≡</span><span class="visually-hidden">Drag</span></td>
                                                    <td>Vanilla</td>
                                                    <td>vanilla</td>
                                                    <td>2</td>
                                                    <td>2024-02-18</td>
                                                    <td><span class="badge bg-secondary" role="status" aria-label="Inactive">Inactive</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 3) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete" data-name="Vanilla">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="4" data-href="{{ route('category.edit', 4) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]" value="4" aria-label="Select Cakes"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder" role="button" title="Drag to reorder"><span class="drag-icon" aria-hidden="true">≡</span><span class="visually-hidden">Drag</span></td>
                                                    <td>Cakes</td>
                                                    <td>cakes</td>
                                                    <td>5</td>
                                                    <td>2023-11-10</td>
                                                    <td><span class="badge bg-success" role="status" aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 4) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete" data-name="Cakes">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <div class="small text-muted">Showing 1-4 of 4 categories</div>
                                        <nav>
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <style>
                                        /* subtle hover for clickable rows */
                                        tbody tr[data-href] { cursor: pointer; }
                                        tbody tr[data-href]:hover { background-color: #f8f9fa; }

                                        /* drag handle */
                                        .drag-handle { cursor: grab; width:36px; }
                                        .drag-handle:active { cursor: grabbing; }
                                        .dragging { opacity: 0.6; }
                                        .placeholder { background: linear-gradient(90deg,#e9ecef, #f8f9fa); height: 56px; }
                                        .drag-icon { font-size: 18px; line-height: 1; }
                                    </style> 

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const selectAll = document.getElementById('select-all');
                                            const rowCheckboxes = document.querySelectorAll('tbody input.row-checkbox');
                                            const applyBtn = document.getElementById('apply-bulk');
                                            const bulkAction = document.getElementById('bulk-action');
                                            const saveOrderBtn = document.getElementById('save-order');
                                            const tbody = document.querySelector('tbody');
                                            let reorderChanged = false;
                                            let isDragging = false;

                                            function updateApplyState() {
                                                const anyChecked = Array.from(rowCheckboxes).some(cb => cb.checked);
                                                applyBtn.disabled = !anyChecked || !bulkAction.value;
                                                applyBtn.setAttribute('aria-disabled', applyBtn.disabled ? 'true' : 'false');
                                            }

                                            if (selectAll) {
                                                selectAll.addEventListener('change', function() {
                                                    rowCheckboxes.forEach(cb => cb.checked = selectAll.checked);
                                                    updateApplyState();
                                                });
                                            }

                                            rowCheckboxes.forEach(cb => cb.addEventListener('change', updateApplyState));
                                            bulkAction.addEventListener('change', updateApplyState);

                                            applyBtn.addEventListener('click', function() {
                                                if (!bulkAction.value) return;
                                                const selected = Array.from(rowCheckboxes).filter(cb => cb.checked).map(cb => cb.value);
                                                if (selected.length === 0) return alert('Select at least one category.');
                                                if (bulkAction.value === 'delete') {
                                                    if (!confirm('Delete selected categories? This action cannot be undone.')) return;
                                                }
                                                // TODO: Submit to server via form or AJAX
                                                alert('Applying "' + bulkAction.options[bulkAction.selectedIndex].text + '" to ' + selected.length + ' categories: ' + selected.join(', '));
                                            });

                                            // confirm individual delete
                                            document.querySelectorAll('button.btn-delete').forEach(btn => btn.addEventListener('click', function(e) {
                                                const name = btn.dataset.name || 'this item';
                                                if (!confirm('Delete "' + name + '"?')) e.preventDefault();
                                            }));

                                            // make rows clickable (except clicks on interactive elements)
                                            document.querySelectorAll('tbody tr[data-href]').forEach(tr => {
                                                tr.addEventListener('click', function(e) {
                                                    if (isDragging) return; // avoid navigation while dragging
                                                    if (e.target.closest('input') || e.target.closest('a') || e.target.closest('button')) return;
                                                    window.location = tr.dataset.href;
                                                });
                                            });

                                            // Drag & drop reorder (HTML5 drag/drop)
                                            let dragEl = null;

                                            function onDragStart(e) {
                                                const tr = this;
                                                dragEl = tr;
                                                isDragging = true;
                                                tr.classList.add('dragging');
                                                e.dataTransfer.effectAllowed = 'move';
                                                e.dataTransfer.setData('text/plain', tr.dataset.id);
                                            }

                                            function onDragOver(e) {
                                                e.preventDefault();
                                                const target = e.target.closest('tr');
                                                if (!target || target === dragEl || target.parentNode !== tbody) return;

                                                const rect = target.getBoundingClientRect();
                                                const offset = e.clientY - rect.top;
                                                const midpoint = rect.height / 2;

                                                if (offset > midpoint) {
                                                    target.after(dragEl);
                                                } else {
                                                    target.before(dragEl);
                                                }
                                            }

                                            function onDragEnd() {
                                                if (dragEl) dragEl.classList.remove('dragging');
                                                dragEl = null;
                                                isDragging = false;
                                                // mark changed and enable save button
                                                reorderChanged = true;
                                                saveOrderBtn.disabled = false;
                                                saveOrderBtn.setAttribute('aria-disabled', 'false');
                                            }

                                            function enableDrag() {
                                                document.querySelectorAll('tbody tr').forEach(tr => {
                                                    tr.setAttribute('draggable', 'true');
                                                    tr.addEventListener('dragstart', onDragStart);
                                                    tr.addEventListener('dragover', onDragOver);
                                                    tr.addEventListener('dragend', onDragEnd);
                                                });
                                                // also allow dragover on tbody for empty space
                                                tbody.addEventListener('dragover', function(e) { e.preventDefault(); });
                                            }

                                            enableDrag();

                                            // Save order via AJAX POST (adjust route/server handling as needed)
                                            saveOrderBtn.addEventListener('click', function() {
                                                if (!reorderChanged) return;
                                                const order = Array.from(tbody.querySelectorAll('tr')).map(tr => tr.dataset.id);
                                                if (order.length === 0) return;
                                                if (!confirm('Save new order for ' + order.length + ' categories?')) return;

                                                saveOrderBtn.disabled = true;
                                                saveOrderBtn.textContent = 'Saving...';

                                                const csrfToken = '{{ csrf_token() }}';

                                                fetch('{{ route("category.reorder") }}', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': csrfToken,
                                                        'Accept': 'application/json'
                                                    },
                                                    body: JSON.stringify({ order })
                                                }).then(res => {
                                                    if (!res.ok) throw new Error('Network error');
                                                    return res.json();
                                                }).then(data => {
                                                    alert(data.message || 'Order saved');
                                                    reorderChanged = false;
                                                    saveOrderBtn.textContent = 'Save Order';
                                                    saveOrderBtn.disabled = true;
                                                    saveOrderBtn.setAttribute('aria-disabled', 'true');
                                                }).catch(err => {
                                                    alert('Failed to save order.');
                                                    saveOrderBtn.textContent = 'Save Order';
                                                    saveOrderBtn.disabled = false;
                                                    saveOrderBtn.setAttribute('aria-disabled', 'false');
                                                });
                                            });
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
