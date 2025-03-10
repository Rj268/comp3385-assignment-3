<form action="{{ url('/login') }}" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">Login</button>
</form>

<!-- Display errors -->
@if(session('error'))
    <div>{{ session('error') }}</div>
@endif
