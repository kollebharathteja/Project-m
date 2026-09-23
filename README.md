# College Management System

A comprehensive web-based college management system built with PHP, MySQL, and Bootstrap. This system provides efficient tools for managing faculty, colleges, and administrative tasks in one centralized location.

## Features

### Public-Facing Pages
- **Home Page**: Welcome banner with carousel slider and system introduction
- **About Us**: Dynamic content about the college platform
- **Faculty Directory**: Browse all faculty members with their profiles
- **Faculty Details**: View detailed information about individual faculty members
- **Contact Us**: Contact information and message form

### Admin Panel
- **Dashboard**: Overview with statistics and recent activities
- **Sub-Admin Management**: Create and manage sub-admin accounts
- **College Management**: Add and manage affiliated colleges
- **Faculty Management**: Comprehensive faculty management with profile pictures
- **Profile Picture Updates**: Dedicated interface for updating faculty photos

## Installation

### Prerequisites
- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web server (Apache, Nginx, etc.)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/kollebharathteja/Project-m.git
   cd Project-m
   ```

2. **Database Setup**
   - Create a MySQL database named `college_management`
   - Import the `database.sql` file:
     ```bash
     mysql -u root -p college_management < database.sql
     ```
   - Or use phpMyAdmin to import the SQL file

3. **Configuration**
   - Update database credentials in `includes/config.php`:
     ```php
     $host = "localhost";
     $username = "root";  // Your MySQL username
     $password = "";      // Your MySQL password
     $database = "college_management";
     ```

4. **Web Server Configuration**
   - Place the project files in your web server's root directory
   - Ensure the `assets/images/` directory is writable for file uploads

5. **Default Admin Credentials**
   - Username: `admin`
   - Password: `admin123`
   - **Important**: Change these credentials after first login

## Directory Structure

```
project-m/
├── admin/                  # Admin panel pages
│   ├── login.php
│   ├── dashboard.php
│   ├── add-subadmin.php
│   ├── manage-subadmins.php
│   ├── add-college.php
│   ├── manage-colleges.php
│   ├── add-faculty.php
│   ├── manage-faculty.php
│   ├── update-profile-pic.php
│   └── logout.php
├── includes/              # Shared components
│   ├── config.php
│   ├── header.php
│   ├── sidebar.php
│   └── footer.php
├── assets/                # Static assets
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
├── index.php             # Home page
├── about.php             # About page
├── faculty.php           # Faculty directory
├── view-faculty-details.php
├── contact.php           # Contact page
├── database.sql          # Database structure
└── README.md            # This file
```

## Usage

### Public Access
- Navigate to the homepage to view faculty and college information
- No login required for public pages

### Admin Access
1. Navigate to `/admin/login.php`
2. Enter admin credentials
3. Access the dashboard to manage the system

### Key Features
- **Faculty Management**: Add, edit, and delete faculty records
- **College Management**: Manage affiliated institutions
- **Sub-Admin Management**: Create administrative accounts with different roles
- **Profile Pictures**: Upload and manage faculty profile images
- **Search Functionality**: Quick search across all management tables

## Security Notes

- Change default admin credentials immediately after installation
- Use HTTPS in production environments
- Implement proper file upload validation
- Regularly update dependencies
- Use prepared statements (already implemented) to prevent SQL injection

## Technologies Used

- **Backend**: PHP 7.0+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 5.3
- **Icons**: Font Awesome 6.4

## Development

### Adding New Features
- Follow the existing directory structure
- Use the shared includes for consistent design
- Implement proper session checks for admin pages
- Follow the established naming conventions

### Database Modifications
- Update the `database.sql` file with any schema changes
- Document any new tables or columns
- Test changes thoroughly before deployment

## Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check `includes/config.php` credentials
   - Ensure MySQL server is running
   - Verify database exists

2. **File Upload Issues**
   - Check `assets/images/` directory permissions
   - Verify PHP upload_max_filesize setting
   - Ensure proper file types are allowed

3. **Session Issues**
   - Check PHP session configuration
   - Verify session_save_path is writable
   - Clear browser cookies if needed

## License

This project is provided as-is for educational purposes.

## Support

For issues and questions, please contact the development team or create an issue in the GitHub repository.

## Credits

Developed as a comprehensive college management solution.
