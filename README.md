<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Restful API Basic Template</h1>
    <br>
</p>

DIRECTORY STRUCTURE
-------------------

      config/             contains application configurations
      controllers/        contains Web controller classes
      models/             contains model classes
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION (Windows)
------------

### Install PHP

To run this project, you need to have PHP installed on your Windows system. Here's how you can install it:

1. Download PHP for Windows from the official PHP website: https://windows.php.net/download/
2. Choose the appropriate version based on your system architecture (x86 or x64) and download the ZIP package.
3. Extract the contents of the ZIP package to a directory of your choice. For example, you can extract it to `C:\php`.
4. Add the path to the PHP executable (`C:\php`) to your system's PATH environment variable:
   - Right-click on "This PC" or "My Computer" and select "Properties."
   - Click on "Advanced system settings" on the left.
   - Click on the "Environment Variables" button.
   - In the "System variables" section, find the "Path" variable and click "Edit."
   - Add a new entry with the path to your PHP installation directory (e.g., `C:\php`).
   - Click "OK" to close the windows.
5. Open a new command prompt or terminal window and run the command `php -v` to verify that PHP is correctly installed and in your PATH.

### Install Composer

Composer is a dependency management tool that you'll need to manage the project's dependencies. Here's how you can install Composer:

1. Download the Composer Windows Installer from https://getcomposer.org/Composer-Setup.exe.
2. Run the installer and follow the installation instructions.
3. After installation, open a new command prompt or terminal window and run the command `composer --version` to verify that Composer is correctly installed.

### Install Project Dependencies

Now that you have PHP and Composer installed, you can proceed to install the dependencies required by this project:

1. Open a command prompt or terminal window.
2. Navigate to the root directory of the project where the `composer.json` file is located.
3. Run the command `composer install` to install the project's dependencies.
4. Composer will download and install the required packages defined in the `composer.json` file.

### Run Project

To run the project:

1. Open a command prompt or terminal window.
2. Navigate to the root directory of the project.
3. Run the command `php yii serve` to start the PHP development server.
4. You can now use the REST API with endpoint `http://localhost:8080`.

You're now all set to run and explore this Yii 2 Restful API Basic Template on your Windows system.