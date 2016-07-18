<?php
if (!empty($first_block['message1'])){
    print drupal_render($first_block['message1']);
}
if (!empty($first_block['message2'])) {
    print drupal_render($first_block['message2']);
}
