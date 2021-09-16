<div>
    <div class="container">
        <div class="col-md-12 mb-3 mt-2 text-center">
            <label>Nama</label>
            <input type="text" wire:model="nama" class="form-control" />
            @error('nama') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
