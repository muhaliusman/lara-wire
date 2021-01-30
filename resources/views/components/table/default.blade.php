
<div class="w-full grid grid-cols-2 gap-4 mb-3">
    <div>
        <input
            class="block w-full mt-1 text-sm focus:border-brown-400 focus:outline-none focus:shadow-outline-purple form-input border"
            placeholder="Search"
            wire:model="search"
        />
    </div>
    <div>
        <label class="block text-sm">
            <select
                class="border inline-block float-right mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple w-20"
                wire:model="perPage"
            >
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
                <option>300</option>
            </select>
            <span class="text-gray-700 inline-block w-1/3 float-right text-right pt-3 pr-3">
                Show
            </span>
            </label>
    </div>
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs border">
    <div class="w-full overflow-x-auto relative">
        <x-loading.full-page :text="'Loading'"  wire:target="perPage, gotoPage, search"/>
        <table class="w-full whitespace-no-wrap">
            <thead>
                {{ $header }}
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{ $body }}
            </tbody>
        </table>
    </div>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50">
        {{ $pagination }}
    </div>
</div>