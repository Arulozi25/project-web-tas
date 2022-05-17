<form wire:submit.prevent="store()" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" wire:model="nama" id="nama">
            @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="number" class="form-control" wire:model="harga" id="harga">
            @error('harga') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="liga_id">Kode</label>
            <select id="liga_id" wire:model="liga_id" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Sayuran</option>
                <option value="2">Hewani</option>
            </select>
            @error('liga_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="is_ready">Stock</label>
            <input type="number" class="form-control" wire:model="is_ready" id="is_ready">
            @error('is_ready') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select id="jenis" wire:model="jenis" class="form-control">
                <option selected>Choose...</option>
                <option value="Sayuran">Sayuran</option>
                <option value="Hewani">Hewani</option>
            </select>
            @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="berat">Berat</label>
            <input type="number" class="form-control" wire:model="berat" id="berat">
            @error('berat') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="gambar" class="form-control" wire:model="gambar" id="gambar">
            @error('gambar') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
  <button wire:click.prevent="store()" type="submit" class="btn btn-primary btn-lg">Submit</button>
  <button wire:click="closeModalPopover()" type="submit" class="btn btn-secondary btn-lg">Tutup</button>
</form>
