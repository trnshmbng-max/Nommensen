<?php

namespace App\Filament\Resources\Aboutmes\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
class AboutmeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageColumn::make('image')
                    ->label('Logo')
                    ->disk('public')
                    ->required(),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
