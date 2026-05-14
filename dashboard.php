<?php
require_once __DIR__ . '/auth.php';
requireLogin();

$username = $_SESSION['username'];
$initial = strtoupper(substr($username, 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Secure Auth</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container dashboard-container">
        <div class="glass-card dashboard-card">
            <div class="user-info">
                <div class="avatar"><?php echo $initial; ?></div>
                <div>
                    <h1 style="text-align: left; margin: 0; font-size: 1.5rem;">Hello, <?php echo htmlspecialchars($username); ?>!</h1>
                    <p style="color: var(--text-muted); font-size: 0.875rem;">Welcome to your secure dashboard</p>
                </div>
            </div>

            <div class="content">
                <h2 style="font-size: 1.125rem; margin-bottom: 1rem; color: var(--text-main);">Project Details</h2>
                <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem;">
                    This is a simple PHP authentication demonstration. It uses:
                </p>
                <ul style="color: var(--text-muted); list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--success);">✓</span> PHP PDO with SQLite
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--success);">✓</span> Secure Password Hashing
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--success);">✓</span> Session-based Authentication
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--success);">✓</span> Modern Glassmorphic UI
                    </li>
                </ul>
            </div>

            <form action="logout.php" method="POST">
                <button type="submit" class="logout-btn">Sign Out</button>
            </form>
        </div>
    </div>
</body>
</html>
