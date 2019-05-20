<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Berita</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="<?php echo base_url('admin/news/adding'); ?>" method="POST" role="form">
    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="title1">Judul</label>
        <input type="text" name="title" class="form-control" id="title1" placeholder="Masukkan Judul">
      </div>
      <div class="form-group">
        <div class="box-body">
          <label for="editor1">Isi</label>
            <textarea id="editor1" name="content" rows="10" cols="80"></textarea>
        </div>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>


<!-- CK Editor -->
<script src="<?php echo base_url(); ?>assets/backend/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
