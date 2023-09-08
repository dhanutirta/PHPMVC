
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <?php FLasher::flash(); ?>
            <h3>Daftar Siswa RPL</h3>
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modol">
                    Tambah Siswa
            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                                <input type="hidden" name="id" >
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                                </div>

                                <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="laki-laki">Laki - laki</option>
                                        <option value="perempuan">Perempuan</option>
                                </select>
                                </div>

                                <div class="form-group">
                                <label for="alamat" >Alamat</label>
                                <input type="text" class="form-control"  id="alamat" name="alamat" autocomplete="off">
                                </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                                Close
                                </button> <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>


 <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Nama</center></th>
                    <th scope="col"><center>Aksi</center></th>
                    </tr>
                </thead>
                
                <?php $id = 1;?>
                <tbody>
                    
                    <?php foreach($data['nama'] as $blog) :?>
                    <tr>
                    <th scope="row"><center><?= $id++; ?></center></th>
                    <td><center><?= $blog['nama']?></center></td>
                    <td>
                        <center>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#moll<?=$blog['id']?>">
                            Detail
                        </button>

                            <!-- Modal -->
                            <div class="modal fade" id="moll<?=$blog['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/siswa/ubah" method="post">
                                <input type="hidden" name="id" value="<?=$blog["id"]?>">
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $blog['nama']?>" name="nama" readonly>
                                </div>

                                <div class="form-group">
                                <label for="nama">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="nama" value="<?= $blog['jenis_kelamin']?>" name="nama" readonly>
                                </div>

                                

                                <div class="form-group">
                                <label for="alamat" >Alamat</label>
                                <input type="text" class="form-control" value="<?= $blog['alamat']?>" id="alamat" name="alamat" readonly>
                                </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                                Close
                                </div>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#exampleModal<?=$blog['id']?>">
                            Ubah
                        </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?=$blog['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/siswa/ubah" method="post">
                                <input type="hidden" name="id" value="<?=$blog["id"]?>">
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $blog['nama']?>" name="nama" autocomplete="off">
                                </div>

                                <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <?php if($blog['jenis_kelamin'] == "laki-laki") :?>
                                        <option value="laki-laki" selected>Laki - laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    <?php else:?>
                                        <option value="laki-laki">Laki - laki</option>
                                        <option value="perempuan" selected>Perempuan</option>
                                    <?php endif ?>        
                                </select>
                                </div>

                                <div class="form-group">
                                <label for="alamat" >Alamat</label>
                                <input type="text" class="form-control" value="<?= $blog['alamat']?>" id="alamat" name="alamat" autocomplete="off">
                                </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                                Close
                                </button> <button type="submit" class="btn btn-primary">Ubah Data</button>
                                </div>
                                </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>

                            <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $blog['id']?> " onclick="return confirm('Yakin?');" class="btn btn-danger mr-2">hapus</a>

                                            
                    </td>
                    </tr>
                   
                    
                    <?php endforeach?>
                </tbody>
</table>
            
        </div>
    </div>
</div>