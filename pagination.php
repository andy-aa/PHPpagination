<?php

function pagination($n, $params = [])
{
    extract(array_merge([
        'step' => ($n <= 10) ? 1 : (($n <= 100) ? 5 : (($n <= 500) ? 10 : (($n <= 1000) ? 100 : 1000))),
        'shift' => 0,
        'current_page' => null,
        'wrapper_class' => 'pagination',
        'parametr_name' => 'page',
        'add_prametrs' => ''
    ], $params));

    $pages = range($step, $n, $step);
    $pages[] = 1;
    $pages[] = $n;

    if (is_numeric($current_page) && ($current_page > 1) && ($current_page < $n)) {
        $pages[] = $current_page;
        if (($current_page + 1) < $n) {
            $pages[] = $current_page + 1;
        }
        if (($current_page - 1) > 1) {
            $pages[] = $current_page - 1;
        }
    }

    sort($pages);

    $pagination = '';
    foreach (array_unique($pages) as $v) {
        $pagination .= "<a href=\"?$parametr_name=" . ($v + $shift) . $add_prametrs . '"' . ((is_numeric($current_page) && ($v == $current_page)) ? ' class="selected"' : '') . ">$v</a>";
    }

    return "<div class=\"$wrapper_class\">" . $pagination . "</div>";
}
