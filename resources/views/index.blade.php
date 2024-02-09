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
                            <div class="card-body border-bottom border-bottom-dashed p-4">
                                <div class="row text-center">
                                    <h3>Companies</h3>
                                </div>
                                <div class="row">
                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                        <a href="{{ route('company', ['id' => 1]) }}" class="btn btn-success"><i class="ri-taxi-fill align-bottom me-1"></i> Talab Al Aali</a>
                                    </div>
                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                        <a href="{{ route('company', ['id' => 2]) }}" class="btn btn-success"><i class="ri-taxi-fill align-bottom me-1"></i> Alhafiz VIP Transport</a>
                                    </div>
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
