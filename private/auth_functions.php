<?php
    // performs all necessary actions to log in as an admin
    function log_in_admin($admin) {
        // regenerating the Id protects the admin from session fixation
        session_regenerate_id();
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['last_login'] = time();
        $_SESSION['username'] = $admin['username'];
        return true;
    }
?>