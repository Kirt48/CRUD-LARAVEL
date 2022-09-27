<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model='nombre'>
    @error('nombre')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Destino</label>
    <input type="text" class="form-control" wire:model='destino'>
    @error('destino')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Descripción</label>
    <textarea class="form-control" wire:model='descripcion'></textarea>
    @error('descripcion')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Lugar de encuentro</label>
    <input type="text" class="form-control" wire:model='lugarEncuentro'>
    @error('lugarEncuentro')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Fecha de partida</label>
    <input type="date" class="form-control" wire:model='fechaPartida'>
    @error('fechaPartida')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Fecha de regreso</label>
    <input type="date" class="form-control" wire:model='fechaRegreso'>
    @error('fechaRegreso')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Cupos</label>
    <input type="number" class="form-control" wire:model='cupos'>
    @error('cupos')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Precio por adulto</label>
    <input type="number" class="form-control" wire:model='precioAdulto'>
    @error('precioAdulto')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Precio por niño</label>
    <input type="number" class="form-control" wire:model='precioNino'>
    @error('precioNino')
        <span>{{ $message }}</span>
    @enderror
</div>