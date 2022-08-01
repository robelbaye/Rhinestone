<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventious Disclosure Tools</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendors/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendors/fontawesome/css/fontawesome.min.css" type="text/css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/horizontal-layout-light/style.css">
    <link rel="stylesheet" href="../../../../css/bs_fix.css">
    <link rel="stylesheet" href="../../css/intlTelInput.css">
    <link rel="stylesheet" href="../../../../css/style.css">
    <link rel="stylesheet" href="../../../../css/nucleo-icons.css">
    <link rel="stylesheet" href="../../../../css/nucleo-svg.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>

<body>
    <div class="container-scroller">
        @include('sweetalert::alert')
        @include('portal.layouts.horizontal-menu')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('portal.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="../../assets/js/jquery-3.5.1.js"></script>
    <script src="../../assets/js/bootstrap3-typeahead.min.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../js/customchart.js"></script>
    <script src="../../js/popper.min.js"></script>
    <!-- <script src="../../../../js/style.js"></script> -->
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- plugin js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/data-table.js"></script>
    <!-- End custom js for this page-->
    <script src="../../js/intlTelInput.js"></script>
    <script src="../../js/intlTelInput-jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('#rocountry_name').keyup(function(){
                var country = $(this).val();
                if(country != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{country:country, _token:_token},
                        success:function(data){
                            $('#rocountryList').fadeIn();
                            $('#rocountryList').html(data);
                        }
                    });
                }
            });
// Devro Inventor Starts Hear
            $('#InvestorLastName').keyup(function(){
                var inventorname = $(this).val();
                if(inventorname != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorname:inventorname, _token:_token},
                        success:function(data){
                            $('#InvestorLastNameList').fadeIn();
                            $('#InvestorLastNameList').html(data);
                        }
                    });
                }
            });

            $('#InvestorGivenName').keyup(function(){
                var inventorgiven = $(this).val();
                if(inventorgiven != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorgiven:inventorgiven, _token:_token},
                        success:function(data){
                            $('#InvestorGivenNameList').fadeIn();
                            $('#InvestorGivenNameList').html(data);
                        }
                    });
                }
            });

            $('#phone').keyup(function(){
                var inventorphone = $(this).val();
                if(inventorphone != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorphone:inventorphone, _token:_token},
                        success:function(data){
                            $('#InvestorPhoneList').fadeIn();
                            $('#InvestorPhoneList').html(data);
                        }
                    });
                }
            });

            $('#InvestorEmail').keyup(function(){
                var inventoremail = $(this).val();
                if(inventoremail != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventoremail:inventoremail, _token:_token},
                        success:function(data){
                            $('#InvestorEmailList').fadeIn();
                            $('#InvestorEmailList').html(data);
                        }
                    });
                }
            });

            $('#Contractor').keyup(function(){
                var inventorcontractor = $(this).val();
                if(inventorcontractor != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorcontractor:inventorcontractor, _token:_token},
                        success:function(data){
                            $('#ContractorList').fadeIn();
                            $('#ContractorList').html(data);
                        }
                    });
                }
            });

            $('#ContractorType').keyup(function(){
                var inventorcontractortype = $(this).val();
                if(inventorcontractortype != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorcontractortype:inventorcontractortype, _token:_token},
                        success:function(data){
                            $('#ContractorTypeList').fadeIn();
                            $('#ContractorTypeList').html(data);
                        }
                    });
                }
            });

            $('#Home').keyup(function(){
                var inventorhome = $(this).val();
                if(inventorhome != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorhome:inventorhome, _token:_token},
                        success:function(data){
                            $('#HomeList').fadeIn();
                            $('#HomeList').html(data);
                        }
                    });
                }
            });

            $('#Zip_Code').keyup(function(){
                var inventorzip_code = $(this).val();
                if(inventorzip_code != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventorzip_code:inventorzip_code, _token:_token},
                        success:function(data){
                            $('#Zip_CodeList').fadeIn();
                            $('#Zip_CodeList').html(data);
                        }
                    });
                }
            });

            $('#Employer_Name').keyup(function(){
                var inventoremplyeename = $(this).val();
                if(inventoremplyeename != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventoremplyeename:inventoremplyeename, _token:_token},
                        success:function(data){
                            $('#Employer_NameList').fadeIn();
                            $('#Employer_NameList').html(data);
                        }
                    });
                }
            });

            $('#Employer_Address').keyup(function(){
                var inventoremplyeeaddress = $(this).val();
                if(inventoremplyeeaddress != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventoremplyeeaddress:inventoremplyeeaddress, _token:_token},
                        success:function(data){
                            $('#Employer_AddressList').fadeIn();
                            $('#Employer_AddressList').html(data);
                        }
                    });
                }
            });

            $('#invEmail_of_Future_Contact').keyup(function(){
                var inventoremailoffuture = $(this).val();
                if(inventoremailoffuture != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{inventoremailoffuture:inventoremailoffuture, _token:_token},
                        success:function(data){
                            $('#invEmail_of_Future_ContactList').fadeIn();
                            $('#invEmail_of_Future_ContactList').html(data);
                        }
                    });
                }
            });
