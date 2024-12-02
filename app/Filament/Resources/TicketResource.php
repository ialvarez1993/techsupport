<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Parallax\FilamentComments\Tables\Actions\CommentsAction;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Call')->icon('heroicon-s-phone')
                        ->schema([
                            Section::make('Costumer')
                                ->description('Information given during a call')
                                ->schema([
                                    Forms\Components\Select::make('user_id')
                                        ->relationship('user', 'name')
                                        ->required(),
                                    Forms\Components\TextInput::make('title')
                                        ->required(),
                                    Forms\Components\RichEditor::make('message'),
                                ]),

                            Section::make('Status')
                                ->description('Current state of the ticket')
                                ->schema([
                                    Forms\Components\Select::make('status')->placeholder('Select status')->options(['open' => 'Open', 'attending' => 'Attending', 'canceled' => 'Canceled', 'closed' => 'Closed'])->required(),
                                    Forms\Components\Toggle::make('is_resolved')
                                        ->required(),
                                    Forms\Components\Toggle::make('is_locked')
                                        ->required(),
                                ]),
                        ]),
                    Wizard\Step::make('Schedule')->icon('heroicon-s-calendar')
                        ->schema([
                            Section::make('Schedule')
                                ->description('Information about the assigned technician and the priority it has.')
                                ->schema([
                                    Forms\Components\TextInput::make('assigned_to')->numeric(),
                                    // DateTimePicker::make('scheduled_at'),
                                    Forms\Components\Select::make('priority')->placeholder('Select status')->options(['low' => 'Low', 'medium' => 'Medium', 'high' => 'High', 'critical' => 'Critical'])
                                        ->required(),
                                ]),
                        ]),
                    // Wizard\Step::make('Visit')->icon('heroicon-s-calendar-date-range')
                    //     ->schema([
                    //         Section::make('Time and Place')
                    //             ->description('Description')
                    //             ->schema([
                    //                 // Forms\Components\TextInput::make('latitud')->numeric(),
                    //                 // Forms\Components\TextInput::make('longitud')->numeric(),
                    //                 // DateTimePicker::make('started_at'),
                    //                 // DateTimePicker::make('finished_at'),
                    //             ]),
                    //     ]),
                    // Wizard\Step::make('Diagnosis')->icon('heroicon-o-magnifying-glass')
                    //     ->schema([
                    //         Section::make('Diagnosis')
                    //             ->description('Description')
                    //             ->schema([
                    //                 TextArea::make('diagnosis'),
                    //                 Forms\Components\Toggle::make('is_reparable')
                    //                     ->required(),
                    //                 // Selectable options from company
                    //                 // Forms\Components\Select::make('services')->placeholder('Select service')->options(['repair' => 'Repair', 'replace' => 'Replace Consumable'])->required(),
                    //             ]),
                    //     ]),
                    // Wizard\Step::make('Spare parts')->icon('heroicon-s-document-magnifying-glass')
                    //     ->schema([
                    //         Section::make('Parts')
                    //             ->description('Description')
                    //             ->schema([
                    //                 // Forms\Components\Toggle::make('requieres_parts')->required(),
                    //                 // TextArea::make('part_list'),
                    //                 // Forms\Components\Toggle::make('is_approved')
                    //                 //     ->required(),
                    //             ]),
                    //     ]),
                ]),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('message')
                    ->searchable(),
                Tables\Columns\TextColumn::make('priority')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_resolved')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_locked')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('assigned_to')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                CommentsAction::make(),
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
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
