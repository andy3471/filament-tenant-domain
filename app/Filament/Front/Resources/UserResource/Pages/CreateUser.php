<?php

namespace App\Filament\Front\Resources\UserResource\Pages;

use App\Filament\Front\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
