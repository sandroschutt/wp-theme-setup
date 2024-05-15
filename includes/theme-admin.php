<?php

namespace ThemeSetup;

require_once dirname(dirname(__FILE__)) . "/includes/theme-interface.php";

class ThemeAdminSettings implements ThemeSettingsInterface
{
    public function enqueue_scripts()
    {
    }

    public function enqueue_styles()
    {
    }

    public function admin_notices()
    { ?>
       <!-- Create your admin panel notices here -->
<?php }
}
