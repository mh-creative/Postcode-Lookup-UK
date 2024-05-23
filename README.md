
#Postcode Information

This project utilises the open-source API provided by https://postcodes.io/ to facilitate the retrieval of UK postcode data. Users can enter a postcode and access corresponding geographical information.


## Key Evaluation Criteria

#### The key evaluation criteria that will be used is:

 
- #### Functionality:

    - The solution utilises the open source API: https://postcodes.io/ and allows a user to search for a postcode in the UK and retrieving the specified geographical information and displaying it on the webpage.

- #### Code Quality:

    - The project has been organised into distinct files or components, with each one assigned to a specific task, ensuring a well-structured system. Additionally, the code itself is neatly arranged, accompanied by comments detailing the functionality of each code block. Considering these aspects, the project and its code are highly maintainable.

- #### Efficiency

    - Overall, the solution is optimised considering the task at hand. It efficiently handles the sanitisation of input, retrieves geographical information, and generates output HTML content without introducing unnecessary complexity or overhead. However, the performance of the solution may be affected by external factors such as network latency and the responsiveness of the external API service.


## Stack

**Client:** Bootstrap, jQuery

**Server:** PHP


## Repository Content

- assets
    - css
        - **style.css** - Custom website styles
    
    - js 
        - **script.js** - Custom website JavaScript - Function to reset/remove postcode from form input and clear the any postcode information displayed on the page.

    - img 
        - **PostcodesIcon.png** - Company Icon
        - **PostCodesLogo.png** - Company Logo
- includes 
    - **postcode_display.php** - This PHP code handles the form submission where the user provides a postcode, it looks up geographical information based on that postcode, and displays the results or an error message accordingly.
    - **postcode_form.php** - This PHP code is where the user enters a postcode for submission. There is also reset button to clear the form field.
    - **postcode_lookup.php** - This PHP code defines a function called lookupPostcode that takes a postcode as input and returns geographical information associated with that postcode. 

- **index.php** - Main Webpage - Responsible for displaying postcode information. It includes PHP for server-side processing and includes Bootstrap for styling and layout. The PHP includes handle the backend logic for postcode lookup and form processing. 

## Authors

- [Michael Hayes]

