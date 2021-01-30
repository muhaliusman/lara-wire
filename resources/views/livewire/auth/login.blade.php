<div>
    <x-title.auth :title="'Login'" />
    <form wire:submit.prevent="submit">
        <x-form.input-text :type="'email'" :name="'email'" :placeholder="'ex: muh.aliusman@yahoo.co.id'" :label="'E-mail'" />
        <x-form.input-text :type="'password'" :name="'password'" :placeholder="'*****'" :label="'Password'" />

        <!-- You should use a button here, as the anchor is only used for the example  -->
        <x-button.primary-block :type="'submit'" :label="'Login'" />
    </form>
    <hr class="my-8" />
    <x-other.primary-link :label="'Forgot your password?'" />
</div>
