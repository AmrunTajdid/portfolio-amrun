<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Pastikan halaman utama portofolio dapat diakses dan merender seluruh 9 proyek.
     */
    public function test_portfolio_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Amrun Tajdid, S.T.');
        $response->assertSee('Web Developer &amp; Tech Enthusiast', false);
        
        // 4 Proyek Baru
        $response->assertSee('KeuanganKeluarga');
        $response->assertSee('Hajj Club');
        $response->assertSee('AMANAH');
        $response->assertSee('Maziah Tour &amp; Travel', false);

        // 5 Proyek Eksisting
        $response->assertSee('Sistem Todolist Laravel');
        $response->assertSee('PT Khaira Berkah Mandiri');
        $response->assertSee('KEMENAG Jakarta Timur');
        $response->assertSee('PT Multazam Sinar Surya');
        $response->assertSee('Personal Portfolio Website');

        // Nomor WhatsApp & Aset
        $response->assertSee('6281295340314');
        $response->assertSee('keuangan-keluarga.svg');
        $response->assertSee('hajjclub.webp');
        $response->assertSee('amanah.webp');
        $response->assertSee('maziah.jpg');
    }
}
