<?php

function getCategories()
{
    return \App\Models\Category::all();
}

function getSiteSetting()
{
    return \App\Models\SiteSetting::first();
}
