<?php

it ('should display events page',function (){
    $response= $this->get('/events');
    $response->assertOk();
});
