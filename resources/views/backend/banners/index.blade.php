@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Banner</strong> Management</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('banner.create') }}" class="btn btn-primary">Add New Banner</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Search, Status Filter & Sort -->
                            <div class="row g-2 mb-3 align-items-center">
                                <div class="col-12 col-md-5">
                                    <form method="GET" action="{{ route('banner.index') }}">
                                        <div class="input-group">
                                            <span class="input-group-text">🔍</span>
                                            <input name="q" class="form-control"
                                                placeholder="Search banners (title, alt text, link)"
                                                value="{{ request('q') ?? '' }}" aria-label="Search banners">
                                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="d-flex">
                                        <label class="me-2 mt-1">Status</label>
                                        <select name="status" class="form-select w-auto">
                                            <option value="">All</option>
                                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="inactive"
                                                {{ request('status') == 'inactive' ? 'selected' : '' }}>
                                                Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 text-end">
                                    <div class="d-flex">
                                        <label class="me-2 mt-1">Sort</label>
                                        <select id="sort" class="form-select w-auto">
                                            <option value="created_desc">Date Created (Newest)</option>
                                            <option value="display_order">Display Order</option>
                                            <option value="views_desc">Views (High - Low)</option>
                                            <option value="ctr_desc">CTR (High - Low)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="me-2">
                                        <select id="bulk-action" class="form-select form-select" aria-label="Bulk actions">
                                            <option value="">Bulk actions</option>
                                            <option value="publish">Publish</option>
                                            <option value="unpublish">Unpublish</option>
                                            <option value="delete">Delete</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <button id="apply-bulk" class="btn btn-primary"
                                        aria-disabled="true">Apply</button>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">
                                    <!-- Category Table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0 align-middle">
                                            <thead>
                                                <tr>
                                                    <th style="width:40px"><input type="checkbox" id="select-all"
                                                            aria-label="Select all"></th>
                                                    <th style="width:36px" class="text-center" aria-label="Reorder">☰</th>
                                                    <th>Title</th>
                                                    <th class="d-none d-sm-table-cell">Image</th>
                                                    <th class="d-none d-md-table-cell">Display Dates</th>
                                                    <th class="d-none d-md-table-cell">Audience</th>
                                                    <th class="d-none d-md-table-cell text-end">Order</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-id="1" data-href="{{ route('banner.edit', 1) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                            value="1" aria-label="Select Homepage Hero"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                        role="button" title="Drag to reorder"><span class="drag-icon"
                                                            aria-hidden="true">≡</span><span
                                                            class="visually-hidden">Drag</span></td>
                                                    <td>Homepage Hero</td>
                                                    <td class="d-none d-sm-table-cell"><img
                                                            src="/img/placeholder-150x80.png" alt="Homepage Hero"
                                                            class="img-fluid"
                                                            style="width:120px;height:60px;object-fit:cover;border-radius:4px;">
                                                    </td>
                                                    <td class="d-none d-md-table-cell">2024-12-01 → 2025-01-01</td>
                                                    <td class="d-none d-md-table-cell">All Users</td>
                                                    <td class="d-none d-md-table-cell text-end">1</td>
                                                    <td><span class="badge bg-success" role="status"
                                                            aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="{{ route('banner.show', 1) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('banner.edit', 1) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                onclick="alert('Previewing banner...')">Preview</button>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete"
                                                                data-name="Homepage Hero">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="2" data-href="{{ route('banner.edit', 2) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                            value="2" aria-label="Select Promo Strip"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                        role="button" title="Drag to reorder"><span class="drag-icon"
                                                            aria-hidden="true">≡</span><span
                                                            class="visually-hidden">Drag</span></td>
                                                    <td>Promo Strip</td>
                                                    <td><img src="/img/placeholder-150x80.png" alt="Promo Strip"
                                                            style="width:120px;height:60px;object-fit:cover;border-radius:4px;">
                                                    </td>
                                                    <td>2024-12-15 → 2025-02-01</td>
                                                    <td>New Customers</td>
                                                    <td>2</td>
                                                    <td><span class="badge bg-success" role="status"
                                                            aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="{{ route('banner.show', 2) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('banner.edit', 2) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                onclick="alert('Previewing banner...')">Preview</button>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete"
                                                                data-name="Promo Strip">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="3" data-href="{{ route('banner.edit', 3) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                            value="3" aria-label="Select Footer CTA"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                        role="button" title="Drag to reorder"><span class="drag-icon"
                                                            aria-hidden="true">≡</span><span
                                                            class="visually-hidden">Drag</span></td>
                                                    <td>Footer CTA</td>
                                                    <td><img src="/img/placeholder-150x80.png" alt="Footer CTA"
                                                            style="width:120px;height:60px;object-fit:cover;border-radius:4px;">
                                                    </td>
                                                    <td>2024-11-01 → 2024-12-31</td>
                                                    <td>VIP</td>
                                                    <td>3</td>
                                                    <td><span class="badge bg-secondary" role="status"
                                                            aria-label="Inactive">Inactive</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="{{ route('banner.show', 3) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('banner.edit', 3) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                onclick="alert('Previewing banner...')">Preview</button>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete"
                                                                data-name="Footer CTA">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr data-id="4" data-href="{{ route('banner.edit', 4) }}">
                                                    <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                            value="4" aria-label="Select Promo Sidebar"></td>
                                                    <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                        role="button" title="Drag to reorder"><span class="drag-icon"
                                                            aria-hidden="true">≡</span><span
                                                            class="visually-hidden">Drag</span></td>
                                                    <td>Promo Sidebar</td>
                                                    <td><img src="/img/placeholder-150x80.png" alt="Promo Sidebar"
                                                            style="width:120px;height:60px;object-fit:cover;border-radius:4px;">
                                                    </td>
                                                    <td>2024-12-05 → 2024-12-31</td>
                                                    <td>All Users</td>
                                                    <td>4</td>
                                                    <td><span class="badge bg-success" role="status"
                                                            aria-label="Active">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="{{ route('banner.show', 4) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('banner.edit', 4) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                onclick="alert('Previewing banner...')">Preview</button>
                                                            <button class="btn btn-sm btn-outline-danger btn-delete"
                                                                data-name="Promo Sidebar">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <div class="small text-muted">Showing 1-4 of 4 banners</div>
                                        <nav>
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"><a class="page-link"
                                                        href="#">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <style>
                                        /* subtle hover for clickable rows */
                                        tbody tr[data-href] {
                                            cursor: pointer;
                                        }

                                        tbody tr[data-href]:hover {
                                            background-color: #f8f9fa;
                                        }

                                        /* drag handle */
                                        .drag-handle {
                                            cursor: grab;
                                            width: 36px;
                                        }

                                        .drag-handle:active {
                                            cursor: grabbing;
                                        }

                                        .dragging {
                                            opacity: 0.6;
                                        }

                                        .placeholder {
                                            background: linear-gradient(90deg, #e9ecef, #f8f9fa);
                                            height: 56px;
                                        }

                                        .drag-icon {
                                            font-size: 18px;
                                            line-height: 1;
                                        }

                                        /* responsive helpers */
                                        @media (max-width: 575.98px) {
                                            .btn-group {
                                                display: flex;
                                                flex-direction: column;
                                                gap: 0.5rem;
                                            }

                                            .btn-group .btn {
                                                width: 100%;
                                            }

                                            .drag-handle {
                                                width: 28px;
                                            }

                                            .drag-icon {
                                                font-size: 16px;
                                            }
                                        }
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
                                                alert('Applying "' + bulkAction.options[bulkAction.selectedIndex].text + '" to ' + selected
                                                    .length + ' categories: ' + selected.join(', '));
                                            });

                                            // confirm individual delete
                                            document.querySelectorAll('button.btn-delete').forEach(btn => btn.addEventListener('click', function(
                                                e) {
                                                const name = btn.dataset.name || 'this item';
                                                if (!confirm('Delete "' + name + '"?')) e.preventDefault();
                                            }));

                                            // make rows clickable (except clicks on interactive elements)
                                            document.querySelectorAll('tbody tr[data-href]').forEach(tr => {
                                                tr.addEventListener('click', function(e) {
                                                    if (isDragging) return; // avoid navigation while dragging
                                                    if (e.target.closest('input') || e.target.closest('a') || e.target.closest(
                                                            'button')) return;
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
                                                tbody.addEventListener('dragover', function(e) {
                                                    e.preventDefault();
                                                });
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

                                                fetch('{{ route('category.reorder') }}', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': csrfToken,
                                                        'Accept': 'application/json'
                                                    },
                                                    body: JSON.stringify({
                                                        order
                                                    })
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
