<style>
    .custom-border {
        border: 1px solid #d8d8d8; /* Change #333 to the desired dark color code */
        border-radius: 15px;
        padding: 50px;
    }

    .container {
        position: relative;
        max-width: 200px;
        margin-left: 5px;
        margin-right: 15px;
        margin-top: 5px;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .exit-button {
        position: absolute;
        top: 20px;
        right: 10px;
        cursor: pointer;
        font-size: 18px;
        color: #333;
    }

    .underline-link {
        text-decoration: underline;
        color: blue; /* Set the desired color */
        cursor: pointer; /* Set cursor to pointer on hover */
    }

    .underline-link:hover {
        text-decoration: none; /* Remove underline on hover if needed */
    }
    .custom-header{
        background-color: #0026C8;
    }
    .modal-title {
        color: #fff;
        font-weight: bold;
    }
    #flashMessage.alert-primary {
        background-color: white; /* Remove background color */
        color: #0026C8;
        text-align: center; 
        display: flex;
        border: 1px solid #0026C8; 
        align-items: center;
        justify-content: center;
        font-weight: 600; 
        position: relative; /* Add relative positioning for overlay */
        z-index: 50;
        border-radius: 15px !important;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2); /* Adjust the opacity as needed */
        display: none; /* Initially hidden */
        z-index: 40; /* Below flash message */
    }

    .input-border {
        border-color: #a0aec0;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .display-6 {
        color: #505050;
    }
    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .form-control {
        font-size: 1rem;
        border-radius: 15px;
        background-color: transparent;
    }
    
    .text-color {
        color: #000;
    }

    .display-6 {
        color: #505050;
        font-size: 30px;
        font-weight: 500;
    }
    .btn-closs {
        font-size: 14px;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #646360;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0; /* Start from fully transparent */
        }
        to {
            opacity: 1; /* Fade in to fully opaque */
        }
    }

    .btn-closs:hover {
        color: #fff;
        border-radius: 50px;
        background: #646360;
    }

    .btn-closs:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #646360; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    .addRRR_div {
        display: none;
    }
    /* Button design */
    .btn-submit {
        font-size: 14px;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #0026C8;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }
    .btn-submit:hover {
        color: #fff;
        border-radius: 50px;
        background: #0026C8;
    }
    .btn-submit:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #0026C8; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    /* Modal design and buttons for Transmittal record */
    .modal-title3 {
        color: #0026C8;
        font-weight: bold;
    }
    .btn-clos {
        font-size: 14px;
        color: #646360;
        padding: 8px; 
        border-radius: 15px;
        border: 1px solid #646360; 
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }
    @keyframes fadeIn {
        from {
            opacity: 0; /* Start from fully transparent */
        }
        to {
            opacity: 1; /* Fade in to fully opaque */
        }
    }
    .btn-clos:hover {
        color: #fff;
        border-radius: 50px;
        background: #646360;
    }
    .btn-clos:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #646360; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    .btn-submit2 {
        font-size: 14px;
        color: #0026C8;
        padding: 8px; 
        border: 1px solid #0026C8;
        border-radius: 15px;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }
    .btn-submit2:hover {
        color: #fff;
        border-radius: 50px;
        background: #0026C8;
    }
    .btn-submit2:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #0026C8; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    
</style>


<div class="mssg position-fixed top-8 start-50 translate-middle-x w-1/4 z-50">
    <div class="mssg">
        @if(session('flash_mssg'))
            <div id="flashMessage" class="alert alert-primary" role="alert">
                <p>{{ session('flash_mssg') }}</p>
            </div>
        @endif
    </div>
</div>

<div id="overlay"></div> <!-- Add overlay div -->

<div class="ml-5">
    <div class="row">
        <h1 class="display-6"> Add New Transmittal </h1>
    </div>
</div>

