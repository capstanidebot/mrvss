<?php

Route::get('login/bitbucket', 'GitAuthController@redirectToProviderBitbucket');
Route::get('login/bitbucket/callback', 'GitAuthController@handleProviderCallback');