Our Event Registration website implements secure authentication and session management to control access to different parts of the system based on user roles.
 Authentication and Session Management
We implemented authentication using a login system where users must provide valid credentials (email and password) to access the platform. Passwords are securely hashed before being stored in the database. Upon successful login, a session is created, storing key user information such as their user ID and role type.

Session data is used to maintain the user’s logged-in state and determine access permissions. Sessions automatically expire after a certain period of inactivity to enhance security. The logout function destroys the session data, effectively logging the user out and preventing further access without re-authentication.

 User Roles
We defined the following user roles:

-Admin

-Regular User


Each role has different access permissions based on their responsibilities and functions.

File Upload Feature
Describe the file upload implementation. 
Specify what file types are allowed, where the files are stored, and how validation is  handled. 
• Upload type: e.g., image, PDF 
• Validation rules: e.g., size limit, file extension 
• Folder or path used for storage 

Manual testing
Verified login and logout functionality, ensuring proper redirection, session handling and error messaging for incorrect credentials.
Checked role-based access control by logging in as different user roles (Admin and Regular User) to confirm apportioned access to restricted pages and features and features.

API testing
Utilized Postman to test the RESTful API endpoint
Input Validation Testing
Entered invalid and malicious data in forms to test form validation rules.
Verified that the system correctly rejected invalid inputs and displayed proper error messages.


