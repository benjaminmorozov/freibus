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
use App\Models\BasePage;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;

class BasePages extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string $view = 'filament.pages.base-page';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Base Pages';

    protected static ?string $title = 'Base Pages';

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
                ->tabs([
                    Tabs\Tab::make('About')
                        ->schema([
                            Section::make('About')
                                ->description('O nás')
                                ->schema([
                                    Forms\Components\RichEditor::make('aboutText')
                                        ->required()
                                        ->hiddenLabel()
                                        ->default(BasePage::where('name','aboutText')->get()->value('value'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                        ]),
                    Tabs\Tab::make('Terms and conditions')
                        ->schema([
                            Section::make('Terms and conditions')
                                ->description('Všeobecné zmluvné podmienky')
                                ->schema([
                                    Forms\Components\RichEditor::make('termsText')
                                        ->required()
                                        ->hiddenLabel()
                                        ->default(BasePage::where('name','termsText')->get()->value('value'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                        ]),
                    Tabs\Tab::make('Tab 3')
                        ->schema([
                            // ...
                        ]),
                    ]),
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
            $aboutText = BasePage::firstOrNew([
                'name' => 'aboutText'
            ]);
            $aboutText->value = $this->form->getState()['aboutText'];
            $aboutText->save();
            $termsText = BasePage::firstOrNew([
                'name' => 'termsText'
            ]);
            $termsText->value = $this->form->getState()['termsText'];
            $termsText->save();
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}
