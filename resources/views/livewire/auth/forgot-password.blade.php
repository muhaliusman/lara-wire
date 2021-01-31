<div>
    <x-title.auth :title="'Forgot Password'" />
    @if (session()->has('unauthenticate'))
        @php
        $message = session('unauthenticate');
        @endphp
        <x-notification.validation-error :message="$message" />
    @endif
    <form wire:submit.prevent="submit">
        <x-form.input-text :type="'email'" :name="'email'" :placeholder="'ex: muh.aliusman@yahoo.co.id'" :label="'E-mail'" />
        <x-button.primary-block :type="'submit'" :label="'Send Link'" />
    </form>
    <hr class="my-8" />
    <x-other.primary-link :label="'Login'" />
</div>
