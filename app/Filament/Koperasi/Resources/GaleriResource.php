<?php

namespace App\Filament\Koperasi\Resources;

use App\Filament\Koperasi\Resources\GaleriResource\Pages;
use App\Filament\Koperasi\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_desa')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce : '1000')
                    ->afterStateUpdated(function($set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                TextInput::make('alamat')
                    ->required(),
                Select::make('provinsi')
                    ->options([
                        'barat' => 'barat',
                        'selatan' => 'selatan',
                        'timur' => 'timur',
                        'utara' => 'utara',
                    ])
                    ->required(),
                TextInput::make('sumber_daya')
                    ->required(),
                TextInput::make('img_source')
                    ->required(),
                TextInput::make('lintang')
                        ->required(),
                TextInput::make('bujur')
                        ->required(),
                DateTimePicker::make('tanggal_publish')
                    ->required(),
                RichEditor::make('deskripsi_desa')
                    ->required()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->columnSpanFull(),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_desa')
                    ->searchable(),
                TextColumn::make('alamat'),
                TextColumn::make('provinsi'),
                TextColumn::make('sumber_daya'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
