<x-admin-layout>

    <div class="bg-white shadow rounded-lg p-6">

        <form action="{{route('admin.permissions.store')}}" method="POST">

            @csrf

            <x-validation-errors class="mb-4" />

            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del permiso
                </x-label>
                <x-input class="w-full"
                    name="name"
                    placeholder="Ingrese el nombre del permiso"
                    value="{{old('name')}}" />
            </div>

            <x-button>
                Crear permiso
            </x-button>
        </form>

    </div>

</x-admin-layout>