// Devro Inventor Ends Hear

// Devro Applicant Starts Hear
            $('#applicant_ID').keyup(function(){
                var applicantid = $(this).val();
                if(applicantid != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{applicantid:applicantid, _token:_token},
                        success:function(data){
                            $('#applicant_IDList').fadeIn();
                            $('#applicant_IDList').html(data);
                        }
                    });
                }
            }); 

            $('#applicant_name').keyup(function(){
                var applicantname = $(this).val();
                if(applicantname != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{applicantname:applicantname, _token:_token},
                        success:function(data){
                            $('#applicant_nameList').fadeIn();
                            $('#applicant_nameList').html(data);
                        }
                    });
                }
            }); 

            $('#applicant_address').keyup(function(){
                var applicantaddress = $(this).val();
                if(applicantaddress != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{applicantaddress:applicantaddress, _token:_token},
                        success:function(data){
                            $('#applicant_addressList').fadeIn();
                            $('#applicant_addressList').html(data);
                        }
                    });
                }
            }); 

            $('#applicant_phone').keyup(function(){
                var applicantphone = $(this).val();
                if(applicantphone != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{applicantphone:applicantphone, _token:_token},
                        success:function(data){
                            $('#applicant_phoneList').fadeIn();
                            $('#applicant_phoneList').html(data);
                        }
                    });
                }
            }); 

            $('#applicant_email').keyup(function(){
                var applicantemail = $(this).val();
                if(applicantemail != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{applicantemail:applicantemail, _token:_token},
                        success:function(data){
                            $('#applicant_emailList').fadeIn();
                            $('#applicant_emailList').html(data);
                        }
                    });
                }
            }); 
// Devro Applicant Ends Hear

// Devro Licensee Starts Hear
            $('#Licensee_ID').keyup(function(){
                var licenseeid = $(this).val();
                if(licenseeid != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licenseeid:licenseeid, _token:_token},
                        success:function(data){
                            $('#Licensee_IDList').fadeIn();
                            $('#Licensee_IDList').html(data);
                        }
                    });
                }
            }); 

            $('#Licensee_Name').keyup(function(){
                var licenseename = $(this).val();
                if(licenseename != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licenseename:licenseename, _token:_token},
                        success:function(data){
                            $('#Licensee_NameList').fadeIn();
                            $('#Licensee_NameList').html(data);
                        }
                    });
                }
            }); 

            $('#Licensee_Address').keyup(function(){
                var licenseeaddress = $(this).val();
                if(licenseeaddress != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licenseeaddress:licenseeaddress, _token:_token},
                        success:function(data){
                            $('#Licensee_AddressList').fadeIn();
                            $('#Licensee_AddressList').html(data);
                        }
                    });
                }
            }); 

            $('#Licensee_Email').keyup(function(){
                var licenseeemail = $(this).val();
                if(licenseeemail != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licenseeemail:licenseeemail, _token:_token},
                        success:function(data){
                            $('#Licensee_EmailList').fadeIn();
                            $('#Licensee_EmailList').html(data);
                        }
                    });
                }
            }); 
// Devro Licensee Ends Hear

