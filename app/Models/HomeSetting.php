<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
    	'meta_title',
    	'meta_description',

    	'fun_title',
    	'fun_description',
        'count_icon1',
        'count_number1',
    	'count_description1',
        'count_icon2',
    	'count_number2',
		'count_description2',
        'count_icon3',
    	'count_number3',
    	'count_description3',
        'count_icon4',
    	'count_number4',
    	'count_description4',

    	'about_subtitle',
    	'about_title',
    	'about_description',
    	'about_buttontext',
    	'about_buttonlink',
    	'about_image1',
        'about_image1_titlu1',
        'about_image1_titlu2',
    	'about_image2',
        'about_image2_titlu1',
        'about_image2_titlu2',
        'about_image3',
        'about_image3_titlu1',
        'about_image3_titlu2',
    	'about_yearstitle',
    	'about_yearstext',

    	'services_title',
        'sevices_text',

        'testimonial_title',
        'testimonial_subtitle',

    	'projects_title',
    	'projects_subtitle',

    	'blog_title',
    	'blog_subtitle',


	];
}
