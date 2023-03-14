<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    case ADD_PRODUCT = "add-product";
    case REMOVE_PRODUCT = "remove-product";
    case UPDATE_PRODUCT = "update-product";
}
