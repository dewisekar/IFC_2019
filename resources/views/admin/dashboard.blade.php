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
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="block block-bordered block-rounded mb-5">
                    <div class="block-header" role="tab" id="faq1_h2">
                        <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2" aria-expanded="true" aria-controls="faq1_q2">1.2 The team behind the project</a>
                    </div>
                    <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2">
                        <div class="block-content border-t">
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <a class="block block-link-pop" href="javascript:void(0)">
                                        <div class="block-content block-content-full text-center">
                                            <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                        </div>
                                        <div class="block-content block-content-full bg-body-light text-center">
                                            <div class="font-w600 mb-5">Marie Duncan</div>
                                            <div class="font-size-sm text-muted">Web Designer</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <a class="block block-link-pop" href="javascript:void(0)">
                                        <div class="block-content block-content-full text-center">
                                            <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                        </div>
                                        <div class="block-content block-content-full bg-body-light text-center">
                                            <div class="font-w600 mb-5">Justin Hunt</div>
                                            <div class="font-size-sm text-muted">Web Development</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <a class="block block-link-pop" href="javascript:void(0)">
                                        <div class="block-content block-content-full text-center">
                                            <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                        </div>
                                        <div class="block-content block-content-full bg-body-light text-center">
                                            <div class="font-w600 mb-5">Albert Ray</div>
                                            <div class="font-size-sm text-muted">Photographer</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <a class="block block-link-pop" href="javascript:void(0)">
                                        <div class="block-content block-content-full text-center">
                                            <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                        </div>
                                        <div class="block-content block-content-full bg-body-light text-center">
                                            <div class="font-w600 mb-5">Megan Fuller</div>
                                            <div class="font-size-sm text-muted">Graphic Designer</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-bordered block-rounded mb-5">
                    <div class="block-header" role="tab" id="faq1_h3">
                        <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3" aria-expanded="true" aria-controls="faq1_q3">1.3 What are our values?</a>
                    </div>
                    <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3">
                        <div class="block-content border-t">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </div>
                    </div>
                </div>
                <div class="block block-bordered block-rounded mb-5">
                    <div class="block-header" role="tab" id="faq1_h4">
                        <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q4" aria-expanded="true" aria-controls="faq1_q4">1.4 What are our future plans?</a>
                    </div>
                    <div id="faq1_q4" class="collapse" role="tabpanel" aria-labelledby="faq1_h4">
                        <div class="block-content border-t">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Introduction -->

@endsection