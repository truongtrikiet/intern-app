<?php

namespace App\Enums;

enum BlogStatus: int
{
    case Waiting = 0;
    case NewBlog = 1;
    case UpdateBlog = 2;

    // public function label(): string {
    //     return match ($this) {
    //         self::Waiting => 'Waiting',
    //         self::NewBlog => 'New Blog',
    //         self::UpdateBlog => 'Update Blog',
    //     };
    // }
}
