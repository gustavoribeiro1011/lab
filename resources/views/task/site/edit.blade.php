<x-task.layout>
    <x-slot name="titulo">Editar</x-slot>
    <x-slot name="titulo_secao">Editar</x-slot>

    <x-task.edit :id="$task['id']" />
</x-task.layout>
