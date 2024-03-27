<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('year')
                        ->numeric(),
                    Forms\Components\Select::make('skills')
                        ->relationship('skills', 'name')
                        ->multiple()
                        ->required()
                        ->columnSpanFull()
                        ->createOptionForm([
                            Forms\Components\Section::make()->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('proficiency_level')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Toggle::make('status')
                                    ->required(),
                                Forms\Components\SpatieMediaLibraryFileUpload::make('logo')
                                    ->collection('logo')
                                    ->label('Logo')
                                    ->image()
                                    ->columnSpanFull(),
                            ])->columns(2)
                        ]),
                    Forms\Components\Section::make('Media')
                        ->schema([
                            Forms\Components\SpatieMediaLibraryFileUpload::make('main_image')
                                ->collection('main_image')
                                ->label('Main Image')
                                ->image()
                                ->columnSpanFull(),
                        ])
                        ->collapsible(),
                    Forms\Components\Textarea::make('description')
                        ->columnSpanFull(),
                    Forms\Components\Toggle::make('status')
                        ->required(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('main_image')
                    ->collection('main_image')
                    ->label('Main Image')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('year')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TagsColumn::make('skills.name'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
