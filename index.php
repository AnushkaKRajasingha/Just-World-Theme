<?php
get_header(); ?> <?php

if (is_active_sidebar('donate-text-area'))
{ ?> <div class="donate-dec"> <?php
    dynamic_sidebar('donate-text-area'); ?> </div> <?php
} ?> <?php

if (is_active_sidebar('services-area'))
{ ?> <div class="event-col"> <?php
    dynamic_sidebar('services-area'); ?> </div> <?php
} ?> <?php
get_footer();