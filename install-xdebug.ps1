# Xdebug Automated Installation Script for XAMPP
# Run this script as Administrator

Write-Host "=== Xdebug Installation for PHP 8.2 (XAMPP) ===" -ForegroundColor Cyan
Write-Host ""

# Configuration
$xdebugUrl = "https://xdebug.org/files/php_xdebug-3.3.2-8.2-vs16-x86_64.dll"
$xdebugPath = "C:\xampp\php\ext\php_xdebug.dll"
$phpIni = "C:\xampp\php\php.ini"
$xdebugLogPath = "C:\xampp\tmp\xdebug.log"

# Step 1: Download Xdebug
Write-Host "Step 1: Downloading Xdebug..." -ForegroundColor Yellow
try {
    if (Test-Path $xdebugPath) {
        Write-Host "  Xdebug DLL already exists. Backing up..." -ForegroundColor Gray
        Copy-Item $xdebugPath "$xdebugPath.backup" -Force
    }
    
    Invoke-WebRequest -Uri $xdebugUrl -OutFile $xdebugPath -ErrorAction Stop
    Write-Host "  ✓ Downloaded successfully to $xdebugPath" -ForegroundColor Green
} catch {
    Write-Host "  ✗ Failed to download Xdebug: $_" -ForegroundColor Red
    Write-Host "  Please download manually from: $xdebugUrl" -ForegroundColor Red
    exit 1
}

# Step 2: Check if configuration already exists
Write-Host ""
Write-Host "Step 2: Configuring php.ini..." -ForegroundColor Yellow

$iniContent = Get-Content $phpIni -Raw
$xdebugConfigExists = $iniContent -match "zend_extension.*xdebug"

if ($xdebugConfigExists) {
    Write-Host "  ⚠ Xdebug configuration already exists in php.ini" -ForegroundColor Yellow
    Write-Host "  Please manually verify the configuration in: $phpIni" -ForegroundColor Yellow
} else {
    # Add Xdebug configuration
    $xdebugConfig = @"

; ========================================
; Xdebug Configuration for VS Code
; Added by automated script
; ========================================
[xdebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9003
xdebug.client_host = localhost
xdebug.log = "C:\xampp\tmp\xdebug.log"
xdebug.log_level = 7

; Additional useful settings
xdebug.idekey = VSCODE
xdebug.show_error_trace = 1
"@

    try {
        Add-Content -Path $phpIni -Value $xdebugConfig -ErrorAction Stop
        Write-Host "  ✓ Added Xdebug configuration to php.ini" -ForegroundColor Green
    } catch {
        Write-Host "  ✗ Failed to modify php.ini: $_" -ForegroundColor Red
        Write-Host "  You may need to run this script as Administrator" -ForegroundColor Red
        exit 1
    }
}

# Step 3: Create log directory if needed
Write-Host ""
Write-Host "Step 3: Ensuring log directory exists..." -ForegroundColor Yellow
$logDir = Split-Path $xdebugLogPath -Parent
if (-not (Test-Path $logDir)) {
    New-Item -ItemType Directory -Path $logDir -Force | Out-Null
    Write-Host "  ✓ Created log directory: $logDir" -ForegroundColor Green
} else {
    Write-Host "  ✓ Log directory exists: $logDir" -ForegroundColor Green
}

# Step 4: Verify installation
Write-Host ""
Write-Host "Step 4: Verifying installation..." -ForegroundColor Yellow
$phpVersion = & php -v 2>&1
if ($phpVersion -match "Xdebug") {
    Write-Host "  ✓ Xdebug is loaded!" -ForegroundColor Green
    Write-Host ""
    Write-Host $phpVersion -ForegroundColor Gray
} else {
    Write-Host "  ⚠ Xdebug not detected in PHP output" -ForegroundColor Yellow
    Write-Host "  You may need to restart Apache or your terminal" -ForegroundColor Yellow
}

# Step 5: Summary
Write-Host ""
Write-Host "=== Installation Complete ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Next Steps:" -ForegroundColor Yellow
Write-Host "1. If using XAMPP Apache, restart it from XAMPP Control Panel"
Write-Host "2. Verify Xdebug: Run 'php -v' in a new terminal"
Write-Host "3. Open VS Code and press F5 to start debugging"
Write-Host "4. Set breakpoints and debug your PHP code!"
Write-Host ""
Write-Host "Configuration file: $phpIni" -ForegroundColor Gray
Write-Host "Xdebug log file: $xdebugLogPath" -ForegroundColor Gray
Write-Host ""
Write-Host "For detailed instructions, see: XDEBUG_SETUP_GUIDE.md" -ForegroundColor Gray
