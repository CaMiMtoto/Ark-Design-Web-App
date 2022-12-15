<?php


use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Team;

it('can display the homepage', function () {
    $response = $this->get('/');
    $response->assertOk();
});

it("should display service types on the homepage", function () {

    // prepare
    $serviceType = ServiceType::factory()->create();

    // act
    $response = $this->get('/');

    // assert
    $response->assertOk();
    expect($serviceType)
        ->name
        ->toBeString()
        ->toBe($serviceType->name);
});

it("should display services on the homepage", function () {
    $service = Service::factory()->create();

    $response = $this->get('/');

    $response->assertOk();

    expect($service)
        ->name
        ->toBeString()
        ->toBe($service->name)
        ->and($service)
        ->service_type_id
        ->toBeInt();

});

it("should display team members on homepage", function () {
    $team = Team::factory()->create();

    $response = $this->get('/');

    $response->assertOk();

    expect($team)
        ->name
        ->toBeString()
        ->toBe($team->name)
        ->and($team)
        ->position
        ->toBeString()
        ->toBe($team->position)
        ->and($team)
        ->image
        ->toBeString()
        ->toBe($team->image);
});
