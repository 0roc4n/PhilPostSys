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

    .btn {
        border-radius: 15px !important;
    }
    .box-with-shadow {
        box-shadow: 2px 2px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .form-control {
        font-size: 1rem;
        border-radius: 15px;
    }
    
    .text-color {
        color: #000;
    }

</style>

<div>
    <div class="mb-2">
        <h1 class="display-5"> Update Addressee </h1>
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
</div>

<div id="overlay"></div><!-- Add overlay div -->

<div class="row mt-3">
    <form action="/update-addressee-submit/" method="post" id="addresseeForm">
        @csrf
        <div class="border rounded-md p-3">
            <div class="row">
                <h1 class="text-gray-700 mb-3 ml-1">Addressee Information:</h1>

                <div class="col-md-3 mb-2">
                    <div class="relative">
                        <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->abbrev}}" required>
                        <label for="nameAbbrev" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Abbreviation</label>
                    </div>
                    <div id="abbrev_error" class="text-danger mt-2 mb-2"></div>
                </div>
                <div class="col-md-9">
                    <div class="relative">
                        <input type="text" name="namePrimary" id="namePrimary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->name_primary }}" required>
                        <label for="namePrimary" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 floating-label">Addressee Name Line 1</label>
                    </div>
                    <div class="relative mt-3">
                        <input type="text" name="nameSecondary" id="nameSecondary" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->name_secondary }}" />
                        <label for="nameSecondary" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addressee Name Line 2</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-7 border rounded-md p-3">
            <h1 class="text-gray-700 mb-3 ml-1">Addressee Address:</h1>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="relative">
                        <input type="text" name="address" id="address" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->address}}" />
                        <label for="address" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Building/Floor/Street/Barangay/Sitio/Purok</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="city" id="city" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->city}}" required/>
                            <label for="city" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">City/Municipality</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="zip" id="zip" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->zip}}" required/>
                            <label for="zip" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Zip Code</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="relative">
                            <input type="text" name="province" id="province" class="form-control block px-2.5 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer text-dark" value="{{ $record->province}}" required/>
                            <label for="province" class="absolute text-sm text-gray-500 dark:dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Province</label>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-3">
            <button type="button" class="btn text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" onclick="clearForm()">Clear</button>
            <button type="submit" class="btn text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-3 py-2.5 text-sm text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="submitBtn">Save Addressee</button>
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
    
    document.getElementById('addresseeDataList').addEventListener('input', handleAddresseeDataListInput);
    document.addEventListener('DOMContentLoaded', fetchAddressees);
    
    function handleAddresseeDataListInput() {
        var id = document.getElementById('addressee-id');
        var abbrev = document.getElementById('nameAbbrev');
        var namePrimary = document.getElementById('namePrimary');
        var nameSecondary = document.getElementById('nameSecondary');
        var address = document.getElementById('address');
        var city = document.getElementById('city');
        var zip = document.getElementById('zip');
        var province = document.getElementById('province');
        var selectedValue = this.value;
            
        var selectedOption = document.querySelector('#datalistOptions option[value="' + selectedValue + '"]');

        if (selectedOption) {
            var selectedId = selectedOption.id;
            var selectedAddressee = addressees.find(addressee => addressee.id == selectedId);
            nameAbbrev.value = `${selectedAddressee.abbrev}`;
            namePrimary.value = `${selectedAddressee.name_primary}`;
            nameSecondary.value = `${selectedAddressee.name_secondary}`;
            address.value = `${selectedAddressee.address}`;
            city.value = `${selectedAddressee.city}`;
            zip.value = `${selectedAddressee.zip}`;
            province.value = `${selectedAddressee.province}`;
            id.value = selectedId;

            nameAbbrev.disabled = false;
            namePrimary.disabled = false;
            nameSecondary.disabled = false;
            address.disabled = false;
            city.disabled = false;
            zip.disabled = false;
            province.disabled = false;
        } else {
            nameAbbrev.value = '';
            namePrimary.value = '';
            nameSecondary.value = '';
            address.value = '';
            city.value = '';
            zip.value = '';
            province.value = '';
            id.value = '';

            nameAbbrev.disabled = true;
            namePrimary.disabled = true;
            nameSecondary.disabled = true;
            address.disabled = true;
            city.disabled = true;
            zip.disabled = true;
            province.disabled = true;
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
            option.value = `${addressee.abbrev} - ${addressee.name_primary}`
            option.id = addressee.id;
            datalist.appendChild(option);
        });
    }
</script>
