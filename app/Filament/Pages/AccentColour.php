<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use App\Models\Setting;

class AccentColour extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string $view = 'filament.pages.accent-colour';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Colours';

    protected static ?string $title = 'Colours';

    protected $accentColour;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\ColorPicker::make('accentColour')
                    ->default(Setting::where('name','accentColour')->get()->value('value'))
                    ->required(),
                Forms\Components\ColorPicker::make('modifierColour')
                    ->default(Setting::where('name','modifierColour')->get()->value('value'))
                    ->required(),
                Forms\Components\ColorPicker::make('secondaryColour')
                    ->default(Setting::where('name','secondaryColour')->get()->value('value'))
                    ->required(),
                Forms\Components\ColorPicker::make('secondaryModifierColour')
                    ->default(Setting::where('name','secondaryModifierColour')->get()->value('value'))
                    ->required(),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $accentColour = Setting::firstOrNew([
                'name' => 'accentColour'
            ]);
            $accentColour->value = $this->form->getState()['accentColour'];
            $accentColour->save();
            $modifierColour = Setting::firstOrNew([
                'name' => 'modifierColour'
            ]);
            $modifierColour->value = $this->form->getState()['modifierColour'];
            $modifierColour->save();
            $secondaryColour = Setting::firstOrNew([
                'name' => 'secondaryColour'
            ]);
            $secondaryColour->value = $this->form->getState()['secondaryColour'];
            $secondaryColour->save();
            $secondaryModifierColour = Setting::firstOrNew([
                'name' => 'secondaryModifierColour'
            ]);
            $secondaryModifierColour->value = $this->form->getState()['secondaryModifierColour'];
            $secondaryModifierColour->save();
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}
