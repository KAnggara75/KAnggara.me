<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingTest extends TestCase
{
	public function test_landing()
	{
		$response = $this->get('/');
		$response->assertStatus(200);
		$response->assertSeeText("Kelvin Anggara");
	}
}
