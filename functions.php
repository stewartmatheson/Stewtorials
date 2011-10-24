<?php
include 'geshi/geshi.php';

function get_file_code($type, $path){
    $g = new GeSHi('', $type);
    
    //$g->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
    $g->set_tab_width(2);
    $g->enable_keyword_links(false);
    
    $g->load_from_file($path);
    return $g->parse_code();
}

function render_code_block($type, $file, $title = "") {
    $rendered_code = get_file_code($type, $file);
    if($title != "")
        $rendered_title = '<div class="code_block_title"> ' . $title . ' </div>';
    echo $rendered_title . '<div class="code_block">' . $rendered_code . '</div>';
}

function is_index_page(){
    return $_SERVER['REQUEST_URI'] == '/';
}
