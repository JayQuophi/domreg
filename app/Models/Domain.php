<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $table = 'domain';

    protected $fillable =[
        'domainname', 
        'ns1', 
        'srv1', 
        'ns2', 
        'srv2', 
        'ns3', 
        'srv3', 
        'ns4', 
        'srv4', 
        'ns5', 
        'srv5', 
        'ns6', 
        'srv6', 
        'ns7', 
        'srv7', 
        'ns8', 
        'srv8'
    ];
}
