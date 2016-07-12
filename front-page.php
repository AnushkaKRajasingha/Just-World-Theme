<?php
/*
 *   Template Name: Front Page
 *  Developed By Anushka K R
 *  http://www.anushkar.com
 *
*/
get_header('front-page'); ?> <?php

if (is_active_sidebar('donate-text-area'))
{ ?> <div class="donate-dec"> <?php
    dynamic_sidebar('donate-text-area'); ?> </div> <?php
} ?> <?php

if (is_active_sidebar('services-area'))
{ ?> <div class="event-col"> <?php
    dynamic_sidebar('services-area'); ?> </div> <?php
} ?> <?php
get_footer('front-page');