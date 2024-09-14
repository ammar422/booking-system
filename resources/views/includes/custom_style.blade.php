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
</style>
