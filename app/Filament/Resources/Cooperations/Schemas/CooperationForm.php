<?php

namespace App\Filament\Resources\Cooperations\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CooperationSchema
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Logo Kerja Sama')
                    ->image()
                    ->directory('cooperations')
                    ->visibility('public')
                    ->imagePreviewHeight('150')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Upload logo mitra. Format: JPG, PNG. Maks 2MB.')
                    ->columnSpanFull(),
            ]);
    }
}