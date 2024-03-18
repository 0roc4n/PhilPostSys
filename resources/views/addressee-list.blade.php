<x-app-layout>
<div class="mt-3 sm:ml-4 lg:mx-3">
    <div class="row lg:ml-3">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('addressee.show-addressee')
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>