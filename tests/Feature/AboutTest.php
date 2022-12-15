<?php

it("should display about page", function () {
    $response = $this->get('/about');
    $response->assertOk();
});
