<div>
    <div class="container">
            
        <div class="col-md-12 mt-2 mb-2">
            <div class="row">
                <div class="col-md-6">
                    <label>Nama</label>
                    <input type="text" class="form-control" wire:model.lazy="nama" />
                </div>
                
                <div class="col-md-6">
                    <label>Umur</label>
                    <input type="number" class="form-control" wire:model.lazy="umur" />
                </div>
            </div>
        </div>
        
        <div class="col text-center">
            <button class="btn btn-primary" wire:click="masuk_data">Masuk</button>
        </div>
        
        <div class="col-md-6 mx-auto mt-2" wire:poll='meth'>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php if(count($tampil_data) > 0){
                        foreach($tampil_data as $k => $val){
                    ?>
                    <tr>
                        <td>{{$val['nama']}}</td>
                        <td>{{$val['umur']}}</td>
                    </tr>
                <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
