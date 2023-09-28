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
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;

class Pages extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string $view = 'filament.pages.pages';

    protected static ?string $navigationGroup = 'Static';

    protected static ?string $navigationLabel = 'Pages';

    protected static ?string $title = 'Pages';

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
                    Tabs\Tab::make('O nás')
                        ->schema([
                            Section::make('O nás')
                                ->schema([
                                    Forms\Components\RichEditor::make('aboutText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','about')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                        ]),
                    Tabs\Tab::make('Všeobecné zmluvné podmienky')
                        ->schema([
                            Section::make('Všeobecné zmluvné podmienky')
                                ->schema([
                                    Forms\Components\RichEditor::make('termsText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','termsconditions')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                            Section::make('Prepravný poriadok')
                                ->schema([
                                    Forms\Components\RichEditor::make('poriadokText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','prepravnyporiadok')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                            Section::make('Poistenie CK')
                                ->schema([
                                    Forms\Components\RichEditor::make('poistenieText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','poistenie')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                            Section::make('Storno podmienky')
                                ->schema([
                                    Forms\Components\RichEditor::make('stornoText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','storno')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                        ]),
                    Tabs\Tab::make('Ochrana osobných údajov')
                        ->schema([
                            Section::make('Ochrana osobných údajov')
                                ->schema([
                                    Forms\Components\RichEditor::make('privacyText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','privacypolicy')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
                        ]),
                    Tabs\Tab::make('Zberný dvor')
                        ->schema([
                            Section::make('Zberný dvor')
                                ->schema([
                                    Forms\Components\RichEditor::make('zbernydvorText')
                                        ->hiddenLabel()
                                        ->default(\App\Models\Page::where('slug','zbernydvor')->get()->value('body'))
                                        ->columnSpanFull(),
                                ])->collapsed(),
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
            $aboutText = \App\Models\Page::firstOrNew(['slug' =>  'about']);
            $aboutText->body = $this->form->getState()['aboutText'];
            $aboutText->title = 'O nás';
            $aboutText->save();
            $termsText = \App\Models\Page::firstOrNew(['slug' =>  'termsconditions']);
            $termsText->body = $this->form->getState()['termsText'];
            $termsText->title = 'Všeobecné zmluvné podmienky';
            $termsText->save();
            $poriadokText = \App\Models\Page::firstOrNew(['slug' =>  'prepravnyporiadok']);
            $poriadokText->body = $this->form->getState()['poriadokText'];
            $poriadokText->title = 'Prepravný poriadok';
            $poriadokText->save();
            $poistenieText = \App\Models\Page::firstOrNew(['slug' =>  'poistenie']);
            $poistenieText->body = $this->form->getState()['poistenieText'];
            $poistenieText->title = 'Poistenie CK';
            $poistenieText->save();
            $stornoText = \App\Models\Page::firstOrNew(['slug' =>  'storno']);
            $stornoText->body = $this->form->getState()['stornoText'];
            $stornoText->title = 'Storno podmienky';
            $stornoText->save();
            $privacyText = \App\Models\Page::firstOrNew(['slug' =>  'privacypolicy']);
            $privacyText->body = $this->form->getState()['privacyText'];
            $privacyText->title = 'Ochrana osobných údajov';
            $privacyText->save();
            $zbernydvorText = \App\Models\Page::firstOrNew(['slug' =>  'zbernydvor']);
            $zbernydvorText->body = $this->form->getState()['zbernydvorText'];
            $zbernydvorText->title = 'Zberný dvor';
            $zbernydvorText->save();
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}