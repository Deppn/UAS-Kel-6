<form method="POST" action="{{ route('user.changePassword') }}">
    @csrf
    <div class="form-group">
        <label for="old_password">Password Lama:</label>
        <input type="password" class="form-control" id="old_password" name="old_password" required>
    </div>
    <div class="form-group">
        <label for="new_password">Password Baru:</label>
        <input type="password" class="form-control" id="new_password" name="new_password" required minlength="8">
    </div>
    <button type="submit" class="btn btn-primary">Ubah Password</button>
</form>