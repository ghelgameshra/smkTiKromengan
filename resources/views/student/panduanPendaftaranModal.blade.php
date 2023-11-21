<!-- Modal -->
<div class="modal fade" id="panduanPendaftaranModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Panduan Pendaftaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex row">
          <h6 class="fw-bold">Pembuatan Akun</h6>
          <small class="-mt-5">Silahkan membuat akun pada halaman <a href="/register">Pendaftaran</a>. Akun ini digunakan calon siswa untuk upload berkas-berkas dan informasi penting lainnya.</small>
        </div>
        <hr>

        <div class="d-flex row">
          <h6 class="fw-bold">Persiapan Berkas</h6>
          <small class="-mt-5">Silahkan Downlad <a href="https://play.google.com/store/apps/details?id=com.intsig.camscanner&pcampaignid=web_share">Camscanner</a> atau <a href="https://play.google.com/store/apps/details?id=com.voyagerx.scanner&pcampaignid=web_share">vFlat</a> pada Playstore</small>
        </div>
        <ul>
          <li style="list-style: none;">1. Scan Kartu Keluarga</li>
          <li style="list-style: none;">2. Scan Akta Kelahiran</li>
          <li style="list-style: none;">3. Scan Ijazah Terakhir (optional)</li>
          <li style="list-style: none;">4. Scan Surat Keterangan Lulus (optional)</li>
          <li style="list-style: none;">5. Scan Surat Keterangan Tidak Mampu (optional)</li>
          <li style="list-style: none;">6. Scan KTP Ayah</li>
          <li style="list-style: none;">7. Scan KTP Ibu</li>
          <li style="list-style: none;">8. Scan KTP Wali (optional)</li>
        </ul>
        <hr>

        <div class="d-flex row">
          <h6 class="fw-bold">Catatan</h6>
          <small class="-mt-5">Jika terdapat kendala terkait berkas silahkan datang langsung ke gedung {{ $sekolah->name }} dengan membawa semua berkas-berkas yang dibutuhkan dalam map snail warna putih atau hubungi <button type="button" class="fw-bold" style="text-decoration: none; border: none; background: inherit">Contact Person</button> kami.</small>
        </div>
        <hr>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
