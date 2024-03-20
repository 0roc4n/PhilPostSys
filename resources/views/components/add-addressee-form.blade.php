<style>

    .custom-border {
        border: 2px solid #333; /* Change #333 to the desired dark color code */
        padding: 20px;
        margin-left: 5px;
        max-width: 540px;
    }

    .container {
        position: relative;
        max-width: 200px;
        margin-left: 5px;
        margin-right: 20px;
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

    .form-border {
        border-color:#a0aec0;
    }
    
    .right-section {
        display: none;
    }

    .underline-link {
        text-decoration: underline;
        color: blue; /* Set the desired color */
        cursor: pointer; /* Set cursor to pointer on hover */
    }

    .underline-link:hover {
        text-decoration: none; /* Remove underline on hover if needed */
    }
    .no-margin {
        margin-bottom: 0 !important;
    }
    #flashMessage.alert-primary {
        background-color:#0D6EFD; 
        color: #fff;
        text-align: center; 
        display: flex;
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

    .btn-clear {
        font-size: 14px;
        font-weight: lighter;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #18191A;
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

    .btn-clear:hover {
        color: #fff;
        border-radius: 100px;
        background: #18191A;
    }

    .btn-clear:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #18191A; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }


    .btn-save {
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

    @keyframes fadeIn {
        from {
            opacity: 0; /* Start from fully transparent */
        }
        to {
            opacity: 1; /* Fade in to fully opaque */
        }
    }

    .btn-save:hover {
        color: #fff;
        border-radius: 100px;
        background: #0026C8;
    }

    .btn-save:hover::after {
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

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .form-control {
        width: 100%;
        border-radius: 15px;
        /* border-color: #6B7280; */
    }

    .floating-label {
        width: 200px;
    }
    

    .display-6 {
        color: #505050;
        font-size: 30px;
        font-weight: 500;
    }

    .border{
        border-radius: 20px;
    }
    .rounded {
        border-radius: 11px !important;
    }
    .box-container {
        width: full;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 16px;
        position: relative;
    }

    .label {
        position: absolute;
        top: -10px;
        left: 15px;
        background-color: #fff;
        padding: 0 4px;
        color: #2d3748;
   }
</style>

<div class="mb-8">
    <div class="flex justify-between items-center">
        <h1 class="display-6"> Add New Addressee </h1>
    </div>
</div>
<div class="mssg position-fixed top-6 start-50 translate-middle-x h-5 w-1/4 z-50">
    <div class="mssg">
        @if(session('flash_mssg'))
            <div id="flashMessage" class="alert alert-primary" role="alert">
                <p>{{ session('flash_mssg') }}</p>
            </div>
        @endif
    </div>
</div>

<div id="overlay"></div><!-- Add overlay div -->

<div class="row mt-3">
    <form action="/add_addressee" method="post" id="addresseeForm">
        @csrf
        <div class="box-container rounded border">
            <div class="label">Addressee Information:</div>
            <div class="row mt-3">
                <div class="col-md-3 mb-2">
                    <div class="relative">
                        <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. DOH-RO5" required>
                        <label for="nameAbbrev" class="absolute text-sm text-indigo-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 font-weight: lighter; dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Abbreviation *</label>
                    </div>
                    <div id="abbrev_error" class="text-danger mt-2 mb-2"></div>
                </div>
                <div class="col-md-9">
                    <div class="relative">
                        <input type="text" name="namePrimary" id="namePrimary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Department of Health" required>
                        <label for="namePrimary" class="absolute text-sm text-indigo-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 floating-label">Addressee Name Line 1 *</label>
                    </div>
                    <div class="relative mt-3">
                        <input type="text" name="nameSecondary" id="nameSecondary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Regional Office V" />
                        <label for="nameSecondary" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Name Line 2</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-7 box-container border rounded p-3">
            <div class="label">Addressee Address</div>

            <div class="col-md-12 mt-3">
                <div class="col-md-12">
                    <div class="relative">
                        <input type="text" name="address" id="address" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Brgy. 35, Old Albay District" />
                        <label for="address" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Floor/Building/Street/Barangay/Sitio/Purok</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="city" id="city" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. Legazpi City" required/>
                            <label for="city" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">City/Municipality *</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="zip" id="zip" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. 4500" required/>
                            <label for="zip" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white h-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Zip Code *</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="province" id="province" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" placeholder="ex. 4500" required/>
                            <label for="province" class="absolute text-sm text-indigo-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Province *</label>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-3">
            <button type="button" class="btn btn-clear text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" onclick="clearForm()">Clear</button>
            <button type="submit" class="btn btn-save text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-3 py-2.5 text-sm text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="submitBtn">Save Addressee</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        if ($('#flashMessage').length > 0) {
            $('#overlay').fadeIn('slow');
        }

        setTimeout(function() {
            $('#flashMessage').fadeOut('slow');
            $('#overlay').fadeOut('slow');
        }, 1000);
    });

    $(document).ready(function () {
        $('#nameAbbrev').on('blur', checkMailTrackingNumber);
    });

    function checkMailTrackingNumber() {
        var nameAbbrev = $('#nameAbbrev').val();
        console.log(nameAbbrev);

        $.ajax({
            type: 'GET',
            url: '/checkAddressee',
            data: { nameAbbrev: nameAbbrev },
            success: handleCheckSuccess,
            error: handleCheckError
        });
    }

    function handleCheckSuccess(response) {
        var abbrevErrorElement = $('#abbrev_error');
        var submitButton = $('#submitBtn');

        if (response.exists) {
            abbrevErrorElement.html('<i class="fa-solid fa-circle-exclamation fa-fade fa-sm"></i>   Addressee already exists');
            console.log('Addressee already exists');
            submitButton.prop('disabled', true); // Disable the submit button
        } else {
            abbrevErrorElement.text('');
            submitButton.prop('disabled', false); // Enable the submit button
            console.log('Addressee does not exist');
        }
    }

    function handleCheckError(error) {
        console.error('Error checking Mail Tracking Number:', error);
    }

    function clearForm() {
        // Clear all input fields inside the form
        document.getElementById("addresseeForm").reset();
    }

</script>