<h1>Create Client</h1>

<form action="{{ url('/clients') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Name *</label>
    <input type="text" name="name" required>
    @error('name') <span>{{ $message }}</span> @enderror

    <label>Email *</label>
    <input type="email" name="email" required>
    @error('email') <span>{{ $message }}</span> @enderror

    <label>Phone *</label>
    <input type="tel" name="telephone" placeholder="xxx-xxx-xxxx" required>
    @error('telephone') <span>{{ $message }}</span> @enderror

    <label>Address *</label>
    <input type="text" name="address" required>
    @error('address') <span>{{ $message }}</span> @enderror

    <label>Company Logo *</label>
    <input type="file" name="company_logo" accept="image/*">
    @error('company_logo') <span>{{ $message }}</span> @enderror

    <button type="submit">Create</button>
</form>
