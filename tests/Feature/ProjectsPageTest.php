<?php

use App\Models\Project;

it('should display projects page', function () {
    $response = $this->get('/projects');
    $response->assertOk();
});

it('should display projects list', function () {
    $response = $this->get('/projects');
    $response->assertOk();

    $projects = Project::factory()->count(5)->create();

    foreach ($projects as $project) {
        expect($project)
            ->name
            ->toBeString()
            ->toBe($project->name)
            ->and($project)
            ->description
            ->toBeString()
            ->toBe($project->description);
    }
    expect($projects)->toBeInstanceOf(Illuminate\Database\Eloquent\Collection::class);
});

it('should have images', function () {
    $project = Project::factory()->create();
    $images = $project->images()->createMany([
        ['file_name' => 'https://picsum.photos/200/300'],
        ['file_name' => 'https://picsum.photos/200/300'],
        ['file_name' => 'https://picsum.photos/200/300'],
    ]);
    $response = $this->get('/projects');
    $response->assertOk();
    expect($images)->toBeInstanceOf(Illuminate\Database\Eloquent\Collection::class);

    foreach ($images as $image) {
        expect($image)
            ->file_name
            ->toBeString()
            ->toBe($image->file_name);
    }
});
