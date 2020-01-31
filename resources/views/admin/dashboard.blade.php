@extends('admin.layouts.app')

@section('title')
    IFC 2019 - Admin Dashboard
@endsection
@section('content')
    <h2 class="content-heading">Dashboard Panitia</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Hal-Hal yang Perlu Diperhatikan
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div id="faq1" role="tablist" aria-multiselectable="true">
                <div class="block block-bordered block-rounded mb-5">
                    <div class="block-header" role="tab" id="faq1_h1">
                        <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1" aria-expanded="true" aria-controls="faq1_q1">1.1 Apabila ada peserta yang mendaftar</a>
                    </div>
                    <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1">
                        <div class="block-content border-t">
                            <ol class="mb-0 mt-0 pt-0 pb-0">
                                <li class=""><p>Buka halaman manajemen peserta.</p></li>
                                <li class=""><p>Klik tombol tambah peserta.</p></li>
                                <li class=""><p>Isikan form sesuai dengan ketentuan berikut:</p></li>
                                <ol class="mb-0 mt-0 pt-0 pb-0">
                                    <li class=""><p>Username berformat "departemen@putra/putri.com". Eg: matematika@putra.com</p></li>
                                    <li class=""><p>Password random minimal 6 karakter. Dicatat untuk diberikan kepada peserta</p></li>
                                </ol>
                                <li class=""><p>Berikan username dan password kepada peserta.</p></li>
                                <li class=""><p>Ingatkan untuk mengumpulkan berkas offline (2 form dan foto 4x6 semua pemain dan official).</p></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Introduction -->

@endsection