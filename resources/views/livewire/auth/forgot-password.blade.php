<div class="relative h-full w-full">
    <x-loading.full-page :text="'Loading'" wire:target="submit"/>
    <x-title.auth :title="'Forgot Password'" />
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
        <x-button.primary-block :type="'submit'" :label="'Send Link'" />
    </form>
    <hr class="my-8" />
    <x-other.primary-link
        :label="'Login'"
        wire:click.prevent="$emit('changeComponent', 'auth.login')"
		x-on:click="pushStateUrl('auth.login')"
    />
</div>
