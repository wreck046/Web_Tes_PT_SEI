<?php echo form_open('proyek/create'); ?>
    <label for="namaProyek">Nama Proyek</label>
    <input type="text" name="namaProyek">
    
    <label for="lokasi">Lokasi</label>
    <select name="lokasi">
        <?php foreach ($lokasi['data'] as $l): ?>
            <option value="<?php echo $l['id']; ?>"><?php echo $l['namaLokasi']; ?></option>
        <?php endforeach; ?>
    </select>
    
    <input type="submit" value="Simpan">
</form>
