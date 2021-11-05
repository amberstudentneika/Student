@extends('layouts.app')
<div>
    <div class="flex items-center min-h-screen justify-center bg-blue-300">
      <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
         @if(session('message'))
             <span class="bg-red-200 text-red-900">
                 {{session('message')}}
             </span>
             @endif
          <h3 class="text-2xl font-bold text-center">Login to your account</h3>
          <div class="mt-4 space-y-4">
              <div >
          <label>Email</label>
          <input type="text" wire:model="lvEmail" placeholder="Email@gmail.com" autofocus>
          </div>
          <label>Password</label>
          <input type="password" wire:model="lvPassword" placeholder="">
          <div class="flex items-baseline justify-between">
              <button wire:click="doLogin" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
         <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password</a>
          </div>
          </div>
      </div>
    </div>
</div>
