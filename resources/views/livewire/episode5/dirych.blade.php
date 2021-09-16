<div>
    <div class="container">
        <div class="col-md-12 mt-2 mb-2">
            <label>Nama</label>
            <input type="text" wire:dirty.class="border border-danger" class="form-control" wire:model.lazy="nama" />
        </div>
        
        <div class="col-md-12 mt-2 mb-2">
            <div class="row">
                <div class="col-md-6">
                    <label>Umur</label>
                    <input type="number" wire:dirty.class="text-warning" class="form-control" wire:model.lazy="umur" />
                </div>
                
                <div class="col-md-6">
                    <label>Alamat</label>
                    <input type="text" wire:dirty.class="text-success" class="form-control" wire:model.lazy="alamat" />
                </div>
            </div>
        </div>
    </div>
</div>
