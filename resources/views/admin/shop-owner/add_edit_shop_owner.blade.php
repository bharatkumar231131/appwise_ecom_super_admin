<!-- resources/views/shop_owners/create_edit.blade.php -->

<div class="container">
    <h2>{{ isset($shopOwner) ? 'Edit' : 'Add' }} Shop Owner</h2>

    <form action="{{ route('shop_owners.storeOrUpdate', $shopOwner->id ?? '') }}" method="POST">
        @csrf
        @if (isset($shopOwner))
            @method('POST')
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Owner Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $shopOwner->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="shop_name" class="form-label">Shop Name</label>
            <input type="text" class="form-control" name="shop_name" value="{{ old('shop_name', $shopOwner->shop_name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="domain" class="form-label">Shop Domain (optional)</label>
            <input type="text" class="form-control" name="domain" value="{{ old('domain', $shopOwner->domain ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="package_id" class="form-label">Package</label>
            <select name="package_id" class="form-control" required>
                @foreach ($packages as $package)
                    <option value="{{ $package->id }}" {{ old('package_id', $shopOwner->package_id ?? '') == $package->id ? 'selected' : '' }}>
                        {{ $package->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{ old('status', $shopOwner->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $shopOwner->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                <option value="suspended" {{ old('status', $shopOwner->status ?? '') == 'suspended' ? 'selected' : '' }}>Suspended</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($shopOwner) ? 'Update' : 'Add' }} Shop Owner</button>
    </form>
</div>
