<?php

use App\Models\About;
use App\Models\Contact;

function getCategories()
{
    return \App\Models\Category::all();
}

function getSiteSetting()
{
    return \App\Models\SiteSetting::first();
}
function getAbout() {
    return About::first();
}

function getContact() {
    return Contact::first();
}
