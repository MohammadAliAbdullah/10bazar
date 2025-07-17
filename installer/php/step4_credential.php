<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['admin'] = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];
    header("Location: ?step=5");
    exit;
}
?>
<form method="POST">
    <div class="mb-3">
        <label>Admin Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Admin Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button class="btn btn-primary">Finish Installation</button>
</form>
