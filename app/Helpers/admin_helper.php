<?php

function admin_url($uri = '', $scheme = 'http')
{
    return base_url('admin/' . $uri, $scheme);
}
