@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Add New</strong> Product</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to products</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">New Product</h5>
                            <h6 class="card-subtitle text-muted">Create a new product by filling out the form below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <h5 class="card-title">Basic Information</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Product name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="sku" class="form-label">SKU / Product code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="sku" name="sku" placeholder="Unique SKU or product code" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                        <select id="category" name="category_id" class="form-control" required>
                                            <option selected disabled>Select category</option>
                                            <!-- Categories should be populated server-side -->
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="subcategory" class="form-label">Sub-category</label>
                                        <select id="subcategory" name="subcategory_id" class="form-control">
                                            <option selected disabled>Select sub-category</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <label for="short_description" class="form-label">Short description <small class="text-muted">(max 150 chars)</small></label>
                                        <textarea class="form-control" id="short_description" name="short_description" maxlength="150" rows="2" placeholder="Short description (max 150 characters)"></textarea>
                                        <small id="shortDescCount" class="form-text text-muted">0/150</small>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <label for="description" class="form-label">Detailed description</label>
                                        <textarea class="form-control rich-text" id="description" name="description" rows="6" placeholder="Detailed product description"></textarea>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <label for="tags" class="form-label">Tags</label>
                                        <select id="tags" name="tags[]" class="form-control tags-select" multiple>
                                            <!-- tags: choose existing or create new -->
                                        </select>
                                        <small class="text-muted">Press Enter to add a new tag.</small>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Pricing</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="cost_price" class="form-label">Cost price</label>
                                        <input type="number" step="0.01" min="0" class="form-control" id="cost_price" name="cost_price" placeholder="Cost price">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="selling_price" class="form-label">Selling price <span class="text-danger">*</span></label>
                                        <input type="number" step="0.01" min="0" class="form-control" id="selling_price" name="selling_price" placeholder="Selling price" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="discount_type" class="form-label">Discount type</label>
                                        <select id="discount_type" name="discount_type" class="form-control">
                                            <option value="">None</option>
                                            <option value="percentage">Percentage</option>
                                            <option value="fixed">Fixed amount</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="discount_value" class="form-label">Discount value</label>
                                        <input type="number" step="0.01" min="0" class="form-control" id="discount_value" name="discount_value" placeholder="Discount value">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="sale_price" class="form-label">Sale price</label>
                                        <input type="number" step="0.01" min="0" class="form-control" id="sale_price" name="sale_price" placeholder="Auto-calculated" readonly>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Price history</label>
                                        <table class="table table-sm">
                                            <thead><tr><th>Date</th><th>Price</th><th>Changed by</th></tr></thead>
                                            <tbody id="priceHistory">
                                                <tr><td colspan="3" class="text-muted">No history yet</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Images & Media</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="main_image" class="form-label">Main image <span class="text-danger">*</span></label>
                                        <input type="file" accept="image/*" class="form-control" id="main_image" name="main_image" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="gallery_images" class="form-label">Additional images <small class="text-muted">(5-10 images)</small></label>
                                        <input type="file" accept="image/*" class="form-control" id="gallery_images" name="gallery_images[]" multiple data-max-images="10">
                                        <small class="text-muted">You can drag and drop to reorder images after upload.</small>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="video_url" class="form-label">Video URL</label>
                                        <input type="url" class="form-control" id="video_url" name="video_url" placeholder="YouTube or Vimeo URL">
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Inventory</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="stock_qty" class="form-label">Stock quantity <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="stock_qty" name="stock_qty" min="0" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="reorder_level" class="form-label">Reorder level</label>
                                        <input type="number" class="form-control" id="reorder_level" name="reorder_level" min="0">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="barcode" class="form-label">SKU / Barcode</label>
                                        <input type="text" class="form-control" id="barcode" name="barcode">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="warehouse" class="form-label">Warehouse / Location</label>
                                        <select id="warehouse" name="warehouse_id" class="form-control">
                                            <option selected disabled>Select warehouse</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6 form-check mt-4">
                                        <input type="checkbox" id="track_variants" name="track_variants" class="form-check-input">
                                        <label for="track_variants" class="form-check-label">Track inventory by variant</label>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Customization Options</h5>
                                </div>
                                <div class="row mb-3">
                                    <!-- sizes -->
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Size options</label>
                                        <div id="sizeOptions">
                                            <div class="d-flex mb-2">
                                                <select name="sizes[][]" class="form-control me-2">
                                                    <option value="Small">Small</option>
                                                    <option value="Medium" selected>Medium</option>
                                                    <option value="Large">Large</option>
                                                    <option value="XL">XL</option>
                                                </select>
                                                <input type="number" step="0.01" name="size_price_modifier[]" class="form-control" placeholder="Price modifier">
                                                <button type="button" class="btn btn-danger ms-2 btn-sm remove-size">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" id="addSize" class="btn btn-sm btn-outline-primary">Add size option</button>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Flavor options</label>
                                        <div id="flavorOptions">
                                            <div class="d-flex mb-2">
                                                <input type="text" name="flavors[]" class="form-control me-2" placeholder="Flavor name">
                                                <input type="number" step="0.01" name="flavor_price_modifier[]" class="form-control" placeholder="Price modifier">
                                                <button type="button" class="btn btn-danger ms-2 btn-sm remove-flavor">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" id="addFlavor" class="btn btn-sm btn-outline-primary">Add flavor option</button>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Toppings</label>
                                        <input type="text" name="toppings" class="form-control" placeholder="Comma-separated toppings">
                                    </div>
                                    <div class="mb-3 col-md-6 form-check">
                                        <input type="checkbox" id="custom_message" name="custom_message" class="form-check-input">
                                        <label for="custom_message" class="form-check-label">Allow custom message</label>
                                    </div>
                                    <div class="mb-3 col-12 form-check">
                                        <input type="checkbox" id="custom_request" name="custom_request" class="form-check-input">
                                        <label for="custom_request" class="form-check-label">Allow custom request text area</label>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Attributes</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Dietary info</label>
                                        <div>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Veg"> Veg</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Eggless"> Eggless</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Vegan"> Vegan</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Gluten-Free"> Gluten-Free</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Dairy-Free"> Dairy-Free</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Nut-Free"> Nut-Free</label>
                                            <label class="me-2"><input type="checkbox" name="dietary[]" value="Sugar-Free"> Sugar-Free</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="allergies" class="form-label">Allergies</label>
                                        <input type="text" name="allergies" id="allergies" class="form-control" placeholder="Contains nuts, dairy, eggs...">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="shelf_life" class="form-label">Shelf life / Expiry</label>
                                        <input type="text" name="shelf_life" id="shelf_life" class="form-control" placeholder="e.g., 7 days">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="storage_instructions" class="form-label">Storage instructions</label>
                                        <input type="text" name="storage_instructions" id="storage_instructions" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="serving_size" class="form-label">Serving size</label>
                                        <input type="text" name="serving_size" id="serving_size" class="form-control">
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Delivery Information</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-3">
                                        <label for="lead_time" class="form-label">Lead time (days)</label>
                                        <input type="number" name="lead_time" id="lead_time" class="form-control" min="0">
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="delivery_slots" class="form-label">Delivery time slots</label>
                                        <select name="delivery_slots[]" id="delivery_slots" class="form-control" multiple>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="delivery_charge" class="form-label">Delivery charge</label>
                                        <input type="number" step="0.01" name="delivery_charge" id="delivery_charge" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="min_order_qty" class="form-label">Min / Max order quantity</label>
                                        <div class="d-flex gap-2">
                                            <input type="number" name="min_order_qty" id="min_order_qty" class="form-control" placeholder="Min">
                                            <input type="number" name="max_order_qty" id="max_order_qty" class="form-control" placeholder="Max">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">SEO</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="meta_title" class="form-label">Meta title</label>
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta title">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="meta_description" class="form-label">Meta description</label>
                                        <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Meta description">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="meta_keywords" class="form-label">Meta keywords</label>
                                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="keyword1, keyword2">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="slug" class="form-label">Slug / URL</label>
                                        <input type="text" name="slug" id="slug" class="form-control" placeholder="auto-generated from name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="canonical_url" class="form-label">Canonical URL</label>
                                        <input type="url" name="canonical_url" id="canonical_url" class="form-control" placeholder="https://...">
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Status & Visibility</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-3 form-check">
                                        <input type="checkbox" id="status" name="status" value="1" class="form-check-input" checked>
                                        <label for="status" class="form-check-label">Active</label>
                                    </div>
                                    <div class="mb-3 col-md-3 form-check">
                                        <input type="checkbox" id="featured" name="featured" class="form-check-input">
                                        <label for="featured" class="form-check-label">Featured</label>
                                    </div>
                                    <div class="mb-3 col-md-3 form-check">
                                        <input type="checkbox" id="new_arrival" name="new_arrival" class="form-check-input">
                                        <label for="new_arrival" class="form-check-label">New arrival</label>
                                    </div>
                                    <div class="mb-3 col-md-3 form-check">
                                        <input type="checkbox" id="on_sale" name="on_sale" class="form-check-input">
                                        <label for="on_sale" class="form-check-label">On sale</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="visibility" class="form-label">Visibility</label>
                                        <select name="visibility" id="visibility" class="form-control">
                                            <option value="all">Visible to all</option>
                                            <option value="registered">Visible to registered users only</option>
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Related Products</h5>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-12">
                                        <label for="related_products" class="form-label">Related / Complementary products (max 5)</label>
                                        <select id="related_products" name="related_products[]" class="form-control" multiple>
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-12 d-flex gap-2">
                                        <button type="submit" name="action" value="draft" class="btn btn-outline-secondary">Save as draft</button>
                                        <button type="submit" name="action" value="continue" class="btn btn-secondary">Save and continue editing</button>
                                        <button type="submit" name="action" value="publish" class="btn btn-primary">Save and publish</button>
                                        <button type="submit" name="action" value="add_another" class="btn btn-outline-primary">Save and add another</button>
                                    </div>
                                </div>

                                <!-- Inline scripts for basic behaviors -->
                                @push('scripts')
                                <script>
                                    // Short description counter
                                    document.getElementById('short_description')?.addEventListener('input', function(e){
                                        const el = document.getElementById('shortDescCount');
                                        el.textContent = this.value.length + '/150';
                                    });

                                    // Auto-calc sale price
                                    function calculateSale() {
                                        const selling = parseFloat(document.getElementById('selling_price')?.value || 0);
                                        const dtype = document.getElementById('discount_type')?.value;
                                        const dval = parseFloat(document.getElementById('discount_value')?.value || 0);
                                        let sale = selling;
                                        if (dtype === 'percentage') sale = selling - (selling * dval / 100);
                                        else if (dtype === 'fixed') sale = selling - dval;
                                        document.getElementById('sale_price').value = Math.max(0, sale).toFixed(2);
                                    }
                                    ['selling_price','discount_type','discount_value'].forEach(id=>{
                                        document.getElementById(id)?.addEventListener('input', calculateSale);
                                        document.getElementById(id)?.addEventListener('change', calculateSale);
                                    });

                                    // Auto-fill meta title & slug from name
                                    document.getElementById('name')?.addEventListener('input', function(){
                                        const mt = document.getElementById('meta_title');
                                        const slug = document.getElementById('slug');
                                        if(mt && !mt.value) mt.value = this.value;
                                        if(slug && !slug.value) slug.value = this.value.toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'');
                                    });

                                    // Simple add/remove for size/flavor options
                                    document.getElementById('addSize')?.addEventListener('click', function(){
                                        const wrap = document.getElementById('sizeOptions');
                                        const div = document.createElement('div'); div.className='d-flex mb-2';
                                        div.innerHTML = '<select name="sizes[][]" class="form-control me-2"><option>Small</option><option>Medium</option><option>Large</option><option>XL</option></select><input type="number" step="0.01" name="size_price_modifier[]" class="form-control" placeholder="Price modifier"><button type="button" class="btn btn-danger ms-2 btn-sm remove-size">Remove</button>';
                                        wrap.appendChild(div);
                                    });
                                    document.getElementById('sizeOptions')?.addEventListener('click', function(e){
                                        if(e.target.classList.contains('remove-size')) e.target.closest('div').remove();
                                    });
                                    document.getElementById('addFlavor')?.addEventListener('click', function(){
                                        const wrap = document.getElementById('flavorOptions');
                                        const div = document.createElement('div'); div.className='d-flex mb-2';
                                        div.innerHTML = '<input type="text" name="flavors[]" class="form-control me-2" placeholder="Flavor name"><input type="number" step="0.01" name="flavor_price_modifier[]" class="form-control" placeholder="Price modifier"><button type="button" class="btn btn-danger ms-2 btn-sm remove-flavor">Remove</button>';
                                        wrap.appendChild(div);
                                    });
                                    document.getElementById('flavorOptions')?.addEventListener('click', function(e){
                                        if(e.target.classList.contains('remove-flavor')) e.target.closest('div').remove();
                                    });
                                </script>
                                @endpush
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
