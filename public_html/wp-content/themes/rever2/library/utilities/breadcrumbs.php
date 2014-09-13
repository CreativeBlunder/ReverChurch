<?php

if (!function_exists('breadcrumbs')) {
    function breadcrumbs()
    {
        $current_before = '<li class="active">';
        $current_after = '</li>';
        $breadcrumb_separator = '';

        echo '<ol class="breadcrumb">';

        global $post;
        echo '<li><a href="/">Home</a></li>';

        if (!is_page() && !is_404() && !is_search() && !is_post_type_archive('wpfc_sermon') && !is_singular('wpfc_sermon')) {
            if (is_single() || is_category() | is_day() || is_month() || is_year() || is_tag() || is_author()) {
                echo '<li><a href="' . get_bloginfo('url') . '/">Blog</a>' . $breadcrumb_separator . '</li>';
            } else {
                if (!get_query_var('paged')) {
                    echo $current_before . 'Blog' . $current_after;
                } else {
                    echo '<li><a href="' . get_bloginfo('url') . '/">Blog</a>' . $breadcrumb_separator . '</li>';
                }
            }
        }

        if (is_post_type_archive('wpfc_sermon')) {
            echo $current_before . 'Sermons' . $current_after;
        } elseif (is_singular('wpfc_sermon')) {
            echo '<li><a href="' . get_bloginfo('url') . '/sermons/">Sermons</a>' . $breadcrumb_separator . '</li>';
            echo $current_before . $post->post_title . $current_after;
        }

        if (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $this_cat = $cat_obj->term_id;
            $this_cat = get_category($this_cat);
            $parent_cat = get_category($this_cat->parent);
            if ($this_cat->parent != 0) echo get_category_parents($parent_cat, true, '');
            echo $current_before . strip_tags($this_cat->name) . $current_after;
        } elseif(is_day()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $breadcrumb_separator . '</li>';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $breadcrumb_separator . '</li>';
            echo $current_before . strip_tags(get_the_time('d')) . $current_after;
        } elseif(is_month()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $breadcrumb_separator . '</li>';
            echo $current_before . strip_tags(get_the_time('F')) . $current_after;
        } elseif(is_year()) {
            echo $current_before . strip_tags(get_the_time('Y')) . $current_after;
        } elseif(is_single() && !is_singular('wpfc_sermon')) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $breadcrumb_separator . '</li>';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $breadcrumb_separator . '</li>';
            echo '<li><a href="' . get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')) . '">' . get_the_time('d') . '</a>' . $breadcrumb_separator . '</li>';

            $title_temp = stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) != '' ? stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) : stripslashes(get_the_title($post->ID));
            echo $current_before . strip_tags($title_temp) . $current_after;
        } elseif(is_page() && !$post->post_parent) {
            $title_temp = stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) != '' ? stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) : stripslashes(get_the_title($post->ID));
            echo $current_before . strip_tags($title_temp) . $current_after;
        } elseif(is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            if($parent_id == 0) $parent_id = null;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $title_temp = stripslashes(get_post_meta($page->ID, _aioseop_menulabel, true)) != '' ? stripslashes(get_post_meta($page->ID, _aioseop_menulabel, true)) : stripslashes(get_the_title($page->ID));
                if ($page->post_status == 'publish') {
                    $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . strip_tags($title_temp) . '</a>' . $breadcrumb_separator . '</li>';
                } else {
                    $title_array = explode(': ', strip_tags($title_temp));
                    if (is_array($title_array) && count($title_array) > 1) {
                        $title_temp = $title_array[1];
                    } else {
                        $title_temp = strip_tags($title_temp);
                    }
                    $breadcrumbs[] = '<span class="inactive">' . $title_temp . '</span>';
                }
                $parent_id = $page->post_parent;
                if($parent_id == 0) $parent_id = null;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb;
            $title_temp = stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) != '' ? stripslashes(get_post_meta($post->ID, _aioseop_menulabel, true)) : stripslashes(get_the_title($post->ID));
            echo $current_before . strip_tags($title_temp) . $current_after;
        } elseif(is_search()) {
            echo $current_before . 'Search results for "' . strip_tags(get_search_query()) . '"' . $current_after;
        } elseif(is_tag()) {
            echo $current_before . 'Posts tagged "' . strip_tags(single_tag_title()) . '"' . $current_after;
        } elseif(is_author()) {
            global $author;
            $user_data = get_userdata($author);
            echo $current_before . 'Articles posted by ' . strip_tags($user_data->display_name) . $current_after;
        } elseif(is_404()) {
            echo $current_before . 'Page Not Found' . $current_after;
        }

        if(get_query_var('paged')) {
            echo $current_before;
            if(is_category() | is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
            echo __('Page') . ' ' . strip_tags(get_query_var('paged'));
            if(is_category() | is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
            echo $current_after;
        }

        echo '</ol>';
    }
}