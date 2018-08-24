<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class GitAuthController extends Controller
{
	public function redirectToProviderBitbucket(){ return \Laravel\Socialite\Facades\Socialite::driver('bitbucket')->redirect(); }
public function handleProviderCallback(Request $request){
    
$user = \Laravel\Socialite\Facades\Socialite::driver('bitbucket')->user();
return $user->token;
}
}