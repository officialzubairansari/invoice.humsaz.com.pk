<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Create Invoice | Arcotic Solutions Pvt. Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


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
                            <form class="needs-validation" action="{{ route('pdf') }}" method="post">
                                @csrf
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
                                                    <td><input type="text" name="no_al_sayarah" class="form-control bg-light border-0" required /></td>
                                                    <td><input type="text" name="raqam_al_lawha" class="form-control bg-light border-0" required /></td>
                                                    <td><input type="text" name="ism_al_saiq" class="form-control bg-light border-0" required /></td>
                                                    <td><input type="text" name="raqam_al_iqama" class="form-control bg-light border-0" required /></td>
                                                    <td><input type="text" name="raqam_al_hatif" class="form-control bg-light border-0" required /></td>
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
                                                    <td><input type="date" name="al_tarekh" class="form-control bg-light border-0" required /></td>
                                                    <td><input type="text" name="al_malahizat" class="form-control bg-light border-0" required /></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <a href="#" id="add-item" class="btn btn-success rounded-pill mb-2">Add New Passenger</a>
                                        <table class="invoice-table table table-borderless table-nowrap mb-0">
                                            <thead class="align-middle">
                                            <tr class="table-active">
                                                <th scope="col" style="width: 50px;">#</th>
                                                <th scope="col">إسم الضيف</th>
                                                <th scope="col">رقم الجواز</th>
                                                <th scope="col">الجنسیہ</th>
                                                <th scope="col"></th><!-- Empty header cell for the remove button -->
                                            </tr>
                                            </thead>
                                            <tbody id="newlink">
                                            <tr id="1" class="product">
                                                <th scope="row" class="serial-no">1</th>
                                                <td><input name="ism_al_zaif[]" value="" type="text" class="form-control ism_al_zaif" /></td>
                                                <td><input name="raqam_al_jawaz[]" value="" type="text" class="form-control raqam_al_jawaz" /></td>
                                                <td><input name="al_jinsiyah[]" value="" type="text" class="form-control al_jinsiyah" /></td>
                                                <td>
                                                    <a href="#" class="btn btn-danger rounded-pill remove-row">Remove</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <!--end row-->
                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                        <button type="submit" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download PDF Invoice</button>
                                    </div>
                                </div>
                            </form>
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
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Choices.js -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script>
    $(document).ready(function () {
        let rowCount = $('#newlink tr').length; // Initialize the row count

        $('#add-item').click(function (e) {
            e.preventDefault();
            new_link();
        });

        function new_link() {
            // Get the table body where you want to add the new row
            const tableBody = $('#newlink');

            // Create a new row
            const newRow = $('<tr>').addClass('product');

            // Define the HTML content for the new row
            newRow.html(`
                <th scope="row" class="serial-no">${rowCount + 1}</th>
                <td><input name="ism_al_zaif[]" value="" type="number" class="form-control ism_al_zaif" /></td>
                <td><input name="raqam_al_jawaz[]" value="" type="number" class="form-control raqam_al_jawaz" /></td>
                <td><input name="al_jinsiyah[]" value="" type="number" class="form-control al_jinsiyah" /></td>
                <td>
                    <a href="#" class="btn btn-danger rounded-pill remove-row">Remove</a>
                </td>
            `);

            tableBody.append(newRow);
            rowCount++;
        }

        $(document).on('click', '.remove-row', function (e) {
            e.preventDefault();
            $(this).closest('tr').remove();
            updateSerialNumbers();
            rowCount--;
        });

        function updateSerialNumbers() {
            $('#newlink tr').each(function (index) {
                $(this).find('.serial-no').text(index + 1);
            });
        }
    });
</script>
</body>

</html>
