<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_report_form_and_report_list_are_accessible(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Documentation');

        $this->get(route('laporan.form'))
            ->assertOk()
            ->assertSee('Laporkan Kejadian Banjir');

        $this->get(route('laporan.index'))
            ->assertOk()
            ->assertSee('Rina Amelia')
            ->assertSee('Waspada')
            ->assertSee('Siaga')
            ->assertSee('Awas');
    }

    public function test_valid_report_is_shown_on_confirmation_page(): void
    {
        $this->post(route('laporan.store'), [
            'nama' => 'Budi Santoso',
            'lokasi' => 'Desa Sukamaju',
            'tinggi' => 45,
        ])
            ->assertOk()
            ->assertSee('Laporan berhasil dikirim')
            ->assertSee('Budi Santoso')
            ->assertSee('Desa Sukamaju')
            ->assertSee('45 cm');
    }

    public function test_report_requires_all_fields(): void
    {
        $this->from(route('laporan.form'))
            ->post(route('laporan.store'), [])
            ->assertRedirect(route('laporan.form'))
            ->assertSessionHasErrors(['nama', 'lokasi', 'tinggi']);
    }
}
