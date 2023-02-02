<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketResource\Pages;
use App\Filament\Resources\PaketResource\RelationManagers;
use App\Models\Paket;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Pages';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'title';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                        if (!$get('is_slug_changed_manually') && filled($state)) {
                            $set('slug', Str::slug($state));
                        }
                    })
                    ->reactive()
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->afterStateUpdated(function (Closure $set) {
                        $set('is_slug_changed_manually', true);
                    })
                    ->required(),

                Forms\Components\TextInput::make('subtitle')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('start_form')
                    ->required(),

                Forms\Components\Toggle::make('special_offer'),

                Forms\Components\FileUpload::make('thumbnail')
                    ->required(),
                Forms\Components\FileUpload::make('image_header')
                    ->required(),

                TinyEditor::make('program')
                    ->fileAttachmentsDisk('public')
                    ->columnSpan('full')
                    ->required(),
                TinyEditor::make('include_exclude')
                    ->fileAttachmentsDisk('public')
                    ->columnSpan('full')
                    ->required(),
                TinyEditor::make('term_conditions')
                    ->fileAttachmentsDisk('public')
                    ->columnSpan('full')
                    ->required(),
                TinyEditor::make('harga')
                    ->fileAttachmentsDisk('public')
                    ->columnSpan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\ImageColumn::make('image_header'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_form')
                    ->sortable(),
                Tables\Columns\IconColumn::make('special_offer')->boolean()
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }
}
