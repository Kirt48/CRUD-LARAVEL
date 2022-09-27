<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model='nombre'>
    @error('nombre')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Apellido</label>
    <textarea class="form-control" wire:model='apellido'></textarea>
    @error('apellido')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Documento</label>
    <input type="text" class="form-control" wire:model='documento'>
    @error('documento')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" wire:model='telefono' step=".01">
    @error('telefono')
        <span>{{ $message }}</span>
    @enderror
</div>