<form action="/addRecord" id="addAddresseeForm" method="POST" class="p-3 needs-validation" onsubmit="event.preventDefault(); showConfirmationModal();">
    @csrf
        <div class="row">
            <div class="col">
                <div class="relative mb-2.5">
                    <input list="datalistOptions" id="addresseeDataList" class="text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="addresseeDataList" class="absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee</label>
                    <datalist id="datalistOptions">
                        <option value="Add New Addressee"></option>
                    </datalist>
                    <input class="form-control" type="hidden" name="receiver" id="receiver">
                </div>
                <div id="popover-content" class="mt-2 text-danger" style="display: none;">
                    Invalid Addressee. <a href="#" onclick="openModal()" class="underline-link">Click here</a> to add new addressee.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="relative mb-2.5">
                    <input type="text" id="address" name="address" class="text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " readonly/>
                    <label for="address" class="absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Address</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="relative mb-2.5">
                    <input type="date" name="date_posted" id="date_posted" class="form-control block px-3 pb-2.5 pt-3 w-full text-sm text-dark text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required/>
                    <label for="mail_tn" class="absolute text-sm text-indigo-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Date</label>
                </div>
            </div>
            <div class="col">
                <div class="relative mb-2.5">
                    <input type="text" name="mail_tn" id="mail_tn" class="text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required/>
                    <label for="mail_tn" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Mail Tracking Number</label>
                </div>
                <div id="mail_tn_error" class="text-danger mt-2 mb-2"></div>
            </div>
        </div>    
        <div class="addRRR_div my-3" id="addRRR_div">
            <div class="row d-flex">
                <div class="col-11">
                    <div class="relative mb-2.5">
                        <input type="text" name="rrr_tn" id="rrr_tn" class="text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
                        <label for="rrr_tn" class="absolute text-sm text-indigo-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">RRR Tracking Number/s</label>
                    </div>
                </div>
                <div class="col-1">
                    <button type="button" id="add" class=" btn-submit" onclick="addTN()">Add</button>
                </div>
            </div>
            <div class="row mx-1 mt-2">
                <div class="col-12">
                    <div class="custom-border row font-md" id="rrr_div">
                        <div id="rrrtn_error" class="text-danger mt-2"></div>
                        <input type="hidden" name="rrr_tns" id="rrr_tns_input">
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-3">
                <button type="submit" class="btn-submit" id="submitBtn">Submit</button>
            </div>
        </div>
</form>

<!-- Modal -->
<div class="modal fade" id="newAddresseeModal" tabindex="-1" role="dialog" aria-labelledby="newAddresseeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="custom-header">
                <p class="modal-title mt-2 ml-5 mb-2" style="font-size: 19px" id="newAddresseeModalLabel">Add New Addressee
                    <span style="display: block; font-weight: normal; font-size: 11px; margin-top: -6px;">Please fill in all fields with an asterisk (*)</span>
                </p>
            </div>
            
            <div class="mssg">
                @if(session('record_added'))
                    <div class="alert alert-primary" role="alert">
                        <p>{{ session('record_added') }}</p>
                    </div>
                @endif
            </div>
            <form action="/add_addressee" method="post">
                @csrf
                <div class="modal-body">
                    <!-- Add your form fields for adding a new addressee here -->
                    <!-- Example: -->
                    <div class="relative mb-2.5">
                        <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. CA" required>
                        <label for="nameAbbrev" class="absolute text-sm text-indigo-500 dark:text-indigo-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 font-weight: lighter; dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Abbreviation *</label>
                        <div id="abbrev_error" class="text-danger mt-2 mb-2"></div>
                    </div>

                    <div class="relative mb-2.5">
                        <input type="text" name="namePrimary" id="namePrimary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Court of Appeals" required>
                        <label for="namePrimary" class="absolute text-sm text-indigo-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 floating-label">Addressee Name Line 1 *</label>
                    </div>
                    <div class="relative mb-2.5">
                        <input type="text" name="nameSecondary" id="nameSecondary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Regional Office V" />
                        <label for="nameSecondary" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Name Line 2</label>
                    </div>
                    <div class="relative mb-2.5">
                        <input type="text" name="address" id="address" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Brgy. 35, Old Albay District" />
                        <label for="address" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Floor/Building/Street/Barangay/Sitio/Purok</label>
                    </div>
                    <div class="relative mb-2.5">
                        <input type="text" name="city" id="city" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Legazpi City" required/>
                        <label for="city" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">City/Municipality *</label>
                    </div>
                    <div class="relative mb-2.5">
                        <input type="text" name="zip" id="zip" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. 4500" required/>
                        <label for="zip" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Zip Code *</label>
                    </div>
                    <div class="relative mb-2.5">
                        <input type="text" name="province" id="province" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. 4500" required/>
                        <label for="province" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Province *</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-clos" onclick="closeModal()">Close</button>
                    <button type="submit" class="btn-submit" onclick="saveAddresee()">Save Addressee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Add Transmittal Form -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-1 border-blue-900">
            <h5 class="modal-title3 ml-4 mt-2">Add New Transmittal</h5>
            <div class="my-2">
                <hr class="ml-4 mr-4 modal-title3" style="border-top-width: 2px;">
            </div>     
            <p class="ml-4 mt-1">Are you sure you want submit this form?</p>
            <div class="d-flex justify-content-end mr-4 mb-3 mt-3">
                <button type="button" class="btn-clos" onclick="closeModal()">Cancel</button>
                <button type="button" class="btn-submit2 ml-3" onclick="confirmSubmit()">Submit</button>
            </div>
        </div>
    </div>
