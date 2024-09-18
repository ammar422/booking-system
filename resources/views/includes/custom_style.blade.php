<style>
    .form-row {
        display: flex;
        /* Enable flexbox */
        flex-wrap: wrap;
        /* Allow wrapping to next line */
        margin-bottom: 15px;
        /* Space between rows */
    }

    .form-group {
        flex: 1;
        /* Each field takes equal space */
        min-width: 250px;
        /* Optional: set a minimum width for each field */
        padding: 0 10px;
        /* Space between fields */
    }

    input,
    select,
    textarea {
        width: 100%;
        /* Full width of the form-group */
        padding: 8px;
        /* Padding for input fields */
        box-sizing: border-box;
        /* Ensure padding doesn't affect total width */
    }

    .inline-list {
        list-style-type: none;
        /* Remove default bullets */
        padding: 10%;
        /* Remove padding */
    }

    .inline-list li {
        display: inline-block;
        /* Display list items inline */
        width: 45%;
        /* Set a width for each item; adjust as needed */
        margin-right: 8%;
        /* Space between elements */
        margin-bottom: 15px;
        /* Increase space between lines */
        vertical-align: middle;
        /* Align items to the top */
    }

    .inline-list li:nth-child(2n) {
        margin-right: 0%;
        /* Remove right margin for every second item */
    }

    .button-container {
        /* Optional styles for the container */
        width: 100%;
        /* Ensure it has enough width */
    }

    .full-width-button {
        width: 100%;
        /* Make the button take the full width of its parent */
        display: block;
        /* Ensure it behaves like a block element */
        /* Optional: Adjust padding, font size, etc. */
        padding: 12px;
        /* Add some padding */
        font-size: 16px;
        /* Adjust the font size */
    }

    .container-fluid {
        width: 95%;
        margin: 0 auto;
        padding: 20px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }

    .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        margin-right: 5px;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .btn-outline-success {
        color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545;
    }

    .offer-details {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .offer-details h2 {
        color: #333;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .offer-details ul {
        list-style-type: none;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 15px;
    }

    .offer-details li {
        background-color: #ffffff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease-in-out;
    }

    .offer-details li:hover {
        transform: translateY(-3px);
    }

    .offer-details strong {
        color: #007bff;
        display: block;
        margin-bottom: 5px;
    }


    /*
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    } */

    h1 {
        color: #333;
    }

    .modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        text-align: center;
        max-width: 500px;
        /* Set a maximum width for the modal */
        width: 90%;
        /* Allow modal to take up to 90% of the screen width */
    }

    .hidden {
        display: none;
    }

    .close-button {
        cursor: pointer;
        font-size: 20px;
        color: #999;
        position: absolute;
        top: 10px;
        right: 15px;
    }

    .close-button:hover {
        color: #881edf;
    }

    button {
        /* margin-top: 10px; */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #881edf;
        color: white;
        cursor: pointer;
        font-size: 16px;

    }

    .btn-alert {
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #881edf;
        color: white;
        cursor: pointer;
        font-size: 16px;

    }

    button:hover {
        background-color: #3a3f28;
    }

    .nav-word{
        color: #a02458
    }
</style>
