<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Produk';

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            // Kartu
            Forms\Components\Card::make()
                ->schema([
                
                    // Gambar
                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->required(),

                    // Grid
                    Forms\Components\Grid::make(2)
                      ->schema([

                         // Judul
                          Forms\Components\TextInput::make('title')
                          ->label('Judul')
                          ->placeholder('Masukkan Judul')
                          ->required(), 

                          // Kategori
                          Forms\Components\Select::make('category_id')
                              ->label('Kategori')
                              ->relationship('category', 'name')
                              ->required(),
                      ]),

                    // Konten
                    Forms\Components\RichEditor::make('content')
                        ->label('Konten')
                        ->placeholder('Masukkan Konten')
                        ->required(),
                    
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->label('Gambar')
                ->circular(),
                Tables\Columns\TextColumn::make('title')
                ->label('Judul')
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->label('Tanggal Dibuat')
                ->date(),
                Tables\Columns\TextColumn::make('category.name')
                ->label('Kategori'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
