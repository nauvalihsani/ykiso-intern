<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use Illuminate\Support\Facades\Storage;
use App\Models\Partner;
use App\Filament\Resources\PartnerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Partner $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }

                }
            ),
        ];
    }
}
