<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Spatie\Permission\Models\Role;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Usuarios';
    protected static ?int $navigationSort = 1;

    // Formulario de creación/edición
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nombre')
                ->required(),
            TextInput::make('email')
                ->email()
                ->label('Correo electrónico')
                ->required(),
            TextInput::make('password')
                ->password()
                ->label('Contraseña')
                ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                ->required(fn ($context) => $context === 'create'),
            Select::make('roles')
                ->label('Roles')
                ->multiple()
                ->options(Role::all()->pluck('name','name'))
                ->required(),
        ]);
    }

    // Tabla para listar usuarios
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nombre')->sortable()->searchable(),
                TextColumn::make('email')->label('Correo')->sortable()->searchable(),
                TextColumn::make('roles.name')->label('Rol(s)'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    // Protección por roles

    
    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('Administrador');
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole('Administrador');
    }

    public static function canEdit($record): bool
    {
        return auth()->user()->hasRole('Administrador');
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->hasRole('Administrador');
    }
}