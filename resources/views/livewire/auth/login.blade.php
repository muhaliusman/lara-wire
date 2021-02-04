<div>
    <x-title.auth :title="'Login'" />
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
        <x-form.input-text :type="'email'" :name="'email'" placeholder="ex: muh.aliusman@yahoo.co.id" :label="'E-mail'" />
        <x-form.input-text :type="'password'" :name="'password'" placeholder="*****" :label="'Password'" />
        <x-button.primary-block :type="'submit'" :label="'Login'" />
    </form>
    <hr class="my-8" />
    <x-other.primary-link
        :label="'Forgot your password?'"
        wire:click.prevent="$emit('changeComponent', 'auth.forgot-password')"
		x-on:click="pushStateUrl('auth.forgot-password')"
    />
</div>
