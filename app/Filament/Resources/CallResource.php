<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallResource\Pages;
use App\Models\Call;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CallResource extends Resource
{
    protected static ?string $model = Call::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('callID')
                    ->numeric(),
                Forms\Components\TextInput::make('subject'),
                Forms\Components\TextInput::make('customer'),
                Forms\Components\TextInput::make('custmrName'),
                Forms\Components\TextInput::make('contctCode')
                    ->numeric(),
                Forms\Components\TextInput::make('manufSN'),
                Forms\Components\TextInput::make('internalSN'),
                Forms\Components\TextInput::make('contractID'),
                Forms\Components\DatePicker::make('cntrctDate'),
                Forms\Components\DatePicker::make('resolDate'),
                Forms\Components\TextInput::make('resolTime')
                    ->numeric(),
                Forms\Components\TextInput::make('free_1'),
                Forms\Components\TextInput::make('free_2'),
                Forms\Components\TextInput::make('origin'),
                Forms\Components\TextInput::make('itemCode'),
                Forms\Components\TextInput::make('itemName'),
                Forms\Components\TextInput::make('itemGroup')
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->numeric(),
                Forms\Components\TextInput::make('priority'),
                Forms\Components\TextInput::make('callType'),
                Forms\Components\TextInput::make('problemTyp'),
                Forms\Components\TextInput::make('assignee')
                    ->numeric(),
                Forms\Components\TextInput::make('descrption'),
                Forms\Components\TextInput::make('objType'),
                Forms\Components\TextInput::make('logInstanc')
                    ->numeric(),
                Forms\Components\TextInput::make('userSign')
                    ->numeric(),
                Forms\Components\DatePicker::make('createDate'),
                Forms\Components\TextInput::make('createTime')
                    ->numeric(),
                Forms\Components\DatePicker::make('closeDate'),
                Forms\Components\TextInput::make('closeTime')
                    ->numeric(),
                Forms\Components\TextInput::make('userSign2')
                    ->numeric(),
                Forms\Components\DatePicker::make('updateDate'),
                Forms\Components\TextInput::make('SCL1Count')
                    ->numeric(),
                Forms\Components\TextInput::make('SCL2Count')
                    ->numeric(),
                Forms\Components\TextInput::make('isEntitled'),
                Forms\Components\TextInput::make('insID'),
                Forms\Components\TextInput::make('technician'),
                Forms\Components\TextInput::make('resolution'),
                Forms\Components\TextInput::make('Scl1NxtLn'),
                Forms\Components\TextInput::make('Scl2NxtLn')
                    ->numeric(),
                Forms\Components\TextInput::make('Sc3NxtLn')
                    ->numeric(),
                Forms\Components\TextInput::make('Scl4NxtLn'),
                Forms\Components\TextInput::make('Scl5NxtLn'),
                Forms\Components\TextInput::make('isQueue'),
                Forms\Components\TextInput::make('Queue'),
                Forms\Components\DatePicker::make('resolOnDat'),
                Forms\Components\TextInput::make('resolOnTim')
                    ->numeric(),
                Forms\Components\DatePicker::make('respByDate'),
                Forms\Components\TextInput::make('respByTime')
                    ->numeric(),
                Forms\Components\DatePicker::make('respOnDate'),
                Forms\Components\TextInput::make('respOnTime')
                    ->numeric(),
                Forms\Components\TextInput::make('respAssign')
                    ->numeric(),
                Forms\Components\DatePicker::make('AssignDate'),
                Forms\Components\TextInput::make('AssignTime')
                    ->numeric(),
                Forms\Components\TextInput::make('UpdateTime')
                    ->numeric(),
                Forms\Components\TextInput::make('responder')
                    ->numeric(),
                Forms\Components\TextInput::make('Transfered'),
                Forms\Components\TextInput::make('Instance')
                    ->numeric(),
                Forms\Components\TextInput::make('DocNum')
                    ->numeric(),
                Forms\Components\TextInput::make('Series')
                    ->numeric(),
                Forms\Components\TextInput::make('Handwrtten'),
                Forms\Components\TextInput::make('PIndicator'),
                Forms\Components\DatePicker::make('StartDate'),
                Forms\Components\TextInput::make('StartTime')
                    ->numeric(),
                Forms\Components\DatePicker::make('EndDate'),
                Forms\Components\TextInput::make('EndTime')
                    ->numeric(),
                Forms\Components\TextInput::make('Duration')
                    ->numeric(),
                Forms\Components\TextInput::make('DurType'),
                Forms\Components\TextInput::make('Reminder'),
                Forms\Components\TextInput::make('RemQty')
                    ->numeric(),
                Forms\Components\TextInput::make('RemType'),
                Forms\Components\DatePicker::make('RemDate'),
                Forms\Components\TextInput::make('RemSent'),
                Forms\Components\TextInput::make('RemTime')
                    ->numeric(),
                Forms\Components\TextInput::make('Location')
                    ->numeric(),
                Forms\Components\TextInput::make('AddrName'),
                Forms\Components\TextInput::make('AddrType'),
                Forms\Components\TextInput::make('Street'),
                Forms\Components\TextInput::make('City'),
                Forms\Components\TextInput::make('Room'),
                Forms\Components\TextInput::make('State'),
                Forms\Components\TextInput::make('Country'),
                Forms\Components\TextInput::make('DisplInCal'),
                Forms\Components\TextInput::make('SupplCode'),
                Forms\Components\TextInput::make('Attachment'),
                Forms\Components\TextInput::make('AtcEntry'),
                Forms\Components\TextInput::make('NumAtCard'),
                Forms\Components\TextInput::make('ProSubType'),
                Forms\Components\TextInput::make('BPType'),
                Forms\Components\TextInput::make('Telephone')
                    ->tel(),
                Forms\Components\TextInput::make('BPPhone1'),
                Forms\Components\TextInput::make('BPPhone2'),
                Forms\Components\TextInput::make('BPCellular'),
                Forms\Components\TextInput::make('BPFax'),
                Forms\Components\TextInput::make('BPShipCode'),
                Forms\Components\TextInput::make('BPShipAddr'),
                Forms\Components\TextInput::make('BPBillCode'),
                Forms\Components\TextInput::make('BPBillAddr'),
                Forms\Components\TextInput::make('BPTerrit'),
                Forms\Components\TextInput::make('BPE_Mail'),
                Forms\Components\TextInput::make('BPProjCode'),
                Forms\Components\TextInput::make('BPContact'),
                Forms\Components\TextInput::make('OwnerCode'),
                Forms\Components\TextInput::make('DPPStatus'),
                Forms\Components\TextInput::make('EncryptIV'),
                Forms\Components\TextInput::make('Printed'),
                Forms\Components\TextInput::make('DataVers')
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('U_DK_NUM_FACT'),
                Forms\Components\DatePicker::make('U_DK_F_COMP'),
                Forms\Components\TextInput::make('U_DK_Modelo'),
                Forms\Components\TextInput::make('U_DK_Marca'),
                Forms\Components\TextInput::make('U_DK_TIPO_ACT'),
                Forms\Components\TextInput::make('U_DK_ST_ACT'),
                Forms\Components\TextInput::make('U_DK_FALLA'),
                Forms\Components\DatePicker::make('U_DK_F_ENVIO_CDD'),
                Forms\Components\DatePicker::make('U_DK_F_CULM_TEC'),
                Forms\Components\DatePicker::make('U_DK_F_ENV_TDA'),
                Forms\Components\DatePicker::make('U_DK_F_ENT_CLI'),
                Forms\Components\TextInput::make('U_DK_TIENDA'),
                Forms\Components\DatePicker::make('U_DK_F_DIAGN'),
                Forms\Components\DatePicker::make('U_DK_F_NOT_CLI'),
                Forms\Components\TextInput::make('U_DK_QUEJA'),
                Forms\Components\TextInput::make('U_DK_DIAS_GEST')
                    ->numeric(),
                Forms\Components\TextInput::make('U_DK_CallType'),
                Forms\Components\TextInput::make('U_DK_ORIGEN'),
                Forms\Components\TextInput::make('U_RMA1'),
                Forms\Components\TextInput::make('U_RMA2'),
                Forms\Components\TextInput::make('U_DUPLICADO'),
                Forms\Components\TextInput::make('U_TEC_Asignado'),
                Forms\Components\TextInput::make('U_F_ENVIO_CDD'),
                Forms\Components\TextInput::make('U_BM_NUMDOC'),
                Forms\Components\TextInput::make('U_BM_SUCDEST'),
                Forms\Components\Toggle::make('is_synced')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('callID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('custmrName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contctCode')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('manufSN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('internalSN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contractID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cntrctDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resolDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resolTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('free_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('free_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('itemCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('itemName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('itemGroup')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('priority')
                    ->searchable(),
                Tables\Columns\TextColumn::make('callType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('problemTyp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('assignee')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('descrption')
                    ->searchable(),
                Tables\Columns\TextColumn::make('objType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logInstanc')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('userSign')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('createDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('createTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('closeDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('closeTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('userSign2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updateDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('SCL1Count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('SCL2Count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('isEntitled')
                    ->searchable(),
                Tables\Columns\TextColumn::make('insID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('technician')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resolution')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Scl1NxtLn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Scl2NxtLn')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Sc3NxtLn')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Scl4NxtLn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Scl5NxtLn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isQueue')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Queue')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resolOnDat')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resolOnTim')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('respByDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('respByTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('respOnDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('respOnTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('respAssign')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('AssignDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('AssignTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('UpdateTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('responder')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Transfered')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Instance')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('DocNum')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Series')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Handwrtten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('PIndicator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('StartDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('StartTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('EndDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('EndTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Duration')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('DurType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Reminder')
                    ->searchable(),
                Tables\Columns\TextColumn::make('RemQty')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('RemType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('RemDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('RemSent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('RemTime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Location')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('AddrName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('AddrType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Street')
                    ->searchable(),
                Tables\Columns\TextColumn::make('City')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Room')
                    ->searchable(),
                Tables\Columns\TextColumn::make('State')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('DisplInCal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('SupplCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Attachment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('AtcEntry')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NumAtCard')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ProSubType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Telephone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPPhone1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPPhone2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPCellular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPFax')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPShipCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPShipAddr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPBillCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPBillAddr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPTerrit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPE_Mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPProjCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BPContact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('OwnerCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('DPPStatus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('EncryptIV')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Printed')
                    ->searchable(),
                Tables\Columns\TextColumn::make('DataVers')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_NUM_FACT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_F_COMP')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_Modelo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_Marca')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_TIPO_ACT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_ST_ACT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_FALLA')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_F_ENVIO_CDD')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_F_CULM_TEC')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_F_ENV_TDA')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_F_ENT_CLI')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_TIENDA')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_F_DIAGN')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_F_NOT_CLI')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_QUEJA')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_DIAS_GEST')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('U_DK_CallType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DK_ORIGEN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_RMA1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_RMA2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_DUPLICADO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_TEC_Asignado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_F_ENVIO_CDD')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_BM_NUMDOC')
                    ->searchable(),
                Tables\Columns\TextColumn::make('U_BM_SUCDEST')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_synced')
                    ->boolean(),
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
            'index' => Pages\ListCalls::route('/'),
            'create' => Pages\CreateCall::route('/create'),
            'edit' => Pages\EditCall::route('/{record}/edit'),
        ];
    }
}