</div>


<div class="content mt-5">
    <div class="d-flex justify-content-center">
        @if (session('success'))
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
            src="https://cdn.lordicon.com/lomfljuq.json"
            trigger="in"
            delay="5"
            state="in-check"
            colors="primary:#ffffff"
            style="width:30px; height:30px">
            </lord-icon>

            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>

<script>
    $(document).ready(function() {
        if ($('#flashMessage').length > 0) {
            $('#overlay').fadeIn('slow');
        }

        setTimeout(function() {
            $('#flashMessage').fadeOut('slow');
            $('#overlay').fadeOut('slow');
        }, 400);
    });

    $(document).ready(function () {
        $('#mail_tn').on('blur', checkMailTrackingNumber);
    });

    function checkMailTrackingNumber() {
        var mail_tn = $('#mail_tn').val();

        $.ajax({
            type: 'GET',
            url: '/checkMailTN',
            data: { mail_tn: mail_tn },
            success: handleMailTrackingNumberCheck,
            error: handleMailTrackingNumberError
        });
    }

    function handleMailTrackingNumberCheck(response) {
        var mailTnErrorElement = $('#mail_tn_error');
        var submitButton = $('#submitBtn');

        if (response.exists) {
            mailTnErrorElement.html('<i class="fa-solid fa-circle-exclamation fa-fade fa-sm"></i>   Transmittal Tracking Number already exists');
            submitButton.prop('disabled', true); // Disable the submit button
        } else {
            mailTnErrorElement.text('');
            submitButton.prop('disabled', false); // Enable the submit button
        }
    }


    function handleMailTrackingNumberError(error) {
        console.error('Error checking Mail Tracking Number:', error);
        var div = document.getElementById("addRRR_div");
    }

    function confirmSubmit() {
        document.getElementById('rrr_tns_input').value = JSON.stringify(rrr_tns);
        document.getElementById('addAddresseeForm').submit();
    }

    function showConfirmationModal() {
        $('#confirmationModal').modal('show');
    }

    function closeModal() {
        $('#newAddresseeModal').modal('hide');
        $('#confirmationModal').modal('hide');
    }

    function openModal() {
        $('#newAddresseeModal').modal('show');
    }

    function saveNewAddressee() {
        $('#newAddresseeModal').modal('hide');
    }

    var rrr_tns = [];

    function addTN() {
        var rrr_tn_value = $('#rrr_tn').val();
        var rrrtn_error = $('#rrrtn_error');

        // Check if the value already exists in the list
        if (rrr_tns.includes(rrr_tn_value)) {
            //alert('RRR Tracking Number already exists.'); // Prompt user with alert message
            rrrtn_error.html('<i class="fa-solid fa-circle-exclamation fa-fade fa-sm"></i>   RRR Tracking Number already exists');
            return; // Exit the function if the value already exists
        }else{
            rrrtn_error.text('');
            if (rrr_tn_value) {
                rrr_tns.unshift(rrr_tn_value);  // Add the new value to the beginning of the array

                var count = rrr_tns.length;
                var tn_container = createTNContainer(count, rrr_tn_value);

                var rrr_div = document.getElementById('rrr_div');
                
                // Insert the new element at the top
                rrr_div.insertBefore(tn_container, rrr_div.firstChild);

                $('#rrr_tn').val('');
                console.log(rrr_tns);
            }
        }
    }

    function createTNContainer(count, rrr_tn_value) {
        var tn_container = document.createElement('div');
        tn_container.className = 'container';
        tn_container.innerHTML = `<span class="exit-button" onclick="removeTN(this.parentNode, '${rrr_tn_value}')">✖</span><p>${count}. ${rrr_tn_value}</p>`;
        return tn_container;
    }

    function removeTN(element, rrr_tn_value) {
        element.parentNode.removeChild(element);

        var index = rrr_tns.indexOf(rrr_tn_value);
        if (index !== -1) {
            rrr_tns.splice(index, 1);
        }

        console.log(rrr_tns);
        updateCounts();
    }

    function updateCounts() {
        var tnContainers = document.getElementById('rrr_div').getElementsByClassName('container');

        for (var i = 0; i < tnContainers.length; i++) {
            var countElement = tnContainers[i].getElementsByTagName('p')[0];
            countElement.innerText = `${i + 1}. ${rrr_tns[i]}`;
        }
    }

    function submitForm() {
        document.getElementById('rrr_tns_input').value = JSON.stringify(rrr_tns);
        document.getElementById('addAddresseeForm').submit();
    }

    // var rrr_tn_value = document.getElementById("rrr_tn");
    document.getElementById("rrr_tn").addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            addTN();
        }
    });

    // var mailTn = document.getElementById("mail_tn");
    document.getElementById("mail_tn").addEventListener("keypress", function (evt) {
        if (event.key === "Enter") {
            evt.preventDefault();
        }
    });

    document.getElementById('addresseeDataList').addEventListener('input', handleAddresseeDataListInput);
    document.addEventListener('DOMContentLoaded', fetchAddressees);
    function handleAddresseeDataListInput() {
        var addressValue = document.getElementById('address');
        var addresseeVal = document.getElementById('receiver');
        var RRRdiv = document.getElementById('addRRR_div');
        var popUp = document.getElementById('popover-content');
        var tn = document.getElementById('mail_tn');
        var selectedValue = this.value;

        if (selectedValue === 'Add New Addressee') {2
            $('#newAddresseeModal').modal('show');
            this.value = '';
        } else {
            var selectedOption = document.querySelector('#datalistOptions option[value="' + selectedValue + '"]');

            if (selectedOption) {
                var selectedId = selectedOption.id;
                var selectedAddressee = addressees.find(addressee => addressee.id == selectedId);
                addressValue.value = `${selectedAddressee.address || ''}${selectedAddressee.address ? ', ' : ''}${selectedAddressee.zip || ''} ${selectedAddressee.city || ''}${selectedAddressee.city ? ', ' : ''}${selectedAddressee.province || ''}`;                
                addresseeVal.value = selectedId;
                RRRdiv.style.display = 'block';
                popUp.style.display = 'none';
            } else {
                addressValue.value = '';
                RRRdiv.style.display = 'none';
                popUp.style.display = 'block';
            }

            if (!selectedOption & selectedValue == '') {
                popUp.style.display = 'none';
            }
        }
    }

    function fetchAddressees() {
        fetch('/get-addressees')
            .then(response => response.json())
            .then(populateAddresseesDatalist)
            .catch(error => console.error('Error fetching addressees:', error));
    }

    function populateAddresseesDatalist(data) {
        const datalist = document.getElementById('datalistOptions');
        addressees = data.addressees;

        addressees.forEach(addressee => {
            const option = document.createElement('option');
            option.value = `(${addressee.abbrev}) ${addressee.name_primary} ${addressee.name_secondary ? addressee.name_secondary : ''}`;
            option.id = addressee.id;
            datalist.appendChild(option);
        });
    }

</script>
