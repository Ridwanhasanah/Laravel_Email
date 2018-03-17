{{-- 

This is activation blade for mail view and connect to the controller in directory App/Mail/Auth/ActivationEmail.php 
 --}}
@component('mail::message') {{-- Email message --}}
# Avtivation Your Account

Thanks for signing up, please activate your account.

@component('mail::button', ['url' => route('auth.activate',
												[
													'token' => $user->activation_token,
													'email' => $user->email
												]
										   )
							]
		  ) 
{{-- Button Text Email --}}
	Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
