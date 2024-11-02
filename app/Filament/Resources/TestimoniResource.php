<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniResource\Pages;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\File;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_user')
                    ->label('User Name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(50)
                    ->rule('string')
                    ->placeholder('Enter user name')
                    ->autofocus()
                    ->columnSpan(2),

                Forms\Components\FileUpload::make('image_user')
                    ->label('User Image')
                    ->required()
                    ->directory('testimonials/images')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048)
                    ->placeholder('Upload an image'),

                Forms\Components\Textarea::make('review_user')
                    ->label('User Review')
                    ->required()
                    ->maxLength(500)
                    ->placeholder('Write the user’s review here...')
                    ->rows(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_user')->label('User Name'),
                Tables\Columns\ImageColumn::make('image_user')->label('User Image'),
                Tables\Columns\TextColumn::make('review_user')->label('Review')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->date(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListTestimonis::route('/'),
            'create' => Pages\CreateTestimoni::route('/create'),
            'view' => Pages\ViewTestimoni::route('/{record}'),
            'edit' => Pages\EditTestimoni::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
