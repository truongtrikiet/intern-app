<?php

namespace App\Enums;

enum Status: int {
    case waiting = 0;
    case approved = 1;
    case denied = 2;
    case locked = 3;
}