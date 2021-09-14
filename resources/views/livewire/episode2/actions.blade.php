<div>
    <div class="container">
         <div class="mb-3 text-center mt-3">
            <label>Nama</label>
            <input class="form-control" type="text" wire:model="nama" />
         </div>
        
         <div class="mb-3 text-center mt-3">
            <label>Jurusan</label>
            <select wire:model="jurusan" wire:change="cek_jurusan">
                <option value="kosong">Pilih Jurusan</option>
                <option value="desain grafis">Desain Grafis</option>
                <option value="sistem informasi">Sistem Informasi</option>
            </select>
         </div>
        
        <div class="col text-center">
            <button class="btn btn-primary" wire:click="method_saya">Masuk</button>
        </div>
        
        <pre>
        <?php if(count($data_mahasiswa) > 1){ ?>
            <?php print_r($data_mahasiswa); ?>
        <?php } ?>
        </pre>
        
        {{$jurusan}}
    </div>
</div>
