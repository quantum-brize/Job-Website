



<?php

// if (!empty($footer_link)) {
//     foreach ($footer_link as $link) {
//         echo "<script src='" . base_url() . "assets/js/" . $link . "'></script>";
//     }

// }

    if (!empty($footer_link)) {
        foreach ($footer_link as $link) {
            require_once(APPPATH . 'views/web/inc/js/'.$link);
        }
    }
?>
