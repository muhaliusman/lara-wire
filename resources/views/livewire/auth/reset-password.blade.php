<div class="relative h-full w-full">
    <x-loading.full-page :text="'Loading'" wire:target="submit"/>
    <x-title.auth :title="'Reset Password'" />
    @if (session()->has('error'))
        @php
        $message = session('error');
        @endphp
        <x-notification.validation-error :message="$message" />
    @endif
    @if (session()->has('success'))
        @php
        $message = session('success');
        @endphp
        <x-notification.validation-success :message="$message" />
    @endif
    <form wire:submit.prevent="submit">
        <x-form.input-text :type="'hidden'" :name="'email'" />
        <x-form.input-text :type="'hidden'" :name="'token'" />
        <x-form.input-text :type="'password'" :name="'password'" :placeholder="'*****'" :label="'New Password'" />
        <x-form.input-text :type="'password'" :name="'password_confirmation'" :placeholder="'*****'" :label="'Password Confirmation'" />
        <x-button.primary-block :type="'submit'" :label="'Reset Password'" />
    </form>
    <hr class="my-8" />
    <x-other.primary-link
        :label="'Login'"
        wire:click.prevent="$emit('changeComponent', 'auth.login')"
		x-on:click="pushStateUrl('auth.login')"
    />
</div>
