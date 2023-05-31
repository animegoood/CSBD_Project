<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

protected $fillable= [


  'service_icon',
  'service_name',
  'service_details',

  'testimonials_image',
  'testimonials_name',
  'testimonials_job',
  'testimonials_details',


  'pricing_name',
  'pricing',
  'pricing_month',
  'pricing_services_1',
  'pricing_services_2',
  'pricing_services_3',
  'pricing_services_4',
  'pricing_services_5',

  'sponser_images',


];


protected $table ='services';

}
