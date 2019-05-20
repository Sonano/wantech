<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Berita</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tNews" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>Author</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal Post</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <?php $i = 1; if (count($getNews)>0) {
         foreach ($getNews as $row) {  ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo word_limiter(htmlentities($row['content']),6); ?></td>
          <td><?php echo $row['post_time']; ?></td>
          <td>
            <div class="hidden-sm hidden-xs btn-group">
              <a href="<?php echo base_url('admin/news/update/'.$row['news_id']); ?>" class="btn btn-xs btn-info">
                <i class="ace-icon fa fa-pencil bigger-120"></i>
              </a>

              <a href="javascript:if(confirm('Apakah Anda Yakin Ingin Menghapus?')){document.location='<?php echo base_url('admin/news/delete/'.$row['news_id'])?>'}" class="btn btn-xs btn-danger">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
              </a>
            </div>
          </td>
        </tr>
        <?php }} ?>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>


<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/backend/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#tNews').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
