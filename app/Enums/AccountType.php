<?php
namespace App\Enums;

enum AccountType: string
{
    case SUPER_ADMIN = "super_admin";
    case ADMIN = "admin";
    case RETAILER = "retailer";
}
