<?php
namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfile extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.edit-profile';

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $current_password;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),
            Forms\Components\TextInput::make('current_password')
                ->label('Current Password')
                ->password()
                ->requiredWith('password')
                ->nullable(),
            Forms\Components\TextInput::make('password')
                ->label('New Password')
                ->password()
                ->nullable(),
            Forms\Components\TextInput::make('password_confirmation')
                ->label('Confirm Password')
                ->password()
                ->same('password')
                ->nullable(),
        ];
    }

    public function save()
    {
        $user = Auth::user();

        if ($this->password) {
            if (!Hash::check($this->current_password, $user->password)) {
                session()->flash('error', 'Kata sandi saat ini salah.');
                return;
            }

            $user->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Profil berhasil diperbarui!');
    }
}
