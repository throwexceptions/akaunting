<x-livewire-tables::bs5.table.cell>
    {{ $row->account }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ $row->name }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ strtoupper($row->status) }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ strtoupper($row->type) }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ strtoupper($row->designation) }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ $row->posting_account ? 'YES' : 'NO' }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    {{ str_limit($row->desc, 40) }}
</x-livewire-tables::bs5.table.cell>
<x-livewire-tables::bs5.table.cell>
    <butto class="btn btn-danger btn-sm" wire:click="destroy({{ $row->id }})">Remove</butto>
</x-livewire-tables::bs5.table.cell>
