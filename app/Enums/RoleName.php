<?php
namespace App\Enums;
 
enum RoleName: string
{
    case ADMIN    = 'Admin';
    case CLIENT   = 'Client';
    case CARRENTAL    = 'CarRental';
}