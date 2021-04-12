<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;

class CreateContact extends Component
{
    public $nama, $judul, $email, $pesan;

    protected $rules = [
        'nama' => 'required',
        'email' => 'required|email:rfc',
        'judul' => 'required',
        'pesan' => 'required'
    ];

    public function store(){
        $this->validate();

        $save = Kontak::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'judul' => $this->judul,
            'pesan' => $this->pesan
        ]);

        if(!$save) {
            return session()->flash('error', 'Pesan gagal dikirim!');
        }
        session()->flash('success', 'Pesan berhasil dikirim!');
        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.create-contact');
    }

    public function resetForm(){
        $this->nama = '';
        $this->email = '';
        $this->judul = '';
        $this->pesan = '';
    }
}
