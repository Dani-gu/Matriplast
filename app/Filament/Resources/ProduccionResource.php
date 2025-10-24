<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduccionResource\Pages;
use App\Filament\Resources\ProduccionResource\RelationManagers;
use App\Models\Produccion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class ProduccionResource extends Resource
{
    protected static ?string $model = Produccion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form->schema([
        DatePicker::make('fecha')->required(),
        TextInput::make('temperatura')->numeric()->required()->label('Temperatura (°C)'),
        TextInput::make('presion')->numeric()->required()->label('Presión (Pa)'),
        TextInput::make('cantidad_resina')->numeric()->required()->label('Cantidad de Resina (kg)'),
        Textarea::make('observaciones')->label('Observaciones')->rows(3),
    ]);
}

    public static function table(Tables\Table $table): Tables\Table
{
    return $table
        ->columns([
            TextColumn::make('fecha')->date(),
            TextColumn::make('temperatura'),
            TextColumn::make('presion'),
            TextColumn::make('cantidad_resina'),
            TextColumn::make('observaciones'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
}

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduccions::route('/'),
            'create' => Pages\CreateProduccion::route('/create'),
            'edit' => Pages\EditProduccion::route('/{record}/edit'),
        ];
    }
}
