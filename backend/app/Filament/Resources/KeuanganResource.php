<?php
// filepath: app/Filament/Resources/KeuanganResource.php
namespace App\Filament\Resources;

use App\Filament\Resources\KeuanganResource\Pages;
use App\Models\Keuangan;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class KeuanganResource extends Resource
{
    protected static ?string $model = Keuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('waktu')
                    ->required()
                    ->label('Waktu'),
                Forms\Components\TextInput::make('pemasukan')
                    ->required()
                    ->numeric()
                    ->label('Pemasukan'),
                Forms\Components\TextInput::make('pengeluaran')
                    ->required()
                    ->numeric()
                    ->label('Pengeluaran'),
                Forms\Components\TextInput::make('profit')
                    ->required()
                    ->label('Profit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('waktu')
                    ->label('Waktu')
                    ->date() // Display only the date
                    ->searchable(),
                Tables\Columns\TextColumn::make('pemasukan')
                    ->label('Pemasukan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengeluaran')
                    ->label('Pengeluaran')
                    ->sortable(),
                Tables\Columns\TextColumn::make('profit')
                    ->label('Profit')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKeuangans::route('/'),
            'create' => Pages\CreateKeuangan::route('/create'),
            'edit' => Pages\EditKeuangan::route('/{record}/edit'),
        ];
    }
}