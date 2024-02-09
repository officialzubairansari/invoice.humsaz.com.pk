<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Create Invoice | Arcotic Solutions Pvt. Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />




</head>

<body dir="rtl">

<div class="auth-page-wrapper pt-5">
    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-body border-bottom border-bottom-dashed p-4">
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <h4>{{ $company_data->company_name_english }}</h4>
                                            <h4>{{ $company_data->number }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                            <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 90px; width: 256px;">
                                                            <img src="{{ asset('assets/images/').$company_data->logo }}" class="img-fluid" alt="logo">
                                            </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <h4>{{ $company_data->company_name_arabic }}</h4>
                                            <h4>{{ $company_data->number }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <input hidden type="text" name="company_id" class="form-control bg-light border-0" value="{{ $company_data->id }}" required />
                                </div>

                                <div class="row mt-5">
                                    <div class="text-center text-decoration-underline">
                                        <h2>بيانات الركاب</h2>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div>
                                        <!-- Bordered Tables -->
                                        <table class="table table-bordered table-nowrap table-responsive">
                                            <thead>
                                            <tr>
                                                <th scope="col">م</th>
                                                <th scope="col">نوع السيارة</th>
                                                <th scope="col">رقم اللوحة</th>
                                                <th scope="col">اسم السائق</th>
                                                <th scope="col">رقم اإلقامة</th>
                                                <th scope="col">رقم الهاتف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input readonly type="text" value="{{ $invoice_data->no_al_sayarah }}" class="form-control bg-light border-0" required /></td>
                                                <td><input readonly type="text" value="{{ $invoice_data->raqam_al_lawha }}" class="form-control bg-light border-0" required /></td>
                                                <td><input readonly type="text" value="{{ $invoice_data->ism_al_saiq }}" class="form-control bg-light border-0" required /></td>
                                                <td><input readonly type="text" value="{{ $invoice_data->raqam_al_iqama }}" class="form-control bg-light border-0" required /></td>
                                                <td><input readonly type="text" value="{{ $invoice_data->raqam_al_hatif }}" class="form-control bg-light border-0" required /></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div>
                                        <!-- Bordered Tables -->
                                        <table class="table table-bordered table-nowrap table-responsive">
                                            <thead>
                                            <tr>
                                                <th scope="col">التاريخ</th>
                                                <th scope="col">المالحظات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input readonly type="text" value="{{ $invoice_data->al_tarekh }}" class="form-control bg-light border-0" required /></td>
                                                <td><input readonly type="text" value="{{ $invoice_data->al_malahizat }}" class="form-control bg-light border-0" required /></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <table class="invoice-table table table-borderless table-nowrap mb-0">
                                        <thead class="align-middle">
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">إسم الضيف</th>
                                            <th scope="col">رقم الجواز</th>
                                            <th scope="col">الجنسیہ</th>
                                        </tr>
                                        </thead>
                                        <tbody id="newlink">
                                            @foreach($passenger_data as $index =>  $passenger)
                                                <tr id="1" class="product">
                                                <th scope="row" class="serial-no">{{ $index + 1 }}</th>
                                                <td><input readonly value="{{ $passenger->ism_al_zaif }}" type="text" class="form-control ism_al_zaif" /></td>
                                                <td><input readonly value="{{ $passenger->raqam_al_jawaz }}" type="text" class="form-control raqam_al_jawaz" /></td>
                                                <td><input readonly value="{{ $passenger->al_jinsiyah }}" type="text" class="form-control al_jinsiyah" /></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

</div>
</body>

</html>
