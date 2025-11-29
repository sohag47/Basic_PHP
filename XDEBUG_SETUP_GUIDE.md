# Xdebug Setup Guide for VS Code

## Current Configuration

- **PHP Version**: 8.2.12 (ZTS Visual C++ 2019 x64)
- **PHP.ini Location**: `C:\xampp\php\php.ini`
- **Extensions Directory**: `C:\xampp\php\ext`

## Step 1: Download Xdebug

1. Visit: https://xdebug.org/download
2. Download the correct version for your PHP:

   - **PHP 8.2** (Thread Safe / ZTS)
   - **VS16 (Visual C++ 2019)**
   - **64-bit**

   Direct link: https://xdebug.org/files/php_xdebug-3.3.2-8.2-vs16-x86_64.dll

3. Save the downloaded DLL as: `C:\xampp\php\ext\php_xdebug.dll`

## Step 2: Configure php.ini

1. Open `C:\xampp\php\php.ini` in a text editor (as Administrator)

2. Add the following lines at the end of the file:

```ini
[xdebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9003
xdebug.client_host = localhost
xdebug.log = "C:\xampp\tmp\xdebug.log"
xdebug.log_level = 7
```

3. Save the file

## Step 3: Restart Apache (if using)

If you're using XAMPP's Apache:

1. Open XAMPP Control Panel
2. Stop Apache
3. Start Apache

## Step 4: Verify Installation

Run in terminal:

```powershell
php -v
```

You should see Xdebug mentioned in the output.

Or check installed modules:

```powershell
php -m | Select-String -Pattern "xdebug"
```

## Step 5: Test Debugging in VS Code

1. Open any PHP file (e.g., `index.php`)
2. Set a breakpoint by clicking on the left margin (a red dot will appear)
3. Press **F5** or go to Run → Start Debugging
4. Select "Listen for Xdebug" or "Launch currently open script"
5. The debugger should pause at your breakpoint

## Quick Install Script

Run this PowerShell script to automate download and configuration:

```powershell
# Download Xdebug
$xdebugUrl = "https://xdebug.org/files/php_xdebug-3.3.2-8.2-vs16-x86_64.dll"
$xdebugPath = "C:\xampp\php\ext\php_xdebug.dll"
Invoke-WebRequest -Uri $xdebugUrl -OutFile $xdebugPath

# Add configuration to php.ini
$phpIni = "C:\xampp\php\php.ini"
$xdebugConfig = @"

[xdebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9003
xdebug.client_host = localhost
xdebug.log = "C:\xampp\tmp\xdebug.log"
xdebug.log_level = 7
"@

Add-Content -Path $phpIni -Value $xdebugConfig

Write-Host "Xdebug installed! Restart Apache and run 'php -v' to verify."
```

## Troubleshooting

### Xdebug not loading

- Verify the DLL file exists at `C:\xampp\php\ext\php_xdebug.dll`
- Check php.ini path with `php --ini`
- Look for errors in `C:\xampp\tmp\xdebug.log`

### Debugger not connecting

- Ensure port 9003 is not blocked by firewall
- Check if Xdebug is enabled: `php -v` should show Xdebug
- Verify VS Code is listening for Xdebug (Debug panel shows "Listen for Xdebug")

### Wrong PHP version

- Make sure VS Code uses the correct PHP: Set `php.executablePath` in settings

## VS Code Launch Configurations

Your `.vscode/launch.json` is already configured with:

- **Listen for Xdebug**: For debugging web applications via browser
- **Launch currently open script**: For debugging CLI scripts directly
- **Launch Built-in web server**: Starts PHP's built-in server with debugging

## Additional Resources

- Xdebug Documentation: https://xdebug.org/docs/
- VS Code PHP Debugging: https://code.visualstudio.com/docs/languages/php
