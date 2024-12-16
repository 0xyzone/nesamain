<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasDescription;

enum NewsStatus: string implements HasLabel, HasDescription, HasIcon, HasColor
{
    case Draft = "draft";
    case Published = "published";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Published => 'success',
        };
    }
    
    public function getIcon(): ?string
    {
        return match ($this) {
            self::Draft => 'heroicon-m-pencil',
            self::Published => 'heroicon-m-check',
        };
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::Draft => 'This has not finished being written yet.',
            self::Published => 'This has been approved by a staff member and is public on the website.',
        };
    }
}
