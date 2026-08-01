<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        /*
         * The manifest only exists after a Vite build, and these assertions
         * are about the markup rather than the bundle, so the tests run
         * on a clean checkout without one.
         */
        $this->withoutVite();
    }

    public function test_the_landing_page_renders(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Just good')
            ->assertSee('Trailhead Labs');
    }

    public function test_it_shows_both_products(): void
    {
        $response = $this->get('/');

        $response->assertSee('Humm')
            ->assertSee('https://hummtuned.app')
            ->assertSee('Devkeepr')
            ->assertSee('https://devkeepr.app');
    }

    public function test_the_work_stage_is_wired_to_the_ambient_blobs(): void
    {
        $response = $this->get('/');

        $response->assertSee('x-data="site"', false)
            ->assertSee('blob-humm')
            ->assertSee('blob-devkeepr')
            ->assertSee("focus = 'humm'", false)
            ->assertSee("focus = 'devkeepr'", false);
    }

    public function test_public_assets_carry_a_cache_busting_stamp(): void
    {
        $this->get('/')
            ->assertSee('/logo.svg?v=', false)
            ->assertSee('/work/humm.webp?v=', false)
            ->assertSee('/work/devkeepr.webp?v=', false);
    }

    public function test_it_serves_without_cookies_or_a_session(): void
    {
        $response = $this->get('/');

        $this->assertEmpty($response->headers->getCookies());
    }
}
