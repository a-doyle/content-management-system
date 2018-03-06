<?php require_once('../private/init.php'); ?>

<?php
    if(is_post_request()) {
        // form was submitted
        $language = $_POST['language'] ?? 'Any';
        $expire = time() + 60*60*24*365;
        setcookie('language', $language, $expire);
    } else {
        // read the stored value (if any)
        $language = $_COOKIE['language'] ?? 'None';
    }
?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">
    <?php include(SHARED_PATH . '/public_nav.php'); ?>
    <div id="page">
        <div id="content">
            <h1>Set Language Preferences</h1>

            <p>The current seleected language is: <?php echo $language; ?></p>
            <form action="<?php echo url_for('/language.php'); ?>" method="post">
                <select name="language">
                <?php 
                    $language_choices = ['Any', 'English', 'Spanish', 'French', 'German'];
                    foreach($language_choices as $language_choice) {
                        echo "<option value=\"{$language_choice}\"";
                        if($language == $language_choice) {
                            echo " selected";
                        }
                        echo ">{$language_choice}</option>";
                    }
                ?>
                </select>
                <br>
                <input type="submit" value="Set Preference">
            </form>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>