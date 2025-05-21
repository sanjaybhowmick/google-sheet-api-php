
This documentation explains how to use the provided PHP code to fetch data from Google Sheets and display it in a custom layout using HTML/CSS.

### Setup Instructions

#### 1. Get Your Google Sheet ID

1.  Open your Google Sheet in a web browser
2.  Look at the URL in the address bar – it will look like:

https://docs.google.com/spreadsheets/d/BmzaSyBzQ0cRTrbf_vxrB75nh8AoV3BtawPiiCQ/edit#gid=0

The long string between  `/d/`  and  `/edit`  is your Sheet ID (in this example:  `1ywCwy_bDolWM1gV_NcCTby2-CmuEZnWHyLTFV58DFmQ`)

#### 2. Create a Google API Key

1.  Go to the  [Google Cloud Console](https://console.cloud.google.com/)
2.  Create a new project or select an existing one
3.  Navigate to “APIs & Services” > “Library”
4.  Search for “Google Sheets API” and enable it
5.  Go to “APIs & Services” > “Credentials”
6.  Click “Create Credentials” and select “API key”
7.  Copy your new API key (it will look like:  `BmzaSyBzQ0cRTrbf_vxrB75nh8AoV3BtawPiiCQ`)
8.  (Optional) Restrict the API key to only work with the Sheets API for security

#### 3. Configure the PHP Code

Replace these values in the code:

```
$sheetID = "1ywCwy_bDolWM1gV_NcCTby2-CmuEZnWHyLTFV58DFmQ"; // Your Sheet ID
$apiKey = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"; // Your API Key
$rows_count = 8; // Number of rows to display
```

#### 4. Sheet Configuration

Your Google Sheet must have a named range or sheet tab that matches what you put in the API URL (in this example:  `Sheet1`)

Make sure your Sheet is either:

Publicly accessible (set to “Anyone with the link can view”)

Or shared with the email address associated with your API key
