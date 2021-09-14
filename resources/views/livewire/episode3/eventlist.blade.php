<div>
    
    @if (session()->has('berhasil-masuk'))
                <div class="col-md-12 mt-3">
                    <div class="alert alert-success">
                        {{ session('berhasil-masuk') }}
                    </div>
                </div>
    @endif
            
    <div class="container">
        <div class="col-md-12 mt-3 mb-3 text-center">
            <label>Nama</label>
            <input type="text" wire:model="nama" class="form-control" />
        </div>
        
        <div class="col text-center">
            <button class="btn btn-primary" wire:click="$emit('listen1')">Masuk</button>
        </div>
        
        <?php if(count($arr_masuk) > 0){ 
            print_r($arr_masuk);
        }
        ?>
        
    </div>
</div>
