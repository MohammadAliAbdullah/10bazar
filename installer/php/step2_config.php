<?php
$config = $_SESSION['app'] ?? ['name' => '', 'url' => ''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['app'] = [
        'name' => $_POST['name'],
        'url' => $_POST['url']
    ];
    header("Location: ?step=3");
    exit;
}
?>
<form method="POST">
    <div class="mb-3">
        <label>Envato User ID</label>
        <input type="text" name="name" class="form-control" required value="<?= htmlspecialchars($config['name']) ?>">
    </div>
    <div class="mb-3">
        <label>Purchase Key </label>
        <input type="text" name="url" class="form-control" required value="<?= htmlspecialchars($config['url']) ?>">
    </div>
    <button class="btn btn-primary">Next</button>
</form>