// Devro Licensor Starts Hear
            $('#Licensor_ID').keyup(function(){
                var licensorid = $(this).val();
                if(licensorid != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorid:licensorid, _token:_token},
                        success:function(data){
                            $('#Licensor_IDList').fadeIn();
                            $('#Licensor_IDList').html(data);
                        }
                    });
                }
            }); 

            $('#Last_Name').keyup(function(){
                var licensorlastname = $(this).val();
                if(licensorlastname != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorlastname:licensorlastname, _token:_token},
                        success:function(data){
                            $('#Last_NameList').fadeIn();
                            $('#Last_NameList').html(data);
                        }
                    });
                }
            }); 

            $('#Given_Name').keyup(function(){
                var licensorgivenname = $(this).val();
                if(licensorgivenname != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorgivenname:licensorgivenname, _token:_token},
                        success:function(data){
                            $('#Given_NameList').fadeIn();
                            $('#Given_NameList').html(data);
                        }
                    });
                }
            }); 

            $('#Home_Address').keyup(function(){
                var licensorhomeaddress = $(this).val();
                if(licensorhomeaddress != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorhomeaddress:licensorhomeaddress, _token:_token},
                        success:function(data){
                            $('#Home_AddressList').fadeIn();
                            $('#Home_AddressList').html(data);
                        }
                    });
                }
            }); 

            $('#Employer').keyup(function(){
                var licensoremployer = $(this).val();
                if(licensoremployer != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensoremployer:licensoremployer, _token:_token},
                        success:function(data){
                            $('#EmployerList').fadeIn();
                            $('#EmployerList').html(data);
                        }
                    });
                }
            }); 

            $('#Contractor').keyup(function(){
                var licensorcontractor = $(this).val();
                if(licensorcontractor != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorcontractor:licensorcontractor, _token:_token},
                        success:function(data){
                            $('#ContractorList').fadeIn();
                            $('#ContractorList').html(data);
                        }
                    });
                }
            }); 

            $('#ContractorType').keyup(function(){
                var licensorcontractortype = $(this).val();
                if(licensorcontractortype != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensorcontractortype:licensorcontractortype, _token:_token},
                        success:function(data){
                            $('#ContractorTypeList').fadeIn();
                            $('#ContractorTypeList').html(data);
                        }
                    });
                }
            }); 

            $('#liseEmail_of_Future_Contact').keyup(function(){
                var licensoremailoffuture = $(this).val();
                if(licensoremailoffuture != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{licensoremailoffuture:licensoremailoffuture, _token:_token},
                        success:function(data){
                            $('#liseEmail_of_Future_ContactList').fadeIn();
                            $('#liseEmail_of_Future_ContactList').html(data);
                        }
                    });
                }
            }); 
// Devro Licensor Ends Hear

