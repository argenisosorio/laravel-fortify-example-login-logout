<form action="{{ route('login') }}" method="POST">
    @csrf
    <label>
        <input type="email" name="email" placeholder="email">
        @error('email') <div>{{ $message }}</div> @enderror
    </label>
    <label>
        <input type="password" name="password" placeholder="password">
        @error('password') <div>{{ $message }}</div> @enderror
    </label>
    <input type="submit" value="Login">
</form>