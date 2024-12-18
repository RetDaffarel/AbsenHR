<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AtasanResource\Pages;
use App\Filament\Resources\AtasanResource\RelationManagers;
use App\Models\Atasan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AtasanResource extends Resource
{
    protected static ?string $model = Atasan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(155),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(206),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(155),
                Forms\Components\DatePicker::make('Tanggal_Izin')
                    ->required(),
                Forms\Components\Select::make('jenis')
                    ->label('Jenis Cuti')
                    ->options([
                        'Tahunan Umroh' => 'Tahunan Umroh',
                        'Tahunan' => 'Tahunan',
                        'Tahunan Luar Negri' => 'Tahunan Luar Negri',
                        'Izin Sementara' => 'Izin Sementara',
                        'Sakit' => 'Sakit',
                        'Sakit Kecelakaan' => 'Sakit Kecelakaan',
                        'Melahirkan' => 'Melahirkan',
                        'Alasan Penting' => 'Alasan Penting',
                        'Besar' => 'Besar',
                    ])
                    ->required(),
                Forms\Components\TextArea::make('alasan')
                    ->label('Keterangan')
                    ->required()
                    ->maxLength(155),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_Izin')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alasan')
                    ->label('Keterangan'),
                Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListAtasans::route('/'),
            'create' => Pages\CreateAtasan::route('/create'),
            'edit' => Pages\EditAtasan::route('/{record}/edit'),
        ];
    }
}