// Devro Agent Starts Hear
            $('#agent_name').keyup(function(){
                var agentname = $(this).val();
                if(agentname != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentname:agentname, _token:_token},
                        success:function(data){
                            $('#agent_nameList').fadeIn();
                            $('#agent_nameList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_address').keyup(function(){
                var agentaddress = $(this).val();
                if(agentaddress != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentaddress:agentaddress, _token:_token},
                        success:function(data){
                            $('#agent_addressList').fadeIn();
                            $('#agent_addressList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_contact_person').keyup(function(){
                var agentcontactperson = $(this).val();
                if(agentcontactperson != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentcontactperson:agentcontactperson, _token:_token},
                        success:function(data){
                            $('#agent_contact_personList').fadeIn();
                            $('#agent_contact_personList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_email').keyup(function(){
                var agentemail = $(this).val();
                if(agentemail != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentemail:agentemail, _token:_token},
                        success:function(data){
                            $('#agent_emailList').fadeIn();
                            $('#agent_emailList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_fax_number').keyup(function(){
                var agentfax = $(this).val();
                if(agentfax != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentfax:agentfax, _token:_token},
                        success:function(data){
                            $('#agent_fax_numberList').fadeIn();
                            $('#agent_fax_numberList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_office_phone').keyup(function(){
                var agentofficephone = $(this).val();
                if(agentofficephone != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentofficephone:agentofficephone, _token:_token},
                        success:function(data){
                            $('#agent_office_phoneList').fadeIn();
                            $('#agent_office_phoneList').html(data);
                        }
                    });
                }
            }); 

            $('#agent_future_email').keyup(function(){
                var agentfutureemail = $(this).val();
                if(agentfutureemail != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autofill.fetch') }}",
                        method:"POST",
                        data:{agentfutureemail:agentfutureemail, _token:_token},
                        success:function(data){
                            $('#agent_future_emailList').fadeIn();
                            $('#agent_future_emailList').html(data);
                        }
                    });
                }
            }); 
// Devro Agent Ends Hear
            $(document).on('click', 'li', function(){
                $('#InvestorLastName').val($('#invInvestorLastName').text());
                $('#InvestorLastNameList').fadeOut();
                $('#InvestorGivenName').val($('#invInvestorGivenName').text());
                $('#InvestorGivenNameList').fadeOut();
                $('#phone').val($('#invInvestorPhone').text());
                $('#InvestorPhoneList').fadeOut();
                $('#InvestorEmail').val($('#invInvestorEmail').text());
                $('#InvestorEmailList').fadeOut();
                $('#Contractor').val($('#invContractor').text());
                $('#ContractorList').fadeOut();
                $('#ContractorType').val($('#invContractorType').text());
                $('#ContractorTypeList').fadeOut();
                $('#Home').val($('#invHome').text());
                $('#HomeList').fadeOut();
                $('#Zip_Code').val($('#invZip_Code').text());
                $('#Zip_CodeList').fadeOut();
                $('#Employer_Name').val($('#invEmployer_Name').text());
                $('#Employer_NameList').fadeOut();
                $('#Employer_Address').val($('#invEmployer_Address').text());
                $('#Employer_AddressList').fadeOut();
                $('#invEmail_of_Future_Contact').val($('#invEmail_of_Future_Contact').text());
                $('#invEmail_of_Future_ContactList').fadeOut();
                $('#applicant_ID').val($('#appapplicant_ID').text());
                $('#applicant_IDList').fadeOut();
                $('#applicant_name').val($('#appapplicant_name').text());
                $('#applicant_nameList').fadeOut();
                $('#applicant_address').val($('#appapplicant_address').text());
                $('#applicant_addressList').fadeOut();
                $('#applicant_phone').val($('#appapplicant_phone').text());
                $('#applicant_phoneList').fadeOut();
                $('#applicant_email').val($('#appapplicant_email').text());
                $('#applicant_emailList').fadeOut();
                $('#Licensee_ID').val($('#licLicensee_ID').text());
                $('#Licensee_IDList').fadeOut();
                $('#Licensee_Name').val($('#licLicensee_Name').text());
                $('#Licensee_NameList').fadeOut();
                $('#Licensee_Address').val($('#licLicensee_Address').text());
                $('#Licensee_AddressList').fadeOut();
                $('#Licensee_Email').val($('#licLicensee_Email').text());
                $('#Licensee_EmailList').fadeOut();
                $('#Licensor_ID').val($('#liseLicensor_ID').text());
                $('#Licensor_IDList').fadeOut();
                $('#Last_Name').val($('#liseLast_Name').text());
                $('#Last_NameList').fadeOut();
                $('#Given_Name').val($('#liseGiven_Name').text());
                $('#Given_NameList').fadeOut();
                $('#Home_Address').val($('#liseHome_Address').text());
                $('#Home_AddressList').fadeOut();
                $('#Employer').val($('#liseEmployer').text());
                $('#EmployerList').fadeOut();
                $('#Contractor').val($('#liseContractor').text());
                $('#ContractorList').fadeOut();
                $('#ContractorType').val($('#liseContractorType').text());
                $('#ContractorTypeList').fadeOut();
                $('#liseEmail_of_Future_Contact').val($('#liseEmail_of_Future_Contact').text());
                $('#liseEmail_of_Future_ContactList').fadeOut();
                $('#agent_name').val($('#agtagent_name').text());
                $('#agent_nameList').fadeOut();
                $('#agent_address').val($('#agtagent_address').text());
                $('#agent_addressList').fadeOut();
                $('#agent_contact_person').val($('#agtagent_contact_person').text());
                $('#agent_contact_personList').fadeOut();
                $('#agent_email').val($('#agtagent_email').text());
                $('#agent_emailList').fadeOut();
                $('#agent_fax_number').val($('#agtagent_fax_number').text());
                $('#agent_fax_numberList').fadeOut();
                $('#agent_office_phone').val($('#agtagent_office_phone').text());
                $('#agent_office_phoneList').fadeOut();
                $('#agent_future_email').val($('#agtagent_future_email').text());
                $('#agent_future_emailList').fadeOut();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#Devroinvestor').DataTable({
                "columns": [
                    {
                        "width": "15%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "25%"
                    }
                ]}
            );
            $('#Devroapplicant').DataTable({
                "columns": [
                    {
                        "width": "15%"
                    },
                    {
                        "width": "30%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "30%"
                    },
                    {
                        "width": "10%"
                    }
                ]}
            );
            $('#Devrolicensor').DataTable({
                "columns": [{
                        "width": "10%"
                    },
                    {
                        "width": "30%"
                    },
                    {
                        "width": "10%"
                    },
                    {
                        "width": "25%"
                    },
                    {
                        "width": "10%"
                    },
                    {
                        "width": "15%"
                    }
                ]}
            );
            $('#Devrolicensee').DataTable({
                "columns": [{
                        "width": "15%"
                    },
                    {
                        "width": "30%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "30%"
                    },
                    {
                        "width": "10%"
                    }
                ]}
            );
            $('#Devroagent').DataTable({
                "columns": [{
                        "width": "15%"
                    },
                    {
                        "width": "25%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "20%"
                    },
                    {
                        "width": "10%"
                    },
                    {
                        "width": "15%"
                    }
                ]}
            );
            $('#Devropatent').DataTable();
            $('#Devrofamily').DataTable();
            $('#Devrodesign').DataTable();
            $('#Devrotrademark').DataTable();
            $('#Devrolist').DataTable();
            $('#merged').DataTable();;
        });
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "../../js/utils.js",
        });
        var input = document.querySelector("#liphone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "../../js/utils.js",
        });
        var input = document.querySelector("#licphone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "../../js/utils.js",
        });
        var input = document.querySelector("#telphone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "../../js/utils.js",
        });

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && charCode < 48) || charCode > 57) {
                return false;
            }
            return true;
        }
        //Performance
    </script>

</body>


<!-- Mirrored from www.bootstrapdash.com/demo/spica/template/demo/horizontal-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 21:57:28 GMT -->

</html>